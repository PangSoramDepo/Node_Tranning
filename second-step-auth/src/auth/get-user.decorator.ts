import { createParamDecorator } from "@nestjs/common";

export const GetUser = createParamDecorator((data,req) =>{
    console.log("Data :",data);
    console.log("Req: ",req);
    return req.user;
});