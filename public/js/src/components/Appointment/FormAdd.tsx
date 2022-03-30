import { SelectPicker } from 'rsuite';
import 'rsuite/dist/rsuite.min.css';
import { VFC } from 'react';

interface FormAddProps {
    defaultDate: string;
    defaultTimeStart: string;
    defaultTimeEnd: string;
    onChangeSubject: (subject: string) => void;
    onChangeFullName: (fullName: string) => void;
    onChangeDate: (date: string) => void;
    onChangeTimeStart: (timeStart: string) => void;
    onChangeTimeEnd: (timeEnd: string) => void;
    onChangeDoctor: (doctor: string) => void;
    onChangeDescription: (description: string) => void;
}

export const FormAdd: VFC<FormAddProps> = ({
    defaultDate,
    defaultTimeStart,
    defaultTimeEnd,
    onChangeSubject,
    onChangeFullName,
    onChangeDate,
    onChangeTimeStart,
    onChangeTimeEnd,
    onChangeDoctor,
    onChangeDescription
}) => {
    const users = [
        {
            label: 'Eugenia',
            value: '1',
            role: 'Master'
        },
        {
            label: 'Kariane',
            value: '2',
            role: 'Master'
        }
    ];

    return (
        <>
            <div className="row gy-4">
                <div className="col-md-12">
                    <div className="form-group">
                        <label className="form-label" htmlFor="subject">
                            Subject
                        </label>
                        <div className="form-control-wrap">
                            <input
                                type="text"
                                className="form-control"
                                name="subject"
                                id="subject"
                                onChange={e => onChangeSubject(e.target.value)}
                            />
                        </div>
                    </div>
                </div>
                <div className="col-md-6">
                    <div className="form-group">
                        <label className="form-label" htmlFor="full-name">
                            Full name
                        </label>
                        <div className="form-control-wrap">
                            <input
                                type="text"
                                className="form-control"
                                name="full-name"
                                id="full-name"
                                onChange={e => onChangeFullName(e.target.value)}
                            />
                        </div>
                    </div>
                </div>
                <div className="col-md-6">
                    <div className="form-group">
                        <label className="form-label" htmlFor="date">
                            Date
                        </label>
                        <div className="form-control-wrap">
                            <input
                                type="date"
                                className="form-control"
                                name="date"
                                id="date"
                                value={defaultDate}
                                onChange={e => onChangeDate(e.target.value)}
                            />
                        </div>
                    </div>
                </div>
                <div className="col-md-6">
                    <div className="form-group">
                        <label className="form-label" htmlFor="time-start">
                            Time start
                        </label>
                        <div className="form-control-wrap">
                            <input
                                type="time"
                                className="form-control"
                                name="time-start"
                                id="time-start"
                                value={defaultTimeStart}
                                onChange={e =>
                                    onChangeTimeStart(e.target.value)
                                }
                            />
                        </div>
                    </div>
                </div>
                <div className="col-md-6">
                    <div className="form-group">
                        <label className="form-label" htmlFor="time-end">
                            Time end
                        </label>
                        <div className="form-control-wrap">
                            <input
                                type="time"
                                className="form-control"
                                name="time-end"
                                id="time-end"
                                value={defaultTimeEnd}
                                onChange={e => onChangeTimeEnd(e.target.value)}
                            />
                        </div>
                    </div>
                </div>
                <div className="col-md-6">
                    <div className="form-group">
                        <label className="form-label" htmlFor="doctor">
                            Doctor
                        </label>
                        <div className="form-control-wrap">
                            <SelectPicker
                                data={users}
                                style={{ width: 250 }}
                                menuStyle={{
                                    zIndex: 10000
                                }}
                                onChange={(value: string) =>
                                    onChangeDoctor(value)
                                }
                            />
                        </div>
                    </div>
                </div>
                <div className="col-md-12">
                    <div className="form-group">
                        <label className="form-label" htmlFor="description">
                            Description
                        </label>
                        <div className="form-control-wrap">
                            <textarea
                                className="form-control"
                                name="description"
                                id="description"
                                onChange={e =>
                                    onChangeDescription(e.target.value)
                                }
                            />
                        </div>
                    </div>
                </div>
            </div>
        </>
    );
};
