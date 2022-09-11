import React, { useState } from "react";
import { Link } from "@inertiajs/inertia-react";
import ApplicationLogo from "@/Components/ApplicationLogo";
import "bootstrap/dist/css/bootstrap.min.css";

function Drawer({ drawer, action, lang }) {
    const [itemSize, setSize] = useState("0px");
    const [item, setItem] = useState("home");
    const handler = (e, value) => {
        // e.preventDefault();
        const getItems = document.querySelectorAll(`#${value} li`).length;
        if (getItems > 0) {
            setSize(`${43 * getItems}px`);
            setItem(value);
        }
    };
    return (
        <>
            <div
                onClick={(e) => action(e)}
                className={`off_canvars_overlay ${drawer ? "active" : ""}`}
            ></div>
            <div className="offcanvas_menu">
                <div className="container-fluid">
                    <div className="row">
                        <div className="col-12">
                            <div
                                className={`offcanvas_menu_wrapper ${
                                    drawer ? "active" : ""
                                }`}
                            >
                                <div className="canvas_close">
                                    <a href="#" onClick={(e) => action(e)}>
                                        <i className="fa fa-times"></i>
                                    </a>
                                </div>
                                <div className="offcanvas-brand text-center mb-40">
                                    <ApplicationLogo className="ah85" />
                                </div>
                                <div id="menu" className="text-left ">
                                    <ul className="offcanvas_main_menu">
                                        <li
                                            onClick={(e) => handler(e, "home")}
                                            id="home"
                                            className="menu-item-has-children active"
                                        >
                                            <Link href={"/"}>Home</Link>
                                        </li>
                                        <li
                                            onClick={(e) =>
                                                handler(e, "Politics")
                                            }
                                            id="Politics"
                                            className="menu-item-has-children active"
                                        >
                                            <Link href={route("politics")}>
                                                Politics
                                            </Link>
                                        </li>
                                        <li
                                            onClick={(e) =>
                                                handler(e, "business")
                                            }
                                            id="Politics"
                                            className="menu-item-has-children active"
                                        >
                                            <Link href={route("business")}>
                                                Business
                                            </Link>
                                        </li>
                                        <li
                                            onClick={(e) => handler(e, "UK")}
                                            id="UK"
                                            className="menu-item-has-children active"
                                        >
                                            <Link href={route("UK")}>UK</Link>
                                        </li>
                                        <li
                                            onClick={(e) => handler(e, "USA")}
                                            id="USA"
                                            className="menu-item-has-children active"
                                        >
                                            <Link href={route("USA")}>USA</Link>
                                        </li>
                                        <li
                                            onClick={(e) =>
                                                handler(e, "Australia")
                                            }
                                            id="Australia"
                                            className="menu-item-has-children active"
                                        >
                                            <Link href={route("Australia")}>
                                                Australia
                                            </Link>
                                        </li>
                                        <li
                                            onClick={(e) =>
                                                handler(e, "Canada")
                                            }
                                            id="Canada"
                                            className="menu-item-has-children active"
                                        >
                                            <Link href={route("Canada")}>
                                                Canada
                                            </Link>
                                        </li>
                                        <li
                                            onClick={(e) =>
                                                handler(e, "Europe")
                                            }
                                            id="Europe"
                                            className="menu-item-has-children active"
                                        >
                                            <Link href={route("Europe")}>
                                                Europe
                                            </Link>
                                        </li>
                                        <li
                                            onClick={(e) => handler(e, "India")}
                                            id="India"
                                            className="menu-item-has-children active"
                                        >
                                            <Link href={route("India")}>
                                                India
                                            </Link>
                                        </li>
                                        <li
                                            onClick={(e) => handler(e, "China")}
                                            id="China"
                                            className="menu-item-has-children active"
                                        >
                                            <Link href={route("China")}>
                                                China
                                            </Link>
                                        </li>

                                        <li
                                            onClick={(e) =>
                                                handler(e, "Crypto")
                                            }
                                            id="Crypto"
                                            className="menu-item-has-children active"
                                        >
                                            <Link href={route("Crypto")}>
                                                Crypto -
                                                <span className="text-danger">
                                                    <small> new</small>
                                                </span>
                                            </Link>
                                        </li>
                                        <li
                                            onClick={(e) => handler(e, "About")}
                                            id="About"
                                            className="menu-item-has-children active"
                                        >
                                            <Link href={route("About")}>
                                                About Us
                                            </Link>
                                        </li>
                                        <li
                                            onClick={(e) =>
                                                handler(e, "Contact")
                                            }
                                            id="Contact"
                                            className="menu-item-has-children active"
                                        >
                                            <Link href={route("Contact")}>
                                                Contact Us
                                            </Link>
                                        </li>
                                        <li
                                            onClick={(e) =>
                                                handler(e, "Privacy-Policy")
                                            }
                                            id="Privacy-Policy"
                                            className="menu-item-has-children active"
                                        >
                                            <Link
                                                href={route("Privacy-Policy")}
                                            >
                                                Privacy Policy
                                            </Link>
                                        </li>
                                        {/* <li
                                            onClick={(e) => handler(e, "Shop")}
                                            id="Shop"
                                            className="menu-item-has-children active"
                                        >
                                            <Link href={"/"}>Shop Now</Link>
                                        </li> */}
                                    </ul>
                                </div>
                                <div className="offcanvas-social">
                                    <ul className="text-center">
                                        {/* <li>
                                            <a href="$">
                                                <i className="fab fa-facebook-f"></i>
                                            </a>
                                        </li> */}
                                        <li>
                                            <a href="$">
                                                <i className="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="$">
                                                <i className="fab fa-instagram"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="$">
                                                <i className="fab fa-youtube"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div className="footer-widget-info">
                                    <ul>
                                        <li>
                                            <a href="mailto:support@wsntimes.com">
                                                <i className="fal fa-envelope"></i>
                                                support@wsntimes.com
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </>
    );
}

export default Drawer;
