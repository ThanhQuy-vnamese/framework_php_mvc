import ReactDOM from 'react-dom';
import React from 'react';
import { Paginated } from '../../components/Pagination/Paginated';
import { getTotalHealthDeclaration } from './service/services';

export default class HealthDeclarationList {
    private renderPagination() {
        ReactDOM.render(
            React.createElement(Paginated, {
                itemsPerPage: 10,
                path: '/admin/health-declaration-list',
                service: getTotalHealthDeclaration
            }),
            document.getElementById('pagination')
        );
    }

    public render() {
        this.renderPagination();
    }
}
