// Кнопка мобильного меню сворачивания
$("#button_mobile__menu").click(function () {
    $("#button_mobile__menu").toggleClass("active");
    $("#block_mobile__menu").toggleClass("active");
});


document.addEventListener("DOMContentLoaded", function line1() {
    setTimeout(() => document.querySelector('.line-1').classList.add('active'), 500);
});

document.addEventListener("DOMContentLoaded", function line2() {
    setTimeout(() => document.querySelector('.line-2').classList.add('active'), 750);
});

document.addEventListener("DOMContentLoaded", function line3() {
    setTimeout(() => document.querySelector('.line-3').classList.add('active'), 1000);
});

document.addEventListener("DOMContentLoaded", function line4() {
    setTimeout(() => document.querySelector('.line-4').classList.add('active'), 1250);
});

document.addEventListener("DOMContentLoaded", function line5() {
    setTimeout(() => document.querySelector('.line-5').classList.add('active'), 1500);
});

// ДЗ Появление блока через 1 минуту и исчезновение через две минуты после появления
document.addEventListener("DOMContentLoaded", function () {
    document.querySelector('.popup__close').onclick = function () {
        document.querySelector('.contain-popup').style.display = "none";
    };

    if (localStorage.getItem("popUpVision") !== 'none') {
        setTimeout(() => document.querySelector('.contain-popup').style.display = "flex", 1000);
    } else {
        return false;
    }

    localStorage.setItem("popUpVision", "none");

    setTimeout(() => document.querySelector('.contain-popup').style.display = "none", 180000);
});

// Появление кнопки наверх при  скроле на 262 пикселя
window.addEventListener('scroll', function () {
    if (pageYOffset > 262) {
        document.querySelector('.to__top').style.opacity = "1";
    } else {
        document.querySelector('.to__top').style.opacity = "";
    }
});

// Плавный скролл
$('.menu-item a').on('click', function() {

    let href = $(this).attr('href');

    $('html, body').animate({
        scrollTop: $(href).offset().top
    }, {
        duration: 370,   // по умолчанию «400»
        easing: "linear" // по умолчанию «swing»
    });

    return false;
});