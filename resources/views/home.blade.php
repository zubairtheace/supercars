@extends('layouts.app')

@section('content')

<section id="supercars-slider">
    <div class="bs-example">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Carousel indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <!-- Wrapper for carousel items -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="custom/images/slider1.jpg" alt="First Slide">
                </div>
                <div class="item">
                    <img src="custom/images/slider2.jpg" alt="Second Slide">
                </div>
                <div class="item">
                    <img src="custom/images/slider3.jpg" alt="Third Slide">
                </div>
            </div>
            <!-- Carousel controls -->
            <a class="carousel-control left" href="#myCarousel" data-slide="prev">
                <span class="fa fa-chevron-left col-xs-offset-3" style="padding-top: 125%">
            </a>
            <a class="carousel-control right" href="#myCarousel" data-slide="next">
                <span class="fa fa-chevron-right col-xs-offset-3" style="padding-top: 125%">
            </a>
        </div>
    </div>
</section>

<!-- Hero Area Section End-->

<!-- Client Section -->
<section id="clients">
    <div class="container">
        <div class="home-row">
            <div >
                <img class="col-md-12 col-xs-12" src="custom/images/logo.png" alt="client-1">
            </div>
            <h3 class="text-center">Dealer in New and Reconditionned Cars</h3>
            <p class="text-center"><a href="/management/car" class="btn btn-common btn-lg">Browse Our Cars Now</a></p>
        </div>
    </div>
</section>
<!-- Client Section End -->

<!-- Service Section -->
<section id="services">
    <div class="container text-center">
        <div class="home-row">
            <h1 class="title">Why Choose Us?</h1>
            <div class="custom-padding">

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="service-item">
                        <img class="candidate-logo" src="custom/images/img1.png" alt="">
                        <h3>Claim Your Free Gifts</h3>
                        <p>Generate a Free Quotation for your dreamcar on the website and claim your free gifts on purchase. BuyNow.mu strives to offer its customers unbeatable customer service, highest value shopping and exclusive offers available only via the BuyNow website.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="service-item">
                        <img class="candidate-logo" src="custom/images/img2.png" alt="">
                        <h3>Customer Protection</h3>
                        <p>Benefit from our full customer protection policy for enjoying the largest selection of premium facilities on your online shopping, from delivery across the island, to product inspection on the spot and even free product replacement service should the product not meet your expectations.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="service-item">
                        <img class="candidate-logo" src="custom/images/img3.png" alt="">
                        <h3>Best Price Guaranteed</h3>
                        <p>We are confident that you would not find any same offers at lower prices than the ones quoted on the BuyNow.mu website, and we guarantee to have the lowest prices in Mauritius for any of the products and services featured on the BuyNow.mu website.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Service Section End -->



<!-- About Section -->
<section id="about">
    <div class="container">
        <div class="home-row">
            <h1 class="title">About us</h1>

            <div class="col-md-8 col-sm-12 custom-padding">
                <p>
                    Supercars is an online direct car retailer. We offer great prices because we own every car; we sell—mostly late-model, low-mileage vehicles. With Supercars, you can browse, finance, and generate a Quotation for your dream car all on this website.
                </p>
                <br>
                <hr>
                <br>
                <p>
                    Supercar's Showroom is located in Port Louis. Here, experienced technicians use cutting-edge technology to fine-tune our inventory. We won't make you visit our factory of magic to buy a car, but you'll be impressed if you do.
                </p>
            </div>
            <img class="col-md-4 col-md-4 col-sm-12 col-xs-12" src="custom/images/impressed.png" alt="">
        </div>
        <div class="home-row">&nbsp;</div>
    </div>
</section>
<!-- About Section End -->

<!-- Conatct Section -->
<section id="contact">
    <div class="container text-center">
        <div class="home-row">
            <h1 class="title">Contact us</h1>

            <form role="form" class="contact-form custom-padding" method="post">
                <div class="col-md-6 wow fadeInLeft" data-wow-delay=".5s">
                    <div class="form-group">
                        <div class="controls">
                            <input type="text" class="form-control" placeholder="Name" name="name">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="controls">
                            <input type="email" class="form-control email" placeholder="Email" name="email">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="controls">
                            <input type="text" class="form-control requiredField" placeholder="Subject" name="subject">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="controls">
                            <textarea rows="7" class="form-control" placeholder="Message" name="message"></textarea>
                        </div>
                    </div>
                    <button type="submit" id="submit" class="btn btn-lg btn-common">Send</button><div id="success" style="color:#34495e;"></div>
                </div>
            </form>

            <div class="col-md-6 wow fadeInRight">
                <div class="social-links">
                    <a class="social" href="#" target="_blank"><i class="fa fa-facebook fa-2x"></i></a>
                    <a class="social" href="#" target="_blank"><i class="fa fa-twitter fa-2x"></i></a>
                    <a class="social" href="#" target="_blank"><i class="fa fa-google-plus fa-2x"></i></a>
                    <a class="social" href="#" target="_blank"><i class="fa fa-linkedin fa-2x"></i></a>
                </div>

                <div class="contact-info">
                    <p><i class="fa fa-map-marker"></i> Port Louis, Mauritius</p>
                    <p><i class="fa fa-envelope"></i> info@supercars.com</p>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection
