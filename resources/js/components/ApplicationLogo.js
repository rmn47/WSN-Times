import React from "react";
import logo from "@/assets/images/logo/news-logo.png";

export default function ApplicationLogo({ className = "" }) {
    return <img src={logo} className={className} />;
}
