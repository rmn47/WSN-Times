import React from "react";
import moment from "moment";
import { LazyLoadImage } from "react-lazy-load-image-component";

export default function Trending(props) {
    const nws = props.data?.articles ? props.data?.articles : null;
    return (
        <div className="post-area pd-bottom-50 go-top">
            <div className="container">
                <div className="row">
                    <div className="col-lg-3 col-md-6">
                        <div className="section-title mb-2">
                            <h6 className="title">Trending News</h6>
                        </div>
                        <div className="post-slider owl-carousel">
                            <div className="item">
                                <div className="trending-post">
                                    {nws !== null
                                        ? nws.slice(6, 10).map((news1, i) => {
                                              return (
                                                  <div
                                                      key={i}
                                                      className="single-post-wrap style-overlay mb-2"
                                                  >
                                                      <div className="thumb">
                                                          <LazyLoadImage
                                                              threshold={95}
                                                              alt="img"
                                                              src={news1.media}
                                                          />
                                                      </div>
                                                      <div className="details">
                                                          <div className="post-meta-single">
                                                              <p>
                                                                  <i className="fa fa-clock-o" />
                                                                  {moment(
                                                                      news1.published_date
                                                                  ).format(
                                                                      "DD-MM-YYYY"
                                                                  )}
                                                              </p>
                                                          </div>
                                                          <h6 className="title">
                                                              <a
                                                                  href={
                                                                      news1.link
                                                                  }
                                                              >
                                                                  {news1.title}
                                                              </a>
                                                          </h6>
                                                      </div>
                                                  </div>
                                              );
                                          })
                                        : ""}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div className="col-lg-3 col-md-6">
                        <div className="section-title mb-2">
                            <h6 className="title">Latest News</h6>
                        </div>
                        <div className="post-slider owl-carousel">
                            <div className="item">
                                {nws !== null
                                    ? nws.slice(10, 15).map((news2, i) => {
                                          return (
                                              <div
                                                  key={i}
                                                  className="single-post-wrap style-overlay mb-2"
                                              >
                                                  <div className="thumb">
                                                      <LazyLoadImage
                                                          threshold={95}
                                                          alt="img"
                                                          src={news2.media}
                                                      />
                                                  </div>
                                                  <div className="details">
                                                      <div className="post-meta-single">
                                                          <p>
                                                              <i className="fa fa-clock-o" />
                                                              {moment(
                                                                  news2.published_date
                                                              ).format(
                                                                  "DD-MM-YYYY"
                                                              )}
                                                          </p>
                                                      </div>
                                                      <h6 className="title">
                                                          <a href={news2.link}>
                                                              {news2.title}
                                                          </a>
                                                      </h6>
                                                  </div>
                                              </div>
                                          );
                                      })
                                    : ""}
                            </div>
                        </div>
                    </div>
                    <div className="col-lg-3 col-md-6">
                        <div className="section-title">
                            <h6 className="title">What’s new</h6>
                        </div>
                        <div className="post-slider owl-carousel">
                            <div className="item">
                                {nws !== null
                                    ? nws.slice(15, 20).map((news3, i) => {
                                          return (
                                              <div
                                                  key={i}
                                                  className="single-post-wrap style-overlay mb-2"
                                              >
                                                  <div className="thumb">
                                                      <LazyLoadImage
                                                          threshold={95}
                                                          alt="img"
                                                          src={news3.media}
                                                      />
                                                  </div>
                                                  <div className="details">
                                                      <div className="post-meta-single">
                                                          <p>
                                                              <i className="fa fa-clock-o" />
                                                              {moment(
                                                                  news3.published_date
                                                              ).format(
                                                                  "DD-MM-YYYY"
                                                              )}
                                                          </p>
                                                      </div>
                                                      <h6 className="title">
                                                          <a href={news3.link}>
                                                              {news3.title}
                                                          </a>
                                                      </h6>
                                                  </div>
                                              </div>
                                          );
                                      })
                                    : ""}
                            </div>
                        </div>
                    </div>
                    <div className="col-lg-3 col-md-6"></div>
                </div>
            </div>
        </div>
    );
}
