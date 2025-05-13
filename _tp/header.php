<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Homepage V<?= $i;?> base template</title>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" />
    <link rel="stylesheet" href="dist/css/main.min.css" />
</head>

<body>
<header>
    <div class="container">
        <div class="nav-wrapper">
            <div class="mobile_bar_logobtn">
                <div class="logo">
                    <a href="#">
                        <img src="rsc/baklogo.png" alt="BAK Logo" title="BAK Logo" />
                    </a>
                </div>
                <button id="toggle" class="mobcontrol btnlink neutral outline">
                    <i class="fa-solid fa-bars"></i>
                </button>
            </div>
            <div class="mobile_bar_nav">
                <button id="close" class="mobcontrol btnlink neutral outline">
                    <i class="fa-solid fa-xmark"></i>
                </button>
                <nav class="menu">
                    <ul>
                        <li class="current_page_item"><a href="#">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Kitchens</a></li>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Inspiration</a></li>
                        <li><a href="#">Our Showroom</a></li>
                    </ul>
                </nav>
                <div class="call">
                    <a class="dskp" href="tel:01224980221">Call 01224 980221</a>
                    <a class="mob btnlink neutral outline" href="tel:01224980221">
                        <i class="fa-solid fa-phone-flip"></i>
                    </a>
                </div>
                <div class="cta">
                    <a class="btnlink neutral" href="#">
                        <span class="dskp">Book your Design Consultation</span>
                        <span class="mob">Book Consultation</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>