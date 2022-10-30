import { Category } from '~/server/database/modals/marketplace/Category'

export default defineEventHandler(async (event) => {
    const category_id = event.context.params.category
    const c = await Category.GetById(category_id)
    return c;
})