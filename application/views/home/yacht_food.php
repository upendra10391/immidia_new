<!DOCTYPE html>
<html>
	<head>
			<?php $this->load->view('header/head'); ?>
	</head>
	
	
	<body>
            <header>
		
		<?php $this->load->view('header/header'); ?>
		<div class="container-fluid book page-title ls">
			<div class="row">
				<h1>Food & Drinks</h1>
			</div>
		</div>
	</header>
	<section>
			<div class="black-color">
			<div class="container">
				<div class="row">
					<div class="your-choice clearfix">
						<h3>YOUR CHOICE</h3>
						<div class="col-md-6 ">
							<div class="form-group gborder">
								<div class="col-md-4 col-xs-4"><p class="title">Yacht</p></div>
								<div class="col-md-4 col-xs-4"><p class="value"><?= isset($this->yachtDetails->name) ? $this->yachtDetails->name : 'Not Found' ?></p></div>
								<div class="col-md-4 col-xs-4"><p class="distance"><?php 
										$value->currencyId ? $value->currencyId : "" ;	
											if($value->currencyId ==1)
											{
												echo "€";

											}
											else if($value->currencyId ==2)
											{
												echo "$";

											}
											else {

												echo "AED";
											}
										?> <?= isset($this->yachtFilterParams['yachtUpdatePrice']) ? $this->yachtFilterParams['yachtUpdatePrice'] : 0 ?>{inc.vat}</p></div>
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



							</div>
							
						</div>
						<div class="col-md-6 ">
							<div class="form-group gborder">
								<div class="col-md-4 col-xs-4"><p class="title">Delivery Price</p></div>
								<div class="col-md-4 col-xs-4"><p class="value"></p></div>
								<div class="col-md-4 col-xs-4"><p class="distance"><?php 
										$value->currencyId ? $value->currencyId : "" ;	
											if($value->currencyId ==1)
											{
												echo "€";

											}
											else if($value->currencyId ==2)
											{
												echo "$";

											}
											else {

												echo "AED";
											}
										?> <?=$this->yachtFilterParams['yachtDeliveryRate']?></p></div>
							</div>
							<div class="form-group gborder">
								<div class="col-md-4 col-xs-4"><p class="title">Drop Off Price</p></div>
								<div class="col-md-4 col-xs-4"><p class="value"></p></div>
								<div class="col-md-4 col-xs-4"><p class="distance"><?php 
										$value->currencyId ? $value->currencyId : "" ;	
											if($value->currencyId ==1)
											{
												echo "€";

											}
											else if($value->currencyId ==2)
											{
												echo "$";

											}
											else {

												echo "AED";
											}
										?> <?=$this->yachtFilterParams['yachtDropOff']?></p></div>
							</div>
							<div class="form-group gborder">
								<div class="col-md-4 col-xs-4"><p class="title">Formula</p></div>
								<div class="col-md-4 col-xs-4"><p class="value"><?=$this->yachtFilterParams['yachtFormula']?></p></div>
								<div class="col-md-4 col-xs-4"><p class="distance"><?php 
										$value->currencyId ? $value->currencyId : "" ;	
											if($value->currencyId ==1)
											{
												echo "€";

											}
											else if($value->currencyId ==2)
											{
												echo "$";

											}
											else {

												echo "AED";
											}
										?> <?= $this->yachtFilterParams['yachtFormulaPrice'] ?></p></div>
							</div>
							<div class="form-group gborder">
								<div class="col-md-4 col-xs-4"><p class="title">Extra Time ?</p></div>
								<div class="col-md-4 col-xs-4"><p class="value"></p></div>
								<div class="col-md-4 col-xs-4"><p class="distance"><?php 
										$value->currencyId ? $value->currencyId : "" ;	
											if($value->currencyId ==1)
											{
												echo "€";

											}
											else if($value->currencyId ==2)
											{
												echo "$";

											}
											else {

												echo "AED";
											}
										?> <?=$this->yachtFilterParams['yachtExtraTime']?></p></div>
							</div>
							<div class="form-group gborder">
								<div class="col-md-4 col-xs-4"><p class="title">Total</p></div>
								<div class="col-md-4 col-xs-4"><p class="value"></p></div>
								<div class="col-md-4 col-xs-4"><p class="distance"><b ><?php 
										$value->currencyId ? $value->currencyId : "" ;	
											if($value->currencyId ==1)
											{
												echo "€";

											}
											else if($value->currencyId ==2)
											{
												echo "$";

											}
											else {

												echo "AED";
											}
										?> <span id="yachtSubTotal"><?=$this->yachtFilterParams['yachtSubTotal']?></span></b></p></div>
							</div>
						</div>			
					</div> 
					
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				
				<div class="food-drink">
					<h3>Food & DRINK</h3>
					<div class="panel-group">

					<?php  foreach($this->yachtFood as $key=>$value){ ?>


						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" href="#collapse<?=$key?>">(<?=$value->categoryName?>) <i class="fa fa-angle-down" aria-hidden="true"></i></a>
								</h4>
							</div>
							<div id="collapse<?=$key?>" class="panel-collapse collapse">
								<div class="panel-body">
									<div class="row fdtitle">
										<div class="col-md-4 col-xs-4"><p class="name">Name</p></div> 
										<div class="col-md-4 col-xs-4"><p class="price">Price</p></div> 
										<div class="col-md-4 col-xs-4"><p class="quantity">Quantity</p></div>
									</div>

									<?php


									 foreach($value->FoodItems as $key=>$foodValue){  ?>

									<div class="fditems">
										<div class="row fditem clearfix">
											<div class="col-md-4 col-xs-4"><p class="name"><?=$foodValue->itemName ?></p></div> 
											<div class="col-md-4 col-xs-4"><p class="price"><?php 
										$value->currencyId ? $value->currencyId : "" ;	
											if($value->currencyId ==1)
											{
												echo "€";

											}
											else if($value->currencyId ==2)
											{
												echo "$";

											}
											else {

												echo "AED";
											}
										?> <?=$foodValue->amount ?></p></div> 
											<div class="col-md-4 col-xs-4">
												<select class="" id="qty" onchange="addToCart('<?=$foodValue->id ?>','<?=$foodValue->itemName ?>' ,'<?=$foodValue->amount ?>' , this.value,'<?=$this->yachtFilterParams["yachtSubTotal"]?>','addItems')">
													<option>select</option>
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="5">5</option>
													<option value="6">6</option>
													<option value="7">7</option>
													<option value="8">8</option>
													<option value="9">9</option>
													<option value="10">10</option>
												</select>
											</div>
										</div>

									</div>

								<?php } ?>

									

								</div>
							</div>
						</div>
						
						<?php } ?>
					
					</div> 
				<div class="bnbutton">
				<form action="<?=base_url()?>yacht_payment/<?=str_replace(" ", '_',$this->yachtDetails->name)?>" method="post">
					<button class="bbutton"  onclick="goBack()"><i class="fa fa-angle-left" aria-hidden="true"></i> BACK</button>
						<input type="hidden" name="yachtFoodPrice" id="yachtFoodPrice" /> 
						<input type="hidden" name="yachtFoodPriceWithPrice" id="yachtFoodPriceWithPrice" /> 
					<button type="submit" class="nbutton" >NEXT <i class="fa fa-angle-right" aria-hidden="true"></i></button>
				</form>
				
				</div>
				</div>
				
				
			
			</div>
		
		</div>
		
	</section>
	<?php $this->load->view('footer/footer') ?>
</body>

</html>