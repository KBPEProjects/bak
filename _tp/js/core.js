jQuery(document).ready(function(){

    jQuery(window).scroll(function(){
        AdjustScrollNavbar();
    });
    AdjustScrollNavbar();

    jQuery(".mobcontrol").click(function(){
        const action= this.id;
        if(action=="toggle"){
            jQuery("header .container .nav-wrapper .mobile_bar_nav").addClass("menushow");
        }else{
            jQuery("header .container .nav-wrapper .mobile_bar_nav").removeClass("menushow");
        }
        
    })

    if(jQuery('.classic-gallery-revolver').length > 0){
        jQuery('.classic-gallery-revolver').slick({
            fade: true,
            dots: false,
            arrows: true,
            infinite: true,
            autoplay: true,
            slidesToShow:1,
            slidesToScroll:1,
            autoplaySpeed:3000,
            pauseOnHover:false,
            cssEase: 'linear',
            prevArrow:'<i class="fa-solid fa-chevron-left l"></i>',
            nextArrow:'<i class="fa-solid fa-chevron-right r"></i>',
        });
    }
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
            prevArrow:'<i class="fa-solid fa-chevron-left l"></i>',
            nextArrow:'<i class="fa-solid fa-chevron-right r"></i>',
            responsive: [
                { breakpoint:1400,settings:{slidesToShow:3,slidesToScroll:3} },
                { breakpoint:1200,settings:{slidesToShow:3,slidesToScroll:2} },
                { breakpoint:992,settings:{slidesToShow:2,slidesToScroll:2} },
                { breakpoint:767,settings:{slidesToShow:1,slidesToScroll:1} },
                { breakpoint:575,settings:{slidesToShow:1,slidesToScroll:1} }
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
});
function AdjustScrollNavbar(){
    if(jQuery(window).scrollTop() > 80) {
        jQuery("header").addClass("hscrolled");
    }else{
        jQuery("header").removeClass("hscrolled");
    }
}