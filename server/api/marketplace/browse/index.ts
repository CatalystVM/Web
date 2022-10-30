import { Category } from '~/server/database/modals/marketplace/Category'

export default defineEventHandler(async (event) => {
    return await Category.GetAll();
})