                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                if(!window.__td){window.__MT=100;window.__ti=0;window.__td=[];window.__td.length=window.__MT;window.__noTrace=false;}





(function $vpfn_OWnQ55BSPjGCXBpL6SGMtA7$1($){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}

$(document).ready(function $vpfn_OWnQ55BSPjGCXBpL6SGMtA9$22(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
var search;
var xsSearch;

var KEYCODE_UP=38;
var KEYCODE_DOWN=40;
var KEYCODE_ENTER=13;

var updateSuggestions=function $vpfn_45i_vGtCQ$jSYI9kvBF8oA17$32(searchObj,keywords,oSuggestions){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}


if(!searchObj||keywords!==searchObj.SearchBox.currentKeyword()){
return;
}

var suggestionList=$(".header-search-bar-suggestions");

suggestionList.html("");

if(oSuggestions.length===0){
_highlightedItem=null;
suggestionList.hide();
return;
}

$(oSuggestions).each(function $vpfn_OWnQ55BSPjGCXBpL6SGMtA34$33(index,value){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
suggestionList.append("<li class='header-search-bar-suggestion'><a href='#here'>"+value+"</a></li>");
});

suggestionList.on('click','li',function $vpfn_OWnQ55BSPjGCXBpL6SGMtA38$45(e){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
e.preventDefault();
e.stopPropagation();
$('.header-search-bar-input').val($(this).text());
suggestionList.html("");
searchObj.SearchBox.processSearch();
});

suggestionList.show();

};


var keyPressHandler=function $vpfn_Zo1ezgN8oc9JXY7RHaPWRA51$30(e){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
var $menuItems=$(".header-search-bar-suggestions li");
var $highlightedItem=$menuItems.filter('.highlighted');

if(e.which==KEYCODE_DOWN||e.which==KEYCODE_UP)
{
if(!$menuItems)
{
return;
}

e.preventDefault();
e.stopPropagation();

$highlightedItem=e.keyCode==KEYCODE_DOWN?$highlightedItem.next():$highlightedItem.prev();

if(!$highlightedItem.length)
{
$highlightedItem=e.keyCode==KEYCODE_DOWN?$menuItems.first():$menuItems.last();
}

$menuItems.removeClass('highlighted');
$highlightedItem.addClass('highlighted');
}
else if(e.which==KEYCODE_ENTER)
{
e.preventDefault();
e.stopPropagation();
if($highlightedItem.length)
{
$highlightedItem.click();
}
else
{
if($(this).parents('.xs-header-search-bar-fieldset').length)
{
xsSearch.SearchBox.processSearch();
}
else
{
search.SearchBox.processSearch();
}
}
}
};

var hideSuggestions=function $vpfn_3K2bU14W$dN74ugyfOhM3w97$30(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}

setTimeout(
function $vpfn_OWnQ55BSPjGCXBpL6SGMtA100$16(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
var suggestionList=$(".header-search-bar-suggestions");
suggestionList.hide();
},100);
};

var showSuggestions=function $vpfn_y0rxmsmaZkypSpy1b2NJ2g106$30(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}

setTimeout(
function $vpfn_OWnQ55BSPjGCXBpL6SGMtA109$16(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
var suggestionList=$(".header-search-bar-suggestions");
if(suggestionList.html()){
suggestionList.show();
}
},100);
};

var wireAccountPaneAnalyticsTracking=function $vpfn_$RB9xPJCgrImN9t_8tAKwQ117$47(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}

var $paneButton=$("[data-tooltip='#headerUserMenu']");

var qs='page_spot_id='+window._vp_page_spot_id;

$paneButton.on('richTooltip:open',function $vpfn_OWnQ55BSPjGCXBpL6SGMtA123$47(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
vp.spot.trackWithQueryString('HeaderAccountPane:Open',qs);
});

$paneButton.on('richTooltip:close',function $vpfn_OWnQ55BSPjGCXBpL6SGMtA127$48(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
vp.spot.trackWithQueryString('HeaderAccountPane:Close',qs);
});
};

search=new SiteSearch($('.header-search-bar-fieldset .header-search-bar-input'),null,updateSuggestions);
xsSearch=new SiteSearch($('.xs-header-search-bar-fieldset .header-search-bar-input'),null,updateSuggestions);

var extraExtraSmall=window.matchMedia&&window.matchMedia('only screen and (max-width: 500px)');

$('.header-search-bar-icon-rebrand').click(function $vpfn_OWnQ55BSPjGCXBpL6SGMtA137$51(event){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
if(extraExtraSmall&&extraExtraSmall.matches||$('.ui-mobile').length){
xsSearch.SearchBox.processSearch(event);
}else{
search.SearchBox.processSearch(event);
}
});

$('.header-search-bar-input').on('keydown',keyPressHandler);
$('.header-link-search .header-search-bar-input').on('focusout',hideSuggestions);
$('.header-link-search .header-search-bar-input').on('focusin',showSuggestions);

var fitNavigation=_.throttle(function $vpfn_OWnQ55BSPjGCXBpL6SGMtA149$39(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}

var $navBar=$(".nav-bar");

if(!$navBar.length)
{
return;
}
var $navBarClientRect=$navBar.clientRect();
var navBarWidth=$navBarClientRect.width;

var $navBarInner=$(".nav-bar-inner");
$navBarInner.css('text-align','left');
$navBarInner.css('display','block');
var $navBarInnerClientRect=$navBarInner.clientRect();

var $navBarChildren=$navBarInner.children();
var navBarChildrenWidth=0;


$navBarChildren.each(function $vpfn_OWnQ55BSPjGCXBpL6SGMtA169$33(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
navBarChildrenWidth+=$(this).clientRect().width;
});

var navBarChildrenToRemove=new Array();
if(navBarChildrenWidth>navBarWidth)
{


for(var i=($navBarChildren.length-1);i>-1;i--){
if(navBarChildrenWidth>navBarWidth)
{
navBarChildrenWidth-=$($navBarChildren[i]).clientRect().width;
navBarChildrenToRemove[i]=true;
}else{
navBarChildrenToRemove[i]=false;
}
}
}

for(var j=0;j<$navBarChildren.length;j++){
if(navBarChildrenToRemove[j]){
$($navBarChildren[j]).addClass("nav-use-case-hidden");
}else{
$($navBarChildren[j]).removeClass("nav-use-case-hidden");
}
}

$navBarInner.css('text-align','');
$navBarInner.css('display','');

},100);

$(document).ready(fitNavigation);
$(window).on("resize orientationchange",fitNavigation);

$(document).ready(wireAccountPaneAnalyticsTracking);

$('.xs-header-link-user').on('click',function $vpfn_OWnQ55BSPjGCXBpL6SGMtA207$46(e){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
e.preventDefault();
e.stopPropagation();
$('.xs-user-menu').toggleClass("show-mobile-menu");
$('.xs-header-link-user').toggleClass('header-link-menu-open');

$('.header-link-search-xsmall').removeClass('header-link-menu-open');
$('.search-form').removeClass('visible');
$('.xs-search-menu').removeClass("show-mobile-menu");
$('.xs-header-link-products').removeClass('header-link-menu-open');
$('.xs-product-menu').removeClass("show-mobile-menu");

});

$('.xs-header-link-products').on('click',function $vpfn_OWnQ55BSPjGCXBpL6SGMtA221$50(e){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
e.preventDefault();
e.stopPropagation();
$('.xs-product-menu').toggleClass("show-mobile-menu");
$('.xs-header-link-products').toggleClass('header-link-menu-open');

$('.xs-header-link-user').removeClass('header-link-menu-open');
$('.header-link-search-xsmall').removeClass('header-link-menu-open');
$('.search-form').removeClass('visible');
$('.xs-search-menu').removeClass("show-mobile-menu");
$('.xs-user-menu').removeClass("show-mobile-menu");
});

$('.header-link-search-xsmall').on('click',function $vpfn_OWnQ55BSPjGCXBpL6SGMtA234$52(e){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
$('.search-form').toggleClass('visible');
$('.xs-search-menu').toggleClass("show-mobile-menu");
$('.header-link-search-xsmall').toggleClass('header-link-menu-open');

$('.xs-header-link-user').removeClass('header-link-menu-open');
$('.xs-header-link-products').removeClass('header-link-menu-open');
$('.xs-user-menu').removeClass("show-mobile-menu");
$('.xs-product-menu').removeClass("show-mobile-menu");

vp.spot.track('MobileHeader:search_btn_click');
});
});

})(jQuery);
