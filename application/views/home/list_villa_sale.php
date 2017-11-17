<div class="col-md-6">
    <div class="listing-box">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <?php if (!empty($objValue->banner)) {
                    $i = 0;
                    foreach ($objValue->banner as $innerkey => $value) {
                        $active = ($i == 0) ? "active" : "";
                        ?>
                        <div class="item <?php echo $active; ?>">
                            <img src="<?php echo $this->IMAGE_URL . str_replace("..", "", $value->banner); ?>">
                        </div>
                        <?php $i++;
                    }
                } else { ?>
                    <div class="item active">
                        <img src="<?php echo base_url(); ?>assets/images/product-sale/l1.png">
                    </div>
<?php } ?>
            </div> 
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <i class="fa fa-chevron-left" aria-hidden="true"></i>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <i class="fa fa-chevron-right" aria-hidden="true"></i>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <div class="listing-detail">
            <h4><?php echo $objValue->villaName ?></h4>
            <p class="listprice"><?php echo $this->arrCurrency[$objValue->currencyId] . " " . $objValue->dayPriceLowestHighSeason ?></p>
            <div class="info-section clearfix">
                <div class="info first">
                    <img src="<?php echo base_url(); ?>assets/images/product-sale/i7.png" alt="1">
                    <p class="title">Area</p>
                    <p class="count"><?php echo $objValue->surfaceArea ?> m<sup>2</sup> </p>
                </div>
                <div class="info second">
                    <img src="<?php echo base_url(); ?>assets/images/product-sale/i8.png" alt="1">
                    <p class="title">GUESTS SLEEPING</p>
                    <p class="count"><?php echo $objValue->guestSleeping ?></p>
                </div>
                <div class="info sixth">
                    <img src="<?php echo base_url(); ?>assets/images/product-sale/i9.png" alt="1">
                    <p class="title">BED ROOMS</p>
                    <p class="count"><?php echo $objValue->bedrooms ?></p>
                </div>
                <div class="info fourth">
                    <img src="<?php echo base_url(); ?>assets/images/product-sale/rooms.png" alt="1">
                    <p class="title">ROOMS</p>
                    <p class="count"><?php echo $objValue->totalRooms ?></p>
                </div>
                <div class="info fifth">
                    <img src="<?php echo base_url(); ?>assets/images/product-sale/bathrooms.png" alt="1">
                    <p class="title">BATHROOMS</p>
                    <p class="count"><?php echo $objValue->totalBathRooms ?></p>
                </div>
            </div>

            <div class="center">
<!--                                                            <button id="callus"><i class="fa fa-phone" aria-hidden="true"></i> <span>call us<span></button> 
                    <button><i class="fa fa-envelope" aria-hidden="true"></i> Email</button>-->
                <a href="<?php echo base_url('product-for-sale-detail/' . $objValue->id); ?>">
                    <button><i class="fa fa-plus" aria-hidden="true"></i> More Info</button>
                </a>

            </div>
        </div>
    </div>
</div>