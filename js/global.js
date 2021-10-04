(function ($) { //document ready
    $(window).load(function(){});

    $(window).on('scroll', function () {});

    $('.hamburger').on('click', function(){
        $(this).toggleClass("active");
        $('.nav_mobile').toggleClass('open');
        $('.nos_actions_sublinks').addClass("closed");
    });

    $('nav .menu-item-has-children').on('click', function(){
        event.stopPropagation();
        $(this).toggleClass('active').children("ul").slideToggle();
    });

    //Posts filter - Load more
    if( $('.template_news_wrap').length ) {
        var loadMoreBtn = $('.load_more_btn');
        var responseDiv = document.getElementById('response');
        var page = 1;

        $('.filter_wrap .single_item').on('click', function(){
            $('.filter_wrap .single_item').removeClass('active');
            $(this).addClass("active");
        });

        loadMoreBtn.on('click', function () {
            var category = loadMoreBtn.data('category');
            var totalPosts = parseInt($(this).data('total-posts'));

            $.ajax({
                url: $('#response').data('action'),
                data: {
                    action: 'postsfilter',
                    page: page+=1,
                    category: category
                }, // form data
                type: 'POST', // POST
                beforeSend: function (xhr) {},
                success: function (data) {
                    if( data.length > 100 ) {
                        responseDiv.innerHTML += data;

                        $([document.documentElement, document.body]).animate({
                            // scrollTop: $(document).scrollTop() + $('#response').height()
                            scrollTop: $(document).scrollTop() + 400
                        }, 1000);
                    }
                },
                complete: function (xhr, status) {
                    if ( $('.single_news').length >= totalPosts ) {
                        loadMoreBtn.addClass('disabled');
                    }
                }
            });
            return false;
        });
    }
    //Posts filter - Load more - END

    $('.single_accordion').on('click', function(event) {
        $(this).toggleClass('active');
        $(this).find('.question_content').slideToggle().css('display', 'flex');
    });

    $('.hover_triangle').on('click', function(){
        $('.nos_actions_sublinks').toggleClass("closed");
    });

    var single_activity_swiper = new Swiper('.single_activity_swiper', {
        slidesPerView: 1,
        autoplay: {
            delay: 5000,
        },
        loop: true,
        pagination: {
            el: '.single_activity_swiper .swiper-pagination',
            type: 'bullets',
            clickable: true
        }
    });

    $(window).on('resize', function () {});

    function animateInViewEl() {
        var winHeight = $(window).height();
        var bodyScroll = $(document).scrollTop();
        var calcHeight = bodyScroll + winHeight - 0;

        $('.animate_el').each(function (index, el) {
            if ($(this).offset().top < calcHeight && $(this).offset().top + $(this).height() > bodyScroll) {
                if (!$(this).hasClass('in_view')) {
                    $(this).addClass('in_view');
                }
            }
        });
    }
}(jQuery));