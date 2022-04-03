import { SelectPicker } from 'rsuite';
import 'rsuite/dist/rsuite.min.css';
import { VFC } from 'react';
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
