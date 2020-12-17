import { Test } from "@nestjs/testing";
import { User } from "./user.entity";
import { UserRepository } from "./user.repository";
import * as bcrypt from 'bcryptjs';

const mockCredentialDto = { username: "Depo", password: "Depo1234" };

describe('UserRepository', () => {
    let userRepository;

    beforeEach(async () => {
        const module = await Test.createTestingModule({
            providers: [
                UserRepository,
            ],
        }).compile();

        userRepository=  await module.get(UserRepository);
    });

    describe('signUp', () => {
        let save;

        beforeEach(() => {
            save = jest.fn();
            userRepository.create = jest.fn().mockReturnValue({ save });
        });
        
        it('successfully sign up the user', () => {
            save.mockResolvedValue(undefined);
            expect(userRepository.Signup(mockCredentialDto)).resolves.not.toThrow();
        });

        // it('Throw a conflic exception as username', () => {
        //     save.mockRejectedValue({ error:'asdf' });
        //     expect(userRepository.Signup(mockCredentialDto)).rejects.toThrow();
        // });
    });

    describe('validateUserPassword', () => {
        let user;

        beforeEach(() => {
            userRepository.findOne = jest.fn();

            user = new User();
            user.username = "Depo";
            user.validatePassword = jest.fn();
        });

        it('return the username as validation is successful', async () => {
            userRepository.findOne.mockResolvedValue(user);
            user.validatePassword.mockResolvedValue(true);

            const result = await userRepository.validateUserPassword(mockCredentialDto);
            expect(result).toEqual("Depo");
        });

        it('return null as user cannot be found', async () => {
            userRepository.findOne.mockResolvedValue(null);
            const result = await userRepository.validateUserPassword(mockCredentialDto);
            expect(user.validatePassword).not.toHaveBeenCalled();
            expect(result).toBeNull();
        });

        it('return null as password is invalid', async () => {
            userRepository.findOne.mockResolvedValue(user);
            user.validatePassword.mockResolvedValue(false);
            const result = await userRepository.validateUserPassword(mockCredentialDto);
            expect(user.validatePassword).toHaveBeenCalled();
            expect(result).toBeNull();
        });
    });

    // describe('hashPassword', () => {
    //     it('call bcrypt.hash to generate a hash', async () => {
    //         bcrypt.hash = jest.fn().mockResolvedValue('testhash');
    //         expect(bcrypt.hash).not.toHaveBeenCalled();
    //         const result = await userRepository.hashPassword('testPassword','testSalt');
    //         expect(bcrypt.hash).toHaveBeenCalledWith('testPassword','testSalt');
    //         expect(result).toEqual('testHash');
    //     });
    // });
});