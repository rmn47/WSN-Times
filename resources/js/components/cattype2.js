import React from "react";
import { Link } from "@inertiajs/inertia-react";
import img1 from "@/assets/images/category/business.jpg";
import img2 from "@/assets/images/category/entertainment.jpg";
import img3 from "@/assets/images/category/tech.jpg";
import img4 from "@/assets/images/category/sport.jpg";
import { LazyLoadImage } from "react-lazy-load-image-component";
// import img5 from "@/assets/images/category/edu.jpg";
// import img6 from "@/assets/images/category/life.jpg";
// import img7 from "@/assets/images/category/fashion.jpg";
// import img8 from "@/assets/images/category/health.jpg";

export default function Cattype2(props) {
    const type = props.data ? props.data : null;
    return (
        <div className="row custom-gutters-14">
            <div className="col-lg-6 col-sm-6">
                <div className="single-category-inner">
                    <LazyLoadImage
                        threshold={50}
                        src={img1}
                        alt="img"
                        height="70px"
                    />
                    <Link
                        className="tag-base tag-blue"
                        href={route(type + "Politics")}
                    >
                        <h2 className="fs-6 font-weight-light text-white mt-1">
                            {" "}
                            Politics
                        </h2>
                    </Link>
                </div>
            </div>
            <div className="col-lg-6 col-sm-6">
                <div className="single-category-inner">
                    <LazyLoadImage
                        threshold={50}
                        src={img2}
                        alt="img"
                        height="70px"
                    />
                    <Link
                        className="tag-base tag-blue"
                        href={route(type + "Entertainment")}
                    >
                        <h2 className="fs-6 font-weight-light text-white mt-1">
                            {" "}
                            Entertain.
                        </h2>
                    </Link>
                </div>
            </div>
            <div className="col-lg-6 col-sm-6">
                <div className="single-category-inner">
                    <LazyLoadImage
                        threshold={50}
                        src={img3}
                        alt="img"
                        height="70px"
                    />
                    <Link
                        className="tag-base tag-blue"
                        href={route(type + "Tech")}
                    >
                        <h2 className="fs-6 font-weight-light text-white mt-1">
                            {" "}
                            Tech
                        </h2>
                    </Link>
                </div>
            </div>
            <div className="col-lg-6 col-sm-6">
                <div className="single-category-inner">
                    <LazyLoadImage
                        threshold={50}
                        src={img4}
                        alt="img"
                        height="70px"
                    />
                    <Link
                        className="tag-base tag-blue"
                        href={route(type + "Sports")}
                    >
                        <h2 className="fs-6 font-weight-light text-white mt-1">
                            {" "}
                            Sports{" "}
                        </h2>
                    </Link>
                </div>
            </div>
            {/* <div className="col-lg-6 col-sm-6">
                <div className="single-category-inner">
                    <LazyLoadImage
                                        threshold={50} src={img5} alt="img" height="70px" />
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
                                        threshold={50} src={img6} alt="img" height="70px" />
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
                                        threshold={50} src={img7} alt="img" height="70px" />
                    <Link className="tag-base tag-blue" href={route("fashion")}>
                        Fashion
                    </Link>
                </div>
            </div>
            <div className="col-lg-6 col-sm-6">
                <div className="single-category-inner">
                    <LazyLoadImage
                                        threshold={50} src={img8} alt="img" height="70px" />
                    <Link className="tag-base tag-blue" href={route("health")}>
                        Health
                    </Link>
                </div>
            </div> */}
        </div>
    );
}
