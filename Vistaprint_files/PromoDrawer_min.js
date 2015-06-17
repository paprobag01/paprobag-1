                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                if(!window.__td){window.__MT=100;window.__ti=0;window.__td=[];window.__td.length=window.__MT;window.__noTrace=false;}





(function $vpfn_fP$YhZ8_GuhHiUbmOF0ebg7$1($){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
window.PromoDrawer=function $vpfn_qat0eMcnnjmg$aBfZU9dFQ8$25(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
this.appliedCouponDetails="";
this.dynamicCouponDetails="";

this.toggleHandler=function $vpfn_fP$YhZ8_GuhHiUbmOF0ebg12$29(auto){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}

var drawer=$('.header-promo-drawer');
drawer.toggleClass('drawer-open');

if(drawer.hasClass('drawer-open'))
{
this.updateDrawerSize();
var qs='';

if($('.dynamic-promo').length)
{
qs+='showoffer=true&';
}

if(this.appliedCouponDetails&&this.appliedCouponDetails.CouponCode)
{
qs+='currentoffer='+this.appliedCouponDetails.CouponCode;
}

if(auto)
{
vp.spot.trackWithQueryString('CouponDrawer:Open:Auto',qs);
}
else
{
vp.spot.trackWithQueryString('CouponDrawer:Open',qs);
}

}
else
{
this.closeDrawer(auto);
}
}.bind(this);

this.closeDrawer=function $vpfn_WiWUTLHz8VtScMKHFj4UNg48$27(auto){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
$('.header-promo-drawer').removeClass('drawer-delayed-close');
$('.drawer-content').css('max-height','0');


if($('.promo-entry-error').html())
{
$('.promo-entry-error').html('');
$('#promoCodeEntry').val(this.appliedCouponDetails.CouponCode).change();
}

var qs='';
if(this.appliedCouponDetails&&this.appliedCouponDetails.CouponCode)
{
qs+='currentoffer='+this.appliedCouponDetails.CouponCode;
}

if(auto)
{
vp.spot.trackWithQueryString('CouponDrawer:Close',qs);
}
else
{
vp.spot.trackWithQueryString('CouponDrawer:Close:Click',qs);
}
};

this.updateDrawerSize=function $vpfn_fP$YhZ8_GuhHiUbmOF0ebg75$32(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
var seperatorHeight=0;
$('.promo-drawer-right-container').css('margin-top',0);



$('.promo-drawer-left-container, .promo-drawer-right-container').each(function $vpfn_fP$YhZ8_GuhHiUbmOF0ebg81$82(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
if($(this).height()>seperatorHeight)
{
seperatorHeight=$(this).height();
}
});

var isSmallScreen=$('.ui-mobile').length||($('body.responsive').length&&window.screen.width<768);

if($('.promo-drawer-right-container').height()<seperatorHeight&&!isSmallScreen)
{
$('.promo-drawer-right-container').css('margin-top',(seperatorHeight-$('.promo-drawer-right-container').height())/2+"px");
}
$('.promo-drawer-spacer').css('height',seperatorHeight+"px");

var containerHeight=0;
$('.drawer-content > *').each(function $vpfn_fP$YhZ8_GuhHiUbmOF0ebg97$42(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
containerHeight+=$(this).outerHeight();
});

$('.drawer-content').css('max-height',containerHeight+"px");
}.bind(this);

this.triggerCouponDetailsDialog=function $vpfn_3shGdf0BrIcIyl3tz72BsQ104$42(couponDetails,isApplied){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}

if(couponDetails){
$('.promo-details-terms').html(couponDetails.CouponTerms);
$('.promo-details-description').html(couponDetails.CouponDescription);
}
else{
$('.promo-details-terms').html('');
$('.promo-details-description').html('');
}

$('#promoDetailsDialog').modalDialog();

var qs='promocode='+couponDetails.CouponCode;

if(isApplied)
{
vp.spot.trackWithQueryString('CouponDrawer:OfferDetails:CurrentOffer',qs);
}
else
{
vp.spot.trackWithQueryString('CouponDrawer:OfferDetails',qs);
}
};

this.applyPromoHandler=function $vpfn_fP$YhZ8_GuhHiUbmOF0ebg129$33(event,promoCode){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}

$.ajax(
{
url:'/Root/PromoDrawer/ApplyPromo',
data:{promoCode:promoCode},
dataType:'json',
traditional:true,
type:'POST',
success:this.updateWithPromoData,
error:function(jqXhr,status){
}

});
}.bind(this);

this.updatePromoHandler=function $vpfn_fP$YhZ8_GuhHiUbmOF0ebg145$34(event,promoCode){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
if(!promoCode)
{
promoCode='';
}

if(this.appliedCouponDetails&&this.appliedCouponDetails.CouponCode&&this.appliedCouponDetails.CouponCode.toUpperCase()===promoCode.toUpperCase())
{
return;
}

if(!promoCode)
{
this.removeCoupon();

$('#promoCodeEntry').val(this.appliedCouponDetails.CouponCode).change();
}
else
{
this.performAnalyticalLogging(promoCode);

this.getPromoCodeDetails(promoCode,
function $vpfn_fP$YhZ8_GuhHiUbmOF0ebg167$20(response){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
this.appliedCouponDetails=response;

if(response.CouponCode!==null)
{
$('.header-promo-drawer').addClass('promo-applied');
$('.promo-code-value').html(this.appliedCouponDetails.CouponCode);
$('#promoCodeEntry').val(this.appliedCouponDetails.CouponCode).change();
$('.promo-applied-message .promo-description').html(this.appliedCouponDetails.CouponDescription);
}
}.bind(this));
}
}.bind(this);

this.promoDetailsHandler=function $vpfn_fP$YhZ8_GuhHiUbmOF0ebg181$35(promoCode){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
if(promoCode===this.appliedCouponDetails.CouponCode)
{
this.triggerCouponDetailsDialog(this.appliedCouponDetails,true);
}
else if(promoCode===this.dynamicCouponDetails.CouponCode)
{
this.triggerCouponDetailsDialog(this.dynamicCouponDetails,false);
}
else
{
this.getPromoCodeDetails(promoCode,
function $vpfn_fP$YhZ8_GuhHiUbmOF0ebg193$21(response){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
this.dynamicCouponDetails=response;
this.triggerCouponDetailsDialog(this.dynamicCouponDetails,false);
}.bind(this));
}
}.bind(this);

this.getPromoCodeDetails=function $vpfn_NL6cawCQgfuLqExYmDbtKw200$35(promoCode,successHandler){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
$.ajax({
url:'/Root/PromoDrawer/GetPromoDetails',
data:{promoCode:promoCode},
dataType:'json',
traditional:true,
type:'GET',
success:successHandler,
error:function(jqXhr,status){
}
});
};

this.updateWithPromoData=function $vpfn_fP$YhZ8_GuhHiUbmOF0ebg213$35(data){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}

$('.promo-entry-error').html('');

$.cookies.set("SITE",{LPUE:Math.round(+new Date()/1000)});

if(data.CouponCleared)
{
this.removeCoupon();

$('.header-promo-drawer').removeClass('drawer-open');
this.closeDrawer(true);


window.location.reload();
}

else if(!data.CouponIsValid)
{
$('.promo-entry-error').html(data.ErrorMessage);
this.updateDrawerSize();
}
else{

this.appliedCouponDetails=data.CouponDetails;

this.performAnalyticalLogging(this.appliedCouponDetails.CouponCode);

$('.header-promo-drawer').removeClass('drawer-open');
this.closeDrawer(true);

$('.header-promo-drawer').addClass('promo-applied');
$('.promo-code-value').html(this.appliedCouponDetails.CouponCode);
$('#promoCodeEntry').val(this.appliedCouponDetails.CouponCode).change();
$('.promo-applied-message .promo-description').html(this.appliedCouponDetails.CouponDescription);

if(this.appliedCouponDetails.RedirectUrl)
{
var url=new $.Url(this.appliedCouponDetails.RedirectUrl);
url.setItem('xnav','promodrawer');
window.location.href=url;
}
else
{

window.location.reload();
}
}


}.bind(this);

this.removeCoupon=function $vpfn_rQ5GOHltDHHj2a5Z7yyIUg265$28(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
this.appliedCouponDetails={
CouponCode:'',
CouponDescription:'',
CouponTerms:''
};

$('.header-promo-drawer').removeClass('promo-applied');
};

this.performAnalyticalLogging=function $vpfn_Jq6RFIf1BIxYE74XfsavDQ275$40(promoCode){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
$("body").trigger("onAnalyticsTagEvent",{EventType:"custom view",EventName:"CouponEntered",CustomEventData:{CouponCode:"Manual:"+promoCode}});
};
};

$(document).ready(function $vpfn_fP$YhZ8_GuhHiUbmOF0ebg280$22(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}

var promoDrawer=new PromoDrawer();

if($('#promoCodeEntry').length)
{
promoDrawer.appliedCouponDetails={
CouponCode:$('.promo-code-value').html(),
CouponDescription:$('.promo-details-description').html(),
CouponTerms:$('.promo-details-terms').html()
};

if(promoDrawer.appliedCouponDetails.CouponCode.toUpperCase()===$('#promoCodeEntry').val().toUpperCase())
{
$('.apply-promo-button').textbutton("disable");
}

$('#promoCodeEntry').on('change keyup',function $vpfn_fP$YhZ8_GuhHiUbmOF0ebg297$52(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
if(promoDrawer.appliedCouponDetails.CouponCode.toUpperCase()===$('#promoCodeEntry').val().toUpperCase())
{
$('.apply-promo-button').textbutton("disable");
}
else
{
$('.apply-promo-button').textbutton("enable");
}
});

$('.apply-promo-button').on('click',function $vpfn_fP$YhZ8_GuhHiUbmOF0ebg308$49(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
$(document).trigger('coupon:apply',$('#promoCodeEntry').val());
});

$('#promoCodeEntry').on('keyup',function $vpfn_fP$YhZ8_GuhHiUbmOF0ebg312$45(e){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
if(e.which==13)
{
$('#promoCodeEntry').blur();
$('.apply-promo-button').click();
}
});
}

$(document).on('coupon:apply',promoDrawer.applyPromoHandler);
$(document).on('coupon:updateApplied',promoDrawer.updatePromoHandler);
$(document).on('coupon:details',
function $vpfn_fP$YhZ8_GuhHiUbmOF0ebg324$23(event,promoCode){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
promoDrawer.promoDetailsHandler(promoCode);
});

$('.header-promo-drawer-handle, .promo-drawer-items .secondary-promo a').click(function $vpfn_fP$YhZ8_GuhHiUbmOF0ebg328$87(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}promoDrawer.toggleHandler(false);});

$('.current-coupon-details').click(
function $vpfn_fP$YhZ8_GuhHiUbmOF0ebg331$12(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
promoDrawer.triggerCouponDetailsDialog(promoDrawer.appliedCouponDetails,true);
});

$(window).resize(function $vpfn_fP$YhZ8_GuhHiUbmOF0ebg335$26(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
if($('.header-promo-drawer').hasClass('drawer-open'))
{
promoDrawer.updateDrawerSize();
}
});



if($.cookies.enabled())
{
var promoAutoOpenDisabled=$.cookies.get('disablePromoAutoOpen');

if(!promoAutoOpenDisabled)
{
var delayedOpen=$('.drawer-delayed-open');
if(delayedOpen.length)
{
delayedOpen.addClass('drawer-delayed-close');
delayedOpen.removeClass('drawer-delayed-open');

$('.header-promo-drawer').click(function $vpfn_fP$YhZ8_GuhHiUbmOF0ebg356$52(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
delayedOpen.removeClass('drawer-delayed-close');
});


setTimeout(
function $vpfn_fP$YhZ8_GuhHiUbmOF0ebg362$24(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
if($('.header-promo-drawer').hasClass('drawer-open'))
{
return;
}
promoDrawer.toggleHandler(true);

setTimeout(
function $vpfn_fP$YhZ8_GuhHiUbmOF0ebg370$32(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
var delayedClose=$('.drawer-delayed-close');

if(delayedClose.length)
{
promoDrawer.toggleHandler(true);
}
},6000);
},1000);
}

$.cookies.set('disablePromoAutoOpen',true);
}
}
});
})(jQuery);
