<?php 
/* Template Name: Homepage2 */ 
get_header();
?>
    <div class="splash-block" style="background-image:url(<?= get_the_post_thumbnail_url();?>)">
        <div class="bgblack">
            <div class="container">
                <div class="splash-revolver arrows-right"><?php
                if( have_rows('G_SL_slider') ){
                    while( have_rows('G_SL_slider') ){
                        the_row();
                        $shead = nl2brX(get_sub_field('G_SL_slide_heading'));
                        $ssubhead = nl2brX(get_sub_field('G_SL_slide_subtitle'));
                        $scta_label = get_sub_field('G_SL_slide_cta_label');
                        $scta_url = get_sub_field('G_SL_slide_cta_url'); ?>
                        <div>
                            <div class="slidr-stage shortr">
                                <div class="slidr lef">
                                    <h1><?= $shead;?></h1>
                                    <p><?= $ssubhead;?></p>
                                </div>
                            </div>
                        </div><?php
                    }
                } ?>
                </div>
            </div>
        </div>
    </div>

    <div class="content-block white bon-accord-classic-kitchen-favourites">
        <div class="container">
            <div class="heading-block">
                <h2><?= nl2brX(get_field('H2_CKF_heading'));?></h2>
                <p><?= nl2brX(get_field('H2_CKF_heading_description'));?></p>
            </div>
            <ul class="vert"><?php
            if( have_rows('H2_CKF_sample_kitchens') ){
                while( have_rows('H2_CKF_sample_kitchens') ){
                    the_row(); ?><li>
                    <div class="feature-block">
                        <div class="feature-photo" style="background-image:url(<?= get_sub_field('H2_CKF_kitchen_photo');?>)">
                            <i class="fa-solid fa-heart"></i>
                        </div>
                        <div class="feature-content lined">
                            <h3><?= nl2brX(get_sub_field('H2_CKF_kitchen_title'));?></h3>
                            <?= nl2brX(get_sub_field('H2_CKF_kitchen_description'));?>
                        </div>
                    </div></li><?php
                }
            } ?>
            </ul>
        </div>
    </div>

    <div class="content-block lgrey bgowl bon-accord-latest-classic-kitchens">
        <div class="container">
            <div class="heading-block">
                <h2><?= nl2brX(get_field('H2_LCK_heading'));?></h2>
                <p><?= nl2brX(get_field('H2_LCK_heading_description'));?></p>
            </div>
            <ul class="vert"><?php
            if( have_rows('H2_LCK_classic_kitchens') ){
                while( have_rows('H2_LCK_classic_kitchens') ){
                    the_row(); ?><li>
                    <div class="feature-block">
                        <div class="feature-photo roundr" style="background-image:url(<?= get_sub_field('H2_LCK_kitchen_photo');?>)">
                        </div>
                        <div class="feature-content">
                            <h3><?= get_sub_field('H2_LCK_kitchen_title');?></h3>
                            <?= get_sub_field('H2_LCK_kitchen_description');?>
                            <p>
                                <a class="btnlink outline blue" href="<?= get_sub_field('H2_LCK_kitchen_cta_url');?>">
                                    <?= get_sub_field('H2_LCK_kitchen_cta_label');?></a>
                            </p>
                        </div>
                    </div></li><?php
                }
            } ?>
            </ul>
        </div>
    </div>

    <div class="content-block dark bgowl classic-gallery">
        <div class="container">
            <div class="heading-block">
                <h2><?= nl2brX(get_field('H2_CLG_heading'));?></h2>
                <p><?= nl2brX(get_field('H2_CLG_heading_description'));?></p>
            </div>
            <div class="classic-gallery-block">
                <div class="classic-gallery-revolver arrows-right"><?php
                    if( have_rows('H2_CLG_classic_gallery_kitchens') ){
                        $slides = get_field('H2_CLG_classic_gallery_kitchens' );
                        foreach($slides as $i => $d){
                            the_row(); ?>
                            <div>
                                <div class="photo-slide" style="background-image:url(<?= $d['H2_CLG_kitchen_photo'];?>)"></div>
                                <div class="classic-gallery-content">
                                    <ul class="classic-gallery-content-block">
                                        <?php foreach($slides as $si => $sd){ ?>
                                        <li class="<?= ($i==$si ? "active":"");?>">
                                            <h3><?= $sd['H2_CLG_kitchen_title'];?></h3>
                                            <p><?= $sd['H2_CLG_kitchen_features'];?></p>
                                        </li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div><?php
                        }
                    } 
                    ?>
                </div>
            </div>
        </div>
    </div>

    <div class="content-block white bon-accord-classic-kitchen-favourites">
        <div class="container">
            <div class="heading-block">
                <h2><?= nl2brX(get_field('H2_ATD_heading'));?></h2>
                <p><?= nl2brX(get_field('H2_ATD_heading_description'));?></p>
            </div>
            <ul class="vert">
            <?php
            if( have_rows('H2_ATD_sample_kitchens') ){
                while( have_rows('H2_ATD_sample_kitchens') ){
                    the_row(); ?><li>
                    <div class="feature-block">
                        <div class="feature-photo" style="background-image:url(<?= get_sub_field('H2_ATD_kitchen_photo');?>)">
                        </div>
                        <div class="feature-content">
                            <h3><?= get_sub_field('H2_ATD_kitchen_title');?></h3>
                            <p><?= get_sub_field('H2_ATD_kitchen_description');?></p>
                        </div>
                    </div></li><?php
                }
            } ?>
            </ul>
        </div>
    </div>


    <div class="content-block coreblue bon-accord-kitchens-next-steps">
        <div class="container">
            <div class="heading-block">
                <h2><?= nl2brX(get_field('H2_NXT_heading'));?></h2>
                <p><?= nl2brX(get_field('H2_NXT_heading_description'));?></p>
            </div>
        </div>
    </div>

    <div class="content-block white bon-accord-kitchens-showroom">
        <div class="container">
            <ul class="vert">
                <?php
                if( have_rows('H2_SR_visits') ){
                    while( have_rows('H2_SR_visits') ){
                        the_row(); ?><li>
                            <div class="feature-block">
                                <div class="feature-photo svg">
                                    <img src="<?= get_sub_field('H2_SR_visit_photo');?>" alt="" title="" />
                                </div>
                                <div class="feature-content">
                                    <h3><?= nl2brX(get_sub_field('H2_SR_visit_title'));?></h3>
                                    <p><?= nl2brX(get_sub_field('H2_SR_visit_description'));?></p>
                                    <p><a class="btnlink outline blue" href="<?= get_sub_field('H2_SR_visit_cta_url');?>">
                                        <?= get_sub_field('H2_SR_visit_cta_label');?></a></p>
                                </div>
                            </div>
                        </li><?php
                    }
                } ?>
            </ul>
        </div>
    </div>

    <div class="content-block dark bon-accord-heather-classic-kitchen">
        <div class="container">
            <div class="feature-block">
                <div class="feature-content paddr">
                    <h2><?= nl2brX(get_field('H2_HCK_feature_heading'));?></h2>
                    <p><?= nl2brX(get_field('H2_HCK_feature_paragraph'));?></p>
                    <p>
                        <a class="btnlink neutral" href="<?= get_field('H2_HCK_feature_cta_url');?>">
                            <?= get_field('H2_HCK_feature_cta_label');?></a>
                    </p>
                </div>
                <div class="feature-photo roundr" style="background-image:url(<?= get_field('H2_HCK_feature_photo');?>)">
                    <img class="feature-photo-inset" src="<?= get_field('H2_HCK_feature_inset_photo');?>" alt="" title="" />
                </div>
            </div>
        </div>
    </div>

    <div class="content-block lgrey bgowl testimonials-block">
        <div class="container">
            <div class="heading-block">
                <h2><?= nl2brX(get_field('H2_TML_heading'));?></h2>
                <p><?= nl2brX(get_field('H2_TML_heading_description'));?></p>
            </div>
            <div class="testimonials-revolver arrows-right darkarrows">
            <?php
            if( have_rows('H2_TML_testimonials') ){
                while( have_rows('H2_TML_testimonials') ){
                    the_row();
                    $title = get_sub_field('H2_TML_testimonial_title');
                    $rating = get_sub_field('H2_TML_testimonial_rating');
                    $desc = get_sub_field('H2_TML_testimonial_description');
                    $testby = get_sub_field('H2_TML_testimonial_by'); ?>
                    <div class="testimonial-block">
                        <div class="testimonial-quote">
                            <h3>“<?= nl2brX($title);?>”</h3>
                            <p class="rating">
                                <?php for($i=0; $i<$rating; $i++){ ?>
                                    <i class="fas fa-star"></i><?php
                                } ?>
                            </p>
                            <p class="quote">
                            <?= nl2brX($desc);?>
                            </p>
                            <h4><?= nl2brX($testby);?></h4>
                        </div>
                    </div><?php
                }
            } ?>
            </div>
        </div>
    </div>

    <div class="content-block white bon-accord-kitchens-manufacturers">
        <div class="container">
            <div class="heading-block">
                <h2><?= nl2brX(get_field('G_MF_heading_label'));?></h2>
                <p><?= nl2brX(get_field('G_MF_description'));?></p>
            </div>
            <ul class="tightr"><?php
            if( have_rows('G_MF_manufacturer') ){
                while( have_rows('G_MF_manufacturer') ){
                    the_row();
                    $mname = get_sub_field('G_MF_manufacturer_name');
                    $logo = get_sub_field('G_MF_manufacturer_logo');
                    $cta_url = get_sub_field('G_MF_manufacturer_url'); ?>
                    <li><a href="<?= $cta_url;?>"><img src="<?= $logo;?>" alt="<?= $mname;?>" title="<?= $mname;?>" /></a></li>
                    <?php
                }
            } ?>
            </ul>
            <p>
                <a class="btnlink" href="<?= get_field('G_MF_cta_url');?>">
                    <?= get_field('G_MF_cta_label');?></a>
            </p>
        </div>
    </div>
<?php
get_footer();
?>