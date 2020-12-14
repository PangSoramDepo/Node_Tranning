import { TypeOrmModuleOptions } from "@nestjs/typeorm";

export const typeOrmConfig : TypeOrmModuleOptions ={
    type: 'postgres',
    host: 'localhost',
    port: 5432,
    username: 'odoo',
    password: 'odoo',
    database: 'nest_js',
    entities: [__dirname+ '/../**/*.entity.js'],
    synchronize: true
};