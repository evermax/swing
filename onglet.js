var menu = {"index.php":"menu_index",
"description.php":"menu_description",
"images.php":"menu_photo",
"news.php":"menu_news",
"contacts.php":"menu_contacts"};
var pageurl = window.location.href;
pageurl = (pageurl.substr(pageurl.lastIndexOf('/') + 1));


document.getElementById(menu[pageurl]).style.color="#c00000";
document.getElementById(menu[pageurl]).style.borderBottomWidth="3px";
document.getElementById(menu[pageurl]).style.borderBottomStyle="solid";
document.getElementById(menu[pageurl]).style.borderBottomColor="#c00000";