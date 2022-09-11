import React from "react";
import img1 from "@/assets/images/Screenshot (5).png";
import { Link, Head } from "@inertiajs/inertia-react";
import { LazyLoadImage } from "react-lazy-load-image-component";

export default function Vid1() {
    return (
        <div className="single-post-wrap style-overlay">
            <div className="thumb">
                <LazyLoadImage threshold={85} src={img1} alt="img" />
                <a
                    href="https://www.youtube.com/watch?v=ChkMZVwB4qQ&feature=youtu.be&ab_channel=IndiaToday"
                    className="video-play-btn play-btn-large play-btn-yellow mfp-iframe"
                    tabIndex={0}
                >
                    <i className="fa fa-play" />
                </a>
            </div>
            <div className="details">
                <div className="post-meta-single">
                    <Link className="tag-base tag-blue" to="/">
                        World
                    </Link>
                    <p>
                        <i className="fa fa-clock-o" />
                        aug 3, 2022
                    </p>
                </div>
                <h6 className="title">
                    <a href="https://www.youtube.com/watch?v=ChkMZVwB4qQ&feature=youtu.be&ab_channel=IndiaToday">
                        World News Today: Top 5 Developments From Taiwan As
                        Nancy Pelosi Lands, China Boils With Rage
                    </a>
                </h6>
            </div>
        </div>
    );
}
