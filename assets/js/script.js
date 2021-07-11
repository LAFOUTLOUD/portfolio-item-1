// the color of the nav changes on scroll
window.onscroll = function() {

    let top = window.scrollY;

    // let links = document.getElementById('nav-links');

    if (top >= 50) {
        nav.style.backgroundColor = '#0B1C41';
        nav.style.border = 'none';
        nav.style.transition = '0.1s';
    } else {
        nav.style.backgroundColor = 'transparent';
        nav.style.border = '1px solid rgba(255, 255, 255, 0.1)';
        nav.style.transition = '0.3s';
    }

}

/*

// getting the nav links to highlight when you are on their pages

// https://stackoverflow.com/questions/6964503/using-javascript-to-highlight-current-page-in-navbar

var url = "http://example.com/products.html".split("/"); //replace string with location.href
var navLinks = document.getElementsByTagName("nav")[0].getElementsByTagName("a");
//naturally you could use something other than the <nav> element
var i=0;
var currentPage = url[url.length - 1];
for(i;i<navLinks.length;i++){
  var lb = navLinks[i].href.split("/");
  if(lb[lb.length-1] == currentPage) {
   navLinks[i].className = "current";

  }
  }
  
  
  
// mouseenter / mouseleave?

https://stackoverflow.com/questions/11371550/change-hover-css-properties-with-javascript

*/