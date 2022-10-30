import { IUser } from "~/server/database/modals/User";

export interface ISession {
    auth_token?: string;
    user?: IUser
    user_id?: number
}