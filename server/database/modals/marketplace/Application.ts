import { ICategory } from "~/server/database/modals/marketplace/Category";
import prisma from "~/server/database/client"

export interface IApplication {
    id?: String
    name?: string
    category?: ICategory
}

export class Application implements IApplication {

    static async Get(whereData: Object = {}): Promise<Application> {
        return await prisma.MarketplaceApplication.findUnique({
            where: whereData,
            include: { category: true },
        })
    }

    static async GetMany(whereData: Object = {}): Promise<Application[]> {
        return await prisma.MarketplaceApplication.findMany({
            where: whereData,
            include: { category: true },
            orderBy: [{ name: 'asc' }]
        })
    }

    static async Create(data: IApplication): Promise<Application> {
        return await prisma.MarketplaceApplication.create({
            data: {
                name: data.name
            },
        })
    }

    /////////////////////////////////////////////

    static async GetAll(): Promise<Application[]> {
        return await Application.GetMany();
    }

    static async GetById(cuid: string): Promise<Application> {
        return await Application.Get({ id: cuid });
    }
    
    /////////////////////////////////////////////

}