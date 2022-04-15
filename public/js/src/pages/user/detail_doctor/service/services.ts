import axios from 'axios';

export const getCalendarDoctor = (doctorId: number) => {
    return axios.get(`/user/ajax/get-doctor-calendar?id=${doctorId}`);
};
