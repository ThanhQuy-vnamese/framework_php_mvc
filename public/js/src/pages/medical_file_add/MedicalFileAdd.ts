import { User } from '../../components/User/SelectUser';
import { getAllUser } from './services/services';
import ReactDOM from 'react-dom';
import React from 'react';
import { selectDoctor } from '../../components/Appointment/SelectDoctor';

const SELECTOR_USER_ID_INPUT = '#user-id';

export class MedicalFileAdd {
    private users!: User[];

    private async fetchDoctors() {
        await getAllUser().then(result => {
            this.users = result.data;
        });
    }

    private onChangeSelectDoctor(id: string) {
        $(SELECTOR_USER_ID_INPUT).prop('value', id);
    }

    private renderSelectPicker() {
        ReactDOM.render(
            React.createElement(selectDoctor, {
                doctors: this.users,
                onChange: this.onChangeSelectDoctor
            }),
            document.getElementById('select-user')
        );
    }

    render() {
        this.fetchDoctors().then(() => {
            this.renderSelectPicker();
        });
    }
}
