                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                if(!window.__td){window.__MT=100;window.__ti=0;window.__td=[];window.__td.length=window.__MT;window.__noTrace=false;}






$.ns("vp.tagmanager");

vp.tagmanager.PageManager=new(function $vpfn_llS4HFSlIQQGLOblRjMQDQ10$33($){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
var me=this;

var init=function(){
};

me.load=function $vpfn_Fv9rF9ryytpx6vzx$1QEOA16$14(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
$(document).on('onAnalyticsTagEvent',analyticsTagEventGlobalListener);
};


me.taggingLoaded=function $vpfn_5tr1byuzRWopG2KlcwqrPA21$23(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
return vp.tagmanager.TealiumManager.tealiumLoaded();
};


var analyticsTagEventGlobalListener=function $vpfn_DVavba2lOsLHeCL5DJ4oPQ26$42(e,data){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
try{
if(me.taggingLoaded()){
routeEvent(data);
}
else{
if(data.Callback){
data.Callback();
}
}
}
catch(e){}
};

me.handleEvent=function $vpfn_J62fNMzdSnK4l52$yMrpgQ40$21(data){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
if(me.taggingLoaded()){
routeEvent(data);
}
};

me.eventQueue=[];
me.handleQueue=function $vpfn_MHhSFkgUBGzi5IEcA_GVGA47$21(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
if(me.taggingLoaded()){
for(var i=0;i<me.eventQueue.length;i++){
routeEvent(me.eventQueue[i]);
}
me.eventQueue=[];
}else if(me.eventQueue.length>0){
setTimeout(me.handleQueue,120);
}
};

me.handleLoadEvent=function $vpfn_VyFSN3yOqLoUkPzmCv9rRw58$25(data){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
me.eventQueue.push(data);
me.handleQueue();
};

var routeEvent=function $vpfn_K_m5lJxX64bnjJEtDZYDMQ63$21(data){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
var tagActions={
'custom link':vp.tagmanager.TealiumManager.LinkTagAction,
'download link':vp.tagmanager.TealiumManager.LinkTagAction,
'exit link':vp.tagmanager.TealiumManager.LinkTagAction,
'custom view':vp.tagmanager.TealiumManager.ViewTagAction,
'custom event':vp.tagmanager.TealiumManager.CustomTagAction
};

if(data.EventType in tagActions){
tagActions[data.EventType](data);
}
};

init();

})(jQuery);
