import { IApplication } from "~/server/database/modals/marketplace/Application";
import prisma from "~/server/database/client"

export interface ICategory {
    id?: String
    name?: string
    applications?: IApplication[]
}

export class Category implements ICategory {

    static async Get(whereData: Object = {}) : Promise<Category> {
        return await prisma.MarketplaceCategory.findUnique({
            where: whereData,
            include: { applications: true },
        })
    }

    static async GetMany(whereData: Object = {}) : Promise<Category[]> {
        return prisma.MarketplaceCategory.findMany({
            where: whereData,
            include: { applications: true },
            orderBy: [{ name: 'asc' }]
        })
    }

    static async Create(data: ICategory) : Promise<Category> {
        return await prisma.MarketplaceCategory.create({
            data: {
                name: data.name
            },
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