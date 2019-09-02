@extends('layouts.app')
@section('title', 'Home Page')
@section('nav1', 'active')
@section('content')
<div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>

    <div class="hero-slide owl-carousel site-blocks-cover">
        <div class="intro-section" style="background-image: url('images/hero_1.jpg');">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">
                        <h1>We Are <strong>Leading</strong> Industry of Engineers</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="intro-section" style="background-image: url('images/hero_1.jpg');">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">
                        <span class="d-block"></span>
                        <h1>Experts and High Quality Works</h1>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- END slider -->


    <div class="site-section services-1-wrap">
        <div class="container">
            <div class="row mb-5 justify-content-center text-center">
                <div class="col-lg-5">
                    <h3 class="section-subtitle">What We Do</h3>
                    <h2 class="section-title mb-4 text-black">We Are <strong>Leading Industry</strong> of Engineering. We Love What We Do</h2>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-lg-3 col-md-6">
                    <div class="service-1">
                        <span class="number">01</span>
                        <div class="service-1-icon">
                            <span class="flaticon-engineer"></span>
                        </div>
                        <div class="service-1-content">
                            <h3 class="service-heading">Professional Team</h3>
                            <p>Gravida sodales condimentum pellen tesq accumsan orci quam sagittis sapie</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-1">
                        <span class="number">02</span>
                        <div class="service-1-icon">
                            <span class="flaticon-compass"></span>
                        </div>
                        <div class="service-1-content">
                            <h3 class="service-heading">Great Ideas</h3>
                            <p>Gravida sodales condimentum pellen tesq accumsan orci quam sagittis sapie</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-1">
                        <span class="number">03</span>
                        <div class="service-1-icon">
                            <span class="flaticon-oil-platform"></span>
                        </div>
                        <div class="service-1-content">
                            <h3 class="service-heading">Quality Building</h3>
                            <p>Gravida sodales condimentum pellen tesq accumsan orci quam sagittis sapie</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-1">
                        <span class="number">04</span>
                        <div class="service-1-icon">
                            <span class="flaticon-crane"></span>
                        </div>
                        <div class="service-1-content">
                            <h3 class="service-heading">Quality Works</h3>
                            <p>Gravida sodales condimentum pellen tesq accumsan orci quam sagittis sapie</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END services -->

    <div class="site-section">
        <div class="block-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mb-4 mb-lg-0">
                        <img src="images/about_1.jpg" alt="Image " class="img-fluid img-overlap">
                    </div>
                    <div class="col-lg-5 ml-auto">
                        <h3 class="section-subtitle">Why Choose Us</h3>
                        <h2 class="section-title mb-4">More than <strong>50 year experience</strong> in industry</h2>
                        <p>Reprehenderit, odio laboriosam? Blanditiis quae ullam quasi illum minima nostrum perspiciatis error consequatur sit nulla.</p>

                        <div class="row my-5">
                            <div class="col-lg-12 d-flex align-items-center mb-4">
                                <span class="line-height-0 flaticon-oil-platform display-4 mr-4 text-primary"></span>
                                <div>
                                    <h4 class="m-0 h5 text-white">Expert in Builings</h4>
                                    <p class="text-white">Lorem ipsum dolor sit amet.</p>
                                </div>
                            </div>
                            <div class="col-lg-12 d-flex align-items-center mb-4">
                                <span class="line-height-0 flaticon-compass display-4 mr-4 text-primary"></span>
                                <div>
                                    <h4 class="m-0 h5 text-white">Modern Design</h4>
                                    <p class="text-white">Lorem ipsum dolor sit amet.</p>
                                </div>
                            </div>
                            <div class="col-lg-12 d-flex align-items-center">
                                <span class="line-height-0 flaticon-planning display-4 mr-4 text-primary"></span>
                                <div>
                                    <h4 class="m-0 h5 text-white">Leading In Floor Planning</h4>
                                    <p class="text-white">Lorem ipsum dolor sit amet.</p>
                                </div>
                            </div>



                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END block-2 -->


    <div class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 align-self-end">
                    <img src="images/img_transparent.png" alt="Image" class="img-fluid">
                </div>
                <div class="col-lg-7 align-self-center mb-5">

                    <div class="bg-black  quote-form-wrap wrap text-white">
                        <div class="mb-5">
                            <h3 class="section-subtitle">Get A Quote</h3>
                            <h2 class="section-title mb-4">Request A <strong>Quote</strong></h2>
                        </div>
                        <form action="#" class="quote-form">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" class="form-control" placeholder="Your name*">
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="text" class="form-control" placeholder="Phone number">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" class="form-control" placeholder="Your email*">
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="text" class="form-control" placeholder="Subject">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <textarea name="" class="form-control" id="" placeholder="Message*" cols="30" rows="7"></textarea>
                                </div>
                                <div class="col-md-6 align-self-end">
                                    <input type="submit" class="btn btn-primary btn-block btn-lg rounded-0" value="Send Message">
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="site-section block-3">
        <div class="container">

            <div class="mb-5">
                <h3 class="section-subtitle">Our Projects</h3>
                <h2 class="section-title mb-4">Explore Our <strong>Recent Projects</strong></h2>
            </div>

            <div class="projects-carousel-wrap">
                <div class="owl-carousel owl-slide-3">
                    <div class="project-item">
                        <div class="project-item-contents">
                            <a href="#">
                                <span class="project-item-category">Factory</span>
                                <h2 class="project-item-title">
                                    Building Refinery
                                </h2>
                            </a>
                        </div>
                        <img src="images/works_1.jpg" alt="Image" class="img-fluid">
                    </div>
                    <div class="project-item">
                        <div class="project-item-contents">
                            <a href="#">
                                <span class="project-item-category">Factory</span>
                                <h2 class="project-item-title">
                                    Building Refinery
                                </h2>
                            </a>
                        </div>
                        <img src="images/works_2.jpg" alt="Image" class="img-fluid">
                    </div>
                    <div class="project-item">
                        <div class="project-item-contents">
                            <a href="#">
                                <span class="project-item-category">Factory</span>
                                <h2 class="project-item-title">
                                    Building Refinery
                                </h2>
                            </a>
                        </div>
                        <img src="images/works_3.jpg" alt="Image" class="img-fluid">
                    </div>
                    <div class="project-item">
                        <div class="project-item-contents">
                            <a href="#">
                                <span class="project-item-category">Factory</span>
                                <h2 class="project-item-title">
                                    Building Refinery
                                </h2>
                            </a>
                        </div>
                        <img src="images/works_4.jpg" alt="Image" class="img-fluid">
                    </div>


                </div>
            </div>

        </div>
    </div>



    <div class="site-section testimonial-wrap">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 mb-5 text-center">
                    <h3 class="section-subtitle">Testimonial</h3>
                    <h2 class="section-title text-black mb-4">What People Says</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-4 mb-md-0">
                    <div class="testimonial">
                        <img src="images/person_3_sq.jpg" alt="">
                        <blockquote>
                            <p>&ldquo;Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident deleniti iusto molestias, dolore vel fugiat ab placeat ea?&rdquo;</p>
                        </blockquote>
                        <p class="client-name">Matt Keygen</p>
                    </div>
                </div>
                <div class="col-md-6 mb-4 mb-md-0">
                    <div class="testimonial">
                        <img src="images/person_4_sq.jpg" alt="">
                        <blockquote>
                            <p>&ldquo;Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident deleniti iusto molestias, dolore vel fugiat ab placeat ea?&rdquo;</p>
                        </blockquote>
                        <p class="client-name">Matt Keygen</p>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="site-section bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 mb-5 text-left">
                    <h3 class="section-subtitle">Blog</h3>
                    <h2 class="section-title text-black mb-4">News &amp; Updates</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-4 mb-lg-0 col-lg-4">
                    <div class="blog-entry">
                        <a href="#" class="img-link">
                            <img src="images/hero_1.jpg" alt="Image" class="img-fluid">
                        </a>
                        <div class="blog-entry-contents">
                            <h3><a href="#">Top Companies That Are Best In Industrial Business</a></h3>
                            <div class="meta">Posted by <a href="#">Admin</a> In <a href="#">News</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4 mb-lg-0 col-lg-4">
                    <div class="blog-entry">
                        <a href="#" class="img-link">
                            <img src="images/hero_1.jpg" alt="Image" class="img-fluid">
                        </a>
                        <div class="blog-entry-contents">
                            <h3><a href="#">Top Companies That Are Best In Industrial Business</a></h3>
                            <div class="meta">Posted by <a href="#">Admin</a> In <a href="#">News</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4 mb-lg-0 col-lg-4">
                    <div class="blog-entry">
                        <a href="#" class="img-link">
                            <img src="images/hero_1.jpg" alt="Image" class="img-fluid">
                        </a>
                        <div class="blog-entry-contents">
                            <h3><a href="#">Top Companies That Are Best In Industrial Business</a></h3>
                            <div class="meta">Posted by <a href="#">Admin</a> In <a href="#">News</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="py-5 bg-primary block-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h3 class="text-white">Subscribe To Newsletter</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, reprehenderit!</p>
                </div>
                <div class="col-lg-6">
                    <form action="#" class="form-subscribe d-flex">
                        <input type="text" class="form-control form-control-lg">
                        <input type="submit" class="btn btn-secondary px-4" value="Subcribe">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <p class="mb-4"><img src="images/logo2.png" alt="Image" class="img-fluid"></p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae nemo minima qui dolor, iusto iure.</p>
                    <p><a href="#">Learn More</a></p>
                </div>
                <div class="col-lg-3">
                    <h3 class="footer-heading"><span>Our Company</span></h3>
                    <ul class="list-unstyled">
                        <li><a href="#">About</a></li>
                        <li><a href="#">News</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Our Team</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Projects</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h3 class="footer-heading"><span>Our Services</span></h3>
                    <ul class="list-unstyled">
                        <li><a href="#">Industrial</a></li>
                        <li><a href="#">Construction</a></li>
                        <li><a href="#">Remodeling</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h3 class="footer-heading"><span>Contact</span></h3>
                    <ul class="list-unstyled">
                        <li><a href="#">Help Center</a></li>
                        <li><a href="#">Support Community</a></li>
                        <li><a href="#">Press</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Our Partners</a></li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="copyright">
                        <p>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
<!-- .site-wrap -->
@endsection