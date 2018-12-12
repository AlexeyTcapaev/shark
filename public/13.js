webpackJsonp([13],{147:function(t,e,n){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var s=n(13),a=Object.assign||function(t){for(var e=1;e<arguments.length;e++){var n=arguments[e];for(var s in n)Object.prototype.hasOwnProperty.call(n,s)&&(t[s]=n[s])}return t};e.default={data:function(){return{alert:{enable:!1,type:"success"},newChat:{users:[]},users:[],loading:!1}},methods:a({},Object(s.b)({AddChat:"chat/AddChat"}),{submit:function(){var t=this;this.newChat.users.push(this.user),this.newChat.users=JSON.stringify(this.newChat.users),axios.post("/api/auth/chats",this.newChat).then(function(e){t.alert.message="Диалог успешно создан.",t.alert.enable=!0,t.AddChat(e.data)}).catch(function(e){t.alert.message="Ошибка при создании диалога.",t.alert.enable=!0,t.alert.type="error"})},remove:function(t){var e=this.newChat.users.indexOf(t);e>=0&&this.newChat.users.splice(e,1)}}),computed:a({},Object(s.c)({user:"user/GetUser"}),{valid:function(){return!0}}),mounted:function(){var t=this;axios.get("/api/auth/users/"+this.user.id).then(function(e){t.users=e.data}).catch(function(t){})}}},148:function(t,e){t.exports={render:function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("v-container",{attrs:{fluid:"","fill-height":""}},[n("v-layout",{attrs:{"align-center":"","justify-center":""}},[n("v-flex",{attrs:{xs12:"",sm8:"",md4:""}},[n("v-card",{staticClass:"elevation-12"},[n("v-toolbar",{attrs:{dark:"",color:"primary"}},[n("v-toolbar-title",[t._v("Cоздание чата")]),t._v(" "),n("v-spacer")],1),t._v(" "),n("v-card-text",[n("v-alert",{attrs:{type:t.alert.type,dismissible:""},model:{value:t.alert.enable,callback:function(e){t.$set(t.alert,"enable",e)},expression:"alert.enable"}},[t._v(t._s(t.alert.message))]),t._v(" "),n("v-form",[n("v-autocomplete",{attrs:{items:t.users,outline:"",chips:"",label:"Добавить участников","item-text":"name","item-value":"name","return-object":"",multiple:""},scopedSlots:t._u([{key:"selection",fn:function(e){return[n("v-chip",{staticClass:"chip--select-multi",attrs:{selected:e.selected,close:""},on:{input:function(n){t.remove(e.item)}}},[n("v-avatar",[e.item.avatar?n("img",{attrs:{src:"/storage/uploads/"+e.item.avatar}}):n("v-icon",[t._v("account_circle")])],1),t._v("\n                                    "+t._s(e.item.name)+"\n                                ")],1)]}},{key:"item",fn:function(e){return["object"!=typeof e.item?[n("v-list-tile-content",{domProps:{textContent:t._s(e.item)}})]:[n("v-list-tile-avatar",[e.item.avatar?n("img",{attrs:{src:"/storage/uploads/"+e.item.avatar}}):n("v-icon",[t._v("account_circle")])],1),t._v(" "),n("v-list-tile-content",[n("v-list-tile-title",{domProps:{innerHTML:t._s(e.item.name)}}),t._v(" "),n("v-list-tile-sub-title",{domProps:{innerHTML:t._s(e.item.group)}})],1)]]}}]),model:{value:t.newChat.users,callback:function(e){t.$set(t.newChat,"users",e)},expression:"newChat.users"}})],1)],1),t._v(" "),n("v-card-actions",[n("v-spacer"),t._v(" "),n("v-btn",{attrs:{disabled:!t.valid,color:"primary",loading:t.loading},on:{click:t.submit}},[t._v("Создать")])],1)],1)],1)],1)],1)},staticRenderFns:[]}},165:function(t,e,n){var s=n(92)(n(147),n(148),!1,null,null,null);t.exports=s.exports},92:function(t,e){t.exports=function(t,e,n,s,a,r){var i,o=t=t||{},c=typeof t.default;"object"!==c&&"function"!==c||(i=t,o=t.default);var l,u="function"==typeof o?o.options:o;if(e&&(u.render=e.render,u.staticRenderFns=e.staticRenderFns,u._compiled=!0),n&&(u.functional=!0),a&&(u._scopeId=a),r?(l=function(t){(t=t||this.$vnode&&this.$vnode.ssrContext||this.parent&&this.parent.$vnode&&this.parent.$vnode.ssrContext)||"undefined"==typeof __VUE_SSR_CONTEXT__||(t=__VUE_SSR_CONTEXT__),s&&s.call(this,t),t&&t._registeredComponents&&t._registeredComponents.add(r)},u._ssrRegister=l):s&&(l=s),l){var v=u.functional,d=v?u.render:u.beforeCreate;v?(u._injectStyles=l,u.render=function(t,e){return l.call(e),d(t,e)}):u.beforeCreate=d?[].concat(d,l):[l]}return{esModule:i,exports:o,options:u}}}});