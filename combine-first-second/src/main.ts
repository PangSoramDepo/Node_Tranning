import { NestFactory } from '@nestjs/core';
import { AppModule } from './app.module';
import * as  config from 'config';
import { Logger } from '@nestjs/common';

async function bootstrap() {
  const serverConfig = config.get('server');
  const logger = new Logger('bootstrap');
  const port = process.env.PORT || serverConfig.port;

  const app = await NestFactory.create(AppModule);
  if(process.env.NODE_ENV === 'development')
    app.enableCors();
  else
    app.enableCors({ origin: serverConfig.origin });
  await app.listen(port);
  logger.log(`Application listen on port ${port}`);
}
bootstrap();
