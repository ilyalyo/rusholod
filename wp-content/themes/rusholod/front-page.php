<?php

get_header(); ?>

<main id="main" class="site-main" role="main">

    <div class="row">
        <div class="col-md-12">
            <div class="carousel slide multi-item-carousel" id="theCarousel">
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="col-xs-6"><a href="#1"><img src="../../../wp-includes/images/rusholod/1.jpg"
                                                                class="img-responsive"></a></div>
                    </div>
                    <div class="item">
                        <div class="col-xs-6"><a href="#1"><img src="../../../wp-includes/images/rusholod/2.jpg"
                                                                class="img-responsive"></a></div>
                    </div>
                    <div class="item">
                        <div class="col-xs-6"><a href="#1"><img src="../../../wp-includes/images/rusholod/3.jpg"
                                                                class="img-responsive"></a></div>
                    </div>
                    <div class="item">
                        <div class="col-xs-6"><a href="#1"><img src="../../../wp-includes/images/rusholod/4.jpg"
                                                                class="img-responsive"></a></div>
                    </div>
                </div>
                <a class="left carousel-control" href="#theCarousel" data-slide="prev" hidden="hidden"><i
                        class="glyphicon glyphicon-chevron-left"></i></a>
                <a class="right carousel-control" href="#theCarousel" data-slide="next" hidden="hidden"><i
                        class="glyphicon glyphicon-chevron-right"></i></a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="inner">
            <ul class="banner-list">
                <li class="banner__item">
                    <a href="#" class="link link_no-border">
                        <img src="../../../wp-includes/images/rusholod/landing_1.png" alt=""
                             class="banner__image js-svg-image">
                    </a>
                    <h2 class="banner__title"><a href="#" class="link
link_yellow-black-bg link_banner">Чиллеры</a></h2>
                    <p class="banner__text">Индивидуальный подход для нестандартных задач.</p>
                </li>

                <li class="banner__item">
                    <a href="#" class="link link_no-border">
                        <img src="../../../wp-includes/images/rusholod/landing_2.png"
                             alt="" class="banner__image js-svg-image">
                    </a>
                    <h2 class="banner__title"><a href="#" class="link
link_yellow-black-bg link_banner">Тепловые насосы</a></h2>
                    <p class="banner__text">Низкие ставки и простота урегулирования претензий.</p>
                </li>

                <li class="banner__item">
                    <a href="#" tabindex="-1" class="link link_no-border">
                        <img src="../../../wp-includes/images/rusholod/landing_3.png"
                             alt="" class="banner__image js-svg-image">
                    </a>
                    <h2 class="banner__title"><a href="#" tabindex="-1" class="link
link_yellow-black-bg link_banner">Комплектующие</a></h2>
                    <p class="banner__text">Новая комплексная услуга на лучших складах.</p>
                </li>

                <li class="banner__item">
                    <a href="#" tabindex="-1" class="link link_no-border">
                        <img src="../../../wp-includes/images/rusholod/landing_4.png"
                             alt="" class="banner__image js-svg-image">
                    </a>
                    <h2 class="banner__title"><a href="#" tabindex="-1" class="link
link_yellow-black-bg link_banner">Хладон</a></h2>
                    <p class="banner__text">Оповещения о ваших заказах и новости всегда под рукой</p>
                </li>
            </ul>

        </div>
    </div>
</main><!-- .site-main -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
        integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
        crossorigin="anonymous"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
      integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<script>
    $(document).ready(function () {
        $('.carousel').carousel({
            interval: 4000
        }).carousel('cycle');
        $('.multi-item-carousel .item').each(function () {
            var next = $(this).next();
            if (!next.length) {
                next = $(this).siblings(':first');
            }
            next.children(':first-child').clone().appendTo($(this));
        });
    });

    // for every slide in carousel, copy the next slide's item in the slide.
    // Do the same for the next, next item.

</script>
<style>
    .carousel .col-xs-6 {
        padding-left: 0;
        padding-right: 0;
    }

    .banner__item {
        display: inline-block;
        vertical-align: top;
        margin-bottom: 23px;
        margin-right: 20px;
        width: 450px;
    }

    .banner__image {
        float: left;
        margin-right: 18px;
        width: 160px;
        height: 127px;
        border: none;
    }

    .banner__title {
        margin: 30px 0 0;
        padding: 0;
        line-height: 23px;
        font-weight: normal;
        display: inherit;
    }

    .banner__text {
        margin: 16px 0 0;
    }

    .banner-list {
        display: inline-table;
        list-style: none;
        padding: 42px 0 17px;
        margin: 0;
    }

    .inner {
        margin: 0 auto;
        position: relative;
        width: 940px;
        padding: 0;
        height: 100%;
    }

    .link {
        color: #2685d1;
        font-size: 14px;
        outline-width: 0px;
        text-decoration: none;
        border-bottom: 1px solid rgba(38, 133, 209, 0.5);
        padding-bottom: 1px;
        cursor: pointer;
    }
</style>
<?php get_sidebar('content-bottom'); ?>

<?php get_footer(); ?>
