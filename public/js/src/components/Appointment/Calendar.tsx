import FullCalendar from '@fullcalendar/react';
import timeGridPlugin from '@fullcalendar/timegrid'; // a plugin!
import interactionPlugin from '@fullcalendar/interaction';
import { useEffect, useState } from 'react';
import { AddModal } from './AddModal';
import { getDoctor } from '../../pages/appointment/services/services';
import { ItemDataType } from 'rsuite/esm/@types/common';
import { ToastContainer } from 'react-toastify';

export const Calendar = () => {
    const [isShow, setIsShow] = useState(false);
    const [date, setDate] = useState('');
    const [timeStart, setTimeStart] = useState('');
    const [timeEnd, setTimeEnd] = useState('');
    const [doctors, setDoctors] = useState<ItemDataType<string>[]>([]);

    useEffect(() => {
        const response = getDoctor();
        response.then(result => {
            setDoctors(result.data);
        });
    }, []);

    const events = [
        {
            title: 'Nguyễn Văn A',
            start: '2022-03-29T10:30:00',
            end: '2022-03-29T11:30:00',
            extendedProps: {
                department: 'BioChemistry'
            },
            description: 'Lecture',
            url: 'google.com',
            backgroundColor: 'red'
        }
    ];
    const handleShowModal = () => {
        setIsShow(true);
    };

    const handleOffModal = () => {
        setIsShow(false);
    };

    const handleSelect = (startStr: string, endStr: string) => {
        const startArr = startStr.split('T');
        const timeStart = startArr[1].split('+');
        const endArr = endStr.split('T');
        const timeEnd = endArr[1].split('+');
        setDate(startArr[0]);
        setTimeStart(timeStart[0]);
        setTimeEnd(timeEnd[0]);
    };

    return (
        <>
            <FullCalendar
                plugins={[interactionPlugin, timeGridPlugin]}
                initialView="timeGridWeek"
                selectable={true}
                select={info => {
                    handleSelect(info.startStr, info.endStr);
                    handleShowModal();
                }}
                events={events}
                eventClick={info => {
                    info.jsEvent.preventDefault();
                    console.log(info.event.start);
                }}
            />
            {isShow && (
                <AddModal
                    isShow={isShow}
                    doctors={doctors}
                    onClickClose={handleOffModal}
                    defaultDate={date}
                    defaultTimeStart={timeStart}
                    defaultTimeEnd={timeEnd}
                />
            )}
            <ToastContainer autoClose={2000} />
        </>
    );
};
