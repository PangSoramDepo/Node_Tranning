import { TypeOrmModuleOptions } from "@nestjs/typeorm";

export const typeOrmConfig : TypeOrmModuleOptions ={
    type: 'postgres',
    host: 'localhost',
    port: 5432,
    username: 'odoo',
    password: 'odoo',
    database: 'first_step',
    entities: [__dirname+ '/../**/*.entity.js'],
    synchronize: true
};