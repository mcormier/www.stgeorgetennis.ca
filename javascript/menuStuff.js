function setActiveTab(tabID) {

var currTabElem = document.getElementById(tabID);

currTabElem.setAttribute("class", "menuItem activeMenuItem"); 
currTabElem.setAttribute("className", "menuItem activeMenuItem");

return; 
}