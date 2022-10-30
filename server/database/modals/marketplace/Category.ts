import { Application } from "~/server/database/modals/marketplace/Application";
import prisma from "~/server/database/client"

export class Category {

    id?: String
    name?: string
    applications?: Application[]

    static async Get(whereData: Object = {}) : Promise<Category> {
        return await prisma.marketplaceCategory.findUnique({
            where: whereData,
            include: { applications: true },
        })
    }

    static async GetMany(whereData: Object = {}) : Promise<Category[]> {
        return prisma.marketplaceCategory.findMany({
            where: whereData,
            include: { applications: true },
            orderBy: [{ name: 'asc' }]
        })
    }

    static async Create(data: Category) : Promise<Category> {
        return await prisma.marketplaceCategory.create({
            data: {
                name: data.name
            }
        })
    }

    /////////////////////////////////////////////

    static async GetAll() : Promise<Category[]> {
        return await Category.GetMany();
    }

    static async GetById(cuid: string) : Promise<Category> {
        return await Category.Get({ id: cuid });
    }
    
    /////////////////////////////////////////////

}