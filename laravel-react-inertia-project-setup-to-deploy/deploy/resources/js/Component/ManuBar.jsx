import React from 'react';
import {Link} from "@inertiajs/react";

const ManuBar = () => {
    return (
        <div>
            <ul>
                <li>
                    <Link href={"/"}>Home</Link>
                </li>
                <li>
                    <Link href={"/ProfilePage"}>Profile Page</Link>
                </li>
                <li>
                    <Link href={"/LoginPage"}>Login Page</Link>
                </li>
            </ul>
            <hr/>
        </div>
    );
};

export default ManuBar;
