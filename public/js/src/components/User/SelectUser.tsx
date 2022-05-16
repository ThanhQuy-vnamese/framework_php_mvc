import { SelectPicker } from 'rsuite';
import 'rsuite/dist/rsuite.min.css';
import { VFC } from 'react';
import { ItemDataType } from 'rsuite/esm/@types/common';

export interface User extends ItemDataType {
    label: string;
    value: string;
    role: string;
}

interface SelectDoctorProps {
    users: User[];
    selected?: string;
    onChange: (id: string) => void;
}

export const SelectUser: VFC<SelectDoctorProps> = ({
    users,
    selected = undefined,
    onChange
}) => {
    return (
        <>
            <SelectPicker
                onChange={value => {
                    onChange(value.toString());
                }}
                data={users}
                defaultValue={selected}
                style={{ width: 250 }}
                menuStyle={{
                    zIndex: 10000
                }}
            />
        </>
    );
};
