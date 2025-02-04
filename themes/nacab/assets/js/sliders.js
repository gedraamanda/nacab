$(document).ready(function () {
// home
    if($('.home-sl')) {
        $('.home-sl').owlCarousel({
            loop: true,
            margin: 10,
            responsiveClass: true,
            navText: ["<img src='https://sitesupportplus.com/nacab/img/left_icon.svg'>", "<img src='https://sitesupportplus.com/nacab/img/right_icon.svg'>"],
            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                400: {
                    items: 1,
                    nav: false
                },
                600: {
                    items: 2,
                    nav: false
                },
                1000: {
                    items: 3,
                    nav: true,
                    loop: true,
                    margin: 20
                }
            }
        })
    }

    //estatuto
    if($('.estatuto-sl')) {
        $('.estatuto-sl').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            navText: ["<img src='https://sitesupportplus.com/nacab/img/left_icon.svg'>", "<img src='https://sitesupportplus.com/nacab/img/right_icon.svg'>"],
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                400: {
                    items: 1,
                    nav: false
                },
                600: {
                    items: 1,
                    nav: false
                },
                1000: {
                    items: 1,
                    nav: true,
                    loop: true,
                    margin: 20
                }
            }
        })
    }

    if($('.mina-sl')) {
        $('.mina-sl').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            navText: ["<img src='https://sitesupportplus.com/nacab/img/left_icon.svg'>", "<img src='https://sitesupportplus.com/nacab/img/right_icon.svg'>"],
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                400: {
                    items: 1,
                    nav: false
                },
                600: {
                    items: 2,
                    nav: false
                },
                1000: {
                    items: 3,
                    nav: true,
                    loop: true,
                    margin: 20
                }
            }
        })
    }

    if($("#sync1")) {
        var sync1 = $("#sync1");
        var sync2 = $("#sync2");
        var slidesPerPage = 3; //globaly define number of elements per page
        var syncedSecondary = true;

        sync1.owlCarousel({
            items: 1,
            slideSpeed: 2000,
            nav: true,
            autoplay: false,
            dots: true,
            loop: true,
            responsiveRefreshRate: 200,
            navText: ['<svg width="100%" height="100%" viewBox="0 0 11 20"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M9.554,1.001l-8.607,8.607l8.607,8.606"/></svg>', '<svg width="100%" height="100%" viewBox="0 0 11 20" version="1.1"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M1.054,18.214l8.606,-8.606l-8.606,-8.607"/></svg>'],
        }).on('changed.owl.carousel', syncPosition);

        sync2
            .on('initialized.owl.carousel', function() {
                sync2.find(".owl-item").eq(0).addClass("current");
            })
            .owlCarousel({
                items: slidesPerPage,
                dots: true,
                nav: true,
                navText: ["<img src='https://sitesupportplus.com/nacab/img/left_icon.svg'>","<img src='https://sitesupportplus.com/nacab/img/right_icon.svg'>"],
                smartSpeed: 200,
                slideSpeed: 500,
                slideBy: slidesPerPage, //alternatively you can slide by 1, this way the active slide will stick to the first item in the second carousel
                responsiveRefreshRate: 100
            }).on('changed.owl.carousel', syncPosition2);

        function syncPosition(el) {
            //if you set loop to false, you have to restore this next line
            //var current = el.item.index;

            //if you disable loop you have to comment this block
            var count = el.item.count - 1;
            var current = Math.round(el.item.index - (el.item.count / 2) - .5);

            if (current < 0) {
                current = count;
            }
            if (current > count) {
                current = 0;
            }

            //end block

            sync2
                .find(".owl-item")
                .removeClass("current")
                .eq(current)
                .addClass("current");
            var onscreen = sync2.find('.owl-item.active').length - 1;
            var start = sync2.find('.owl-item.active').first().index();
            var end = sync2.find('.owl-item.active').last().index();

            if (current > end) {
                sync2.data('owl.carousel').to(current, 100, true);
            }
            if (current < start) {
                sync2.data('owl.carousel').to(current - onscreen, 100, true);
            }
        }

        function syncPosition2(el) {
            if (syncedSecondary && el.relatedTarget === null) {
                var number = el.item.index;
                sync1.data('owl.carousel').to(number, 100, true);
            }
        }

        sync2.on("click", ".owl-item", function(e) {
            e.preventDefault();
            var number = $(this).index();
            sync1.data('owl.carousel').to(number, 300, true);
        });
    }


    $('.owl_one').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        navText: ["<img src='https://sitesupportplus.com/nacab/img/left_icon.svg'>","<img src='https://sitesupportplus.com/nacab/img/right_icon.svg'>"],
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            400: {
                items: 1,
                nav: false
            },
            600: {
                items: 1,
                nav: false
            },
            1000: {
                items: 1,
                nav: true,
                loop: true,
                margin: 20
            }
        }
    });

    $('.owl_two').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        navText: ["<img src='https://sitesupportplus.com/nacab/img/left_icon.svg'>","<img src='https://sitesupportplus.com/nacab/img/right_icon.svg'>"],
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            400: {
                items: 1,
                nav: false
            },
            600: {
                items: 1,
                nav: false
            },
            1000: {
                items: 5,
                nav: true,
                loop: true,
                margin: 20
            }
        }
    })

    $('.owl_three').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        navText: ["<img src='https://sitesupportplus.com/nacab/img/left_icon.svg'>","<img src='https://sitesupportplus.com/nacab/img/right_icon.svg'>"],
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            400: {
                items: 1,
                nav: false
            },
            600: {
                items: 1,
                nav: false
            },
            1000: {
                items: 2,
                nav: true,
                loop: true,
                margin: 20
            }
        }
    })

});