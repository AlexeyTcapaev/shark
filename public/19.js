webpackJsonp([19],{

/***/ 174:
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
function injectStyle (ssrContext) {
  if (disposed) return
  __webpack_require__(175)
}
var normalizeComponent = __webpack_require__(115)
/* script */
var __vue_script__ = __webpack_require__(177)
/* template */
var __vue_template__ = __webpack_require__(178)
/* template functional */
var __vue_template_functional__ = false
/* styles */
var __vue_styles__ = injectStyle
/* scopeId */
var __vue_scopeId__ = "data-v-50f510b0"
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
Component.options.__file = "resources/assets/js/views/pages/company/employees/components/EmployeCard.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-50f510b0", Component.options)
  } else {
    hotAPI.reload("data-v-50f510b0", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),

/***/ 175:
/***/ (function(module, exports, __webpack_require__) {

// style-loader: Adds some css to the DOM by adding a <style> tag

// load the styles
var content = __webpack_require__(176);
if(typeof content === 'string') content = [[module.i, content, '']];
if(content.locals) module.exports = content.locals;
// add the styles to the DOM
var update = __webpack_require__(116)("70d82d9b", content, false, {});
// Hot Module Replacement
if(false) {
 // When the styles change, update the <style> tags
 if(!content.locals) {
   module.hot.accept("!!../../../../../../../../node_modules/css-loader/index.js!../../../../../../../../node_modules/vue-loader/lib/style-compiler/index.js?{\"vue\":true,\"id\":\"data-v-50f510b0\",\"scoped\":true,\"hasInlineConfig\":true}!../../../../../../../../node_modules/vue-loader/lib/selector.js?type=styles&index=0!./EmployeCard.vue", function() {
     var newContent = require("!!../../../../../../../../node_modules/css-loader/index.js!../../../../../../../../node_modules/vue-loader/lib/style-compiler/index.js?{\"vue\":true,\"id\":\"data-v-50f510b0\",\"scoped\":true,\"hasInlineConfig\":true}!../../../../../../../../node_modules/vue-loader/lib/selector.js?type=styles&index=0!./EmployeCard.vue");
     if(typeof newContent === 'string') newContent = [[module.id, newContent, '']];
     update(newContent);
   });
 }
 // When the module is disposed, remove the <style> tags
 module.hot.dispose(function() { update(); });
}

/***/ }),

/***/ 176:
/***/ (function(module, exports, __webpack_require__) {

exports = module.exports = __webpack_require__(96)(false);
// imports


// module
exports.push([module.i, "\n.no-user .profile[data-v-50f510b0] {\n  display: -webkit-box;\n  display: -ms-flexbox;\n  display: flex;\n  -webkit-box-orient: vertical;\n  -webkit-box-direction: normal;\n      -ms-flex-direction: column;\n          flex-direction: column;\n  -webkit-box-align: center;\n      -ms-flex-align: center;\n          align-items: center;\n  -webkit-box-pack: center;\n      -ms-flex-pack: center;\n          justify-content: center;\n}\n.no-user .profile .image[data-v-50f510b0] {\n  margin: 0;\n}\ni[data-v-50f510b0]:hover {\n  color: #f80b37;\n}\n.center[data-v-50f510b0] {\n  margin: 10px;\n  background: #fff;\n  border-radius: 3px;\n  overflow: hidden;\n  -webkit-box-shadow: 0px 3px 1px -2px rgba(0, 0, 0, 0.2),\n    0px 2px 2px 0px rgba(0, 0, 0, 0.14), 0px 1px 5px 0px rgba(0, 0, 0, 0.12);\n          box-shadow: 0px 3px 1px -2px rgba(0, 0, 0, 0.2),\n    0px 2px 2px 0px rgba(0, 0, 0, 0.14), 0px 1px 5px 0px rgba(0, 0, 0, 0.12);\n}\n.profile[data-v-50f510b0] {\n  float: left;\n  width: 200px;\n  height: 320px;\n  text-align: center;\n}\n.profile .image[data-v-50f510b0] {\n  position: relative;\n  width: 70px;\n  height: 70px;\n  margin: 38px auto 0 auto;\n}\n.profile .image .circle-1[data-v-50f510b0],\n.profile .image .circle-2[data-v-50f510b0] {\n  position: absolute;\n  -webkit-box-sizing: border-box;\n          box-sizing: border-box;\n  width: 76px;\n  height: 76px;\n  top: -3px;\n  left: -3px;\n  border-width: 1px;\n  border-style: solid;\n  border-color: #46547d #46547d #46547d transparent;\n  border-radius: 50%;\n  -webkit-transition: all 1.5s ease-in-out;\n  transition: all 1.5s ease-in-out;\n}\n.profile .image .circle-2[data-v-50f510b0] {\n  width: 82px;\n  height: 82px;\n  top: -6px;\n  left: -6px;\n  border-color: #46547d transparent #46547d #46547d;\n}\n.profile .image img[data-v-50f510b0] {\n  display: block;\n  border-radius: 50%;\n  background: #46547d;\n}\n.profile .image[data-v-50f510b0]:hover {\n  cursor: pointer;\n}\n.profile .image:hover .circle-1[data-v-50f510b0] {\n  border-color: #f80b37 #f80b37 #f80b37 transparent;\n}\n.profile .image:hover .circle-1[data-v-50f510b0],\n.profile .image:hover .circle-2[data-v-50f510b0] {\n  -webkit-transform: rotate(360deg);\n  transform: rotate(360deg);\n}\n.profile .image:hover .circle-2[data-v-50f510b0] {\n  -webkit-transform: rotate(-360deg);\n  transform: rotate(-360deg);\n  border-color: #f80b37 transparent #f80b37 #f80b37;\n}\n.profile .name[data-v-50f510b0] {\n  font-size: 15px;\n  font-weight: 600;\n  margin-top: 20px;\n}\n.profile .job[data-v-50f510b0] {\n  font-size: 11px;\n  line-height: 15px;\n}\n.profile .actions[data-v-50f510b0] {\n  margin-top: 33px;\n}\n.profile .actions .btn[data-v-50f510b0] {\n  display: block;\n  width: 120px;\n  height: 30px;\n  margin: 0 auto 10px auto;\n  background: none;\n  border: 1px solid #46547d;\n  border-radius: 15px;\n  font-size: 12px;\n  font-weight: 600;\n  -webkit-box-sizing: border-box;\n          box-sizing: border-box;\n  -webkit-transition: all 0.3s ease-in-out;\n  transition: all 0.3s ease-in-out;\n  color: #46547d;\n}\n.profile .actions .btn[data-v-50f510b0]:hover {\n  background: #f80b37;\n  border: 1px solid #f80b37;\n  color: #fff;\n}\n.stats[data-v-50f510b0] {\n  float: left;\n}\n.stats .box[data-v-50f510b0] {\n  -webkit-box-sizing: border-box;\n          box-sizing: border-box;\n  width: 120px;\n  height: 106px;\n  background: rgba(70, 84, 125, 0.1);\n  text-align: center;\n  padding-top: 28px;\n  -webkit-transition: all 0.4s ease-in-out;\n  transition: all 0.4s ease-in-out;\n}\n.stats .box[data-v-50f510b0]:hover {\n  background: rgba(70, 84, 125, 0.3);\n  cursor: pointer;\n}\n.stats .box[data-v-50f510b0]:nth-child(2) {\n  margin: 1px 0;\n}\n.stats span[data-v-50f510b0] {\n  display: block;\n}\n.stats .value[data-v-50f510b0] {\n  font-size: 18px;\n  font-weight: 600;\n}\n.stats .parameter[data-v-50f510b0] {\n  font-size: 11px;\n}\n", ""]);

// exports


/***/ }),

/***/ 177:
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
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
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
  props: ["user", "index"],
  data: function data() {
    return {
      open: false,
      actions: false,
      dialog: false,
      search: null,
      searchLoading: false,
      users: [],
      members: []
    };
  },
  methods: _extends({}, Object(__WEBPACK_IMPORTED_MODULE_0_vuex__["b" /* mapActions */])({ AddChat: "chat/AddChat" }), {
    Toggle: function Toggle() {
      this.open = !this.open;
    },
    DeleteMember: function DeleteMember() {
      var _this = this;

      axios.post("/api/auth/" + this.$route.params.slug + "/users/detach", {
        id: this.user.id
      }).then(function (resp) {
        _this.$emit("UserDeleted", _this.index);
      });
    },
    WriteMember: function WriteMember() {
      axios.post("/api/auth/chats", { users: [this.user.id, this.AuthUser.id] }).then(function (resp) {
        init.alert.message = "Диалог успешно создан.";
        init.alert.enable = true;
        init.AddChat(resp.data);
      }).catch(function (error) {
        init.alert.message = "Ошибка при создании диалога.";
        init.alert.enable = true;
        init.alert.type = "error";
      });
    },
    AttachMembers: function AttachMembers() {
      var _this2 = this;

      this.members.map(function (member) {
        axios.post("/api/auth/" + _this2.$route.params.slug + "/users/attach", {
          id: member.id
        }).then(function (resp) {
          _this2.$emit("UserAdded", member);
        });
        _this2.dialog = false;
      });
    }
  }),
  watch: {
    search: function search(val) {
      var _this3 = this;

      if (val != null && val.length > 3) {
        axios.get("/api/auth/search/users", { params: { search: val } }).then(function (resp) {
          _this3.users = resp.data;
        });
      }
    }
  },
  computed: _extends({}, Object(__WEBPACK_IMPORTED_MODULE_0_vuex__["d" /* mapState */])("user", { AuthUser: "user" }))
});

/***/ }),

/***/ 178:
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _vm.user
    ? _c("div", { staticClass: "center" }, [
        _c("div", { staticClass: "profile" }, [
          _c(
            "div",
            { staticClass: "image" },
            [
              _c("div", { staticClass: "circle-1" }),
              _vm._v(" "),
              _c("div", { staticClass: "circle-2" }),
              _vm._v(" "),
              _vm.user.avatar
                ? _c("img", {
                    attrs: {
                      src: "/storage/uploads/" + _vm.user.avatar,
                      width: "70",
                      height: "70",
                      alt: _vm.user.name
                    }
                  })
                : _c("v-icon", { attrs: { size: "70" } }, [
                    _vm._v("account_circle")
                  ])
            ],
            1
          ),
          _vm._v(" "),
          _c("div", { staticClass: "name" }, [_vm._v(_vm._s(_vm.user.name))]),
          _vm._v(" "),
          _c("div", { staticClass: "job" }, [_vm._v("Visual Artist")]),
          _vm._v(" "),
          _vm.user.id != _vm.AuthUser.id
            ? _c("div", { staticClass: "actions" }, [
                _c(
                  "button",
                  { staticClass: "btn", on: { click: _vm.DeleteMember } },
                  [_vm._v("Убрать")]
                ),
                _vm._v(" "),
                _c(
                  "button",
                  { staticClass: "btn", on: { click: _vm.WriteMember } },
                  [_vm._v("Написать")]
                )
              ])
            : _c("div", { staticClass: "actions" }, [
                _c("div", { staticClass: "name" }, [_vm._v("Это вы!")]),
                _vm._v(" "),
                _c(
                  "button",
                  { staticClass: "btn", on: { click: _vm.DeleteMember } },
                  [_vm._v("Покинуть")]
                )
              ])
        ]),
        _vm._v(" "),
        _vm.actions
          ? _c("div", { staticClass: "stats" }, [
              _vm._m(0),
              _vm._v(" "),
              _vm._m(1),
              _vm._v(" "),
              _vm._m(2)
            ])
          : _vm._e()
      ])
    : _c(
        "div",
        { staticClass: "center no-user" },
        [
          _c(
            "v-dialog",
            {
              attrs: { "max-width": "500px" },
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
                "v-card",
                [
                  _c("v-card-title", [
                    _c("h4", [_vm._v("Поиск по пользователям")])
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
                          placeholder: "Начните ввод для поиска",
                          loading: _vm.searchLoading,
                          "hide-selected": "",
                          "item-text": "name",
                          "return-object": "",
                          multiple: ""
                        },
                        on: {
                          "update:searchInput": function($event) {
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
                                              attrs: { src: data.item.avatar }
                                            })
                                          : _c("v-icon", [
                                              _vm._v("account_circle")
                                            ])
                                      ],
                                      1
                                    ),
                                    _vm._v(
                                      "\n              " +
                                        _vm._s(data.item.name) +
                                        "\n            "
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
                                                attrs: { src: data.item.avatar }
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
                                              innerHTML: _vm._s(data.item.name)
                                            }
                                          }),
                                          _vm._v(" "),
                                          _c("v-list-tile-sub-title", {
                                            domProps: {
                                              innerHTML: _vm._s(data.item.group)
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
                          on: { click: _vm.AttachMembers }
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
          ),
          _vm._v(" "),
          _c(
            "div",
            {
              staticClass: "profile",
              on: {
                click: function($event) {
                  _vm.dialog = true
                }
              }
            },
            [
              _c(
                "div",
                { staticClass: "image" },
                [_c("v-icon", { attrs: { size: "60" } }, [_vm._v("add")])],
                1
              ),
              _vm._v(" "),
              _c("div", { staticClass: "name" }, [
                _vm._v("Добавить сотрудника")
              ])
            ]
          )
        ],
        1
      )
}
var staticRenderFns = [
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "box" }, [
      _c("span", { staticClass: "value" }, [_vm._v("523")]),
      _vm._v(" "),
      _c("span", { staticClass: "parameter" }, [_vm._v("Posts")])
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "box" }, [
      _c("span", { staticClass: "value" }, [_vm._v("1387")]),
      _vm._v(" "),
      _c("span", { staticClass: "parameter" }, [_vm._v("Likes")])
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "box" }, [
      _c("span", { staticClass: "value" }, [_vm._v("146")]),
      _vm._v(" "),
      _c("span", { staticClass: "parameter" }, [_vm._v("Follower")])
    ])
  }
]
render._withStripped = true
module.exports = { render: render, staticRenderFns: staticRenderFns }
if (false) {
  module.hot.accept()
  if (module.hot.data) {
    require("vue-hot-reload-api")      .rerender("data-v-50f510b0", module.exports)
  }
}

/***/ })

});