webpackJsonp([24],{

/***/ 61:
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(73)
/* script */
var __vue_script__ = __webpack_require__(85)
/* template */
var __vue_template__ = __webpack_require__(86)
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
Component.options.__file = "resources/assets/js/views/Registration.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-7ae5bf8c", Component.options)
  } else {
    hotAPI.reload("data-v-7ae5bf8c", Component.options)
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

/***/ 85:
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


/* harmony default export */ __webpack_exports__["default"] = ({
  data: function data() {
    return {
      valid: false,
      passwordValid: false,
      login: "",
      show1: false,
      show2: false,
      password: "",
      loading: false,
      err: [],
      alert: false,
      type: "success",
      alert_message: "",
      confrim_password: "",
      loginRules: [function (v) {
        return !!v || "Name is required";
      }, function (v) {
        return v && v.length <= 15 || "Name must be less than 15 characters";
      }],
      email: "",
      emailRules: [function (v) {
        return !!v || "E-mail is required";
      }, function (v) {
        return (/.+@.+/.test(v) || "E-mail must be valid"
        );
      }],
      passwordRules: [function (v) {
        return !!v || "Password is required";
      }]
    };
  },
  methods: _extends({}, Object(__WEBPACK_IMPORTED_MODULE_0_vuex__["b" /* mapActions */])({ SetToken: "user/SetToken" }), {
    submit: function submit() {
      this.loading = true;
      var init = this;
      axios.post("/api/auth/signup", {
        email: this.email,
        password: this.password,
        password_confirmation: this.confrim_password,
        name: this.login
      }).then(function (resp) {
        init.alert = true;
        init.alert_message = resp.data;
        init.type = "success";
        init.loading = false;
        axios.post("/api/auth/login", {
          email: init.email,
          password: init.password,
          remember_me: true
        }).then(function (resp) {
          init.SetToken(resp.data);
          init.$router.push("/app");
        });
      }).catch(function (error) {
        Object.keys(error.response.data.errors).forEach(function (element) {
          error.response.data.errors[element].forEach(function (err) {
            var e = {};
            e.message = err;
            e.alert = true;
            init.loading = false;
            init.err.push(e);
          });
        });
        console.log(error.response.data.errors);
      });
    },
    passwordCheck: function passwordCheck() {
      if (this.password === this.confrim_password) this.passwordValid = true;else this.passwordValid = false;
    }
  }),
  watch: {
    password: function password() {
      this.passwordCheck();
    },
    confrim_password: function confrim_password() {
      this.passwordCheck();
    }
  }
});

/***/ }),

/***/ 86:
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
                    "v-card-text",
                    [
                      _c(
                        "v-alert",
                        {
                          attrs: { type: _vm.type, dismissible: "" },
                          model: {
                            value: _vm.alert,
                            callback: function($$v) {
                              _vm.alert = $$v
                            },
                            expression: "alert"
                          }
                        },
                        [_vm._v(_vm._s(_vm.alert_message.message))]
                      ),
                      _vm._v(" "),
                      _vm._l(_vm.err, function(error, index) {
                        return _c(
                          "v-alert",
                          {
                            key: index,
                            attrs: { type: "error", dismissible: "" },
                            model: {
                              value: error.alert,
                              callback: function($$v) {
                                _vm.$set(error, "alert", $$v)
                              },
                              expression: "error.alert"
                            }
                          },
                          [_vm._v(_vm._s(error.message))]
                        )
                      }),
                      _vm._v(" "),
                      _c(
                        "v-form",
                        {
                          ref: "form",
                          model: {
                            value: _vm.valid,
                            callback: function($$v) {
                              _vm.valid = $$v
                            },
                            expression: "valid"
                          }
                        },
                        [
                          _c("v-text-field", {
                            attrs: {
                              loading: _vm.loading,
                              outline: "",
                              label: "Login",
                              "append-icon": "person",
                              required: "",
                              rules: _vm.loginRules
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
                              label: "E-mail",
                              "append-icon": "mail",
                              required: "",
                              rules: _vm.emailRules
                            },
                            model: {
                              value: _vm.email,
                              callback: function($$v) {
                                _vm.email = $$v
                              },
                              expression: "email"
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
                          _c("v-text-field", {
                            attrs: {
                              loading: _vm.loading,
                              outline: "",
                              label: "Confrim",
                              "append-icon": _vm.show2
                                ? "visibility_off"
                                : "visibility",
                              type: _vm.show2 ? "text" : "password",
                              required: ""
                            },
                            on: {
                              "click:append": function($event) {
                                _vm.show2 = !_vm.show2
                              }
                            },
                            model: {
                              value: _vm.confrim_password,
                              callback: function($$v) {
                                _vm.confrim_password = $$v
                              },
                              expression: "confrim_password"
                            }
                          })
                        ],
                        1
                      )
                    ],
                    2
                  ),
                  _vm._v(" "),
                  _c(
                    "v-card-actions",
                    [
                      _c("v-spacer"),
                      _vm._v(" "),
                      _c(
                        "v-btn",
                        { attrs: { flat: "", color: "primary", to: "/login" } },
                        [_vm._v("Есть аккаунт?")]
                      ),
                      _vm._v(" "),
                      _c(
                        "v-btn",
                        {
                          attrs: {
                            color: "primary",
                            disabled: !(
                              _vm.valid == true && _vm.passwordValid == true
                            ),
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
    require("vue-hot-reload-api")      .rerender("data-v-7ae5bf8c", module.exports)
  }
}

/***/ })

});