<?php wp_footer();?>
    <!-- start of footer section -->
    <section class="footer">
        <div class="container-fluid footer-container">
            <div class="footer-row">
                <div class="footer-col__text">
                    <h1 class="header-secondary">clientele savvy</h1>
                    <ul class="links">
                        <li class="links-item text-para">
                            <a href="<?php echo site_url(); ?>">home</a>
                        </li>
                        <li class="links-item text-para">
                            <a href="<?php echo site_url('/about'); ?>">about</a>
                        </li>
                        <li class="links-item text-para">
                            <a href="<?php echo site_url('/contact'); ?>">contact</a>
                        </li>
                        <li class="links-item text-para">
                            <a href="<?php echo site_url('/privacy-policy'); ?>">privacy policy</a>
                        </li>
                    </ul>
                </div>
                <div class="footer-col__contact">
                    <h1 class="header-secondary">contact</h1>
                    <p class="text-para">+91 9651097463</p>
                    <p class="text-para">clientelesavvy@clientelesavvy.com</p>
                    <ul class="social">
                        <li class="social-links ">
                            <a href="#">
                                <img src="<?php echo get_theme_file_uri("./image/facebook.svg"); ?>" alt="">
                            </a>
                        </li>
                        <li class="social-links">
                            <a href="<?php echo site_url(); ?>">
                                <img src="<?php echo get_theme_file_uri("./image/instagram.svg"); ?>" alt="">
                            </a>
                        </li>
                        <li class="social-links ">
                            <a href="<?php echo site_url(); ?>">
                                <img src="<?php echo get_theme_file_uri("./image/linkedin.svg"); ?>" alt="">
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="footer-col__img">
                    <img class="footer-logo" src="<?php echo get_theme_file_uri("./image/footer-logo.svg"); ?>" alt="">
                </div>
            </div>
        </div>
        <div class="footer-copyright">
                    COPYRIGHT??BECAMEX @ clientele savvy ALL RIGHTS RESERVED.
        </div>
    </section>
    <!-- end of footer section -->
</body>
</html>
