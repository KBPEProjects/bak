<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Homepage V2 base template</title>
    <link rel="stylesheet" href="styles.css" />
</head>

<body>
    <header>
        <div class="container">
            <div class="logo">
                <a href="">
                    <img src="rsc/" alt="BAK Logo" title="BAK Logo" />
                </a>
            </div>
            <nav class="menu">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Kitchens</a></li>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Inspiration</a></li>
                    <li><a href="#">Our Showroom</a></li>
                </ul>
            </nav>
            <div class="call">
                <a href="">Call 01224 980221</a>
            </div>
            <div class="cta">
                <a href="">Book your Design Consultation</a>
            </div>
        </div>
    </header>

    <div class="splash-block" style="background-image:url(rsc/Carnegie-stone-grey-heritage-grey-Gallery-1.png)">
        <div class="container">
            <div class="splash-revolver">
                <h1>Classic Kitchen <br/>Collection</h1>
                <p>Atur sim rerum list fugia volum sumquodit velliquis cumquat ugia volum sumquodit. Atur sim rerum list fugia volum</p>
            </div>            
        </div>
    </div>
    
    <div class="content-block bon-accord-classic-kitchen-favourites">
        <div class="container">
            <div class="heading-block">
                <h2>Classic Kitchen Favourites</h2>
                <p>Our customer favourites.. Designed for modern living, individuality and practicality that will sit comfortably in the busy world and lifestyles of today. Recently, modern classic style has enjoyed a resurgence in popularity in the kitchen.</p>
            </div>
            <?php
            for($i=0;$i<3;$i++){ ?>
                <div class="feature-block">
                    <div class="feature-photo" style="background-image:url(rsc/Ashbourne-gallery-8.png)">
                        [LOVEHEART]
                    </div>
                    <div class="feature-content">
                        <h3>Ashbourne</h3>
                        <p>
                            <strong>Grained Painted Effect</strong> volum sumquodit velliquis cumquat ugia volum sumquodit.
                        </p>
                    </div>
                </div><?php
            }
            ?>            
        </div>
    </div>

    <div class="content-block bon-accord-latest-classic-kitchens">
        <div class="container">
            <div class="heading-block">
                <h2>Our latest Classic Kitchens</h2>
                <p>
                    Designed for modern living, individuality and practicality that will sit comfortably in the busy world and lifestyles of today.<br/> 
                    Recently, modern classic style has enjoyed a resurgence in popularity in the kitchen.
                </p>
            </div>
            <?php
            for($i=0;$i<2;$i++){ ?>
                <div class="feature-block">
                    <div class="feature-photo" style="background-image:url(rsc/BAK_Brochure_Cover_Mockup_Full.png)">
                        <img src="rsc/" alt="" title="" />
                    </div>
                    <div class="feature-content">
                        <h3>Ashbourne</h3>
                        <p>
                            <strong></strong> short description of kitchen range and style here.
                        </p>
                        <p>
                            <a href="#">View Gallery</a>
                        </p>
                    </div>
                </div><?php
            }
            ?>
        </div>
    </div>

    <div class="content-block classic-gallery">
        <div class="container">
            <div class="heading-block">
                <h2>• The Classic Gallery •</h2>
                <p>
                    This is a place to view all of the particular kitchen range together. Full width imagery, side by side presenting range, colour and features for the customer to browse and compare.
                </p>
            </div>
            <div class="classic-gallery-block">
                <div class="classic-gallery-revolver">
                    <?php for($i=0;$i<5;$i++){ ?>
                        <div><div class="photo-slide" style="background-image:url(rsc/Ashbourne-gallery-2.png)"></div></div>
                        <?php
                    } ?>
                </div>
                <div class="classic-gallery-content">
                    <div class="classic-gallery-content-block">
                        <h3>Kitchen Range</h3>
                        <p>Ashbourne Classic Kitchen <br />Painted Solid Ash</p>
                    </div>
                    <div class="classic-gallery-content-block">
                        <h3>Colour</h3>
                        <p>Stone Worktops<br />Heritage Grey Doors</p>
                    </div>
                    <div class="classic-gallery-content-block">
                        <h3>Kitchen Range</h3>
                        <p>Add feature if all<br />available and suitable</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content-block bon-accord-classic-kitchen-favourites">
        <div class="container">
            <div class="heading-block">
                <h2>It's all in the detail</h2>
                <p>Add a personal touch to any kitchen range with customisable, bespoke elements and features designed to elevate the style and functionality of your space. Create your dream kitchen, tailored to your unique taste and lifestyle.</p>
            </div>
            <?php
            for($i=0;$i<3;$i++){ ?>
                <div class="feature-block">
                    <div class="feature-photo" style="background-image:url(rsc/Knob-Handles-Inner.png)">
                    </div>
                    <div class="feature-content">
                        <h3>Worktops</h3>
                        <p>We have a stunning array of workstops to complement your kitchen style...Us am explict invelectiam, con nem fuga. Aliquia dolent laut quame perions equatu.</p>
                    </div>
                </div><?php
            }
            ?>            
        </div>
    </div>

    <div class="content-block bon-accord-kitchens-next-steps">
        <div class="container">
            <div class="heading-block">
                <h2>Next Steps</h2>
                <p>Discover the full range of Kitchens, styles, colours and features by exploring our state of the art showroom or booking a <a href="#">Free Design Appointment.</a></p>
            </div>
        </div>
    </div>

    <div class="content-block bon-accord-kitchens-showroom">
        <div class="container">
            <div class="feature-block">
                <div class="feature-photo">
                    <img src="rsc/Bon Accord Kitchens_Showroom.svg" alt="" title="" />
                </div>
                <div class="feature-content">
                    <h3>Visit Aberdeen Showroom</h3>
                    <p>Be inspired! Explore the full range of stunning Kitchen collections, workstops, colours and finishes in person</p>
                    <p><a href="#">GET DIRECTIONS</a></p>
                </div>
            </div>
            <div class="feature-block">
                <div class="feature-photo">
                    <img src="rsc/Bon Accord Kitchens_Design Appointment.svg" alt="" title="" />
                </div>
                <div class="feature-content">
                    <h3>Free Design Appointment</h3>
                    <p>See your new Kitchen come to life from the comfort of your own home with one of our friendly Kitchen designer.</p>
                    <p><a href="#">BOOK DESIGN APPOINTMENT</a></p>
                </div>
            </div>            
        </div>
    </div>

    <div class="content-block bon-accord-kitchens-collection-brochure">
        <div class="container">
            <div class="feature-block">
                <div class="feature-content">
                    <h2>Heather's Classic <br /> Country Kitchen</h2>
                    <p>
                        Get inspired by exploring our customer kitchens, showcasing favorite styles, trends, and features to bring to your own space.<br /> 
                        See these kitchens in action and discover how Bon Accord Kitchens have truly become the heart of each home.
                    </p>
                    <p>
                        <a href="#">View Kitchen</a>
                    </p>
                </div>
            </div>
            <div class="feature-photo" style="background-image:url(rsc/Bloomsbury-Kitchen-Gallery-8.png)">
                <div class="feature-photo-inset" style="background-image:url(rsc/Brazen-Magnet-Milford-28.png)">
                </div>
            </div>            
        </div>
    </div>

    <div class="testimonials-block">
        <div class="container">
            <div class="heading-block">
                <h2>Why customers love Bon Accord</h2>
                <p>Don't just take our word for it! Read the latest Bon Accord Kitchen reviews, according to our customers...</p>
            </div>
            <div class="testimonials-revolver">
                <div class="testimonial-block">
                    <div class="testimonial-quote">
                        <h3>“Top-notch service”</h3>
                        <p class="rating"></p>
                        <p class="quote">
                            “I'm thrilled with my new kitchen
                            from Bon Accord Kitchens! The team
                            was professional, friendly, and really
                            listened to what I wanted. The design
                            is beautiful, and the installation quality
                            is excellent. Highly recommend for
                            anyone looking for top-notch service!”
                        </p>
                        <h4>Mrs Duncan</h4>
                    </div>
                </div>
            </div>            
        </div>
    </div>



    <div class="content-block bon-accord-kitchens-manufacturers">
        <div class="container">
            <div class="heading-block">
                <h2>Luxury for every lifestyle</h2>
                <p>Discover beautifully crafted kitchens from three of the world's leading manufacturers, <br /> each offering unique styles and exclusive design features, tailored to your home and lifestyle.</p>
            </div>
            <ul>
                <li><a href=""><img src="rsc/brand_ballerina.png" alt="" title="" /></a></li>
                <li><a href=""><img src="rsc/brand_masterclass.png" alt="" title="" /></a></li>
                <li><a href=""><img src="rsc/brand_nobilia.png" alt="" title="" /></a></li>
            </ul>
            <p>
                <a href="#">Kitchen Brands</a>
            </p>            
        </div>
    </div>

    <div class="content-block contact">
        <div class="container">
            <div class="block-details">
                <div class="heading-block">
                    <h2>Speak to our team</h2>
                    <p>
                        Would you like to discuss your Kitchen plans with us today?<br />
                        Our friendly team will be pleased to help with any questions you may have.<br />
                        Give us a call on
                    </p>
                </div>
                <p>
                    <a href="tel:01224980221">01224 980221</a>
                </p>
            </div>
        </div>
    </div>
</body>

</html>