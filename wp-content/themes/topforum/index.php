<?php
    get_header();
?>
    <section class="info">
        <div class="container">
            <div class="outline">
                <div class="info__block">
                    <div class="info__data">
                        <p>26-27</p>
                        <p>OCTOBER</p>
                        <p>2016</p>
                    </div>
                    <div class="info__text">
                        <h4 class="info__subtitle">Wealth TOP FORUM Israel 2016</h4>
                        <p class="info__descr">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                        </p>
                        <p class="info__descr-footer">Barcelona</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="promo">
        <div class="container">
            <div class="promo__text">
                <?php
                    the_field('about_descr');
                ?>
            </div>
            <div class="promo__wrapper">
                <div class="promo__item">
                    <div class="promo__img-out">
                        <img src="<?php echo bloginfo('template_url');?>/assets/img/index/main_1.png" alt="Sponsors" class="promo__img">
                    </div>
                    <h3 class="promo__subtitle"><?php the_field('promo_title'); ?></h3>
                    <p class="promo__descr">
                        <span>TOP FORUM</span> conferences are the best route to raise brand awareness, get pre- and after-event promotion among your target audience, confirm the highest level of your business, present your company services and catch
                        the interest of highly qualified prospects and as a result to find new clients
                    </p>
                    <button class="btn__promo btn">Learm more</button>
                    <p class="promo__footer">Wealth TOP FORUM Israel 2016</p>
                </div>
                <div class="promo__item">
                    <div class="promo__img-out">
                        <img src="<?php echo bloginfo('template_url');?>/assets/img/index/main_2.png" alt="Delegate" class="promo__img">
                    </div>
                    <h3 class="promo__subtitle">BECOME A DELEGATE</h3>
                    <p class="promo__descr">
                        <span>TOP FORUM</span> business conferences and events serve as the best platform to learn useful insights and new trends in your business area, engage with peers from the global community and choose the best available offer, and
                        all that in one place, so your participation will safe dozens of working hours.
                    </p>
                    <button class="btn__promo btn">Learm more</button>
                    <p class="promo__footer">Wealth TOP FORUM Israel 2016</p>
                </div>
                <div class="promo__item">
                    <div class="promo__img-out">
                        <img src="<?php echo bloginfo('template_url');?>/assets/img/index/main_3.png" alt="Speacers" class="promo__img">
                    </div>
                    <h3 class="promo__subtitle">FOR FUTURE SPEAKERS</h3>
                    <p class="promo__descr">
                        We thoroughly choose the key experts to make a speech at TOP FORUM international conferences and our audience obtains the most up-to-date information about new trends on the market. Should you like to share useful insights, become a speaker or to take
                        part in panel discussion, please contact us.
                    </p>
                    <button class="btn__promo btn">Learm more</button>
                    <p class="promo__footer">Wealth TOP FORUM Israel 2016</p>
                </div>
            </div>
            <div class="promo__footer-btn">
                <a href="./pages/registration.html" class="btn btn__logo btn__register">REGISTER NOW</a>
                <button data-modal class="btn__subscribe btn">Subscribe</button>
            </div>
        </div>
    </section>

    <section class="reviews">
        <div class="container">
            <h2 class="subtitle">CUSTOMER REVIEWS</h2>
            <div class="reviews__wrapper carousel__inner">
                <button class="reviews__btn-left">
                    <img src="<?php echo bloginfo('template_url');?>/assets/icons/arrow_left_dark.png" alt="arrow-left" class="reviews__btn-img">
                </button>
                <div class="reviews__block">
                    <img src="<?php echo bloginfo('template_url');?>/assets/img/index/reviews_1.png" alt="reviews" class="reviews__img">
                    <div class="reviews__text">
                        <h3 class="reviews__subtitle">Alexander and Vera</h3>
                        <div class="reviews__data">04 SEPTEMBER 2015</div>
                        <p class="reviews__descr">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has
                            survived not only five centuries.
                        </p>
                    </div>
                </div>
                <div class="reviews__block">
                    <img src="<?php echo bloginfo('template_url');?>/assets/img/index/no_photo.png" alt="reviews" class="reviews__img">
                    <div class="reviews__text">
                        <h3 class="reviews__subtitle">Vinogradov Nikita and Oksana</h3>
                        <div class="reviews__data">04 SEPTEMBER 2015</div>
                        <p class="reviews__descr">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has
                            survived not only five centuries.
                        </p>
                    </div>
                </div>
                <button class="reviews__btn-right">
                    <img src="<?php echo bloginfo('template_url');?>/assets/icons/arrow_right_dark.png" alt="arrow-right" class="reviews__btn-img">
                </button>
            </div>
        </div>
    </section>

    <section class="promo-video">
        <div class="container">
            <h2 class="subtitle">Promo video</h2>
            <img src="<?php echo bloginfo('template_url');?>/assets/img/index/promo-video.jpg" alt="promo-video" class="promo-video__img">

        </div>
    </section>

    <section class="clients">
        <div class="container">
            <h2 class="subtitle">OUR CLIENTS</h2>
            <div class="carousel">
                <button class="carousel__btn-left">
                    <img src="<?php echo bloginfo('template_url');?>/assets/icons/arrow_left_dark.png" alt="arrow-left" class="carousel__btn-img">
                </button>
                <ul class="carousel__list">
                    <li class="carousel__item">
                        <img src="<?php echo bloginfo('template_url');?>/assets/img/index/footer_1.png" alt="clients" class="carousel__img">
                    </li>
                    <li class="carousel__item">
                        <img src="<?php echo bloginfo('template_url');?>/assets/img/index/footer_2.png" alt="clients" class="carousel__img">
                    </li>
                    <li class="carousel__item">
                        <img src="<?php echo bloginfo('template_url');?>/assets/img/index/footer_3.png" alt="clients" class="carousel__img">
                    </li>
                    <li class="carousel__item">
                        <img src="<?php echo bloginfo('template_url');?>/assets/img/index/footer_4.png" alt="clients" class="carousel__img">
                    </li>
                    <li class="carousel__item">
                        <img src="<?php echo bloginfo('template_url');?>/assets/img/index/footer_5.png" alt="clients" class="carousel__img">
                    </li>
                    <li class="carousel__item">
                        <img src="<?php echo bloginfo('template_url');?>/assets/img/index/footer_6.png" alt="clients" class="carousel__img">
                    </li>
                </ul>
                <button class="carousel__btn-right">
                    <img src="<?php echo bloginfo('template_url');?>/assets/icons/arrow_right_dark.png" alt="arrow-left" class="carousel__btn-img">
                </button>
            </div>
        </div>
    </section>
    <?php
        get_footer();
    ?>