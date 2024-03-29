                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                







(function(window,undefined){
"use strict";





var
document=window.document,
setTimeout=window.setTimeout||setTimeout,
clearTimeout=window.clearTimeout||clearTimeout,
setInterval=window.setInterval||setInterval,
History=window.History=window.History||{};


if(typeof History.initHtml4!=='undefined'){
throw new Error('History.js HTML4 Support has already been loaded...');
}






History.initHtml4=function(){

if(typeof History.initHtml4.initialized!=='undefined'){

return false;
}
else{
History.initHtml4.initialized=true;
}









History.enabled=true;









History.savedHashes=[];







History.isLastHash=function(newHash){

var oldHash=History.getHashByIndex(),
isLast;


isLast=newHash===oldHash;


return isLast;
};








History.isHashEqual=function(newHash,oldHash){
newHash=encodeURIComponent(newHash).replace(/%25/g,"%");
oldHash=encodeURIComponent(oldHash).replace(/%25/g,"%");
return newHash===oldHash;
};







History.saveHash=function(newHash){

if(History.isLastHash(newHash)){
return false;
}


History.savedHashes.push(newHash);


return true;
};







History.getHashByIndex=function(index){

var hash=null;


if(typeof index==='undefined'){

hash=History.savedHashes[History.savedHashes.length-1];
}
else if(index<0){

hash=History.savedHashes[History.savedHashes.length+index];
}
else{

hash=History.savedHashes[index];
}


return hash;
};









History.discardedHashes={};





History.discardedStates={};







History.discardState=function(discardedState,forwardState,backState){


var discardedStateHash=History.getHashByState(discardedState),
discardObject;


discardObject={
'discardedState':discardedState,
'backState':backState,
'forwardState':forwardState
};


History.discardedStates[discardedStateHash]=discardObject;


return true;
};







History.discardHash=function(discardedHash,forwardState,backState){


var discardObject={
'discardedHash':discardedHash,
'backState':backState,
'forwardState':forwardState
};


History.discardedHashes[discardedHash]=discardObject;


return true;
};







History.discardedState=function(State){

var StateHash=History.getHashByState(State),
discarded;


discarded=History.discardedStates[StateHash]||false;


return discarded;
};







History.discardedHash=function(hash){

var discarded=History.discardedHashes[hash]||false;


return discarded;
};









History.recycleState=function(State){


var StateHash=History.getHashByState(State);


if(History.discardedState(State)){
delete History.discardedStates[StateHash];
}


return true;
};





if(History.emulated.hashChange){








History.hashChangeInit=function(){

History.checkerFunction=null;


var lastDocumentHash='',
iframeId,iframe,
lastIframeHash,checkerRunning,
startedWithHash=Boolean(History.getHash());


if(History.isInternetExplorer()){




iframeId='historyjs-iframe';
iframe=document.createElement('iframe');




iframe.setAttribute('id',iframeId);
iframe.setAttribute('src','#');
iframe.style.display='none';


document.body.appendChild(iframe);


iframe.contentWindow.document.open();
iframe.contentWindow.document.close();


lastIframeHash='';
checkerRunning=false;


History.checkerFunction=function(){

if(checkerRunning){
return false;
}


checkerRunning=true;


var
documentHash=History.getHash(),
iframeHash=History.getHash(iframe.contentWindow.document);


if(documentHash!==lastDocumentHash){

lastDocumentHash=documentHash;


if(iframeHash!==documentHash){



lastIframeHash=iframeHash=documentHash;


iframe.contentWindow.document.open();
iframe.contentWindow.document.close();


iframe.contentWindow.document.location.hash=History.escapeHash(documentHash);
}


History.Adapter.trigger(window,'hashchange');
}


else if(iframeHash!==lastIframeHash){



lastIframeHash=iframeHash;






if(startedWithHash&&iframeHash===''){
History.back();
}
else{

History.setHash(iframeHash,false);
}
}


checkerRunning=false;


return true;
};
}
else{




History.checkerFunction=function(){

var documentHash=History.getHash()||'';


if(documentHash!==lastDocumentHash){

lastDocumentHash=documentHash;


History.Adapter.trigger(window,'hashchange');
}


return true;
};
}


History.intervalList.push(setInterval(History.checkerFunction,History.options.hashChangeInterval));


return true;
};


History.Adapter.onDomLoad(History.hashChangeInit);

}






if(History.emulated.pushState){








History.onHashChange=function(event){



var currentUrl=((event&&event.newURL)||History.getLocationHref()),
currentHash=History.getHashByUrl(currentUrl),
currentState=null,
currentStateHash=null,
currentStateHashExits=null,
discardObject;


if(History.isLastHash(currentHash)){


History.busy(false);
return false;
}


History.doubleCheckComplete();


History.saveHash(currentHash);


if(currentHash&&History.isTraditionalAnchor(currentHash)){


History.Adapter.trigger(window,'anchorchange');
History.busy(false);
return false;
}


currentState=History.extractState(History.getFullUrl(currentHash||History.getLocationHref()),true);


if(History.isLastSavedState(currentState)){


History.busy(false);
return false;
}


currentStateHash=History.getHashByState(currentState);


discardObject=History.discardedState(currentState);
if(discardObject){

if(History.getHashByIndex(-2)===History.getHashByState(discardObject.forwardState)){


History.back(false);
}else{


History.forward(false);
}
return false;
}



History.pushState(currentState.data,currentState.title,encodeURI(currentState.url),false);


return true;
};
History.Adapter.bind(window,'hashchange',History.onHashChange);










History.pushState=function(data,title,url,queue){





url=encodeURI(url).replace(/%25/g,"%");


if(History.getHashByUrl(url)){
throw new Error('History.js does not support states with fragment-identifiers (hashes/anchors).');
}


if(queue!==false&&History.busy()){


History.pushQueue({
scope:History,
callback:History.pushState,
args:arguments,
queue:queue
});
return false;
}


History.busy(true);


var newState=History.createStateObject(data,title,url),
newStateHash=History.getHashByState(newState),
oldState=History.getState(false),
oldStateHash=History.getHashByState(oldState),
html4Hash=History.getHash(),
wasExpected=History.expectedStateId==newState.id;


History.storeState(newState);
History.expectedStateId=newState.id;


History.recycleState(newState);


History.setTitle(newState);


if(newStateHash===oldStateHash){

History.busy(false);
return false;
}


History.saveState(newState);


if(!wasExpected)
History.Adapter.trigger(window,'statechange');


if(!History.isHashEqual(newStateHash,html4Hash)&&!History.isHashEqual(newStateHash,History.getShortUrl(History.getLocationHref()))){
History.setHash(newStateHash,false);
}

History.busy(false);


return true;
};










History.replaceState=function(data,title,url,queue){





url=encodeURI(url).replace(/%25/g,"%");


if(History.getHashByUrl(url)){
throw new Error('History.js does not support states with fragment-identifiers (hashes/anchors).');
}


if(queue!==false&&History.busy()){


History.pushQueue({
scope:History,
callback:History.replaceState,
args:arguments,
queue:queue
});
return false;
}


History.busy(true);


var newState=History.createStateObject(data,title,url),
newStateHash=History.getHashByState(newState),
oldState=History.getState(false),
oldStateHash=History.getHashByState(oldState),
previousState=History.getStateByIndex(-2);


History.discardState(oldState,newState,previousState);




if(newStateHash===oldStateHash){

History.storeState(newState);
History.expectedStateId=newState.id;


History.recycleState(newState);


History.setTitle(newState);


History.saveState(newState);



History.Adapter.trigger(window,'statechange');
History.busy(false);
}
else{

History.pushState(newState.data,newState.title,newState.url,false);
}


return true;
};

}







if(History.emulated.pushState){



if(History.getHash()&&!History.emulated.hashChange){
History.Adapter.onDomLoad(function(){
History.Adapter.trigger(window,'hashchange');
});
}

}

};


if(typeof History.init!=='undefined'){
History.init();
}

})(window);
