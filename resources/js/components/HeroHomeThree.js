import React, { useState, useEffect } from "react";
import { Link, Head } from "@inertiajs/inertia-react";
// import heroThumb from "@/assets/images/hero-thumb-4.png";
// import PopupVideo from '../PopupVideo';
import axios from "axios";
import { LazyLoadImage } from "react-lazy-load-image-component";

function HeroHomeThree() {
    const [news, setNews] = useState([]);
    const [showVideo, setVideoValue] = useState(false);
    const handleShowVideo = (e) => {
        e.preventDefault();
        setVideoValue(!showVideo);
    };
    useEffect(() => {
        async function getall() {
            try {
                const data = await axios.get("http://localhost:3000/api/news/");
                console.log(data.data);
            } catch (error) {}
        }
    }, []);

    return (
        <>
            {showVideo && (
                <PopupVideo
                    videoSrc="//www.youtube.com/embed/EE7NqzhMDms?autoplay=1"
                    handler={(e) => handleShowVideo(e)}
                />
            )}
            <section className="appie-hero-area appie-hero-3-area">
                <div className="container">
                    <div className="row">
                        <div className="col-lg-6">
                            <div className="thumb after-left-top">
                                <LazyLoadImage
                                    threshold={75}
                                    src={""}
                                    alt="img"
                                />
                            </div>
                        </div>
                        <div className="col-lg-6 align-self-center">
                            <div className="banner-details mt-4 mt-lg-0">
                                <div className="post-meta-single">
                                    <ul>
                                        <li>
                                            <Link
                                                className="tag-base tag-blue"
                                                to="/cat-page"
                                            >
                                                Tech
                                            </Link>
                                        </li>
                                        <li className="date">
                                            <i className="fa fa-clock-o" />
                                            08.22.2020
                                        </li>
                                    </ul>
                                </div>
                                <h2>
                                    ReZoom outage left some people locked out.
                                </h2>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua.{" "}
                                </p>
                                <Link
                                    className="btn btn-primary mt-4"
                                    to="/blog-details"
                                >
                                    Read More
                                </Link>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </>
    );
}

export default HeroHomeThree;
