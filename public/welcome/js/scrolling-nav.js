// jQuery to collapse the navbar on scroll
$(window).scroll(function() {
    if ($(".navbar").offset().top > 50) {
        $(".navbar-fixed-top").addClass("top-nav-collapse");
        $(".navbar-fixed-top").addClass("azul");
        $("#brand").attr("src", "/welcome/img/logo_head2.png");

    } else {
        $(".navbar-fixed-top").removeClass("top-nav-collapse");
        $(".navbar-fixed-top").removeClass("azul");
        $("#brand").attr("src", "/welcome/img/logo_head1.png");
    }
});

//jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $(document).on('click', 'a.page-scroll', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});

$(window).load(function() {

  $('header').height($(window).height() + 80);
  $('section .cut').each(function() {
    if ($(this).hasClass('cut-top'))
      $(this).css('border-right-width', $(this).parent().width() + "px");
    else if ($(this).hasClass('cut-bottom'))
      $(this).css('border-left-width', $(this).parent().width() + "px");
  });
});
