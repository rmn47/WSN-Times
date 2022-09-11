"use strict";
(self["webpackChunknews"] = self["webpackChunknews"] || []).push([["resources_js_components_banner_js"],{

/***/ "./resources/js/components/banner.js":
/*!*******************************************!*\
  !*** ./resources/js/components/banner.js ***!
  \*******************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ Banner)
/* harmony export */ });
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "./node_modules/react/index.js");
/* harmony import */ var moment__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! moment */ "./node_modules/moment/moment.js");
/* harmony import */ var moment__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(moment__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var react_helmet__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! react-helmet */ "./node_modules/react-helmet/es/Helmet.js");
/* harmony import */ var react_lazy_load_image_component__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! react-lazy-load-image-component */ "./node_modules/react-lazy-load-image-component/build/index.js");
/* harmony import */ var react_lazy_load_image_component__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(react_lazy_load_image_component__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! react/jsx-runtime */ "./node_modules/react/jsx-runtime.js");
function _slicedToArray(arr, i) { return _arrayWithHoles(arr) || _iterableToArrayLimit(arr, i) || _unsupportedIterableToArray(arr, i) || _nonIterableRest(); }

function _nonIterableRest() { throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); }

function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }

function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) { arr2[i] = arr[i]; } return arr2; }

function _iterableToArrayLimit(arr, i) { var _i = arr == null ? null : typeof Symbol !== "undefined" && arr[Symbol.iterator] || arr["@@iterator"]; if (_i == null) return; var _arr = []; var _n = true; var _d = false; var _s, _e; try { for (_i = _i.call(arr); !(_n = (_s = _i.next()).done); _n = true) { _arr.push(_s.value); if (i && _arr.length === i) break; } } catch (err) { _d = true; _e = err; } finally { try { if (!_n && _i["return"] != null) _i["return"](); } finally { if (_d) throw _e; } } return _arr; }

function _arrayWithHoles(arr) { if (Array.isArray(arr)) return arr; }







function Banner(props) {
  var _props$data, _nws$summary;

  var _useState = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)(false),
      _useState2 = _slicedToArray(_useState, 2),
      readMore = _useState2[0],
      setReadMore = _useState2[1];

  var nws = (_props$data = props.data) !== null && _props$data !== void 0 && _props$data.articles[0] ? props.data.articles[0] : null;
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_4__.jsxs)("section", {
    className: "appie-hero-area appie-hero-3-area",
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_4__.jsxs)(react_helmet__WEBPACK_IMPORTED_MODULE_2__.Helmet, {
      children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_4__.jsx)("meta", {
        charSet: "utf-8"
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_4__.jsx)("title", {
        children: "WSN Times | World Latest News, Today Headlines, English News, News Headlines"
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_4__.jsx)("meta", {
        name: "description",
        content: "Latest News - WSNTimes Get the latest news from World, politics, entertainment, sports, feature stories and much more"
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_4__.jsx)("meta", {
        name: "news_keywords",
        content: "Latest News, News, news update, latest online news, ufc latest news, the latest news, latest news ukraine, russia latest news, covid 19 latest news, politics news, entertainment news, sports news, cricket news, business news, technology news and much more"
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_4__.jsx)("meta", {
        name: "keywords",
        content: "Today News Headlines,todays latest updates,todays breaking news,share_update,current_affair_in_word,crime_news,world_sports_data,English News Headlines,Latest English News,world, world news, world breaking news, stock market today news, crypto today news, international news, news around the world, latest world news, world news headlines,Top Stories,Today Top Story,English News,Today's News,News Headlines,India news, breaking news, national news, u.s. news, world news, news video, entertainment news, political news, sports news, business news, travel news, health news, technology news, financial news, Latest international news, wsntimes.com"
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_4__.jsx)("meta", {
        property: "og:title",
        content: "World News: Today's latest updates and breaking news from world - wsntimes.com"
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_4__.jsx)("meta", {
        property: "og:description",
        content: "World News: Get Latest and breaking news from World. Today's Top International News Headlines, news on politics, Business, Crime, Sports and Current Affairs."
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_4__.jsx)("meta", {
        property: "og:type",
        content: "website"
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_4__.jsx)("meta", {
        property: "og:url",
        content: "https://wsntimes.com"
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_4__.jsx)("link", {
        rel: "canonical",
        href: "https://wsntimes.com"
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_4__.jsx)("meta", {
        property: "og:site_name",
        content: "wsntimes.com"
      })]
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_4__.jsx)("div", {
      className: "container",
      children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_4__.jsxs)("div", {
        className: "row",
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_4__.jsx)("div", {
          className: "col-lg-6",
          children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_4__.jsx)("div", {
            className: "thumb after-left-top mb-2",
            children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_4__.jsx)(react_lazy_load_image_component__WEBPACK_IMPORTED_MODULE_3__.LazyLoadImage, {
              threshold: 75,
              alt: "img",
              src: nws.media
            })
          })
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_4__.jsx)("div", {
          className: "col-lg-6 align-self-center",
          children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_4__.jsxs)("div", {
            className: "banner-details  mt-lg-0",
            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_4__.jsx)("div", {
              className: "post-meta-single",
              children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_4__.jsxs)("ul", {
                children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_4__.jsx)("li", {
                  children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_4__.jsx)("a", {
                    className: "tag-base tag-green",
                    target: "_blank",
                    href: "https://" + nws.rights,
                    children: nws.rights
                  })
                }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_4__.jsxs)("li", {
                  className: "date text-light",
                  children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_4__.jsx)("i", {
                    className: "fa fa-clock-o"
                  }), moment__WEBPACK_IMPORTED_MODULE_1___default()(nws.published_date).format("DD-MM-YYYY")]
                })]
              })
            }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_4__.jsx)("h1", {
              className: "fs-2",
              style: {
                color: "#d6d2ed"
              },
              children: nws.title
            }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_4__.jsx)("p", {
              className: "my-tgb",
              style: {
                color: "#d6d2ed"
              },
              children: readMore ? nws.summary : ((_nws$summary = nws.summary) === null || _nws$summary === void 0 ? void 0 : _nws$summary.substring(0, 225)) + "..."
            }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_4__.jsx)("button", {
              className: "btn tag-green  my-bg5 mb-2",
              onClick: function onClick() {
                return setReadMore(function (previous) {
                  return !previous;
                });
              },
              children: readMore ? "Read Less" : "Read more"
            })]
          })
        })]
      })
    })]
  });
}

/***/ })

}]);