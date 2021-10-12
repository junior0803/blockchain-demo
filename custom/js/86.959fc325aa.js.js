(window.webpackJsonp=window.webpackJsonp||[]).push([[86],{"../../node_modules/react-lifecycles-compat/react-lifecycles-compat.es.js":function(e,t,n){"use strict";function componentWillMount(){var e=this.constructor.getDerivedStateFromProps(this.props,this.state);null!=e&&this.setState(e)}function componentWillReceiveProps(e){this.setState(function updater(t){var n=this.constructor.getDerivedStateFromProps(e,t);return null!=n?n:null}.bind(this))}function componentWillUpdate(e,t){try{var n=this.props,o=this.state;this.props=e,this.state=t,this.__reactInternalSnapshotFlag=!0,this.__reactInternalSnapshot=this.getSnapshotBeforeUpdate(n,o)}finally{this.props=n,this.state=o}}function polyfill(e){var t=e.prototype;if(!t||!t.isReactComponent)throw new Error("Can only polyfill class components");if("function"!=typeof e.getDerivedStateFromProps&&"function"!=typeof t.getSnapshotBeforeUpdate)return e;var n=null,o=null,i=null;if("function"==typeof t.componentWillMount?n="componentWillMount":"function"==typeof t.UNSAFE_componentWillMount&&(n="UNSAFE_componentWillMount"),"function"==typeof t.componentWillReceiveProps?o="componentWillReceiveProps":"function"==typeof t.UNSAFE_componentWillReceiveProps&&(o="UNSAFE_componentWillReceiveProps"),"function"==typeof t.componentWillUpdate?i="componentWillUpdate":"function"==typeof t.UNSAFE_componentWillUpdate&&(i="UNSAFE_componentWillUpdate"),null!==n||null!==o||null!==i){var s=e.displayName||e.name,r="function"==typeof e.getDerivedStateFromProps?"getDerivedStateFromProps()":"getSnapshotBeforeUpdate()";throw Error("Unsafe legacy lifecycles will not be called for components using new component APIs.\n\n"+s+" uses "+r+" but also contains the following legacy lifecycles:"+(null!==n?"\n  "+n:"")+(null!==o?"\n  "+o:"")+(null!==i?"\n  "+i:"")+"\n\nThe above lifecycles should be removed. Learn more about this warning here:\nhttps://fb.me/react-async-component-lifecycle-hooks")}if("function"==typeof e.getDerivedStateFromProps&&(t.componentWillMount=componentWillMount,t.componentWillReceiveProps=componentWillReceiveProps),"function"==typeof t.getSnapshotBeforeUpdate){if("function"!=typeof t.componentDidUpdate)throw new Error("Cannot polyfill getSnapshotBeforeUpdate() for components that do not define componentDidUpdate() on the prototype");t.componentWillUpdate=componentWillUpdate;var l=t.componentDidUpdate;t.componentDidUpdate=function componentDidUpdatePolyfill(e,t,n){var o=this.__reactInternalSnapshotFlag?this.__reactInternalSnapshot:n;l.call(this,e,t,o)}}return e}n.r(t),n.d(t,"polyfill",(function(){return polyfill})),componentWillMount.__suppressDeprecationWarning=!0,componentWillReceiveProps.__suppressDeprecationWarning=!0,componentWillUpdate.__suppressDeprecationWarning=!0},"../../node_modules/react-transition-group/Transition.js":function(e,t,n){"use strict";t.__esModule=!0,t.default=t.EXITING=t.ENTERED=t.ENTERING=t.EXITED=t.UNMOUNTED=void 0;var o=function _interopRequireWildcard(e){if(e&&e.__esModule)return e;var t={};if(null!=e)for(var n in e)if(Object.prototype.hasOwnProperty.call(e,n)){var o=Object.defineProperty&&Object.getOwnPropertyDescriptor?Object.getOwnPropertyDescriptor(e,n):{};o.get||o.set?Object.defineProperty(t,n,o):t[n]=e[n]}return t.default=e,t}(n("../../node_modules/prop-types/index.js")),i=_interopRequireDefault(n("../../node_modules/react/index.js")),s=_interopRequireDefault(n("../../node_modules/react-dom/index.js")),r=n("../../node_modules/react-lifecycles-compat/react-lifecycles-compat.es.js");n("../../node_modules/react-transition-group/utils/PropTypes.js");function _interopRequireDefault(e){return e&&e.__esModule?e:{default:e}}t.UNMOUNTED="unmounted";t.EXITED="exited";t.ENTERING="entering";t.ENTERED="entered";t.EXITING="exiting";var l=function(e){function Transition(t,n){var o;o=e.call(this,t,n)||this;var i,s=n.transitionGroup,r=s&&!s.isMounting?t.enter:t.appear;return o.appearStatus=null,t.in?r?(i="exited",o.appearStatus="entering"):i="entered":i=t.unmountOnExit||t.mountOnEnter?"unmounted":"exited",o.state={status:i},o.nextCallback=null,o}!function _inheritsLoose(e,t){e.prototype=Object.create(t.prototype),e.prototype.constructor=e,e.__proto__=t}(Transition,e);var t=Transition.prototype;return t.getChildContext=function getChildContext(){return{transitionGroup:null}},Transition.getDerivedStateFromProps=function getDerivedStateFromProps(e,t){return e.in&&"unmounted"===t.status?{status:"exited"}:null},t.componentDidMount=function componentDidMount(){this.updateStatus(!0,this.appearStatus)},t.componentDidUpdate=function componentDidUpdate(e){var t=null;if(e!==this.props){var n=this.state.status;this.props.in?"entering"!==n&&"entered"!==n&&(t="entering"):"entering"!==n&&"entered"!==n||(t="exiting")}this.updateStatus(!1,t)},t.componentWillUnmount=function componentWillUnmount(){this.cancelNextCallback()},t.getTimeouts=function getTimeouts(){var e,t,n,o=this.props.timeout;return e=t=n=o,null!=o&&"number"!=typeof o&&(e=o.exit,t=o.enter,n=o.appear),{exit:e,enter:t,appear:n}},t.updateStatus=function updateStatus(e,t){if(void 0===e&&(e=!1),null!==t){this.cancelNextCallback();var n=s.default.findDOMNode(this);"entering"===t?this.performEnter(n,e):this.performExit(n)}else this.props.unmountOnExit&&"exited"===this.state.status&&this.setState({status:"unmounted"})},t.performEnter=function performEnter(e,t){var n=this,o=this.props.enter,i=this.context.transitionGroup?this.context.transitionGroup.isMounting:t,s=this.getTimeouts();t||o?(this.props.onEnter(e,i),this.safeSetState({status:"entering"},(function(){n.props.onEntering(e,i),n.onTransitionEnd(e,s.enter,(function(){n.safeSetState({status:"entered"},(function(){n.props.onEntered(e,i)}))}))}))):this.safeSetState({status:"entered"},(function(){n.props.onEntered(e)}))},t.performExit=function performExit(e){var t=this,n=this.props.exit,o=this.getTimeouts();n?(this.props.onExit(e),this.safeSetState({status:"exiting"},(function(){t.props.onExiting(e),t.onTransitionEnd(e,o.exit,(function(){t.safeSetState({status:"exited"},(function(){t.props.onExited(e)}))}))}))):this.safeSetState({status:"exited"},(function(){t.props.onExited(e)}))},t.cancelNextCallback=function cancelNextCallback(){null!==this.nextCallback&&(this.nextCallback.cancel(),this.nextCallback=null)},t.safeSetState=function safeSetState(e,t){t=this.setNextCallback(t),this.setState(e,t)},t.setNextCallback=function setNextCallback(e){var t=this,n=!0;return this.nextCallback=function(o){n&&(n=!1,t.nextCallback=null,e(o))},this.nextCallback.cancel=function(){n=!1},this.nextCallback},t.onTransitionEnd=function onTransitionEnd(e,t,n){this.setNextCallback(n),e?(this.props.addEndListener&&this.props.addEndListener(e,this.nextCallback),null!=t&&setTimeout(this.nextCallback,t)):setTimeout(this.nextCallback,0)},t.render=function render(){var e=this.state.status;if("unmounted"===e)return null;var t=this.props,n=t.children,o=function _objectWithoutPropertiesLoose(e,t){if(null==e)return{};var n,o,i={},s=Object.keys(e);for(o=0;o<s.length;o++)n=s[o],t.indexOf(n)>=0||(i[n]=e[n]);return i}(t,["children"]);if(delete o.in,delete o.mountOnEnter,delete o.unmountOnExit,delete o.appear,delete o.enter,delete o.exit,delete o.timeout,delete o.addEndListener,delete o.onEnter,delete o.onEntering,delete o.onEntered,delete o.onExit,delete o.onExiting,delete o.onExited,"function"==typeof n)return n(e,o);var s=i.default.Children.only(n);return i.default.cloneElement(s,o)},Transition}(i.default.Component);function noop(){}l.contextTypes={transitionGroup:o.object},l.childContextTypes={transitionGroup:function transitionGroup(){}},l.propTypes={},l.defaultProps={in:!1,mountOnEnter:!1,unmountOnExit:!1,appear:!1,enter:!0,exit:!0,onEnter:noop,onEntering:noop,onEntered:noop,onExit:noop,onExiting:noop,onExited:noop},l.UNMOUNTED=0,l.EXITED=1,l.ENTERING=2,l.ENTERED=3,l.EXITING=4;var a=(0,r.polyfill)(l);t.default=a},"../../node_modules/react-transition-group/utils/PropTypes.js":function(e,t,n){"use strict";t.__esModule=!0,t.classNamesShape=t.timeoutsShape=void 0;(function _interopRequireDefault(e){return e&&e.__esModule?e:{default:e}})(n("../../node_modules/prop-types/index.js"));t.timeoutsShape=null;t.classNamesShape=null},"./src/components/Flyout/index.tsx":function(e,t,n){"use strict";n.d(t,"g",(function(){return u})),n.d(t,"b",(function(){return y})),n.d(t,"a",(function(){return b})),n.d(t,"c",(function(){return g})),n.d(t,"d",(function(){return E})),n.d(t,"e",(function(){return v}));var o=n("../blockchain-info-components/src/index.js"),i=n("./src/services/ResponsiveService/index.ts"),s=n("../../node_modules/react/index.js"),r=n.n(s),l=n("../../node_modules/react-addons-css-transition-group/index.js"),a=n.n(l),c=n("../../node_modules/styled-components/dist/styled-components.browser.esm.js"),p=n("../../node_modules/react-transition-group/Transition.js"),d=n.n(p),__rest=function(e,t){var n={};for(var o in e)Object.prototype.hasOwnProperty.call(e,o)&&t.indexOf(o)<0&&(n[o]=e[o]);if(null!=e&&"function"==typeof Object.getOwnPropertySymbols){var i=0;for(o=Object.getOwnPropertySymbols(e);i<o.length;i++)t.indexOf(o[i])<0&&Object.prototype.propertyIsEnumerable.call(e,o[i])&&(n[o[i]]=e[o[i]])}return n};const u=500,m={transition:`right ${u}ms`,right:"-480px"},f={entering:{right:"-480px"},entered:{right:"0px"}},h=Object(c.d)(o.v)`
  border-radius: 0px;
  overflow: auto;
  position: absolute;
  width: ${480}px;
  height: 100vh;
  color: ${e=>e.theme.grey700};
  ${i.a.mobile`
    width: 100%;
    height: calc(100vh - 80px);
    padding-bottom: 20px;
  `};
`,x=c.d.div`
  height: 100%;

  .flyout-children-enter {
    top: 0;
    ${e=>"left"===e.direction&&"\n      left: 99%;\n    "}
    ${e=>"right"===e.direction&&"\n      left: -99%;\n    "}
    opacity: 0.01;
    position: absolute;
  }

  .flyout-children-enter.flyout-children-enter-active {
    opacity: 1;
    left: 0;
    transition: left ${500}ms, opacity ${500}ms;
  }

  .flyout-children-leave {
    position: absolute;
    opacity: 1;
    left: 0;
    top: 0;
  }

  .flyout-children-leave.flyout-children-leave-active {
    ${e=>"left"===e.direction&&"\n      left: -99%;\n    "}
    ${e=>"right"===e.direction&&"\n      left: 99%;\n    "}
    opacity: 0.01;
    transition: left ${500}ms, opacity ${500}ms;
  }
`,y=c.d.div`
  width: 100%;
  box-sizing: border-box;
  padding: 40px;
  ${i.a.tablet`
    padding: 20px;
  `}
`,b=c.d.div`
  height: 100%;
  width: 100%;
`,g=c.d.div`
  padding: 16px 40px;
  box-sizing: border-box;
  border-top: 1px solid ${e=>e.theme.grey000};
  &:last-child {
    border-bottom: 1px solid ${e=>e.theme.grey000};
  }
`,E=Object(c.d)(o.P)`
  font-size: 14px;
  font-weight: 500;
  color: ${e=>e.theme.grey600};
`,v=Object(c.d)(o.P)`
  margin-top: 4px;
  font-size: 16px;
  font-weight: 600;
  color: ${e=>e.theme.grey800};
`;class O extends r.a.PureComponent{render(){const e=this.props,{children:t}=e,n=__rest(e,["children"]);return r.a.createElement(d.a,{in:this.props.in&&!this.props.userClickedOutside,timeout:0},e=>r.a.createElement(h,Object.assign({},n,{type:"flyout",style:Object.assign(Object.assign({},m),f[e])}),r.a.createElement(x,{direction:this.props.direction||"left"},r.a.createElement(a.a,{transitionName:"flyout-children",transitionEnterTimeout:500,transitionLeaveTimeout:500},t))))}}t.f=O},"./src/modals/Onboarding/Welcome/index.tsx":function(e,t,n){"use strict";n.r(t);var o=n("./src/data/index.ts"),i=n("../../node_modules/redux/es/redux.js"),s=n("../blockchain-info-components/src/index.js"),r=n("../../node_modules/react-redux/es/index.js"),l=n("../../node_modules/react-intl/lib/index.es.js"),a=n("./src/components/Flyout/index.tsx"),c=n("./src/providers/ModalEnhancer/index.tsx"),p=n("../../node_modules/react/index.js"),d=n.n(p),u=n("../../node_modules/styled-components/dist/styled-components.browser.esm.js"),__rest=function(e,t){var n={};for(var o in e)Object.prototype.hasOwnProperty.call(e,o)&&t.indexOf(o)<0&&(n[o]=e[o]);if(null!=e&&"function"==typeof Object.getOwnPropertySymbols){var i=0;for(o=Object.getOwnPropertySymbols(e);i<o.length;i++)t.indexOf(o[i])<0&&Object.prototype.propertyIsEnumerable.call(e,o[i])&&(n[o[i]]=e[o[i]])}return n};const m=Object(u.d)(a.b)`
  width: 100%;
  height: 100%;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
`,f=u.d.div`
  display: flex;
  flex-direction: column;
`,h=u.d.div`
  display: flex;
  align-items: center;
  margin-bottom: 40px;

  span {
    margin-left: 8px;
  }
`,x=Object(u.d)(f)`
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  margin-bottom: 70px;
  padding: 40px;
  text-align: center;
`,y=u.d.div`
  display: flex;
  justify-content: center;
  align-items: center;
  width: 48px;
  height: 48px;
  min-width: 48px;
  background-color: ${e=>e.theme.blue000};
  border-radius: 48px;
`,b=Object(u.d)(s.P)`
  margin: 26px 0 13px;
`,g=Object(u.d)(s.P)`
  margin-bottom: 50px;
`,E=u.d.div`
  display: flex;
  flex-direction: column;
  align-items: flex-end;
  margin-top: 5px;
  & > :first-child {
    margin-bottom: 15px;
  }
`;class v extends d.a.PureComponent{constructor(){super(...arguments),this.state={show:!1},this.handleClose=()=>{this.setState({show:!1}),setTimeout(()=>{this.props.close()},a.g)},this.handleSBClick=()=>{this.setState({show:!1}),setTimeout(()=>{this.props.close(),this.props.simpleBuyActions.showModal("WelcomeModal")},a.g/2)}}componentDidMount(){this.setState({show:!0})}render(){const{show:e}=this.state,t=__rest(this.props,[]);return d.a.createElement(a.f,Object.assign({},t,{onClose:this.props.close,in:e,"data-e2e":"welcomeModal",direction:"left"}),d.a.createElement(m,null,d.a.createElement(h,null,d.a.createElement(s.t,{name:"intro-hand",width:"28px",height:"28px"}),d.a.createElement(s.P,{color:"grey600",size:"20px",weight:600},d.a.createElement(l.b,{id:"modals.wallet.tour.wallet.tour",defaultMessage:"Welcome to Blockchain!"}))),d.a.createElement(x,null,d.a.createElement(y,null,d.a.createElement(s.q,{color:"blue600",name:"cart-filled",size:"25px"})),d.a.createElement(b,{size:"20px",weight:600},d.a.createElement(l.b,{id:"modals.wallet.welcome.sb.title",defaultMessage:"Own Crypto in a Few Minutes"})),d.a.createElement(g,{color:"grey600",size:"14x",weight:500},d.a.createElement(l.b,{id:"modals.wallet.welcome.sb.verifybuy",defaultMessage:"Verify your identity and buy crypto."})),d.a.createElement(s.t,{name:"buy-wallet",width:"282px",height:"165px"})),d.a.createElement(E,null,d.a.createElement(s.e,{capitalize:!0,"data-e2e":"toSimpleBuyModal",fullwidth:!0,height:"48px",nature:"primary",onClick:this.handleSBClick,size:"16px"},d.a.createElement(l.b,{id:"modals.wallet.welcome.sb.button",defaultMessage:"Buy Crypto Now"})),d.a.createElement(s.e,{capitalize:!0,"data-e2e":"skipTour",fullwidth:!0,height:"48px",nature:"light",onClick:this.handleClose,size:"16px"},d.a.createElement(l.b,{id:"modals.wallet.welcome.sb.skip",defaultMessage:"Skip"})))))}}const O=Object(i.d)(Object(c.a)("WELCOME_MODAL",{transition:a.g}),Object(r.c)(null,e=>({onboardingActions:Object(i.b)(o.b.components.onboarding,e),simpleBuyActions:Object(i.b)(o.b.components.simpleBuy,e)})));t.default=O(v)},"./src/providers/ModalEnhancer/index.tsx":function(e,t,n){"use strict";var o=n("./src/data/index.ts"),i=n("../../node_modules/redux/es/redux.js"),s=n("../../node_modules/react-redux/es/index.js"),r=n("../../node_modules/ramda/es/equals.js"),l=n("../../node_modules/react/index.js"),a=n.n(l),c=n("../../node_modules/react-dom/index.js"),p=n.n(c),__rest=function(e,t){var n={};for(var o in e)Object.prototype.hasOwnProperty.call(e,o)&&t.indexOf(o)<0&&(n[o]=e[o]);if(null!=e&&"function"==typeof Object.getOwnPropertySymbols){var i=0;for(o=Object.getOwnPropertySymbols(e);i<o.length;i++)t.indexOf(o[i])<0&&Object.prototype.propertyIsEnumerable.call(e,o[i])&&(n[o[i]]=e[o[i]])}return n};const d=Object(s.c)(e=>({modals:o.f.modals.getModals(e)}),e=>({close:Object(i.d)(e,o.b.modals.closeModal),closeAll:Object(i.d)(e,o.b.modals.closeAllModals),update:Object(i.d)(e,o.b.modals.updateModalOptions)}));t.a=(e,t={})=>n=>d(class extends l.PureComponent{constructor(){super(...arguments),this.state={},this.handleClose=()=>{t.transition?(this.setState({userClickedOutside:!0}),setTimeout(()=>{this.props.close(),this.setState({userClickedOutside:!1})},t.transition)):this.props.close()},this.handleClick=e=>{const t=p.a.findDOMNode(this.node);t&&!this.props.disableOutsideClose&&Object(r.a)(t.children[0],e.target)&&this.handleClose()},this.onKeyPressed=e=>{27!==(e||window.event).keyCode||t.preventEscapeClose||this.handleClose()}}render(){const t=this.props,{modals:o}=t,i=__rest(t,["modals"]),s=o.filter(t=>t.type===e),setRef=e=>{e&&(this.node=e,e.focus())};return s.length?a.a.createElement("div",null,s.map((t,s)=>a.a.createElement("div",{key:`${e}:${s}`,onKeyDown:this.onKeyPressed,onMouseDown:this.handleClick,ref:setRef,tabIndex:0},a.a.createElement(n,Object.assign({ref:this.node,position:o.indexOf(t)+1,total:o.length},this.state,t.options,t.props,i))))):null}})}}]);