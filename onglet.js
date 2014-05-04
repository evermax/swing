var menu = {"index.php":"menu_index",
"description.php":"menu_description",
"images.php":"menu_photo",
"news.php":"menu_news",
"contacts.php":"menu_contacts"};
var pageurl = window.location.href;
pageurl = (pageurl.substr(pageurl.lastIndexOf('/') + 1));

alert(menu[pageurl]);