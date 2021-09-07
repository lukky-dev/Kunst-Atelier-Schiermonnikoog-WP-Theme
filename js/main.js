
// call getheader() on load 
window.onload = function(){
    getheader();
}

// header / header toggle button dom element
var header,headerButton;

// bool keeping track of header state
var headerOpen = false;

// find and assign header DOM element to header
function getheader(){
    header = document.getElementById("menu-top-menu");
    headerButton = document.getElementById("toggle-header-button");
}

// toggle between menu open / menu closed states
function toggleHeader(){
    if(headerOpen){
        header.style.display = "none";
        headerButton.innerHTML = '<div class="hamburger-open"><div></div><div></div><div></div></div>';
        headerOpen = false;
    }else{
        header.style.display = "block";
        headerButton.innerHTML = "X";
        headerOpen = true;
    }
}