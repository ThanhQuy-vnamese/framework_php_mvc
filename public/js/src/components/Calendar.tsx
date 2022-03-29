import FullCalendar from '@fullcalendar/react';
import timeGridPlugin from '@fullcalendar/timegrid'; // a plugin!
import interactionPlugin from '@fullcalendar/interaction';

export const Calendar = () => {
    const events = [
        {
            title: 'Nguyễn Văn A',
            start: '2022-03-29T10:30:00',
            end: '2022-03-29T11:30:00',
            extendedProps: {
                department: 'BioChemistry'
            },
            description: 'Lecture',
            url: 'google.com'
        }
    ];
    return (
        <FullCalendar
            plugins={[interactionPlugin, timeGridPlugin]}
            initialView="timeGridWeek"
            selectable={true}
            select={() => {
                console.log(123);
            }}
            events={events}
            eventClick={info => {
                info.jsEvent.preventDefault();
                console.log(info.event.start);
            }}
        />
    );
};
