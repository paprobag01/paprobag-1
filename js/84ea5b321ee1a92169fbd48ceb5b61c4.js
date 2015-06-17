/*! http://responsiveslides.com v1.54 by @viljamis */
(function(c,I,B){c.fn.responsiveSlides=function(l){var a=c.extend({auto:!0,speed:500,timeout:4E3,pager:!1,nav:!1,random:!1,pause:!1,pauseControls:!0,prevText:"Previous",nextText:"Next",maxwidth:"",navContainer:"",manualControls:"",namespace:"rslides",before:c.noop,after:c.noop},l);return this.each(function(){B++;var f=c(this),s,r,t,m,p,q,n=0,e=f.children(),C=e.size(),h=parseFloat(a.speed),D=parseFloat(a.timeout),u=parseFloat(a.maxwidth),g=a.namespace,d=g+B,E=g+"_nav "+d+"_nav",v=g+"_here",j=d+"_on",
w=d+"_s",k=c("<ul class='"+g+"_tabs "+d+"_tabs' />"),x={"float":"left",position:"relative",opacity:1,zIndex:2},y={"float":"none",position:"absolute",opacity:0,zIndex:1},F=function(){var b=(document.body||document.documentElement).style,a="transition";if("string"===typeof b[a])return!0;s=["Moz","Webkit","Khtml","O","ms"];var a=a.charAt(0).toUpperCase()+a.substr(1),c;for(c=0;c<s.length;c++)if("string"===typeof b[s[c]+a])return!0;return!1}(),z=function(b){a.before(b);F?(e.removeClass(j).css(y).eq(b).addClass(j).css(x),
n=b,setTimeout(function(){a.after(b)},h)):e.stop().fadeOut(h,function(){c(this).removeClass(j).css(y).css("opacity",1)}).eq(b).fadeIn(h,function(){c(this).addClass(j).css(x);a.after(b);n=b})};a.random&&(e.sort(function(){return Math.round(Math.random())-0.5}),f.empty().append(e));e.each(function(a){this.id=w+a});f.addClass(g+" "+d);l&&l.maxwidth&&f.css("max-width",u);e.hide().css(y).eq(0).addClass(j).css(x).show();F&&e.show().css({"-webkit-transition":"opacity "+h+"ms ease-in-out","-moz-transition":"opacity "+
h+"ms ease-in-out","-o-transition":"opacity "+h+"ms ease-in-out",transition:"opacity "+h+"ms ease-in-out"});if(1<e.size()){if(D<h+100)return;if(a.pager&&!a.manualControls){var A=[];e.each(function(a){a+=1;A+="<li><a href='#' class='"+w+a+"'>"+a+"</a></li>"});k.append(A);l.navContainer?c(a.navContainer).append(k):f.after(k)}a.manualControls&&(k=c(a.manualControls),k.addClass(g+"_tabs "+d+"_tabs"));(a.pager||a.manualControls)&&k.find("li").each(function(a){c(this).addClass(w+(a+1))});if(a.pager||a.manualControls)q=
k.find("a"),r=function(a){q.closest("li").removeClass(v).eq(a).addClass(v)};a.auto&&(t=function(){p=setInterval(function(){e.stop(!0,!0);var b=n+1<C?n+1:0;(a.pager||a.manualControls)&&r(b);z(b)},D)},t());m=function(){a.auto&&(clearInterval(p),t())};a.pause&&f.hover(function(){clearInterval(p)},function(){m()});if(a.pager||a.manualControls)q.bind("click",function(b){b.preventDefault();a.pauseControls||m();b=q.index(this);n===b||c("."+j).queue("fx").length||(r(b),z(b))}).eq(0).closest("li").addClass(v),
a.pauseControls&&q.hover(function(){clearInterval(p)},function(){m()});if(a.nav){g="<a href='#' class='"+E+" prev'>"+a.prevText+"</a><a href='#' class='"+E+" next'>"+a.nextText+"</a>";l.navContainer?c(a.navContainer).append(g):f.after(g);var d=c("."+d+"_nav"),G=d.filter(".prev");d.bind("click",function(b){b.preventDefault();b=c("."+j);if(!b.queue("fx").length){var d=e.index(b);b=d-1;d=d+1<C?n+1:0;z(c(this)[0]===G[0]?b:d);if(a.pager||a.manualControls)r(c(this)[0]===G[0]?b:d);a.pauseControls||m()}});
a.pauseControls&&d.hover(function(){clearInterval(p)},function(){m()})}}if("undefined"===typeof document.body.style.maxWidth&&l.maxwidth){var H=function(){f.css("width","100%");f.width()>u&&f.css("width",u)};H();c(I).bind("resize",function(){H()})}})}})(jQuery,this,0);


// {{{ flowtype
/*
* FlowType.JS v1.1
* Copyright 2013-2014, Simple Focus http://simplefocus.com/
*
* FlowType.JS by Simple Focus (http://simplefocus.com/)
* is licensed under the MIT License. Read a copy of the
* license in the LICENSE.txt file or at
* http://choosealicense.com/licenses/mit
*
* Thanks to Giovanni Difeterici (http://www.gdifeterici.com/)
*/
(function($) {
   $.fn.flowtype = function(options) {

// Establish default settings/variables
// ====================================
      var settings = $.extend({
         maximum   : 9999,
         minimum   : 1,
         maxFont   : 9999,
         minFont   : 1,
         fontRatio : 35
      }, options),

// Do the magic math
// =================
      changes = function(el) {
         var $el = $(el),
            elw = $el.width(),
            width = elw > settings.maximum ? settings.maximum : elw < settings.minimum ? settings.minimum : elw,
            fontBase = width / settings.fontRatio,
            fontSize = fontBase > settings.maxFont ? settings.maxFont : fontBase < settings.minFont ? settings.minFont : fontBase;
         $el.css('font-size', fontSize + 'px');
      };

// Make the magic visible
// ======================
      return this.each(function() {
      // Context for resize callback
         var that = this;
      // Make changes upon resize
         $(window).resize(function(){changes(that);});
      // Set changes on load
         changes(this);
      });
   };
}(jQuery));
// }}}

(function($) {
  // {{{ BLSlider
  var BLSlider = function(){
    var r_caption = $('.r_caption'),
      r_slider = $('.rslides'),
      // default options for slider
      slider_options = {
        auto: true,             // Boolean: Animate automatically, true or false
        speed: 500,            // Integer: Speed of the transition, in milliseconds
        timeout: 4500,          // Integer: Time between slide transitions, in milliseconds
        pager: true,           // Boolean: Show pager, true or false
        nav: true,             // Boolean: Show navigation, true or false
        random: false,          // Boolean: Randomize the order of the slides, true or false
        pause: true,           // Boolean: Pause on hover, true or false
        pauseControls: false,    // Boolean: Pause when hovering controls, true or false
        prevText: "<span>Previous</span>",   // String: Text for the "previous" button
        nextText: "<span>Next</span>",       // String: Text for the "next" button
        maxwidth: "",           // Integer: Max-width of the slideshow, in pixels
        navContainer: "",       // Selector: Where controls should be appended to, default is after the 'ul'
        manualControls: "",     // Selector: Declare custom pager navigation
        namespace: "rslides",   // String: Change the default namespace used
        before: function(){},   // Function: Before callback
        after: function(){}     // Function: After callback
      },
      flowtype_options = {
          minFont   : 14,
          maxFont   : 25,
          fontRatio : 30,
          maximum   : 9999,
          minimum   : 1,
          lineRatio : 1.45
      },
      // function to auto center the text by calculating the height of the slider container
      center_slide_text = function(el_cap){
        var cap_height = el_cap.height(),
          adjusted_margin = (cap_height/2)*-1;
            el_cap.css({
              marginTop: adjusted_margin + 'px'
            });
      },
      init = function(){
          // initiate the slider using, data attr to overide default values
          r_slider.each(function(){
              var el_slider = $(this),
                  el_options = slider_options;
              $.each(el_slider.data(), function (i, e) { 
                el_options[i] = e;
              });
              el_slider.responsiveSlides(el_options);
          });

          // initiate flowtype for each caption, using data attr to overide defaults
          r_caption.each(function(){
              var r_cap = $(this);
              $.each(r_cap.data(), function (i, e) { 
                switch(i){
                  case 'minfont':
                    i = 'minFont';
                  break;
                  case 'maxfont':
                    i = 'maxFont';
                  break;
                  case 'fontratio':
                    i = 'fontRatio';
                  break;
                  case 'lineratio':
                    i = 'lineRatio';
                  break;
                }
                  
                  flowtype_options[i] = e;
              });
              r_cap.flowtype(flowtype_options);
              center_slide_text(r_cap);
          });

      };

      return {
        init: init,
        center_slide_text : center_slide_text
      }
  }();
  // }}}

  $(document).ready(function(){
    if($('.rslides').length){
      BLSlider.init();
    }
    $(window).resize(function(){
      BLSlider.center_slide_text($('.rslides1_on .r_caption'));
    });
  });
})(jQuery);

(function($){
	
    $(document).ready(function(){
        BL.PAGELINKS.position();
        if($.isFunction('scrollspy')){
            BL.SCROLLSPY.init();
            BL.SCROLLSPY.corrections();
        }
        //BL.STICKYCHECKOUT.bindStickyCheckout();
        $(window).trigger('scroll');

        $('#nav > li').hover(
            function(){
                $(this).addClass('over');
            },
            function(){
                $(this).removeClass('over');
            }
        );

        $('a.folds').on({
            click: function(){
              var el = $(this),
                to_fold = el.data('folds');
                $(to_fold).slideToggle(300);
            }
        });

        var sys_m = $('.system-message');
        $(window).load(function(){
            $('.login-dropdown:not(.open)').css({
                'maxHeight': '400px',
                'display': 'none'
            });
            if(sys_m.length){
                sys_m.slideDown(function(){
                    sys_m.delay(5000).slideUp(function(){
                        $(this).remove();
                    });
                    $('.system-message-closer').on({
                        click: function(){
                            $(this).parent().slideUp(function(){
                                $(this).remove();
                            });
                        }
                    });
                });
            }
        });
        
    });
    var BL = { };

    BL.STICKYCHECKOUT = (function(){
      var checkout_btn = $('.btn-proceed-checkout.sticky'),
        bindStickyCheckout = function(){
          checkout_btn.each(function(){
              var el = $(this),
                el_height = el.height(),
                el_is_sticky = false;
                el_trigger_height = el.offset().top - 100;
              if(el.hasClass('review-btn')){
                el_trigger_height = el_trigger_height - 5;
              }
              $(window).scroll(function(){
                if ($(window).scrollTop() > el_trigger_height && !el_is_sticky){
                    el.addClass('sticky-checkout');
                    el_is_sticky = true;
                }
                else if($(window).scrollTop() <= el_trigger_height && el_is_sticky){
                    el.removeClass('sticky-checkout');
                    el_is_sticky = false;
                }
              });
          });
        };
        return {
           bindStickyCheckout : bindStickyCheckout
        }
    }());
    BL.PAGELINKS = {
            position: function(){
                    //page links position change after scroll off the header
                    var header_height = $('#Header').height();
                    var nav_height = $('.page-links-wrap').height();
                    $(window).scroll(function() {
                            if($(window).scrollTop() > header_height + nav_height) {
                                    $('.page-links-wrap').css({
                                            'position' : 'fixed',
                                            'top' : '0',
                                            'z-index' : '98',
                                            'background-color' : '#FFF',
                                            'opacity' : '0.75'
                                    });
                                    //fix to compensate content pulling when position changed to fixed
                                    $('.page-links-wrap').siblings('.section-wrap').css({'padding-top': nav_height});
                            } else {
                                    $('.page-links-wrap').css({
                                            'position' : 'static',
                                            'z-index' : '98',
                                            'background' : 'none',
                                            'opacity' : '1'
                                    });
                                    //fix to compensate content pushing when position changed back to static
                                    $('.page-links-wrap').siblings('.section-wrap').css({'padding-top': '0px'});
                            }
                    });
            }
    };
    
    BL.SCROLLSPY = {
            init: function(){
                    //activate scrollspy
                    $('#page-links').scrollspy({offset:-50});
            },
            corrections: function(){
                    //scrollspy links click modifications
                    var offset,
                      header_height = $('#Header').height(),
                      nav_height = $('.page-links-wrap').height();
                    
                    $('.page-links li a').click(function(event) {
                            event.preventDefault();
                            //check if the page links navigation is still static - affects the offset
                            if($(window).scrollTop() > header_height + nav_height) {
                                    offset = 0;
                            } else {
                                    offset = 5;
                            }
                            $($(this).attr('href'))[0].scrollIntoView();
                            scrollBy(0, -offset);
                    });
            }
    }
	
    // {{{ login modal hover effects
    $('.nav-dropdown').hover(
        function(){
            $('.dropmodal', $(this)).parents('.nav-dropdown').addClass('active');
        },
        function(){
            var el = $('.dropmodal', $(this)),
                is_focused = false;
            $('input', el).each(function(){
                if($(this).is(':focus')){
                    is_focused = true;
                }
            });
            if(!is_focused){
                el.parents('.nav-dropdown').removeClass('active');
            }
        }
    );
    // }}}
    // {{{ login modal login action
    $('#header-login').submit(function(){
        var el = $(this),
            proceed=true,
            error_msg = $('.error-msg', el),
            required_entries = $('input.required-entry', el);
        required_entries.each(function(){
            var el = $(this);
            if (el.val() === ''){
                proceed=false;
                return false;
            }
        });
        if(!proceed){
            error_msg.html('Please fill out all fields').slideDown(200);
        }

        return proceed;
    });
    // }}}
    // {{{ registration modal lightbox effect
    var registration_veil = $('.registration-veil'),
        registration_modal = $('.registration-modal');

    registration_veil.on({
        click: function(){
            registration_veil.animate({ 'opacity': 0 }, 200,
                function(){ $(this).hide(); });

            registration_modal.animate({ 'opacity': 0 }, 200,
                function(){ $(this).hide(); });
        }
    });
    // }}}
    // {{{  dropdown trigger register
    $('#ajax-register-form').submit(function(){
        $('.nav-dropdown').removeClass('active');
        var email_val = $('input[name="start_register[email]"]').val();
            //registration_email = $('input[name="register[email]"]').val(email_val);
        $('input[name="email"]').val(email_val);
        registration_veil.show(100, function(){
            $(this).animate({ opacity: '0.9' }, 200);
        });
        registration_modal.show(100, function(){
            $(this).animate({ opacity: '1' }, 200);
        });
        
        return false;
    });
    // }}}
    var process_registration_form = function(form){
        var el = form,
            terms = $('input[name="terms-of-service"]', el),
            confirm_pass = $('input[name="confirmation"]', el),
            pass = $('input[name="password"]', el),
            error_msg = $('.form-error-msg', el),
            required_entries = $('.required-entry', el),
            proceed = true;
        required_entries.each(function(){
            var eli = $(this);
            if (eli.val() === ''){
                proceed=false;
                return false;
            }
        });
        if(!proceed){
            error_msg.html('Please fill out all fields.')
            return false;
        }
        if(confirm_pass.val() !== pass.val()){
            error_msg.html('Your passwords do not match.')
            return false;
        }
        if(!terms.is(':checked')){
            error_msg.html('You must agree to our Terms of Service.')
            return false;
        }
        if(proceed){
            return true;
        }
    }
    // {{{ lightbox registration form
    $('form[name="modal-registration-form"]').submit(function(){
        return process_registration_form($(this));
    });
    // }}}
    // {{{ login page registration form
    $('form[name="page-registration-form"]').submit(function(){
        return process_registration_form($(this));
    });
    // }}}
    // {{{ login page login form
    $('form[name="page-login-form"]').submit(function(){
        var el = $(this),
            proceed=true,
            error_msg = $('.form-error-msg', el),
            required_entries = $('input.required-entry', el);
        required_entries.each(function(){
            var eli = $(this);
            if (eli.val() === ''){
                proceed=false;
                return false;
            }
        });
        if(!proceed){
            error_msg.html('Please fill out all fields').slideDown(200);
            $('.magento-errors').fadeOut(200);
        }

        return proceed;
    });
    // }}}
})(jQuery);

/* jQuery Transit */
(function(t,e){if(typeof define==="function"&&define.amd){define(["jquery"],e)}else if(typeof exports==="object"){module.exports=e(require("jquery"))}else{e(t.jQuery)}})(this,function(t){t.transit={version:"0.9.12",propertyMap:{marginLeft:"margin",marginRight:"margin",marginBottom:"margin",marginTop:"margin",paddingLeft:"padding",paddingRight:"padding",paddingBottom:"padding",paddingTop:"padding"},enabled:true,useTransitionEnd:false};var e=document.createElement("div");var n={};function i(t){if(t in e.style)return t;var n=["Moz","Webkit","O","ms"];var i=t.charAt(0).toUpperCase()+t.substr(1);for(var r=0;r<n.length;++r){var s=n[r]+i;if(s in e.style){return s}}}function r(){e.style[n.transform]="";e.style[n.transform]="rotateY(90deg)";return e.style[n.transform]!==""}var s=navigator.userAgent.toLowerCase().indexOf("chrome")>-1;n.transition=i("transition");n.transitionDelay=i("transitionDelay");n.transform=i("transform");n.transformOrigin=i("transformOrigin");n.filter=i("Filter");n.transform3d=r();var a={transition:"transitionend",MozTransition:"transitionend",OTransition:"oTransitionEnd",WebkitTransition:"webkitTransitionEnd",msTransition:"MSTransitionEnd"};var o=n.transitionEnd=a[n.transition]||null;for(var u in n){if(n.hasOwnProperty(u)&&typeof t.support[u]==="undefined"){t.support[u]=n[u]}}e=null;t.cssEase={_default:"ease","in":"ease-in",out:"ease-out","in-out":"ease-in-out",snap:"cubic-bezier(0,1,.5,1)",easeInCubic:"cubic-bezier(.550,.055,.675,.190)",easeOutCubic:"cubic-bezier(.215,.61,.355,1)",easeInOutCubic:"cubic-bezier(.645,.045,.355,1)",easeInCirc:"cubic-bezier(.6,.04,.98,.335)",easeOutCirc:"cubic-bezier(.075,.82,.165,1)",easeInOutCirc:"cubic-bezier(.785,.135,.15,.86)",easeInExpo:"cubic-bezier(.95,.05,.795,.035)",easeOutExpo:"cubic-bezier(.19,1,.22,1)",easeInOutExpo:"cubic-bezier(1,0,0,1)",easeInQuad:"cubic-bezier(.55,.085,.68,.53)",easeOutQuad:"cubic-bezier(.25,.46,.45,.94)",easeInOutQuad:"cubic-bezier(.455,.03,.515,.955)",easeInQuart:"cubic-bezier(.895,.03,.685,.22)",easeOutQuart:"cubic-bezier(.165,.84,.44,1)",easeInOutQuart:"cubic-bezier(.77,0,.175,1)",easeInQuint:"cubic-bezier(.755,.05,.855,.06)",easeOutQuint:"cubic-bezier(.23,1,.32,1)",easeInOutQuint:"cubic-bezier(.86,0,.07,1)",easeInSine:"cubic-bezier(.47,0,.745,.715)",easeOutSine:"cubic-bezier(.39,.575,.565,1)",easeInOutSine:"cubic-bezier(.445,.05,.55,.95)",easeInBack:"cubic-bezier(.6,-.28,.735,.045)",easeOutBack:"cubic-bezier(.175, .885,.32,1.275)",easeInOutBack:"cubic-bezier(.68,-.55,.265,1.55)"};t.cssHooks["transit:transform"]={get:function(e){return t(e).data("transform")||new f},set:function(e,i){var r=i;if(!(r instanceof f)){r=new f(r)}if(n.transform==="WebkitTransform"&&!s){e.style[n.transform]=r.toString(true)}else{e.style[n.transform]=r.toString()}t(e).data("transform",r)}};t.cssHooks.transform={set:t.cssHooks["transit:transform"].set};t.cssHooks.filter={get:function(t){return t.style[n.filter]},set:function(t,e){t.style[n.filter]=e}};if(t.fn.jquery<"1.8"){t.cssHooks.transformOrigin={get:function(t){return t.style[n.transformOrigin]},set:function(t,e){t.style[n.transformOrigin]=e}};t.cssHooks.transition={get:function(t){return t.style[n.transition]},set:function(t,e){t.style[n.transition]=e}}}p("scale");p("scaleX");p("scaleY");p("translate");p("rotate");p("rotateX");p("rotateY");p("rotate3d");p("perspective");p("skewX");p("skewY");p("x",true);p("y",true);function f(t){if(typeof t==="string"){this.parse(t)}return this}f.prototype={setFromString:function(t,e){var n=typeof e==="string"?e.split(","):e.constructor===Array?e:[e];n.unshift(t);f.prototype.set.apply(this,n)},set:function(t){var e=Array.prototype.slice.apply(arguments,[1]);if(this.setter[t]){this.setter[t].apply(this,e)}else{this[t]=e.join(",")}},get:function(t){if(this.getter[t]){return this.getter[t].apply(this)}else{return this[t]||0}},setter:{rotate:function(t){this.rotate=b(t,"deg")},rotateX:function(t){this.rotateX=b(t,"deg")},rotateY:function(t){this.rotateY=b(t,"deg")},scale:function(t,e){if(e===undefined){e=t}this.scale=t+","+e},skewX:function(t){this.skewX=b(t,"deg")},skewY:function(t){this.skewY=b(t,"deg")},perspective:function(t){this.perspective=b(t,"px")},x:function(t){this.set("translate",t,null)},y:function(t){this.set("translate",null,t)},translate:function(t,e){if(this._translateX===undefined){this._translateX=0}if(this._translateY===undefined){this._translateY=0}if(t!==null&&t!==undefined){this._translateX=b(t,"px")}if(e!==null&&e!==undefined){this._translateY=b(e,"px")}this.translate=this._translateX+","+this._translateY}},getter:{x:function(){return this._translateX||0},y:function(){return this._translateY||0},scale:function(){var t=(this.scale||"1,1").split(",");if(t[0]){t[0]=parseFloat(t[0])}if(t[1]){t[1]=parseFloat(t[1])}return t[0]===t[1]?t[0]:t},rotate3d:function(){var t=(this.rotate3d||"0,0,0,0deg").split(",");for(var e=0;e<=3;++e){if(t[e]){t[e]=parseFloat(t[e])}}if(t[3]){t[3]=b(t[3],"deg")}return t}},parse:function(t){var e=this;t.replace(/([a-zA-Z0-9]+)\((.*?)\)/g,function(t,n,i){e.setFromString(n,i)})},toString:function(t){var e=[];for(var i in this){if(this.hasOwnProperty(i)){if(!n.transform3d&&(i==="rotateX"||i==="rotateY"||i==="perspective"||i==="transformOrigin")){continue}if(i[0]!=="_"){if(t&&i==="scale"){e.push(i+"3d("+this[i]+",1)")}else if(t&&i==="translate"){e.push(i+"3d("+this[i]+",0)")}else{e.push(i+"("+this[i]+")")}}}}return e.join(" ")}};function c(t,e,n){if(e===true){t.queue(n)}else if(e){t.queue(e,n)}else{t.each(function(){n.call(this)})}}function l(e){var i=[];t.each(e,function(e){e=t.camelCase(e);e=t.transit.propertyMap[e]||t.cssProps[e]||e;e=h(e);if(n[e])e=h(n[e]);if(t.inArray(e,i)===-1){i.push(e)}});return i}function d(e,n,i,r){var s=l(e);if(t.cssEase[i]){i=t.cssEase[i]}var a=""+y(n)+" "+i;if(parseInt(r,10)>0){a+=" "+y(r)}var o=[];t.each(s,function(t,e){o.push(e+" "+a)});return o.join(", ")}t.fn.transition=t.fn.transit=function(e,i,r,s){var a=this;var u=0;var f=true;var l=t.extend(true,{},e);if(typeof i==="function"){s=i;i=undefined}if(typeof i==="object"){r=i.easing;u=i.delay||0;f=typeof i.queue==="undefined"?true:i.queue;s=i.complete;i=i.duration}if(typeof r==="function"){s=r;r=undefined}if(typeof l.easing!=="undefined"){r=l.easing;delete l.easing}if(typeof l.duration!=="undefined"){i=l.duration;delete l.duration}if(typeof l.complete!=="undefined"){s=l.complete;delete l.complete}if(typeof l.queue!=="undefined"){f=l.queue;delete l.queue}if(typeof l.delay!=="undefined"){u=l.delay;delete l.delay}if(typeof i==="undefined"){i=t.fx.speeds._default}if(typeof r==="undefined"){r=t.cssEase._default}i=y(i);var p=d(l,i,r,u);var h=t.transit.enabled&&n.transition;var b=h?parseInt(i,10)+parseInt(u,10):0;if(b===0){var g=function(t){a.css(l);if(s){s.apply(a)}if(t){t()}};c(a,f,g);return a}var m={};var v=function(e){var i=false;var r=function(){if(i){a.unbind(o,r)}if(b>0){a.each(function(){this.style[n.transition]=m[this]||null})}if(typeof s==="function"){s.apply(a)}if(typeof e==="function"){e()}};if(b>0&&o&&t.transit.useTransitionEnd){i=true;a.bind(o,r)}else{window.setTimeout(r,b)}a.each(function(){if(b>0){this.style[n.transition]=p}t(this).css(l)})};var z=function(t){this.offsetWidth;v(t)};c(a,f,z);return this};function p(e,i){if(!i){t.cssNumber[e]=true}t.transit.propertyMap[e]=n.transform;t.cssHooks[e]={get:function(n){var i=t(n).css("transit:transform");return i.get(e)},set:function(n,i){var r=t(n).css("transit:transform");r.setFromString(e,i);t(n).css({"transit:transform":r})}}}function h(t){return t.replace(/([A-Z])/g,function(t){return"-"+t.toLowerCase()})}function b(t,e){if(typeof t==="string"&&!t.match(/^[\-0-9\.]+$/)){return t}else{return""+t+e}}function y(e){var n=e;if(typeof n==="string"&&!n.match(/^[\-0-9\.]+/)){n=t.fx.speeds[n]||t.fx.speeds._default}return b(n,"ms")}t.transit.getTransitionValue=d;return t});


function show_measurementset( key , img_prefix ) {

	jQuery( '.measurementset' ).hide();
	jQuery( '#measurementset_navigation .current' ).each( function() {
		jQuery( this ).removeClass( 'current' );
	});

	jQuery( '#measurementset_navigation li[key=' + key + ']' ).addClass( 'current' );

	jQuery( '#measurementset_' + key ).fadeIn( 'slow' );

};

function watch_measurement_video( label ) {

	var element_id = 'video_for_' + label;

	jQuery( '.measurement_video' ).slideUp( 'slow' );
	jQuery( '#' + element_id ).slideDown( 'slow' );

	var video_filename = label.substr( label.indexOf( '_' ) + 1 ) + '.flv';

	document.currentVideo = $f( element_id , { 'src' : 'http://www.blacklapel.com/video/player/flowplayer-3.2.3.swf?rand=' + Math.random() , width: 640 , height: 376 } , 
		{
			clip:{
		        autoPlay: true,
		        autoBuffering: true
		    } ,
		    playlist: [ 'http://www.blacklapel.com/video/' + video_filename + '?rand=' + Math.random() ],
			canvas:{background: '#000000',backgroundGradient:[0,0,0,]},
		    plugins:{controls:
		        	{
			    		display:"block",
			    		opacity:0.8,
			        	timeColor:"#000000",
			        	sliderColor:"#464646",
			        	buttonOverColor:"#999999",
			        	bufferColor:"#464646",
			        	progressColor:"#000000",
			        	buttonColor:"#666666",
			        	durationColor:"#000000",
			        	backgroundColor:"#000000",
			        	backgroundGradient:"none"
		            }
		    }
		}
	);

}

jQuery( document ).ready( function() {

	jQuery( '.locked input' ).attr( 'disabled' , 'disabled' );
	jQuery( '#close-step-0' ).on({
          click: function(){
            jQuery('.step-0').fadeOut(200, function(){jQuery(this).remove()});
          }
        });

});


document.suppress_save_warning = true;

jQuery(document).ready( function() {

	/*window.onbeforeunload = function() {
		if( document.suppress_save_warning ) {
			return;
		}else{
			return 'Are you sure you want to leave this page?\n\nUnsaved measurements will be lost.';
		}
	};*/

	document.current_panel = 0;
	
	load_recommendations();

	// show navigation hints on circle rollover
	jQuery( '#panel_navigation .circles .circle' ).hover( function() {
		jQuery( '#circle_hint' ).text( jQuery( this ).attr( 'measurement' ) );
		var circle_position = jQuery( this ).offset();
		jQuery( '#circle_hint' ).css( 'left' , circle_position.left - 92 ).css( 'top' , circle_position.top - 30 );
		jQuery( '#circle_hint' ).show();
	} , function() {
		jQuery( '#circle_hint' ).hide();
	} );

	// show body shape image on option rollover
	jQuery( '.attribute .options label' ).hover( function() {
		set_body_shape_option( jQuery( this ).parent().children( 'input' ) , false );
	} , function() {
		set_body_shape_option( jQuery( this ).parent().children( 'input' ) , false , true );
	});

	jQuery( '.attribute .options input' ).change( function() {
		set_body_shape_option( this , true );
	});

});

function set_body_shape_option( input , save_current_value , use_current_value ) {
	var image_to_use = null;
	if( use_current_value ) {
		image_to_use = jQuery( '#' + jQuery( input ).attr( 'attribute' ) ).attr( 'current_value' );
	}else{
		image_to_use = jQuery( input ).attr( 'img' );
	}
	if( save_current_value ) {
		jQuery( '#' + jQuery( input ).attr( 'attribute' ) ).attr( 'current_value' , image_to_use );
	}
	jQuery( '#' + jQuery( input ).attr( 'attribute' ) ).attr( 'src' , '/images/measurements/body_shape/' + jQuery( input ).attr( 'attribute' ) + '_' + image_to_use + '.png' );
}

// ensure height, weight, and age entered are valid
function height_and_weight_valid() {
	var values_to_check = [ 'height_feet' , 'height_inches' , 'weight' , 'age' ];
	for( var id in values_to_check ) {
		var parsed_value = parseInt( jQuery( '#' + values_to_check[ id ] ).val() );
		if( isNaN( parsed_value) || ( values_to_check[ id ] != 'height_inches' && parsed_value == 0 ) ) {
			return false;
		}
	}
	var height = parseInt( jQuery( '#height_feet' ).val() ) * 12 + parseInt( jQuery( '#height_inches' ).val() );
	if( height == 48 ) {
		return false;
	}
	jQuery( '#height' ).val( height );
	return true;
}



document.changePanel = function( delta ) {

	// determine new slide
	var new_panel = document.current_panel + delta;

	document.setPanel( new_panel );

}

document.setPanel = function( new_panel ) {

	if( document.transitioning_panel ) {
		return;
	}

	jQuery( '#general_measurements_error' ).hide();

	if( document.current_panel == 0 && new_panel != 0 ) {
		if( ! height_and_weight_valid() ) {
			jQuery( '#general_measurements_error' ).fadeIn();
			return;
		}
		// moving from first slide on initial measurements, load recommended measurements
		$.post( '/measurements/get_recommendations' , jQuery( '#measurement_container_form' ).serialize() , function( data ) {
			load_recommendations( data  );
			if( document.use_recommendations_for_values ) {
				load_measurements( data );
			}
		} , 'json' );
	}

	document.transitioning_panel = true;
	
	if( new_panel == 0 ) {
		jQuery( '#next_panel' ).css( 'margin-left' , '225px' );
		jQuery( '#previous_panel' ).hide();
	}else{
		jQuery( '#next_panel' ).css( 'margin-left' , '0' );
		jQuery( '#previous_panel' ).show();
	}
	
	if( new_panel == 15 ) {
		jQuery( '#next_panel' ).hide();
		jQuery( '#save_finish' ).show();
	}else{
		jQuery( '#next_panel' ).show();
		jQuery( '#save_finish' ).hide();
	}

	var forward = ( ( new_panel - document.current_panel ) > 0 ) ? 1 : -1;

	jQuery( '#video_display' ).hide();

	// hide old slide
	jQuery( '#panel_' + document.current_panel ).animate( {
		opacity: 0.0 ,
		marginLeft: ( -1 * forward ) * 940
	} , 'slow' );

	// deactivate old circle
	jQuery( '#circle_' + document.current_panel ).removeClass( 'active' );

	// activate new circle
	jQuery( '#circle_' + new_panel ).addClass( 'active' );

	// show new slide
	jQuery( '#panel_' + new_panel ).
		css( 'margin-left' , forward * 940 ).
		css( 'display' , 'block' ).
		css( 'opacity' , 100 ).
		animate( {
			opacity: 1.0 ,
			marginLeft: 0
		} , 'slow' , function() {

			document.transitioning_panel = false;

			// show video
			if( jQuery( '#panel_' + new_panel ).attr( 'measurement' ) ) {

				jQuery( '#video_display' ).empty();
				jQuery( '#video_display' ).show();

				var video_filename = jQuery( '#panel_' + new_panel ).attr( 'measurement' ) + '.flv';

				document.currentVideo = $f( 'video_display' , { 'src' : 'http://www.indochino.com/video/player/flowplayer-3.2.3.swf?rand=' + Math.random() , width: 512 , height: 300 } ,
					{
						clip:{
							autoPlay: true,
							autoBuffering: true
						} ,
						playlist: [ 'http://www.indochino.com/video/' + video_filename + '?rand=' + Math.random() ],
						canvas:{background: '#000000',backgroundGradient:[0,0,0,]},
						plugins:{controls:
								{
									display:"block",
									opacity:0.8,
									time: false,
									volume: false,
									timeColor:"#000000",
									sliderColor:"#464646",
									buttonOverColor:"#999999",
									bufferColor:"#464646",
									progressColor:"#000000",
									buttonColor:"#666666",
									durationColor:"#000000",
									backgroundColor:"#000000",
									backgroundGradient:"none"
								}
						}
					}
				);

			}else{
				document.currentVideo = null;
				jQuery( '#video_display' ).empty();
			}

			document.current_panel = new_panel;

	});

}

function load_recommendations( recommendations ) {
	for( var label in recommendations ) {
	alert(label);
		jQuery( '.measurement .tape[measurement=' + label + '] .recommended' ).css( 'left' , '' + ( 80 * recommendations[ label ] ) + 'px' );
	}
}

function load_measurements( measurements ) {
	for( var i in measurements ) {
		var input = jQuery( '.measurement .value input[label=' + i + ']' );
		input.val( measurements[ i ] );
		jQuery( 'input[attribute=' + i.toLowerCase() + '][value=' + measurements[ i ] + ']' ).attr( 'checked' , 'checked' );
		input_to_tape( input );
	}
}

/*!
 * jQuery UI Touch Punch 0.2.3
 *
 * Copyright 2011Ã¢â‚¬â€œ2014, Dave Furfero
 * Dual licensed under the MIT or GPL Version 2 licenses.
 *
 * Depends:
 *  jquery.ui.widget.js
 *  jquery.ui.mouse.js
 */
!function(a){function f(a,b){if(!(a.originalEvent.touches.length>1)){a.preventDefault();var c=a.originalEvent.changedTouches[0],d=document.createEvent("MouseEvents");d.initMouseEvent(b,!0,!0,window,1,c.screenX,c.screenY,c.clientX,c.clientY,!1,!1,!1,!1,0,null),a.target.dispatchEvent(d)}}if(a.support.touch="ontouchend"in document,a.support.touch){var e,b=a.ui.mouse.prototype,c=b._mouseInit,d=b._mouseDestroy;b._touchStart=function(a){var b=this;!e&&b._mouseCapture(a.originalEvent.changedTouches[0])&&(e=!0,b._touchMoved=!1,f(a,"mouseover"),f(a,"mousemove"),f(a,"mousedown"))},b._touchMove=function(a){e&&(this._touchMoved=!0,f(a,"mousemove"))},b._touchEnd=function(a){e&&(f(a,"mouseup"),f(a,"mouseout"),this._touchMoved||f(a,"click"),e=!1)},b._mouseInit=function(){var b=this;b.element.bind({touchstart:a.proxy(b,"_touchStart"),touchmove:a.proxy(b,"_touchMove"),touchend:a.proxy(b,"_touchEnd")}),c.call(b)},b._mouseDestroy=function(){var b=this;b.element.unbind({touchstart:a.proxy(b,"_touchStart"),touchmove:a.proxy(b,"_touchMove"),touchend:a.proxy(b,"_touchEnd")}),d.call(b)}}}(jQuery);

function tape_to_input( tape ) {
	var inches = 1.75 - Math.round( ( ( jQuery( tape ).position().left ) / 60 ) * 4 ) / 4;
	var cm = ( 1.75 - Math.round( ( jQuery( tape ).position().left / 60 ) * 4 ) / 4 ) * 2.54;
	var value_display = jQuery( tape ).parent().parent().parent().children( '.value' );
	jQuery( value_display ).children( '.inches' ).val( inches.toFixed(2) );
	jQuery( value_display ).children( '.cm' ).val( cm.toFixed(2) );
}

function input_to_tape( input ) {

	old_value = jQuery( input ).val();

	if( isNaN( parseFloat( old_value ) ) ) {
		return false;
	}

	// first, round the input value
	var new_value = Math.round( parseFloat( old_value ) * 4 ) / 4;

	// give the value an upper and lower bound
	if( new_value < 1 )
		new_value = 1;

	if( new_value > 75 )
		new_value = 75;

	// write new value back to input
	jQuery( input ).val( '' + new_value + ( old_value[ old_value.length - 1 ] == '.' ? '.' : '' ) );
	
	var cm = new_value * 2.54;
	jQuery( input ).closest('.value').find('.cm').val(cm.toFixed(2));
	// now determine the correct position for the tape
	var pixels =  0 - ( ( new_value - 1.75 ) * 60 );

	// animate the tape
	jQuery( input ).parent().parent().children( '.tape_widget' ).children( '.tape_container' ).children( '.tape' ).animate({
		left: pixels
	} , 'slow' );

	return true;
}

jQuery( document ).ready( function() {

	jQuery( '.measurement input.inches' ).each( function() {
		input_to_tape( jQuery( this ) );
	});
	
	jQuery( '.tape' ).mousedown( function() {
		jQuery( '.tape_hint' ).hide().css( 'display' , 'none' );
	});

	jQuery( '.tape_hint' ).mousedown( function() {
		jQuery( '.tape_hint' ).hide().css( 'display' , 'none' );
	});
	
	jQuery( '.tape' ).draggable( {
		axis: 'x' ,
		grid: [ 1 , 0 ] ,
		drag: function( event , ui ) {

			document.suppress_save_warning = false;

			var left_position = jQuery( this ).position().left;

			if( left_position > 0 ) {
				jQuery( this ).css( 'left' , '0px' );
				return false;
			}
			
			if( left_position < -4400 ) {
				jQuery( this ).css( 'left' , '-4400px' );
				return false;
			}

			tape_to_input( jQuery( this ) );
			jQuery( this ).children( '.highlight' ).css( 'margin-left' , 0 - left_position );
		},
		stop: function() {
			jQuery( this ).animate({
				left: Math.round( jQuery( this ).position().left / 15 ) * 15
			},
			'fast');
		}
	});
	
	var t;
	
	jQuery( '.measurement .value input.cm').keyup( function(k) {
		if(jQuery(this).attr('id') != 'wt')
		{
			clearTimeout(t);
			var cachedThis = jQuery(this);
			t = setTimeout(function(){
				val = cachedThis.val() / 2.54;
				el = cachedThis.closest('.value').find('.inches');
				el.val(val.toFixed(2));
				input_to_tape(el);
				
			}, 500);
			
			
		}
	});
	
	jQuery( '.measurement .value input.inches').keyup( function(k) {
		document.suppress_save_warning = false;
		
		if(jQuery(this).attr('id') != 'wt')
		{
			
			clearTimeout(t);
			var cachedThis = jQuery(this);
			t = setTimeout(function(){input_to_tape(cachedThis)}, 500);
		}
		if (k.keyCode == 13) 
		{
			checkGeneralMeasurements();
			var current = jQuery('.current');
			var next = current.next('.tab_content');
			current.hide().removeClass('current');
			next.addClass('current').fadeIn();
			pagedTab = '#' + next.attr('id'); //get tab id as link
			
			jQuery("#MeasurementsMenu #LeftColMenu ul li a").removeClass("selected"); //Remove any "active" class
			jQuery('#MeasurementsMenu #LeftColMenu ul li a').each(function(){
		   	var myHref= jQuery(this).attr('href');
		   	if( pagedTab == myHref) {
		        jQuery(this).addClass("selected")
		   	}
		   	
		});
		}
	} );
});
