                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                



(function($){

var EVENTS_KEY="breakpoints-events";

var setupEvents=function(el,breakpoints){
var $el=$(el);


if($el.data(EVENTS_KEY)){
return;
}

$el.data(EVENTS_KEY,true);

var update=function(e){


if(e&&e.target&&!$.isWindow(e.target)){
if(e.target!==$el[0]&&!$.contains(e.target,$el[0])){
return;
}
}

skinny.breakpoints.update(el,breakpoints);
};

$(document).ready(update);
$(window).on("resize orientationchange breakpoints:refresh",update);
};


$.fn.breakpoints=function(breakpoints){
this.each(function(i,el){
var bp=skinny.breakpoints.setup(el,breakpoints);
setupEvents(el,bp);
});

return this;
};

$(document).ready(function(){


$.each(skinny.breakpoints.all,function(i,item){
setupEvents(item.el,item.breakpoints);
});


$("[data-breakpoints]").breakpoints();
});

})(jQuery);
