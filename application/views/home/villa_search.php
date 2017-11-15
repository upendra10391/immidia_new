<!DOCTYPE html>
<?php 
$villaFilterParams=date('F-j-D');
//var_dump($villaFilterParams);exit;?>
<html>
    <head>
        <title><?php echo (!empty($villDetails->villaName)) ? $villDetails->villaName : '';?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <?php $this->load->view('header/head'); ?>	
    </head>

    <header>
        <?php $this->load->view('header/header'); ?>

        <div class="container-fluid page-title villa-bg">
            <div class="row">
                <h1><?php echo (!empty($villDetails->villaName)) ? $villDetails->villaName : '';?></h1>
            </div>
        </div>
    </header>
    <body>

        <section class="slider-section">
            <div class="container-fluid">
                <div class="row">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            
                            <?php if(!empty($villaList[$villDetails->id]->banner)){ 
                                    $i = 0;foreach ($villaList[$villDetails->id]->banner as $key=>$value){$active = ($i==0) ? "active": "";?>
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
                                 <?php if(!empty($villaList[$villDetails->id]->banner)){foreach ($villaList[$villDetails->id]->banner as $key=>$value){?>
                                    <li>
                                        <img width="218" height="218" src="<?php echo $this->IMAGE_URL.str_replace("..", "", $value->banner); ?>">
                                    </li>
                                <?php }}else{?>
                                    <li>
                                        <img width="218" height="218" src="<?php echo base_url(); ?>assets/images/product-sale-detail/t1.png">
                                    </li>
                                <?php }?>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="search-detail pfs">
            <div class="container-fluid main-container">
                <div class="row">
                    <div class="container">
                        <div class="info-section">
                            <div class="info first">
                                <img src="<?php echo base_url(); ?>assets/images/product-sale-detail/i1.png" alt="1">
                                <p class="title">TO SLEEP</p>
                                <p class="count"><?php echo (!empty($villDetails->guestSleeping)) ? $villDetails->guestSleeping : 0;?></p>
                            </div>
                            <div class="info second1">
                                <img src="<?php echo base_url(); ?>assets/images/product-sale-detail/i2.png" alt="1">
                                <p class="title">BEDROOM</p>
                                <p class="count"><?php echo (!empty($villDetails->bedrooms)) ? $villDetails->bedrooms : 0;?></p>
                            </div>
                            <div class="info sixth">
                                <img src="<?php echo base_url(); ?>assets/images/product-sale-detail/i3.png" alt="1">
                                <p class="title">AREA</p>
                                <p class="count"><?php echo (!empty($villDetails->surfaceArea)) ? $villDetails->surfaceArea : 0;?> m<sup>2</sup> </p>
                            </div>
                            <div class="info fourth">
                                <img src="<?php echo base_url(); ?>assets/images/product-sale-detail/i4.png" alt="1">
                                <p class="title">ROOMS</p>
                                <p class="count"><?php echo (!empty($villDetails->totalRooms)) ? $villDetails->totalRooms : 0;?></p>
                            </div>
                            <div class="info fifth">
                                <img src="<?php echo base_url(); ?>assets/images/product-sale-detail/i5.png" alt="1">
                                <p class="title">BATHROOMS</p>
                                <p class="count"><?php echo (!empty($villDetails->totalBathRooms)) ? $villDetails->totalBathRooms : 0;?></p>
                            </div>
                        </div>
                        <div class="info-details">
                            <div class="col-md-6">
                                <ul>
                                    <li>Specification</li>
                                    <li>Situation<span><?php echo (!empty($villDetails->situation)) ? $villDetails->situation :'No';?></span></li>
                                    <li>Hill View<span><?php echo (!empty($villDetails->ishillView) && $villDetails->ishillView == 1) ? 'YES' : 'No';?></span></li>
                                    <li>Attractions And<br/> Distances<span><?php echo (!empty($villDetails->additional)) ? $villDetails->additional : '';?></span></li>
                                    <li>Classical Interior Design<span><?php echo (!empty($villDetails->isClassicalInteriorDesign) && $villDetails->isClassicalInteriorDesign == 1) ? 'YES' : 'NO';?></span></li>
                                    <li>Modern Interior Design<span><?php echo (!empty($villDetails->isModernInteriorDesign) && $villDetails->isModernInteriorDesign ==1) ? 'YES' : 'NO';?></span></li>
                                    <li>Fully Equipment Kitchen<span><?php echo (!empty($villDetails->additionalKitchenEquipment)) ? 'YES' : 'NO';?></span></li>
                                    <li>Babies Equipment<span><?php echo (!empty($villDetails->babiesEquipment)) ? 'YES' : 'NO';?></span></li>
                                    <li>Additional Business Equipment<span><?php echo (!empty($villDetails->additionalBusinessEquipement)) ? $villDetails->additionalBusinessEquipement : '';?></span></li>
                                    <li>Air Conditioning<span><?php echo (!empty($villDetails->isAirConditioning) && $villDetails->isAirConditioning == 1) ? 'YES' : 'NO';?></span></li>
                                    <li>Wi-Fi<span><?php echo (!empty($villDetails->isWifi) && $villDetails->isWifi == 1) ? 'YES' : 'NO';?></span></li>
                                    <li>Audio Visual<span><?php echo (!empty($villDetails->audioVisual)) ? $villDetails->audioVisual : '';?></span></li>
                                    <li>Fir Place<span><?php echo (!empty($villDetails->firePlace)) ? $villDetails->firePlace : '';?></span></li>
                                    <li>Swimming Pool<span><?php echo (!empty($villDetails->isSwimmingPool) && $villDetails->isSwimmingPool == 1) ? 'YES' : 'NO';?></span></li>
                                    <li>Sauna<span><?php echo (!empty($villDetails->isSauna) && $villDetails->isSauna == 1) ? 'YES' : 'NO';?></span></li>
                                    <li>Special Equipment<span><?php echo (!empty($villDetails->specialEquipments)) ? $villDetails->specialEquipments : '';?></span></li>
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
                                    <li>Address<span><?php echo (!empty($villDetails->address)) ? $villDetails->address : '';?></span></li>
                                    <li>Showmap<span>Showmap</span></li>
                                </ul>

                                <ul>
                                    <li>Accomodation</li>
                                    <li>Minimum Stay<span><?php echo (!empty($villDetails->minimumStay)) ? $villDetails->minimumStay : '';?> Month</span></li>
                                    <li>Maximum Guests<span><?php echo (!empty($villDetails->maximumGuests)) ? $villDetails->maximumGuests : '';?></span></li>
                                    <li>Pets<span><?php echo (!empty($villDetails->isPetsAllowed) && $villDetails->isPetsAllowed == 1) ? 'YES' : 'NO';?></span></li>
                                    <li>Social events<span><?php echo (!empty($villDetails->isEventsAllowed) && $villDetails->isEventsAllowed == 1) ? 'YES' : 'NO';?></span></li>
                                    <li>Security Deposit<span><?php echo (!empty($villDetails->amountofSecurityDeposit)) ? $villDetails->amountofSecurityDeposit : '';?> AED</span></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section class="summary">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="summary-title">
                            <h5>Search Summary</h5><!--<a href="#">Modify</a>-->
                        </div>
                        <div class="table-responsive summary-result">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Country</th>
                                        <th>State</th>
                                        <th>Destination</th>
                                        <th>Checkin</th>
                                        <th>Checkout</th>
                                        <th>Guest (s)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><?php echo $this->villaFilterParams['villaCountryName'];?></td>
                                        <td><?php echo $this->villaFilterParams['villaStateName'];?></td>
                                        <td><?php echo $this->villaFilterParams['villaDestinationName'];?></td>
                                        <td><?php echo $this->villaFilterParams['checkin'];?></td>
                                        <td><?php echo $this->villaFilterParams['checkout'];?></td>
                                        <td><?php echo $this->villaFilterParams['villa_guest'];?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-12 mb30">
                        <form action="<?php echo base_url('villalimousineDetail/'.$villDetails->id.'/?checkinData='.date('Y-m-d',strtotime($this->villaFilterParams['checkin'])).'&checkoutData='.date('Y-m-d',strtotime($this->villaFilterParams['checkout'])))?>" id="villaNext" name="villaNext" method="post">
                        <div class="col-md-3">
                        </div>
                        <div class="col-md-3">
                           <label>CHECKIN</label>
                                <div class='input-group date' id='datetimepicker1'>
                                    <input type='text' id="dparrivalv" name="checkin"  value="" class="date-picker arrival" placeholder="DD/MM/YYYY"/>
                                    <div id="arrivalv"><span><?php echo $this->villaFilterParams['checkin'];?></span></div>
                                </div>
                        </div>
                        <div class="col-md-3">
                            <label>CHECKOUT</label>
                                <div class='input-group date' id='datetimepicker1'>
                                    <input type='text' id="dpdv" name="checkout" value="" class="date-picker departure" placeholder="DD/MM/YYYY"/>
                                    <div id="departurev"><span><?php echo $this->villaFilterParams['checkout'];?></span></div>
                                </div>
                        </div>
                        <div class="col-md-3">
                        </div>
                        
                        </form>
                    </div>
                    <div class="col-md-12">
                        <div class="back-next">
                            <a class="back" href="<?php echo base_url('villa-search-result');?>"><i class="fa fa-angle-left" aria-hidden="true"></i>Back to Search</a>
                            <a class="next" id="limousine_villa" href="">Next<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <?php $this->load->view('footer/footer') ?>
    </body>
</html>