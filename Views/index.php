<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en" class="no-js" >
<head>
        <!--- basic page needs
        ================================================== -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>RecyTech</title>
    
        <script>
            document.documentElement.classList.remove('no-js');
            document.documentElement.classList.add('js');
        </script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
        <!-- CSS
        ================================================== -->
        <link rel="stylesheet" href="css/vendor.css">
        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="css/style.css">

    
        <!-- favicons
        ================================================== -->
        <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.jpg">
        <link rel="manifest" href="site.webmanifest">

    </head>

    <body id="top" class="ss-show">
        <div id="preloader" style="display: none;">
            <div id="loader">
            </div>
        </div>

        <!-- # site header 
        ================================================== -->

        <?php include 'header.php'; ?>
        


        <!-- # site-content
        ================================================== -->

           

            <!-- about
            ----------------------------------------------- -->
            <section id="about" class="s-about target-section">


                <!-- stats -->
                <div class="row block-lg-one-fourth block-tab-one-half block-stack s-about__stats">

                    <div class="column s-about__stats-item">
                        <div class="s-about__stats-count">554<span>kg</span></div>
                        <h5>Total Recycled Materiel</h5>
                    </div>
                    <div class="column s-about__stats-item">
                        <div class="s-about__stats-count">440<span>kg</span></div>
                        <h5>Total Recycled Plastic</h5>
                    </div>
                    <div class="column s-about__stats-item">
                        <div class="s-about__stats-count">60<span>kg</span></div>
                        <h5>Total Recycled Paper</h5>
                    </div>
                    <div class="column s-about__stats-item">
                        <div class="s-about__stats-count">50<span>kg</span></div>
                        <h5>Total Recycled Metals</h5>
                    </div>

                </div> <!-- end stats -->


                <!-- intro info -->
                <div class="s-about__info">

                    <div class="row section-header" data-num="01">
                        <div class="column lg-6 stack-on-1000 title-block">
                            <h2 class="title text-display-1">Getting Started With RecyTech.</h2>
                        </div>
                        <div class="column lg-6 stack-on-1000 desc-block">
                            <p class="desc lead">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Urna, sit pretium, 
                            proin sed massa maecenas tempus, nibh. Ultrices pellentesque amet tristique 
                            feugiat condimentum integer fames.
                            </p>
                        </div>
                    </div>

                    <div class="row s-about__info-slider-block">
                        <div class="column lg-12">
                    
                            <div class="swiper-container s-about__info-slider">
                                <div class="swiper-wrapper">
                    
                                    <div class="s-about__info-slide swiper-slide">
                                        <h3 >Meaningful.</h3>
                    
                                        <p >
                                        Our website provides meaningful solutions for sustainable waste management. We offer a convenient and eco-friendly way to dispose of recyclables and reduce environmental impact. 
                                        </p>
                                    
                                        <h3>User-Friendly.</h3>
                                        <p >
                                        Our website is designed to be user-friendly and easy to navigate. We offer clear instructions for scheduling and preparing for collections, as well as helpful resources for learning more about sustainable waste management practices. 
                                        </p>
                    
                                        <h3 >Powerful.</h3>
                                        <p >
                                        Our website provides powerful tools and resources for managing waste and reducing environmental impact. With our efficient collection and recycling processes, we help our users make a meaningful difference in their communities and in the world. 
                                        </p>

                                        <h3>Secure.</h3>
                                        <p >
                                        Our website takes security seriously and uses industry-standard encryption to protect user information. Our team is dedicated to ensuring the privacy and security of our users, and we constantly monitor and update our systems to ensure the highest level of security. 
                                        </p>
                                    </div>  <!-- end s-about__info-slide  -->
                    
                                </div> <!-- swiper-wrapper -->
                                        
                            </div> <!-- end swiper-container -->
                    
                        </div>
                    </div> <!-- end s-about__info-slider-block -->
                    


                <!-- how-to -->
                <div class="s-about__howto">

                    <div class="row section-header" data-num="02">
                        <div class="column lg-12 title-block">
                            <h2 class="title text-display-1">How We Work.</h2>
                        </div>
                    </div>

                    <div class="row s-about__howto-content">

                        <div class="column s-about__howto-process-block">

                            <div class="s-about__howto-process">
                                <div class="s-about__howto-process-step">
                                    <h3>Sign Up</h3>
                                    <p >
                                    Create an account by providing your name, email address, and a password. This will allow you to access all the features of our recycling program.
                                    </p>
                                </div>
                                <div class="s-about__howto-process-step">
                                    <h3 >Subscribe</h3>
                                    <p>
                                    Once you're logged in, you can start creating your recycling subscription. Choose the type of materials you want to recycle, and select a subscription plan that fits your needs.
                                    </p>
                                </div>
                                <div class="s-about__howto-process-step">
                                    <h3 >Compose</h3>
                                    <p>
                                        You can choose your collection schedule by selecting your preferred dates and times. On the scheduled day of collection, simply gather your recyclables and place them in the designated collection area. Our team will arrive at the scheduled time to collect them and bring them to our recycling facility.
                                    </p>
                                </div>
                                <div class="s-about__howto-process-step">
                                    <h3 >Get Rewarded</h3>
                                    <p>
                                        Once your recyclables have been processed, we'll reward you with points that you can use to redeem a variety of recycled art pieces and furniture.
                                    </p>
                                </div>
                            </div> <!-- end how-to process -->

                        </div>

                        <div class="column s-about__howto-screens-block">

                            <div class="s-about__howto-screens">
                                <img src="images/screens/screen-01.png"
                                     srcset="images/screens/screen-01.png 1x, images/screens/screen-01@2x.png 2x" alt="">
                                <img src="images/screens/screen-04.png"
                                     srcset="images/screens/screen-04.png 1x, images/screens/screen-04@2x.png 2x" alt="">
                            </div>

                        </div>

                    </div>
        
                </div> <!-- end how-to -->
            </section> <!-- end s-about -->


            <!-- testimonials
            ----------------------------------------------- -->
            <section id="testimonials" class="s-testimonials">

                <div class="row narrow text-center s-testimonials__header">
                    <div class="column lg-12">
                        <h3 class="h2">What Our Users Have To Say.</h3>
                    </div>
                </div>

                <div class="row s-testimonials__content">
                    <div class="column lg-12">
        
                        <div class="swiper-container s-testimonials__slider">
        
                            <div class="swiper-wrapper">
    
                                <div class="s-testimonials__slide swiper-slide">
                                    <div class="s-testimonials__author">
                                        <img src="images/avatars/user-02.jpg" alt="Author image" class="s-testimonials__avatar">
                                        <cite class="s-testimonials__cite">
                                            <strong>Tim Cook</strong>
                                            <span>CEO, Apple</span>
                                        </cite>
                                    </div>
                                    <p>
                                    Molestiae incidunt consequatur quis ipsa autem nam sit enim magni. Voluptas tempore rem. 
                                    Explicabo a quaerat sint autem dolore ducimus ut consequatur neque. Nisi dolores quaerat fuga rem nihil nostrum.
                                    Laudantium quia consequatur molestias.
                                    </p>
                                </div> <!-- end s-testimonials__slide -->
                
                                <div class="s-testimonials__slide swiper-slide">
                                    <div class="s-testimonials__author">
                                        <img src="images/avatars/user-03.jpg" alt="Author image" class="s-testimonials__avatar">
                                        <cite class="s-testimonials__cite">
                                            <strong>Sundar Pichai</strong>
                                            <span>CEO, Google</span>
                                        </cite>
                                    </div>
                                    <p>
                                    Excepturi nam cupiditate culpa doloremque deleniti repellat. Veniam quos repellat voluptas animi adipisci.
                                    Nisi eaque consequatur. Voluptatem dignissimos ut ducimus accusantium perspiciatis.
                                    Quasi voluptas eius distinctio. Atque eos maxime.
                                    </p>
                                </div> <!-- end s-testimonials__slide -->
                
                                <div class="s-testimonials__slide swiper-slide">
                                    <div class="s-testimonials__author">
                                        <img src="images/avatars/user-01.jpg" alt="Author image" class="s-testimonials__avatar">
                                        <cite class="s-testimonials__cite">
                                            <strong>Satya Nadella</strong>
                                            <span>CEO, Microsoft</span>
                                        </cite>
                                    </div>
                                    <p>
                                    Repellat dignissimos libero. Qui sed at corrupti expedita voluptas odit. Nihil ea quia nesciunt. Ducimus aut sed ipsam.  
                                    Autem eaque officia cum exercitationem sunt voluptatum accusamus. Quasi voluptas eius distinctio.
                                    Voluptatem dignissimos ut.
                                    </p>
                                </div> <!-- end s-testimonials__slide -->
        
                                <div class="s-testimonials__slide swiper-slide">
                                    <div class="s-testimonials__author">
                                        <img src="images/avatars/user-06.jpg" alt="Author image" class="s-testimonials__avatar">
                                        <cite class="s-testimonials__cite">
                                            <strong>Jeff Bezos</strong>
                                            <span>CEO, Amazon</span>
                                        </cite>
                                    </div>
                                    <p>
                                    Nunc interdum lacus sit amet orci. Vestibulum dapibus nunc ac augue. Fusce vel dui. In ac felis 
                                    quis tortor malesuada pretium. Curabitur vestibulum aliquam leo. Qui sed at corrupti expedita voluptas odit. 
                                    Nihil ea quia nesciunt. Ducimus aut sed ipsam.
                                    </p>
                                </div> <!-- end s-testimonials__slide -->
            
                            </div> <!-- end swiper-wrapper -->
        
                            <div class="swiper-pagination"></div>
        
                        </div> <!-- end swiper-container -->
        
                    </div> <!-- end column -->
                </div> <!-- end s-testimonials__content -->

            </section> <!-- end testimonials -->


            <!-- pricing
            ----------------------------------------------- -->
            <section id="pricing" class="s-pricing target-section">
                <div class="row s-pricing__content">

                    <div class="column lg-4 md-12 s-pricing__header">
                        <h3 class="h2">Our Easy Pricing Plans for Everyone.</h3>
                        <p>
                            At our website, we believe that everyone should have access to high-quality recycling services without breaking the bank. That's why we offer easy pricing plans that are affordable and flexible. 
                        </p>
                    </div>
                     <!-- end s-pricing__header -->

                    <div class="column lg-8 md-12 s-pricing__plans">
                        <div class="row plans block-lg-one-half block-tab-whole">

                            <div class="column item-plan item-plan--popular">
                                <div class="item-plan__block"> 

                                    <div class="item-plan__top-part">
                                        <h3 class="item-plan__title">Pro Plan</h3>
                                        <p class="item-plan__price"><sup>DT</sup>25</p>
                                        <p class="item-plan__per">Per Month</p>
                                    </div>
                
                                    <div class="item-plan__bottom-part">
                                        <ul class="item-plan__features">
                                            <li><span>1000Kg</span> of Waste</li>
                                            <li><span>Unlimited</span> Custom Scheduling</li>
                                            <li><span>More</span> Reward Points</li>
                                            <li>24/7 Support</li>
                                        </ul>
                
                                        <a class="btn btn--primary u-fullwidth" href="#0">Get Started</a>
                                    </div>
                                
                                </div>
                            </div> <!-- end item-plan -->
                            <div class="column item-plan">
                                <div class="item-plan__block"> 

                                    <div class="item-plan__top-part">
                                        <h3 class="item-plan__title">Free</h3>
                                        <p class="item-plan__price"><sup>DT</sup>0</p>
                                        <p class="item-plan__per">Forever</p>
                                    </div>
                
                                    <div class="item-plan__bottom-part">
                                        <ul class="item-plan__features">
                                            <li><span>100Kg</span> of Waste</li>
                                            <li><span>No </span> Custom Scheduling</li>
                                            <li>24/7 Support</li>
                                        </br>
                                        </ul>
                
                                        <a class="btn btn--primary u-fullwidth" href="#0">Get Started</a>
                                    </div>  
                                
                                </div>
                            </div> <!-- end item-plan -->
                        </div>
                    </div> <!-- end s-pricing__plans -->

                </div> <!-- end s-pricing__content -->
            </section> <!-- end pricing -->


            <!-- Blog
            ----------------------------------------------- -->
            <section id="blog" class="s-download target-section">
                <div class="row s-download__header">
                    <div class="column lg-12">
                        <h2 class="text-display-1">Thousands of People Are Now Using RecyTech. Join Our Community!</h2>
                        <p class="lead">
                            Are you interested in living a more eco-friendly lifestyle and reducing your carbon footprint? 
                            By reading our blog,
                              you'll learn how to minimize waste and preserve our planet's natural resources. Join us on this journey towards 
                              a more sustainable future !
                        </p>
                        <a href="blog.html"><h3 id="Read-Now" > Read Now</h3></a>
                    </div>
                </div>
            </section>



        <!-- # site-footer
        ================================================== -->
    <?php include'footer.php' ?>

    <!-- Java Script
    ================================================== -->
    <script src="js/plugins.js"></script>

</body>
</html>