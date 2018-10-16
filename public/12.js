webpackJsonp([12],{

/***/ 121:
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(122)
/* script */
var __vue_script__ = __webpack_require__(175)
/* template */
var __vue_template__ = __webpack_require__(176)
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
Component.options.__file = "resources/assets/js/views/AddChat.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-08a8d7d4", Component.options)
  } else {
    hotAPI.reload("data-v-08a8d7d4", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),

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

/***/ 175:
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


/* harmony default export */ __webpack_exports__["default"] = ({
  data: function data() {
    return {
      alert: {
        enable: false,
        type: "success"
      },
      newChat: {
        users: []
      },
      users: [],
      loading: false
    };
  },
  methods: {
    submit: function submit() {
      var init = this;
      this.newChat.users.push(this.user);
      this.newChat.users = JSON.stringify(this.newChat.users);
      axios.post("/api/auth/chats", this.newChat).then(function (resp) {
        init.alert.message = "Диалог успешно создан.";
        init.alert.enable = true;
      }).catch(function (error) {
        init.alert.message = "Ошибка при создании диалога.";
        init.alert.enable = true;
        init.alert.type = "error";
      });
    },
    remove: function remove(item) {
      var index = this.newChat.users.indexOf(item);
      if (index >= 0) this.newChat.users.splice(index, 1);
    }
  },
  computed: _extends({}, Object(__WEBPACK_IMPORTED_MODULE_0_vuex__["c" /* mapGetters */])({ user: "user/GetUser" }), {
    valid: function valid() {
      return true;
    }
  }),
  mounted: function mounted() {
    var init = this;
    axios.get("/api/auth/users/" + this.user.id).then(function (resp) {
      init.users = resp.data;
    }).catch(function (error) {});
  }
});

/***/ }),

/***/ 176:
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
                      _c("v-toolbar-title", [_vm._v("Cоздание чата")]),
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
                          attrs: { type: _vm.alert.type, dismissible: "" },
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
                          _c("v-autocomplete", {
                            attrs: {
                              items: _vm.users,
                              outline: "",
                              chips: "",
                              label: "Добавить участников",
                              "item-text": "name",
                              "item-value": "name",
                              "return-object": "",
                              multiple: ""
                            },
                            scopedSlots: _vm._u([
                              {
                                key: "selection",
                                fn: function(data) {
                                  return [
                                    _c(
                                      "v-chip",
                                      {
                                        staticClass: "chip--select-multi",
                                        attrs: {
                                          selected: data.selected,
                                          close: ""
                                        },
                                        on: {
                                          input: function($event) {
                                            _vm.remove(data.item)
                                          }
                                        }
                                      },
                                      [
                                        _c(
                                          "v-avatar",
                                          [
                                            data.item.avatar
                                              ? _c("img", {
                                                  attrs: {
                                                    src:
                                                      "/storage/uploads/" +
                                                      data.item.avatar
                                                  }
                                                })
                                              : _c("v-icon", [
                                                  _vm._v("account_circle")
                                                ])
                                          ],
                                          1
                                        ),
                                        _vm._v(
                                          "\n                                    " +
                                            _vm._s(data.item.name) +
                                            "\n                                "
                                        )
                                      ],
                                      1
                                    )
                                  ]
                                }
                              },
                              {
                                key: "item",
                                fn: function(data) {
                                  return [
                                    typeof data.item !== "object"
                                      ? [
                                          _c("v-list-tile-content", {
                                            domProps: {
                                              textContent: _vm._s(data.item)
                                            }
                                          })
                                        ]
                                      : [
                                          _c(
                                            "v-list-tile-avatar",
                                            [
                                              data.item.avatar
                                                ? _c("img", {
                                                    attrs: {
                                                      src:
                                                        "/storage/uploads/" +
                                                        data.item.avatar
                                                    }
                                                  })
                                                : _c("v-icon", [
                                                    _vm._v("account_circle")
                                                  ])
                                            ],
                                            1
                                          ),
                                          _vm._v(" "),
                                          _c(
                                            "v-list-tile-content",
                                            [
                                              _c("v-list-tile-title", {
                                                domProps: {
                                                  innerHTML: _vm._s(
                                                    data.item.name
                                                  )
                                                }
                                              }),
                                              _vm._v(" "),
                                              _c("v-list-tile-sub-title", {
                                                domProps: {
                                                  innerHTML: _vm._s(
                                                    data.item.group
                                                  )
                                                }
                                              })
                                            ],
                                            1
                                          )
                                        ]
                                  ]
                                }
                              }
                            ]),
                            model: {
                              value: _vm.newChat.users,
                              callback: function($$v) {
                                _vm.$set(_vm.newChat, "users", $$v)
                              },
                              expression: "newChat.users"
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
                            disabled: !_vm.valid,
                            color: "primary",
                            loading: _vm.loading
                          },
                          on: { click: _vm.submit }
                        },
                        [_vm._v("Создать")]
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
    require("vue-hot-reload-api")      .rerender("data-v-08a8d7d4", module.exports)
  }
}

/***/ })

});