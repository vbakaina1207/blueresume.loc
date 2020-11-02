$("#button_mobile__menu").click((function () {
    $("#button_mobile__menu").toggleClass("active"), $("#block_mobile__menu").toggleClass("active")
})), document.addEventListener("DOMContentLoaded", (function () {
    setTimeout(() => document.querySelector(".line-1").classList.add("active"), 500)
})), document.addEventListener("DOMContentLoaded", (function () {
    setTimeout(() => document.querySelector(".line-2").classList.add("active"), 750)
})), document.addEventListener("DOMContentLoaded", (function () {
    setTimeout(() => document.querySelector(".line-3").classList.add("active"), 1e3)
})), document.addEventListener("DOMContentLoaded", (function () {
    setTimeout(() => document.querySelector(".line-4").classList.add("active"), 1250)
})), document.addEventListener("DOMContentLoaded", (function () {
    setTimeout(() => document.querySelector(".line-5").classList.add("active"), 1500)
})), document.addEventListener("DOMContentLoaded", (function () {
    if (document.querySelector(".popup__close").onclick = function () {
        document.querySelector(".contain-popup").style.display = "none"
    }, "none" === localStorage.getItem("popUpVision")) return !1;
    setTimeout(() => document.querySelector(".contain-popup").style.display = "flex", 1e3), localStorage.setItem("popUpVision", "none"), setTimeout(() => document.querySelector(".contain-popup").style.display = "none", 18e4)
})), window.addEventListener("scroll", (function () {
    pageYOffset > 262 ? document.querySelector(".to__top").style.opacity = "1" : document.querySelector(".to__top").style.opacity = ""
}));
let smoothLinks = document.querySelectorAll('a[href^="#"]');
for (let e of smoothLinks) e.addEventListener("click", (function (t) {
    t.preventDefault();
    let n = e.getAttribute("href");
    document.querySelector(n).scrollIntoView({behavior: "smooth", block: "start"})
}));

function validate() {
    let e = document.getElementById("in_name"), t = document.getElementById("in_email");
    return e.value ? (e.style.borderBottom = "1px solid green", document.getElementById("in_name_error").style.display = "none", t.value ? (t.style.borderBottom = "1px solid green", document.getElementById("in_email_error").style.display = "none", !0) : (t.style.borderBottom = "1px solid red", document.getElementById("in_email_error").style.display = "block", !1)) : (e.style.borderBottom = "1px solid red", document.getElementById("in_name_error").style.display = "block", !1)
}

function xmlParser(e) {
    $(e).find("work").each((function () {
        $(".links").append('<div class="links__info"><div class="links__info_text"><a href=" ' + $(this).find("link").text() + ' " target="_blank">' + $(this).find("name").text() + '</a></div><div class="links__info_year">' + $(this).find("date").text() + "</div></div>")
    }))
}

function calc() {
    let e = document.getElementById("type_site"), t = document.getElementById("is_seo"), n = document.getElementById("count"), o = document.getElementById("result"), l = 0;
    l += parseInt(e.options[e.selectedIndex].value), l += 1 == t.checked ? parseInt(t.value) : 0, l = parseInt(n.value) * l, o.innerHTML = l
}

$(document).ready((function () {
    $.ajax({type: "GET", url: "/wp-content/themes/blueresume/assets/uploads/works.xml", dataType: "xml", success: xmlParser})
})), $(".main__slogan_head").click((function () {
    $(".jquery-accordion").accordion("disable")
})), $(".top__line_center-logo").click((function () {
    $.ajax({
        url: "_ajax.html", cache: !0, success: function (e) {
            $(".owl-carousel").html(e)
        }, complete: function () {
            alert("После того  как сработал ajax")
        }, error: function () {
            alert("Упс что-то пошло  не так СОРРИ!!!")
        }
    })
})), $(".about__info_text").toggleClass("myClass");