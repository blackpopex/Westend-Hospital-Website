//LIVE SEARCH SCRIPT FOR SEARCH BAR, INTEGRATED WITH LIVE SERVER USING AJAX, PHP and XML
function liveSearch(str) {                                     
  if (str.length == 0) {                          
  document.getElementById("searchResult").innerHTML = document.getElementById("searchResult2").innerHTML;
  return;
}
/**
else {
  document.getElementById("searchResult").innerHTML = document.getElementById("searchInput").value;
}
*/
document.getElementById("searchBTN").onclick = function clearInput(){
document.getElementById("searchInput").value = "";
document.getElementById("searchResult").innerHTML = document.getElementById("searchResult2").innerHTML;
}
var xmlHttp = new XMLHttpRequest(); 
xmlHttp.onreadystatechange = function () {
if(this.readyState == 4 && this.status == 200) {
  document.getElementById("searchResult").innerHTML = this.responseText;
  document.getElementById("searchResult").style.color="#828282";
}
}
xmlHttp.open("GET", "../liveSearch.php?q="+str, true); 
xmlHttp.send();
}
