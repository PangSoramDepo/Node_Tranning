import { Body, Controller, Get, Logger, Post, Req, UseGuards, UsePipes, ValidationPipe } from '@nestjs/common';
import { AuthGuard } from '@nestjs/passport';
import { AuthService } from './auth.service';
import { AuthCredentialDto } from './dto/auth-credential.dto';
import { GetUser } from './get-user.decorator';
import { User } from './user.entity';

@Controller('auth')
export class AuthController {

    private logger = new Logger('AuthController');

    constructor(private authService: AuthService){}

    @Post('/signup')
    signUp(@Body(ValidationPipe) authCredentialDto : AuthCredentialDto) : Promise<void>  {
        this.logger.log(`User Sign Up with DTO: ${JSON.stringify(authCredentialDto)}`);
        return this.authService.signUp(authCredentialDto);
    }

    @Post('/signin')
    signIn(@Body(ValidationPipe) authCredentialDto : AuthCredentialDto) : Promise<{ accessToken: string}>  {
        return this.authService.signIn(authCredentialDto);
    }

    @Get('/test')
    @UseGuards(AuthGuard())
    test(@GetUser() user: User){
        console.log(user);
        return "Hi";
    }
}
