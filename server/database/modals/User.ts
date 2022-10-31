import { PrismaClient } from "@prisma/client"
import prisma from "~/server/database/client"

export class User {

    id?: string
    login_type?: string
    email?: string
    password?: string 
    updated_at: Date
    created_at: Date
    deleted_at: Date

    static async Create(data: User) : Promise<User> {
        return await prisma.user.create({
            data: {
                email: data.email,
                login_type: data.login_type,
                password: data.password,
            },
        })
    }

    /////////////////////////////////////////////

    static async GetAll(cuid: string) : Promise<User[]> {
        return await prisma.user.findMany();
    }

    static async GetById(cuid: string) : Promise<User> {
        return await prisma.user.findUnique({
            where: { id: cuid }
        });
    }

    static async GetByEmail(email: string) : Promise<User> {
        return await prisma.user.findUnique({
            where: { email: email }
        });
    }
    
    /////////////////////////////////////////////



}