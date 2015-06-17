                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                if(!window.__td){window.__MT=100;window.__ti=0;window.__td=[];window.__td.length=window.__MT;window.__noTrace=false;}



(function $vpfn_vZllApss_AJ5xu1WGv3nZw5$1($){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}

var JAVASCRIPT_PREFIX="javascript:";

var clickHandler=function $vpfn_2OMtfOrpD2w9J$tCFu7sFg9$23(e){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}


var $area=$(this);


var $button=$area.find($area.attr("data-click-child"));
if($button.length===0){
return;
}



if(e.target===$button[0]){
return;
}


if(e.target.tagName=="A"||$(e.target).parents("a").length>0){
return;
}

var button=$button[0];
if(button.click){


button.click();

}else{





var clickEvent=$.Event("click");

$button.trigger(clickEvent);

var href=$button.attr("href");

if(href&&!clickEvent.isDefaultPrevented()){

if(href.indexOf(JAVASCRIPT_PREFIX)===0){
var script=href.substr(JAVASCRIPT_PREFIX);
window.eval(script);
return;
}

document.location=href;
}
}

};


var mouseupHandler=function $vpfn_okAwz9dHFbooZOoai4yaPA64$25(e){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
if(e.which==2){
clickHandler.call(this,e);
}
};

$(document).on("mouseup","[data-click-child]",mouseupHandler);
$(document).on("click","[data-click-child]",clickHandler);

})(jQuery);
