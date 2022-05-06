var topquestions = document.querySelectorAll(".topquestions");

topquestions.forEach((topquestions) => {
    topquestions.addEventListener("click", () => {
        topquestions.classList.toggle("active");
    });
});
