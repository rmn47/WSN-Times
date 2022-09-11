import React from "react";
import { Link } from "@inertiajs/inertia-react";
import "@/assets/css/bootstrap.min.css";
import "@/assets/css/font-awesome.min.css";
import "@/assets/error/css/style.css";

export default function Error({ status }) {
    const title = {
        503: "503",
        500: "500",
        404: "404",
    }[status];

    const description = {
        503: "Sorry, we are doing some maintenance. Please check back soon.",
        500: "Whoops, something went wrong on our servers.",
        404: "Sorry, the page you are looking for could not be found.",
    }[status];

    return (
        <div id="notfound">
            <div class="notfound-bg"></div>
            <div class="notfound">
                <div class="notfound-404">
                    <h1>{title}</h1>
                </div>
                <h2>{description}</h2>
                <Link href={"/"} class="home-btn">
                    Go Home
                </Link>
                <a href="#" class="contact-btn">
                    Contact us
                </a>
                <div class="notfound-social">
                    <a href="mailto:support@wsntimes.com">
                        <i className="fal fa-envelope"></i>
                    </a>
                </div>
            </div>
        </div>
    );
}
