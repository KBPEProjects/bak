jQuery(document).ready(function(){
    
    if(jQuery('.testimonials-revolver').length > 0){
        jQuery('.testimonials-revolver').slick({
            dots: false,
            arrows: true,
            infinite: true,
            autoplay: true,
            slidesToShow:3,
            slidesToScroll:2,
            autoplaySpeed:3000,
            cssEase: 'linear',
            prevArrow:'<i class="fa-solid fa-circle-chevron-left"></i>',
            nextArrow:'<i class="fa-solid fa-circle-chevron-right"></i>',
            responsive: [
                { breakpoint:1400,settings:{slidesToShow:4,slidesToScroll:3} },
                { breakpoint:1200,settings:{slidesToShow:3,slidesToScroll:2} },
                { breakpoint:992,settings:{slidesToShow:3,slidesToScroll:2} },
                { breakpoint:767,settings:{slidesToShow:2,slidesToScroll:1} },
                { breakpoint:575,settings:{slidesToShow:2,slidesToScroll:1} }
            ]
        });
    }
    if(jQuery('.splash-revolver').length > 0){
        jQuery('.splash-revolver').slick({
            dots: false,
            arrows: true,
            infinite: true,
            autoplay: true,
            slidesToShow:1,
            slidesToScroll:1,
            autoplaySpeed:3000,
            cssEase: 'linear',
            prevArrow:'<i class="fa-solid fa-chevron-left l"></i>',
            nextArrow:'<i class="fa-solid fa-chevron-right r"></i>',
        });
    }
})