@extends('frontend.second')

@section('slider')
<body data-currency="$">
<span class="theme-bg-c"></span>
<div class="preloader-block">
    <div class="preloader-container">
        <svg id="Layer_1" x="0px" y="0px" width="150px" height="150px" viewBox="0 0 600 690" enable-background="new 0 0 600 690" xml:space="preserve">
				<polygon fill="#FFFFFF" class="polygon" stroke="#A7A9AC" stroke-width="8" stroke-miterlimit="10" points="54.558,557.559 300,132.441
					545.441,557.559 "/>
            <polygon fill="#8856A3"  class="inner" points="96.037,535.115 300,168.885 503.963,535.115 "/>
			</svg>
    </div>
</div>
<div class="page-content">
    <header class="header">
        <div class="menu-wrapper">
            <div class="row">
                <div class="column large-2">
                    <div class="logo-wrapper">
                        <img src="images/logo.png" alt="" class="logo-image">
                    </div>
                </div>
                <div class="column large-10">
                    <nav class="js-navs-list">
                        <ul class="menu-page">
                            <li class="menu-item">
                                <a href="#products">Products</a>
                            </li>
                            <li class="menu-item">
                                <a href="#companies">Brands</a>
                            </li>
                            <li class="menu-item">
                                <a href="#why-us">Why Triablo</a>
                            </li>
                            <li class="menu-item">
                                <a href="#team-members">Team</a>
                            </li>
                            <li class="menu-item">
                                <a href="#reviews">Reviews</a>
                            </li>
                            <li class="menu-item">
                                <a href="#about">About us</a>
                            </li>
                            <li class="menu-item">
                                <a href="#news">News</a>
                            </li>
                            <li class="menu-item">
                                <a href="#contacts">Contacts</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

        <div class="header-container">
            <div class="header-wrapper">
                <div class="header-content">
                    <div class="row">
                        <div class="columns large-12 medium-12 small-12">
                            <div class="page-quote-block">
                                <h2 class="page-quote js-slidedown-reveal">The Style for today</h2>
                                <h4 class="quote-comment js-slidedown-reveal">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing. Vel pellentesque consequat.
                                </h4>
                                <span class="theme-bg-c js-procede-btn button js-slidedown-reveal">Check It</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="image-bg-v js-bgi-v">
        </div>


        <div class="mobile-menu-wrapper">
            <div class="toggle-btn-block js-toggle-menu">
                <div class="toggle-btn"></div>
            </div>
            <div class="mobile-nav-list js-mobile-container">
            </div>
        </div>
    </header>
    <section role="main">

        <section class="our-products l-section-padding" id="products">
            <div class="row">
                <div class="columns large-12">
                    <h2 class="l-section-title"><span class="title-text">We make you awesome</span></h2>
                </div>
            </div>
            <div class="row">
                <div class="column-large-12">
                    <div class="hidden-container">
                        <div class="row">
                            <div class="columns large-12 medium-12">
                                <div class="added-products">
                                    <p class="l-inline-block"></p>
                                    <div class="shopping-cart l-inline-block">
                                        <i data-icon="&#xe04e;"></i>
                                        <span class="products-number"><span class="js-product-count">0</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="columns large-12 medium-12 small-12">
                                <div class="product-presentation-wrapper">
                                    <div class="product-presentation-content js-products-container">
                                        <div class="category-list">
                                            <dl class="select">
                                                <dt>
                                                    <a href="#"><span data-icon="&#xe067;"></span></a>
                                                </dt>
                                                <dd></dd>
                                            </dl>
                                        </div>
                                        <div class="slider-preloader">
                                            <div id="preloader-container">
                                                <div class="preloader-center">
                                                    <div class="preloader-view">
                                                        <div></div>
                                                        <div></div>
                                                        <div></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="our-partners l-section-padding" id="companies">
            <div class="row">
                <div class="columns large-12">
                    <div class="partners-carousel">
                        <ul class="slides">
                            <li>
                                <div class="partners-item">
                                    <a href="#">
                                        <img src="http://placehold.it/220x40" alt=""/>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="partners-item">
                                    <a href="#">
                                        <img src="http://placehold.it/220x40" alt=""/>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="partners-item">
                                    <a href="#">
                                        <img src="http://placehold.it/220x40" alt=""/>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="partners-item">
                                    <a href="#">
                                        <img src="http://placehold.it/220x40" alt=""/>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="partners-item">
                                    <a href="#">
                                        <img src="http://placehold.it/220x40" alt=""/>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="partners-item">
                                    <a href="#">
                                        <img src="http://placehold.it/220x40" alt=""/>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="why-we" id="why-us">
            <div class="row">
                <div class="columns large-12">
                    <h2 class="l-section-title l-white"><span class="title-text">Why people choose Triablo?</span></h2>
                </div>
            </div>
            <div class="row">
                <div class="columns large-12 medium-12 small-12">
                    <div class="why-facts-list">

                        <div class="why-eleme-block l-dis-ib left-info-block">
                            <div class="why-us-item">
                                <div class="item-desc-block">
                                    <h4 class="item-title">Preorder system</h4>
                                    <p class="item-description">Donec fermentum vulputate nisl non sollicitudin.Vivamus sagittis fermentum dolor, porta adipiscing magna.</p>
                                </div>
                                <div class="item-icon-block"><span class="item-icon" data-icon="&#xe055;"></span></div>
                            </div>
                            <div class="why-us-item">
                                <div class="item-desc-block">
                                    <h4 class="item-title">Retina ready</h4>
                                    <p class="item-description">Donec fermentum vulputate nisl non sollicitudin.Vivamus sagittis fermentum dolor, porta adipiscing magna.</p>
                                </div>
                                <div class="item-icon-block"><span class="item-icon" data-icon="&#xe043;"></span></div>
                            </div>
                        </div>

                        <div class="why-eleme-block l-dis-ib right-info-block">
                            <div class="why-us-item">
                                <div class="item-desc-block">
                                    <h4 class="item-title">Responsive layout</h4>
                                    <p class="item-description">Donec fermentum vulputate nisl non sollicitudin.Vivamus sagittis fermentum dolor, porta adipiscing magna.</p>
                                </div>
                                <div class="item-icon-block"><span class="item-icon" data-icon="&#xe010;"></span></div>
                            </div>
                            <div class="why-us-item">
                                <div class="item-desc-block">
                                    <h4 class="item-title">Material design</h4>
                                    <p class="item-description">Donec fermentum vulputate nisl non sollicitudin.Vivamus sagittis fermentum dolor, porta adipiscing magna.</p>
                                </div>
                                <div class="item-icon-block"><span class="item-icon" data-icon="&#xe034;"></span></div>
                            </div>
                        </div>

                        <div class="why-us-image">
                            <div class="left-image" style="background-image: url(http://placehold.it/335x586)"></div>
                            <img src="http://placehold.it/335x584" alt="">
                            <div class="right-image" style="background-image: url(http://placehold.it/335x585)"></div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section class="members l-section-padding" id="team-members">
            <div class="row">
                <div class="column large-12">
                    <h2 class="l-section-title subtitle">
                        <span class="title-text">Our team</span>
                        <span class="section-subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora esse, inventore incidunt consequatur magni animi autem veniam neque laudantium quod, nihil illo unde nemo odio sint, itaque quidem ea suscipit.</span>
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="column large-12">
                    <div class="for-border-partent">
                        <div class="row">
                            <div class="column large-4 medium-4 small-12">
                                <div class="about-team">
                                    <div class="team-photo">
                                        <div class="team-image-container">
                                            <img src="http://placehold.it/300x384" alt="">
                                        </div>
                                    </div>

                                    <div class="team-member-info">
                                        <div class="team-socials">
                                            <div class="team-socials-container">
                                                <ul class="team-social-list">
                                                    <li class="team-social">
                                                        <a href="#">
                                                            <span class="fa fa-facebook"></span>
                                                        </a>
                                                    </li>
                                                    <li class="team-social">
                                                        <a href="#">
                                                            <span class="fa fa-google-plus"></span>
                                                        </a>
                                                    </li>
                                                    <li class="team-social">
                                                        <a href="#">
                                                            <span class="fa fa-tumblr"></span>
                                                        </a>
                                                    </li>
                                                    <li class="team-social">
                                                        <a href="#">
                                                            <span class="fa fa-stumbleupon"></span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                        <h3 class="team-name js-item-info" >Tyler Tong</h3>
                                        <p class="team-post js-item-info">Manager</p>
                                    </div>
                                </div>
                            </div>
                            <div class="column large-4 medium-4 small-12">
                                <div class="about-team">
                                    <div class="team-photo">
                                        <img src="http://placehold.it/300x384" alt="">
                                    </div>
                                    <div class="team-member-info" >
                                        <div class="team-socials">
                                            <div class="team-socials-container">
                                                <ul class="team-social-list">
                                                    <li class="team-social">
                                                        <a href="#">
                                                            <span class="fa fa-facebook"></span>
                                                        </a>
                                                    </li>
                                                    <li class="team-social">
                                                        <a href="#">
                                                            <span class="fa fa-google-plus"></span>
                                                        </a>
                                                    </li>
                                                    <li class="team-social">
                                                        <a href="#">
                                                            <span class="fa fa-tumblr"></span>
                                                        </a>
                                                    </li>
                                                    <li class="team-social">
                                                        <a href="#">
                                                            <span class="fa fa-stumbleupon"></span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <h3 class="team-name js-item-info">Joseph Abraham</h3>
                                        <p class="team-post js-item-info">Photographer</p>
                                    </div>
                                </div>
                            </div>
                            <div class="column large-4 medium-4 small-12">
                                <div class="about-team">
                                    <div class="team-photo">
                                        <img src="http://placehold.it/300x384" alt="">
                                    </div>
                                    <div class="team-member-info" >
                                        <div class="team-socials">
                                            <div class="team-socials-container">
                                                <ul class="team-social-list">
                                                    <li class="team-social">
                                                        <a href="#">
                                                            <span class="fa fa-facebook"></span>
                                                        </a>
                                                    </li>
                                                    <li class="team-social">
                                                        <a href="#">
                                                            <span class="fa fa-google-plus"></span>
                                                        </a>
                                                    </li>
                                                    <li class="team-social">
                                                        <a href="#">
                                                            <span class="fa fa-tumblr"></span>
                                                        </a>
                                                    </li>
                                                    <li class="team-social">
                                                        <a href="#">
                                                            <span class="fa fa-stumbleupon"></span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <h3 class="team-name js-item-info">Aaron Beet</h3>
                                        <p class="team-post js-item-info">Photographer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="checkit-section">
            <div class="row">
                <div class="column large-9 medium-9">
                    <div class="checkit-section-title">
                        <h4>Excited about what's waiting for you? Check out our new summer collection.</h4>
                    </div>
                </div>
                <div class="column large-3 medium-3">
                    <div class="checkit-btn-block"><span class="checkit-btn l-dis-ib button">Check it out</span></div>
                </div>
            </div>
        </section>

        <section class="testimonial-slider parallax-section l-section-padding" id="reviews">
            <div class="testimonials-list-container">
                <ul class="testimonials-list">

                    <li class="testimonial-item">
                        <div class="testimonial-container">
                            <div class="testimonial-auth">
                                <div class="testim-auth-photo">
                                    <img src="http://placehold.it/140x140" alt="">
                                </div>
                                <p class="short-info">John McKenzey,<span class="auth-country"> California</span></p>
                            </div>
                            <p class="main-testimonial">Thank you so much. I really didn’t expect such a quick and positive response! Often when something goes wrong with a product it seems the consumer is the one that gets the “raw end of the deal.</p>
                        </div>
                    </li>
                    <li class="testimonial-item">
                        <div class="testimonial-container">
                            <div class="testimonial-auth">
                                <div class="testim-auth-photo">
                                    <img src="http://placehold.it/140x140" alt="">
                                </div>
                                <p class="short-info">John McKenzey,<span class="auth-country"> California</span></p>
                            </div>
                            <p class="main-testimonial">Thank you so much. I really didn’t expect such a quick and positive response! Often when something goes wrong with a product it seems the consumer is the one that gets the “raw end of the deal it seems the consumer is the one that gets the “raw end of the deal.</p>
                        </div>
                    </li>
                    <li class="testimonial-item">
                        <div class="testimonial-container">
                            <div class="testimonial-auth">
                                <div class="testim-auth-photo">
                                    <img src="http://placehold.it/140x140" alt="">
                                </div>
                                <p class="short-info">John McKenzey,<span class="auth-country"> California</span></p>
                            </div>
                            <p class="main-testimonial">Thank you so much. I really didn’t expect such a quick and positive response! Often when something goes wrong with a product it seems the consumer is the one that gets the “raw end of the deal it seems the consumer is the one that gets the “raw end of the deal.</p>
                        </div>
                    </li>

                </ul>
            </div>
        </section>

        <section class="news-section l-section-padding" id="news">
            <div class="row">
                <div class="column large-12">
                    <h2 class="l-section-title subtitle">
                        <span class="title-text">Think about it</span>
                        <span class="section-subtitle">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit.</span>
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="column large-12">
                    <div class="news-list-block">
                        <div class="row">
                            <div class="column large-4 medium-6">
                                <div class="news-item js-news-item">
                                    <div class="news-image-block news-with-slider">
                                        <img src="images/placeholder.png" class="news-placeholder" alt="">
                                        <div class="news-images-list">
                                            <img src="http://placehold.it/470x470" class="news-image" alt="">
                                            <img src="http://placehold.it/470x470" class="news-image" alt="">
                                            <img src="http://placehold.it/470x470" class="news-image" alt="">
                                            <img src="http://placehold.it/470x470" class="news-image" alt="">
                                        </div>
                                        <a href="#"></a>
                                    </div>
                                    <div class="main-news-block">
                                        <p class="news-date l-dis-ib">3 September 2014</p>
                                        <a href="#"><h4 class="news-title l-dis-ib">John Doe Nabs Lead in Adaptation of 'Paper Towns'</h4></a>
                                        <p class="main-news l-dis-ib">
                                            John Doe just added a major role to her quickly growing acting resume. As if teens (and, okay, quite a few adults) needed another reason to idolize the Brit, she just signed on to play the female lead in the film adaptation of The Fault in Our Stars author John Green’s YA book, Paper Towns.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="column large-4 medium-6">
                                <div class="news-item js-news-item">
                                    <div class="news-image-block">
                                        <img src="images/placeholder.png" class="news-placeholder" alt="">
                                        <img src="http://placehold.it/470x470" class="news-image" alt="">
                                        <div class="hover-parent">
                                            <a href="#" class="top-block" data-icon="&#xe095;">
                                            </a>
                                            <a href="#" class="bottom-block" data-icon="&#xe095;">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="main-news-block">
                                        <p class="news-date l-dis-ib">4 September 2014</p>
                                        <a href="#"><h4 class="news-title l-dis-ib">How to Nail Swedish, French, and American Style All at Once</h4></a>
                                        <p class="main-news l-dis-ib">
                                            At this point, French illustrator, photographer, and all-around-cool-lady Garance Doré doesn't just run a blog, she runs a brand. Her wispy illustrations, once loved by only a corner of the Internet, decorate Gap T-, Kate Spade bags.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="column large-4 medium-6">
                                <div class="news-item js-news-item">
                                    <div class="news-image-block">
                                        <img src="images/placeholder.png" class="news-placeholder" alt="">
                                        <img src="http://placehold.it/470x470" class="news-image" alt="">
                                        <div class="hover-parent">
                                            <a href="#" class="top-block" data-icon="&#xe095;">
                                            </a>
                                            <a href="#" class="bottom-block" data-icon="&#xe095;">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="main-news-block">
                                        <p class="news-date l-dis-ib">6 September 2014</p>
                                        <a href="#"><h4 class="news-title l-dis-ib">High School's Super-Strict Dress Code</h4></a>
                                        <p class="main-news l-dis-ib">
                                            Here's a list of clothing that can land you in detention at Tottenville High School: spaghetti-strap tank tops, short shorts, miniskirts, leggings, skinny jeans, halter tops, and even headbands. The Staten Island, New York school is cracking down on its dress code in a big way—and that's left students outraged.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="column large-4 medium-6">
                                <div class="news-item js-news-item">
                                    <div class="news-image-block">
                                        <img src="images/placeholder.png" class="news-placeholder" alt="">
                                        <img src="http://placehold.it/470x470" class="news-image" alt="">
                                        <div class="hover-parent">
                                            <a href="#" class="top-block" data-icon="&#xe095;">
                                            </a>
                                            <a href="#" class="bottom-block" data-icon="&#xe095;">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="main-news-block">
                                        <p class="news-date l-dis-ib">8 September 2014</p>
                                        <a href="#"><h4 class="news-title l-dis-ib">23 SPRING TRENDS FROM THE RUNWAYS</h4></a>
                                        <p class="main-news l-dis-ib">
                                            There are plenty of reasons why we are excited for next spring, but digesting the trends from the runway of New York Fashion Week has us positively giddy. Check out all of the great things to look forward to next season. A few of them you might be able to try out right now.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="column large-4 medium-6">
                                <div class="news-item js-news-item">
                                    <div class="news-image-block news-with-slider">
                                        <img src="images/placeholder.png" class="news-placeholder" alt="">
                                        <div class="news-images-list">
                                            <img src="http://placehold.it/470x470" class="news-image" alt="">
                                            <img src="http://placehold.it/470x470" class="news-image" alt="">
                                            <img src="http://placehold.it/470x470" class="news-image" alt="">
                                            <img src="http://placehold.it/470x470" class="news-image" alt="">
                                            <img src="http://placehold.it/470x470" class="news-image" alt="">
                                        </div>
                                        <a href="#"></a>
                                    </div>
                                    <div class="main-news-block">
                                        <p class="news-date l-dis-ib">11 September 2014</p>
                                        <a href="#"><h4 class="news-title l-dis-ib">THE BEST OF LONDON STREET STYLE</h4></a>
                                        <p class="main-news l-dis-ib">
                                            The fashion month marathon runs on! Our man on the street, Dan Roberts, is capturing all the action at London Fashion Week, from Somerset House and beyond. Here are the best street style snaps from the first stop across the pond.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="column large-4 medium-6">
                                <div class="news-item js-news-item">
                                    <div class="news-image-block">
                                        <img src="images/placeholder.png" class="news-placeholder" alt="">
                                        <img src="http://placehold.it/470x470" class="news-image" alt="">
                                        <div class="hover-parent">
                                            <a href="#" class="top-block" data-icon="&#xe095;">
                                            </a>
                                            <a href="#" class="bottom-block" data-icon="&#xe095;">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="main-news-block">
                                        <p class="news-date l-dis-ib">1 September 2014</p>
                                        <a href="#"><h4 class="news-title l-dis-ib">AllSaints Reinvents the Fashion Show Formula</h4></a>
                                        <p class="main-news l-dis-ib">
                                            New York Fashion week has come and gone, but one brand was conspicuously absent from the fray. In lieu of showing at Lincoln Center, as they have the past two seasons, It girl-beloved London brand AllSaints elected instead to host a digital runway show set against an airport backdrop (a metaphor for global expansion and freedom).
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="video-section">
				<span class="js-play-btn video-play-btn">
					<span class="play-icon-container">
						<i class="fa fa-play play-icon"></i>
					</span>
				</span>
            <video preload="auto" loop class="video-block js-page-video" poster="http://placehold.it/1280x720">
                <source src="video/MOTO-HD.mp4" type="video/mp4">
                <source src="video/MOTO-HD.webm" type="video/webm">
                <source src="video/MOTO-HD.ogv" type="video/ogg">
            </video>
        </section>

        <section class="about-us l-section-padding" id="about">
            <div class="row">
                <div class="columns large-12 medium-12 small-12">
                    <div class="stats-in-number custom-column">
                        <ul>
                            <li class="stats-item large-3 medium-3 small-12">
                                <div class="important-facts-wrapper">
                                    <div class="important-facts">
                                        <div class="fact-icon">
                                            <i data-icon="&#xe094;"></i>
                                        </div>
                                        <span class="animated-text">
												<span id="hours" class="animated-fact">24</span>
												<span>h</span>
											</span>
                                    </div>
                                    <p class="facts-info">Avarage delivery time</p>
                                </div>
                            </li>
                            <li class="stats-item large-3 medium-3 small-12">
                                <div class="important-facts-wrapper">
                                    <div class="important-facts">
                                        <div class="fact-icon">
                                            <i data-icon="&#xe035;"></i>
                                        </div>
                                        <span class="animated-text">
												<span id="sold" class="animated-fact">2443</span>
											</span>
                                    </div>
                                    <p class="facts-info">Products sold</p>
                                </div>
                            </li>
                            <li class="stats-item large-3 medium-3 small-12">
                                <div class="important-facts-wrapper">
                                    <div class="important-facts">
                                        <div class="fact-icon">
                                            <i data-icon="&#xe068;"></i>
                                        </div>
                                        <span class="animated-text">
												<span id="happy" class="animated-fact">98</span>
												<span>%</span>
											</span>
                                    </div>
                                    <p class="facts-info">Happy clients</p>
                                </div>
                            </li>
                            <li class="stats-item large-3 medium-3 small-12">
                                <div class="important-facts-wrapper">
                                    <div class="important-facts">
                                        <div class="fact-icon">
                                            <i data-icon="&#xe028;"></i>
                                        </div>
                                        <span class="animated-text">
												<span id="experience" class="animated-fact">20</span>
											</span>
                                    </div>
                                    <p class="facts-info">Years of experience</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

    </section>
    <footer>
        <section class="get-in-touch l-section-padding bg-img" id="contacts">
            <div class="title-block">
                <div class="row">
                    <div class="columns large-12">
                        <h2 class="l-section-title">
								<span class="title-text">
									contact or find us on <span class="js-map-view show-map-btn">the map</span>
								</span>
                        </h2>
                    </div>
                </div>
            </div>

            <div class="fields-view">
                <form action="sendmail.php" method="post">
                    <div class="row">
                        <div class="columns large-6 medium-6">
                            <div class="align-center-small">
                                <div class="centered-block">

                                    <label for="name" class="contact-label">Name</label>
                                    <input type="text" id="name" class="contact-field required" name="name_field">
                                </div>
                                <div class="centered-block">
                                    <label for="mail" class="contact-label">E-mail</label>
                                    <input type="text" id="mail" class="contact-field required" name="mail_field">
                                </div>
                                <div class="centered-block">
                                    <label for="subject" class="contact-label">Subject</label>
                                    <input type="text" id="subject" class="contact-field required" name="subject_field">
                                </div>
                            </div>
                        </div>
                        <div class="columns large-6 medium-6">
                            <div class="align-center-small">
                                <div class="centered-block">
                                    <label for="message" class="contact-label">Message</label>
                                    <textarea id="message" class="contact-field textarea-contact required" name="message_field"></textarea>

                                    <span class="checkout">
											<span>Send</span>
											<i class="fa fa-envelope-o"></i>
										</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

                <div class="socials-list">
                    <ul class="social-icons">
                        <li>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-tumblr"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <div class="footer-wrapper l-section-padding">

            <div class="row">
                <div class="columns large-12">
                    <div class="footer-container">
                        <div class="footer-item">
                            <address>
                                <p class="address-item">
                                    <span class="heightlight">e-mail:</span> clothes_shop@triablo.com
                                </p>
                                <p class="address-item">
                                    <span class="heightlight">address:</span> New York, Saint Nicholas Avenue 13/1
                                </p>
                                <p class="address-item">
                                    <span class="heightlight">fax:</span> +1 0123-4567-8900
                                </p>
                            </address>
                        </div>

                        <div class="footer-item">
                            <div class="logo-wrapper">
                                <div class="logo-block">
                                    <a href="#main-carousel">
                                        <img src="images/footer-logo.png" alt="" class="footer-logo"/>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="footer-item">
                            <div class="copy-right">
                                <p>
                                    © Triablo 2014. All Rights Reserved
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </footer>
</div>
<div class="modals">
    <div class="map-view js-map-container">
        <span class="button form-view-btn js-form-view">back to site</span>
        <div id="map-block">

        </div>
    </div>

    <div class="codal-container">

        <div class="success-block popup-elem">
            <p class="thank-popup"><span>Thank you!</span><br/> We will contact you soon.</p>
            <span class="close-popup"></span>
        </div>

        <div class="error-block popup-elem">
            <p class="thank-popup"><span>Please, </span><br/>complete the form.</p>
            <span class="close-popup"></span>
        </div>
    </div>


    <div class="products-modals">
        <div class="products-category-list">
            <div class="category-container">
                <div class="category-block category-list">
                    <div class="row">
                        <div class="columns large-12 medium-12">
                            <dl class="select">
                                <dt></dt>
                                <dd>
                                    <div class="options-list">
                                        <div class="close-btn"></div>
                                        <div class="options-wrapper">
                                            <div class="options-container js-category-list">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="loader">
                                        <div class="loader-container">
                                            <svg id="Layer_1" x="0px" y="0px"
                                                 width="600px" height="690px" viewBox="0 0 600 690" enable-background="new 0 0 600 690" xml:space="preserve">
								          		<polygon fill="#f1f1f1" class="polygon" stroke="#A7A9AC" stroke-width="8" stroke-miterlimit="10" points="54.558,557.559 300,132.441
								          			545.441,557.559 "/>
                                                <polygon fill="#8856A3"  class="inner" points="96.037,535.115 300,168.885 503.963,535.115 "/>
								          		</svg>
                                        </div>
                                    </div>
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="products-form">
            <div class="form-container">
                <div class="main-form-block">
                    <div class="row">
                        <div class="columns large-12">
                            <div class="form-block-header custom-reveal">
                                <div class="form-close-btn"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="columns large-7 medium-7">
                            <div class="order-list-block custom-reveal">
                                <div class="order-list-container js-order-container">
                                </div>
                                <div class="order-total-block">
                                    <p class="total l-dis-ib">Total:</p>
                                    <p class="total-price l-dis-ib js-total-price">
                                        <span class="currency"></span>
                                        <span class="value">0.00</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="columns large-5 medium-5">
                            <div class="form-fields products-form-block">
                                <form action="sendmail.php" method="POST">
                                    <input type="text" name="name_field" placeholder="Name" id="name_field" class="fillable-field required custom-reveal">

                                    <span class="mail-field l-pos-r">
											<input type="text" placeholder="E-mail" name="mail_field" id="mail_field" class="fillable-field required custom-reveal">
										</span>

                                    <input type="text" placeholder="Phone number" name="phone_field" id="phone_field" class="fillable-field required custom-reveal">


                                    <input type="text" name="prCode_field" id="prCode_field" class="fillable-field l-hidden required custom-reveal products-code-list">


                                    <input type="submit" value="Send" class="button submit-btn checkout custom-reveal preorder-btn">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="product-details-modal">
    </div>
</div>

<script data-main="js/script.js" src="js/lib/require.js"></script>
</body>
@endsection
