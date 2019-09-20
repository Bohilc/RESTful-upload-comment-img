<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="content">
        <div class="title m-b-md">
            Laravel
        </div>

        <div class="links">
            <a href="https://laravel.com/docs">Docs</a>
            <a href="https://laracasts.com">Laracasts</a>
            <a href="https://laravel-news.com">News</a>
            <a href="https://blog.laravel.com">Blog</a>
            <a href="https://nova.laravel.com">Nova</a>
            <a href="https://forge.laravel.com">Forge</a>
            <a href="https://vapor.laravel.com">Vapor</a>
            <a href="https://github.com/laravel/laravel">GitHub</a>
        </div>
    </div>
</div>
</body>
</html>

<script>
    // ajax image request https://stackoverflow.com/questions/21044798/how-to-use-formdata-for-ajax-file-upload

    var code = '4YOU';

    !function(t,n){"object"==typeof exports&&"undefined"!=typeof module?module.exports=n():"function"==typeof define&&define.amd?define(n):t.Macy=n()}(this,function(){"use strict";function t(t,n){var e=void 0;return function(){e&&clearTimeout(e),e=setTimeout(t,n)}}function n(t,n){for(var e=t.length,r=e,o=[];e--;)o.push(n(t[r-e-1]));return o}function e(t,n){var e=arguments.length>2&&void 0!==arguments[2]&&arguments[2];if(window.Promise)return A(t,n,e);t.recalculate(!0,!0)}function r(t){for(var n=t.options,e=t.responsiveOptions,r=t.keys,o=t.docWidth,i=void 0,s=0;s<r.length;s++){var a=parseInt(r[s],10);o>=a&&(i=n.breakAt[a],O(i,e))}return e}function o(t){for(var n=t.options,e=t.responsiveOptions,r=t.keys,o=t.docWidth,i=void 0,s=r.length-1;s>=0;s--){var a=parseInt(r[s],10);o<=a&&(i=n.breakAt[a],O(i,e))}return e}function i(t){var n=t.useContainerForBreakpoints?t.container.clientWidth:window.innerWidth,e={columns:t.columns};b(t.margin)?e.margin={x:t.margin.x,y:t.margin.y}:e.margin={x:t.margin,y:t.margin};var i=Object.keys(t.breakAt);return t.mobileFirst?r({options:t,responsiveOptions:e,keys:i,docWidth:n}):o({options:t,responsiveOptions:e,keys:i,docWidth:n})}function s(t){return i(t).columns}function a(t){return i(t).margin}function c(t){var n=!(arguments.length>1&&void 0!==arguments[1])||arguments[1],e=s(t),r=a(t).x,o=100/e;if(!n)return o;if(1===e)return"100%";var i="px";if("string"==typeof r){var c=parseFloat(r);i=r.replace(c,""),r=c}return r=(e-1)*r/e,"%"===i?o-r+"%":"calc("+o+"% - "+r+i+")"}function u(t,n){var e=s(t.options),r=0,o=void 0,i=void 0;if(1===++n)return 0;i=a(t.options).x;var u="px";if("string"==typeof i){var l=parseFloat(i,10);u=i.replace(l,""),i=l}return o=(i-(e-1)*i/e)*(n-1),r+=c(t.options,!1)*(n-1),"%"===u?r+o+"%":"calc("+r+"% + "+o+u+")"}function l(t){var n=0,e=t.container;v(t.rows,function(t){n=t>n?t:n}),e.style.height=n+"px"}function p(t,n){var e=arguments.length>2&&void 0!==arguments[2]&&arguments[2],r=!(arguments.length>3&&void 0!==arguments[3])||arguments[3],o=s(t.options),i=a(t.options).y;M(t,o,e),v(n,function(n){var e=0,o=parseInt(n.offsetHeight,10);isNaN(o)||(t.rows.forEach(function(n,r){n<t.rows[e]&&(e=r)}),n.style.position="absolute",n.style.top=t.rows[e]+"px",n.style.left=""+t.cols[e],t.rows[e]+=isNaN(o)?0:o+i,r&&(n.dataset.macyComplete=1))}),r&&(t.tmpRows=null),l(t)}function f(t,n){var e=arguments.length>2&&void 0!==arguments[2]&&arguments[2],r=!(arguments.length>3&&void 0!==arguments[3])||arguments[3],o=s(t.options),i=a(t.options).y;M(t,o,e),v(n,function(n){t.lastcol===o&&(t.lastcol=0);var e=C(n,"height");e=parseInt(n.offsetHeight,10),isNaN(e)||(n.style.position="absolute",n.style.top=t.rows[t.lastcol]+"px",n.style.left=""+t.cols[t.lastcol],t.rows[t.lastcol]+=isNaN(e)?0:e+i,t.lastcol+=1,r&&(n.dataset.macyComplete=1))}),r&&(t.tmpRows=null),l(t)}var h=function t(n,e){if(!(this instanceof t))return new t(n,e);if(n&&n.nodeName)return n;if(n=n.replace(/^\s*/,"").replace(/\s*$/,""),e)return this.byCss(n,e);for(var r in this.selectors)if(e=r.split("/"),new RegExp(e[1],e[2]).test(n))return this.selectors[r](n);return this.byCss(n)};h.prototype.byCss=function(t,n){return(n||document).querySelectorAll(t)},h.prototype.selectors={},h.prototype.selectors[/^\.[\w\-]+$/]=function(t){return document.getElementsByClassName(t.substring(1))},h.prototype.selectors[/^\w+$/]=function(t){return document.getElementsByTagName(t)},h.prototype.selectors[/^\#[\w\-]+$/]=function(t){return document.getElementById(t.substring(1))};var v=function(t,n){for(var e=t.length,r=e;e--;)n(t[r-e-1])},m=function(){var t=arguments.length>0&&void 0!==arguments[0]&&arguments[0];this.running=!1,this.events=[],this.add(t)};m.prototype.run=function(){if(!this.running&&this.events.length>0){var t=this.events.shift();this.running=!0,t(),this.running=!1,this.run()}},m.prototype.add=function(){var t=this,n=arguments.length>0&&void 0!==arguments[0]&&arguments[0];return!!n&&(Array.isArray(n)?v(n,function(n){return t.add(n)}):(this.events.push(n),void this.run()))},m.prototype.clear=function(){this.events=[]};var d=function(t){var n=arguments.length>1&&void 0!==arguments[1]?arguments[1]:{};return this.instance=t,this.data=n,this},y=function(){var t=arguments.length>0&&void 0!==arguments[0]&&arguments[0];this.events={},this.instance=t};y.prototype.on=function(){var t=arguments.length>0&&void 0!==arguments[0]&&arguments[0],n=arguments.length>1&&void 0!==arguments[1]&&arguments[1];return!(!t||!n)&&(Array.isArray(this.events[t])||(this.events[t]=[]),this.events[t].push(n))},y.prototype.emit=function(){var t=arguments.length>0&&void 0!==arguments[0]&&arguments[0],n=arguments.length>1&&void 0!==arguments[1]?arguments[1]:{};if(!t||!Array.isArray(this.events[t]))return!1;var e=new d(this.instance,n);v(this.events[t],function(t){return t(e)})};var g=function(t){return!("naturalHeight"in t&&t.naturalHeight+t.naturalWidth===0)||t.width+t.height!==0},E=function(t,n){var e=arguments.length>2&&void 0!==arguments[2]&&arguments[2];return new Promise(function(t,e){if(n.complete)return g(n)?t(n):e(n);n.addEventListener("load",function(){return g(n)?t(n):e(n)}),n.addEventListener("error",function(){return e(n)})}).then(function(n){e&&t.emit(t.constants.EVENT_IMAGE_LOAD,{img:n})}).catch(function(n){return t.emit(t.constants.EVENT_IMAGE_ERROR,{img:n})})},w=function(t,e){var r=arguments.length>2&&void 0!==arguments[2]&&arguments[2];return n(e,function(n){return E(t,n,r)})},A=function(t,n){var e=arguments.length>2&&void 0!==arguments[2]&&arguments[2];return Promise.all(w(t,n,e)).then(function(){t.emit(t.constants.EVENT_IMAGE_COMPLETE)})},I=function(n){return t(function(){n.emit(n.constants.EVENT_RESIZE),n.queue.add(function(){return n.recalculate(!0,!0)})},100)},N=function(t){if(t.container=h(t.options.container),t.container instanceof h||!t.container)return!!t.options.debug&&console.error("Error: Container not found");t.container.length&&(t.container=t.container[0]),t.options.container=t.container,t.container.style.position="relative"},T=function(t){t.queue=new m,t.events=new y(t),t.rows=[],t.resizer=I(t)},L=function(t){var n=h("img",t.container);window.addEventListener("resize",t.resizer),t.on(t.constants.EVENT_IMAGE_LOAD,function(){return t.recalculate(!1,!1)}),t.on(t.constants.EVENT_IMAGE_COMPLETE,function(){return t.recalculate(!0,!0)}),t.options.useOwnImageLoader||e(t,n,!t.options.waitForImages),t.emit(t.constants.EVENT_INITIALIZED)},_=function(t){N(t),T(t),L(t)},b=function(t){return t===Object(t)&&"[object Array]"!==Object.prototype.toString.call(t)},O=function(t,n){b(t)||(n.columns=t),b(t)&&t.columns&&(n.columns=t.columns),b(t)&&t.margin&&!b(t.margin)&&(n.margin={x:t.margin,y:t.margin}),b(t)&&t.margin&&b(t.margin)&&t.margin.x&&(n.margin.x=t.margin.x),b(t)&&t.margin&&b(t.margin)&&t.margin.y&&(n.margin.y=t.margin.y)},C=function(t,n){return window.getComputedStyle(t,null).getPropertyValue(n)},M=function(t,n){var e=arguments.length>2&&void 0!==arguments[2]&&arguments[2];if(t.lastcol||(t.lastcol=0),t.rows.length<1&&(e=!0),e){t.rows=[],t.cols=[],t.lastcol=0;for(var r=n-1;r>=0;r--)t.rows[r]=0,t.cols[r]=u(t,r)}else if(t.tmpRows){t.rows=[];for(var r=n-1;r>=0;r--)t.rows[r]=t.tmpRows[r]}else{t.tmpRows=[];for(var r=n-1;r>=0;r--)t.tmpRows[r]=t.rows[r]}},V=function(t){var n=arguments.length>1&&void 0!==arguments[1]&&arguments[1],e=!(arguments.length>2&&void 0!==arguments[2])||arguments[2],r=n?t.container.children:h(':scope > *:not([data-macy-complete="1"])',t.container);r=Array.from(r).filter(function(t){return null!==t.offsetParent});var o=c(t.options);return v(r,function(t){n&&(t.dataset.macyComplete=0),t.style.width=o}),t.options.trueOrder?(f(t,r,n,e),t.emit(t.constants.EVENT_RECALCULATED)):(p(t,r,n,e),t.emit(t.constants.EVENT_RECALCULATED))},R=function(){return!!window.Promise},x=Object.assign||function(t){for(var n=1;n<arguments.length;n++){var e=arguments[n];for(var r in e)Object.prototype.hasOwnProperty.call(e,r)&&(t[r]=e[r])}return t};Array.from||(Array.from=function(t){for(var n=0,e=[];n<t.length;)e.push(t[n++]);return e});var k={columns:4,margin:2,trueOrder:!1,waitForImages:!1,useImageLoader:!0,breakAt:{},useOwnImageLoader:!1,onInit:!1,cancelLegacy:!1,useContainerForBreakpoints:!1};!function(){try{document.createElement("a").querySelector(":scope *")}catch(t){!function(){function t(t){return function(e){if(e&&n.test(e)){var r=this.getAttribute("id");r||(this.id="q"+Math.floor(9e6*Math.random())+1e6),arguments[0]=e.replace(n,"#"+this.id);var o=t.apply(this,arguments);return null===r?this.removeAttribute("id"):r||(this.id=r),o}return t.apply(this,arguments)}}var n=/:scope\b/gi,e=t(Element.prototype.querySelector);Element.prototype.querySelector=function(t){return e.apply(this,arguments)};var r=t(Element.prototype.querySelectorAll);Element.prototype.querySelectorAll=function(t){return r.apply(this,arguments)}}()}}();var q=function t(){var n=arguments.length>0&&void 0!==arguments[0]?arguments[0]:k;if(!(this instanceof t))return new t(n);this.options={},x(this.options,k,n),this.options.cancelLegacy&&!R()||_(this)};return q.init=function(t){return console.warn("Depreciated: Macy.init will be removed in v3.0.0 opt to use Macy directly like so Macy({ /*options here*/ }) "),new q(t)},q.prototype.recalculateOnImageLoad=function(){var t=arguments.length>0&&void 0!==arguments[0]&&arguments[0];return e(this,h("img",this.container),!t)},q.prototype.runOnImageLoad=function(t){var n=arguments.length>1&&void 0!==arguments[1]&&arguments[1],r=h("img",this.container);return this.on(this.constants.EVENT_IMAGE_COMPLETE,t),n&&this.on(this.constants.EVENT_IMAGE_LOAD,t),e(this,r,n)},q.prototype.recalculate=function(){var t=this,n=arguments.length>0&&void 0!==arguments[0]&&arguments[0],e=!(arguments.length>1&&void 0!==arguments[1])||arguments[1];return e&&this.queue.clear(),this.queue.add(function(){return V(t,n,e)})},q.prototype.remove=function(){window.removeEventListener("resize",this.resizer),v(this.container.children,function(t){t.removeAttribute("data-macy-complete"),t.removeAttribute("style")}),this.container.removeAttribute("style")},q.prototype.reInit=function(){this.recalculate(!0,!0),this.emit(this.constants.EVENT_INITIALIZED),window.addEventListener("resize",this.resizer),this.container.style.position="relative"},q.prototype.on=function(t,n){this.events.on(t,n)},q.prototype.emit=function(t,n){this.events.emit(t,n)},q.constants={EVENT_INITIALIZED:"macy.initialized",EVENT_RECALCULATED:"macy.recalculated",EVENT_IMAGE_LOAD:"macy.image.load",EVENT_IMAGE_ERROR:"macy.image.error",EVENT_IMAGE_COMPLETE:"macy.images.complete",EVENT_RESIZE:"macy.resize"},q.prototype.constants=q.constants,q});


    window.addEventListener('load', function () {

        var addNewCommentBody = '<div id="addNewComment" style="\n' +
            '    position: relative;\n' +
            '    width: 100%;\n' +
            '">\n' +
            '<style>.float { float:left; clear:none; }\n' +
            '.breaker { float:none; clear:both; }\n' +
            '.disabled { color:#c3c3c3 !important; border-color:#c3c3c3 !important; cursor:not-allowed; }\n' +
            'body { background-color:transparent; }\n' +
            '#wizard { height:550px; width:100%; max-width:900px; margin:0 auto; position:relative;  }\n' +
            '.slide {\n' +
            '\tdisplay:none;\n' +
            '\tposition:absolute;\n' +
            '\twidth:100%;\n' +
            '\tborder:solid 1px #a2a2a2; border-radius:2px;\n' +
            '\ttop:0;\n' +
            '\ttransition-property: top, opacity;\n' +
            '\ttransition-duration: 0.5s;\n' +
            '\ttransition-timing-function: ease-in-out;\n' +
            '\tbackground-color:#fff;\n' +
            '\tpadding:20px 20px 50px 20px;\n' +
            '\topacity: 0.2;\n' +
            '}\n' +
            '.slide.first { opacity:1;display:block; }\n' +
            '.slide h3, .slide h4 { text-align:center; max-width:500px; margin:0 auto; font-weight:normal; text-transform:uppercase; }\n' +
            '.slide h3 { margin-bottom:10px; font-size:24px; color:#1C1C1C; font-weight:bold; }\n' +
            '.slide h4 { color: #888; font-size:20px;  }\n' +
            '.button, .numpad td { background-color:#0078e7; color:white; border:solid 1px #129FEA; margin:15px 0; padding:5px; font-size:22px; border-radius: 12px; cursor:pointer; }\n' +
            '.button { max-width:400px; margin:15px auto 0; display:block; text-align:center;width:100%; }\n' +
            '.button.small { width:69px;height:50px;margin:5px;display:inline-block;padding:3px; text-align:center; font-size:16px; }\n' +
            'span.star { font-size:0.5vw; line-height:36px; vertical-align:middle; width:100px; }\n' +
            'span.text { width:140px; }\n' +
            'span.star, span.text { display:inline-block; text-align:left; font-size:18px; }\n' +
            '.numpad, .numpad table { width:100%; max-width:320px; margin:0 auto; }\n' +
            '.numpad .numpad-result { text-align:center;font-size:36px;font-weight:bold;padding:10px;margin:40px auto;border:solid 1px #444;height:71px; width:100%; }\n' +
            '.numpad .button { width:100%; }\n' +
            '.numpad td { width:33.33%; text-align:center; border:solid 1px black; border-radius:0; }\n' +
            '.invalid, .invalid:focus { border:solid 1px #ff0000 !important; }\n' +
            '.switch { text-decoration:underline; cursor: pointer; font-size:14px; text-align:center; }\n' +
            '.skip, .back { position: absolute; bottom: 8px; font-size:18px; cursor:pointer; }\n' +
            '.skip { right:20px; }\n' +
            '.back { left:20px; }\n' +
            '.errormsg { display:none; color:red; font-weight:bold; font-style: italic; }\n' +
            '.progressor { position:absolute; border:solid 1px #282828; bottom:28px; left:45%; width:10%; height:25px; margin:0 auto; text-align:center; }\n' +
            '.progressor .full { position:absolute; width:0; height:100%; background-color:#282828; }\n' +
            '.progressor .text { color:#000; position:relative;  }\n' +
            '\n' +
            '.field-wrap { padding:0 0 20px; max-width: 400px; margin: 0 auto; }\n' +
            '.field-wrap input { padding:10px 15px; font-size:20px; width: 100%; display: block; border:solid 1px #c1c1c1; }\n' +
            '.message { visibility:hidden; }\n' +
            '.field-wrap.error .message { visibility:visible; color:#ff0000; font-weight:bold; }\n' +
            '.review-text { height:200px;width:100%;font-size:18px;border:solid 1px #282828;padding:10px;outline:0; }\n' +
            '@media only screen and (min-width: 680px) { .review-text { height:255px; } }\n' +
            'textarea:focus, input:focus { outline:0; }\n' +
            '.button, .numpad td {\n' +
            '\tborder:solid 1px #282828; color:#282828; background:#fff;\n' +
            '\tborder-radius:2px;\n' +
            '\ttransition-property: background, color;\n' +
            '\ttransition-duration: 0.2s;\n' +
            '\ttransition-timing-function: ease-in-out;\n' +
            '}\n' +
            '.button.active, .button:focus, .button:hover { background:#282828; color:#fff; outline:0; }\n' +
            '.legal { max-width:400px; margin:12px auto 0; text-align:center; }\n' +
            '.legal, .legal a { font-size:13px; color:#999;}\n' +
            '.legal a { text-decoration:underline; }\n' +
            '</style>\n' +
            '    <div id="stars" data-phase-title="rate-item" data-pos="0" class="slide first" style="position: unset;border: unset;padding: 0;"><h3>JAK OCENIASZ TEN PRODUKT?</h3><div data-rating="5" class="button"><span class="star"><i class="fa star fa-star"></i><i class="fa star fa-star"></i><i class="fa star fa-star"></i><i class="fa star fa-star"></i><i class="fa star fa-star"></i></span><span class="text">Kocham to!</span></div><div data-rating="4" class="button"><span class="star"><i class="fa star fa-star"></i><i class="fa star fa-star"></i><i class="fa star fa-star"></i><i class="fa star fa-star"></i><i class="fa star fa-star-o"></i></span><span class="text">Lubię to</span></div><div data-rating="3" class="button"><span class="star"><i class="fa star fa-star"></i><i class="fa star fa-star"></i><i class="fa star fa-star"></i><i class="fa star fa-star-o"></i><i class="fa star fa-star-o"></i></span><span class="text">W porządku</span></div><div data-rating="2" class="button"><span class="star"><i class="fa star fa-star"></i><i class="fa star fa-star"></i><i class="fa star fa-star-o"></i><i class="fa star fa-star-o"></i><i class="fa star fa-star-o"></i></span><span class="text">Nie podobało mi się to</span></div><div data-rating="1" class="button"><span class="star"><i class="fa star fa-star"></i><i class="fa star fa-star-o"></i><i class="fa star fa-star-o"></i><i class="fa star fa-star-o"></i><i class="fa star fa-star-o"></i></span><span class="text">Nienawidzę tego</span></div></div>\n' +
            '    \n' +
            '    \n' +
            ' </div>';


        var testUrl = 'https://www.sklep.deepbreath.pl/pl/p/TEST/88';
        var testUrlReg = /https:\/\/www.sklep.deepbreath.pl\/pl\/p\/TEST\/88*/;
        var windowUrl = window.location.href;
        var comments = document.querySelectorAll('.productcomment');

        var bodyComments = document.createElement('div');
        bodyComments.className = 'comments--flex';
        bodyComments.id = 'newComments';
        var apiComments;
        var r = /\d+/;
        var storeCommentImgUrl = "https://api.deepbreath.pl/api/comments/img";

        var fileVar = null;
        var productId = document.body.getAttribute('id').match(r)[0];
        var getCommentImgUrl = "https://api.deepbreath.pl/api/comments/" + productId + "/img";
        var newCommentBody = document.querySelector('#addNewComment');
        var commentRating = null;
        var formComment = document.querySelector('#commentform');
        var basicImg = 'https://www.sklep.deepbreath.pl/environment/cache/images/500_500_productGfx_278/logo_DB_avatar_rewers.jpg';

        var sweetAlert = document.createElement("script");
        sweetAlert.type = "text/javascript";
        sweetAlert.src = 'https://cdn.jsdelivr.net/npm/sweetalert2@8';
        formComment.appendChild(sweetAlert);



        var ratingStar = {
            "5": '<div style="margin-left: 10px;"><i class="fa star fa-star"></i><i class="fa star fa-star"></i><i class="fa star fa-star"></i><i class="fa star fa-star"></i><i class="fa star fa-star"></i></div>',
            "4": '<div style="margin-left: 10px;"><i class="fa star fa-star"></i><i class="fa star fa-star"></i><i class="fa star fa-star"></i><i class="fa star fa-star"></i><i class="fa star fa-star-o"></i></div>',
            "3": '<div style="margin-left: 10px;"><i class="fa star fa-star"></i><i class="fa star fa-star"></i><i class="fa star fa-star"></i><i class="fa star fa-star-o"></i><i class="fa star fa-star-o"></i></div>',
            "2": '<div style="margin-left: 10px;"><i class="fa star fa-star"></i><i class="fa star fa-star"></i><i class="fa star fa-star-o"></i><i class="fa star fa-star-o"></i><i class="fa star fa-star-o"></i></div>',
            "1": '<div style="margin-left: 10px;"><i class="fa star fa-star"></i><i class="fa star fa-star-o"></i><i class="fa star fa-star-o"></i><i class="fa star fa-star-o"></i><i class="fa star fa-star-o"></i></div>',
            "0": ""
        }


        function createInputImg() {
            var input = document.createElement("INPUT");
            input.setAttribute("type", "file");
            input.setAttribute('accept', 'image/*');
            input.setAttribute('name', 'image');
            input.setAttribute('id', 'fileSelector');
            input.setAttribute('style', 'display: block;')

            var label = document.createElement("label");
            label.innerHTML = 'Zdjęcie:';


            var commentUser = formComment.querySelector('#commentuser');
            commentUser.parentNode.appendChild(label);
            commentUser.parentNode.appendChild(input);
            //commentUser.parentNode.insertBefore(input, commentUser);
        }

        function getCommentsImg() {
            $.ajax({
                type: 'GET',
                dataType: 'json',
                url: getCommentImgUrl,
                success: function (response) {
                    console.log(response)
                    apiComments = response.data;
                    replaceComments();
                    formComment.insertAdjacentHTML('afterbegin', addNewCommentBody);
                    handleSetRating();

                    var newComments = document.querySelector('#newComments');

                    if(null !== newComments) {
                        var macy = Macy({
                            container: '#newComments',
                            trueOrder: false,
                            waitForImages: false,
                            margin: 24,
                            columns: 4,
                            breakAt: {
                                1200: 4,
                                940: 3,
                                520: 2,
                                360: 1
                            }
                        });
                    }



                }
            });
        }


        function storeCommentImg(data) {

            $.ajax({
                url: storeCommentImgUrl,
                data: data,
                type: 'POST',
                dataType: "JSON",
                contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
                processData: false, // NEEDED, DON'T OMIT THIS
                success: function (res) {
                    console.log(res)
                    //formComment.submit();
                }
            });



        }

        function findCommentImg(commenId) {
            apiComments.forEach(function (comment) {
                console.log(comment)
            })
        }

        function handleSetRating() {
            var ratings = document.querySelector('#stars');
            [].forEach.call(ratings.children, function (star, index) {
                if (index != 0) {
                    star.onclick = function () {
                        [].forEach.call(ratings.children, function (star) {
                            star.classList.remove('rating_active')
                        })
                        commentRating = star.dataset.rating;
                        star.classList.add('rating_active');
                    }
                }
            })
        }

        function replaceComments() {
            [].forEach.call(comments, function (comment) {
                var commentsSection = comment.parentNode;
                var commentDescription = comment.querySelector('.description').innerHTML;
                var author = comment.querySelector('.reviewer').innerHTML;
                var commentId = comment.getAttribute('id').match(r)[0];

                var img = document.createElement('img');
                img.src = basicImg;

                var bodyText = document.createElement('div');
                bodyText.className = 'commentBody';
                bodyText.id = 'comment_' + commentId;
                bodyText.appendChild(img);

                var commentAuthor = document.createElement('p');
                commentAuthor.innerHTML = author;
                commentAuthor.className = 'commentAuthor';
                bodyText.appendChild(commentAuthor);

                var description = document.createElement('p');
                description.innerHTML = commentDescription;
                description.className = 'commentDescription';


                apiComments.forEach(function (c) {


                    if (author === c.author) {

                        img.src = c.url != null ? c.url : basicImg;
                        bodyText.innerHTML += ratingStar[c.rating];
                    }
                })

                bodyText.appendChild(description);

                if (null !== windowUrl.match(testUrlReg)) {
                    bodyComments.appendChild(bodyText);
                    commentsSection.insertBefore(bodyComments, formComment);
                    comment.remove();

                    var status = document.querySelector('.alert-success');

                    if(status) {
                        Swal.fire({
                            html: "<div>Dziękujemy za Twoją opinię. Wiele to dla Nas znaczy.<br> W podziękowaniu:</div><br><div style='border: 3px solid black;display: inline-block;padding: 10px;'>KOD RABATOWY 10%<br> <span style='color:#ff0000;'>"+code+"</spapn></div>",
                            allowEscapeKey: false,
                            allowOutsideClick: false
                        })
                    }
                }
            });
        }

        if (null !== windowUrl.match(testUrlReg)) {

            //Swal.fire('Any fool can use a computer');

            createInputImg()
            getCommentsImg()
            // on submiy form



            formComment.onsubmit = function (event) {

                var fd = new FormData($(this)[0])

                fd.append('product_id', productId);
                commentRating = commentRating > 0 ? commentRating : 0;
                fd.append('rating', commentRating);
                fd.append('image', $('#fileSelector')[0].files[0]);
                storeCommentImg(fd);
                event.preventDefault();
            };
        }



    });

</script>


<script>
    var code = '4YOU';

    !function(t,n){"object"==typeof exports&&"undefined"!=typeof module?module.exports=n():"function"==typeof define&&define.amd?define(n):t.Macy=n()}(this,function(){"use strict";function t(t,n){var e=void 0;return function(){e&&clearTimeout(e),e=setTimeout(t,n)}}function n(t,n){for(var e=t.length,r=e,o=[];e--;)o.push(n(t[r-e-1]));return o}function e(t,n){var e=arguments.length>2&&void 0!==arguments[2]&&arguments[2];if(window.Promise)return A(t,n,e);t.recalculate(!0,!0)}function r(t){for(var n=t.options,e=t.responsiveOptions,r=t.keys,o=t.docWidth,i=void 0,s=0;s<r.length;s++){var a=parseInt(r[s],10);o>=a&&(i=n.breakAt[a],O(i,e))}return e}function o(t){for(var n=t.options,e=t.responsiveOptions,r=t.keys,o=t.docWidth,i=void 0,s=r.length-1;s>=0;s--){var a=parseInt(r[s],10);o<=a&&(i=n.breakAt[a],O(i,e))}return e}function i(t){var n=t.useContainerForBreakpoints?t.container.clientWidth:window.innerWidth,e={columns:t.columns};b(t.margin)?e.margin={x:t.margin.x,y:t.margin.y}:e.margin={x:t.margin,y:t.margin};var i=Object.keys(t.breakAt);return t.mobileFirst?r({options:t,responsiveOptions:e,keys:i,docWidth:n}):o({options:t,responsiveOptions:e,keys:i,docWidth:n})}function s(t){return i(t).columns}function a(t){return i(t).margin}function c(t){var n=!(arguments.length>1&&void 0!==arguments[1])||arguments[1],e=s(t),r=a(t).x,o=100/e;if(!n)return o;if(1===e)return"100%";var i="px";if("string"==typeof r){var c=parseFloat(r);i=r.replace(c,""),r=c}return r=(e-1)*r/e,"%"===i?o-r+"%":"calc("+o+"% - "+r+i+")"}function u(t,n){var e=s(t.options),r=0,o=void 0,i=void 0;if(1===++n)return 0;i=a(t.options).x;var u="px";if("string"==typeof i){var l=parseFloat(i,10);u=i.replace(l,""),i=l}return o=(i-(e-1)*i/e)*(n-1),r+=c(t.options,!1)*(n-1),"%"===u?r+o+"%":"calc("+r+"% + "+o+u+")"}function l(t){var n=0,e=t.container;v(t.rows,function(t){n=t>n?t:n}),e.style.height=n+"px"}function p(t,n){var e=arguments.length>2&&void 0!==arguments[2]&&arguments[2],r=!(arguments.length>3&&void 0!==arguments[3])||arguments[3],o=s(t.options),i=a(t.options).y;M(t,o,e),v(n,function(n){var e=0,o=parseInt(n.offsetHeight,10);isNaN(o)||(t.rows.forEach(function(n,r){n<t.rows[e]&&(e=r)}),n.style.position="absolute",n.style.top=t.rows[e]+"px",n.style.left=""+t.cols[e],t.rows[e]+=isNaN(o)?0:o+i,r&&(n.dataset.macyComplete=1))}),r&&(t.tmpRows=null),l(t)}function f(t,n){var e=arguments.length>2&&void 0!==arguments[2]&&arguments[2],r=!(arguments.length>3&&void 0!==arguments[3])||arguments[3],o=s(t.options),i=a(t.options).y;M(t,o,e),v(n,function(n){t.lastcol===o&&(t.lastcol=0);var e=C(n,"height");e=parseInt(n.offsetHeight,10),isNaN(e)||(n.style.position="absolute",n.style.top=t.rows[t.lastcol]+"px",n.style.left=""+t.cols[t.lastcol],t.rows[t.lastcol]+=isNaN(e)?0:e+i,t.lastcol+=1,r&&(n.dataset.macyComplete=1))}),r&&(t.tmpRows=null),l(t)}var h=function t(n,e){if(!(this instanceof t))return new t(n,e);if(n&&n.nodeName)return n;if(n=n.replace(/^\s*/,"").replace(/\s*$/,""),e)return this.byCss(n,e);for(var r in this.selectors)if(e=r.split("/"),new RegExp(e[1],e[2]).test(n))return this.selectors[r](n);return this.byCss(n)};h.prototype.byCss=function(t,n){return(n||document).querySelectorAll(t)},h.prototype.selectors={},h.prototype.selectors[/^\.[\w\-]+$/]=function(t){return document.getElementsByClassName(t.substring(1))},h.prototype.selectors[/^\w+$/]=function(t){return document.getElementsByTagName(t)},h.prototype.selectors[/^\#[\w\-]+$/]=function(t){return document.getElementById(t.substring(1))};var v=function(t,n){for(var e=t.length,r=e;e--;)n(t[r-e-1])},m=function(){var t=arguments.length>0&&void 0!==arguments[0]&&arguments[0];this.running=!1,this.events=[],this.add(t)};m.prototype.run=function(){if(!this.running&&this.events.length>0){var t=this.events.shift();this.running=!0,t(),this.running=!1,this.run()}},m.prototype.add=function(){var t=this,n=arguments.length>0&&void 0!==arguments[0]&&arguments[0];return!!n&&(Array.isArray(n)?v(n,function(n){return t.add(n)}):(this.events.push(n),void this.run()))},m.prototype.clear=function(){this.events=[]};var d=function(t){var n=arguments.length>1&&void 0!==arguments[1]?arguments[1]:{};return this.instance=t,this.data=n,this},y=function(){var t=arguments.length>0&&void 0!==arguments[0]&&arguments[0];this.events={},this.instance=t};y.prototype.on=function(){var t=arguments.length>0&&void 0!==arguments[0]&&arguments[0],n=arguments.length>1&&void 0!==arguments[1]&&arguments[1];return!(!t||!n)&&(Array.isArray(this.events[t])||(this.events[t]=[]),this.events[t].push(n))},y.prototype.emit=function(){var t=arguments.length>0&&void 0!==arguments[0]&&arguments[0],n=arguments.length>1&&void 0!==arguments[1]?arguments[1]:{};if(!t||!Array.isArray(this.events[t]))return!1;var e=new d(this.instance,n);v(this.events[t],function(t){return t(e)})};var g=function(t){return!("naturalHeight"in t&&t.naturalHeight+t.naturalWidth===0)||t.width+t.height!==0},E=function(t,n){var e=arguments.length>2&&void 0!==arguments[2]&&arguments[2];return new Promise(function(t,e){if(n.complete)return g(n)?t(n):e(n);n.addEventListener("load",function(){return g(n)?t(n):e(n)}),n.addEventListener("error",function(){return e(n)})}).then(function(n){e&&t.emit(t.constants.EVENT_IMAGE_LOAD,{img:n})}).catch(function(n){return t.emit(t.constants.EVENT_IMAGE_ERROR,{img:n})})},w=function(t,e){var r=arguments.length>2&&void 0!==arguments[2]&&arguments[2];return n(e,function(n){return E(t,n,r)})},A=function(t,n){var e=arguments.length>2&&void 0!==arguments[2]&&arguments[2];return Promise.all(w(t,n,e)).then(function(){t.emit(t.constants.EVENT_IMAGE_COMPLETE)})},I=function(n){return t(function(){n.emit(n.constants.EVENT_RESIZE),n.queue.add(function(){return n.recalculate(!0,!0)})},100)},N=function(t){if(t.container=h(t.options.container),t.container instanceof h||!t.container)return!!t.options.debug&&console.error("Error: Container not found");t.container.length&&(t.container=t.container[0]),t.options.container=t.container,t.container.style.position="relative"},T=function(t){t.queue=new m,t.events=new y(t),t.rows=[],t.resizer=I(t)},L=function(t){var n=h("img",t.container);window.addEventListener("resize",t.resizer),t.on(t.constants.EVENT_IMAGE_LOAD,function(){return t.recalculate(!1,!1)}),t.on(t.constants.EVENT_IMAGE_COMPLETE,function(){return t.recalculate(!0,!0)}),t.options.useOwnImageLoader||e(t,n,!t.options.waitForImages),t.emit(t.constants.EVENT_INITIALIZED)},_=function(t){N(t),T(t),L(t)},b=function(t){return t===Object(t)&&"[object Array]"!==Object.prototype.toString.call(t)},O=function(t,n){b(t)||(n.columns=t),b(t)&&t.columns&&(n.columns=t.columns),b(t)&&t.margin&&!b(t.margin)&&(n.margin={x:t.margin,y:t.margin}),b(t)&&t.margin&&b(t.margin)&&t.margin.x&&(n.margin.x=t.margin.x),b(t)&&t.margin&&b(t.margin)&&t.margin.y&&(n.margin.y=t.margin.y)},C=function(t,n){return window.getComputedStyle(t,null).getPropertyValue(n)},M=function(t,n){var e=arguments.length>2&&void 0!==arguments[2]&&arguments[2];if(t.lastcol||(t.lastcol=0),t.rows.length<1&&(e=!0),e){t.rows=[],t.cols=[],t.lastcol=0;for(var r=n-1;r>=0;r--)t.rows[r]=0,t.cols[r]=u(t,r)}else if(t.tmpRows){t.rows=[];for(var r=n-1;r>=0;r--)t.rows[r]=t.tmpRows[r]}else{t.tmpRows=[];for(var r=n-1;r>=0;r--)t.tmpRows[r]=t.rows[r]}},V=function(t){var n=arguments.length>1&&void 0!==arguments[1]&&arguments[1],e=!(arguments.length>2&&void 0!==arguments[2])||arguments[2],r=n?t.container.children:h(':scope > *:not([data-macy-complete="1"])',t.container);r=Array.from(r).filter(function(t){return null!==t.offsetParent});var o=c(t.options);return v(r,function(t){n&&(t.dataset.macyComplete=0),t.style.width=o}),t.options.trueOrder?(f(t,r,n,e),t.emit(t.constants.EVENT_RECALCULATED)):(p(t,r,n,e),t.emit(t.constants.EVENT_RECALCULATED))},R=function(){return!!window.Promise},x=Object.assign||function(t){for(var n=1;n<arguments.length;n++){var e=arguments[n];for(var r in e)Object.prototype.hasOwnProperty.call(e,r)&&(t[r]=e[r])}return t};Array.from||(Array.from=function(t){for(var n=0,e=[];n<t.length;)e.push(t[n++]);return e});var k={columns:4,margin:2,trueOrder:!1,waitForImages:!1,useImageLoader:!0,breakAt:{},useOwnImageLoader:!1,onInit:!1,cancelLegacy:!1,useContainerForBreakpoints:!1};!function(){try{document.createElement("a").querySelector(":scope *")}catch(t){!function(){function t(t){return function(e){if(e&&n.test(e)){var r=this.getAttribute("id");r||(this.id="q"+Math.floor(9e6*Math.random())+1e6),arguments[0]=e.replace(n,"#"+this.id);var o=t.apply(this,arguments);return null===r?this.removeAttribute("id"):r||(this.id=r),o}return t.apply(this,arguments)}}var n=/:scope\b/gi,e=t(Element.prototype.querySelector);Element.prototype.querySelector=function(t){return e.apply(this,arguments)};var r=t(Element.prototype.querySelectorAll);Element.prototype.querySelectorAll=function(t){return r.apply(this,arguments)}}()}}();var q=function t(){var n=arguments.length>0&&void 0!==arguments[0]?arguments[0]:k;if(!(this instanceof t))return new t(n);this.options={},x(this.options,k,n),this.options.cancelLegacy&&!R()||_(this)};return q.init=function(t){return console.warn("Depreciated: Macy.init will be removed in v3.0.0 opt to use Macy directly like so Macy({ /*options here*/ }) "),new q(t)},q.prototype.recalculateOnImageLoad=function(){var t=arguments.length>0&&void 0!==arguments[0]&&arguments[0];return e(this,h("img",this.container),!t)},q.prototype.runOnImageLoad=function(t){var n=arguments.length>1&&void 0!==arguments[1]&&arguments[1],r=h("img",this.container);return this.on(this.constants.EVENT_IMAGE_COMPLETE,t),n&&this.on(this.constants.EVENT_IMAGE_LOAD,t),e(this,r,n)},q.prototype.recalculate=function(){var t=this,n=arguments.length>0&&void 0!==arguments[0]&&arguments[0],e=!(arguments.length>1&&void 0!==arguments[1])||arguments[1];return e&&this.queue.clear(),this.queue.add(function(){return V(t,n,e)})},q.prototype.remove=function(){window.removeEventListener("resize",this.resizer),v(this.container.children,function(t){t.removeAttribute("data-macy-complete"),t.removeAttribute("style")}),this.container.removeAttribute("style")},q.prototype.reInit=function(){this.recalculate(!0,!0),this.emit(this.constants.EVENT_INITIALIZED),window.addEventListener("resize",this.resizer),this.container.style.position="relative"},q.prototype.on=function(t,n){this.events.on(t,n)},q.prototype.emit=function(t,n){this.events.emit(t,n)},q.constants={EVENT_INITIALIZED:"macy.initialized",EVENT_RECALCULATED:"macy.recalculated",EVENT_IMAGE_LOAD:"macy.image.load",EVENT_IMAGE_ERROR:"macy.image.error",EVENT_IMAGE_COMPLETE:"macy.images.complete",EVENT_RESIZE:"macy.resize"},q.prototype.constants=q.constants,q});

    window.addEventListener('load', function () {

        var addNewCommentBody = '<div id="addNewComment" style="\n' +
            '    position: relative;\n' +
            '    width: 100%;\n' +
            '">\n' +
            '<style>.float { float:left; clear:none; }\n' +
            '.breaker { float:none; clear:both; }\n' +
            '.disabled { color:#c3c3c3 !important; border-color:#c3c3c3 !important; cursor:not-allowed; }\n' +
            'body { background-color:transparent; }\n' +
            '#wizard { height:550px; width:100%; max-width:900px; margin:0 auto; position:relative;  }\n' +
            '.slide {\n' +
            '\tdisplay:none;\n' +
            '\tposition:absolute;\n' +
            '\twidth:100%;\n' +
            '\tborder:solid 1px #a2a2a2; border-radius:2px;\n' +
            '\ttop:0;\n' +
            '\ttransition-property: top, opacity;\n' +
            '\ttransition-duration: 0.5s;\n' +
            '\ttransition-timing-function: ease-in-out;\n' +
            '\tbackground-color:#fff;\n' +
            '\tpadding:20px 20px 50px 20px;\n' +
            '\topacity: 0.2;\n' +
            '}\n' +
            '.slide.first { opacity:1;display:block; }\n' +
            '.slide h3, .slide h4 { text-align:center; max-width:500px; margin:0 auto; font-weight:normal; text-transform:uppercase; }\n' +
            '.slide h3 { margin-bottom:10px; font-size:24px; color:#1C1C1C; font-weight:bold; }\n' +
            '.slide h4 { color: #888; font-size:20px;  }\n' +
            '.button, .numpad td { background-color:#0078e7; color:white; border:solid 1px #129FEA; margin:15px 0; padding:5px; font-size:22px; border-radius: 12px; cursor:pointer; }\n' +
            '.button { max-width:400px; margin:15px auto 0; display:block; text-align:center;width:100%; }\n' +
            '.button.small { width:69px;height:50px;margin:5px;display:inline-block;padding:3px; text-align:center; font-size:16px; }\n' +
            'span.star { font-size:0.5vw; line-height:36px; vertical-align:middle; width:100px; }\n' +
            'span.text { width:140px; }\n' +
            'span.star, span.text { display:inline-block; text-align:left; font-size:18px; }\n' +
            '.numpad, .numpad table { width:100%; max-width:320px; margin:0 auto; }\n' +
            '.numpad .numpad-result { text-align:center;font-size:36px;font-weight:bold;padding:10px;margin:40px auto;border:solid 1px #444;height:71px; width:100%; }\n' +
            '.numpad .button { width:100%; }\n' +
            '.numpad td { width:33.33%; text-align:center; border:solid 1px black; border-radius:0; }\n' +
            '.invalid, .invalid:focus { border:solid 1px #ff0000 !important; }\n' +
            '.switch { text-decoration:underline; cursor: pointer; font-size:14px; text-align:center; }\n' +
            '.skip, .back { position: absolute; bottom: 8px; font-size:18px; cursor:pointer; }\n' +
            '.skip { right:20px; }\n' +
            '.back { left:20px; }\n' +
            '.errormsg { display:none; color:red; font-weight:bold; font-style: italic; }\n' +
            '.progressor { position:absolute; border:solid 1px #282828; bottom:28px; left:45%; width:10%; height:25px; margin:0 auto; text-align:center; }\n' +
            '.progressor .full { position:absolute; width:0; height:100%; background-color:#282828; }\n' +
            '.progressor .text { color:#000; position:relative;  }\n' +
            '\n' +
            '.field-wrap { padding:0 0 20px; max-width: 400px; margin: 0 auto; }\n' +
            '.field-wrap input { padding:10px 15px; font-size:20px; width: 100%; display: block; border:solid 1px #c1c1c1; }\n' +
            '.message { visibility:hidden; }\n' +
            '.field-wrap.error .message { visibility:visible; color:#ff0000; font-weight:bold; }\n' +
            '.review-text { height:200px;width:100%;font-size:18px;border:solid 1px #282828;padding:10px;outline:0; }\n' +
            '@media only screen and (min-width: 680px) { .review-text { height:255px; } }\n' +
            'textarea:focus, input:focus { outline:0; }\n' +
            '.button, .numpad td {\n' +
            '\tborder:solid 1px #282828; color:#282828; background:#fff;\n' +
            '\tborder-radius:2px;\n' +
            '\ttransition-property: background, color;\n' +
            '\ttransition-duration: 0.2s;\n' +
            '\ttransition-timing-function: ease-in-out;\n' +
            '}\n' +
            '.button.active, .button:focus, .button:hover { background:#282828; color:#fff; outline:0; }\n' +
            '.legal { max-width:400px; margin:12px auto 0; text-align:center; }\n' +
            '.legal, .legal a { font-size:13px; color:#999;}\n' +
            '.legal a { text-decoration:underline; }\n' +
            '</style>\n' +
            '    <div id="stars" data-phase-title="rate-item" data-pos="0" class="slide first" style="position: unset;border: unset;padding: 0;"><h3>JAK OCENIASZ TEN PRODUKT?</h3><div data-rating="5" class="button"><span class="star"><i class="fa star fa-star"></i><i class="fa star fa-star"></i><i class="fa star fa-star"></i><i class="fa star fa-star"></i><i class="fa star fa-star"></i></span><span class="text">Kocham to!</span></div><div data-rating="4" class="button"><span class="star"><i class="fa star fa-star"></i><i class="fa star fa-star"></i><i class="fa star fa-star"></i><i class="fa star fa-star"></i><i class="fa star fa-star-o"></i></span><span class="text">Lubię to</span></div><div data-rating="3" class="button"><span class="star"><i class="fa star fa-star"></i><i class="fa star fa-star"></i><i class="fa star fa-star"></i><i class="fa star fa-star-o"></i><i class="fa star fa-star-o"></i></span><span class="text">W porządku</span></div><div data-rating="2" class="button"><span class="star"><i class="fa star fa-star"></i><i class="fa star fa-star"></i><i class="fa star fa-star-o"></i><i class="fa star fa-star-o"></i><i class="fa star fa-star-o"></i></span><span class="text">Nie podobało mi się to</span></div><div data-rating="1" class="button"><span class="star"><i class="fa star fa-star"></i><i class="fa star fa-star-o"></i><i class="fa star fa-star-o"></i><i class="fa star fa-star-o"></i><i class="fa star fa-star-o"></i></span><span class="text">Nienawidzę tego</span></div></div>\n' +
            '    \n' +
            '    \n' +
            ' </div>';


        var testUrl = 'https://www.sklep.deepbreath.pl/pl/p/TEST/88';
        var testUrlReg = /https:\/\/www.sklep.deepbreath.pl\/pl\/p\/TEST\/88*/;
        var windowUrl = window.location.href;
        var comments = document.querySelectorAll('.productcomment');

        var bodyComments = document.createElement('div');
        bodyComments.className = 'comments--flex';
        bodyComments.id = 'newComments';
        var apiComments;
        var r = /\d+/;
        var storeCommentImgUrl = "https://api.deepbreath.pl/api/comments/img";

        var fileVar = null;
        var productId = document.body.getAttribute('id').match(r)[0];
        var getCommentImgUrl = "https://api.deepbreath.pl/api/comments/" + productId + "/img";
        var newCommentBody = document.querySelector('#addNewComment');
        var commentRating = null;
        var formComment = document.querySelector('#commentform');
        var basicImg = 'https://www.sklep.deepbreath.pl/environment/cache/images/500_500_productGfx_278/logo_DB_avatar_rewers.jpg';

        var sweetAlert = document.createElement("script");
        sweetAlert.type = "text/javascript";
        sweetAlert.src = 'https://cdn.jsdelivr.net/npm/sweetalert2@8';
        formComment.appendChild(sweetAlert);

        var ratingStar = {
            "5": '<div style="margin-left: 10px;"><i class="fa star fa-star"></i><i class="fa star fa-star"></i><i class="fa star fa-star"></i><i class="fa star fa-star"></i><i class="fa star fa-star"></i></div>',
            "4": '<div style="margin-left: 10px;"><i class="fa star fa-star"></i><i class="fa star fa-star"></i><i class="fa star fa-star"></i><i class="fa star fa-star"></i><i class="fa star fa-star-o"></i></div>',
            "3": '<div style="margin-left: 10px;"><i class="fa star fa-star"></i><i class="fa star fa-star"></i><i class="fa star fa-star"></i><i class="fa star fa-star-o"></i><i class="fa star fa-star-o"></i></div>',
            "2": '<div style="margin-left: 10px;"><i class="fa star fa-star"></i><i class="fa star fa-star"></i><i class="fa star fa-star-o"></i><i class="fa star fa-star-o"></i><i class="fa star fa-star-o"></i></div>',
            "1": '<div style="margin-left: 10px;"><i class="fa star fa-star"></i><i class="fa star fa-star-o"></i><i class="fa star fa-star-o"></i><i class="fa star fa-star-o"></i><i class="fa star fa-star-o"></i></div>',
            "0": ""
        }

        function createInputImg() {
            var input = document.createElement("INPUT");
            input.setAttribute("type", "file");
            input.setAttribute('accept', 'image/*');
            input.setAttribute('name', 'image');
            input.setAttribute('id', 'fileSelector');
            input.setAttribute('style', 'display: block;')

            var label = document.createElement("label");
            label.innerHTML = 'Zdjęcie:';

            var commentUser = formComment.querySelector('#commentuser');
            commentUser.parentNode.appendChild(label);
            commentUser.parentNode.appendChild(input);
        }

        function getCommentsImg() {
            $.ajax({
                type: 'GET',
                dataType: 'json',
                url: getCommentImgUrl,
                success: function (response) {
                    console.log(response)
                    apiComments = response.data;
                    replaceComments();
                    formComment.insertAdjacentHTML('afterbegin', addNewCommentBody);
                    handleSetRating();

                    var newComments = document.querySelector('#newComments');

                    if(null !== newComments) {
                        var macy = Macy({
                            container: '#newComments',
                            trueOrder: false,
                            waitForImages: false,
                            margin: 24,
                            columns: 4,
                            breakAt: {
                                1200: 4,
                                940: 3,
                                520: 2,
                                360: 1
                            }
                        });
                    }
                }
            });
        }


        function storeCommentImg(data) {
            $.ajax({
                url: storeCommentImgUrl,
                data: data,
                type: 'POST',
                dataType: "JSON",
                contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
                processData: false, // NEEDED, DON'T OMIT THIS
                success: function (res) {
                    console.log(res)
                    formComment.submit();
                }
            });
        }

        function findCommentImg(commenId) {
            apiComments.forEach(function (comment) {
                console.log(comment)
            })
        }

        function handleSetRating() {
            var ratings = document.querySelector('#stars');
            [].forEach.call(ratings.children, function (star, index) {
                if (index != 0) {
                    star.onclick = function () {
                        [].forEach.call(ratings.children, function (star) {
                            star.classList.remove('rating_active')
                        })
                        commentRating = star.dataset.rating;
                        star.classList.add('rating_active');
                    }
                }
            })
        }

        function replaceComments() {
            var basicCommentImg = [];
            var commentWithNewImg = [];
            var commentsSection;

            [].forEach.call(comments, function (comment) {
                commentsSection = comment.parentNode;
                var commentDescription = comment.querySelector('.description').innerHTML;
                var author = comment.querySelector('.reviewer').innerHTML;
                var commentId = comment.getAttribute('id').match(r)[0];

                var img = document.createElement('img');
                img.src = basicImg;

                var bodyText = document.createElement('div');
                bodyText.className = 'commentBody';
                bodyText.id = 'comment_' + commentId;
                bodyText.appendChild(img);

                var commentAuthor = document.createElement('p');
                commentAuthor.innerHTML = author;
                commentAuthor.className = 'commentAuthor';
                bodyText.appendChild(commentAuthor);

                var description = document.createElement('p');
                description.innerHTML = commentDescription;
                description.className = 'commentDescription';

                apiComments.forEach(function (c) {
                    if (author === c.author && commentDescription == c.comment) {
                        img.src = c.url != null ? c.url : basicImg;
                        bodyText.innerHTML += ratingStar[c.rating];
                    }
                })

                bodyText.appendChild(description);

                if (null !== windowUrl.match(testUrlReg)) {
                    if(bodyText.querySelector('img').src == basicImg) {
                        basicCommentImg.push(bodyText)
                    } else {
                        commentWithNewImg.push(bodyText)
                    }
                    comment.remove();
                }
            });

            if (null !== windowUrl.match(testUrlReg)) {
                [].forEach.call(commentWithNewImg, function(bodyText) {
                    bodyComments.appendChild(bodyText);
                    commentsSection.insertBefore(bodyComments, formComment);
                });

                [].forEach.call(basicCommentImg, function(bodyText) {
                    bodyComments.appendChild(bodyText);
                    commentsSection.insertBefore(bodyComments, formComment);
                });
            }
        }

        if (null !== windowUrl.match(testUrlReg)) {
            var status = document.querySelector('.alert-success');
            if(status) {
                Swal.fire({
                    html: "<div>Dziękujemy za Twoją opinię. Wiele to dla Nas znaczy.<br> W podziękowaniu:</div><br><div style='border: 3px solid black;display: inline-block;padding: 10px;'>KOD RABATOWY 10%<br> <span style='color:#ff0000;'>"+code+"</spapn></div>",
                    allowEscapeKey: false,
                    allowOutsideClick: false
                })
            }

            createInputImg()
            getCommentsImg()
            // on submiy form
            formComment.onsubmit = function (event) {
                var fd = new FormData($(this)[0])
                fd.append('product_id', productId);
                commentRating = commentRating > 0 ? commentRating : 0;
                fd.append('rating', commentRating);
                fd.append('image', $('#fileSelector')[0].files[0]);
                storeCommentImg(fd);
                event.preventDefault();
            };
        }
    });
</script>
