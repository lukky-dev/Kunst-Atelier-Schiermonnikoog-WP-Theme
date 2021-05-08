window.onload = function(){
    getheader();
}

var header;

var headerOpen = false;

function getheader(){
    header = document.getElementById("menu-top-menu");
    headerButton = document.getElementById("toggle-header-button");
}

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