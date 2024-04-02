<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Background Awesomeness -->
<div id="night"></div>

<!-- Stars -->
<div class="back" id="stars1"></div>
<div class="back" id="stars2"></div>

<!-- Clouds -->
<div class="back" id="cloud1"></div>
<div class="back" id="cloud2"></div>
<div class="back" id="cloud3"></div>
<div class="back" id="cloud4"></div>
<div class="back" id="cloud5"></div>

<!-- Header Section -->
<header>
    <div class="center-align cf">

        <!-- Logo -->
        <?php $logoBig = get_field('logo', 'option'); ?>
        <?php $logoSmall = get_field('logo_small', 'option'); ?>


        <div class="logo float-left">
            <?php if (wp_is_mobile()) : ?>
                <a href="<?= esc_url(home_url('/')) ?>">
                    <?php $size = 'full'; // (thumbnail, medium, large, full or custom size)
                    if ($logoSmall) {
                        echo wp_get_attachment_image($logoSmall, $size, '', [
                            'loading' => 'lazy'
                        ]);
                    }
                    ?>
                </a>
            <?php else : ?>
                <a href="<?= esc_url(home_url('/')) ?>">
                    <?php $size = 'full'; // (thumbnail, medium, large, full or custom size)
                    if ($logoBig) {
                        echo wp_get_attachment_image($logoBig, $size, '', [
                            'loading' => 'lazy'
                        ]);
                    }
                    ?>
                </a>
            <?php endif; ?>


            <span><?= the_field('logo_text', 'option') ?></span>
        </div>

        <!-- Social & Search -->
        <div class="social float-right cf">
            <form id="search" method="get" action="<?= esc_url(site_url()); ?>">
                <input class="search-inp" type="text" name="s" size="21" maxlength="120" placeholder="Search">
                <input class="search-btn" type="submit" value="">
            </form>
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

        <!-- Nav -->


            <?php
            wp_nav_menu(array(
                'them_location' => 'menu-1',
                'menu_id'       => 'primery-menu',
                'menu_class'    => 'cf',
                'container'     => 'nav'
            ));
            ?>

        <!-- Drop Down -->
        <div class="drop-menu">
            <a>Menu</a>

            <?php
            wp_nav_menu(array(
                'them_location' => 'menu-1',
                'menu_id'       => 'mobile-menu',
                'menu_class'    => 'ul-drop',
                'container'     => false
            ));
            ?>

        </div>

    </div>
</header>

<?php if (is_front_page()) :
    $homeSlider = get_field('home_slider', 'option');
?>
<!-- Slider -->
<div class="center-align">
    <div id="slider">
        <ul class="slides">
            <!-- -->


            <!-- -->
            <?php if ($homeSlider) :
                foreach ($homeSlider as $homeImage) :

                    $imageFirstSlid = $homeImage['image_first_slid'];
                    $headerFirstSlid = $homeImage['header_first_slid'];
                    $linkFirstSlid = $homeImage['link_first_slid'];
                    $descriptionFirstSlid = $homeImage['description_first_slid'];
            ?>
                    <li>
                        <div class="wood">
                            <div class="text">
                                <span class="category">Category</span>
                                <?php if ($headerFirstSlid) : ?>
                                    <h2 class="caption"><?= esc_attr($headerFirstSlid); ?></h2>
                                <?php endif; ?>

                                <div class="content">
                                    <?= $descriptionFirstSlid; ?>
                                </div>

                                <?php if ($linkFirstSlid) :
                                    $linkFirstSlidUrl = $linkFirstSlid['url'];
                                    ?>
                                    <a class="more" href="<?= esc_url($linkFirstSlidUrl); ?>">More ></a>
                                <?php endif; ?>
                            </div>
                        </div>
                        <?php $size = 'full'; // (thumbnail, medium, large, full or custom size)
                        if ($imageFirstSlid) {
                            echo wp_get_attachment_image($imageFirstSlid, $size, '', [
                                'loading' => 'lazy'
                            ]);
                        } ?>
                    </li>
            <?php endforeach; ?>
            <?php endif; ?>
        </ul>
    </div>
</div>

<!-- Content Section -->
<section class="center-align">

<?php else : ?>
<section class="center-align">

    <!-- Caption -->
    <div class="title-page">
        <h2><?php the_title(); ?></h2>
        <div class="page"><span class="home"></span> <a href="index.html">Home</a> &nbsp; <span class="arrow">→</span> &nbsp; About Us</div>
    </div>

    <!-- -->
    <div class="dotted-line"></div>
<?php endif; ?>


