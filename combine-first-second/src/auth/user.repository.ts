import { ConflictException, Logger } from "@nestjs/common";
import { EntityRepository, Repository } from "typeorm";
import { AuthCredentialDto } from "./dto/auth-credential.dto";
import { User } from "./user.entity";
import * as bcrypt from 'bcrypt';

@EntityRepository(User)
export class UserRepository extends Repository<User>{

    private logger = new Logger('AuthController');

    async Signup(authCredentialDto: AuthCredentialDto) : Promise<void>{
        const { username, password } = authCredentialDto;

        const user = new User();
        user.username = username;
        user.salt = await bcrypt.genSalt();
        user.password = await this.hashPassword(password,user.salt);
        
        try {
            await user.save();
        } catch (error) {
            console.log(`Error: ${error}`);
            this.logger.error(`Fail to create user with AuthCredentialDTO ${JSON.stringify(authCredentialDto)}`,error.stack);
            throw new ConflictException(error.message);
        }
    }

    async validateUserPassword(authCredentialDto: AuthCredentialDto){
        const { username, password } = authCredentialDto;
        const user = await this.findOne({ username });

        if(user && await user.validatePassword(password))
            return user.username;
        return null;
    }

    private async hashPassword(password: string, salt: string): Promise<string> {
        return bcrypt.hash(password, salt);
    }
}