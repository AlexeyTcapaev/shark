webpackJsonp([25],{

/***/ 62:
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(73)
/* script */
var __vue_script__ = __webpack_require__(87)
/* template */
var __vue_template__ = __webpack_require__(88)
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
Component.options.__file = "resources/assets/js/views/Login.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-33212926", Component.options)
  } else {
    hotAPI.reload("data-v-33212926", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),

/***/ 73:
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

/***/ 87:
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


/* harmony default export */ __webpack_exports__["default"] = ({
  data: function data() {
    return {
      remember_me: false,
      login: "",
      password: "",
      alert: {
        enable: false
      },
      loading: false,
      show1: false,
      passwordRules: [function (v) {
        return !!v || "Password is required";
      }]
    };
  },
  methods: _extends({}, Object(__WEBPACK_IMPORTED_MODULE_0_vuex__["b" /* mapActions */])({ SetToken: "user/SetToken" }), {
    submit: function submit() {
      var init = this;
      this.loading = true;
      if (this.login.indexOf("@") > -1) axios.post("/api/auth/login", {
        email: init.login,
        password: init.password,
        remember_me: true
      }).then(function (resp) {
        init.SetToken(resp.data);
        init.loading = false;
        init.$router.push("/app");
      }).catch(function (error) {
        init.loading = false;
        init.alert.message = error.response.data.message;
        init.alert.enable = true;
      });else axios.post("/api/auth/login", {
        name: init.login,
        password: init.password,
        remember_me: true
      }).then(function (resp) {
        init.SetToken(resp.data);
        init.$router.push("/app");
      });
    }
  }),
  computed: {
    valid: function valid() {
      if (this.password !== "" && this.login !== "") return true;else return false;
    }
  },
  beforeCreate: function beforeCreate() {
    if (this.$store.state.user.token) {
      if (Object.keys(this.$store.state.user.token).length > 0) this.$router.push("/app");
    }
  }
});

/***/ }),

/***/ 88:
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
                      _c("v-toolbar-title", [_vm._v("Вход")]),
                      _vm._v(" "),
                      _c("v-spacer")
                    ],
                    1
                  ),
                  _vm._v(" "),
                  _c(
                    "v-card-text",
                    [
                      _c(
                        "v-alert",
                        {
                          attrs: { type: "error", dismissible: "" },
                          model: {
                            value: _vm.alert.enable,
                            callback: function($$v) {
                              _vm.$set(_vm.alert, "enable", $$v)
                            },
                            expression: "alert.enable"
                          }
                        },
                        [_vm._v(_vm._s(_vm.alert.message))]
                      ),
                      _vm._v(" "),
                      _c(
                        "v-form",
                        [
                          _c("v-text-field", {
                            attrs: {
                              outline: "",
                              label: "Login or E-mail",
                              "append-icon": "person",
                              loading: _vm.loading
                            },
                            model: {
                              value: _vm.login,
                              callback: function($$v) {
                                _vm.login = $$v
                              },
                              expression: "login"
                            }
                          }),
                          _vm._v(" "),
                          _c("v-text-field", {
                            attrs: {
                              loading: _vm.loading,
                              outline: "",
                              label: "Password",
                              "append-icon": _vm.show1
                                ? "visibility_off"
                                : "visibility",
                              type: _vm.show1 ? "text" : "password",
                              required: "",
                              rules: _vm.passwordRules
                            },
                            on: {
                              "click:append": function($event) {
                                _vm.show1 = !_vm.show1
                              }
                            },
                            model: {
                              value: _vm.password,
                              callback: function($$v) {
                                _vm.password = $$v
                              },
                              expression: "password"
                            }
                          }),
                          _vm._v(" "),
                          _c("v-switch", {
                            attrs: {
                              color: "primary",
                              label: "Запомнить меня"
                            },
                            model: {
                              value: _vm.remember_me,
                              callback: function($$v) {
                                _vm.remember_me = $$v
                              },
                              expression: "remember_me"
                            }
                          })
                        ],
                        1
                      )
                    ],
                    1
                  ),
                  _vm._v(" "),
                  _c(
                    "v-card-actions",
                    [
                      _c("v-spacer"),
                      _vm._v(" "),
                      _c(
                        "v-btn",
                        {
                          attrs: {
                            flat: "",
                            color: "primary",
                            to: "/registration"
                          }
                        },
                        [_vm._v("Регистрация")]
                      ),
                      _vm._v(" "),
                      _c(
                        "v-btn",
                        {
                          attrs: {
                            disabled: !_vm.valid,
                            color: "primary",
                            loading: _vm.loading
                          },
                          on: { click: _vm.submit }
                        },
                        [_vm._v("Отправить")]
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
    require("vue-hot-reload-api")      .rerender("data-v-33212926", module.exports)
  }
}

/***/ })

});