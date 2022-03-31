import axios from 'axios';

interface SaveCalendarRequestParams {
    subject: string;
    fullName: string;
    date: string;
    timeStart: string;
    timeEnd: string;
    doctorId: string;
    description: string;
}

export const saveCalendar = (params: SaveCalendarRequestParams) => {
    return axios.post('/admin/ajax/add-calendar', {
        ...params
    });
};

export const getDoctor = async () => {
    return await axios.get('/admin/ajax/get-doctor');
};

export const getCalendar = async () => {
    return await axios.get('/admin/ajax/get-calendar');
};
