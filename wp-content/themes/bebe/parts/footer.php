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
                    <a href="">About BEBE</a>
                    <a href="">Privacy Policy</a>
                    <a href="">Delivery</a>
                    <a href="">Terms & Conditions</a>
                </div>
                <div class="col-7 contacts">
                    <h3>Contacts</h3>
                    <span class="tel">8 800 <strong>435-17-20</strong></span>
                    <span>nfo@bebe.co.uk</span>
                    <span>Germany Berlin, Main street  43</span>
                    <ul>
                        <li class="facebook"><a href=""></a></li>
                        <li class="instagram"><a href=""></a></li>
                        <li class="pinterest"><a href=""></a></li>
                        <li class="twitter"><a href=""></a></li>
                        <li class="youtube"><a href=""></a></li>
                    </ul>
                </div>
            </div>

            <!-- Form -->
            <div class="form float-right">
                <form class="cf" method="post" id="contact-form">
                    <input id="name" name="name" type="text" placeholder="Name"/>
                    <input id="email" name="email" type="text" placeholder="Email"/>
                    <textarea id="message" name="subject" placeholder="Message"></textarea>
                    <input id="submit" type="submit" value="Send"/>
                </form>
            </div>

        </div>

        <!-- Bottom Line -->
        <div class="bottom-line">
            <a class="top" href="#top">TOP</a>

            <div class="center-align cf">
                <div class="left">&copy; 2013 BEBE. All rights reserved</div>

                <?php
                    $logoFooter = get_field('logo_footer', 'option');

                    if ($logoFooter) :
                ?>
                <div class="right">
                    <a href="<?= esc_url(home_url('/')) ?>">
                        <?php $size = 'full'; // (thumbnail, medium, large, full or custom size)
                        if ($logoFooter) {
                            echo wp_get_attachment_image($logoFooter, $size, '', [
                                'loading' => 'lazy'
                            ]);
                        }
                        ?>
                    </a>
                </div>
                <?php endif; ?>
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