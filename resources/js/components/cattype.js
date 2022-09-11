import React from "react";
import { Link } from "@inertiajs/inertia-react";
import img1 from "@/assets/images/category/business.jpg";
import img2 from "@/assets/images/category/entertainment.jpg";
import img3 from "@/assets/images/category/tech.jpg";
import img4 from "@/assets/images/category/sport.jpg";
import img5 from "@/assets/images/category/edu.jpg";
import img6 from "@/assets/images/category/life.jpg";
import img7 from "@/assets/images/category/fashion.jpg";
import img8 from "@/assets/images/category/health.jpg";
import { LazyLoadImage } from "react-lazy-load-image-component";

export default function Cattype() {
    return (
        <div className="row custom-gutters-14">
            <div className="col-lg-6 col-sm-6">
                <div className="single-category-inner">
                    <LazyLoadImage
                        threshold={75}
                        src={img1}
                        alt="img"
                        height="70px"
                    />
                    <Link
                        className="tag-base tag-blue"
                        href={route("business")}
                    >
                        Business
                    </Link>
                </div>
            </div>
            <div className="col-lg-6 col-sm-6">
                <div className="single-category-inner">
                    <LazyLoadImage
                        threshold={75}
                        src={img2}
                        alt="img"
                        height="70px"
                    />
                    <Link
                        className="tag-base tag-blue"
                        href={route("entertainment")}
                    >
                        Entertain.
                    </Link>
                </div>
            </div>
            <div className="col-lg-6 col-sm-6">
                <div className="single-category-inner">
                    <LazyLoadImage
                        threshold={75}
                        src={img3}
                        alt="img"
                        height="70px"
                    />
                    <Link className="tag-base tag-blue" href={route("tech")}>
                        Tech
                    </Link>
                </div>
            </div>
            <div className="col-lg-6 col-sm-6">
                <div className="single-category-inner">
                    <LazyLoadImage
                        threshold={75}
                        src={img4}
                        alt="img"
                        height="70px"
                    />
                    <Link className="tag-base tag-blue" href={route("sports")}>
                        Sports
                    </Link>
                </div>
            </div>
            <div className="col-lg-6 col-sm-6">
                <div className="single-category-inner">
                    <LazyLoadImage
                        threshold={75}
                        src={img5}
                        alt="img"
                        height="70px"
                    />
                    <Link
                        className="tag-base tag-blue"
                        href={route("education")}
                    >
                        Education
                    </Link>
                </div>
            </div>
            <div className="col-lg-6 col-sm-6">
                <div className="single-category-inner">
                    <LazyLoadImage
                        threshold={75}
                        src={img6}
                        alt="img"
                        height="70px"
                    />
                    <Link
                        className="tag-base tag-blue"
                        href={route("lifestyle")}
                    >
                        Lifestyle
                    </Link>
                </div>
            </div>
            <div className="col-lg-6 col-sm-6">
                <div className="single-category-inner">
                    <LazyLoadImage
                        threshold={75}
                        src={img7}
                        alt="img"
                        height="70px"
                    />
                    <Link className="tag-base tag-blue" href={route("fashion")}>
                        Fashion
                    </Link>
                </div>
            </div>
            <div className="col-lg-6 col-sm-6">
                <div className="single-category-inner">
                    <LazyLoadImage
                        threshold={75}
                        src={img8}
                        alt="img"
                        height="70px"
                    />
                    <Link className="tag-base tag-blue" href={route("health")}>
                        Health
                    </Link>
                </div>
            </div>
        </div>
    );
}
