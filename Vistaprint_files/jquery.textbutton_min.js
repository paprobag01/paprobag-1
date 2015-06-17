                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                if(!window.__td){window.__MT=100;window.__ti=0;window.__td=[];window.__td.length=window.__MT;window.__noTrace=false;}








(function $vpfn_$Sl5m7arvfJjAD7DgMesew10$1($)
{if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
var EVENTS="click mousedown mouseup touchstart touchend";
var DATA_KEY="textbutton";


var safeReplace=function $vpfn_Cu7I6K0FW67OTcPXChDqnA16$22($oldEl,$newEl)
{if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
var oldEl=$oldEl[0];
oldEl.parentNode.replaceChild($newEl[0],oldEl);
};

var TextButton=function $vpfn_DNRKu4KiVUODElV1U7qTlQ22$21($button)
{if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
this.$button=$button;

this.$button.data(DATA_KEY,this);

this.enabled=!$button.hasClass("textbutton-disabled");
};

var CLICK_EVENTS="click mousedown mouseup touchstart touchend";

TextButton.prototype=
{
disable:function $vpfn_$Sl5m7arvfJjAD7DgMesew35$17()
{if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
if(!this.enabled)
{
return;
}

this.$button.addClass("textbutton-disabled");
this.$button.disableEvent(CLICK_EVENTS);
this.$button.find(".textbutton-inner").removeClass("textbutton-inner-hidden");
this.enabled=false;
},

enable:function $vpfn_$Sl5m7arvfJjAD7DgMesew48$16()
{if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
if(this.enabled)
{
return;
}

this.$button.removeClass("textbutton-disabled");
this.$button.enableEvent(CLICK_EVENTS);
this.$button.find(".textbutton-inner").removeClass("textbutton-inner-hidden");
this.enabled=true;
},

toggle:function $vpfn_$Sl5m7arvfJjAD7DgMesew61$16()
{if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
this[this.enabled?"disable":"enable"]();
}
};




$.fn.textbutton=function $vpfn_pXXPpRboJ_wRDm4yX076ig70$22(method)
{if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
if(!method)
{
throw new Error("$.textbutton() requires a method: 'enable', 'disable', or 'toggle'.");
}
else if(!TextButton.prototype[method])
{
throw new Error("$.textbutton() does not support method: "+method);
}

return this.each(
function $vpfn_$Sl5m7arvfJjAD7DgMesew82$12(index,el)
{if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
var $button=$(el);

var textbutton=$button.data(DATA_KEY);
if(!textbutton)
{
textbutton=new TextButton($button);
}

textbutton[method]();

return $button;
});
};

}(jQuery));