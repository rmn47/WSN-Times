import React, { Component } from "react";
import { Link, Head } from "@inertiajs/inertia-react";
import moment from "moment";
import "@/assets/css/bootstrap.min.css";
import "@/assets/plugin/bootstrap.min.js";
import { LazyLoadImage } from "react-lazy-load-image-component";

export default function Trend(props) {
    const en = props.data?.articles ? props.data.articles : null;
    const pol = props.data2?.articles ? props.data2.articles : null;
    const fa = props.data3?.articles ? props.data3.articles : null;
    const te = props.data4?.articles ? props.data4.articles : null;
    const he = props.data5?.articles ? props.data5.articles : null;

    return (
        <>
            <div className="tranding-area pd-top-75 pd-bottom-50 ">
                <div className="container">
                    <div className="section-title">
                        <div className="row">
                            <div className="col-md-3 mb-2 mb-md-0">
                                <h6 className="title">Trending News</h6>
                            </div>
                            <div className="col-md-9">
                                <div className="nxp-tab-inner nxp-tab-post text-md-right">
                                    <ul
                                        className="nav nav-tabs"
                                        id="enx1"
                                        role="tablist"
                                    >
                                        <li
                                            className="nav-item"
                                            role="presentation"
                                        >
                                            <a
                                                className="nav-link active"
                                                id="enx1-tab-1"
                                                data-toggle="pill"
                                                href="#enx1-tabs-1"
                                                role="tab"
                                                aria-selected="true"
                                            >
                                                Entertainment
                                            </a>
                                        </li>
                                        <li
                                            className="nav-item"
                                            role="presentation"
                                        >
                                            <a
                                                className="nav-link"
                                                id="enx1-tab-2"
                                                data-toggle="pill"
                                                href="#enx1-tabs-2"
                                                role="tab"
                                                aria-selected="false"
                                            >
                                                Politics
                                            </a>
                                        </li>
                                        <li
                                            className="nav-item"
                                            role="presentation"
                                        >
                                            <a
                                                className="nav-link"
                                                id="enx1-tab-3"
                                                data-toggle="pill"
                                                href="#enx1-tabs-3"
                                                role="tab"
                                                aria-selected="false"
                                            >
                                                Fashion
                                            </a>
                                        </li>
                                        <li
                                            className="nav-item"
                                            role="presentation"
                                        >
                                            <a
                                                className="nav-link"
                                                id="enx1-tab-4"
                                                data-toggle="pill"
                                                href="#enx1-tabs-4"
                                                role="tab"
                                                aria-selected="false"
                                            >
                                                Tech
                                            </a>
                                        </li>
                                        <li
                                            className="nav-item"
                                            role="presentation"
                                        >
                                            <a
                                                className="nav-link"
                                                id="enx1-tab-5"
                                                data-toggle="pill"
                                                href="#enx1-tabs-5"
                                                role="tab"
                                                aria-selected="false"
                                            >
                                                Health
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div className="tab-content" id="enx1-content go-top">
                        <div
                            className="tab-pane fade show active"
                            id="enx1-tabs-1"
                            role="tabpanel"
                        >
                            <div className="row">
                                {en !== null
                                    ? en.slice(0, 4).map((news1, i) => {
                                          return (
                                              <div
                                                  key={i}
                                                  className="col-lg-3 col-sm-6"
                                              >
                                                  <div className="single-post-wrap">
                                                      <div className="thumb">
                                                          <LazyLoadImage
                                                              threshold={85}
                                                              src={news1.media}
                                                              alt="img"
                                                          />
                                                          <Link
                                                              className="tag-base tag-light-green"
                                                              href={route(
                                                                  "entertainment"
                                                              )}
                                                          >
                                                              Entertainment
                                                          </Link>
                                                      </div>
                                                      <div className="details">
                                                          <div className="post-meta-single mb-3">
                                                              <ul>
                                                                  <li>
                                                                      <i className="fa fa-clock-o" />
                                                                      {moment(
                                                                          news1.published_date
                                                                      ).format(
                                                                          "DD-MM-YYYY"
                                                                      )}
                                                                  </li>
                                                                  <li>
                                                                      <i className="fa fa-user" />
                                                                      {
                                                                          news1.author
                                                                      }
                                                                  </li>
                                                              </ul>
                                                          </div>
                                                          <h3 className="fs-4">
                                                              <a
                                                                  href={
                                                                      news1.link
                                                                  }
                                                              >
                                                                  {news1.title}
                                                              </a>
                                                          </h3>
                                                          <p>
                                                              {news1.summary?.substring(
                                                                  0,
                                                                  225
                                                              ) + ".."}
                                                              <a
                                                                  className="text-info"
                                                                  href={
                                                                      news1.link
                                                                  }
                                                              >
                                                                  readmore
                                                              </a>
                                                          </p>
                                                      </div>
                                                  </div>
                                              </div>
                                          );
                                      })
                                    : ""}
                            </div>
                        </div>
                        <div
                            className="tab-pane fade"
                            id="enx1-tabs-2"
                            role="tabpanel"
                        >
                            <div className="row">
                                {pol !== null
                                    ? pol.slice(0, 4).map((news2, i) => {
                                          return (
                                              <div
                                                  key={i}
                                                  className="col-lg-3 col-sm-6"
                                              >
                                                  <div className="single-post-wrap">
                                                      <div className="thumb">
                                                          <LazyLoadImage
                                                              threshold={85}
                                                              src={news2.media}
                                                              alt="img"
                                                          />
                                                          <Link
                                                              className="tag-base tag-light-green"
                                                              href={route(
                                                                  "politics"
                                                              )}
                                                          >
                                                              Politics
                                                          </Link>
                                                      </div>
                                                      <div className="details">
                                                          <div className="post-meta-single mb-3">
                                                              <ul>
                                                                  <li>
                                                                      <i className="fa fa-clock-o" />
                                                                      {moment(
                                                                          news2.published_date
                                                                      ).format(
                                                                          "DD-MM-YYYY"
                                                                      )}
                                                                  </li>
                                                                  <li>
                                                                      <i className="fa fa-user" />
                                                                      {
                                                                          news2.author
                                                                      }
                                                                  </li>
                                                              </ul>
                                                          </div>
                                                          <h3 className="fs-4">
                                                              <a
                                                                  href={
                                                                      news2.link
                                                                  }
                                                              >
                                                                  {news2.title}
                                                              </a>
                                                          </h3>
                                                          <p>
                                                              {news2.summary?.substring(
                                                                  0,
                                                                  225
                                                              ) + ".."}
                                                              <a
                                                                  className="text-info"
                                                                  href={
                                                                      news2.link
                                                                  }
                                                              >
                                                                  readmore
                                                              </a>
                                                          </p>
                                                      </div>
                                                  </div>
                                              </div>
                                          );
                                      })
                                    : ""}
                            </div>
                        </div>
                        <div
                            className="tab-pane fade"
                            id="enx1-tabs-3"
                            role="tabpanel"
                        >
                            <div className="row">
                                {fa !== null
                                    ? fa.slice(0, 4).map((news3, i) => {
                                          return (
                                              <div
                                                  key={i}
                                                  className="col-lg-3 col-sm-6"
                                              >
                                                  <div className="single-post-wrap">
                                                      <div className="thumb">
                                                          <LazyLoadImage
                                                              threshold={85}
                                                              src={news3.media}
                                                              alt="img"
                                                          />
                                                          <Link
                                                              className="tag-base tag-light-green"
                                                              href={route(
                                                                  "fashion"
                                                              )}
                                                          >
                                                              Fashion
                                                          </Link>
                                                      </div>
                                                      <div className="details">
                                                          <div className="post-meta-single mb-3">
                                                              <ul>
                                                                  <li>
                                                                      <i className="fa fa-clock-o" />
                                                                      {moment(
                                                                          news3.published_date
                                                                      ).format(
                                                                          "DD-MM-YYYY"
                                                                      )}
                                                                  </li>
                                                                  <li>
                                                                      <i className="fa fa-user" />
                                                                      {
                                                                          news3.author
                                                                      }
                                                                  </li>
                                                              </ul>
                                                          </div>
                                                          <h3 className="fs-4">
                                                              <a
                                                                  href={
                                                                      news3.link
                                                                  }
                                                              >
                                                                  {news3.title}
                                                              </a>
                                                          </h3>
                                                          <p>
                                                              {news3.summary?.substring(
                                                                  0,
                                                                  225
                                                              ) + ".."}
                                                              <a
                                                                  className="text-info"
                                                                  href={
                                                                      news3.link
                                                                  }
                                                              >
                                                                  readmore
                                                              </a>
                                                          </p>
                                                      </div>
                                                  </div>
                                              </div>
                                          );
                                      })
                                    : ""}
                            </div>
                        </div>
                        <div
                            className="tab-pane fade"
                            id="enx1-tabs-4"
                            role="tabpanel"
                        >
                            <div className="row">
                                {te !== null
                                    ? te.slice(0, 4).map((news4, i) => {
                                          return (
                                              <div
                                                  key={i}
                                                  className="col-lg-3 col-sm-6"
                                              >
                                                  <div className="single-post-wrap">
                                                      <div className="thumb">
                                                          <LazyLoadImage
                                                              threshold={85}
                                                              src={news4.media}
                                                              alt="img"
                                                          />
                                                          <Link
                                                              className="tag-base tag-light-green"
                                                              href={route(
                                                                  "tech"
                                                              )}
                                                          >
                                                              Tech
                                                          </Link>
                                                      </div>
                                                      <div className="details">
                                                          <div className="post-meta-single mb-3">
                                                              <ul>
                                                                  <li>
                                                                      <i className="fa fa-clock-o" />
                                                                      {moment(
                                                                          news4.published_date
                                                                      ).format(
                                                                          "DD-MM-YYYY"
                                                                      )}
                                                                  </li>
                                                                  <li>
                                                                      <i className="fa fa-user" />
                                                                      {
                                                                          news4.author
                                                                      }
                                                                  </li>
                                                              </ul>
                                                          </div>
                                                          <h3 className="fs-4">
                                                              <a
                                                                  href={
                                                                      news4.link
                                                                  }
                                                              >
                                                                  {news4.title}
                                                              </a>
                                                          </h3>
                                                          <p>
                                                              {news4.summary?.substring(
                                                                  0,
                                                                  225
                                                              ) + ".."}
                                                              <a
                                                                  className="text-info"
                                                                  href={
                                                                      news4.link
                                                                  }
                                                              >
                                                                  readmore
                                                              </a>
                                                          </p>
                                                      </div>
                                                  </div>
                                              </div>
                                          );
                                      })
                                    : ""}
                            </div>
                        </div>
                        <div
                            className="tab-pane fade"
                            id="enx1-tabs-5"
                            role="tabpanel"
                        >
                            <div className="row">
                                {he !== null
                                    ? he.slice(0, 4).map((news5, i) => {
                                          return (
                                              <div
                                                  key={i}
                                                  className="col-lg-3 col-sm-6"
                                              >
                                                  <div className="single-post-wrap">
                                                      <div className="thumb">
                                                          <LazyLoadImage
                                                              threshold={85}
                                                              src={news5.media}
                                                              alt="img"
                                                          />
                                                          <Link
                                                              className="tag-base tag-light-green"
                                                              href={route(
                                                                  "health"
                                                              )}
                                                          >
                                                              Health
                                                          </Link>
                                                      </div>
                                                      <div className="details">
                                                          <div className="post-meta-single mb-3">
                                                              <ul>
                                                                  <li>
                                                                      <i className="fa fa-clock-o" />
                                                                      {moment(
                                                                          news5.published_date
                                                                      ).format(
                                                                          "DD-MM-YYYY"
                                                                      )}
                                                                  </li>
                                                                  <li>
                                                                      <i className="fa fa-user" />
                                                                      {
                                                                          news5.author
                                                                      }
                                                                  </li>
                                                              </ul>
                                                          </div>
                                                          <h3 className="fs-4">
                                                              <a
                                                                  href={
                                                                      news5.link
                                                                  }
                                                              >
                                                                  {news5.title}
                                                              </a>
                                                          </h3>
                                                          <p>
                                                              {news5.summary?.substring(
                                                                  0,
                                                                  225
                                                              ) + ".."}
                                                              <a
                                                                  className="text-info"
                                                                  href={
                                                                      news5.link
                                                                  }
                                                              >
                                                                  readmore
                                                              </a>
                                                          </p>
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
        </>
    );
}
