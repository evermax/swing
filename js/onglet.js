var menu = {"index.php":"menu_index",
"description.php":"menu_description",
"images.php":"menu_photo",
"news.php":"menu_news",
"historique.php":"menu_historique",
"contacts.php":"menu_contacts"};
var pageurl = (location.pathname.substring(location.pathname.lastIndexOf("/") + 1));

if(pageurl == ''){pageurl = "index.php"}

document.getElementById(menu[pageurl]).className="active";
