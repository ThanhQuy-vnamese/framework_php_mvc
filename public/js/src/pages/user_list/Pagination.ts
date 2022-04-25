import ReactDOM from 'react-dom';
import { PaginatedItems } from './PaginatedItems';
import React from 'react';

export class Pagination {
    render() {
        ReactDOM.render(
            React.createElement(PaginatedItems, {
                itemsPerPage: 10
            }),
            document.getElementById('pagination')
        );
    }
}
