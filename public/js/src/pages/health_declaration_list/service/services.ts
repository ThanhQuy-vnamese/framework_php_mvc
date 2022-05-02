import axios from 'axios';

export const getTotalHealthDeclaration = () => {
    return axios.get('/admin/ajax/get-total-health-declaration');
};
