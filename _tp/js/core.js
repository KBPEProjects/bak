jQuery(document).ready(function(){
    
    if(jQuery('.splash-revolver').length > 0){
        jQuery('.splash-revolver').slick({
            fade: true,
            cssEase: 'linear',
            dots: false,
            arrows: true,
            infinite: true,
            autoplay: true,
            slidesToShow:1,
            slidesToScroll:1,
            autoplaySpeed:3000,
            prevArrow:'<i class="fa-solid fa-chevron-left l"></i>',
            nextArrow:'<i class="fa-solid fa-chevron-right r"></i>',
        });
    }
})