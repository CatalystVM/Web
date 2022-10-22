import { GetCategoryById } from '~/server/database/repositories/marketplaceRespository'

export default defineEventHandler(async (event) => {
    const category_id = event.context.params.category
    const c = await GetCategoryById(category_id)
    return c;
})