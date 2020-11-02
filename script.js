document.querySelector(".hamburger-menu").addEventListener("click", () => {
    document.querySelector(".container").classList.toggle("change");
});

document.querySelector(".scroll-btn").addEventListener("click", () => {
    document.querySelector("html").style.scrollBehavior = "smooth";
    setTimeout(() => {
        document.querySelector("html").style.scrollBehavior = "unset";
    }, 1000);
});

var counter = 1;
setInterval(function () {
    document.getElementById('radio' + counter).checked = true;
    counter++;
    if (counter > 4) {
        counter = 1;
    }
}, 5000);
document.getElementById('pricing-plan-button').addEventListener("click", function () {
    document.querySelector('.bg-modal').style.display = "flex";
});
document.querySelector('.close').addEventListener("click", function () {
    document.querySelector('.bg-modal').style.display = "none";
});