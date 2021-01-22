$(document).redy(function() {
            $('.carousel__inner').slick({
                speed: 1200,
                adaptiveHeight: true,
                prevArrow: '<button type="button" class="slick-prev"><img src="icons/arrow_left_dark.png"></button>',
                nextArrow: '<button type="button" class="slick-next"><img src="icons/arrow_right_dark.png"></button>',
                responsive: [{
                        breakpoint: 992,
                        settings: {
                            dots: true,
                            arrows: false
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            dots: true,
                            arrows: false
                        }
                    }
                ]
            });