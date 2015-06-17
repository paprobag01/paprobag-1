                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                if(!window.__td){window.__MT=100;window.__ti=0;window.__td=[];window.__td.length=window.__MT;window.__noTrace=false;}



(function $vpfn_4_N0thpprMzfAMVPYEKKKQ5$1($,vp,undefined){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
var dummyStyle=document.createElement('div').style,
vendor=(function $vpfn_4_N0thpprMzfAMVPYEKKKQ7$14(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
var vendors='t,webkitT,MozT,msT,OT'.split(',');

for(var i=0;i<vendors.length;i++){
var t=vendors[i]+'ransform';
if(t in dummyStyle){
return vendors[i].substr(0,vendors[i].length-1);
}
}

return false;
})(),

prefixStyle=function $vpfn_WcYaQ1cnx7KkOkRnicyv4Q20$18(style){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
if(vendor===''||vendor===false){
return style;
}

style=style.charAt(0).toUpperCase()+style.substr(1);
return vendor+style;
},


transform=prefixStyle('transform'),
transitionDuration=prefixStyle('transitionDuration'),



hasTouch='ontouchstart'in window||navigator.pointerEnabled||navigator.msPointerEnabled,
resizeEvent='onorientationchange'in window?'orientationchange resize':'resize',



outerMeasurement=function $vpfn_3uWv$3QYPADTimS5bDPjMg40$23(self,slide){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
return self.options.vertical?$(slide).outerHeight(true):$(slide).outerWidth(true);
},


innerMeasurement=function $vpfn_jEsrq7EBdhEdnJwXYLj7ug45$23(self,slide){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
return self.options.vertical?$(slide).innerHeight():$(slide).innerWidth();
},



getFixedSlideWidth=function $vpfn_aMaiHz7A65smYuYN50Dctw51$25(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
var width=0;
var vw=$(window).width();
var widthPortrait=vw-PORTRAIT_WIDTH_PADDING;
var widthLandscape=vw-LANDSCAPE_WIDTH_PADDING;

if('onorientationchange'in window){
width=(window.orientation===0||window.orientation===180)?widthPortrait:widthLandscape;
}else{

width=widthPortrait;
}
return width;
},




setFixedSlideWidth=function $vpfn_ZPskp2ZavIcaSrY8USqjRA69$25(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
if(isViewPortWidthFixed){
$(".vpslideshow-slide").width(getFixedSlideWidth());
}
},



bindAll=function $vpfn_a_LYJWWaEFZCeBeriO05PA77$14(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
var args=Array.prototype.slice.call(arguments);
var object=args.shift();
for(var i=0,l=args.length;i<l;i++){
var method=args[i];
object[method]=$.proxy(object[method],object);
}
};


var NORTH='north',
EAST='east',
SOUTH='south',
WEST='west';


var SLIDES_CONTAINER_PADDING=20,
SPACER_WIDTH=1000;

var SLIDE_WIDTH_MIN_INVALID=20;
var PORTRAIT_WIDTH_PADDING=78;
var LANDSCAPE_WIDTH_PADDING=140;












vp.slideshow=function $vpfn_RX3i$fJ_a3Vt2BvwXKoDYg111$19(wrapper,options){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
var me=this;


bindAll(this,'resize','__onWindowResize','__handleEvent','__onWheel','__onScroll','__midScroll','toggleDrawer');


this.wrapper=$(wrapper).addClass('vpslideshow').removeClass('vpslideshow-not-initialized');


this.__fixOptions(options);


this.wrapper.addClass(this.options.vertical?'vpslideshow-vertical':'vpslideshow-horizontal');


if(this.options.agile){
this.wrapper.addClass('vpslideshow-agile');
}


this.slider=(function $vpfn_4_N0thpprMzfAMVPYEKKKQ132$23(wrapper){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
var slider=wrapper.find('.vpslideshow-slider');
if(slider.length===0){
return $('<div class="vpslideshow-slider"><div class="vpslideshow-slides-container"></div></div>').appendTo(wrapper);
}else{
return slider;
}
})(this.wrapper);


this.slidesContainer=this.slider.find('.vpslideshow-slides-container');


this.__setupEvents();


this.page=this.options.startIndex||0;


this.resize();


$(window).on(resizeEvent,this.__onWindowResize);


if(this.options.numberOfSlides>1){

if(hasTouch&&'ontouchstart'in window){
this.slider.on('touchstart touchmove touchend touchcancel',this.__handleEvent);
}









else if(navigator.pointerEnabled||navigator.msPointerEnabled){


this.slider.on('scroll',this.__onScroll);
this.__enableScrolling=true;
}







this.wrapper.find('.vpslideshow-drawer-toggle').on('click',this.toggleDrawer);
}else{

this.wrapper.find('.vpslideshow-drawer-toggle').hide();
}


if(!this.options.loop&&this.options.numberOfSlides>1){
this.on('flip',function $vpfn_4_N0thpprMzfAMVPYEKKKQ192$28(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
var back=me.wrapper.find('.vpslideshow-button-back'),
forward=me.wrapper.find('.vpslideshow-button-forward');

if(me.page===0){
back.addClass('disabled');
}else{
back.removeClass('disabled');
}

if(me.page===me.options.numberOfSlides-1){
forward.addClass('disabled');
}else{
forward.removeClass('disabled');
}
});

if(this.options.startIndex===0){
this.wrapper.find('.vpslideshow-button-back').addClass('disabled');
}else if(this.options.startIndex===this.numberOfSlides-1){
this.wrapper.find('.vpslideshow-button-forward').addClass('disabled');
}
}else if(!this.options.loop){
me.wrapper.find('.vpslideshow-button-back, .vpslideshow-button-forward').addClass('disabled');
}


if(this.options.numberOfSlides>1){
this.__resetTimer();
}


if(!windowLoaded){
$(window).load(this.resize);

if(this.options.autoOpen&&this.options.numberOfSlides>1){
$(window).load($.proxy(function $vpfn_4_N0thpprMzfAMVPYEKKKQ228$39(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
setTimeout(this.toggleDrawer,300);
},this));
}
}



this.wrapper.on('resize',this.resize);
};


vp.slideshow.prototype.options={
animationSpeed:undefined,
autoHeight:false,
autoWidth:false,
frameSpeed:undefined,
loop:true,
agile:false,
numberOfSlides:undefined,
snapThreshold:'15%',
easing:'swing',
startIndex:0,
zoom:false,
zoomScale:0.9,
vertical:false
};


var windowLoaded=false;

var isViewPortWidthFixed=false;
var viewPortWidthFixed=0;


vp.slideshow.prototype.xy=0;


vp.slideshow.prototype.page=0;


vp.slideshow.prototype.paused=false;


vp.slideshow.prototype.__customEvents=[];


vp.slideshow.prototype.__fixOptions=function $vpfn_33OLomGn7Kaef5Y14hxDQA275$42(options){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}

this.options=$.extend({},this.options,options);


if(this.options.numberOfSlides===undefined){

this.slides=this.wrapper.find('.vpslideshow-slide');
this.options.numberOfSlides=this.slides.length;
}


if(this.options.numberOfSlides===0){
throw new Error('vp.slideshow: cannot pass numberOfSlides as undefined without any slides.');
}


if(!this.slides||this.slides.length===0){
this.slides={};
}


if(this.options.animationSpeed===-1||this.options.animationSpeed===undefined){
this.options.animationSpeed=400;
}



if(this.options.numberOfSlides===1||!this.options.loop){
this.options.frameSpeed=-1;
this.options.loop=false;
}

if(this.options.zoom){


this.wrapper.addClass('vpslideshow-zoom vpslideshow-zoom-animate');
}


if(this.options.frameSpeed===undefined){
this.options.frameSpeed=this.wrapper.find('.playpause').length===0?0:4000;
}


if(!jQuery.easing[this.options.easing]){
this.options.easing='swing';
}
};


vp.slideshow.prototype.__setupEvents=function $vpfn_to1kj2L0xbj0_Oo01_a6qA326$43(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
var me=this;


this.wrapper.find('.slidebutton').each(function $vpfn_4_N0thpprMzfAMVPYEKKKQ330$47(index){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
$(this).click($.proxy(function $vpfn_4_N0thpprMzfAMVPYEKKKQ331$34(e){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
e.preventDefault();
this.move(index);
},me));
});


this.wrapper.find('.playpause').on('click',$.proxy(function $vpfn_4_N0thpprMzfAMVPYEKKKQ338$60(event){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
event.preventDefault();
this.pause();
},this));


this.wrapper.find('.vpslideshow-button-forward').on('click',$.proxy(function $vpfn_4_N0thpprMzfAMVPYEKKKQ344$77(event){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
event.preventDefault();
this.next();
},this));


this.wrapper.find('.vpslideshow-button-back').on('click',$.proxy(function $vpfn_4_N0thpprMzfAMVPYEKKKQ350$74(event){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
event.preventDefault();
this.prev();
},this));
};











vp.slideshow.prototype.on=function $vpfn_cKPninVLeU_s_bxoeU2pKA366$32(type,fn){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
type=type.toLowerCase();
this.wrapper.on('slideshow-'+type,fn);
this.__customEvents.push([type,fn]);
return this;
};

















vp.slideshow.prototype.__event=function $vpfn_qWZyj7Oi7wjzKNJMyUrAsQ389$37(type){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
this.wrapper.trigger('slideshow-'+type.toLowerCase(),this);
};



vp.slideshow.prototype.__autoSize=function $vpfn_RJ0Dugh1tpXDEwIOoxKcLg395$40(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}

if(!this.options.autoWidth&&!this.options.autoHeight){
return;
}


var maxDims={width:0,height:0};



for(var i in this.slides){
i=parseInt(i,10);
if(this.slides[i]&&!isNaN(i)){
var dims=this.__get(i).clientRect();

if(dims.width>maxDims.width){
maxDims.width=dims.width;
}

if(dims.height>maxDims.height){
maxDims.height=dims.height;
}
}
}

if(this.options.autoWidth&&maxDims.width>0){
this.wrapper.css('width',maxDims.width);
}

if(this.options.autoHeight&&maxDims.height>0){
this.wrapper.css('height',maxDims.height);
}


if((maxDims.height===0&&this.options.autoHeight)||(maxDims.width===0&&this.options.autoWidth)){
setTimeout($.proxy(this.detectFrameSize,this),200);
}
};


vp.slideshow.prototype.__refreshSize=function $vpfn_nOCLq_sZ275CqXsJRRO2AA436$43(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}

this.__autoSize();


this.sliderWidth=this.options.vertical?this.slider.height():this.slider.width();


this.slidesContainer.find('.vpslideshow-dynamic').trigger('slideshow:resize');






var innerWidth=this.options.numberOfSlides>1?Math.max(
innerMeasurement(this,this.__get(0)),
innerMeasurement(this,this.__get(1))
):innerMeasurement(this,this.__get(0));

function isViewPortWidthBrowserBug(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
return(innerWidth<=SLIDE_WIDTH_MIN_INVALID)||isViewPortWidthFixed;
}isViewPortWidthBrowserBug._vpfn='$vpfn_Y$P6fl3RzRRu97YGYgUSJA456$8';

if(isViewPortWidthBrowserBug()){

if(!isViewPortWidthFixed){
viewPortWidthFixed=getFixedSlideWidth();
isViewPortWidthFixed=true;
}

this.slideWidth=viewPortWidthFixed;
}
else{
isViewPortWidthFixed=false;


this.slideWidth=this.options.numberOfSlides>1?Math.max(
outerMeasurement(this,this.__get(0)),
outerMeasurement(this,this.__get(1))
):outerMeasurement(this,this.__get(0));
}






this.maxTranslate=(function $vpfn_4_N0thpprMzfAMVPYEKKKQ484$29(self){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}


if(self.options.numberOfSlides===1){
return self.slideWidth;
}else if(self.options.agile&&!isViewPortWidthFixed){
var sum=0;
$.each(self.slides,function $vpfn_4_N0thpprMzfAMVPYEKKKQ491$36(i,slide){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
if(slide!==undefined){
sum+=outerMeasurement(self,slide);
}
});
return sum;
}else{
return self.slideWidth*self.options.numberOfSlides;
}
})(this);


if(!this.options.vertical){

this.slidesContainer.width(this.maxTranslate+(this.spacer?SPACER_WIDTH:0)+SLIDES_CONTAINER_PADDING);
}
};






vp.slideshow.prototype.updateSlideCount=function $vpfn_HUH1j7$7aCetpGJgz_lFqA514$46(n,previousSlidesHaveChanged){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
this.options.numberOfSlides=n;

if(previousSlidesHaveChanged){
this.page=null;
this.slides={};
this.slidesContainer.find('.vpslideshow-slide').remove();
}
};



vp.slideshow.prototype.__resetTimer=function $vpfn_EGjVNUvV_rqbG6H_C63dhA526$42(pauseTimer){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
if(this.timer){
clearTimeout(this.timer);
}

if(!pauseTimer&&!this.paused&&this.options.frameSpeed>0){
this.timer=setTimeout($.proxy(this.next,this),this.options.frameSpeed);
}
};


vp.slideshow.prototype.move=function $vpfn_b1njXBNYrwVw5bx9T7txhQ537$34(p,animate){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}

if(p>=this.options.numberOfSlides||p<0||p===this.page){
return;
}


this.__resetTimer();


this.__checkPosition(p,animate!==false);
};






vp.slideshow.prototype.__scale=function $vpfn_5KDNf6bNbtp5cG7kfAThLQ555$37(i,scale){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
var m=this.__get(i);



if(navigator.userAgent.indexOf('MSIE 9.0')>-1){
m.css('zoom',scale);
}else{
m.css(transform,'scale('+scale+')');
}
return this;
};





vp.slideshow.prototype.__scaleReset=function $vpfn_TzP5X1s8TfH4c_gimSsmuA572$42(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
this.slides
.css(transitionDuration,'')
.css(transform,'')
.css('zoom','');
return this;
};


vp.slideshow.prototype.__handleEvent=function $vpfn_YnKAsC6meNQRzipfnZeeXA581$43(e){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}

switch(e.type.toLowerCase()){
case'touchstart':
case'pointerdown':
case'mspointerdown':
case'mousedown':
if((e.type=='mousedown'&&e.button===0)||e.type!='mousedown'){
this.__start(e.originalEvent||e);
}
break;

case'touchmove':
case'pointermove':
case'mspointermove':
case'mousemove':
this.__move(e.originalEvent||e);
break;

case'touchcancel':
case'touchend':
case'pointerup':
case'pointercancel':
case'mspointerup':
case'mspointercancel':
case'mouseup':
case'mouseout':
this.__end(e.originalEvent||e);
break;

default:
break;
}
};









vp.slideshow.prototype.__pos=function $vpfn_qHeZcl2VOv97L33XzhNgLQ624$35(pos,animationSpeed,fireEvent){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
this.xy=pos;

var onComplete=fireEvent===false?function(){}:$.proxy(function $vpfn_4_N0thpprMzfAMVPYEKKKQ627$73(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
this.animating=false;
this.__resetTimer();
this.__flip();


if(this.__enableScrolling){
setTimeout($.proxy(function $vpfn_4_N0thpprMzfAMVPYEKKKQ634$35(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
this.slider.on('scroll',this.__onScroll);
},this),50);
}
},this);


if(this.__enableScrolling){
this.slider.off('scroll',this.__onScroll);
}


this.slider.stop();


this.animating=true;

if(animationSpeed>0){
var set={};

if(this.options.vertical){
set.scrollTop=pos;
}else{
set.scrollLeft=pos;
}

this.slider.animate(set,animationSpeed,this.options.easing,onComplete);
}else{
if(this.options.vertical){
this.slider.scrollTop(pos);
}else{
this.slider.scrollLeft(pos);
}

onComplete();
}
};


vp.slideshow.prototype.resize=function $vpfn_jkScj$mhv1IMhUWXdPJwsw673$36(event){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}


if(event){
event.stopPropagation();
}


this.__refreshSize();

setFixedSlideWidth();


this.__checkPosition(this.page,false);
};


vp.slideshow.prototype.__onWindowResize=function $vpfn_RylHoMBKVg7_n3KIIDdw0w690$46(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}


if(this._viewportSize&&
$(window).height()==this._viewportSize.height&&
$(window).width()==this._viewportSize.width){
return;
}

this._viewportSize={
height:$(window).height(),
width:$(window).width()
};

this.resize();
};




























vp.slideshow.prototype.__onScroll=function $vpfn_LdvnHj2V2eX7sQAyD0uMfA734$40(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}

this.__resetTimer(true);


if(this.__onScrollTimer){
clearTimeout(this.__onScrollTimer);
this.__onScrollTimer=null;
}


if(this.__midScrollTimer===undefined||this.__midScrollTimer===null){
this.__midScrollTimer=setTimeout($.proxy(this.__midScroll,this),100);
}


this.__onScrollTimer=setTimeout($.proxy(this.__onScrollEnd,this),150);



};



vp.slideshow.prototype.__midScroll=function $vpfn_pEWns_YPGNZnksnG7Fw8hA758$41(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
var xy=this.__scrollOffset();
var slideIndexes=this.__slideAt(xy,false);

while(slideIndexes.length){
var slideIndex=slideIndexes.shift();
this.__get(slideIndex);
}


if(this.__midScrollTimer!==null){
this.__midScrollTimer=setTimeout($.proxy(this.__midScroll,this),100);
}
};


vp.slideshow.prototype.__onScrollEnd=function $vpfn_ip5uFMql77F9AKKrOh67xw774$43(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}

if(this.__midScrollTimer){
clearTimeout(this.__midScrollTimer);
this.__midScrollTimer=null;
}


var xy=this.__scrollOffset();


if(this.xy===xy){
return;
}


var slideIndex=this.__slideAt(xy);



this.__checkPosition(slideIndex,true);



this.__resetTimer();
};





vp.slideshow.prototype.__slideAt=function $vpfn_4WvwWWIlomikZXm$e0FWKw805$39(xy,mostVisible){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
var mostVisibleItem=0;
var greatestVisibility=0;
var visibles=[];

if(xy===0&&mostVisible!==false){
return this.__get(0);
}

var scrollOffset=this.__scrollOffset();

for(var i in this.slides){
i=parseInt(i,10);
if(this.slides[i]&&!isNaN(i)){
var slide=this.__get(i);
var percentage=this.__getVisiblePercentage(slide,scrollOffset);


if(percentage>0){
visibles.push(i);


if(percentage>greatestVisibility){
greatestVisibility=percentage;
mostVisibleItem=i;
}
}
}
}

return mostVisible===false?visibles:mostVisibleItem;
};


vp.slideshow.prototype.__getVisiblePercentage=function $vpfn_rDzYDPephm6qbUt4pZahEA839$52(slide,scrollOffset){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
scrollOffset=scrollOffset||this.__scrollOffset();
var dimension=outerMeasurement(this,slide);


var position=this.__calcSlideOffset(slide);

var checkRightHalfOfSlide=position+dimension>0;
var checkLeftHalfOfSlide=position-scrollOffset<this.sliderWidth;


if(!checkRightHalfOfSlide&&!checkLeftHalfOfSlide){
return 0;
}

var visiblePixels=0;


if(position<0){


if(position+dimension<this.sliderWidth){
visiblePixels=position+dimension;
}else{

return 1;
}
}else if(position+dimension>this.sliderWidth){

visiblePixels=this.sliderWidth-position;
}else{
return 1;
}


return visiblePixels/dimension;
};

vp.slideshow.prototype.__start=function $vpfn_FJNK9K1Jrq7NMynYCXYYow877$37(e){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
if(this.initiated){
return;
}


if(this.animating){
this.slider.stop();
this.animating=false;
this.xy=this.__scrollOffset();
}

var point=hasTouch&&e.touches?e.touches[0]:e;

this.initiated=true;

this.moved=false;
this.thresholdExceeded=false;
this.startX=point.pageX;
this.startY=point.pageY;
this.pointX=point.pageX;
this.pointY=point.pageY;
this.stepsX=0;
this.stepsY=0;
this.direction=0;
this.directionLocked=false;
this.lastX=this.xy;

this.__resetTimer(true);

this.__event('touchstart');
setFixedSlideWidth();
};

vp.slideshow.prototype.__move=function $vpfn_qgSMK0tKEGvr85zYzpDB1g911$36(e){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
if(!this.initiated){
return;
}


if(this.animating){
this.slider.stop();
this.animating=false;
}




if(e.type==='touchmove'){
if(this.__midScrollTimer===undefined||this.__midScrollTimer===null){
this.__midScrollTimer=setTimeout(this.__midScroll,100);
}
}

var point=hasTouch&&e.touches?e.touches[0]:e,
deltaX=this.pointX-point.pageX,
deltaY=this.pointY-point.pageY,
delta=this.options.vertical?deltaY:deltaX,
direction=this.options.vertical?point.pageY-this.startY:point.pageX-this.startX,
newPos=this.options.vertical?this.xy+deltaY:this.xy+deltaX,
dist=Math.abs(this.options.vertical?point.pageY-this.startY:point.pageX-this.startX);

this.moved=true;
this.pointX=point.pageX;
this.pointY=point.pageY;
this.direction=direction>0?WEST:direction<0?EAST:0;
this.stepsX+=Math.abs(deltaX);
this.stepsY+=Math.abs(deltaY);


if(!this.directionLocked&&!this.options.vertical&&this.stepsY>this.stepsX){
this.initiated=false;
return;
}


if(e.preventDefault){
e.preventDefault();
}

this.directionLocked=true;



if(newPos<0||newPos>this.maxTranslate){
newPos=this.xy+(delta/2);
}

var slideWidth=$(this.slides[this.page]).width();


this.snapThreshold=Math.round(slideWidth*(this.options.snapThreshold.replace('%','')/100));

if(!this.thresholdExceeded&&dist>=this.snapThreshold){
this.thresholdExceeded=true;
this.__event('moveout');
}
else if(this.thresholdExceeded&&dist<this.snapThreshold){
this.thresholdExceeded=false;
this.__event('movein');
}

this.__pos(newPos,0,false);




















};

vp.slideshow.prototype.__end=function $vpfn_p7cc9RS2qFnHj4b8vfDxSw1002$35(e){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
if(!this.initiated){
return;
}

var point=hasTouch&&e.changedTouches?e.changedTouches[0]:e,
dist=Math.abs(this.options.vertical?point.pageY-this.startY:point.pageX-this.startX);




this.initiated=false;

if(!this.moved){
this.__event('touchend');
return;
}
















if(this.options.zoom&&this.direction!==0){
var slide;
this.wrapper.addClass('vpslideshow-zoom-animate');


if(this.direction===WEST){
slide=this.slides[this.page+1];
}
else if(this.direction===EAST){
slide=this.slides[this.page-1];
}

$(slide).css(transform,'');
}

var slideWidth=$(this.slides[this.page]).width();


if(this.__withinThreshold(dist)){
var animationSpeed=Math.min(this.options.animationSpeed,Math.floor(300*dist/this.snapThreshold));
this.__pos(this.lastX,animationSpeed,false);
}


else if(dist<slideWidth){
this.__checkPosition(this.direction);
}



else{









this.__checkPosition(this.__slideAt(this.__scrollOffset()));
}
};




vp.slideshow.prototype.__withinThreshold=function $vpfn_tHKK$YxssbEnWOvribnpUA1082$47(dist){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
if(!this.options.loop&&(this.xy<0||this.xy>this.maxTranslate)){
return true;
}

if(!this.options.loop&&((this.page===0&&this.direction===WEST)||(this.page===this.numberOfSlides-1&&this.direction===EAST))){
return true;
}

return dist<this.snapThreshold;
};




vp.slideshow.prototype.__checkPosition=function $vpfn_bpTYfcftbpFASLZpoVURXQ1097$45(indexOrDirection,animate){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}

animate=animate!==false;


var deactivatedSlide=this.wrapper.find('.vpslideshow-slide-active');





var animationDirection=this.options.vertical?SOUTH:EAST;
var orderChanged=false;
var slide;
var newX;


if(typeof indexOrDirection==='number'){
this.page=indexOrDirection;
slide=this.__get(this.page);
}else{
var attempt=0;
while(attempt<5){
attempt++;

if(indexOrDirection===EAST||indexOrDirection===SOUTH){
this.page++;
animationDirection=indexOrDirection;
}
else if(indexOrDirection===WEST||indexOrDirection===NORTH){
this.page--;
animationDirection=indexOrDirection;
}


if(this.page>this.options.numberOfSlides-1){
this.page=this.options.loop?0:this.options.numberOfSlides-1;
}else if(this.page<0){
this.page=this.options.loop?this.options.numberOfSlides-1:0;
}

slide=this.__get(this.page);




if(this.options.agile&&this.__getVisiblePercentage(slide)>0.9){
continue;
}

if(!this.spacer){
newX=this.__calcPosition(slide);


if(newX<0&&this.page!==0){
this.page=0;
slide=this.__get(this.page);
newX=0;




}
}

break;
}
}


var removeSpacer=$.proxy(function $vpfn_4_N0thpprMzfAMVPYEKKKQ1167$35(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
if(this.spacer){
this.spacer.remove();
delete this.spacer;


orderChanged=true;


this.slidesContainer.width(this.maxTranslate+SLIDES_CONTAINER_PADDING);
}
},this);


var createSpacer=$.proxy(function $vpfn_4_N0thpprMzfAMVPYEKKKQ1181$35(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
removeSpacer();

if(!this.options.vertical){

this.slidesContainer.width(this.maxTranslate+SPACER_WIDTH+SLIDES_CONTAINER_PADDING);


this.spacer=$('<div id="vpslideshow-spacer">');


return true;
}
},this);


if(this.page===this.options.numberOfSlides-1&&slide.data('moved')){

slide.removeData('moved').appendTo(this.slidesContainer);
removeSpacer();
}else if(this.page===0&&slide.data('moved')){

slide.removeData('moved').prependTo(this.slidesContainer);
removeSpacer();
}


var next=this.__get(this.page===this.options.numberOfSlides-1?0:this.page+1);
var prev=this.__get(this.page===0?this.options.numberOfSlides-1:this.page-1);



if(this.options.loop){
if(!prev.is(next)||animationDirection==='west'){
if(this.page===this.options.numberOfSlides-1){
if(!next.data('moved')){
if(createSpacer()){
this.spacer.insertAfter(slide);
}

next.data('moved',true).insertAfter(slide);
orderChanged=true;
}
}else if(next.data('moved')){
next.removeData('moved').insertAfter(slide);
orderChanged=true;
}
}

if(!prev.is(next)||animationDirection==='east'){
if(this.page===0){
if(!prev.data('moved')){
if(createSpacer()){
this.spacer.insertBefore(slide);
}

prev.data('moved',true).insertBefore(slide);
orderChanged=true;
}
}else if(prev.data('moved')){
prev.removeData('moved').insertBefore(slide);
orderChanged=true;
}
}
}

if(deactivatedSlide.length>0&&!deactivatedSlide.is(slide)){

if(orderChanged&&animate){
this.__pos(this.__calcPosition(deactivatedSlide),false,false);
}


deactivatedSlide.removeClass('vpslideshow-slide-active');
}


newX=this.__calcPosition(slide);


slide.addClass('vpslideshow-slide-active');
this.__changedSlide();


if(this.xy!=newX){

if(!animate&&this.options.zoom){
this.wrapper.removeClass('vpslideshow-zoom-animate');
this.__scaleReset();
}


this.__pos(newX,animate?this.options.animationSpeed:0,true);


if(!animate&&this.options.zoom){
this.wrapper.addClass('vpslideshow-zoom-animate');
}
}
};


vp.slideshow.prototype.__calcPosition=function $vpfn_FiEHmwM06adckABcTpw6vg1283$44(slide){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
var directionalProperty=this.options.vertical?'top':'left';
var slideOffsetLeft=this.__calcSlideOffset(slide);
var sliderToSlideHalfDelta=this.__calcSliderToSlideOffset(this.page);
var slideshowPadding=0;


var newX=Math.round(slideOffsetLeft-slideshowPadding+this.__scrollOffset()-sliderToSlideHalfDelta);

return newX;
};


vp.slideshow.prototype.__scrollOffset=function $vpfn_H$wlhH8PNjDrG5umGv9MVw1296$44(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
return this.options.vertical?this.slider.scrollTop():this.slider.scrollLeft();
};


vp.slideshow.prototype.__calcSlideOffset=function $vpfn_xzX066sTq1J_hmui4kB9hA1301$47(slide,direction){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}

direction=direction||(this.options.vertical?'top':'left');


var slideOffsetLeft=slide.position()[direction];

if(this.options.zoom){
slideOffsetLeft-=slide.width()*0.05;
}

return slideOffsetLeft;
};






vp.slideshow.prototype.__calcSliderToSlideOffset=function $vpfn_btaY_g1J$H4XZhEgFQYYYg1320$55(slideIndex,slideDimension){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}

if(!slideDimension){
slideDimension=outerMeasurement(this,this.slides[slideIndex]);
}

return(this.sliderWidth-slideDimension)/2;
};

vp.slideshow.prototype.__get=function $vpfn_IY8eeaWlplVmF3hq_fIYpw1329$35(slideIndex){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
var self=this;
var slide=this.slides[slideIndex];


if(slide){

var lazyload=$(slide).find('.lazyload');

lazyload.each(function $vpfn_4_N0thpprMzfAMVPYEKKKQ1338$26(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
var el=$(this).removeClass('lazyload');
var children=this.childNodes;

for(var i=0,l=children.length;i<l;i++){
var node=children[i];


if((window.Node&&node.nodeType===window.Node.COMMENT_NODE)||node.nodeType===8){
var newNode=$($.parseHTML(node.nodeValue));


newNode.css('display',el.css('display'));


if(self.options.agile){
newNode.find('img').on('load',$.proxy(self.__refreshSize,self));
}


el.replaceWith(newNode);


break;
}
}
});


if(lazyload.length>0&&this.options.agile){
this.__refreshSize();
}


else if(!this.options.agile&&!$(slide).hasClass('vpslideshow-dynamic')){
$(slide)
.on('slideshow:resize',function $vpfn_4_N0thpprMzfAMVPYEKKKQ1374$44(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
var width=self.wrapper.width();

width-=jQuery.css(slide,'padding-left',true);
width-=jQuery.css(slide,'padding-right',true);

$(this).width(width);
})
.addClass('vpslideshow-dynamic')
.trigger('slideshow:resize')
.trigger('breakpoints:refresh');
}


$(slide).addClass('slide-'+slideIndex);
}


else if(this.options.buildSlide){
slide=$(this.options.buildSlide(slideIndex)).addClass('slide-'+slideIndex);


if(this.slides[slideIndex-1]){
slide.insertAfter(this.slides[slideIndex-1]);
}else if(this.slides[slideIndex+1]){
slide.insertBefore(this.slides[slideIndex+1]);
}else{
var previousSlide;


for(var i=slideIndex-1;i>0;i--){
previousSlide=this.slides[i];
if(previousSlide){
slide.insertAfter(previousSlide);
break;
}
}

if(!previousSlide){
slide.prependTo(this.slidesContainer);
}
}

this.slides[slideIndex]=$(slide).get(0);


this.__refreshSize();
}

if(!this.slides[slideIndex]){
this.slides[slideIndex]=slide;
}

return $(slide);
};


vp.slideshow.prototype.__flip=function $vpfn_HUoa0dwXCBeFD5_GbOKYBA1431$36(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}

this.__event('flip');


this.__get(this.page).trigger('breakpoints:refresh');
};


vp.slideshow.prototype.__changedSlide=function $vpfn_ZMzXHlPmcrXdS87n$WFvRg1440$44(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
this.wrapper.find('.slidebutton.active').removeClass('active');
this.wrapper.find('.slidebutton-'+this.page).addClass('active');
};


vp.slideshow.prototype.next=function $vpfn_MeedpXwLgLOqWtU8R$2E6Q1446$34(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
if(this.animating||!this.options.loop&&(this.xy===this.maxTranslate||this.page===this.options.numberOfSlides-1)){
return;
}

this.__resetTimer(true);
this.__checkPosition(this.options.vertical?SOUTH:EAST);
};


vp.slideshow.prototype.prev=function $vpfn_txNVsUehnRli6eqi3c4qRA1456$34(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
if(this.animating||!this.options.loop&&(this.xy===0||this.page===0)){
return;
}

this.__resetTimer(true);
this.__checkPosition(this.options.vertical?NORTH:WEST);
};







vp.slideshow.prototype.pause=function $vpfn_c5WHJGP0iek$nsEW1NB0VA1471$35(pause){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}

if(this.options.frameSpeed<=0){
return;
}



this.paused=pause===undefined?!this.paused:!!pause;
this.__resetTimer(this.paused);

if(this.paused){
this.wrapper.find('.playpause').addClass('paused');
}else{
this.wrapper.find('.playpause').removeClass('paused');
}
};


vp.slideshow.prototype.toggleDrawer=function $vpfn_SJqGVbjuMzgGz22M59jOYg1490$42(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
var buttons=this.wrapper.find('.vpslideshow-buttons');
var buttonContainer=this.wrapper.find('.vpslideshow-button-container');
var toggleDrawer=this.wrapper.find('.vpslideshow-drawer-toggle');


if(!buttonContainer){
return;
}

var span=toggleDrawer.toggleClass('open').find('span');

buttonContainer.slideToggle(function $vpfn_4_N0thpprMzfAMVPYEKKKQ1502$36(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
var text=span.text();


var $clone=toggleDrawer
.clone()
.hide()
.find('span')
.text(span.data('alternate-text'))
.end()
.appendTo(buttons);

var newWidth=$clone.clientRect().width;
$clone.remove();


toggleDrawer.css('width',toggleDrawer.width()+1);

span.stop().fadeOut(function $vpfn_4_N0thpprMzfAMVPYEKKKQ1520$32(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
toggleDrawer.animate({width:newWidth},function $vpfn_4_N0thpprMzfAMVPYEKKKQ1521$58(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
span.text(span.data('alternate-text'))
.fadeIn()
.data('alternate-text',text);


$(this).css('width','');
});
});
});
};


$(window).load(function $vpfn_4_N0thpprMzfAMVPYEKKKQ1534$19(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}windowLoaded=true;});
})(jQuery,window.vp);
