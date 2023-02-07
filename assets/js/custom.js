$(window).scroll(function() {
    $(".top").css("opacity", 1 - $(window).scrollTop() / 150);
    $(".top-content").css("opacity", 1 - $(window).scrollTop() / 700);
});


window.addEventListener("scroll", function() {
    if (window.scrollY > 50) {
        document.querySelector(".contact-icons").style.transform= "translateX(0)";
    } else {
        document.querySelector(".contact-icons").style.transform= "translateX(-35px)";
    }
});