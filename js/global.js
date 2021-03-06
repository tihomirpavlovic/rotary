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

    //Posts AJAX filter
    if( $('.template_news_wrap').length ) {
        var loadMoreBtn = $('.load_more_btn');
        var responseDiv = document.getElementById('response');
        var page = 1;
        var postsPerPage = 3;
        var totalPosts = parseInt(loadMoreBtn.data('total-posts'));

        $('.filter_wrap .single_item').on('click', function(){
            $('.filter_wrap .single_item').removeClass('active');
            $(this).addClass("active");
        });

        $('.single_item, .load_more_btn').on('click', function () {
            var category = $('.single_item.active').data('category');
            var isLoadMore = ( $(this).hasClass('load_more_btn') );

            if( isLoadMore ) {
                page+=1;
            } else {
                page = 1;
            }

            const url = new URL(location);

            if( category == undefined) {
                url.searchParams.delete('catégorie');
            } else {
                url.searchParams.set('catégorie', category);
            }
            history.replaceState(null, null, url);


            $.ajax({
                url: $('#response').data('action'),
                data: {
                    action: 'postsfilter',
                    loadMore: isLoadMore,
                    page: page,
                    category: category,
                }, // form data
                type: 'POST', // POST
                beforeSend: function (xhr) {},
                success: function (data) {
                    if( isLoadMore && data.length > 100 ) {
                        responseDiv.innerHTML += data;

                        $([document.documentElement, document.body]).animate({
                            // scrollTop: $(document).scrollTop() + $('#response').height()
                            scrollTop: $(document).scrollTop() + 400
                        }, 1000);
                    } else {
                        responseDiv.innerHTML = data;
                    }
                },
                complete: function (xhr, status) {
                    totalPosts = parseInt($('.ajax_post').data('total-posts'));

                    if ( $('.single_news').length >= totalPosts ) {
                        loadMoreBtn.addClass('disabled');
                    } else {
                        loadMoreBtn.removeClass('disabled');
                    }
                }
            });
            return false;
        });
    }
    //Posts AJAX filter - END

    $('.single_accordion').on('click', function(event) {
        $(this).toggleClass('active');
        $(this).find('.question_content').slideToggle().css('display', 'flex');
    });

    $('.hover_triangle').on('click', function(){
        $('.nos_actions_sublinks').toggleClass("closed");
    });


    //Activities sliders
    //Template - Fundraising Projects
    var activitiesGalleries = $('.activity_slider');

    if( activitiesGalleries.length ) {
        var activitiesGalleriesVariables = [];

        for( let i=0; i < activitiesGalleries.length; i++ )
            activitiesGalleriesVariables.push('gallery'+i);

        activitiesGalleries.each(function(index){
            var galleryIndex = $(this).data('index');
            var galleryName = 'activity_slider_' + galleryIndex;
            // var galleryButtonNext = 'activity_slider_btn_next_' + galleryIndex;
            // var galleryButtonPrev = 'activity_slider_btn_prev_' + galleryIndex;
            var galleryPagination = 'activity_slider_pagination_' + galleryIndex;

            var gallerySlideLen = $('.' + galleryName + ' .swiper-slide').length;

            var swiperOptions = {
                slidesPerView: 1,
                autoplay: {
                    delay: 5000,
                },
                loop: true,
                pagination: {
                    el: '.' + galleryPagination,
                    clickable: true,
                    type: 'bullets',
                },
                // navigation: {
                //     nextEl: '.' + galleryButtonNext,
                //     prevEl: '.' + galleryButtonPrev,
                // },
            };

            activitiesGalleriesVariables[index] = new Swiper('.'+galleryName,swiperOptions);
        });
    }
    //Activities sliders end

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