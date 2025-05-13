
<?php
$i= 2;
include("header.php");
?>

    <div class="splash-block" style="background-image:url(rsc/Carnegie-stone-grey-heritage-grey-Gallery-1.jpg)">
        <div class="bgblack">
            <div class="container">
                <div class="splash-revolver arrows-right">
                    <div>
                        <div class="slidr-stage shortr">
                            <div class="slidr lef">
                <h1>Classic Kitchen <br/>Collection</h1>
                <p>Atur sim rerum list fugia volum sumquodit velliquis cumquat ugia volum sumquodit. Atur sim rerum list fugia volum</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content-block bon-accord-classic-kitchen-favourites">
        <div class="container">
            <div class="heading-block">
                <h2>Classic Kitchen Favourites</h2>
                <p>Our customer favourites.. Designed for modern living, individuality and practicality that will sit comfortably in the busy world and lifestyles of today. Recently, modern classic style has enjoyed a resurgence in popularity in the kitchen.</p>
            </div>
            <ul class="vert">
            <?php for($i=0;$i<3;$i++){ ?><li>
                <div class="feature-block">
                    <div class="feature-photo" style="background-image:url(rsc/Ashbourne-gallery-8.jpg)">
                        <i class="fa-solid fa-heart"></i>
                    </div>
                    <div class="feature-content lined">
                        <h3>Ashbourne</h3>
                        <p>
                            <strong>Grained Painted Effect</strong> volum sumquodit velliquis cumquat ugia volum sumquodit.
                        </p>
                    </div>
                </div></li><?php
            } ?>
            </ul>
        </div>
    </div>



    <div class="content-block lgrey bgowl bon-accord-latest-classic-kitchens">
        <div class="container">
            <div class="heading-block">
                <h2>Our latest Classic Kitchens</h2>
                <p>
                    Designed for modern living, individuality and practicality that will sit comfortably in the busy world and lifestyles of today.<br/> 
                    Recently, modern classic style has enjoyed a resurgence in popularity in the kitchen.
                </p>
            </div>
            <ul class="vert">
            <?php for($i=0;$i<2;$i++){ ?><li>
                <div class="feature-block">
                    <div class="feature-photo roundr" style="background-image:url(rsc/Ashbourne-gallery-7.jpg)">
                        <img src="rsc/" alt="" title="" />
                    </div>
                    <div class="feature-content">
                        <h3>Ashbourne</h3>
                        <p>
                            <strong></strong> short description of kitchen range and style here.
                        </p>
                        <p>
                            <a class="btnlink outline blue" href="#">View Gallery</a>
                        </p>
                    </div>
                </div></li><?php
            } ?>
            </ul>
        </div>
    </div>

    <div class="content-block dark bgowl classic-gallery">
        <div class="container">
            <div class="heading-block">
                <h2>• The Classic Gallery •</h2>
                <p>
                    This is a place to view all of the particular kitchen range together. Full width imagery, side by side presenting range, colour and features for the customer to browse and compare.
                </p>
            </div>
            <div class="classic-gallery-block">
                <div class="classic-gallery-revolver arrows-right">
                    <?php 
                    $slides= [
                        ["Kitchen Range","Ashbourne Classic Kitchen <br />Painted Solid Ash","rsc/Ashbourne-gallery-2.jpg"],
                        ["Colour","Stone Worktops<br />Heritage Grey Doors","rsc/Ashbourne-gallery-7.jpg"],
                        ["Features","Add feature if all<br />available and suitable","rsc/Ashbourne-gallery-8.jpg"]
                    ];
                    foreach($slides as $i => $d){ ?>
                        <div>
                            <div class="photo-slide" style="background-image:url(<?= $d[2];?>)"></div>
                            <div class="classic-gallery-content">
                                <ul class="classic-gallery-content-block">
                                    <?php foreach($slides as $si => $sd){ ?>
                                    <li class="<?= ($i==$si ? "active":"");?>">
                                        <h3><?= $sd[0];?></h3>
                                        <p><?= $sd[1];?></p>
                                    </li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                    <?php } ?>
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
            <ul class="vert">
            <?php for($i=0;$i<3;$i++){ ?><li>
                <div class="feature-block">
                    <div class="feature-photo" style="background-image:url(rsc/Knob-Handles-Inner.jpg)">
                    </div>
                    <div class="feature-content">
                        <h3>Worktops</h3>
                        <p>We have a stunning array of workstops to complement your kitchen style...Us am explict invelectiam, con nem fuga. Aliquia dolent laut quame perions equatu.</p>
                    </div>
                </div></li><?php
            } ?>
            </ul>
        </div>
    </div>

    <div class="content-block coreblue bon-accord-kitchens-next-steps">
        <div class="container">
            <div class="heading-block">
                <h2>Next Steps</h2>
                <p>Discover the full range of Kitchens, styles, colours and features by exploring our<br /> state of the art showroom or booking a <a href="#">Free Design Appointment.</a></p>
            </div>
        </div>
    </div>

    <div class="content-block bon-accord-kitchens-showroom">
        <div class="container">
            <ul class="vert">
                <li>
                    <div class="feature-block">
                        <div class="feature-photo svg">
                            <img src="rsc/showroom-directions.png" alt="" title="" />
                        </div>
                        <div class="feature-content">
                            <h3>Visit Aberdeen Showroom</h3>
                            <p>Be inspired! Explore the full range of stunning Kitchen collections, workstops, colours and finishes in person</p>
                            <p><a class="btnlink outline blue" href="#">GET DIRECTIONS</a></p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="feature-block">
                        <div class="feature-photo svg">
                            <img src="rsc/showroom-design.png" alt="" title="" />
                        </div>
                        <div class="feature-content">
                            <h3>Free Design Appointment</h3>
                            <p>See your new Kitchen come to life from the comfort of your own home with one of our friendly Kitchen designer.</p>
                            <p><a class="btnlink outline blue" href="#">BOOK DESIGN APPOINTMENT</a></p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>




    <div class="content-block dark bon-accord-heather-classic-kitchen">
        <div class="container">
            <div class="feature-block">
                <div class="feature-content paddr">
                    <h2>Heather's Classic <br /> Country Kitchen</h2>
                    <p>
                        Get inspired by exploring our customer kitchens, showcasing favorite styles, trends, and features to bring to your own space.<br /> 
                        See these kitchens in action and discover how Bon Accord Kitchens have truly become the heart of each home.
                    </p>
                    <p>
                        <a class="btnlink neutral" href="#">View Kitchen</a>
                    </p>
                </div>
                <div class="feature-photo roundr" style="background-image:url(rsc/Bloomsbury-Kitchen-Gallery-8.jpg)">
                    <img class="feature-photo-inset" src="rsc/Brazen-Magnet-Milford-28.webp" alt="" title="" />
                </div>
            </div>
        </div>
    </div>



    <div class="content-block lgrey bgowl testimonials-block">
        <div class="container">
            <div class="heading-block">
                <h2>Why customers love Bon Accord</h2>
                <p>Don't just take our word for it! Read the latest Bon Accord Kitchen reviews, according to our customers...</p>
            </div>
            <div class="testimonials-revolver arrows-right darkarrows">
                <?php for($i=0;$i<6;$i++){ ?>
                <div class="testimonial-block">
                    <div class="testimonial-quote">
                        <h3>“Top-notch service”</h3>
                        <p class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </p>
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
                <?php } ?>
            </div>
        </div>
    </div>


    <div class="content-block white bon-accord-kitchens-manufacturers">
        <div class="container">
            <div class="heading-block">
                <h2>Luxury for every lifestyle</h2>
                <p>Discover beautifully crafted kitchens from three of the world's leading manufacturers, <br /> each offering unique styles and exclusive design features, tailored to your home and lifestyle.</p>
            </div>
            <ul class="tightr">
                <li><a href=""><img src="rsc/brand_ballerina.png" alt="" title="" /></a></li>
                <li><a href=""><img src="rsc/brand_masterclass.png" alt="" title="" /></a></li>
                <li><a href=""><img src="rsc/brand_nobilia.png" alt="" title="" /></a></li>
            </ul>
            <p>
                <a class="btnlink" href="#">Kitchen Brands</a>
            </p>
        </div>
    </div>


<?php
include("footer.php");
?>
