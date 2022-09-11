import React, { Component, useState } from "react";
import { Link } from "@inertiajs/inertia-react";
import moment from "moment";
import "@/assets/css/bootstrap.min.css";
import "@/assets/plugin/bootstrap.min.js";
import Cattype from "@/components/cattype";
import Cattype2 from "@/components/cattype2";
import Widget from "@/components/widget";
import tempimg from "@/assets/images/logo/news-logo.png";
import { LazyLoadImage } from "react-lazy-load-image-component";

export default function Cat(props) {
    const type = props.type1 ? props.type1 : props.type;
    const type1 = props.type1 ? props.type1 : "";
    const page1 = props.data?.articles ? props.data.articles : null;
    const page2 = props.data1?.articles ? props.data1.articles : null;
    const NewsArticles1 = (props) => {
        return (
            <>
                {page1
                    ? page1
                          .slice(0, 6)
                          .map((news1, i) => <Newstem1 key={i} {...news1} />)
                    : ""}
            </>
        );
    };
    const NewsArticles2 = (props) => {
        return (
            <>
                {page1
                    ? page1
                          .slice(6, 12)
                          .map((news2, i) => <Newstem1 key={i} {...news2} />)
                    : ""}
            </>
        );
    };
    const NewsArticles3 = (props) => {
        return (
            <>
                {page1
                    ? page1
                          .slice(12, 18)
                          .map((news1, i) => <Newstem1 key={i} {...news1} />)
                    : ""}
            </>
        );
    };
    const NewsArticles4 = (props) => {
        return (
            <>
                {page1
                    ? page1
                          .slice(18, 24)
                          .map((news2, i) => <Newstem1 key={i} {...news2} />)
                    : ""}
            </>
        );
    };
    const NewsArticles5 = (props) => {
        return (
            <>
                {page2
                    ? page2
                          .slice(0, 6)
                          .map((news3, i) => <Newstem1 key={i} {...news3} />)
                    : ""}
            </>
        );
    };
    const NewsArticles6 = (props) => {
        return (
            <>
                {page2
                    ? page2
                          .slice(6, 12)
                          .map((news2, i) => <Newstem1 key={i} {...news2} />)
                    : ""}
            </>
        );
    };
    const NewsArticles7 = (props) => {
        return (
            <>
                {page2
                    ? page2
                          .slice(12, 18)
                          .map((news1, i) => <Newstem1 key={i} {...news1} />)
                    : ""}
            </>
        );
    };
    const NewsArticles8 = (props) => {
        return (
            <>
                {page2
                    ? page2
                          .slice(18, 24)
                          .map((news2, i) => <Newstem1 key={i} {...news2} />)
                    : ""}
            </>
        );
    };
    const Newstem1 = (props) => {
        const [readMore, setReadMore] = useState(false);
        return (
            <div className="col-lg-4 col-md-6">
                <div className="single-post-wrap style-box">
                    <div className="thumb">
                        <LazyLoadImage
                            threshold={70}
                            alt="img"
                            src={props.media}
                        />
                    </div>
                    <div className="details">
                        <div className="post-meta-single mb-4 pt-1">
                            <ul>
                                <li>
                                    <Link className="tag-base tag-light-blue">
                                        {type}
                                    </Link>
                                </li>
                                <li>
                                    <i className="fa fa-user" />
                                    {props.author}
                                </li>
                            </ul>
                        </div>
                        <h3 className="title fs-6">
                            <a href={props.link}>{props.title}</a>
                        </h3>
                        <p>
                            {readMore
                                ? props.summary
                                : props.summary?.substring(0, 85) + ".."}
                        </p>
                        <button
                            className="btn btn-base mt-4"
                            onClick={() => setReadMore((previous) => !previous)}
                        >
                            {readMore ? "Read Less" : "Read more"}
                        </button>
                    </div>
                </div>
            </div>
        );
    };
    return (
        <div className="cat-page-area pd-bottom-80 go-top">
            <div className="container">
                <div className="row">
                    <div className="col-lg-9 pd-top-50">
                        <div className="tab-content" id="px1-content">
                            <div
                                className="tab-pane fade show active"
                                id="nx1-page-1"
                                role="tabpanel"
                            >
                                <div className="row">
                                    <NewsArticles1 data={props.data} />
                                </div>
                                <div className="add-area mb-4">
                                    <Link href="#">
                                        <LazyLoadImage
                                            threshold={85}
                                            src={tempimg}
                                            style={{ width: "90px" }}
                                            alt="img"
                                        />
                                    </Link>
                                </div>
                                <div className="row">
                                    <NewsArticles2 data={props.data} />
                                </div>
                            </div>
                            <div
                                className="tab-pane fade"
                                id="nx1-page-2"
                                role="tabpanel"
                            >
                                <div className="row">
                                    <NewsArticles3 data={props.data} />
                                </div>
                                <div className="add-area mb-4">
                                    <Link href="#">
                                        <LazyLoadImage
                                            threshold={85}
                                            src={tempimg}
                                            style={{ width: "90px" }}
                                            alt="img"
                                        />
                                    </Link>
                                </div>
                                <div className="row">
                                    <NewsArticles4 data={props.data} />
                                </div>
                            </div>
                            <div
                                className="tab-pane fade"
                                id="nx1-page-3"
                                role="tabpanel"
                            >
                                <div className="row">
                                    <NewsArticles5 data={props.data} />
                                </div>
                                <div className="add-area mb-4">
                                    <Link href="#">
                                        <LazyLoadImage
                                            threshold={85}
                                            src={tempimg}
                                            style={{ width: "90px" }}
                                            alt="img"
                                        />
                                    </Link>
                                </div>
                                <div className="row">
                                    <NewsArticles6 data={props.data} />
                                </div>
                            </div>
                            <div
                                className="tab-pane fade"
                                id="nx1-page-4"
                                role="tabpanel"
                            >
                                <div className="row">
                                    <NewsArticles7 data={props.data} />
                                </div>
                                <div className="add-area mb-4">
                                    <Link href="#">
                                        <LazyLoadImage
                                            threshold={85}
                                            src={tempimg}
                                            style={{ width: "90px" }}
                                            alt="img"
                                        />
                                    </Link>
                                </div>
                                <div className="row">
                                    <NewsArticles8 data={props.data} />
                                </div>
                            </div>
                        </div>
                        <nav className="mt-4 text-center">
                            <ul
                                className="pagination nav nav-tabs"
                                id="px1"
                                role="tablist"
                            >
                                <li className="nav-item">
                                    <Link
                                        className="page-link disabled"
                                        href="#"
                                    >
                                        <i className="fa fa-angle-left" />
                                    </Link>
                                </li>
                                <li
                                    className="nav-item ml-2"
                                    role="presentation"
                                >
                                    <a
                                        className="page-link active"
                                        id="nx1-page-1"
                                        data-toggle="pill"
                                        href="#nx1-page-1"
                                        role="tab"
                                        aria-selected="true"
                                    >
                                        1
                                    </a>
                                </li>
                                <li
                                    className="nav-item ml-2"
                                    role="presentation"
                                >
                                    <a
                                        className="page-link"
                                        id="nx1-page-2"
                                        data-toggle="pill"
                                        href="#nx1-page-2"
                                        role="tab"
                                        aria-selected="false"
                                    >
                                        2
                                    </a>
                                </li>
                                <li
                                    className="nav-item ml-2"
                                    role="presentation"
                                >
                                    <a
                                        className="page-link"
                                        id="nx1-page-3"
                                        data-toggle="pill"
                                        href="#nx1-page-3"
                                        role="tab"
                                        aria-selected="false"
                                    >
                                        3
                                    </a>
                                </li>
                                <li
                                    className="nav-item ml-2"
                                    role="presentation"
                                >
                                    <a
                                        className="page-link"
                                        id="nx1-page-4"
                                        data-toggle="pill"
                                        href="#nx1-page-4"
                                        role="tab"
                                        aria-selected="false"
                                    >
                                        4
                                    </a>
                                </li>
                                <li className="nav-item next ml-2">
                                    <Link
                                        className="page-link disabled"
                                        href="#"
                                    >
                                        <i className="fa fa-angle-right" />
                                    </Link>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div className="col-lg-3 pd-top-50">
                        <div className="category-sitebar">
                            <div className="widget widget-category">
                                <h2 className="widget-title fs-5">Category</h2>
                                {props.type1 ? (
                                    <>
                                        {/* <Cattype /> */}
                                        <Cattype2 data={props.type1} />
                                    </>
                                ) : (
                                    <Cattype />
                                )}
                            </div>
                            <div className="widget widget-add">
                                <div className="add">
                                    <LazyLoadImage
                                        threshold={85}
                                        className="w-100"
                                        src={tempimg}
                                        alt="img"
                                    />
                                </div>
                            </div>
                            <div className="widget widget-social">
                                <h6 className="widget-title">Join to Us</h6>
                                <ul className="social-area social-area-2">
                                    <Widget />
                                </ul>
                            </div>
                            <div className="widget">
                                <h6 className="widget-title">Category</h6>
                                <div className="post-slider owl-carousel">
                                    <div className="item">
                                        <div className="trending-post">
                                            {props.data2.articles
                                                ? props.data2.articles
                                                      .slice(0, 3)
                                                      .map((news1, i) => {
                                                          return (
                                                              <>
                                                                  <div
                                                                      key={i}
                                                                      className="single-post-wrap style-overlay"
                                                                  >
                                                                      <div className="thumb">
                                                                          <LazyLoadImage
                                                                              threshold={
                                                                                  85
                                                                              }
                                                                              src={
                                                                                  news1.media
                                                                              }
                                                                              alt="img"
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
                                                                                  {
                                                                                      news1.title
                                                                                  }
                                                                              </a>
                                                                          </h6>
                                                                      </div>
                                                                  </div>
                                                              </>
                                                          );
                                                      })
                                                : ""}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div className="widget">
                                <div className="nxp-tab-inner nxp-tab-post-two mb-4">
                                    <ul
                                        className="nav nav-tabs"
                                        id="nx1"
                                        role="tablist"
                                    >
                                        <li
                                            className="nav-item"
                                            role="presentation"
                                        >
                                            <a
                                                className="nav-link active"
                                                id="nx1-tab-1"
                                                data-toggle="pill"
                                                href="#nx1-tabs-1"
                                                role="tab"
                                                aria-selected="true"
                                            >
                                                Recent
                                            </a>
                                        </li>
                                        <li
                                            className="nav-item"
                                            role="presentation"
                                        >
                                            <a
                                                className="nav-link"
                                                id="nx1-tab-2"
                                                data-toggle="pill"
                                                href="#nx1-tabs-2"
                                                role="tab"
                                                aria-selected="false"
                                            >
                                                Populer
                                            </a>
                                        </li>
                                        <li
                                            className="nav-item"
                                            role="presentation"
                                        >
                                            <a
                                                className="nav-link"
                                                id="nx1-tab-3"
                                                data-toggle="pill"
                                                href="#nx1-tabs-3"
                                                role="tab"
                                                aria-selected="false"
                                            >
                                                Comment
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div className="tab-content" id="nx1-content">
                                    <div
                                        className="tab-pane fade show active"
                                        id="nx1-tabs-1"
                                        role="tabpanel"
                                    >
                                        {props.data3.articles
                                            ? props.data3.articles
                                                  .slice(0, 3)
                                                  .map((news1, i) => {
                                                      return (
                                                          <>
                                                              <div
                                                                  key={i}
                                                                  className="single-post-list-wrap"
                                                              >
                                                                  <div className="media">
                                                                      <div className="media-left">
                                                                          <LazyLoadImage
                                                                              threshold={
                                                                                  85
                                                                              }
                                                                              src={
                                                                                  news1.media
                                                                              }
                                                                              alt="img"
                                                                          />
                                                                      </div>
                                                                  </div>
                                                                  <div className="media-body">
                                                                      <div className="details">
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
                                                                          <h6 className="title">
                                                                              <a
                                                                                  href={
                                                                                      news1.link
                                                                                  }
                                                                              >
                                                                                  {
                                                                                      news1.title
                                                                                  }
                                                                              </a>
                                                                          </h6>
                                                                      </div>
                                                                  </div>
                                                              </div>
                                                          </>
                                                      );
                                                  })
                                            : ""}
                                    </div>
                                    <div
                                        className="tab-pane fade"
                                        id="nx1-tabs-2"
                                        role="tabpanel"
                                    >
                                        {props.data4.articles
                                            ? props.data4.articles
                                                  .slice(0, 3)
                                                  .map((news1, i) => {
                                                      return (
                                                          <>
                                                              <div
                                                                  key={i}
                                                                  className="single-post-list-wrap"
                                                              >
                                                                  <div className="media">
                                                                      <div className="media-left">
                                                                          <LazyLoadImage
                                                                              threshold={
                                                                                  85
                                                                              }
                                                                              src={
                                                                                  news1.media
                                                                              }
                                                                              alt="img"
                                                                          />
                                                                      </div>
                                                                  </div>
                                                                  <div className="media-body">
                                                                      <div className="details">
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
                                                                          <h6 className="title">
                                                                              <a
                                                                                  href={
                                                                                      news1.link
                                                                                  }
                                                                              >
                                                                                  {
                                                                                      news1.title
                                                                                  }
                                                                              </a>
                                                                          </h6>
                                                                      </div>
                                                                  </div>
                                                              </div>
                                                          </>
                                                      );
                                                  })
                                            : ""}
                                    </div>
                                    <div
                                        className="tab-pane fade"
                                        id="nx1-tabs-3"
                                        role="tabpanel"
                                    >
                                        {props.data5.articles
                                            ? props.data5.articles
                                                  .slice(0, 3)
                                                  .map((news1, i) => {
                                                      return (
                                                          <>
                                                              <div
                                                                  key={i}
                                                                  className="single-post-list-wrap"
                                                              >
                                                                  <div className="media">
                                                                      <div className="media-left">
                                                                          <LazyLoadImage
                                                                              threshold={
                                                                                  85
                                                                              }
                                                                              src={
                                                                                  news1.media
                                                                              }
                                                                              alt="img"
                                                                          />
                                                                      </div>
                                                                  </div>
                                                                  <div className="media-body">
                                                                      <div className="details">
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
                                                                          <h6 className="title">
                                                                              <a
                                                                                  href={
                                                                                      news1.link
                                                                                  }
                                                                              >
                                                                                  {
                                                                                      news1.title
                                                                                  }
                                                                              </a>
                                                                          </h6>
                                                                      </div>
                                                                  </div>
                                                              </div>
                                                          </>
                                                      );
                                                  })
                                            : ""}
                                    </div>
                                </div>
                            </div>
                            <div className="widget">
                                {/* <form className="single-newsletter-inner bg-blue text-center">
                                    <h5>Newsletter</h5>
                                    <p>
                                        Stay Updated on all that's new add
                                        noteworthy
                                    </p>
                                    <div className="single-input-inner">
                                        <input
                                            type="text"
                                            placeholder="Enter Your Name"
                                        />
                                    </div>
                                    <div className="single-input-inner">
                                        <input
                                            type="text"
                                            placeholder="Enter Your Email"
                                        />
                                    </div>
                                    <a className="btn btn-white w-100" href="#">
                                        Subscribe Now
                                    </a>
                                </form> */}
                                <div className="single-newsletter-inner bg-blue text-center"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    );
}
