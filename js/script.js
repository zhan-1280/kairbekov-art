const hamb = document.querySelector("#hamb");
const popup = document.querySelector("#popup");
const menu = document.querySelector("#menu").cloneNode(1);
const header = document.querySelector('#header');
const body = document.body;

hamb.addEventListener("click", hambHandler);

function hambHandler(e) {
    e.preventDefault();
    popup.classList.toggle("open");
    hamb.classList.toggle("active");
    body.classList.toggle("noscroll");
    header.classList.toggle("header-fixed")
    renderPopup();
}

function renderPopup() {
    popup.appendChild(menu);
}

jQuery(function($) {
    $(document).on('click', '.link', function() {
        $('#popup').removeClass('open')
        $('#hamb').removeClass('active')
        $('body').removeClass('noscroll')
        $('header').removeClass('header-fixed')
    })
});

$('.logo').click(() => {
    $('html, body').animate({
        scrollTop: $("#achivments").offset().top
    }, 1000);
})