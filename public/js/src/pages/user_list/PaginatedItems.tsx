import { useEffect, useState } from 'react';
import ReactPaginate from 'react-paginate';
import { getTotalUser } from './service/services';

interface OnChangeSelectedEvent {
    selected: number;
}

export const PaginatedItems = ({ itemsPerPage }: { itemsPerPage: number }) => {
    const [pageCount, setPageCount] = useState(0);
    const [total, setTotal] = useState(0);

    useEffect(() => {
        getTotalUser().then(response => {
            setTotal(response.data.total);
            setPageCount(Math.ceil(response.data.total / itemsPerPage));
        });
    }, [itemsPerPage]);

    const handlePageClick = (event: OnChangeSelectedEvent) => {
        const newOffset = (event.selected * itemsPerPage) % total;
        window.location.replace(
            `/admin/user-list?page=${event.selected + 1}&offset=${newOffset}`
        );
    };

    const currenPage = () => {
        const currentUrl = window.location.href;
        const url = new URL(currentUrl);
        const pageNumber = url.searchParams.get('page') ?? '1';
        return parseInt(pageNumber) - 1;
    };

    return (
        <>
            <ReactPaginate
                breakLabel="..."
                nextLabel="Next >"
                previousLabel="< Previous"
                pageClassName="page-item"
                pageLinkClassName="page-link"
                previousClassName="page-item"
                previousLinkClassName="page-link"
                nextClassName="page-item"
                nextLinkClassName="page-link"
                breakClassName="page-item"
                breakLinkClassName="page-link"
                containerClassName="pagination"
                activeClassName="active"
                onPageChange={handlePageClick}
                pageRangeDisplayed={5}
                pageCount={pageCount}
                renderOnZeroPageCount={undefined}
                disableInitialCallback={true}
                initialPage={currenPage()}
            />
        </>
    );
};
