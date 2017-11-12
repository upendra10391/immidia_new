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
<!--                    <div class="row">
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
                    </div>-->
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
                                <h3 class="total"><?php echo count($arrSaleaDetails) ?> RESULTS</h3>
                            </div>
                        </div>
                        <div class="row lg">
                            <div class="col-md-3"><p><img src="<?php echo base_url(); ?>assets/images/product-sale/i3.png">VILLA <span>(<?php echo count($arrSaleaDetails) ?>)</span></p></div>
                            <div class="col-md-3"><p><img src="<?php echo base_url(); ?>assets/images/product-sale/i4.png">YACHT <span>(0)</span></p></div>
                            <div class="col-md-3"><p><a href="<?php echo base_url('product-for-sale?p_c_s=29');?>"><img src="<?php echo base_url(); ?>assets/images/product-sale/i5.png">CAR <span>(<?php echo count($arrSaleaDetails) ?>)</span></a></p></div>
                            <div class="col-md-3"><p><img src="<?php echo base_url(); ?>assets/images/product-sale/i6.png">JET <span>(0)</span></p></div>
                        </div>
<!--                        <div class="row">
                            <div class="col-md-3 pull-right">
                                <select class="showall">
                                    <option>SHOW ALL</option>
                                    <option>Country 2</option>
                                    <option>Country 3</option>
                                    <option>Country 4</option>
                                </select></div>
                        </div>-->
                    </div>
		</div>
		<div class="container-fluid ">
			<div class="container searchresult">
				<div class="row">
                                    <?php 
                                    $arrSaleVillaDetails = array();
                                    if(!empty($arrSaleaDetails)){ 
                                        foreach($arrSaleaDetails as $key=>$objValue){
                                            $arrSaleVillaDetails[$objValue->id] = $objValue;
                                            if(!empty($_GET['p_c_s'])){
                                                $this->load->view('home/list_car_sale',array('objValue'=>$objValue));
                                            }else{
                                                $this->load->view('home/list_villa_sale',array('objValue'=>$objValue));
                                            }
                                            
                                        }     
                                    }
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