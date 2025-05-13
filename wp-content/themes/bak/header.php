<?php

?>
<!DOCTYPE html>
<html lang="en" class="no-js" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0" />
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header>
    <div class="container">
        <div class="nav-wrapper">
            <div class="mobile_bar_logobtn">
                <div class="logo">
                    <a href="#">
                        <img class="mob" src="<?= get_theme_file_uri('rsc/baklogo_neutral.png');?>" alt="BAK Logo" title="BAK Logo" />
                        <img class="dskp" src="<?= get_theme_file_uri('rsc/baklogo.png');?>" alt="BAK Logo" title="BAK Logo" />
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
<?php
wp_nav_menu(array(
    'menu'              => 'primary',
    'theme_location'    => 'primary',
    'depth'             => 2,
    'container'         => '',
    'container_class'   => '',
    'menu_class'        => 'main-nav'
));
?>
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
