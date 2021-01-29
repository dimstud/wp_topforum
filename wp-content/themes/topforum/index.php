<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        wp_head();
    ?>
</head>

<body>
    <header class="heading">
        <h1 class="visually-hidden">Top forum</h1>
        <div class="nav">
            <div class="container">
                <nav class="nav__site">
                    <ul class="nav__list">
                        <li class="dropdown">
                            <a href="./pages/sponsors.html" class="dropbtn nav__item">Sponsors</a>
                            <div class="dropdown-content">
                                <a href="#">General Sponsor</a>
                                <a href="#">Platinum Sponsor</a>
                                <a href="#">High-Tech Sponsor</a>
                                <a href="#">Gold Sponsor</a>
                            </div>
                        </li>
                        </li>
                        <li class="dropdown">
                            <a href="./pages/exhibitors.html" class="dropbtn nav__item">Exhibitors</a>
                            <div class="dropdown-content">
                                <a href="#">Wealth TOP FORUM Israel 2016</a>
                                <a href="#">Another name of the conference</a>
                                <a href="#">Another name of the conference 2016</a>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a href="./pages/speakers.html" class="dropbtn nav__item">Speakers</a>
                            <div class="dropdown-content">
                                <a href="#">Wealth TOP FORUM Israel 2016</a>
                                <a href="#">Another name of the conference</a>
                                <a href="#">Another name of the conference 2016</a>
                            </div>
                        </li>
                        <li>
                            <a href="./pages/media.html" class="nav__item">Media</a>
                        </li>
                    </ul>
                    <a href="#" class="btn btn__nav">TOP FORUM CLUB</a>
                </nav>
            </div>
        </div>
        <div class="logo">
            <div class="container">
                <div class="logo__wrapper">
                    <ul class="logo__nav">
                        <li>
                            <a href="#" class="logo__link">
                                <img src="./img/logo.png" alt="logo" class="logo__img">
                            </a>
                        </li>
                        <li>
                            <div class="logo__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="22" height="29" viewBox="0 0 22 29">
                                    <image width="22" height="29"
                                        xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAdCAYAAACuc5z4AAAC80lEQVRIiY2VT4hNcRTHP++++54RsbCjiWyEjeanWLARhZKFHSnKAgsWQ8rSwg6lKCzITkKpYcPKLFj8xAJDyt9INhphxntvRofvqeM+b8ap9+7vnnvO935/33N+59YGBgYKYAIogTZ/zH3/YxZLzvl3fErJ7mv2N1kBRaAN/WrT/CYNNKVUKndWzrljjFGimwd05O/FvFBMKcZtA9e17sANBbe60qc233FdzDspJSPTdODIelLrecB33TtDNyMyqt00Rajmkpo0HlwG0HXS+yHwBHgOjAAvgGfyPRLYgZzzT+U7AStgvdSbOuHBJuAxsBVYUNG0rbgvwEFgD3A659xKKfXlnMckRS22m9t74ChweUp1YRHwEujPOX8U00IdUhTSyGy/2BjLGYFlEdptZgCeraJ9SCkNqTMMtOEajwF9wBklmwTblDwRDo+9dFxgZjuAmzlny9mcUtoecv6qtJt1wtqKrwhJHa03qKBmb4GfYm0t1/RtjinoFHBHrbRTSU0xbQS2/SYpcDiltEb39wKRlhWvodZZCLwGlgLzgRvA3BBcC51zH7gKnJBvMOd8UnMC17glDd8Ay9SrVsg5wFAAdraHgFXACoEeMdCqnn7yqkNoF/AJuAXsBi7Jv0SHZT2wGLiScx7tqlIoSju0FQK6DSwHLob4EXXMXeCCavGXuRx+lJ1xXVVvqspPTTKxfgd8Ba6rz8e7aAZzYAetBdA+dctx4JriBrsQKuYD37ffENN2qPyYrga6WnEn5JuSLWGetrS9epjJK/VsGHgg33n5tvxD2zJefQhNhoFtzM8C+4C9wDnJU+pUblRhR9TzhW+/yngi6OvH9RXwWfPgh6r/TbHHNKOHA0aXVcdmXWvX2QsZrS/ob8XqAu31tjKsq6AE0FrXkx5SuL5eyDIkl5UXNsIc/6d5cFX88bCbIhz3hmKn/ZoXlQ+pmzH1oRP9cZ5MC+zFsq1FsHhYnL3dm1z+yeppxtZl8ELFr0Wvdbx2G/ALlZ4JCABID6sAAAAASUVORK5CYII=" />
                                </svg>
                            </div>
                            <a href="#" class="logo__item">
                                UPCOMING EVENTS
                            </a>
                        </li>
                        <li>
                            <div class="logo__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="19" height="23" viewBox="0 0 19 23">
                                    <image width="19" height="23"
                                        xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABMAAAAXCAYAAADpwXTaAAACBUlEQVQ4jZWUTYoUQRCFv6quthlHQUV0JSouFNx1gldw4yG8ggcYUTyDoCu3gjfQrQsREt0o6nJE/Fm5EJ2pruqWqH7RRFUXMgYUlRmZ8eLFXxbz+XwGNEDLWir9G/pSAsug6fY5526TUir9ggFNgEIgjfZT6dy4BxRd5ZyXplwAMwGudOb7RdBFpj0gFwsTsfAw7wF7wBXgKnBRoI1YGoEaOA18BX4BL3POv6sRTydk8Bw4A3wEdnVmDo8pr++AC8ANOdyvQi48nG/AZ2AHOLsVS1+eGEjOeT+lNI3MPKmV2P0EzgPftyDWcgu4nXP2Ai1jhTzUWsDG9FQ4L8XW5Zlyu7GPYBG0FagbT1ThP2Jtcgd4EOymW/2iBHvLvJWuFRCqnskj4GlK6T7rPqs9ZxF0pXxZiB+AV8A5MTVHB2L3SdW+m1J6mHP+UbEtJ4FLwHXgpvrti0L1iheajtfAC+/RsWp6877X908JszmJBRiOzW44K0Mu7X9czHYENIvMCq0XQbfwKslBrX0d1n7HXo+2DGBNWKMcDVkXYrYRC89Sk1IqHGw5YujefcC9APXgOeqeH9NFpTM5GIBGhpvRcQcWnth1HhzQw7ys/yzoV6pywbisPGc+3M7gjZ6ddsRsmI7ujsLssfKLj4FrIWdHluGge2gxP/8FZqV2w0P1lX1egKMJ8Be55KWmt8d1mQAAAABJRU5ErkJggg==" />
                                </svg>
                            </div>
                            <a href="./pages/contacts.html" class="logo__item">
                                CONTACTS
                            </a>
                        </li>
                    </ul>
                    <a href="./pages/registration.html" class="btn btn__logo">REGISTER NOW</a>
                </div>
            </div>
        </div>
    </header>

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
            <p class="promo__text">
                <span>TOP forum</span> is an international business communication company. Our main idea is to take your business to the next level. To make this transformation happen you need to have a platform to meet hundreds of new clients and specialists,
                become aware of new trends and soak up fresh ideas from best experts. It's what we call the forum impact. Face to face communication with like-minded professionals is a personal experience which leads your business to a great success.
                TOP FORUM business conferences give you the unique opportunity to set new goals, open your new strategy and implement the campaigns that will give you superiority in your industry. Just invest in your future.
            </p>
            <div class="promo__wrapper">
                <div class="promo__item">
                    <div class="promo__img-out">
                        <img src="img/index/main_1.png" alt="Sponsors" class="promo__img">
                    </div>
                    <h3 class="promo__subtitle">FOR FUTURE SPONSORS AND EXHIBITORS</h3>
                    <p class="promo__descr">
                        <span>TOP FORUM</span> conferences are the best route to raise brand awareness, get pre- and after-event promotion among your target audience, confirm the highest level of your business, present your company services and catch
                        the interest of highly qualified prospects and as a result to find new clients
                    </p>
                    <button class="btn__promo btn">Learm more</button>
                    <p class="promo__footer">Wealth TOP FORUM Israel 2016</p>
                </div>
                <div class="promo__item">
                    <div class="promo__img-out">
                        <img src="img/index/main_2.png" alt="Delegate" class="promo__img">
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
                        <img src="img/index/main_3.png" alt="Speacers" class="promo__img">
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
                <button class="btn__subscribe btn">Subscribe</button>
            </div>
        </div>
    </section>

    <section class="reviews">
        <div class="container">
            <h2 class="subtitle">CUSTOMER REVIEWS</h2>
            <div class="reviews__wrapper carousel__inner">
                <button class="reviews__btn-left">
                    <img src="icons/arrow_left_dark.png" alt="arrow-left" class="reviews__btn-img">
                </button>
                <div class="reviews__block">
                    <img src="img/index/reviews_1.png" alt="reviews" class="reviews__img">
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
                    <img src="img/index/no_photo.png" alt="reviews" class="reviews__img">
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
                    <img src="icons/arrow_right_dark.png" alt="arrow-right" class="reviews__btn-img">
                </button>
            </div>
        </div>
    </section>

    <section class="promo-video">
        <div class="container">
            <h2 class="subtitle">Promo video</h2>
            <img src="img/index/promo-video.jpg" alt="promo-video" class="promo-video__img">
        </div>
    </section>

    <section class="clients">
        <div class="container">
            <h2 class="subtitle">OUR CLIENTS</h2>
            <div class="carousel">
                <button class="carousel__btn-left">
                    <img src="icons/arrow_left_dark.png" alt="arrow-left" class="carousel__btn-img">
                </button>
                <ul class="carousel__list">
                    <li class="carousel__item">
                        <img src="img/index/footer_1.png" alt="clients" class="carousel__img">
                    </li>
                    <li class="carousel__item">
                        <img src="img/index/footer_2.png" alt="clients" class="carousel__img">
                    </li>
                    <li class="carousel__item">
                        <img src="img/index/footer_3.png" alt="clients" class="carousel__img">
                    </li>
                    <li class="carousel__item">
                        <img src="img/index/footer_4.png" alt="clients" class="carousel__img">
                    </li>
                    <li class="carousel__item">
                        <img src="img/index/footer_5.png" alt="clients" class="carousel__img">
                    </li>
                    <li class="carousel__item">
                        <img src="img/index/footer_6.png" alt="clients" class="carousel__img">
                    </li>
                </ul>
                <button class="carousel__btn-right">
                    <img src="icons/arrow_right_dark.png" alt="arrow-left" class="carousel__btn-img">
                </button>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <div class="footer__wrapper">
                <div class="footer__nav">
                    <h4 class="footer__subtitle">TOP FORUM</h4>
                    <ul class="footer__nav-list">
                        <li class="footer__nav-item">
                            <a href="#" class="footer__nav-link">Sponsors</a>
                        </li>
                        <li class="footer__nav-item">
                            <a href="#" class="footer__nav-link">Exhibitors</a>
                        </li>
                        <li class="footer__nav-item">
                            <a href="#" class="footer__nav-link">Speakers</a>
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
                    <a class="contact__tel" href="tel:+421221025322">+421 221 025 322</a>
                    <a class="contact__mail" href="mailto:info@topforum.com">info@topforum.com</a>
                </div>
                <div class="footer__follow">
                    <h4 class="footer__subtitle">FOLLOW US</h4>
                </div>
            </div>
            <div class="copyring">
                <div class="copyring__text">© 2014 Top Forum Group. All rights reserved. </div>
                <div class="copyring__logo">
                    <div class="copyring__logo-text">Website development:</div>
                    <img src="img/header-logo.png" alt="header-logo" class="copyring__logo-img">
                </div>
            </div>
        </div>
    </footer>

    <div class="overlay">
        <div class="modal-subscribe">
            <div class="modal-subscribe__close">&times;</div>
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