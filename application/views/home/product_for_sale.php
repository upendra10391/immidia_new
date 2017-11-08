<!DOCTYPE html>
<html>
	<head>
		<title>Product For Sale</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <?php $this->load->view('header/head'); ?>	
	<script>
                $(document).ready(function(){
                    $( ".date-picker" ).datepicker({format: "yyyy/mm/dd" ,todayHighlight: true,autoclose: true,});
                    $( ".date-picker" ).datepicker("hide");
                });
		</script>
                <script type="text/javascript">
                            $(function () {
                                $('#datetimepicker3').datetimepicker({
                                    format: 'LT'
                                });
                            });
                                        $(document).ready(function(){

                        $('#callus span').click(function () {
                            var $this = $(this);
                            $this.toggleClass('#callus span');
                            if ($this.hasClass('#callus span')) {
                                $this.text('99999 99999');
                            } else {
                                $this.text('CALL US');
                            }
                        });



                    });

                </script>
	</head>
	<body class="product-for-sale">
            <header>

                <?php $this->load->view('header/header'); ?>
                <div class="container-fluid book page-title page-title1">
                    <div class="row">
                        <h1>Products For Sale</h1>
                    </div>
                </div>
            </header>
	<section class="ride-detail">
            <div class="container-fluid ">
                <div class="container searcharea">
                    <div class="row">
                        <form action="" method="get">
                            <div class="col-md-12">
                                <select style="width: 75%;" class="country" name="p_s_c" id="p_s_c">
                                    <option value="">Country</option>
                                    <?php foreach ($this->villaCountry as $key => $val) { ?>
                                        <option value="<?php echo $val->countryId; ?>"><?php echo $val->countryName; ?></option>
                                    <?php } ?>
                                </select>
                                <input class="fsubmit" type="submit" value="FIND" />
                            </div>
                        </form>
                    </div>
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="col-md-3">
                                <select class="">
                                    <option>PROPERTY TYPE</option>
                                    <option>Property Type</option>
                                    <option>Property Type</option>
                                </select>
                            </div>
                            <div class="col-md-3">	
                                <input class="keyword" type="text" placeholder="KEYWORD"/>
                            </div>
                            <div class="col-md-3">
                                <select class="">
                                    <option>MIN. PRICE</option>
                                    <option>Country 2</option>
                                    <option>Country 3</option>
                                    <option>Country 4</option>
                                    <option>Country 5</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <select class="">
                                    <option>MAX. PRICE</option>
                                    <option>Country 2</option>
                                    <option>Country 3</option>
                                    <option>Country 4</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <input class="reset" type="submit" name="RESET" value="RESET" />
                    </div>
                </div>
            </div>
		<div class="container-fluid ">
                    <div class="container searchresult">
                        <div class="row">
                            <div class="col-md-7">
                                <h3>PRODUCT FOR SALE</h3>
                            </div>
                            <div class="col-md-5">
                                SORT BY : <select class="sortby">
                                    <option>High to Low</option>
                                    <option>Low to High</option>

                                </select>
                                <h3 class="total">32,217 RESULTS</h3>
                            </div>
                        </div>
                        <div class="row lg">
                            <div class="col-md-3"><p><img src="<?php echo base_url(); ?>assets/images/product-sale/i3.png">VILLA <span>(<?php echo count($arrSaleaDetails) ?>)</span></p></div>
                            <div class="col-md-3"><p><img src="<?php echo base_url(); ?>assets/images/product-sale/i4.png">YACHT <span>(9494)</span></p></div>
                            <div class="col-md-3"><p><img src="<?php echo base_url(); ?>assets/images/product-sale/i5.png">CAR <span>(2429)</span></p></div>
                            <div class="col-md-3"><p><img src="<?php echo base_url(); ?>assets/images/product-sale/i6.png">JET <span>(444)</span></p></div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 pull-right">
                                <select class="showall">
                                    <option>SHOW ALL</option>
                                    <option>Country 2</option>
                                    <option>Country 3</option>
                                    <option>Country 4</option>
                                </select></div>
                        </div>
                    </div>
		</div>
		<div class="container-fluid ">
			<div class="container searchresult">
				<div class="row">
                                    <?php 
                                    $arrSaleVillaDetails = array();
                                    if(!empty($arrSaleaDetails)){ foreach($arrSaleaDetails as $key=>$objValue){
                                            $arrSaleVillaDetails[$objValue->id] = $objValue;
                                        ?>
					<div class="col-md-6">
						<div class="listing-box">
                                                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                                        <div class="carousel-inner">
                                                            <?php if(!empty($objValue->banner)){ 
                                                                    $i = 0;foreach ($objValue->banner as $innerkey=>$value){$active = ($i==0) ? "active": "";?>
                                                                    <div class="item <?php echo $active;?>">
                                                                        <img src="<?php echo $this->IMAGE_URL.str_replace("..", "", $value->banner); ?>">
                                                                    </div>
                                                                <?php $i++;}}else{?>
                                                                <div class="item active">
                                                                    <img src="<?php echo base_url(); ?>assets/images/product-sale/l1.png">
                                                                </div>
                                                            <?php }?>
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
                                                   <h4><?php echo $objValue->villaName?></h4>
                                                   <p class="listprice"><?php echo $this->arrCurrency[$objValue->currencyId]." ".$objValue->dayPriceLowestHighSeason?></p>
                                                    <div class="info-section clearfix">
                                                           <div class="info first">
                                                                   <img src="<?php echo base_url(); ?>assets/images/product-sale/i7.png" alt="1">
                                                                   <p class="title">Area</p>
                                                                   <p class="count"><?php echo $objValue->surfaceArea?></p>
                                                           </div>
                                                           <div class="info second">
                                                                   <img src="<?php echo base_url(); ?>assets/images/product-sale/i8.png" alt="1">
                                                                   <p class="title">GUESTS SLEEPING</p>
                                                                   <p class="count"><?php echo $objValue->guestSleeping?></p>
                                                           </div>
                                                           <div class="info sixth">
                                                                   <img src="<?php echo base_url(); ?>assets/images/product-sale/i9.png" alt="1">
                                                                   <p class="title">BED ROOMS</p>
                                                                   <p class="count"><?php echo $objValue->bedrooms?></p>
                                                           </div>
                                                           <div class="info fourth">
                                                                   <img src="<?php echo base_url(); ?>assets/images/product-sale/i10.png" alt="1">
                                                                   <p class="title">ROOMS</p>
                                                                   <p class="count"><?php echo $objValue->totalRooms?></p>
                                                           </div>
                                                           <div class="info fifth">
                                                                   <img src="<?php echo base_url(); ?>assets/images/product-sale/i11.png" alt="1">
                                                                   <p class="title">BATHROOMS</p>
                                                                   <p class="count"><?php echo $objValue->totalBathRooms?></p>
                                                           </div>
                                                    </div>

                                                    <div class="center">
<!--                                                            <button id="callus"><i class="fa fa-phone" aria-hidden="true"></i> <span>call us<span></button> 
                                                            <button><i class="fa fa-envelope" aria-hidden="true"></i> Email</button>-->
                                                            <a href="<?php echo base_url('product-for-sale-detail/'.$objValue->id);?>">
                                                                <button><i class="fa fa-plus" aria-hidden="true"></i> More Info</button>
                                                            </a>

                                                    </div>
                                            </div>
					</div>
					</div>
                                    <?php 
                                        }}
                                        // store data for next page
                                        $this->session->set_userdata('all_p_villa_data', $arrSaleVillaDetails);
                                    ?>
				</div>
			</div>
		</div>
		</div>
	</section>
	<?php $this->load->view('footer/footer') ?>
</body>

</html>