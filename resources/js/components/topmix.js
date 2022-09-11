import React from "react";
import { Link, Head } from "@inertiajs/inertia-react";
import moment from "moment";
import { LazyLoadImage } from "react-lazy-load-image-component";

export default function Topmix(props) {
    const nws = props.data?.articles ? props.data.articles : null;
    return (
        <div className="bg-sky pd-top-80 pd-bottom-50 go-top">
            <div className="container">
                <div className="row">
                    <div className="col-lg-3 col-sm-6">
                        {nws
                            ? nws.slice(0, 1).map((news1, i) => {
                                  return (
                                      <div
                                          key={i}
                                          className="single-post-wrap style-overlay-bg"
                                      >
                                          <div className="thumb">
                                              <LazyLoadImage
                                                  threshold={85}
                                                  src={news1.media}
                                                  height="500px"
                                                  alt="img"
                                              />
                                          </div>
                                          <div className="details">
                                              <div className="post-meta-single">
                                                  <ul>
                                                      <li>
                                                          <Link
                                                              className="tag-base tag-blue"
                                                              to="/"
                                                          >
                                                              {news1.rights}
                                                          </Link>
                                                      </li>
                                                      <li>
                                                          <p>
                                                              <i className="fa fa-clock-o" />
                                                              {moment(
                                                                  news1.published_date
                                                              ).format(
                                                                  "DD-MM-YYYY"
                                                              )}
                                                          </p>
                                                      </li>
                                                  </ul>
                                              </div>
                                              <h6 className="title">
                                                  <a href={news1.link}>
                                                      {news1.title?.substring(
                                                          0,
                                                          20
                                                      ) + "..."}
                                                  </a>
                                              </h6>
                                          </div>
                                      </div>
                                  );
                              })
                            : ""}
                    </div>
                    <div className="col-lg-3 col-sm-6">
                        {nws
                            ? nws.slice(1, 3).map((news2, i) => {
                                  return (
                                      <div key={i} className="single-post-wrap">
                                          <div className="thumb">
                                              <LazyLoadImage
                                                  threshold={85}
                                                  src={news2.media}
                                                  alt="img"
                                              />
                                              <p className="btn-date">
                                                  <i className="fa fa-clock-o" />
                                                  {moment(
                                                      news2.published_date
                                                  ).format("DD-MM-YYYY")}
                                              </p>
                                          </div>
                                          <div className="details">
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
                    <div className="col-lg-3 col-sm-6">
                        {nws
                            ? nws.slice(3, 5).map((news3, i) => {
                                  return (
                                      <div key={i} className="single-post-wrap">
                                          <div className="thumb">
                                              <LazyLoadImage
                                                  threshold={85}
                                                  src={news3.media}
                                                  alt="img"
                                              />
                                              <p className="btn-date">
                                                  <i className="fa fa-clock-o" />
                                                  {moment(
                                                      news3.published_date
                                                  ).format("DD-MM-YYYY")}
                                              </p>
                                          </div>
                                          <div className="details">
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
                    <div className="col-lg-3 col-sm-6">
                        <div className="trending-post style-box overflow-auto ah600">
                            <div className="section-title">
                                <h6 className="title">Trending data</h6>
                            </div>
                            <div className="post-slider owl-carousel">
                                <div className="item">
                                    {nws
                                        ? nws.slice(5, 8).map((news4, i) => {
                                              return (
                                                  <div
                                                      key={i}
                                                      className="single-post-list-wrap"
                                                  >
                                                      <div className="media">
                                                          <div className="media-left">
                                                              <LazyLoadImage
                                                                  threshold={85}
                                                                  src={
                                                                      news4.media
                                                                  }
                                                                  alt="img"
                                                              />
                                                          </div>
                                                          <div className="media-body">
                                                              <div className="details">
                                                                  <div className="post-meta-single">
                                                                      <ul>
                                                                          <li>
                                                                              <i className="fa fa-clock-o" />
                                                                              {moment(
                                                                                  news4.published_date
                                                                              ).format(
                                                                                  "DD-MM-YYYY"
                                                                              )}
                                                                          </li>
                                                                      </ul>
                                                                  </div>
                                                                  <h6 className="title">
                                                                      <a
                                                                          href={
                                                                              news4.link
                                                                          }
                                                                      >
                                                                          <small>
                                                                              <b>
                                                                                  {" "}
                                                                                  {
                                                                                      news4.title
                                                                                  }
                                                                              </b>
                                                                          </small>
                                                                      </a>
                                                                  </h6>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                              );
                                          })
                                        : ""}
                                </div>
                                <div className="item">
                                    {nws
                                        ? nws.slice(8, 10).map((news5, i) => {
                                              return (
                                                  <div
                                                      key={i}
                                                      className="single-post-list-wrap"
                                                  >
                                                      <div className="media">
                                                          <div className="media-left">
                                                              <LazyLoadImage
                                                                  threshold={85}
                                                                  src={
                                                                      news5.media
                                                                  }
                                                                  alt="img"
                                                              />
                                                          </div>
                                                          <div className="media-body">
                                                              <div className="details">
                                                                  <div className="post-meta-single">
                                                                      <ul>
                                                                          <li>
                                                                              <i className="fa fa-clock-o" />
                                                                              {moment(
                                                                                  news5.published_date
                                                                              ).format(
                                                                                  "DD-MM-YYYY"
                                                                              )}
                                                                          </li>
                                                                      </ul>
                                                                  </div>
                                                                  <h6 className="title">
                                                                      <a
                                                                          href={
                                                                              news5.link
                                                                          }
                                                                      >
                                                                          {
                                                                              news5.title
                                                                          }
                                                                      </a>
                                                                  </h6>
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
                    </div>
                </div>
            </div>
        </div>
    );
}
