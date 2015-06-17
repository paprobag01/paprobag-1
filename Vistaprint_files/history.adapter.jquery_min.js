                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                







(function(window,undefined){
"use strict";


var
History=window.History=window.History||{},
jQuery=window.jQuery;


if(typeof History.Adapter!=='undefined'){
throw new Error('History.js Adapter has already been loaded...');
}


History.Adapter={







bind:function(el,event,callback){
jQuery(el).bind(event,callback);
},








trigger:function(el,event,extra){
jQuery(el).trigger(event,extra);
},








extractEventData:function(key,event,extra){

var result=(event&&event.originalEvent&&event.originalEvent[key])||(extra&&extra[key])||undefined;


return result;
},






onDomLoad:function(callback){
jQuery(callback);
}
};


if(typeof History.init!=='undefined'){
History.init();
}

})(window);

