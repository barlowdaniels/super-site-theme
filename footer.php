<footer class="container-fluid">
    <div class="row">
        <div class="col-1"></div>
        <div class="col-10 block-content">
            <div class="block-wrapper">
                <div class="logo-socials">
                    <a href="<?= get_site_url();?>" class="footer-logo">
                        <img src="<?= get_field('footer_logo','options')['url'];?>" alt="<?= get_field('footer_logo','options')['alt'];?>"/>
                    </a>
                    <?= do_shortcode('[social_icons]'); ?>
                </div>
                <div class="footer-nav">
                    <?php wp_nav_menu( [
                        'theme_location' => 'footer',
                        'menu_class'     => 'footer-nav',
                        'container'      => 'div',
                    ]); ?>
                </div>
                <div class="address-contact">
                    <div class="contact">
                        <?= do_shortcode('[contact_details]'); ?>
                    </div>
                    <div class="address">
                        <?= do_shortcode('[post_address]'); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-1"></div>
    </div>
    
</footer>

<?php wp_footer();?>

</body>
</html>