
/**
 * author Remy Sharp
 * url http://remysharp.com/2009/01/26/element-in-view-event-plugin/
 */
(function(a){a(window).scroll(function(){var g,d=window.innerHeight,e=document.compatMode;if(e||!a.support.boxModel)d="CSS1Compat"==e?document.documentElement.clientHeight:document.body.clientHeight;g=d;var f=document.documentElement.scrollTop?document.documentElement.scrollTop:document.body.scrollTop,b=[];a.each(a.cache,function(){this.events&&this.events.inview&&b.push(this.handle.elem)});b.length&&a(b).each(function(){var c=a(this),b=c.offset().top,d=c.height(),e=c.data("inview")||!1;f>b+d||f+ g<b?e&&(c.data("inview",!1),c.trigger("inview",[!1])):f<b+d&&!e&&(c.data("inview",!0),c.trigger("inview",[!0]))})});a(function(){a(window).scroll()})})(jQuery);


/*

Quicksand 1.2.2

Reorder and filter items with a nice shuffling animation.

Copyright (c) 2010 Jacek Galanciak (razorjack.net) and agilope.com
Big thanks for Piotr Petrus (riddle.pl) for deep code review and wonderful docs & demos.

Dual licensed under the MIT and GPL version 2 licenses.
http://github.com/jquery/jquery/blob/master/MIT-LICENSE.txt
http://github.com/jquery/jquery/blob/master/GPL-LICENSE.txt

Project site: http://razorjack.net/quicksand
Github site: http://github.com/razorjack/quicksand

*/

(function(c){c.fn.quicksand=function(v,h,l){var a={duration:750,easing:"swing",attribute:"data-id",adjustHeight:"auto",useScaling:!0,enhancement:function(){},selector:"> *",dx:0,dy:0};c.extend(a,h);if(c.browser.msie||"undefined"==typeof c.fn.scale)a.useScaling=!1;var p;"function"==typeof h?p=h:typeof("function"==l)&&(p=l);return this.each(function(i){var m,j=[],k=c(v).clone(),b=c(this),i=c(this).css("height"),q,h=!1,l=c(b).offset(),r=[],n=c(this).find(a.selector);if(c.browser.msie&&7>c.browser.version.substr(0, 1))b.html("").append(k);else{var u=0,w=function(){u||(u=1,$toDelete=b.find("> *"),b.prepend(g.find("> *")),$toDelete.remove(),h&&b.css("height",q),a.enhancement(b),"function"==typeof p&&p.call(this))},f=b.offsetParent(),e=f.offset();"relative"==f.css("position")?"body"!=f.get(0).nodeName.toLowerCase()&&(e.top+=parseFloat(f.css("border-top-width"))||0,e.left+=parseFloat(f.css("border-left-width"))||0):(e.top-=parseFloat(f.css("border-top-width"))||0,e.left-=parseFloat(f.css("border-left-width"))|| 0,e.top-=parseFloat(f.css("margin-top"))||0,e.left-=parseFloat(f.css("margin-left"))||0);isNaN(e.left)&&(e.left=0);isNaN(e.top)&&(e.top=0);e.left-=a.dx;e.top-=a.dy;b.css("height",c(this).height());n.each(function(a){r[a]=c(this).offset()});c(this).stop();var s=0,t=0;n.each(function(f){c(this).stop();var b=c(this).get(0);"absolute"==b.style.position?(s=-a.dx,t=-a.dy):(s=a.dx,t=a.dy);b.style.position="absolute";b.style.margin="0";b.style.top=r[f].top-parseFloat(b.style.marginTop)-e.top+t+"px";b.style.left= r[f].left-parseFloat(b.style.marginLeft)-e.left+s+"px"});var g=c(b).clone(),f=g.get(0);f.innerHTML="";f.setAttribute("id","");f.style.height="auto";f.style.width=b.width()+"px";g.append(k);g.insertBefore(b);g.css("opacity",0);f.style.zIndex=-1;f.style.margin="0";f.style.position="absolute";f.style.top=l.top-e.top+"px";f.style.left=l.left-e.left+"px";"dynamic"===a.adjustHeight?b.animate({height:g.height()},a.duration,a.easing):"auto"===a.adjustHeight&&(q=g.height(),parseFloat(i)<parseFloat(q)?b.css("height", q):h=!0);n.each(function(){var b=[];"function"==typeof a.attribute?(m=a.attribute(c(this)),k.each(function(){if(a.attribute(this)==m)return b=c(this),!1})):b=k.filter("["+a.attribute+"="+c(this).attr(a.attribute)+"]");b.length?a.useScaling?j.push({element:c(this),animation:{top:b.offset().top-e.top,left:b.offset().left-e.left,opacity:1,scale:"1.0"}}):j.push({element:c(this),animation:{top:b.offset().top-e.top,left:b.offset().left-e.left,opacity:1}}):a.useScaling?j.push({element:c(this),animation:{opacity:"0.0", scale:"0.0"}}):j.push({element:c(this),animation:{opacity:"0.0"}})});k.each(function(){var f=[],g=[];"function"==typeof a.attribute?(m=a.attribute(c(this)),n.each(function(){if(a.attribute(this)==m)return f=c(this),!1}),k.each(function(){if(a.attribute(this)==m)return g=c(this),!1})):(f=n.filter("["+a.attribute+"="+c(this).attr(a.attribute)+"]"),g=k.filter("["+a.attribute+"="+c(this).attr(a.attribute)+"]"));var i;if(0===f.length){i=a.useScaling?{opacity:"1.0",scale:"1.0"}:{opacity:"1.0"};d=g.clone(); var h=d.get(0);h.style.position="absolute";h.style.margin="0";h.style.top=g.offset().top-e.top+"px";h.style.left=g.offset().left-e.left+"px";d.css("opacity",0);a.useScaling&&d.css("transform","scale(0.0)");d.appendTo(b);j.push({element:c(d),animation:i})}});g.remove();a.enhancement(b);for(i=0;i<j.length;i++)j[i].element.animate(j[i].animation,a.duration,a.easing,w)}})}})(jQuery);

/*
 * jQuery Easing v1.3 - http://gsgd.co.uk/sandbox/jquery/easing/
 *
 * Uses the built in easing capabilities added In jQuery 1.1
 * to offer multiple easing options
 *
 * TERMS OF USE - jQuery Easing
 * 
 * Open source under the BSD License. 
 * 
 * Copyright © 2008 George McGinley Smith
 * All rights reserved.
 * 
 * Redistribution and use in source and binary forms, with or without modification, 
 * are permitted provided that the following conditions are met:
 * 
 * Redistributions of source code must retain the above copyright notice, this list of 
 * conditions and the following disclaimer.
 * Redistributions in binary form must reproduce the above copyright notice, this list 
 * of conditions and the following disclaimer in the documentation and/or other materials 
 * provided with the distribution.
 * 
 * Neither the name of the author nor the names of contributors may be used to endorse 
 * or promote products derived from this software without specific prior written permission.
 * 
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY 
 * EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF
 * MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
 *  COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL,
 *  EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE
 *  GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED 
 * AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING
 *  NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED 
 * OF THE POSSIBILITY OF SUCH DAMAGE. 
 *
*/

// t: current time, b: begInnIng value, c: change In value, d: duration
jQuery.easing.jswing=jQuery.easing.swing; jQuery.extend(jQuery.easing,{def:"easeOutQuad",swing:function(e,a,c,b,d){return jQuery.easing[jQuery.easing.def](e,a,c,b,d)},easeInQuad:function(e,a,c,b,d){return b*(a/=d)*a+c},easeOutQuad:function(e,a,c,b,d){return-b*(a/=d)*(a-2)+c},easeInOutQuad:function(e,a,c,b,d){return 1>(a/=d/2)?b/2*a*a+c:-b/2*(--a*(a-2)-1)+c},easeInCubic:function(e,a,c,b,d){return b*(a/=d)*a*a+c},easeOutCubic:function(e,a,c,b,d){return b*((a=a/d-1)*a*a+1)+c},easeInOutCubic:function(e,a,c,b,d){return 1>(a/=d/2)?b/2*a*a*a+c: b/2*((a-=2)*a*a+2)+c},easeInQuart:function(e,a,c,b,d){return b*(a/=d)*a*a*a+c},easeOutQuart:function(e,a,c,b,d){return-b*((a=a/d-1)*a*a*a-1)+c},easeInOutQuart:function(e,a,c,b,d){return 1>(a/=d/2)?b/2*a*a*a*a+c:-b/2*((a-=2)*a*a*a-2)+c},easeInQuint:function(e,a,c,b,d){return b*(a/=d)*a*a*a*a+c},easeOutQuint:function(e,a,c,b,d){return b*((a=a/d-1)*a*a*a*a+1)+c},easeInOutQuint:function(e,a,c,b,d){return 1>(a/=d/2)?b/2*a*a*a*a*a+c:b/2*((a-=2)*a*a*a*a+2)+c},easeInSine:function(e,a,c,b,d){return-b*Math.cos(a/ d*(Math.PI/2))+b+c},easeOutSine:function(e,a,c,b,d){return b*Math.sin(a/d*(Math.PI/2))+c},easeInOutSine:function(e,a,c,b,d){return-b/2*(Math.cos(Math.PI*a/d)-1)+c},easeInExpo:function(e,a,c,b,d){return 0==a?c:b*Math.pow(2,10*(a/d-1))+c},easeOutExpo:function(e,a,c,b,d){return a==d?c+b:b*(-Math.pow(2,-10*a/d)+1)+c},easeInOutExpo:function(e,a,c,b,d){return 0==a?c:a==d?c+b:1>(a/=d/2)?b/2*Math.pow(2,10*(a-1))+c:b/2*(-Math.pow(2,-10*--a)+2)+c},easeInCirc:function(e,a,c,b,d){return-b*(Math.sqrt(1-(a/=d)* a)-1)+c},easeOutCirc:function(e,a,c,b,d){return b*Math.sqrt(1-(a=a/d-1)*a)+c},easeInOutCirc:function(e,a,c,b,d){return 1>(a/=d/2)?-b/2*(Math.sqrt(1-a*a)-1)+c:b/2*(Math.sqrt(1-(a-=2)*a)+1)+c},easeInElastic:function(e,a,c,b,d){var e=1.70158,f=0,g=b;if(0==a)return c;if(1==(a/=d))return c+b;f||(f=0.3*d);g<Math.abs(b)?(g=b,e=f/4):e=f/(2*Math.PI)*Math.asin(b/g);return-(g*Math.pow(2,10*(a-=1))*Math.sin((a*d-e)*2*Math.PI/f))+c},easeOutElastic:function(e,a,c,b,d){var e=1.70158,f=0,g=b;if(0==a)return c;if(1== (a/=d))return c+b;f||(f=0.3*d);g<Math.abs(b)?(g=b,e=f/4):e=f/(2*Math.PI)*Math.asin(b/g);return g*Math.pow(2,-10*a)*Math.sin((a*d-e)*2*Math.PI/f)+b+c},easeInOutElastic:function(e,a,c,b,d){var e=1.70158,f=0,g=b;if(0==a)return c;if(2==(a/=d/2))return c+b;f||(f=d*0.3*1.5);g<Math.abs(b)?(g=b,e=f/4):e=f/(2*Math.PI)*Math.asin(b/g);return 1>a?-0.5*g*Math.pow(2,10*(a-=1))*Math.sin((a*d-e)*2*Math.PI/f)+c:0.5*g*Math.pow(2,-10*(a-=1))*Math.sin((a*d-e)*2*Math.PI/f)+b+c},easeInBack:function(e,a,c,b,d,f){void 0== f&&(f=1.70158);return b*(a/=d)*a*((f+1)*a-f)+c},easeOutBack:function(e,a,c,b,d,f){void 0==f&&(f=1.70158);return b*((a=a/d-1)*a*((f+1)*a+f)+1)+c},easeInOutBack:function(e,a,c,b,d,f){void 0==f&&(f=1.70158);return 1>(a/=d/2)?b/2*a*a*(((f*=1.525)+1)*a-f)+c:b/2*((a-=2)*a*(((f*=1.525)+1)*a+f)+2)+c},easeInBounce:function(e,a,c,b,d){return b-jQuery.easing.easeOutBounce(e,d-a,0,b,d)+c},easeOutBounce:function(e,a,c,b,d){return(a/=d)<1/2.75?b*7.5625*a*a+c:a<2/2.75?b*(7.5625*(a-=1.5/2.75)*a+0.75)+c:a<2.5/2.75? b*(7.5625*(a-=2.25/2.75)*a+0.9375)+c:b*(7.5625*(a-=2.625/2.75)*a+0.984375)+c},easeInOutBounce:function(e,a,c,b,d){return a<d/2?0.5*jQuery.easing.easeInBounce(e,2*a,0,b,d)+c:0.5*jQuery.easing.easeOutBounce(e,2*a-d,0,b,d)+0.5*b+c}});


/*
 *
 * TERMS OF USE - EASING EQUATIONS
 * 
 * Open source under the BSD License. 
 * 
 * Copyright © 2001 Robert Penner
 * All rights reserved.
 * 
 * Redistribution and use in source and binary forms, with or without modification, 
 * are permitted provided that the following conditions are met:
 * 
 * Redistributions of source code must retain the above copyright notice, this list of 
 * conditions and the following disclaimer.
 * Redistributions in binary form must reproduce the above copyright notice, this list 
 * of conditions and the following disclaimer in the documentation and/or other materials 
 * provided with the distribution.
 * 
 * Neither the name of the author nor the names of contributors may be used to endorse 
 * or promote products derived from this software without specific prior written permission.
 * 
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY 
 * EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF
 * MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
 *  COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL,
 *  EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE
 *  GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED 
 * AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING
 *  NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED 
 * OF THE POSSIBILITY OF SUCH DAMAGE. 
 *
 */


/*
 * Flickrush 1.0 - jQuery flickr plugin
 *
 * Copyright (c) 2010 Philip Beel (http://www.theodin.co.uk/)
 * Dual licensed under the MIT (http://www.opensource.org/licenses/mit-license.php) 
 * and GPL (http://www.opensource.org/licenses/gpl-license.php) licenses.
 *
 * Revision: $Id: jquery.flickrush.js 2010-02-17 $ 
 *
 */
(function(b){b.fn.flickrush=function(d){var a={limit:3,random:!0,id:"44499772@N06",style:""},d=b.extend(a,d);return this.each(function(){var d=b(this);b.getJSON("http://api.flickr.com/services/feeds/photos_public.gne?format=json&id="+a.id+"&jsoncallback=?",function(e){for(var f=0,c=[];f<=a.limit-1;){if(!0==a.random)var g=Math.floor(20*Math.random());b.each(e.items,function(f,h){if(!0==a.random){if(f==g&&!c.in_array(g)){var e=b("<img/>").attr({src:h.media.m,alt:h.tags,width:a.width,"class":a.style}); b(d).append(e)}}else f<=a.limit-1&&!c.in_array(a.limit-1)&&(e=b("<img/>").attr({src:h.media.m,alt:h.tags}),b(d).append(e))});!0==a.random?(c.in_array(g)&&a.limit++,c.push(g)):c.push(a.limit-1);f++}});Array.prototype.in_array=function(a){for(var b=0,c=this.length;b<c;b++)if(this[b]==a)return!0;return!1}})}})(jQuery);


/*
JavaScript for the demo: Recreating the Nikebetterworld.com Parallax Demo
Demo: Recreating the Nikebetterworld.com Parallax Demo
Author: Ian Lunn
Author URL: http://www.ianlunn.co.uk/
Demo URL: http://www.ianlunn.co.uk/demos/recreate-nikebetterworld-parallax/
Tutorial URL: http://www.ianlunn.co.uk/blog/code-tutorials/recreate-nikebetterworld-parallax/

License: http://creativecommons.org/licenses/by-sa/3.0/ (Attribution Share Alike). Please attribute work to Ian Lunn simply by leaving these comments in the source code or if you'd prefer, place a link on your website to http://www.ianlunn.co.uk/.

Dual licensed under the MIT and GPL licenses:
http://www.opensource.org/licenses/mit-license.php
http://www.gnu.org/licenses/gpl.html
*/

$(document).ready(function(){var $window=$(window);var $firstBG=$('#break1');var $secondBG=$('#break2');var $thirdBG=$('#break3');var $fourthBG=$('#break4');var $fiveBG=$("#break5");var windowHeight=$window.height();$('#break1, #break2,#break3,#break4,#break5').bind('inview',function(event,visible){if(visible==true){$(this).addClass("inview")}else{$(this).removeClass("inview")}});function RepositionNav(){var windowHeight=$window.height();var navHeight=$('#nav').height()/2;var windowCenter=(windowHeight/2);var newtop=windowCenter-navHeight}function newPos(x,windowHeight,pos,adjuster,inertia){return x+"% "+(-((windowHeight+pos)-adjuster)*inertia)+"px"}function Move(){var pos=$window.scrollTop();if($firstBG.hasClass("inview")){var first=Math.round($($firstBG).next().position().top);$firstBG.css({'backgroundPosition':newPos(50,windowHeight,pos,first,0.2)})}if($secondBG.hasClass("inview")){var two=Math.round($($secondBG).next().position().top);$secondBG.css({'backgroundPosition':newPos(50,windowHeight,pos,two,0.2)})}if($thirdBG.hasClass("inview")){var third=Math.round($($thirdBG).next().position().top);$thirdBG.css({'backgroundPosition':newPos(50,windowHeight,pos,third,0.2)})}if($fourthBG.hasClass("inview")){var four=Math.round($($fourthBG).next().position().top);$fourthBG.css({'backgroundPosition':newPos(50,windowHeight,pos,four,0.2)})}if($fiveBG.hasClass("inview")){var five=Math.round($($fiveBG).next().position().top);$fiveBG.css({'backgroundPosition':newPos(50,windowHeight,pos,five,0.2)})}}RepositionNav();$window.resize(function(){Move();RepositionNav()});$window.bind('scroll',function(){Move()})});





// Sticky Plugin
// =============
// Author: Anthony Garand
// Improvements by German M. Bravo (Kronuz) and Ruud Kamphuis (ruudk)
// Improvements by Leonardo C. Daronco (daronco)
// Created: 2/14/2011
// Date: 2/12/2012
// Website: http://labs.anthonygarand.com/sticky
// Description: Makes an element on the page stick on the screen as you scroll
//              It will only set the 'top' and 'position' of your element, you
//              might need to adjust the width in some cases.

(function($){var defaults={topSpacing:0,bottomSpacing:0,className:"is-sticky",wrapperClassName:"sticky-wrapper"},$window=$(window),$document=$(document),sticked=[],windowHeight=$window.height(),scroller=function(){var scrollTop=$window.scrollTop(),documentHeight=$document.height(),dwh=documentHeight-windowHeight,extra=scrollTop>dwh?dwh-scrollTop:0;for(var i=0;i<sticked.length;i++){var s=sticked[i],elementTop=s.stickyWrapper.offset().top,etse=elementTop-s.topSpacing-extra;if(scrollTop<=etse){if(s.currentTop!==
null){s.stickyElement.css("position","").css("top","").removeClass(s.className);s.stickyElement.parent().removeClass(s.className);s.currentTop=null}}else{var newTop=documentHeight-s.stickyElement.outerHeight()-s.topSpacing-s.bottomSpacing-scrollTop-extra;if(newTop<0)newTop=newTop+s.topSpacing;else newTop=s.topSpacing;if(s.currentTop!=newTop){s.stickyElement.css("position","fixed").css("top",newTop).addClass(s.className);s.stickyElement.parent().addClass(s.className);s.currentTop=newTop}}}},resizer=
function(){windowHeight=$window.height();$(".holder").css("height","")},methods={init:function(options){var o=$.extend(defaults,options);return this.each(function(){var stickyElement=$(this);stickyId=stickyElement.attr("id");wrapper=$("<div></div>").attr("id",stickyId+"-sticky-wrapper").addClass(o.wrapperClassName);stickyElement.wrapAll(wrapper);var stickyWrapper=stickyElement.parent();stickyWrapper.css("height",stickyElement.outerHeight());sticked.push({topSpacing:o.topSpacing,bottomSpacing:o.bottomSpacing,
stickyElement:stickyElement,currentTop:null,stickyWrapper:stickyWrapper,className:o.className})})},update:scroller};if(window.addEventListener){window.addEventListener("scroll",scroller,false);window.addEventListener("resize",resizer,false)}else if(window.attachEvent){window.attachEvent("onscroll",scroller);window.attachEvent("onresize",resizer)}$.fn.sticky=function(method){if(methods[method])return methods[method].apply(this,Array.prototype.slice.call(arguments,1));else if(typeof method==="object"||
!method)return methods.init.apply(this,arguments);else $.error("Method "+method+" does not exist on jQuery.sticky")};$(function(){setTimeout(scroller,0)})})(jQuery);



// jquery.tweet.js - See http://tweet.seaofclouds.com/ or https://github.com/seaofclouds/tweet for more info
// Copyright (c) 2008-2012 Todd Matthews & Steve Purcell
(function(factory){if(typeof define==="function"&&define.amd)define(["jquery"],factory);else factory(jQuery)})(function($){$.fn.tweet=function(o){var s=$.extend({username:null,list:null,favorites:false,query:null,avatar_size:null,count:3,fetch:null,page:1,retweets:true,intro_text:null,outro_text:null,join_text:null,auto_join_text_default:" I said, ",auto_join_text_ed:" I ",auto_join_text_ing:" I am ",auto_join_text_reply:" I replied to ",auto_join_text_url:" I was looking at ",loading_text:null,refresh_interval:null,
twitter_url:"twitter.com",twitter_api_url:"api.twitter.com",twitter_search_url:"search.twitter.com",template:"{avatar}{time}{join} {text}",comparator:function(tweet1,tweet2){return tweet2["tweet_time"]-tweet1["tweet_time"]},filter:function(tweet){return true}},o);var url_regexp=/\b((?:https?:\/\/|www\d{0,3}[.]|[a-z0-9.\-]+[.][a-z]{2,4}\/)(?:[^\s()<>]+|\(([^\s()<>]+|(\([^\s()<>]+\)))*\))+(?:\(([^\s()<>]+|(\([^\s()<>]+\)))*\)|[^\s`!()\[\]{};:'".,<>?\u00ab\u00bb\u201c\u201d\u2018\u2019]))/gi;function t(template,
info){if(typeof template==="string"){var result=template;for(var key in info){var val=info[key];result=result.split("{"+key+"}").join(val===null?"":val)}return result}else return template(info)}$.extend({tweet:{t:t}});function replacer(regex,replacement){return function(){var returning=[];this.each(function(){returning.push(this.replace(regex,replacement))});return $(returning)}}function escapeHTML(s){return s.replace(/</g,"&lt;").replace(/>/g,"^&gt;")}$.fn.extend({linkUser:replacer(/(^|[\W])@(\w+)/gi,
'$1<span class="at">@</span><a href="http://'+s.twitter_url+'/$2">$2</a>'),linkHash:replacer(/(?:^| )[\#]+([\w\u00c0-\u00d6\u00d8-\u00f6\u00f8-\u00ff\u0600-\u06ff]+)/gi,' <a href="http://'+s.twitter_search_url+"/search?q=&tag=$1&lang=all"+(s.username&&s.username.length==1&&!s.list?"&from="+s.username.join("%2BOR%2B"):"")+'" class="tweet_hashtag">#$1</a>'),makeHeart:replacer(/(&lt;)+[3]/gi,"<tt class='heart'>&#x2665;</tt>")});function linkURLs(text,entities){return text.replace(url_regexp,function(match){var url=
/^[a-z]+:/i.test(match)?match:"http://"+match;var text=match;for(var i=0;i<entities.length;++i){var entity=entities[i];if(entity.url==url&&entity.expanded_url){url=entity.expanded_url;text=entity.display_url;break}}return'<a href="'+escapeHTML(url)+'">'+escapeHTML(text)+"</a>"})}function parse_date(date_str){return Date.parse(date_str.replace(/^([a-z]{3})( [a-z]{3} \d\d?)(.*)( \d{4})$/i,"$1,$2$4$3"))}function extract_relative_time(date){var toInt=function(val){return parseInt(val,10)};var relative_to=
new Date;var delta=toInt((relative_to.getTime()-date)/1E3);if(delta<1)delta=0;return{days:toInt(delta/86400),hours:toInt(delta/3600),minutes:toInt(delta/60),seconds:toInt(delta)}}function format_relative_time(time_ago){if(time_ago.days>2)return"about "+time_ago.days+" days ago";if(time_ago.hours>24)return"about a day ago";if(time_ago.hours>2)return"about "+time_ago.hours+" hours ago";if(time_ago.minutes>45)return"about an hour ago";if(time_ago.minutes>2)return"about "+time_ago.minutes+" minutes ago";
if(time_ago.seconds>1)return"about "+time_ago.seconds+" seconds ago";return"just now"}function build_auto_join_text(text){if(text.match(/^(@([A-Za-z0-9-_]+)) .*/i))return s.auto_join_text_reply;else if(text.match(url_regexp))return s.auto_join_text_url;else if(text.match(/^((\w+ed)|just) .*/im))return s.auto_join_text_ed;else if(text.match(/^(\w*ing) .*/i))return s.auto_join_text_ing;else return s.auto_join_text_default}function build_api_url(){var proto="https:"==document.location.protocol?"https:":
"http:";var count=s.fetch===null?s.count:s.fetch;var common_params="&callback=?";if(s.list)return proto+"//"+s.twitter_api_url+"/1/"+s.username[0]+"/lists/"+s.list+"/statuses.json?page="+s.page+"&per_page="+count+common_params;else if(s.favorites)return proto+"//"+s.twitter_api_url+"/1/favorites.json?screen_name="+s.username[0]+"&page="+s.page+"&count="+count+common_params;else if(s.query===null&&s.username.length==1)return proto+"//"+s.twitter_api_url+"/1/statuses/user_timeline.json?screen_name="+
s.username[0]+"&count="+count+(s.retweets?"&include_rts=1":"")+"&page="+s.page+common_params;else{var query=s.query||"from:"+s.username.join(" OR from:");return proto+"//"+s.twitter_search_url+"/search.json?&q="+encodeURIComponent(query)+"&rpp="+count+"&page="+s.page+common_params}}function extract_avatar_url(item,secure){if(secure)return"user"in item?item.user.profile_image_url_https:extract_avatar_url(item,false).replace(/^http:\/\/[a-z0-9]{1,3}\.twimg\.com\//,"https://s3.amazonaws.com/twitter_production/");
else return item.profile_image_url||item.user.profile_image_url}function extract_template_data(item){var o={};o.item=item;o.source=item.source;o.screen_name=item.from_user||item.user.screen_name;o.name=item.from_user_name||item.user.name;o.retweet=typeof item.retweeted_status!="undefined";o.tweet_time=parse_date(item.created_at);o.join_text=s.join_text=="auto"?build_auto_join_text(item.text):s.join_text;o.tweet_id=item.id_str;o.twitter_base="http://"+s.twitter_url+"/";o.user_url=o.twitter_base+o.screen_name;
o.tweet_url=o.user_url+"/status/"+o.tweet_id;o.reply_url=o.twitter_base+"intent/tweet?in_reply_to="+o.tweet_id;o.retweet_url=o.twitter_base+"intent/retweet?tweet_id="+o.tweet_id;o.favorite_url=o.twitter_base+"intent/favorite?tweet_id="+o.tweet_id;o.retweeted_screen_name=o.retweet&&item.retweeted_status.user.screen_name;o.tweet_relative_time=format_relative_time(extract_relative_time(o.tweet_time));o.entities=item.entities?(item.entities.urls||[]).concat(item.entities.media||[]):[];o.tweet_raw_text=
o.retweet?"RT @"+o.retweeted_screen_name+" "+item.retweeted_status.text:item.text;o.tweet_text=$([linkURLs(o.tweet_raw_text,o.entities)]).linkUser().linkHash()[0];o.retweeted_tweet_text=$([linkURLs(item.text,o.entities)]).linkUser().linkHash()[0];o.tweet_text_fancy=$([o.tweet_text]).makeHeart()[0];o.avatar_size=s.avatar_size;o.avatar_url=extract_avatar_url(o.retweet?item.retweeted_status:item,document.location.protocol==="https:");o.avatar_screen_name=o.retweet?o.retweeted_screen_name:o.screen_name;
o.avatar_profile_url=o.twitter_base+o.avatar_screen_name;o.user=t('<a class="tweet_user" href="{user_url}">{screen_name}</a>',o);o.join=s.join_text?t('<span class="tweet_join">{join_text}</span>',o):"";o.avatar=o.avatar_size?t('<a class="tweet_avatar" href="{avatar_profile_url}"><img src="{avatar_url}" height="{avatar_size}" width="{avatar_size}" alt="{avatar_screen_name}\'s avatar" title="{avatar_screen_name}\'s avatar" border="0"/></a>',o):"";o.time=t('<span class="tweet_time"><a href="{tweet_url}" title="view tweet on twitter">{tweet_relative_time}</a></span>',
o);o.text=t('<span class="tweet_text">{tweet_text_fancy}</span>',o);o.retweeted_text=t('<span class="tweet_text">{retweeted_tweet_text}</span>',o);o.reply_action=t('<a class="tweet_action tweet_reply" href="{reply_url}">reply</a>',o);o.retweet_action=t('<a class="tweet_action tweet_retweet" href="{retweet_url}">retweet</a>',o);o.favorite_action=t('<a class="tweet_action tweet_favorite" href="{favorite_url}">favorite</a>',o);return o}function render_tweets(widget,tweets){var list=$('<ul class="tweet_list">');
list.append($.map(tweets,function(o){return"<li>"+t(s.template,o)+"</li>"}).join("")).children("li:first").addClass("tweet_first").end().children("li:odd").addClass("tweet_even").end().children("li:even").addClass("tweet_odd");$(widget).empty().append(list);if(s.intro_text)list.before('<p class="tweet_intro">'+s.intro_text+"</p>");if(s.outro_text)list.after('<p class="tweet_outro">'+s.outro_text+"</p>");$(widget).trigger("loaded").trigger(tweets.length===0?"empty":"full");if(s.refresh_interval)window.setTimeout(function(){$(widget).trigger("tweet:load")},
1E3*s.refresh_interval)}function load(widget){var loading=$('<p class="loading">'+s.loading_text+"</p>");if(s.loading_text)$(widget).not(":has(.tweet_list)").empty().append(loading);$.getJSON(build_api_url(),function(data){var tweets=$.map(data.results||data,extract_template_data);tweets=$.grep(tweets,s.filter).sort(s.comparator).slice(0,s.count);$(widget).trigger("tweet:retrieved",[tweets])})}return this.each(function(i,widget){if(s.username&&typeof s.username=="string")s.username=[s.username];$(widget).unbind("tweet:render").unbind("tweet:retrieved").unbind("tweet:load").bind({"tweet:load":function(){load(widget)},
"tweet:retrieved":function(ev,tweets){$(widget).trigger("tweet:render",[tweets])},"tweet:render":function(ev,tweets){render_tweets($(widget),tweets)}}).trigger("tweet:load")})}});
