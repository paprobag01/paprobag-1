                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                if(!window.__td){window.__MT=100;window.__ti=0;window.__td=[];window.__td.length=window.__MT;window.__noTrace=false;}





$.ns("vp.tagmanager");

vp.tagmanager.TealiumManager=new(function $vpfn_ruoTdS8Jo1aiJE_JQp71rw9$36($)
{if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
var me=this;

var init=function $vpfn_TENNbW5wl10GrmCllT8X4g13$15(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
me.datalayerObj=window.utag_data;
};

me.load=function $vpfn_iaKbZkubAgPiVkwakk_0WQ17$14(mode,url){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
me.url=url;
var body=document.body||document.getElementsByTagName('body')[0];




var script=document.createElement("script");
script.src=me.url;
script.type="text/javascript";

function SetScriptAsync(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
script.async=true;
};SetScriptAsync._vpfn='$vpfn_w6ebRDrNvDbSe147sqv$oQ28$8';

function AppendScript(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
if(body){
body.appendChild(script);
}
else{
document.documentElement.appendChild(script);
}
};AppendScript._vpfn='$vpfn_6iOUqPosG9g3PGvYYdmdHg32$8';

function AppendScriptWithDelay(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
var delayWrapper=function $vpfn_bNXQ1guIGJTM5Qs2K4gw7Q42$29(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
AppendScript();
};
$.afterLoad(delayWrapper,10);
};AppendScriptWithDelay._vpfn='$vpfn_SeaV20m5ui0F3AU_X5huFA41$8';

function IncludeSync(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
AppendScript();
};IncludeSync._vpfn='$vpfn_k8yUQSYUIv9E$tJhBRwphw48$8';

function IncludeAsync(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
SetScriptAsync();
AppendScript();
};IncludeAsync._vpfn='$vpfn_bmpW5ClbgU10eGGhmH24pg52$8';

function OnLoadSync(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
AppendScriptWithDelay();
};OnLoadSync._vpfn='$vpfn_SX6zFJTkP84wd3AhnBWACg57$8';

function OnLoadAsync(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
SetScriptAsync();
AppendScriptWithDelay();
};OnLoadAsync._vpfn='$vpfn_Pz79TA2s5ml93vaT4awG7A61$8';

var loadMethod={
"INCLUDESYNC":IncludeSync,
"INCLUDEASYNC":IncludeAsync,
"ONLOADSYNC":OnLoadSync,
"ONLOADASYNC":OnLoadAsync
};

if(typeof mode==='string'||mode instanceof String){
mode=mode.toUpperCase();
if(mode in loadMethod){
loadMethod[mode]();
}
}

};

me.tealiumLoaded=function $vpfn_VAUtjWJ74aqnRcW$eHYkiQ82$23(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
return(typeof window.utag!=="undefined");
};



var AddData=function $vpfn_JbdKPDjRqcoRVN0H_egThw88$18(outputData,inputData){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
if(inputData){
for(var inputKey in inputData){
outputData[inputKey]=inputData[inputKey];
}
}
};




me.LinkTagAction=function $vpfn_lOgbOrjTeLDqBsecZVdWzA99$23(data){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
var linkData={};
linkData.link_type=data.EventType;
linkData.link_name=data.EventName;
linkData.EventName=data.EventName;
if(data.CustomEventData){
AddData(linkData,data.CustomEventData);
}
window.utag.link(linkData);
};



me.CustomTagAction=function $vpfn_tUZQDml9zlZB27KTOV3qkA112$25(data){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
if(data.CustomEventData){
window.utag.track(data.EventName,data.CustomEventData);
}
else{
var emptyData={};
window.utag.track(data.EventName,emptyData);
}
};



me.ViewTagAction=function $vpfn_8Or514nwLveDgaVCfSDZBA124$23(data){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
if(data.CustomEventData){
window.utag.view(data.CustomEventData);
}
};

init();

})(jQuery);
