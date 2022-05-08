import { SelectPicker } from 'rsuite';
import 'rsuite/dist/rsuite.min.css';
import { VFC } from 'react';
import { ItemDataType } from 'rsuite/esm/@types/common';
import i18n from '../../common/translate/i18n';

interface FormAddProps {
    defaultDate: string;
    defaultTimeStart: string;
    defaultTimeEnd: string;
    doctors: ItemDataType<string>[];
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
    doctors,
    onChangeSubject,
    onChangeFullName,
    onChangeDate,
    onChangeTimeStart,
    onChangeTimeEnd,
    onChangeDoctor,
    onChangeDescription
}) => {
    return (
        <>
            <div className="row gy-4">
                <div className="col-md-12">
                    <div className="form-group">
                        <label className="form-label" htmlFor="subject">
                            {i18n.t('admin.calendar.popup.subject')}
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
                            {i18n.t('admin.calendar.popup.fullName')}
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
                            {i18n.t('admin.calendar.popup.date')}
                        </label>
                        <div className="form-control-wrap">
                            <input
                                type="date"
                                className="form-control"
                                name="date"
                                id="date"
                                defaultValue={defaultDate}
                                onChange={e => onChangeDate(e.target.value)}
                            />
                        </div>
                    </div>
                </div>
                <div className="col-md-6">
                    <div className="form-group">
                        <label className="form-label" htmlFor="time-start">
                            {i18n.t('admin.calendar.popup.timeStart')}
                        </label>
                        <div className="form-control-wrap">
                            <input
                                type="time"
                                className="form-control"
                                name="time-start"
                                id="time-start"
                                defaultValue={defaultTimeStart}
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
                            {i18n.t('admin.calendar.popup.timeEnd')}
                        </label>
                        <div className="form-control-wrap">
                            <input
                                type="time"
                                className="form-control"
                                name="time-end"
                                id="time-end"
                                defaultValue={defaultTimeEnd}
                                onChange={e => onChangeTimeEnd(e.target.value)}
                            />
                        </div>
                    </div>
                </div>
                <div className="col-md-6">
                    <div className="form-group">
                        <label className="form-label" htmlFor="doctor">
                            {i18n.t('admin.calendar.popup.doctor')}
                        </label>
                        <div className="form-control-wrap">
                            <SelectPicker
                                data={doctors}
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
                            {i18n.t('admin.calendar.popup.description')}
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
