
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
                                <img src="<?php echo bloginfo('template_url');?>/assets/img/logo.png" alt="logo" class="logo__img">
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