!function(t){var e={};function n(r){if(e[r])return e[r].exports;var a=e[r]={i:r,l:!1,exports:{}};return t[r].call(a.exports,a,a.exports,n),a.l=!0,a.exports}n.m=t,n.c=e,n.d=function(t,e,r){n.o(t,e)||Object.defineProperty(t,e,{enumerable:!0,get:r})},n.r=function(t){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(t,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(t,"__esModule",{value:!0})},n.t=function(t,e){if(1&e&&(t=n(t)),8&e)return t;if(4&e&&"object"==typeof t&&t&&t.__esModule)return t;var r=Object.create(null);if(n.r(r),Object.defineProperty(r,"default",{enumerable:!0,value:t}),2&e&&"string"!=typeof t)for(var a in t)n.d(r,a,function(e){return t[e]}.bind(null,a));return r},n.n=function(t){var e=t&&t.__esModule?function(){return t.default}:function(){return t};return n.d(e,"a",e),e},n.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},n.p="/",n(n.s=2)}({2:function(t,e,n){t.exports=n("DRkM")},DRkM:function(t,e){var n,r,a,o,i;function c(t){d3.event.active||o.alphaTarget(.3).restart(),t.fx=t.x,t.fy=t.y}function u(t){t.fx=d3.event.x,t.fy=d3.event.y}function l(t){d3.event.active||o.alphaTarget(0),t.fx=null,t.fy=null}$(document).ready(function(){console.log("init character-map"),i=$(".character-map-svg"),n=d3.select(".character-map-svg"),r=+n.attr("width"),a=+n.attr("height");var t=i.data("url");d3.scaleOrdinal(d3.schemeCategory20),o=d3.forceSimulation().force("link",d3.forceLink().id(function(t){return t.id}).distance(function(t){return t.distance}).strength(1)).force("charge",d3.forceManyBody()).force("center",d3.forceCenter(r/2,a/2)),d3.json(t,function(t,e){if(t)throw t;n.append("defs").attr("class","defs").selectAll("pattern").data(e.nodes).enter().append("pattern").attr("id",function(t){return"img-"+t.id}).attr("width","1").attr("height","1").append("image").attr("xlink:href",function(t){return t.image}).attr("height","100").attr("width","100").attr("x",-30).attr("y",-20);var r=n.append("g").attr("class","links").selectAll("line").data(e.links).enter().append("line").attr("stroke-width",function(t){return Math.sqrt(t.value)}),a=n.append("g").attr("class","nodes").selectAll("circle").data(e.nodes).enter().append("circle").attr("r",25).attr("fill",function(t){return"url(#img-"+t.id}).call(d3.drag().on("start",c).on("drag",u).on("end",l)),i=n.append("g").attr("class","texts").selectAll("circle").data(e.nodes).enter().append("a").attr("xlink:href",function(t){return t.link}).append("text").text(function(t){return t.name});o.nodes(e.nodes).on("tick",function(){r.attr("x1",function(t){return t.source.x}).attr("y1",function(t){return t.source.y}).attr("x2",function(t){return t.target.x}).attr("y2",function(t){return t.target.y}),a.attr("cx",function(t){return t.x}).attr("cy",function(t){return t.y}),i.attr("x",function(t){return t.x}).attr("y",function(t){return t.y+40})}),o.force("link").links(e.links)})})}});