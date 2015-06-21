var protocol = window.location.protocol;
var hostname = window.location.hostname;
var port = window.document.location.port;
var full_pathname = window.location.pathname;
var split_pathname = full_pathname.split( '/' );
var pathname = split_pathname[1];
var pathname2 = split_pathname[2];
var pathname3 = split_pathname[3];
/*Server path*/
var base_url = protocol+"//"+hostname+"/"+pathname;
/*Server path*/
