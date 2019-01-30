jQuery(function($) {
    $(document).ready(function() {

        $(window).scroll(function(){
          var sticky = $('.header-nofixed'),
              scroll = $(window).scrollTop();

          if (scroll >= 30) sticky.addClass('header-fixed');
          else sticky.removeClass('header-fixed');
        });
        // Mobile menu =============================================================
        $(function() {
            function burger() {
                $('.main-nav').toggleClass('nav-show');
            };
            $('.burger-menu').click(function() {
                burger();
            });
            $('.close').click(function() {
                $('.main-nav').removeClass('nav-show');
            });
            $(window).resize(function() {
                var w = $(window).width();
                if (w >= 768) {
                    $('.main-nav').removeAttr('style');
                }
            });
        });

        // fixed menu ==========================================================
        var $wrapper = $(document.querySelector('.content'));
        var $logo = $wrapper.find('.logo-desctop');
        var $header = $wrapper.find('.header-nofixed');
        var $window = $(window);
        let onScroll = () => {
            var top = parseInt($window.scrollTop());
            if (top > 0) {
                $($logo).css('transform','scale(0.6)');
            } else {
                $($logo).css('transform','scale(1)');
            }
            if (top > 200) {
                $($header).css('background','rgba(255,255,255,1)');
            } else {
                $($header).css('background','rgba(255,255,255,0)');
            }
        };
        onScroll();
        $window.scroll(onScroll);




        // send message ============================================================
        $(".form-reserv").submit(function() {
            var inpFirst = $(this).find('.inp_first');
            var inpSecond = $(this).find('.inp_second');
            var inpFirstInner = $(this).find('.inp_first input');
            var inpSecondInner = $(this).find('.inp_second input');

            var emptyFirst = false;
            var emptySecond = false;

            if (inpFirstInner.val() == "") {
                emptyFirst = true;
            }
            if (inpSecondInner.val() == "") {
                var emptySecond = true;
            }
            if (emptyFirst == true) {
                inpFirst.addClass("error-input");
                inpFirstInner.focus();
            }
            if (emptySecond == true) {
                inpSecond.addClass("error-input");
                inpSecondInner.focus();
            } else {
                var form_data = $(this).serialize();
                $.ajax({
                    type: "POST",
                    url: "/sendmessage.php",
                    data: form_data,
                    success: function() {
                        cleanTnanks(this);
                    }
                });
            }
            return false;
        });

        function cleanTnanks(form) {
            $('.inp_first').removeClass("error-input");
            $('.inp_second').removeClass("error-input");

            $(".inp_first input").val("");
            $(".inp_second input").val("");

            $('.reservation-modal').hide();
            $('.modal-thanks').fadeIn();
        };

        // custom select ===========================================================
        $('select').selectric();

        // modal reservation =======================================================
        $('.modal-show').click(function() {
            $('.overlay').fadeIn();
            $('.reservation-modal').fadeIn();
            $('.close-modal').click(function() {
                $('.overlay').fadeOut();
                $('.reservation-modal').fadeOut();
                $('.modal-thanks').fadeOut();
            });
            $('.overlay').click(function() {
                $('.overlay').fadeOut();
                $('.reservation-modal').fadeOut();
                $('.modal-thanks').fadeOut();
            });
        });

        // slider ==================================================================
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 'auto',
            //   spaceBetween: 83,
            loop: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });

        // slider hover animate ====================================================
        $('.gallery-wrap').hover(function() {
            $('.swiper-slide').toggleClass('slider-animate');
        });
        $('.gallery-wrap').mouseleave(function() {
            $('.swiper-slide').removeClass('slider-animate');
        });
    });
});
