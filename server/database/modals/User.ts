import prisma from "~/server/database/client"

export interface IUser {
    id?: number
    login_type?: string
    email?: string
    password?: string 
}

export class User implements IUser {

    static async Get(whereData: Object = {}) : Promise<User> {
        return await prisma.user.findUnique({
            where: whereData
        })
    }

    static async GetMany(whereData: Object = {}, selectData: Object = {}) : Promise<User[]> {
        return await prisma.user.findMany({
            where: whereData,
            orderBy: [{ name: 'asc' }]
        })
    }

    static async Create(data: IUser) : Promise<User> {
        return await prisma.user.create({
            data: {
                email: data.email,
                login_type: data.login_type,
                password: data.password,
            },
        })
    }

    /////////////////////////////////////////////

    static async GetById(cuid: string) : Promise<User> {
        return await User.Get({ id: cuid });
    }

    static async GetByEmail(email: string) : Promise<User> {
        return await User.Get({ email: email });;
    }
    
    /////////////////////////////////////////////



}