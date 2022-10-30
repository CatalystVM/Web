import { Category } from "~/server/database/modals/marketplace/Category";
import prisma from "~/server/database/client"

export class Application {

    id?: String
    name?: string
    category?: Category

    static async Get(whereData: Object = {}): Promise<Application> {
        return await prisma.marketplaceApplication.findUnique({
            where: whereData,
            include: { category: true },
        })
    }

    static async GetMany(whereData: Object = {}): Promise<Application[]> {
        return await prisma.marketplaceApplication.findMany({
            where: whereData,
            include: { category: true },
            orderBy: [{ name: 'asc' }]
        })
    }

    static async Create(data: Application): Promise<Application> {
        return await prisma.marketplaceApplication.create({
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