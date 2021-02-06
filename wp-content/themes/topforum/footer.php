    <footer class="footer">
        <div class="container">
            <div class="footer__wrapper">
                <div class="footer__nav">
                    <h4 class="footer__subtitle">TOP FORUM</h4>
                    <ul class="footer__nav-list">
                        <li class="footer__nav-item">
                            <a href="./pages/sponsors.html" class="footer__nav-link">Sponsors</a>
                        </li>
                        <li class="footer__nav-item">
                            <a href="./pages/exhibitors.html" class="footer__nav-link">Exhibitors</a>
                        </li>
                        <li class="footer__nav-item">
                            <a href="./pages/speakers.html" class="footer__nav-link">Speakers</a>
                        </li>
                        <li class="footer__nav-item">
                            <a href="./pages/media.html" class="footer__nav-link">Media</a>
                        </li>
                    </ul>
                </div>
                <div class="footer__contact contact">
                    <h4 class="footer__subtitle">CONTACT</h4>
                    <a href="#" class="contact__link">Top Forum Group</a>
                    <address class="contact__address">Trnavska cesta 82, 821 02 Bratislava, Slovakia</address>
                    <a class="contact__tel" href="<?php the_field('tel', 2); ?>"><?php the_field('tel', 2); ?></a>
                    <a class="contact__mail" href="<?php the_field('mail', 2); ?>"><?php the_field('mail', 2); ?></a>
                </div>
                <div class="footer__follow">
                    <h4 class="footer__subtitle">FOLLOW US</h4>
                </div>
            </div>
            <div class="copyring">
                <div class="copyring__text">© 2014 Top Forum Group. All rights reserved. </div>
                <div class="copyring__logo">
                    <div class="copyring__logo-text">Website development:</div>
                    <img src="<?php echo bloginfo('template_url');?>/assets/img/header-logo.png" alt="header-logo" class="copyring__logo-img">
                </div>
            </div>
        </div>
    </footer>

    <div class="modal">
        <div class="modal-subscribe">
            <div data-close class="modal-subscribe__close">&times;</div>
            <div class="promo__subtitle">SUBSCRIBE</div>
            <div class="promo__descr">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
            <form class="subscribe-form" action="#">
                <input placeholder="Name and surname " type="text">
                <input placeholder="Company name " type="text">
                <input placeholder="E-mail" type="email">
                <button class="btn btn__logo" type="submit">SUBSCRIBE</button>
            </form>
        </div>
    </div>
    <?php
        wp_footer();
    ?>
</body>

</html>