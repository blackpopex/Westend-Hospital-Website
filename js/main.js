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


//onclick slideDown accordion2 for 
var myAcc = document.getElementsByClassName("accordion");
var i;  
for (i = 0; i < myAcc.length; i++) {
    myAcc[i].addEventListener("click", function() {
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

function scrollFunction() {
    if(document.documentElement.scrollTop > 500 || document.body.scrollTop > 500) {
        document.getElementById("myHeaderMenu").classList.add("navbarAnimation");
        topBtn.style.display = "block";
    } else {
        document.getElementById("myHeaderMenu").classList.remove("navbarAnimation");
        topBtn.style.display = "none";
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
searchBTN.classList.toggle("fa-times");
})

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
   var overlay = document.getElementById("search-Overlay");
  if (event.target == overlay) {
    overlay.classList.remove("active");
    searchBTN.classList.remove("fa-times")
}
}
/*
//remove preloader when webpage has finished loading. 
var myPreLoader = document.getElementById("preLoader"); 
window.addEventListener("load", function(){
    myPreLoader.style.display = "none";
})
*/

//add classname if media screen is less than 600px

if(window.matchMedia("(max-width:600px)").matches) {
    var slideAdvert = document.getElementById("hmoAvant"); 
    slideAdvert.classList.add("slickAdvert");
} else {
    slideAdvert.classList.remove("slickAdvert");
}

//activates swiper for mobile
const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
  
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
    },
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  
    // And if we need scrollbar
    scrollbar: {
      el: '.swiper-scrollbar',
    },
  });

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
        const searchBox = document.querySelector("searchResult");
        const a = searchBox.querySelectorAll("searchResult > title");
        a.style.color="#828282";
      }
    }
      xmlHttp.open("GET", "liveSearch.php?q="+str, true); 
      xmlHttp.send();
    }
  