                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                if(!window.__td){window.__MT=100;window.__ti=0;window.__td=[];window.__td.length=window.__MT;window.__noTrace=false;}






(function $vpfn_j5Grd1g162xyjhsm16Bplw8$1($){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
$(document).ready(
function $vpfn_j5Grd1g162xyjhsm16Bplw10$8(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}


$('.footer-owner-nation').click(function $vpfn_j5Grd1g162xyjhsm16Bplw13$44(e){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
vp.spot.track('FooterFY14Redesign-OwnerNation');
});


$('.footer-refer-a-friend a').click(function $vpfn_j5Grd1g162xyjhsm16Bplw18$48(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
var url=$(this).attr('href');
window.open(url,'_blank','toolbar=1,location=0,directories=0,status=0,menubar=0,scrollbars=1,resizable=0,width=1000,height=700,top=50,left=50');
vp.spot.track('FooterFY14Redesign-ReferaFriend');
return false;
});

var optInHandler=function $vpfn_29MiNs5MPopqSiXGGWqnCw25$31(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
var optInEmail=$('#optInEmail').val();
var optInUrl='/vp/insider_offer_signup.aspx?xnav=TsrItem&signup_source_url=ns%2Fdefault%2Easpx&email='+optInEmail+'&pop=4';
window.open(optInUrl,'pcsignup','toolbar=no,status=no,menubar=no,scrollbars=no,resizable=no,width=500,height=700');
return false;
};

$('#optInEmail').on('keydown',function $vpfn_j5Grd1g162xyjhsm16Bplw32$43(e){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
if(e.which==13)
{
optInHandler();
}
});


$("#emailOptinButton").click(function $vpfn_j5Grd1g162xyjhsm16Bplw40$41(e){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
e.preventDefault();
optInHandler();
});


$("input[name='vatToggle']:radio").on('change',
function $vpfn_j5Grd1g162xyjhsm16Bplw47$16(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
var vatFlag=$(this).val();
vp.widget.showLoadingBox();

$.ajax({
url:"/tax-inclusivity-switch.aspx?v=cava&t="+vatFlag
}).done(
function $vpfn_j5Grd1g162xyjhsm16Bplw54$24(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
var cookieValue={};
cookieValue["TXI"]=vatFlag;
$.cookies.set({name:"PSC",value:cookieValue,permanent:true});
window.location.reload(true);
}
);
}
);



$(window).on("resize orientationchange",function $vpfn_j5Grd1g162xyjhsm16Bplw66$53(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
$('.footer-navigation-menu, .footer-navigation-header, .footer-nav-menu-root').removeClass('footer-nav-open');
$('.footer-navigation-menu').css('max-height','');
});

$('.footer-navigation-header').click(
function $vpfn_j5Grd1g162xyjhsm16Bplw72$16(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
if($('.ui-mobile').length||($('body.responsive').length&&window.screen.width<768))
{
var menu=$(this).parent();
menu.toggleClass('footer-nav-open');
}
else
{
$('.footer-navigation').toggleClass('footer-nav-open');

if($('.footer-navigation').hasClass('footer-nav-open'))
{
vp.spot.track('Footer:Open');
}
}
}
);

$('.footer-nav-menu-root').click(
function $vpfn_j5Grd1g162xyjhsm16Bplw91$16(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
var openMenus;
var ua=navigator.userAgent;
if(ua.indexOf("Android")>=0)
{
var androidversion=parseFloat(ua.slice(ua.indexOf("Android")+8));
if(androidversion<4.4){

openMenus=$('.footer-nav-menu-root.footer-nav-open');
if(openMenus.length)
{
openMenus.removeClass('footer-nav-open');
$('.footer-navigation-menu').removeClass('footer-navigation-menu-open');
}
else
{
$(this).addClass('footer-nav-open');
$('.footer-navigation-menu').addClass('footer-navigation-menu-open');
}
return;
}
}

openMenus=$('.footer-navigation-menu.footer-nav-open');
if(openMenus.length)
{
openMenus.removeClass('footer-nav-open');
}

$(this).toggleClass('footer-nav-open');

if($(this).hasClass('footer-nav-open'))
{
vp.spot.track('Footer:Open');
}

}
);
}
);
})(jQuery);
