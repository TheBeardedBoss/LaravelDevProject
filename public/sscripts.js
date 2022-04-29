const hamburger = document.querySelector(".hamburger");
const mobileMenuWrapper = document.querySelector(".mobileMenuWrapper");

hamburger.addEventListener("click",() => {
mobileMenuWrapper.classList.toggle("active");
})