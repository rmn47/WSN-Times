import React from "react";
import { Head, Link, useForm } from "@inertiajs/inertia-react";
import "bootstrap/dist/css/bootstrap.min.css";

function Navigation() {
    return (
        <>
            <ul>
                <li className="text-decoration-none">
                    <Link href={"/"}>Home</Link>
                </li>
                <li className="menu-item-has-children current-menu-item">
                    <Link href="#">Category</Link>
                    <ul className="sub-menu">
                        <li>
                            <Link href={route("business")}>Business</Link>
                        </li>
                        <li>
                            <Link href={route("politics")}>Politics</Link>
                        </li>
                        <li>
                            <Link href={route("entertainment")}>
                                Entertainment
                            </Link>
                        </li>
                        <li>
                            <Link href={route("tech")}>Tech</Link>
                        </li>
                        <li>
                            <Link href={route("sports")}>Sports</Link>
                        </li>
                        <li>
                            <Link href={route("education")}>Education</Link>
                        </li>
                        <li>
                            <Link href={route("lifestyle")}>Lifestyle</Link>
                        </li>
                        <li>
                            <Link href={route("fashion")}>Fashion</Link>
                        </li>
                        <li>
                            <Link href={route("health")}>Health</Link>
                        </li>
                        <li>
                            <Link href={route("Crypto")}>
                                Crypto -
                                <span className="text-danger">
                                    <small> new</small>
                                </span>
                            </Link>
                        </li>
                    </ul>
                </li>
                <li className="menu-item-has-children current-menu-item">
                    <Link href="#">World</Link>
                    <ul className="sub-menu">
                        <li>
                            <Link href={route("UK")}>UK</Link>
                        </li>
                        <li>
                            <Link href={route("USA")}>USA</Link>
                        </li>
                        <li>
                            <Link href={route("Australia")}>Australia</Link>
                        </li>
                        <li>
                            <Link href={route("Canada")}>Canada</Link>
                        </li>
                        <li>
                            <Link href={route("Europe")}>Europe</Link>
                        </li>
                        <li>
                            <Link href={route("Africa")}>Africa</Link>
                        </li>
                    </ul>
                </li>
                <li className="menu-item-has-children current-menu-item">
                    <Link href="#">Asia</Link>
                    <ul className="sub-menu">
                        <li>
                            <Link href={route("India")}>India</Link>
                        </li>
                        <li>
                            <Link href={route("China")}>China</Link>
                        </li>
                    </ul>
                </li>
                <li className="text-decoration-none">
                    <Link href={route("About")}>About Us</Link>
                </li>
                <li className="text-decoration-none">
                    <Link href={route("Contact")}>Contact Us</Link>
                </li>
                <li className="text-decoration-none">
                    <Link href={route("Privacy-Policy")}>Privacy Policy</Link>
                </li>
                {/* <li className="text-decoration-none">
                    <Link href={"/"}>Shop Now</Link>
                </li> */}
            </ul>
        </>
    );
}

export default Navigation;
