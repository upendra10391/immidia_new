<section class="search-detail pfs">
    <div class="container-fluid main-container">
        <div class="row">
            <div class="container">
                <p class="pprice"><?php echo $this->arrCurrency[$objValue->currencyId] . " " . $objValue->dayPriceLowestHighSeason ?></p>
                <div class="info-section">
                    <div class="info first">
                        <img src="<?php echo base_url(); ?>/assets/images/car-search/icon/1.png" alt="1">
                        <p class="title">PASSENGER</p>
                        <p class="count"><?php echo $objValue->numberOfPassengers ?></p>
                    </div>
                    <div class="info second">
                        <img src="<?php echo base_url(); ?>/assets/images/car-search/icon/2.png" alt="1">
                        <p class="title">GPS</p>
                        <p class="count"><?php echo ($objValue->isGPS == 1) ? "YES" : "NO"; ?></p>
                    </div>
                    <div class="info sixth">
                        <img src="<?php echo base_url(); ?>/assets/images/car-search/icon/3.png" alt="1">
                        <p class="title">AC</p>
                        <p class="count"><?php echo ($objValue->IsairConditioning == 1) ? "YES" : "NO"; ?></p>
                    </div>
                    <div class="info fourth">
                        <img src="<?php echo base_url(); ?>/assets/images/car-search/icon/4.png" alt="1">
                        <p class="title">FUEL</p>
                        <p class="count"><?php echo $objValue->fuelType ?></p>
                    </div>
                    <div class="info fifth">
                        <img src="<?php echo base_url(); ?>/assets/images/car-search/icon/5.png" alt="1">
                        <p class="title">GEARBOX</p>
                        <p class="count"><?php echo $objValue->GearboxType ?></p>
                    </div>
                </div>
                <div class="info-details">
                    <div class="col-md-6">
                        <ul class="first">
                            <li>Location</li>
                            <li>Address<span><?php echo $objValue->addressCompany ?></span></li>
                        </ul>
                        <ul>
                            <li>Specification</li>
                            <li>Power<span><?php echo $objValue->power ?></span></li>
                            <li>Engine Size<span><?php echo $objValue->engineSize ?></span></li>
                            <li>Gear Box<span><?php echo $objValue->GearboxType ?></span></li>
                            <li>Maximum Speed<span><?php echo $objValue->maxSpeed ?></span></li>
                            <li>Color<span><?php echo $objValue->colour ?></span></li>
                        </ul>
                        <div class="download-section">
                            <div class="brochure">
                                <img src="<?php echo base_url(); ?>/assets/images/search6.png"><a class="left" href="#">Download PDF Brochure</a>
                            </div>
                            <div class="email">
                                <img src="<?php echo base_url(); ?>/assets/images/search7.png"><a class="right" href="#">Email PDF Brochure</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <ul class="second">
                            <li>Rental Conditions</li>
                            <li>Deductible<span><?php echo $this->arrCurrency[$objValue->currencyId] . " " . $objValue->deductible ?></span></li>
                            <li>Included KM/Miles<span><?php echo $objValue->includedKMperMilesLowSeason ?></span></li>
                            <li>Minimum Driving Experience In Months<span><?php echo $objValue->driverExperience ?></span></li>
                            <li>Credit Card For Warranty<span><?php echo $objValue->numberOfCreditCardsForWarranty ?></span></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>

</section>