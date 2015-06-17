                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                if(!window.__td){window.__MT=100;window.__ti=0;window.__td=[];window.__td.length=window.__MT;window.__noTrace=false;

}





if(typeof(vp)=="undefined")
{
var vp={};
}

if(!vp.widget)
{




vp.widget=function(){};
}


$(window).load(function $vpfn_E5tjSnIxJq69ftIlATX2bw24$15()
{if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
$("body").append("<div class='loading-box-message loading-box-preload'></div>");
});







vp.widget.showLoadingBox=function $vpfn_U0aacFKhptNHa4IMMowReg35$27(sMessage)
{if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
if(!window.__loadingBox)
{
window.__loadingBox=new vp.widget.LoadingBox();
}
window.__loadingBox.show(sMessage);
};






vp.widget.hideLoadingBox=function $vpfn_rpQ97z41plzxhEme3W4$EQ49$27()
{if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
if(window.__loadingBox)
{
window.__loadingBox.hide();
}
};







vp.widget.LoadingBox=function $vpfn_sgmmvjv5w1bJeqVbxZhxkg63$23()
{if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
var me=this;





this.message="";





this.skin="";





this.delay=300;





this.manualHide=false;






this.veilOpacity=0;

var _oLoadingBoxElement=null;
var _oLoadingBoxIframe=null;
var _oBackgroundBlock=null;

var _iShowTimer=null;

var _visible=false;






this.show=function $vpfn_M0HOsdCTBL6UPBOQ6FPL7w111$16(sMessage,iWidth)
{if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
if(_iShowTimer)
{
window.clearTimeout(_iShowTimer);
}

_visible=true;

var fnShow=function $vpfn_wkdAlLBT8LFCZEvDJE2XvQ120$21()
{if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
_show(sMessage);
};

if(this.delay<=0)
{
fnShow();
}
else
{
_iShowTimer=setTimeout(fnShow,this.delay);
}
};


var init=function $vpfn_hJotiTdT$NULhgoGzjFSVw136$15()
{if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
if(!_oLoadingBoxElement)
{

_oLoadingBoxElement=document.createElement("DIV");
$(_oLoadingBoxElement).addClass("loading-box-wrapper").html(
'<div class="loading-box">'+
'<div class="loading-box-inner">'+
'<span class="loading-box-message" id="progressBarMessage"></span>'+
'</div>'+
'</div>'
);
document.body.appendChild(_oLoadingBoxElement);

if(me.skin)
{
$(".loading-box").addClass("loading-box-skin-"+me.skin);
}


_oBackgroundBlock=document.createElement("DIV");
_oBackgroundBlock.setAttribute("unselectable","on");
var $oBackgroundBlock=$(_oBackgroundBlock);
if(me.veilOpacity>0)
{
$oBackgroundBlock.css("opacity",me.veilOpacity);
}
$oBackgroundBlock.addClass("loading-box-veil");


$oBackgroundBlock.on("mousedown",function $vpfn_E5tjSnIxJq69ftIlATX2bw167$46(event){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
event.preventDefault();
}).on("mouseup",function $vpfn_E5tjSnIxJq69ftIlATX2bw169$29(event){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
event.preventDefault();
}).on("click",function $vpfn_E5tjSnIxJq69ftIlATX2bw171$27(event){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
event.preventDefault();
});

document.body.appendChild(_oBackgroundBlock);
}
};


var _show=function $vpfn_hUOhBe0ERD1lPjqZSourXw180$16(sMessage,iWidth)
{if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}

if(!_visible)
{
return;
}


init();




if(sMessage)
{
me.message=sMessage;
}

var textArea=document.getElementById('progressBarMessage');
if(textArea)
{
textArea.innerHTML=me.message;
}




$(_oLoadingBoxElement).show();
$(_oBackgroundBlock).show();

var $window=$(window);
$window.on("resize",function $vpfn_E5tjSnIxJq69ftIlATX2bw212$29(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
me.redraw();
}).on("scroll",function $vpfn_E5tjSnIxJq69ftIlATX2bw214$24(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
me.redraw();
});

if(!me.manualHide)
{

$window.unload(function $vpfn_E5tjSnIxJq69ftIlATX2bw221$27(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
me.hide();
});

$(document).on("stop",function $vpfn_E5tjSnIxJq69ftIlATX2bw225$35(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
me.hide();
});
}

document.body.style.cursor='progress';

me.redraw();
};




this.hide=function $vpfn_Dnl1RgUwLvpj21JJuiK7dw238$16()
{if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
if(_iShowTimer)
{
window.clearTimeout(_iShowTimer);
}

if(_visible)
{
_visible=false;
}

if(_oLoadingBoxElement)
{
$(_oLoadingBoxElement).hide();
$(_oBackgroundBlock).hide();

var $window=$(window);
$window.off("resize",function $vpfn_E5tjSnIxJq69ftIlATX2bw256$34(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
me.redraw();
}).off("scroll",function $vpfn_E5tjSnIxJq69ftIlATX2bw258$29(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
me.redraw();
});
$(document).off("stop",function $vpfn_E5tjSnIxJq69ftIlATX2bw261$36(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
me.hide();
});

document.body.style.cursor='auto';
}
};





this.redraw=function $vpfn_3YgaYIEfQNHX$FN13_h8bg273$18()
{if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
var $window=$(window);
var $oLoadingBoxElement=$(_oLoadingBoxElement);
var loadingBoxRect=$oLoadingBoxElement.clientRect();

var iTop=Math.floor(($window.height()-loadingBoxRect.height)/2)+$window.scrollTop();
var iLeft=Math.floor(($window.width()-loadingBoxRect.width)/2)+$window.scrollLeft();

$oLoadingBoxElement.css("top",iTop);
$oLoadingBoxElement.css("left",iLeft);
};
};
