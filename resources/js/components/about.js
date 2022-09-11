import React, { useState } from "react";
import "@/assets/css/bootstrap.min.css";
import "@/assets/plugin/bootstrap.min.js";
import Cattype from "@/components/cattype";
import Widget from "@/components/widget";
import moment from "moment";
import tempimg from "@/assets/images/logo/news-logo.png";
import { LazyLoadImage } from "react-lazy-load-image-component";
import logo from "@/assets/images/logo/about-logo.png";
import { Link } from "@inertiajs/inertia-react";

export default function About(props) {
    const article = props.data?.articles ? props.data.articles : null;
    const handleClick = () => {
        window.open(route("Privacy"));
    };
    const NewsArticles1 = (props) => {
        return (
            <>
                {article
                    ? article
                          .slice(0, 3)
                          .map((news1, i) => <Newstem1 key={i} {...news1} />)
                    : ""}
            </>
        );
    };
    const NewsArticles2 = (props) => {
        return (
            <>
                {article
                    ? article
                          .slice(3, 6)
                          .map((news2, i) => <Newstem2 key={i} {...news2} />)
                    : ""}
            </>
        );
    };
    const NewsArticles3 = (props) => {
        return (
            <>
                {article
                    ? article
                          .slice(6, 9)
                          .map((news1, i) => <Newstem3 key={i} {...news1} />)
                    : ""}
            </>
        );
    };
    const Newstem1 = (props) => {
        const [readMore, setReadMore] = useState(false);
        return (
            <div className="single-post-list-wrap style-two text-left">
                <div className="media">
                    <div className="media-left">
                        <LazyLoadImage
                            threshold={70}
                            alt="img"
                            className="abtimg"
                            src={props.media}
                        />
                    </div>
                    <div className="media-body align-self-center">
                        <div className="details">
                            <div className="post-meta-single">
                                <ul>
                                    <li className="tag-base tag-green text-white">
                                        {props.author}
                                    </li>
                                </ul>
                            </div>
                            <h6 className="title mt-2">{props.title}</h6>
                            <div className="post-meta-single pt-2 pb-2">
                                <ul>
                                    <li>by {props.author} </li>
                                    <li>
                                        {" "}
                                        {moment(props.published_date).format(
                                            "DD-MM-YYYY"
                                        )}
                                    </li>
                                </ul>
                            </div>
                            <p>
                                {readMore
                                    ? props.summary
                                    : props.summary?.substring(0, 140) + ".. "}
                                <a
                                    className="text-primary"
                                    type="button"
                                    onClick={() =>
                                        setReadMore((previous) => !previous)
                                    }
                                >
                                    {readMore ? " Read Less" : " Read more"}
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        );
    };
    const Newstem3 = (props) => {
        const [readMore, setReadMore] = useState(false);
        return (
            <div className="single-post-list-wrap style-two text-left">
                <div className="media">
                    <div className="media-left">
                        <LazyLoadImage
                            threshold={70}
                            alt="img"
                            className="abtimg"
                            src={props.media}
                        />
                    </div>
                    <div className="media-body align-self-center">
                        <div className="details">
                            <div className="post-meta-single">
                                <ul>
                                    <li className="tag-base tag-light-green text-white">
                                        {props.author}
                                    </li>
                                </ul>
                            </div>
                            <h6 className="title mt-2">{props.title}</h6>
                            <div className="post-meta-single pt-2 pb-2">
                                <ul>
                                    <li>by {props.author} </li>
                                    <li>
                                        {" "}
                                        {moment(props.published_date).format(
                                            "DD-MM-YYYY"
                                        )}
                                    </li>
                                </ul>
                            </div>
                            <p>
                                {readMore
                                    ? props.summary
                                    : props.summary?.substring(0, 140) + ".. "}
                                <a
                                    className="text-primary"
                                    type="button"
                                    onClick={() =>
                                        setReadMore((previous) => !previous)
                                    }
                                >
                                    {readMore ? " Read Less" : " Read more"}
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        );
    };
    const Newstem2 = (props) => {
        return (
            <div className="col-lg-4 col-md-6">
                <div className="single-post-wrap">
                    <div className="thumb">
                        <LazyLoadImage
                            threshold={85}
                            className="abtimg2"
                            src={props.media}
                            alt="img"
                        />
                        {/* <img src={publicUrl+"assets/img/post/19.png"} alt="img" /> */}
                        <Link className="tag-base tag-red">{props.author}</Link>
                    </div>
                    <div className="details">
                        <div className="post-meta-single">
                            <ul>
                                <li>
                                    <i className="fa fa-clock-o" />
                                    {moment(props.published_date).format(
                                        "DD-MM-YYYY"
                                    )}
                                </li>
                                <li>
                                    <i className="fa fa-user" />
                                    {props.author}
                                </li>
                            </ul>
                        </div>
                        <h6 className="title mt-2">{props.title}</h6>
                    </div>
                </div>
            </div>
        );
    };
    return (
        <div className="blog-page-area pd-bottom-80 go-top">
            <div className="container">
                <div className="row">
                    <div className="col-lg-9 pd-top-50">
                        <div className="author-area style-two">
                            <div className="media">
                                <img src={logo} alt="img" />
                                <div className="media-body align-self-center mt-4 mt-md-0">
                                    <h4 className="mb-0">WSN Times</h4>
                                    <strong className="mb-3 d-block">
                                        www.wsntimes.com
                                    </strong>
                                    {props.type === "About" ? (
                                        <p>
                                            WSN Times is a collection of
                                            innovative and powerful news brands
                                            that deliver compelling, diverse and
                                            visually engaging stories on your
                                            platform of choice. We use
                                            world-class data and technology to
                                            publish independent reporting,
                                            rankings, journalism and advice that
                                            has earned the trust of our readers
                                            and users . Our platforms on
                                            wsntimes.com include news of
                                            Education, Health, Business, Tech,
                                            Politics and much more. Our
                                            audiences come to us with intention
                                            and purpose. Our goal is to create
                                            content to help educate, inform and
                                            inspire them to make the best
                                            decisions. Learn more about our
                                            audience. We utilize fact-based data
                                            and diverse sources to provide news,
                                            rankings and recommendations across
                                            a wide range of topics that are
                                            important to the lives of our users.
                                        </p>
                                    ) : props.type === "Contact" ? (
                                        <p>
                                            If you wish to be considered for any
                                            Suggestion or Complaint at WSN
                                            Times, please send a mail, here –{" "}
                                            <br />
                                            <a
                                                href="mailto:support@wsntimes.com"
                                                className="text-primary"
                                            >
                                                <i className="fal fa-envelope"></i>
                                                support@wsntimes.com
                                            </a>{" "}
                                            <br />
                                            and for any Inquiry please send a
                                            mail, here – <br />
                                            <a
                                                href="mailto:information@wsntimes.com"
                                                className="text-primary"
                                            >
                                                <i className="fal fa-envelope"></i>
                                                information@wsntimes.com
                                            </a>
                                            <br />, Our team will contact you
                                            after their review of your submitted
                                            information..
                                        </p>
                                    ) : (
                                        <p>
                                            WSN Times Privacy Policy describes
                                            Our policies and procedures on the
                                            collection, use and disclosure of
                                            Your information when You use the
                                            Service and tells You about Your
                                            privacy rights and how the law
                                            protects You. To review privacy
                                            policy of WSN Times please visit the
                                            here -
                                            <a
                                                type="button"
                                                className="text-primary"
                                                onClick={handleClick}
                                            >
                                                WSN Times Privacy Policy
                                            </a>
                                        </p>
                                    )}
                                    <ul className="social-area social-area-2 mt-4">
                                        <Widget />
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div className="section-title pd-top-80">
                            <h6 className="title">Articles By Author's</h6>
                        </div>
                        <NewsArticles1 />
                        <div className="add-area mb-4">
                            {/* <a href="#"><img src={publicUrl+"assets/img/add/2.png"} alt="img" /></a> */}
                        </div>
                        <div className="row pt-2 my-4">
                            <NewsArticles2 />
                        </div>
                        <NewsArticles3 />
                    </div>
                    <div className="col-lg-3 pd-top-50">
                        <div className="category-sitebar">
                            <div className="widget widget-category">
                                <h6 className="widget-title">Category</h6>
                                <Cattype />
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
                                        {props.data1.articles
                                            ? props.data1.articles
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
                                        {props.data2.articles
                                            ? props.data2.articles
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
                                </div>
                            </div>
                            <div className="widget">
                                <div className="single-newsletter-inner bg-blue text-center"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    );
}
