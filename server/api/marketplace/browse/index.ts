import { GetAllCategories } from '~/server/database/repositories/marketplaceRespository'

export default defineEventHandler(async (event) => {
    return GetAllCategories();
})