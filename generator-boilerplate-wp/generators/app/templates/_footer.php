<footer class="footer bg-dark text-white py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-2 p-0">
                <a class="footer-brand text-center text-md-right" href="<?php bloginfo("url") ?>">
                    <?php 
                        $custom_logo_id = get_theme_mod('custom_logo');
                        $logo = wp_get_attachment_image_src($custom_logo_id, 'full');


                        if(has_custom_logo()) {
                            echo '<img src="'. esc_url($logo[0]). '" class="footer-brand__img">';
                        }else {
                            echo '<p class="m-0 text-white">'. get_bloginfo('name'). '</p>';
                        } 
                    ?>
                </a>
            </div>

            <div class="col-md-4 pl-5 pr-0 phone">

                <?php if(get_theme_mod('phone_number')) { ?>
                    <div class="d-flex">
                        <i class="fas fa-phone"></i>
                        <?php echo get_theme_mod('phone_number') ?>
                    </div>
                <?php } ?>

                <?php if(get_theme_mod('whatsapp_number')) { ?>
                    
                    <a href="https://api.whatsapp.com/send?phone=<?php echo get_theme_mod('whatsapp_number') ?>&text="
                        class="d-flex d-md-none"
                        target="_blank">
                        <i class="fab fa-whatsapp"></i>
                    <?php echo get_theme_mod('whatsapp_number') ?>
                    </a>
                    <a href="https://web.whatsapp.com/send?phone=<?php echo get_theme_mod('whatsapp_number') ?>&text="
                        class="d-none d-md-flex"
                        target="_blank">
                        <i class="fab fa-whatsapp"></i>
                        <?php echo get_theme_mod('whatsapp_number') ?>
                    </a>

                <?php } ?>
            </div>

            <div class="col-md-4 pl-0 address">
                <div class="d-flex">
                    <i class="fas fa-map-marker-alt"></i>
                    <?php echo get_theme_mod('address') ?>
                </div>
            </div>

            <div class="col-md-2 social">
                <?php if(get_theme_mod('instagram_username')) {
                        echo '<a href="'. get_theme_mod('instagram_username') . '"  target="_blank">';
                        echo '<i class="fab fa-instagram ml-3"></i>';
                        echo '</a>';
                    }
                ?>
                <?php if(get_theme_mod('facebook_username')) {
                        echo '<a href="' . get_theme_mod('facebook_username') . '"  target="_blank">';
                        echo '<i class="fab fa-facebook-square"></i>';
                        echo '</a>';
                    }
                ?>
            </div>

        </div>
    </div>
</footer>
<?php wp_footer(); ?>

</body>
</html>