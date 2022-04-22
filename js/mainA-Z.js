function myFunction(x) {
    var sideBar = document.getElementById("sideNavbar");
    x.classList.toggle("change");
    //search bar toggle
    sideBar.classList.toggle("activated");
}


//onclick slideDown accordion on the sidebar
var acc = document.getElementsByClassName("dropbtn");
var i;  
for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling; 
        if (panel.style.maxHeight) {
            panel.style.maxHeight = null;
        } else {
            panel.style.maxHeight = panel.scrollHeight + "px";
        }
    });
}


//Slide down navbar and display the back to top button when document scroll height is > 500
window.onscroll = function() {
    scrollFunction();
}
var topBtn = document.getElementById("myTopBTN");
var stickyNav = document.getElementById("A-Z-List");
var a_zContainer = document.getElementById("a_zContainer");

function scrollFunction() {
    if(document.documentElement.scrollTop > 500 || document.body.scrollTop > 500) {
        /*
        document.getElementById("myHeaderMenu").style.top = "0";
        document.getElementById("myHeaderMenu").style.position = "fixed";
        document.getElementById("myHeaderMenu").style.width = "100%";
        */
        stickyNav.classList.add("sticky");
        a_zContainer.style.width = "100%";
        a_zContainer.style.padding = "0";
        topBtn.style.display = "block";
    } else {
        stickyNav.classList.remove("sticky");
        a_zContainer.style.width = "min(80%, 90rem)";
        a_zContainer.style.padding = "0.2em 0.2em";
        topBtn.style.display = "none";
    }
    
}
//loop through test list and medical services and hide the selection when it get to the last on the loop
var testList = document.getElementsByClassName("test-list"); 
var testNavList = document.getElementById("A-Z-List");

for(i = 0; i < testList.length; i++) {
   if (i == 6){
       testNavList.style.display = "none";
   }
}




function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

/*
function scrollFunction() {
    if (document.body.scrollTop > 1000 || document.documentElement.scrollTop > 1000) {
        document.getElementById("stickNavbar").classList.add("sticky");
    } else {
        document.getElementById("stickNavbar").classList.remove("sticky");
    }
}
*/


//slide down overlay when search BTN is clicked
var searchBTN = document.getElementById("searchBTN");
var overlay = document.getElementById("search-Overlay");

searchBTN.addEventListener("click", function(){
overlay.classList.toggle("active");
searchBTN.classList.toggle("fa-times")
})

//jquery smooth scroll, remove and add active class for each link
/**
$(document).ready(function() {
    var scrollLink = $('.scroll');

    //Smooth scrolling
    scrollLink.click(function(e) {
        e.preventDefault();
        $('body,html').animate({
            scrollTop: $(this.hash).offset().top
        }, 4000);
    });
    // active link switching
    $(window).scroll(function() {
        var scrollbarLocation = $(this).scrollTop();

        scrollLink.each(function() {
            var sectionOffset = $(this.hash).offset().top - 200;

            if (sectionOffset <= scrollbarLocation) {
                $(this).parent().addClass('true');
                $(this).parent().siblings().removeClass('true');
            }
        })
    })
})
*/

const li = document.querySelectorAll(".test-letters-alphabets");
const sectionAlphabets = document.querySelectorAll(".test-names-by-aphabets");

function activeMenu(){
    let len = sectionAlphabets.length;
    while(--len && window.scrollY + 97 < sectionAlphabets[len].offsetTop){}
    li.forEach(ltx=>ltx.classList.remove("true")); 
    li[len].classList.add("true");
}
activeMenu();
window.addEventListener("scroll", activeMenu);


//remove preloader when webpage has finished loading. 
var myPreLoader = document.getElementById("preLoader"); 
window.addEventListener("load", function(){
    myPreLoader.style.display = "none";
})


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




