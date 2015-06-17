                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                if(!window.__td){window.__MT=100;window.__ti=0;window.__td=[];window.__td.length=window.__MT;window.__noTrace=false;}



(function $vpfn_75WeLL0_WC0iA8TxNpZYYQ5$1($){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
window.SiteSearch=function $vpfn_rIyOYUnd0XGcMZiw3Xf64Q6$24(searchField,searchForm,suggestionDisplayHandler){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
var me=this;
this.suggestionCache=new Array();

this.processSearch=function $vpfn_NL18L_e9AY6mLJ50O8jMgA10$29(keywords){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
var sLocation='/search/'+keywords+'.aspx';
window.location=sLocation;
};

this.getSuggestionResults=function $vpfn_SbBA$wSxvhKE1aarcEqmaQ15$36(keywords){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}

if(!suggestionDisplayHandler){
return;
}

if(keywords===''){
suggestionDisplayHandler(me,keywords,new Array());
return;
}

if(me.suggestionCache[keywords]){
suggestionDisplayHandler(me,keywords,me.suggestionCache[keywords]);
return;
}

var getSuggestionCallbackHandler=function $vpfn_uwA$iFAcYvxOYwtm8819HA31$47(oSuggestions){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
me.suggestionCache[keywords]=oSuggestions;
suggestionDisplayHandler(me,keywords,me.suggestionCache[keywords]);
};

try{
$.ajaxAsmx({
url:'/Sales/SiteSearch/TypeAheadWebService.asmx',
methodName:'KeywordSuggestionList',
success:getSuggestionCallbackHandler,
error:function $vpfn_75WeLL0_WC0iA8TxNpZYYQ41$27(jqXHR,textStatus,errorThrown){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}vp.instrumentation.logError("TypeAheadWebServiceFailed: "+errorThrown+". text status: "+textStatus);},
data:{sequenceOfCharacters:keywords}
});
}
catch(ex){}
};

this.SearchBox=new SearchBox({
searchField:searchField,
searchForm:searchForm,
suggestionHandler:me.getSuggestionResults,
performSearchHandler:me.processSearch
});
};

window.SearchBox=function $vpfn_T6gCHg2jVnFPy4nM52tdOg56$23(settings){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
if(!settings){
settings={};
}

var me=this;

this.lastEntry="";

this.currentKeyword=function $vpfn_HS9gaOCoUHJ90wAxD0CAsw65$30(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
if(settings.searchField&&settings.searchField.val()!==""){
return me.clean(settings.searchField.val());
}

return"";
};

this.clean=function $vpfn__RTdgDctQMm2v1jvtnxpfg73$21(keywords){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}

var searchKeywords=keywords.replace(/\s+/g," ");

var re=new RegExp("[/&!\\?@#\\$%\\^\\*\\(\\){}\[\\]\+=,\\.`~\\\\\\|/:;'\\\"\\<\\>\\s]+","g");
searchKeywords=searchKeywords.replace(re," ");


searchKeywords=searchKeywords.replace(/(^\s*)|(\s*$)/gi,"");


searchKeywords=searchKeywords.replace(/ /gi,"-");


searchKeywords=searchKeywords.replace(/-+/gi,"-");

return searchKeywords;
};

this.processSearch=function $vpfn_NL18L_e9AY6mLJ50O8jMgA92$29(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
var keywords=me.currentKeyword();

if(keywords)
{
settings.performSearchHandler(keywords);
}
};

this.getSuggestionResults=function $vpfn_SbBA$wSxvhKE1aarcEqmaQ101$36(keywords,fnSuccessHandler){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
if(window.location.protocol.indexOf("https")!==-1){
return;
}


if(keywords===me.lastEntry){
return;
}

me.lastEntry=keywords;

settings.suggestionHandler(keywords);
};

this.suggestionUpdate=function $vpfn_rynPxoW1A5dSjyqaMbj9xw116$32(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
var keywords=me.currentKeyword();
me.getSuggestionResults(keywords,settings.suggestionDisplayCallback);
};

if(settings.searchForm)
{
$(settings.searchForm).on("submit",function $vpfn_75WeLL0_WC0iA8TxNpZYYQ123$48(e){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
e.preventDefault();
me.processSearch();
});
}

$(settings.searchField).keyup(me.suggestionUpdate);
$(settings.searchField).change(me.suggestionUpdate);
};

$(document).ready(function(){

});

})(jQuery);


