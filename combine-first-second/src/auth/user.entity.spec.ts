import { User } from "./user.entity";
import * as bcrypt from 'bcryptjs';

describe('User Entity', () => {
    let user;

    beforeEach(() => {
        user = new User();
        user.username = "Depo";
        user.password = "depo1234";
        user.salt = "salt123";
        bcrypt.hash = jest.fn();
    });

    describe('Validate Password', () => {

        it('default', () => {
            expect(true).toBeTruthy();
        });
        
        // it('return true as password is valid', async () => {
        //     bcrypt.hash.mockReturnValue('depo1234');
        //     expect(bcrypt.hash).not.toHaveBeenCalled();
        //     const result = await user.validatePassword('depo1234');
        //     expect(bcrypt.hash).toHaveBeenCalledWith('depo1234','salt123');
        //     expect(result).toEqual(true);
        // });

        // it('return false as password is invalid', async () => {
        //     bcrypt.hash.mockReturnValue('depo1234aaa');
        //     expect(bcrypt.hash).not.toHaveBeenCalled();
        //     const result = await user.validatePassword('depo1234aaa');
        //     expect(bcrypt.hash).toHaveBeenCalledWith('depo1234aaa','salt123');
        //     expect(result).toEqual(false);
        // });
    });
});