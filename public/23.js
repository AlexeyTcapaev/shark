webpackJsonp([23],{

/***/ 118:
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
function injectStyle (ssrContext) {
  if (disposed) return
  __webpack_require__(148)
}
var normalizeComponent = __webpack_require__(115)
/* script */
var __vue_script__ = __webpack_require__(150)
/* template */
var __vue_template__ = __webpack_require__(152)
/* template functional */
var __vue_template_functional__ = false
/* styles */
var __vue_styles__ = injectStyle
/* scopeId */
var __vue_scopeId__ = "data-v-d56076d6"
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
Component.options.__file = "resources/assets/js/views/pages/company/structure/components/RecursivePalet.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-d56076d6", Component.options)
  } else {
    hotAPI.reload("data-v-d56076d6", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),

/***/ 148:
/***/ (function(module, exports, __webpack_require__) {

// style-loader: Adds some css to the DOM by adding a <style> tag

// load the styles
var content = __webpack_require__(149);
if(typeof content === 'string') content = [[module.i, content, '']];
if(content.locals) module.exports = content.locals;
// add the styles to the DOM
var update = __webpack_require__(116)("49bd6bdc", content, false, {});
// Hot Module Replacement
if(false) {
 // When the styles change, update the <style> tags
 if(!content.locals) {
   module.hot.accept("!!../../../../../../../../node_modules/css-loader/index.js!../../../../../../../../node_modules/vue-loader/lib/style-compiler/index.js?{\"vue\":true,\"id\":\"data-v-d56076d6\",\"scoped\":true,\"hasInlineConfig\":true}!../../../../../../../../node_modules/vue-loader/lib/selector.js?type=styles&index=0!./RecursivePalet.vue", function() {
     var newContent = require("!!../../../../../../../../node_modules/css-loader/index.js!../../../../../../../../node_modules/vue-loader/lib/style-compiler/index.js?{\"vue\":true,\"id\":\"data-v-d56076d6\",\"scoped\":true,\"hasInlineConfig\":true}!../../../../../../../../node_modules/vue-loader/lib/selector.js?type=styles&index=0!./RecursivePalet.vue");
     if(typeof newContent === 'string') newContent = [[module.id, newContent, '']];
     update(newContent);
   });
 }
 // When the module is disposed, remove the <style> tags
 module.hot.dispose(function() { update(); });
}

/***/ }),

/***/ 149:
/***/ (function(module, exports, __webpack_require__) {

exports = module.exports = __webpack_require__(96)(false);
// imports


// module
exports.push([module.i, "\nbutton.v-btn--flat[data-v-d56076d6] {\n  margin: 6px 0;\n}\n.v-input__slot[data-v-d56076d6] {\n  margin: 0 0 0 15px;\n}\n.creator[data-v-d56076d6] {\n  margin-bottom: 15px;\n}\ndiv[data-v-d56076d6] {\n  text-align: left;\n}\n.department-header[data-v-d56076d6] {\n  display: -webkit-box;\n  display: -ms-flexbox;\n  display: flex;\n  -webkit-box-orient: horizontal;\n  -webkit-box-direction: normal;\n      -ms-flex-direction: row;\n          flex-direction: row;\n  -webkit-box-align: center;\n      -ms-flex-align: center;\n          align-items: center;\n  overflow: hidden;\n}\n.padding-top[data-v-d56076d6]{\npadding: 10px 0 0 0;\n}\n.department-header i[data-v-d56076d6] {\n  margin-right: 5px;\n}\n.department-header p[data-v-d56076d6] {\n  font-weight: bold;\n  padding: 0 10px;\n  margin: 0;\n}\n.department-header .v-divider--vertical[data-v-d56076d6] {\n  height: 50px;\n}\n.v-expansion-panel__body .v-card[data-v-d56076d6] {\n  border-top: 1px solid rgba(0, 0, 0, 0.12);\n}\n.v-expansion-panel__container[data-v-d56076d6] {\n  border-left: 1px solid rgba(0, 0, 0, 0.12);\n  border-right: 1px solid rgba(0, 0, 0, 0.12);\n}\n.flex li[data-v-d56076d6]:last-of-type {\n  border-bottom: 1px solid rgba(0, 0, 0, 0.12);\n}\n.users-grid[data-v-d56076d6] {\n  display: -webkit-box;\n  display: -ms-flexbox;\n  display: flex;\n}\n.no-border[data-v-d56076d6]{\n    border-bottom: none!important;\n}\n", ""]);

// exports


/***/ }),

/***/ 150:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_vuex__ = __webpack_require__(13);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__api_UserFunctions_js__ = __webpack_require__(151);
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
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
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
  return new Promise(function(resolve) { resolve(); }).then(__webpack_require__.bind(null, 118));
};
var EmployeesCard = function EmployeesCard() {
  return __webpack_require__.e/* import() */(19/* duplicate */).then(__webpack_require__.bind(null, 174));
};


/* harmony default export */ __webpack_exports__["default"] = ({
  data: function data() {
    return {
      dialog: false,
      search: null,
      members: [],
      searchLoading: false,
      users: []
    };
  },
  components: {
    RecursivePalet: RecursivePalet,
    EmployeesCard: EmployeesCard
  },
  props: {
    item: {
      type: Object,
      default: {}
    }
  },
  watch: {
    search: function search(val) {
      var _this = this;

      if (val != null && val.length > 3) {
        Object(__WEBPACK_IMPORTED_MODULE_1__api_UserFunctions_js__["b" /* searchUserInComapny */])(val, this.$route.params.slug).then(function (resp) {
          _this.users = resp.data;
        });
      }
    }
  },
  computed: _extends({}, Object(__WEBPACK_IMPORTED_MODULE_0_vuex__["d" /* mapState */])("user", { AuthUser: "user" })),
  methods: {
    attachUser: function attachUser() {
      var _this2 = this;

      this.members.map(function (member) {
        Object(__WEBPACK_IMPORTED_MODULE_1__api_UserFunctions_js__["a" /* attachUserToDepartment */])(member, _this2.item.slug, _this2.$route.params.slug).then(function (resp) {});
      });
    },
    AddDepartment: function AddDepartment() {
      var init = this;
      axios.post("/api/auth/departments", {
        name: this.item.newDepartment,
        parent: this.item.slug,
        root: this.$route.params.slug
      }).then(function (resp) {
        init.item.children.push(resp.data);
      }).catch(function (error) {});
    },
    remove: function remove(item) {
      var index = this.members.indexOf(item);
      if (index >= 0) this.members.splice(index, 1);
    }
  }
});

/***/ }),

/***/ 151:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* unused harmony export loginUser */
/* unused harmony export attachUserToCompany */
/* harmony export (immutable) */ __webpack_exports__["a"] = attachUserToDepartment;
/* unused harmony export attachUserToChat */
/* unused harmony export detachUserToCompany */
/* unused harmony export detachUserToChat */
/* harmony export (immutable) */ __webpack_exports__["b"] = searchUserInComapny;
/* unused harmony export searchUser */
/* unused harmony export searchUserInDepartment */
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_axios__ = __webpack_require__(35);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_axios___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_0_axios__);


function loginUser() {}
function attachUserToCompany(userId) {}
function attachUserToDepartment(members, department, company) {

    return __WEBPACK_IMPORTED_MODULE_0_axios___default.a.post("/api/auth/department/" + department + "/users/attach", {
        id: member.id,
        company: company
    });
}
function attachUserToChat(userId) {}
function detachUserToCompany(userId) {}
function detachUserToChat(userId) {}
function searchUserInComapny(search, comanySlug) {
    return __WEBPACK_IMPORTED_MODULE_0_axios___default.a.get("/api/auth/search/users", {
        params: {
            search: search,
            company: comanySlug
        }
    });
}
function searchUser(userId) {}
function searchUserInDepartment(userId) {}

/***/ }),

/***/ 152:
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
            _vm._v("123\n      "),
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
                    "div",
                    { staticClass: "padding-top" },
                    [
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
                            {
                              attrs: { xl2: "", md12: "", sm12: "", xs12: "" }
                            },
                            [_c("h2", [_vm._v("Сотрудники отдела")])]
                          ),
                          _vm._v(" "),
                          _c(
                            "v-flex",
                            {
                              attrs: { xl10: "", md12: "", sm12: "", xs12: "" }
                            },
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
                                [_vm._v("Добавить")]
                              ),
                              _vm._v(" "),
                              _c(
                                "v-card",
                                [
                                  _c("v-card-title", [
                                    _c("h4", [
                                      _vm._v("Поиск по пользователям компании")
                                    ])
                                  ]),
                                  _vm._v(" "),
                                  _c(
                                    "v-card-text",
                                    [
                                      _c("v-autocomplete", {
                                        attrs: {
                                          items: _vm.users,
                                          box: "",
                                          chips: "",
                                          outline: "",
                                          "search-input": _vm.search,
                                          "hide-no-data": "",
                                          placeholder:
                                            "Начните ввод для поиска",
                                          loading: _vm.searchLoading,
                                          "hide-selected": "",
                                          "item-text": "name",
                                          "return-object": "",
                                          multiple: ""
                                        },
                                        on: {
                                          "update:searchInput": function(
                                            $event
                                          ) {
                                            _vm.search = $event
                                          }
                                        },
                                        scopedSlots: _vm._u([
                                          {
                                            key: "selection",
                                            fn: function(data) {
                                              return [
                                                _c(
                                                  "v-chip",
                                                  {
                                                    staticClass:
                                                      "chip--select-multi",
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
                                                                  data.item
                                                                    .avatar
                                                              }
                                                            })
                                                          : _c("v-icon", [
                                                              _vm._v(
                                                                "account_circle"
                                                              )
                                                            ])
                                                      ],
                                                      1
                                                    ),
                                                    _vm._v(
                                                      "\n                          " +
                                                        _vm._s(data.item.name) +
                                                        "\n                        "
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
                                                      _c(
                                                        "v-list-tile-content",
                                                        {
                                                          domProps: {
                                                            textContent: _vm._s(
                                                              data.item
                                                            )
                                                          }
                                                        }
                                                      )
                                                    ]
                                                  : [
                                                      _c(
                                                        "v-list-tile-avatar",
                                                        [
                                                          data.item.avatar
                                                            ? _c("img", {
                                                                attrs: {
                                                                  src:
                                                                    data.item
                                                                      .avatar
                                                                }
                                                              })
                                                            : _c("v-icon", [
                                                                _vm._v(
                                                                  "account_circle"
                                                                )
                                                              ])
                                                        ],
                                                        1
                                                      ),
                                                      _vm._v(" "),
                                                      _c(
                                                        "v-list-tile-content",
                                                        [
                                                          _c(
                                                            "v-list-tile-title",
                                                            {
                                                              domProps: {
                                                                innerHTML: _vm._s(
                                                                  data.item.name
                                                                )
                                                              }
                                                            }
                                                          ),
                                                          _vm._v(" "),
                                                          _c(
                                                            "v-list-tile-sub-title",
                                                            {
                                                              domProps: {
                                                                innerHTML: _vm._s(
                                                                  data.item
                                                                    .group
                                                                )
                                                              }
                                                            }
                                                          )
                                                        ],
                                                        1
                                                      )
                                                    ]
                                              ]
                                            }
                                          }
                                        ]),
                                        model: {
                                          value: _vm.members,
                                          callback: function($$v) {
                                            _vm.members = $$v
                                          },
                                          expression: "members"
                                        }
                                      })
                                    ],
                                    1
                                  ),
                                  _vm._v(" "),
                                  _c(
                                    "v-card-actions",
                                    [
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
                                        [_vm._v("Close")]
                                      ),
                                      _vm._v(" "),
                                      _c("v-spacer"),
                                      _vm._v(" "),
                                      _c(
                                        "v-btn",
                                        {
                                          attrs: { color: "primary" },
                                          on: { click: _vm.attachUser }
                                        },
                                        [_vm._v("Добавить")]
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
                      ),
                      _vm._v(" "),
                      _c(
                        "v-layout",
                        [
                          _vm.item.employees
                            ? _c("v-flex", [
                                _c(
                                  "ul",
                                  { staticClass: "users-grid" },
                                  _vm._l(_vm.item.employees, function(
                                    user,
                                    index
                                  ) {
                                    return _c(
                                      "li",
                                      { key: index, staticClass: "no-border" },
                                      [
                                        _c("EmployeesCard", {
                                          attrs: { user: user, index: index },
                                          on: { UserDeleted: _vm.deleteUser }
                                        })
                                      ],
                                      1
                                    )
                                  })
                                )
                              ])
                            : _vm._e()
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
    require("vue-hot-reload-api")      .rerender("data-v-d56076d6", module.exports)
  }
}

/***/ })

});