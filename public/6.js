webpackJsonp([6],{139:function(e,t,a){var s=a(140);"string"==typeof s&&(s=[[e.i,s,""]]),s.locals&&(e.exports=s.locals);a(93)("35d316d8",s,!0,{})},140:function(e,t,a){(e.exports=a(91)(!1)).push([e.i,".message-content p[data-v-5cacb010]{background:#ebebeb none repeat scroll 0 0;border-radius:3px;color:#000;font-size:14px;margin:0;padding:5px 10px 5px 12px;width:100%}.message-content span[data-v-5cacb010]{color:#747474;display:block;font-size:12px;text-align:left;margin:8px 0 0}.whois[data-v-5cacb010]{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:end;-ms-flex-pack:end;justify-content:flex-end}.v-btn .v-avatar[data-v-5cacb010]{margin:0 10px 0 0}.message-sender-img[data-v-5cacb010]{padding:0 10px 0 0}.message-sender-img img[data-v-5cacb010]{width:56px;height:56px}.message-content[data-v-5cacb010]{z-index:-1}.message-bubble[data-v-5cacb010]{z-index:-1;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:horizontal;-webkit-box-direction:normal;-ms-flex-direction:row;flex-direction:row;-ms-flex-wrap:nowrap;flex-wrap:nowrap;max-width:60%;margin:5px 0}.chat-wrapper[data-v-5cacb010]{width:100%;height:100%;overflow:hidden}.chat-head[data-v-5cacb010]{width:100%;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;padding:15px;-ms-flex-wrap:nowrap;flex-wrap:nowrap;display:-webkit-box;display:-ms-flexbox;display:flex;background-color:#fff;-webkit-box-shadow:0 2px 4px -1px rgba(0,0,0,.2),0 4px 5px 0 rgba(0,0,0,.14),0 1px 10px 0 rgba(0,0,0,.12);box-shadow:0 2px 4px -1px rgba(0,0,0,.2),0 4px 5px 0 rgba(0,0,0,.14),0 1px 10px 0 rgba(0,0,0,.12);z-index:4}.chat-head p[data-v-5cacb010]{margin:0;font-weight:700}.chat-body[data-v-5cacb010]{width:100%;height:100%}.flex[data-v-5cacb010]{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column}.chat-footer .container[data-v-5cacb010]{padding:10px}.chat-footer[data-v-5cacb010]{background-color:#fff;width:100%;-webkit-box-shadow:9px 3px 14px 2px rgba(0,0,0,.12);box-shadow:9px 3px 14px 2px rgba(0,0,0,.12)}",""])},141:function(e,t,a){"use strict";Object.defineProperty(t,"__esModule",{value:!0});var s=a(13),n=Object.assign||function(e){for(var t=1;t<arguments.length;t++){var a=arguments[t];for(var s in a)Object.prototype.hasOwnProperty.call(a,s)&&(e[s]=a[s])}return e};t.default={data:function(){return{Messages:[],newMessage:""}},methods:{SendMessage:function(){var e=this;""===this.newMessage&&" "===this.newMessage||axios.post("/api/auth/messages",{creator_id:this.user.id,text:this.newMessage,chat_id:this.$route.params.chatid,status:"new"}).then(function(t){e.Messages.push(t.data),e.newMessage=""})},SetMessages:function(e){this.Messages=e},toggleChat:function(){this.$emit("toggleChat")}},computed:n({},Object(s.c)({user:"user/GetUser",GetChatById:"chat/GetChatById"}),{chat:function(){return this.GetChatById(this.$route.params.chatid)}}),beforeCreate:function(){var e=this;axios.get("/api/auth/messages/"+this.$route.params.chatid).then(function(t){e.Messages=t.data}).catch(function(t){e.$router.push("/app/communication")})},mounted:function(){var e=this;window.Echo.private("chat."+this.$route.params.chatid).listen("Message",function(t){var a=t.message,s=new Audio("/storage/audio/message.mp3");new Notification({title:a.text}),s.play(),e.Messages.push(a)})}}},142:function(e,t){e.exports={render:function(){var e=this,t=e.$createElement,a=e._self._c||t;return a("v-layout",{staticClass:"chat-wrapper"},[a("v-flex",{attrs:{xs12:"","justify-center":"","align-center":""}},[a("v-toolbar",{attrs:{color:"white"}},[a("v-toolbar-items",[a("v-btn",{attrs:{flat:""},on:{click:e.toggleChat}},[e._v("Диалоги")])],1),e._v(" "),a("v-spacer"),e._v(" "),a("v-toolbar-items",[e.chat&&e.chat.users?a("v-btn",{attrs:{flat:""}},[a("v-avatar",[e.chat.users[0].avatar?a("img",{staticClass:"btn-img",attrs:{src:"/storage/uploads/"+e.chat.users[0].avatar,alt:e.chat.users[0].name}}):a("v-icon",[e._v("account_circle")])],1),e._v("\n                "+e._s(e.chat.users[0].name)+"\n            ")],1):e._e()],1)],1),e._v(" "),a("div",{directives:[{name:"bar",rawName:"v-bar"}],staticClass:"chat-body"},[a("div",[a("v-container",{attrs:{fluid:""}},[e._l(e.Messages,function(t,s){return[a("div",{key:s,staticClass:"message-line",class:{whois:e.user.id==t.creator.id}},[a("div",{staticClass:"message-bubble"},[a("div",{staticClass:"message-content"},[a("p",[e._v(e._s(t.text))]),e._v(" "),a("span",[e._v(e._s(t.created_at.toLocaleString("ru")))])])])])]})],2)],1)]),e._v(" "),a("div",{staticClass:"chat-footer"},[a("v-container",{attrs:{fluid:""}},[a("v-text-field",{staticClass:"message-input",attrs:{outline:"",label:"Сообщение","append-icon":"send"},on:{keyup:function(t){return"button"in t||!e._k(t.keyCode,"enter",13,t.key,"Enter")?e.SendMessage(t):null},"click:append":e.SendMessage},model:{value:e.newMessage,callback:function(t){e.newMessage=t},expression:"newMessage"}})],1)],1)],1)],1)},staticRenderFns:[]}},163:function(e,t,a){var s=a(92)(a(141),a(142),!1,function(e){a(139)},"data-v-5cacb010",null);e.exports=s.exports},92:function(e,t){e.exports=function(e,t,a,s,n,r){var i,o=e=e||{},c=typeof e.default;"object"!==c&&"function"!==c||(i=e,o=e.default);var d,l="function"==typeof o?o.options:o;if(t&&(l.render=t.render,l.staticRenderFns=t.staticRenderFns,l._compiled=!0),a&&(l.functional=!0),n&&(l._scopeId=n),r?(d=function(e){(e=e||this.$vnode&&this.$vnode.ssrContext||this.parent&&this.parent.$vnode&&this.parent.$vnode.ssrContext)||"undefined"==typeof __VUE_SSR_CONTEXT__||(e=__VUE_SSR_CONTEXT__),s&&s.call(this,e),e&&e._registeredComponents&&e._registeredComponents.add(r)},l._ssrRegister=d):s&&(d=s),d){var p=l.functional,u=p?l.render:l.beforeCreate;p?(l._injectStyles=d,l.render=function(e,t){return d.call(t),u(e,t)}):l.beforeCreate=u?[].concat(u,d):[d]}return{esModule:i,exports:o,options:l}}},93:function(e,t,a){var s="undefined"!=typeof document;if("undefined"!=typeof DEBUG&&DEBUG&&!s)throw new Error("vue-style-loader cannot be used in a non-browser environment. Use { target: 'node' } in your Webpack config to indicate a server-rendering environment.");var n=a(94),r={},i=s&&(document.head||document.getElementsByTagName("head")[0]),o=null,c=0,d=!1,l=function(){},p=null,u="data-vue-ssr-id",f="undefined"!=typeof navigator&&/msie [6-9]\b/.test(navigator.userAgent.toLowerCase());function h(e){for(var t=0;t<e.length;t++){var a=e[t],s=r[a.id];if(s){s.refs++;for(var n=0;n<s.parts.length;n++)s.parts[n](a.parts[n]);for(;n<a.parts.length;n++)s.parts.push(x(a.parts[n]));s.parts.length>a.parts.length&&(s.parts.length=a.parts.length)}else{var i=[];for(n=0;n<a.parts.length;n++)i.push(x(a.parts[n]));r[a.id]={id:a.id,refs:1,parts:i}}}}function v(){var e=document.createElement("style");return e.type="text/css",i.appendChild(e),e}function x(e){var t,a,s=document.querySelector("style["+u+'~="'+e.id+'"]');if(s){if(d)return l;s.parentNode.removeChild(s)}if(f){var n=c++;s=o||(o=v()),t=m.bind(null,s,n,!1),a=m.bind(null,s,n,!0)}else s=v(),t=function(e,t){var a=t.css,s=t.media,n=t.sourceMap;s&&e.setAttribute("media",s);p.ssrId&&e.setAttribute(u,t.id);n&&(a+="\n/*# sourceURL="+n.sources[0]+" */",a+="\n/*# sourceMappingURL=data:application/json;base64,"+btoa(unescape(encodeURIComponent(JSON.stringify(n))))+" */");if(e.styleSheet)e.styleSheet.cssText=a;else{for(;e.firstChild;)e.removeChild(e.firstChild);e.appendChild(document.createTextNode(a))}}.bind(null,s),a=function(){s.parentNode.removeChild(s)};return t(e),function(s){if(s){if(s.css===e.css&&s.media===e.media&&s.sourceMap===e.sourceMap)return;t(e=s)}else a()}}e.exports=function(e,t,a,s){d=a,p=s||{};var i=n(e,t);return h(i),function(t){for(var a=[],s=0;s<i.length;s++){var o=i[s];(c=r[o.id]).refs--,a.push(c)}t?h(i=n(e,t)):i=[];for(s=0;s<a.length;s++){var c;if(0===(c=a[s]).refs){for(var d=0;d<c.parts.length;d++)c.parts[d]();delete r[c.id]}}}};var g,b=(g=[],function(e,t){return g[e]=t,g.filter(Boolean).join("\n")});function m(e,t,a,s){var n=a?"":s.css;if(e.styleSheet)e.styleSheet.cssText=b(t,n);else{var r=document.createTextNode(n),i=e.childNodes;i[t]&&e.removeChild(i[t]),i.length?e.insertBefore(r,i[t]):e.appendChild(r)}}},94:function(e,t){e.exports=function(e,t){for(var a=[],s={},n=0;n<t.length;n++){var r=t[n],i=r[0],o={id:e+":"+n,css:r[1],media:r[2],sourceMap:r[3]};s[i]?s[i].parts.push(o):a.push(s[i]={id:i,parts:[o]})}return a}}});