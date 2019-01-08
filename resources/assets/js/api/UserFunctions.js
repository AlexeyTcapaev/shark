import axios from 'axios'

export function loginUser() {

}
export function attachUserToCompany(userId) {

}
export function attachUserToDepartment(members, department,company) {

        return axios
            .post("/api/auth/department/" + department + "/users/attach", {
                id: member.id,
                company:company
            })
}
export function attachUserToChat(userId) {

}
export function detachUserToCompany(userId) {

}
export function detachUserToChat(userId) {

}
export function searchUserInComapny(search, comanySlug) {
    return axios
        .get("/api/auth/search/users", {
            params: {
                search: search,
                company: comanySlug
            }
        });
}
export function searchUser(userId) {

}
export function searchUserInDepartment(userId) {

}
