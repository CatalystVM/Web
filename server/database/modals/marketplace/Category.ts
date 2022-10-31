import { Application } from "~/server/database/modals/marketplace/Application";
import prisma from "~/server/database/client"

export class Category {

    id?: String
    name?: string
    applications?: Application[]
    updated_at: Date
    created_at: Date
    deleted_at: Date

    static async Create(data: Category) : Promise<Category> {
        return await prisma.marketplaceCategory.create({
            data: {
                name: data.name
            }
        })
    }

    /////////////////////////////////////////////

    static async GetAll(): Promise<Category[]> {
        return await prisma.marketplaceCategory.findMany({
            include: { applications: true },
            orderBy: [{ name: 'asc' }]
        })
    }

    static async GetById(cuid: string): Promise<Category> {
        return await prisma.marketplaceCategory.findUnique({
            where: { id: cuid },
            include: { applications: true },
        })
    }
    
    /////////////////////////////////////////////

}