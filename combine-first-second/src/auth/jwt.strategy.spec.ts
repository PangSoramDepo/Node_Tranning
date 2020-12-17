import { UnauthorizedException } from "@nestjs/common";
import { Test } from "@nestjs/testing";
import { JwtStrategy } from "./jwt.strategy";
import { User } from "./user.entity";
import { UserRepository } from "./user.repository";

const mockUserRepository = () => ({
    findOne: jest.fn()
});

describe('JWT Strategy', () => {
    let jwtStrategy;
    let userRepository;

    beforeEach(async () => {
        const module = await Test.createTestingModule({
            providers: [
                JwtStrategy,
                { provide: UserRepository, useFactory: mockUserRepository },
            ]
        }).compile();

        jwtStrategy = await module.get(JwtStrategy);
        userRepository = await module.get(UserRepository);
    });

    describe('validate', () => {
        it('validate and return the user based on jwt payload', async () => {
            const user = new User();
            user.username = "Depo";

            userRepository.findOne.mockResolvedValue(user);
            const result = await jwtStrategy.validate({ username: "Depo" });
            expect(userRepository.findOne).toHaveBeenCalledWith({ username: "Depo" });
            expect(result).toEqual(user);
        });

        it('Throw an unauthorized exception as user can not be found', () => {
            userRepository.findOne.mockResolvedValue(null);
            expect(jwtStrategy.validate({ username: 'Depo' })).rejects.toThrow(UnauthorizedException);
        });
    });
});