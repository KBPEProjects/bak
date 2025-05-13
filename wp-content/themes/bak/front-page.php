<?php 
get_header();
/*
wp_nav_menu(array(
    'menu'              => 'primary',
    'theme_location'    => 'primary',
    'depth'             => 2,
    'container'         => '',
    'container_class'   => '',
    'menu_class'        => 'main-nav'
));
var_dump(
    get_option('menu_contact_number'),
    get_option('menu_CTA_button_label'),
    get_option('menu_CTA_button_url'),
    get_option('footer_contact_speil')
);
var_dump(
    get_the_title(),
    get_the_post_thumbnail_url(),
    get_fields()
);
print_r(get_fields(get_the_ID(),false,false), );
*/
?>
    <div class="splash-block" style="background-image:url(<?= get_the_post_thumbnail_url();?>)">
        <div class="bgblack">
            <div class="container">
                <div class="splash-revolver"><?php
                if( have_rows('G_SL_slider') ){
                    while( have_rows('G_SL_slider') ){
                        the_row();
                        $shead = nl2brX(get_sub_field('G_SL_slide_heading'));
                        $ssubhead = nl2brX(get_sub_field('G_SL_slide_subtitle'));
                        $scta_label = get_sub_field('G_SL_slide_cta_label');
                        $scta_url = get_sub_field('G_SL_slide_cta_url'); ?>
                        <div>
                            <div class="slidr-stage">
                                <div class="slidr">
                                    <h1><?= $shead;?></h1>
                                    <p><?= $ssubhead;?></p>
                                    <p>
                                        <a class="btnlink neutral" href="<?= $scta_url;?>">
                                            <?= $scta_label;?></a>
                                    </p>
                                </div>
                            </div>
                        </div><?php
                    }
                } ?>
                </div>
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

    <div class="content-block dark bon-accord-kitchens-styles">
        <div class="container">
            <div class="heading-block">
                <h2><?= nl2brX(get_field('H1_KS_heading'));?></h2>
                <p><?= nl2brX(get_field('H1_KS_sub_heading_description'));?></p>
            </div>
            <?php
            if( have_rows('H1_KS_kitchen_styles') ){
                while( have_rows('H1_KS_kitchen_styles') ){
                    the_row();
                    $photo = get_sub_field('H1_KS_kitchen_photo');
                    $title = get_sub_field('H1_KS_kitchen_title');
                    $desc = get_sub_field('H1_KS_kitchen_description');
                    $cta_label = get_sub_field('H1_KS_kitchen_cta_label');
                    $cta_url = get_sub_field('H1_KS_kitchen_cta_url'); ?>
                    <article class="feature-block">
                        <div class="feature-photo" style="background-image:url(<?= $photo;?>)">
                        </div>
                        <div class="feature-content">
                            <h3><?= nl2brX($title);?></h3>
                            <p><?= nl2brX($desc);?></p>
                            <p class="cta">
                                <a class="btnlink outline blue" href="<?= $cta_url;?>">
                                    <?= $cta_label;?></a>
                            </p>
                        </div>
                    </article><?php
                }
            } ?>
        </div>
    </div>

    <div class="content-block white bgowl why-choose-bon-accord-kitchens">
        <div class="container">
            <div class="feature-block">
                <div class="feature-photo roundr" style="background-image:url(<?= get_field('H1_WCB_feature_photo');?>)">
                </div>
                <div class="feature-content paddr">
                    <h2><?= nl2brX(get_field('H1_WCB_feature_heading'));?></h2>
                    <p><?= nl2brX(get_field('H1_WCB_feature_paragraph'));?></p>
                    <p>
                        <a class="btnlink outline blue" href="<?= get_field('H1_WCB_feature_cta_url');?>">
                            <?= get_field('H1_WCB_feature_cta_label');?></a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="content-block neutral bon-accord-kitchens-collection-brochure">
        <div class="container">
            <div class="feature-block">
                <div class="feature-content paddr">
                    <h2><?= nl2brX(get_field('H1_VB_feature_heading'));?></h2>
                    <p><?= nl2brX(get_field('H1_VB_feature_paragraph'));?></p>
                    <p>
                        <a class="btnlink" href="<?= get_field('H1_VB_feature_cta_url');?>">
                            <?= get_field('H1_VB_feature_cta_label');?></a>
                    </p>
                </div>
                <div class="feature-photo roundr" style="background-image:url(<?= get_field('H1_VB_feature_photo');?>)">
                </div>
            </div>
        </div>
    </div>

    <div class="content-block dark bgowl bon-accord-kitchens-luxury-fitted extended">
        <div class="feature-block">
            <div class="feature-photo" style="background-image:url(<?= get_field('H1_BLK_feature_photo');?>)"></div>
            <div class="feature-content paddr">
                <div class="container">
                    <h2><?= nl2brX(get_field('H1_BLK_feature_heading'));?></h2>
                    <p><?= nl2brX(get_field('H1_BLK_feature_paragraph'));?></p>
                    <p>
                        <a class="btnlink outline neutral" href="<?= get_field('H1_BLK_feature_cta_url');?>">
                            <?= get_field('H1_BLK_feature_cta_label');?></a>
                    </p>                    
                </div>
            </div>
        </div>
    </div>

<?php
get_footer();
?>