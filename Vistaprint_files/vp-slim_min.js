                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                

/*!
 * jQuery JavaScript Library v1.10.2
 * http://jquery.com/
 *
 * Includes Sizzle.js
 * http://sizzlejs.com/
 *
 * Copyright 2005, 2013 jQuery Foundation, Inc. and other contributors
 * Released under the MIT license
 * http://jquery.org/license
 *
 * Date: 2013-07-03T13:48Z
 */

(function(window,undefined){






var

readyList,


rootjQuery,



core_strundefined=typeof undefined,


location=window.location,
document=window.document,
docElem=document.documentElement,


_jQuery=window.jQuery,


_$=window.$,


class2type={},


core_deletedIds=[],

core_version="1.10.2",


core_concat=core_deletedIds.concat,
core_push=core_deletedIds.push,
core_slice=core_deletedIds.slice,
core_indexOf=core_deletedIds.indexOf,
core_toString=class2type.toString,
core_hasOwn=class2type.hasOwnProperty,
core_trim=core_version.trim,


jQuery=function(selector,context){

return new jQuery.fn.init(selector,context,rootjQuery);
},


core_pnum=/[+-]?(?:\d*\.|)\d+(?:[eE][+-]?\d+|)/.source,


core_rnotwhite=/\S+/g,


rtrim=/^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g,




rquickExpr=/^(?:\s*(<[\w\W]+>)[^>]*|#([\w-]*))$/,


rsingleTag=/^<(\w+)\s*\/?>(?:<\/\1>|)$/,


rvalidchars=/^[\],:{}\s]*$/,
rvalidbraces=/(?:^|:|,)(?:\s*\[)+/g,
rvalidescape=/\\(?:["\\\/bfnrt]|u[\da-fA-F]{4})/g,
rvalidtokens=/"[^"\\\r\n]*"|true|false|null|-?(?:\d+\.|)\d+(?:[eE][+-]?\d+|)/g,


rmsPrefix=/^-ms-/,
rdashAlpha=/-([\da-z])/gi,


fcamelCase=function(all,letter){
return letter.toUpperCase();
},


completed=function(event){


if(document.addEventListener||event.type==="load"||document.readyState==="complete"){
detach();
jQuery.ready();
}
},

detach=function(){
if(document.addEventListener){
document.removeEventListener("DOMContentLoaded",completed,false);
window.removeEventListener("load",completed,false);

}else{
document.detachEvent("onreadystatechange",completed);
window.detachEvent("onload",completed);
}
};

jQuery.fn=jQuery.prototype={

jquery:core_version,

constructor:jQuery,
init:function(selector,context,rootjQuery){
var match,elem;


if(!selector){
return this;
}


if(typeof selector==="string"){
if(selector.charAt(0)==="<"&&selector.charAt(selector.length-1)===">"&&selector.length>=3){

match=[null,selector,null];

}else{
match=rquickExpr.exec(selector);
}


if(match&&(match[1]||!context)){


if(match[1]){
context=context instanceof jQuery?context[0]:context;


jQuery.merge(this,jQuery.parseHTML(
match[1],
context&&context.nodeType?context.ownerDocument||context:document,
true
));


if(rsingleTag.test(match[1])&&jQuery.isPlainObject(context)){
for(match in context){

if(jQuery.isFunction(this[match])){
this[match](context[match]);


}else{
this.attr(match,context[match]);
}
}
}

return this;


}else{
elem=document.getElementById(match[2]);



if(elem&&elem.parentNode){


if(elem.id!==match[2]){
return rootjQuery.find(selector);
}


this.length=1;
this[0]=elem;
}

this.context=document;
this.selector=selector;
return this;
}


}else if(!context||context.jquery){
return(context||rootjQuery).find(selector);



}else{
return this.constructor(context).find(selector);
}


}else if(selector.nodeType){
this.context=this[0]=selector;
this.length=1;
return this;



}else if(jQuery.isFunction(selector)){
return rootjQuery.ready(selector);
}

if(selector.selector!==undefined){
this.selector=selector.selector;
this.context=selector.context;
}

return jQuery.makeArray(selector,this);
},


selector:"",


length:0,

toArray:function(){
return core_slice.call(this);
},



get:function(num){
return num==null?


this.toArray():


(num<0?this[this.length+num]:this[num]);
},



pushStack:function(elems){


var ret=jQuery.merge(this.constructor(),elems);


ret.prevObject=this;
ret.context=this.context;


return ret;
},




each:function(callback,args){
return jQuery.each(this,callback,args);
},

ready:function(fn){

jQuery.ready.promise().done(fn);

return this;
},

slice:function(){
return this.pushStack(core_slice.apply(this,arguments));
},

first:function(){
return this.eq(0);
},

last:function(){
return this.eq(-1);
},

eq:function(i){
var len=this.length,
j=+i+(i<0?len:0);
return this.pushStack(j>=0&&j<len?[this[j]]:[]);
},

map:function(callback){
return this.pushStack(jQuery.map(this,function(elem,i){
return callback.call(elem,i,elem);
}));
},

end:function(){
return this.prevObject||this.constructor(null);
},



push:core_push,
sort:[].sort,
splice:[].splice
};


jQuery.fn.init.prototype=jQuery.fn;

jQuery.extend=jQuery.fn.extend=function(){
var src,copyIsArray,copy,name,options,clone,
target=arguments[0]||{},
i=1,
length=arguments.length,
deep=false;


if(typeof target==="boolean"){
deep=target;
target=arguments[1]||{};

i=2;
}


if(typeof target!=="object"&&!jQuery.isFunction(target)){
target={};
}


if(length===i){
target=this;
--i;
}

for(;i<length;i++){

if((options=arguments[i])!=null){

for(name in options){
src=target[name];
copy=options[name];


if(target===copy){
continue;
}


if(deep&&copy&&(jQuery.isPlainObject(copy)||(copyIsArray=jQuery.isArray(copy)))){
if(copyIsArray){
copyIsArray=false;
clone=src&&jQuery.isArray(src)?src:[];

}else{
clone=src&&jQuery.isPlainObject(src)?src:{};
}


target[name]=jQuery.extend(deep,clone,copy);


}else if(copy!==undefined){
target[name]=copy;
}
}
}
}


return target;
};

jQuery.extend({


expando:"jQuery"+(core_version+Math.random()).replace(/\D/g,""),

noConflict:function(deep){
if(window.$===jQuery){
window.$=_$;
}

if(deep&&window.jQuery===jQuery){
window.jQuery=_jQuery;
}

return jQuery;
},


isReady:false,



readyWait:1,


holdReady:function(hold){
if(hold){
jQuery.readyWait++;
}else{
jQuery.ready(true);
}
},


ready:function(wait){


if(wait===true?--jQuery.readyWait:jQuery.isReady){
return;
}


if(!document.body){
return setTimeout(jQuery.ready);
}


jQuery.isReady=true;


if(wait!==true&&--jQuery.readyWait>0){
return;
}


readyList.resolveWith(document,[jQuery]);


if(jQuery.fn.trigger){
jQuery(document).trigger("ready").off("ready");
}
},




isFunction:function(obj){
return jQuery.type(obj)==="function";
},

isArray:Array.isArray||function(obj){
return jQuery.type(obj)==="array";
},

isWindow:function(obj){

return obj!=null&&obj==obj.window;
},

isNumeric:function(obj){
return!isNaN(parseFloat(obj))&&isFinite(obj);
},

type:function(obj){
if(obj==null){
return String(obj);
}
return typeof obj==="object"||typeof obj==="function"?
class2type[core_toString.call(obj)]||"object":
typeof obj;
},

isPlainObject:function(obj){
var key;




if(!obj||jQuery.type(obj)!=="object"||obj.nodeType||jQuery.isWindow(obj)){
return false;
}

try{

if(obj.constructor&&
!core_hasOwn.call(obj,"constructor")&&
!core_hasOwn.call(obj.constructor.prototype,"isPrototypeOf")){
return false;
}
}catch(e){

return false;
}



if(jQuery.support.ownLast){
for(key in obj){
return core_hasOwn.call(obj,key);
}
}



for(key in obj){}

return key===undefined||core_hasOwn.call(obj,key);
},

isEmptyObject:function(obj){
var name;
for(name in obj){
return false;
}
return true;
},

error:function(msg){
throw new Error(msg);
},




parseHTML:function(data,context,keepScripts){
if(!data||typeof data!=="string"){
return null;
}
if(typeof context==="boolean"){
keepScripts=context;
context=false;
}
context=context||document;

var parsed=rsingleTag.exec(data),
scripts=!keepScripts&&[];


if(parsed){
return[context.createElement(parsed[1])];
}

parsed=jQuery.buildFragment([data],context,scripts);
if(scripts){
jQuery(scripts).remove();
}
return jQuery.merge([],parsed.childNodes);
},

parseJSON:function(data){

if(window.JSON&&window.JSON.parse){
return window.JSON.parse(data);
}

if(data===null){
return data;
}

if(typeof data==="string"){


data=jQuery.trim(data);

if(data){


if(rvalidchars.test(data.replace(rvalidescape,"@")
.replace(rvalidtokens,"]")
.replace(rvalidbraces,""))){

return(new Function("return "+data))();
}
}
}

jQuery.error("Invalid JSON: "+data);
},


parseXML:function(data){
var xml,tmp;
if(!data||typeof data!=="string"){
return null;
}
try{
if(window.DOMParser){
tmp=new DOMParser();
xml=tmp.parseFromString(data,"text/xml");
}else{
xml=new ActiveXObject("Microsoft.XMLDOM");
xml.async="false";
xml.loadXML(data);
}
}catch(e){
xml=undefined;
}
if(!xml||!xml.documentElement||xml.getElementsByTagName("parsererror").length){
jQuery.error("Invalid XML: "+data);
}
return xml;
},

noop:function(){},




globalEval:function(data){
if(data&&jQuery.trim(data)){



(window.execScript||function(data){
window["eval"].call(window,data);
})(data);
}
},



camelCase:function(string){
return string.replace(rmsPrefix,"ms-").replace(rdashAlpha,fcamelCase);
},

nodeName:function(elem,name){
return elem.nodeName&&elem.nodeName.toLowerCase()===name.toLowerCase();
},


each:function(obj,callback,args){
var value,
i=0,
length=obj.length,
isArray=isArraylike(obj);

if(args){
if(isArray){
for(;i<length;i++){
value=callback.apply(obj[i],args);

if(value===false){
break;
}
}
}else{
for(i in obj){
value=callback.apply(obj[i],args);

if(value===false){
break;
}
}
}


}else{
if(isArray){
for(;i<length;i++){
value=callback.call(obj[i],i,obj[i]);

if(value===false){
break;
}
}
}else{
for(i in obj){
value=callback.call(obj[i],i,obj[i]);

if(value===false){
break;
}
}
}
}

return obj;
},


trim:core_trim&&!core_trim.call("\uFEFF\xA0")?
function(text){
return text==null?
"":
core_trim.call(text);
}:


function(text){
return text==null?
"":
(text+"").replace(rtrim,"");
},


makeArray:function(arr,results){
var ret=results||[];

if(arr!=null){
if(isArraylike(Object(arr))){
jQuery.merge(ret,
typeof arr==="string"?
[arr]:arr
);
}else{
core_push.call(ret,arr);
}
}

return ret;
},

inArray:function(elem,arr,i){
var len;

if(arr){
if(core_indexOf){
return core_indexOf.call(arr,elem,i);
}

len=arr.length;
i=i?i<0?Math.max(0,len+i):i:0;

for(;i<len;i++){

if(i in arr&&arr[i]===elem){
return i;
}
}
}

return-1;
},

merge:function(first,second){
var l=second.length,
i=first.length,
j=0;

if(typeof l==="number"){
for(;j<l;j++){
first[i++]=second[j];
}
}else{
while(second[j]!==undefined){
first[i++]=second[j++];
}
}

first.length=i;

return first;
},

grep:function(elems,callback,inv){
var retVal,
ret=[],
i=0,
length=elems.length;
inv=!!inv;



for(;i<length;i++){
retVal=!!callback(elems[i],i);
if(inv!==retVal){
ret.push(elems[i]);
}
}

return ret;
},


map:function(elems,callback,arg){
var value,
i=0,
length=elems.length,
isArray=isArraylike(elems),
ret=[];


if(isArray){
for(;i<length;i++){
value=callback(elems[i],i,arg);

if(value!=null){
ret[ret.length]=value;
}
}


}else{
for(i in elems){
value=callback(elems[i],i,arg);

if(value!=null){
ret[ret.length]=value;
}
}
}


return core_concat.apply([],ret);
},


guid:1,



proxy:function(fn,context){
var args,proxy,tmp;

if(typeof context==="string"){
tmp=fn[context];
context=fn;
fn=tmp;
}



if(!jQuery.isFunction(fn)){
return undefined;
}


args=core_slice.call(arguments,2);
proxy=function(){
return fn.apply(context||this,args.concat(core_slice.call(arguments)));
};


proxy.guid=fn.guid=fn.guid||jQuery.guid++;

return proxy;
},



access:function(elems,fn,key,value,chainable,emptyGet,raw){
var i=0,
length=elems.length,
bulk=key==null;


if(jQuery.type(key)==="object"){
chainable=true;
for(i in key){
jQuery.access(elems,fn,i,key[i],true,emptyGet,raw);
}


}else if(value!==undefined){
chainable=true;

if(!jQuery.isFunction(value)){
raw=true;
}

if(bulk){

if(raw){
fn.call(elems,value);
fn=null;


}else{
bulk=fn;
fn=function(elem,key,value){
return bulk.call(jQuery(elem),value);
};
}
}

if(fn){
for(;i<length;i++){
fn(elems[i],key,raw?value:value.call(elems[i],i,fn(elems[i],key)));
}
}
}

return chainable?
elems:


bulk?
fn.call(elems):
length?fn(elems[0],key):emptyGet;
},

now:function(){
return(new Date()).getTime();
},




swap:function(elem,options,callback,args){
var ret,name,
old={};


for(name in options){
old[name]=elem.style[name];
elem.style[name]=options[name];
}

ret=callback.apply(elem,args||[]);


for(name in options){
elem.style[name]=old[name];
}

return ret;
}
});

jQuery.ready.promise=function(obj){
if(!readyList){

readyList=jQuery.Deferred();




if(document.readyState==="complete"){

setTimeout(jQuery.ready);


}else if(document.addEventListener){

document.addEventListener("DOMContentLoaded",completed,false);


window.addEventListener("load",completed,false);


}else{

document.attachEvent("onreadystatechange",completed);


window.attachEvent("onload",completed);



var top=false;

try{
top=window.frameElement==null&&document.documentElement;
}catch(e){}

if(top&&top.doScroll){
(function doScrollCheck(){
if(!jQuery.isReady){

try{


top.doScroll("left");
}catch(e){
return setTimeout(doScrollCheck,50);
}


detach();


jQuery.ready();
}
})();
}
}
}
return readyList.promise(obj);
};


jQuery.each("Boolean Number String Function Array Date RegExp Object Error".split(" "),function(i,name){
class2type["[object "+name+"]"]=name.toLowerCase();
});

function isArraylike(obj){
var length=obj.length,
type=jQuery.type(obj);

if(jQuery.isWindow(obj)){
return false;
}

if(obj.nodeType===1&&length){
return true;
}

return type==="array"||type!=="function"&&
(length===0||
typeof length==="number"&&length>0&&(length-1)in obj);
}


rootjQuery=jQuery(document);/*!
 * Sizzle CSS Selector Engine v1.10.2
 * http://sizzlejs.com/
 *
 * Copyright 2013 jQuery Foundation, Inc. and other contributors
 * Released under the MIT license
 * http://jquery.org/license
 *
 * Date: 2013-07-03
 */

(function(window,undefined){

var i,
support,
cachedruns,
Expr,
getText,
isXML,
compile,
outermostContext,
sortInput,


setDocument,
document,
docElem,
documentIsHTML,
rbuggyQSA,
rbuggyMatches,
matches,
contains,


expando="sizzle"+-(new Date()),
preferredDoc=window.document,
dirruns=0,
done=0,
classCache=createCache(),
tokenCache=createCache(),
compilerCache=createCache(),
hasDuplicate=false,
sortOrder=function(a,b){
if(a===b){
hasDuplicate=true;
return 0;
}
return 0;
},


strundefined=typeof undefined,
MAX_NEGATIVE=1<<31,


hasOwn=({}).hasOwnProperty,
arr=[],
pop=arr.pop,
push_native=arr.push,
push=arr.push,
slice=arr.slice,

indexOf=arr.indexOf||function(elem){
var i=0,
len=this.length;
for(;i<len;i++){
if(this[i]===elem){
return i;
}
}
return-1;
},

booleans="checked|selected|async|autofocus|autoplay|controls|defer|disabled|hidden|ismap|loop|multiple|open|readonly|required|scoped",




whitespace="[\\x20\\t\\r\\n\\f]",

characterEncoding="(?:\\\\.|[\\w-]|[^\\x00-\\xa0])+",




identifier=characterEncoding.replace("w","w#"),


attributes="\\["+whitespace+"*("+characterEncoding+")"+whitespace+
"*(?:([*^$|!~]?=)"+whitespace+"*(?:(['\"])((?:\\\\.|[^\\\\])*?)\\3|("+identifier+")|)|)"+whitespace+"*\\]",







pseudos=":("+characterEncoding+")(?:\\(((['\"])((?:\\\\.|[^\\\\])*?)\\3|((?:\\\\.|[^\\\\()[\\]]|"+attributes.replace(3,8)+")*)|.*)\\)|)",


rtrim=new RegExp("^"+whitespace+"+|((?:^|[^\\\\])(?:\\\\.)*)"+whitespace+"+$","g"),

rcomma=new RegExp("^"+whitespace+"*,"+whitespace+"*"),
rcombinators=new RegExp("^"+whitespace+"*([>+~]|"+whitespace+")"+whitespace+"*"),

rsibling=new RegExp(whitespace+"*[+~]"),
rattributeQuotes=new RegExp("="+whitespace+"*([^\\]'\"]*)"+whitespace+"*\\]","g"),

rpseudo=new RegExp(pseudos),
ridentifier=new RegExp("^"+identifier+"$"),

matchExpr={
"ID":new RegExp("^#("+characterEncoding+")"),
"CLASS":new RegExp("^\\.("+characterEncoding+")"),
"TAG":new RegExp("^("+characterEncoding.replace("w","w*")+")"),
"ATTR":new RegExp("^"+attributes),
"PSEUDO":new RegExp("^"+pseudos),
"CHILD":new RegExp("^:(only|first|last|nth|nth-last)-(child|of-type)(?:\\("+whitespace+
"*(even|odd|(([+-]|)(\\d*)n|)"+whitespace+"*(?:([+-]|)"+whitespace+
"*(\\d+)|))"+whitespace+"*\\)|)","i"),
"bool":new RegExp("^(?:"+booleans+")$","i"),


"needsContext":new RegExp("^"+whitespace+"*[>+~]|:(even|odd|eq|gt|lt|nth|first|last)(?:\\("+
whitespace+"*((?:-\\d)?\\d*)"+whitespace+"*\\)|)(?=[^-]|$)","i")
},

rnative=/^[^{]+\{\s*\[native \w/,


rquickExpr=/^(?:#([\w-]+)|(\w+)|\.([\w-]+))$/,

rinputs=/^(?:input|select|textarea|button)$/i,
rheader=/^h\d$/i,

rescape=/'|\\/g,


runescape=new RegExp("\\\\([\\da-f]{1,6}"+whitespace+"?|("+whitespace+")|.)","ig"),
funescape=function(_,escaped,escapedWhitespace){
var high="0x"+escaped-0x10000;



return high!==high||escapedWhitespace?
escaped:

high<0?
String.fromCharCode(high+0x10000):

String.fromCharCode(high>>10|0xD800,high&0x3FF|0xDC00);
};


try{
push.apply(
(arr=slice.call(preferredDoc.childNodes)),
preferredDoc.childNodes
);


arr[preferredDoc.childNodes.length].nodeType;
}catch(e){
push={apply:arr.length?


function(target,els){
push_native.apply(target,slice.call(els));
}:



function(target,els){
var j=target.length,
i=0;

while((target[j++]=els[i++])){}
target.length=j-1;
}
};
}

function Sizzle(selector,context,results,seed){
var match,elem,m,nodeType,

i,groups,old,nid,newContext,newSelector;

if((context?context.ownerDocument||context:preferredDoc)!==document){
setDocument(context);
}

context=context||document;
results=results||[];

if(!selector||typeof selector!=="string"){
return results;
}

if((nodeType=context.nodeType)!==1&&nodeType!==9){
return[];
}

if(documentIsHTML&&!seed){


if((match=rquickExpr.exec(selector))){

if((m=match[1])){
if(nodeType===9){
elem=context.getElementById(m);


if(elem&&elem.parentNode){


if(elem.id===m){
results.push(elem);
return results;
}
}else{
return results;
}
}else{

if(context.ownerDocument&&(elem=context.ownerDocument.getElementById(m))&&
contains(context,elem)&&elem.id===m){
results.push(elem);
return results;
}
}


}else if(match[2]){
push.apply(results,context.getElementsByTagName(selector));
return results;


}else if((m=match[3])&&support.getElementsByClassName&&context.getElementsByClassName){
push.apply(results,context.getElementsByClassName(m));
return results;
}
}


if(support.qsa&&(!rbuggyQSA||!rbuggyQSA.test(selector))){
nid=old=expando;
newContext=context;
newSelector=nodeType===9&&selector;





if(nodeType===1&&context.nodeName.toLowerCase()!=="object"){
groups=tokenize(selector);

if((old=context.getAttribute("id"))){
nid=old.replace(rescape,"\\$&");
}else{
context.setAttribute("id",nid);
}
nid="[id='"+nid+"'] ";

i=groups.length;
while(i--){
groups[i]=nid+toSelector(groups[i]);
}
newContext=rsibling.test(selector)&&context.parentNode||context;
newSelector=groups.join(",");
}

if(newSelector){
try{
push.apply(results,
newContext.querySelectorAll(newSelector)
);
return results;
}catch(qsaError){
}finally{
if(!old){
context.removeAttribute("id");
}
}
}
}
}


return select(selector.replace(rtrim,"$1"),context,results,seed);
}







function createCache(){
var keys=[];

function cache(key,value){

if(keys.push(key+=" ")>Expr.cacheLength){

delete cache[keys.shift()];
}
return(cache[key]=value);
}
return cache;
}





function markFunction(fn){
fn[expando]=true;
return fn;
}





function assert(fn){
var div=document.createElement("div");

try{
return!!fn(div);
}catch(e){
return false;
}finally{

if(div.parentNode){
div.parentNode.removeChild(div);
}

div=null;
}
}






function addHandle(attrs,handler){
var arr=attrs.split("|"),
i=attrs.length;

while(i--){
Expr.attrHandle[arr[i]]=handler;
}
}







function siblingCheck(a,b){
var cur=b&&a,
diff=cur&&a.nodeType===1&&b.nodeType===1&&
(~b.sourceIndex||MAX_NEGATIVE)-
(~a.sourceIndex||MAX_NEGATIVE);


if(diff){
return diff;
}


if(cur){
while((cur=cur.nextSibling)){
if(cur===b){
return-1;
}
}
}

return a?1:-1;
}





function createInputPseudo(type){
return function(elem){
var name=elem.nodeName.toLowerCase();
return name==="input"&&elem.type===type;
};
}





function createButtonPseudo(type){
return function(elem){
var name=elem.nodeName.toLowerCase();
return(name==="input"||name==="button")&&elem.type===type;
};
}





function createPositionalPseudo(fn){
return markFunction(function(argument){
argument=+argument;
return markFunction(function(seed,matches){
var j,
matchIndexes=fn([],seed.length,argument),
i=matchIndexes.length;


while(i--){
if(seed[(j=matchIndexes[i])]){
seed[j]=!(matches[j]=seed[j]);
}
}
});
});
}





isXML=Sizzle.isXML=function(elem){


var documentElement=elem&&(elem.ownerDocument||elem).documentElement;
return documentElement?documentElement.nodeName!=="HTML":false;
};


support=Sizzle.support={};






setDocument=Sizzle.setDocument=function(node){
var doc=node?node.ownerDocument||node:preferredDoc,
parent=doc.defaultView;


if(doc===document||doc.nodeType!==9||!doc.documentElement){
return document;
}


document=doc;
docElem=doc.documentElement;


documentIsHTML=!isXML(doc);





if(parent&&parent.attachEvent&&parent!==parent.top){
parent.attachEvent("onbeforeunload",function(){
setDocument();
});
}






support.attributes=assert(function(div){
div.className="i";
return!div.getAttribute("className");
});





support.getElementsByTagName=assert(function(div){
div.appendChild(doc.createComment(""));
return!div.getElementsByTagName("*").length;
});


support.getElementsByClassName=assert(function(div){
div.innerHTML="<div class='a'></div><div class='a i'></div>";



div.firstChild.className="i";


return div.getElementsByClassName("i").length===2;
});





support.getById=assert(function(div){
docElem.appendChild(div).id=expando;
return!doc.getElementsByName||!doc.getElementsByName(expando).length;
});


if(support.getById){
Expr.find["ID"]=function(id,context){
if(typeof context.getElementById!==strundefined&&documentIsHTML){
var m=context.getElementById(id);


return m&&m.parentNode?[m]:[];
}
};
Expr.filter["ID"]=function(id){
var attrId=id.replace(runescape,funescape);
return function(elem){
return elem.getAttribute("id")===attrId;
};
};
}else{


delete Expr.find["ID"];

Expr.filter["ID"]=function(id){
var attrId=id.replace(runescape,funescape);
return function(elem){
var node=typeof elem.getAttributeNode!==strundefined&&elem.getAttributeNode("id");
return node&&node.value===attrId;
};
};
}


Expr.find["TAG"]=support.getElementsByTagName?
function(tag,context){
if(typeof context.getElementsByTagName!==strundefined){
return context.getElementsByTagName(tag);
}
}:
function(tag,context){
var elem,
tmp=[],
i=0,
results=context.getElementsByTagName(tag);


if(tag==="*"){
while((elem=results[i++])){
if(elem.nodeType===1){
tmp.push(elem);
}
}

return tmp;
}
return results;
};


Expr.find["CLASS"]=support.getElementsByClassName&&function(className,context){
if(typeof context.getElementsByClassName!==strundefined&&documentIsHTML){
return context.getElementsByClassName(className);
}
};







rbuggyMatches=[];






rbuggyQSA=[];

if((support.qsa=rnative.test(doc.querySelectorAll))){


assert(function(div){





div.innerHTML="<select><option selected=''></option></select>";



if(!div.querySelectorAll("[selected]").length){
rbuggyQSA.push("\\["+whitespace+"*(?:value|"+booleans+")");
}




if(!div.querySelectorAll(":checked").length){
rbuggyQSA.push(":checked");
}
});

assert(function(div){






var input=doc.createElement("input");
input.setAttribute("type","hidden");
div.appendChild(input).setAttribute("t","");

if(div.querySelectorAll("[t^='']").length){
rbuggyQSA.push("[*^$]="+whitespace+"*(?:''|\"\")");
}



if(!div.querySelectorAll(":enabled").length){
rbuggyQSA.push(":enabled",":disabled");
}


div.querySelectorAll("*,:x");
rbuggyQSA.push(",.*:");
});
}

if((support.matchesSelector=rnative.test((matches=docElem.webkitMatchesSelector||
docElem.mozMatchesSelector||
docElem.oMatchesSelector||
docElem.msMatchesSelector)))){

assert(function(div){


support.disconnectedMatch=matches.call(div,"div");



matches.call(div,"[s!='']:x");
rbuggyMatches.push("!=",pseudos);
});
}

rbuggyQSA=rbuggyQSA.length&&new RegExp(rbuggyQSA.join("|"));
rbuggyMatches=rbuggyMatches.length&&new RegExp(rbuggyMatches.join("|"));







contains=rnative.test(docElem.contains)||docElem.compareDocumentPosition?
function(a,b){
var adown=a.nodeType===9?a.documentElement:a,
bup=b&&b.parentNode;
return a===bup||!!(bup&&bup.nodeType===1&&(
adown.contains?
adown.contains(bup):
a.compareDocumentPosition&&a.compareDocumentPosition(bup)&16
));
}:
function(a,b){
if(b){
while((b=b.parentNode)){
if(b===a){
return true;
}
}
}
return false;
};





sortOrder=docElem.compareDocumentPosition?
function(a,b){


if(a===b){
hasDuplicate=true;
return 0;
}

var compare=b.compareDocumentPosition&&a.compareDocumentPosition&&a.compareDocumentPosition(b);

if(compare){

if(compare&1||
(!support.sortDetached&&b.compareDocumentPosition(a)===compare)){


if(a===doc||contains(preferredDoc,a)){
return-1;
}
if(b===doc||contains(preferredDoc,b)){
return 1;
}


return sortInput?
(indexOf.call(sortInput,a)-indexOf.call(sortInput,b)):
0;
}

return compare&4?-1:1;
}


return a.compareDocumentPosition?-1:1;
}:
function(a,b){
var cur,
i=0,
aup=a.parentNode,
bup=b.parentNode,
ap=[a],
bp=[b];


if(a===b){
hasDuplicate=true;
return 0;


}else if(!aup||!bup){
return a===doc?-1:
b===doc?1:
aup?-1:
bup?1:
sortInput?
(indexOf.call(sortInput,a)-indexOf.call(sortInput,b)):
0;


}else if(aup===bup){
return siblingCheck(a,b);
}


cur=a;
while((cur=cur.parentNode)){
ap.unshift(cur);
}
cur=b;
while((cur=cur.parentNode)){
bp.unshift(cur);
}


while(ap[i]===bp[i]){
i++;
}

return i?

siblingCheck(ap[i],bp[i]):


ap[i]===preferredDoc?-1:
bp[i]===preferredDoc?1:
0;
};

return doc;
};

Sizzle.matches=function(expr,elements){
return Sizzle(expr,null,null,elements);
};

Sizzle.matchesSelector=function(elem,expr){

if((elem.ownerDocument||elem)!==document){
setDocument(elem);
}


expr=expr.replace(rattributeQuotes,"='$1']");

if(support.matchesSelector&&documentIsHTML&&
(!rbuggyMatches||!rbuggyMatches.test(expr))&&
(!rbuggyQSA||!rbuggyQSA.test(expr))){

try{
var ret=matches.call(elem,expr);


if(ret||support.disconnectedMatch||


elem.document&&elem.document.nodeType!==11){
return ret;
}
}catch(e){}
}

return Sizzle(expr,document,null,[elem]).length>0;
};

Sizzle.contains=function(context,elem){

if((context.ownerDocument||context)!==document){
setDocument(context);
}
return contains(context,elem);
};

Sizzle.attr=function(elem,name){

if((elem.ownerDocument||elem)!==document){
setDocument(elem);
}

var fn=Expr.attrHandle[name.toLowerCase()],

val=fn&&hasOwn.call(Expr.attrHandle,name.toLowerCase())?
fn(elem,name,!documentIsHTML):
undefined;

return val===undefined?
support.attributes||!documentIsHTML?
elem.getAttribute(name):
(val=elem.getAttributeNode(name))&&val.specified?
val.value:
null:
val;
};

Sizzle.error=function(msg){
throw new Error("Syntax error, unrecognized expression: "+msg);
};





Sizzle.uniqueSort=function(results){
var elem,
duplicates=[],
j=0,
i=0;


hasDuplicate=!support.detectDuplicates;
sortInput=!support.sortStable&&results.slice(0);
results.sort(sortOrder);

if(hasDuplicate){
while((elem=results[i++])){
if(elem===results[i]){
j=duplicates.push(i);
}
}
while(j--){
results.splice(duplicates[j],1);
}
}

return results;
};





getText=Sizzle.getText=function(elem){
var node,
ret="",
i=0,
nodeType=elem.nodeType;

if(!nodeType){

for(;(node=elem[i]);i++){

ret+=getText(node);
}
}else if(nodeType===1||nodeType===9||nodeType===11){


if(typeof elem.textContent==="string"){
return elem.textContent;
}else{

for(elem=elem.firstChild;elem;elem=elem.nextSibling){
ret+=getText(elem);
}
}
}else if(nodeType===3||nodeType===4){
return elem.nodeValue;
}


return ret;
};

Expr=Sizzle.selectors={


cacheLength:50,

createPseudo:markFunction,

match:matchExpr,

attrHandle:{},

find:{},

relative:{
">":{dir:"parentNode",first:true},
" ":{dir:"parentNode"},
"+":{dir:"previousSibling",first:true},
"~":{dir:"previousSibling"}
},

preFilter:{
"ATTR":function(match){
match[1]=match[1].replace(runescape,funescape);


match[3]=(match[4]||match[5]||"").replace(runescape,funescape);

if(match[2]==="~="){
match[3]=" "+match[3]+" ";
}

return match.slice(0,4);
},

"CHILD":function(match){










match[1]=match[1].toLowerCase();

if(match[1].slice(0,3)==="nth"){

if(!match[3]){
Sizzle.error(match[0]);
}



match[4]=+(match[4]?match[5]+(match[6]||1):2*(match[3]==="even"||match[3]==="odd"));
match[5]=+((match[7]+match[8])||match[3]==="odd");


}else if(match[3]){
Sizzle.error(match[0]);
}

return match;
},

"PSEUDO":function(match){
var excess,
unquoted=!match[5]&&match[2];

if(matchExpr["CHILD"].test(match[0])){
return null;
}


if(match[3]&&match[4]!==undefined){
match[2]=match[4];


}else if(unquoted&&rpseudo.test(unquoted)&&

(excess=tokenize(unquoted,true))&&

(excess=unquoted.indexOf(")",unquoted.length-excess)-unquoted.length)){


match[0]=match[0].slice(0,excess);
match[2]=unquoted.slice(0,excess);
}


return match.slice(0,3);
}
},

filter:{

"TAG":function(nodeNameSelector){
var nodeName=nodeNameSelector.replace(runescape,funescape).toLowerCase();
return nodeNameSelector==="*"?
function(){return true;}:
function(elem){
return elem.nodeName&&elem.nodeName.toLowerCase()===nodeName;
};
},

"CLASS":function(className){
var pattern=classCache[className+" "];

return pattern||
(pattern=new RegExp("(^|"+whitespace+")"+className+"("+whitespace+"|$)"))&&
classCache(className,function(elem){
return pattern.test(typeof elem.className==="string"&&elem.className||typeof elem.getAttribute!==strundefined&&elem.getAttribute("class")||"");
});
},

"ATTR":function(name,operator,check){
return function(elem){
var result=Sizzle.attr(elem,name);

if(result==null){
return operator==="!=";
}
if(!operator){
return true;
}

result+="";

return operator==="="?result===check:
operator==="!="?result!==check:
operator==="^="?check&&result.indexOf(check)===0:
operator==="*="?check&&result.indexOf(check)>-1:
operator==="$="?check&&result.slice(-check.length)===check:
operator==="~="?(" "+result+" ").indexOf(check)>-1:
operator==="|="?result===check||result.slice(0,check.length+1)===check+"-":
false;
};
},

"CHILD":function(type,what,argument,first,last){
var simple=type.slice(0,3)!=="nth",
forward=type.slice(-4)!=="last",
ofType=what==="of-type";

return first===1&&last===0?


function(elem){
return!!elem.parentNode;
}:

function(elem,context,xml){
var cache,outerCache,node,diff,nodeIndex,start,
dir=simple!==forward?"nextSibling":"previousSibling",
parent=elem.parentNode,
name=ofType&&elem.nodeName.toLowerCase(),
useCache=!xml&&!ofType;

if(parent){


if(simple){
while(dir){
node=elem;
while((node=node[dir])){
if(ofType?node.nodeName.toLowerCase()===name:node.nodeType===1){
return false;
}
}

start=dir=type==="only"&&!start&&"nextSibling";
}
return true;
}

start=[forward?parent.firstChild:parent.lastChild];


if(forward&&useCache){

outerCache=parent[expando]||(parent[expando]={});
cache=outerCache[type]||[];
nodeIndex=cache[0]===dirruns&&cache[1];
diff=cache[0]===dirruns&&cache[2];
node=nodeIndex&&parent.childNodes[nodeIndex];

while((node=++nodeIndex&&node&&node[dir]||


(diff=nodeIndex=0)||start.pop())){


if(node.nodeType===1&&++diff&&node===elem){
outerCache[type]=[dirruns,nodeIndex,diff];
break;
}
}


}else if(useCache&&(cache=(elem[expando]||(elem[expando]={}))[type])&&cache[0]===dirruns){
diff=cache[1];


}else{

while((node=++nodeIndex&&node&&node[dir]||
(diff=nodeIndex=0)||start.pop())){

if((ofType?node.nodeName.toLowerCase()===name:node.nodeType===1)&&++diff){

if(useCache){
(node[expando]||(node[expando]={}))[type]=[dirruns,diff];
}

if(node===elem){
break;
}
}
}
}


diff-=last;
return diff===first||(diff%first===0&&diff/first>=0);
}
};
},

"PSEUDO":function(pseudo,argument){




var args,
fn=Expr.pseudos[pseudo]||Expr.setFilters[pseudo.toLowerCase()]||
Sizzle.error("unsupported pseudo: "+pseudo);




if(fn[expando]){
return fn(argument);
}


if(fn.length>1){
args=[pseudo,pseudo,"",argument];
return Expr.setFilters.hasOwnProperty(pseudo.toLowerCase())?
markFunction(function(seed,matches){
var idx,
matched=fn(seed,argument),
i=matched.length;
while(i--){
idx=indexOf.call(seed,matched[i]);
seed[idx]=!(matches[idx]=matched[i]);
}
}):
function(elem){
return fn(elem,0,args);
};
}

return fn;
}
},

pseudos:{

"not":markFunction(function(selector){



var input=[],
results=[],
matcher=compile(selector.replace(rtrim,"$1"));

return matcher[expando]?
markFunction(function(seed,matches,context,xml){
var elem,
unmatched=matcher(seed,null,xml,[]),
i=seed.length;


while(i--){
if((elem=unmatched[i])){
seed[i]=!(matches[i]=elem);
}
}
}):
function(elem,context,xml){
input[0]=elem;
matcher(input,null,xml,results);
return!results.pop();
};
}),

"has":markFunction(function(selector){
return function(elem){
return Sizzle(selector,elem).length>0;
};
}),

"contains":markFunction(function(text){
return function(elem){
return(elem.textContent||elem.innerText||getText(elem)).indexOf(text)>-1;
};
}),








"lang":markFunction(function(lang){

if(!ridentifier.test(lang||"")){
Sizzle.error("unsupported lang: "+lang);
}
lang=lang.replace(runescape,funescape).toLowerCase();
return function(elem){
var elemLang;
do{
if((elemLang=documentIsHTML?
elem.lang:
elem.getAttribute("xml:lang")||elem.getAttribute("lang"))){

elemLang=elemLang.toLowerCase();
return elemLang===lang||elemLang.indexOf(lang+"-")===0;
}
}while((elem=elem.parentNode)&&elem.nodeType===1);
return false;
};
}),


"target":function(elem){
var hash=window.location&&window.location.hash;
return hash&&hash.slice(1)===elem.id;
},

"root":function(elem){
return elem===docElem;
},

"focus":function(elem){
return elem===document.activeElement&&(!document.hasFocus||document.hasFocus())&&!!(elem.type||elem.href||~elem.tabIndex);
},


"enabled":function(elem){
return elem.disabled===false;
},

"disabled":function(elem){
return elem.disabled===true;
},

"checked":function(elem){


var nodeName=elem.nodeName.toLowerCase();
return(nodeName==="input"&&!!elem.checked)||(nodeName==="option"&&!!elem.selected);
},

"selected":function(elem){


if(elem.parentNode){
elem.parentNode.selectedIndex;
}

return elem.selected===true;
},


"empty":function(elem){





for(elem=elem.firstChild;elem;elem=elem.nextSibling){
if(elem.nodeName>"@"||elem.nodeType===3||elem.nodeType===4){
return false;
}
}
return true;
},

"parent":function(elem){
return!Expr.pseudos["empty"](elem);
},


"header":function(elem){
return rheader.test(elem.nodeName);
},

"input":function(elem){
return rinputs.test(elem.nodeName);
},

"button":function(elem){
var name=elem.nodeName.toLowerCase();
return name==="input"&&elem.type==="button"||name==="button";
},

"text":function(elem){
var attr;


return elem.nodeName.toLowerCase()==="input"&&
elem.type==="text"&&
((attr=elem.getAttribute("type"))==null||attr.toLowerCase()===elem.type);
},


"first":createPositionalPseudo(function(){
return[0];
}),

"last":createPositionalPseudo(function(matchIndexes,length){
return[length-1];
}),

"eq":createPositionalPseudo(function(matchIndexes,length,argument){
return[argument<0?argument+length:argument];
}),

"even":createPositionalPseudo(function(matchIndexes,length){
var i=0;
for(;i<length;i+=2){
matchIndexes.push(i);
}
return matchIndexes;
}),

"odd":createPositionalPseudo(function(matchIndexes,length){
var i=1;
for(;i<length;i+=2){
matchIndexes.push(i);
}
return matchIndexes;
}),

"lt":createPositionalPseudo(function(matchIndexes,length,argument){
var i=argument<0?argument+length:argument;
for(;--i>=0;){
matchIndexes.push(i);
}
return matchIndexes;
}),

"gt":createPositionalPseudo(function(matchIndexes,length,argument){
var i=argument<0?argument+length:argument;
for(;++i<length;){
matchIndexes.push(i);
}
return matchIndexes;
})
}
};

Expr.pseudos["nth"]=Expr.pseudos["eq"];


for(i in{radio:true,checkbox:true,file:true,password:true,image:true}){
Expr.pseudos[i]=createInputPseudo(i);
}
for(i in{submit:true,reset:true}){
Expr.pseudos[i]=createButtonPseudo(i);
}


function setFilters(){}
setFilters.prototype=Expr.filters=Expr.pseudos;
Expr.setFilters=new setFilters();

function tokenize(selector,parseOnly){
var matched,match,tokens,type,
soFar,groups,preFilters,
cached=tokenCache[selector+" "];

if(cached){
return parseOnly?0:cached.slice(0);
}

soFar=selector;
groups=[];
preFilters=Expr.preFilter;

while(soFar){


if(!matched||(match=rcomma.exec(soFar))){
if(match){

soFar=soFar.slice(match[0].length)||soFar;
}
groups.push(tokens=[]);
}

matched=false;


if((match=rcombinators.exec(soFar))){
matched=match.shift();
tokens.push({
value:matched,

type:match[0].replace(rtrim," ")
});
soFar=soFar.slice(matched.length);
}


for(type in Expr.filter){
if((match=matchExpr[type].exec(soFar))&&(!preFilters[type]||
(match=preFilters[type](match)))){
matched=match.shift();
tokens.push({
value:matched,
type:type,
matches:match
});
soFar=soFar.slice(matched.length);
}
}

if(!matched){
break;
}
}




return parseOnly?
soFar.length:
soFar?
Sizzle.error(selector):

tokenCache(selector,groups).slice(0);
}

function toSelector(tokens){
var i=0,
len=tokens.length,
selector="";
for(;i<len;i++){
selector+=tokens[i].value;
}
return selector;
}

function addCombinator(matcher,combinator,base){
var dir=combinator.dir,
checkNonElements=base&&dir==="parentNode",
doneName=done++;

return combinator.first?

function(elem,context,xml){
while((elem=elem[dir])){
if(elem.nodeType===1||checkNonElements){
return matcher(elem,context,xml);
}
}
}:


function(elem,context,xml){
var data,cache,outerCache,
dirkey=dirruns+" "+doneName;


if(xml){
while((elem=elem[dir])){
if(elem.nodeType===1||checkNonElements){
if(matcher(elem,context,xml)){
return true;
}
}
}
}else{
while((elem=elem[dir])){
if(elem.nodeType===1||checkNonElements){
outerCache=elem[expando]||(elem[expando]={});
if((cache=outerCache[dir])&&cache[0]===dirkey){
if((data=cache[1])===true||data===cachedruns){
return data===true;
}
}else{
cache=outerCache[dir]=[dirkey];
cache[1]=matcher(elem,context,xml)||cachedruns;
if(cache[1]===true){
return true;
}
}
}
}
}
};
}

function elementMatcher(matchers){
return matchers.length>1?
function(elem,context,xml){
var i=matchers.length;
while(i--){
if(!matchers[i](elem,context,xml)){
return false;
}
}
return true;
}:
matchers[0];
}

function condense(unmatched,map,filter,context,xml){
var elem,
newUnmatched=[],
i=0,
len=unmatched.length,
mapped=map!=null;

for(;i<len;i++){
if((elem=unmatched[i])){
if(!filter||filter(elem,context,xml)){
newUnmatched.push(elem);
if(mapped){
map.push(i);
}
}
}
}

return newUnmatched;
}

function setMatcher(preFilter,selector,matcher,postFilter,postFinder,postSelector){
if(postFilter&&!postFilter[expando]){
postFilter=setMatcher(postFilter);
}
if(postFinder&&!postFinder[expando]){
postFinder=setMatcher(postFinder,postSelector);
}
return markFunction(function(seed,results,context,xml){
var temp,i,elem,
preMap=[],
postMap=[],
preexisting=results.length,


elems=seed||multipleContexts(selector||"*",context.nodeType?[context]:context,[]),


matcherIn=preFilter&&(seed||!selector)?
condense(elems,preMap,preFilter,context,xml):
elems,

matcherOut=matcher?

postFinder||(seed?preFilter:preexisting||postFilter)?


[]:


results:
matcherIn;


if(matcher){
matcher(matcherIn,matcherOut,context,xml);
}


if(postFilter){
temp=condense(matcherOut,postMap);
postFilter(temp,[],context,xml);


i=temp.length;
while(i--){
if((elem=temp[i])){
matcherOut[postMap[i]]=!(matcherIn[postMap[i]]=elem);
}
}
}

if(seed){
if(postFinder||preFilter){
if(postFinder){

temp=[];
i=matcherOut.length;
while(i--){
if((elem=matcherOut[i])){

temp.push((matcherIn[i]=elem));
}
}
postFinder(null,(matcherOut=[]),temp,xml);
}


i=matcherOut.length;
while(i--){
if((elem=matcherOut[i])&&
(temp=postFinder?indexOf.call(seed,elem):preMap[i])>-1){

seed[temp]=!(results[temp]=elem);
}
}
}


}else{
matcherOut=condense(
matcherOut===results?
matcherOut.splice(preexisting,matcherOut.length):
matcherOut
);
if(postFinder){
postFinder(null,results,matcherOut,xml);
}else{
push.apply(results,matcherOut);
}
}
});
}

function matcherFromTokens(tokens){
var checkContext,matcher,j,
len=tokens.length,
leadingRelative=Expr.relative[tokens[0].type],
implicitRelative=leadingRelative||Expr.relative[" "],
i=leadingRelative?1:0,


matchContext=addCombinator(function(elem){
return elem===checkContext;
},implicitRelative,true),
matchAnyContext=addCombinator(function(elem){
return indexOf.call(checkContext,elem)>-1;
},implicitRelative,true),
matchers=[function(elem,context,xml){
return(!leadingRelative&&(xml||context!==outermostContext))||(
(checkContext=context).nodeType?
matchContext(elem,context,xml):
matchAnyContext(elem,context,xml));
}];

for(;i<len;i++){
if((matcher=Expr.relative[tokens[i].type])){
matchers=[addCombinator(elementMatcher(matchers),matcher)];
}else{
matcher=Expr.filter[tokens[i].type].apply(null,tokens[i].matches);


if(matcher[expando]){

j=++i;
for(;j<len;j++){
if(Expr.relative[tokens[j].type]){
break;
}
}
return setMatcher(
i>1&&elementMatcher(matchers),
i>1&&toSelector(

tokens.slice(0,i-1).concat({value:tokens[i-2].type===" "?"*":""})
).replace(rtrim,"$1"),
matcher,
i<j&&matcherFromTokens(tokens.slice(i,j)),
j<len&&matcherFromTokens((tokens=tokens.slice(j))),
j<len&&toSelector(tokens)
);
}
matchers.push(matcher);
}
}

return elementMatcher(matchers);
}

function matcherFromGroupMatchers(elementMatchers,setMatchers){

var matcherCachedRuns=0,
bySet=setMatchers.length>0,
byElement=elementMatchers.length>0,
superMatcher=function(seed,context,xml,results,expandContext){
var elem,j,matcher,
setMatched=[],
matchedCount=0,
i="0",
unmatched=seed&&[],
outermost=expandContext!=null,
contextBackup=outermostContext,

elems=seed||byElement&&Expr.find["TAG"]("*",expandContext&&context.parentNode||context),

dirrunsUnique=(dirruns+=contextBackup==null?1:Math.random()||0.1);

if(outermost){
outermostContext=context!==document&&context;
cachedruns=matcherCachedRuns;
}



for(;(elem=elems[i])!=null;i++){
if(byElement&&elem){
j=0;
while((matcher=elementMatchers[j++])){
if(matcher(elem,context,xml)){
results.push(elem);
break;
}
}
if(outermost){
dirruns=dirrunsUnique;
cachedruns=++matcherCachedRuns;
}
}


if(bySet){

if((elem=!matcher&&elem)){
matchedCount--;
}


if(seed){
unmatched.push(elem);
}
}
}


matchedCount+=i;
if(bySet&&i!==matchedCount){
j=0;
while((matcher=setMatchers[j++])){
matcher(unmatched,setMatched,context,xml);
}

if(seed){

if(matchedCount>0){
while(i--){
if(!(unmatched[i]||setMatched[i])){
setMatched[i]=pop.call(results);
}
}
}


setMatched=condense(setMatched);
}


push.apply(results,setMatched);


if(outermost&&!seed&&setMatched.length>0&&
(matchedCount+setMatchers.length)>1){

Sizzle.uniqueSort(results);
}
}


if(outermost){
dirruns=dirrunsUnique;
outermostContext=contextBackup;
}

return unmatched;
};

return bySet?
markFunction(superMatcher):
superMatcher;
}

compile=Sizzle.compile=function(selector,group){
var i,
setMatchers=[],
elementMatchers=[],
cached=compilerCache[selector+" "];

if(!cached){

if(!group){
group=tokenize(selector);
}
i=group.length;
while(i--){
cached=matcherFromTokens(group[i]);
if(cached[expando]){
setMatchers.push(cached);
}else{
elementMatchers.push(cached);
}
}


cached=compilerCache(selector,matcherFromGroupMatchers(elementMatchers,setMatchers));
}
return cached;
};

function multipleContexts(selector,contexts,results){
var i=0,
len=contexts.length;
for(;i<len;i++){
Sizzle(selector,contexts[i],results);
}
return results;
}

function select(selector,context,results,seed){
var i,tokens,token,type,find,
match=tokenize(selector);

if(!seed){

if(match.length===1){


tokens=match[0]=match[0].slice(0);
if(tokens.length>2&&(token=tokens[0]).type==="ID"&&
support.getById&&context.nodeType===9&&documentIsHTML&&
Expr.relative[tokens[1].type]){

context=(Expr.find["ID"](token.matches[0].replace(runescape,funescape),context)||[])[0];
if(!context){
return results;
}
selector=selector.slice(tokens.shift().value.length);
}


i=matchExpr["needsContext"].test(selector)?0:tokens.length;
while(i--){
token=tokens[i];


if(Expr.relative[(type=token.type)]){
break;
}
if((find=Expr.find[type])){

if((seed=find(
token.matches[0].replace(runescape,funescape),
rsibling.test(tokens[0].type)&&context.parentNode||context
))){


tokens.splice(i,1);
selector=seed.length&&toSelector(tokens);
if(!selector){
push.apply(results,seed);
return results;
}

break;
}
}
}
}
}



compile(selector,match)(
seed,
context,
!documentIsHTML,
results,
rsibling.test(selector)
);
return results;
}




support.sortStable=expando.split("").sort(sortOrder).join("")===expando;



support.detectDuplicates=hasDuplicate;


setDocument();



support.sortDetached=assert(function(div1){

return div1.compareDocumentPosition(document.createElement("div"))&1;
});




if(!assert(function(div){
div.innerHTML="<a href='#'></a>";
return div.firstChild.getAttribute("href")==="#";
})){
addHandle("type|href|height|width",function(elem,name,isXML){
if(!isXML){
return elem.getAttribute(name,name.toLowerCase()==="type"?1:2);
}
});
}



if(!support.attributes||!assert(function(div){
div.innerHTML="<input/>";
div.firstChild.setAttribute("value","");
return div.firstChild.getAttribute("value")==="";
})){
addHandle("value",function(elem,name,isXML){
if(!isXML&&elem.nodeName.toLowerCase()==="input"){
return elem.defaultValue;
}
});
}



if(!assert(function(div){
return div.getAttribute("disabled")==null;
})){
addHandle(booleans,function(elem,name,isXML){
var val;
if(!isXML){
return(val=elem.getAttributeNode(name))&&val.specified?
val.value:
elem[name]===true?name.toLowerCase():null;
}
});
}

jQuery.find=Sizzle;
jQuery.expr=Sizzle.selectors;
jQuery.expr[":"]=jQuery.expr.pseudos;
jQuery.unique=Sizzle.uniqueSort;
jQuery.text=Sizzle.getText;
jQuery.isXMLDoc=Sizzle.isXML;
jQuery.contains=Sizzle.contains;


})(window);

var optionsCache={};


function createOptions(options){
var object=optionsCache[options]={};
jQuery.each(options.match(core_rnotwhite)||[],function(_,flag){
object[flag]=true;
});
return object;
}























jQuery.Callbacks=function(options){



options=typeof options==="string"?
(optionsCache[options]||createOptions(options)):
jQuery.extend({},options);

var
firing,

memory,

fired,

firingLength,

firingIndex,

firingStart,

list=[],

stack=!options.once&&[],

fire=function(data){
memory=options.memory&&data;
fired=true;
firingIndex=firingStart||0;
firingStart=0;
firingLength=list.length;
firing=true;
for(;list&&firingIndex<firingLength;firingIndex++){
if(list[firingIndex].apply(data[0],data[1])===false&&options.stopOnFalse){
memory=false;
break;
}
}
firing=false;
if(list){
if(stack){
if(stack.length){
fire(stack.shift());
}
}else if(memory){
list=[];
}else{
self.disable();
}
}
},

self={

add:function(){
if(list){

var start=list.length;
(function add(args){
jQuery.each(args,function(_,arg){
var type=jQuery.type(arg);
if(type==="function"){
if(!options.unique||!self.has(arg)){
list.push(arg);
}
}else if(arg&&arg.length&&type!=="string"){

add(arg);
}
});
})(arguments);


if(firing){
firingLength=list.length;


}else if(memory){
firingStart=start;
fire(memory);
}
}
return this;
},

remove:function(){
if(list){
jQuery.each(arguments,function(_,arg){
var index;
while((index=jQuery.inArray(arg,list,index))>-1){
list.splice(index,1);

if(firing){
if(index<=firingLength){
firingLength--;
}
if(index<=firingIndex){
firingIndex--;
}
}
}
});
}
return this;
},


has:function(fn){
return fn?jQuery.inArray(fn,list)>-1:!!(list&&list.length);
},

empty:function(){
list=[];
firingLength=0;
return this;
},

disable:function(){
list=stack=memory=undefined;
return this;
},

disabled:function(){
return!list;
},

lock:function(){
stack=undefined;
if(!memory){
self.disable();
}
return this;
},

locked:function(){
return!stack;
},

fireWith:function(context,args){
if(list&&(!fired||stack)){
args=args||[];
args=[context,args.slice?args.slice():args];
if(firing){
stack.push(args);
}else{
fire(args);
}
}
return this;
},

fire:function(){
self.fireWith(this,arguments);
return this;
},

fired:function(){
return!!fired;
}
};

return self;
};
jQuery.extend({

Deferred:function(func){
var tuples=[

["resolve","done",jQuery.Callbacks("once memory"),"resolved"],
["reject","fail",jQuery.Callbacks("once memory"),"rejected"],
["notify","progress",jQuery.Callbacks("memory")]
],
state="pending",
promise={
state:function(){
return state;
},
always:function(){
deferred.done(arguments).fail(arguments);
return this;
},
then:function(){
var fns=arguments;
return jQuery.Deferred(function(newDefer){
jQuery.each(tuples,function(i,tuple){
var action=tuple[0],
fn=jQuery.isFunction(fns[i])&&fns[i];

deferred[tuple[1]](function(){
var returned=fn&&fn.apply(this,arguments);
if(returned&&jQuery.isFunction(returned.promise)){
returned.promise()
.done(newDefer.resolve)
.fail(newDefer.reject)
.progress(newDefer.notify);
}else{
newDefer[action+"With"](this===promise?newDefer.promise():this,fn?[returned]:arguments);
}
});
});
fns=null;
}).promise();
},


promise:function(obj){
return obj!=null?jQuery.extend(obj,promise):promise;
}
},
deferred={};


promise.pipe=promise.then;


jQuery.each(tuples,function(i,tuple){
var list=tuple[2],
stateString=tuple[3];


promise[tuple[1]]=list.add;


if(stateString){
list.add(function(){

state=stateString;


},tuples[i^1][2].disable,tuples[2][2].lock);
}


deferred[tuple[0]]=function(){
deferred[tuple[0]+"With"](this===deferred?promise:this,arguments);
return this;
};
deferred[tuple[0]+"With"]=list.fireWith;
});


promise.promise(deferred);


if(func){
func.call(deferred,deferred);
}


return deferred;
},


when:function(subordinate){
var i=0,
resolveValues=core_slice.call(arguments),
length=resolveValues.length,


remaining=length!==1||(subordinate&&jQuery.isFunction(subordinate.promise))?length:0,


deferred=remaining===1?subordinate:jQuery.Deferred(),


updateFunc=function(i,contexts,values){
return function(value){
contexts[i]=this;
values[i]=arguments.length>1?core_slice.call(arguments):value;
if(values===progressValues){
deferred.notifyWith(contexts,values);
}else if(!(--remaining)){
deferred.resolveWith(contexts,values);
}
};
},

progressValues,progressContexts,resolveContexts;


if(length>1){
progressValues=new Array(length);
progressContexts=new Array(length);
resolveContexts=new Array(length);
for(;i<length;i++){
if(resolveValues[i]&&jQuery.isFunction(resolveValues[i].promise)){
resolveValues[i].promise()
.done(updateFunc(i,resolveContexts,resolveValues))
.fail(deferred.reject)
.progress(updateFunc(i,progressContexts,progressValues));
}else{
--remaining;
}
}
}


if(!remaining){
deferred.resolveWith(resolveContexts,resolveValues);
}

return deferred.promise();
}
});
jQuery.support=(function(support){

var all,a,input,select,fragment,opt,eventName,isSupported,i,
div=document.createElement("div");


div.setAttribute("className","t");
div.innerHTML="  <link/><table></table><a href='/a'>a</a><input type='checkbox'/>";


all=div.getElementsByTagName("*")||[];
a=div.getElementsByTagName("a")[0];
if(!a||!a.style||!all.length){
return support;
}


select=document.createElement("select");
opt=select.appendChild(document.createElement("option"));
input=div.getElementsByTagName("input")[0];

a.style.cssText="top:1px;float:left;opacity:.5";


support.getSetAttribute=div.className!=="t";


support.leadingWhitespace=div.firstChild.nodeType===3;



support.tbody=!div.getElementsByTagName("tbody").length;



support.htmlSerialize=!!div.getElementsByTagName("link").length;



support.style=/top/.test(a.getAttribute("style"));



support.hrefNormalized=a.getAttribute("href")==="/a";




support.opacity=/^0.5/.test(a.style.opacity);



support.cssFloat=!!a.style.cssFloat;


support.checkOn=!!input.value;



support.optSelected=opt.selected;


support.enctype=!!document.createElement("form").enctype;



support.html5Clone=document.createElement("nav").cloneNode(true).outerHTML!=="<:nav></:nav>";


support.inlineBlockNeedsLayout=false;
support.shrinkWrapBlocks=false;
support.pixelPosition=false;
support.deleteExpando=true;
support.noCloneEvent=true;
support.reliableMarginRight=true;
support.boxSizingReliable=true;


input.checked=true;
support.noCloneChecked=input.cloneNode(true).checked;



select.disabled=true;
support.optDisabled=!opt.disabled;


try{
delete div.test;
}catch(e){
support.deleteExpando=false;
}


input=document.createElement("input");
input.setAttribute("value","");
support.input=input.getAttribute("value")==="";


input.value="t";
input.setAttribute("type","radio");
support.radioValue=input.value==="t";


input.setAttribute("checked","t");
input.setAttribute("name","t");

fragment=document.createDocumentFragment();
fragment.appendChild(input);



support.appendChecked=input.checked;


support.checkClone=fragment.cloneNode(true).cloneNode(true).lastChild.checked;




if(div.attachEvent){
div.attachEvent("onclick",function(){
support.noCloneEvent=false;
});

div.cloneNode(true).click();
}



for(i in{submit:true,change:true,focusin:true}){
div.setAttribute(eventName="on"+i,"t");

support[i+"Bubbles"]=eventName in window||div.attributes[eventName].expando===false;
}

div.style.backgroundClip="content-box";
div.cloneNode(true).style.backgroundClip="";
support.clearCloneStyle=div.style.backgroundClip==="content-box";



for(i in jQuery(support)){
break;
}
support.ownLast=i!=="0";


jQuery(function(){
var container,marginDiv,tds,
divReset="padding:0;margin:0;border:0;display:block;box-sizing:content-box;-moz-box-sizing:content-box;-webkit-box-sizing:content-box;",
body=document.getElementsByTagName("body")[0];

if(!body){

return;
}

container=document.createElement("div");
container.style.cssText="border:0;width:0;height:0;position:absolute;top:0;left:-9999px;margin-top:1px";

body.appendChild(container).appendChild(div);








div.innerHTML="<table><tr><td></td><td>t</td></tr></table>";
tds=div.getElementsByTagName("td");
tds[0].style.cssText="padding:0;margin:0;border:0;display:none";
isSupported=(tds[0].offsetHeight===0);

tds[0].style.display="";
tds[1].style.display="none";



support.reliableHiddenOffsets=isSupported&&(tds[0].offsetHeight===0);


div.innerHTML="";
div.style.cssText="box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;padding:1px;border:1px;display:block;width:4px;margin-top:1%;position:absolute;top:1%;";



jQuery.swap(body,body.style.zoom!=null?{zoom:1}:{},function(){
support.boxSizing=div.offsetWidth===4;
});


if(window.getComputedStyle){
support.pixelPosition=(window.getComputedStyle(div,null)||{}).top!=="1%";
support.boxSizingReliable=(window.getComputedStyle(div,null)||{width:"4px"}).width==="4px";





marginDiv=div.appendChild(document.createElement("div"));
marginDiv.style.cssText=div.style.cssText=divReset;
marginDiv.style.marginRight=marginDiv.style.width="0";
div.style.width="1px";

support.reliableMarginRight=
!parseFloat((window.getComputedStyle(marginDiv,null)||{}).marginRight);
}

if(typeof div.style.zoom!==core_strundefined){




div.innerHTML="";
div.style.cssText=divReset+"width:1px;padding:1px;display:inline;zoom:1";
support.inlineBlockNeedsLayout=(div.offsetWidth===3);



div.style.display="block";
div.innerHTML="<div></div>";
div.firstChild.style.width="5px";
support.shrinkWrapBlocks=(div.offsetWidth!==3);

if(support.inlineBlockNeedsLayout){



body.style.zoom=1;
}
}

body.removeChild(container);


container=div=tds=marginDiv=null;
});


all=select=fragment=opt=a=input=null;

return support;
})({});

var rbrace=/(?:\{[\s\S]*\}|\[[\s\S]*\])$/,
rmultiDash=/([A-Z])/g;

function internalData(elem,name,data,pvt){
if(!jQuery.acceptData(elem)){
return;
}

var ret,thisCache,
internalKey=jQuery.expando,



isNode=elem.nodeType,



cache=isNode?jQuery.cache:elem,



id=isNode?elem[internalKey]:elem[internalKey]&&internalKey;



if((!id||!cache[id]||(!pvt&&!cache[id].data))&&data===undefined&&typeof name==="string"){
return;
}

if(!id){


if(isNode){
id=elem[internalKey]=core_deletedIds.pop()||jQuery.guid++;
}else{
id=internalKey;
}
}

if(!cache[id]){


cache[id]=isNode?{}:{toJSON:jQuery.noop};
}



if(typeof name==="object"||typeof name==="function"){
if(pvt){
cache[id]=jQuery.extend(cache[id],name);
}else{
cache[id].data=jQuery.extend(cache[id].data,name);
}
}

thisCache=cache[id];




if(!pvt){
if(!thisCache.data){
thisCache.data={};
}

thisCache=thisCache.data;
}

if(data!==undefined){
thisCache[jQuery.camelCase(name)]=data;
}



if(typeof name==="string"){


ret=thisCache[name];


if(ret==null){


ret=thisCache[jQuery.camelCase(name)];
}
}else{
ret=thisCache;
}

return ret;
}

function internalRemoveData(elem,name,pvt){
if(!jQuery.acceptData(elem)){
return;
}

var thisCache,i,
isNode=elem.nodeType,


cache=isNode?jQuery.cache:elem,
id=isNode?elem[jQuery.expando]:jQuery.expando;



if(!cache[id]){
return;
}

if(name){

thisCache=pvt?cache[id]:cache[id].data;

if(thisCache){


if(!jQuery.isArray(name)){


if(name in thisCache){
name=[name];
}else{


name=jQuery.camelCase(name);
if(name in thisCache){
name=[name];
}else{
name=name.split(" ");
}
}
}else{






name=name.concat(jQuery.map(name,jQuery.camelCase));
}

i=name.length;
while(i--){
delete thisCache[name[i]];
}



if(pvt?!isEmptyDataObject(thisCache):!jQuery.isEmptyObject(thisCache)){
return;
}
}
}


if(!pvt){
delete cache[id].data;



if(!isEmptyDataObject(cache[id])){
return;
}
}


if(isNode){
jQuery.cleanData([elem],true);



}else if(jQuery.support.deleteExpando||cache!=cache.window){

delete cache[id];


}else{
cache[id]=null;
}
}

jQuery.extend({
cache:{},



noData:{
"applet":true,
"embed":true,

"object":"clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"
},

hasData:function(elem){
elem=elem.nodeType?jQuery.cache[elem[jQuery.expando]]:elem[jQuery.expando];
return!!elem&&!isEmptyDataObject(elem);
},

data:function(elem,name,data){
return internalData(elem,name,data);
},

removeData:function(elem,name){
return internalRemoveData(elem,name);
},


_data:function(elem,name,data){
return internalData(elem,name,data,true);
},

_removeData:function(elem,name){
return internalRemoveData(elem,name,true);
},


acceptData:function(elem){

if(elem.nodeType&&elem.nodeType!==1&&elem.nodeType!==9){
return false;
}

var noData=elem.nodeName&&jQuery.noData[elem.nodeName.toLowerCase()];


return!noData||noData!==true&&elem.getAttribute("classid")===noData;
}
});

jQuery.fn.extend({
data:function(key,value){
var attrs,name,
data=null,
i=0,
elem=this[0];





if(key===undefined){
if(this.length){
data=jQuery.data(elem);

if(elem.nodeType===1&&!jQuery._data(elem,"parsedAttrs")){
attrs=elem.attributes;
for(;i<attrs.length;i++){
name=attrs[i].name;

if(name.indexOf("data-")===0){
name=jQuery.camelCase(name.slice(5));

dataAttr(elem,name,data[name]);
}
}
jQuery._data(elem,"parsedAttrs",true);
}
}

return data;
}


if(typeof key==="object"){
return this.each(function(){
jQuery.data(this,key);
});
}

return arguments.length>1?


this.each(function(){
jQuery.data(this,key,value);
}):



elem?dataAttr(elem,key,jQuery.data(elem,key)):null;
},

removeData:function(key){
return this.each(function(){
jQuery.removeData(this,key);
});
}
});

function dataAttr(elem,key,data){


if(data===undefined&&elem.nodeType===1){

var name="data-"+key.replace(rmultiDash,"-$1").toLowerCase();

data=elem.getAttribute(name);

if(typeof data==="string"){
try{
data=data==="true"?true:
data==="false"?false:
data==="null"?null:

+data+""===data?+data:
rbrace.test(data)?jQuery.parseJSON(data):
data;
}catch(e){}


jQuery.data(elem,key,data);

}else{
data=undefined;
}
}

return data;
}


function isEmptyDataObject(obj){
var name;
for(name in obj){


if(name==="data"&&jQuery.isEmptyObject(obj[name])){
continue;
}
if(name!=="toJSON"){
return false;
}
}

return true;
}
jQuery.extend({
queue:function(elem,type,data){
var queue;

if(elem){
type=(type||"fx")+"queue";
queue=jQuery._data(elem,type);


if(data){
if(!queue||jQuery.isArray(data)){
queue=jQuery._data(elem,type,jQuery.makeArray(data));
}else{
queue.push(data);
}
}
return queue||[];
}
},

dequeue:function(elem,type){
type=type||"fx";

var queue=jQuery.queue(elem,type),
startLength=queue.length,
fn=queue.shift(),
hooks=jQuery._queueHooks(elem,type),
next=function(){
jQuery.dequeue(elem,type);
};


if(fn==="inprogress"){
fn=queue.shift();
startLength--;
}

if(fn){



if(type==="fx"){
queue.unshift("inprogress");
}


delete hooks.stop;
fn.call(elem,next,hooks);
}

if(!startLength&&hooks){
hooks.empty.fire();
}
},


_queueHooks:function(elem,type){
var key=type+"queueHooks";
return jQuery._data(elem,key)||jQuery._data(elem,key,{
empty:jQuery.Callbacks("once memory").add(function(){
jQuery._removeData(elem,type+"queue");
jQuery._removeData(elem,key);
})
});
}
});

jQuery.fn.extend({
queue:function(type,data){
var setter=2;

if(typeof type!=="string"){
data=type;
type="fx";
setter--;
}

if(arguments.length<setter){
return jQuery.queue(this[0],type);
}

return data===undefined?
this:
this.each(function(){
var queue=jQuery.queue(this,type,data);


jQuery._queueHooks(this,type);

if(type==="fx"&&queue[0]!=="inprogress"){
jQuery.dequeue(this,type);
}
});
},
dequeue:function(type){
return this.each(function(){
jQuery.dequeue(this,type);
});
},


delay:function(time,type){
time=jQuery.fx?jQuery.fx.speeds[time]||time:time;
type=type||"fx";

return this.queue(type,function(next,hooks){
var timeout=setTimeout(next,time);
hooks.stop=function(){
clearTimeout(timeout);
};
});
},
clearQueue:function(type){
return this.queue(type||"fx",[]);
},


promise:function(type,obj){
var tmp,
count=1,
defer=jQuery.Deferred(),
elements=this,
i=this.length,
resolve=function(){
if(!(--count)){
defer.resolveWith(elements,[elements]);
}
};

if(typeof type!=="string"){
obj=type;
type=undefined;
}
type=type||"fx";

while(i--){
tmp=jQuery._data(elements[i],type+"queueHooks");
if(tmp&&tmp.empty){
count++;
tmp.empty.add(resolve);
}
}
resolve();
return defer.promise(obj);
}
});
var nodeHook,boolHook,
rclass=/[\t\r\n\f]/g,
rreturn=/\r/g,
rfocusable=/^(?:input|select|textarea|button|object)$/i,
rclickable=/^(?:a|area)$/i,
ruseDefault=/^(?:checked|selected)$/i,
getSetAttribute=jQuery.support.getSetAttribute,
getSetInput=jQuery.support.input;

jQuery.fn.extend({
attr:function(name,value){
return jQuery.access(this,jQuery.attr,name,value,arguments.length>1);
},

removeAttr:function(name){
return this.each(function(){
jQuery.removeAttr(this,name);
});
},

prop:function(name,value){
return jQuery.access(this,jQuery.prop,name,value,arguments.length>1);
},

removeProp:function(name){
name=jQuery.propFix[name]||name;
return this.each(function(){

try{
this[name]=undefined;
delete this[name];
}catch(e){}
});
},

addClass:function(value){
var classes,elem,cur,clazz,j,
i=0,
len=this.length,
proceed=typeof value==="string"&&value;

if(jQuery.isFunction(value)){
return this.each(function(j){
jQuery(this).addClass(value.call(this,j,this.className));
});
}

if(proceed){

classes=(value||"").match(core_rnotwhite)||[];

for(;i<len;i++){
elem=this[i];
cur=elem.nodeType===1&&(elem.className?
(" "+elem.className+" ").replace(rclass," "):
" "
);

if(cur){
j=0;
while((clazz=classes[j++])){
if(cur.indexOf(" "+clazz+" ")<0){
cur+=clazz+" ";
}
}
elem.className=jQuery.trim(cur);

}
}
}

return this;
},

removeClass:function(value){
var classes,elem,cur,clazz,j,
i=0,
len=this.length,
proceed=arguments.length===0||typeof value==="string"&&value;

if(jQuery.isFunction(value)){
return this.each(function(j){
jQuery(this).removeClass(value.call(this,j,this.className));
});
}
if(proceed){
classes=(value||"").match(core_rnotwhite)||[];

for(;i<len;i++){
elem=this[i];

cur=elem.nodeType===1&&(elem.className?
(" "+elem.className+" ").replace(rclass," "):
""
);

if(cur){
j=0;
while((clazz=classes[j++])){

while(cur.indexOf(" "+clazz+" ")>=0){
cur=cur.replace(" "+clazz+" "," ");
}
}
elem.className=value?jQuery.trim(cur):"";
}
}
}

return this;
},

toggleClass:function(value,stateVal){
var type=typeof value;

if(typeof stateVal==="boolean"&&type==="string"){
return stateVal?this.addClass(value):this.removeClass(value);
}

if(jQuery.isFunction(value)){
return this.each(function(i){
jQuery(this).toggleClass(value.call(this,i,this.className,stateVal),stateVal);
});
}

return this.each(function(){
if(type==="string"){

var className,
i=0,
self=jQuery(this),
classNames=value.match(core_rnotwhite)||[];

while((className=classNames[i++])){

if(self.hasClass(className)){
self.removeClass(className);
}else{
self.addClass(className);
}
}


}else if(type===core_strundefined||type==="boolean"){
if(this.className){

jQuery._data(this,"__className__",this.className);
}





this.className=this.className||value===false?"":jQuery._data(this,"__className__")||"";
}
});
},

hasClass:function(selector){
var className=" "+selector+" ",
i=0,
l=this.length;
for(;i<l;i++){
if(this[i].nodeType===1&&(" "+this[i].className+" ").replace(rclass," ").indexOf(className)>=0){
return true;
}
}

return false;
},

val:function(value){
var ret,hooks,isFunction,
elem=this[0];

if(!arguments.length){
if(elem){
hooks=jQuery.valHooks[elem.type]||jQuery.valHooks[elem.nodeName.toLowerCase()];

if(hooks&&"get"in hooks&&(ret=hooks.get(elem,"value"))!==undefined){
return ret;
}

ret=elem.value;

return typeof ret==="string"?

ret.replace(rreturn,""):

ret==null?"":ret;
}

return;
}

isFunction=jQuery.isFunction(value);

return this.each(function(i){
var val;

if(this.nodeType!==1){
return;
}

if(isFunction){
val=value.call(this,i,jQuery(this).val());
}else{
val=value;
}


if(val==null){
val="";
}else if(typeof val==="number"){
val+="";
}else if(jQuery.isArray(val)){
val=jQuery.map(val,function(value){
return value==null?"":value+"";
});
}

hooks=jQuery.valHooks[this.type]||jQuery.valHooks[this.nodeName.toLowerCase()];


if(!hooks||!("set"in hooks)||hooks.set(this,val,"value")===undefined){
this.value=val;
}
});
}
});

jQuery.extend({
valHooks:{
option:{
get:function(elem){

var val=jQuery.find.attr(elem,"value");
return val!=null?
val:
elem.text;
}
},
select:{
get:function(elem){
var value,option,
options=elem.options,
index=elem.selectedIndex,
one=elem.type==="select-one"||index<0,
values=one?null:[],
max=one?index+1:options.length,
i=index<0?
max:
one?index:0;


for(;i<max;i++){
option=options[i];


if((option.selected||i===index)&&

(jQuery.support.optDisabled?!option.disabled:option.getAttribute("disabled")===null)&&
(!option.parentNode.disabled||!jQuery.nodeName(option.parentNode,"optgroup"))){


value=jQuery(option).val();


if(one){
return value;
}


values.push(value);
}
}

return values;
},

set:function(elem,value){
var optionSet,option,
options=elem.options,
values=jQuery.makeArray(value),
i=options.length;

while(i--){
option=options[i];
if((option.selected=jQuery.inArray(jQuery(option).val(),values)>=0)){
optionSet=true;
}
}


if(!optionSet){
elem.selectedIndex=-1;
}
return values;
}
}
},

attr:function(elem,name,value){
var hooks,ret,
nType=elem.nodeType;


if(!elem||nType===3||nType===8||nType===2){
return;
}


if(typeof elem.getAttribute===core_strundefined){
return jQuery.prop(elem,name,value);
}



if(nType!==1||!jQuery.isXMLDoc(elem)){
name=name.toLowerCase();
hooks=jQuery.attrHooks[name]||
(jQuery.expr.match.bool.test(name)?boolHook:nodeHook);
}

if(value!==undefined){

if(value===null){
jQuery.removeAttr(elem,name);

}else if(hooks&&"set"in hooks&&(ret=hooks.set(elem,value,name))!==undefined){
return ret;

}else{
elem.setAttribute(name,value+"");
return value;
}

}else if(hooks&&"get"in hooks&&(ret=hooks.get(elem,name))!==null){
return ret;

}else{
ret=jQuery.find.attr(elem,name);


return ret==null?
undefined:
ret;
}
},

removeAttr:function(elem,value){
var name,propName,
i=0,
attrNames=value&&value.match(core_rnotwhite);

if(attrNames&&elem.nodeType===1){
while((name=attrNames[i++])){
propName=jQuery.propFix[name]||name;


if(jQuery.expr.match.bool.test(name)){

if(getSetInput&&getSetAttribute||!ruseDefault.test(name)){
elem[propName]=false;


}else{
elem[jQuery.camelCase("default-"+name)]=
elem[propName]=false;
}


}else{
jQuery.attr(elem,name,"");
}

elem.removeAttribute(getSetAttribute?name:propName);
}
}
},

attrHooks:{
type:{
set:function(elem,value){
if(!jQuery.support.radioValue&&value==="radio"&&jQuery.nodeName(elem,"input")){


var val=elem.value;
elem.setAttribute("type",value);
if(val){
elem.value=val;
}
return value;
}
}
}
},

propFix:{
"for":"htmlFor",
"class":"className"
},

prop:function(elem,name,value){
var ret,hooks,notxml,
nType=elem.nodeType;


if(!elem||nType===3||nType===8||nType===2){
return;
}

notxml=nType!==1||!jQuery.isXMLDoc(elem);

if(notxml){

name=jQuery.propFix[name]||name;
hooks=jQuery.propHooks[name];
}

if(value!==undefined){
return hooks&&"set"in hooks&&(ret=hooks.set(elem,value,name))!==undefined?
ret:
(elem[name]=value);

}else{
return hooks&&"get"in hooks&&(ret=hooks.get(elem,name))!==null?
ret:
elem[name];
}
},

propHooks:{
tabIndex:{
get:function(elem){



var tabindex=jQuery.find.attr(elem,"tabindex");

return tabindex?
parseInt(tabindex,10):
rfocusable.test(elem.nodeName)||rclickable.test(elem.nodeName)&&elem.href?
0:
-1;
}
}
}
});


boolHook={
set:function(elem,value,name){
if(value===false){

jQuery.removeAttr(elem,name);
}else if(getSetInput&&getSetAttribute||!ruseDefault.test(name)){

elem.setAttribute(!getSetAttribute&&jQuery.propFix[name]||name,name);


}else{
elem[jQuery.camelCase("default-"+name)]=elem[name]=true;
}

return name;
}
};
jQuery.each(jQuery.expr.match.bool.source.match(/\w+/g),function(i,name){
var getter=jQuery.expr.attrHandle[name]||jQuery.find.attr;

jQuery.expr.attrHandle[name]=getSetInput&&getSetAttribute||!ruseDefault.test(name)?
function(elem,name,isXML){
var fn=jQuery.expr.attrHandle[name],
ret=isXML?
undefined:

(jQuery.expr.attrHandle[name]=undefined)!=
getter(elem,name,isXML)?

name.toLowerCase():
null;
jQuery.expr.attrHandle[name]=fn;
return ret;
}:
function(elem,name,isXML){
return isXML?
undefined:
elem[jQuery.camelCase("default-"+name)]?
name.toLowerCase():
null;
};
});


if(!getSetInput||!getSetAttribute){
jQuery.attrHooks.value={
set:function(elem,value,name){
if(jQuery.nodeName(elem,"input")){

elem.defaultValue=value;
}else{

return nodeHook&&nodeHook.set(elem,value,name);
}
}
};
}


if(!getSetAttribute){



nodeHook={
set:function(elem,value,name){

var ret=elem.getAttributeNode(name);
if(!ret){
elem.setAttributeNode(
(ret=elem.ownerDocument.createAttribute(name))
);
}

ret.value=value+="";


return name==="value"||value===elem.getAttribute(name)?
value:
undefined;
}
};
jQuery.expr.attrHandle.id=jQuery.expr.attrHandle.name=jQuery.expr.attrHandle.coords=

function(elem,name,isXML){
var ret;
return isXML?
undefined:
(ret=elem.getAttributeNode(name))&&ret.value!==""?
ret.value:
null;
};
jQuery.valHooks.button={
get:function(elem,name){
var ret=elem.getAttributeNode(name);
return ret&&ret.specified?
ret.value:
undefined;
},
set:nodeHook.set
};



jQuery.attrHooks.contenteditable={
set:function(elem,value,name){
nodeHook.set(elem,value===""?false:value,name);
}
};



jQuery.each(["width","height"],function(i,name){
jQuery.attrHooks[name]={
set:function(elem,value){
if(value===""){
elem.setAttribute(name,"auto");
return value;
}
}
};
});
}




if(!jQuery.support.hrefNormalized){

jQuery.each(["href","src"],function(i,name){
jQuery.propHooks[name]={
get:function(elem){
return elem.getAttribute(name,4);
}
};
});
}

if(!jQuery.support.style){
jQuery.attrHooks.style={
get:function(elem){



return elem.style.cssText||undefined;
},
set:function(elem,value){
return(elem.style.cssText=value+"");
}
};
}



if(!jQuery.support.optSelected){
jQuery.propHooks.selected={
get:function(elem){
var parent=elem.parentNode;

if(parent){
parent.selectedIndex;


if(parent.parentNode){
parent.parentNode.selectedIndex;
}
}
return null;
}
};
}

jQuery.each([
"tabIndex",
"readOnly",
"maxLength",
"cellSpacing",
"cellPadding",
"rowSpan",
"colSpan",
"useMap",
"frameBorder",
"contentEditable"
],function(){
jQuery.propFix[this.toLowerCase()]=this;
});


if(!jQuery.support.enctype){
jQuery.propFix.enctype="encoding";
}


jQuery.each(["radio","checkbox"],function(){
jQuery.valHooks[this]={
set:function(elem,value){
if(jQuery.isArray(value)){
return(elem.checked=jQuery.inArray(jQuery(elem).val(),value)>=0);
}
}
};
if(!jQuery.support.checkOn){
jQuery.valHooks[this].get=function(elem){


return elem.getAttribute("value")===null?"on":elem.value;
};
}
});
var rformElems=/^(?:input|select|textarea)$/i,
rkeyEvent=/^key/,
rmouseEvent=/^(?:mouse|contextmenu)|click/,
rfocusMorph=/^(?:focusinfocus|focusoutblur)$/,
rtypenamespace=/^([^.]*)(?:\.(.+)|)$/;

function returnTrue(){
return true;
}

function returnFalse(){
return false;
}

function safeActiveElement(){
try{
return document.activeElement;
}catch(err){}
}





jQuery.event={

global:{},

add:function(elem,types,handler,data,selector){
var tmp,events,t,handleObjIn,
special,eventHandle,handleObj,
handlers,type,namespaces,origType,
elemData=jQuery._data(elem);


if(!elemData){
return;
}


if(handler.handler){
handleObjIn=handler;
handler=handleObjIn.handler;
selector=handleObjIn.selector;
}


if(!handler.guid){
handler.guid=jQuery.guid++;
}


if(!(events=elemData.events)){
events=elemData.events={};
}
if(!(eventHandle=elemData.handle)){
eventHandle=elemData.handle=function(e){


return typeof jQuery!==core_strundefined&&(!e||jQuery.event.triggered!==e.type)?
jQuery.event.dispatch.apply(eventHandle.elem,arguments):
undefined;
};

eventHandle.elem=elem;
}


types=(types||"").match(core_rnotwhite)||[""];
t=types.length;
while(t--){
tmp=rtypenamespace.exec(types[t])||[];
type=origType=tmp[1];
namespaces=(tmp[2]||"").split(".").sort();


if(!type){
continue;
}


special=jQuery.event.special[type]||{};


type=(selector?special.delegateType:special.bindType)||type;


special=jQuery.event.special[type]||{};


handleObj=jQuery.extend({
type:type,
origType:origType,
data:data,
handler:handler,
guid:handler.guid,
selector:selector,
needsContext:selector&&jQuery.expr.match.needsContext.test(selector),
namespace:namespaces.join(".")
},handleObjIn);


if(!(handlers=events[type])){
handlers=events[type]=[];
handlers.delegateCount=0;


if(!special.setup||special.setup.call(elem,data,namespaces,eventHandle)===false){

if(elem.addEventListener){
elem.addEventListener(type,eventHandle,false);

}else if(elem.attachEvent){
elem.attachEvent("on"+type,eventHandle);
}
}
}

if(special.add){
special.add.call(elem,handleObj);

if(!handleObj.handler.guid){
handleObj.handler.guid=handler.guid;
}
}


if(selector){
handlers.splice(handlers.delegateCount++,0,handleObj);
}else{
handlers.push(handleObj);
}


jQuery.event.global[type]=true;
}


elem=null;
},


remove:function(elem,types,handler,selector,mappedTypes){
var j,handleObj,tmp,
origCount,t,events,
special,handlers,type,
namespaces,origType,
elemData=jQuery.hasData(elem)&&jQuery._data(elem);

if(!elemData||!(events=elemData.events)){
return;
}


types=(types||"").match(core_rnotwhite)||[""];
t=types.length;
while(t--){
tmp=rtypenamespace.exec(types[t])||[];
type=origType=tmp[1];
namespaces=(tmp[2]||"").split(".").sort();


if(!type){
for(type in events){
jQuery.event.remove(elem,type+types[t],handler,selector,true);
}
continue;
}

special=jQuery.event.special[type]||{};
type=(selector?special.delegateType:special.bindType)||type;
handlers=events[type]||[];
tmp=tmp[2]&&new RegExp("(^|\\.)"+namespaces.join("\\.(?:.*\\.|)")+"(\\.|$)");


origCount=j=handlers.length;
while(j--){
handleObj=handlers[j];

if((mappedTypes||origType===handleObj.origType)&&
(!handler||handler.guid===handleObj.guid)&&
(!tmp||tmp.test(handleObj.namespace))&&
(!selector||selector===handleObj.selector||selector==="**"&&handleObj.selector)){
handlers.splice(j,1);

if(handleObj.selector){
handlers.delegateCount--;
}
if(special.remove){
special.remove.call(elem,handleObj);
}
}
}



if(origCount&&!handlers.length){
if(!special.teardown||special.teardown.call(elem,namespaces,elemData.handle)===false){
jQuery.removeEvent(elem,type,elemData.handle);
}

delete events[type];
}
}


if(jQuery.isEmptyObject(events)){
delete elemData.handle;



jQuery._removeData(elem,"events");
}
},

trigger:function(event,data,elem,onlyHandlers){
var handle,ontype,cur,
bubbleType,special,tmp,i,
eventPath=[elem||document],
type=core_hasOwn.call(event,"type")?event.type:event,
namespaces=core_hasOwn.call(event,"namespace")?event.namespace.split("."):[];

cur=tmp=elem=elem||document;


if(elem.nodeType===3||elem.nodeType===8){
return;
}


if(rfocusMorph.test(type+jQuery.event.triggered)){
return;
}

if(type.indexOf(".")>=0){

namespaces=type.split(".");
type=namespaces.shift();
namespaces.sort();
}
ontype=type.indexOf(":")<0&&"on"+type;


event=event[jQuery.expando]?
event:
new jQuery.Event(type,typeof event==="object"&&event);


event.isTrigger=onlyHandlers?2:3;
event.namespace=namespaces.join(".");
event.namespace_re=event.namespace?
new RegExp("(^|\\.)"+namespaces.join("\\.(?:.*\\.|)")+"(\\.|$)"):
null;


event.result=undefined;
if(!event.target){
event.target=elem;
}


data=data==null?
[event]:
jQuery.makeArray(data,[event]);


special=jQuery.event.special[type]||{};
if(!onlyHandlers&&special.trigger&&special.trigger.apply(elem,data)===false){
return;
}



if(!onlyHandlers&&!special.noBubble&&!jQuery.isWindow(elem)){

bubbleType=special.delegateType||type;
if(!rfocusMorph.test(bubbleType+type)){
cur=cur.parentNode;
}
for(;cur;cur=cur.parentNode){
eventPath.push(cur);
tmp=cur;
}


if(tmp===(elem.ownerDocument||document)){
eventPath.push(tmp.defaultView||tmp.parentWindow||window);
}
}


i=0;
while((cur=eventPath[i++])&&!event.isPropagationStopped()){

event.type=i>1?
bubbleType:
special.bindType||type;


handle=(jQuery._data(cur,"events")||{})[event.type]&&jQuery._data(cur,"handle");
if(handle){
handle.apply(cur,data);
}


handle=ontype&&cur[ontype];
if(handle&&jQuery.acceptData(cur)&&handle.apply&&handle.apply(cur,data)===false){
event.preventDefault();
}
}
event.type=type;


if(!onlyHandlers&&!event.isDefaultPrevented()){

if((!special._default||special._default.apply(eventPath.pop(),data)===false)&&
jQuery.acceptData(elem)){




if(ontype&&elem[type]&&!jQuery.isWindow(elem)){


tmp=elem[ontype];

if(tmp){
elem[ontype]=null;
}


jQuery.event.triggered=type;
try{
elem[type]();
}catch(e){


}
jQuery.event.triggered=undefined;

if(tmp){
elem[ontype]=tmp;
}
}
}
}

return event.result;
},

dispatch:function(event){


event=jQuery.event.fix(event);

var i,ret,handleObj,matched,j,
handlerQueue=[],
args=core_slice.call(arguments),
handlers=(jQuery._data(this,"events")||{})[event.type]||[],
special=jQuery.event.special[event.type]||{};


args[0]=event;
event.delegateTarget=this;


if(special.preDispatch&&special.preDispatch.call(this,event)===false){
return;
}


handlerQueue=jQuery.event.handlers.call(this,event,handlers);


i=0;
while((matched=handlerQueue[i++])&&!event.isPropagationStopped()){
event.currentTarget=matched.elem;

j=0;
while((handleObj=matched.handlers[j++])&&!event.isImmediatePropagationStopped()){



if(!event.namespace_re||event.namespace_re.test(handleObj.namespace)){

event.handleObj=handleObj;
event.data=handleObj.data;

ret=((jQuery.event.special[handleObj.origType]||{}).handle||handleObj.handler)
.apply(matched.elem,args);

if(ret!==undefined){
if((event.result=ret)===false){
event.preventDefault();
event.stopPropagation();
}
}
}
}
}


if(special.postDispatch){
special.postDispatch.call(this,event);
}

return event.result;
},

handlers:function(event,handlers){
var sel,handleObj,matches,i,
handlerQueue=[],
delegateCount=handlers.delegateCount,
cur=event.target;




if(delegateCount&&cur.nodeType&&(!event.button||event.type!=="click")){


for(;cur!=this;cur=cur.parentNode||this){




if(cur.nodeType===1&&(cur.disabled!==true||event.type!=="click")){
matches=[];
for(i=0;i<delegateCount;i++){
handleObj=handlers[i];


sel=handleObj.selector+" ";

if(matches[sel]===undefined){
matches[sel]=handleObj.needsContext?
jQuery(sel,this).index(cur)>=0:
jQuery.find(sel,this,null,[cur]).length;
}
if(matches[sel]){
matches.push(handleObj);
}
}
if(matches.length){
handlerQueue.push({elem:cur,handlers:matches});
}
}
}
}


if(delegateCount<handlers.length){
handlerQueue.push({elem:this,handlers:handlers.slice(delegateCount)});
}

return handlerQueue;
},

fix:function(event){
if(event[jQuery.expando]){
return event;
}


var i,prop,copy,
type=event.type,
originalEvent=event,
fixHook=this.fixHooks[type];

if(!fixHook){
this.fixHooks[type]=fixHook=
rmouseEvent.test(type)?this.mouseHooks:
rkeyEvent.test(type)?this.keyHooks:
{};
}
copy=fixHook.props?this.props.concat(fixHook.props):this.props;

event=new jQuery.Event(originalEvent);

i=copy.length;
while(i--){
prop=copy[i];
event[prop]=originalEvent[prop];
}



if(!event.target){
event.target=originalEvent.srcElement||document;
}



if(event.target.nodeType===3){
event.target=event.target.parentNode;
}



event.metaKey=!!event.metaKey;

return fixHook.filter?fixHook.filter(event,originalEvent):event;
},


props:"altKey bubbles cancelable ctrlKey currentTarget eventPhase metaKey relatedTarget shiftKey target timeStamp view which".split(" "),

fixHooks:{},

keyHooks:{
props:"char charCode key keyCode".split(" "),
filter:function(event,original){


if(event.which==null){
event.which=original.charCode!=null?original.charCode:original.keyCode;
}

return event;
}
},

mouseHooks:{
props:"button buttons clientX clientY fromElement offsetX offsetY pageX pageY screenX screenY toElement".split(" "),
filter:function(event,original){
var body,eventDoc,doc,
button=original.button,
fromElement=original.fromElement;


if(event.pageX==null&&original.clientX!=null){
eventDoc=event.target.ownerDocument||document;
doc=eventDoc.documentElement;
body=eventDoc.body;

event.pageX=original.clientX+(doc&&doc.scrollLeft||body&&body.scrollLeft||0)-(doc&&doc.clientLeft||body&&body.clientLeft||0);
event.pageY=original.clientY+(doc&&doc.scrollTop||body&&body.scrollTop||0)-(doc&&doc.clientTop||body&&body.clientTop||0);
}


if(!event.relatedTarget&&fromElement){
event.relatedTarget=fromElement===event.target?original.toElement:fromElement;
}



if(!event.which&&button!==undefined){
event.which=(button&1?1:(button&2?3:(button&4?2:0)));
}

return event;
}
},

special:{
load:{

noBubble:true
},
focus:{

trigger:function(){
if(this!==safeActiveElement()&&this.focus){
try{
this.focus();
return false;
}catch(e){



}
}
},
delegateType:"focusin"
},
blur:{
trigger:function(){
if(this===safeActiveElement()&&this.blur){
this.blur();
return false;
}
},
delegateType:"focusout"
},
click:{

trigger:function(){
if(jQuery.nodeName(this,"input")&&this.type==="checkbox"&&this.click){
this.click();
return false;
}
},


_default:function(event){
return jQuery.nodeName(event.target,"a");
}
},

beforeunload:{
postDispatch:function(event){


if(event.result!==undefined){
event.originalEvent.returnValue=event.result;
}
}
}
},

simulate:function(type,elem,event,bubble){



var e=jQuery.extend(
new jQuery.Event(),
event,
{
type:type,
isSimulated:true,
originalEvent:{}
}
);
if(bubble){
jQuery.event.trigger(e,null,elem);
}else{
jQuery.event.dispatch.call(elem,e);
}
if(e.isDefaultPrevented()){
event.preventDefault();
}
}
};

jQuery.removeEvent=document.removeEventListener?
function(elem,type,handle){
if(elem.removeEventListener){
elem.removeEventListener(type,handle,false);
}
}:
function(elem,type,handle){
var name="on"+type;

if(elem.detachEvent){



if(typeof elem[name]===core_strundefined){
elem[name]=null;
}

elem.detachEvent(name,handle);
}
};

jQuery.Event=function(src,props){

if(!(this instanceof jQuery.Event)){
return new jQuery.Event(src,props);
}


if(src&&src.type){
this.originalEvent=src;
this.type=src.type;



this.isDefaultPrevented=(src.defaultPrevented||src.returnValue===false||
src.getPreventDefault&&src.getPreventDefault())?returnTrue:returnFalse;


}else{
this.type=src;
}


if(props){
jQuery.extend(this,props);
}


this.timeStamp=src&&src.timeStamp||jQuery.now();


this[jQuery.expando]=true;
};



jQuery.Event.prototype={
isDefaultPrevented:returnFalse,
isPropagationStopped:returnFalse,
isImmediatePropagationStopped:returnFalse,

preventDefault:function(){
var e=this.originalEvent;

this.isDefaultPrevented=returnTrue;
if(!e){
return;
}


if(e.preventDefault){
e.preventDefault();



}else{
e.returnValue=false;
}
},
stopPropagation:function(){
var e=this.originalEvent;

this.isPropagationStopped=returnTrue;
if(!e){
return;
}

if(e.stopPropagation){
e.stopPropagation();
}



e.cancelBubble=true;
},
stopImmediatePropagation:function(){
this.isImmediatePropagationStopped=returnTrue;
this.stopPropagation();
}
};


jQuery.each({
mouseenter:"mouseover",
mouseleave:"mouseout"
},function(orig,fix){
jQuery.event.special[orig]={
delegateType:fix,
bindType:fix,

handle:function(event){
var ret,
target=this,
related=event.relatedTarget,
handleObj=event.handleObj;



if(!related||(related!==target&&!jQuery.contains(target,related))){
event.type=handleObj.origType;
ret=handleObj.handler.apply(this,arguments);
event.type=fix;
}
return ret;
}
};
});


if(!jQuery.support.submitBubbles){

jQuery.event.special.submit={
setup:function(){

if(jQuery.nodeName(this,"form")){
return false;
}


jQuery.event.add(this,"click._submit keypress._submit",function(e){

var elem=e.target,
form=jQuery.nodeName(elem,"input")||jQuery.nodeName(elem,"button")?elem.form:undefined;
if(form&&!jQuery._data(form,"submitBubbles")){
jQuery.event.add(form,"submit._submit",function(event){
event._submit_bubble=true;
});
jQuery._data(form,"submitBubbles",true);
}
});

},

postDispatch:function(event){

if(event._submit_bubble){
delete event._submit_bubble;
if(this.parentNode&&!event.isTrigger){
jQuery.event.simulate("submit",this.parentNode,event,true);
}
}
},

teardown:function(){

if(jQuery.nodeName(this,"form")){
return false;
}


jQuery.event.remove(this,"._submit");
}
};
}


if(!jQuery.support.changeBubbles){

jQuery.event.special.change={

setup:function(){

if(rformElems.test(this.nodeName)){



if(this.type==="checkbox"||this.type==="radio"){
jQuery.event.add(this,"propertychange._change",function(event){
if(event.originalEvent.propertyName==="checked"){
this._just_changed=true;
}
});
jQuery.event.add(this,"click._change",function(event){
if(this._just_changed&&!event.isTrigger){
this._just_changed=false;
}

jQuery.event.simulate("change",this,event,true);
});
}
return false;
}

jQuery.event.add(this,"beforeactivate._change",function(e){
var elem=e.target;

if(rformElems.test(elem.nodeName)&&!jQuery._data(elem,"changeBubbles")){
jQuery.event.add(elem,"change._change",function(event){
if(this.parentNode&&!event.isSimulated&&!event.isTrigger){
jQuery.event.simulate("change",this.parentNode,event,true);
}
});
jQuery._data(elem,"changeBubbles",true);
}
});
},

handle:function(event){
var elem=event.target;


if(this!==elem||event.isSimulated||event.isTrigger||(elem.type!=="radio"&&elem.type!=="checkbox")){
return event.handleObj.handler.apply(this,arguments);
}
},

teardown:function(){
jQuery.event.remove(this,"._change");

return!rformElems.test(this.nodeName);
}
};
}


if(!jQuery.support.focusinBubbles){
jQuery.each({focus:"focusin",blur:"focusout"},function(orig,fix){


var attaches=0,
handler=function(event){
jQuery.event.simulate(fix,event.target,jQuery.event.fix(event),true);
};

jQuery.event.special[fix]={
setup:function(){
if(attaches++===0){
document.addEventListener(orig,handler,true);
}
},
teardown:function(){
if(--attaches===0){
document.removeEventListener(orig,handler,true);
}
}
};
});
}

jQuery.fn.extend({

on:function(types,selector,data,fn,one){
var type,origFn;


if(typeof types==="object"){

if(typeof selector!=="string"){

data=data||selector;
selector=undefined;
}
for(type in types){
this.on(type,selector,data,types[type],one);
}
return this;
}

if(data==null&&fn==null){

fn=selector;
data=selector=undefined;
}else if(fn==null){
if(typeof selector==="string"){

fn=data;
data=undefined;
}else{

fn=data;
data=selector;
selector=undefined;
}
}
if(fn===false){
fn=returnFalse;
}else if(!fn){
return this;
}

if(one===1){
origFn=fn;
fn=function(event){

jQuery().off(event);
return origFn.apply(this,arguments);
};

fn.guid=origFn.guid||(origFn.guid=jQuery.guid++);
}
return this.each(function(){
jQuery.event.add(this,types,fn,data,selector);
});
},
one:function(types,selector,data,fn){
return this.on(types,selector,data,fn,1);
},
off:function(types,selector,fn){
var handleObj,type;
if(types&&types.preventDefault&&types.handleObj){

handleObj=types.handleObj;
jQuery(types.delegateTarget).off(
handleObj.namespace?handleObj.origType+"."+handleObj.namespace:handleObj.origType,
handleObj.selector,
handleObj.handler
);
return this;
}
if(typeof types==="object"){

for(type in types){
this.off(type,selector,types[type]);
}
return this;
}
if(selector===false||typeof selector==="function"){

fn=selector;
selector=undefined;
}
if(fn===false){
fn=returnFalse;
}
return this.each(function(){
jQuery.event.remove(this,types,fn,selector);
});
},

trigger:function(type,data){
return this.each(function(){
jQuery.event.trigger(type,data,this);
});
},
triggerHandler:function(type,data){
var elem=this[0];
if(elem){
return jQuery.event.trigger(type,data,elem,true);
}
}
});
var isSimple=/^.[^:#\[\.,]*$/,
rparentsprev=/^(?:parents|prev(?:Until|All))/,
rneedsContext=jQuery.expr.match.needsContext,

guaranteedUnique={
children:true,
contents:true,
next:true,
prev:true
};

jQuery.fn.extend({
find:function(selector){
var i,
ret=[],
self=this,
len=self.length;

if(typeof selector!=="string"){
return this.pushStack(jQuery(selector).filter(function(){
for(i=0;i<len;i++){
if(jQuery.contains(self[i],this)){
return true;
}
}
}));
}

for(i=0;i<len;i++){
jQuery.find(selector,self[i],ret);
}


ret=this.pushStack(len>1?jQuery.unique(ret):ret);
ret.selector=this.selector?this.selector+" "+selector:selector;
return ret;
},

has:function(target){
var i,
targets=jQuery(target,this),
len=targets.length;

return this.filter(function(){
for(i=0;i<len;i++){
if(jQuery.contains(this,targets[i])){
return true;
}
}
});
},

not:function(selector){
return this.pushStack(winnow(this,selector||[],true));
},

filter:function(selector){
return this.pushStack(winnow(this,selector||[],false));
},

is:function(selector){
return!!winnow(
this,



typeof selector==="string"&&rneedsContext.test(selector)?
jQuery(selector):
selector||[],
false
).length;
},

closest:function(selectors,context){
var cur,
i=0,
l=this.length,
ret=[],
pos=rneedsContext.test(selectors)||typeof selectors!=="string"?
jQuery(selectors,context||this.context):
0;

for(;i<l;i++){
for(cur=this[i];cur&&cur!==context;cur=cur.parentNode){

if(cur.nodeType<11&&(pos?
pos.index(cur)>-1:


cur.nodeType===1&&
jQuery.find.matchesSelector(cur,selectors))){

cur=ret.push(cur);
break;
}
}
}

return this.pushStack(ret.length>1?jQuery.unique(ret):ret);
},



index:function(elem){


if(!elem){
return(this[0]&&this[0].parentNode)?this.first().prevAll().length:-1;
}


if(typeof elem==="string"){
return jQuery.inArray(this[0],jQuery(elem));
}


return jQuery.inArray(

elem.jquery?elem[0]:elem,this);
},

add:function(selector,context){
var set=typeof selector==="string"?
jQuery(selector,context):
jQuery.makeArray(selector&&selector.nodeType?[selector]:selector),
all=jQuery.merge(this.get(),set);

return this.pushStack(jQuery.unique(all));
},

addBack:function(selector){
return this.add(selector==null?
this.prevObject:this.prevObject.filter(selector)
);
}
});

function sibling(cur,dir){
do{
cur=cur[dir];
}while(cur&&cur.nodeType!==1);

return cur;
}

jQuery.each({
parent:function(elem){
var parent=elem.parentNode;
return parent&&parent.nodeType!==11?parent:null;
},
parents:function(elem){
return jQuery.dir(elem,"parentNode");
},
parentsUntil:function(elem,i,until){
return jQuery.dir(elem,"parentNode",until);
},
next:function(elem){
return sibling(elem,"nextSibling");
},
prev:function(elem){
return sibling(elem,"previousSibling");
},
nextAll:function(elem){
return jQuery.dir(elem,"nextSibling");
},
prevAll:function(elem){
return jQuery.dir(elem,"previousSibling");
},
nextUntil:function(elem,i,until){
return jQuery.dir(elem,"nextSibling",until);
},
prevUntil:function(elem,i,until){
return jQuery.dir(elem,"previousSibling",until);
},
siblings:function(elem){
return jQuery.sibling((elem.parentNode||{}).firstChild,elem);
},
children:function(elem){
return jQuery.sibling(elem.firstChild);
},
contents:function(elem){
return jQuery.nodeName(elem,"iframe")?
elem.contentDocument||elem.contentWindow.document:
jQuery.merge([],elem.childNodes);
}
},function(name,fn){
jQuery.fn[name]=function(until,selector){
var ret=jQuery.map(this,fn,until);

if(name.slice(-5)!=="Until"){
selector=until;
}

if(selector&&typeof selector==="string"){
ret=jQuery.filter(selector,ret);
}

if(this.length>1){

if(!guaranteedUnique[name]){
ret=jQuery.unique(ret);
}


if(rparentsprev.test(name)){
ret=ret.reverse();
}
}

return this.pushStack(ret);
};
});

jQuery.extend({
filter:function(expr,elems,not){
var elem=elems[0];

if(not){
expr=":not("+expr+")";
}

return elems.length===1&&elem.nodeType===1?
jQuery.find.matchesSelector(elem,expr)?[elem]:[]:
jQuery.find.matches(expr,jQuery.grep(elems,function(elem){
return elem.nodeType===1;
}));
},

dir:function(elem,dir,until){
var matched=[],
cur=elem[dir];

while(cur&&cur.nodeType!==9&&(until===undefined||cur.nodeType!==1||!jQuery(cur).is(until))){
if(cur.nodeType===1){
matched.push(cur);
}
cur=cur[dir];
}
return matched;
},

sibling:function(n,elem){
var r=[];

for(;n;n=n.nextSibling){
if(n.nodeType===1&&n!==elem){
r.push(n);
}
}

return r;
}
});


function winnow(elements,qualifier,not){
if(jQuery.isFunction(qualifier)){
return jQuery.grep(elements,function(elem,i){

return!!qualifier.call(elem,i,elem)!==not;
});

}

if(qualifier.nodeType){
return jQuery.grep(elements,function(elem){
return(elem===qualifier)!==not;
});

}

if(typeof qualifier==="string"){
if(isSimple.test(qualifier)){
return jQuery.filter(qualifier,elements,not);
}

qualifier=jQuery.filter(qualifier,elements);
}

return jQuery.grep(elements,function(elem){
return(jQuery.inArray(elem,qualifier)>=0)!==not;
});
}
function createSafeFragment(document){
var list=nodeNames.split("|"),
safeFrag=document.createDocumentFragment();

if(safeFrag.createElement){
while(list.length){
safeFrag.createElement(
list.pop()
);
}
}
return safeFrag;
}

var nodeNames="abbr|article|aside|audio|bdi|canvas|data|datalist|details|figcaption|figure|footer|"+
"header|hgroup|mark|meter|nav|output|progress|section|summary|time|video",
rinlinejQuery=/ jQuery\d+="(?:null|\d+)"/g,
rnoshimcache=new RegExp("<(?:"+nodeNames+")[\\s/>]","i"),
rleadingWhitespace=/^\s+/,
rxhtmlTag=/<(?!area|br|col|embed|hr|img|input|link|meta|param)(([\w:]+)[^>]*)\/>/gi,
rtagName=/<([\w:]+)/,
rtbody=/<tbody/i,
rhtml=/<|&#?\w+;/,
rnoInnerhtml=/<(?:script|style|link)/i,
manipulation_rcheckableType=/^(?:checkbox|radio)$/i,

rchecked=/checked\s*(?:[^=]|=\s*.checked.)/i,
rscriptType=/^$|\/(?:java|ecma)script/i,
rscriptTypeMasked=/^true\/(.*)/,
rcleanScript=/^\s*<!(?:\[CDATA\[|--)|(?:\]\]|--)>\s*$/g,


wrapMap={
option:[1,"<select multiple='multiple'>","</select>"],
legend:[1,"<fieldset>","</fieldset>"],
area:[1,"<map>","</map>"],
param:[1,"<object>","</object>"],
thead:[1,"<table>","</table>"],
tr:[2,"<table><tbody>","</tbody></table>"],
col:[2,"<table><tbody></tbody><colgroup>","</colgroup></table>"],
td:[3,"<table><tbody><tr>","</tr></tbody></table>"],



_default:jQuery.support.htmlSerialize?[0,"",""]:[1,"X<div>","</div>"]
},
safeFragment=createSafeFragment(document),
fragmentDiv=safeFragment.appendChild(document.createElement("div"));

wrapMap.optgroup=wrapMap.option;
wrapMap.tbody=wrapMap.tfoot=wrapMap.colgroup=wrapMap.caption=wrapMap.thead;
wrapMap.th=wrapMap.td;

jQuery.fn.extend({
text:function(value){
return jQuery.access(this,function(value){
return value===undefined?
jQuery.text(this):
this.empty().append((this[0]&&this[0].ownerDocument||document).createTextNode(value));
},null,value,arguments.length);
},

append:function(){
return this.domManip(arguments,function(elem){
if(this.nodeType===1||this.nodeType===11||this.nodeType===9){
var target=manipulationTarget(this,elem);
target.appendChild(elem);
}
});
},

prepend:function(){
return this.domManip(arguments,function(elem){
if(this.nodeType===1||this.nodeType===11||this.nodeType===9){
var target=manipulationTarget(this,elem);
target.insertBefore(elem,target.firstChild);
}
});
},

before:function(){
return this.domManip(arguments,function(elem){
if(this.parentNode){
this.parentNode.insertBefore(elem,this);
}
});
},

after:function(){
return this.domManip(arguments,function(elem){
if(this.parentNode){
this.parentNode.insertBefore(elem,this.nextSibling);
}
});
},


remove:function(selector,keepData){
var elem,
elems=selector?jQuery.filter(selector,this):this,
i=0;

for(;(elem=elems[i])!=null;i++){

if(!keepData&&elem.nodeType===1){
jQuery.cleanData(getAll(elem));
}

if(elem.parentNode){
if(keepData&&jQuery.contains(elem.ownerDocument,elem)){
setGlobalEval(getAll(elem,"script"));
}
elem.parentNode.removeChild(elem);
}
}

return this;
},

empty:function(){
var elem,
i=0;

for(;(elem=this[i])!=null;i++){

if(elem.nodeType===1){
jQuery.cleanData(getAll(elem,false));
}


while(elem.firstChild){
elem.removeChild(elem.firstChild);
}



if(elem.options&&jQuery.nodeName(elem,"select")){
elem.options.length=0;
}
}

return this;
},

clone:function(dataAndEvents,deepDataAndEvents){
dataAndEvents=dataAndEvents==null?false:dataAndEvents;
deepDataAndEvents=deepDataAndEvents==null?dataAndEvents:deepDataAndEvents;

return this.map(function(){
return jQuery.clone(this,dataAndEvents,deepDataAndEvents);
});
},

html:function(value){
return jQuery.access(this,function(value){
var elem=this[0]||{},
i=0,
l=this.length;

if(value===undefined){
return elem.nodeType===1?
elem.innerHTML.replace(rinlinejQuery,""):
undefined;
}


if(typeof value==="string"&&!rnoInnerhtml.test(value)&&
(jQuery.support.htmlSerialize||!rnoshimcache.test(value))&&
(jQuery.support.leadingWhitespace||!rleadingWhitespace.test(value))&&
!wrapMap[(rtagName.exec(value)||["",""])[1].toLowerCase()]){

value=value.replace(rxhtmlTag,"<$1></$2>");

try{
for(;i<l;i++){

elem=this[i]||{};
if(elem.nodeType===1){
jQuery.cleanData(getAll(elem,false));
elem.innerHTML=value;
}
}

elem=0;


}catch(e){}
}

if(elem){
this.empty().append(value);
}
},null,value,arguments.length);
},

replaceWith:function(){
var

args=jQuery.map(this,function(elem){
return[elem.nextSibling,elem.parentNode];
}),
i=0;


this.domManip(arguments,function(elem){
var next=args[i++],
parent=args[i++];

if(parent){

if(next&&next.parentNode!==parent){
next=this.nextSibling;
}
jQuery(this).remove();
parent.insertBefore(elem,next);
}

},true);


return i?this:this.remove();
},

detach:function(selector){
return this.remove(selector,true);
},

domManip:function(args,callback,allowIntersection){


args=core_concat.apply([],args);

var first,node,hasScripts,
scripts,doc,fragment,
i=0,
l=this.length,
set=this,
iNoClone=l-1,
value=args[0],
isFunction=jQuery.isFunction(value);


if(isFunction||!(l<=1||typeof value!=="string"||jQuery.support.checkClone||!rchecked.test(value))){
return this.each(function(index){
var self=set.eq(index);
if(isFunction){
args[0]=value.call(this,index,self.html());
}
self.domManip(args,callback,allowIntersection);
});
}

if(l){
fragment=jQuery.buildFragment(args,this[0].ownerDocument,false,!allowIntersection&&this);
first=fragment.firstChild;

if(fragment.childNodes.length===1){
fragment=first;
}

if(first){
scripts=jQuery.map(getAll(fragment,"script"),disableScript);
hasScripts=scripts.length;



for(;i<l;i++){
node=fragment;

if(i!==iNoClone){
node=jQuery.clone(node,true,true);


if(hasScripts){
jQuery.merge(scripts,getAll(node,"script"));
}
}

callback.call(this[i],node,i);
}

if(hasScripts){
doc=scripts[scripts.length-1].ownerDocument;


jQuery.map(scripts,restoreScript);


for(i=0;i<hasScripts;i++){
node=scripts[i];
if(rscriptType.test(node.type||"")&&
!jQuery._data(node,"globalEval")&&jQuery.contains(doc,node)){

if(node.src){

jQuery._evalUrl(node.src);
}else{
jQuery.globalEval((node.text||node.textContent||node.innerHTML||"").replace(rcleanScript,""));
}
}
}
}


fragment=first=null;
}
}

return this;
}
});



function manipulationTarget(elem,content){
return jQuery.nodeName(elem,"table")&&
jQuery.nodeName(content.nodeType===1?content:content.firstChild,"tr")?

elem.getElementsByTagName("tbody")[0]||
elem.appendChild(elem.ownerDocument.createElement("tbody")):
elem;
}


function disableScript(elem){
elem.type=(jQuery.find.attr(elem,"type")!==null)+"/"+elem.type;
return elem;
}
function restoreScript(elem){
var match=rscriptTypeMasked.exec(elem.type);
if(match){
elem.type=match[1];
}else{
elem.removeAttribute("type");
}
return elem;
}


function setGlobalEval(elems,refElements){
var elem,
i=0;
for(;(elem=elems[i])!=null;i++){
jQuery._data(elem,"globalEval",!refElements||jQuery._data(refElements[i],"globalEval"));
}
}

function cloneCopyEvent(src,dest){

if(dest.nodeType!==1||!jQuery.hasData(src)){
return;
}

var type,i,l,
oldData=jQuery._data(src),
curData=jQuery._data(dest,oldData),
events=oldData.events;

if(events){
delete curData.handle;
curData.events={};

for(type in events){
for(i=0,l=events[type].length;i<l;i++){
jQuery.event.add(dest,type,events[type][i]);
}
}
}


if(curData.data){
curData.data=jQuery.extend({},curData.data);
}
}

function fixCloneNodeIssues(src,dest){
var nodeName,e,data;


if(dest.nodeType!==1){
return;
}

nodeName=dest.nodeName.toLowerCase();


if(!jQuery.support.noCloneEvent&&dest[jQuery.expando]){
data=jQuery._data(dest);

for(e in data.events){
jQuery.removeEvent(dest,e,data.handle);
}


dest.removeAttribute(jQuery.expando);
}


if(nodeName==="script"&&dest.text!==src.text){
disableScript(dest).text=src.text;
restoreScript(dest);



}else if(nodeName==="object"){
if(dest.parentNode){
dest.outerHTML=src.outerHTML;
}





if(jQuery.support.html5Clone&&(src.innerHTML&&!jQuery.trim(dest.innerHTML))){
dest.innerHTML=src.innerHTML;
}

}else if(nodeName==="input"&&manipulation_rcheckableType.test(src.type)){




dest.defaultChecked=dest.checked=src.checked;



if(dest.value!==src.value){
dest.value=src.value;
}



}else if(nodeName==="option"){
dest.defaultSelected=dest.selected=src.defaultSelected;



}else if(nodeName==="input"||nodeName==="textarea"){
dest.defaultValue=src.defaultValue;
}
}

jQuery.each({
appendTo:"append",
prependTo:"prepend",
insertBefore:"before",
insertAfter:"after",
replaceAll:"replaceWith"
},function(name,original){
jQuery.fn[name]=function(selector){
var elems,
i=0,
ret=[],
insert=jQuery(selector),
last=insert.length-1;

for(;i<=last;i++){
elems=i===last?this:this.clone(true);
jQuery(insert[i])[original](elems);


core_push.apply(ret,elems.get());
}

return this.pushStack(ret);
};
});

function getAll(context,tag){
var elems,elem,
i=0,
found=typeof context.getElementsByTagName!==core_strundefined?context.getElementsByTagName(tag||"*"):
typeof context.querySelectorAll!==core_strundefined?context.querySelectorAll(tag||"*"):
undefined;

if(!found){
for(found=[],elems=context.childNodes||context;(elem=elems[i])!=null;i++){
if(!tag||jQuery.nodeName(elem,tag)){
found.push(elem);
}else{
jQuery.merge(found,getAll(elem,tag));
}
}
}

return tag===undefined||tag&&jQuery.nodeName(context,tag)?
jQuery.merge([context],found):
found;
}


function fixDefaultChecked(elem){
if(manipulation_rcheckableType.test(elem.type)){
elem.defaultChecked=elem.checked;
}
}

jQuery.extend({
clone:function(elem,dataAndEvents,deepDataAndEvents){
var destElements,node,clone,i,srcElements,
inPage=jQuery.contains(elem.ownerDocument,elem);

if(jQuery.support.html5Clone||jQuery.isXMLDoc(elem)||!rnoshimcache.test("<"+elem.nodeName+">")){
clone=elem.cloneNode(true);


}else{
fragmentDiv.innerHTML=elem.outerHTML;
fragmentDiv.removeChild(clone=fragmentDiv.firstChild);
}

if((!jQuery.support.noCloneEvent||!jQuery.support.noCloneChecked)&&
(elem.nodeType===1||elem.nodeType===11)&&!jQuery.isXMLDoc(elem)){


destElements=getAll(clone);
srcElements=getAll(elem);


for(i=0;(node=srcElements[i])!=null;++i){

if(destElements[i]){
fixCloneNodeIssues(node,destElements[i]);
}
}
}


if(dataAndEvents){
if(deepDataAndEvents){
srcElements=srcElements||getAll(elem);
destElements=destElements||getAll(clone);

for(i=0;(node=srcElements[i])!=null;i++){
cloneCopyEvent(node,destElements[i]);
}
}else{
cloneCopyEvent(elem,clone);
}
}


destElements=getAll(clone,"script");
if(destElements.length>0){
setGlobalEval(destElements,!inPage&&getAll(elem,"script"));
}

destElements=srcElements=node=null;


return clone;
},

buildFragment:function(elems,context,scripts,selection){
var j,elem,contains,
tmp,tag,tbody,wrap,
l=elems.length,


safe=createSafeFragment(context),

nodes=[],
i=0;

for(;i<l;i++){
elem=elems[i];

if(elem||elem===0){


if(jQuery.type(elem)==="object"){
jQuery.merge(nodes,elem.nodeType?[elem]:elem);


}else if(!rhtml.test(elem)){
nodes.push(context.createTextNode(elem));


}else{
tmp=tmp||safe.appendChild(context.createElement("div"));


tag=(rtagName.exec(elem)||["",""])[1].toLowerCase();
wrap=wrapMap[tag]||wrapMap._default;

tmp.innerHTML=wrap[1]+elem.replace(rxhtmlTag,"<$1></$2>")+wrap[2];


j=wrap[0];
while(j--){
tmp=tmp.lastChild;
}


if(!jQuery.support.leadingWhitespace&&rleadingWhitespace.test(elem)){
nodes.push(context.createTextNode(rleadingWhitespace.exec(elem)[0]));
}


if(!jQuery.support.tbody){


elem=tag==="table"&&!rtbody.test(elem)?
tmp.firstChild:


wrap[1]==="<table>"&&!rtbody.test(elem)?
tmp:
0;

j=elem&&elem.childNodes.length;
while(j--){
if(jQuery.nodeName((tbody=elem.childNodes[j]),"tbody")&&!tbody.childNodes.length){
elem.removeChild(tbody);
}
}
}

jQuery.merge(nodes,tmp.childNodes);


tmp.textContent="";


while(tmp.firstChild){
tmp.removeChild(tmp.firstChild);
}


tmp=safe.lastChild;
}
}
}


if(tmp){
safe.removeChild(tmp);
}



if(!jQuery.support.appendChecked){
jQuery.grep(getAll(nodes,"input"),fixDefaultChecked);
}

i=0;
while((elem=nodes[i++])){



if(selection&&jQuery.inArray(elem,selection)!==-1){
continue;
}

contains=jQuery.contains(elem.ownerDocument,elem);


tmp=getAll(safe.appendChild(elem),"script");


if(contains){
setGlobalEval(tmp);
}


if(scripts){
j=0;
while((elem=tmp[j++])){
if(rscriptType.test(elem.type||"")){
scripts.push(elem);
}
}
}
}

tmp=null;

return safe;
},

cleanData:function(elems,acceptData){
var elem,type,id,data,
i=0,
internalKey=jQuery.expando,
cache=jQuery.cache,
deleteExpando=jQuery.support.deleteExpando,
special=jQuery.event.special;

for(;(elem=elems[i])!=null;i++){

if(acceptData||jQuery.acceptData(elem)){

id=elem[internalKey];
data=id&&cache[id];

if(data){
if(data.events){
for(type in data.events){
if(special[type]){
jQuery.event.remove(elem,type);


}else{
jQuery.removeEvent(elem,type,data.handle);
}
}
}


if(cache[id]){

delete cache[id];




if(deleteExpando){
delete elem[internalKey];

}else if(typeof elem.removeAttribute!==core_strundefined){
elem.removeAttribute(internalKey);

}else{
elem[internalKey]=null;
}

core_deletedIds.push(id);
}
}
}
}
},

_evalUrl:function(url){
return jQuery.ajax({
url:url,
type:"GET",
dataType:"script",
async:false,
global:false,
"throws":true
});
}
});
jQuery.fn.extend({
wrapAll:function(html){
if(jQuery.isFunction(html)){
return this.each(function(i){
jQuery(this).wrapAll(html.call(this,i));
});
}

if(this[0]){

var wrap=jQuery(html,this[0].ownerDocument).eq(0).clone(true);

if(this[0].parentNode){
wrap.insertBefore(this[0]);
}

wrap.map(function(){
var elem=this;

while(elem.firstChild&&elem.firstChild.nodeType===1){
elem=elem.firstChild;
}

return elem;
}).append(this);
}

return this;
},

wrapInner:function(html){
if(jQuery.isFunction(html)){
return this.each(function(i){
jQuery(this).wrapInner(html.call(this,i));
});
}

return this.each(function(){
var self=jQuery(this),
contents=self.contents();

if(contents.length){
contents.wrapAll(html);

}else{
self.append(html);
}
});
},

wrap:function(html){
var isFunction=jQuery.isFunction(html);

return this.each(function(i){
jQuery(this).wrapAll(isFunction?html.call(this,i):html);
});
},

unwrap:function(){
return this.parent().each(function(){
if(!jQuery.nodeName(this,"body")){
jQuery(this).replaceWith(this.childNodes);
}
}).end();
}
});
var iframe,getStyles,curCSS,
ralpha=/alpha\([^)]*\)/i,
ropacity=/opacity\s*=\s*([^)]*)/,
rposition=/^(top|right|bottom|left)$/,


rdisplayswap=/^(none|table(?!-c[ea]).+)/,
rmargin=/^margin/,
rnumsplit=new RegExp("^("+core_pnum+")(.*)$","i"),
rnumnonpx=new RegExp("^("+core_pnum+")(?!px)[a-z%]+$","i"),
rrelNum=new RegExp("^([+-])=("+core_pnum+")","i"),
elemdisplay={BODY:"block"},

cssShow={position:"absolute",visibility:"hidden",display:"block"},
cssNormalTransform={
letterSpacing:0,
fontWeight:400
},

cssExpand=["Top","Right","Bottom","Left"],
cssPrefixes=["Webkit","O","Moz","ms"];


function vendorPropName(style,name){


if(name in style){
return name;
}


var capName=name.charAt(0).toUpperCase()+name.slice(1),
origName=name,
i=cssPrefixes.length;

while(i--){
name=cssPrefixes[i]+capName;
if(name in style){
return name;
}
}

return origName;
}

function isHidden(elem,el){


elem=el||elem;
return jQuery.css(elem,"display")==="none"||!jQuery.contains(elem.ownerDocument,elem);
}

function showHide(elements,show){
var display,elem,hidden,
values=[],
index=0,
length=elements.length;

for(;index<length;index++){
elem=elements[index];
if(!elem.style){
continue;
}

values[index]=jQuery._data(elem,"olddisplay");
display=elem.style.display;
if(show){


if(!values[index]&&display==="none"){
elem.style.display="";
}




if(elem.style.display===""&&isHidden(elem)){
values[index]=jQuery._data(elem,"olddisplay",css_defaultDisplay(elem.nodeName));
}
}else{

if(!values[index]){
hidden=isHidden(elem);

if(display&&display!=="none"||!hidden){
jQuery._data(elem,"olddisplay",hidden?display:jQuery.css(elem,"display"));
}
}
}
}



for(index=0;index<length;index++){
elem=elements[index];
if(!elem.style){
continue;
}
if(!show||elem.style.display==="none"||elem.style.display===""){
elem.style.display=show?values[index]||"":"none";
}
}

return elements;
}

jQuery.fn.extend({
css:function(name,value){
return jQuery.access(this,function(elem,name,value){
var len,styles,
map={},
i=0;

if(jQuery.isArray(name)){
styles=getStyles(elem);
len=name.length;

for(;i<len;i++){
map[name[i]]=jQuery.css(elem,name[i],false,styles);
}

return map;
}

return value!==undefined?
jQuery.style(elem,name,value):
jQuery.css(elem,name);
},name,value,arguments.length>1);
},
show:function(){
return showHide(this,true);
},
hide:function(){
return showHide(this);
},
toggle:function(state){
if(typeof state==="boolean"){
return state?this.show():this.hide();
}

return this.each(function(){
if(isHidden(this)){
jQuery(this).show();
}else{
jQuery(this).hide();
}
});
}
});

jQuery.extend({


cssHooks:{
opacity:{
get:function(elem,computed){
if(computed){

var ret=curCSS(elem,"opacity");
return ret===""?"1":ret;
}
}
}
},


cssNumber:{
"columnCount":true,
"fillOpacity":true,
"fontWeight":true,
"lineHeight":true,
"opacity":true,
"order":true,
"orphans":true,
"widows":true,
"zIndex":true,
"zoom":true
},



cssProps:{

"float":jQuery.support.cssFloat?"cssFloat":"styleFloat"
},


style:function(elem,name,value,extra){

if(!elem||elem.nodeType===3||elem.nodeType===8||!elem.style){
return;
}


var ret,type,hooks,
origName=jQuery.camelCase(name),
style=elem.style;

name=jQuery.cssProps[origName]||(jQuery.cssProps[origName]=vendorPropName(style,origName));



hooks=jQuery.cssHooks[name]||jQuery.cssHooks[origName];


if(value!==undefined){
type=typeof value;


if(type==="string"&&(ret=rrelNum.exec(value))){
value=(ret[1]+1)*ret[2]+parseFloat(jQuery.css(elem,name));

type="number";
}


if(value==null||type==="number"&&isNaN(value)){
return;
}


if(type==="number"&&!jQuery.cssNumber[origName]){
value+="px";
}



if(!jQuery.support.clearCloneStyle&&value===""&&name.indexOf("background")===0){
style[name]="inherit";
}


if(!hooks||!("set"in hooks)||(value=hooks.set(elem,value,extra))!==undefined){



try{
style[name]=value;
}catch(e){}
}

}else{

if(hooks&&"get"in hooks&&(ret=hooks.get(elem,false,extra))!==undefined){
return ret;
}


return style[name];
}
},

css:function(elem,name,extra,styles){
var num,val,hooks,
origName=jQuery.camelCase(name);


name=jQuery.cssProps[origName]||(jQuery.cssProps[origName]=vendorPropName(elem.style,origName));



hooks=jQuery.cssHooks[name]||jQuery.cssHooks[origName];


if(hooks&&"get"in hooks){
val=hooks.get(elem,true,extra);
}


if(val===undefined){
val=curCSS(elem,name,styles);
}


if(val==="normal"&&name in cssNormalTransform){
val=cssNormalTransform[name];
}


if(extra===""||extra){
num=parseFloat(val);
return extra===true||jQuery.isNumeric(num)?num||0:val;
}
return val;
}
});



if(window.getComputedStyle){
getStyles=function(elem){
return window.getComputedStyle(elem,null);
};

curCSS=function(elem,name,_computed){
var width,minWidth,maxWidth,
computed=_computed||getStyles(elem),


ret=computed?computed.getPropertyValue(name)||computed[name]:undefined,
style=elem.style;

if(computed){

if(ret===""&&!jQuery.contains(elem.ownerDocument,elem)){
ret=jQuery.style(elem,name);
}





if(rnumnonpx.test(ret)&&rmargin.test(name)){


width=style.width;
minWidth=style.minWidth;
maxWidth=style.maxWidth;


style.minWidth=style.maxWidth=style.width=ret;
ret=computed.width;


style.width=width;
style.minWidth=minWidth;
style.maxWidth=maxWidth;
}
}

return ret;
};
}else if(document.documentElement.currentStyle){
getStyles=function(elem){
return elem.currentStyle;
};

curCSS=function(elem,name,_computed){
var left,rs,rsLeft,
computed=_computed||getStyles(elem),
ret=computed?computed[name]:undefined,
style=elem.style;



if(ret==null&&style&&style[name]){
ret=style[name];
}








if(rnumnonpx.test(ret)&&!rposition.test(name)){


left=style.left;
rs=elem.runtimeStyle;
rsLeft=rs&&rs.left;


if(rsLeft){
rs.left=elem.currentStyle.left;
}
style.left=name==="fontSize"?"1em":ret;
ret=style.pixelLeft+"px";


style.left=left;
if(rsLeft){
rs.left=rsLeft;
}
}

return ret===""?"auto":ret;
};
}

function setPositiveNumber(elem,value,subtract){
var matches=rnumsplit.exec(value);
return matches?

Math.max(0,matches[1]-(subtract||0))+(matches[2]||"px"):
value;
}

function augmentWidthOrHeight(elem,name,extra,isBorderBox,styles){
var i=extra===(isBorderBox?"border":"content")?

4:

name==="width"?1:0,

val=0;

for(;i<4;i+=2){

if(extra==="margin"){
val+=jQuery.css(elem,extra+cssExpand[i],true,styles);
}

if(isBorderBox){

if(extra==="content"){
val-=jQuery.css(elem,"padding"+cssExpand[i],true,styles);
}


if(extra!=="margin"){
val-=jQuery.css(elem,"border"+cssExpand[i]+"Width",true,styles);
}
}else{

val+=jQuery.css(elem,"padding"+cssExpand[i],true,styles);


if(extra!=="padding"){
val+=jQuery.css(elem,"border"+cssExpand[i]+"Width",true,styles);
}
}
}

return val;
}

function getWidthOrHeight(elem,name,extra){


var valueIsBorderBox=true,
val=name==="width"?elem.offsetWidth:elem.offsetHeight,
styles=getStyles(elem),
isBorderBox=jQuery.support.boxSizing&&jQuery.css(elem,"boxSizing",false,styles)==="border-box";




if(val<=0||val==null){

val=curCSS(elem,name,styles);
if(val<0||val==null){
val=elem.style[name];
}


if(rnumnonpx.test(val)){
return val;
}



valueIsBorderBox=isBorderBox&&(jQuery.support.boxSizingReliable||val===elem.style[name]);


val=parseFloat(val)||0;
}


return(val+
augmentWidthOrHeight(
elem,
name,
extra||(isBorderBox?"border":"content"),
valueIsBorderBox,
styles
)
)+"px";
}


function css_defaultDisplay(nodeName){
var doc=document,
display=elemdisplay[nodeName];

if(!display){
display=actualDisplay(nodeName,doc);


if(display==="none"||!display){

iframe=(iframe||
jQuery("<iframe frameborder='0' width='0' height='0'/>")
.css("cssText","display:block !important")
).appendTo(doc.documentElement);


doc=(iframe[0].contentWindow||iframe[0].contentDocument).document;
doc.write("<!doctype html><html><body>");
doc.close();

display=actualDisplay(nodeName,doc);
iframe.detach();
}


elemdisplay[nodeName]=display;
}

return display;
}


function actualDisplay(name,doc){
var elem=jQuery(doc.createElement(name)).appendTo(doc.body),
display=jQuery.css(elem[0],"display");
elem.remove();
return display;
}

jQuery.each(["height","width"],function(i,name){
jQuery.cssHooks[name]={
get:function(elem,computed,extra){
if(computed){


return elem.offsetWidth===0&&rdisplayswap.test(jQuery.css(elem,"display"))?
jQuery.swap(elem,cssShow,function(){
return getWidthOrHeight(elem,name,extra);
}):
getWidthOrHeight(elem,name,extra);
}
},

set:function(elem,value,extra){
var styles=extra&&getStyles(elem);
return setPositiveNumber(elem,value,extra?
augmentWidthOrHeight(
elem,
name,
extra,
jQuery.support.boxSizing&&jQuery.css(elem,"boxSizing",false,styles)==="border-box",
styles
):0
);
}
};
});

if(!jQuery.support.opacity){
jQuery.cssHooks.opacity={
get:function(elem,computed){

return ropacity.test((computed&&elem.currentStyle?elem.currentStyle.filter:elem.style.filter)||"")?
(0.01*parseFloat(RegExp.$1))+"":
computed?"1":"";
},

set:function(elem,value){
var style=elem.style,
currentStyle=elem.currentStyle,
opacity=jQuery.isNumeric(value)?"alpha(opacity="+value*100+")":"",
filter=currentStyle&&currentStyle.filter||style.filter||"";



style.zoom=1;



if((value>=1||value==="")&&
jQuery.trim(filter.replace(ralpha,""))===""&&
style.removeAttribute){




style.removeAttribute("filter");


if(value===""||currentStyle&&!currentStyle.filter){
return;
}
}


style.filter=ralpha.test(filter)?
filter.replace(ralpha,opacity):
filter+" "+opacity;
}
};
}



jQuery(function(){
if(!jQuery.support.reliableMarginRight){
jQuery.cssHooks.marginRight={
get:function(elem,computed){
if(computed){


return jQuery.swap(elem,{"display":"inline-block"},
curCSS,[elem,"marginRight"]);
}
}
};
}




if(!jQuery.support.pixelPosition&&jQuery.fn.position){
jQuery.each(["top","left"],function(i,prop){
jQuery.cssHooks[prop]={
get:function(elem,computed){
if(computed){
computed=curCSS(elem,prop);

return rnumnonpx.test(computed)?
jQuery(elem).position()[prop]+"px":
computed;
}
}
};
});
}

});

if(jQuery.expr&&jQuery.expr.filters){
jQuery.expr.filters.hidden=function(elem){


return elem.offsetWidth<=0&&elem.offsetHeight<=0||
(!jQuery.support.reliableHiddenOffsets&&((elem.style&&elem.style.display)||jQuery.css(elem,"display"))==="none");
};

jQuery.expr.filters.visible=function(elem){
return!jQuery.expr.filters.hidden(elem);
};
}


jQuery.each({
margin:"",
padding:"",
border:"Width"
},function(prefix,suffix){
jQuery.cssHooks[prefix+suffix]={
expand:function(value){
var i=0,
expanded={},


parts=typeof value==="string"?value.split(" "):[value];

for(;i<4;i++){
expanded[prefix+cssExpand[i]+suffix]=
parts[i]||parts[i-2]||parts[0];
}

return expanded;
}
};

if(!rmargin.test(prefix)){
jQuery.cssHooks[prefix+suffix].set=setPositiveNumber;
}
});
var r20=/%20/g,
rbracket=/\[\]$/,
rCRLF=/\r?\n/g,
rsubmitterTypes=/^(?:submit|button|image|reset|file)$/i,
rsubmittable=/^(?:input|select|textarea|keygen)/i;

jQuery.fn.extend({
serialize:function(){
return jQuery.param(this.serializeArray());
},
serializeArray:function(){
return this.map(function(){

var elements=jQuery.prop(this,"elements");
return elements?jQuery.makeArray(elements):this;
})
.filter(function(){
var type=this.type;

return this.name&&!jQuery(this).is(":disabled")&&
rsubmittable.test(this.nodeName)&&!rsubmitterTypes.test(type)&&
(this.checked||!manipulation_rcheckableType.test(type));
})
.map(function(i,elem){
var val=jQuery(this).val();

return val==null?
null:
jQuery.isArray(val)?
jQuery.map(val,function(val){
return{name:elem.name,value:val.replace(rCRLF,"\r\n")};
}):
{name:elem.name,value:val.replace(rCRLF,"\r\n")};
}).get();
}
});



jQuery.param=function(a,traditional){
var prefix,
s=[],
add=function(key,value){

value=jQuery.isFunction(value)?value():(value==null?"":value);
s[s.length]=encodeURIComponent(key)+"="+encodeURIComponent(value);
};


if(traditional===undefined){
traditional=jQuery.ajaxSettings&&jQuery.ajaxSettings.traditional;
}


if(jQuery.isArray(a)||(a.jquery&&!jQuery.isPlainObject(a))){

jQuery.each(a,function(){
add(this.name,this.value);
});

}else{


for(prefix in a){
buildParams(prefix,a[prefix],traditional,add);
}
}


return s.join("&").replace(r20,"+");
};

function buildParams(prefix,obj,traditional,add){
var name;

if(jQuery.isArray(obj)){

jQuery.each(obj,function(i,v){
if(traditional||rbracket.test(prefix)){

add(prefix,v);

}else{

buildParams(prefix+"["+(typeof v==="object"?i:"")+"]",v,traditional,add);
}
});

}else if(!traditional&&jQuery.type(obj)==="object"){

for(name in obj){
buildParams(prefix+"["+name+"]",obj[name],traditional,add);
}

}else{

add(prefix,obj);
}
}
jQuery.each(("blur focus focusin focusout load resize scroll unload click dblclick "+
"mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave "+
"change select submit keydown keypress keyup error contextmenu").split(" "),function(i,name){


jQuery.fn[name]=function(data,fn){
return arguments.length>0?
this.on(name,null,data,fn):
this.trigger(name);
};
});

jQuery.fn.extend({
hover:function(fnOver,fnOut){
return this.mouseenter(fnOver).mouseleave(fnOut||fnOver);
},

bind:function(types,data,fn){
return this.on(types,null,data,fn);
},
unbind:function(types,fn){
return this.off(types,null,fn);
},

delegate:function(selector,types,data,fn){
return this.on(types,selector,data,fn);
},
undelegate:function(selector,types,fn){

return arguments.length===1?this.off(selector,"**"):this.off(types,selector||"**",fn);
}
});
var

ajaxLocParts,
ajaxLocation,
ajax_nonce=jQuery.now(),

ajax_rquery=/\?/,
rhash=/#.*$/,
rts=/([?&])_=[^&]*/,
rheaders=/^(.*?):[ \t]*([^\r\n]*)\r?$/mg,

rlocalProtocol=/^(?:about|app|app-storage|.+-extension|file|res|widget):$/,
rnoContent=/^(?:GET|HEAD)$/,
rprotocol=/^\/\//,
rurl=/^([\w.+-]+:)(?:\/\/([^\/?#:]*)(?::(\d+)|)|)/,


_load=jQuery.fn.load,










prefilters={},






transports={},


allTypes="*/".concat("*");



try{
ajaxLocation=location.href;
}catch(e){


ajaxLocation=document.createElement("a");
ajaxLocation.href="";
ajaxLocation=ajaxLocation.href;
}


ajaxLocParts=rurl.exec(ajaxLocation.toLowerCase())||[];


function addToPrefiltersOrTransports(structure){


return function(dataTypeExpression,func){

if(typeof dataTypeExpression!=="string"){
func=dataTypeExpression;
dataTypeExpression="*";
}

var dataType,
i=0,
dataTypes=dataTypeExpression.toLowerCase().match(core_rnotwhite)||[];

if(jQuery.isFunction(func)){

while((dataType=dataTypes[i++])){

if(dataType[0]==="+"){
dataType=dataType.slice(1)||"*";
(structure[dataType]=structure[dataType]||[]).unshift(func);


}else{
(structure[dataType]=structure[dataType]||[]).push(func);
}
}
}
};
}


function inspectPrefiltersOrTransports(structure,options,originalOptions,jqXHR){

var inspected={},
seekingTransport=(structure===transports);

function inspect(dataType){
var selected;
inspected[dataType]=true;
jQuery.each(structure[dataType]||[],function(_,prefilterOrFactory){
var dataTypeOrTransport=prefilterOrFactory(options,originalOptions,jqXHR);
if(typeof dataTypeOrTransport==="string"&&!seekingTransport&&!inspected[dataTypeOrTransport]){
options.dataTypes.unshift(dataTypeOrTransport);
inspect(dataTypeOrTransport);
return false;
}else if(seekingTransport){
return!(selected=dataTypeOrTransport);
}
});
return selected;
}

return inspect(options.dataTypes[0])||!inspected["*"]&&inspect("*");
}




function ajaxExtend(target,src){
var deep,key,
flatOptions=jQuery.ajaxSettings.flatOptions||{};

for(key in src){
if(src[key]!==undefined){
(flatOptions[key]?target:(deep||(deep={})))[key]=src[key];
}
}
if(deep){
jQuery.extend(true,target,deep);
}

return target;
}

jQuery.fn.load=function(url,params,callback){
if(typeof url!=="string"&&_load){
return _load.apply(this,arguments);
}

var selector,response,type,
self=this,
off=url.indexOf(" ");

if(off>=0){
selector=url.slice(off,url.length);
url=url.slice(0,off);
}


if(jQuery.isFunction(params)){


callback=params;
params=undefined;


}else if(params&&typeof params==="object"){
type="POST";
}


if(self.length>0){
jQuery.ajax({
url:url,


type:type,
dataType:"html",
data:params
}).done(function(responseText){


response=arguments;

self.html(selector?



jQuery("<div>").append(jQuery.parseHTML(responseText)).find(selector):


responseText);

}).complete(callback&&function(jqXHR,status){
self.each(callback,response||[jqXHR.responseText,status,jqXHR]);
});
}

return this;
};


jQuery.each(["ajaxStart","ajaxStop","ajaxComplete","ajaxError","ajaxSuccess","ajaxSend"],function(i,type){
jQuery.fn[type]=function(fn){
return this.on(type,fn);
};
});

jQuery.extend({


active:0,


lastModified:{},
etag:{},

ajaxSettings:{
url:ajaxLocation,
type:"GET",
isLocal:rlocalProtocol.test(ajaxLocParts[1]),
global:true,
processData:true,
async:true,
contentType:"application/x-www-form-urlencoded; charset=UTF-8",












accepts:{
"*":allTypes,
text:"text/plain",
html:"text/html",
xml:"application/xml, text/xml",
json:"application/json, text/javascript"
},

contents:{
xml:/xml/,
html:/html/,
json:/json/
},

responseFields:{
xml:"responseXML",
text:"responseText",
json:"responseJSON"
},



converters:{


"* text":String,


"text html":true,


"text json":jQuery.parseJSON,


"text xml":jQuery.parseXML
},





flatOptions:{
url:true,
context:true
}
},




ajaxSetup:function(target,settings){
return settings?


ajaxExtend(ajaxExtend(target,jQuery.ajaxSettings),settings):


ajaxExtend(jQuery.ajaxSettings,target);
},

ajaxPrefilter:addToPrefiltersOrTransports(prefilters),
ajaxTransport:addToPrefiltersOrTransports(transports),


ajax:function(url,options){


if(typeof url==="object"){
options=url;
url=undefined;
}


options=options||{};

var
parts,

i,

cacheURL,

responseHeadersString,

timeoutTimer,


fireGlobals,

transport,

responseHeaders,

s=jQuery.ajaxSetup({},options),

callbackContext=s.context||s,

globalEventContext=s.context&&(callbackContext.nodeType||callbackContext.jquery)?
jQuery(callbackContext):
jQuery.event,

deferred=jQuery.Deferred(),
completeDeferred=jQuery.Callbacks("once memory"),

statusCode=s.statusCode||{},

requestHeaders={},
requestHeadersNames={},

state=0,

strAbort="canceled",

jqXHR={
readyState:0,


getResponseHeader:function(key){
var match;
if(state===2){
if(!responseHeaders){
responseHeaders={};
while((match=rheaders.exec(responseHeadersString))){
responseHeaders[match[1].toLowerCase()]=match[2];
}
}
match=responseHeaders[key.toLowerCase()];
}
return match==null?null:match;
},


getAllResponseHeaders:function(){
return state===2?responseHeadersString:null;
},


setRequestHeader:function(name,value){
var lname=name.toLowerCase();
if(!state){
name=requestHeadersNames[lname]=requestHeadersNames[lname]||name;
requestHeaders[name]=value;
}
return this;
},


overrideMimeType:function(type){
if(!state){
s.mimeType=type;
}
return this;
},


statusCode:function(map){
var code;
if(map){
if(state<2){
for(code in map){

statusCode[code]=[statusCode[code],map[code]];
}
}else{

jqXHR.always(map[jqXHR.status]);
}
}
return this;
},


abort:function(statusText){
var finalText=statusText||strAbort;
if(transport){
transport.abort(finalText);
}
done(0,finalText);
return this;
}
};


deferred.promise(jqXHR).complete=completeDeferred.add;
jqXHR.success=jqXHR.done;
jqXHR.error=jqXHR.fail;





s.url=((url||s.url||ajaxLocation)+"").replace(rhash,"").replace(rprotocol,ajaxLocParts[1]+"//");


s.type=options.method||options.type||s.method||s.type;


s.dataTypes=jQuery.trim(s.dataType||"*").toLowerCase().match(core_rnotwhite)||[""];


if(s.crossDomain==null){
parts=rurl.exec(s.url.toLowerCase());
s.crossDomain=!!(parts&&
(parts[1]!==ajaxLocParts[1]||parts[2]!==ajaxLocParts[2]||
(parts[3]||(parts[1]==="http:"?"80":"443"))!==
(ajaxLocParts[3]||(ajaxLocParts[1]==="http:"?"80":"443")))
);
}


if(s.data&&s.processData&&typeof s.data!=="string"){
s.data=jQuery.param(s.data,s.traditional);
}


inspectPrefiltersOrTransports(prefilters,s,options,jqXHR);


if(state===2){
return jqXHR;
}


fireGlobals=s.global;


if(fireGlobals&&jQuery.active++===0){
jQuery.event.trigger("ajaxStart");
}


s.type=s.type.toUpperCase();


s.hasContent=!rnoContent.test(s.type);



cacheURL=s.url;


if(!s.hasContent){


if(s.data){
cacheURL=(s.url+=(ajax_rquery.test(cacheURL)?"&":"?")+s.data);

delete s.data;
}


if(s.cache===false){
s.url=rts.test(cacheURL)?


cacheURL.replace(rts,"$1_="+ajax_nonce++):


cacheURL+(ajax_rquery.test(cacheURL)?"&":"?")+"_="+ajax_nonce++;
}
}


if(s.ifModified){
if(jQuery.lastModified[cacheURL]){
jqXHR.setRequestHeader("If-Modified-Since",jQuery.lastModified[cacheURL]);
}
if(jQuery.etag[cacheURL]){
jqXHR.setRequestHeader("If-None-Match",jQuery.etag[cacheURL]);
}
}


if(s.data&&s.hasContent&&s.contentType!==false||options.contentType){
jqXHR.setRequestHeader("Content-Type",s.contentType);
}


jqXHR.setRequestHeader(
"Accept",
s.dataTypes[0]&&s.accepts[s.dataTypes[0]]?
s.accepts[s.dataTypes[0]]+(s.dataTypes[0]!=="*"?", "+allTypes+"; q=0.01":""):
s.accepts["*"]
);


for(i in s.headers){
jqXHR.setRequestHeader(i,s.headers[i]);
}


if(s.beforeSend&&(s.beforeSend.call(callbackContext,jqXHR,s)===false||state===2)){

return jqXHR.abort();
}


strAbort="abort";


for(i in{success:1,error:1,complete:1}){
jqXHR[i](s[i]);
}


transport=inspectPrefiltersOrTransports(transports,s,options,jqXHR);


if(!transport){
done(-1,"No Transport");
}else{
jqXHR.readyState=1;


if(fireGlobals){
globalEventContext.trigger("ajaxSend",[jqXHR,s]);
}

if(s.async&&s.timeout>0){
timeoutTimer=setTimeout(function(){
jqXHR.abort("timeout");
},s.timeout);
}

try{
state=1;
transport.send(requestHeaders,done);
}catch(e){

if(state<2){
done(-1,e);

}else{
throw e;
}
}
}


function done(status,nativeStatusText,responses,headers){
var isSuccess,success,error,response,modified,
statusText=nativeStatusText;


if(state===2){
return;
}


state=2;


if(timeoutTimer){
clearTimeout(timeoutTimer);
}



transport=undefined;


responseHeadersString=headers||"";


jqXHR.readyState=status>0?4:0;


isSuccess=status>=200&&status<300||status===304;


if(responses){
response=ajaxHandleResponses(s,jqXHR,responses);
}


response=ajaxConvert(s,response,jqXHR,isSuccess);


if(isSuccess){


if(s.ifModified){
modified=jqXHR.getResponseHeader("Last-Modified");
if(modified){
jQuery.lastModified[cacheURL]=modified;
}
modified=jqXHR.getResponseHeader("etag");
if(modified){
jQuery.etag[cacheURL]=modified;
}
}


if(status===204||s.type==="HEAD"){
statusText="nocontent";


}else if(status===304){
statusText="notmodified";


}else{
statusText=response.state;
success=response.data;
error=response.error;
isSuccess=!error;
}
}else{


error=statusText;
if(status||!statusText){
statusText="error";
if(status<0){
status=0;
}
}
}


jqXHR.status=status;
jqXHR.statusText=(nativeStatusText||statusText)+"";


if(isSuccess){
deferred.resolveWith(callbackContext,[success,statusText,jqXHR]);
}else{
deferred.rejectWith(callbackContext,[jqXHR,statusText,error]);
}


jqXHR.statusCode(statusCode);
statusCode=undefined;

if(fireGlobals){
globalEventContext.trigger(isSuccess?"ajaxSuccess":"ajaxError",
[jqXHR,s,isSuccess?success:error]);
}


completeDeferred.fireWith(callbackContext,[jqXHR,statusText]);

if(fireGlobals){
globalEventContext.trigger("ajaxComplete",[jqXHR,s]);

if(!(--jQuery.active)){
jQuery.event.trigger("ajaxStop");
}
}
}

return jqXHR;
},

getJSON:function(url,data,callback){
return jQuery.get(url,data,callback,"json");
},

getScript:function(url,callback){
return jQuery.get(url,undefined,callback,"script");
}
});

jQuery.each(["get","post"],function(i,method){
jQuery[method]=function(url,data,callback,type){

if(jQuery.isFunction(data)){
type=type||callback;
callback=data;
data=undefined;
}

return jQuery.ajax({
url:url,
type:method,
dataType:type,
data:data,
success:callback
});
};
});





function ajaxHandleResponses(s,jqXHR,responses){
var firstDataType,ct,finalDataType,type,
contents=s.contents,
dataTypes=s.dataTypes;


while(dataTypes[0]==="*"){
dataTypes.shift();
if(ct===undefined){
ct=s.mimeType||jqXHR.getResponseHeader("Content-Type");
}
}


if(ct){
for(type in contents){
if(contents[type]&&contents[type].test(ct)){
dataTypes.unshift(type);
break;
}
}
}


if(dataTypes[0]in responses){
finalDataType=dataTypes[0];
}else{

for(type in responses){
if(!dataTypes[0]||s.converters[type+" "+dataTypes[0]]){
finalDataType=type;
break;
}
if(!firstDataType){
firstDataType=type;
}
}

finalDataType=finalDataType||firstDataType;
}




if(finalDataType){
if(finalDataType!==dataTypes[0]){
dataTypes.unshift(finalDataType);
}
return responses[finalDataType];
}
}




function ajaxConvert(s,response,jqXHR,isSuccess){
var conv2,current,conv,tmp,prev,
converters={},

dataTypes=s.dataTypes.slice();


if(dataTypes[1]){
for(conv in s.converters){
converters[conv.toLowerCase()]=s.converters[conv];
}
}

current=dataTypes.shift();


while(current){

if(s.responseFields[current]){
jqXHR[s.responseFields[current]]=response;
}


if(!prev&&isSuccess&&s.dataFilter){
response=s.dataFilter(response,s.dataType);
}

prev=current;
current=dataTypes.shift();

if(current){


if(current==="*"){

current=prev;


}else if(prev!=="*"&&prev!==current){


conv=converters[prev+" "+current]||converters["* "+current];


if(!conv){
for(conv2 in converters){


tmp=conv2.split(" ");
if(tmp[1]===current){


conv=converters[prev+" "+tmp[0]]||
converters["* "+tmp[0]];
if(conv){

if(conv===true){
conv=converters[conv2];


}else if(converters[conv2]!==true){
current=tmp[0];
dataTypes.unshift(tmp[1]);
}
break;
}
}
}
}


if(conv!==true){


if(conv&&s["throws"]){
response=conv(response);
}else{
try{
response=conv(response);
}catch(e){
return{state:"parsererror",error:conv?e:"No conversion from "+prev+" to "+current};
}
}
}
}
}
}

return{state:"success",data:response};
}

jQuery.ajaxSetup({
accepts:{
script:"text/javascript, application/javascript, application/ecmascript, application/x-ecmascript"
},
contents:{
script:/(?:java|ecma)script/
},
converters:{
"text script":function(text){
jQuery.globalEval(text);
return text;
}
}
});


jQuery.ajaxPrefilter("script",function(s){
if(s.cache===undefined){
s.cache=false;
}
if(s.crossDomain){
s.type="GET";
s.global=false;
}
});


jQuery.ajaxTransport("script",function(s){


if(s.crossDomain){

var script,
head=document.head||jQuery("head")[0]||document.documentElement;

return{

send:function(_,callback){

script=document.createElement("script");

script.async=true;

if(s.scriptCharset){
script.charset=s.scriptCharset;
}

script.src=s.url;


script.onload=script.onreadystatechange=function(_,isAbort){

if(isAbort||!script.readyState||/loaded|complete/.test(script.readyState)){


script.onload=script.onreadystatechange=null;


if(script.parentNode){
script.parentNode.removeChild(script);
}


script=null;


if(!isAbort){
callback(200,"success");
}
}
};



head.insertBefore(script,head.firstChild);
},

abort:function(){
if(script){
script.onload(undefined,true);
}
}
};
}
});
var oldCallbacks=[],
rjsonp=/(=)\?(?=&|$)|\?\?/;


jQuery.ajaxSetup({
jsonp:"callback",
jsonpCallback:function(){
var callback=oldCallbacks.pop()||(jQuery.expando+"_"+(ajax_nonce++));
this[callback]=true;
return callback;
}
});


jQuery.ajaxPrefilter("json jsonp",function(s,originalSettings,jqXHR){

var callbackName,overwritten,responseContainer,
jsonProp=s.jsonp!==false&&(rjsonp.test(s.url)?
"url":
typeof s.data==="string"&&!(s.contentType||"").indexOf("application/x-www-form-urlencoded")&&rjsonp.test(s.data)&&"data"
);


if(jsonProp||s.dataTypes[0]==="jsonp"){


callbackName=s.jsonpCallback=jQuery.isFunction(s.jsonpCallback)?
s.jsonpCallback():
s.jsonpCallback;


if(jsonProp){
s[jsonProp]=s[jsonProp].replace(rjsonp,"$1"+callbackName);
}else if(s.jsonp!==false){
s.url+=(ajax_rquery.test(s.url)?"&":"?")+s.jsonp+"="+callbackName;
}


s.converters["script json"]=function(){
if(!responseContainer){
jQuery.error(callbackName+" was not called");
}
return responseContainer[0];
};


s.dataTypes[0]="json";


overwritten=window[callbackName];
window[callbackName]=function(){
responseContainer=arguments;
};


jqXHR.always(function(){

window[callbackName]=overwritten;


if(s[callbackName]){

s.jsonpCallback=originalSettings.jsonpCallback;


oldCallbacks.push(callbackName);
}


if(responseContainer&&jQuery.isFunction(overwritten)){
overwritten(responseContainer[0]);
}

responseContainer=overwritten=undefined;
});


return"script";
}
});
var xhrCallbacks,xhrSupported,
xhrId=0,

xhrOnUnloadAbort=window.ActiveXObject&&function(){

var key;
for(key in xhrCallbacks){
xhrCallbacks[key](undefined,true);
}
};


function createStandardXHR(){
try{
return new window.XMLHttpRequest();
}catch(e){}
}

function createActiveXHR(){
try{
return new window.ActiveXObject("Microsoft.XMLHTTP");
}catch(e){}
}



jQuery.ajaxSettings.xhr=window.ActiveXObject?






function(){
return!this.isLocal&&createStandardXHR()||createActiveXHR();
}:

createStandardXHR;


xhrSupported=jQuery.ajaxSettings.xhr();
jQuery.support.cors=!!xhrSupported&&("withCredentials"in xhrSupported);
xhrSupported=jQuery.support.ajax=!!xhrSupported;


if(xhrSupported){

jQuery.ajaxTransport(function(s){

if(!s.crossDomain||jQuery.support.cors){

var callback;

return{
send:function(headers,complete){


var handle,i,
xhr=s.xhr();



if(s.username){
xhr.open(s.type,s.url,s.async,s.username,s.password);
}else{
xhr.open(s.type,s.url,s.async);
}


if(s.xhrFields){
for(i in s.xhrFields){
xhr[i]=s.xhrFields[i];
}
}


if(s.mimeType&&xhr.overrideMimeType){
xhr.overrideMimeType(s.mimeType);
}






if(!s.crossDomain&&!headers["X-Requested-With"]){
headers["X-Requested-With"]="XMLHttpRequest";
}


try{
for(i in headers){
xhr.setRequestHeader(i,headers[i]);
}
}catch(err){}




xhr.send((s.hasContent&&s.data)||null);


callback=function(_,isAbort){
var status,responseHeaders,statusText,responses;




try{


if(callback&&(isAbort||xhr.readyState===4)){


callback=undefined;


if(handle){
xhr.onreadystatechange=jQuery.noop;
if(xhrOnUnloadAbort){
delete xhrCallbacks[handle];
}
}


if(isAbort){

if(xhr.readyState!==4){
xhr.abort();
}
}else{
responses={};
status=xhr.status;
responseHeaders=xhr.getAllResponseHeaders();



if(typeof xhr.responseText==="string"){
responses.text=xhr.responseText;
}



try{
statusText=xhr.statusText;
}catch(e){

statusText="";
}






if(!status&&s.isLocal&&!s.crossDomain){
status=responses.text?200:404;

}else if(status===1223){
status=204;
}
}
}
}catch(firefoxAccessException){
if(!isAbort){
complete(-1,firefoxAccessException);
}
}


if(responses){
complete(status,statusText,responses,responseHeaders);
}
};

if(!s.async){

callback();
}else if(xhr.readyState===4){


setTimeout(callback);
}else{
handle=++xhrId;
if(xhrOnUnloadAbort){


if(!xhrCallbacks){
xhrCallbacks={};
jQuery(window).unload(xhrOnUnloadAbort);
}

xhrCallbacks[handle]=callback;
}
xhr.onreadystatechange=callback;
}
},

abort:function(){
if(callback){
callback(undefined,true);
}
}
};
}
});
}
var fxNow,timerId,
rfxtypes=/^(?:toggle|show|hide)$/,
rfxnum=new RegExp("^(?:([+-])=|)("+core_pnum+")([a-z%]*)$","i"),
rrun=/queueHooks$/,
animationPrefilters=[defaultPrefilter],
tweeners={
"*":[function(prop,value){
var tween=this.createTween(prop,value),
target=tween.cur(),
parts=rfxnum.exec(value),
unit=parts&&parts[3]||(jQuery.cssNumber[prop]?"":"px"),


start=(jQuery.cssNumber[prop]||unit!=="px"&&+target)&&
rfxnum.exec(jQuery.css(tween.elem,prop)),
scale=1,
maxIterations=20;

if(start&&start[3]!==unit){

unit=unit||start[3];


parts=parts||[];


start=+target||1;

do{


scale=scale||".5";


start=start/scale;
jQuery.style(tween.elem,prop,start+unit);



}while(scale!==(scale=tween.cur()/target)&&scale!==1&&--maxIterations);
}


if(parts){
start=tween.start=+start||+target||0;
tween.unit=unit;

tween.end=parts[1]?
start+(parts[1]+1)*parts[2]:
+parts[2];
}

return tween;
}]
};


function createFxNow(){
setTimeout(function(){
fxNow=undefined;
});
return(fxNow=jQuery.now());
}

function createTween(value,prop,animation){
var tween,
collection=(tweeners[prop]||[]).concat(tweeners["*"]),
index=0,
length=collection.length;
for(;index<length;index++){
if((tween=collection[index].call(animation,prop,value))){


return tween;
}
}
}

function Animation(elem,properties,options){
var result,
stopped,
index=0,
length=animationPrefilters.length,
deferred=jQuery.Deferred().always(function(){

delete tick.elem;
}),
tick=function(){
if(stopped){
return false;
}
var currentTime=fxNow||createFxNow(),
remaining=Math.max(0,animation.startTime+animation.duration-currentTime),

temp=remaining/animation.duration||0,
percent=1-temp,
index=0,
length=animation.tweens.length;

for(;index<length;index++){
animation.tweens[index].run(percent);
}

deferred.notifyWith(elem,[animation,percent,remaining]);

if(percent<1&&length){
return remaining;
}else{
deferred.resolveWith(elem,[animation]);
return false;
}
},
animation=deferred.promise({
elem:elem,
props:jQuery.extend({},properties),
opts:jQuery.extend(true,{specialEasing:{}},options),
originalProperties:properties,
originalOptions:options,
startTime:fxNow||createFxNow(),
duration:options.duration,
tweens:[],
createTween:function(prop,end){
var tween=jQuery.Tween(elem,animation.opts,prop,end,
animation.opts.specialEasing[prop]||animation.opts.easing);
animation.tweens.push(tween);
return tween;
},
stop:function(gotoEnd){
var index=0,


length=gotoEnd?animation.tweens.length:0;
if(stopped){
return this;
}
stopped=true;
for(;index<length;index++){
animation.tweens[index].run(1);
}



if(gotoEnd){
deferred.resolveWith(elem,[animation,gotoEnd]);
}else{
deferred.rejectWith(elem,[animation,gotoEnd]);
}
return this;
}
}),
props=animation.props;

propFilter(props,animation.opts.specialEasing);

for(;index<length;index++){
result=animationPrefilters[index].call(animation,elem,props,animation.opts);
if(result){
return result;
}
}

jQuery.map(props,createTween,animation);

if(jQuery.isFunction(animation.opts.start)){
animation.opts.start.call(elem,animation);
}

jQuery.fx.timer(
jQuery.extend(tick,{
elem:elem,
anim:animation,
queue:animation.opts.queue
})
);


return animation.progress(animation.opts.progress)
.done(animation.opts.done,animation.opts.complete)
.fail(animation.opts.fail)
.always(animation.opts.always);
}

function propFilter(props,specialEasing){
var index,name,easing,value,hooks;


for(index in props){
name=jQuery.camelCase(index);
easing=specialEasing[name];
value=props[index];
if(jQuery.isArray(value)){
easing=value[1];
value=props[index]=value[0];
}

if(index!==name){
props[name]=value;
delete props[index];
}

hooks=jQuery.cssHooks[name];
if(hooks&&"expand"in hooks){
value=hooks.expand(value);
delete props[name];



for(index in value){
if(!(index in props)){
props[index]=value[index];
specialEasing[index]=easing;
}
}
}else{
specialEasing[name]=easing;
}
}
}

jQuery.Animation=jQuery.extend(Animation,{

tweener:function(props,callback){
if(jQuery.isFunction(props)){
callback=props;
props=["*"];
}else{
props=props.split(" ");
}

var prop,
index=0,
length=props.length;

for(;index<length;index++){
prop=props[index];
tweeners[prop]=tweeners[prop]||[];
tweeners[prop].unshift(callback);
}
},

prefilter:function(callback,prepend){
if(prepend){
animationPrefilters.unshift(callback);
}else{
animationPrefilters.push(callback);
}
}
});

function defaultPrefilter(elem,props,opts){

var prop,value,toggle,tween,hooks,oldfire,
anim=this,
orig={},
style=elem.style,
hidden=elem.nodeType&&isHidden(elem),
dataShow=jQuery._data(elem,"fxshow");


if(!opts.queue){
hooks=jQuery._queueHooks(elem,"fx");
if(hooks.unqueued==null){
hooks.unqueued=0;
oldfire=hooks.empty.fire;
hooks.empty.fire=function(){
if(!hooks.unqueued){
oldfire();
}
};
}
hooks.unqueued++;

anim.always(function(){


anim.always(function(){
hooks.unqueued--;
if(!jQuery.queue(elem,"fx").length){
hooks.empty.fire();
}
});
});
}


if(elem.nodeType===1&&("height"in props||"width"in props)){




opts.overflow=[style.overflow,style.overflowX,style.overflowY];



if(jQuery.css(elem,"display")==="inline"&&
jQuery.css(elem,"float")==="none"){



if(!jQuery.support.inlineBlockNeedsLayout||css_defaultDisplay(elem.nodeName)==="inline"){
style.display="inline-block";

}else{
style.zoom=1;
}
}
}

if(opts.overflow){
style.overflow="hidden";
if(!jQuery.support.shrinkWrapBlocks){
anim.always(function(){
style.overflow=opts.overflow[0];
style.overflowX=opts.overflow[1];
style.overflowY=opts.overflow[2];
});
}
}



for(prop in props){
value=props[prop];
if(rfxtypes.exec(value)){
delete props[prop];
toggle=toggle||value==="toggle";
if(value===(hidden?"hide":"show")){
continue;
}
orig[prop]=dataShow&&dataShow[prop]||jQuery.style(elem,prop);
}
}

if(!jQuery.isEmptyObject(orig)){
if(dataShow){
if("hidden"in dataShow){
hidden=dataShow.hidden;
}
}else{
dataShow=jQuery._data(elem,"fxshow",{});
}


if(toggle){
dataShow.hidden=!hidden;
}
if(hidden){
jQuery(elem).show();
}else{
anim.done(function(){
jQuery(elem).hide();
});
}
anim.done(function(){
var prop;
jQuery._removeData(elem,"fxshow");
for(prop in orig){
jQuery.style(elem,prop,orig[prop]);
}
});
for(prop in orig){
tween=createTween(hidden?dataShow[prop]:0,prop,anim);

if(!(prop in dataShow)){
dataShow[prop]=tween.start;
if(hidden){
tween.end=tween.start;
tween.start=prop==="width"||prop==="height"?1:0;
}
}
}
}
}

function Tween(elem,options,prop,end,easing){
return new Tween.prototype.init(elem,options,prop,end,easing);
}
jQuery.Tween=Tween;

Tween.prototype={
constructor:Tween,
init:function(elem,options,prop,end,easing,unit){
this.elem=elem;
this.prop=prop;
this.easing=easing||"swing";
this.options=options;
this.start=this.now=this.cur();
this.end=end;
this.unit=unit||(jQuery.cssNumber[prop]?"":"px");
},
cur:function(){
var hooks=Tween.propHooks[this.prop];

return hooks&&hooks.get?
hooks.get(this):
Tween.propHooks._default.get(this);
},
run:function(percent){
var eased,
hooks=Tween.propHooks[this.prop];

if(this.options.duration){
this.pos=eased=jQuery.easing[this.easing](
percent,this.options.duration*percent,0,1,this.options.duration
);
}else{
this.pos=eased=percent;
}
this.now=(this.end-this.start)*eased+this.start;

if(this.options.step){
this.options.step.call(this.elem,this.now,this);
}

if(hooks&&hooks.set){
hooks.set(this);
}else{
Tween.propHooks._default.set(this);
}
return this;
}
};

Tween.prototype.init.prototype=Tween.prototype;

Tween.propHooks={
_default:{
get:function(tween){
var result;

if(tween.elem[tween.prop]!=null&&
(!tween.elem.style||tween.elem.style[tween.prop]==null)){
return tween.elem[tween.prop];
}





result=jQuery.css(tween.elem,tween.prop,"");

return!result||result==="auto"?0:result;
},
set:function(tween){


if(jQuery.fx.step[tween.prop]){
jQuery.fx.step[tween.prop](tween);
}else if(tween.elem.style&&(tween.elem.style[jQuery.cssProps[tween.prop]]!=null||jQuery.cssHooks[tween.prop])){
jQuery.style(tween.elem,tween.prop,tween.now+tween.unit);
}else{
tween.elem[tween.prop]=tween.now;
}
}
}
};




Tween.propHooks.scrollTop=Tween.propHooks.scrollLeft={
set:function(tween){
if(tween.elem.nodeType&&tween.elem.parentNode){
tween.elem[tween.prop]=tween.now;
}
}
};

jQuery.each(["toggle","show","hide"],function(i,name){
var cssFn=jQuery.fn[name];
jQuery.fn[name]=function(speed,easing,callback){
return speed==null||typeof speed==="boolean"?
cssFn.apply(this,arguments):
this.animate(genFx(name,true),speed,easing,callback);
};
});

jQuery.fn.extend({
fadeTo:function(speed,to,easing,callback){


return this.filter(isHidden).css("opacity",0).show()


.end().animate({opacity:to},speed,easing,callback);
},
animate:function(prop,speed,easing,callback){
var empty=jQuery.isEmptyObject(prop),
optall=jQuery.speed(speed,easing,callback),
doAnimation=function(){

var anim=Animation(this,jQuery.extend({},prop),optall);


if(empty||jQuery._data(this,"finish")){
anim.stop(true);
}
};
doAnimation.finish=doAnimation;

return empty||optall.queue===false?
this.each(doAnimation):
this.queue(optall.queue,doAnimation);
},
stop:function(type,clearQueue,gotoEnd){
var stopQueue=function(hooks){
var stop=hooks.stop;
delete hooks.stop;
stop(gotoEnd);
};

if(typeof type!=="string"){
gotoEnd=clearQueue;
clearQueue=type;
type=undefined;
}
if(clearQueue&&type!==false){
this.queue(type||"fx",[]);
}

return this.each(function(){
var dequeue=true,
index=type!=null&&type+"queueHooks",
timers=jQuery.timers,
data=jQuery._data(this);

if(index){
if(data[index]&&data[index].stop){
stopQueue(data[index]);
}
}else{
for(index in data){
if(data[index]&&data[index].stop&&rrun.test(index)){
stopQueue(data[index]);
}
}
}

for(index=timers.length;index--;){
if(timers[index].elem===this&&(type==null||timers[index].queue===type)){
timers[index].anim.stop(gotoEnd);
dequeue=false;
timers.splice(index,1);
}
}




if(dequeue||!gotoEnd){
jQuery.dequeue(this,type);
}
});
},
finish:function(type){
if(type!==false){
type=type||"fx";
}
return this.each(function(){
var index,
data=jQuery._data(this),
queue=data[type+"queue"],
hooks=data[type+"queueHooks"],
timers=jQuery.timers,
length=queue?queue.length:0;


data.finish=true;


jQuery.queue(this,type,[]);

if(hooks&&hooks.stop){
hooks.stop.call(this,true);
}


for(index=timers.length;index--;){
if(timers[index].elem===this&&timers[index].queue===type){
timers[index].anim.stop(true);
timers.splice(index,1);
}
}


for(index=0;index<length;index++){
if(queue[index]&&queue[index].finish){
queue[index].finish.call(this);
}
}


delete data.finish;
});
}
});


function genFx(type,includeWidth){
var which,
attrs={height:type},
i=0;



includeWidth=includeWidth?1:0;
for(;i<4;i+=2-includeWidth){
which=cssExpand[i];
attrs["margin"+which]=attrs["padding"+which]=type;
}

if(includeWidth){
attrs.opacity=attrs.width=type;
}

return attrs;
}


jQuery.each({
slideDown:genFx("show"),
slideUp:genFx("hide"),
slideToggle:genFx("toggle"),
fadeIn:{opacity:"show"},
fadeOut:{opacity:"hide"},
fadeToggle:{opacity:"toggle"}
},function(name,props){
jQuery.fn[name]=function(speed,easing,callback){
return this.animate(props,speed,easing,callback);
};
});

jQuery.speed=function(speed,easing,fn){
var opt=speed&&typeof speed==="object"?jQuery.extend({},speed):{
complete:fn||!fn&&easing||
jQuery.isFunction(speed)&&speed,
duration:speed,
easing:fn&&easing||easing&&!jQuery.isFunction(easing)&&easing
};

opt.duration=jQuery.fx.off?0:typeof opt.duration==="number"?opt.duration:
opt.duration in jQuery.fx.speeds?jQuery.fx.speeds[opt.duration]:jQuery.fx.speeds._default;


if(opt.queue==null||opt.queue===true){
opt.queue="fx";
}


opt.old=opt.complete;

opt.complete=function(){
if(jQuery.isFunction(opt.old)){
opt.old.call(this);
}

if(opt.queue){
jQuery.dequeue(this,opt.queue);
}
};

return opt;
};

jQuery.easing={
linear:function(p){
return p;
},
swing:function(p){
return 0.5-Math.cos(p*Math.PI)/2;
}
};

jQuery.timers=[];
jQuery.fx=Tween.prototype.init;
jQuery.fx.tick=function(){
var timer,
timers=jQuery.timers,
i=0;

fxNow=jQuery.now();

for(;i<timers.length;i++){
timer=timers[i];

if(!timer()&&timers[i]===timer){
timers.splice(i--,1);
}
}

if(!timers.length){
jQuery.fx.stop();
}
fxNow=undefined;
};

jQuery.fx.timer=function(timer){
if(timer()&&jQuery.timers.push(timer)){
jQuery.fx.start();
}
};

jQuery.fx.interval=13;

jQuery.fx.start=function(){
if(!timerId){
timerId=setInterval(jQuery.fx.tick,jQuery.fx.interval);
}
};

jQuery.fx.stop=function(){
clearInterval(timerId);
timerId=null;
};

jQuery.fx.speeds={
slow:600,
fast:200,

_default:400
};


jQuery.fx.step={};

if(jQuery.expr&&jQuery.expr.filters){
jQuery.expr.filters.animated=function(elem){
return jQuery.grep(jQuery.timers,function(fn){
return elem===fn.elem;
}).length;
};
}
jQuery.fn.offset=function(options){
if(arguments.length){
return options===undefined?
this:
this.each(function(i){
jQuery.offset.setOffset(this,options,i);
});
}

var docElem,win,
box={top:0,left:0},
elem=this[0],
doc=elem&&elem.ownerDocument;

if(!doc){
return;
}

docElem=doc.documentElement;


if(!jQuery.contains(docElem,elem)){
return box;
}



if(typeof elem.getBoundingClientRect!==core_strundefined){
box=elem.getBoundingClientRect();
}
win=getWindow(doc);
return{
top:box.top+(win.pageYOffset||docElem.scrollTop)-(docElem.clientTop||0),
left:box.left+(win.pageXOffset||docElem.scrollLeft)-(docElem.clientLeft||0)
};
};

jQuery.offset={

setOffset:function(elem,options,i){
var position=jQuery.css(elem,"position");


if(position==="static"){
elem.style.position="relative";
}

var curElem=jQuery(elem),
curOffset=curElem.offset(),
curCSSTop=jQuery.css(elem,"top"),
curCSSLeft=jQuery.css(elem,"left"),
calculatePosition=(position==="absolute"||position==="fixed")&&jQuery.inArray("auto",[curCSSTop,curCSSLeft])>-1,
props={},curPosition={},curTop,curLeft;


if(calculatePosition){
curPosition=curElem.position();
curTop=curPosition.top;
curLeft=curPosition.left;
}else{
curTop=parseFloat(curCSSTop)||0;
curLeft=parseFloat(curCSSLeft)||0;
}

if(jQuery.isFunction(options)){
options=options.call(elem,i,curOffset);
}

if(options.top!=null){
props.top=(options.top-curOffset.top)+curTop;
}
if(options.left!=null){
props.left=(options.left-curOffset.left)+curLeft;
}

if("using"in options){
options.using.call(elem,props);
}else{
curElem.css(props);
}
}
};


jQuery.fn.extend({

position:function(){
if(!this[0]){
return;
}

var offsetParent,offset,
parentOffset={top:0,left:0},
elem=this[0];


if(jQuery.css(elem,"position")==="fixed"){

offset=elem.getBoundingClientRect();
}else{

offsetParent=this.offsetParent();


offset=this.offset();
if(!jQuery.nodeName(offsetParent[0],"html")){
parentOffset=offsetParent.offset();
}


parentOffset.top+=jQuery.css(offsetParent[0],"borderTopWidth",true);
parentOffset.left+=jQuery.css(offsetParent[0],"borderLeftWidth",true);
}




return{
top:offset.top-parentOffset.top-jQuery.css(elem,"marginTop",true),
left:offset.left-parentOffset.left-jQuery.css(elem,"marginLeft",true)
};
},

offsetParent:function(){
return this.map(function(){
var offsetParent=this.offsetParent||docElem;
while(offsetParent&&(!jQuery.nodeName(offsetParent,"html")&&jQuery.css(offsetParent,"position")==="static")){
offsetParent=offsetParent.offsetParent;
}
return offsetParent||docElem;
});
}
});



jQuery.each({scrollLeft:"pageXOffset",scrollTop:"pageYOffset"},function(method,prop){
var top=/Y/.test(prop);

jQuery.fn[method]=function(val){
return jQuery.access(this,function(elem,method,val){
var win=getWindow(elem);

if(val===undefined){
return win?(prop in win)?win[prop]:
win.document.documentElement[method]:
elem[method];
}

if(win){
win.scrollTo(
!top?val:jQuery(win).scrollLeft(),
top?val:jQuery(win).scrollTop()
);

}else{
elem[method]=val;
}
},method,val,arguments.length,null);
};
});

function getWindow(elem){
return jQuery.isWindow(elem)?
elem:
elem.nodeType===9?
elem.defaultView||elem.parentWindow:
false;
}

jQuery.each({Height:"height",Width:"width"},function(name,type){
jQuery.each({padding:"inner"+name,content:type,"":"outer"+name},function(defaultExtra,funcName){

jQuery.fn[funcName]=function(margin,value){
var chainable=arguments.length&&(defaultExtra||typeof margin!=="boolean"),
extra=defaultExtra||(margin===true||value===true?"margin":"border");

return jQuery.access(this,function(elem,type,value){
var doc;

if(jQuery.isWindow(elem)){



return elem.document.documentElement["client"+name];
}


if(elem.nodeType===9){
doc=elem.documentElement;



return Math.max(
elem.body["scroll"+name],doc["scroll"+name],
elem.body["offset"+name],doc["offset"+name],
doc["client"+name]
);
}

return value===undefined?

jQuery.css(elem,type,extra):


jQuery.style(elem,type,value,extra);
},type,chainable?margin:undefined,chainable,null);
};
});
});




jQuery.fn.size=function(){
return this.length;
};

jQuery.fn.andSelf=jQuery.fn.addBack;


if(typeof module==="object"&&module&&typeof module.exports==="object"){




module.exports=jQuery;
}else{

window.jQuery=window.$=jQuery;








if(typeof define==="function"&&define.amd){
define("jquery",[],function(){return jQuery;});
}
}

})(window);

if(!window.__td){window.__MT=100;window.__ti=0;window.__td=[];window.__td.length=window.__MT;window.__noTrace=false;

}




if(typeof vp=="undefined"){
var vp={};
}





vp.instrumentation={};

var LOGGING_MAX_LEN=65535;












if(!window.__MT)
{
var __MT=100;


var __ti=0;


var __td=[];
__td.length=__MT;
}



(function $vpfn_zphtohCKsH0LMBoPRVeViw45$1()
{if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}






vp.instrumentation.getTrace=function $vpfn_0IGZnGrOEn2PV0cnfKSCQA53$34()
{if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
var MAX_SIZE=__MT;


var iFirstSlot=__ti+1;
if(iFirstSlot>=MAX_SIZE||!__td[iFirstSlot])
{
iFirstSlot=0;
}

var aOut=[];
aOut.push("<trace>");
var i=iFirstSlot;
var bLoopFinished=false;
var sLastFnName=null;


while(__td[i]&&(i<iFirstSlot||!bLoopFinished))
{
var args=__td[i];
var fn=__td[i].callee;
var sFnName=vp.instrumentation.getFunctionName(fn);

if(!fn.isVpEventsWrapper)
{
aOut.push("<f n=\"");
aOut.push(sFnName);
aOut.push("\"");

if(typeof(fn._eventHandlerId)!="undefined"&&sLastFnName=="vpEventHandlerWrapper")
{
var sEventType="unknown";
if(args&&args[0]&&args[0].type)
{
sEventType=args[0].type;
}
aOut.push(" eventhandler=\""+sEventType+"\" ");
}




if(fn._isErrorHandler)
{
aOut.push(" errorhandler=\"1\" ");
}

if(fn._isInstrumentationMethod)
{
aOut.push(" instrumentationmethod=\"1\" ");
}

sLastFnName=sFnName;

if(__td[i].length===0)
{
aOut.push("/>");
}
else
{
aOut.push(">");

for(var j=0;j<__td[i].length;j++)
{
aOut.push("<a>");
aOut.push(vp.instrumentation._basicXmlEncode(vp.instrumentation.objToString(__td[i][j],0).substr(0,255)));
aOut.push("</a>");
}

aOut.push("</f>");
}
}

sLastFnName=sFnName;

i++;
if(i>=MAX_SIZE)
{
i=0;
bLoopFinished=true;
}
}

aOut.push("</trace>");
return aOut.join("");
};





vp.instrumentation.objToString=function $vpfn_jARcZ714$IkyzyWerhj8Vw145$37(oObj,iRecurseLevel)
{if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
if(typeof(iRecurseLevel)=="undefined")
{
iRecurseLevel=2;
}

if(typeof(oObj)=="object")
{
if(oObj===null)
{
return"{null}";
}
else if(iRecurseLevel===0)
{
return"{obj}";
}
else
{
var aValues=[];
for(var sProp in oObj)
{
var sValue=sProp+":";

try
{
sValue+=arguments.callee(oObj[sProp],iRecurseLevel-1);
}
catch(ex)
{
}

aValues.push(sValue);
}
return"{"+aValues.join(",")+"}";
}
}
if(typeof(oObj)=="function")
{
return vp.instrumentation.getFunctionName(oObj);
}
else if(typeof(oObj)=="string")
{
return'"'+oObj.replace(/\"/gi,"\\\"")+'"';
}
else if(typeof(oObj)=="undefined")
{
return"{undefined}";
}
else
{
return oObj+"";
}
};






vp.instrumentation.getFunctionName=function $vpfn_q6oRuQ0U0JzjBjSac3ou2Q205$41(fn)
{if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
if(fn._vpfn)
{
return fn._vpfn;
}

var sName=fn.toString();
sName=sName.substr("function ".length);
sName=sName.substr(0,sName.indexOf('('));
return sName;
};

vp.instrumentation._basicXmlEncode=function $vpfn_Kbm6EtlgMb1T6THqIp$Kmw218$41(sStr)
{if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
if(typeof(sStr)=="undefined"||sStr===null)
{
return"";
}
else
{
return sStr.replace(/\</gi,"&lt;").replace(/\>/gi,"&gt;").replace(/\&/gi,"&amp;");
}
};






vp.instrumentation.logError=function $vpfn_cfSgoyLWHAea6u3XRW8eUg235$34(sMessage,iLineNum)
{if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
if(vp.instrumentation._currentErrorHandler)
{
vp.instrumentation._currentErrorHandler(sMessage,document.location.href,iLineNum||0);
}
};

vp.instrumentation.logError._isInstrumentationMethod=true;





vp.instrumentation.wrapFunctionWithInstrumentation=function $vpfn_miA8TbMj4$crDe6xOsC1Mw249$57(fn)
{if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}

if(typeof(fn)!="function")
{
return fn;
}


if(fn._isVpInstrumentedFunction===true)
{
return fn;
}

var fnWrapped=function $vpfn_zLcsYGn1RTxwfdyNH$7Yvw263$24()
{if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
try
{
fn.apply(this,arguments);
}
catch(ex)
{
vp.instrumentation.logException(ex);


throw new Error(ex.message+" "+VP_INSTRUMENTATION_ALREADY_LOGGED_MESSAGE,ex.fileName,ex.lineNumber);
}
};

fnWrapped._isVpInstrumentedFunction=true;

return fnWrapped;
};





vp.instrumentation.logException=function $vpfn_ChbJuXWHxjwb_FTCjMB$Bg287$38(oException)
{if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
if(oException._wasLogged)
{
return;
}

oException._wasLogged=true;

if(vp.instrumentation._currentErrorHandler)
{

if(!oException.fileName)
{
var oFileInfo=vp.instrumentation._extractLineAndFileFromStack(oException);
oException.fileName=oFileInfo.fileName;
oException.lineNumber=oFileInfo.lineNumber;
}


if(!oException.fileName)
{
oException.fileName=oException.sourceURL;
}


if(!oException.lineNumber)
{
oException.lineNumber=oException.line;
}

vp.instrumentation._currentErrorHandler(oException.message,oException.fileName,oException.lineNumber);
}
};





vp.instrumentation._extractLineAndFileFromStack=function $vpfn_yIrN39i3R4yqDtooocjvsg326$54(oException)
{if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
var oFileInfo={};

if(oException&&oException.stack)
{
try
{
var urlRegex=/((?:https?\:)?\/\/.*?):([0-9]*)/i;
var matches=urlRegex.exec(oException.stack);
if(matches&&matches.length>2)
{
oFileInfo.fileName=matches[1];
oFileInfo.lineNumber=matches[2];
}
}
catch(ex)
{
}
}
return oFileInfo;
};

vp.instrumentation.logException._isInstrumentationMethod=true;

vp.instrumentation.numberOfErrors=0;
vp.instrumentation.lastLoggedError=null;









vp.instrumentation.errorHandler=function $vpfn_j_0P3CC2G$jEQ3ozgbgTrQ362$38(sMsg,sErrorUrl,iLineNum)
{if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}

window.__noTrace=true;

try
{
var oErrData=vp.instrumentation.getErrorDataQueryString(sMsg,sErrorUrl,iLineNum);


if(oErrData)
{

if($!==jQuery)
{
oErrData.form.trace="<trace><f n='jQueryBonk3' /><f n='jQueryBonk2'><a>"
+vp.instrumentation.tagInspector('script')
+vp.instrumentation.objInspector($)
+"</a></f><f n='jQueryBonk1' errorhandler='true'/></trace>";
}

var sTrackingUrl="/vp/tracking/client-event-logger.aspx?"+jQuery.param(oErrData.queryString);
var sPostData=vp.instrumentation.serializeLogData(oErrData.form);

jQuery.post(sTrackingUrl,sPostData);
}
}
catch(ex)
{
}

window.__noTrace=false;
return true;
};

vp.instrumentation.serializeLogData=function $vpfn_2UnvXOKEJJcbY7bhgwnc3A397$42(oPostData)
{if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
var sPostData=jQuery.param(oPostData);

if(sPostData.length>LOGGING_MAX_LEN)
{
oPostData.trace="<trace><fn n=\"Trace too long\" /></trace>";
sPostData=jQuery.param(oPostData);
}

return sPostData;
};

var VP_INSTRUMENTATION_ALREADY_LOGGED_MESSAGE="7389BF32-F154-444B-9FDA-8A6C61D10041";

vp.instrumentation.getErrorDataQueryString=function $vpfn_h7Kjk5F2OvglQNA4dhoCng412$49(sMsg,sErrorUrl,iLineNum)
{if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}



var iNow=new Date().valueOf();
var lastErr=vp.instrumentation.lastLoggedError;

if(lastErr)
{




var isMeaninglessError=!sErrorUrl&&iLineNum===0;



var isRethrown=sMsg&&sMsg.indexOf(VP_INSTRUMENTATION_ALREADY_LOGGED_MESSAGE)>0;

if(isMeaninglessError||isRethrown||(sMsg==lastErr.message&&sErrorUrl==lastErr.errorUrl))
{
vp.instrumentation.lastLoggedError=null;
return null;
}
}

vp.instrumentation.lastLoggedError=
{
dateTime:iNow,
message:sMsg,
errorUrl:sErrorUrl,
lineNumber:iLineNum
};

var LOGGING_NUM_ERRORS_MAX=50;

vp.instrumentation.numberOfErrors++;
if(vp.instrumentation.numberOfErrors>LOGGING_NUM_ERRORS_MAX)
{
return null;
}

var oPostData={};
oPostData.message=sMsg;
oPostData.line=iLineNum;


if(!vp.instrumentation._populateErrorLogData(sMsg,sErrorUrl,iLineNum,oPostData))
{
return null;
}

var sQs=document.location.search;
if(sQs.length>1)
{
sQs=sQs.substring(1);
}

var oGetData={
d:new Date().toUTCString().replace("UTC","GMT"),
g:window._vp_page_guid,
s:window._vp_session_id,
e:window.VP_CLIENT_EVENT_TYPE_Error,
p:document.location.pathname,
b:navigator.userAgent,
q:sQs,
err:true,
u:sErrorUrl||""
};

if(window._vp_logical_page)
{
oGetData.lp=window._vp_logical_page;
}

return{
queryString:oGetData,
form:oPostData
};
};






vp.instrumentation.setErrorHandler=function $vpfn_Sd_$FWEPjpHoFplCi8cCRA499$41(fnHandler)
{if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
fnHandler._isErrorHandler=true;
vp.instrumentation._currentErrorHandler=fnHandler;
window.onerror=fnHandler;
};









vp.instrumentation._populateErrorLogData=function $vpfn_mc$ptyRi9WrIoDXQsLhpMQ514$47(sMessage,sErrorUrl,iLineNum,oData)
{if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
oData.trace=vp.instrumentation.getTrace();
return true;
};





vp.instrumentation.testError=function $vpfn_TbB_7crxE3QJQTd3Y2UL9w524$35(sMethodName)
{if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
if(!sMethodName)
{
sMethodName="testErrorUndefinedMethod";
}

var fn=vp.instrumentation.wrapFunctionWithInstrumentation(function $vpfn_zphtohCKsH0LMBoPRVeViw531$68()
{if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
eval(sMethodName+"();");
});

fn();
};






vp.instrumentation.objInspector=function $vpfn_vibzhG0FiIyRzHzJN7YdGQ544$38(obj)
{if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
var details="vp.instrumentation.objToString: "+vp.instrumentation.objToString(obj,10)+";";

try
{
details+=" JSON.stringify:";
details+=JSON.stringify(obj);
}
catch(ex)
{
details+=" JSON.stringify failed:"+ex;
}


try
{
details+=" Class inspection:";
if(obj&&obj.constructor&&obj.constructor.toString)
{
var arr=obj.constructor.toString().match(/function\s*(\w+)/);
for(var i=0;i<arr.length;i++)
{
details+=i+"="+arr[i];
}
}
}
catch(ex)
{
details+=" Class inspection failed:"+ex;
}

try
{

if(vp.instrumentation.determineObj(obj))
{
details+=" Detailed inspection:";
if(obj!=undefined&&obj instanceof Object)
{
details+=" Detailed func inspection:";
for(var prop in obj)
{
if(obj[prop]instanceof Function)
{
details+=vp.instrumentation.detailedObjInspector(prop,obj[prop]);
}
}
}
}
}
catch(ex)
{
details+=" Detailed inspection failed:"+ex;
}

return details;
};






vp.instrumentation.determineObj=function $vpfn_58SZbnZk9BtPfsX1yPsdEg608$38(obj)
{if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
if(obj==undefined)
{
return false;
}
else
{
if(obj instanceof Object)
{

if((obj instanceof Boolean)||(obj instanceof Number)||(obj instanceof String)||
(obj instanceof Array)||(obj instanceof Date)||(obj instanceof Function))
{
return false;
}
else if(obj instanceof Object)
{
return true;
}
}
return false;
}
};






vp.instrumentation.tagInspector=function $vpfn_r_zZMuLGLfv39KAoWCllXg638$38(tag)
{if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
var tags=document.getElementsByTagName(tag);
var scripts="Loaded Scripts: ";
for(var i=0;i<tags.length;i++)
{
scripts+=i+":"+tags[i].src+" ";
}
return scripts;
};






vp.instrumentation.detailedObjInspector=function $vpfn_njDEA9A5$QIcfeawdChc$g654$46(prop,obj)
{if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
var details='';
if(obj==undefined)
{
details+="undefined";
}
else
{
details+=" type:"+(typeof obj).toString()+";Name:"+prop;

if(obj instanceof Object)
{

if(obj instanceof Boolean)
{
details+="boolean";
}
else if(obj instanceof Number)
{
details+="number";
}
else if(obj instanceof String)
{
details+="string";
}

else if(obj instanceof Array)
{
details+="array:interals:";
for(var j=0;j<obj.length;j++)
{
details+="cell["+j+"]="+obj[j];
}
}
else if(obj instanceof Date)
{
details+="date:"+obj;
}
else if(obj instanceof Function)
{
details+=" function-internals:"+obj.toString(0);
}
else if(obj instanceof Object)
{
details+="object";
}
}

else if(typeof obj)
{

if(typeof obj=="object")
{
if(typeof obj=="object"&&!obj)
{
details+="null";
}
}
else
{

if(typeof obj=="boolean")
{
details+="boolean:"+obj;
}
else if(typeof obj=="number")
{
details+="number:"+obj;
}
else if(typeof obj=="string")
{
details+="string:"+obj;
}
}
}
else
{
details+="undectectable"+obj;
}
}
return details;
};

if(!window.isDebug&&window._vp_log_client_errors)
{
vp.instrumentation.setErrorHandler(vp.instrumentation.errorHandler);
}


if(window._vp_log_client_errors&&vp.bootstrap)
{
vp.bootstrap.setExceptionLogger(vp.instrumentation.logException);
}

})(jQuery);


function showTrace()
{if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
window.__noTrace=true;
alert(vp.instrumentation.getTrace());
window.__noTrace=false;
}showTrace._vpfn='$vpfn_YcRATQ$Ku7D_yxkEGkta1w752$0';


var BROWSER_CLASS_Other='Other';
var BROWSER_CLASS_InternetExplorer='InternetExplorer';
var BROWSER_CLASS_Gecko='Gecko';
var BROWSER_CLASS_Webkit='Webkit';
var BROWSER_CLASS_Opera='Opera';

var BROWSER_NAME_Other='Other';
var BROWSER_NAME_InternetExplorer='InternetExplorer';
var BROWSER_NAME_Firefox='Firefox';
var BROWSER_NAME_Mozilla='Mozilla';
var BROWSER_NAME_Safari='Safari';
var BROWSER_NAME_GoogleChrome='GoogleChrome';
var BROWSER_NAME_Opera='Opera';
var BROWSER_NAME_MobileSafari='MobileSafari';
var BROWSER_NAME_Android='Android';
var BROWSER_NAME_Blackberry='Blackberry';
var BROWSER_NAME_Camino='Camino';
var BROWSER_NAME_Dolfin='Dolfin';
var BROWSER_NAME_KindleSilk='KindleSilk';
var BROWSER_NAME_MobileChrome='MobileChrome';
var BROWSER_NAME_Blackberry10='Blackberry10';
var BROWSER_NAME_Playstation='Playstation';
var BROWSER_NAME_SymantecStealthMode='SymantecStealthMode';
var BROWSER_NAME_Waterfox='Waterfox';
var BROWSER_NAME_WOsBrowser='WOsBrowser';
var BROWSER_NAME_Nintendo='Nintendo';

var BROWSER_OS_DeprecatedOther='DeprecatedOther';
var BROWSER_OS_Windows='Windows';
var BROWSER_OS_Macintosh='Macintosh';
var BROWSER_OS_Linux='Linux';
var BROWSER_OS_Other='Other';
var BROWSER_OS_IOs='IOs';
var BROWSER_OS_Android='Android';
var BROWSER_OS_Blackberry='Blackberry';
var BROWSER_OS_WindowsPhone='WindowsPhone';
var BROWSER_OS_WebOs='WebOs';
var BROWSER_OS_Symbian='Symbian';
var BROWSER_OS_Bada='Bada';
var BROWSER_OS_BlackberryTabletOs='BlackberryTabletOs';
var BROWSER_OS_Blackberry10Os='Blackberry10Os';
var BROWSER_OS_ChromeOs='ChromeOs';
var BROWSER_OS_Playstation='Playstation';
var BROWSER_OS_SymantecStealthMode='SymantecStealthMode';
var BROWSER_OS_OpenBsd='OpenBsd';
var BROWSER_OS_Nintendo='Nintendo';


if(!window.__td){window.__MT=100;window.__ti=0;window.__td=[];window.__td.length=window.__MT;window.__noTrace=false;

}






if(!vp)
{
var vp={};
}

if(!vp.browser)
{
vp.browser={};
}





vp.browser.hasSpyware=false;





vp.browser.supportsPng=true;

(function $vpfn_3AcUOjqMK3SaPWYQT2WSNw32$1()
{if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
var BROWSER_SPYWARE_TOKENS={
"funwebproducts":{
name:"FunWebProducts",
url:"http://www.adwarealert.com/glossary_details.php?ID=133616"
},
"simbar":{
name:"Simbar",
url:"http://spywaredetector.net/spyware_encyclopedia/ToolBar.Simbar.htm"
}
};


if(window._browserData)
{
for(var prop in window._browserData)
{
this[prop]=window._browserData[prop];
}
}

this.ver=this.version.major;

this.OS={
isMac:this.operatingSystem==BROWSER_OS_Macintosh,
isWin:this.operatingSystem==BROWSER_OS_Windows,
isLinux:this.operatingSystem==BROWSER_OS_Linux,
isIOs:this.operatingSystem==BROWSER_OS_IOs,
isAndroid:this.operatingSystem==BROWSER_OS_Android,
isBlackberry:this.operatingSystem==BROWSER_OS_Blackberry,
isWindowsPhone:this.operatingSystem==BROWSER_OS_WindowsPhone,
name:this.operatingSystem,
version:this.operatingSystemVersion.major
};

this.isIE=this.className==BROWSER_CLASS_InternetExplorer;
this.isGecko=this.className==BROWSER_CLASS_Gecko;
this.isWebKit=this.className==BROWSER_CLASS_Webkit;
this.isFirefox=this.name==BROWSER_NAME_Firefox;
this.isSafari=this.name==BROWSER_NAME_Safari;

this.isMobileSafari=this.name==BROWSER_NAME_MobileSafari||(this.OS.isIOs&&this.name==BROWSER_NAME_MobileChrome);
this.isAndroid=this.name==BROWSER_NAME_Android;
this.isGoogleChrome=this.name==BROWSER_NAME_GoogleChrome;
this.isOpera=this.name==BROWSER_NAME_Opera;

delete this.operatingSystem;

var sUA=navigator.userAgent.toLowerCase();
for(var sToken in BROWSER_SPYWARE_TOKENS)
{
if(sUA.indexOf(sToken)!=-1)
{
this.hasSpyware=true;
if(!this.spyware)
{
this.spyware=[];
}

this.spyware.push(BROWSER_SPYWARE_TOKENS[sToken]);
}
}
}).call(vp.browser);

(function(Date,undefined){
var origParse=Date.parse,
numericKeys=[1,4,5,6,7,10,11];



Date.parseISO=function(date,strict){
var struct,minutesOffset=0;

strict=!!strict;



if(!strict){

struct=/^(\d{4}|[+\-]\d{6})(?:-(\d{2})(?:-(\d{2}))?)?(?:T(\d{2}):(\d{2})(?::(\d{2})(?:\.(\d{3}))?)?(?:(Z)|([+\-])(\d{2})(?::(\d{2}))?)?)?$/.exec(date);
}else{

struct=/^(\d{4}|[+\-]\d{6})\-(\d{2})-(\d{2})T(\d{2}):(\d{2}):(\d{2})\.(\d{3})(?:(Z)|([+\-]))(\d{2}):(\d{2})$/.exec(date);
}

if(struct){

for(var i=0,k;
(k=numericKeys[i]);++i){
struct[k]=+struct[k]||0;
}


struct[2]=(+struct[2]||1)-1;
struct[3]=+struct[3]||1;

if(struct[8]!=='Z'&&struct[9]!==undefined){
minutesOffset=struct[10]*60+struct[11];

if(struct[9]==='+'){
minutesOffset=0-minutesOffset;
}
}

return Date.UTC(struct[1],struct[2],struct[3],struct[4],struct[5]+minutesOffset,struct[6],struct[7]);
}

return NaN;
};

var msDateRegEx=new RegExp(/^\/Date\((d|-|.*)\)[\/|\\]$/);


Date.parseMsDate=function(date){
if(msDateRegEx.test(date)){
return parseFloat(RegExp.$1,10);
}else{
return NaN;
}
};





Date.parse=function(date){
return origParse(date)||Date.parseMsDate(date)||Date.parseISO(date)||NaN;
};

}(Date));


(function($){

$.cookies={};






var _cookieEncode=function(sText){
if(!sText){
return"";
}else{
sText=sText.toString();
}


sText=encodeURIComponent(sText);


sText=sText.replace(/\+/gi,"%2B").replace(/\%20/gi,"+");


return sText;
};





var _cookieDecode=function(sText){
if(!sText){
return"";
}else{
sText=sText.toString();
}


sText=sText.replace(/\+/gi,"%20").replace(/\%2B/gi,"+");


return decodeURIComponent(sText);
};

var _defaultPermanentDate=function(){
var d=new Date();
d.setFullYear(d.getFullYear()+1);
return d.toUTCString();
};

var _defaults={
domain:null,
path:"/",
permanentDate:_defaultPermanentDate(),
watcher:$.noop
};

var _settings=_defaults;

$.cookies.setDefaults=function(settings){
_settings=$.extend({},_defaults,settings);
};

var _getDefault=function(key,overrideValue){
if(overrideValue){
return overrideValue;
}

return _settings[key];
};



$.cookies.enabled=function(){
$.cookies.set("cookietest","value");
if($.cookies.get("cookietest")=="value"){
$.cookies.remove("cookietest");
return true;
}else{
return false;
}
};





$.cookies.get=function(name,subCookie){
var cookies=new Cookies();
var cookie=cookies[name];
if(cookie){
if(subCookie){
if(cookie.subCookies){
return cookie.subCookies[subCookie]||null;
}

return null;
}

if(cookie.subCookies){
return cookie.subCookies;
}else{
return cookie.value||"";
}
}

return null;
};







$.cookies.set=function(nameOrData,value,domain,permanent,clearExistingSubCookies){
var name=nameOrData;
var path;

if(typeof(nameOrData)=="object"){
name=nameOrData.name;
value=nameOrData.value;
domain=nameOrData.domain;
permanent=nameOrData.permanent;
path=nameOrData.path;
clearExistingSubCookies=nameOrData.clearExistingSubCookies||nameOrData.clearExisting;
}


var subCookies;
if(typeof(value)=="object"&&value!==null){
subCookies=value;
value=null;
}


var cookie=(new Cookies())[name];
if(!cookie){
cookie=new Cookie();
cookie.name=name;
}

cookie.value=value;

if(subCookies){
if(clearExistingSubCookies||!cookie.subCookies){
cookie.subCookies=subCookies;
}else{

for(var subCookie in subCookies){
if(subCookies.hasOwnProperty(subCookie)){
cookie.subCookies[subCookie]=subCookies[subCookie];
}
}
}
}

cookie.domain=_getDefault("domain",domain);
cookie.path=_getDefault("path",path);
cookie.isPermanent=!!permanent;

cookie.save();
};



$.cookies.remove=function(name,domain,path){
var cookie=_cookieEncode(name)+"=a; path="+_getDefault("path",path)+"; expires=Wed, 17 Jan 1979 07:01:00 GMT";

domain=_getDefault("domain",domain);
if(domain){
cookie+="; domain="+domain;
}

_settings.watcher(cookie);

document.cookie=cookie;
};



var Cookies=function(){
var me=this;
var cookie=document.cookie.toString();
var cookieArray=cookie.split(";");

var iLen=cookieArray.length;
for(var i=0;i<iLen;i++){
var oCookie=new Cookie();
oCookie.parse(cookieArray[i]);
if(oCookie.name){
me[oCookie.name]=oCookie;
}
}
};



var Cookie=function(){
var me=this;


this.name=null;


this.subCookies=null;



this.value=null;



this.domain=null;


this.path=null;


this.isPermanent=false;

var _validateName=function(){
if(!me.name){
throw new Error("Cookie: Cookie name is null.");
}
};




this.serialize=function(){
_validateName();

var cookie=_cookieEncode(me.name)+"="+_getEncodedValue();

cookie+="; path="+_getDefault("path",this.path);

var domain=_getDefault("domain",me.domain);
if(domain){
cookie+="; domain="+domain;
}

if(me.isPermanent){
cookie+="; expires="+_getDefault("permanentDate");
}

return cookie;
};



this.save=function(){
_validateName();

var cookie=me.serialize();
_settings.watcher(cookie);

document.cookie=cookie;
};




this.parse=function(sUnparsedValue){
if(!sUnparsedValue){
return;
}


sUnparsedValue=sUnparsedValue.replace(/^\s*(.*?)\s*$/,"$1");


var iPosEquals=sUnparsedValue.indexOf("=");
if(iPosEquals<=0){
return;
}

me.name=_cookieDecode(sUnparsedValue.substr(0,iPosEquals));

var sValue=sUnparsedValue.substr(iPosEquals+1);
if(sValue.indexOf("=")==-1){
me.value=_cookieDecode(sValue);
return;
}

me.subCookies={};

var aSubCookies=sValue.split("&");
var iLen=aSubCookies.length;
for(var i=0;i<iLen;i++){
var aSubCookie=aSubCookies[i].split("=");
if(aSubCookie.length!=2){
me.subCookies=null;
return;
}else{
me.subCookies[_cookieDecode(aSubCookie[0])]=_cookieDecode(aSubCookie[1]);
}
}
};



var _getEncodedValue=function(){
if(me.subCookies){
var aOut=[];
for(var sSub in me.subCookies){
aOut.push(_cookieEncode(sSub)+"="+_cookieEncode(me.subCookies[sSub]));
}
return aOut.join("&");
}else{
return _cookieEncode(me.value);
}
};


};

})(jQuery);

jQuery.cookies.setDefaults({domain:window._cookieDomain});





(function(window,$){

var msJsonSanitizer=function(key,value){

if(typeof(value)=="string"){
return msJsonDateOnlySanitizer(key,value);
}else if(typeof(value)=="object"){


if(value&&value.__type){
delete value.__type;
}
}

return value;
};


var msJsonDateOnlySanitizer=function(key,value){
if(typeof(value)=="string"){



if(!$.parseMsJSON.isNumericString(value)){
var date=Date.parseISO(value)||
Date.parseMsDate(value)||
(value.indexOf("GMT")>=0?Date.parse(value):NaN);
if(!isNaN(date)){
return new Date(date);
}
}
}

return value;
};


$.parseMsJSON=function(text,preserveType){
if(!text){
return{};
}

var json=JSON.parse(text,preserveType?msJsonDateOnlySanitizer:msJsonSanitizer);

if(!json){
return{};
}



return typeof json.d!="undefined"?json.d:json;
};

$.parseMsJSON.isNumericString=function(value){
return new RegExp(/^-?[0-9]+\.?[0-9]*$/).test(value);
};


var recurseJSON=function(holder,key,reviver){
var k,v,value=holder[key];
if(value&&typeof value=="object"){
for(k in value){
if(Object.prototype.hasOwnProperty.call(value,k)){
v=recurseJSON(value,k,reviver);
if(v!==undefined){
value[k]=v;
}else{
delete value[k];
}
}
}
}

return reviver.call(holder,key,value);
};


$.recurseJSON=function(json,reviver){
return recurseJSON({
"":json
},"",reviver);
};


$.reviveMsJSON=function(json,datesOnly){
return $.recurseJSON(json,datesOnly?msJsonDateOnlySanitizer:msJsonSanitizer);
};

var AJAX_SETTINGS_DEFAULTS={
dataType:"json",
type:"post",
contentType:"application/json; charset=utf-8",
converters:{
"text json":$.parseMsJSON
}
};

var reISO=/^(\d{4})-(\d{2})-(\d{2})T(\d{2}):(\d{2}):(\d{2}(?:\.\d*)?)Z$/;


$.stringifyMsDate=function(key,value){
if(typeof value=="string"){
var a=reISO.exec(value);
if(a){
var val="/Date("+new Date(Date.UTC(+a[1],+a[2]-1,+a[3],+a[4],+a[5],+a[6])).getTime()+"-0000)/";

this[key]=val;
return val;
}
}
return value;
};




$.msAjax=function(url,settings){
if(!settings){
settings={};
}

if(typeof url=="object"){
settings=url;
}else if(typeof url=="string"){
settings.url=url;
}


if(!settings.url){
throw new Error("$.msAjax: url not specified");
}


if(settings.data){
settings.data=JSON.stringify(settings.data,$.stringifyMsDate);
}


if(settings.methodName){
settings.url+="/"+settings.methodName;
}

var coalescedSettings={};
$.extend(true,coalescedSettings,AJAX_SETTINGS_DEFAULTS,settings);


if(coalescedSettings.async===false){
var xhr=$.ajax(coalescedSettings);
return $.parseMsJSON(xhr.responseText,coalescedSettings.preserveType);
}

return $.ajax(coalescedSettings);
};

$.ajaxAsmx=$.msAjax;
$.ajaxWcf=$.msAjax;



})(window,jQuery);



jQuery.ns=function(namespace){
var parts=namespace.split(".");

var last=window;
for(var i=0;i<parts.length;i++){
last=last[parts[i]]||(last[parts[i]]={});
}
};


(function($){






$.fn.fillClosest=function(src,closestSelector,callback){
this.each(function(){
var img=this;

var callbackWrapper=function(size){
var css=fillClosest.call(img,size,closestSelector);
$(img).css(css);

if(callback){
callback.call(img,size);
}
};

$.naturalSize(src,callbackWrapper);
});

this.attr("src",src);

return this;
};

var fillClosest=function(rect,closestSelector){
var aspectRatio=rect.width/rect.height;
var $container=$(this).closest(closestSelector);
var containerHeight=$container.height();
var containerWidth=$container.width();
var containerAspectRatio=containerWidth/containerHeight;
var scale;
var margin=0;


if(containerAspectRatio<aspectRatio){
scale=Math.round(aspectRatio/containerAspectRatio*100);

if(scale>100){
margin=Math.round((scale-100)/2);
}

return{
"margin-top":0,
"margin-left":-margin+"%",
"width":scale+"%"
};
}

else{
scale=Math.round(containerAspectRatio/aspectRatio*100);

if(scale>100){
margin=Math.round((scale-100)/2);
}

return{
"margin-left":0,
"margin-top":-margin+"%",
"width":"100%"
};
}
};






$.fn.fitToBoundingBox=function(src,boundingBox,callback,error){
this.each(function(){
var img=this;

var callbackWrapper=function(size){
var boundedSize=$.fitToBoundingBox(size,boundingBox);
$(img).css(boundedSize);

if(callback){
callback.call(img,boundedSize);
}
};

$.naturalSize(src,callbackWrapper,error);
});

this.attr("src",src);

return this;
};

$.fitToBoundingBox=function(rect,boundingBox){
var aspectRatio=rect.width/rect.height;
return $.rectWithAspectRatio(boundingBox,aspectRatio);
};






$.naturalSize=function(src,success,error){
var deferred=new $.Deferred();

var img=new Image();

var successWrapper=function(){





window.setTimeout(
function(){
var size={
width:img.width,
height:img.height
};

deferred.resolveWith(this,[size]);

if(success){
success(size);
}
},
0);
};

img.onload=successWrapper;
img.onerror=function(e){
deferred.reject(e);

if(error){
error(e);
}
};

img.src=src;

return deferred.promise();
};



$.rectWithAspectRatio=function(containerRect,aspectRatio){
var rect={
top:0,
left:0,
width:containerRect.width,
height:containerRect.height
};

var containerAspectRatio=containerRect.width/containerRect.height;

if(containerAspectRatio<aspectRatio){
rect.height=Math.round(rect.width/aspectRatio);
}else{
rect.width=Math.round(rect.height*aspectRatio);
}

rect.left=(containerRect.width-rect.width)/2;
rect.top=(containerRect.height-rect.height)/2;
rect.right=rect.left+rect.width;
rect.bottom=rect.top+rect.height;

return rect;
};

})(jQuery);


(function($){



$.encodeDelimitedString=function(data,itemDelimiter,pairDelimiter,keyEncoder,valueEncoder){
if(!data){
return"";
}

keyEncoder=keyEncoder||function(s){
return s;
};
valueEncoder=valueEncoder||keyEncoder;

var sb=[];

for(var key in data){
if(data.hasOwnProperty(key)){
sb.push(keyEncoder(key)+pairDelimiter+valueEncoder(data[key]));
}
}

return sb.join(itemDelimiter);
};



$.parseDelimitedString=function(delimitedString,itemDelimiter,pairDelimiter,keyDecoder,valueDecoder){
keyDecoder=keyDecoder||function(s){
return s;
};
valueDecoder=valueDecoder||keyDecoder;

var ret={};

if(delimitedString){
var pairs=delimitedString.split(itemDelimiter);
var len=pairs.length;
for(var i=0;i<len;i++){
var pair=pairs[i];

if(pair.length>0){
var delimIndex=pair.indexOf(pairDelimiter);
var key,value;

if(delimIndex>0&&delimIndex<=pair.length-1){
key=pair.substring(0,delimIndex);
value=pair.substring(delimIndex+1);
}else{
key=pair;
}

ret[keyDecoder(key)]=valueDecoder(value);
}
}
}

return ret;
};

})(jQuery);




(function($){
var PLUS_RE=/\+/gi;

var urlDecode=function(s){

if(s==null){
return"";
}



return decodeURIComponent(s.replace(PLUS_RE," "));
};


$.deparam=function(queryString){
if(typeof queryString!="string"){
throw new Error("$.deparam() expects a string for 'queryString' argument.");
}


if(queryString&&queryString.charAt(0)=="?"){
queryString=queryString.substring(1,queryString.length);
}

return $.parseDelimitedString(queryString,"&","=",urlDecode);
};


$.parseQueryString=$.deparam;


$.currentQueryString=function(){
return $.deparam(window.location.search);
};


$.appendQueryString=function(url,parsedQueryString){
var qs=$.param(parsedQueryString);
if(qs.length>0){
qs="?"+qs;
}

return url+qs;
};

})(jQuery);




(function($){


$.Url=function(url){
var me=this;

var _normalize=function(input){
if(input==null||input===""){
return"";
}

return input.toString();
};


var _protocol="";

this.protocol=function(value){
if(typeof value!="undefined"){
_protocol=_normalize(value);

if(_protocol){
if(_protocol.charAt(_protocol.length-1)!=":"){
_protocol+=":";
}
}
}else{
return _protocol;
}
};


var _hostname="";

this.hostname=function(value){
if(typeof value!="undefined"){
_hostname=_normalize(value);
}else{
return _hostname;
}
};

var _port="";


this.port=function(value){
if(typeof value!="undefined"){
_port=_normalize(value);
}else{
return _port;
}
};



this.host=function(value){
if(typeof value!="undefined"){
value=_normalize(value);


if(value){
var colonPos=value.indexOf(":");
if(colonPos!=-1){
_hostname=value.substr(0,colonPos);
_port=value.substr(colonPos+1,value.length);
}else{
_hostname=_normalize(value);
_port="";
}
}else{
_hostname="";
_port="";
}
}else{
var out=_hostname;
if(_port){
out+=":"+_port;
}
return out;
}
};

var _pathname="";


this.pathname=function(value){
if(typeof value!="undefined"){
_pathname=_normalize(value);
}else{
return _pathname;
}
};


this.queryString={};


this.search=function(value){
if(typeof value!="undefined"){
value=_normalize(value);
me.queryString=$.deparam(value);
}else{
var qs=$.param(me.queryString);
return qs?"?"+qs:qs;
}
};


var _hash="";

this.hash=function(value){
if(typeof value!="undefined"){
value=_normalize(value);


if(value.length>0){
if(value.charAt(0)!="#"){
value="#"+value;
}
}
_hash=value;
}else{
return _hash;
}
};

var load=function(url){
var nextPartPos;
var temp=url;


if(temp.search(/https\:\/\/+/i)===0)
{
_protocol="https:";
temp=url.substr(8);
}else if(temp.search(/http\:\/\/+/i)===0)
{
_protocol="http:";
temp=url.substr(7);
}

if(temp.length===0){
return;
}


if(_protocol!==""){

nextPartPos=temp.search(/[\/\?\#]/i);
if(nextPartPos==-1){
me.host(temp);
return;
}

me.host(temp.substring(0,nextPartPos));
temp=temp.substr(nextPartPos);
}

if(temp.length===0){
return;
}

nextPartPos=temp.search(/[\?\#]/i);


if(nextPartPos!==0){
if(nextPartPos==-1){
_pathname=temp;
return;
}

_pathname=temp.substr(0,nextPartPos);
temp=temp.substr(nextPartPos);
}

if(temp.length===0){
return;
}



if(temp.indexOf("?")===0){
nextPartPos=temp.indexOf("#");

if(nextPartPos==-1){
me.queryString=$.deparam(temp.substr(1));
temp="";
}else{
me.queryString=$.deparam(temp.substring(1,nextPartPos));
temp=temp.substr(nextPartPos);
}
}

if(temp.length===0){
return;
}


if(temp.indexOf("#")===0){
_hash=temp;
}
};


this.toString=function(){
var url="";
var host=me.host();
if(host){
url=(_protocol||"http:")+"//"+me.host();
}
return url+me.pathname()+me.search()+me.hash();
};


this.get=function(key,defaultValue){
if(!me.queryString.hasOwnProperty(key)){
return defaultValue;
}

return _normalize(me.queryString[key]);
};


this.set=function(key,value){
if(key==null||key===""){
throw new Error("Invalid key: "+key);
}

me.queryString[key]=value;
};


this.remove=function(key){
delete me.queryString[key];
};


this.getItemOrDefault=this.get;
this.getOrDefault=this.get;
this.getItem=this.get;
this.setItem=this.set;
this.removeItem=this.remove;

load(url?url.toString():"");
};

})(jQuery);


jQuery.Event.prototype.isVisibleKeyCode=function(){

if(typeof(this.keyCode)=="undefined"){
return false;
}


if(this.keyCode>=112&&this.keyCode<=123){
return false;
}



if(this.keyCode>=33&&this.keyCode<=40){
return false;
}

if(this.keyCode>=14&&this.keyCode<=31){
return false;
}

switch(this.keyCode){
case 9:
case 45:
case 91:
case 145:
return false;
default:
return true;
}

return true;
};




(function($){
var _mapCamelToDash={};



$.camelToDashCase=function(prop){

var value=_mapCamelToDash[prop];
if(!value){
value=prop.replace(/([A-Z])/g,"-$1").toLowerCase();
_mapCamelToDash[prop]=value;
}

return value;
};

var _mapDashToCamel={};


$.dashToCamelCase=function(sProperty){
var value=_mapDashToCamel[sProperty];


if(!value){
if(sProperty.indexOf("-")!=-1){

var aOut=[];
for(var i=0,len=sProperty.length;i<len;++i){
var sChar=sProperty.charAt(i);
if(sChar=="-"){
i++;
sChar=sProperty.charAt(i).toUpperCase();
aOut.push(sChar);
}else{
aOut.push(sChar);
}
}

value=aOut.join("");
}else{
value=sProperty;
}

_mapDashToCamel[sProperty]=value;
}

return value;
};

var cssKeyEncoder=function(s){
return $.trim($.camelToDashCase(s));
};

var cssKeyDecoder=function(s){
return $.trim($.dashToCamelCase(s));
};

$.encodeCssString=function(data){
return $.encodeDelimitedString(data,";",":",cssKeyEncoder,$.trim);
};

$.parseCssString=function(cssString){
return $.parseDelimitedString(cssString,";",":",cssKeyDecoder,$.trim);
};

})(jQuery);

/*! 
 * Pointy.js 
 * Pointer Events polyfill for jQuery 
 * https://github.com/vistaprint/PointyJS 
 * 
 * Depends on jQuery, see http://jquery.org 
 * 
 * Developed by Vistaprint.com 
 */


(function($,window,document,undefined){

var support={
touch:"ontouchend"in document,
pointer:!!(navigator.pointerEnabled||navigator.msPointerEnabled)
};

$.extend($.support,support);

function triggerCustomEvent(elem,eventType,originalEvent){

originalEvent=originalEvent||window.event;


var event=new jQuery.Event(originalEvent);
event.type=eventType;


var i,copy=$.event.props.concat($.event.pointerHooks.props);
i=copy.length;
while(i--){
var prop=copy[i];
event[prop]=originalEvent[prop];
}



if(!event.target){
event.target=originalEvent.srcElement||document;
}



if(event.target.nodeType===3){
event.target=event.target.parentNode;
}



event.metaKey=!!event.metaKey;


event=$.event.pointerHooks.filter(event,originalEvent);




if($.isArray(event)){
$.each(event,function(i,ev){
$.event.dispatch.call(elem,ev);
});
}else{
$.event.dispatch.call(elem,event);
}


return event;
}

function addEvent(elem,type,selector,func){

if(selector){
func._pointerEventWrapper=function(event){
return func.call(elem,event.originalEvent);
};

$(elem).on(type,selector,func._pointerEventWrapper);
}


else{
if(elem.addEventListener){
elem.addEventListener(type,func,false);
}else if(elem.attachEvent){


func._pointerEventWrapper=function(e){
return func.call(elem,e);
};

elem.attachEvent("on"+type,func._pointerEventWrapper);
}
}
}

function removeEvent(elem,type,selector,func){

if(func._pointerEventWrapper){
func=func._pointerEventWrapper;
}

if(selector){
$(elem).off(type,selector,func);
}else{
$.removeEvent(elem,type,func);
}
}


function getStandardizedButtonsProperty(event){


if(event.buttons){
return event.buttons;
}


var which=event.which;
if(!which&&event.button!==undefined){
which=(event.button&1?1:(event.button&2?3:(event.button&4?2:0)));
}


if(which===0){
return 0;
}

else if(which===1){
return 1;
}

else if(which===2){
return 4;
}

else if(which===3){
return 2;
}


return 0;
}

function returnFalse(){return false;}
function returnTrue(){return true;}

var POINTER_TYPE_UNAVAILABLE="unavailable";
var POINTER_TYPE_TOUCH="touch";
var POINTER_TYPE_PEN="pen";
var POINTER_TYPE_MOUSE="mouse";





var _touching=null;


var _buttons=0;


var _lastTouches=[];






















$.event.pointerHooks={
props:"pointerType pointerId pressure buttons clientX clientY relatedTarget fromElement offsetX offsetY pageX pageY screenX screenY width height toElement".split(" "),
filter:function(event,original){


if(!original.touches&&event.pageX==null&&original.clientX!=null){
var eventDoc=event.target.ownerDocument||document;
var doc=eventDoc.documentElement;
var body=eventDoc.body;

event.pageX=original.clientX+(doc&&doc.scrollLeft||body&&body.scrollLeft||0)-(doc&&doc.clientLeft||body&&body.clientLeft||0);
event.pageY=original.clientY+(doc&&doc.scrollTop||body&&body.scrollTop||0)-(doc&&doc.clientTop||body&&body.clientTop||0);
}



if(!event.relatedTarget&&original.fromElement){
event.relatedTarget=original.fromElement===event.target?original.toElement:original.fromElement;
}


if(!event.pointerType||typeof event.pointerType==="number"){
if(event.pointerType==2){
event.pointerType=POINTER_TYPE_TOUCH;
}else if(event.pointerType==3){
event.pointerType=POINTER_TYPE_PEN;
}else if(event.pointerType==4){
event.pointerType=POINTER_TYPE_MOUSE;
}else if(/^touch/i.test(original.type)){
event.pointerType=POINTER_TYPE_TOUCH;
event.buttons=original.type==="touchend"||original.type==="touchcancel"?0:1;
}else if(/^mouse/i.test(original.type)||original.type==="click"){
event.pointerId=1;
event.pointerType=POINTER_TYPE_MOUSE;
event.buttons=original.type==="mouseup"?0:getStandardizedButtonsProperty(original);
}else{
event.pointerType=POINTER_TYPE_UNAVAILABLE;
event.buttons=0;
}
}



if(event.type!=="pointerdown"&&event.pointerType==="mouse"&&_touching===null&&_buttons!==event.buttons){
event.buttons=_buttons;
}


if(!event.pressure){
event.pressure=event.buttons>0?0.5:0;
}


if(event.width===undefined||event.height===undefined){
event.width=event.height=0;
}



event.preventClick=function(){
event.isClickPrevented=returnTrue;
$(event.target).one("click",returnFalse);
};

event.isClickPrevented=returnFalse;



if(original.touches&&event.type!=="pointercancel"){
var touches=original.touches;
var events=[];
var ev,i,j;





if(event.type==="pointerup"){

_lastTouches=Array.prototype.slice.call(_lastTouches);


for(i=0;i<original.touches.length;i++){
for(j=0;j<_lastTouches.length;j++){
if(_lastTouches[j].identifier===original.touches[i].identifier){
_lastTouches.splice(j,1);
}
}
}


if(_lastTouches.length===1){
event.pointerId=_lastTouches[0].identifier;
_lastTouches=original.touches;
return event;
}
}



else if(event.type==="pointerdown"){

touches=Array.prototype.slice.call(original.touches);


for(i=0;i<touches.length;i++){

for(j=0;j<_lastTouches.length;j++){
if(touches[i].identifier===_lastTouches[j].identifier){
touches.splice(i,1);
}
}
}
}


for(i=0;i<original.touches.length;i++){
var touch=original.touches[i];
ev=$.extend({},event);

ev.clientX=touch.clientX;
ev.clientY=touch.clientY;
ev.pageX=touch.pageX;
ev.pageY=touch.pageY;
ev.screenX=touch.screenX;
ev.screenY=touch.screenY;

ev.pointerId=touch.identifier;
events.push(ev);
}




_lastTouches=original.touches;
return events;
}

return event;
}
};

$.event.delegateSpecial=function(setup){
return function(handleObj){
var thisObject=this,
data=jQuery._data(thisObject);

if(!data.pointerEvents){
data.pointerEvents={};
}

if(!data.pointerEvents[handleObj.type]){
data.pointerEvents[handleObj.type]=[];
}

if(!data.pointerEvents[handleObj.type].length){
setup.call(thisObject,handleObj);
}

data.pointerEvents[handleObj.type].push(handleObj);
};
};

$.event.delegateSpecial.remove=function(teardown){
return function(handleObj){
var handlers,
thisObject=this,
data=jQuery._data(thisObject);

if(!data.pointerEvents){
data.pointerEvents={};
}

handlers=data.pointerEvents[handleObj.type];

handlers.splice(handlers.indexOf(handleObj),1);

if(!handlers.length){
teardown.call(thisObject,handleObj);
}
};
};


$.extend($.event.fixHooks,{
pointerdown:$.event.pointerHooks,
pointerup:$.event.pointerHooks,
pointermove:$.event.pointerHooks,
pointerover:$.event.pointerHooks,
pointerout:$.event.pointerHooks,
pointercancel:$.event.pointerHooks
});



if(!support.pointer){


var _startScrollOffset;


var scrollY=function(){
return Math.floor(window.scrollY||$(window).scrollTop());
};

$.event.special.pointerdown={
touch:function(event){

_touching=event.timeStamp;


triggerCustomEvent(this,"pointerdown",event);


_startScrollOffset=scrollY();



},
mouse:function(event){

if(typeof _touching==="number"){
return;
}


_touching=null;


var button=getStandardizedButtonsProperty(event);
var wasAButtonDownAlready=_buttons!==0;
_buttons|=button;



if(wasAButtonDownAlready&&_buttons!==button){

triggerCustomEvent(this,"pointermove",event);
return;
}

triggerCustomEvent(this,"pointerdown",event);
},
add:$.event.delegateSpecial(function(handleObj){

if(support.touch){
addEvent(this,"touchstart",handleObj.selector,$.event.special.pointerdown.touch);
}


addEvent(this,"mousedown",handleObj.selector,$.event.special.pointerdown.mouse);


handleObj.pointerup=$.noop;
$(this).on("pointerup",handleObj.selector,handleObj.pointerup);
}),
remove:$.event.delegateSpecial.remove(function(handleObj){

if(support.touch){
removeEvent(this,"touchstart",handleObj.selector,$.event.special.pointerdown.touch);
}


removeEvent(this,"mousedown",handleObj.selector,$.event.special.pointerdown.mouse);


if(handleObj.pointerup){
$(this).off("pointerup",handleObj.selector,handleObj.pointerup);
}
})
};

$.event.special.pointerup={
touch:function(event){

event.preventDefault();



if(_touching===null){
return;
}



var lastTouchStarted=_touching;


var jEvent=triggerCustomEvent(this,"pointerup",event);


if(!event.target){
_touching=false;
return;
}











if(_startScrollOffset!==scrollY()){
_touching=false;
return;
}















var clickTimer=setTimeout(function(){
if(_touching===lastTouchStarted){
_touching=false;
}



if(jEvent.isClickPrevented()){
$(event.target).off("click",returnFalse);
return;
}

if(event.target.click){
event.target.click();
}else{

$(event.target).click();
}
},300);

$(event.target).one("click",function(){
if(_touching===lastTouchStarted){
_touching=false;
}

if(clickTimer){
clearTimeout(clickTimer);
}
});
},
mouse:function(event){

if(_touching!==null){
return;
}


_buttons^=getStandardizedButtonsProperty(event);


if(_buttons===0){
triggerCustomEvent(this,"pointerup",event);
}else{

triggerCustomEvent(this,"pointermove",event);
}



},
add:$.event.delegateSpecial(function(handleObj){

if(support.touch){
addEvent(this,"touchend",handleObj.selector,$.event.special.pointerup.touch);
}


addEvent(this,"mouseup",handleObj.selector,$.event.special.pointerup.mouse);
}),
remove:$.event.delegateSpecial.remove(function(handleObj){

if(support.touch){
removeEvent(this,"touchend",handleObj.selector,$.event.special.pointerup.touch);
}


removeEvent(this,"mouseup",handleObj.selector,$.event.special.pointerup.mouse);
})
};

$.event.special.pointermove={
touch:function(event){
triggerCustomEvent(this,"pointermove",event);
},
mouse:function(event){




if(typeof _touching==="number"){
return;
}

triggerCustomEvent(this,"pointermove",event);
},
add:$.event.delegateSpecial(function(handleObj){

if(support.touch){
addEvent(this,"touchmove",handleObj.selector,$.event.special.pointermove.touch);
}


addEvent(this,"mousemove",handleObj.selector,$.event.special.pointermove.mouse);
}),
remove:$.event.delegateSpecial.remove(function(handleObj){

if(support.touch){
removeEvent(this,"touchmove",handleObj.selector,$.event.special.pointermove.touch);
}


removeEvent(this,"mousemove",handleObj.selector,$.event.special.pointermove.mouse);
})
};

jQuery.each({
pointerover:{
mouse:"mouseover"
},
pointerout:{
mouse:"mouseout"
},
pointercancel:{
touch:"touchcancel"
}
},function(pointerEventType,natives){
function onTouch(event){

if(event.type==="touchcancel"){
_touching=null;
_buttons=0;
}

triggerCustomEvent(this,pointerEventType,event);
}

function onMouse(event){
triggerCustomEvent(this,pointerEventType,event);
}

$.event.special[pointerEventType]={
setup:function(){
if(support.touch&&natives.touch){
addEvent(this,natives.touch,null,onTouch);
}
if(natives.mouse){
addEvent(this,natives.mouse,null,onMouse);
}
},
teardown:function(){
if(support.touch&&natives.touch){
removeEvent(this,natives.touch,null,onTouch);
}
if(natives.mouse){
removeEvent(this,natives.mouse,null,onMouse);
}
}
};
});
}



else if(navigator.msPointerEnabled&&!navigator.pointerEnabled){
$.extend($.event.special,{
pointerdown:{
delegateType:"MSPointerDown",
bindType:"MSPointerDown"
},
pointerup:{
delegateType:"MSPointerUp",
bindType:"MSPointerUp"
},
pointermove:{
delegateType:"MSPointerMove",
bindType:"MSPointerMove"
},
pointerover:{
delegateType:"MSPointerOver",
bindType:"MSPointerOver"
},
pointerout:{
delegateType:"MSPointerOut",
bindType:"MSPointerOut"
},
pointercancel:{
delegateType:"MSPointerCancel",
bindType:"MSPointerCancel"
}
});

$.extend($.event.fixHooks,{
MSPointerDown:$.event.pointerHooks,
MSPointerUp:$.event.pointerHooks,
MSPointerMove:$.event.pointerHooks,
MSPointerOver:$.event.pointerHooks,
MSPointerOut:$.event.pointerHooks,
MSPointerCancel:$.event.pointerHooks
});
}



if(!support.pointer||(navigator.msPointerEnabled&&!navigator.pointerEnabled)){


jQuery.each({
pointerenter:navigator.msPointerEnabled?"MSPointerOver":"mouseover",
pointerleave:navigator.msPointerEnabled?"MSPointerOut":"mouseout"
},function(orig,fix){
jQuery.event.special[orig]={
delegateType:fix,
bindType:fix,
handle:function(event){
var ret,
target=this,
related=event.relatedTarget,
handleObj=event.handleObj;



if(!related||(related!==target&&!jQuery.contains(target,related))){
event.type=handleObj.origType;
ret=handleObj.handler.apply(this,arguments);
event.type=fix;
}
return ret;
}
};
});
}

})(jQuery,window,document);

/*! 
 * Pointy.js 
 * Pointer Events polyfill for jQuery 
 * https://github.com/vistaprint/PointyJS 
 * 
 * Depends on jQuery, see http://jquery.org 
 * 
 * Developed by Vistaprint.com 
 * 
 * pointy.gestures.js adds special events to jQuery for added fun. 
 */



(function($){


function copyEvent(originaljQEvent,type,extras){
var event=originaljQEvent;

event.type=type;
event.isPropagationStopped=function(){return false;};
event.isDefaultPrevented=function(){return false;};

if(extras){
$.extend(event,extras);
}

return event;
}


$.event.special.sweep={

scrollSupressionThreshold:30,


durationThreshold:750,


horizontalDistanceThreshold:30,


verticalDistanceThreshold:75,

start:function(event){
return{
time:+new Date(),
coords:[event.pageX,event.pageY],
origin:$(event.target)
};
},

stop:function(event){
return{
time:+new Date(),
coords:[event.pageX,event.pageY]
};
},

isSweep:function(start,stop,checkTime){
return(checkTime?stop.time-start.time<$.event.special.sweep.durationThreshold:true)&&
Math.abs(start.coords[0]-stop.coords[0])>$.event.special.sweep.horizontalDistanceThreshold&&
Math.abs(start.coords[1]-stop.coords[1])<$.event.special.sweep.verticalDistanceThreshold;
},

add:$.event.delegateSpecial(function(handleObj){
var thisObject=this,
$this=$(thisObject);

handleObj.pointerdown=function(event){
var start=$.event.special.sweep.start(event),
stop;







function move(event){
if(!start){
return;
}

stop=$.event.special.sweep.stop(event);


if(Math.abs(start.coords[0]-stop.coords[0])>$.event.special.sweep.scrollSupressionThreshold){
event.preventDefault();
}
}

function up(){
$this.off("pointermove",move);

if(start&&stop&&$.event.special.sweep.isSweep(start,stop,true)){
var dir=start.coords[0]>stop.coords[0]?"left":"right";

$.event.dispatch.call(thisObject,copyEvent(event,"sweep",{direction:dir}));
$.event.dispatch.call(thisObject,copyEvent(event,"sweep"+dir,{direction:dir}));
}

start=stop=undefined;
}

$this
.on("pointermove",move)
.one("pointerup",up);


setTimeout(function(){
$this
.off("pointermove",handleObj.selector,move)
.off("pointerup",handleObj.selector,up);
},$.event.special.sweep.durationThreshold);
};

$this.on("pointerdown",handleObj.selector,handleObj.pointerdown);
}),

remove:$.event.delegateSpecial.remove(function(handleObj){
$(this).off("pointerdown",handleObj.selector,handleObj.pointerdown);
})
};



$.each(["sweepleft","sweepright"],function(i,event){
$.event.special[event]={
add:$.event.delegateSpecial(function(handleObj){
handleObj.noop=$.noop;
$(this).on("sweep",handleObj.selector,handleObj.noop);
}),

remove:$.event.delegateSpecial.remove(function(handleObj){
$(this).off("sweep",handleObj.selector,handleObj.noop);
})
};
});


function scrollY(){
return window.scrollY||$(window).scrollTop();
}


$.event.special.press={
pressholdThreshold:750,

add:$.event.delegateSpecial(function(handleObj){
var thisObject=this;

handleObj.pointerdown=function(event){
var start=$.event.special.sweep.start(event),
startScroll=scrollY(),
stop,
timer,
origTarget=event.target,
isPresshold=false,
$this=$(this);


function move(e){
stop=$.event.special.sweep.stop(e);
}


function up(event){
clearTimeout(timer);



$this.off("pointermove",move);


if(Math.abs(startScroll-scrollY())>5){
return;
}


if(stop&&$.event.special.sweep.isSweep(start,stop)){
return;
}


if(!isPresshold&&origTarget===event.target){
$.event.dispatch.call(thisObject,copyEvent(event,"press"));
}


else if(isPresshold){
event.stopPropagation();
}
}

$this
.on("pointermove",move)
.one("pointerup",up);




timer=setTimeout(function(){

$this.off("pointermove",move);


isPresshold=true;


if(Math.abs(startScroll-scrollY())>5){
return;
}


if(stop&&$.event.special.sweep.isSweep(start,stop)){
return;
}


if(origTarget===event.target){
$.event.dispatch.call(thisObject,copyEvent(event,"presshold"));
}
},$.event.special.press.pressholdThreshold);
};

$(thisObject).on("pointerdown",handleObj.selector,handleObj.pointerdown);
}),

remove:$.event.delegateSpecial.remove(function(handleObj){
$(this).off("pointerdown",handleObj.selector,handleObj.pointerdown);
})
};


$.event.special.presshold={
add:$.event.delegateSpecial(function(handleObj){
handleObj.noop=$.noop;
$(this).on("press",handleObj.selector,handleObj.noop);
}),

remove:$.event.delegateSpecial.remove(function(handleObj){
$(this).off("press",handleObj.selector,handleObj.noop);
})
};

})(jQuery);










;(function(){


var undefined;


var arrayPool=[],
objectPool=[];


var idCounter=0;


var indicatorObject={};


var keyPrefix=+new Date+'';


var largeArraySize=75;


var maxPoolSize=40;


var whitespace=(

' \t\x0B\f\xA0\ufeff'+


'\n\r\u2028\u2029'+


'\u1680\u180e\u2000\u2001\u2002\u2003\u2004\u2005\u2006\u2007\u2008\u2009\u200a\u202f\u205f\u3000'
);


var reEmptyStringLeading=/\b__p \+= '';/g,
reEmptyStringMiddle=/\b(__p \+=) '' \+/g,
reEmptyStringTrailing=/(__e\(.*?\)|\b__t\)) \+\n'';/g;





var reEsTemplate=/\$\{([^\\}]*(?:\\.[^\\}]*)*)\}/g;


var reFlags=/\w*$/;


var reFuncName=/^\s*function[ \n\r\t]+\w/;


var reInterpolate=/<%=([\s\S]+?)%>/g;


var reLeadingSpacesAndZeros=RegExp('^['+whitespace+']*0+(?=.$)');


var reNoMatch=/($^)/;


var reThis=/\bthis\b/;


var reUnescapedString=/['\n\r\t\u2028\u2029\\]/g;


var contextProps=[
'Array','Boolean','Date','Error','Function','Math','Number','Object',
'RegExp','String','_','attachEvent','clearTimeout','isFinite','isNaN',
'parseInt','setImmediate','setTimeout'
];


var shadowedProps=[
'constructor','hasOwnProperty','isPrototypeOf','propertyIsEnumerable',
'toLocaleString','toString','valueOf'
];


var templateCounter=0;


var argsClass='[object Arguments]',
arrayClass='[object Array]',
boolClass='[object Boolean]',
dateClass='[object Date]',
errorClass='[object Error]',
funcClass='[object Function]',
numberClass='[object Number]',
objectClass='[object Object]',
regexpClass='[object RegExp]',
stringClass='[object String]';


var cloneableClasses={};
cloneableClasses[funcClass]=false;
cloneableClasses[argsClass]=cloneableClasses[arrayClass]=
cloneableClasses[boolClass]=cloneableClasses[dateClass]=
cloneableClasses[numberClass]=cloneableClasses[objectClass]=
cloneableClasses[regexpClass]=cloneableClasses[stringClass]=true;


var debounceOptions={
'leading':false,
'maxWait':0,
'trailing':false
};


var descriptor={
'configurable':false,
'enumerable':false,
'value':null,
'writable':false
};


var iteratorData={
'args':'',
'array':null,
'bottom':'',
'firstArg':'',
'init':'',
'keys':null,
'loop':'',
'shadowedProps':null,
'support':null,
'top':'',
'useHas':false
};


var objectTypes={
'boolean':false,
'function':true,
'object':true,
'number':false,
'string':false,
'undefined':false
};


var stringEscapes={
'\\':'\\',
"'":"'",
'\n':'n',
'\r':'r',
'\t':'t',
'\u2028':'u2028',
'\u2029':'u2029'
};


var root=(objectTypes[typeof window]&&window)||this;


var freeExports=objectTypes[typeof exports]&&exports&&!exports.nodeType&&exports;


var freeModule=objectTypes[typeof module]&&module&&!module.nodeType&&module;


var moduleExports=freeModule&&freeModule.exports===freeExports&&freeExports;


var freeGlobal=objectTypes[typeof global]&&global;
if(freeGlobal&&(freeGlobal.global===freeGlobal||freeGlobal.window===freeGlobal)){
root=freeGlobal;
}













function baseIndexOf(array,value,fromIndex){
var index=(fromIndex||0)-1,
length=array?array.length:0;

while(++index<length){
if(array[index]===value){
return index;
}
}
return-1;
}










function cacheIndexOf(cache,value){
var type=typeof value;
cache=cache.cache;

if(type=='boolean'||value==null){
return cache[value]?0:-1;
}
if(type!='number'&&type!='string'){
type='object';
}
var key=type=='number'?value:keyPrefix+value;
cache=(cache=cache[type])&&cache[key];

return type=='object'
?(cache&&baseIndexOf(cache,value)>-1?0:-1)
:(cache?0:-1);
}







function cachePush(value){
var cache=this.cache,
type=typeof value;

if(type=='boolean'||value==null){
cache[value]=true;
}else{
if(type!='number'&&type!='string'){
type='object';
}
var key=type=='number'?value:keyPrefix+value,
typeCache=cache[type]||(cache[type]={});

if(type=='object'){
(typeCache[key]||(typeCache[key]=[])).push(value);
}else{
typeCache[key]=true;
}
}
}









function charAtCallback(value){
return value.charCodeAt(0);
}










function compareAscending(a,b){
var ac=a.criteria,
bc=b.criteria;



if(ac!==bc){
if(ac>bc||typeof ac=='undefined'){
return 1;
}
if(ac<bc||typeof bc=='undefined'){
return-1;
}
}




return a.index-b.index;
}








function createCache(array){
var index=-1,
length=array.length,
first=array[0],
mid=array[(length/2)|0],
last=array[length-1];

if(first&&typeof first=='object'&&
mid&&typeof mid=='object'&&last&&typeof last=='object'){
return false;
}
var cache=getObject();
cache['false']=cache['null']=cache['true']=cache['undefined']=false;

var result=getObject();
result.array=array;
result.cache=cache;
result.push=cachePush;

while(++index<length){
result.push(array[index]);
}
return result;
}









function escapeStringChar(match){
return'\\'+stringEscapes[match];
}







function getArray(){
return arrayPool.pop()||[];
}







function getObject(){
return objectPool.pop()||{
'array':null,
'cache':null,
'criteria':null,
'false':false,
'index':0,
'null':false,
'number':null,
'object':null,
'push':null,
'string':null,
'true':false,
'undefined':false,
'value':null
};
}








function isNode(value){


return typeof value.toString!='function'&&typeof(value+'')=='string';
}







function releaseArray(array){
array.length=0;
if(arrayPool.length<maxPoolSize){
arrayPool.push(array);
}
}







function releaseObject(object){
var cache=object.cache;
if(cache){
releaseObject(cache);
}
object.array=object.cache=object.criteria=object.object=object.number=object.string=object.value=null;
if(objectPool.length<maxPoolSize){
objectPool.push(object);
}
}














function slice(array,start,end){
start||(start=0);
if(typeof end=='undefined'){
end=array?array.length:0;
}
var index=-1,
length=end-start||0,
result=Array(length<0?0:length);

while(++index<length){
result[index]=array[start+index];
}
return result;
}












function runInContext(context){




context=context?_.defaults(root.Object(),context,_.pick(root,contextProps)):root;


var Array=context.Array,
Boolean=context.Boolean,
Date=context.Date,
Error=context.Error,
Function=context.Function,
Math=context.Math,
Number=context.Number,
Object=context.Object,
RegExp=context.RegExp,
String=context.String,
TypeError=context.TypeError;







var arrayRef=[];


var errorProto=Error.prototype,
objectProto=Object.prototype,
stringProto=String.prototype;


var oldDash=context._;


var toString=objectProto.toString;


var reNative=RegExp('^'+
String(toString)
.replace(/[.*+?^${}()|[\]\\]/g,'\\$&')
.replace(/toString| for [^\]]+/g,'.*?')+'$'
);


var ceil=Math.ceil,
clearTimeout=context.clearTimeout,
floor=Math.floor,
fnToString=Function.prototype.toString,
getPrototypeOf=reNative.test(getPrototypeOf=Object.getPrototypeOf)&&getPrototypeOf,
hasOwnProperty=objectProto.hasOwnProperty,
now=reNative.test(now=Date.now)&&now||function(){return+new Date;},
push=arrayRef.push,
propertyIsEnumerable=objectProto.propertyIsEnumerable,
setTimeout=context.setTimeout,
splice=arrayRef.splice;


var setImmediate=typeof(setImmediate=freeGlobal&&moduleExports&&freeGlobal.setImmediate)=='function'&&
!reNative.test(setImmediate)&&setImmediate;


var defineProperty=(function(){

try{
var o={},
func=reNative.test(func=Object.defineProperty)&&func,
result=func(o,o,o)&&func;
}catch(e){}
return result;
}());


var nativeCreate=reNative.test(nativeCreate=Object.create)&&nativeCreate,
nativeIsArray=reNative.test(nativeIsArray=Array.isArray)&&nativeIsArray,
nativeIsFinite=context.isFinite,
nativeIsNaN=context.isNaN,
nativeKeys=reNative.test(nativeKeys=Object.keys)&&nativeKeys,
nativeMax=Math.max,
nativeMin=Math.min,
nativeParseInt=context.parseInt,
nativeRandom=Math.random;


var ctorByClass={};
ctorByClass[arrayClass]=Array;
ctorByClass[boolClass]=Boolean;
ctorByClass[dateClass]=Date;
ctorByClass[funcClass]=Function;
ctorByClass[objectClass]=Object;
ctorByClass[numberClass]=Number;
ctorByClass[regexpClass]=RegExp;
ctorByClass[stringClass]=String;


var nonEnumProps={};
nonEnumProps[arrayClass]=nonEnumProps[dateClass]=nonEnumProps[numberClass]={'constructor':true,'toLocaleString':true,'toString':true,'valueOf':true};
nonEnumProps[boolClass]=nonEnumProps[stringClass]={'constructor':true,'toString':true,'valueOf':true};
nonEnumProps[errorClass]=nonEnumProps[funcClass]=nonEnumProps[regexpClass]={'constructor':true,'toString':true};
nonEnumProps[objectClass]={'constructor':true};

(function(){
var length=shadowedProps.length;
while(length--){
var key=shadowedProps[length];
for(var className in nonEnumProps){
if(hasOwnProperty.call(nonEnumProps,className)&&!hasOwnProperty.call(nonEnumProps[className],key)){
nonEnumProps[className][key]=false;
}
}
}
}());




































































function lodash(value){

return(value&&typeof value=='object'&&!isArray(value)&&hasOwnProperty.call(value,'__wrapped__'))
?value
:new lodashWrapper(value);
}









function lodashWrapper(value,chainAll){
this.__chain__=!!chainAll;
this.__wrapped__=value;
}

lodashWrapper.prototype=lodash.prototype;








var support=lodash.support={};

(function(){
var ctor=function(){this.x=1;},
object={'0':1,'length':1},
props=[];

ctor.prototype={'valueOf':1,'y':1};
for(var key in new ctor){props.push(key);}
for(key in arguments){}







support.argsClass=toString.call(arguments)==argsClass;







support.argsObject=arguments.constructor==Object&&!(arguments instanceof Array);








support.enumErrorProps=propertyIsEnumerable.call(errorProto,'message')||propertyIsEnumerable.call(errorProto,'name');












support.enumPrototypes=propertyIsEnumerable.call(ctor,'prototype');








support.funcDecomp=!reNative.test(context.WinRTError)&&reThis.test(runInContext);







support.funcNames=typeof Function.name=='string';








support.nonEnumArgs=key!=0;










support.nonEnumShadows=!/valueOf/.test(props);







support.ownLast=props[0]!='x';













support.spliceObjects=(arrayRef.splice.call(object,0,1),!object[0]);










support.unindexedChars=('x'[0]+Object('x')[0])!='xx';









try{
support.nodeClass=!(toString.call(document)==objectClass&&!({'toString':0}+''));
}catch(e){
support.nodeClass=true;
}
}(1));










lodash.templateSettings={







'escape':/<%-([\s\S]+?)%>/g,







'evaluate':/<%([\s\S]+?)%>/g,







'interpolate':reInterpolate,







'variable':'',







'imports':{







'_':lodash
}
};










var iteratorTemplate=function(obj){

var __p='var index, iterable = '+
(obj.firstArg)+
', result = '+
(obj.init)+
';\nif (!iterable) return result;\n'+
(obj.top)+
';';
if(obj.array){
__p+='\nvar length = iterable.length; index = -1;\nif ('+
(obj.array)+
') {  ';
if(support.unindexedChars){
__p+='\n  if (isString(iterable)) {\n    iterable = iterable.split(\'\')\n  }  ';
}
__p+='\n  while (++index < length) {\n    '+
(obj.loop)+
';\n  }\n}\nelse {  ';
}else if(support.nonEnumArgs){
__p+='\n  var length = iterable.length; index = -1;\n  if (length && isArguments(iterable)) {\n    while (++index < length) {\n      index += \'\';\n      '+
(obj.loop)+
';\n    }\n  } else {  ';
}

if(support.enumPrototypes){
__p+='\n  var skipProto = typeof iterable == \'function\';\n  ';
}

if(support.enumErrorProps){
__p+='\n  var skipErrorProps = iterable === errorProto || iterable instanceof Error;\n  ';
}

var conditions=[];if(support.enumPrototypes){conditions.push('!(skipProto && index == "prototype")');}if(support.enumErrorProps){conditions.push('!(skipErrorProps && (index == "message" || index == "name"))');}

if(obj.useHas&&obj.keys){
__p+='\n  var ownIndex = -1,\n      ownProps = objectTypes[typeof iterable] && keys(iterable),\n      length = ownProps ? ownProps.length : 0;\n\n  while (++ownIndex < length) {\n    index = ownProps[ownIndex];\n';
if(conditions.length){
__p+='    if ('+
(conditions.join(' && '))+
') {\n  ';
}
__p+=
(obj.loop)+
';    ';
if(conditions.length){
__p+='\n    }';
}
__p+='\n  }  ';
}else{
__p+='\n  for (index in iterable) {\n';
if(obj.useHas){conditions.push("hasOwnProperty.call(iterable, index)");}if(conditions.length){
__p+='    if ('+
(conditions.join(' && '))+
') {\n  ';
}
__p+=
(obj.loop)+
';    ';
if(conditions.length){
__p+='\n    }';
}
__p+='\n  }    ';
if(support.nonEnumShadows){
__p+='\n\n  if (iterable !== objectProto) {\n    var ctor = iterable.constructor,\n        isProto = iterable === (ctor && ctor.prototype),\n        className = iterable === stringProto ? stringClass : iterable === errorProto ? errorClass : toString.call(iterable),\n        nonEnum = nonEnumProps[className];\n      ';
for(k=0;k<7;k++){
__p+='\n    index = \''+
(obj.shadowedProps[k])+
'\';\n    if ((!(isProto && nonEnum[index]) && hasOwnProperty.call(iterable, index))';
if(!obj.useHas){
__p+=' || (!nonEnum[index] && iterable[index] !== objectProto[index])';
}
__p+=') {\n      '+
(obj.loop)+
';\n    }      ';
}
__p+='\n  }    ';
}

}

if(obj.array||support.nonEnumArgs){
__p+='\n}';
}
__p+=
(obj.bottom)+
';\nreturn result';

return __p
};











function baseBind(bindData){
var func=bindData[0],
partialArgs=bindData[2],
thisArg=bindData[4];

function bound(){


if(partialArgs){
var args=partialArgs.slice();
push.apply(args,arguments);
}


if(this instanceof bound){

var thisBinding=baseCreate(func.prototype),
result=func.apply(thisBinding,args||arguments);
return isObject(result)?result:thisBinding;
}
return func.apply(thisArg,args||arguments);
}
setBindData(bound,bindData);
return bound;
}













function baseClone(value,isDeep,callback,stackA,stackB){
if(callback){
var result=callback(value);
if(typeof result!='undefined'){
return result;
}
}

var isObj=isObject(value);
if(isObj){
var className=toString.call(value);
if(!cloneableClasses[className]||(!support.nodeClass&&isNode(value))){
return value;
}
var ctor=ctorByClass[className];
switch(className){
case boolClass:
case dateClass:
return new ctor(+value);

case numberClass:
case stringClass:
return new ctor(value);

case regexpClass:
result=ctor(value.source,reFlags.exec(value));
result.lastIndex=value.lastIndex;
return result;
}
}else{
return value;
}
var isArr=isArray(value);
if(isDeep){

var initedStack=!stackA;
stackA||(stackA=getArray());
stackB||(stackB=getArray());

var length=stackA.length;
while(length--){
if(stackA[length]==value){
return stackB[length];
}
}
result=isArr?ctor(value.length):{};
}
else{
result=isArr?slice(value):assign({},value);
}

if(isArr){
if(hasOwnProperty.call(value,'index')){
result.index=value.index;
}
if(hasOwnProperty.call(value,'input')){
result.input=value.input;
}
}

if(!isDeep){
return result;
}


stackA.push(value);
stackB.push(result);


(isArr?baseEach:forOwn)(value,function(objValue,key){
result[key]=baseClone(objValue,isDeep,callback,stackA,stackB);
});

if(initedStack){
releaseArray(stackA);
releaseArray(stackB);
}
return result;
}









function baseCreate(prototype,properties){
return isObject(prototype)?nativeCreate(prototype):{};
}

if(!nativeCreate){
baseCreate=(function(){
function Object(){}
return function(prototype){
if(isObject(prototype)){
Object.prototype=prototype;
var result=new Object;
Object.prototype=null;
}
return result||context.Object();
};
}());
}











function baseCreateCallback(func,thisArg,argCount){
if(typeof func!='function'){
return identity;
}

if(typeof thisArg=='undefined'||!('prototype'in func)){
return func;
}
var bindData=func.__bindData__;
if(typeof bindData=='undefined'){
if(support.funcNames){
bindData=!func.name;
}
bindData=bindData||!support.funcDecomp;
if(!bindData){
var source=fnToString.call(func);
if(!support.funcNames){
bindData=!reFuncName.test(source);
}
if(!bindData){

bindData=reThis.test(source);
setBindData(func,bindData);
}
}
}

if(bindData===false||(bindData!==true&&bindData[1]&1)){
return func;
}
switch(argCount){
case 1:return function(value){
return func.call(thisArg,value);
};
case 2:return function(a,b){
return func.call(thisArg,a,b);
};
case 3:return function(value,index,collection){
return func.call(thisArg,value,index,collection);
};
case 4:return function(accumulator,value,index,collection){
return func.call(thisArg,accumulator,value,index,collection);
};
}
return bind(func,thisArg);
}









function baseCreateWrapper(bindData){
var func=bindData[0],
bitmask=bindData[1],
partialArgs=bindData[2],
partialRightArgs=bindData[3],
thisArg=bindData[4],
arity=bindData[5];

var isBind=bitmask&1,
isBindKey=bitmask&2,
isCurry=bitmask&4,
isCurryBound=bitmask&8,
key=func;

function bound(){
var thisBinding=isBind?thisArg:this;
if(partialArgs){
var args=partialArgs.slice();
push.apply(args,arguments);
}
if(partialRightArgs||isCurry){
args||(args=slice(arguments));
if(partialRightArgs){
push.apply(args,partialRightArgs);
}
if(isCurry&&args.length<arity){
bitmask|=16&~32;
return baseCreateWrapper([func,(isCurryBound?bitmask:bitmask&~3),args,null,thisArg,arity]);
}
}
args||(args=arguments);
if(isBindKey){
func=thisBinding[key];
}
if(this instanceof bound){
thisBinding=baseCreate(func.prototype);
var result=func.apply(thisBinding,args);
return isObject(result)?result:thisBinding;
}
return func.apply(thisBinding,args);
}
setBindData(bound,bindData);
return bound;
}










function baseDifference(array,values){
var index=-1,
indexOf=getIndexOf(),
length=array?array.length:0,
isLarge=length>=largeArraySize&&indexOf===baseIndexOf,
result=[];

if(isLarge){
var cache=createCache(values);
if(cache){
indexOf=cacheIndexOf;
values=cache;
}else{
isLarge=false;
}
}
while(++index<length){
var value=array[index];
if(indexOf(values,value)<0){
result.push(value);
}
}
if(isLarge){
releaseObject(values);
}
return result;
}












function baseFlatten(array,isShallow,isStrict,fromIndex){
var index=(fromIndex||0)-1,
length=array?array.length:0,
result=[];

while(++index<length){
var value=array[index];

if(value&&typeof value=='object'&&typeof value.length=='number'
&&(isArray(value)||isArguments(value))){

if(!isShallow){
value=baseFlatten(value,isShallow,isStrict);
}
var valIndex=-1,
valLength=value.length,
resIndex=result.length;

result.length+=valLength;
while(++valIndex<valLength){
result[resIndex++]=value[valIndex];
}
}else if(!isStrict){
result.push(value);
}
}
return result;
}














function baseIsEqual(a,b,callback,isWhere,stackA,stackB){

if(callback){
var result=callback(a,b);
if(typeof result!='undefined'){
return!!result;
}
}

if(a===b){

return a!==0||(1/a==1/b);
}
var type=typeof a,
otherType=typeof b;


if(a===a&&
!(a&&objectTypes[type])&&
!(b&&objectTypes[otherType])){
return false;
}


if(a==null||b==null){
return a===b;
}

var className=toString.call(a),
otherClass=toString.call(b);

if(className==argsClass){
className=objectClass;
}
if(otherClass==argsClass){
otherClass=objectClass;
}
if(className!=otherClass){
return false;
}
switch(className){
case boolClass:
case dateClass:


return+a==+b;

case numberClass:

return(a!=+a)
?b!=+b

:(a==0?(1/a==1/b):a==+b);

case regexpClass:
case stringClass:


return a==String(b);
}
var isArr=className==arrayClass;
if(!isArr){

var aWrapped=hasOwnProperty.call(a,'__wrapped__'),
bWrapped=hasOwnProperty.call(b,'__wrapped__');

if(aWrapped||bWrapped){
return baseIsEqual(aWrapped?a.__wrapped__:a,bWrapped?b.__wrapped__:b,callback,isWhere,stackA,stackB);
}

if(className!=objectClass||(!support.nodeClass&&(isNode(a)||isNode(b)))){
return false;
}

var ctorA=!support.argsObject&&isArguments(a)?Object:a.constructor,
ctorB=!support.argsObject&&isArguments(b)?Object:b.constructor;


if(ctorA!=ctorB&&
!(isFunction(ctorA)&&ctorA instanceof ctorA&&isFunction(ctorB)&&ctorB instanceof ctorB)&&
('constructor'in a&&'constructor'in b)
){
return false;
}
}



var initedStack=!stackA;
stackA||(stackA=getArray());
stackB||(stackB=getArray());

var length=stackA.length;
while(length--){
if(stackA[length]==a){
return stackB[length]==b;
}
}
var size=0;
result=true;


stackA.push(a);
stackB.push(b);


if(isArr){
length=a.length;
size=b.length;


result=size==a.length;
if(!result&&!isWhere){
return result;
}

while(size--){
var index=length,
value=b[size];

if(isWhere){
while(index--){
if((result=baseIsEqual(a[index],value,callback,isWhere,stackA,stackB))){
break;
}
}
}else if(!(result=baseIsEqual(a[size],value,callback,isWhere,stackA,stackB))){
break;
}
}
return result;
}


forIn(b,function(value,key,b){
if(hasOwnProperty.call(b,key)){

size++;

return(result=hasOwnProperty.call(a,key)&&baseIsEqual(a[key],value,callback,isWhere,stackA,stackB));
}
});

if(result&&!isWhere){

forIn(a,function(value,key,a){
if(hasOwnProperty.call(a,key)){

return(result=--size>-1);
}
});
}
if(initedStack){
releaseArray(stackA);
releaseArray(stackB);
}
return result;
}












function baseMerge(object,source,callback,stackA,stackB){
(isArray(source)?forEach:forOwn)(source,function(source,key){
var found,
isArr,
result=source,
value=object[key];

if(source&&((isArr=isArray(source))||isPlainObject(source))){

var stackLength=stackA.length;
while(stackLength--){
if((found=stackA[stackLength]==source)){
value=stackB[stackLength];
break;
}
}
if(!found){
var isShallow;
if(callback){
result=callback(value,source);
if((isShallow=typeof result!='undefined')){
value=result;
}
}
if(!isShallow){
value=isArr
?(isArray(value)?value:[])
:(isPlainObject(value)?value:{});
}

stackA.push(source);
stackB.push(value);


if(!isShallow){
baseMerge(value,source,callback,stackA,stackB);
}
}
}
else{
if(callback){
result=callback(value,source);
if(typeof result=='undefined'){
result=source;
}
}
if(typeof result!='undefined'){
value=result;
}
}
object[key]=value;
});
}










function baseRandom(min,max){
return min+floor(nativeRandom()*(max-min+1));
}











function baseUniq(array,isSorted,callback){
var index=-1,
indexOf=getIndexOf(),
length=array?array.length:0,
result=[];

var isLarge=!isSorted&&length>=largeArraySize&&indexOf===baseIndexOf,
seen=(callback||isLarge)?getArray():result;

if(isLarge){
var cache=createCache(seen);
if(cache){
indexOf=cacheIndexOf;
seen=cache;
}else{
isLarge=false;
seen=callback?seen:(releaseArray(seen),result);
}
}
while(++index<length){
var value=array[index],
computed=callback?callback(value,index,array):value;

if(isSorted
?!index||seen[seen.length-1]!==computed
:indexOf(seen,computed)<0
){
if(callback||isLarge){
seen.push(computed);
}
result.push(value);
}
}
if(isLarge){
releaseArray(seen.array);
releaseObject(seen);
}else if(callback){
releaseArray(seen);
}
return result;
}











function createAggregator(setter){
return function(collection,callback,thisArg){
var result={};
callback=lodash.createCallback(callback,thisArg,3);

if(isArray(collection)){
var index=-1,
length=collection.length;

while(++index<length){
var value=collection[index];
setter(result,value,callback(value,index,collection),collection);
}
}else{
baseEach(collection,function(value,key,collection){
setter(result,value,callback(value,key,collection),collection);
});
}
return result;
};
}























function createWrapper(func,bitmask,partialArgs,partialRightArgs,thisArg,arity){
var isBind=bitmask&1,
isBindKey=bitmask&2,
isCurry=bitmask&4,
isCurryBound=bitmask&8,
isPartial=bitmask&16,
isPartialRight=bitmask&32;

if(!isBindKey&&!isFunction(func)){
throw new TypeError;
}
if(isPartial&&!partialArgs.length){
bitmask&=~16;
isPartial=partialArgs=false;
}
if(isPartialRight&&!partialRightArgs.length){
bitmask&=~32;
isPartialRight=partialRightArgs=false;
}
var bindData=func&&func.__bindData__;
if(bindData&&bindData!==true){
bindData=bindData.slice();


if(isBind&&!(bindData[1]&1)){
bindData[4]=thisArg;
}

if(!isBind&&bindData[1]&1){
bitmask|=8;
}

if(isCurry&&!(bindData[1]&4)){
bindData[5]=arity;
}

if(isPartial){
push.apply(bindData[2]||(bindData[2]=[]),partialArgs);
}

if(isPartialRight){
push.apply(bindData[3]||(bindData[3]=[]),partialRightArgs);
}

bindData[1]|=bitmask;
return createWrapper.apply(null,bindData);
}

var creater=(bitmask==1||bitmask===17)?baseBind:baseCreateWrapper;
return creater([func,bitmask,partialArgs,partialRightArgs,thisArg,arity]);
}















function createIterator(){

iteratorData.shadowedProps=shadowedProps;


iteratorData.array=iteratorData.bottom=iteratorData.loop=iteratorData.top='';
iteratorData.init='iterable';
iteratorData.useHas=true;


for(var object,index=0;object=arguments[index];index++){
for(var key in object){
iteratorData[key]=object[key];
}
}
var args=iteratorData.args;
iteratorData.firstArg=/^[^,]+/.exec(args)[0];


var factory=Function(
'baseCreateCallback, errorClass, errorProto, hasOwnProperty, '+
'indicatorObject, isArguments, isArray, isString, keys, objectProto, '+
'objectTypes, nonEnumProps, stringClass, stringProto, toString',
'return function('+args+') {\n'+iteratorTemplate(iteratorData)+'\n}'
);


return factory(
baseCreateCallback,errorClass,errorProto,hasOwnProperty,
indicatorObject,isArguments,isArray,isString,iteratorData.keys,objectProto,
objectTypes,nonEnumProps,stringClass,stringProto,toString
);
}








function escapeHtmlChar(match){
return htmlEscapes[match];
}









function getIndexOf(){
var result=(result=lodash.indexOf)===indexOf?baseIndexOf:result;
return result;
}








var setBindData=!defineProperty?noop:function(func,value){
descriptor.value=value;
defineProperty(func,'__bindData__',descriptor);
};











function shimIsPlainObject(value){
var ctor,
result;


if(!(value&&toString.call(value)==objectClass)||
(ctor=value.constructor,isFunction(ctor)&&!(ctor instanceof ctor))||
(!support.argsClass&&isArguments(value))||
(!support.nodeClass&&isNode(value))){
return false;
}



if(support.ownLast){
forIn(value,function(value,key,object){
result=hasOwnProperty.call(object,key);
return false;
});
return result!==false;
}



forIn(value,function(value,key){
result=key;
});
return typeof result=='undefined'||hasOwnProperty.call(value,result);
}








function unescapeHtmlChar(match){
return htmlUnescapes[match];
}



















function isArguments(value){
return value&&typeof value=='object'&&typeof value.length=='number'&&
toString.call(value)==argsClass||false;
}

if(!support.argsClass){
isArguments=function(value){
return value&&typeof value=='object'&&typeof value.length=='number'&&
hasOwnProperty.call(value,'callee')&&!propertyIsEnumerable.call(value,'callee')||false;
};
}


















var isArray=nativeIsArray||function(value){
return value&&typeof value=='object'&&typeof value.length=='number'&&
toString.call(value)==arrayClass||false;
};










var shimKeys=createIterator({
'args':'object',
'init':'[]',
'top':'if (!(objectTypes[typeof object])) return result',
'loop':'result.push(index)'
});














var keys=!nativeKeys?shimKeys:function(object){
if(!isObject(object)){
return[];
}
if((support.enumPrototypes&&typeof object=='function')||
(support.nonEnumArgs&&object.length&&isArguments(object))){
return shimKeys(object);
}
return nativeKeys(object);
};


var eachIteratorOptions={
'args':'collection, callback, thisArg',
'top':"callback = callback && typeof thisArg == 'undefined' ? callback : baseCreateCallback(callback, thisArg, 3)",
'array':"typeof length == 'number'",
'keys':keys,
'loop':'if (callback(iterable[index], index, collection) === false) return result'
};


var defaultsIteratorOptions={
'args':'object, source, guard',
'top':
'var args = arguments,\n'+
'    argsIndex = 0,\n'+
"    argsLength = typeof guard == 'number' ? 2 : args.length;\n"+
'while (++argsIndex < argsLength) {\n'+
'  iterable = args[argsIndex];\n'+
'  if (iterable && objectTypes[typeof iterable]) {',
'keys':keys,
'loop':"if (typeof result[index] == 'undefined') result[index] = iterable[index]",
'bottom':'  }\n}'
};


var forOwnIteratorOptions={
'top':'if (!objectTypes[typeof iterable]) return result;\n'+eachIteratorOptions.top,
'array':false
};









var htmlEscapes={
'&':'&amp;',
'<':'&lt;',
'>':'&gt;',
'"':'&quot;',
"'":'&#39;'
};


var htmlUnescapes=invert(htmlEscapes);


var reEscapedHtml=RegExp('('+keys(htmlUnescapes).join('|')+')','g'),
reUnescapedHtml=RegExp('['+keys(htmlEscapes).join('')+']','g');















var baseEach=createIterator(eachIteratorOptions);

































var assign=createIterator(defaultsIteratorOptions,{
'top':
defaultsIteratorOptions.top.replace(';',
';\n'+
"if (argsLength > 3 && typeof args[argsLength - 2] == 'function') {\n"+
'  var callback = baseCreateCallback(args[--argsLength - 1], args[argsLength--], 2);\n'+
"} else if (argsLength > 2 && typeof args[argsLength - 1] == 'function') {\n"+
'  callback = args[--argsLength];\n'+
'}'
),
'loop':'result[index] = callback ? callback(result[index], iterable[index]) : iterable[index]'
});









































function clone(value,isDeep,callback,thisArg){


if(typeof isDeep!='boolean'&&isDeep!=null){
thisArg=callback;
callback=isDeep;
isDeep=false;
}
return baseClone(value,isDeep,typeof callback=='function'&&baseCreateCallback(callback,thisArg,1));
}










































function cloneDeep(value,callback,thisArg){
return baseClone(value,true,typeof callback=='function'&&baseCreateCallback(callback,thisArg,1));
}
































function create(prototype,properties){
var result=baseCreate(prototype);
return properties?assign(result,properties):result;
}





















var defaults=createIterator(defaultsIteratorOptions);










































function findKey(object,callback,thisArg){
var result;
callback=lodash.createCallback(callback,thisArg,3);
forOwn(object,function(value,key,object){
if(callback(value,key,object)){
result=key;
return false;
}
});
return result;
}










































function findLastKey(object,callback,thisArg){
var result;
callback=lodash.createCallback(callback,thisArg,3);
forOwnRight(object,function(value,key,object){
if(callback(value,key,object)){
result=key;
return false;
}
});
return result;
}
































var forIn=createIterator(eachIteratorOptions,forOwnIteratorOptions,{
'useHas':false
});





























function forInRight(object,callback,thisArg){
var pairs=[];

forIn(object,function(value,key){
pairs.push(key,value);
});

var length=pairs.length;
callback=baseCreateCallback(callback,thisArg,3);
while(length--){
if(callback(pairs[length--],pairs[length],object)===false){
break;
}
}
return object;
}






















var forOwn=createIterator(eachIteratorOptions,forOwnIteratorOptions);



















function forOwnRight(object,callback,thisArg){
var props=keys(object),
length=props.length;

callback=baseCreateCallback(callback,thisArg,3);
while(length--){
var key=props[length];
if(callback(object[key],key,object)===false){
break;
}
}
return object;
}
















function functions(object){
var result=[];
forIn(object,function(value,key){
if(isFunction(value)){
result.push(key);
}
});
return result.sort();
}
















function has(object,property){
return object?hasOwnProperty.call(object,property):false;
}














function invert(object){
var index=-1,
props=keys(object),
length=props.length,
result={};

while(++index<length){
var key=props[index];
result[object[key]]=key;
}
return result;
}














function isBoolean(value){
return value===true||value===false||
value&&typeof value=='object'&&toString.call(value)==boolClass||false;
}














function isDate(value){
return value&&typeof value=='object'&&toString.call(value)==dateClass||false;
}














function isElement(value){
return value&&value.nodeType===1||false;
}






















function isEmpty(value){
var result=true;
if(!value){
return result;
}
var className=toString.call(value),
length=value.length;

if((className==arrayClass||className==stringClass||
(support.argsClass?className==argsClass:isArguments(value)))||
(className==objectClass&&typeof length=='number'&&isFunction(value.splice))){
return!length;
}
forOwn(value,function(){
return(result=false);
});
return result;
}







































function isEqual(a,b,callback,thisArg){
return baseIsEqual(a,b,typeof callback=='function'&&baseCreateCallback(callback,thisArg,2));
}





























function isFinite(value){
return nativeIsFinite(value)&&!nativeIsNaN(parseFloat(value));
}














function isFunction(value){
return typeof value=='function';
}

if(isFunction(/x/)){
isFunction=function(value){
return typeof value=='function'&&toString.call(value)==funcClass;
};
}





















function isObject(value){




return!!(value&&objectTypes[typeof value]);
}


























function isNaN(value){


return isNumber(value)&&value!=+value;
}

















function isNull(value){
return value===null;
}
















function isNumber(value){
return typeof value=='number'||
value&&typeof value=='object'&&toString.call(value)==numberClass||false;
}

























var isPlainObject=!getPrototypeOf?shimIsPlainObject:function(value){
if(!(value&&toString.call(value)==objectClass)||(!support.argsClass&&isArguments(value))){
return false;
}
var valueOf=value.valueOf,
objProto=typeof valueOf=='function'&&(objProto=getPrototypeOf(valueOf))&&getPrototypeOf(objProto);

return objProto
?(value==objProto||getPrototypeOf(value)==objProto)
:shimIsPlainObject(value);
};














function isRegExp(value){
return value&&objectTypes[typeof value]&&toString.call(value)==regexpClass||false;
}














function isString(value){
return typeof value=='string'||
value&&typeof value=='object'&&toString.call(value)==stringClass||false;
}














function isUndefined(value){
return typeof value=='undefined';
}




















































function merge(object){
var args=arguments,
length=2;

if(!isObject(object)){
return object;
}



if(typeof args[2]!='number'){
length=args.length;
}
if(length>3&&typeof args[length-2]=='function'){
var callback=baseCreateCallback(args[--length-1],args[length--],2);
}else if(length>2&&typeof args[length-1]=='function'){
callback=args[--length];
}
var sources=slice(arguments,1,length),
index=-1,
stackA=getArray(),
stackB=getArray();

while(++index<length){
baseMerge(object,sources[index],callback,stackA,stackB);
}
releaseArray(stackA);
releaseArray(stackB);
return object;
}



























function omit(object,callback,thisArg){
var result={};
if(typeof callback!='function'){
var props=[];
forIn(object,function(value,key){
props.push(key);
});
props=baseDifference(props,baseFlatten(arguments,true,false,1));

var index=-1,
length=props.length;

while(++index<length){
var key=props[index];
result[key]=object[key];
}
}else{
callback=lodash.createCallback(callback,thisArg,3);
forIn(object,function(value,key,object){
if(!callback(value,key,object)){
result[key]=value;
}
});
}
return result;
}















function pairs(object){
var index=-1,
props=keys(object),
length=props.length,
result=Array(length);

while(++index<length){
var key=props[index];
result[index]=[key,object[key]];
}
return result;
}




























function pick(object,callback,thisArg){
var result={};
if(typeof callback!='function'){
var index=-1,
props=baseFlatten(arguments,true,false,1),
length=isObject(object)?props.length:0;

while(++index<length){
var key=props[index];
if(key in object){
result[key]=object[key];
}
}
}else{
callback=lodash.createCallback(callback,thisArg,3);
forIn(object,function(value,key,object){
if(callback(value,key,object)){
result[key]=value;
}
});
}
return result;
}
































function transform(object,callback,accumulator,thisArg){
var isArr=isArray(object);
if(accumulator==null){
if(isArr){
accumulator=[];
}else{
var ctor=object&&object.constructor,
proto=ctor&&ctor.prototype;

accumulator=baseCreate(proto);
}
}
if(callback){
callback=lodash.createCallback(callback,thisArg,4);
(isArr?baseEach:forOwn)(object,function(value,index,object){
return callback(accumulator,value,index,object);
});
}
return accumulator;
}














function values(object){
var index=-1,
props=keys(object),
length=props.length,
result=Array(length);

while(++index<length){
result[index]=object[props[index]];
}
return result;
}
























function at(collection){
var args=arguments,
index=-1,
props=baseFlatten(args,true,false,1),
length=(args[2]&&args[2][args[1]]===collection)?1:props.length,
result=Array(length);

if(support.unindexedChars&&isString(collection)){
collection=collection.split('');
}
while(++index<length){
result[index]=collection[props[index]];
}
return result;
}




























function contains(collection,target,fromIndex){
var index=-1,
indexOf=getIndexOf(),
length=collection?collection.length:0,
result=false;

fromIndex=(fromIndex<0?nativeMax(0,length+fromIndex):fromIndex)||0;
if(isArray(collection)){
result=indexOf(collection,target,fromIndex)>-1;
}else if(typeof length=='number'){
result=(isString(collection)?collection.indexOf(target,fromIndex):indexOf(collection,target,fromIndex))>-1;
}else{
baseEach(collection,function(value){
if(++index>=fromIndex){
return!(result=value===target);
}
});
}
return result;
}



































var countBy=createAggregator(function(result,value,key){
(hasOwnProperty.call(result,key)?result[key]++:result[key]=1);
});










































function every(collection,callback,thisArg){
var result=true;
callback=lodash.createCallback(callback,thisArg,3);

if(isArray(collection)){
var index=-1,
length=collection.length;

while(++index<length){
if(!(result=!!callback(collection[index],index,collection))){
break;
}
}
}else{
baseEach(collection,function(value,index,collection){
return(result=!!callback(value,index,collection));
});
}
return result;
}









































function filter(collection,callback,thisArg){
var result=[];
callback=lodash.createCallback(callback,thisArg,3);

if(isArray(collection)){
var index=-1,
length=collection.length;

while(++index<length){
var value=collection[index];
if(callback(value,index,collection)){
result.push(value);
}
}
}else{
baseEach(collection,function(value,index,collection){
if(callback(value,index,collection)){
result.push(value);
}
});
}
return result;
}












































function find(collection,callback,thisArg){
callback=lodash.createCallback(callback,thisArg,3);

if(isArray(collection)){
var index=-1,
length=collection.length;

while(++index<length){
var value=collection[index];
if(callback(value,index,collection)){
return value;
}
}
}else{
var result;
baseEach(collection,function(value,index,collection){
if(callback(value,index,collection)){
result=value;
return false;
}
});
return result;
}
}





















function findLast(collection,callback,thisArg){
var result;
callback=lodash.createCallback(callback,thisArg,3);
forEachRight(collection,function(value,index,collection){
if(callback(value,index,collection)){
result=value;
return false;
}
});
return result;
}



























function forEach(collection,callback,thisArg){
if(callback&&typeof thisArg=='undefined'&&isArray(collection)){
var index=-1,
length=collection.length;

while(++index<length){
if(callback(collection[index],index,collection)===false){
break;
}
}
}else{
baseEach(collection,callback,thisArg);
}
return collection;
}


















function forEachRight(collection,callback,thisArg){
var iterable=collection,
length=collection?collection.length:0;

callback=callback&&typeof thisArg=='undefined'?callback:baseCreateCallback(callback,thisArg,3);
if(isArray(collection)){
while(length--){
if(callback(collection[length],length,collection)===false){
break;
}
}
}else{
if(typeof length!='number'){
var props=keys(collection);
length=props.length;
}else if(support.unindexedChars&&isString(collection)){
iterable=collection.split('');
}
baseEach(collection,function(value,key,collection){
key=props?props[--length]:--length;
return callback(iterable[key],key,collection);
});
}
return collection;
}




































var groupBy=createAggregator(function(result,value,key){
(hasOwnProperty.call(result,key)?result[key]:result[key]=[]).push(value);
});








































var indexBy=createAggregator(function(result,value,key){
result[key]=value;
});























function invoke(collection,methodName){
var args=slice(arguments,2),
index=-1,
isFunc=typeof methodName=='function',
length=collection?collection.length:0,
result=Array(typeof length=='number'?length:0);

forEach(collection,function(value){
result[++index]=(isFunc?methodName:value[methodName]).apply(value,args);
});
return result;
}








































function map(collection,callback,thisArg){
var index=-1,
length=collection?collection.length:0,
result=Array(typeof length=='number'?length:0);

callback=lodash.createCallback(callback,thisArg,3);
if(isArray(collection)){
while(++index<length){
result[index]=callback(collection[index],index,collection);
}
}else{
baseEach(collection,function(value,key,collection){
result[++index]=callback(value,key,collection);
});
}
return result;
}









































function max(collection,callback,thisArg){
var computed=-Infinity,
result=computed;



if(typeof callback!='function'&&thisArg&&thisArg[callback]===collection){
callback=null;
}
if(callback==null&&isArray(collection)){
var index=-1,
length=collection.length;

while(++index<length){
var value=collection[index];
if(value>result){
result=value;
}
}
}else{
callback=(callback==null&&isString(collection))
?charAtCallback
:lodash.createCallback(callback,thisArg,3);

baseEach(collection,function(value,index,collection){
var current=callback(value,index,collection);
if(current>computed){
computed=current;
result=value;
}
});
}
return result;
}









































function min(collection,callback,thisArg){
var computed=Infinity,
result=computed;



if(typeof callback!='function'&&thisArg&&thisArg[callback]===collection){
callback=null;
}
if(callback==null&&isArray(collection)){
var index=-1,
length=collection.length;

while(++index<length){
var value=collection[index];
if(value<result){
result=value;
}
}
}else{
callback=(callback==null&&isString(collection))
?charAtCallback
:lodash.createCallback(callback,thisArg,3);

baseEach(collection,function(value,index,collection){
var current=callback(value,index,collection);
if(current<computed){
computed=current;
result=value;
}
});
}
return result;
}





















var pluck=map;































function reduce(collection,callback,accumulator,thisArg){
var noaccum=arguments.length<3;
callback=lodash.createCallback(callback,thisArg,4);

if(isArray(collection)){
var index=-1,
length=collection.length;

if(noaccum){
accumulator=collection[++index];
}
while(++index<length){
accumulator=callback(accumulator,collection[index],index,collection);
}
}else{
baseEach(collection,function(value,index,collection){
accumulator=noaccum
?(noaccum=false,value)
:callback(accumulator,value,index,collection)
});
}
return accumulator;
}




















function reduceRight(collection,callback,accumulator,thisArg){
var noaccum=arguments.length<3;
callback=lodash.createCallback(callback,thisArg,4);
forEachRight(collection,function(value,index,collection){
accumulator=noaccum
?(noaccum=false,value)
:callback(accumulator,value,index,collection);
});
return accumulator;
}







































function reject(collection,callback,thisArg){
callback=lodash.createCallback(callback,thisArg,3);
return filter(collection,function(value,index,collection){
return!callback(value,index,collection);
});
}




















function sample(collection,n,guard){
if(collection&&typeof collection.length!='number'){
collection=values(collection);
}else if(support.unindexedChars&&isString(collection)){
collection=collection.split('');
}
if(n==null||guard){
return collection?collection[baseRandom(0,collection.length-1)]:undefined;
}
var result=shuffle(collection);
result.length=nativeMin(nativeMax(0,n),result.length);
return result;
}















function shuffle(collection){
var index=-1,
length=collection?collection.length:0,
result=Array(typeof length=='number'?length:0);

forEach(collection,function(value){
var rand=baseRandom(0,++index);
result[index]=result[rand];
result[rand]=value;
});
return result;
}





















function size(collection){
var length=collection?collection.length:0;
return typeof length=='number'?length:keys(collection).length;
}











































function some(collection,callback,thisArg){
var result;
callback=lodash.createCallback(callback,thisArg,3);

if(isArray(collection)){
var index=-1,
length=collection.length;

while(++index<length){
if((result=callback(collection[index],index,collection))){
break;
}
}
}else{
baseEach(collection,function(value,index,collection){
return!(result=callback(value,index,collection));
});
}
return!!result;
}




































function sortBy(collection,callback,thisArg){
var index=-1,
length=collection?collection.length:0,
result=Array(typeof length=='number'?length:0);

callback=lodash.createCallback(callback,thisArg,3);
forEach(collection,function(value,key,collection){
var object=result[++index]=getObject();
object.criteria=callback(value,key,collection);
object.index=index;
object.value=value;
});

length=result.length;
result.sort(compareAscending);
while(length--){
var object=result[length];
result[length]=object.value;
releaseObject(object);
}
return result;
}














function toArray(collection){
if(collection&&typeof collection.length=='number'){
return(support.unindexedChars&&isString(collection))
?collection.split('')
:slice(collection);
}
return values(collection);
}


























var where=filter;

















function compact(array){
var index=-1,
length=array?array.length:0,
result=[];

while(++index<length){
var value=array[index];
if(value){
result.push(value);
}
}
return result;
}
















function difference(array){
return baseDifference(array,baseFlatten(arguments,true,true,1));
}










































function findIndex(array,callback,thisArg){
var index=-1,
length=array?array.length:0;

callback=lodash.createCallback(callback,thisArg,3);
while(++index<length){
if(callback(array[index],index,array)){
return index;
}
}
return-1;
}










































function findLastIndex(array,callback,thisArg){
var length=array?array.length:0;
callback=lodash.createCallback(callback,thisArg,3);
while(length--){
if(callback(array[length],length,array)){
return length;
}
}
return-1;
}




















































function first(array,callback,thisArg){
var n=0,
length=array?array.length:0;

if(typeof callback!='number'&&callback!=null){
var index=-1;
callback=lodash.createCallback(callback,thisArg,3);
while(++index<length&&callback(array[index],index,array)){
n++;
}
}else{
n=callback;
if(n==null||thisArg){
return array?array[0]:undefined;
}
}
return slice(array,0,nativeMin(nativeMax(0,n),length));
}










































function flatten(array,isShallow,callback,thisArg){

if(typeof isShallow!='boolean'&&isShallow!=null){
thisArg=callback;
callback=(typeof isShallow!='function'&&thisArg&&thisArg[isShallow]===array)?null:isShallow;
isShallow=false;
}
if(callback!=null){
array=map(array,callback,thisArg);
}
return baseFlatten(array,isShallow);
}

























function indexOf(array,value,fromIndex){
if(typeof fromIndex=='number'){
var length=array?array.length:0;
fromIndex=(fromIndex<0?nativeMax(0,length+fromIndex):fromIndex||0);
}else if(fromIndex){
var index=sortedIndex(array,value);
return array[index]===value?index:-1;
}
return baseIndexOf(array,value,fromIndex);
}



















































function initial(array,callback,thisArg){
var n=0,
length=array?array.length:0;

if(typeof callback!='number'&&callback!=null){
var index=length;
callback=lodash.createCallback(callback,thisArg,3);
while(index--&&callback(array[index],index,array)){
n++;
}
}else{
n=(callback==null||thisArg)?1:callback||n;
}
return slice(array,0,nativeMin(nativeMax(0,length-n),length));
}















function intersection(array){
var args=arguments,
argsLength=args.length,
argsIndex=-1,
caches=getArray(),
index=-1,
indexOf=getIndexOf(),
length=array?array.length:0,
result=[],
seen=getArray();

while(++argsIndex<argsLength){
var value=args[argsIndex];
caches[argsIndex]=indexOf===baseIndexOf&&
(value?value.length:0)>=largeArraySize&&
createCache(argsIndex?args[argsIndex]:seen);
}
outer:
while(++index<length){
var cache=caches[0];
value=array[index];

if((cache?cacheIndexOf(cache,value):indexOf(seen,value))<0){
argsIndex=argsLength;
(cache||seen).push(value);
while(--argsIndex){
cache=caches[argsIndex];
if((cache?cacheIndexOf(cache,value):indexOf(args[argsIndex],value))<0){
continue outer;
}
}
result.push(value);
}
}
while(argsLength--){
cache=caches[argsLength];
if(cache){
releaseObject(cache);
}
}
releaseArray(caches);
releaseArray(seen);
return result;
}



















































function last(array,callback,thisArg){
var n=0,
length=array?array.length:0;

if(typeof callback!='number'&&callback!=null){
var index=length;
callback=lodash.createCallback(callback,thisArg,3);
while(index--&&callback(array[index],index,array)){
n++;
}
}else{
n=callback;
if(n==null||thisArg){
return array?array[length-1]:undefined;
}
}
return slice(array,nativeMax(0,length-n));
}




























function lastIndexOf(array,value,fromIndex){
var index=array?array.length:0;
if(typeof fromIndex=='number'){
index=(fromIndex<0?nativeMax(0,index+fromIndex):nativeMin(fromIndex,index-1))+1;
}
while(index--){
if(array[index]===value){
return index;
}
}
return-1;
}


















function pull(array){
var args=arguments,
argsIndex=0,
argsLength=args.length,
length=array?array.length:0;

while(++argsIndex<argsLength){
var index=-1,
value=args[argsIndex];
while(++index<length){
if(array[index]===value){
splice.call(array,index--,1);
length--;
}
}
}
return array;
}

































function range(start,end,step){
start=+start||0;
step=typeof step=='number'?step:(+step||1);

if(end==null){
end=start;
start=0;
}


var index=-1,
length=nativeMax(0,ceil((end-start)/(step||1))),
result=Array(length);

while(++index<length){
result[index]=start;
start+=step;
}
return result;
}

































function remove(array,callback,thisArg){
var index=-1,
length=array?array.length:0,
result=[];

callback=lodash.createCallback(callback,thisArg,3);
while(++index<length){
var value=array[index];
if(callback(value,index,array)){
result.push(value);
splice.call(array,index--,1);
length--;
}
}
return result;
}





















































function rest(array,callback,thisArg){
if(typeof callback!='number'&&callback!=null){
var n=0,
index=-1,
length=array?array.length:0;

callback=lodash.createCallback(callback,thisArg,3);
while(++index<length&&callback(array[index],index,array)){
n++;
}
}else{
n=(callback==null||thisArg)?1:nativeMax(0,callback);
}
return slice(array,n);
}

















































function sortedIndex(array,value,callback,thisArg){
var low=0,
high=array?array.length:low;


callback=callback?lodash.createCallback(callback,thisArg,1):identity;
value=callback(value);

while(low<high){
var mid=(low+high)>>>1;
(callback(array[mid])<value)
?low=mid+1
:high=mid;
}
return low;
}















function union(array){
return baseUniq(baseFlatten(arguments,true,true));
}













































function uniq(array,isSorted,callback,thisArg){

if(typeof isSorted!='boolean'&&isSorted!=null){
thisArg=callback;
callback=(typeof isSorted!='function'&&thisArg&&thisArg[isSorted]===array)?null:isSorted;
isSorted=false;
}
if(callback!=null){
callback=lodash.createCallback(callback,thisArg,3);
}
return baseUniq(array,isSorted,callback);
}
















function without(array){
return baseDifference(array,slice(arguments,1));
}

















function zip(){
var array=arguments.length>1?arguments:arguments[0],
index=-1,
length=array?max(pluck(array,'length')):0,
result=Array(length<0?0:length);

while(++index<length){
result[index]=pluck(array,index);
}
return result;
}



















function zipObject(keys,values){
var index=-1,
length=keys?keys.length:0,
result={};

while(++index<length){
var key=keys[index];
if(values){
result[key]=values[index];
}else if(key){
result[key[0]]=key[1];
}
}
return result;
}



























function after(n,func){
if(!isFunction(func)){
throw new TypeError;
}
return function(){
if(--n<1){
return func.apply(this,arguments);
}
};
}























function bind(func,thisArg){
return arguments.length>2
?createWrapper(func,17,slice(arguments,2),null,thisArg)
:createWrapper(func,1,null,null,thisArg);
}

























function bindAll(object){
var funcs=arguments.length>1?baseFlatten(arguments,true,false,1):functions(object),
index=-1,
length=funcs.length;

while(++index<length){
var key=funcs[index];
object[key]=createWrapper(object[key],1,null,null,object);
}
return object;
}



































function bindKey(object,key){
return arguments.length>2
?createWrapper(key,19,slice(arguments,2),null,object)
:createWrapper(key,3,null,null,object);
}































function compose(){
var funcs=arguments,
length=funcs.length;

while(length--){
if(!isFunction(funcs[length])){
throw new TypeError;
}
}
return function(){
var args=arguments,
length=funcs.length;

while(length--){
args=[funcs[length].apply(this,args)];
}
return args[0];
};
}
































function createCallback(func,thisArg,argCount){
var type=typeof func;
if(func==null||type=='function'){
return baseCreateCallback(func,thisArg,argCount);
}

if(type!='object'){
return function(object){
return object[func];
};
}
var props=keys(func),
key=props[0],
a=func[key];


if(props.length==1&&a===a&&!isObject(a)){


return function(object){
var b=object[key];
return a===b&&(a!==0||(1/a==1/b));
};
}
return function(object){
var length=props.length,
result=false;

while(length--){
if(!(result=baseIsEqual(object[props[length]],func[props[length]],null,true))){
break;
}
}
return result;
};
}





























function curry(func,arity){
arity=typeof arity=='number'?arity:(+arity||func.length);
return createWrapper(func,4,null,null,null,arity);
}








































function debounce(func,wait,options){
var args,
maxTimeoutId,
result,
stamp,
thisArg,
timeoutId,
trailingCall,
lastCalled=0,
maxWait=false,
trailing=true;

if(!isFunction(func)){
throw new TypeError;
}
wait=nativeMax(0,wait)||0;
if(options===true){
var leading=true;
trailing=false;
}else if(isObject(options)){
leading=options.leading;
maxWait='maxWait'in options&&(nativeMax(wait,options.maxWait)||0);
trailing='trailing'in options?options.trailing:trailing;
}
var delayed=function(){
var remaining=wait-(now()-stamp);
if(remaining<=0){
if(maxTimeoutId){
clearTimeout(maxTimeoutId);
}
var isCalled=trailingCall;
maxTimeoutId=timeoutId=trailingCall=undefined;
if(isCalled){
lastCalled=now();
result=func.apply(thisArg,args);
if(!timeoutId&&!maxTimeoutId){
args=thisArg=null;
}
}
}else{
timeoutId=setTimeout(delayed,remaining);
}
};

var maxDelayed=function(){
if(timeoutId){
clearTimeout(timeoutId);
}
maxTimeoutId=timeoutId=trailingCall=undefined;
if(trailing||(maxWait!==wait)){
lastCalled=now();
result=func.apply(thisArg,args);
if(!timeoutId&&!maxTimeoutId){
args=thisArg=null;
}
}
};

return function(){
args=arguments;
stamp=now();
thisArg=this;
trailingCall=trailing&&(timeoutId||!leading);

if(maxWait===false){
var leadingCall=leading&&!timeoutId;
}else{
if(!maxTimeoutId&&!leading){
lastCalled=stamp;
}
var remaining=maxWait-(stamp-lastCalled),
isCalled=remaining<=0;

if(isCalled){
if(maxTimeoutId){
maxTimeoutId=clearTimeout(maxTimeoutId);
}
lastCalled=stamp;
result=func.apply(thisArg,args);
}
else if(!maxTimeoutId){
maxTimeoutId=setTimeout(maxDelayed,remaining);
}
}
if(isCalled&&timeoutId){
timeoutId=clearTimeout(timeoutId);
}
else if(!timeoutId&&wait!==maxWait){
timeoutId=setTimeout(delayed,wait);
}
if(leadingCall){
isCalled=true;
result=func.apply(thisArg,args);
}
if(isCalled&&!timeoutId&&!maxTimeoutId){
args=thisArg=null;
}
return result;
};
}
















function defer(func){
if(!isFunction(func)){
throw new TypeError;
}
var args=slice(arguments,1);
return setTimeout(function(){func.apply(undefined,args);},1);
}

if(setImmediate){
defer=function(func){
if(!isFunction(func)){
throw new TypeError;
}
return setImmediate.apply(context,arguments);
};
}


















function delay(func,wait){
if(!isFunction(func)){
throw new TypeError;
}
var args=slice(arguments,2);
return setTimeout(function(){func.apply(undefined,args);},wait);
}






































function memoize(func,resolver){
if(!isFunction(func)){
throw new TypeError;
}
var memoized=function(){
var cache=memoized.cache,
key=resolver?resolver.apply(this,arguments):keyPrefix+arguments[0];

return hasOwnProperty.call(cache,key)
?cache[key]
:(cache[key]=func.apply(this,arguments));
}
memoized.cache={};
return memoized;
}


















function once(func){
var ran,
result;

if(!isFunction(func)){
throw new TypeError;
}
return function(){
if(ran){
return result;
}
ran=true;
result=func.apply(this,arguments);


func=null;
return result;
};
}



















function partial(func){
return createWrapper(func,16,slice(arguments,1));
}




























function partialRight(func){
return createWrapper(func,32,null,slice(arguments,1));
}
































function throttle(func,wait,options){
var leading=true,
trailing=true;

if(!isFunction(func)){
throw new TypeError;
}
if(options===false){
leading=false;
}else if(isObject(options)){
leading='leading'in options?options.leading:leading;
trailing='trailing'in options?options.trailing:trailing;
}
debounceOptions.leading=leading;
debounceOptions.maxWait=wait;
debounceOptions.trailing=trailing;

return debounce(func,wait,debounceOptions);
}






















function wrap(value,wrapper){
return createWrapper(wrapper,16,[value]);
}

















function escape(string){
return string==null?'':String(string).replace(reUnescapedHtml,escapeHtmlChar);
}















function identity(value){
return value;
}
























function mixin(object,source){
var ctor=object,
isFunc=!source||isFunction(ctor);

if(!source){
ctor=lodashWrapper;
source=object;
object=lodash;
}
forEach(functions(source),function(methodName){
var func=object[methodName]=source[methodName];
if(isFunc){
ctor.prototype[methodName]=function(){
var value=this.__wrapped__,
args=[value];

push.apply(args,arguments);
var result=func.apply(object,args);
if(value&&typeof value=='object'&&value===result){
return this;
}
result=new ctor(result);
result.__chain__=this.__chain__;
return result;
};
}
});
}













function noConflict(){
context._=oldDash;
return this;
}













function noop(){

}




















var parseInt=nativeParseInt(whitespace+'08')==8?nativeParseInt:function(value,radix){

return nativeParseInt(isString(value)?value.replace(reLeadingSpacesAndZeros,''):value,radix||0);
};




























function random(min,max,floating){
var noMin=min==null,
noMax=max==null;

if(floating==null){
if(typeof min=='boolean'&&noMax){
floating=min;
min=1;
}
else if(!noMax&&typeof max=='boolean'){
floating=max;
noMax=true;
}
}
if(noMin&&noMax){
max=1;
}
min=+min||0;
if(noMax){
max=min;
min=0;
}else{
max=+max||0;
}
if(floating||min%1||max%1){
var rand=nativeRandom();
return nativeMin(min+(rand*(max-min+parseFloat('1e-'+((rand+'').length-1)))),max);
}
return baseRandom(min,max);
}




























function result(object,property){
if(object){
var value=object[property];
return isFunction(value)?object[property]():value;
}
}























































































function template(text,data,options){




var settings=lodash.templateSettings;
text=String(text||'');


options=defaults({},options,settings);

var imports=defaults({},options.imports,settings.imports),
importsKeys=keys(imports),
importsValues=values(imports);

var isEvaluating,
index=0,
interpolate=options.interpolate||reNoMatch,
source="__p += '";


var reDelimiters=RegExp(
(options.escape||reNoMatch).source+'|'+
interpolate.source+'|'+
(interpolate===reInterpolate?reEsTemplate:reNoMatch).source+'|'+
(options.evaluate||reNoMatch).source+'|$'
,'g');

text.replace(reDelimiters,function(match,escapeValue,interpolateValue,esTemplateValue,evaluateValue,offset){
interpolateValue||(interpolateValue=esTemplateValue);


source+=text.slice(index,offset).replace(reUnescapedString,escapeStringChar);


if(escapeValue){
source+="' +\n__e("+escapeValue+") +\n'";
}
if(evaluateValue){
isEvaluating=true;
source+="';\n"+evaluateValue+";\n__p += '";
}
if(interpolateValue){
source+="' +\n((__t = ("+interpolateValue+")) == null ? '' : __t) +\n'";
}
index=offset+match.length;



return match;
});

source+="';\n";



var variable=options.variable,
hasVariable=variable;

if(!hasVariable){
variable='obj';
source='with ('+variable+') {\n'+source+'\n}\n';
}

source=(isEvaluating?source.replace(reEmptyStringLeading,''):source)
.replace(reEmptyStringMiddle,'$1')
.replace(reEmptyStringTrailing,'$1;');


source='function('+variable+') {\n'+
(hasVariable?'':variable+' || ('+variable+' = {});\n')+
"var __t, __p = '', __e = _.escape"+
(isEvaluating
?', __j = Array.prototype.join;\n'+
"function print() { __p += __j.call(arguments, '') }\n"
:';\n'
)+
source+
'return __p\n}';



var sourceURL='\n/*\n//# sourceURL='+(options.sourceURL||'/lodash/template/source['+(templateCounter++)+']')+'\n*/';

try{
var result=Function(importsKeys,'return '+source+sourceURL).apply(undefined,importsValues);
}catch(e){
e.source=source;
throw e;
}
if(data){
return result(data);
}



result.source=source;
return result;
}
























function times(n,callback,thisArg){
n=(n=+n)>-1?n:0;
var index=-1,
result=Array(n);

callback=baseCreateCallback(callback,thisArg,1);
while(++index<n){
result[index]=callback(index);
}
return result;
}
















function unescape(string){
return string==null?'':String(string).replace(reEscapedHtml,unescapeHtmlChar);
}

















function uniqueId(prefix){
var id=++idCounter;
return String(prefix==null?'':prefix)+id;
}



























function chain(value){
value=new lodashWrapper(value);
value.__chain__=true;
return value;
}





















function tap(value,interceptor){
interceptor(value);
return value;
}


























function wrapperChain(){
this.__chain__=true;
return this;
}













function wrapperToString(){
return String(this.__wrapped__);
}














function wrapperValueOf(){
return this.__wrapped__;
}




lodash.after=after;
lodash.assign=assign;
lodash.at=at;
lodash.bind=bind;
lodash.bindAll=bindAll;
lodash.bindKey=bindKey;
lodash.chain=chain;
lodash.compact=compact;
lodash.compose=compose;
lodash.countBy=countBy;
lodash.create=create;
lodash.createCallback=createCallback;
lodash.curry=curry;
lodash.debounce=debounce;
lodash.defaults=defaults;
lodash.defer=defer;
lodash.delay=delay;
lodash.difference=difference;
lodash.filter=filter;
lodash.flatten=flatten;
lodash.forEach=forEach;
lodash.forEachRight=forEachRight;
lodash.forIn=forIn;
lodash.forInRight=forInRight;
lodash.forOwn=forOwn;
lodash.forOwnRight=forOwnRight;
lodash.functions=functions;
lodash.groupBy=groupBy;
lodash.indexBy=indexBy;
lodash.initial=initial;
lodash.intersection=intersection;
lodash.invert=invert;
lodash.invoke=invoke;
lodash.keys=keys;
lodash.map=map;
lodash.max=max;
lodash.memoize=memoize;
lodash.merge=merge;
lodash.min=min;
lodash.omit=omit;
lodash.once=once;
lodash.pairs=pairs;
lodash.partial=partial;
lodash.partialRight=partialRight;
lodash.pick=pick;
lodash.pluck=pluck;
lodash.pull=pull;
lodash.range=range;
lodash.reject=reject;
lodash.remove=remove;
lodash.rest=rest;
lodash.shuffle=shuffle;
lodash.sortBy=sortBy;
lodash.tap=tap;
lodash.throttle=throttle;
lodash.times=times;
lodash.toArray=toArray;
lodash.transform=transform;
lodash.union=union;
lodash.uniq=uniq;
lodash.values=values;
lodash.where=where;
lodash.without=without;
lodash.wrap=wrap;
lodash.zip=zip;
lodash.zipObject=zipObject;


lodash.collect=map;
lodash.drop=rest;
lodash.each=forEach;
lodash.eachRight=forEachRight;
lodash.extend=assign;
lodash.methods=functions;
lodash.object=zipObject;
lodash.select=filter;
lodash.tail=rest;
lodash.unique=uniq;
lodash.unzip=zip;


mixin(lodash);




lodash.clone=clone;
lodash.cloneDeep=cloneDeep;
lodash.contains=contains;
lodash.escape=escape;
lodash.every=every;
lodash.find=find;
lodash.findIndex=findIndex;
lodash.findKey=findKey;
lodash.findLast=findLast;
lodash.findLastIndex=findLastIndex;
lodash.findLastKey=findLastKey;
lodash.has=has;
lodash.identity=identity;
lodash.indexOf=indexOf;
lodash.isArguments=isArguments;
lodash.isArray=isArray;
lodash.isBoolean=isBoolean;
lodash.isDate=isDate;
lodash.isElement=isElement;
lodash.isEmpty=isEmpty;
lodash.isEqual=isEqual;
lodash.isFinite=isFinite;
lodash.isFunction=isFunction;
lodash.isNaN=isNaN;
lodash.isNull=isNull;
lodash.isNumber=isNumber;
lodash.isObject=isObject;
lodash.isPlainObject=isPlainObject;
lodash.isRegExp=isRegExp;
lodash.isString=isString;
lodash.isUndefined=isUndefined;
lodash.lastIndexOf=lastIndexOf;
lodash.mixin=mixin;
lodash.noConflict=noConflict;
lodash.noop=noop;
lodash.parseInt=parseInt;
lodash.random=random;
lodash.reduce=reduce;
lodash.reduceRight=reduceRight;
lodash.result=result;
lodash.runInContext=runInContext;
lodash.size=size;
lodash.some=some;
lodash.sortedIndex=sortedIndex;
lodash.template=template;
lodash.unescape=unescape;
lodash.uniqueId=uniqueId;


lodash.all=every;
lodash.any=some;
lodash.detect=find;
lodash.findWhere=find;
lodash.foldl=reduce;
lodash.foldr=reduceRight;
lodash.include=contains;
lodash.inject=reduce;

forOwn(lodash,function(func,methodName){
if(!lodash.prototype[methodName]){
lodash.prototype[methodName]=function(){
var args=[this.__wrapped__],
chainAll=this.__chain__;

push.apply(args,arguments);
var result=func.apply(lodash,args);
return chainAll
?new lodashWrapper(result,chainAll)
:result;
};
}
});




lodash.first=first;
lodash.last=last;
lodash.sample=sample;


lodash.take=first;
lodash.head=first;

forOwn(lodash,function(func,methodName){
var callbackable=methodName!=='sample';
if(!lodash.prototype[methodName]){
lodash.prototype[methodName]=function(n,guard){
var chainAll=this.__chain__,
result=func(this.__wrapped__,n,guard);

return!chainAll&&(n==null||(guard&&!(callbackable&&typeof n=='function')))
?result
:new lodashWrapper(result,chainAll);
};
}
});










lodash.VERSION='2.3.0';


lodash.prototype.chain=wrapperChain;
lodash.prototype.toString=wrapperToString;
lodash.prototype.value=wrapperValueOf;
lodash.prototype.valueOf=wrapperValueOf;


baseEach(['join','pop','shift'],function(methodName){
var func=arrayRef[methodName];
lodash.prototype[methodName]=function(){
var chainAll=this.__chain__,
result=func.apply(this.__wrapped__,arguments);

return chainAll
?new lodashWrapper(result,chainAll)
:result;
};
});


baseEach(['push','reverse','sort','unshift'],function(methodName){
var func=arrayRef[methodName];
lodash.prototype[methodName]=function(){
func.apply(this.__wrapped__,arguments);
return this;
};
});


baseEach(['concat','slice','splice'],function(methodName){
var func=arrayRef[methodName];
lodash.prototype[methodName]=function(){
return new lodashWrapper(func.apply(this.__wrapped__,arguments),this.__chain__);
};
});



if(!support.spliceObjects){
baseEach(['pop','shift','splice'],function(methodName){
var func=arrayRef[methodName],
isSplice=methodName=='splice';

lodash.prototype[methodName]=function(){
var chainAll=this.__chain__,
value=this.__wrapped__,
result=func.apply(value,arguments);

if(value.length===0){
delete value[0];
}
return(chainAll||isSplice)
?new lodashWrapper(result,chainAll)
:result;
};
});
}

return lodash;
}




var _=runInContext();


if(typeof define=='function'&&typeof define.amd=='object'&&define.amd){




root._=_;



define(function(){
return _;
});
}

else if(freeExports&&freeModule){

if(moduleExports){
(freeModule.exports=_)._=_;
}

else{
freeExports._=_;
}
}
else{

root._=_;
}
}.call(this));







(function(module){
if(typeof window.define==='function'&&window.define.amd){

window.define(["underscore"],module);
}else{
module(window._);
}
}(function(_){
var applyToPrototype=function(prototype,methods){
for(var i=0;i<methods.length;i++){
(function(method){
if(!prototype[method]){
prototype[method]=function(){
var args=Array.prototype.slice.call(arguments)||[];
args.unshift(this);
return _[method].apply(this,args);
};
}
})(methods[i]);
}
};

applyToPrototype(Function.prototype,["bind"]);
applyToPrototype(Array.prototype,["forEach","map","reduce","reduceRight","filter","every","some","indexOf"]);
}));









(function(){






var root=this;



var previousBackbone=root.Backbone;


var array=[];
var push=array.push;
var slice=array.slice;
var splice=array.splice;



var Backbone;
if(typeof exports!=='undefined'){
Backbone=exports;
}else{
Backbone=root.Backbone={};
}


Backbone.VERSION='1.1.0';


var _=root._;
if(!_&&(typeof require!=='undefined'))_=require('underscore');



Backbone.$=root.jQuery||root.Zepto||root.ender||root.$;



Backbone.noConflict=function(){
root.Backbone=previousBackbone;
return this;
};




Backbone.emulateHTTP=false;





Backbone.emulateJSON=false;














var Events=Backbone.Events={



on:function(name,callback,context){
if(!eventsApi(this,'on',name,[callback,context])||!callback)return this;
this._events||(this._events={});
var events=this._events[name]||(this._events[name]=[]);
events.push({callback:callback,context:context,ctx:context||this});
return this;
},



once:function(name,callback,context){
if(!eventsApi(this,'once',name,[callback,context])||!callback)return this;
var self=this;
var once=_.once(function(){
self.off(name,once);
callback.apply(this,arguments);
});
once._callback=callback;
return this.on(name,once,context);
},





off:function(name,callback,context){
var retain,ev,events,names,i,l,j,k;
if(!this._events||!eventsApi(this,'off',name,[callback,context]))return this;
if(!name&&!callback&&!context){
this._events={};
return this;
}
names=name?[name]:_.keys(this._events);
for(i=0,l=names.length;i<l;i++){
name=names[i];
if(events=this._events[name]){
this._events[name]=retain=[];
if(callback||context){
for(j=0,k=events.length;j<k;j++){
ev=events[j];
if((callback&&callback!==ev.callback&&callback!==ev.callback._callback)||
(context&&context!==ev.context)){
retain.push(ev);
}
}
}
if(!retain.length)delete this._events[name];
}
}

return this;
},





trigger:function(name){
if(!this._events)return this;
var args=slice.call(arguments,1);
if(!eventsApi(this,'trigger',name,args))return this;
var events=this._events[name];
var allEvents=this._events.all;
if(events)triggerEvents(events,args);
if(allEvents)triggerEvents(allEvents,arguments);
return this;
},



stopListening:function(obj,name,callback){
var listeningTo=this._listeningTo;
if(!listeningTo)return this;
var remove=!name&&!callback;
if(!callback&&typeof name==='object')callback=this;
if(obj)(listeningTo={})[obj._listenId]=obj;
for(var id in listeningTo){
obj=listeningTo[id];
obj.off(name,callback,this);
if(remove||_.isEmpty(obj._events))delete this._listeningTo[id];
}
return this;
}

};


var eventSplitter=/\s+/;




var eventsApi=function(obj,action,name,rest){
if(!name)return true;


if(typeof name==='object'){
for(var key in name){
obj[action].apply(obj,[key,name[key]].concat(rest));
}
return false;
}


if(eventSplitter.test(name)){
var names=name.split(eventSplitter);
for(var i=0,l=names.length;i<l;i++){
obj[action].apply(obj,[names[i]].concat(rest));
}
return false;
}

return true;
};




var triggerEvents=function(events,args){
var ev,i=-1,l=events.length,a1=args[0],a2=args[1],a3=args[2];
switch(args.length){
case 0:while(++i<l)(ev=events[i]).callback.call(ev.ctx);return;
case 1:while(++i<l)(ev=events[i]).callback.call(ev.ctx,a1);return;
case 2:while(++i<l)(ev=events[i]).callback.call(ev.ctx,a1,a2);return;
case 3:while(++i<l)(ev=events[i]).callback.call(ev.ctx,a1,a2,a3);return;
default:while(++i<l)(ev=events[i]).callback.apply(ev.ctx,args);
}
};

var listenMethods={listenTo:'on',listenToOnce:'once'};




_.each(listenMethods,function(implementation,method){
Events[method]=function(obj,name,callback){
var listeningTo=this._listeningTo||(this._listeningTo={});
var id=obj._listenId||(obj._listenId=_.uniqueId('l'));
listeningTo[id]=obj;
if(!callback&&typeof name==='object')callback=this;
obj[implementation](name,callback,this);
return this;
};
});


Events.bind=Events.on;
Events.unbind=Events.off;



_.extend(Backbone,Events);











var Model=Backbone.Model=function(attributes,options){
var attrs=attributes||{};
options||(options={});
this.cid=_.uniqueId('c');
this.attributes={};
if(options.collection)this.collection=options.collection;
if(options.parse)attrs=this.parse(attrs,options)||{};
attrs=_.defaults({},attrs,_.result(this,'defaults'));
this.set(attrs,options);
this.changed={};
this.initialize.apply(this,arguments);
};


_.extend(Model.prototype,Events,{


changed:null,


validationError:null,



idAttribute:'id',



initialize:function(){},


toJSON:function(options){
return _.clone(this.attributes);
},



sync:function(){
return Backbone.sync.apply(this,arguments);
},


get:function(attr){
return this.attributes[attr];
},


escape:function(attr){
return _.escape(this.get(attr));
},



has:function(attr){
return this.get(attr)!=null;
},




set:function(key,val,options){
var attr,attrs,unset,changes,silent,changing,prev,current;
if(key==null)return this;


if(typeof key==='object'){
attrs=key;
options=val;
}else{
(attrs={})[key]=val;
}

options||(options={});


if(!this._validate(attrs,options))return false;


unset=options.unset;
silent=options.silent;
changes=[];
changing=this._changing;
this._changing=true;

if(!changing){
this._previousAttributes=_.clone(this.attributes);
this.changed={};
}
current=this.attributes,prev=this._previousAttributes;


if(this.idAttribute in attrs)this.id=attrs[this.idAttribute];


for(attr in attrs){
val=attrs[attr];
if(!_.isEqual(current[attr],val))changes.push(attr);
if(!_.isEqual(prev[attr],val)){
this.changed[attr]=val;
}else{
delete this.changed[attr];
}
unset?delete current[attr]:current[attr]=val;
}


if(!silent){
if(changes.length)this._pending=true;
for(var i=0,l=changes.length;i<l;i++){
this.trigger('change:'+changes[i],this,current[changes[i]],options);
}
}



if(changing)return this;
if(!silent){
while(this._pending){
this._pending=false;
this.trigger('change',this,options);
}
}
this._pending=false;
this._changing=false;
return this;
},



unset:function(attr,options){
return this.set(attr,void 0,_.extend({},options,{unset:true}));
},


clear:function(options){
var attrs={};
for(var key in this.attributes)attrs[key]=void 0;
return this.set(attrs,_.extend({},options,{unset:true}));
},



hasChanged:function(attr){
if(attr==null)return!_.isEmpty(this.changed);
return _.has(this.changed,attr);
},







changedAttributes:function(diff){
if(!diff)return this.hasChanged()?_.clone(this.changed):false;
var val,changed=false;
var old=this._changing?this._previousAttributes:this.attributes;
for(var attr in diff){
if(_.isEqual(old[attr],(val=diff[attr])))continue;
(changed||(changed={}))[attr]=val;
}
return changed;
},



previous:function(attr){
if(attr==null||!this._previousAttributes)return null;
return this._previousAttributes[attr];
},



previousAttributes:function(){
return _.clone(this._previousAttributes);
},




fetch:function(options){
options=options?_.clone(options):{};
if(options.parse===void 0)options.parse=true;
var model=this;
var success=options.success;
options.success=function(resp){
if(!model.set(model.parse(resp,options),options))return false;
if(success)success(model,resp,options);
model.trigger('sync',model,resp,options);
};
wrapError(this,options);
return this.sync('read',this,options);
},




save:function(key,val,options){
var attrs,method,xhr,attributes=this.attributes;


if(key==null||typeof key==='object'){
attrs=key;
options=val;
}else{
(attrs={})[key]=val;
}

options=_.extend({validate:true},options);




if(attrs&&!options.wait){
if(!this.set(attrs,options))return false;
}else{
if(!this._validate(attrs,options))return false;
}


if(attrs&&options.wait){
this.attributes=_.extend({},attributes,attrs);
}



if(options.parse===void 0)options.parse=true;
var model=this;
var success=options.success;
options.success=function(resp){

model.attributes=attributes;
var serverAttrs=model.parse(resp,options);
if(options.wait)serverAttrs=_.extend(attrs||{},serverAttrs);
if(_.isObject(serverAttrs)&&!model.set(serverAttrs,options)){
return false;
}
if(success)success(model,resp,options);
model.trigger('sync',model,resp,options);
};
wrapError(this,options);

method=this.isNew()?'create':(options.patch?'patch':'update');
if(method==='patch')options.attrs=attrs;
xhr=this.sync(method,this,options);


if(attrs&&options.wait)this.attributes=attributes;

return xhr;
},




destroy:function(options){
options=options?_.clone(options):{};
var model=this;
var success=options.success;

var destroy=function(){
model.trigger('destroy',model,model.collection,options);
};

options.success=function(resp){
if(options.wait||model.isNew())destroy();
if(success)success(model,resp,options);
if(!model.isNew())model.trigger('sync',model,resp,options);
};

if(this.isNew()){
options.success();
return false;
}
wrapError(this,options);

var xhr=this.sync('delete',this,options);
if(!options.wait)destroy();
return xhr;
},




url:function(){
var base=_.result(this,'urlRoot')||_.result(this.collection,'url')||urlError();
if(this.isNew())return base;
return base+(base.charAt(base.length-1)==='/'?'':'/')+encodeURIComponent(this.id);
},



parse:function(resp,options){
return resp;
},


clone:function(){
return new this.constructor(this.attributes);
},


isNew:function(){
return this.id==null;
},


isValid:function(options){
return this._validate({},_.extend(options||{},{validate:true}));
},



_validate:function(attrs,options){
if(!options.validate||!this.validate)return true;
attrs=_.extend({},this.attributes,attrs);
var error=this.validationError=this.validate(attrs,options)||null;
if(!error)return true;
this.trigger('invalid',this,error,_.extend(options,{validationError:error}));
return false;
}

});


var modelMethods=['keys','values','pairs','invert','pick','omit'];


_.each(modelMethods,function(method){
Model.prototype[method]=function(){
var args=slice.call(arguments);
args.unshift(this.attributes);
return _[method].apply(_,args);
};
});














var Collection=Backbone.Collection=function(models,options){
options||(options={});
if(options.model)this.model=options.model;
if(options.comparator!==void 0)this.comparator=options.comparator;
this._reset();
this.initialize.apply(this,arguments);
if(models)this.reset(models,_.extend({silent:true},options));
};


var setOptions={add:true,remove:true,merge:true};
var addOptions={add:true,remove:false};


_.extend(Collection.prototype,Events,{



model:Model,



initialize:function(){},



toJSON:function(options){
return this.map(function(model){return model.toJSON(options);});
},


sync:function(){
return Backbone.sync.apply(this,arguments);
},


add:function(models,options){
return this.set(models,_.extend({merge:false},options,addOptions));
},


remove:function(models,options){
var singular=!_.isArray(models);
models=singular?[models]:_.clone(models);
options||(options={});
var i,l,index,model;
for(i=0,l=models.length;i<l;i++){
model=models[i]=this.get(models[i]);
if(!model)continue;
delete this._byId[model.id];
delete this._byId[model.cid];
index=this.indexOf(model);
this.models.splice(index,1);
this.length--;
if(!options.silent){
options.index=index;
model.trigger('remove',model,this,options);
}
this._removeReference(model);
}
return singular?models[0]:models;
},





set:function(models,options){
options=_.defaults({},options,setOptions);
if(options.parse)models=this.parse(models,options);
var singular=!_.isArray(models);
models=singular?(models?[models]:[]):_.clone(models);
var i,l,id,model,attrs,existing,sort;
var at=options.at;
var targetModel=this.model;
var sortable=this.comparator&&(at==null)&&options.sort!==false;
var sortAttr=_.isString(this.comparator)?this.comparator:null;
var toAdd=[],toRemove=[],modelMap={};
var add=options.add,merge=options.merge,remove=options.remove;
var order=!sortable&&add&&remove?[]:false;



for(i=0,l=models.length;i<l;i++){
attrs=models[i];
if(attrs instanceof Model){
id=model=attrs;
}else{
id=attrs[targetModel.prototype.idAttribute];
}



if(existing=this.get(id)){
if(remove)modelMap[existing.cid]=true;
if(merge){
attrs=attrs===model?model.attributes:attrs;
if(options.parse)attrs=existing.parse(attrs,options);
existing.set(attrs,options);
if(sortable&&!sort&&existing.hasChanged(sortAttr))sort=true;
}
models[i]=existing;


}else if(add){
model=models[i]=this._prepareModel(attrs,options);
if(!model)continue;
toAdd.push(model);



model.on('all',this._onModelEvent,this);
this._byId[model.cid]=model;
if(model.id!=null)this._byId[model.id]=model;
}
if(order)order.push(existing||model);
}


if(remove){
for(i=0,l=this.length;i<l;++i){
if(!modelMap[(model=this.models[i]).cid])toRemove.push(model);
}
if(toRemove.length)this.remove(toRemove,options);
}


if(toAdd.length||(order&&order.length)){
if(sortable)sort=true;
this.length+=toAdd.length;
if(at!=null){
for(i=0,l=toAdd.length;i<l;i++){
this.models.splice(at+i,0,toAdd[i]);
}
}else{
if(order)this.models.length=0;
var orderedModels=order||toAdd;
for(i=0,l=orderedModels.length;i<l;i++){
this.models.push(orderedModels[i]);
}
}
}


if(sort)this.sort({silent:true});


if(!options.silent){
for(i=0,l=toAdd.length;i<l;i++){
(model=toAdd[i]).trigger('add',model,this,options);
}
if(sort||(order&&order.length))this.trigger('sort',this,options);
}


return singular?models[0]:models;
},





reset:function(models,options){
options||(options={});
for(var i=0,l=this.models.length;i<l;i++){
this._removeReference(this.models[i]);
}
options.previousModels=this.models;
this._reset();
models=this.add(models,_.extend({silent:true},options));
if(!options.silent)this.trigger('reset',this,options);
return models;
},


push:function(model,options){
return this.add(model,_.extend({at:this.length},options));
},


pop:function(options){
var model=this.at(this.length-1);
this.remove(model,options);
return model;
},


unshift:function(model,options){
return this.add(model,_.extend({at:0},options));
},


shift:function(options){
var model=this.at(0);
this.remove(model,options);
return model;
},


slice:function(){
return slice.apply(this.models,arguments);
},


get:function(obj){
if(obj==null)return void 0;
return this._byId[obj.id]||this._byId[obj.cid]||this._byId[obj];
},


at:function(index){
return this.models[index];
},



where:function(attrs,first){
if(_.isEmpty(attrs))return first?void 0:[];
return this[first?'find':'filter'](function(model){
for(var key in attrs){
if(attrs[key]!==model.get(key))return false;
}
return true;
});
},



findWhere:function(attrs){
return this.where(attrs,true);
},




sort:function(options){
if(!this.comparator)throw new Error('Cannot sort a set without a comparator');
options||(options={});


if(_.isString(this.comparator)||this.comparator.length===1){
this.models=this.sortBy(this.comparator,this);
}else{
this.models.sort(_.bind(this.comparator,this));
}

if(!options.silent)this.trigger('sort',this,options);
return this;
},


pluck:function(attr){
return _.invoke(this.models,'get',attr);
},




fetch:function(options){
options=options?_.clone(options):{};
if(options.parse===void 0)options.parse=true;
var success=options.success;
var collection=this;
options.success=function(resp){
var method=options.reset?'reset':'set';
collection[method](resp,options);
if(success)success(collection,resp,options);
collection.trigger('sync',collection,resp,options);
};
wrapError(this,options);
return this.sync('read',this,options);
},




create:function(model,options){
options=options?_.clone(options):{};
if(!(model=this._prepareModel(model,options)))return false;
if(!options.wait)this.add(model,options);
var collection=this;
var success=options.success;
options.success=function(model,resp,options){
if(options.wait)collection.add(model,options);
if(success)success(model,resp,options);
};
model.save(null,options);
return model;
},



parse:function(resp,options){
return resp;
},


clone:function(){
return new this.constructor(this.models);
},



_reset:function(){
this.length=0;
this.models=[];
this._byId={};
},



_prepareModel:function(attrs,options){
if(attrs instanceof Model){
if(!attrs.collection)attrs.collection=this;
return attrs;
}
options=options?_.clone(options):{};
options.collection=this;
var model=new this.model(attrs,options);
if(!model.validationError)return model;
this.trigger('invalid',this,model.validationError,options);
return false;
},


_removeReference:function(model){
if(this===model.collection)delete model.collection;
model.off('all',this._onModelEvent,this);
},





_onModelEvent:function(event,model,collection,options){
if((event==='add'||event==='remove')&&collection!==this)return;
if(event==='destroy')this.remove(model,options);
if(model&&event==='change:'+model.idAttribute){
delete this._byId[model.previous(model.idAttribute)];
if(model.id!=null)this._byId[model.id]=model;
}
this.trigger.apply(this,arguments);
}

});




var methods=['forEach','each','map','collect','reduce','foldl',
'inject','reduceRight','foldr','find','detect','filter','select',
'reject','every','all','some','any','include','contains','invoke',
'max','min','toArray','size','first','head','take','initial','rest',
'tail','drop','last','without','difference','indexOf','shuffle',
'lastIndexOf','isEmpty','chain'];


_.each(methods,function(method){
Collection.prototype[method]=function(){
var args=slice.call(arguments);
args.unshift(this.models);
return _[method].apply(_,args);
};
});


var attributeMethods=['groupBy','countBy','sortBy'];


_.each(attributeMethods,function(method){
Collection.prototype[method]=function(value,context){
var iterator=_.isFunction(value)?value:function(model){
return model.get(value);
};
return _[method](this.models,iterator,context);
};
});














var View=Backbone.View=function(options){
this.cid=_.uniqueId('view');
options||(options={});
_.extend(this,_.pick(options,viewOptions));
this._ensureElement();
this.initialize.apply(this,arguments);
this.delegateEvents();
};


var delegateEventSplitter=/^(\S+)\s*(.*)$/;


var viewOptions=['model','collection','el','id','attributes','className','tagName','events'];


_.extend(View.prototype,Events,{


tagName:'div',



$:function(selector){
return this.$el.find(selector);
},



initialize:function(){},




render:function(){
return this;
},



remove:function(){
this.$el.remove();
this.stopListening();
return this;
},



setElement:function(element,delegate){
if(this.$el)this.undelegateEvents();
this.$el=element instanceof Backbone.$?element:Backbone.$(element);
this.el=this.$el[0];
if(delegate!==false)this.delegateEvents();
return this;
},
















delegateEvents:function(events){
if(!(events||(events=_.result(this,'events'))))return this;
this.undelegateEvents();
for(var key in events){
var method=events[key];
if(!_.isFunction(method))method=this[events[key]];
if(!method)continue;

var match=key.match(delegateEventSplitter);
var eventName=match[1],selector=match[2];
method=_.bind(method,this);
eventName+='.delegateEvents'+this.cid;
if(selector===''){
this.$el.on(eventName,method);
}else{
this.$el.on(eventName,selector,method);
}
}
return this;
},




undelegateEvents:function(){
this.$el.off('.delegateEvents'+this.cid);
return this;
},





_ensureElement:function(){
if(!this.el){
var attrs=_.extend({},_.result(this,'attributes'));
if(this.id)attrs.id=_.result(this,'id');
if(this.className)attrs['class']=_.result(this,'className');
var $el=Backbone.$('<'+_.result(this,'tagName')+'>').attr(attrs);
this.setElement($el,false);
}else{
this.setElement(_.result(this,'el'),false);
}
}

});



















Backbone.sync=function(method,model,options){
var type=methodMap[method];


_.defaults(options||(options={}),{
emulateHTTP:Backbone.emulateHTTP,
emulateJSON:Backbone.emulateJSON
});


var params={type:type,dataType:'json'};


if(!options.url){
params.url=_.result(model,'url')||urlError();
}


if(options.data==null&&model&&(method==='create'||method==='update'||method==='patch')){
params.contentType='application/json';
params.data=JSON.stringify(options.attrs||model.toJSON(options));
}


if(options.emulateJSON){
params.contentType='application/x-www-form-urlencoded';
params.data=params.data?{model:params.data}:{};
}



if(options.emulateHTTP&&(type==='PUT'||type==='DELETE'||type==='PATCH')){
params.type='POST';
if(options.emulateJSON)params.data._method=type;
var beforeSend=options.beforeSend;
options.beforeSend=function(xhr){
xhr.setRequestHeader('X-HTTP-Method-Override',type);
if(beforeSend)return beforeSend.apply(this,arguments);
};
}


if(params.type!=='GET'&&!options.emulateJSON){
params.processData=false;
}




if(params.type==='PATCH'&&noXhrPatch){
params.xhr=function(){
return new ActiveXObject("Microsoft.XMLHTTP");
};
}


var xhr=options.xhr=Backbone.ajax(_.extend(params,options));
model.trigger('request',model,xhr,options);
return xhr;
};

var noXhrPatch=typeof window!=='undefined'&&!!window.ActiveXObject&&!(window.XMLHttpRequest&&(new XMLHttpRequest).dispatchEvent);


var methodMap={
'create':'POST',
'update':'PUT',
'patch':'PATCH',
'delete':'DELETE',
'read':'GET'
};



Backbone.ajax=function(){
return Backbone.$.ajax.apply(Backbone.$,arguments);
};






var Router=Backbone.Router=function(options){
options||(options={});
if(options.routes)this.routes=options.routes;
this._bindRoutes();
this.initialize.apply(this,arguments);
};



var optionalParam=/\((.*?)\)/g;
var namedParam=/(\(\?)?:\w+/g;
var splatParam=/\*\w+/g;
var escapeRegExp=/[\-{}\[\]+?.,\\\^$|#\s]/g;


_.extend(Router.prototype,Events,{



initialize:function(){},







route:function(route,name,callback){
if(!_.isRegExp(route))route=this._routeToRegExp(route);
if(_.isFunction(name)){
callback=name;
name='';
}
if(!callback)callback=this[name];
var router=this;
Backbone.history.route(route,function(fragment){
var args=router._extractParameters(route,fragment);
callback&&callback.apply(router,args);
router.trigger.apply(router,['route:'+name].concat(args));
router.trigger('route',name,args);
Backbone.history.trigger('route',router,name,args);
});
return this;
},


navigate:function(fragment,options){
Backbone.history.navigate(fragment,options);
return this;
},




_bindRoutes:function(){
if(!this.routes)return;
this.routes=_.result(this,'routes');
var route,routes=_.keys(this.routes);
while((route=routes.pop())!=null){
this.route(route,this.routes[route]);
}
},



_routeToRegExp:function(route){
route=route.replace(escapeRegExp,'\\$&')
.replace(optionalParam,'(?:$1)?')
.replace(namedParam,function(match,optional){
return optional?match:'([^\/]+)';
})
.replace(splatParam,'(.*?)');
return new RegExp('^'+route+'$');
},




_extractParameters:function(route,fragment){
var params=route.exec(fragment).slice(1);
return _.map(params,function(param){
return param?decodeURIComponent(param):null;
});
}

});









var History=Backbone.History=function(){
this.handlers=[];
_.bindAll(this,'checkUrl');


if(typeof window!=='undefined'){
this.location=window.location;
this.history=window.history;
}
};


var routeStripper=/^[#\/]|\s+$/g;


var rootStripper=/^\/+|\/+$/g;


var isExplorer=/msie [\w.]+/;


var trailingSlash=/\/$/;


var pathStripper=/[?#].*$/;


History.started=false;


_.extend(History.prototype,Events,{



interval:50,



getHash:function(window){
var match=(window||this).location.href.match(/#(.*)$/);
return match?match[1]:'';
},



getFragment:function(fragment,forcePushState){
if(fragment==null){
if(this._hasPushState||!this._wantsHashChange||forcePushState){
fragment=this.location.pathname;
var root=this.root.replace(trailingSlash,'');
if(!fragment.indexOf(root))fragment=fragment.slice(root.length);
}else{
fragment=this.getHash();
}
}
return fragment.replace(routeStripper,'');
},



start:function(options){
if(History.started)throw new Error("Backbone.history has already been started");
History.started=true;



this.options=_.extend({root:'/'},this.options,options);
this.root=this.options.root;
this._wantsHashChange=this.options.hashChange!==false;
this._wantsPushState=!!this.options.pushState;
this._hasPushState=!!(this.options.pushState&&this.history&&this.history.pushState);
var fragment=this.getFragment();
var docMode=document.documentMode;
var oldIE=(isExplorer.exec(navigator.userAgent.toLowerCase())&&(!docMode||docMode<=7));


this.root=('/'+this.root+'/').replace(rootStripper,'/');

if(oldIE&&this._wantsHashChange){
this.iframe=Backbone.$('<iframe src="javascript:0" tabindex="-1" />').hide().appendTo('body')[0].contentWindow;
this.navigate(fragment);
}



if(this._hasPushState){
Backbone.$(window).on('popstate',this.checkUrl);
}else if(this._wantsHashChange&&('onhashchange'in window)&&!oldIE){
Backbone.$(window).on('hashchange',this.checkUrl);
}else if(this._wantsHashChange){
this._checkUrlInterval=setInterval(this.checkUrl,this.interval);
}



this.fragment=fragment;
var loc=this.location;
var atRoot=loc.pathname.replace(/[^\/]$/,'$&/')===this.root;



if(this._wantsHashChange&&this._wantsPushState){



if(!this._hasPushState&&!atRoot){
this.fragment=this.getFragment(null,true);
this.location.replace(this.root+this.location.search+'#'+this.fragment);

return true;



}else if(this._hasPushState&&atRoot&&loc.hash){
this.fragment=this.getHash().replace(routeStripper,'');
this.history.replaceState({},document.title,this.root+this.fragment+loc.search);
}

}

if(!this.options.silent)return this.loadUrl();
},



stop:function(){
Backbone.$(window).off('popstate',this.checkUrl).off('hashchange',this.checkUrl);
clearInterval(this._checkUrlInterval);
History.started=false;
},



route:function(route,callback){
this.handlers.unshift({route:route,callback:callback});
},



checkUrl:function(e){
var current=this.getFragment();
if(current===this.fragment&&this.iframe){
current=this.getFragment(this.getHash(this.iframe));
}
if(current===this.fragment)return false;
if(this.iframe)this.navigate(current);
this.loadUrl();
},




loadUrl:function(fragment){
fragment=this.fragment=this.getFragment(fragment);
return _.any(this.handlers,function(handler){
if(handler.route.test(fragment)){
handler.callback(fragment);
return true;
}
});
},








navigate:function(fragment,options){
if(!History.started)return false;
if(!options||options===true)options={trigger:!!options};

var url=this.root+(fragment=this.getFragment(fragment||''));


fragment=fragment.replace(pathStripper,'');

if(this.fragment===fragment)return;
this.fragment=fragment;


if(fragment===''&&url!=='/')url=url.slice(0,-1);


if(this._hasPushState){
this.history[options.replace?'replaceState':'pushState']({},document.title,url);



}else if(this._wantsHashChange){
this._updateHash(this.location,fragment,options.replace);
if(this.iframe&&(fragment!==this.getFragment(this.getHash(this.iframe)))){



if(!options.replace)this.iframe.document.open().close();
this._updateHash(this.iframe.location,fragment,options.replace);
}



}else{
return this.location.assign(url);
}
if(options.trigger)return this.loadUrl(fragment);
},



_updateHash:function(location,fragment,replace){
if(replace){
var href=location.href.replace(/(javascript:|#).*$/,'');
location.replace(href+'#'+fragment);
}else{

location.hash='#'+fragment;
}
}

});


Backbone.history=new History;







var extend=function(protoProps,staticProps){
var parent=this;
var child;




if(protoProps&&_.has(protoProps,'constructor')){
child=protoProps.constructor;
}else{
child=function(){return parent.apply(this,arguments);};
}


_.extend(child,parent,staticProps);



var Surrogate=function(){this.constructor=child;};
Surrogate.prototype=parent.prototype;
child.prototype=new Surrogate;



if(protoProps)_.extend(child.prototype,protoProps);



child.__super__=parent.prototype;

return child;
};


Model.extend=Collection.extend=Router.extend=View.extend=History.extend=extend;


var urlError=function(){
throw new Error('A "url" property or function must be specified');
};


var wrapError=function(model,options){
var error=options.error;
options.error=function(resp){
if(error)error(model,resp,options);
model.trigger('error',model,resp,options);
};
};

}).call(this);










(function(){

var globalEventFunctions=
{
triggerGlobal:function()
{
Backbone.trigger.apply(Backbone,arguments);
},

onGlobal:function()
{
Backbone.on.apply(Backbone,arguments);
},

offGlobal:function()
{
Backbone.off.apply(Backbone,arguments);
},

onceGlobal:function()
{
Backbone.once.apply(Backbone,arguments);
},


listenToGlobal:function()
{
var args=_.toArray(arguments);
args.unshift(Backbone);
this.listenTo.apply(this,args);
},

stopListeningGlobal:function()
{
var args=_.toArray(arguments);
args.unshift(Backbone);
this.stopListening.apply(this,args);
}
};


_.extend(Backbone.Model.prototype,globalEventFunctions);
_.extend(Backbone.Collection.prototype,globalEventFunctions);
_.extend(Backbone.View.prototype,globalEventFunctions);
_.extend(Backbone.Events,globalEventFunctions);

})();







Backbone.Model.prototype.toJSON=function()
{
var json=_.clone(this.attributes);
_.each(json,function(value,name)
{
if(value&&_.isFunction(value.toJSON))
{
json[name]=value.toJSON();
}
});
return json;
};

































Backbone.ComputedPropertyMixin=
{

get:function(attr)
{
var computed=this._computed[attr];
if(computed)
{
return computed.get.call(this);
}
return this.attributes[attr];
},

createComputedProperty:function(options)
{
var defaults={
attr:"",
get:function(){},
bindings:[]
};
options=_.extend(defaults,options);


var triggerChange=function()
{
this.trigger("change:"+options.attr);
this.trigger("change");
};


var listen=function(method)
{
for(var i=0;i<options.bindings.length;i++)
{
var eventType=options.bindings[i].eventType?options.bindings[i].eventType:"change";

if(options.bindings[i].attribute)
{
options.bindings[i].model[method](eventType+":"+options.bindings[i].attribute,triggerChange,this);
}
else
{
options.bindings[i].model[method](eventType,triggerChange,this);
}
}
};

listen.call(this,"on");


this.on("destroy",listen.bind(this,"off"));


if(!this._computed)
{
this._computed={};
}
this._computed[options.attr]={get:options.get,bindings:options.bindings};
}
};








Backbone.Model.prototype.bindAttribute=function(model,modelAttribute,myAttribute)
{
if(!myAttribute)
{
myAttribute=modelAttribute;
}

var self=this;

this.set(myAttribute,model.get(modelAttribute),{silent:true});

this.listenTo(model,"change:"+modelAttribute,function()
{
self.set(myAttribute,model.get(modelAttribute));
});

this.on("destroy",function(){
this.stopListening(model,"change:"+modelAttribute);
});
};









Backbone.NestedCollection=Backbone.Collection.extend({



_prepareModel:function(model,options)
{
options=options||{};
options.parent=this.parent;

if(!(model instanceof Backbone.Model))
{
var attrs=model;
if(attrs.Model)
{
model=new(eval(attrs.Model))(attrs,options);
}
else
{
model=new this.model(attrs,options);
}
}

model.parent=this.parent;

return model;
}
});




Backbone.AncestorByTypeMixin=
{
getAncestorByType:function(type)
{
var parent=this.parent;

while(parent)
{
if(parent instanceof type)
{
return parent;
}
parent=parent.parent;
}

return null;
}
};








Backbone.NestedModel=Backbone.Model.extend({

initialize:function(attrs,options)
{
if(options&&options.parent)
{
this.parent=options.parent;
}

for(var attrKey in this.attributes)
{
var attrValue=this.attributes[attrKey];
if(_.isArray(attrValue)&&this[attrKey])
{
var collection=this[attrKey];
collection.parent=this;
collection.reset(attrValue);



this.set(attrKey,collection,{silent:true});


collection.on(
"change add remove reset",
function(model)
{
this.trigger("change",model);
},
this);
}
else if(_.isObject(attrValue)&&attrValue.Model)
{
this[attrKey]=new(eval(attrValue.Model))(attrValue,{parent:this});
this.set(attrKey,this[attrKey],{silent:true});
this[attrKey].parent=this;


this[attrKey].on(
"change reset",
function(model)
{
this.trigger("change",model);
},
this);
}
}
}

});

_.extend(Backbone.NestedModel.prototype,Backbone.AncestorByTypeMixin);
































Backbone.maintainSortOrder=function(collection,sortOrder)
{


var getSortToken=function()
{
return _.pluck(collection.models,"cid").join(",");
};


var lastTaskSortToken=getSortToken();


collection.on(
"change",
function()
{

collection.sort();



var newTaskSortToken=getSortToken();
if(lastTaskSortToken!=newTaskSortToken)
{
lastTaskSortToken=newTaskSortToken;

collection.trigger("sort",collection);
}
},
collection);







collection.comparator=function(a,b)
{
for(var prop in sortOrder)
{
var asc=(sortOrder[prop].order&&sortOrder[prop].order=="desc")?-1:1;
var map=sortOrder[prop].map||function(x){return x;};

var valA=map(a.get(prop));
var valB=map(b.get(prop));

if(valA!=valB)
{
return(valA>valB?1:-1)*asc;
}
}

return 0;
};
};

















Backbone.ReplaceElementMixin=
{
replaceElement:function(htmlOrElement)
{
var $newEl=$(htmlOrElement);

if(this.$el.length>0)
{
this.$el.replaceWith($newEl);
}

this.setElement($newEl);
}
};







(function()
{

var methodMap={
'create':'POST',
'update':'PUT',
'delete':'DELETE',
'read':'GET'
};

Backbone.syncMs=function(method,model,options)
{
var params={
type:methodMap[method],
data:model,
url:model.url()
};


return $.msAjax(_.extend(params,options));
};

})();





Backbone.extend=Backbone.Model.extend;







Backbone.Application=function()
{
this.initialize.apply(this,arguments);
};

Backbone.Application.extend=Backbone.Model.extend;

_.extend(Backbone.Application.prototype,Backbone.Events);








(function()
{
var routeStripper=/^[#\/]/;

Backbone.History.prototype.getFragment=function(fragment,forcePushState)
{
if(fragment==null)
{
if(this._hasPushState||forcePushState)
{
fragment=window.location.pathname;
var search=window.location.search;
if(search)fragment+=search;
}
else
{
fragment=window.location.hash;
}
}
if(this.options&&!fragment.indexOf(this.options.root))fragment=fragment.substr(this.options.root.length);
return fragment.replace(routeStripper,'');
};

})();





(function()
{
Backbone.History.prototype.navigate=function(fragment,options)
{
if(!Backbone.History.started)return false;
if(!options||options===true)options={trigger:options};
fragment=this.getFragment(fragment||'');
if(this.fragment===fragment)return;
this.fragment=fragment;
var url=this.root+fragment;


if(this._hasPushState){
this.history[options.replace?'replaceState':'pushState']({},document.title,url);



}else if(this._wantsHashChange){
this._updateHash(this.location,fragment,options.replace);
if(this.iframe&&(fragment!==this.getFragment(this.getHash(this.iframe)))){



if(!options.replace)this.iframe.document.open().close();
this._updateHash(this.iframe.location,fragment,options.replace);
}



}else{
return this.location.assign(url);
}
if(options.trigger)this.loadUrl(fragment);
};

})();



















Backbone.emulateHTTP=true;

(function(_,Backbone){




if(typeof require!=='undefined'){
_=_||require('underscore');
Backbone=Backbone||require('backbone');
}

var queryStringParam=/^\?(.*)/,
optionalParam=/\((.*?)\)/g,
namedParam=/(\(\?)?:\w+/g,
splatParam=/\*\w+/g,
escapeRegExp=/[\-{}\[\]+?.,\\\^$|#\s]/g,
queryStrip=/(\?.*)$/,
fragmentStrip=/^([^\?]*)/,
hasQueryString=/(\?)[\w-]+=/i,
namesPattern=/[\:\*]([^\:\?\/]+)/g;
Backbone.Router.arrayValueSplit='|';

var _getFragment=Backbone.History.prototype.getFragment;

_.extend(Backbone.History.prototype,{
getFragment:function(fragment,forcePushState,excludeQueryString){
fragment=_getFragment.apply(this,arguments);
if(excludeQueryString){
fragment=fragment.replace(queryStrip,'');
}else if(!hasQueryString.test(fragment)){







if(this._hasPushState||!this._wantsHashChange||forcePushState){
fragment+=this.location.search;
}else if(hasQueryString.test(this.location.hash)){
var match=this.location.hash.match(queryStrip);
if(match){
fragment+=match[1];
}
}
}
return fragment;
},



getQueryParameters:function(fragment,forcePushState){
fragment=_getFragment.apply(this,arguments);

var queryString=fragment.replace(fragmentStrip,'');
var match=queryString.match(queryStringParam);
if(match){
queryString=match[1];
var rtn={};
iterateQueryString(queryString,function(name,value){




value=decodeURIComponent(value);

if(!rtn[name]){
rtn[name]=value;
}else if(_.isString(rtn[name])){
rtn[name]=[rtn[name],value];
}else{
rtn[name].push(value);
}
});
return rtn;
}else{

return{};
}
}
});

_.extend(Backbone.Router.prototype,{
initialize:function(options){
this.encodedSplatParts=options&&options.encodedSplatParts;
},

getFragment:function(fragment,forcePushState,excludeQueryString){
fragment=_getFragment.apply(this,arguments);
if(excludeQueryString){
fragment=fragment.replace(queryStrip,'');
}
return fragment;
},

_routeToRegExp:function(route){
var splatMatch=(splatParam.exec(route)||{index:-1}),
namedMatch=(namedParam.exec(route)||{index:-1}),
paramNames=route.match(namesPattern)||[];

route=route.replace(escapeRegExp,'\\$&')
.replace(optionalParam,'(?:$1)?')
.replace(namedParam,function(match,optional){
return optional?match:'([^\\/\\?]+)';
})
.replace(splatParam,'([^\?]*?)');
route+='([\?]{1}.*)?';
var rtn=new RegExp('^'+route+'$');


if(splatMatch.index>=0){

if(namedMatch>=0){

rtn.splatMatch=splatMatch.index-namedMatch.index;
}else{
rtn.splatMatch=-1;
}
}
rtn.paramNames=_.map(paramNames,function(name){return name.substring(1);});
rtn.namedParameters=this.namedParameters;

return rtn;
},





_extractParameters:function(route,fragment){
var params=route.exec(fragment).slice(1),
namedParams={};


var match=params.length&&params[params.length-1]&&params[params.length-1].match(queryStringParam);
if(match){
var queryString=match[1];
var data={};
if(queryString){
var self=this;
iterateQueryString(queryString,function(name,value){
self._setParamValue(name,value,data);
});
}
params[params.length-1]=data;
_.extend(namedParams,data);
}


var length=params.length;
if(route.splatMatch&&this.encodedSplatParts){
if(route.splatMatch<0){

return params;
}else{
length=length-1;
}
}

for(var i=0;i<length;i++){
if(_.isString(params[i])){
params[i]=Backbone.Router.decodeParams?decodeURIComponent(params[i]):params[i];
if(route.paramNames.length>=i-1){
namedParams[route.paramNames[i]]=params[i];
}
}
}

return(Backbone.Router.namedParameters||route.namedParameters)?[namedParams]:params;
},




_setParamValue:function(key,value,data){

var parts=key.split('.');
var _data=data;
for(var i=0;i<parts.length;i++){
var part=parts[i];
if(i===parts.length-1){

_data[part]=this._decodeParamValue(value,_data[part]);
}else{
_data=_data[part]=_data[part]||{};
}
}
},






_decodeParamValue:function(value,currentValue){

var splitChar=Backbone.Router.arrayValueSplit;
if(value.indexOf(splitChar)>=0){
var values=value.split(splitChar);

for(var i=values.length-1;i>=0;i--){
if(!values[i]){
values.splice(i,1);
}else{
values[i]=decodeURIComponent(values[i]);
}
}
return values;
}
if(!currentValue){
return decodeURIComponent(value);
}else if(_.isArray(currentValue)){
currentValue.push(decodeURIComponent(value));
return currentValue;
}else{
return[currentValue,decodeURIComponent(value)];
}
},




toFragment:function(route,queryParameters){
if(queryParameters){
if(!_.isString(queryParameters)){
queryParameters=this._toQueryString(queryParameters);
}
if(queryParameters){
route+='?'+queryParameters;
}
}
return route;
},




_toQueryString:function(val,namePrefix){
var splitChar=Backbone.Router.arrayValueSplit;
function encodeSplit(val){return val.replace(splitChar,encodeURIComponent(splitChar));}

if(!val)return'';
namePrefix=namePrefix||'';
var rtn='';
for(var name in val){
var _val=val[name];
if(_.isString(_val)||_.isNumber(_val)||_.isBoolean(_val)||_.isDate(_val)){

_val=this._toQueryParam(_val);
if(_.isBoolean(_val)||_.isNumber(_val)||_val){
rtn+=(rtn?'&':'')+this._toQueryParamName(name,namePrefix)+'='+encodeSplit(encodeURIComponent(_val));
}
}else if(_.isArray(_val)){

var str='';
for(var i in _val){
var param=this._toQueryParam(_val[i]);
if(_.isBoolean(param)||param){
str+=splitChar+encodeSplit(param);
}
}
if(str){
rtn+=(rtn?'&':'')+this._toQueryParamName(name,namePrefix)+'='+str;
}
}else{

var result=this._toQueryString(_val,this._toQueryParamName(name,namePrefix,true));
if(result){
rtn+=(rtn?'&':'')+result;
}
}
}
return rtn;
},







_toQueryParamName:function(name,prefix,isPrefix){
return(prefix+name+(isPrefix?'.':''));
},




_toQueryParam:function(param){
if(_.isNull(param)||_.isUndefined(param)){
return null;
}
return param;
}
});

function iterateQueryString(queryString,callback){
var keyValues=queryString.split('&');
_.each(keyValues,function(keyValue){
var i=keyValue.indexOf('=');
var arr=[keyValue.slice(0,i),keyValue.slice(i+1)];
if(arr.length>1){
callback(arr[0],arr[1]);
}
});
}

})(typeof _==='undefined'?null:_,typeof Backbone==='undefined'?null:Backbone);


/*! 
 * iScroll v4.2.5 ~ Copyright (c) 2012 Matteo Spinelli, http://cubiq.org 
 * Released under MIT license, http://cubiq.org/license 
 */




(function(window,doc)
{
var m=Math,
dummyStyle=doc.createElement('div').style,
vendor=(function()
{
var vendors='t,webkitT,MozT,msT,OT'.split(','),
t,
i=0,
l=vendors.length;

for(;i<l;i++)
{
t=vendors[i]+'ransform';
if(t in dummyStyle)
{
return vendors[i].substr(0,vendors[i].length-1);
}
}

return false;
})(),
cssVendor=vendor?'-'+vendor.toLowerCase()+'-':'',


transform=prefixStyle('transform'),
transitionProperty=prefixStyle('transitionProperty'),
transitionDuration=prefixStyle('transitionDuration'),
transformOrigin=prefixStyle('transformOrigin'),
transitionTimingFunction=prefixStyle('transitionTimingFunction'),
transitionDelay=prefixStyle('transitionDelay'),


isAndroid=(/android/gi).test(navigator.appVersion),
isIDevice=(/iphone|ipad/gi).test(navigator.appVersion),
isTouchPad=(/hp-tablet/gi).test(navigator.appVersion),

has3d=prefixStyle('perspective')in dummyStyle,
hasTouch='ontouchstart'in window&&!isTouchPad,
hasTransform=vendor!==false,
hasTransitionEnd=prefixStyle('transition')in dummyStyle,

RESIZE_EV='onorientationchange'in window?'orientationchange':'resize',
START_EV=hasTouch?'touchstart':'mousedown',
MOVE_EV=hasTouch?'touchmove':'mousemove',
END_EV=hasTouch?'touchend':'mouseup',
CANCEL_EV=hasTouch?'touchcancel':'mouseup',
TRNEND_EV=(function()
{
if(vendor===false)return false;

var transitionEnd={
'':'transitionend',
'webkit':'webkitTransitionEnd',
'Moz':'transitionend',
'O':'otransitionend',
'ms':'MSTransitionEnd'
};

return transitionEnd[vendor];
})(),

nextFrame=(function()
{
return window.requestAnimationFrame||
window.webkitRequestAnimationFrame||
window.mozRequestAnimationFrame||
window.oRequestAnimationFrame||
window.msRequestAnimationFrame||
function(callback){return setTimeout(callback,1);};
})(),
cancelFrame=(function()
{
return window.cancelRequestAnimationFrame||
window.webkitCancelAnimationFrame||
window.webkitCancelRequestAnimationFrame||
window.mozCancelRequestAnimationFrame||
window.oCancelRequestAnimationFrame||
window.msCancelRequestAnimationFrame||
clearTimeout;
})(),


translateZ=has3d?' translateZ(0)':'',


iScroll=function(el,options)
{
var that=this,
i;

that.wrapper=typeof el=='object'?el:doc.getElementById(el);
that.wrapper.style.overflow='hidden';
that.scroller=that.wrapper.children[0];


that.options={
hScroll:true,
vScroll:true,
x:0,
y:0,
bounce:true,
bounceLock:false,
momentum:true,
lockDirection:true,
useTransform:true,
useTransition:false,
topOffset:0,
checkDOMChanges:false,
handleClick:true,


hScrollbar:true,
vScrollbar:true,
fixedScrollbar:isAndroid,
hideScrollbar:isIDevice,
fadeScrollbar:isIDevice&&has3d,
scrollbarClass:'',


zoom:false,
zoomMin:1,
zoomMax:4,
doubleTapZoom:2,
wheelAction:'scroll',


snap:false,
snapThreshold:1,


onRefresh:null,
onBeforeScrollStart:function(e)
{
if(!hasTouch)
{
e.preventDefault();
}
},
onScrollStart:null,
onBeforeScrollMove:null,
onScrollMove:null,
onBeforeScrollEnd:null,
onScrollEnd:null,
onTouchEnd:null,
onDestroy:null,
onZoomStart:null,
onZoom:null,
onZoomEnd:null
};


for(i in options)that.options[i]=options[i];


that.x=that.options.x;
that.y=that.options.y;


that.options.useTransform=hasTransform&&that.options.useTransform;
that.options.hScrollbar=that.options.hScroll&&that.options.hScrollbar;
that.options.vScrollbar=that.options.vScroll&&that.options.vScrollbar;
that.options.zoom=that.options.useTransform&&that.options.zoom;
that.options.useTransition=hasTransitionEnd&&that.options.useTransition;




if(that.options.zoom&&isAndroid)
{
translateZ='';
}


that.scroller.style[transitionProperty]=that.options.useTransform?cssVendor+'transform':'top left';
that.scroller.style[transitionDuration]='0';
that.scroller.style[transformOrigin]='0 0';
if(that.options.useTransition)that.scroller.style[transitionTimingFunction]='cubic-bezier(0.33,0.66,0.66,1)';

if(that.options.useTransform)that.scroller.style[transform]='translate('+that.x+'px,'+that.y+'px)'+translateZ;
else that.scroller.style.cssText+=';position:absolute;top:'+that.y+'px;left:'+that.x+'px';

if(that.options.useTransition)that.options.fixedScrollbar=true;

that.refresh();

that._bind(RESIZE_EV,window);
that._bind(START_EV);
if(!hasTouch)
{
if(that.options.wheelAction!='none')
{
that._bind('DOMMouseScroll');
that._bind('mousewheel');
}
}

if(that.options.checkDOMChanges)that.checkDOMTime=setInterval(function()
{
that._checkDOMChanges();
},500);
};


iScroll.prototype={
enabled:true,
x:0,
y:0,
steps:[],
scale:1,
currPageX:0,currPageY:0,
pagesX:[],pagesY:[],
aniTime:null,
wheelZoomCount:0,

handleEvent:function(e)
{
var that=this;
switch(e.type)
{
case START_EV:
if(!hasTouch&&e.button!==0)return;
that._start(e);
break;
case MOVE_EV:that._move(e);break;
case END_EV:
case CANCEL_EV:that._end(e);break;
case RESIZE_EV:that._resize();break;
case'DOMMouseScroll':case'mousewheel':that._wheel(e);break;
case TRNEND_EV:that._transitionEnd(e);break;
}
},

_checkDOMChanges:function()
{
if(this.moved||this.zoomed||this.animating||
(this.scrollerW==this.scroller.offsetWidth*this.scale&&this.scrollerH==this.scroller.offsetHeight*this.scale))return;

this.refresh();
},

_scrollbar:function(dir)
{
var that=this,
bar;

if(!that[dir+'Scrollbar'])
{
if(that[dir+'ScrollbarWrapper'])
{
if(hasTransform)that[dir+'ScrollbarIndicator'].style[transform]='';
that[dir+'ScrollbarWrapper'].parentNode.removeChild(that[dir+'ScrollbarWrapper']);
that[dir+'ScrollbarWrapper']=null;
that[dir+'ScrollbarIndicator']=null;
}

return;
}

if(!that[dir+'ScrollbarWrapper'])
{

bar=doc.createElement('div');

if(that.options.scrollbarClass)bar.className=that.options.scrollbarClass+dir.toUpperCase();
else bar.style.cssText='position:absolute;z-index:100;'+(dir=='h'?'height:7px;bottom:1px;left:2px;right:'+(that.vScrollbar?'7':'2')+'px':'width:7px;bottom:'+(that.hScrollbar?'7':'2')+'px;top:2px;right:1px');

bar.style.cssText+=';pointer-events:none;'+cssVendor+'transition-property:opacity;'+cssVendor+'transition-duration:'+(that.options.fadeScrollbar?'350ms':'0')+';overflow:hidden;opacity:'+(that.options.hideScrollbar?'0':'1');

that.wrapper.appendChild(bar);
that[dir+'ScrollbarWrapper']=bar;


bar=doc.createElement('div');
if(!that.options.scrollbarClass)
{
bar.style.cssText='position:absolute;z-index:100;background:rgba(0,0,0,0.5);border:1px solid rgba(255,255,255,0.9);'+cssVendor+'background-clip:padding-box;'+cssVendor+'box-sizing:border-box;'+(dir=='h'?'height:100%':'width:100%')+';'+cssVendor+'border-radius:3px;border-radius:3px';
}
bar.style.cssText+=';pointer-events:none;'+cssVendor+'transition-property:'+cssVendor+'transform;'+cssVendor+'transition-timing-function:cubic-bezier(0.33,0.66,0.66,1);'+cssVendor+'transition-duration:0;'+cssVendor+'transform: translate(0,0)'+translateZ;
if(that.options.useTransition)bar.style.cssText+=';'+cssVendor+'transition-timing-function:cubic-bezier(0.33,0.66,0.66,1)';

that[dir+'ScrollbarWrapper'].appendChild(bar);
that[dir+'ScrollbarIndicator']=bar;
}

if(dir=='h')
{
that.hScrollbarSize=that.hScrollbarWrapper.clientWidth;
that.hScrollbarIndicatorSize=m.max(m.round(that.hScrollbarSize*that.hScrollbarSize/that.scrollerW),8);
that.hScrollbarIndicator.style.width=that.hScrollbarIndicatorSize+'px';
that.hScrollbarMaxScroll=that.hScrollbarSize-that.hScrollbarIndicatorSize;
that.hScrollbarProp=that.hScrollbarMaxScroll/that.maxScrollX;
}else
{
that.vScrollbarSize=that.vScrollbarWrapper.clientHeight;
that.vScrollbarIndicatorSize=m.max(m.round(that.vScrollbarSize*that.vScrollbarSize/that.scrollerH),8);
that.vScrollbarIndicator.style.height=that.vScrollbarIndicatorSize+'px';
that.vScrollbarMaxScroll=that.vScrollbarSize-that.vScrollbarIndicatorSize;
that.vScrollbarProp=that.vScrollbarMaxScroll/that.maxScrollY;
}


that._scrollbarPos(dir,true);
},

_resize:function()
{
var that=this;
setTimeout(function(){that.refresh();},isAndroid?200:0);
},

_pos:function(x,y)
{
if(this.zoomed)return;

x=this.hScroll?x:0;
y=this.vScroll?y:0;

if(this.options.useTransform)
{
this.scroller.style[transform]='translate('+x+'px,'+y+'px) scale('+this.scale+')'+translateZ;
}else
{
x=m.round(x);
y=m.round(y);
this.scroller.style.left=x+'px';
this.scroller.style.top=y+'px';
}

this.x=x;
this.y=y;

this._scrollbarPos('h');
this._scrollbarPos('v');
},

_scrollbarPos:function(dir,hidden)
{
var that=this,
pos=dir=='h'?that.x:that.y,
size;

if(!that[dir+'Scrollbar'])return;

pos=that[dir+'ScrollbarProp']*pos;

if(pos<0)
{
if(!that.options.fixedScrollbar)
{
size=that[dir+'ScrollbarIndicatorSize']+m.round(pos*3);
if(size<8)size=8;
that[dir+'ScrollbarIndicator'].style[dir=='h'?'width':'height']=size+'px';
}
pos=0;
}else if(pos>that[dir+'ScrollbarMaxScroll'])
{
if(!that.options.fixedScrollbar)
{
size=that[dir+'ScrollbarIndicatorSize']-m.round((pos-that[dir+'ScrollbarMaxScroll'])*3);
if(size<8)size=8;
that[dir+'ScrollbarIndicator'].style[dir=='h'?'width':'height']=size+'px';
pos=that[dir+'ScrollbarMaxScroll']+(that[dir+'ScrollbarIndicatorSize']-size);
}else
{
pos=that[dir+'ScrollbarMaxScroll'];
}
}

that[dir+'ScrollbarWrapper'].style[transitionDelay]='0';
that[dir+'ScrollbarWrapper'].style.opacity=hidden&&that.options.hideScrollbar?'0':'1';
that[dir+'ScrollbarIndicator'].style[transform]='translate('+(dir=='h'?pos+'px,0)':'0,'+pos+'px)')+translateZ;
},

_start:function(e)
{
var that=this,
point=hasTouch?e.touches[0]:e,
matrix,x,y,
c1,c2;

if(!that.enabled)return;

if(that.options.onBeforeScrollStart)that.options.onBeforeScrollStart.call(that,e);

if(that.options.useTransition||that.options.zoom)that._transitionTime(0);

that.moved=false;
that.animating=false;
that.zoomed=false;
that.distX=0;
that.distY=0;
that.absDistX=0;
that.absDistY=0;
that.dirX=0;
that.dirY=0;


if(that.options.zoom&&hasTouch&&e.touches.length>1)
{
c1=m.abs(e.touches[0].pageX-e.touches[1].pageX);
c2=m.abs(e.touches[0].pageY-e.touches[1].pageY);
that.touchesDistStart=m.sqrt(c1*c1+c2*c2);

that.originX=m.abs(e.touches[0].pageX+e.touches[1].pageX-that.wrapperOffsetLeft*2)/2-that.x;
that.originY=m.abs(e.touches[0].pageY+e.touches[1].pageY-that.wrapperOffsetTop*2)/2-that.y;

if(that.options.onZoomStart)that.options.onZoomStart.call(that,e);
}

if(that.options.momentum)
{
if(that.options.useTransform)
{

matrix=getComputedStyle(that.scroller,null)[transform].replace(/[^0-9\-.,]/g,'').split(',');
x=+(matrix[12]||matrix[4]);
y=+(matrix[13]||matrix[5]);
}else
{
x=+getComputedStyle(that.scroller,null).left.replace(/[^0-9-]/g,'');
y=+getComputedStyle(that.scroller,null).top.replace(/[^0-9-]/g,'');
}

if(x!=that.x||y!=that.y)
{
if(that.options.useTransition)that._unbind(TRNEND_EV);
else cancelFrame(that.aniTime);
that.steps=[];
that._pos(x,y);
if(that.options.onScrollEnd)that.options.onScrollEnd.call(that);
}
}

that.absStartX=that.x;
that.absStartY=that.y;

that.startX=that.x;
that.startY=that.y;
that.pointX=point.pageX;
that.pointY=point.pageY;

that.startTime=e.timeStamp||Date.now();

if(that.options.onScrollStart)that.options.onScrollStart.call(that,e);

that._bind(MOVE_EV,window);
that._bind(END_EV,window);
that._bind(CANCEL_EV,window);
},

_move:function(e)
{
var that=this,
point=hasTouch?e.touches[0]:e,
deltaX=point.pageX-that.pointX,
deltaY=point.pageY-that.pointY,
newX=that.x+deltaX,
newY=that.y+deltaY,
c1,c2,scale,
timestamp=e.timeStamp||Date.now();

if(that.options.onBeforeScrollMove)that.options.onBeforeScrollMove.call(that,e);


if(that.options.zoom&&hasTouch&&e.touches.length>1)
{
e.preventDefault();
c1=m.abs(e.touches[0].pageX-e.touches[1].pageX);
c2=m.abs(e.touches[0].pageY-e.touches[1].pageY);
that.touchesDist=m.sqrt(c1*c1+c2*c2);

that.zoomed=true;

scale=1/that.touchesDistStart*that.touchesDist*this.scale;

if(scale<that.options.zoomMin)scale=0.5*that.options.zoomMin*Math.pow(2.0,scale/that.options.zoomMin);
else if(scale>that.options.zoomMax)scale=2.0*that.options.zoomMax*Math.pow(0.5,that.options.zoomMax/scale);

that.lastScale=scale/this.scale;

newX=this.originX-this.originX*that.lastScale+this.x,
newY=this.originY-this.originY*that.lastScale+this.y;

this.scroller.style[transform]='translate('+newX+'px,'+newY+'px) scale('+scale+')'+translateZ;

if(that.options.onZoom)that.options.onZoom.call(that,e);
return;
}

that.pointX=point.pageX;
that.pointY=point.pageY;


if(newX>0||newX<that.maxScrollX)
{
newX=that.options.bounce?that.x+(deltaX/2):newX>=0||that.maxScrollX>=0?0:that.maxScrollX;
}
if(newY>that.minScrollY||newY<that.maxScrollY)
{
newY=that.options.bounce?that.y+(deltaY/2):newY>=that.minScrollY||that.maxScrollY>=0?that.minScrollY:that.maxScrollY;
}

that.distX+=deltaX;
that.distY+=deltaY;
that.absDistX=m.abs(that.distX);
that.absDistY=m.abs(that.distY);

if(that.absDistX<6&&that.absDistY<6)
{
return;
}


if(that.options.lockDirection)
{
if(that.absDistX>that.absDistY+5)
{
newY=that.y;
deltaY=0;
}else if(that.absDistY>that.absDistX+5)
{
newX=that.x;
deltaX=0;
}
}

var oldX=that.x;
var oldY=that.y;

that.moved=true;
that._pos(newX,newY);

if(hasTouch&&(that.x!=oldX||that.y!=oldY))
{
e.preventDefault();
}

that.dirX=deltaX>0?-1:deltaX<0?1:0;
that.dirY=deltaY>0?-1:deltaY<0?1:0;

if(timestamp-that.startTime>300)
{
that.startTime=timestamp;
that.startX=that.x;
that.startY=that.y;
}

if(that.options.onScrollMove)that.options.onScrollMove.call(that,e);
},

_end:function(e)
{
if(hasTouch&&e.touches.length!==0)return;

var that=this,
point=hasTouch?e.changedTouches[0]:e,
target,ev,
momentumX={dist:0,time:0},
momentumY={dist:0,time:0},
duration=(e.timeStamp||Date.now())-that.startTime,
newPosX=that.x,
newPosY=that.y,
distX,distY,
newDuration,
snap,
scale;

that._unbind(MOVE_EV,window);
that._unbind(END_EV,window);
that._unbind(CANCEL_EV,window);

if(that.options.onBeforeScrollEnd)that.options.onBeforeScrollEnd.call(that,e);

if(that.zoomed)
{
scale=that.scale*that.lastScale;
scale=Math.max(that.options.zoomMin,scale);
scale=Math.min(that.options.zoomMax,scale);
that.lastScale=scale/that.scale;
that.scale=scale;

that.x=that.originX-that.originX*that.lastScale+that.x;
that.y=that.originY-that.originY*that.lastScale+that.y;

that.scroller.style[transitionDuration]='200ms';
that.scroller.style[transform]='translate('+that.x+'px,'+that.y+'px) scale('+that.scale+')'+translateZ;

that.zoomed=false;
that.refresh();

if(that.options.onZoomEnd)that.options.onZoomEnd.call(that,e);
return;
}

if(!that.moved)
{
if(hasTouch)
{
if(that.doubleTapTimer&&that.options.zoom)
{

clearTimeout(that.doubleTapTimer);
that.doubleTapTimer=null;
if(that.options.onZoomStart)that.options.onZoomStart.call(that,e);
that.zoom(that.pointX,that.pointY,that.scale==1?that.options.doubleTapZoom:1);
if(that.options.onZoomEnd)
{
setTimeout(function()
{
that.options.onZoomEnd.call(that,e);
},200);
}
}else if(this.options.handleClick)
{
that.doubleTapTimer=setTimeout(function()
{
that.doubleTapTimer=null;


target=point.target;
while(target.nodeType!=1)target=target.parentNode;

if(target.tagName!='SELECT'&&target.tagName!='INPUT'&&target.tagName!='TEXTAREA')
{
ev=doc.createEvent('MouseEvents');
ev.initMouseEvent('click',true,true,e.view,1,
point.screenX,point.screenY,point.clientX,point.clientY,
e.ctrlKey,e.altKey,e.shiftKey,e.metaKey,
0,null);
ev._fake=true;
target.dispatchEvent(ev);
}
},that.options.zoom?250:0);
}
}

that._resetPos(400);

if(that.options.onTouchEnd)that.options.onTouchEnd.call(that,e);
return;
}

if(duration<300&&that.options.momentum)
{
momentumX=newPosX?that._momentum(newPosX-that.startX,duration,-that.x,that.scrollerW-that.wrapperW+that.x,that.options.bounce?that.wrapperW:0):momentumX;
momentumY=newPosY?that._momentum(newPosY-that.startY,duration,-that.y,(that.maxScrollY<0?that.scrollerH-that.wrapperH+that.y-that.minScrollY:0),that.options.bounce?that.wrapperH:0):momentumY;

newPosX=that.x+momentumX.dist;
newPosY=that.y+momentumY.dist;

if((that.x>0&&newPosX>0)||(that.x<that.maxScrollX&&newPosX<that.maxScrollX))momentumX={dist:0,time:0};
if((that.y>that.minScrollY&&newPosY>that.minScrollY)||(that.y<that.maxScrollY&&newPosY<that.maxScrollY))momentumY={dist:0,time:0};
}

if(momentumX.dist||momentumY.dist)
{
newDuration=m.max(m.max(momentumX.time,momentumY.time),10);


if(that.options.snap)
{
distX=newPosX-that.absStartX;
distY=newPosY-that.absStartY;
if(m.abs(distX)<that.options.snapThreshold&&m.abs(distY)<that.options.snapThreshold){that.scrollTo(that.absStartX,that.absStartY,200);}
else
{
snap=that._snap(newPosX,newPosY);
newPosX=snap.x;
newPosY=snap.y;
newDuration=m.max(snap.time,newDuration);
}
}

that.scrollTo(m.round(newPosX),m.round(newPosY),newDuration);

if(that.options.onTouchEnd)that.options.onTouchEnd.call(that,e);
return;
}


if(that.options.snap)
{
distX=newPosX-that.absStartX;
distY=newPosY-that.absStartY;
if(m.abs(distX)<that.options.snapThreshold&&m.abs(distY)<that.options.snapThreshold)that.scrollTo(that.absStartX,that.absStartY,200);
else
{
snap=that._snap(that.x,that.y);
if(snap.x!=that.x||snap.y!=that.y)that.scrollTo(snap.x,snap.y,snap.time);
}

if(that.options.onTouchEnd)that.options.onTouchEnd.call(that,e);
return;
}

that._resetPos(200);
if(that.options.onTouchEnd)that.options.onTouchEnd.call(that,e);
},

_resetPos:function(time)
{
var that=this,
resetX=that.x>=0?0:that.x<that.maxScrollX?that.maxScrollX:that.x,
resetY=that.y>=that.minScrollY||that.maxScrollY>0?that.minScrollY:that.y<that.maxScrollY?that.maxScrollY:that.y;

if(resetX==that.x&&resetY==that.y)
{
if(that.moved)
{
that.moved=false;
if(that.options.onScrollEnd)that.options.onScrollEnd.call(that);
}

if(that.hScrollbar&&that.options.hideScrollbar)
{
if(vendor=='webkit')that.hScrollbarWrapper.style[transitionDelay]='300ms';
that.hScrollbarWrapper.style.opacity='0';
}
if(that.vScrollbar&&that.options.hideScrollbar)
{
if(vendor=='webkit')that.vScrollbarWrapper.style[transitionDelay]='300ms';
that.vScrollbarWrapper.style.opacity='0';
}

return;
}

that.scrollTo(resetX,resetY,time||0);
},

_wheel:function(e)
{
var that=this,
wheelDeltaX,wheelDeltaY,
deltaX,deltaY,
deltaScale;

if('wheelDeltaX'in e)
{
wheelDeltaX=e.wheelDeltaX/12;
wheelDeltaY=e.wheelDeltaY/12;
}else if('wheelDelta'in e)
{
wheelDeltaX=wheelDeltaY=e.wheelDelta/12;
}else if('detail'in e)
{
wheelDeltaX=wheelDeltaY=-e.detail*3;
}else
{
return;
}

if(that.options.wheelAction=='zoom')
{
deltaScale=that.scale*Math.pow(2,1/3*(wheelDeltaY?wheelDeltaY/Math.abs(wheelDeltaY):0));
if(deltaScale<that.options.zoomMin)deltaScale=that.options.zoomMin;
if(deltaScale>that.options.zoomMax)deltaScale=that.options.zoomMax;

if(deltaScale!=that.scale)
{
if(!that.wheelZoomCount&&that.options.onZoomStart)that.options.onZoomStart.call(that,e);
that.wheelZoomCount++;

that.zoom(e.pageX,e.pageY,deltaScale,400);

setTimeout(function()
{
that.wheelZoomCount--;
if(!that.wheelZoomCount&&that.options.onZoomEnd)that.options.onZoomEnd.call(that,e);
},400);
}

return;
}

deltaX=that.x+wheelDeltaX;
deltaY=that.y+wheelDeltaY;

if(deltaX>0)deltaX=0;
else if(deltaX<that.maxScrollX)deltaX=that.maxScrollX;

if(deltaY>that.minScrollY)deltaY=that.minScrollY;
else if(deltaY<that.maxScrollY)deltaY=that.maxScrollY;

if(that.maxScrollY<0)
{
that.scrollTo(deltaX,deltaY,0);
}
},

_transitionEnd:function(e)
{
var that=this;

if(e.target!=that.scroller)return;

that._unbind(TRNEND_EV);

that._startAni();
},







_startAni:function()
{
var that=this,
startX=that.x,startY=that.y,
startTime=Date.now(),
step,easeOut,
animate;

if(that.animating)return;

if(!that.steps.length)
{
that._resetPos(400);
return;
}

step=that.steps.shift();

if(step.x==startX&&step.y==startY)step.time=0;

that.animating=true;
that.moved=true;

if(that.options.useTransition)
{
that._transitionTime(step.time);
that._pos(step.x,step.y);
that.animating=false;
if(step.time)that._bind(TRNEND_EV);
else that._resetPos(0);
return;
}

animate=function()
{
var now=Date.now(),
newX,newY;

if(now>=startTime+step.time)
{
that._pos(step.x,step.y);
that.animating=false;
if(that.options.onAnimationEnd)that.options.onAnimationEnd.call(that);
that._startAni();
return;
}

now=(now-startTime)/step.time-1;
easeOut=m.sqrt(1-now*now);
newX=(step.x-startX)*easeOut+startX;
newY=(step.y-startY)*easeOut+startY;
that._pos(newX,newY);
if(that.animating)that.aniTime=nextFrame(animate);
};

animate();
},

_transitionTime:function(time)
{
time+='ms';
this.scroller.style[transitionDuration]=time;
if(this.hScrollbar)this.hScrollbarIndicator.style[transitionDuration]=time;
if(this.vScrollbar)this.vScrollbarIndicator.style[transitionDuration]=time;
},

_momentum:function(dist,time,maxDistUpper,maxDistLower,size)
{
var deceleration=0.0006,
speed=m.abs(dist)/time,
newDist=(speed*speed)/(2*deceleration),
newTime=0,outsideDist=0;


if(dist>0&&newDist>maxDistUpper)
{
outsideDist=size/(6/(newDist/speed*deceleration));
maxDistUpper=maxDistUpper+outsideDist;
speed=speed*maxDistUpper/newDist;
newDist=maxDistUpper;
}else if(dist<0&&newDist>maxDistLower)
{
outsideDist=size/(6/(newDist/speed*deceleration));
maxDistLower=maxDistLower+outsideDist;
speed=speed*maxDistLower/newDist;
newDist=maxDistLower;
}

newDist=newDist*(dist<0?-1:1);
newTime=speed/deceleration;

return{dist:newDist,time:m.round(newTime)};
},

_offset:function(el)
{
var left=-el.offsetLeft,
top=-el.offsetTop;

while(el=el.offsetParent)
{
left-=el.offsetLeft;
top-=el.offsetTop;
}

if(el!=this.wrapper)
{
left*=this.scale;
top*=this.scale;
}

return{left:left,top:top};
},

_snap:function(x,y)
{
var that=this,
i,l,
page,time,
sizeX,sizeY;


page=that.pagesX.length-1;
for(i=0,l=that.pagesX.length;i<l;i++)
{
if(x>=that.pagesX[i])
{
page=i;
break;
}
}
if(page==that.currPageX&&page>0&&that.dirX<0)page--;
x=that.pagesX[page];
sizeX=m.abs(x-that.pagesX[that.currPageX]);
sizeX=sizeX?m.abs(that.x-x)/sizeX*500:0;
that.currPageX=page;


page=that.pagesY.length-1;
for(i=0;i<page;i++)
{
if(y>=that.pagesY[i])
{
page=i;
break;
}
}
if(page==that.currPageY&&page>0&&that.dirY<0)page--;
y=that.pagesY[page];
sizeY=m.abs(y-that.pagesY[that.currPageY]);
sizeY=sizeY?m.abs(that.y-y)/sizeY*500:0;
that.currPageY=page;


time=m.round(m.max(sizeX,sizeY))||200;

return{x:x,y:y,time:time};
},

_bind:function(type,el,bubble)
{
(el||this.scroller).addEventListener(type,this,!!bubble);
},

_unbind:function(type,el,bubble)
{
(el||this.scroller).removeEventListener(type,this,!!bubble);
},







destroy:function()
{
var that=this;

that.scroller.style[transform]='';


that.hScrollbar=false;
that.vScrollbar=false;
that._scrollbar('h');
that._scrollbar('v');


that._unbind(RESIZE_EV,window);
that._unbind(START_EV);
that._unbind(MOVE_EV,window);
that._unbind(END_EV,window);
that._unbind(CANCEL_EV,window);

if(!that.options.hasTouch)
{
that._unbind('DOMMouseScroll');
that._unbind('mousewheel');
}

if(that.options.useTransition)that._unbind(TRNEND_EV);

if(that.options.checkDOMChanges)clearInterval(that.checkDOMTime);

if(that.options.onDestroy)that.options.onDestroy.call(that);
},

refresh:function()
{
var that=this,
offset,
i,l,
els,
pos=0,
page=0;

if(that.scale<that.options.zoomMin)that.scale=that.options.zoomMin;
that.wrapperW=that.wrapper.clientWidth||1;
that.wrapperH=that.wrapper.clientHeight||1;

that.minScrollY=-that.options.topOffset||0;
that.scrollerW=m.round(that.scroller.offsetWidth*that.scale);
that.scrollerH=m.round((that.scroller.offsetHeight+that.minScrollY)*that.scale);
that.maxScrollX=that.wrapperW-that.scrollerW;
that.maxScrollY=that.wrapperH-that.scrollerH+that.minScrollY;
that.dirX=0;
that.dirY=0;

if(that.options.onRefresh)that.options.onRefresh.call(that);

that.hScroll=that.options.hScroll&&that.maxScrollX<0;
that.vScroll=that.options.vScroll&&(!that.options.bounceLock&&!that.hScroll||that.scrollerH>that.wrapperH);

that.hScrollbar=that.hScroll&&that.options.hScrollbar;
that.vScrollbar=that.vScroll&&that.options.vScrollbar&&that.scrollerH>that.wrapperH;

offset=that._offset(that.wrapper);
that.wrapperOffsetLeft=-offset.left;
that.wrapperOffsetTop=-offset.top;


if(typeof that.options.snap=='string')
{
that.pagesX=[];
that.pagesY=[];
els=that.scroller.querySelectorAll(that.options.snap);
for(i=0,l=els.length;i<l;i++)
{
pos=that._offset(els[i]);
pos.left+=that.wrapperOffsetLeft;
pos.top+=that.wrapperOffsetTop;
that.pagesX[i]=pos.left<that.maxScrollX?that.maxScrollX:pos.left*that.scale;
that.pagesY[i]=pos.top<that.maxScrollY?that.maxScrollY:pos.top*that.scale;
}
}else if(that.options.snap)
{
that.pagesX=[];
while(pos>=that.maxScrollX)
{
that.pagesX[page]=pos;
pos=pos-that.wrapperW;
page++;
}
if(that.maxScrollX%that.wrapperW)that.pagesX[that.pagesX.length]=that.maxScrollX-that.pagesX[that.pagesX.length-1]+that.pagesX[that.pagesX.length-1];

pos=0;
page=0;
that.pagesY=[];
while(pos>=that.maxScrollY)
{
that.pagesY[page]=pos;
pos=pos-that.wrapperH;
page++;
}
if(that.maxScrollY%that.wrapperH)that.pagesY[that.pagesY.length]=that.maxScrollY-that.pagesY[that.pagesY.length-1]+that.pagesY[that.pagesY.length-1];
}


that._scrollbar('h');
that._scrollbar('v');

if(!that.zoomed)
{
that.scroller.style[transitionDuration]='0';
that._resetPos(400);
}
},

scrollTo:function(x,y,time,relative)
{
var that=this,
step=x,
i,l;

that.stop();

if(!step.length)step=[{x:x,y:y,time:time,relative:relative}];

for(i=0,l=step.length;i<l;i++)
{
if(step[i].relative){step[i].x=that.x-step[i].x;step[i].y=that.y-step[i].y;}
that.steps.push({x:step[i].x,y:step[i].y,time:step[i].time||0});
}

that._startAni();
},

scrollToElement:function(el,time)
{
var that=this,pos;
el=el.nodeType?el:that.scroller.querySelector(el);
if(!el)return;

pos=that._offset(el);
pos.left+=that.wrapperOffsetLeft;
pos.top+=that.wrapperOffsetTop;

pos.left=pos.left>0?0:pos.left<that.maxScrollX?that.maxScrollX:pos.left;
pos.top=pos.top>that.minScrollY?that.minScrollY:pos.top<that.maxScrollY?that.maxScrollY:pos.top;
time=time===undefined?m.max(m.abs(pos.left)*2,m.abs(pos.top)*2):time;

that.scrollTo(pos.left,pos.top,time);
},

scrollToPage:function(pageX,pageY,time)
{
var that=this,x,y;

time=time===undefined?400:time;

if(that.options.onScrollStart)that.options.onScrollStart.call(that);

if(that.options.snap)
{
pageX=pageX=='next'?that.currPageX+1:pageX=='prev'?that.currPageX-1:pageX;
pageY=pageY=='next'?that.currPageY+1:pageY=='prev'?that.currPageY-1:pageY;

pageX=pageX<0?0:pageX>that.pagesX.length-1?that.pagesX.length-1:pageX;
pageY=pageY<0?0:pageY>that.pagesY.length-1?that.pagesY.length-1:pageY;

that.currPageX=pageX;
that.currPageY=pageY;
x=that.pagesX[pageX];
y=that.pagesY[pageY];
}else
{
x=-that.wrapperW*pageX;
y=-that.wrapperH*pageY;
if(x<that.maxScrollX)x=that.maxScrollX;
if(y<that.maxScrollY)y=that.maxScrollY;
}

that.scrollTo(x,y,time);
},

disable:function()
{
this.stop();
this._resetPos(0);
this.enabled=false;


this._unbind(MOVE_EV,window);
this._unbind(END_EV,window);
this._unbind(CANCEL_EV,window);
},

enable:function()
{
this.enabled=true;
},

stop:function()
{
if(this.options.useTransition)this._unbind(TRNEND_EV);
else cancelFrame(this.aniTime);
this.steps=[];
this.moved=false;
this.animating=false;
},

zoom:function(x,y,scale,time)
{
var that=this,
relScale=scale/that.scale;

if(!that.options.useTransform)return;

that.zoomed=true;
time=time===undefined?200:time;
x=x-that.wrapperOffsetLeft-that.x;
y=y-that.wrapperOffsetTop-that.y;
that.x=x-x*relScale+that.x;
that.y=y-y*relScale+that.y;

that.scale=scale;
that.refresh();

that.x=that.x>0?0:that.x<that.maxScrollX?that.maxScrollX:that.x;
that.y=that.y>that.minScrollY?that.minScrollY:that.y<that.maxScrollY?that.maxScrollY:that.y;

that.scroller.style[transitionDuration]=time+'ms';
that.scroller.style[transform]='translate('+that.x+'px,'+that.y+'px) scale('+scale+')'+translateZ;
that.zoomed=false;
},

isReady:function()
{
return!this.moved&&!this.zoomed&&!this.animating;
}
};

function prefixStyle(style)
{
if(vendor==='')return style;

style=style.charAt(0).toUpperCase()+style.substr(1);
return vendor+style;
}

dummyStyle=null;

if(typeof exports!=='undefined')exports.iScroll=iScroll;
else window.iScroll=iScroll;

})(window,document);






var amplify;
/*!
 * Amplify Store - Persistent Client-Side Storage 1.0.0
 * 
 * Copyright 2011 appendTo LLC. (http://appendto.com/team)
 * Dual licensed under the MIT or GPL licenses.
 * http://appendto.com/open-source-licenses
 * 
 * http://amplifyjs.com
 */

(function(amplify,undefined){

var store=amplify.store=function(key,value,options,type){
var type=store.type;
if(options&&options.type&&options.type in store.types){
type=options.type;
}
return store.types[type](key,value,options||{});
};

store.types={};
store.type=null;
store.addType=function(type,storage){
if(!store.type){
store.type=type;
}

store.types[type]=storage;
store[type]=function(key,value,options){
options=options||{};
options.type=type;
return store(key,value,options);
};
}
store.error=function(){
return"amplify.store quota exceeded";
};

var rprefix=/^__amplify__/;
function createFromStorageInterface(storageType,storage){
store.addType(storageType,function(key,value,options){
var storedValue,parsed,i,remove,
ret=value,
now=(new Date()).getTime();

if(!key){
ret={};
remove=[];
i=0;
try{





key=storage.length;

while(key=storage.key(i++)){
if(rprefix.test(key)){
parsed=JSON.parse(storage.getItem(key));
if(parsed.expires&&parsed.expires<=now){
remove.push(key);
}else{
ret[key.replace(rprefix,"")]=parsed.data;
}
}
}
while(key=remove.pop()){
storage.removeItem(key);
}
}catch(error){}
return ret;
}


key="__amplify__"+key;

if(value===undefined){
storedValue=storage.getItem(key);
parsed=storedValue?JSON.parse(storedValue):{expires:-1};
if(parsed.expires&&parsed.expires<=now){
storage.removeItem(key);
}else{
return parsed.data;
}
}else{
if(value===null){
storage.removeItem(key);
}else{
parsed=JSON.stringify({
data:value,
expires:options.expires?now+options.expires:null
});
try{
storage.setItem(key,parsed);

}catch(error){

store[storageType]();
try{
storage.setItem(key,parsed);
}catch(error){
throw store.error();
}
}
}
}

return ret;
});
}



for(var webStorageType in{localStorage:1,sessionStorage:1}){

try{
if(window[webStorageType].getItem){
createFromStorageInterface(webStorageType,window[webStorageType]);
}
}catch(e){}
}




if(window.globalStorage){

try{
createFromStorageInterface("globalStorage",
window.globalStorage[window.location.hostname]);



if(store.type==="sessionStorage"){
store.type="globalStorage";
}
}catch(e){}
}




(function(){



if(store.types.localStorage){
return;
}


var div=document.createElement("div"),
attrKey="amplify";
div.style.display="none";
document.getElementsByTagName("head")[0].appendChild(div);
if(div.addBehavior){
try
{
div.addBehavior("#default#userdata");
}
catch(ex)
{

return;
}

store.addType("userData",function(key,value,options){
div.load(attrKey);
var attr,parsed,prevValue,i,remove,
ret=value,
now=(new Date()).getTime();

if(!key){
ret={};
remove=[];
i=0;
while(attr=div.XMLDocument.documentElement.attributes[i++]){
parsed=JSON.parse(attr.value);
if(parsed.expires&&parsed.expires<=now){
remove.push(attr.name);
}else{
ret[attr.name]=parsed.data;
}
}
while(key=remove.pop()){
div.removeAttribute(key);
}
div.save(attrKey);
return ret;
}





key=key.replace(/[^-._0-9A-Za-z\xb7\xc0-\xd6\xd8-\xf6\xf8-\u037d\u37f-\u1fff\u200c-\u200d\u203f\u2040\u2070-\u218f]/g,"-");

if(value===undefined){
attr=div.getAttribute(key);
parsed=attr?JSON.parse(attr):{expires:-1};
if(parsed.expires&&parsed.expires<=now){
div.removeAttribute(key);
}else{
return parsed.data;
}
}else{
if(value===null){
div.removeAttribute(key);
}else{

prevValue=div.getAttribute(key);
parsed=JSON.stringify({
data:value,
expires:(options.expires?(now+options.expires):null)
});
div.setAttribute(key,parsed);
}
}

try{
div.save(attrKey);

}catch(error){

if(prevValue===null){
div.removeAttribute(key);
}else{
div.setAttribute(key,prevValue);
}


store.userData();
try{
div.setAttribute(key,parsed);
div.save(attrKey);
}catch(error){

if(prevValue===null){
div.removeAttribute(key);
}else{
div.setAttribute(key,prevValue);
}
throw store.error();
}
}
return ret;
});
}
}());



(function(){
var memory={};

function copy(obj){
return obj===undefined?undefined:JSON.parse(JSON.stringify(obj));
}

store.addType("memory",function(key,value,options){
if(!key){
return copy(memory);
}

if(value===undefined){
return copy(memory[key]);
}

if(value===null){
delete memory[key];
return null;
}

memory[key]=value;
if(options.expires){
setTimeout(function(){
delete memory[key];
},options.expires);
}

return value;
});
}());

}(this.amplify=this.amplify||{}));



if(!window.__td){window.__MT=100;window.__ti=0;window.__td=[];window.__td.length=window.__MT;window.__noTrace=false;}







if(!vp)
{
var vp={};
}

if(!vp.ui)
{
vp.ui={};
}

(function $vpfn_YUX8Iv4k$uVMojy3D6jaLg19$1($)
{if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}

var _loadComplete=false;

var DEPRIORITIZE_DELAY=10;

$(window).on("load",
function $vpfn_YUX8Iv4k$uVMojy3D6jaLg27$4(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
_loadComplete=true;
});



$.afterLoad=function $vpfn_P5y2Uvv52cE8Ccc2oiXLCw33$14(callback,delay)
{if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
if(typeof(delay)!="number"||delay<0)
{
delay=0;
}

if(_loadComplete)
{
callback();
}
else
{
$(window).on(
"load",
function $vpfn_YUX8Iv4k$uVMojy3D6jaLg48$12()
{if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
setTimeout(callback,delay);
_loadComplete=true;
});
}
};

var logPixel=function $vpfn_3h137l95YnSldUZUoXipsw56$15(url)
{if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
if(!!$.currentQueryString()["debugpixels"])
{
if(window.console)
{
window.console.log('debug pixel: '+url);
}
}
};








vp.ui.loadScriptAfterPageLoad=function $vpfn__k5W0AdXyMdudNCFLcZoBQ74$32(url,success,error)
{if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
var successWrapper=_.isFunction(success)?vp.instrumentation.wrapFunctionWithInstrumentation(success):null;
var errorWrapper=_.isFunction(error)?vp.instrumentation.wrapFunctionWithInstrumentation(error):null;

logPixel(url);

$.afterLoad(
function $vpfn_YUX8Iv4k$uVMojy3D6jaLg82$8()
{if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
$.ajax({
url:url,
dataType:"script",
cache:true,
success:successWrapper,
error:errorWrapper
});
},
DEPRIORITIZE_DELAY);
};








vp.ui.loadImageAfterPageLoad=function $vpfn_5TvITHZe_UzmKBlyR02xEw102$31(url,success,error)
{if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
logPixel(url);

var wrapper=function $vpfn_Zz6LmtFGJzFNT$OF18_Neg106$18()
{if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
var $img=$("<img />")
.attr("src",url)
.css({display:"none"});

if(success)
{
$img.on("load",success);
}

if(error)
{
$img.on("error",error);
}

$img.appendTo(document.body);
};

$.afterLoad(wrapper,DEPRIORITIZE_DELAY);
};






vp.ui.loadIFrameAfterPageLoad=function $vpfn_$wpSpD_FUsGjwMnioM9MOA133$32(url)
{if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
logPixel(url);

var wrapper=function $vpfn_Zz6LmtFGJzFNT$OF18_Neg137$18()
{if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
var $iframe=$("<iframe />")
.attr("src",url)
.css({display:"none"})
.appendTo(document.body);
};

$.afterLoad(wrapper,DEPRIORITIZE_DELAY);
};

})(jQuery);

if(!window.__td){window.__MT=100;window.__ti=0;window.__td=[];window.__td.length=window.__MT;window.__noTrace=false;

}






if(typeof vp=="undefined"){
var vp={};
}





if(!vp.spot)
{
vp.spot={};
}

(function $vpfn_7aWX88R_l106kbjN9DJHwQ23$1()
{if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}





var SPOT_URL="/vp/spot.aspx";

var pingSpotlight=function $vpfn_YnPT$gG6vfoIFxyTPEzSCQ32$24(sQueryString,callback)
{if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
$("<IMG>").attr("src",SPOT_URL+"?"+sQueryString).load(callback);
};







this.track=function $vpfn_3wDpSulVSZoUeAV4ftR9uQ43$17(sCode,callback)
{if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
if(typeof sCode!="string"||sCode.length===0)
{
throw new Error("vp.spot.track(): The code to track is either null or an empty string.");
}


var oData={
"Log":1,
"vsref":sCode,
"xref":sCode,


"u":new Date().valueOf(),
"qs":window.location.search.slice(1)
};


pingSpotlight($.param(oData),callback);
};









this.trackWithQueryString=function $vpfn_QEETIe_jq7wmCnvP$lyKcw73$32(sCode,sQueryString,callback)
{if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
if(typeof sCode!="string"||sCode.length===0)
{
throw new Error("vp.spot.track(): The code to track is either null or an empty string.");
}


var oData={
"Log":1,
"vsref":sCode,
"xref":sCode,


"u":new Date().valueOf(),
"qs":sQueryString
};


pingSpotlight($.param(oData),callback);
};







this.trackAbsolute=function $vpfn_krEicr$3inlkn4eK4KTk$w101$25(sCode,bAbsolute)
{if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
if(typeof sCode!="string"||sCode.length===0)
{
throw new Error("vp.spot.trackAbsolute(): The code to track is either null or an empty string.");
}
if(typeof bAbsolute!="boolean"&&typeof bAbsolute!="number")
{
throw new Error("vp.spot.trackAbsolute(): The second argument must be either true (for absolute) or false (for relative).");
}


var oData={
"abs":bAbsolute?1:0,
"xref":sCode
};


pingSpotlight($.param(oData));
};
}).call(vp.spot);

if(!window.__td){window.__MT=100;window.__ti=0;window.__td=[];window.__td.length=window.__MT;window.__noTrace=false;

}






if(!vp)
{
var vp={};
}





if(!vp.logger)
{
vp.logger={};
}

(function $vpfn_cqhSPUt_KOuz_hpz8gkl6w24$1($)
{if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}






vp.logger.LOG_URL="/vp/ls/errorlogger.aspx";

vp.logger.Severity={
Debug:1,
Information:2,
Warning:3,
Error:4
};

var imagePing=function $vpfn_WL462RNLmit5SVn5nv0HPw41$16(src)
{if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
$("<IMG>").attr("src",src);
};








vp.logger.logError=function $vpfn_uiE0CymOqTTB3IKzPfmmcA53$21(errorNumber,errorSource,errorDescription,errorSeverity)
{if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}

var qs={};


if(typeof errorNumber=="number")
{
qs.number=errorNumber;
}


if(typeof errorSource=="string")
{
qs.source=errorSource;
}


if(typeof errorDescription=="string")
{
qs.description=errorDescription;
}


if(typeof errorSeverity=="number")
{
if(errorSeverity<1||errorSeverity>4)
{
throw new Error("vp.logger.logError(): Invalid severity: "+errorSeverity);
}
qs.severity=errorSeverity;
}

imagePing(vp.logger.LOG_URL+"?"+$.param(qs));
};





vp.logger.logMessage=function $vpfn_$p1MEb5JmXxjBYnN_0nNNg93$23(message)
{if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
if(!message)
{
throw new Error("vp.logger.logMessage(): Invalid or empty string cannot be logged.");
}


imagePing(vp.logger.LOG_URL+"?"+$.param({"description":message}));
};







vp.logger.loadTrackingPixel=function $vpfn_NHcM6SqNoVypm87wqp2kUg110$30(url,pixelPartnerId)
{if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
var startMs=new Date().getTime();




var load=function $vpfn_a5reYUlG$WbZtu0LLDME7g117$15(isError)
{if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}



var elapsedMs=(new Date()).getTime()-startMs;

var logUrl="/pixel-response-logger.aspx?ppid="+pixelPartnerId+"&t="+elapsedMs+"&sid="+window._vp_session_id||0;
if(isError)
{

logUrl+="&err=1";
}

$.ajax({
url:logUrl,
error:function(){}
});
};

vp.ui.loadImageAfterPageLoad(
url,
function $vpfn_cqhSPUt_KOuz_hpz8gkl6w139$8(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}load(false);},
function $vpfn_cqhSPUt_KOuz_hpz8gkl6w140$8(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}load(true);});
};

})(jQuery);

if(!window.__td){window.__MT=100;window.__ti=0;window.__td=[];window.__td.length=window.__MT;window.__noTrace=false;}


(function $vpfn_wNFBf3GX6rkPJCerUYIklQ4$1($)
{if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
var COOKIE="devuitype";
var LOCAL_STORAGE_KEY="mobile_site_switch";

$(document).ready(function $vpfn_wNFBf3GX6rkPJCerUYIklQ9$22()
{if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}

$(".mobile-toggle-link").click(function $vpfn_wNFBf3GX6rkPJCerUYIklQ12$39(e)
{if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
e.preventDefault();


var data={
pageSpotId:window._vp_page_spot_id
};

var value=$.cookies.get(COOKIE)||(vp.browser.isSmallMobile?"SmallMobile":"Desktop");

if(value.toLowerCase()!="smallmobile")
{
$.cookies.set(COOKIE,"SmallMobile");
data.switchedToVersion="mobile";
}
else
{
$.cookies.set(COOKIE,"Desktop");
data.switchedToVersion="full";
}

try
{
amplify.store(LOCAL_STORAGE_KEY,null);
amplify.store(LOCAL_STORAGE_KEY,data);
}
catch(e){}

window.location.reload(true);
});
});


var switchData=amplify.store(LOCAL_STORAGE_KEY);

if(switchData)
{
$.ajax({
type:"GET",
url:"/mobile/api/tracking/siteversionswitch.aspx",
data:switchData,
dataType:"html",
error:function(){}
});

try
{
amplify.store(LOCAL_STORAGE_KEY,null);
}
catch(e){}
}

})(jQuery);

if(!window.__td){window.__MT=100;window.__ti=0;window.__td=[];window.__td.length=window.__MT;window.__noTrace=false;}


(function $vpfn_nZM2gAbv619vHHiSIdk7SQ4$1($)
{if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}



$.orientation=function $vpfn_RgZfHXQnO2y3azHliM7hBA9$16()
{if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
return window.matchMedia("(orientation: portrait)").matches?"portrait":"landscape";
};

})(jQuery);

if(!window.__td){window.__MT=100;window.__ti=0;window.__td=[];window.__td.length=window.__MT;window.__noTrace=false;}















jQuery(document).ajaxError(function $vpfn_IIwRezYLJ7jSIcqQIhniiw17$27(e,xhr,settings,ex)
{if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
if(!settings.error)
{

throw new Error(ex+" from $.ajax(): "+settings.url);
}
});

if(!window.__td){window.__MT=100;window.__ti=0;window.__td=[];window.__td.length=window.__MT;window.__noTrace=false;}



$(function $vpfn_RQZTiIyt3XeBgrplD$KWQA5$2(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}




$("body").on("initializeControl","*",function $vpfn_RQZTiIyt3XeBgrplD$KWQA10$43(event){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}

event.stopPropagation();


$(this).children().addBack().each(function $vpfn_RQZTiIyt3XeBgrplD$KWQA15$42(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
var $this=$(this);


if($this.is(".stylized-select")){
if(!($this.parent().hasClass("stylized-select-container"))){
var $containerClass=$this.attr("data-container-class")||"";
$this.wrap("<span class='stylized-select-container "+$containerClass+"' />");
}
if(!($this.next().hasClass("stylized-select-label"))){
$this.after("<label class='stylized-select-label' for='"+$this.attr("name")+"'>"+$this.find("option:selected").text()+"</label>");
}
}


if($this.is(".tabs")){
$this.children(".tabs-headers").each(function $vpfn_RQZTiIyt3XeBgrplD$KWQA31$53(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
var $thisHeaders=$(this);
var selectedTabId="null";


$thisHeaders.find("input[type=radio]").each(function $vpfn_RQZTiIyt3XeBgrplD$KWQA36$64(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
if($(this).prop("checked")){
selectedTabId=$(this).val();
}
});

if(selectedTabId=="null"){
var $firstTab=$($thisHeaders.find("input:first-of-type")[0]);
$firstTab.prop("checked",true);
selectedTabId=$firstTab.val();
}
$(selectedTabId).addClass("tab-selected");


$thisHeaders.children("input").each(function $vpfn_RQZTiIyt3XeBgrplD$KWQA50$56(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
var $thisInput=$(this);

$thisInput.wrap("<span class='tabs-headers-header'></span>");

$("label[for='"+$thisInput.attr("id")+"']").appendTo($thisInput.parent());
});
});
}


if(vp.browser.isIE&&vp.browser.ver<9){

if($this.is(".stylized-checkbox :checkbox, .stylized-radio :radio, fieldset.buttonbar :checkbox, fieldset.buttonbar :radio, .tabs-headers :radio, .stylized-select")){
if($this.is(":checked")){
$this.addClass("checked");
}else{
$this.removeClass("checked");
}
if($this.is(":disabled")){
$this.addClass("disabled");
}else{
$this.removeClass("disabled");
}
}
}


if($this.is(".option-set-option .stylized-radio-input, .option-set-option .stylized-checkbox-input")&&($this.parents(".option-set-contents").length<1)){
var $thisOptionSetWrapper=$this.closest(".option-set-option-wrapper");
if($this.is(":checked")){
$thisOptionSetWrapper.addClass("checked");
}else{
$thisOptionSetWrapper.removeClass("checked");
}
if($this.is(":disabled")){
$thisOptionSetWrapper.addClass("disabled");
}else{
$thisOptionSetWrapper.removeClass("disabled");
}
}
});

});







$(".stylized-select").each(function $vpfn_RQZTiIyt3XeBgrplD$KWQA101$31(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
$(this).trigger("initializeControl");
});



$("body").on("keyup change",".stylized-select",function $vpfn_RQZTiIyt3XeBgrplD$KWQA107$53(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
var chosenContents;
var chosenVal=$(this).val();
$(this).find("option").each(function $vpfn_RQZTiIyt3XeBgrplD$KWQA110$36(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
if($(this).attr("value")==chosenVal){
chosenContents=$(this).html();
}
});
$(this).parent().find(".stylized-select-label").html(chosenContents);
});



if(vp.browser.isIE&&(vp.browser.ver===8||vp.browser.ver===9)){
$("body").on("mousedown",".stylized-select",function $vpfn_RQZTiIyt3XeBgrplD$KWQA121$54(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
$(this).css('width',$(this).outerWidth()+'px').css('border-width','0');
});
}




$("body").on("click",".collapsible-header",function $vpfn_RQZTiIyt3XeBgrplD$KWQA129$49(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
var $parent=$(this).parent();
if($parent.hasClass("collapsible-open")){

$parent.children(".collapsible-content").css("display","block").slideUp(function $vpfn_RQZTiIyt3XeBgrplD$KWQA133$85(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
$(this).trigger("collapsibleClose");
});
$parent.removeClass("collapsible-open");
}
else{
$parent.children(".collapsible-content").slideDown(function $vpfn_RQZTiIyt3XeBgrplD$KWQA139$63(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
$(this).trigger("collapsibleOpen");
});
$parent.addClass("collapsible-open");
}


if(($parent.parent().hasClass("accordion"))&&!($parent.parent().hasClass("accordion-multiple"))){
$parent.siblings().removeClass("collapsible-open").children(".collapsible-content").slideUp();
}
});






$(".tabs").trigger("initializeControl");


function setTabsContent(elm){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
var $this=$(elm);


var $tabVal=$($this.val());

$tabVal.siblings().removeClass("tab-selected");

$tabVal.addClass("tab-selected");

if($this.closest(".tabs").hasClass("tabs-accordionized-ie8")){
setTabHeadersAccordionizedIE8($(elm));
}


if(vp.browser.isIE&&vp.browser.ver<9){
var chosenName=$this.attr("name");
var chosenValue=$this.attr("value");
$("input[name='"+chosenName+"']").each(function $vpfn_RQZTiIyt3XeBgrplD$KWQA177$55(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
var $thisRadioInSameGroup=$(this);
if($thisRadioInSameGroup.attr("value")==chosenValue){
$thisRadioInSameGroup.addClass("checked");
}else{
$thisRadioInSameGroup.removeClass("checked");
}
});
}
}setTabsContent._vpfn='$vpfn_HlvB4M$LeQ5cgcM6ltZVrQ159$4';

function setTabHeadersAccordionizedIE8($elm)
{if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
var $this=$elm;
var thisId=$this.attr("id");

$this.closest(".tabs").children(".tabs-contents").children(".tabs-headers-header").each(function $vpfn_RQZTiIyt3XeBgrplD$KWQA193$96(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
var $thisHeader=$(this);
if($thisHeader.children("label").attr("for")==thisId){
$thisHeader.addClass("tab-header-open");
}
else{
$thisHeader.removeClass("tab-header-open");
}

});
}setTabHeadersAccordionizedIE8._vpfn='$vpfn_MP9FzhkxtQs1p0aEQPUsaA188$4';

$("body").on("change",".tabs-headers > :radio, .tabs-headers-header > :radio",function $vpfn_RQZTiIyt3XeBgrplD$KWQA205$84(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
setTabsContent(this);
});

$("body").on("accordionizeTab","*",function $vpfn_RQZTiIyt3XeBgrplD$KWQA209$41(event){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
event.stopPropagation();
var $this=$(this);

if($this.is(".tabs")){
var $thisTabs=$(this);


var getMaxWidth=function $vpfn_6bllJIJdOdtdJ01vUObEFA217$30(e){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
return Math.max.apply(Math,
$thisTabs.find($(e))
.map(function $vpfn_RQZTiIyt3XeBgrplD$KWQA220$29(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}return $(this).width();})
.get());
};


if($thisTabs.hasClass("tabs-accordionized")&&($thisTabs.children(".tabs-headers").width()<=getMaxWidth(".tabs-contents"))){
$thisTabs.removeClass("tabs-accordionized");

if($("body").hasClass("ie8"))
{
$thisTabs.removeClass("tabs-accordionized-ie8");
$thisTabs.children(".tabs-headers").append($thisTabs.children(".tabs-headers").find(".tabs-headers-header"));
}else{
$thisTabs.find(".tabs-headers").append($thisTabs.find(".tabs-headers-header"));
}
}


if(!($thisTabs.hasClass("tabs-always"))&&($thisTabs.children(".tabs-headers").width()>getMaxWidth(".tabs-contents")))
{
$thisTabs.addClass("tabs-accordionized");




if($("body").hasClass("ie8"))
{
$thisTabs.addClass("tabs-accordionized-ie8");


if(!$thisTabs.hasClass("tabs-pre-accordionized")){
$thisTabs.children(".tabs-headers").find(".tabs-headers-header").each(function $vpfn_RQZTiIyt3XeBgrplD$KWQA251$94(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
var $thisHeader=$(this);
var $thisHeaderInput=$thisHeader.children("input");
var $thisHeaderLabelClone=$thisHeader.find("label").clone();
$thisHeaderLabelClone.insertBefore($($thisHeaderInput.val()));
$thisHeaderLabelClone.wrap("<div class='tabs-headers-header'></div>");

if($thisHeaderInput.is(":disabled"))
{
$thisHeaderLabelClone.parent().addClass("tabs-headers-header-disabled");
}

});
$thisTabs.addClass("tabs-pre-accordionized");
}


setTabHeadersAccordionizedIE8($thisTabs.children(".tabs-headers").find(":radio:checked"));
}
else
{

$thisTabs.children(".tabs-headers").find(".tabs-headers-header").each(function $vpfn_RQZTiIyt3XeBgrplD$KWQA273$90(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
var $thisHeader=$(this);
$thisHeader.insertBefore($($thisHeader.children("input").val()));
});
}
}
}
});


function accordionizeTabs()
{if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
$(".tabs").each(function $vpfn_RQZTiIyt3XeBgrplD$KWQA285$24(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
$(this).trigger("accordionizeTab");
});
}accordionizeTabs._vpfn='$vpfn_QAEKat0lfIUoiBFTTl0WQA283$4';
$("body").ready(accordionizeTabs);
$(window).resize(accordionizeTabs);








if(vp.browser.isIE&&vp.browser.ver<9){

$(".stylized-checkbox :checkbox, .stylized-radio :radio, fieldset.buttonbar :checkbox, fieldset.buttonbar :radio, .tabs :radio").trigger("initializeControl");
}

$("body").on("change",".stylized-checkbox :checkbox, fieldset.buttonbar :checkbox, .stylized-select",function $vpfn_RQZTiIyt3XeBgrplD$KWQA304$107(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
if(this.checked){
$(this).addClass("checked");
}else{
$(this).removeClass("checked");
}
});
$("body").on("change","fieldset.buttonbar :radio, .tabs :radio",function $vpfn_RQZTiIyt3XeBgrplD$KWQA311$70(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
var $thisRadio=$(this);
var chosenName=$thisRadio.attr("name");
var chosenValue=$thisRadio.attr("value");
$("input[name='"+chosenName+"']").each(function $vpfn_RQZTiIyt3XeBgrplD$KWQA315$51(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
var $thisRadioInSameGroup=$(this);
if($thisRadioInSameGroup.attr("value")==chosenValue){
$thisRadioInSameGroup.addClass("checked");
}else{
$thisRadioInSameGroup.removeClass("checked");
}
});
});


var originalJQueryPropMethod=$.fn.prop;
$.fn.prop=function $vpfn_jb2oXLpesiN5QK7V3Y$C_A327$16(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
var $this=$(this);


var ret=originalJQueryPropMethod.apply(this,arguments);


if((arguments[1]!==null&&arguments[1]!==undefined)&&(arguments[0]=="disabled"||arguments[0]=="checked")){

if(vp.browser.isIE&&vp.browser.ver<9){
if(arguments[1]){
$this.addClass(arguments[0]);
}
else{
$this.removeClass(arguments[0]);
}
}

if($this.is(".option-set .stylized-radio-input, .option-set .stylized-checkbox-input")&&($this.parents(".option-set-contents").length<1))
{
var $thisOptionSetOption=$this.closest(".option-set-option");
var $thisOptionSetWrapper=$this.closest(".option-set-option-wrapper");
if(arguments[1]){
$thisOptionSetOption.addClass(arguments[0]);
$thisOptionSetWrapper.addClass(arguments[0]);
}
else{
$thisOptionSetOption.removeClass(arguments[0]);
$thisOptionSetWrapper.removeClass(arguments[0]);
}


}
}


if((arguments[1]!==null&&arguments[1]!==undefined)&&(arguments[0]=="checked")&&($this.parent().hasClass("tabs-headers-header"))){
setTabsContent(this);
}

return ret;
};






$(".option-set .stylized-radio-input, .option-set .stylized-checkbox-input").trigger("initializeControl");


$("body").on("click",".option-set-option-wrapper",function $vpfn_RQZTiIyt3XeBgrplD$KWQA378$56(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
var $this=$(this);
var $thisOptionInput=$this.find(".option-set-option input.stylized-radio-input");

if(($thisOptionInput.length>0)&&!($thisOptionInput.is(":disabled"))){

var optWasChecked=$thisOptionInput.prop("checked");

$this.closest(".option-set").find(".option-set-option input").each(function $vpfn_RQZTiIyt3XeBgrplD$KWQA386$79(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
$(this).prop("checked",false);
});
$thisOptionInput.prop("checked",true);
if(!optWasChecked){
$thisOptionInput.trigger("change");
}
}
});

$("body").on("change",".option-set .stylized-radio-input, .option-set .stylized-checkbox-input",function $vpfn_RQZTiIyt3XeBgrplD$KWQA396$102(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
var $this=$(this);


if($this.parents(".option-set-contents").length<1)
{
var $thisOptionSetOption=$this.closest(".option-set-option");
var $thisOptionSetWrapper=$this.closest(".option-set-option-wrapper");
if($this.is(":checked")){
$thisOptionSetOption.addClass("checked");
$thisOptionSetWrapper.addClass("checked");
}else{
$thisOptionSetOption.removeClass("checked");
$thisOptionSetWrapper.removeClass("checked");
}


if($this.is(".stylized-radio-input")){
$(this).closest(".option-set").find(".stylized-radio-input").each(function $vpfn_RQZTiIyt3XeBgrplD$KWQA414$82(){if(!window.__noTrace){__td[__ti]=arguments;__ti=__ti>=__MT?0:__ti+1;}
var $this=$(this);
var $thisOptionSetOption=$this.closest(".option-set-option");
var $thisOptionSetWrapper=$this.closest(".option-set-option-wrapper");
if(!($this.is(":checked"))){
$thisOptionSetOption.removeClass("checked");
$thisOptionSetWrapper.removeClass("checked");
}
});
}
}
});

});



