<?php 
    get_header();
?>

<section class="home ">
        <div class="container-fluid home-container">
            <div class="row">
            <div class="home-col__text col-12">
                <h1 class="header-title">
                    about clientele savvy
                </h1>
                <div class="sub-container">
                    <p class="text-para home-text">
                        Clientele savvy is UK based lead generation company that provides debt relief to resident of UK, we are currently based in Kidwai Nagar, Kanpur    
                    </p>
                </div>
            </div>
            <div class="home-col__img col-12">
                <img class="home-img" src="<?php echo get_theme_file_uri("/image/page-about.png"); ?>" alt="">
            </div>
            </div>
        </div>
    </section>
    <section class="services pb-beliefs">
        <div class="container-fluid services-container">
            <div class="row services-row">
                <div class="col-12 services-col services-col__text">
                    <h1 class="header-primary">our beliefs</h1>
                    <p class="text-para">
                        these are the things that we believe in and put it over everything in clientele savvy, because these beliefs makes us who we are
                    </p>
                </div>
                <div class="col-12 services-col services-col__grid">
                    <div class="grid">
                        <div class="grid-items grid-items__1">
                            <div class="grid-items__img">
                                <img src="<?php echo get_theme_file_uri("./image/gender-equal.svg"); ?>" alt="">
                            </div>
                            <div class="grid-items__text">
                                <div class="text-container">
                                    <h1 class="header-tertiary">gender equality</h1>
                                    <p class="text-para">
                                        we believe in gender equality and that all the genders should be treated according to their skills, experience and hard work.
                                    </p>
                                </div>
                                <div class="line"></div>
                            </div>
                        </div>
                        <div class="grid-items grid-items__2">
                            <div class="grid-items__img">
                                    <img src="<?php echo get_theme_file_uri("./image/discipline.svg"); ?>" alt="">
                            </div>
                            <div class="grid-items__text">
                                <div class="text-container">
                                    <h1 class="header-tertiary"> discipline</h1>
                                    <p class="text-para">
                                        discipline is one of the pillars that makes a company stand strong and we are a strong believer of it.
                                        and we need this one trait in our employees
                                    </p>
                                </div>
                                <div class="line"></div>
                            </div>
                        </div>
                        <div class="grid-items grid-items__3">
                            <div class="grid-items__img">
                                    <img src="<?php echo get_theme_file_uri("./image/space.svg"); ?>" alt="">
                            </div>
                            <div class="grid-items__text">
                                <div class="text-container">
                                    <h1 class="header-tertiary">comfortable space</h1>
                                    <p class="text-para">
                                        we provide you a comfortable and a professional space to work in so that you only have to focus on work.
                                    </p>
                                </div>
                                <div class="line"></div>
                            </div>
                        </div>
                        <div class="grid-items grid-items__4">
                            <div class="grid-items__img">
                                    <img src="<?php echo get_theme_file_uri("./image/team-work.svg"); ?>" alt="">
                            </div>
                            <div class="grid-items__text">
                                <div class="text-container">
                                    <h1 class="header-tertiary">team work</h1>
                                    <p class="text-para">
                                        when a team works together that is when the true potential of a company comes out and agree with it and promote team work between our employees.
                                    </p>
                                </div>
                                <div class="line"></div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<section class="work-ladder">
        <div class="container-fluid work-ladder-section">
            <div class="row work-ladder-row">
                <div class="work-ladder-col__text col-12 col-lg-6">
                    <div class="wl-text-container">
                        <h1 class="header-primary">
                            how we came to be
                        </h1>
                        <p class="text-para">
                            Clientele savvy was founded in the year 2021 by Ankit Gupta,
                            the founder of clientele savvy. It was established with a 
                            vision in mind and a goal to be one of the best in the 
                            business. Clientele savvy is an international BPO, that 
                            provides debt help to the residents of the UK.
                        </p>
                        <button class="btn btn-lined__dark">
                            <a href="<?php echo site_url('/contact'); ?>">
                                apply for a job
                                <span class="arrow">
                                    <img src="<?php echo get_theme_file_uri("/image/arrow-black.svg");?>" alt="">
                                </span>
                            </a>
                        </button>
                    </div>
                </div>
                <div class="work-ladder-col__img col-12 col-lg-6">
                    <img class="wl-image" src="<?php echo get_theme_file_uri('/image/pb-desc.png'); ?>" alt="">
                </div>
            </div>
        </div>
    </section>
<section class="coa pb-coa">
    <div class="container-fluid coa-container">
        <div class="coa-text">
            <h1 class="coa-text-primary header-primary"> get a job </h1>
            <p class="coa-text-para text-para">
                Get a job at clientele savvy by either contacting us at or by submitting you details through are contact form
            </p>
            <button class="btn btn-black">
                <a href="<?php echo site_url('/contact'); ?>">
                submit
                    <span class="arrow">
                        <img src="<?php echo get_theme_file_uri("/image/arrow-white.svg");?>" alt="">
                    </span>
                </a>
            </button>
        </div>
</div>
</section>
<?php 
    get_footer();
?>