<section class="search-detail pfs">
    <div class="container-fluid main-container">
        <div class="row">
            <div class="container">
                <p class="pprice"><?php echo $this->arrCurrency[$objValue->currencyId] . " " . $objValue->dayPriceLowestHighSeason ?></p>
                <div class="info-section">
                    <div class="info first">
                        <img src="<?php echo base_url(); ?>assets/images/product-sale-detail/i1.png" alt="1">
                        <p class="title">TO SLEEP</p>
                        <p class="count"><?php echo $objValue->guestSleeping ?></p>
                    </div>
                    <div class="info second1">
                        <img src="<?php echo base_url(); ?>assets/images/product-sale-detail/i2.png" alt="1">
                        <p class="title">BEDROOM</p>
                        <p class="count"><?php echo $objValue->bedrooms ?></p>
                    </div>
                    <div class="info sixth">
                        <img src="<?php echo base_url(); ?>assets/images/product-sale-detail/i3.png" alt="1">
                        <p class="title">AREA</p>
                        <p class="count"><?php echo $objValue->surfaceArea ?> m<sup>2</sup> </p>
                    </div>
                    <div class="info fourth">
                        <img src="<?php echo base_url(); ?>assets/images/product-sale-detail/i4.png" alt="1">
                        <p class="title">ROOMS</p>
                        <p class="count"><?php echo $objValue->totalRooms ?></p>
                    </div>
                    <div class="info fifth">
                        <img src="<?php echo base_url(); ?>assets/images/product-sale-detail/i5.png" alt="1">
                        <p class="title">BATHROOMS</p>
                        <p class="count"><?php echo $objValue->totalBathRooms ?></p>
                    </div>
                </div>
                <div class="info-details">
                    <div class="col-md-6">
                        <ul>
                            <li>Specification</li>
                            <li>Situation<span><?php echo $objValue->situation; ?></span></li>
                            <li>Hill View<span><?php echo!empty($objValue->ishillView) ? "YES" : "NO"; ?></span></li>
                            <li>Attractions And<br/> Distances<span><?php echo $objValue->additional ?></span></li>
                            <li>Classical Interior Design<span><?php echo!empty($objValue->isClassicalInteriorDesign) ? "YES" : "NO"; ?></span></li>
                            <li>Modern Interior Design<span><?php echo!empty($objValue->isModernInteriorDesign) ? "YES" : "NO"; ?></span></li>
                            <li>Fully Equipment Kitchen<span><?php echo!empty($objValue->isKitchen) ? "YES" : "NO"; ?></span></li>
                            <li>Babies Equipment<span><?php echo $objValue->babiesEquipment; ?></span></li>
                            <li>Additional Business Equipment<span><?php echo $objValue->additionalBusinessEquipement; ?></span></li>
                            <li>Air Conditioning<span><?php echo!empty($objValue->isAirConditioning) ? "YES" : "NO"; ?></span></li>
                            <li>Wi-Fi<span><?php echo!empty($objValue->isWifi) ? "YES" : "NO"; ?></span></li>
                            <li>Audio Visual<span><?php echo $objValue->audioVisual; ?></span></li>
                            <li>Fir Place<span><?php echo $objValue->firePlace; ?></span></li>
                            <li>Swimming Pool<span><?php echo!empty($objValue->isSwimmingPool) ? "YES" : "NO"; ?></span></li>
                            <li>Sauna<span><?php echo!empty($objValue->isSauna) ? "YES" : "NO"; ?></span></li>
                            <li>Special Equipment<span><?php echo $objValue->specialEquipments; ?></span></li>
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
                            <li>Address<span><?php echo $objValue->addressRentalAgency; ?></span></li>
                            <li>Showmap<span> <a href="<?php echo $objValue->locationMapUrl ?>" target="_blank">View On Map</a></li>
                        </ul>

                        <ul>
                            <!-- <li>Accomodation</li>
                            <li>Minimum Stay<span><?php echo $objValue->minimumStay; ?></span></li>
                            <li>Maximum Guests<span><?php echo $objValue->maximumGuests; ?></span></li>
                            <li>Pets<span><?php echo!empty($objValue->isPetsAllowed) ? "YES" : "NO"; ?></span></li>
                            <li>Social events<span><?php echo!empty($objValue->isEventsAllowed) ? "YES" : "NO"; ?></span></li>
                            <li>Security Deposit<span><?php echo $this->arrCurrency[$objValue->currencyId] . " " . $objValue->amountofSecurityDeposit; ?></span></li> -->
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>

</section>