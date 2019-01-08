webpackJsonp([11],{

/***/ 115:
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

/***/ 194:
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(115)
/* script */
var __vue_script__ = __webpack_require__(195)
/* template */
var __vue_template__ = __webpack_require__(196)
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
Component.options.__file = "resources/assets/js/views/pages/company/laborCosts/LaborCostsPage.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-3cb2e8fe", Component.options)
  } else {
    hotAPI.reload("data-v-3cb2e8fe", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),

/***/ 195:
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
//
//
//
//
//
//
//
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
      showMenu: false,
      x: 0,
      y: 0,
      items: [{ title: "Click Me" }, { title: "Click Me" }, { title: "Click Me" }, { title: "Click Me 2" }],
      pagination: {
        sortBy: "name"
      },
      selected: [],
      headers: [{ text: "ID", value: "id", align: "left" }, { text: "Название", value: "name", align: "left" }, { text: "Аббревиатура", value: "abbr", align: "left" }, { text: "Менеджер", value: "manager", align: "left" }, { text: "Приоритет", value: "priority", align: "left" }, { text: "Договор", value: "contract", align: "left" }, {
        text: "Зарубежный агрегатор",
        value: "foreignAgregator",
        align: "left"
      }, { text: "Коэффициент", value: "coefficient", align: "left" }, { text: "Рассчёт", value: "calculation", align: "left" }],
      aggregators: [{
        id: 1,
        name: "Admitad",
        abbr: "AD",
        manager: "!апк",
        priority: 5,
        contract: true,
        foreignAgregator: false,
        coefficient: 1.0,
        calculation: "Базовый"
      }],
      emptyTable: true
    };
  },
  methods: {
    toggleAll: function toggleAll() {
      this.selected = this.selected.length === this.aggregators.length ? [] : this.aggregators;
    },
    show: function show(e) {
      var _this = this;

      e.preventDefault();
      this.showMenu = false;
      this.x = e.clientX;
      this.y = e.clientY;
      this.$nextTick(function () {
        _this.showMenu = true;
      });
    },
    changeSort: function changeSort(column) {
      if (this.pagination.sortBy === column) {
        this.pagination.descending = !this.pagination.descending;
      } else {
        this.pagination.sortBy = column;
        this.pagination.descending = false;
      }
    }
  },
  mounted: function mounted() {
    console.log(this.aggregators.slice());
  }
});

/***/ }),

/***/ 196:
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "v-container",
    { attrs: { fluid: "" } },
    [
      _c(
        "v-layout",
        { attrs: { "justify-center": "", "align-center": "" } },
        [
          _c(
            "v-flex",
            [
              _c(
                "v-data-table",
                {
                  staticClass: "elevation-1",
                  attrs: {
                    headers: _vm.headers,
                    items: _vm.aggregators,
                    loading: true,
                    "select-all": "",
                    "item-key": "name"
                  },
                  scopedSlots: _vm._u([
                    {
                      key: "headers",
                      fn: function(props) {
                        return [
                          _c(
                            "tr",
                            [
                              _c(
                                "th",
                                [
                                  _c("v-checkbox", {
                                    attrs: {
                                      "input-value": props.all,
                                      indeterminate: props.indeterminate,
                                      primary: "",
                                      "hide-details": ""
                                    },
                                    nativeOn: {
                                      click: function($event) {
                                        return _vm.toggleAll($event)
                                      }
                                    }
                                  })
                                ],
                                1
                              ),
                              _vm._v(" "),
                              _vm._l(props.headers, function(header) {
                                return _c(
                                  "th",
                                  {
                                    key: header.text,
                                    class: [
                                      "column sortable",
                                      _vm.pagination.descending
                                        ? "desc"
                                        : "asc",
                                      header.value === _vm.pagination.sortBy
                                        ? "active"
                                        : ""
                                    ],
                                    on: {
                                      click: function($event) {
                                        _vm.changeSort(header.value)
                                      }
                                    }
                                  },
                                  [
                                    _c("v-icon", { attrs: { small: "" } }, [
                                      _vm._v("arrow_upward")
                                    ]),
                                    _vm._v(
                                      "\n              " +
                                        _vm._s(header.text) +
                                        "\n            "
                                    )
                                  ],
                                  1
                                )
                              })
                            ],
                            2
                          )
                        ]
                      }
                    },
                    {
                      key: "items",
                      fn: function(props) {
                        return [
                          _c(
                            "tr",
                            {
                              attrs: { active: props.selected },
                              on: {
                                click: function($event) {
                                  props.selected = !props.selected
                                },
                                contextmenu: _vm.show
                              }
                            },
                            [
                              _c(
                                "td",
                                { staticClass: "text-xs-center" },
                                [
                                  _c("v-checkbox", {
                                    attrs: { primary: "", "hide-details": "" },
                                    model: {
                                      value: props.selected,
                                      callback: function($$v) {
                                        _vm.$set(props, "selected", $$v)
                                      },
                                      expression: "props.selected"
                                    }
                                  })
                                ],
                                1
                              ),
                              _vm._v(" "),
                              _c("td", { staticClass: "text-xs-center" }, [
                                _vm._v(_vm._s(props.item.id))
                              ]),
                              _vm._v(" "),
                              _c("td", { staticClass: "text-xs-center" }, [
                                _vm._v(_vm._s(props.item.name))
                              ]),
                              _vm._v(" "),
                              _c("td", { staticClass: "text-xs-center" }, [
                                _vm._v(_vm._s(props.item.abbr))
                              ]),
                              _vm._v(" "),
                              _c("td", { staticClass: "text-xs-center" }, [
                                _vm._v(_vm._s(props.item.manager))
                              ]),
                              _vm._v(" "),
                              _c("td", { staticClass: "text-xs-center" }, [
                                _vm._v(_vm._s(props.item.priority))
                              ]),
                              _vm._v(" "),
                              _c("td", { staticClass: "text-xs-center" }, [
                                _vm._v(_vm._s(props.item.contract))
                              ]),
                              _vm._v(" "),
                              _c("td", { staticClass: "text-xs-center" }, [
                                _vm._v(_vm._s(props.item.foreignAgregator))
                              ]),
                              _vm._v(" "),
                              _c("td", { staticClass: "text-xs-center" }, [
                                _vm._v(_vm._s(props.item.coefficient))
                              ]),
                              _vm._v(" "),
                              _c("td", { staticClass: "text-xs-center" }, [
                                _vm._v(_vm._s(props.item.calculation))
                              ])
                            ]
                          )
                        ]
                      }
                    }
                  ]),
                  model: {
                    value: _vm.selected,
                    callback: function($$v) {
                      _vm.selected = $$v
                    },
                    expression: "selected"
                  }
                },
                [
                  _c("v-progress-linear", {
                    attrs: {
                      slot: "progress",
                      color: "secondary",
                      indeterminate: ""
                    },
                    slot: "progress"
                  }),
                  _vm._v(" "),
                  _c(
                    "template",
                    { slot: "no-data" },
                    [
                      _c(
                        "v-alert",
                        {
                          attrs: {
                            value: _vm.emptyTable,
                            color: "error",
                            icon: "warning"
                          }
                        },
                        [_vm._v("Sorry, nothing to display here :(")]
                      )
                    ],
                    1
                  )
                ],
                2
              ),
              _vm._v(" "),
              _c(
                "v-menu",
                {
                  attrs: {
                    "position-x": _vm.x,
                    "position-y": _vm.y,
                    absolute: "",
                    "offset-y": ""
                  },
                  model: {
                    value: _vm.showMenu,
                    callback: function($$v) {
                      _vm.showMenu = $$v
                    },
                    expression: "showMenu"
                  }
                },
                [
                  _c(
                    "v-list",
                    _vm._l(_vm.items, function(item, index) {
                      return _c(
                        "v-list-tile",
                        { key: index, on: { click: function($event) {} } },
                        [_c("v-list-tile-title", [_vm._v(_vm._s(item.title))])],
                        1
                      )
                    })
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
    require("vue-hot-reload-api")      .rerender("data-v-3cb2e8fe", module.exports)
  }
}

/***/ })

});