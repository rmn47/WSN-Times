import React from "react";
import Vid1 from "@/components/vid1";
import moment from "moment";
import { Link, Head } from "@inertiajs/inertia-react";
import { LazyLoadImage } from "react-lazy-load-image-component";

export default function Video(props) {
    const nws = props.data?.articles ? props.data.articles : null;
    const AutoArticle = () => {
        return (
            <>
                {nws !== null
                    ? nws
                          .slice(0, 3)
                          .map((news, i) => <News key={i} {...news} />)
                    : ""}
            </>
        );
    };
    const News = (props) => {
        return (
            <>
                <div className="single-post-list-wrap">
                    <div className="media">
                        <div className="media-left">
                            <LazyLoadImage
                                threshold={85}
                                src={props.media}
                                alt="img"
                            />
                        </div>
                        <div className="media-body align-self-center">
                            <div className="details">
                                <div className="post-meta-single">
                                    <ul>
                                        <li>
                                            <i className="fa fa-clock-o" />
                                            {moment(
                                                props.published_date
                                            ).format("DD-MM-YYYY")}
                                        </li>
                                    </ul>
                                </div>
                                <h6 className="title">
                                    <a href={props.link}>
                                        {props.title?.substring(0, 60) + "..."}
                                    </a>
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </>
        );
    };
    return (
        <div className="post-area bg-sky pd-top-80 pd-bottom-40">
            <div className="container">
                <div className="row">
                    <div className="col-lg-6 order-lg-4">
                        <Vid1 />
                    </div>
                    <div className="col-lg-3 order-lg-1">
                        <div className="section-title">
                            <h6 className="title">Automobile News</h6>
                        </div>
                        <div className="post-slider owl-carousel">
                            <div className="item">
                                <AutoArticle />
                            </div>
                            <Link
                                className="btn btn-primary btn-sm mb-4 mt-4"
                                href={route("automobile")}
                            >
                                Show More
                            </Link>
                        </div>
                    </div>
                    <div className="col-lg-3 order-lg-12">
                        <div className="single-newsletter-inner bg-yellow text-center">
                            <script
                                async
                                src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4415514126120435"
                                crossOrigin="anonymous"
                            ></script>
                            <ins
                                className="adsbygoogle d-block"
                                data-ad-layout="in-article"
                                data-ad-format="fluid"
                                data-ad-client="ca-pub-4415514126120435"
                                data-ad-slot="2322649388"
                            ></ins>
                            <script>
                                (adsbygoogle = window.adsbygoogle || []).push({}
                                );
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    );
}
