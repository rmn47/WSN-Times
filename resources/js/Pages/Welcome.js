import React, { Suspense } from "react";
import useToggle from "@/Hooks/useToggle";
import Drawer from "@/Mobile/Drawer";
import HeaderHomeThree from "@/components/HeaderHomeThree";
const Banner = React.lazy(() => import("@/components/banner"));
const Article = React.lazy(() => import("@/components/article"));
const Trend = React.lazy(() => import("@/components/trending-v2"));
const Trending = React.lazy(() => import("@/components/trending"));
const Topmix = React.lazy(() => import("@/components/topmix"));
const Single = React.lazy(() => import("@/components/single"));
const Video = React.lazy(() => import("@/components/video"));
const Singlead = React.lazy(() => import("@/components/singlead"));
const Footer = React.lazy(() => import("@/components/footer"));

export default function Welcome(props) {
    const [drawer, drawerAction] = useToggle(false);

    return (
        <>
            <Drawer drawer={drawer} action={drawerAction.toggle} />
            <HeaderHomeThree action={drawerAction.toggle} />
            <Suspense
                fallback={
                    <div className="d-flex justify-content-center mb-2">
                        <div className="spinner-border text-info" role="status">
                            <span className="visually-hidden">Loading...</span>
                        </div>
                    </div>
                }
            >
                <Banner data={props.news} />
            </Suspense>
            <Suspense
                fallback={
                    <div className="d-flex justify-content-center my-2">
                        <div
                            className="spinner-border text-warning"
                            role="status"
                        >
                            <span className="visually-hidden">Loading...</span>
                        </div>
                    </div>
                }
            >
                <Article data={props.news} data1={props.news} />
            </Suspense>
            <Suspense
                fallback={
                    <div className="d-flex justify-content-center my-2">
                        <div
                            className="spinner-border text-secondary"
                            role="status"
                        >
                            <span className="visually-hidden">Loading...</span>
                        </div>
                    </div>
                }
            >
                <Singlead />
            </Suspense>
            <Suspense
                fallback={
                    <div className="d-flex justify-content-center my-2">
                        <div
                            className="spinner-border text-primary"
                            role="status"
                        >
                            <span className="visually-hidden">Loading...</span>
                        </div>
                    </div>
                }
            >
                <Trending data={props.news} />
            </Suspense>
            <Suspense
                fallback={
                    <div className="d-flex justify-content-center my-2">
                        <div
                            className="spinner-border text-success"
                            role="status"
                        >
                            <span className="visually-hidden">Loading...</span>
                        </div>
                    </div>
                }
            >
                <Topmix data={props.newsa} />
            </Suspense>
            <Suspense
                fallback={
                    <div className="d-flex justify-content-center my-2">
                        <div
                            className="spinner-border text-danger"
                            role="status"
                        >
                            <span className="visually-hidden">Loading...</span>
                        </div>
                    </div>
                }
            >
                <Single />
            </Suspense>
            <Suspense
                fallback={
                    <div className="d-flex justify-content-center my-2">
                        <div
                            className="spinner-border  text-light"
                            role="status"
                        >
                            <span className="visually-hidden">Loading...</span>
                        </div>
                    </div>
                }
            >
                <Video data={props.newsf} />
            </Suspense>
            <Suspense
                fallback={
                    <div className="d-flex justify-content-center my-2">
                        <div
                            className="spinner-border text-success"
                            role="status"
                        >
                            <span className="visually-hidden">Loading...</span>
                        </div>
                    </div>
                }
            >
                <Trend
                    data={props.newsg}
                    data2={props.newsh}
                    data3={props.newsi}
                    data4={props.newsj}
                    data5={props.newsk}
                />
            </Suspense>
            <Suspense
                fallback={
                    <div className="d-flex justify-content-center mt-2">
                        <div className="spinner-border text-dark" role="status">
                            <span className="visually-hidden">Loading...</span>
                        </div>
                    </div>
                }
            >
                <Footer data={props.newsa} />
            </Suspense>
        </>
    );
}
