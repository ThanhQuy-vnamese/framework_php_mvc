import axios from 'axios';

export const getUser = async () => {
    const url = '/api/users';

    const response = await axios.get(url, {
        responseType: 'json'
    });
    return response.data;
};
