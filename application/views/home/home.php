<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
         <?php $this->load->view('header/head'); ?>
    </head>
    <body>
        <header>
            <?php $this->load->view('header/header'); ?>
            <div class="container-fluid book-tab">
                <div class="row">
                    <div class="tabbable-line">
                        <ul class="nav nav-tabs ">
                            <li class="option-tab">
                                <a href="#tab_default_1" data-toggle="tab">
                                    <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/1.png"/> </a>
                            </li>
                            <li class="option-tab">
                                <a href="#tab_default_2" data-toggle="tab">
                                    <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/2.png"/> </a>
                            </li>
                            <li class="option-tab">
                                <a href="#tab_default_3" data-toggle="tab">
                                    <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/3.png"/> </a>
                            </li>
                            <li class="option-tab">
                                <a href="#tab_default_4" data-toggle="tab">
                                    <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/4.png"/> </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab_default_1">
                                <?php $this->load->view('home/yacht_filter'); ?>
                            </div>
                            <div class="tab-pane" id="tab_default_2">
                                <div class="book-form">
                                    <h3>Book Your Jet Now</h3>
                                    <form>
                                        <div class="book-inner">
                                            <div class="inner-block first">
                                                <label></label>
                                                <input type="text"  name="FROM" class="from" placeholder="FROM : city, state"/>
                                                <input type="text"  name="to" class="to" placeholder="To : city, state"/>

                                            </div>
                                            <div class="inner-block fourth fourthv">
                                                <label>DEPARTURE</label>
                                                <div class="form-group">
                                                    <div class='input-group date' id='datetimepicker1'>
                                                        <input type='text' id="dparrivalj"  value="" class="date-picker arrival" placeholder="DD/MM/YYYY"/>
                                                        <div id="arrivalj"><span>MM</span><span>DD</span><span>Day</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="inner-block fifth fourthv">
                                                <label>ARRIVAL</label>
                                                <div class="form-group">
                                                    <div class='input-group date' id='datetimepicker1'>
                                                        <input type='text' id="dpdj" class="date-picker departure" placeholder="DD/MM/YYYY"/>
                                                        <div id="departurej"><span>MM</span><span>DD</span><span>Day</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="inner-block sixth fourthv">
                                                <label></label>
                                                <select class="departure-port">
                                                    <option>Departure Time</option>
                                                    <option>10am</option>
                                                    <option>11am</option>
                                                    <option>12am</option>
                                                    <option>1pm</option>
                                                    <option>2pm</option>
                                                    <option>3pm</option>
                                                    <option>4pm</option>
                                                    <option>5pm</option>
                                                    <option>6pm</option>
                                                    <option>7pm</option>
                                                    <option>8pm</option>
                                                    <option>9pm</option>
                                                    <option>10pm</option>
                                                    <option>11pm</option>
                                                    <option>12pm</option>
                                                    <option>1am</option>
                                                    <option>2am</option>
                                                    <option>3am</option>
                                                </select>
                                                <select class="arrival-port">
                                                    <option>Arrival Time</option>
                                                    <option>10am</option>
                                                    <option>11am</option>
                                                    <option>12am</option>
                                                    <option>1pm</option>
                                                    <option>2pm</option>
                                                    <option>3pm</option>
                                                    <option>4pm</option>
                                                    <option>5pm</option>
                                                    <option>6pm</option>
                                                    <option>7pm</option>
                                                    <option>8pm</option>
                                                    <option>9pm</option>
                                                    <option>10pm</option>
                                                    <option>11pm</option>
                                                    <option>12pm</option>
                                                    <option>1am</option>
                                                    <option>2am</option>
                                                    <option>3am</option>
                                                </select>
                                            </div>
                                            <div class="inner-block second fourthv">
                                                <label></label>
                                                <select class="motor">
                                                    <option>Small Jet</option>
                                                    <option>Medium Jet</option>
                                                    <option>Long Range Jet</option>
                                                    <option>Large Airliner</option>
                                                </select>
                                                <select class="trip">
                                                    <option>One Way</option>
                                                    <option>Round Trip</option>
                                                </select>
                                            </div>

                                            <div class="inner-block seventh">
                                                <label></label>
                                                <div class="guest">
                                                    <p>
                                                        <img class="fa-plus add" src="<?php echo base_url(); ?>assets/images/plus.png">
                                                        <span>Passengers</span>
                                                        <input id="qty1" type="text" value="1" class="qty"/>
                                                        <img class="fa-minus minus" src="<?php echo base_url(); ?>assets/images/minus.png">
                                                    </p>
                                                </div>
                                            </div>
                                            <label></label>
                                            <div class="inner-block eighth">
                                                <div class="eight-inner">
                                                    <img src="<?php echo base_url(); ?>assets/images/search.png">
                                                    <button class="book-submit" type="submit">Search</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>
                            <div class="tab-pane" id="tab_default_3">
                                <?php $this->load->view('home/car_filter');?>

                            </div>
                            <div class="tab-pane" id="tab_default_4">
                                  <?php $this->load->view('home/vila_filter'); ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>


        <section class="video">
            <div class="container-fluid">
                <div class="row">
                    <video poster="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/polina.jpg" id="bgvid" playsinline autoplay muted loop>
                        <!-- WCAG general accessibility recommendation is that media such as background video play through only once. Loop turned on for the purposes of illustration; if removed, the end of the video will fade in the same way created by pressing the "Pause" button  -->
                      <!--<source src="http://thenewcode.com/assets/videos/polina.webm" type="video/webm">
                        --><source src="http://immidia.co/immidia.mp4" type="video/mp4">
                    </video>
                    <div id="polina">
                        <button><img class="img-responsive" src="<?php echo base_url(); ?>assets/images/pause.png" /></button>
                    </div>
                </div>
            </div>
        </section>
        <section class="our-services">
            <div class="container-fluid services-bg">
                <div class="row">
                    <div class="content-inner">
                        <h3 class="section-title">Our Services</h3>
                        <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/quote.png" />
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
            <div class="container-fluid service-block">
                <div class="row">
                    <div class="col-md-4 service">
                        <div class="serv-inner">
                            <a href="#"><img class="img-responsive" src="<?php echo base_url(); ?>assets/images/service1.jpg" />
                                <span>Helicopter / Private Jet</span></a>
                        </div>
                    </div>
                    <div class="col-md-4 service">
                        <div class="serv-inner">
                            <a href="#"><img class="img-responsive" src="<?php echo base_url(); ?>assets/images/service2.jpg" />
                                <span>Super Yacht</span></a>
                        </div>
                    </div>
                    <div class="col-md-4 service">
                        <div class="serv-inner">
                            <a href="<?php echo base_url(); ?>chauffeur-service"><img class="img-responsive" src="<?php echo base_url(); ?>assets/images/service3.jpg" />
                                <span>Chauffer Services</span></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 service">
                        <div class="serv-inner">
                            <a href="#"><img class="img-responsive" src="<?php echo base_url(); ?>assets/images/service4.jpg" />
                                <span>Luxury Car</span></a>
                        </div>
                    </div>
                    <div class="col-md-4 service">
                        <div class="serv-inner">
                            <a href="#"><img class="img-responsive" src="<?php echo base_url(); ?>assets/images/service5.jpg" />
                                <span>Luxury Yacht</span></a>
                        </div>
                    </div>
                    <div class="col-md-4 service">
                        <div class="serv-inner">
                            <a href="#"><img class="img-responsive" src="<?php echo base_url(); ?>assets/images/service6.jpg" />
                                <span>Luxury Villa</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--<section class="map-section">
                <div class="container-fluid">
                        <div class="row">
                                <div class="map-responsive">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d68436.06048923!2d-74.04761800088724!3d40.70755539893427!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1506333999345" width="600" height="375" frameborder="0" style="border:0" allowfullscreen></iframe>
                                </div>
                        </div>
                </div>
        </section>-->
        <section class="how-works">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 content-inner">
                        <h3 class="section-title">How It Works</h3>
                        <h4>Our Starter Guide</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 work-block">
                        <div class="icon">
                            <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/choose.png" />
                            <p class="title">Choose</p>
                            <p class="content">From a luxury yacht, a private jet, a dream car, a finest home or all of the above! Pick your location from a world-wide chlice of destination and your option will display instantly.</p>
                        </div>
                    </div>
                    <div class="col-md-4 work-block">
                        <div class="icon">
                            <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/select.png" />
                            <p class="title">Select</p>
                            <p class="content">From a available range of luxury experiences, add in extra services to tailor your exerience to better fir your demand.</p>
                        </div>
                    </div>
                    <div class="col-md-4 work-block">
                        <div class="icon">
                            <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/confirm.png" />
                            <p class="title">Confirm</p>
                            <p class="content">create your account and pay security online to receive your e-contract. A personal concierge will be assigned to your booking, available at anytime for your convenience.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="abt-contact">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 common">
                        <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/yacht-1.jpg">
                        <div class="content">
                            <h1>About Immidia</h1>
                            <h3>Our Starter Guide</h3>
                        </div>
                    </div>
                    <div class="col-md-6 common">
                        <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/yacht-2.jpg">
                        <div class="content">
                            <h1>Contact</h1>
                            <h3>Our Starter Guide</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="container-fluid testimonials-container section-container section-container-image-bg">
            <div class="row">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 testimonials section-description">
                            <h3 class="section-title">Testimonials</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-10 col-sm-offset-1 testimonial-list">
                            <div role="tabpanel">
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade in active" id="tab1">
                                        <div class="testimonial-image">
                                            <img src="<?php echo base_url(); ?>assets/images/testimonial-1.jpg" alt="t1">
                                        </div>
                                        <div class="testimonial-auther">
                                            <p>Katrina Carianoff</p>
                                        </div>
                                        <div class="testimonial-text">
                                            <p>
                                                "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. 
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. 
                                                Lorem ipsum dolor sit amet, consectetur..."
                                            </p>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="tab2">
                                        <div class="testimonial-image">
                                            <img src="<?php echo base_url(); ?>assets/images/testimonial-2.jpg" alt="t2">
                                        </div>
                                        <div class="testimonial-auther">
                                            <p>John Doe</p>
                                        </div>
                                        <div class="testimonial-text">
                                            <p>
                                                "Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip 
                                                ex ea commodo consequat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit 
                                                lobortis nisl ut aliquip ex ea commodo consequat..."
                                            </p>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="tab3">
                                        <div class="testimonial-image">
                                            <img src="<?php echo base_url(); ?>assets/images/testimonial-3.jpg" alt="t3">
                                        </div>
                                        <div class="testimonial-auther">
                                            <p>Katrina Carianoff</p>
                                        </div>
                                        <div class="testimonial-text">
                                            <p>
                                                "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. 
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. 
                                                Lorem ipsum dolor sit amet, consectetur..."
                                            </p>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="tab4">
                                        <div class="testimonial-image">
                                            <img src="<?php echo base_url(); ?>assets/images/testimonial-4.jpg" alt="t4">
                                        </div>
                                        <div class="testimonial-auther">
                                            <p>John Doe</p>
                                        </div>
                                        <div class="testimonial-text">
                                            <p>
                                                "Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip 
                                                ex ea commodo consequat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit 
                                                lobortis nisl ut aliquip ex ea commodo consequat..."
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active">
                                        <a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab"></a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab"></a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab"></a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#tab4" aria-controls="tab4" role="tab" data-toggle="tab"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php $this->load->view('footer/footer') ?>

    </body>
</html>