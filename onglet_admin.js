var pageurl = window.location.href;
pageurl = (pageurl.substr(pageurl.lastIndexOf('/') + 1));
pageurl = (pageurl.split('.')[0]);

document.getElementById(pageurl).style.color="#c00000";
document.getElementById(pageurl).style.borderBottomWidth="3px";
document.getElementById(pageurl).style.borderBottomStyle="solid";
document.getElementById(pageurl).style.borderBottomColor="#c00000";