import { Category } from "~/server/database/modals/marketplace/Category";
import prisma from "~/server/database/client"

export class Application {

    id?: String
    name?: string
    category?: Category
    updated_at: Date
    created_at: Date
    deleted_at: Date

    static async Create(data: Application): Promise<Application> {
        return await prisma.marketplaceApplication.create({
            data: {
                name: data.name
            },
        })
    }

    /////////////////////////////////////////////

    static async GetAll(): Promise<Application[]> {
        return await prisma.marketplaceApplication.findMany({
            include: { category: true },
            orderBy: [{ name: 'asc' }]
        })
    }

    static async GetById(cuid: string): Promise<Application> {
        return await prisma.marketplaceApplication.findUnique({
            where: { id: cuid },
            include: { category: true },
        })
    }
    
    /////////////////////////////////////////////

}