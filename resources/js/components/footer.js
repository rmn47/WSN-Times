import React from "react";
import { Link, Head } from "@inertiajs/inertia-react";
import Widget from "@/components/widget";
import moment from "moment";
import { LazyLoadImage } from "react-lazy-load-image-component";

export default function Footer(props) {
    return (
        <div className="footer-area bg-black pd-top-95">
            <div className="container">
                <div className="row">
                    <div className="col-lg-3 col-sm-6">
                        <div className="widget">
                            <h5 className="widget-title">ABOUT US</h5>
                            <div className="widget_about">
                                <p>
                                    WSN Times is a collection of innovative and
                                    powerful news brands that deliver
                                    compelling, diverse and visually engaging
                                    stories on your platform of choice.
                                </p>
                                <ul className="social-area social-area-2 mt-4">
                                    <Widget />
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div className="col-lg-3 col-sm-6">
                        <div className="widget widget_tag_cloud">
                            <h5 className="widget-title">Category</h5>
                            <div className="tagcloud go-top">
                                {/* <Link to="/cat-page">Consectetur</Link> */}
                                <Link href={route("app")}>App</Link>
                                <Link href={route("food")}>Food</Link>
                                <Link href={route("business")}>Business</Link>
                                <Link href={route("game")}>Game</Link>
                                <Link href={route("education")}>Education</Link>
                                <Link href={route("internet")}>Internet</Link>
                                <Link href={route("phones")}>Phones</Link>
                                <Link href={route("development")}>
                                    Development
                                </Link>
                                <Link href={route("entertainment")}>
                                    Entertainment
                                </Link>
                                <Link href={route("gadgets")}>Gadgets</Link>
                                <Link href={route("tech")}>Tech</Link>
                                <Link href={route("lifestyle")}>Lifestyle</Link>
                                <Link href={route("sports")}>Sports</Link>
                                <Link href={route("fashion")}>Fashion</Link>
                                <Link href={route("health")}>Health</Link>
                            </div>
                        </div>
                    </div>
                    <div className="col-lg-3 col-sm-6">
                        <div className="widget">
                            <h5 className="widget-title">CONTACTS</h5>
                            <ul className="contact_info_list">
                                {/* <li>
                                    <i className="fa fa-map-marker" /> 829
                                    Cabell Avenue Arlington, VA 22202
                                </li>
                                <li>
                                    <i className="fa fa-phone" /> +088 012121240
                                </li> */}
                                <li>
                                    <a href="mailto:information@wsntimes.com">
                                        <i className="fal fa-envelope"></i>
                                        information@wsntimes.com
                                    </a>
                                </li>
                                <li>
                                    <a href="mailto:support@wsntimes.com">
                                        <i className="fal fa-envelope"></i>
                                        support@wsntimes.com
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div className="col-lg-3 col-sm-6 go-top">
                        <div className="widget widget_recent_post">
                            <h5 className="widget-title">POPULAR NEWS</h5>
                            {props.data.articles
                                ? props.data.articles
                                      .slice(11, 13)
                                      .map((news, i) => {
                                          return (
                                              <div
                                                  key={i}
                                                  className="single-post-list-wrap style-white"
                                              >
                                                  <div className="media">
                                                      <div className="media-left">
                                                          <LazyLoadImage
                                                              threshold={90}
                                                              src={news.media}
                                                              alt="img"
                                                              className="ifh"
                                                          />
                                                      </div>
                                                      <div className="media-body">
                                                          <div className="details">
                                                              <div className="post-meta-single">
                                                                  <ul>
                                                                      <li>
                                                                          <i className="fa fa-clock-o" />
                                                                          {moment(
                                                                              news.published_date
                                                                          ).format(
                                                                              "DD-MM-YYYY"
                                                                          )}
                                                                      </li>
                                                                  </ul>
                                                              </div>
                                                              <h6 className="title">
                                                                  <Link
                                                                      href={
                                                                          news.link
                                                                      }
                                                                  >
                                                                      {news.title.substring(
                                                                          0,
                                                                          40
                                                                      ) + "..."}
                                                                  </Link>
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
                <div className="footer-bottom text-center">
                    <ul className="widget_nav_menu go-top">
                        {/* <li>
                            <Link to="/autho">Author</Link>
                        </li>
                        <li>
                            <Link to="/blog">Blog</Link>
                        </li> */}
                        <li>
                            <Link href={route("tech")}>Tech News</Link>
                        </li>
                        <li>
                            <Link href={route("fashion")}>Fashion</Link>
                        </li>
                        <li>
                            <Link href={route("sports")}>Sports</Link>
                        </li>
                        <li>
                            <Link href={route("business")}>Business</Link>
                        </li>
                        <li>
                            <Link href={route("About")}>About Us</Link>
                        </li>
                        <li>
                            <Link href={route("Contact")}>Contact Us</Link>
                        </li>
                        <li>
                            <Link href={route("Privacy-Policy")}>
                                Privacy Policy
                            </Link>
                        </li>
                    </ul>
                    <p>Copyright ©2022 WSN Times</p>
                </div>
            </div>
        </div>
    );
}
