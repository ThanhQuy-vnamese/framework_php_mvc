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
    axios
        .post('/admin/ajax/add-calendar', {
            ...params
        })
        .then(function (response) {
            console.log(response);
        })
        .catch(function (error) {
            console.log(error);
        });
};
