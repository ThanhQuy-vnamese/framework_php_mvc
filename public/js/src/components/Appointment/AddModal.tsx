import { Button, Modal } from 'react-bootstrap';
import { FormAdd } from './FormAdd';
import { useState, VFC } from 'react';

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
        console.log(subject);
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
        console.log(timeEnd);
    };
    const onChangeDoctor = (doctor: string) => {
        setDoctor(doctor);
        console.log(doctor);
    };
    const onChangeDescription = (description: string) => {
        setDescription(description);
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
                    <Button variant="primary">Save changes</Button>
                </Modal.Footer>
            </Modal>
        </>
    );
};
