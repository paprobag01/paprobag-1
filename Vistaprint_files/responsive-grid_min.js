                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                if(!window.__td){window.__MT=100;window.__ti=0;window.__td=[];window.__td.length=window.__MT;window.__noTrace=false;}


(function $vpfn_p2v5Tjpq2NjR5LrkWF0PZQ4$1($){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}


function setViewportPolyfill()
{if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
var $body=$("body");
var windowWidth=$body.clientRect().width;
var $html=$("html");


function fixClassForWindowWidth(classToRemove1,classToRemove2,classToAdd)
{if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
if(!$html.hasClass(classToAdd))
{
$html.removeClass(classToRemove1).removeClass(classToRemove2);
$html.addClass(classToAdd);
}
}fixClassForWindowWidth._vpfn='$vpfn_HrhO5Ga1bkp02VdnmR14$A14$8';

if(windowWidth<=767)
{
fixClassForWindowWidth("screen-size-medium","screen-size-small","screen-size-extra-small");
}
else if(windowWidth>767&&windowWidth<=959)
{
fixClassForWindowWidth("screen-size-medium","screen-size-extra-small","screen-size-small");
}
else
{
fixClassForWindowWidth("screen-size-extra-small","screen-size-small","screen-size-medium");
}
}setViewportPolyfill._vpfn='$vpfn_NeWOkq39Vw8DVy6CiI_81w7$4';


if($("body").hasClass("ie6to8"))
{
$("body").ready(setViewportPolyfill);
$(window).resize(setViewportPolyfill);
}

})(jQuery);

