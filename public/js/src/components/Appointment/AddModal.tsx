import { Button, Modal } from 'react-bootstrap';
import { FormAdd } from './FormAdd';
import { useState, VFC } from 'react';
import { saveCalendar } from '../../pages/appointment/services/services';

interface AddModalProps {
    isShow: boolean;
    onClickClose: () => void;
    defaultDate: string;
    defaultTimeStart: string;
    defaultTimeEnd: string;
}

export const AddModal: VFC<AddModalProps> = ({
    isShow,
    onClickClose,
    defaultDate,
    defaultTimeStart,
    defaultTimeEnd
}) => {
    const [subject, setSubject] = useState('');
    const [fullName, setFullName] = useState('');
    const [date, setDate] = useState('');
    const [timeStart, setTimeStart] = useState('');
    const [timeEnd, setTimeEnd] = useState('');
    const [doctor, setDoctor] = useState('');
    const [description, setDescription] = useState('');

    const onChangeSubject = (subject: string) => {
        setSubject(subject);
    };
    const onChangeFullName = (fullName: string) => {
        setFullName(fullName);
    };
    const onChangeDate = (date: string) => {
        setDate(date);
    };
    const onChangeTimeStart = (timeStart: string) => {
        setTimeStart(timeStart);
    };
    const onChangeTimeEnd = (timeEnd: string) => {
        setTimeEnd(timeEnd);
    };
    const onChangeDoctor = (doctor: string) => {
        setDoctor(doctor);
    };
    const onChangeDescription = (description: string) => {
        setDescription(description);
    };

    const handleOnshow = () => {
        setTimeStart(defaultTimeStart);
        setTimeEnd(defaultTimeEnd);
        setDate(defaultDate);
    };

    const handleSubmit = () => {
        const requestParams = {
            subject,
            fullName,
            date,
            timeStart,
            timeEnd,
            doctorId: doctor,
            description
        };
        saveCalendar(requestParams);
    };

    return (
        <>
            <Modal
                show={isShow}
                size="lg"
                autoFocus={false}
                backdrop={false}
                onShow={() => {
                    document
                        .getElementsByClassName('modal')[0]
                        .removeAttribute('tabindex');
                    handleOnshow();
                }}
            >
                <Modal.Header>
                    <Modal.Title>Add calendar</Modal.Title>
                </Modal.Header>

                <Modal.Body>
                    <FormAdd
                        defaultDate={defaultDate}
                        defaultTimeStart={defaultTimeStart}
                        defaultTimeEnd={defaultTimeEnd}
                        onChangeSubject={onChangeSubject}
                        onChangeFullName={onChangeFullName}
                        onChangeDate={onChangeDate}
                        onChangeTimeStart={onChangeTimeStart}
                        onChangeTimeEnd={onChangeTimeEnd}
                        onChangeDoctor={onChangeDoctor}
                        onChangeDescription={onChangeDescription}
                    />
                </Modal.Body>

                <Modal.Footer>
                    <Button variant="secondary" onClick={() => onClickClose()}>
                        Close
                    </Button>
                    <Button variant="primary" onClick={() => handleSubmit()}>
                        Save changes
                    </Button>
                </Modal.Footer>
            </Modal>
        </>
    );
};
