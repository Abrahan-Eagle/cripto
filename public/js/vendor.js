/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = "./src/js/bootstrap-navbar.js");
/******/ })
/************************************************************************/
/******/ ({

/***/ "./src/js/bootstrap-navbar.js":
/*!************************************!*\
  !*** ./src/js/bootstrap-navbar.js ***!
  \************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _utils__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./utils */ \"./src/js/utils.js\");\n\r\n/*-----------------------------------------------\r\n|   Top navigation opacity on scroll\r\n-----------------------------------------------*/\r\nconst navbarInit = () =>{\r\n  const Selector = {\r\n    NAVBAR: '[data-navbar-on-scroll]',\r\n    NAVBAR_COLLAPSE: '.navbar-collapse',\r\n    NAVBAR_TOGGLER: '.navbar-toggler',\r\n    \r\n  };\r\n\r\n  const ClassNames = {\r\n    COLLAPSED: 'collapsed',\r\n  };\r\n\r\n  \r\n  const Events = {\r\n    SCROLL: 'scroll',\r\n    SHOW_BS_COLLAPSE: 'show.bs.collapse',\r\n    HIDE_BS_COLLAPSE: 'hide.bs.collapse',\r\n    HIDDEN_BS_COLLAPSE: 'hidden.bs.collapse',\r\n  };\r\n\r\n  const DataKey = {\r\n    NAVBAR_ON_SCROLL: 'navbar-light-on-scroll'\r\n  };\r\n  \r\n  const navbar = document.querySelector(Selector.NAVBAR);  \r\n  if (navbar){\r\n    const windowHeight = window.innerHeight;\r\n    const html = document.documentElement;\r\n    const navbarCollapse = navbar.querySelector(Selector.NAVBAR_COLLAPSE);\r\n    const allColors = { ..._utils__WEBPACK_IMPORTED_MODULE_0__[\"default\"].colors, ..._utils__WEBPACK_IMPORTED_MODULE_0__[\"default\"].grays };\r\n\r\n    const name = _utils__WEBPACK_IMPORTED_MODULE_0__[\"default\"].getData(navbar, DataKey.NAVBAR_ON_SCROLL);\r\n    const colorName = Object.keys(allColors).includes(name) ? name : 'light';\r\n    const color = allColors[colorName];\r\n    const bgClassName = `bg-${colorName}`;\r\n    const shadowName = 'shadow-transition'\r\n    const colorRgb = _utils__WEBPACK_IMPORTED_MODULE_0__[\"default\"].hexToRgb(color);\r\n    const { backgroundImage } = window.getComputedStyle(navbar);\r\n    const transition = 'background-color 0.35s ease';\r\n    navbar.style.backgroundImage = 'none';\r\n\r\n     // Change navbar background color on scroll\r\n     window.addEventListener(Events.SCROLL, () => {\r\n      const { scrollTop } = html;\r\n      let alpha = (scrollTop / windowHeight) * .5;\r\n      alpha >= 1 && (alpha = 1);\r\n      navbar.style.backgroundColor = `rgba(${colorRgb[0]}, ${colorRgb[1]}, ${colorRgb[2]}, ${alpha})`;\r\n      navbar.style.backgroundImage = (alpha > 0 || _utils__WEBPACK_IMPORTED_MODULE_0__[\"default\"].hasClass(navbarCollapse, 'show')) ? backgroundImage : 'none';\r\n      (alpha > 0 || _utils__WEBPACK_IMPORTED_MODULE_0__[\"default\"].hasClass(navbarCollapse, 'show')) ? navbar.classList.add(shadowName):navbar.classList.remove(shadowName);\r\n    });\r\n\r\n     // Toggle bg class on window resize\r\n    _utils__WEBPACK_IMPORTED_MODULE_0__[\"default\"].resize(() => {\r\n      const breakPoint = _utils__WEBPACK_IMPORTED_MODULE_0__[\"default\"].getBreakpoint(navbar);\r\n      if (window.innerWidth > breakPoint) {\r\n        navbar.style.backgroundImage = html.scrollTop ? backgroundImage : 'none';\r\n        navbar.style.transition = 'none';\r\n      } \r\n      else if (\r\n        !_utils__WEBPACK_IMPORTED_MODULE_0__[\"default\"].hasClass(\r\n          navbar.querySelector(Selector.NAVBAR_TOGGLER),\r\n          ClassNames.COLLAPSED\r\n         \r\n        )\r\n      )\r\n\r\n      { \r\n        navbar.classList.add(bgClassName);\r\n        navbar.classList.add(shadowName);\r\n        navbar.style.backgroundImage = backgroundImage;\r\n      }\r\n     \r\n      if (window.innerWidth <= breakPoint) {\r\n        navbar.style.transition = _utils__WEBPACK_IMPORTED_MODULE_0__[\"default\"].hasClass(navbarCollapse, 'show') ? transition : 'none';\r\n      } \r\n\r\n    });\r\n\r\n    navbarCollapse.addEventListener(Events.SHOW_BS_COLLAPSE, () => {\r\n      navbar.classList.add(bgClassName);\r\n      navbar.classList.add(shadowName);\r\n      navbar.style.backgroundImage = backgroundImage;\r\n      navbar.style.transition = transition;\r\n    });\r\n\r\n    navbarCollapse.addEventListener(Events.HIDE_BS_COLLAPSE, () => {\r\n      navbar.classList.remove(bgClassName);\r\n      navbar.classList.remove(shadowName);\r\n      !html.scrollTop && (navbar.style.backgroundImage = 'none');\r\n    });\r\n\r\n    navbarCollapse.addEventListener(Events.HIDDEN_BS_COLLAPSE, () => {\r\n      navbar.style.transition = 'none';\r\n    });\r\n\r\n  }\r\n\r\n};\r\n\r\n/* harmony default export */ __webpack_exports__[\"default\"] = (navbarInit);\r\n\r\n\r\n\r\n\r\n\r\n\n\n//# sourceURL=webpack:///./src/js/bootstrap-navbar.js?");

/***/ }),

/***/ "./src/js/utils.js":
/*!*************************!*\
  !*** ./src/js/utils.js ***!
  \*************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* -------------------------------------------------------------------------- */\r\n/*                                    Utils                                   */\r\n/* -------------------------------------------------------------------------- */\r\nconst docReady = (fn) => {\r\n  // see if DOM is already available\r\n  if (document.readyState === \"loading\") {\r\n    document.addEventListener(\"DOMContentLoaded\", fn);\r\n  } else {\r\n    setTimeout(fn, 1);\r\n  }\r\n};\r\n\r\nconst resize = (fn) => window.addEventListener(\"resize\", fn);\r\n\r\nconst isIterableArray = (array) => Array.isArray(array) && !!array.length;\r\n\r\nconst camelize = (str) => {\r\n  const text = str.replace(/[-_\\s.]+(.)?/g, (_, c) =>\r\n    c ? c.toUpperCase() : \"\"\r\n  );\r\n  return `${text.substr(0, 1).toLowerCase()}${text.substr(1)}`;\r\n};\r\n\r\nconst getData = (el, data) => {\r\n  try {\r\n    return JSON.parse(el.dataset[camelize(data)]);\r\n  } catch (e) {\r\n    return el.dataset[camelize(data)];\r\n  }\r\n};\r\n\r\n/* ----------------------------- Colors function ---------------------------- */\r\n\r\nconst hexToRgb = (hexValue) => {\r\n  let hex;\r\n  hexValue.indexOf(\"#\") === 0\r\n    ? (hex = hexValue.substring(1))\r\n    : (hex = hexValue);\r\n  // Expand shorthand form (e.g. \"03F\") to full form (e.g. \"0033FF\")\r\n  const shorthandRegex = /^#?([a-f\\d])([a-f\\d])([a-f\\d])$/i;\r\n  const result = /^#?([a-f\\d]{2})([a-f\\d]{2})([a-f\\d]{2})$/i.exec(\r\n    hex.replace(shorthandRegex, (m, r, g, b) => r + r + g + g + b + b)\r\n  );\r\n  return result\r\n    ? [\r\n        parseInt(result[1], 16),\r\n        parseInt(result[2], 16),\r\n        parseInt(result[3], 16),\r\n      ]\r\n    : null;\r\n};\r\n\r\nconst rgbaColor = (color = \"#fff\", alpha = 0.5) =>\r\n  `rgba(${hexToRgb(color)}, ${alpha})`;\r\n\r\n/* --------------------------------- Colors --------------------------------- */\r\n\r\nconst colors = {\r\n  primary: \"#0057FF\",\r\n  secondary: \"#748194\",\r\n  success: \"#00d27a\",\r\n  info: \"#27bcfd\",\r\n  warning: \"#f5803e\",\r\n  danger: \"#e63757\",\r\n  light: \"#f9fafd\",\r\n  dark: \"#000\",\r\n};\r\n\r\nconst grays = {\r\n  white: \"#fff\",\r\n  100: \"#f9fafd\",\r\n  200: \"#edf2f9\",\r\n  300: \"#d8e2ef\",\r\n  400: \"#b6c1d2\",\r\n  500: \"#9da9bb\",\r\n  600: \"#748194\",\r\n  700: \"#162044\", //\r\n  800: \"#4d5969\",\r\n  900: \"#070E27\", // bg dark\r\n  1000: \"#232e3c\",\r\n  1100: \"#0b1727\",\r\n  black: \"#000\",\r\n};\r\n\r\nconst hasClass = (el, className) => {\r\n  !el && false;\r\n  return el.classList.value.includes(className);\r\n};\r\n\r\nconst addClass = (el, className) => {\r\n  el.classList.add(className);\r\n};\r\n\r\nconst getOffset = (el) => {\r\n  const rect = el.getBoundingClientRect();\r\n  const scrollLeft = window.pageXOffset || document.documentElement.scrollLeft;\r\n  const scrollTop = window.pageYOffset || document.documentElement.scrollTop;\r\n  return { top: rect.top + scrollTop, left: rect.left + scrollLeft };\r\n};\r\n\r\nconst isScrolledIntoView = (el) => {\r\n  let top = el.offsetTop;\r\n  let left = el.offsetLeft;\r\n  const width = el.offsetWidth;\r\n  const height = el.offsetHeight;\r\n\r\n  while (el.offsetParent) {\r\n    // eslint-disable-next-line no-param-reassign\r\n    el = el.offsetParent;\r\n    top += el.offsetTop;\r\n    left += el.offsetLeft;\r\n  }\r\n\r\n  return {\r\n    all:\r\n      top >= window.pageYOffset &&\r\n      left >= window.pageXOffset &&\r\n      top + height <= window.pageYOffset + window.innerHeight &&\r\n      left + width <= window.pageXOffset + window.innerWidth,\r\n    partial:\r\n      top < window.pageYOffset + window.innerHeight &&\r\n      left < window.pageXOffset + window.innerWidth &&\r\n      top + height > window.pageYOffset &&\r\n      left + width > window.pageXOffset,\r\n  };\r\n};\r\n\r\nconst breakpoints = {\r\n  xs: 0,\r\n  sm: 576,\r\n  md: 768,\r\n  lg: 992,\r\n  xl: 1200,\r\n  xxl: 1540,\r\n};\r\n\r\nconst getBreakpoint = (el) => {\r\n  const classes = el && el.classList.value;\r\n  let breakpoint;\r\n  if (classes) {\r\n    breakpoint =\r\n      breakpoints[\r\n        classes\r\n          .split(\" \")\r\n          .filter((cls) => cls.includes(\"navbar-expand-\"))\r\n          .pop()\r\n          .split(\"-\")\r\n          .pop()\r\n      ];\r\n  }\r\n  return breakpoint;\r\n};\r\n\r\n/* --------------------------------- Cookie --------------------------------- */\r\n\r\nconst setCookie = (name, value, expire) => {\r\n  const expires = new Date();\r\n  expires.setTime(expires.getTime() + expire);\r\n  document.cookie = name + \"=\" + value + \";expires=\" + expires.toUTCString();\r\n};\r\n\r\nconst getCookie = (name) => {\r\n  var keyValue = document.cookie.match(\"(^|;) ?\" + name + \"=([^;]*)(;|$)\");\r\n  return keyValue ? keyValue[2] : keyValue;\r\n};\r\n\r\nconst settings = {\r\n  tinymce: {\r\n    theme: \"oxide\",\r\n  },\r\n  chart: {\r\n    borderColor: \"rgba(255, 255, 255, 0.8)\",\r\n  },\r\n};\r\n\r\n/* -------------------------- Chart Initialization -------------------------- */\r\n\r\nconst newChart = (chart, config) => {\r\n  const ctx = chart.getContext(\"2d\");\r\n  return new window.Chart(ctx, config);\r\n};\r\n\r\n/* ---------------------------------- Store --------------------------------- */\r\n\r\nconst getItemFromStore = (key, defaultValue, store = localStorage) => {\r\n  try {\r\n    return JSON.parse(store.getItem(key)) || defaultValue;\r\n  } catch {\r\n    return store.getItem(key) || defaultValue;\r\n  }\r\n};\r\n\r\nconst setItemToStore = (key, payload, store = localStorage) =>\r\n  store.setItem(key, payload);\r\nconst getStoreSpace = (store = localStorage) =>\r\n  parseFloat(\r\n    (\r\n      escape(encodeURIComponent(JSON.stringify(store))).length /\r\n      (1024 * 1024)\r\n    ).toFixed(2)\r\n  );\r\n\r\nconst utils = {\r\n  docReady,\r\n  resize,\r\n  isIterableArray,\r\n  camelize,\r\n  getData,\r\n  hasClass,\r\n  addClass,\r\n  hexToRgb,\r\n  rgbaColor,\r\n  colors,\r\n  grays,\r\n  getOffset,\r\n  isScrolledIntoView,\r\n  getBreakpoint,\r\n  setCookie,\r\n  getCookie,\r\n  newChart,\r\n  settings,\r\n  getItemFromStore,\r\n  setItemToStore,\r\n  getStoreSpace,\r\n};\r\n/* harmony default export */ __webpack_exports__[\"default\"] = (utils);\r\n\n\n//# sourceURL=webpack:///./src/js/utils.js?");

/***/ })

/******/ });
"use strict";

function ownKeys(object, enumerableOnly) { var keys = Object.keys(object); if (Object.getOwnPropertySymbols) { var symbols = Object.getOwnPropertySymbols(object); if (enumerableOnly) symbols = symbols.filter(function (sym) { return Object.getOwnPropertyDescriptor(object, sym).enumerable; }); keys.push.apply(keys, symbols); } return keys; }

function _objectSpread(target) { for (var i = 1; i < arguments.length; i++) { var source = arguments[i] != null ? arguments[i] : {}; if (i % 2) { ownKeys(Object(source), true).forEach(function (key) { _defineProperty(target, key, source[key]); }); } else if (Object.getOwnPropertyDescriptors) { Object.defineProperties(target, Object.getOwnPropertyDescriptors(source)); } else { ownKeys(Object(source)).forEach(function (key) { Object.defineProperty(target, key, Object.getOwnPropertyDescriptor(source, key)); }); } } return target; }

function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }

/* -------------------------------------------------------------------------- */

/*                                    Utils                                   */

/* -------------------------------------------------------------------------- */
var docReady = function docReady(fn) {
  // see if DOM is already available
  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', fn);
  } else {
    setTimeout(fn, 1);
  }
};

var resize = function resize(fn) {
  return window.addEventListener('resize', fn);
};

var isIterableArray = function isIterableArray(array) {
  return Array.isArray(array) && !!array.length;
};

var camelize = function camelize(str) {
  var text = str.replace(/[-_\s.]+(.)?/g, function (_, c) {
    return c ? c.toUpperCase() : '';
  });
  return "".concat(text.substr(0, 1).toLowerCase()).concat(text.substr(1));
};

var getData = function getData(el, data) {
  try {
    return JSON.parse(el.dataset[camelize(data)]);
  } catch (e) {
    return el.dataset[camelize(data)];
  }
};
/* ----------------------------- Colors function ---------------------------- */


var hexToRgb = function hexToRgb(hexValue) {
  var hex;
  hexValue.indexOf('#') === 0 ? hex = hexValue.substring(1) : hex = hexValue; // Expand shorthand form (e.g. "03F") to full form (e.g. "0033FF")

  var shorthandRegex = /^#?([a-f\d])([a-f\d])([a-f\d])$/i;
  var result = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(hex.replace(shorthandRegex, function (m, r, g, b) {
    return r + r + g + g + b + b;
  }));
  return result ? [parseInt(result[1], 16), parseInt(result[2], 16), parseInt(result[3], 16)] : null;
};

var rgbaColor = function rgbaColor() {
  var color = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : '#fff';
  var alpha = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : 0.5;
  return "rgba(".concat(hexToRgb(color), ", ").concat(alpha, ")");
};
/* --------------------------------- Colors --------------------------------- */


var colors = {
  primary: '#0057FF',
  secondary: '#748194',
  success: '#00d27a',
  info: '#27bcfd',
  warning: '#f5803e',
  danger: '#e63757',
  light: '#f9fafd',
  dark: '#000'
};
var grays = {
  white: '#fff',
  100: '#f9fafd',
  200: '#edf2f9',
  300: '#d8e2ef',
  400: '#b6c1d2',
  500: '#9da9bb',
  600: '#748194',
  700: '#162044',
  //
  800: '#4d5969',
  900: '#070E27',
  // bg dark
  1000: '#232e3c',
  1100: '#0b1727',
  black: '#000'
};

var hasClass = function hasClass(el, className) {
  !el && false;
  return el.classList.value.includes(className);
};

var addClass = function addClass(el, className) {
  el.classList.add(className);
};

var getOffset = function getOffset(el) {
  var rect = el.getBoundingClientRect();
  var scrollLeft = window.pageXOffset || document.documentElement.scrollLeft;
  var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
  return {
    top: rect.top + scrollTop,
    left: rect.left + scrollLeft
  };
};

var isScrolledIntoView = function isScrolledIntoView(el) {
  var top = el.offsetTop;
  var left = el.offsetLeft;
  var width = el.offsetWidth;
  var height = el.offsetHeight;

  while (el.offsetParent) {
    // eslint-disable-next-line no-param-reassign
    el = el.offsetParent;
    top += el.offsetTop;
    left += el.offsetLeft;
  }

  return {
    all: top >= window.pageYOffset && left >= window.pageXOffset && top + height <= window.pageYOffset + window.innerHeight && left + width <= window.pageXOffset + window.innerWidth,
    partial: top < window.pageYOffset + window.innerHeight && left < window.pageXOffset + window.innerWidth && top + height > window.pageYOffset && left + width > window.pageXOffset
  };
};

var breakpoints = {
  xs: 0,
  sm: 576,
  md: 768,
  lg: 992,
  xl: 1200,
  xxl: 1540
};

var getBreakpoint = function getBreakpoint(el) {
  var classes = el && el.classList.value;
  var breakpoint;

  if (classes) {
    breakpoint = breakpoints[classes.split(' ').filter(function (cls) {
      return cls.includes('navbar-expand-');
    }).pop().split('-').pop()];
  }

  return breakpoint;
};
/* --------------------------------- Cookie --------------------------------- */


var setCookie = function setCookie(name, value, expire) {
  var expires = new Date();
  expires.setTime(expires.getTime() + expire);
  document.cookie = "".concat(name, "=").concat(value, ";expires=").concat(expires.toUTCString());
};

var getCookie = function getCookie(name) {
  var keyValue = document.cookie.match("(^|;) ?".concat(name, "=([^;]*)(;|$)"));
  return keyValue ? keyValue[2] : keyValue;
};

var settings = {
  tinymce: {
    theme: 'oxide'
  },
  chart: {
    borderColor: 'rgba(255, 255, 255, 0.8)'
  }
};
/* -------------------------- Chart Initialization -------------------------- */

var newChart = function newChart(chart, config) {
  var ctx = chart.getContext('2d');
  return new window.Chart(ctx, config);
};
/* ---------------------------------- Store --------------------------------- */


var getItemFromStore = function getItemFromStore(key, defaultValue) {
  var store = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : localStorage;

  try {
    return JSON.parse(store.getItem(key)) || defaultValue;
  } catch (_unused) {
    return store.getItem(key) || defaultValue;
  }
};

var setItemToStore = function setItemToStore(key, payload) {
  var store = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : localStorage;
  return store.setItem(key, payload);
};

var getStoreSpace = function getStoreSpace() {
  var store = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : localStorage;
  return parseFloat((escape(encodeURIComponent(JSON.stringify(store))).length / (1024 * 1024)).toFixed(2));
};

var utils = {
  docReady: docReady,
  resize: resize,
  isIterableArray: isIterableArray,
  camelize: camelize,
  getData: getData,
  hasClass: hasClass,
  addClass: addClass,
  hexToRgb: hexToRgb,
  rgbaColor: rgbaColor,
  colors: colors,
  grays: grays,
  getOffset: getOffset,
  isScrolledIntoView: isScrolledIntoView,
  getBreakpoint: getBreakpoint,
  setCookie: setCookie,
  getCookie: getCookie,
  newChart: newChart,
  settings: settings,
  getItemFromStore: getItemFromStore,
  setItemToStore: setItemToStore,
  getStoreSpace: getStoreSpace
};
/* -------------------------------------------------------------------------- */

/*                                  Detector                                  */

/* -------------------------------------------------------------------------- */

var detectorInit = function detectorInit() {
  var _window = window,
      is = _window.is;
  var html = document.querySelector('html');
  is.opera() && addClass(html, 'opera');
  is.mobile() && addClass(html, 'mobile');
  is.firefox() && addClass(html, 'firefox');
  is.safari() && addClass(html, 'safari');
  is.ios() && addClass(html, 'ios');
  is.iphone() && addClass(html, 'iphone');
  is.ipad() && addClass(html, 'ipad');
  is.ie() && addClass(html, 'ie');
  is.edge() && addClass(html, 'edge');
  is.chrome() && addClass(html, 'chrome');
  is.mac() && addClass(html, 'osx');
  is.windows() && addClass(html, 'windows');
  navigator.userAgent.match('CriOS') && addClass(html, 'chrome');
};
/*-----------------------------------------------
|   Top navigation opacity on scroll
-----------------------------------------------*/


var navbarInit = function navbarInit() {
  var Selector = {
    NAVBAR: '[data-navbar-on-scroll]',
    NAVBAR_COLLAPSE: '.navbar-collapse',
    NAVBAR_TOGGLER: '.navbar-toggler'
  };
  var ClassNames = {
    COLLAPSED: 'collapsed'
  };
  var Events = {
    SCROLL: 'scroll',
    SHOW_BS_COLLAPSE: 'show.bs.collapse',
    HIDE_BS_COLLAPSE: 'hide.bs.collapse',
    HIDDEN_BS_COLLAPSE: 'hidden.bs.collapse'
  };
  var DataKey = {
    NAVBAR_ON_SCROLL: 'navbar-light-on-scroll'
  };
  var navbar = document.querySelector(Selector.NAVBAR);

  if (navbar) {
    var windowHeight = window.innerHeight;
    var html = document.documentElement;
    var navbarCollapse = navbar.querySelector(Selector.NAVBAR_COLLAPSE);

    var allColors = _objectSpread(_objectSpread({}, utils.colors), utils.grays);

    var name = utils.getData(navbar, DataKey.NAVBAR_ON_SCROLL);
    var colorName = Object.keys(allColors).includes(name) ? name : 'light';
    var color = allColors[colorName];
    var bgClassName = "bg-".concat(colorName);
    var shadowName = 'shadow-transition';
    var colorRgb = utils.hexToRgb(color);

    var _window$getComputedSt = window.getComputedStyle(navbar),
        backgroundImage = _window$getComputedSt.backgroundImage;

    var transition = 'background-color 0.35s ease';
    navbar.style.backgroundImage = 'none'; // Change navbar background color on scroll

    window.addEventListener(Events.SCROLL, function () {
      var scrollTop = html.scrollTop;
      var alpha = scrollTop / windowHeight * 0.5;
      alpha >= 1 && (alpha = 1);
      navbar.style.backgroundColor = "rgba(".concat(colorRgb[0], ", ").concat(colorRgb[1], ", ").concat(colorRgb[2], ", ").concat(alpha, ")");
      navbar.style.backgroundImage = alpha > 0 || utils.hasClass(navbarCollapse, 'show') ? backgroundImage : 'none';
      alpha > 0 || utils.hasClass(navbarCollapse, 'show') ? navbar.classList.add(shadowName) : navbar.classList.remove(shadowName);
    }); // Toggle bg class on window resize

    utils.resize(function () {
      var breakPoint = utils.getBreakpoint(navbar);

      if (window.innerWidth > breakPoint) {
        navbar.style.backgroundImage = html.scrollTop ? backgroundImage : 'none';
        navbar.style.transition = 'none';
      } else if (!utils.hasClass(navbar.querySelector(Selector.NAVBAR_TOGGLER), ClassNames.COLLAPSED)) {
        navbar.classList.add(bgClassName);
        navbar.classList.add(shadowName);
        navbar.style.backgroundImage = backgroundImage;
      }

      if (window.innerWidth <= breakPoint) {
        navbar.style.transition = utils.hasClass(navbarCollapse, 'show') ? transition : 'none';
      }
    });
    navbarCollapse.addEventListener(Events.SHOW_BS_COLLAPSE, function () {
      navbar.classList.add(bgClassName);
      navbar.classList.add(shadowName);
      navbar.style.backgroundImage = backgroundImage;
      navbar.style.transition = transition;
    });
    navbarCollapse.addEventListener(Events.HIDE_BS_COLLAPSE, function () {
      navbar.classList.remove(bgClassName);
      navbar.classList.remove(shadowName);
      !html.scrollTop && (navbar.style.backgroundImage = 'none');
    });
    navbarCollapse.addEventListener(Events.HIDDEN_BS_COLLAPSE, function () {
      navbar.style.transition = 'none';
    });
  }
};
/* eslint-disable */

/* -------------------------------------------------------------------------- */

/*                         Navbar Darken on scroll                        */

/* -------------------------------------------------------------------------- */


var navbarDarkenOnScroll = function navbarDarkenOnScroll() {
  var Selector = {
    NAVBAR: "[data-navbar-darken-on-scroll]",
    NAVBAR_COLLAPSE: ".navbar-collapse",
    NAVBAR_TOGGLER: ".navbar-toggler"
  }; // const ClassNames = {
  //   COLLAPSED: "collapsed",
  // };

  var Events = {
    SCROLL: "scroll",
    SHOW_BS_COLLAPSE: "show.bs.collapse",
    HIDE_BS_COLLAPSE: "hide.bs.collapse",
    HIDDEN_BS_COLLAPSE: "hidden.bs.collapse"
  };
  var DataKey = {
    NAVBAR_DARKEN_ON_SCROLL: "navbar-darken-on-scroll"
  };
  var navbar = document.querySelector(Selector.NAVBAR);

  if (navbar) {
    var defaultColorName = 'dark';
    var windowHeight = window.innerHeight;
    var html = document.documentElement; // const navbarCollapse = navbar.querySelector(Selector.NAVBAR_COLLAPSE);

    var allColors = _objectSpread(_objectSpread({}, utils.colors), utils.grays);

    var name = utils.getData(navbar, DataKey.NAVBAR_DARKEN_ON_SCROLL);
    var colorName = Object.keys(allColors).includes(name.toString()) ? name : defaultColorName;
    var color = allColors[colorName]; // const bgClassName = `bg-${colorName}`;

    var colorRgb = utils.hexToRgb(color);

    var _window$getComputedSt2 = window.getComputedStyle(navbar),
        backgroundImage = _window$getComputedSt2.backgroundImage; // const transition = "background-color 0.35s ease";


    var borderColor = utils.hexToRgb(allColors['700']);
    var paddingTop = 48;
    navbar.style.paddingTop = "".concat(paddingTop, "px");
    navbar.style.backgroundImage = "none";
    navbar.style.borderBottom = "none"; //shadow

    var shadowName = 'shadow-transition'; // Change navbar background color on scroll'

    window.addEventListener(Events.SCROLL, function () {
      var scrollTop = html.scrollTop;
      var alpha = scrollTop / windowHeight * 2;
      alpha >= 1 && (alpha = 1);
      navbar.style.backgroundColor = "rgba(".concat(colorRgb[0], ", ").concat(colorRgb[1], ", ").concat(colorRgb[2], ", ").concat(alpha, ")");
      navbar.style.borderBottom = "1px solid rgba(".concat(borderColor[0], ", ").concat(borderColor[1], ", ").concat(borderColor[2], ", ").concat(alpha, ")");
      navbar.style.paddingTop = "".concat(paddingTop * (1 - alpha), "px");
      navbar.style.backgroundImage = alpha > 0 ? backgroundImage : "none";
      alpha > 0.2 ? navbar.classList.add(shadowName) : navbar.classList.remove(shadowName);
    }); // Toggle bg class on window resize
    // utils.resize(() => {
    //   const breakPoint = utils.getBreakpoint(navbar);
    //   if (window.innerWidth > breakPoint) {
    //     navbar.classList.remove(bgClassName);
    //     navbar.style.backgroundImage = html.scrollTop
    //       ? backgroundImage
    //       : "none";
    //     navbar.style.transition = "none";
    //   } else if (
    //     !utils.hasClass(
    //       navbar.querySelector(Selector.NAVBAR_TOGGLER),
    //       ClassNames.COLLAPSED
    //     )
    //   ) {
    //     navbar.classList.add(bgClassName);
    //     // navbar.classList.add(shadowName);
    //     navbar.style.backgroundImage = backgroundImage;
    //   }
    //   if (window.innerWidth <= breakPoint) {
    //     navbar.style.transition = utils.hasClass(navbarCollapse, "show")
    //       ? transition
    //       : "none";
    //   }
    // });
    // navbarCollapse.addEventListener(Events.SHOW_BS_COLLAPSE, () => {
    //   navbar.classList.add(bgClassName);
    //   navbar.classList.add(shadowName);
    //   navbar.style.backgroundImage = backgroundImage;
    //   navbar.style.transition = transition;
    // });
    // navbarCollapse.addEventListener(Events.HIDE_BS_COLLAPSE, () => {
    //   navbar.classList.remove(bgClassName);
    //   navbar.classList.remove(shadowName);
    //   !html.scrollTop && (navbar.style.backgroundImage = "none");
    // });
    // navbarCollapse.addEventListener(Events.HIDDEN_BS_COLLAPSE, () => {
    //   navbar.style.transition = "none";
    // });
  }
}; // /* -------------------------------------------------------------------------- */
// /*                            Theme Initialization                            */
// /* -------------------------------------------------------------------------- */


docReady(navbarInit);
docReady(detectorInit);
docReady(navbarDarkenOnScroll);
//# sourceMappingURL=theme.js.map

"use strict";function ownKeys(t,e){var o,n=Object.keys(t);return Object.getOwnPropertySymbols&&(o=Object.getOwnPropertySymbols(t),e&&(o=o.filter(function(e){return Object.getOwnPropertyDescriptor(t,e).enumerable})),n.push.apply(n,o)),n}function _objectSpread(t){for(var e=1;e<arguments.length;e++){var o=null!=arguments[e]?arguments[e]:{};e%2?ownKeys(Object(o),!0).forEach(function(e){_defineProperty(t,e,o[e])}):Object.getOwnPropertyDescriptors?Object.defineProperties(t,Object.getOwnPropertyDescriptors(o)):ownKeys(Object(o)).forEach(function(e){Object.defineProperty(t,e,Object.getOwnPropertyDescriptor(o,e))})}return t}function _defineProperty(e,t,o){return t in e?Object.defineProperty(e,t,{value:o,enumerable:!0,configurable:!0,writable:!0}):e[t]=o,e}var docReady=function(e){"loading"===document.readyState?document.addEventListener("DOMContentLoaded",e):setTimeout(e,1)},resize=function(e){return window.addEventListener("resize",e)},isIterableArray=function(e){return Array.isArray(e)&&!!e.length},camelize=function(e){e=e.replace(/[-_\s.]+(.)?/g,function(e,t){return t?t.toUpperCase():""});return"".concat(e.substr(0,1).toLowerCase()).concat(e.substr(1))},getData=function(t,o){try{return JSON.parse(t.dataset[camelize(o)])}catch(e){return t.dataset[camelize(o)]}},hexToRgb=function(e){e=0===e.indexOf("#")?e.substring(1):e,e=/^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(e.replace(/^#?([a-f\d])([a-f\d])([a-f\d])$/i,function(e,t,o,n){return t+t+o+o+n+n}));return e?[parseInt(e[1],16),parseInt(e[2],16),parseInt(e[3],16)]:null},rgbaColor=function(){var e=0<arguments.length&&void 0!==arguments[0]?arguments[0]:"#fff",t=1<arguments.length&&void 0!==arguments[1]?arguments[1]:.5;return"rgba(".concat(hexToRgb(e),", ").concat(t,")")},colors={primary:"#0057FF",secondary:"#748194",success:"#00d27a",info:"#27bcfd",warning:"#f5803e",danger:"#e63757",light:"#f9fafd",dark:"#000"},grays={white:"#fff",100:"#f9fafd",200:"#edf2f9",300:"#d8e2ef",400:"#b6c1d2",500:"#9da9bb",600:"#748194",700:"#162044",800:"#4d5969",900:"#070E27",1e3:"#232e3c",1100:"#0b1727",black:"#000"},hasClass=function(e,t){return e.classList.value.includes(t)},addClass=function(e,t){e.classList.add(t)},getOffset=function(e){var t=e.getBoundingClientRect(),o=window.pageXOffset||document.documentElement.scrollLeft,e=window.pageYOffset||document.documentElement.scrollTop;return{top:t.top+e,left:t.left+o}},isScrolledIntoView=function(e){for(var t=e.offsetTop,o=e.offsetLeft,n=e.offsetWidth,a=e.offsetHeight;e.offsetParent;)t+=(e=e.offsetParent).offsetTop,o+=e.offsetLeft;return{all:t>=window.pageYOffset&&o>=window.pageXOffset&&t+a<=window.pageYOffset+window.innerHeight&&o+n<=window.pageXOffset+window.innerWidth,partial:t<window.pageYOffset+window.innerHeight&&o<window.pageXOffset+window.innerWidth&&t+a>window.pageYOffset&&o+n>window.pageXOffset}},breakpoints={xs:0,sm:576,md:768,lg:992,xl:1200,xxl:1540},getBreakpoint=function(e){var t,e=e&&e.classList.value;return t=e?breakpoints[e.split(" ").filter(function(e){return e.includes("navbar-expand-")}).pop().split("-").pop()]:t},setCookie=function(e,t,o){var n=new Date;n.setTime(n.getTime()+o),document.cookie="".concat(e,"=").concat(t,";expires=").concat(n.toUTCString())},getCookie=function(e){e=document.cookie.match("(^|;) ?".concat(e,"=([^;]*)(;|$)"));return e&&e[2]},settings={tinymce:{theme:"oxide"},chart:{borderColor:"rgba(255, 255, 255, 0.8)"}},newChart=function(e,t){e=e.getContext("2d");return new window.Chart(e,t)},getItemFromStore=function(t,o){var n=2<arguments.length&&void 0!==arguments[2]?arguments[2]:localStorage;try{return JSON.parse(n.getItem(t))||o}catch(e){return n.getItem(t)||o}},setItemToStore=function(e,t){return(2<arguments.length&&void 0!==arguments[2]?arguments[2]:localStorage).setItem(e,t)},getStoreSpace=function(){var e=0<arguments.length&&void 0!==arguments[0]?arguments[0]:localStorage;return parseFloat((escape(encodeURIComponent(JSON.stringify(e))).length/1048576).toFixed(2))},utils={docReady:docReady,resize:resize,isIterableArray:isIterableArray,camelize:camelize,getData:getData,hasClass:hasClass,addClass:addClass,hexToRgb:hexToRgb,rgbaColor:rgbaColor,colors:colors,grays:grays,getOffset:getOffset,isScrolledIntoView:isScrolledIntoView,getBreakpoint:getBreakpoint,setCookie:setCookie,getCookie:getCookie,newChart:newChart,settings:settings,getItemFromStore:getItemFromStore,setItemToStore:setItemToStore,getStoreSpace:getStoreSpace},detectorInit=function(){var e=window.is,t=document.querySelector("html");e.opera()&&addClass(t,"opera"),e.mobile()&&addClass(t,"mobile"),e.firefox()&&addClass(t,"firefox"),e.safari()&&addClass(t,"safari"),e.ios()&&addClass(t,"ios"),e.iphone()&&addClass(t,"iphone"),e.ipad()&&addClass(t,"ipad"),e.ie()&&addClass(t,"ie"),e.edge()&&addClass(t,"edge"),e.chrome()&&addClass(t,"chrome"),e.mac()&&addClass(t,"osx"),e.windows()&&addClass(t,"windows"),navigator.userAgent.match("CriOS")&&addClass(t,"chrome")},navbarInit=function(){var t,o,n,e,a,r,s,i,c,d=".navbar-collapse",l=".navbar-toggler",u="collapsed",g="scroll",f="show.bs.collapse",p="hide.bs.collapse",b="hidden.bs.collapse",w=document.querySelector("[data-navbar-on-scroll]");w&&(t=window.innerHeight,o=document.documentElement,n=w.querySelector(d),e=_objectSpread(_objectSpread({},utils.colors),utils.grays),d=utils.getData(w,"navbar-light-on-scroll"),d=e[e=Object.keys(e).includes(d)?d:"light"],a="bg-".concat(e),r="shadow-transition",s=utils.hexToRgb(d),i=window.getComputedStyle(w).backgroundImage,c="background-color 0.35s ease",w.style.backgroundImage="none",window.addEventListener(g,function(){var e=o.scrollTop/t*.5;1<=e&&(e=1),w.style.backgroundColor="rgba(".concat(s[0],", ").concat(s[1],", ").concat(s[2],", ").concat(e,")"),w.style.backgroundImage=0<e||utils.hasClass(n,"show")?i:"none",0<e||utils.hasClass(n,"show")?w.classList.add(r):w.classList.remove(r)}),utils.resize(function(){var e=utils.getBreakpoint(w);window.innerWidth>e?(w.style.backgroundImage=o.scrollTop?i:"none",w.style.transition="none"):utils.hasClass(w.querySelector(l),u)||(w.classList.add(a),w.classList.add(r),w.style.backgroundImage=i),window.innerWidth<=e&&(w.style.transition=utils.hasClass(n,"show")?c:"none")}),n.addEventListener(f,function(){w.classList.add(a),w.classList.add(r),w.style.backgroundImage=i,w.style.transition=c}),n.addEventListener(p,function(){w.classList.remove(a),w.classList.remove(r),o.scrollTop||(w.style.backgroundImage="none")}),n.addEventListener(b,function(){w.style.transition="none"}))},navbarDarkenOnScroll=function(){var t,o,e,n,a,r,s,i,c=document.querySelector("[data-navbar-darken-on-scroll]");c&&(t=window.innerHeight,o=document.documentElement,e=_objectSpread(_objectSpread({},utils.colors),utils.grays),n=utils.getData(c,"navbar-darken-on-scroll"),n=e[Object.keys(e).includes(n.toString())?n:"dark"],a=utils.hexToRgb(n),r=window.getComputedStyle(c).backgroundImage,s=utils.hexToRgb(e[700]),c.style.paddingTop="".concat(48,"px"),c.style.backgroundImage="none",c.style.borderBottom="none",i="shadow-transition",window.addEventListener("scroll",function(){var e=o.scrollTop/t*2;1<=e&&(e=1),c.style.backgroundColor="rgba(".concat(a[0],", ").concat(a[1],", ").concat(a[2],", ").concat(e,")"),c.style.borderBottom="1px solid rgba(".concat(s[0],", ").concat(s[1],", ").concat(s[2],", ").concat(e,")"),c.style.paddingTop="".concat(48*(1-e),"px"),c.style.backgroundImage=0<e?r:"none",.2<e?c.classList.add(i):c.classList.remove(i)}))};docReady(navbarInit),docReady(detectorInit),docReady(navbarDarkenOnScroll);
//# sourceMappingURL=theme.min.js.map
