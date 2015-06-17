                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                if(!window.__td){window.__MT=100;window.__ti=0;window.__td=[];window.__td.length=window.__MT;window.__noTrace=false;}




$.registerDropDownMenuSkin(
"taxonomy",
{
position:function $vpfn_c3CqjMEe8_knnw4Ce4g$oQ9$18(e)
{if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
topNavTaxonomyPositioningStrategy(e);
}
});




var topNavTaxonomyPositioningStrategy=function $vpfn_hS3uxXnty7uM0dIQV8XUtQ18$40(e)
{if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
if(e.level===0)
{
e.$panel.css({
top:e.$item.innerHeight(),
left:"-"+e.$item.css("borderLeftWidth"),
right:"auto"
});





var rect=e.$panel.show().clientRect();
var viewportWidth=$(window).width();
if((rect.left+rect.width>viewportWidth)&&
(rect.width<viewportWidth)){
e.$panel.css(
{
left:'auto',
right:"-"+e.$item.css("borderRightWidth")
}
);
}


e.$panel.hide();


var maxChildPanelHeight=e.$panel.height();
e.$panel.find(".menu-panel").each(function $vpfn_c3CqjMEe8_knnw4Ce4g$oQ49$42(i){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}

$(this).css("visibility","hidden");
$(this).show();
});
e.$panel.css("visibility","hidden").show();
e.$panel.find(".menu-panel").each(function $vpfn_c3CqjMEe8_knnw4Ce4g$oQ55$42(i){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
maxChildPanelHeight=Math.max($(this).height(),maxChildPanelHeight);
$(this).hide();
$(this).css("visibility","visible");
});
e.$panel.css("visibility","visible").height(maxChildPanelHeight);

return;
}

NonRootTaxonomyPositioningStrategy(e);
};




var leftNavTaxonomyPositioningStrategy=function $vpfn_6X_1lmFvZQ1CSe$otmtKxQ71$41(e)
{if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
if(e.level===0)
{
e.$panel.css({
top:0,
left:parseInt(e.$item.css("width"),10)
});
return;
}

NonRootTaxonomyPositioningStrategy(e);
};




var NonRootTaxonomyPositioningStrategy=function $vpfn_3_o8ylAiJkcFpwV0f4Eysw88$41(e)
{if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
var pos=e.$item.position();


e.$panel.css({
left:pos.left+e.$item.innerWidth(),
top:-pos.top-e.$panel.css('border-top-width').replace('px','')
});


e.$panel.show();

function ensureVisibility(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}

var contextRect=e.$item.clientRect();


var rect=e.$panel.clientRect();


var windowWidth=window.innerWidth||document.documentElement.clientWidth||document.body.clientWidth;




if(rect.left+rect.width>windowWidth&&contextRect.left-rect.width>0){
e.$panel.addClass("float-left").css("left","-"+rect.width+"px");
}else{
e.$panel.removeClass("float-left");
}




}ensureVisibility._vpfn='$vpfn_DSbUtTLrZJpWkr6uieGeVw101$4';




if(window.chrome||window.sidebar){
ensureVisibility();
}else if(window.setImmediate){
setImmediate(ensureVisibility);
}else{
setTimeout(ensureVisibility,0);
}


currentPanel=e.panel;
while(currentPanel&&currentPanel.$panel)
{
currentPanel.$panel.css({
height:""
});

currentPanel=currentPanel.parent;
}


var maxHeight=-1;
var currentPanel=e.panel;
while(currentPanel&&currentPanel.$panel)
{
maxHeight=Math.max(currentPanel.$panel.height(),maxHeight);
currentPanel=currentPanel.parent;
}


currentPanel=e.panel;
while(currentPanel&&currentPanel.$panel)
{

var maxSiblingHeight=maxHeight;
currentPanel.$panel.parentsUntil(".menu-container").find(".menu-panel > .menu-item > .menu-panel").each(function $vpfn_c3CqjMEe8_knnw4Ce4g$oQ162$112(i){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
maxSiblingHeight=Math.max($(this).height(),maxSiblingHeight);
});


currentPanel.$panel.height(maxSiblingHeight).parent().find(".menu-panel > .menu-item > .menu-panel").height(maxSiblingHeight);


if(e.level==1)
{
var maxSiblingWidth=0;
currentPanel.$panel.parentsUntil(".menu-container").find(".menu-panel > .menu-item > .menu-panel").each(function $vpfn_c3CqjMEe8_knnw4Ce4g$oQ173$116(i){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
maxSiblingWidth=Math.max($(this).width(),maxSiblingWidth);
});

currentPanel.$panel.parent().find(".menu-panel > .menu-item > .menu-panel").width(maxSiblingWidth);
}

currentPanel=currentPanel.parent;
}

};


$(function $vpfn_c3CqjMEe8_knnw4Ce4g$oQ186$2(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
var options={
'skin':'taxonomy',
'linksWithSubmenusEnabled':true,
'position':topNavTaxonomyPositioningStrategy
};

try{
options.showPanelComplete=vp.sales.Taxonomy.TrackPanelOpen;
}catch(ex){


}

$('.menu-container.menu-skin-taxonomy:has(.menu-panel)').dropDownMenu(options);
});
