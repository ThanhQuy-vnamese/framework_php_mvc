import { SelectPicker } from 'rsuite';
import 'rsuite/dist/rsuite.min.css';
import { ReactNode, VFC } from 'react';
import { ItemDataType } from 'rsuite/esm/@types/common';

export interface Doctors extends ItemDataType {
    label: string;
    value: string;
    role: string;
}

interface SelectDoctorProps {
    doctors: Doctors[];
    selected: string;
}

export const selectDoctor: VFC<SelectDoctorProps> = ({ doctors, selected }) => {
    return (
        <>
            <SelectPicker
                onChange={value => {
                    // eslint-disable-next-line @typescript-eslint/ban-ts-comment
                    // @ts-ignore
                    document
                        .getElementById('current-doctor-id')
                        .setAttribute(
                            'value',
                            value !== null ? value.toString() : ''
                        );
                }}
                data={doctors}
                defaultValue={selected}
                style={{ width: 250 }}
                menuStyle={{
                    zIndex: 10000
                }}
            />
        </>
    );
};
