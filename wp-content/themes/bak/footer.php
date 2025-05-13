    
    <div class="content-block coreblue bgowl contact">
        <div class="container">
            <div class="block-details">
                <div class="heading-block">
                    <h2><?= get_option('footer_contact_heading');?></h2>
                    <p><?= nl2br(get_option('footer_contact_speil'));?></p>
                </div>
                <p class="cta call">
                    <a href="tel:<?= str_replace(" ","",get_option('menu_contact_number'));?>"><?= get_option('menu_contact_number');?></a>
                </p>
            </div>
        </div>
    </div>
    <?php wp_footer();?>
    </body>
</html>