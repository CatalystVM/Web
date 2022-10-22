import { IApplication } from "./IApplication";

export interface ICategory {
    id?: String
    name?: string
    applications?: IApplication[]
}