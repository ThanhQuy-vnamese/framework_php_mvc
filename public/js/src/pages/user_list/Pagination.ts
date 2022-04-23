import ReactDOM from 'react-dom';
import { PaginatedItems } from './PaginatedItems';
import React from 'react';

export class Pagination {
    render() {
        ReactDOM.render(
            React.createElement(PaginatedItems, {
                itemsPerPage: 4
            }),
            document.getElementById('pagination')
        );
    }
}
