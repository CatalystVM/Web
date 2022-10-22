import prisma from "~/server/database/client"
import { IUser } from '~/types/IUser'

export async function GetUserById(id: string): Promise <IUser> {
    return await prisma.user.findUnique({
        where: { id: id },
        select: {
            id: true,
            email: true,
        },
    })
}

export async function GetUserByEmail(emailOrEmail: string): Promise <IUser> {
    return await prisma.user.findFirst({
        where: {
            OR: [{ email: emailOrEmail }, { username: emailOrEmail }]
        },
        select: {
            id: true,
            password: true
        },
    })
}

export async function CreateUser(data: IUser) {
    const user = await prisma.user.create({
        data: {
            email: data.email,
            login_type: data.login_type,
            password: data.password,
        },
    })

    return user
}