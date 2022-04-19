import axios from 'axios';

export const getHealth = (healthId: string) => {
    return axios.get(`/admin/ajax-get-prescription?id=${healthId}`);
};
