<!DOCTYPE html>
<html>
	<head>
		<title>Payment</title>
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
					<div class="item active">
					 <?php if(isset($this->yachtDetails->banner[0])){ ?>
								<img style="width:100%;height: 500px;" src="<?=	$this->IMAGE_URL.substr($this->yachtDetails->banner[0]->banner,2)?>">
								<?php } ?>
					</div>

					<div class="item">
					  <?php if(isset($this->yachtDetails->banner[1])){ ?>
								<img style="width:100%;height: 500px;" src="<?=	$this->IMAGE_URL.substr($this->yachtDetails->banner[1]->banner,2)?>">
								<?php } ?>
					</div>

					<div class="item">
						<?php if(isset($this->yachtDetails->banner[2])){ ?>
								<img style="width:100%;height: 500px;"  src="<?=	$this->IMAGE_URL.substr($this->yachtDetails->banner[2]->banner,2)?>">
								<?php } ?>
					</div>
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
								<div class="col-md-4 col-xs-4"><p class="title">Yacht</p></div>
								<div class="col-md-4 col-xs-4"><p class="value"><?= isset($this->yachtDetails->name) ? $this->yachtDetails->name : 'Not Found' ?></p></div>
								<div class="col-md-4 col-xs-4"><p class="distance">€ <?= isset($this->yachtFilterParams['yachtUpdatePrice']) ? $this->yachtFilterParams['yachtUpdatePrice'] : 0 ?>{inc.vat}</p></div>
							</div>
							<div class="form-group gborder">
								<div class="col-md-4 col-xs-4"><p class="title">Delivery port</p></div>
								<div class="col-md-4 col-xs-4"><p class="value"><?= isset($this->yachtFilterParams['yachtDepartureCityName']) ? $this->yachtFilterParams['yachtDepartureCityName'] : 'Not Found' ?></p></div>
								<div class="col-md-4 col-xs-4"><p class="distance"></p></div>
							</div>
							<div class="form-group gborder">
								<div class="col-md-4 col-xs-4"><p class="title">Arrival Port</p></div>
								<div class="col-md-4 col-xs-4"><p class="value"><?= isset($this->yachtFilterParams['yachtArrivalCityName']) ? $this->yachtFilterParams['yachtArrivalCityName'] : 'Not Found' ?></p></div>
								<div class="col-md-4 col-xs-4"><p class="distance"></p></div>
							</div>
							<div class="form-group gborder">
								<div class="col-md-4 col-xs-4"><p class="title">Departure Date</p></div>
								<div class="col-md-4 col-xs-4"><p class="value"><?= isset($this->yachtFilterParams['departureDate']) ? $this->yachtFilterParams['departureDate'] : 'Not Found' ?></p></div>
								<div class="col-md-4 col-xs-4"><p class="distance"></p></div>
							</div>
							<div class="form-group gborder">
								<div class="col-md-4 col-xs-4"><p class="title">Arrival Date</p></div>
								<div class="col-md-4 col-xs-4"><p class="value">
										
										<?php  if($this->yachtFilterParams['yachtDays'] >= 5){ ?>

										<?= isset($this->yachtFilterParams['arrivalDate']) ? $this->yachtFilterParams['arrivalDate'] : 'Not Found' ?>


										<?php }else{ ?>

										<?= isset($this->yachtFilterParams['departureDate']) ? $this->yachtFilterParams['departureDate'] : 'Not Found' ?>

										<?php }?>
								</p></div>
								<div class="col-md-4 col-xs-4"><p class="distance"></p></div>

								<div class="form-group fborder">
							<div class="col-md-12 col-xs-12"><p class="title">Food And Beverage</p></div>
								<div class="col-md-10 col-xs-10" id="addItems">
									
									Cart is Empty
									
								</div>
							</div>
							<script type="text/javascript">
							var	yachtFoodHTML = '';
							function getFoodItems(){
								$('#addItems').html('');
							if(window.localStorage.getItem('yachtFood') != null){
								 var yachtUniqueFoodItem = JSON.parse(window.localStorage.getItem('yachtFood'));

								  $.each(yachtUniqueFoodItem, function (index, value) {
								 yachtFoodHTML += '<p class="fitem">'+
							            '<span class="iname">'+value.itemName+'</span>'+
							            '<span class="iqut">'+value.qty+'</span>'+
							            '<span class="iprice">€ '+value.amount+'</span>'+
							            '<span class="idelete"><i class="fa fa-trash-o" aria-hidden="true"></i></span>'+
							        '</p>';

							    });

							        $('#addItems').append(yachtFoodHTML);
							    }

							}

							getFoodItems();
							</script>


							</div>
							
						</div>
						<div class="col-md-6 ">
							<div class="form-group gborder">
								<div class="col-md-4 col-xs-4"><p class="title">Departure Rate</p></div>
								<div class="col-md-4 col-xs-4"><p class="value"></p></div>
								<div class="col-md-4 col-xs-4"><p class="distance">€ <?=$this->yachtFilterParams['yachtDeliveryRate']?></p></div>
							</div>
							<div class="form-group gborder">
								<div class="col-md-4 col-xs-4"><p class="title">Drop Off Rate</p></div>
								<div class="col-md-4 col-xs-4"><p class="value"></p></div>
								<div class="col-md-4 col-xs-4"><p class="distance">€ <?=$this->yachtFilterParams['yachtDropOff']?></p></div>
							</div>
							<div class="form-group gborder">
								<div class="col-md-4 col-xs-4"><p class="title">Formula</p></div>
								<div class="col-md-4 col-xs-4"><p class="value"><?=$this->yachtFilterParams['yachtFormula']?></p></div>
								<div class="col-md-4 col-xs-4"><p class="distance">€ <?= $this->yachtFilterParams['yachtFormulaPrice'] ?></p></div>
							</div>
							<div class="form-group gborder">
								<div class="col-md-4 col-xs-4"><p class="title">Extra Time ?</p></div>
								<div class="col-md-4 col-xs-4"><p class="value"></p></div>
								<div class="col-md-4 col-xs-4"><p class="distance">€ <?=$this->yachtFilterParams['yachtExtraTime']?></p></div>
							</div>
							<div class="form-group gborder">
								<div class="col-md-4 col-xs-4"><p class="title">Total</p></div>
								<div class="col-md-4 col-xs-4"><p class="value"></p></div>
								<div class="col-md-4 col-xs-4"><p class="distance"><b >€ <span id="yachtSubTotal"><?=$this->yachtFilterParams['yachtFoodPriceWithPrice']?></span></b></p></div>
							</div>

									<div class="col-md-12 clearfix ">
									<div class="checkbox checkbox-inline">
		                        <input type="checkbox" id="inlineCheckbox2" value="option2">
		                        <label for="inlineCheckbox2" class="title"> I ACCEPT THE CONTRACT TERMS & CONDITIONS </label>
								<p class="rlink"><a href="contract.html" target="_black" >Click</a> To Read The Cotract</p>
		                    </div>
								</div>
								<div class="col-md-12 center clearfix">
								<button class="payment">MAKE Payment</button>
								</div>
						</div>			
					</div> 





					
				</div>
			</div>
		</div>
		
		
	</section>
	<?php $this->load->view('footer/footer') ?>
</body>

</html>
