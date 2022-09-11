import React from "react";
import { Link, Head } from "@inertiajs/inertia-react";
import "@/assets/css/font-awesome.min.css";
import { FiTwitter, FiYoutube, FiInstagram } from "react-icons/fi";
import { FaGoogle } from "react-icons/fa";

export default function Widget() {
    return (
        <>
            <li>
                <a className="twitter-icon" href="https://www.twitter.com/">
                    <FiTwitter />
                </a>
            </li>
            <li>
                <a className="youtube-icon" href="https://www.youtube.com/">
                    <FiYoutube />
                </a>
            </li>
            <li>
                <a className="instagram-icon" href="https://www.instagram.com/">
                    <FiInstagram />
                </a>
            </li>
            <li>
                <a className="google-icon" href="https://www.google.com/">
                    <FaGoogle />
                </a>
            </li>
        </>
    );
}
