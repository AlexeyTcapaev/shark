webpackJsonp([5],{

/***/ 65:
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
function injectStyle (ssrContext) {
  if (disposed) return
  __webpack_require__(91)
}
var normalizeComponent = __webpack_require__(71)
/* script */
var __vue_script__ = __webpack_require__(93)
/* template */
var __vue_template__ = __webpack_require__(94)
/* template functional */
var __vue_template_functional__ = false
/* styles */
var __vue_styles__ = injectStyle
/* scopeId */
var __vue_scopeId__ = "data-v-bc5e96a2"
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
Component.options.__file = "resources/assets/js/views/AddCompany.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-bc5e96a2", Component.options)
  } else {
    hotAPI.reload("data-v-bc5e96a2", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),

/***/ 71:
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

/***/ 72:
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

var listToStyles = __webpack_require__(73)

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

/***/ 73:
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

/***/ 91:
/***/ (function(module, exports, __webpack_require__) {

// style-loader: Adds some css to the DOM by adding a <style> tag

// load the styles
var content = __webpack_require__(92);
if(typeof content === 'string') content = [[module.i, content, '']];
if(content.locals) module.exports = content.locals;
// add the styles to the DOM
var update = __webpack_require__(72)("f2834252", content, false, {});
// Hot Module Replacement
if(false) {
 // When the styles change, update the <style> tags
 if(!content.locals) {
   module.hot.accept("!!../../../../node_modules/css-loader/index.js!../../../../node_modules/vue-loader/lib/style-compiler/index.js?{\"vue\":true,\"id\":\"data-v-bc5e96a2\",\"scoped\":true,\"hasInlineConfig\":true}!../../../../node_modules/vue-loader/lib/selector.js?type=styles&index=0!./AddCompany.vue", function() {
     var newContent = require("!!../../../../node_modules/css-loader/index.js!../../../../node_modules/vue-loader/lib/style-compiler/index.js?{\"vue\":true,\"id\":\"data-v-bc5e96a2\",\"scoped\":true,\"hasInlineConfig\":true}!../../../../node_modules/vue-loader/lib/selector.js?type=styles&index=0!./AddCompany.vue");
     if(typeof newContent === 'string') newContent = [[module.id, newContent, '']];
     update(newContent);
   });
 }
 // When the module is disposed, remove the <style> tags
 module.hot.dispose(function() { update(); });
}

/***/ }),

/***/ 92:
/***/ (function(module, exports, __webpack_require__) {

exports = module.exports = __webpack_require__(14)(false);
// imports


// module
exports.push([module.i, "\n.v-avatar[data-v-bc5e96a2] {\n  position: absolute;\n  left: 25px;\n  overflow: hidden;\n  -webkit-box-shadow: 0 2px 1px -1px rgba(0, 0, 0, 0.2), 0 1px 1px 0 rgba(0, 0, 0, 0.14),\n    0 1px 3px 0 rgba(0, 0, 0, 0.12);\n          box-shadow: 0 2px 1px -1px rgba(0, 0, 0, 0.2), 0 1px 1px 0 rgba(0, 0, 0, 0.14),\n    0 1px 3px 0 rgba(0, 0, 0, 0.12);\n  top: -128px;\n  border-radius: 50% !important;\n  -webkit-transition: 0.2s linear;\n  transition: 0.2s linear;\n}\n.v-avatar img[data-v-bc5e96a2] {\n  -webkit-box-shadow: 0 2px 1px -1px rgba(0, 0, 0, 0.2), 0 1px 1px 0 rgba(0, 0, 0, 0.14),\n    0 1px 3px 0 rgba(0, 0, 0, 0.12);\n          box-shadow: 0 2px 1px -1px rgba(0, 0, 0, 0.2), 0 1px 1px 0 rgba(0, 0, 0, 0.14),\n    0 1px 3px 0 rgba(0, 0, 0, 0.12);\n}\n.file[data-v-bc5e96a2] {\n  position: absolute;\n  width: 100%;\n  height: 100%;\n  border-radius: 64px;\n  -webkit-box-shadow: 0 2px 1px -1px rgba(0, 0, 0, 0.2), 0 1px 1px 0 rgba(0, 0, 0, 0.14),\n    0 1px 3px 0 rgba(0, 0, 0, 0.12);\n          box-shadow: 0 2px 1px -1px rgba(0, 0, 0, 0.2), 0 1px 1px 0 rgba(0, 0, 0, 0.14),\n    0 1px 3px 0 rgba(0, 0, 0, 0.12);\n  top: 0;\n  left: 0;\n  cursor: pointer;\n  z-index: 4;\n  opacity: 0;\n}\n.v-card__title[data-v-bc5e96a2] {\n  padding-top: 148px !important;\n}\n.v-card[data-v-bc5e96a2] {\n  margin: 128px 0 0 0;\n}\n.v-card .v-avatar[data-v-bc5e96a2] {\n  cursor: pointer;\n}\n.chips-list[data-v-bc5e96a2] {\n  display: -webkit-box;\n  display: -ms-flexbox;\n  display: flex;\n  -ms-flex-wrap: wrap;\n      flex-wrap: wrap;\n}\n", ""]);

// exports


/***/ }),

/***/ 93:
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
//
//
//
//
//
//
//
//
//
//
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
      show: false,
      avatarSize: 256,
      tile: true,
      switch1: false,
      Company: {
        name: "",
        activities: [],
        logo: undefined
      },
      alert: {
        enable: false
      },
      NewActivity: "",
      NewActivities: [],
      activities: [{
        name: "IT"
      }, {
        name: "Проектирование"
      }],
      types: [{
        name: "ООО"
      }, {
        name: "ОАО"
      }, {
        name: "АО"
      }, {
        name: " ПАО"
      }, {
        name: " ИП"
      }]
    };
  },
  methods: _extends({}, Object(__WEBPACK_IMPORTED_MODULE_0_vuex__["b" /* mapActions */])({ AddCompany: "user/AddCompany" }), {
    remove: function remove(item) {
      console.log(item);
      var index = this.Company.activities.indexOf(item);
      if (index >= 0) this.Company.activities.splice(index, 1);
    },
    removeItem: function removeItem(index) {
      this.Company.activities.splice(index, 1);
    },
    onFileChange: function onFileChange(e) {
      var files = e.target.files || e.dataTransfer.files;
      if (!files.length) return;
      this.createImage(this.Company, files[0]);
    },
    createImage: function createImage(item, file) {
      var image = new Image();
      var reader = new FileReader();
      reader.onload = function (e) {
        item.logo = e.target.result;
      };
      reader.readAsDataURL(file);
    },

    removeImage: function removeImage(item) {
      item.image = false;
    },
    ResetNewActivities: function ResetNewActivities() {
      if (this.NewActivities.length > 0) this.NewActivities = [];
    },
    submit: function submit() {
      this.alert = {
        enable: false
      };
      var data = new FormData();
      data.append("logo", this.$refs.file.files[0]);
      data.append("name", this.Company.name);
      data.append("company_type_id", this.Company.type.id);
      data.append("creator_id", this.user);
      data.append("website", this.Company.website);
      data.append("activities", JSON.stringify(this.Company.activities));
      var init = this;
      axios.post("/api/auth/company", data).then(function (resp) {
        init.AddCompany(resp.data);
        init.alert.message = "Компания успешно создана.";
        init.alert.enable = true;
        init.alert.type = "success";
        init.Company = {
          name: "",
          activities: [],
          logo: undefined,
          type: {
            name: "ООО"
          }
        };
      }).catch(function (error) {
        init.alert.message = error.response.data.message;
        init.alert.enable = true;
        init.alert.type = "error";
      });
    },
    AddActivity: function AddActivity() {
      this.Company.activities.push({ name: this.NewActivity });
      this.NewActivity = "";
    }
  }),
  computed: _extends({}, Object(__WEBPACK_IMPORTED_MODULE_0_vuex__["c" /* mapGetters */])({
    user: "user/GetUserId"
  })),
  beforeCreate: function beforeCreate() {
    var init = this;
    axios.get("/api/auth/activities").then(function (resp) {
      init.activities = resp.data;
    }).catch(function (error) {});
    axios.get("/api/auth/company_types").then(function (resp) {
      init.types = resp.data;
    }).catch(function (error) {});
  }
});

/***/ }),

/***/ 94:
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "v-container",
    [
      _c(
        "v-layout",
        { attrs: { "justify-center": "", "align-center": "" } },
        [
          _c(
            "v-flex",
            { attrs: { xl6: "", lg6: "", md6: "", sm12: "", xs12: "" } },
            [
              _c(
                "v-card",
                [
                  _c(
                    "v-avatar",
                    {
                      attrs: {
                        tile: _vm.tile,
                        size: _vm.avatarSize,
                        color: "grey lighten-4"
                      }
                    },
                    [
                      _c("input", {
                        ref: "file",
                        staticClass: "file",
                        attrs: {
                          type: "file",
                          accept: "image/jpeg,image/png,image/gif"
                        },
                        on: { change: _vm.onFileChange }
                      }),
                      _vm._v(" "),
                      !_vm.Company.logo
                        ? _c("v-icon", { attrs: { alt: "avatar" } }, [
                            _vm._v("add_circle_outline")
                          ])
                        : _c("img", { attrs: { src: _vm.Company.logo } })
                    ],
                    1
                  ),
                  _vm._v(" "),
                  _c(
                    "v-card-title",
                    { attrs: { "primary-title": "" } },
                    [
                      _c(
                        "v-flex",
                        { attrs: { row: "" } },
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
                                { attrs: { xl4: "", md12: "", sm12: "" } },
                                [
                                  _c("v-select", {
                                    attrs: {
                                      items: _vm.types,
                                      outline: "",
                                      "offset-y": "",
                                      "return-object": "",
                                      label: "Тип юридического лица",
                                      "item-text": "name",
                                      "item-value": "name"
                                    },
                                    model: {
                                      value: _vm.Company.type,
                                      callback: function($$v) {
                                        _vm.$set(_vm.Company, "type", $$v)
                                      },
                                      expression: "Company.type"
                                    }
                                  })
                                ],
                                1
                              ),
                              _vm._v(" "),
                              _c(
                                "v-flex",
                                {
                                  attrs: {
                                    xl7: "",
                                    "offset-xl1": "",
                                    md12: "",
                                    sm12: ""
                                  }
                                },
                                [
                                  _c("v-text-field", {
                                    attrs: {
                                      outline: "",
                                      label: "Название компании",
                                      "append-icon": "business"
                                    },
                                    model: {
                                      value: _vm.Company.name,
                                      callback: function($$v) {
                                        _vm.$set(_vm.Company, "name", $$v)
                                      },
                                      expression: "Company.name"
                                    }
                                  })
                                ],
                                1
                              )
                            ],
                            1
                          ),
                          _vm._v(" "),
                          _c("v-text-field", {
                            attrs: {
                              outline: "",
                              label: "Сайт компании",
                              "append-icon": "web"
                            },
                            model: {
                              value: _vm.Company.website,
                              callback: function($$v) {
                                _vm.$set(_vm.Company, "website", $$v)
                              },
                              expression: "Company.website"
                            }
                          }),
                          _vm._v(" "),
                          _vm.switch1 == false
                            ? _c("v-autocomplete", {
                                attrs: {
                                  items: _vm.activities,
                                  outline: "",
                                  chips: "",
                                  label: "Сферы деятельности",
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
                                            _vm._v(
                                              "\n                                " +
                                                _vm._s(data.item.name) +
                                                "\n                            "
                                            )
                                          ]
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
                                  value: _vm.Company.activities,
                                  callback: function($$v) {
                                    _vm.$set(_vm.Company, "activities", $$v)
                                  },
                                  expression: "Company.activities"
                                }
                              })
                            : _c("v-text-field", {
                                attrs: {
                                  chips: "",
                                  outline: "",
                                  label:
                                    "Введите свой вариант сферы деятельности",
                                  "append-icon": "add"
                                },
                                on: {
                                  "click:append": _vm.AddActivity,
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
                                    return _vm.AddActivity($event)
                                  }
                                },
                                model: {
                                  value: _vm.NewActivity,
                                  callback: function($$v) {
                                    _vm.NewActivity = $$v
                                  },
                                  expression: "NewActivity"
                                }
                              }),
                          _vm._v(" "),
                          _vm.switch1
                            ? _c(
                                "ul",
                                { staticClass: "chips-list" },
                                _vm._l(_vm.Company.activities, function(
                                  activity,
                                  index
                                ) {
                                  return _c(
                                    "li",
                                    { key: index },
                                    [
                                      _c(
                                        "v-chip",
                                        {
                                          staticClass: "chip--select-multi",
                                          attrs: { close: "" },
                                          on: {
                                            input: function($event) {
                                              _vm.remove(activity)
                                            }
                                          }
                                        },
                                        [
                                          _vm._v(
                                            "\n                                " +
                                              _vm._s(activity.name) +
                                              "\n                            "
                                          )
                                        ]
                                      )
                                    ],
                                    1
                                  )
                                })
                              )
                            : _vm._e(),
                          _vm._v(" "),
                          _c("v-switch", {
                            attrs: {
                              label: "Нет подходящего варианта",
                              color: "primary",
                              disabled: _vm.Company.activities.length > 0
                            },
                            on: { change: _vm.ResetNewActivities },
                            model: {
                              value: _vm.switch1,
                              callback: function($$v) {
                                _vm.switch1 = $$v
                              },
                              expression: "switch1"
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
                          attrs: { color: "secondary" },
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
    require("vue-hot-reload-api")      .rerender("data-v-bc5e96a2", module.exports)
  }
}

/***/ })

});