import { IUser } from "./IUser";

export interface ISession {
    auth_token?: string;
    user?: IUser
    user_id?: number
}