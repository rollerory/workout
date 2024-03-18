<footer class="footer">
    <div class="container">
        <div class="footer__inner">
            <div class="footer__col social">
                <a href="index.html" class="logo">
                    <svg width="238" height="122">
                        <use href="<?php bloginfo('template_url'); ?>/assets/images/sprite.svg#logo"></use>
                    </svg>
                </a>
                <p class="text social__text">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.
                </p>
                <div class="social__links">
                    <a href="#" target="_blank" class="social__link">
                        <svg width="14" height="24">
                            <use href="<?php bloginfo('template_url'); ?>/assets/images/sprite.svg#facebook"></use>
                        </svg>
                    </a>
                    <a href="#" target="_blank" class="social__link">
                        <svg width="24" height="24">
                            <use href="<?php bloginfo('template_url'); ?>/assets/images/sprite.svg#instagram"></use>
                        </svg>
                    </a>
                    <a href="#" target="_blank" class="social__link">
                        <svg width="24" height="20">
                            <use href="<?php bloginfo('template_url'); ?>/assets/images/sprite.svg#twitter"></use>
                        </svg>
                    </a>
                    <a href="#" target="_blank" class="social__link">
                        <svg width="24" height="24">
                            <use href="<?php bloginfo('template_url'); ?>/assets/images/sprite.svg#whatsapp"></use>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="footer__col info">
                <h6 class="info__title">INFO</h6>
                <ul class="info__list">
                    <li class="info__item">
                        <a href="#" target="_blank" class="info__link">About</a>
                    </li>
                    <li class="info__item">
                        <a href="#" target="_blank" class="info__link">Careers</a>
                    </li>
                    <li class="info__item">
                        <a href="#" target="_blank" class="info__link">Press</a>
                    </li>
                    <li class="info__item">
                        <a href="#" target="_blank" class="info__link">Product Updates</a>
                    </li>
                </ul>
            </div>
            <div class="footer__col contacts">
                <h6 class="contacts__title">GET IN TOUCH</h6>
                <ul class="contacts__list">
                    <li class="contacts__item">
                        <a href="#" target="_blank" class="contacts__link">About Us</a>
                    </li>
                    <li class="contacts__item">
                        <a href="#" target="_blank" class="contacts__link">Support</a>
                    </li>
                    <li class="contacts__item">
                        <a href="#" target="_blank" class="contacts__link">Contact Us</a>
                    </li>
                </ul>
            </div>
            <div class="footer__col subscribe">
                <h6 class="subscribe__title">subscribe to our newsletter</h6>
                <form class="subscribe__form" action="/subscribe" method="post">
                    <?php echo do_shortcode('[contact-form-7 id="29cc2c6" title="Contact form"]') ?>
                </form>
            </div>
        </div>
        <div class="footer-bottom">
            <p>
                Copyright
                <svg width="12" height="12">
                    <use href="<?php bloginfo('template_url'); ?>/assets/images/sprite.svg#copyright"></use>
                </svg>
                2021 Enisson Lemos | All right reserved
            </p>
            <p>Terms & Conditions</p>
        </div>
    </div>
</footer>

</body>

</html>