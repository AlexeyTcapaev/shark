webpackJsonp([0],{

/***/ 60:
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
function injectStyle (ssrContext) {
  if (disposed) return
  __webpack_require__(73)
}
var normalizeComponent = __webpack_require__(66)
/* script */
var __vue_script__ = __webpack_require__(75)
/* template */
var __vue_template__ = __webpack_require__(76)
/* template functional */
var __vue_template_functional__ = false
/* styles */
var __vue_styles__ = injectStyle
/* scopeId */
var __vue_scopeId__ = "data-v-6c0a33b2"
/* moduleIdentifier (server only) */
var __vue_module_identifier__ = null
var Component = normalizeComponent(
  __vue_script__,
  __vue_template__,
  __vue_template_functional__,
  __vue_styles__,
  __vue_scopeId__,
  __vue_module_identifier__
)
Component.options.__file = "resources/assets/js/views/Home.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-6c0a33b2", Component.options)
  } else {
    hotAPI.reload("data-v-6c0a33b2", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),

/***/ 66:
/***/ (function(module, exports) {

/* globals __VUE_SSR_CONTEXT__ */

// IMPORTANT: Do NOT use ES2015 features in this file.
// This module is a runtime utility for cleaner component module output and will
// be included in the final webpack user bundle.

module.exports = function normalizeComponent (
  rawScriptExports,
  compiledTemplate,
  functionalTemplate,
  injectStyles,
  scopeId,
  moduleIdentifier /* server only */
) {
  var esModule
  var scriptExports = rawScriptExports = rawScriptExports || {}

  // ES6 modules interop
  var type = typeof rawScriptExports.default
  if (type === 'object' || type === 'function') {
    esModule = rawScriptExports
    scriptExports = rawScriptExports.default
  }

  // Vue.extend constructor export interop
  var options = typeof scriptExports === 'function'
    ? scriptExports.options
    : scriptExports

  // render functions
  if (compiledTemplate) {
    options.render = compiledTemplate.render
    options.staticRenderFns = compiledTemplate.staticRenderFns
    options._compiled = true
  }

  // functional template
  if (functionalTemplate) {
    options.functional = true
  }

  // scopedId
  if (scopeId) {
    options._scopeId = scopeId
  }

  var hook
  if (moduleIdentifier) { // server build
    hook = function (context) {
      // 2.3 injection
      context =
        context || // cached call
        (this.$vnode && this.$vnode.ssrContext) || // stateful
        (this.parent && this.parent.$vnode && this.parent.$vnode.ssrContext) // functional
      // 2.2 with runInNewContext: true
      if (!context && typeof __VUE_SSR_CONTEXT__ !== 'undefined') {
        context = __VUE_SSR_CONTEXT__
      }
      // inject component styles
      if (injectStyles) {
        injectStyles.call(this, context)
      }
      // register component module identifier for async chunk inferrence
      if (context && context._registeredComponents) {
        context._registeredComponents.add(moduleIdentifier)
      }
    }
    // used by ssr in case component is cached and beforeCreate
    // never gets called
    options._ssrRegister = hook
  } else if (injectStyles) {
    hook = injectStyles
  }

  if (hook) {
    var functional = options.functional
    var existing = functional
      ? options.render
      : options.beforeCreate

    if (!functional) {
      // inject component registration as beforeCreate hook
      options.beforeCreate = existing
        ? [].concat(existing, hook)
        : [hook]
    } else {
      // for template-only hot-reload because in that case the render fn doesn't
      // go through the normalizer
      options._injectStyles = hook
      // register for functioal component in vue file
      options.render = function renderWithStyleInjection (h, context) {
        hook.call(context)
        return existing(h, context)
      }
    }
  }

  return {
    esModule: esModule,
    exports: scriptExports,
    options: options
  }
}


/***/ }),

/***/ 67:
/***/ (function(module, exports, __webpack_require__) {

/*
  MIT License http://www.opensource.org/licenses/mit-license.php
  Author Tobias Koppers @sokra
  Modified by Evan You @yyx990803
*/

var hasDocument = typeof document !== 'undefined'

if (typeof DEBUG !== 'undefined' && DEBUG) {
  if (!hasDocument) {
    throw new Error(
    'vue-style-loader cannot be used in a non-browser environment. ' +
    "Use { target: 'node' } in your Webpack config to indicate a server-rendering environment."
  ) }
}

var listToStyles = __webpack_require__(68)

/*
type StyleObject = {
  id: number;
  parts: Array<StyleObjectPart>
}

type StyleObjectPart = {
  css: string;
  media: string;
  sourceMap: ?string
}
*/

var stylesInDom = {/*
  [id: number]: {
    id: number,
    refs: number,
    parts: Array<(obj?: StyleObjectPart) => void>
  }
*/}

var head = hasDocument && (document.head || document.getElementsByTagName('head')[0])
var singletonElement = null
var singletonCounter = 0
var isProduction = false
var noop = function () {}
var options = null
var ssrIdKey = 'data-vue-ssr-id'

// Force single-tag solution on IE6-9, which has a hard limit on the # of <style>
// tags it will allow on a page
var isOldIE = typeof navigator !== 'undefined' && /msie [6-9]\b/.test(navigator.userAgent.toLowerCase())

module.exports = function (parentId, list, _isProduction, _options) {
  isProduction = _isProduction

  options = _options || {}

  var styles = listToStyles(parentId, list)
  addStylesToDom(styles)

  return function update (newList) {
    var mayRemove = []
    for (var i = 0; i < styles.length; i++) {
      var item = styles[i]
      var domStyle = stylesInDom[item.id]
      domStyle.refs--
      mayRemove.push(domStyle)
    }
    if (newList) {
      styles = listToStyles(parentId, newList)
      addStylesToDom(styles)
    } else {
      styles = []
    }
    for (var i = 0; i < mayRemove.length; i++) {
      var domStyle = mayRemove[i]
      if (domStyle.refs === 0) {
        for (var j = 0; j < domStyle.parts.length; j++) {
          domStyle.parts[j]()
        }
        delete stylesInDom[domStyle.id]
      }
    }
  }
}

function addStylesToDom (styles /* Array<StyleObject> */) {
  for (var i = 0; i < styles.length; i++) {
    var item = styles[i]
    var domStyle = stylesInDom[item.id]
    if (domStyle) {
      domStyle.refs++
      for (var j = 0; j < domStyle.parts.length; j++) {
        domStyle.parts[j](item.parts[j])
      }
      for (; j < item.parts.length; j++) {
        domStyle.parts.push(addStyle(item.parts[j]))
      }
      if (domStyle.parts.length > item.parts.length) {
        domStyle.parts.length = item.parts.length
      }
    } else {
      var parts = []
      for (var j = 0; j < item.parts.length; j++) {
        parts.push(addStyle(item.parts[j]))
      }
      stylesInDom[item.id] = { id: item.id, refs: 1, parts: parts }
    }
  }
}

function createStyleElement () {
  var styleElement = document.createElement('style')
  styleElement.type = 'text/css'
  head.appendChild(styleElement)
  return styleElement
}

function addStyle (obj /* StyleObjectPart */) {
  var update, remove
  var styleElement = document.querySelector('style[' + ssrIdKey + '~="' + obj.id + '"]')

  if (styleElement) {
    if (isProduction) {
      // has SSR styles and in production mode.
      // simply do nothing.
      return noop
    } else {
      // has SSR styles but in dev mode.
      // for some reason Chrome can't handle source map in server-rendered
      // style tags - source maps in <style> only works if the style tag is
      // created and inserted dynamically. So we remove the server rendered
      // styles and inject new ones.
      styleElement.parentNode.removeChild(styleElement)
    }
  }

  if (isOldIE) {
    // use singleton mode for IE9.
    var styleIndex = singletonCounter++
    styleElement = singletonElement || (singletonElement = createStyleElement())
    update = applyToSingletonTag.bind(null, styleElement, styleIndex, false)
    remove = applyToSingletonTag.bind(null, styleElement, styleIndex, true)
  } else {
    // use multi-style-tag mode in all other cases
    styleElement = createStyleElement()
    update = applyToTag.bind(null, styleElement)
    remove = function () {
      styleElement.parentNode.removeChild(styleElement)
    }
  }

  update(obj)

  return function updateStyle (newObj /* StyleObjectPart */) {
    if (newObj) {
      if (newObj.css === obj.css &&
          newObj.media === obj.media &&
          newObj.sourceMap === obj.sourceMap) {
        return
      }
      update(obj = newObj)
    } else {
      remove()
    }
  }
}

var replaceText = (function () {
  var textStore = []

  return function (index, replacement) {
    textStore[index] = replacement
    return textStore.filter(Boolean).join('\n')
  }
})()

function applyToSingletonTag (styleElement, index, remove, obj) {
  var css = remove ? '' : obj.css

  if (styleElement.styleSheet) {
    styleElement.styleSheet.cssText = replaceText(index, css)
  } else {
    var cssNode = document.createTextNode(css)
    var childNodes = styleElement.childNodes
    if (childNodes[index]) styleElement.removeChild(childNodes[index])
    if (childNodes.length) {
      styleElement.insertBefore(cssNode, childNodes[index])
    } else {
      styleElement.appendChild(cssNode)
    }
  }
}

function applyToTag (styleElement, obj) {
  var css = obj.css
  var media = obj.media
  var sourceMap = obj.sourceMap

  if (media) {
    styleElement.setAttribute('media', media)
  }
  if (options.ssrId) {
    styleElement.setAttribute(ssrIdKey, obj.id)
  }

  if (sourceMap) {
    // https://developer.chrome.com/devtools/docs/javascript-debugging
    // this makes source maps inside style tags work properly in Chrome
    css += '\n/*# sourceURL=' + sourceMap.sources[0] + ' */'
    // http://stackoverflow.com/a/26603875
    css += '\n/*# sourceMappingURL=data:application/json;base64,' + btoa(unescape(encodeURIComponent(JSON.stringify(sourceMap)))) + ' */'
  }

  if (styleElement.styleSheet) {
    styleElement.styleSheet.cssText = css
  } else {
    while (styleElement.firstChild) {
      styleElement.removeChild(styleElement.firstChild)
    }
    styleElement.appendChild(document.createTextNode(css))
  }
}


/***/ }),

/***/ 68:
/***/ (function(module, exports) {

/**
 * Translates the list format produced by css-loader into something
 * easier to manipulate.
 */
module.exports = function listToStyles (parentId, list) {
  var styles = []
  var newStyles = {}
  for (var i = 0; i < list.length; i++) {
    var item = list[i]
    var id = item[0]
    var css = item[1]
    var media = item[2]
    var sourceMap = item[3]
    var part = {
      id: parentId + ':' + i,
      css: css,
      media: media,
      sourceMap: sourceMap
    }
    if (!newStyles[id]) {
      styles.push(newStyles[id] = { id: id, parts: [part] })
    } else {
      newStyles[id].parts.push(part)
    }
  }
  return styles
}


/***/ }),

/***/ 73:
/***/ (function(module, exports, __webpack_require__) {

// style-loader: Adds some css to the DOM by adding a <style> tag

// load the styles
var content = __webpack_require__(74);
if(typeof content === 'string') content = [[module.i, content, '']];
if(content.locals) module.exports = content.locals;
// add the styles to the DOM
var update = __webpack_require__(67)("dacd05b4", content, false, {});
// Hot Module Replacement
if(false) {
 // When the styles change, update the <style> tags
 if(!content.locals) {
   module.hot.accept("!!../../../../node_modules/css-loader/index.js!../../../../node_modules/vue-loader/lib/style-compiler/index.js?{\"vue\":true,\"id\":\"data-v-6c0a33b2\",\"scoped\":true,\"hasInlineConfig\":true}!../../../../node_modules/vue-loader/lib/selector.js?type=styles&index=0!./Home.vue", function() {
     var newContent = require("!!../../../../node_modules/css-loader/index.js!../../../../node_modules/vue-loader/lib/style-compiler/index.js?{\"vue\":true,\"id\":\"data-v-6c0a33b2\",\"scoped\":true,\"hasInlineConfig\":true}!../../../../node_modules/vue-loader/lib/selector.js?type=styles&index=0!./Home.vue");
     if(typeof newContent === 'string') newContent = [[module.id, newContent, '']];
     update(newContent);
   });
 }
 // When the module is disposed, remove the <style> tags
 module.hot.dispose(function() { update(); });
}

/***/ }),

/***/ 74:
/***/ (function(module, exports, __webpack_require__) {

exports = module.exports = __webpack_require__(14)(false);
// imports


// module
exports.push([module.i, "\n.logo[data-v-6c0a33b2] {\n  color: #ffffff;\n  text-decoration: none;\n}\n.nav-btn[data-v-6c0a33b2] {\n  color: #ffffff !important;\n  height: 100%;\n}\n.v-menu[data-v-6c0a33b2] {\n  height: 100%;\n}\n.v-content[data-v-6c0a33b2] {\n  padding-top: 0px !important;\n}\n.wrapper[data-v-6c0a33b2] {\n  overflow: hidden;\n}\n.v-navigation-drawer[data-v-6c0a33b2] {\n  z-index: 6;\n}\n.v-bottom-nav[data-v-6c0a33b2] {\n  -webkit-box-shadow: 9px 3px 14px 2px rgba(0, 0, 0, 0.12);\n          box-shadow: 9px 3px 14px 2px rgba(0, 0, 0, 0.12);\n}\n.target-link .v-list__tile__content .v-list__tile__title[data-v-6c0a33b2] {\n  color: #f80b37 !important;\n}\n.target-link .v-icon[data-v-6c0a33b2] {\n  color: #f80b37 !important;\n}\n.fade-enter-active[data-v-6c0a33b2],\n.fade-leave-active[data-v-6c0a33b2] {\n  -webkit-transition-duration: 0.3s;\n          transition-duration: 0.3s;\n  -webkit-transition-property: opacity;\n  transition-property: opacity;\n  -webkit-transition-timing-function: ease;\n          transition-timing-function: ease;\n}\n.v-avatar .fade-enter[data-v-6c0a33b2],\n.fade-leave-active[data-v-6c0a33b2] {\n  opacity: 0;\n}\n.search-bar[data-v-6c0a33b2] {\n  margin: 5px 0;\n}\n.company[data-v-6c0a33b2] {\n  background: rgba(0, 0, 0, 0.1);\n}\n", ""]);

// exports


/***/ }),

/***/ 75:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_vuex__ = __webpack_require__(4);
var _extends = Object.assign || function (target) { for (var i = 1; i < arguments.length; i++) { var source = arguments[i]; for (var key in source) { if (Object.prototype.hasOwnProperty.call(source, key)) { target[key] = source[key]; } } } return target; };

//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//



/* harmony default export */ __webpack_exports__["default"] = ({
  data: function data() {
    return {
      dialog: false,
      drawer: false,
      search: "",
      bottomNav: "recent",
      items: [{ icon: "contacts", text: "Contacts" }, { icon: "history", text: "Frequently contacted" }, { icon: "content_copy", text: "Duplicates" }, {
        icon: "keyboard_arrow_up",
        "icon-alt": "keyboard_arrow_down",
        text: "Labels",
        model: true,
        children: [{ icon: "add", text: "Create label" }]
      }, {
        icon: "keyboard_arrow_up",
        "icon-alt": "keyboard_arrow_down",
        text: "More",
        model: false,
        children: [{ text: "Import" }, { text: "Export" }, { text: "Print" }, { text: "Undo changes" }, { text: "Other contacts" }]
      }, { icon: "settings", text: "Settings" }, { icon: "chat_bubble", text: "Send feedback" }, { icon: "help", text: "Help" }, { icon: "phonelink", text: "App downloads" }, { icon: "keyboard", text: "Go to the old version" }]
    };
  },
  methods: _extends({}, Object(__WEBPACK_IMPORTED_MODULE_0_vuex__["b" /* mapActions */])({ ResetState: "user/ResetState" }), {
    logout: function logout() {
      var init = this;
      axios.get("/api/auth/logout").then(function (resp) {
        init.ResetState();
        init.$router.push("/login");
      });
    }
  }),
  computed: _extends({}, Object(__WEBPACK_IMPORTED_MODULE_0_vuex__["c" /* mapGetters */])({
    windowWidth: "config/windowWidth",
    windowHeight: "config/windowHeight",
    company: "user/GetCompany"
  }), {
    page: function page() {
      if (this.windowWidth > 993) return this.windowHeight - 120;else return this.windowHeight - 112;
    },
    FiltredCompany: function FiltredCompany() {
      var _this = this;

      if (this.company !== undefined) return this.company.filter(function (elem) {
        if (_this.search === "") return true;else if (elem.name.indexOf(_this.search) > -1) return elem;
      });else return [];
    }
  })
});

/***/ }),

/***/ 76:
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "main",
    { staticClass: "fullheight" },
    [
      _c(
        "v-navigation-drawer",
        {
          attrs: { fixed: "", app: "" },
          model: {
            value: _vm.drawer,
            callback: function($$v) {
              _vm.drawer = $$v
            },
            expression: "drawer"
          }
        },
        [
          _c(
            "v-list",
            { attrs: { dense: "" } },
            [
              _c(
                "v-list-tile",
                {
                  attrs: { to: "/app", "exact-active-class": "target-link" },
                  on: { click: function($event) {} }
                },
                [
                  _c("v-list-tile-action", [_c("v-icon", [_vm._v("home")])], 1),
                  _vm._v(" "),
                  _c(
                    "v-list-tile-content",
                    [_c("v-list-tile-title", [_vm._v("Домашняя страница")])],
                    1
                  )
                ],
                1
              ),
              _vm._v(" "),
              _c(
                "v-list-tile",
                { staticClass: "search-bar" },
                [
                  _c(
                    "v-list-tile-content",
                    [
                      _c("v-text-field", {
                        attrs: {
                          outline: "",
                          label: "Поиск по компаниям",
                          "append-icon": "search"
                        },
                        model: {
                          value: _vm.search,
                          callback: function($$v) {
                            _vm.search = $$v
                          },
                          expression: "search"
                        }
                      })
                    ],
                    1
                  )
                ],
                1
              ),
              _vm._v(" "),
              _vm._l(_vm.FiltredCompany, function(comp, index) {
                return _c(
                  "v-list-tile",
                  {
                    key: index,
                    attrs: { to: "/", "exact-active-class": "target-link" }
                  },
                  [
                    _c(
                      "v-list-tile-action",
                      [
                        _c("v-avatar", { staticClass: "company" }, [
                          _c("img", {
                            attrs: { src: "/storage/uploads/" + comp.logo }
                          })
                        ])
                      ],
                      1
                    ),
                    _vm._v(" "),
                    _c(
                      "v-list-tile-content",
                      [
                        _c(
                          "v-badge",
                          { attrs: { color: "secondary" } },
                          [
                            _c(
                              "span",
                              { attrs: { slot: "badge" }, slot: "badge" },
                              [_vm._v("6")]
                            ),
                            _vm._v(" "),
                            _c("v-list-tile-title", [_vm._v(_vm._s(comp.name))])
                          ],
                          1
                        )
                      ],
                      1
                    )
                  ],
                  1
                )
              }),
              _vm._v(" "),
              _c(
                "v-list-tile",
                {
                  attrs: {
                    to: { name: "add_company" },
                    "exact-active-class": "target-link"
                  }
                },
                [
                  _c(
                    "v-list-tile-action",
                    [_c("v-icon", [_vm._v("add_circle_outline")])],
                    1
                  ),
                  _vm._v(" "),
                  _c(
                    "v-list-tile-content",
                    [
                      _c(
                        "v-badge",
                        { attrs: { color: "secondary" } },
                        [
                          _c(
                            "span",
                            { attrs: { slot: "badge" }, slot: "badge" },
                            [_vm._v("6")]
                          ),
                          _vm._v(" "),
                          _c("v-list-tile-title", [_vm._v("Создать компанию")])
                        ],
                        1
                      )
                    ],
                    1
                  )
                ],
                1
              )
            ],
            2
          )
        ],
        1
      ),
      _vm._v(" "),
      _c(
        "v-toolbar",
        { attrs: { color: "primary", dark: "", fixed: "", app: "" } },
        [
          _c("v-toolbar-side-icon", {
            on: {
              click: function($event) {
                $event.stopPropagation()
                _vm.drawer = !_vm.drawer
              }
            }
          }),
          _vm._v(" "),
          _c("v-list-tile-avatar", [
            _c("img", {
              staticClass: "img_logo",
              attrs: {
                src: "/storage/logo/temp_shark_logo.png",
                alt: "Бизнес - Акула"
              }
            })
          ]),
          _vm._v(" "),
          _vm.windowWidth > 993
            ? _c(
                "v-toolbar-title",
                [
                  _c(
                    "router-link",
                    { staticClass: "logo", attrs: { to: "/home" } },
                    [_vm._v("Бизнес - Акула")]
                  )
                ],
                1
              )
            : _vm._e(),
          _vm._v(" "),
          _c("v-spacer"),
          _vm._v(" "),
          _c(
            "v-menu",
            { attrs: { "offset-y": "" } },
            [
              _c(
                "v-btn",
                {
                  staticClass: "nav-btn",
                  attrs: { slot: "activator", dark: "", flat: "" },
                  slot: "activator"
                },
                [
                  _c("v-icon", [_vm._v("account_circle")]),
                  _vm._v(
                    "\n                " +
                      _vm._s(_vm.$store.state.user.user.name) +
                      "\n            "
                  )
                ],
                1
              ),
              _vm._v(" "),
              _c(
                "v-list",
                [
                  _c(
                    "v-list-tile",
                    { on: { click: _vm.logout } },
                    [_c("v-list-tile-title", [_vm._v("Выход")])],
                    1
                  )
                ],
                1
              )
            ],
            1
          )
        ],
        1
      ),
      _vm._v(" "),
      _c(
        "div",
        {
          directives: [{ name: "bar", rawName: "v-bar" }],
          staticClass: "wrapper",
          style: { height: _vm.page + "px" }
        },
        [
          _c(
            "div",
            [
              _c(
                "transition",
                { attrs: { name: "fade", mode: "out-in" } },
                [_c("router-view")],
                1
              )
            ],
            1
          )
        ]
      ),
      _vm._v(" "),
      _c(
        "v-bottom-nav",
        {
          attrs: { active: _vm.bottomNav, fixed: "", value: true },
          on: {
            "update:active": function($event) {
              _vm.bottomNav = $event
            }
          }
        },
        [
          _c(
            "v-btn",
            { attrs: { color: "teal", flat: "", value: "recent" } },
            [
              _c("span", [_vm._v("ERP")]),
              _vm._v(" "),
              _c("v-icon", [_vm._v("dashboard")])
            ],
            1
          ),
          _vm._v(" "),
          _c(
            "v-btn",
            { attrs: { color: "teal", flat: "", value: "favorites" } },
            [
              _c("span", [_vm._v("Новости")]),
              _vm._v(" "),
              _c("v-icon", [_vm._v("description")])
            ],
            1
          ),
          _vm._v(" "),
          _c(
            "v-btn",
            { attrs: { color: "teal", flat: "", value: "nearby" } },
            [
              _c("span", [_vm._v("Бизнес площадка")]),
              _vm._v(" "),
              _c("v-icon", [_vm._v("business")])
            ],
            1
          )
        ],
        1
      )
    ],
    1
  )
}
var staticRenderFns = []
render._withStripped = true
module.exports = { render: render, staticRenderFns: staticRenderFns }
if (false) {
  module.hot.accept()
  if (module.hot.data) {
    require("vue-hot-reload-api")      .rerender("data-v-6c0a33b2", module.exports)
  }
}

/***/ })

});