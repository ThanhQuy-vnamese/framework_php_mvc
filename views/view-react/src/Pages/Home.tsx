import {Item, ListGroup} from "../components/ListGroup";
import React, {useEffect, useState} from "react";
import {getUser} from "./services";

export const Home = () => {
    const [users, setUsers] = useState<Item[]>([]);

    useEffect(() => {
        getUser(setUsers);
    }, []);

    return(
        <>
            <h1 className="display-1">Display 1</h1>
            <ListGroup items={users}/>
        </>
    )
}