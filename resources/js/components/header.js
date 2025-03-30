/* This code is for the accordion in the Menu Navigation from SmartPhone Screen */

var navbar = document.getElementsByClassName("navbar")[0];
var accordionButton = document.getElementsByClassName("accordion");
var i;

for(i = 0; i < accordionButton.length; i++){

    accordionButton[i].addEventListener("click", function(){

        if (navbar.style.maxHeight) {
            navbar.style.maxHeight = null;
          } else {
            navbar.style.maxHeight = navbar.scrollHeight + "px";
          } 
    });
}
