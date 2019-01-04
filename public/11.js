webpackJsonp([11],{

/***/ 100:
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(114)
/* script */
var __vue_script__ = __webpack_require__(128)
/* template */
var __vue_template__ = __webpack_require__(129)
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

/***/ 114:
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

/***/ 128:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_vuex__ = __webpack_require__(13);
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


/* harmony default export */ __webpack_exports__["default"] = ({
  data: function data() {
    return {
      user: {},
      step: 1,
      valid1: false,
      valid2: false,
      passwordValid: false,
      login: "",
      show1: false,
      show2: false,
      password: "",
      loading: false,
      err: [],
      alert: {
        enable: false,
        message: ""
      },
      type: "success",
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
    BackWindow: function BackWindow() {
      this.step--;
      this.valid = true;
    },
    NextWindow: function NextWindow() {
      var _this = this;

      this.loading = true;
      this.alert = {};
      if (this.step == 1) {
        axios.post("/api/auth/email", { email: this.user.email }).then(function (resp) {
          _this.step++;
          _this.loading = false;
        }).catch(function (error) {
          _this.alert.message = error.response.data.error;
          _this.alert.enable = true;
          _this.loading = false;
        });
      } else if (this.step == 2) {
        axios.post("/api/auth/signup", this.user).then(function (resp) {
          axios.post("/api/auth/login", {
            email: _this.user.email,
            password: _this.user.password,
            remember_me: true
          }).then(function (resp) {
            _this.loading = false;
            _this.SetToken(resp.data);
            _this.step++;
            setTimeout(function () {
              _this.$router.push("/app");
            }, 5000);
          });
        }).catch(function (error) {
          Object.keys(error.response.data.errors).forEach(function (element) {
            error.response.data.errors[element].forEach(function (err) {
              var e = {};
              e.message = err;
              e.alert = true;
              _this.loading = false;
              init.err.push(e);
            });
          });
          console.log(error.response.data.errors);
        });
      }
      this.valid = false;
      this.loading = false;
    }
  }),

  computed: {
    currentTitle: function currentTitle() {
      switch (this.step) {
        case 1:
          return "E-mail";
        case 2:
          return "Логин и пароль";
        default:
          return "Учётная запись создана";
      }
    },
    checkValid: function checkValid() {
      if (this.step === 3) return true;
      if (this.step == 1) if (this.valid1 == false) return true;
      if (this.step == 2) if (this.valid2 == false) return true;
      return false;
    }
  }
});

/***/ }),

/***/ 129:
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
                        staticClass: "subheading secondary white--text",
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
                                {
                                  ref: "form",
                                  model: {
                                    value: _vm.valid1,
                                    callback: function($$v) {
                                      _vm.valid1 = $$v
                                    },
                                    expression: "valid1"
                                  }
                                },
                                [
                                  _c("v-text-field", {
                                    attrs: {
                                      outline: "",
                                      label: "E-mail",
                                      "append-icon": "mail",
                                      required: "",
                                      rules: _vm.emailRules
                                    },
                                    model: {
                                      value: _vm.user.email,
                                      callback: function($$v) {
                                        _vm.$set(_vm.user, "email", $$v)
                                      },
                                      expression: "user.email"
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
                                        "\n                                    Указанный почтовый адрес будет использован для создания учётной записи\n                                "
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
                      _c(
                        "v-window-item",
                        { attrs: { value: 2 } },
                        [
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
                                    value: _vm.valid2,
                                    callback: function($$v) {
                                      _vm.valid2 = $$v
                                    },
                                    expression: "valid2"
                                  }
                                },
                                [
                                  _c("v-text-field", {
                                    attrs: {
                                      outline: "",
                                      label: "Login",
                                      "append-icon": "person",
                                      required: "",
                                      rules: _vm.loginRules
                                    },
                                    model: {
                                      value: _vm.user.name,
                                      callback: function($$v) {
                                        _vm.$set(_vm.user, "name", $$v)
                                      },
                                      expression: "user.name"
                                    }
                                  }),
                                  _vm._v(" "),
                                  _c("v-text-field", {
                                    attrs: {
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
                                      value: _vm.user.password,
                                      callback: function($$v) {
                                        _vm.$set(_vm.user, "password", $$v)
                                      },
                                      expression: "user.password"
                                    }
                                  }),
                                  _vm._v(" "),
                                  _c("v-text-field", {
                                    attrs: {
                                      outline: "",
                                      label: "Confrim",
                                      "append-icon": _vm.show2
                                        ? "visibility_off"
                                        : "visibility",
                                      type: _vm.show2 ? "text" : "password",
                                      required: "",
                                      rules: _vm.passwordRules
                                    },
                                    on: {
                                      "click:append": function($event) {
                                        _vm.show2 = !_vm.show2
                                      }
                                    },
                                    model: {
                                      value: _vm.user.password_confirmation,
                                      callback: function($$v) {
                                        _vm.$set(
                                          _vm.user,
                                          "password_confirmation",
                                          $$v
                                        )
                                      },
                                      expression: "user.password_confirmation"
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
                                        "\n                                    Введите логин и пароль для вашего аккаунта\n                                "
                                      )
                                    ]
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
                      _c("v-window-item", { attrs: { value: 3 } }, [
                        _c("div", { staticClass: "pa-3 text-xs-center" }, [
                          _c(
                            "h3",
                            { staticClass: "title font-weight-light mb-2" },
                            [_vm._v("Добро пожаловать!")]
                          ),
                          _vm._v(" "),
                          _c("span", { staticClass: "caption grey--text" }, [
                            _vm._v("Спасибо за регистрацию!")
                          ])
                        ])
                      ])
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
                          attrs: {
                            to: { name: "login" },
                            flat: "",
                            color: "primary"
                          }
                        },
                        [
                          _vm._v(
                            "\n                        Вход\n                    "
                          )
                        ]
                      ),
                      _vm._v(" "),
                      _c(
                        "v-btn",
                        {
                          attrs: {
                            disabled: _vm.step === 1,
                            flat: "",
                            color: "primary"
                          },
                          on: { click: _vm.BackWindow }
                        },
                        [
                          _vm._v(
                            "\n                        Назад\n                    "
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
                            disabled: _vm.checkValid,
                            color: "primary",
                            depressed: "",
                            loading: _vm.loading
                          },
                          on: { click: _vm.NextWindow }
                        },
                        [
                          _vm._v(
                            "\n                        Далее\n                    "
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

/***/ })

});