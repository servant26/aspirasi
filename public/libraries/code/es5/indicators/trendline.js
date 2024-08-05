/**
 * Highstock JS v11.2.0 (2023-10-30)
 *
 * Indicator series type for Highcharts Stock
 *
 * (c) 2010-2021 Sebastian Bochan
 *
 * License: www.highcharts.com/license
 */!function(t){"object"==typeof module&&module.exports?(t.default=t,module.exports=t):"function"==typeof define&&define.amd?define("highcharts/indicators/trendline",["highcharts","highcharts/modules/stock"],function(e){return t(e),t.Highcharts=e,t}):t("undefined"!=typeof Highcharts?Highcharts:void 0)}(function(t){"use strict";var e=t?t._modules:{};function n(t,e,n,o){t.hasOwnProperty(e)||(t[e]=o.apply(null,n),"function"==typeof CustomEvent&&window.dispatchEvent(new CustomEvent("HighchartsModuleLoaded",{detail:{path:e,module:t[e]}})))}n(e,"Stock/Indicators/TrendLine/TrendLineIndicator.js",[e["Core/Series/SeriesRegistry.js"],e["Core/Utilities.js"]],function(t,e){var n,o=this&&this.__extends||(n=function(t,e){return(n=Object.setPrototypeOf||({__proto__:[]})instanceof Array&&function(t,e){t.__proto__=e}||function(t,e){for(var n in e)Object.prototype.hasOwnProperty.call(e,n)&&(t[n]=e[n])})(t,e)},function(t,e){if("function"!=typeof e&&null!==e)throw TypeError("Class extends value "+String(e)+" is not a constructor or null");function o(){this.constructor=t}n(t,e),t.prototype=null===e?Object.create(e):(o.prototype=e.prototype,new o)}),r=t.seriesTypes.sma,i=e.extend,s=e.merge,a=e.isArray,u=function(t){function e(){var e=null!==t&&t.apply(this,arguments)||this;return e.data=void 0,e.options=void 0,e.points=void 0,e.updateAllPoints=!0,e}return o(e,t),e.prototype.getValues=function(t,e){var n,o,r,i=t.xData,s=t.yData,u=[],c=[],d=[],p=i.length,l=e.index,f=(p-1)*p/2,h=0,y=0;for(o=0;o<p;o++)h+=r=a(s[o])?s[o][l]:s[o],y+=o*r;isNaN(n=(p*y-f*h)/(p*((p-1)*p*(2*p-1)/6)-f*f))&&(n=0);var m=(h-n*f)/p;for(o=0;o<p;o++)r=n*o+m,u[o]=[i[o],r],c[o]=i[o],d[o]=r;return{xData:c,yData:d,values:u}},e.defaultOptions=s(r.defaultOptions,{params:{period:void 0,index:3}}),e}(r);return i(u.prototype,{nameBase:"Trendline",nameComponents:!1}),t.registerSeriesType("trendline",u),u}),n(e,"masters/indicators/trendline.src.js",[],function(){})});//# sourceMappingURL=trendline.js.map