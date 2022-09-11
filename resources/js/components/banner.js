import React, { useState } from "react";
import moment from "moment";
import { Helmet } from "react-helmet";
import { LazyLoadImage } from "react-lazy-load-image-component";

export default function Banner(props) {
    const [readMore, setReadMore] = useState(false);
    const nws = props.data?.articles[0] ? props.data.articles[0] : null;
    return (
        <section className="appie-hero-area appie-hero-3-area">
            <Helmet>
                <meta charSet="utf-8" />
                <title>
                    WSN Times | World Latest News, Today Headlines, English
                    News, News Headlines
                </title>
                <meta
                    name="description"
                    content="Latest News - WSNTimes Get the latest news from World, politics, entertainment, sports, feature stories and much more"
                />
                <meta
                    name="news_keywords"
                    content="Latest News, News, news update, latest online news, ufc latest news, the latest news, latest news ukraine, russia latest news, covid 19 latest news, politics news, entertainment news, sports news, cricket news, business news, technology news and much more"
                />
                <meta
                    name="keywords"
                    content="Today News Headlines,todays latest updates,todays breaking news,share_update,current_affair_in_word,crime_news,world_sports_data,English News Headlines,Latest English News,world, world news, world breaking news, stock market today news, crypto today news, international news, news around the world, latest world news, world news headlines,Top Stories,Today Top Story,English News,Today's News,News Headlines,India news, breaking news, national news, u.s. news, world news, news video, entertainment news, political news, sports news, business news, travel news, health news, technology news, financial news, Latest international news, wsntimes.com"
                />
                <meta
                    property="og:title"
                    content="World News: Today's latest updates and breaking news from world - wsntimes.com"
                />
                <meta
                    property="og:description"
                    content="World News: Get Latest and breaking news from World. Today's Top International News Headlines, news on politics, Business, Crime, Sports and Current Affairs."
                />
                <meta property="og:type" content="website" />
                <meta property="og:url" content="https://wsntimes.com" />
                <link rel="canonical" href="https://wsntimes.com" />
                <meta property="og:site_name" content="wsntimes.com" />
            </Helmet>
            <div className="container">
                <div className="row">
                    <div className="col-lg-6">
                        <div className="thumb after-left-top mb-2">
                            <LazyLoadImage
                                threshold={75}
                                alt="img"
                                src={nws.media}
                            />
                        </div>
                    </div>
                    <div className="col-lg-6 align-self-center">
                        <div className="banner-details  mt-lg-0">
                            <div className="post-meta-single">
                                <ul>
                                    <li>
                                        <a
                                            className="tag-base tag-green"
                                            target="_blank"
                                            href={"https://" + nws.rights}
                                        >
                                            {nws.rights}
                                        </a>
                                    </li>
                                    <li className="date text-light">
                                        <i className="fa fa-clock-o" />
                                        {moment(nws.published_date).format(
                                            "DD-MM-YYYY"
                                        )}
                                    </li>
                                </ul>
                            </div>
                            <h1 className="fs-2" style={{ color: "#d6d2ed" }}>
                                {nws.title}
                            </h1>
                            <p className="my-tgb" style={{ color: "#d6d2ed" }}>
                                {readMore
                                    ? nws.summary
                                    : nws.summary?.substring(0, 225) + "..."}
                            </p>
                            <button
                                className="btn tag-green  my-bg5 mb-2"
                                onClick={() =>
                                    setReadMore((previous) => !previous)
                                }
                            >
                                {readMore ? "Read Less" : "Read more"}
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    );
}
