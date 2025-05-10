<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Homepage V1 base template</title>
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

    <div class="splash-block" style="background-image:url(rsc/Bloomsbury-Kitchen-Gallery-8)">
        <div class="container">
            <div class="splash-revolver">
                <h1>The Kitchen:<br />the heart of the home</h1>
                <p>Expertly made, Exceptionally beautiful</p>
                <p>
                    <a href="#">Book Your Design Consultation</a>
                </p>
            </div>            
        </div>
    </div>
    
    <div class="content-block bon-accord-kitchens-manufacturers">
        <div class="container">
            <div class="heading-block">
                <h2>Start your Kitchen journey</h2>
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

    <div class="content-block bon-accord-kitchens-styles">
        <div class="container">
            <div class="heading-block">
                <h2>Kitchen styles to suit every home</h2>
                <p>
                    Each Bon Accord Kitchen is meticulously designed to establish the kitchen as the heart of your home.<br/>
                    Offering a variety of ranges, including modern, shaker, and traditional, each design is tailored to<br/>
                    complement any property while ensuring optimal spaciousness, elegance, and functionality.
                </p>            
            </div>
            <?php
            for($i=0;$i<4;$i++){ ?>
                <article class="feature-block">
                    <div class="feature-photo" style="background-image:url(rsc/Ashbourne-gallery-8.png)">
                        <img src="rsc/" alt="" title="" />
                    </div>
                    <div class="feature-content">
                        <h3>Classic Kitchens</h3>
                        <p>
                            Atur sim rerum list fugia volum sumquodit velliquis cumquat ugia volum sumquodit. Atur sim rerum list fugia volum sumquodit velliquis cumquat ugia volum sumquodi cumquat ugia volum sumquodit.
                        </p>
                        <p>
                            <a href="#">Explore Classic</a>
                        </p>
                    </div>
                </article><?php
            }
            ?>
        </div>
    </div>

    <div class="content-block why-choose-bon-accord-kitchens">
        <div class="container">
            <div class="feature-block">
                <div class="feature-photo" style="background-image:url(rsc/Riva889_MP_14799_20.png)">
                </div>
                <div class="feature-content">
                    <h2>Why Choose <br /> Bon Accord Kitchens?</h2>
                    <p>
                        Atur sim rerum list fugia volum sumquodit velliquis cumquat ugia volum sumquodit. Atur sim rerum list fugia volum sumquodit velliquis cumquat ugia volum sumquodi cumquat ugia volum sumquodit.
                    </p>
                    <p>
                        <a href="#">Read Reviews</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="content-block bon-accord-kitchens-collection-brochure">
        <div class="container">
            <div class="feature-block">
                <div class="feature-content">
                    <h2>View our Kitchen <br /> Collection Brochure</h2>
                    <p>
                        Kitchen inspiration at your fingertips! Discover our full choice of kitchen designs and on-trend colour options to personalise your kitchen. Our latest brochure is a useful springboard for any project.
                    </p>
                    <p>
                        <a href="#">Request a Brochure</a>
                    </p>
                </div>
            </div>
            <div class="feature-photo" style="background-image:url(rsc/BAK_Brochure_Cover_Mockup_Full.png)">
            </div>
        </div>

    </div>

    <div class="content-block bon-accord-kitchens-luxury-fitted">
        <div class="container">
            <div class="feature-block extended">
                <div class="feature-photo" style="background-image:url(rsc/Lumina-Kitchen-Gallery-5)"></div>
                <div class="feature-content">
                    <h2>Browse our Luxury <br /> Fitted Kitchens</h2>
                    <p>
                        Our kitchen styles range from traditional shaker kitchen designs to cutting edge handleless kitchens.<br/>
                        Choose from homely matt kitchens, sleek gloss kitchen finishes or charming traditional wood kitchens.
                    </p>
                    <p>
                        <a href="#">Explore Collections</a>
                    </p>
                </div>
            </div> 
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