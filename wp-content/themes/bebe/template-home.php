<?php
/**
 *   Template name: Homepage Template
 */

get_header();
?>


    <!-- Content Section -->
    <section class="center-align">

        <!-- About Us -->
        <article class="about-us-home cf">
            <aside class="about cf">
                <?php
                $about_image = get_field('about_image');
                $about_title = get_field('about_title');
                $about_description = get_field('about_description');
                ?>
                <div class="img">
                    <?php $size = 'full'; // (thumbnail, medium, large, full or custom size)
                    if ($about_image) {
                        echo wp_get_attachment_image($about_image, $size, '', [
                            'loading' => 'lazy'
                        ]);
                    } ?>
                </div>
                <div class="text">
                    <h2><?= $about_title ?></h2>
                    <div>
                        <?= $about_description ?>
                    </div>
                    <a class="more" href="about.html">More ></a>
                </div>
            </aside>
            <aside class="list">
                <ul>
                    <?php
                    $infos = get_field('info');

                    foreach ($infos as $info) :
                        $info_icon = $info['info_icon'];
                        $info_link = $info['info_link'];
                        $info_title = $info['info_title'];
                        $info_description = $info['info_description'];
                        ?>
                        <li class="cf">
                            <div class="<?= esc_attr($info_icon); ?>"></div>
                            <a href="<?= esc_url($info_link); ?>" class="caption"><?= esc_attr($info_title); ?></a>
                            <p><?= esc_attr($info_description); ?> </p>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </aside>
        </article>

        <!-- Recent From Blog -->
        <article class="recent-blog-home">
            <h2 class="title">Recent from blog</h2>

            <div class="items cf">

                <?php

                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => '4',
                );

                $home_posts = new WP_Query($args);

                while ($home_posts->have_posts()) : $home_posts->the_post();
                    ?>

                    <div class="col-3">
                        <a href="blog-single.html">
                            <?= get_the_post_thumbnail(); ?>
                        </a>
                        <div class="info cf">
                            <div class="time"><?= get_the_date(); ?></div>
                            <a href="<?php the_permalink(); ?>" class="comments"><?= comments_number(); ?></a>
                        </div>
                        <div class="text">
                            <a href="<?php the_permalink(); ?>" class="caption"><?php the_title(); ?></a>
                            <p>
                                <?php the_excerpt(); ?>
                            </p>
                        </div>
                    </div>

                <?php
                endwhile;
                wp_reset_postdata();
                ?>
            </div>
        </article>
    </section>

    <!-- Photo Gallery -->
    <div class="center-align photo-gallery">
    <div class="top">
        <h2>Photo Gallery</h2>
    </div>

    <div id="photo-gallery">

        <?php

            $args = array(
                'post_type' => 'gallery',
                'posts_per_page' => '10',
            );

            $home_galleries = new WP_Query($args);
        ?>

    <ul class="slides">
        <!-- -->

                <li>
                    <div class="items1">
                        <?php
                            $i =0; while ($home_galleries->have_posts()) : $home_galleries->the_post(); $i++;

                            if ($i == 1 or $i == 6) :
                        ?>
                            <a href="<?php the_permalink(); ?>">
                                <?= get_the_post_thumbnail(get_the_ID(), 'gallery_one') ?>
                            </a>
                        <?php elseif ($i == 2 or $i == 5 or $i == 7 or $i == 10) : ?>
                                <a href="<?php the_permalink(); ?>">
                                    <?= get_the_post_thumbnail(get_the_ID(), 'gallery_two') ?>
                                </a>
                        <?php elseif ($i == 3 or $i == 4 or $i == 8 or $i == 9) : ?>
                                <a href="<?php the_permalink(); ?>">
                                    <?= get_the_post_thumbnail(get_the_ID(), 'gallery_three') ?>
                                </a>
                        <?php endif; ?>

                        <?php if ($i == 5) : ?>
                                        </div>
                                    </li>

                            <li>
                                <div class="items2">
                        <?php endif; ?>
                        <?php
                            endwhile;
                            wp_reset_postdata();
                        ?>
                    </div>
                </li>

<!--        <li>-->
<!--            <div class="items1">-->
<!--                <a href="gallery-opened.html"><img src="css/images/gallery/1.jpg" alt=""/></a>-->
<!--                <a href="gallery-opened.html"><img src="css/images/gallery/2.jpg" alt=""/></a>-->
<!--                <a href="gallery-opened.html"><img src="css/images/gallery/4.jpg" alt=""/></a>-->
<!--                <a href="gallery-opened.html"><img src="css/images/gallery/3.jpg" alt=""/></a>-->
<!--                <a href="gallery-opened.html"><img src="css/images/gallery/5.jpg" alt=""/></a>-->
<!--            </div>-->
<!--        </li>-->

<!--        <li>-->
<!--            <div class="items2">-->
<!--                <a href="gallery-opened.html"><img src="css/images/gallery/6.jpg" alt=""/></a>-->
<!--                <a href="gallery-opened.html"><img src="css/images/gallery/7.jpg" alt=""/></a>-->
<!--                <a href="gallery-opened.html"><img src="css/images/gallery/9.jpg" alt=""/></a>-->
<!--                <a href="gallery-opened.html"><img src="css/images/gallery/10.jpg" alt=""/></a>-->
<!--                <a href="gallery-opened.html"><img src="css/images/gallery/8.jpg" alt=""/></a>-->
<!--            </div>-->
<!--        </li>-->
    </ul>
    </div>

    <div class="back"></div>
    <div class="bottom"></div>
    <div class="anchor"></div>
    </div>


    <?php get_footer(); ?>