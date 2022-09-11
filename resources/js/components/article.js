import React, { useState } from "react";
import moment from "moment";
import { LazyLoadImage } from "react-lazy-load-image-component";

export default function Article(props) {
    const [readMore, setReadMore] = useState(false);
    const nws = props.data?.articles[1] ? props.data?.articles[1] : null;
    return (
        <div className="banner-area banner-inner-1">
            <div className="banner-inner pt-5 go-top">
                <div className="container">
                    <div className="row">
                        <div className="col-lg-6">
                            <div className="thumb after-left-top">
                                <LazyLoadImage
                                    threshold={85}
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
                                                className="tag-base tag-yellow"
                                                // to="/cat-page"
                                                href={"https://" + nws.rights}
                                            >
                                                {nws.rights}
                                            </a>
                                        </li>
                                        <li className="date text-dark">
                                            <i className="fa fa-clock-o" />
                                            {moment(nws.published_date).format(
                                                "DD-MM-YYYY"
                                            )}
                                        </li>
                                    </ul>
                                </div>
                                <h2 className="text-dark">{nws.title}</h2>
                                <p className="text-secondary">
                                    {readMore
                                        ? nws.summary
                                        : nws.summary?.substring(0, 225) +
                                          "..."}
                                </p>

                                <button
                                    className="btn my-bg6 mt-4"
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
            </div>
            <div className="container go-top bg-light">
                <div className="row">
                    {props.data1.articles
                        ? props.data1.articles.slice(2, 6).map((news1, i) => {
                              return (
                                  <div key={i} className="col-lg-3 col-sm-6">
                                      <div className="single-post-wrap style-white">
                                          <div className="thumb">
                                              <LazyLoadImage
                                                  threshold={90}
                                                  alt="img"
                                                  width="100%"
                                                  height="200px"
                                                  src={news1.media}
                                              />
                                              <a
                                                  className="tag-base tag-orange"
                                                  href={
                                                      "https://" + news1.rights
                                                  }
                                              >
                                                  {news1.rights}
                                              </a>
                                          </div>
                                          <div className="details">
                                              <h4 className="title text-secondary fs-4">
                                                  <a href={news1.link}>
                                                      {news1.title}
                                                  </a>
                                              </h4>
                                              <div className="post-meta-single">
                                                  <ul>
                                                      <li>
                                                          <i className="fa fa-clock-o" />
                                                          {moment(
                                                              news1.published_date
                                                          ).format(
                                                              "DD-MM-YYYY"
                                                          )}
                                                      </li>
                                                  </ul>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              );
                          })
                        : ""}
                </div>
            </div>
        </div>
    );
}
