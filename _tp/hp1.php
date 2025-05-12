
<?php
$i= 1;
include("header.php");
?>

    <div class="splash-block" style="background-image:url(rsc/Bloomsbury-Kitchen-Gallery-8.jpg)">
        <div class="bgblack">
            <div class="container">
                <div class="splash-revolver"><?php
                for($i=0;$i<3;$i++){ ?>
                    <div>
                        <div class="slidr-stage">
                            <div class="slidr">
                                <h1>The Kitchen:<br />the <em>heart</em> of the home</h1>
                                <p>Expertly made, Exceptionally beautiful</p>
                                <p>
                                    <a class="btnlink neutral" href="#">Book Your Design Consultation</a>
                                </p>
                            </div>
                        </div>
                    </div><?php
                } ?>
                </div>
            </div>
        </div>
    </div>
    
    <div class="content-block white bon-accord-kitchens-manufacturers">
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
                <a class="btnlink" href="#">Kitchen Brands</a>
            </p>
        </div>
    </div>

    <div class="content-block dark bon-accord-kitchens-styles">
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
                    <div class="feature-photo" style="background-image:url(rsc/Ashbourne-gallery-8.jpg)">
                        <img src="rsc/" alt="" title="" />
                    </div>
                    <div class="feature-content">
                        <h3>Classic Kitchens</h3>
                        <p>
                            Atur sim rerum list fugia volum sumquodit velliquis cumquat ugia volum sumquodit. Atur sim rerum list fugia volum sumquodit velliquis cumquat ugia volum sumquodi cumquat ugia volum sumquodit.
                        </p>
                        <p>
                            <a class="btnlink outline blue" href="#">Explore Classic</a>
                        </p>
                    </div>
                </article><?php
            }
            ?>
        </div>
    </div>

    <div class="content-block white why-choose-bon-accord-kitchens">
        <div class="container">
            <div class="feature-block">
                <div class="feature-photo" style="background-image:url(rsc/Riva889_MP_14799_20.jpg)">
                </div>
                <div class="feature-content">
                    <h2>Why Choose <br /> Bon Accord Kitchens?</h2>
                    <p>
                        Atur sim rerum list fugia volum sumquodit velliquis cumquat ugia volum sumquodit. Atur sim rerum list fugia volum sumquodit velliquis cumquat ugia volum sumquodi cumquat ugia volum sumquodit.
                    </p>
                    <p>
                        <a class="btnlink outline blue" href="#">Read Reviews</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="content-block neutral bon-accord-kitchens-collection-brochure">
        <div class="container">
            <div class="feature-block">
                <div class="feature-content">
                    <h2>View our Kitchen <br /> Collection Brochure</h2>
                    <p>
                        Kitchen inspiration at your fingertips! Discover our full choice of kitchen designs and on-trend colour options to personalise your kitchen. Our latest brochure is a useful springboard for any project.
                    </p>
                    <p>
                        <a class="btnlink" href="#">Request a Brochure</a>
                    </p>
                </div>
                <div class="feature-photo" style="background-image:url(rsc/BAK_Brochure_Cover_Mockup_Full.jpg)">
                </div>
            </div>
        </div>
    </div>

    <div class="content-block dark bon-accord-kitchens-luxury-fitted extended">
        <div class="feature-block">
            <div class="feature-photo" style="background-image:url(rsc/Lumina-Kitchen-Gallery-5.jpg)"></div>
            <div class="feature-content">
                <h2>Browse our Luxury <br /> Fitted Kitchens</h2>
                <p>
                    Our kitchen styles range from traditional shaker kitchen designs to cutting edge handleless kitchens.<br/>
                    Choose from homely matt kitchens, sleek gloss kitchen finishes or charming traditional wood kitchens.
                </p>
                <p>
                    <a class="btnlink outline neutral" href="#">Explore Collections</a>
                </p>
            </div>
        </div>
    </div>

<?php
include("footer.php");
?>
