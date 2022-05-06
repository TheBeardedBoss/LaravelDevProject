// This javascript file has been used to create the Mobile/responsive Navigation
// Unfortunately two seperat JS fiels had to be used as for some reason there were error when both the code blocks were placed in one file, I reckon it is due to include('navbar') however I am not too sure

var hamburger = document.querySelector(".hamburger");
var mobileMenuWrapper = document.querySelector(".mobileMenuWrapper");

hamburger.addEventListener("click", () => {
    mobileMenuWrapper.classList.toggle("active");
});
