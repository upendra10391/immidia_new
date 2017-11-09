<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $objValue->villaName?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <?php $this->load->view('header/head'); ?>
    </head>
    <body>
        <header>
            <?php $this->load->view('header/header'); ?>
            <div class="container-fluid page-title">
                <div class="row">
                    <h1><?php echo $objValue->villaName?></h1>
                </div>
            </div>
        </header>
        <section class="slider-section">
            <div class="container-fluid">
                <div class="row">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <?php if(!empty($objValue->banner)){ 
                                    $i = 0;foreach ($objValue->banner as $innerkey=>$value){$active = ($i==0) ? "active": "";?>
                                    <div class="item <?php echo $active;?>">
                                        <img src="<?php echo $this->IMAGE_URL.str_replace("..", "", $value->banner); ?>">
                                    </div>
                                <?php $i++;}}else{?>
                                <div class="item active">
                                    <img src="<?php echo base_url(); ?>assets/images/product-sale-detail/banner1.jpg">
                                </div>
                            <?php }?>
                        </div>

                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                            <i class="fa fa-chevron-left" aria-hidden="true"></i>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next">
                            <i class="fa fa-chevron-right" aria-hidden="true"></i>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section>

            <div class="container-fluid">
                <div class="row">
                    <div id="thumbnail-slider">
                        <div class="inner">
                            <ul>
                                <?php if(!empty($objValue->banner)){foreach ($objValue->banner as $key=>$value){?>
                                    <li>
                                        <img width="218" height="218" src="<?php echo $this->IMAGE_URL.str_replace("..", "", $value->banner); ?>">
                                    </li>
                                <?php }}else{?>
                                   <li>
                                        <img src="<?php echo base_url(); ?>assets/images/product-sale-detail/t1.png">
                                    </li>
                                <?php }?>
                            </ul>
                        </div>
                    </div>
                    <div class="center"><button><i class="fa fa-phone" aria-hidden="true"></i> call us</button> <button><i class="fa fa-envelope" aria-hidden="true"></i> Email</button></div>
                </div>
            </div>
        </section>

        <section class="search-detail pfs">
            <div class="container-fluid main-container">
                <div class="row">
                    <div class="container">
                        <p class="pprice"><?php echo $this->arrCurrency[$objValue->currencyId]." ".$objValue->dayPriceLowestHighSeason?></p>
                        <div class="info-section">
                            <div class="info first">
                                <img src="<?php echo base_url(); ?>assets/images/product-sale-detail/i1.png" alt="1">
                                <p class="title">TO SLEEP</p>
                                <p class="count"><?php echo $objValue->guestSleeping?></p>
                            </div>
                            <div class="info second1">
                                <img src="<?php echo base_url(); ?>assets/images/product-sale-detail/i2.png" alt="1">
                                <p class="title">BEDROOM</p>
                                <p class="count"><?php echo $objValue->bedrooms?></p>
                            </div>
                            <div class="info sixth">
                                <img src="<?php echo base_url(); ?>assets/images/product-sale-detail/i3.png" alt="1">
                                <p class="title">AREA</p>
                                <p class="count"><?php echo $objValue->surfaceArea?> ft² </p>
                            </div>
                            <div class="info fourth">
                                <img src="<?php echo base_url(); ?>assets/images/product-sale-detail/i4.png" alt="1">
                                <p class="title">ROOMS</p>
                                <p class="count"><?php echo $objValue->totalRooms?></p>
                            </div>
                            <div class="info fifth">
                                <img src="<?php echo base_url(); ?>assets/images/product-sale-detail/i5.png" alt="1">
                                <p class="title">BATHROOMS</p>
                                <p class="count"><?php echo $objValue->totalBathRooms?></p>
                            </div>
                        </div>
                        <div class="info-details">
                            <div class="col-md-6">
                                <ul>
                                    <li>Specification</li>
                                    <li>Situation<span><?php echo $objValue->situation;?></span></li>
                                    <li>Hill View<span><?php echo !empty($objValue->ishillView) ? "YES" : "NO";?></span></li>
                                    <li>Attractions And<br/> Distances<span>Emirates Tower, Burj khalifa, Dubai Mall,Dubai Metro</span></li>
                                    <li>Classical Interior Design<span><?php echo !empty($objValue->isClassicalInteriorDesign) ? "YES" : "NO";?></span></li>
                                    <li>Modern Interior Design<span><?php echo !empty($objValue->isModernInteriorDesign) ? "YES" : "NO";?></span></li>
                                    <li>Fully Equipment Kitchen<span><?php echo !empty($objValue->isKitchen) ? "YES" : "NO";?></span></li>
                                    <li>Babies Equipment<span><?php echo $objValue->babiesEquipment;?></span></li>
                                    <li>Additional Business Equipment<span><?php echo $objValue->additionalBusinessEquipement;?></span></li>
                                    <li>Air Conditioning<span><?php echo !empty($objValue->isAirConditioning) ? "YES" : "NO";?></span></li>
                                    <li>Wi-Fi<span><?php echo !empty($objValue->isWifi) ? "YES" : "NO";?></span></li>
                                    <li>Audio Visual<span><?php echo $objValue->audioVisual;?></span></li>
                                    <li>Fir Place<span><?php echo $objValue->firePlace;?></span></li>
                                    <li>Swimming Pool<span><?php echo !empty($objValue->isSwimmingPool) ? "YES" : "NO";?></span></li>
                                    <li>Sauna<span><?php echo !empty($objValue->isSauna) ? "YES" : "NO";?></span></li>
                                    <li>Special Equipment<span><?php echo $objValue->specialEquipments;?></span></li>
                                </ul>
                                <div class="download-section">
                                    <div class="brochure">
                                        <img src="<?php echo base_url(); ?>assets/images/search6.png"><a class="left" href="#">Download PDF Brochure</a>
                                    </div>
                                    <div class="email">
                                        <img src="<?php echo base_url(); ?>assets/images/search7.png"><a class="right" href="#">Email PDF Brochure</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <ul class="first">
                                    <li>Location</li>
                                    <li>Address<span><?php echo $objValue->address;?></span></li>
                                    <!-- <li>Showmap<span>Showmap</span></li> -->
                                </ul>

                                <ul>
                                    <!-- <li>Accomodation</li>
                                    <li>Minimum Stay<span><?php echo $objValue->minimumStay;?></span></li>
                                    <li>Maximum Guests<span><?php echo $objValue->maximumGuests;?></span></li>
                                    <li>Pets<span><?php echo !empty($objValue->isPetsAllowed) ? "YES" : "NO";?></span></li>
                                    <li>Social events<span><?php echo !empty($objValue->isEventsAllowed) ? "YES" : "NO";?></span></li>
                                    <li>Security Deposit<span><?php echo $this->arrCurrency[$objValue->currencyId]." ".$objValue->amountofSecurityDeposit;?></span></li> -->
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <section class="map-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="map-responsive">
                        <iframe src="<?php echo $objValue->locationMapUrl?>" width="600" height="375" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </section>
        <?php $this->load->view('footer/footer') ?>
    </body>
</html>
