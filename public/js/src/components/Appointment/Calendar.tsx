import FullCalendar from '@fullcalendar/react';
import timeGridPlugin from '@fullcalendar/timegrid'; // a plugin!
import interactionPlugin from '@fullcalendar/interaction';
import { useEffect, useRef, useState } from 'react';
import { AddModal } from './AddModal';
import {
    getCalendar,
    GetCalendarResponse,
    getDoctor
} from '../../pages/appointment/services/services';
import { ItemDataType } from 'rsuite/esm/@types/common';
import { ToastContainer } from 'react-toastify';

export const Calendar = () => {
    const [isShow, setIsShow] = useState(false);
    const [events, setEvents] = useState<GetCalendarResponse[]>([]);
    const [date, setDate] = useState('');
    const [timeStart, setTimeStart] = useState('');
    const [timeEnd, setTimeEnd] = useState('');
    const [doctors, setDoctors] = useState<ItemDataType<string>[]>([]);
    const testRef = useRef(null);

    useEffect(() => {
        const response = getDoctor();
        response.then(result => {
            setDoctors(result.data);
        });
        const eventResponse = getCalendar();
        eventResponse.then(result => {
            setEvents(result.data);
        });
    }, []);

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

    // TODO: Implement
    const test = () => {
        // eslint-disable-next-line @typescript-eslint/ban-ts-comment
        // @ts-ignore
        testRef.current.getApi().gotoDate('2022-03-20');
    };

    return (
        <>
            <FullCalendar
                plugins={[interactionPlugin, timeGridPlugin]}
                initialView="timeGridWeek"
                slotMinTime="06:00:00"
                slotMaxTime="19:00:00"
                height={900}
                nowIndicator={true}
                selectable={true}
                ref={testRef}
                customButtons={{
                    myCustomButton: {
                        text: 'custom!',
                        click: () => {
                            test();
                        }
                    }
                }}
                headerToolbar={{
                    left: 'prev,next today myCustomButton',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
                }}
                select={info => {
                    handleSelect(info.startStr, info.endStr);
                    handleShowModal();
                }}
                events={events}
                eventClick={info => {
                    info.jsEvent.preventDefault();
                    console.log(info.event);
                }}
            />
            {isShow && (
                <AddModal
                    isShow={isShow}
                    doctors={doctors}
                    onClickClose={handleOffModal}
                    handleSetEvent={setEvents}
                    defaultDate={date}
                    defaultTimeStart={timeStart}
                    defaultTimeEnd={timeEnd}
                />
            )}
            <ToastContainer autoClose={2000} />
        </>
    );
};
