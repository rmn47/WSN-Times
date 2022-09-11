import React, { useEffect } from "react";
import { Link, Head } from "@inertiajs/inertia-react";
import Navigation from "@/Components/Navigation";
import StickyMenu from "@/lib/StickyMenu";
import ApplicationLogo from "@/Components/ApplicationLogo";
import "@/assets/css/bootstrap.min.css";
import "@/assets/css/custom-animated.css";
import "@/assets/css/default.css";
import "@/assets/css/font-awesome.min.css";
import "@/assets/css/magnific-popup.css";
import "@/assets/css/magnific.dark.css";
import "@/assets/css/magnific.rtl.css";
import "@/assets/css/main.css";
import "@/assets/css/style.css";
import "@/assets/css/my.css";

function HeaderHomeThree({
    lang,
    darkEnable = false,
    action,
    props,
    langEnabled = false,
    changeMode,
    changeModeLan,
    dark,
    className,
}) {
    useEffect(() => {
        StickyMenu();
    });
    return (
        <>
            <header className="appie-header-area appie-header-3-area appie-sticky bg-primary">
                <div className="container">
                    <div className="header-nav-box header-nav-box-3">
                        <div className="row align-items-center">
                            <div className="col-lg-1 col-md-4 col-sm-5 col-6 order-1 order-sm-1">
                                <div className="appie-logo-box">
                                    <Link href={"/"}>
                                        <ApplicationLogo className="lh-h" />
                                    </Link>
                                </div>
                            </div>
                            <div className="col-lg-7 col-md-1 col-sm-1 order-3 order-sm-2">
                                <div className="appie-header-main-menu">
                                    <Navigation />
                                </div>
                            </div>
                            <div className="col-lg-4  col-md-7 col-sm-6 col-6 order-2 order-sm-3">
                                <div className="appie-btn-box text-right">
                                    <div
                                        onClick={(e) => action(e)}
                                        className="toggle-btn ml-30 canvas_open d-lg-none d-block"
                                    >
                                        <i className="fa fa-bars" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        </>
    );
}

export default HeaderHomeThree;
