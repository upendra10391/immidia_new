<?php //echo "<pre>";var_dump($arrDetails['arrGet']);?>
<!DOCTYPE html>
<html>
    <head>
        <title>Car Payment</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <?php $this->load->view('header/head'); ?>
    </head>
    <body id="payment">
        <header>
           <?php $this->load->view('header/header'); ?>
            <div class="container-fluid book page-title ls">
                <div class="row">
                    <h1>Payment</h1>
                </div>
            </div>
        </header>
        <section>
            <div class="container-fluid">
                <div class="row">
                    <div id="myCarousel5" class="carousel slide" data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <?php if(!empty($arrDetails['carDetails']->banner)){ $i = 0;foreach ($arrDetails['carDetails']->banner as $key=>$value){$active = ($i==0) ? "active": "";?>
                                <div class="item <?php echo $active;?>">
                                    <img src="<?php echo $this->IMAGE_URL.str_replace("..", "", $value->banner); ?>">
                                </div>
                            <?php $i++;}}?>
                        </div>

                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel5" data-slide="prev">
                            <i class="fa fa-chevron-left" aria-hidden="true"></i>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel5" data-slide="next">
                            <i class="fa fa-chevron-right" aria-hidden="true"></i>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>

            </div>
            <div class="black-color">
                <div class="container">
                    <div class="row">
                        <div class="your-choice clearfix">
                            <h3>YOUR CHOICE</h3>
                            <div class="col-md-6 ">
                                <div class="form-group gborder">
                                    <div class="col-md-4 col-xs-4"><p class="title">CAR</p></div>
                                    <div class="col-md-4 col-xs-4"><p class="value"><?php echo $arrDetails['carDetails']->carName?></p></div>
                                    <div class="col-md-4 col-xs-4"><p class="distance"><?php echo $this->arrCurrency[$arrDetails['carDetails']->currencyId]." ".$arrDetails['arrGet']['price']?>{inc.vat}</p></div>
                                </div>
                                <div class="form-group gborder">
                                    <div class="col-md-4 col-xs-4"><p class="title">Delivery Location</p></div>
                                    <div class="col-md-4 col-xs-4"><p class="value"><?php echo $arrDetails['carDetails']->startCity?></p></div>
                                    <div class="col-md-4 col-xs-4"><p class="distance"></p></div>
                                </div>
                                <div class="form-group gborder">
                                    <div class="col-md-4 col-xs-4"><p class="title">Arrival Location</p></div>
                                    <div class="col-md-4 col-xs-4"><p class="value"><?php echo $arrDetails['carDetails']->endCity?></p></div>
                                    <div class="col-md-4 col-xs-4"><p class="distance"></p></div>
                                </div>
                                <div class="form-group gborder">
                                    <div class="col-md-4 col-xs-4"><p class="title">Departure Date</p></div>
                                    <div class="col-md-4 col-xs-4"><p class="value"><?php echo $arrDetails['arrGet']['depDate']?></p></div>
                                    <div class="col-md-4 col-xs-4"><p class="distance"></p></div>
                                </div>
                                <div class="form-group gborder">
                                    <div class="col-md-4 col-xs-4"><p class="title">Arrival Date</p></div>
                                    <div class="col-md-4 col-xs-4"><p class="value"><?php echo $arrDetails['arrGet']['arrvDate']?></p></div>
                                    <div class="col-md-4 col-xs-4"><p class="distance"></p></div>
                                </div>

                            </div>
                            <div class="col-md-6 ">
                                <div class="form-group gborder">
                                    <div class="col-md-4 col-xs-4"><p class="title">Delivery Fees</p></div>
                                    <div class="col-md-4 col-xs-4"><p class="value"></p></div>
                                    <div class="col-md-4 col-xs-4"><p class="distance"><?php echo $this->arrCurrency[$arrDetails['carDetails']->currencyId]." ".$arrDetails['carDetails']->deliveryDetails->deliveryRate?></p></div>
                                </div>
                                <div class="form-group gborder">
                                    <div class="col-md-4 col-xs-4"><p class="title">Drop Off Fees</p></div>
                                    <div class="col-md-4 col-xs-4"><p class="value"></p></div>
                                    <div class="col-md-4 col-xs-4"><p class="distance"><?php echo $this->arrCurrency[$arrDetails['carDetails']->currencyId]." ".$arrDetails['carDetails']->deliveryDetails->dropoffRate?></p></div>
                                </div>
                                <div class="form-group gborder">
                                    <div class="col-md-4 col-xs-4"><p class="title">Total</p></div>
                                    <div class="col-md-4 col-xs-4"><p class="value"></p></div>
                                    <div class="col-md-4 col-xs-4"><p class="distance"><b><?php echo $this->arrCurrency[$arrDetails['carDetails']->currencyId]." ".($arrDetails['arrGet']['price']+$arrDetails['carDetails']->deliveryDetails->deliveryRate+$arrDetails['carDetails']->deliveryDetails->dropoffRate)?></b></p></div>
                                </div>
                            </div>			
<form method="post" action="<?= base_url('home/submit_car_order') ?>">
                            <div class="col-md-12 clearfix ">
                                <div class="checkbox checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" value="option2">
                                    <label for="inlineCheckbox2" class="title"> I ACCEPT THE CONTRACT TERMS & CONDITIONS </label>
                                    <p class="rlink"><a href="<?php echo base_url('home/carRentalAgreement') ?>" target="_black" >Click</a> To Read The Cotract</p>
                                </div>
                            </div>
                            <div class="col-md-12 center clearfix">
                                <button class="payment">MAKE Payment</button>
                            </div>
</form>
                        </div> 
                    </div>
                </div>
            </div>
        </section>
        <?php $this->load->view('footer/footer') ?>
    </body>

</html>