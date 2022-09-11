"use strict";
(self["webpackChunknews"] = self["webpackChunknews"] || []).push([["resources_js_components_trending-v2_js"],{

/***/ "./resources/js/components/trending-v2.js":
/*!************************************************!*\
  !*** ./resources/js/components/trending-v2.js ***!
  \************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ Trend)
/* harmony export */ });
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "./node_modules/react/index.js");
/* harmony import */ var _inertiajs_inertia_react__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @inertiajs/inertia-react */ "./node_modules/@inertiajs/inertia-react/dist/index.js");
/* harmony import */ var moment__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! moment */ "./node_modules/moment/moment.js");
/* harmony import */ var moment__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(moment__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var _assets_css_bootstrap_min_css__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @/assets/css/bootstrap.min.css */ "./resources/js/assets/css/bootstrap.min.css");
/* harmony import */ var _assets_plugin_bootstrap_min_js__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! @/assets/plugin/bootstrap.min.js */ "./resources/js/assets/plugin/bootstrap.min.js");
/* harmony import */ var _assets_plugin_bootstrap_min_js__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(_assets_plugin_bootstrap_min_js__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var react_lazy_load_image_component__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! react-lazy-load-image-component */ "./node_modules/react-lazy-load-image-component/build/index.js");
/* harmony import */ var react_lazy_load_image_component__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(react_lazy_load_image_component__WEBPACK_IMPORTED_MODULE_5__);
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! react/jsx-runtime */ "./node_modules/react/jsx-runtime.js");









function Trend(props) {
  var _props$data, _props$data2, _props$data3, _props$data4, _props$data5;

  var en = (_props$data = props.data) !== null && _props$data !== void 0 && _props$data.articles ? props.data.articles : null;
  var pol = (_props$data2 = props.data2) !== null && _props$data2 !== void 0 && _props$data2.articles ? props.data2.articles : null;
  var fa = (_props$data3 = props.data3) !== null && _props$data3 !== void 0 && _props$data3.articles ? props.data3.articles : null;
  var te = (_props$data4 = props.data4) !== null && _props$data4 !== void 0 && _props$data4.articles ? props.data4.articles : null;
  var he = (_props$data5 = props.data5) !== null && _props$data5 !== void 0 && _props$data5.articles ? props.data5.articles : null;
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsx)(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.Fragment, {
    children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsx)("div", {
      className: "tranding-area pd-top-75 pd-bottom-50 ",
      children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsxs)("div", {
        className: "container",
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsx)("div", {
          className: "section-title",
          children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsxs)("div", {
            className: "row",
            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsx)("div", {
              className: "col-md-3 mb-2 mb-md-0",
              children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsx)("h6", {
                className: "title",
                children: "Trending News"
              })
            }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsx)("div", {
              className: "col-md-9",
              children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsx)("div", {
                className: "nxp-tab-inner nxp-tab-post text-md-right",
                children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsxs)("ul", {
                  className: "nav nav-tabs",
                  id: "enx1",
                  role: "tablist",
                  children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsx)("li", {
                    className: "nav-item",
                    role: "presentation",
                    children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsx)("a", {
                      className: "nav-link active",
                      id: "enx1-tab-1",
                      "data-toggle": "pill",
                      href: "#enx1-tabs-1",
                      role: "tab",
                      "aria-selected": "true",
                      children: "Entertainment"
                    })
                  }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsx)("li", {
                    className: "nav-item",
                    role: "presentation",
                    children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsx)("a", {
                      className: "nav-link",
                      id: "enx1-tab-2",
                      "data-toggle": "pill",
                      href: "#enx1-tabs-2",
                      role: "tab",
                      "aria-selected": "false",
                      children: "Politics"
                    })
                  }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsx)("li", {
                    className: "nav-item",
                    role: "presentation",
                    children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsx)("a", {
                      className: "nav-link",
                      id: "enx1-tab-3",
                      "data-toggle": "pill",
                      href: "#enx1-tabs-3",
                      role: "tab",
                      "aria-selected": "false",
                      children: "Fashion"
                    })
                  }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsx)("li", {
                    className: "nav-item",
                    role: "presentation",
                    children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsx)("a", {
                      className: "nav-link",
                      id: "enx1-tab-4",
                      "data-toggle": "pill",
                      href: "#enx1-tabs-4",
                      role: "tab",
                      "aria-selected": "false",
                      children: "Tech"
                    })
                  }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsx)("li", {
                    className: "nav-item",
                    role: "presentation",
                    children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsx)("a", {
                      className: "nav-link",
                      id: "enx1-tab-5",
                      "data-toggle": "pill",
                      href: "#enx1-tabs-5",
                      role: "tab",
                      "aria-selected": "false",
                      children: "Health"
                    })
                  })]
                })
              })
            })]
          })
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsxs)("div", {
          className: "tab-content",
          id: "enx1-content go-top",
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsx)("div", {
            className: "tab-pane fade show active",
            id: "enx1-tabs-1",
            role: "tabpanel",
            children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsx)("div", {
              className: "row",
              children: en !== null ? en.slice(0, 4).map(function (news1, i) {
                var _news1$summary;

                return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsx)("div", {
                  className: "col-lg-3 col-sm-6",
                  children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsxs)("div", {
                    className: "single-post-wrap",
                    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsxs)("div", {
                      className: "thumb",
                      children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsx)(react_lazy_load_image_component__WEBPACK_IMPORTED_MODULE_5__.LazyLoadImage, {
                        threshold: 85,
                        src: news1.media,
                        alt: "img"
                      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsx)(_inertiajs_inertia_react__WEBPACK_IMPORTED_MODULE_1__.Link, {
                        className: "tag-base tag-light-green",
                        href: route("entertainment"),
                        children: "Entertainment"
                      })]
                    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsxs)("div", {
                      className: "details",
                      children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsx)("div", {
                        className: "post-meta-single mb-3",
                        children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsxs)("ul", {
                          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsxs)("li", {
                            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsx)("i", {
                              className: "fa fa-clock-o"
                            }), moment__WEBPACK_IMPORTED_MODULE_2___default()(news1.published_date).format("DD-MM-YYYY")]
                          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsxs)("li", {
                            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsx)("i", {
                              className: "fa fa-user"
                            }), news1.author]
                          })]
                        })
                      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsx)("h3", {
                        className: "fs-4",
                        children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsx)("a", {
                          href: news1.link,
                          children: news1.title
                        })
                      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsxs)("p", {
                        children: [((_news1$summary = news1.summary) === null || _news1$summary === void 0 ? void 0 : _news1$summary.substring(0, 225)) + "..", /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsx)("a", {
                          className: "text-info",
                          href: news1.link,
                          children: "readmore"
                        })]
                      })]
                    })]
                  })
                }, i);
              }) : ""
            })
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsx)("div", {
            className: "tab-pane fade",
            id: "enx1-tabs-2",
            role: "tabpanel",
            children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsx)("div", {
              className: "row",
              children: pol !== null ? pol.slice(0, 4).map(function (news2, i) {
                var _news2$summary;

                return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsx)("div", {
                  className: "col-lg-3 col-sm-6",
                  children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsxs)("div", {
                    className: "single-post-wrap",
                    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsxs)("div", {
                      className: "thumb",
                      children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsx)(react_lazy_load_image_component__WEBPACK_IMPORTED_MODULE_5__.LazyLoadImage, {
                        threshold: 85,
                        src: news2.media,
                        alt: "img"
                      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsx)(_inertiajs_inertia_react__WEBPACK_IMPORTED_MODULE_1__.Link, {
                        className: "tag-base tag-light-green",
                        href: route("politics"),
                        children: "Politics"
                      })]
                    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsxs)("div", {
                      className: "details",
                      children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsx)("div", {
                        className: "post-meta-single mb-3",
                        children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsxs)("ul", {
                          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsxs)("li", {
                            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsx)("i", {
                              className: "fa fa-clock-o"
                            }), moment__WEBPACK_IMPORTED_MODULE_2___default()(news2.published_date).format("DD-MM-YYYY")]
                          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsxs)("li", {
                            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsx)("i", {
                              className: "fa fa-user"
                            }), news2.author]
                          })]
                        })
                      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsx)("h3", {
                        className: "fs-4",
                        children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsx)("a", {
                          href: news2.link,
                          children: news2.title
                        })
                      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsxs)("p", {
                        children: [((_news2$summary = news2.summary) === null || _news2$summary === void 0 ? void 0 : _news2$summary.substring(0, 225)) + "..", /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsx)("a", {
                          className: "text-info",
                          href: news2.link,
                          children: "readmore"
                        })]
                      })]
                    })]
                  })
                }, i);
              }) : ""
            })
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsx)("div", {
            className: "tab-pane fade",
            id: "enx1-tabs-3",
            role: "tabpanel",
            children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsx)("div", {
              className: "row",
              children: fa !== null ? fa.slice(0, 4).map(function (news3, i) {
                var _news3$summary;

                return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsx)("div", {
                  className: "col-lg-3 col-sm-6",
                  children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsxs)("div", {
                    className: "single-post-wrap",
                    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsxs)("div", {
                      className: "thumb",
                      children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsx)(react_lazy_load_image_component__WEBPACK_IMPORTED_MODULE_5__.LazyLoadImage, {
                        threshold: 85,
                        src: news3.media,
                        alt: "img"
                      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsx)(_inertiajs_inertia_react__WEBPACK_IMPORTED_MODULE_1__.Link, {
                        className: "tag-base tag-light-green",
                        href: route("fashion"),
                        children: "Fashion"
                      })]
                    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsxs)("div", {
                      className: "details",
                      children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsx)("div", {
                        className: "post-meta-single mb-3",
                        children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsxs)("ul", {
                          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsxs)("li", {
                            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsx)("i", {
                              className: "fa fa-clock-o"
                            }), moment__WEBPACK_IMPORTED_MODULE_2___default()(news3.published_date).format("DD-MM-YYYY")]
                          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsxs)("li", {
                            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsx)("i", {
                              className: "fa fa-user"
                            }), news3.author]
                          })]
                        })
                      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsx)("h3", {
                        className: "fs-4",
                        children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsx)("a", {
                          href: news3.link,
                          children: news3.title
                        })
                      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsxs)("p", {
                        children: [((_news3$summary = news3.summary) === null || _news3$summary === void 0 ? void 0 : _news3$summary.substring(0, 225)) + "..", /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsx)("a", {
                          className: "text-info",
                          href: news3.link,
                          children: "readmore"
                        })]
                      })]
                    })]
                  })
                }, i);
              }) : ""
            })
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsx)("div", {
            className: "tab-pane fade",
            id: "enx1-tabs-4",
            role: "tabpanel",
            children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsx)("div", {
              className: "row",
              children: te !== null ? te.slice(0, 4).map(function (news4, i) {
                var _news4$summary;

                return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsx)("div", {
                  className: "col-lg-3 col-sm-6",
                  children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsxs)("div", {
                    className: "single-post-wrap",
                    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsxs)("div", {
                      className: "thumb",
                      children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsx)(react_lazy_load_image_component__WEBPACK_IMPORTED_MODULE_5__.LazyLoadImage, {
                        threshold: 85,
                        src: news4.media,
                        alt: "img"
                      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsx)(_inertiajs_inertia_react__WEBPACK_IMPORTED_MODULE_1__.Link, {
                        className: "tag-base tag-light-green",
                        href: route("tech"),
                        children: "Tech"
                      })]
                    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsxs)("div", {
                      className: "details",
                      children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsx)("div", {
                        className: "post-meta-single mb-3",
                        children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsxs)("ul", {
                          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsxs)("li", {
                            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsx)("i", {
                              className: "fa fa-clock-o"
                            }), moment__WEBPACK_IMPORTED_MODULE_2___default()(news4.published_date).format("DD-MM-YYYY")]
                          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsxs)("li", {
                            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsx)("i", {
                              className: "fa fa-user"
                            }), news4.author]
                          })]
                        })
                      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsx)("h3", {
                        className: "fs-4",
                        children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsx)("a", {
                          href: news4.link,
                          children: news4.title
                        })
                      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsxs)("p", {
                        children: [((_news4$summary = news4.summary) === null || _news4$summary === void 0 ? void 0 : _news4$summary.substring(0, 225)) + "..", /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsx)("a", {
                          className: "text-info",
                          href: news4.link,
                          children: "readmore"
                        })]
                      })]
                    })]
                  })
                }, i);
              }) : ""
            })
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsx)("div", {
            className: "tab-pane fade",
            id: "enx1-tabs-5",
            role: "tabpanel",
            children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsx)("div", {
              className: "row",
              children: he !== null ? he.slice(0, 4).map(function (news5, i) {
                var _news5$summary;

                return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsx)("div", {
                  className: "col-lg-3 col-sm-6",
                  children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsxs)("div", {
                    className: "single-post-wrap",
                    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsxs)("div", {
                      className: "thumb",
                      children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsx)(react_lazy_load_image_component__WEBPACK_IMPORTED_MODULE_5__.LazyLoadImage, {
                        threshold: 85,
                        src: news5.media,
                        alt: "img"
                      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsx)(_inertiajs_inertia_react__WEBPACK_IMPORTED_MODULE_1__.Link, {
                        className: "tag-base tag-light-green",
                        href: route("health"),
                        children: "Health"
                      })]
                    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsxs)("div", {
                      className: "details",
                      children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsx)("div", {
                        className: "post-meta-single mb-3",
                        children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsxs)("ul", {
                          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsxs)("li", {
                            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsx)("i", {
                              className: "fa fa-clock-o"
                            }), moment__WEBPACK_IMPORTED_MODULE_2___default()(news5.published_date).format("DD-MM-YYYY")]
                          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsxs)("li", {
                            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsx)("i", {
                              className: "fa fa-user"
                            }), news5.author]
                          })]
                        })
                      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsx)("h3", {
                        className: "fs-4",
                        children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsx)("a", {
                          href: news5.link,
                          children: news5.title
                        })
                      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsxs)("p", {
                        children: [((_news5$summary = news5.summary) === null || _news5$summary === void 0 ? void 0 : _news5$summary.substring(0, 225)) + "..", /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsx)("a", {
                          className: "text-info",
                          href: news5.link,
                          children: "readmore"
                        })]
                      })]
                    })]
                  })
                }, i);
              }) : ""
            })
          })]
        })]
      })
    })
  });
}

/***/ })

}]);