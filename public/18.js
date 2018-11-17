webpackJsonp([18],{

/***/ 122:
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

/***/ 178:
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(122)
/* script */
var __vue_script__ = __webpack_require__(180)
/* template */
var __vue_template__ = __webpack_require__(179)
/* template functional */
var __vue_template_functional__ = false
/* styles */
var __vue_styles__ = null
/* scopeId */
var __vue_scopeId__ = null
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
Component.options.__file = "resources/assets/js/views/NewRegistration.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-1a481df6", Component.options)
  } else {
    hotAPI.reload("data-v-1a481df6", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),

/***/ 179:
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "v-container",
    { attrs: { fluid: "", "fill-height": "" } },
    [
      _c(
        "v-layout",
        { attrs: { "align-center": "", "justify-center": "" } },
        [
          _c(
            "v-flex",
            { attrs: { xs12: "", sm8: "", md4: "" } },
            [
              _c(
                "v-card",
                { staticClass: "elevation-12" },
                [
                  _c(
                    "v-toolbar",
                    { attrs: { dark: "", color: "primary" } },
                    [
                      _c("v-toolbar-title", [_vm._v("Регистрация")]),
                      _vm._v(" "),
                      _c("v-spacer")
                    ],
                    1
                  ),
                  _vm._v(" "),
                  _c(
                    "v-card-title",
                    {
                      staticClass:
                        "title font-weight-regular justify-space-between"
                    },
                    [
                      _c("span", [_vm._v(_vm._s(_vm.currentTitle))]),
                      _vm._v(" "),
                      _c("v-avatar", {
                        staticClass: "subheading white--text",
                        attrs: { color: "primary lighten-2", size: "24" },
                        domProps: { textContent: _vm._s(_vm.step) }
                      })
                    ],
                    1
                  ),
                  _vm._v(" "),
                  _c(
                    "v-window",
                    {
                      model: {
                        value: _vm.step,
                        callback: function($$v) {
                          _vm.step = $$v
                        },
                        expression: "step"
                      }
                    },
                    [
                      _c(
                        "v-window-item",
                        { attrs: { value: 1 } },
                        [
                          _c(
                            "v-card-text",
                            [
                              _c("v-text-field", {
                                attrs: {
                                  label: "Email",
                                  value: "john@vuetifyjs.com"
                                }
                              }),
                              _vm._v(" "),
                              _c(
                                "span",
                                {
                                  staticClass:
                                    "caption grey--text text--darken-1"
                                },
                                [
                                  _vm._v(
                                    "\n                                This is the email you will use to login to your Vuetify account\n                            "
                                  )
                                ]
                              )
                            ],
                            1
                          )
                        ],
                        1
                      ),
                      _vm._v(" "),
                      _c(
                        "v-window-item",
                        { attrs: { value: 2 } },
                        [
                          _c(
                            "v-card-text",
                            [
                              _c("v-text-field", {
                                attrs: { label: "Password", type: "password" }
                              }),
                              _vm._v(" "),
                              _c("v-text-field", {
                                attrs: {
                                  label: "Confirm Password",
                                  type: "password"
                                }
                              }),
                              _vm._v(" "),
                              _c(
                                "span",
                                {
                                  staticClass:
                                    "caption grey--text text--darken-1"
                                },
                                [
                                  _vm._v(
                                    "\n                                Please enter a password for your account\n                            "
                                  )
                                ]
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
                  _c("v-divider"),
                  _vm._v(" "),
                  _c(
                    "v-card-actions",
                    [
                      _c(
                        "v-btn",
                        {
                          attrs: { disabled: _vm.step === 1, flat: "" },
                          on: {
                            click: function($event) {
                              _vm.step--
                            }
                          }
                        },
                        [
                          _vm._v(
                            "\n                        Back\n                    "
                          )
                        ]
                      ),
                      _vm._v(" "),
                      _c("v-spacer"),
                      _vm._v(" "),
                      _c(
                        "v-btn",
                        {
                          attrs: {
                            disabled: _vm.step === 3,
                            color: "primary",
                            depressed: ""
                          },
                          on: {
                            click: function($event) {
                              _vm.step++
                            }
                          }
                        },
                        [
                          _vm._v(
                            "\n                        Next\n                    "
                          )
                        ]
                      )
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
    require("vue-hot-reload-api")      .rerender("data-v-1a481df6", module.exports)
  }
}

/***/ }),

/***/ 180:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
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
      step: 1
    };
  },

  computed: {
    currentTitle: function currentTitle() {
      switch (this.step) {
        case 1:
          return "Sign-up";
        case 2:
          return "Create a password";
        default:
          return "Account created";
      }
    }
  }
});

/***/ })

});