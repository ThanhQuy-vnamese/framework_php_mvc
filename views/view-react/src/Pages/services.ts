import axios from "axios";

export const getUser = (setUsers: any) => {
    axios.get(`${process.env.REACT_APP_PREFIX_API}api/users`, {
        responseType: 'json'
    }).then((result) => {
        setUsers(result.data);
    }).catch(() => {
        console.log('error');
    });
}