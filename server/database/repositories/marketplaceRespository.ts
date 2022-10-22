import prisma from "~/server/database/client"
import { IApplication } from '~/types/marketplace/IApplication'
import { ICategory } from '~/types/marketplace/ICategory'

///////////////////////////////////

export async function GetAllApplications(): Promise <IApplication[]> {
    return await prisma.MarketplaceApplication.findMany({
        include: { category: true },
        orderBy: [{ name: 'asc' }]
    })
}

export async function GetApplicationById(cuid: String): Promise <IApplication> {
    return await prisma.MarketplaceApplication.findFirst({
        where: { id: cuid },
        include: { category: true },
    })
}

///////////////////////////////////

export async function GetAllCategories(): Promise <ICategory[]> {
    return await prisma.MarketplaceCategory.findMany({
        include: { applications: true },
        orderBy: [{ name: 'asc' }]
    })
}

export async function GetCategoryById(cuid: String): Promise <ICategory> {
    return await prisma.MarketplaceCategory.findFirst({
        where: { id: cuid },
        include: { applications: true }
    })
}