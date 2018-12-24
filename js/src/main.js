$(document).ready(function () {

  $('.more-services').on('click', function () {
    $(this).hide().parent().find('.list li.more').fadeIn();
  });

var headerHeight = $('.main-nav__header').height();

$('.main-nav__list a, .promo a.btn').on('click', function (evt) {
    evt.preventDefault();

    var coord = $($.attr(this, 'href')).offset().top;

    if ($(window).width() < 1201) {
      coord -= headerHeight;
    }

    $('html, body').animate({
        scrollTop: coord
    }, 500);
});

var navMain = $("#navbar");
navMain.on("click", "a", null, function () {
  navMain.collapse('hide');
});

  $(".phone-input").mask("+7 (999) 999-99-99");

  $(".name-input").focus(function() {
    $(this).removeClass("fill-error");
    $(this).attr("placeholder", "Ваше имя*");
  });

  $(".phone-input").focus(function() {
    $(this).removeClass("fill-error");
    $(this).attr("placeholder", "Ваш телефон*");
  });

  $("form").submit(function() {
    var e = !1,
    i = /[^а-яЁё\s]/i,
    o = $(this).find(".name-input"),
    t = $(this).find(".phone-input");

    if ("" == o.val() ? (o.addClass("fill-error"), o.attr("placeholder", "*Заполните поле"), e = !0) : i.test(o.val()) ? (o.addClass("fill-error"), o.attr("placeholder", "Неверный формат имени"), o.val(""), e = !0) : (o.removeClass("fill-error"), o.attr("placeholder", "Ваше имя")), "" == t.val() ? (t.addClass("fill-error"), t.attr("placeholder", "*Заполните поле"), e = !0) : (t.removeClass("fill-error"), t.attr("placeholder", "Ваш телефон")), e) return !1
  });

});
