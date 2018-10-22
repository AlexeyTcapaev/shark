webpackJsonp([16],{

/***/ 125:
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
function injectStyle (ssrContext) {
  if (disposed) return
  __webpack_require__(153)
}
var normalizeComponent = __webpack_require__(122)
/* script */
var __vue_script__ = __webpack_require__(155)
/* template */
var __vue_template__ = __webpack_require__(156)
/* template functional */
var __vue_template_functional__ = false
/* styles */
var __vue_styles__ = injectStyle
/* scopeId */
var __vue_scopeId__ = "data-v-0f91c9e4"
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
Component.options.__file = "resources/assets/js/views/components/RecursivePalet.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-0f91c9e4", Component.options)
  } else {
    hotAPI.reload("data-v-0f91c9e4", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),

/***/ 153:
/***/ (function(module, exports, __webpack_require__) {

// style-loader: Adds some css to the DOM by adding a <style> tag

// load the styles
var content = __webpack_require__(154);
if(typeof content === 'string') content = [[module.i, content, '']];
if(content.locals) module.exports = content.locals;
// add the styles to the DOM
var update = __webpack_require__(123)("72c942dc", content, false, {});
// Hot Module Replacement
if(false) {
 // When the styles change, update the <style> tags
 if(!content.locals) {
   module.hot.accept("!!../../../../../node_modules/css-loader/index.js!../../../../../node_modules/vue-loader/lib/style-compiler/index.js?{\"vue\":true,\"id\":\"data-v-0f91c9e4\",\"scoped\":true,\"hasInlineConfig\":true}!../../../../../node_modules/vue-loader/lib/selector.js?type=styles&index=0!./RecursivePalet.vue", function() {
     var newContent = require("!!../../../../../node_modules/css-loader/index.js!../../../../../node_modules/vue-loader/lib/style-compiler/index.js?{\"vue\":true,\"id\":\"data-v-0f91c9e4\",\"scoped\":true,\"hasInlineConfig\":true}!../../../../../node_modules/vue-loader/lib/selector.js?type=styles&index=0!./RecursivePalet.vue");
     if(typeof newContent === 'string') newContent = [[module.id, newContent, '']];
     update(newContent);
   });
 }
 // When the module is disposed, remove the <style> tags
 module.hot.dispose(function() { update(); });
}

/***/ }),

/***/ 154:
/***/ (function(module, exports, __webpack_require__) {

exports = module.exports = __webpack_require__(35)(false);
// imports


// module
exports.push([module.i, "\nbutton.v-btn--flat[data-v-0f91c9e4] {\r\n  margin: 6px 0;\n}\n.v-input__slot[data-v-0f91c9e4] {\r\n  margin: 0 0 0 15px;\n}\n.creator[data-v-0f91c9e4] {\r\n  margin-bottom: 15px;\n}\ndiv[data-v-0f91c9e4] {\r\n  text-align: left;\n}\n.department-header[data-v-0f91c9e4] {\r\n  display: -webkit-box;\r\n  display: -ms-flexbox;\r\n  display: flex;\r\n  -webkit-box-orient: horizontal;\r\n  -webkit-box-direction: normal;\r\n      -ms-flex-direction: row;\r\n          flex-direction: row;\r\n  -webkit-box-align: center;\r\n      -ms-flex-align: center;\r\n          align-items: center;\r\n  overflow: hidden;\n}\n.department-header i[data-v-0f91c9e4] {\r\n  margin-right: 5px;\n}\n.department-header p[data-v-0f91c9e4] {\r\n  font-weight: bold;\r\n  padding: 0 10px;\r\n  margin: 0;\n}\n.department-header .v-divider--vertical[data-v-0f91c9e4] {\r\n  height: 50px;\n}\n.v-expansion-panel__body .v-card[data-v-0f91c9e4] {\r\n  border-top: 1px solid rgba(0, 0, 0, 0.12);\n}\n.v-expansion-panel__container[data-v-0f91c9e4] {\r\n  border-left: 1px solid rgba(0, 0, 0, 0.12);\r\n  border-right: 1px solid rgba(0, 0, 0, 0.12);\n}\n.flex li[data-v-0f91c9e4]:last-of-type {\r\n  border-bottom: 1px solid rgba(0, 0, 0, 0.12);\n}\r\n", ""]);

// exports


/***/ }),

/***/ 155:
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
//
//
//
//
//
//
//
//
//
//
//
//

var RecursivePalet = function RecursivePalet() {
  return new Promise(function(resolve) { resolve(); }).then(__webpack_require__.bind(null, 125));
};
/* harmony default export */ __webpack_exports__["default"] = ({
  data: function data() {
    return {
      dialog: false
    };
  },
  components: {
    RecursivePalet: RecursivePalet
  },
  props: {
    item: {
      type: Object,
      default: {}
    }
  },

  methods: {
    AddDepartment: function AddDepartment() {
      var init = this;
      axios.post("/api/auth/departments", {
        name: this.item.newDepartment,
        root: this.item.slug
      }).then(function (resp) {
        init.item.children.push(resp.data);
      }).catch(function (error) {});
    }
  }
});

/***/ }),

/***/ 156:
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "v-expansion-panel-content",
    [
      _c("div", { attrs: { slot: "header" }, slot: "header" }, [
        _c(
          "div",
          { staticClass: "department-header" },
          [
            _c("v-icon", [_vm._v("group")]),
            _vm._v("123 "),
            _c("v-divider", { staticClass: "mx-3", attrs: { vertical: "" } }),
            _vm._v(" "),
            _c("p", [_vm._v(_vm._s(_vm.item.name))])
          ],
          1
        )
      ]),
      _vm._v(" "),
      _c(
        "v-card",
        [
          _c(
            "v-card-text",
            [
              _c(
                "v-flex",
                [
                  _c("v-text-field", {
                    attrs: {
                      outline: "",
                      label: "Введите название отдела",
                      "append-icon": "add"
                    },
                    on: {
                      "click:append": _vm.AddDepartment,
                      keyup: function($event) {
                        if (
                          !("button" in $event) &&
                          _vm._k(
                            $event.keyCode,
                            "enter",
                            13,
                            $event.key,
                            "Enter"
                          )
                        ) {
                          return null
                        }
                        return _vm.AddDepartment($event)
                      }
                    },
                    model: {
                      value: _vm.item.newDepartment,
                      callback: function($$v) {
                        _vm.$set(_vm.item, "newDepartment", $$v)
                      },
                      expression: "item.newDepartment"
                    }
                  }),
                  _vm._v(" "),
                  _vm._l(_vm.item.children, function(item, index) {
                    return item.children
                      ? _c("RecursivePalet", {
                          key: index,
                          attrs: { item: item }
                        })
                      : _vm._e()
                  }),
                  _vm._v(" "),
                  _c(
                    "v-layout",
                    {
                      attrs: {
                        "align-center": "",
                        "justify-center": "",
                        row: "",
                        "fill-height": "",
                        wrap: ""
                      }
                    },
                    [
                      _c(
                        "v-flex",
                        { attrs: { xl2: "", md12: "", sm12: "", xs12: "" } },
                        [_c("h2", [_vm._v("Сотрудники отдела")])]
                      ),
                      _vm._v(" "),
                      _c(
                        "v-flex",
                        { attrs: { xl10: "", md12: "", sm12: "", xs12: "" } },
                        [
                          _c("v-text-field", {
                            staticClass: "message-input",
                            attrs: {
                              outline: "",
                              label: "Поиск по сотрудникам",
                              "append-icon": "search"
                            },
                            on: {
                              "click:append": _vm.AddDepartment,
                              keyup: function($event) {
                                if (
                                  !("button" in $event) &&
                                  _vm._k(
                                    $event.keyCode,
                                    "enter",
                                    13,
                                    $event.key,
                                    "Enter"
                                  )
                                ) {
                                  return null
                                }
                                return _vm.AddDepartment($event)
                              }
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
                    "v-layout",
                    [
                      _c(
                        "v-dialog",
                        {
                          attrs: { width: "500" },
                          model: {
                            value: _vm.dialog,
                            callback: function($$v) {
                              _vm.dialog = $$v
                            },
                            expression: "dialog"
                          }
                        },
                        [
                          _c(
                            "v-btn",
                            {
                              attrs: { slot: "activator", flat: "" },
                              slot: "activator"
                            },
                            [
                              _c("v-icon", [_vm._v("add_circle_outline")]),
                              _vm._v("Добавить\n                      ")
                            ],
                            1
                          ),
                          _vm._v(" "),
                          _c(
                            "v-card",
                            [
                              _c(
                                "v-card-title",
                                {
                                  staticClass: "headline grey lighten-2",
                                  attrs: { "primary-title": "" }
                                },
                                [
                                  _vm._v(
                                    "\n                                Privacy Policy\n                            "
                                  )
                                ]
                              ),
                              _vm._v(" "),
                              _c("v-card-text", [
                                _vm._v(
                                  "\n                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor\n                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud\n                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute\n                                irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla\n                                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia\n                                deserunt mollit anim id est laborum.\n                            "
                                )
                              ]),
                              _vm._v(" "),
                              _c("v-divider"),
                              _vm._v(" "),
                              _c(
                                "v-card-actions",
                                [
                                  _c("v-spacer"),
                                  _vm._v(" "),
                                  _c(
                                    "v-btn",
                                    {
                                      attrs: { color: "primary", flat: "" },
                                      on: {
                                        click: function($event) {
                                          _vm.dialog = false
                                        }
                                      }
                                    },
                                    [
                                      _vm._v(
                                        "\n                                    I accept\n                                "
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
                2
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
    require("vue-hot-reload-api")      .rerender("data-v-0f91c9e4", module.exports)
  }
}

/***/ })

});