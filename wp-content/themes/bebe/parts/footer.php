<?php if(is_front_page()) : ?>
    </section>
<?php endif;?>

<!-- Footer Section -->
<footer>

    <section>
        <div class="center-align cf">

            <!-- Some Info  -->
            <div class="col-6 float-left">
                <div class="col-5 information">
                    <h3>Information</h3>
                    <?php
                    wp_nav_menu(array(
                        'them_location' => 'menu-footer',
                        'menu_id'       => 'footer-menu',
                        'menu_class'    => 'cf',
//                        'container'     => 'nav'
                    ));
                    ?>
                </div>
                <div class="col-7 contacts">
                    <h3>Contacts</h3>

                    <?php
                        $phone = get_field('phone', 'option');
                        $email = get_field('email', 'option');
                        $address = get_field('address', 'option');
                    ?>

                    <?php if ($phone) : ?>
                        <span class="tel">8 800 <strong><?= esc_attr($phone); ?></strong></span>
                    <?php endif; ?>

                    <?php if ($email) : ?>
                        <a href="mailto:<?= esc_attr($email); ?>"><span><?= esc_attr($email); ?></span></a>
                    <?php endif; ?>

                    <?php if ($address) : ?>
                        <span><?= esc_attr($address); ?></span>
                    <?php endif; ?>
                    <ul>
                        <?php
                        $socialIcons = get_field('social_icons', 'option');

                        $socialIconsFacebook = get_field('social_icons_facebook', 'option');

                        $socialIconsInstagram = get_field('social_icons_instagram', 'option');

                        $socialIconsPinterest = get_field('social_icons_pinterest', 'option');

                        $socialIconsTwitter = get_field('social_icons_twitter', 'option');

                        $socialIconsYoutube = get_field('social_icons_youtube', 'option');

                        ?>

                        <?php

                        if ($socialIconsFacebook) :
                            $socialIconsFacebookUrl = $socialIconsFacebook['url'];
                            ?>
                            <li class="facebook"><a href="<?= esc_url($socialIconsFacebookUrl); ?>"></a></li>
                        <?php endif; ?>

                        <?php

                        if ($socialIconsInstagram) :
                            $socialIconsInstagramUrl = $socialIconsInstagram['url'];
                            ?>
                            <li class="instagram"><a href="<?= esc_url($socialIconsInstagramUrl); ?>"></a></li>
                        <?php endif; ?>

                        <?php

                        if ($socialIconsPinterest) :
                            $socialIconsPinterestUrl = $socialIconsPinterest['url'];
                            ?>
                            <li class="pinterest"><a href="<?= esc_url($socialIconsPinterestUrl); ?>"></a></li>
                        <?php endif; ?>

                        <?php

                        if ($socialIconsTwitter) :
                            $socialIconsTwitterUrl = $socialIconsTwitter['url'];
                            ?>
                            <li class="twitter"><a href="<?= esc_url($socialIconsTwitterUrl); ?>"></a></li>
                        <?php endif; ?>

                        <?php
                        if ($socialIconsYoutube) :
                            $socialIconsYoutubeUrl = $socialIconsYoutube['url'];
                            ?>
                            <li class="youtube"><a href="<?= esc_url($socialIconsYoutubeUrl); ?>"></a></li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>

            <!-- Form -->
            <div class="form float-right">
                <?= do_shortcode('[contact-form-7 id="6bfe113"]'); ?>

            </div>

        </div>

        <!-- Bottom Line -->
        <div class="bottom-line">
            <a class="top" href="#top">TOP</a>

            <div class="center-align cf">
                <?php
                    $footerCopyright = get_field('footer_copyright', 'option');
                ?>
                <div class="left">
                    <?= str_replace('%', date('Y'), $footerCopyright) ?>
                </div>

                <div class="right">
                    <?php
                    $logoFooter = get_field('logo_footer', 'option');

                    if ($logoFooter) :
                    ?>
                    <a href="<?= esc_url(home_url('/')) ?>">
                        <?php $size = 'full'; // (thumbnail, medium, large, full or custom size)
                        if ($logoFooter) {
                            echo wp_get_attachment_image($logoFooter, $size, '', [
                                'loading' => 'lazy'
                            ]);
                        }
                        ?>
                    </a>
                    <?php endif; ?>
                </div
            </div>
        </div>

    </section>


    <!-- Background Awesomeness -->
    <div id="footer-white"></div>
    <div id="footer-yellow"></div>

    <!-- Clouds -->
    <div id="footer-cloud1"></div>
    <div id="footer-cloud2"></div>

    <!-- Birds -->
    <div id="footer-bird1"></div>
    <div id="footer-bird2"></div>
    <div id="footer-bird3"></div>

    <!-- Waves -->
    <div class="waves">
        <div id="footer-wave1"></div>
        <div id="bui"></div>
        <div id="footer-wave2"></div>
    </div>
</footer>


<?php wp_footer(); ?>

</body>
</html>