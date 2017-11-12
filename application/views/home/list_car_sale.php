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
            <p class="listprice">
                <?php echo $this->arrCurrency[$objValue->currencyId]." ".$objValue->dayPriceHighestHighSeason?>
               </p>
            <div class="info-section clearfix">
                <div class="info first">
                    <img src="<?php echo base_url(); ?>assets/images/product-sale/i7.png" alt="1">
                    <p class="title">Paasanger</p>
                    <p class="count"><?php echo $objValue->numberOfPassengers ?> m<sup>2</sup> </p>
                </div>
                <div class="info second">
                    <img src="<?php echo base_url(); ?>assets/images/product-sale/i8.png" alt="1">
                    <p class="title">GPS</p>
                    <p class="count"><?php echo ($objValue->isGPS==1) ? "YES" : "NO";?></p>
                </div>
                <div class="info sixth">
                    <img src="<?php echo base_url(); ?>assets/images/product-sale/i9.png" alt="1">
                    <p class="title">AC</p>
                    <p class="count"><?php echo ($objValue->IsairConditioning==1) ? "YES" : "NO";?></p>
                </div>
                <div class="info fourth">
                    <img src="<?php echo base_url(); ?>assets/images/product-sale/i10.png" alt="1">
                    <p class="title">FUel</p>
                    <p class="count"><?php echo $objValue->fuelType;?></p>
                </div>
                <div class="info fifth">
                    <img src="<?php echo base_url(); ?>assets/images/product-sale/i11.png" alt="1">
                    <p class="title">Gearbox</p>
                    <p class="count"><?php echo $objValue->GearboxType ?></p>
                </div>
            </div>

            <div class="center">
<!--                                                            <button id="callus"><i class="fa fa-phone" aria-hidden="true"></i> <span>call us<span></button> 
                    <button><i class="fa fa-envelope" aria-hidden="true"></i> Email</button>-->
                <a href="<?php echo base_url('product-for-sale-detail/' . $objValue->id."?c=1"); ?>">
                    <button><i class="fa fa-plus" aria-hidden="true"></i> More Info</button>
                </a>

            </div>
        </div>
    </div>
</div>