(window.webpackJsonp=window.webpackJsonp||[]).push([[96],{"./src/components/IdentityVerification/TierCard/model.js":function(e,t,n){"use strict";n.d(t,"a",(function(){return i}));var a=n("../../node_modules/ramda/es/prop.js"),r=n("../../node_modules/ramda/es/path.js"),i={1:{time:"3",level:"SILVER",limit:"ANNUAL",requirements:[{name:"EMAIL",complete:function complete(e){return 1===e.emailVerified}},{name:"NAME",complete:function complete(e){var t=e.userData;return Object(a.a)("firstName",t)&&Object(a.a)("lastName",t)}},{name:"DOB",complete:function complete(e){var t=e.userData;return Object(a.a)("dob",t)}},{name:"ADDRESS",complete:function complete(e){var t=e.userData;return Object(r.a)(["address","city"],t)&&Object(r.a)(["address","country"],t)&&Object(r.a)(["address","line1"],t)}}]},2:{time:"10",level:"GOLD",limit:"DAILY",requirements:[{name:"TIER1",complete:function complete(e){return"verified"===e.userTiers[1].state}},{name:"GOVID",complete:function complete(e){var t=e.userData;return"NONE"!==Object(a.a)("kycState",t)}},{name:"SELFIE",complete:function complete(e){var t=e.userData;return"NONE"!==Object(a.a)("kycState",t)}}]}}},"./src/components/IdentityVerification/TierCard/services.js":function(e,t,n){"use strict";n.d(t,"b",(function(){return u})),n.d(t,"c",(function(){return p})),n.d(t,"e",(function(){return m})),n.d(t,"d",(function(){return f})),n.d(t,"f",(function(){return b})),n.d(t,"a",(function(){return y}));var a=n("../../node_modules/react-intl/lib/index.es.js"),r=n("../../node_modules/ramda/es/path.js"),i=n("../../node_modules/ramda/es/prop.js"),o=n("../../node_modules/ramda/es/or.js"),s=n("../../node_modules/ramda/es/propEq.js"),c=n("../blockchain-info-components/src/index.js"),l=n("../../node_modules/react/index.js"),d=n.n(l),u={SILVER:d.a.createElement(a.b,{id:"components.identityverification.tiercard.silver",defaultMessage:"Silver Level"}),GOLD:d.a.createElement(a.b,{id:"components.identityverification.tiercard.gold",defaultMessage:"Gold Level"})},p={SILVER:d.a.createElement(a.b,{id:"components.identityverification.tiercard.silverlevelname",defaultMessage:"Silver"}),GOLD:d.a.createElement(a.b,{id:"components.identityverification.tiercard.goldlevelname",defaultMessage:"Gold"})},m={EMAIL:d.a.createElement(c.P,{size:"12px"},d.a.createElement(a.b,{id:"components.identityverification.tiercard.email",defaultMessage:"Verified Email"})),NAME:d.a.createElement(c.P,{size:"12px"},d.a.createElement(a.b,{id:"components.identityverification.tiercard.name",defaultMessage:"Name"})),DOB:d.a.createElement(c.P,{size:"12px"},d.a.createElement(a.b,{id:"components.identityverification.tiercard.dob",defaultMessage:"Date of Birth"})),ADDRESS:d.a.createElement(c.P,{size:"12px"},d.a.createElement(a.b,{id:"copy.address",defaultMessage:"Address"})),TIER1:d.a.createElement(c.P,{size:"12px",color:"grey400"},d.a.createElement(a.b,{id:"components.identityverification.tiercard.silverplus",defaultMessage:"Silver Level +"})),GOVID:d.a.createElement(c.P,{size:"12px"},d.a.createElement(a.b,{id:"components.identityverification.tiercard.id",defaultMessage:"Gov't Issued ID"})),SELFIE:d.a.createElement(c.P,{size:"12px",style:{marginBottom:"26px",display:"inline-block"}},d.a.createElement(a.b,{id:"components.identityverification.tiercard.portraitphoto",defaultMessage:"Portrait Photo"}))},f={ANNUAL:d.a.createElement(c.P,{size:"14px"},d.a.createElement(a.b,{id:"components.identityverification.tiercard.annualtradinglimit",defaultMessage:"Annual Trading Limit"})),DAILY:d.a.createElement(c.P,{size:"14px"},d.a.createElement(a.b,{id:"components.identityverification.tiercard.dailytradinglimit",defaultMessage:"Daily Trading Limit"}))},b=function status(e,t,n){var l=Object(r.a)([e-1,"state"],t),u=Object(i.a)(e,t);switch(l){case"verified":return d.a.createElement(c.P,{size:"14px",color:"success"},d.a.createElement(a.b,{id:"components.identityverification.tiercard.verified",defaultMessage:"Approved!"}));case"pending":return d.a.createElement(c.P,{size:"14px",color:"btc"},d.a.createElement(a.b,{id:"components.identityverification.tiercard.pending",defaultMessage:"In Review"}));case"rejected":if(u){if(Object(o.a)(Object(s.a)("state","none",u),Object(s.a)("state","pending",u)))return d.a.createElement(c.P,{size:"14px",color:"btc"},d.a.createElement(a.b,{id:"components.identityverification.tiercard.pending",defaultMessage:"In Review"}));if(Object(s.a)("state","verified",u))return d.a.createElement(c.P,{size:"14px",color:"success"},d.a.createElement(a.b,{id:"components.identityverification.tiercard.verified",defaultMessage:"Approved!"}))}return d.a.createElement(c.P,{size:"14px",color:"error"},d.a.createElement(a.b,{id:"components.identityverification.tiercard.rejected",defaultMessage:"Rejected"}));default:return d.a.createElement(a.b,{id:"components.identityverification.tiercard.timing",defaultMessage:"Takes {time} min",values:{time:n}})}},y={SILVER:d.a.createElement("span",{"data-e2e":"unlockSilverBtn"},d.a.createElement(a.b,{id:"components.identityverification.tiercard.silvercta",defaultMessage:"Unlock Silver"})),GOLD:d.a.createElement("span",{"data-e2e":"unlockGoldBtn"},d.a.createElement(a.b,{id:"components.identityverification.tiercard.goldctamedal",defaultMessage:"Unlock Gold 🥇"}))}},"./src/modals/Exchange/SwapUpgrade/index.js":function(e,t,n){"use strict";n.r(t),n.d(t,"default",(function(){return E}));var a=n("../../node_modules/react-redux/es/index.js"),r=n("../../node_modules/react-intl/lib/index.es.js"),i=n("../../node_modules/ramda/es/path.js"),o=n("../../node_modules/react/index.js"),s=n.n(o),c=n("../../node_modules/styled-components/dist/styled-components.browser.esm.js"),l=n("./src/data/index.ts"),d=n("../blockchain-info-components/src/index.js"),u=n("../blockchain-wallet-v4/src/exchange/currency/index.ts"),p=n("../../node_modules/ramda/es/propOr.js");var m=n("./src/components/IdentityVerification/TierCard/services.js"),f=n("./src/components/IdentityVerification/TierCard/model.js"),b=n("./src/providers/ModalEnhancer/index.tsx");function _typeof(e){return(_typeof="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function _typeof(e){return typeof e}:function _typeof(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e})(e)}function _classCallCheck(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}function _defineProperties(e,t){for(var n=0;n<t.length;n++){var a=t[n];a.enumerable=a.enumerable||!1,a.configurable=!0,"value"in a&&(a.writable=!0),Object.defineProperty(e,a.key,a)}}function _setPrototypeOf(e,t){return(_setPrototypeOf=Object.setPrototypeOf||function _setPrototypeOf(e,t){return e.__proto__=t,e})(e,t)}function _possibleConstructorReturn(e,t){return!t||"object"!==_typeof(t)&&"function"!=typeof t?function _assertThisInitialized(e){if(void 0===e)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return e}(e):t}function _isNativeReflectConstruct(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Date.prototype.toString.call(Reflect.construct(Date,[],(function(){}))),!0}catch(e){return!1}}function _getPrototypeOf(e){return(_getPrototypeOf=Object.setPrototypeOf?Object.getPrototypeOf:function _getPrototypeOf(e){return e.__proto__||Object.getPrototypeOf(e)})(e)}function _templateObject5(){var e=_taggedTemplateLiteral(["\n  height: auto;\n  font-size: 17px;\n  font-weight: 500;\n  padding: 15px 0;\n  margin-bottom: 32px;\n"]);return _templateObject5=function _templateObject5(){return e},e}function _templateObject4(){var e=_taggedTemplateLiteral(["\n  width: 100%;\n  align-self: flex-end;\n"]);return _templateObject4=function _templateObject4(){return e},e}function _templateObject3(){var e=_taggedTemplateLiteral(["\n  margin-bottom: 16px;\n  font-size: 14px;\n"]);return _templateObject3=function _templateObject3(){return e},e}function _templateObject2(){var e=_taggedTemplateLiteral(["\n  margin-bottom: 8px;\n  font-size: 20px;\n  b {\n    font-weight: 500;\n    color: ",";\n  }\n"]);return _templateObject2=function _templateObject2(){return e},e}function _templateObject(){var e=_taggedTemplateLiteral(["\n  display: flex;\n  flex-direction: column;\n  justify-content: flex-start;\n  align-items: center;\n  height: 435px;\n  padding: 48px 32px 0 32px;\n  box-sizing: border-box;\n  text-align: center;\n"]);return _templateObject=function _templateObject(){return e},e}function _taggedTemplateLiteral(e,t){return t||(t=e.slice(0)),Object.freeze(Object.defineProperties(e,{raw:{value:Object.freeze(t)}}))}var y=c.d.div(_templateObject()),g=Object(c.d)(d.P)(_templateObject2(),(function(e){return e.theme.success})),v=Object(c.d)(d.P)(_templateObject3()),O=Object(c.d)(d.t)(_templateObject4()),j=Object(c.d)(d.e).attrs({nature:"primary",fullwidth:!0})(_templateObject5()),_=function(e){!function _inherits(e,t){if("function"!=typeof t&&null!==t)throw new TypeError("Super expression must either be null or a function");e.prototype=Object.create(t&&t.prototype,{constructor:{value:e,writable:!0,configurable:!0}}),t&&_setPrototypeOf(e,t)}(SwapUpgrade,e);var t=function _createSuper(e){return function(){var t,n=_getPrototypeOf(e);if(_isNativeReflectConstruct()){var a=_getPrototypeOf(this).constructor;t=Reflect.construct(n,arguments,a)}else t=n.apply(this,arguments);return _possibleConstructorReturn(this,t)}}(SwapUpgrade);function SwapUpgrade(){return _classCallCheck(this,SwapUpgrade),t.apply(this,arguments)}return function _createClass(e,t,n){return t&&_defineProperties(e.prototype,t),n&&_defineProperties(e,n),e}(SwapUpgrade,[{key:"componentDidMount",value:function componentDidMount(){this.props.dontShowAgain()}},{key:"render",value:function render(){var e=this.props,t=e.position,n=e.total,a=e.amountLeft,o=e.nextTier,c=e.nextTierAmount,l=e.upgrade;return s.a.createElement(d.v,{size:"small",position:t,total:n},s.a.createElement(y,{"data-e2e":"swapGetStarted"},s.a.createElement(g,{size:"20px"},s.a.createElement(r.a,{defaultMessage:"Heads up! You have <b>{amount}</b> left to Swap",id:"modals.swap_upgrade.heads_up",values:{amount:a}})),s.a.createElement(v,null,s.a.createElement(r.b,{defaultMessage:"Upgrade to {nextLevel} and Swap up to {amount} every day.",id:"modals.swap_upgrade.amount_after_upgrade",values:{nextLevel:m.b[Object(i.a)([o,"level"],f.a)],amount:c}})),s.a.createElement(j,{nature:"primary",size:"20px",fullwidth:!0,onClick:l},s.a.createElement(r.b,{defaultMessage:"Upgrade Now",id:"modals.swap_upgrade.upgrade_now"})),s.a.createElement(O,{name:"identity-verification"})))}}]),SwapUpgrade}(s.a.PureComponent),h=Object(a.c)((e,{currentTier:t,nextTier:n})=>{const a=l.f.modules.profile.getTiers(e).map(Object(i.a)([n-1,"limits"])),r=a.map(Object(p.a)("USD","currency")).getOrElse("USD"),o=l.f.modules.profile.getUserData(e).map(Object(i.a)(["limits",t-1,"annual"])).getOrElse(0),s=a.map(Object(p.a)(0,"daily")).getOrElse(0);return{amountLeft:Object(u.c)({value:o,unit:r}),nextTierAmount:Object(u.c)({value:s,unit:r})}},(function mapDispatchToProps(e,t){var n=t.nextTier;return{dontShowAgain:function dontShowAgain(){return e(l.b.preferences.hideSwapUpgradeModal())},upgrade:function upgrade(){e(l.b.modals.closeModal()),e(l.b.components.identityVerification.verifyIdentity(n))}}}))(_),E=Object(b.a)("SwapUpgrade")(h)},"./src/providers/ModalEnhancer/index.tsx":function(e,t,n){"use strict";var a=n("./src/data/index.ts"),r=n("../../node_modules/redux/es/redux.js"),i=n("../../node_modules/react-redux/es/index.js"),o=n("../../node_modules/ramda/es/equals.js"),s=n("../../node_modules/react/index.js"),c=n.n(s),l=n("../../node_modules/react-dom/index.js"),d=n.n(l),__rest=function(e,t){var n={};for(var a in e)Object.prototype.hasOwnProperty.call(e,a)&&t.indexOf(a)<0&&(n[a]=e[a]);if(null!=e&&"function"==typeof Object.getOwnPropertySymbols){var r=0;for(a=Object.getOwnPropertySymbols(e);r<a.length;r++)t.indexOf(a[r])<0&&Object.prototype.propertyIsEnumerable.call(e,a[r])&&(n[a[r]]=e[a[r]])}return n};const u=Object(i.c)(e=>({modals:a.f.modals.getModals(e)}),e=>({close:Object(r.d)(e,a.b.modals.closeModal),closeAll:Object(r.d)(e,a.b.modals.closeAllModals),update:Object(r.d)(e,a.b.modals.updateModalOptions)}));t.a=(e,t={})=>n=>u(class extends s.PureComponent{constructor(){super(...arguments),this.state={},this.handleClose=()=>{t.transition?(this.setState({userClickedOutside:!0}),setTimeout(()=>{this.props.close(),this.setState({userClickedOutside:!1})},t.transition)):this.props.close()},this.handleClick=e=>{const t=d.a.findDOMNode(this.node);t&&!this.props.disableOutsideClose&&Object(o.a)(t.children[0],e.target)&&this.handleClose()},this.onKeyPressed=e=>{27!==(e||window.event).keyCode||t.preventEscapeClose||this.handleClose()}}render(){const t=this.props,{modals:a}=t,r=__rest(t,["modals"]),i=a.filter(t=>t.type===e),setRef=e=>{e&&(this.node=e,e.focus())};return i.length?c.a.createElement("div",null,i.map((t,i)=>c.a.createElement("div",{key:`${e}:${i}`,onKeyDown:this.onKeyPressed,onMouseDown:this.handleClick,ref:setRef,tabIndex:0},c.a.createElement(n,Object.assign({ref:this.node,position:a.indexOf(t)+1,total:a.length},this.state,t.options,t.props,r))))):null}})}}]);