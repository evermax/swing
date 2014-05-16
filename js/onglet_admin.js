var pageurl = window.location.href;
pageurl = (pageurl.substr(pageurl.lastIndexOf('/') + 1));
pageurl = (pageurl.split('.')[0]);

document.getElementById(pageurl).className="active";
