<!DOCTYPE html>
<html>
    
    <head>
        <title>Payment</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <?php $this->load->view('header/head'); ?>
        <script>
            $(document).ready(function () {
                $(".date-picker").datepicker({format: "yyyy/mm/dd", todayHighlight: true, autoclose: true, });
                $(".date-picker").datepicker("hide");
            });
        </script>

        <script type="text/javascript">
            $(function () {
                $('#datetimepicker3').datetimepicker({
                    format: 'LT'
                });
            });
        </script>
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
                           <?php if(!empty($villaList[$villDetails->id]->banner)){ 
                                    $i = 0;foreach ($villaList[$villDetails->id]->banner as $key=>$value){$active = ($i==0) ? "active": "";?>
                                    <div class="item <?php echo $active;?>">
                                        <img src="<?php echo $this->IMAGE_URL.str_replace("..", "", $value->banner); ?>">
                                    </div>
                                <?php $i++;}}else{?>
                                        <div class="item active">
                                            <img src="<?php echo base_url(); ?>/assets/images/payment/s1.png">
                                        </div>
                                <?php }?>
                            
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
                                    <div class="col-md-4 col-xs-4"><p class="title">Villa</p></div>
                                    <div class="col-md-4 col-xs-4"><p class="value"><?php echo $villDetails->villaName ?></p></div>
                                    <div class="col-md-4 col-xs-4"><p class="distance"><?php echo $this->arrCurrency[$villDetails->currencyId]." "; echo $varTotal = (!empty($totalPrice)) ? $totalPrice : 0.00;?>{inc.vat}</p></div>
                                </div>
                                <div class="form-group gborder">
                                    <div class="col-md-4 col-xs-4"><p class="title">Check In</p></div>
                                    <div class="col-md-4 col-xs-4"><p class="value"><?php echo $arrDataGet['checkinData']?></p></div>
                                    <div class="col-md-4 col-xs-4"><p class="distance"></p></div>
                                </div>
                                <div class="form-group gborder">
                                    <div class="col-md-4 col-xs-4"><p class="title">Check Out</p></div>
                                    <div class="col-md-4 col-xs-4"><p class="value"><?php echo $arrDataGet['checkoutData'];?></p></div>
                                    <div class="col-md-4 col-xs-4"><p class="distance"></p></div>
                                </div>
                                <div class="form-group gborder">
                                    <div class="col-md-4 col-xs-4"><p class="title">Destination</p></div>
                                    <div class="col-md-4 col-xs-4"><p class="value"><?php echo $villDetails->destinationName ?></p></div>
                                    <div class="col-md-4 col-xs-4"><p class="distance"></p></div>
                                </div>
<!--                                <div class="form-group gborder">
                                    <div class="col-md-4 col-xs-4"><p class="title">Arrival Date</p></div>
                                    <div class="col-md-4 col-xs-4"><p class="value">2017-10-10</p></div>
                                    <div class="col-md-4 col-xs-4"><p class="distance"></p></div>
                                </div>-->
          <form method="post" action="<?= base_url('home/submit_villa_order') ?>">
                                <div class="form-group fborder">
                                    <div class="col-md-12 col-xs-12"><p class="title">Food And Beverage</p></div>
                                    <div class="col-md-10 col-xs-10">
                                        <?php if(!empty($arrPost['f_b_name'])){
                                            $varTotalInner = 0;
                                            //var_dump($arrPost);exit;
                                            foreach($arrPost['f_b_name'] as $key=>$val){
                                         ?>
                                            <p class="fitem">
                                                <span class="iname"><?php echo $val?></span>
                                                <span class="iqut"><?php echo $arrPost['f_b_qty'][$key]?></span>
                                                <span class="iprice"><?php echo $varTotalInner = $arrPost['f_b_qty'][$key]*$arrPost['f_b_price'][$key]?></span>
<!--                                                <span class="iprice"><?php echo $varTotalInner = $arrPost['f_b_qty'][$key]*$arrPost['f_b_price'][$key]?></span>-->
                                           <!--     <span class="idelete"><i class="fa fa-trash-o" aria-hidden="true"></i></span>-->
                                            </p>
                                        <?php $varTotal += $varTotalInner;
                                        
                                            }}?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 ">
                                <div class="form-group gborder">
                                    <div class="col-md-4 col-xs-4"><p class="title">VAT</p></div>
                                    <div class="col-md-4 col-xs-4"><p class="value"></p></div>
                                    <div class="col-md-4 col-xs-4"><p class="distance"><?php echo $this->arrCurrency[$villDetails->currencyId]." ";echo $varV = (!empty($vat)) ? $vat : 0.00;?> %</p></div>
                                </div>
                                <div class="form-group gborder">
                                    <div class="col-md-4 col-xs-4"><p class="title">City Tax</p></div>
                                    <div class="col-md-4 col-xs-4"><p class="value"></p></div>
                                    <div class="col-md-4 col-xs-4"><p class="distance"><?php echo $this->arrCurrency[$villDetails->currencyId]." ";echo $varCT = (!empty($cityTax)) ? $cityTax : 0.00;?> %</p></div>
                                </div>
                                <div class="form-group gborder">
                                    <div class="col-md-4 col-xs-4"><p class="title">Service Tax</p></div>
                                    <div class="col-md-4 col-xs-4"><p class="value">Regular</p></div>
                                    <div class="col-md-4 col-xs-4"><p class="distance"><?php echo $this->arrCurrency[$villDetails->currencyId]." ";echo $varST = (!empty($ServiceTax)) ? $ServiceTax : 0.00;?> %</p></div>
                                </div>
                                <div class="form-group gborder">
                                    <div class="col-md-4 col-xs-4"><p class="title">Transaction Charges ?</p></div>
                                    <div class="col-md-4 col-xs-4"><p class="value"></p></div>
                                    <div class="col-md-4 col-xs-4"><p class="distance"><?php echo $this->arrCurrency[$villDetails->currencyId]." ";echo $varTT = (!empty($transactionCharge)) ? $transactionCharge : 0.00;?> %</p></div>
                                </div>
                                <div class="form-group gborder">
                                    <div class="col-md-4 col-xs-4"><p class="title"><b>Total</b></p></div>
                                    <div class="col-md-4 col-xs-4"><p class="value"></p></div>
                                    <div class="col-md-4 col-xs-4"><p class="distance"><b><?php echo $this->arrCurrency[$villDetails->currencyId]." ";echo $varTotal = $totalPrice;?></b></p></div>
                                </div>
                            </div>	
                           
                            <div class="col-md-12 clearfix ">
                                <div class="checkbox checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" value="option2">
                                    <label for="inlineCheckbox2" class="title"> I ACCEPT THE CONTRACT TERMS & CONDITIONS </label>
                                    <p class="rlink"><a href="contract.html" target="_black" >Click</a> To Read The Cotract</p>
                                </div>
                            </div>
                            <div class="col-md-12 center clearfix">
                                <button type="submit" class="payment">MAKE Payment</button>
                            </div>
                        </div> 
</form>
                    </div>
                </div>
            </div>
        </section>
        <?php $this->load->view('footer/footer') ?>
    </body>
</html>
