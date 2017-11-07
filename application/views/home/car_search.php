<!DOCTYPE html>
<html>
	<head>
		<title>Car Search</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	 <?php $this->load->view('header/head'); ?>	
	</head>
	
	
	<body>
	<header>
		<?php $this->load->view('header/header'); ?>
		<div class="container-fluid page-title">
			<div class="row">
				<h1><?php echo $objCarDetail->carName?></h1>
			</div>
		</div>
	</header>
	<section class="slider-section">
		<div class="container-fluid">
			<div class="row">
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
				  <!-- Wrapper for slides -->
				  <div class="carousel-inner">
                                        <?php if(!empty($objCarDetail->banner)){ 
                                            $i = 0;foreach ($objCarDetail->banner as $key=>$value){$active = ($i==0) ? "active": "";?>
                                            <div class="item <?php echo $active;?>">
                                                <img src="<?php echo $this->IMAGE_URL.str_replace("..", "", $value->banner); ?>">
                                            </div>
                                        <?php $i++;}}else{?>
					<div class="item active">
					  <img src="<?php echo base_url(); ?>/assets/images/car-search/b1.PNG">
					</div>
                                        <?php }?>
				  </div>
				  <!-- Left and right controls -->
				  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
					<i class="fa fa-chevron-left" aria-hidden="true"></i>
					<span class="sr-only">Previous</span>
				  </a>
				  <a class="right carousel-control" href="#myCarousel" data-slide="next">
					<i class="fa fa-chevron-right" aria-hidden="true"></i>
					<span class="sr-only">Next</span>
				  </a>
				</div>
			</div>
		</div>
	</section>
	
	<section>
	    
		<div class="container-fluid">
			<div class="row">
				<div id="thumbnail-slider">
					<div class="inner">
						<ul>
                                                    <?php if(!empty($objCarDetail->banner)){foreach ($objCarDetail->banner as $key=>$value){?>
							<li>
                                                            <img width="218" height="218" src="<?php echo $this->IMAGE_URL.str_replace("..", "", $value->banner); ?>">
							</li>
                                                    <?php }}else{?>
							<li>
								<img width="218" height="218" src="<?php echo base_url(); ?>/assets/images/car-search/t1.jpg">
							</li>
                                                    <?php }?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<section class="cars search-detail">
		<div class="container-fluid main-container">
			<div class="row">
				<div class="container">
					<div class="info-section">
						<div class="info first">
							<img src="<?php echo base_url(); ?>/assets/images/car-search/icon/1.png" alt="1">
							<p class="title">PASSENGER</p>
							<p class="count"><?php echo $objCarDetail->numberOfPassengers?></p>
						</div>
						<div class="info second">
							<img src="<?php echo base_url(); ?>/assets/images/car-search/icon/2.png" alt="1">
							<p class="title">GPS</p>
							<p class="count"><?php echo ($objCarDetail->isGPS==1) ? "YES" : "NO";?></p>
						</div>
						<div class="info sixth">
							<img src="<?php echo base_url(); ?>/assets/images/car-search/icon/3.png" alt="1">
							<p class="title">AC</p>
							<p class="count"><?php echo ($objCarDetail->IsairConditioning==1) ? "YES" : "NO";?></p>
						</div>
						<div class="info fourth">
							<img src="<?php echo base_url(); ?>/assets/images/car-search/icon/4.png" alt="1">
							<p class="title">FUEL</p>
							<p class="count"><?php echo $objCarDetail->fuelType?></p>
						</div>
						<div class="info fifth">
							<img src="<?php echo base_url(); ?>/assets/images/car-search/icon/5.png" alt="1">
							<p class="title">GEARBOX</p>
							<p class="count"><?php echo $objCarDetail->GearboxType?></p>
						</div>
					</div>
					<div class="info-details">
						<div class="col-md-6">
							<ul class="first">
								<li>Location</li>
								<li>Address<span><?php echo $objCarDetail->addressCompany?></span></li>
							</ul>
							<ul>
								<li>Specification</li>
								<li>Power<span><?php echo $objCarDetail->power?></span></li>
								<li>Engine Size<span><?php echo $objCarDetail->engineSize?></span></li>
								<li>Gear Box<span><?php echo $objCarDetail->GearboxType?></span></li>
								<li>Maximum Speed<span><?php echo $objCarDetail->maxSpeed?></span></li>
								<li>Color<span><?php echo $objCarDetail->colour?></span></li>
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
								<li>Deductible<span><?php echo $this->arrCurrency[$objCarDetail->currencyId]." ".$objCarDetail->deductible?></span></li>
								<li>Included KM/Miles<span><?php echo $objCarDetail->includedKMperMilesLowSeason?></span></li>
								<li>Minimum Driving Experience In Months<span><?php echo $objCarDetail->driverExperience?></span></li>
								<li>Credit Card For Warranty<span><?php echo $objCarDetail->numberOfCreditCardsForWarranty?></span></li>
							</ul>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</section>
	<section class="summary">
		<div class="container">
			<div class="row">
                            <div class="col-md-12">
                                <div class="summary-title">
                                    <h5>Search Summary</h5><!--<a href="#">Modify</a>-->
                                </div>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Country</th>
                                            <th>State</th>
                                            <th>Car</th>
                                            <th>Duration</th>
                                            <th>Departure</th>
                                            <th>Return</th>
                                            <th>Delivery Location</th>
                                            <th>Drop Off Location</th>
                                            <th>PASSENGER (s)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><?php echo $postData['carCountryName'] ?></td>
                                            <td><?php echo $postData['carStateName'] ?></td>
                                            <td><?php echo $objCarDetail->carName?></td>
                                            <td><?php echo ($postData['days'] >= 5) ? $postData['days'] - 4 : $postData['days'];
echo ($postData['days'] >= 5) ? " days" : " hours" ?></td>
                                            <td id="depTimeTd"></td>
                                            <td id="arrTimeTd"></td>
                                            <td id="delLocTd"></td>
                                            <td id="arrLocTd"></td>
                                            <td><?php echo $postData['noOfPasenger']; ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-12 mb30">
                                <form action="<?php echo base_url('car-book/'.$objCarDetail->id.'/?'.$_SERVER['QUERY_STRING'])?>" id="carNext" name="carNext" method="post">
                                <div class="col-md-3">
                                    <select class="selectad" name="depTime" id="depTime">
                                        <option value="">Departure Time</option>
                                        <option value="1" >09:00</option>
                                        <option value="2" >09:15</option>
                                        <option value="3" >09:30</option>
                                        <option value="4" >09:45</option>
                                        <option value="5" >10:00</option>
                                        <option value="6" >10:15</option>
                                        <option value="7" >10:30</option
                                        <option value="8" >10:45</option>
                                        <option value="9" >11:00</option>
                                        <option value="10" >11:15</option>
                                        <option value="11" >11:30</option>
                                        <option value="12" >11:45</option>
                                        <option value="13" >12:00</option>
                                        <option value="14" >12:15</option>
                                        <option value="15" >12:30</option>
                                        <option value="16" >12:45</option>
                                        <option value="17" >13:00</option>
                                        <option value="18" >13:15</option>
                                        <option value="19" >13:30</option>
                                        <option value="20" >13:45</option>
                                        <option value="21" >14:00</option>
                                        <option value="22" >14:15</option>
                                        <option value="23" >14:30</option>
                                        <option value="24" >14:45</option>
                                        <option value="25" >15:00</option>
                                        <option value="26" >15:15</option>
                                        <option value="27" >15:30</option>
                                        <option value="28" >15:45</option>
                                        <option value="29" >16:00</option>
                                        <option value="30" >16:15</option>
                                        <option value="31" >16:30</option>
                                        <option value="32" >16:45</option>
                                        <option value="33" >17:00</option>
                                        <option value="34" >17:15</option>
                                        <option value="35" >17:30</option>
                                        <option value="36" >17:45</option>
                                        <option value="37" >18:00</option>
                                        <option value="38" >18:15</option>
                                        <option value="39" >18:30</option>
                                        <option value="40" >19:00</option>
                                        <option value="41" >19:15</option>
                                        <option value="42" >19:30</option>
                                        <option value="43" >19:45</option>
                                        <option value="44" >20:00</option>
                                        <option value="45" >20:15</option>
                                        <option value="46" >20:30</option>
                                        <option value="47" >20:45</option>
                                        <option value="48" >21:00</option>
                                        <option value="49" >21:15</option>
                                        <option value="50" >21:30</option>
                                        <option value="51" >21:45</option>
                                        <option value="52" >22:00</option>
                                        <option value="53" >22:15</option>
                                        <option value="54" >22:30</option>
                                        <option value="55" >22:45</option>
                                        <option value="56" >23:00</option>
                                        <option value="57" >23:15</option>
                                        <option value="58" >23:30</option>
                                        <option value="59" >23:45</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <select class="selectad" name="arrvTime" id="arrvTime">
                                        <option value="">Drop Off Time</option>
                                        <option value="1" >09:00</option>
                                        <option value="2" >09:15</option>
                                        <option value="3" >09:30</option>
                                        <option value="4" >09:45</option>
                                        <option value="5" >10:00</option>
                                        <option value="6" >10:15</option>
                                        <option value="7" >10:30</option
                                        <option value="8" >10:45</option>
                                        <option value="9" >11:00</option>
                                        <option value="10" >11:15</option>
                                        <option value="11" >11:30</option>
                                        <option value="12" >11:45</option>
                                        <option value="13" >12:00</option>
                                        <option value="14" >12:15</option>
                                        <option value="15" >12:30</option>
                                        <option value="16" >12:45</option>
                                        <option value="17" >13:00</option>
                                        <option value="18" >13:15</option>
                                        <option value="19" >13:30</option>
                                        <option value="20" >13:45</option>
                                        <option value="21" >14:00</option>
                                        <option value="22" >14:15</option>
                                        <option value="23" >14:30</option>
                                        <option value="24" >14:45</option>
                                        <option value="25" >15:00</option>
                                        <option value="26" >15:15</option>
                                        <option value="27" >15:30</option>
                                        <option value="28" >15:45</option>
                                        <option value="29" >16:00</option>
                                        <option value="30" >16:15</option>
                                        <option value="31" >16:30</option>
                                        <option value="32" >16:45</option>
                                        <option value="33" >17:00</option>
                                        <option value="34" >17:15</option>
                                        <option value="35" >17:30</option>
                                        <option value="36" >17:45</option>
                                        <option value="37" >18:00</option>
                                        <option value="38" >18:15</option>
                                        <option value="39" >18:30</option>
                                        <option value="40" >19:00</option>
                                        <option value="41" >19:15</option>
                                        <option value="42" >19:30</option>
                                        <option value="43" >19:45</option>
                                        <option value="44" >20:00</option>
                                        <option value="45" >20:15</option>
                                        <option value="46" >20:30</option>
                                        <option value="47" >20:45</option>
                                        <option value="48" >21:00</option>
                                        <option value="49" >21:15</option>
                                        <option value="50" >21:30</option>
                                        <option value="51" >21:45</option>
                                        <option value="52" >22:00</option>
                                        <option value="53" >22:15</option>
                                        <option value="54" >22:30</option>
                                        <option value="55" >22:45</option>
                                        <option value="56" >23:00</option>
                                        <option value="57" >23:15</option>
                                        <option value="58" >23:30</option>
                                        <option value="59" >23:45</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <select class="selectad" id="delAddr" name="delAddr">
                                        <option value="">Delivery Areas</option>
                                        <?php foreach ($arrCarCitiesDetail as $key => $value) {?>
                                            <option value="<?php echo $value->id ?>"><?php echo $value->cityName ?></option>
                                         <?php }?>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <select class="selectad" id="dropAddr" name="dropAddr">
                                        <option>Drop Off Areas</option>
                                        <?php foreach ($arrCarCitiesDetail as $key => $value) {?>
                                            <option value="<?php echo $value->id ?>"><?php echo $value->cityName ?></option>
                                        <?php }?>
                                    </select>
                                </div> 
                                </form>
                            </div>
                            <div class="col-md-12">
                                <div class="back-next">
                                    <a class="back" href="<?php echo base_url('car?'.$_SERVER['QUERY_STRING'])?>"><i class="fa fa-angle-left" aria-hidden="true"></i>Back to Search</a>
                                    <a class="next" id="nextCarPage" href="">Next<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
			</div>
		</div>
	</section>
            <script type="text/javascript">
                $(document).ready(function(){
                    $('body').on('change','#depTime',function(){
                        $('#depTimeTd').html($('#depTime option:selected').text())
                    })
                    $('body').on('change','#arrvTime',function(){
                        $('#arrTimeTd').html($('#arrvTime option:selected').text())
                    })
                    $('body').on('change','#delAddr',function(){
                        $('#delLocTd').html($('#delAddr option:selected').text())
                    })
                    $('body').on('change','#dropAddr',function(){
                        $('#arrLocTd').html($('#dropAddr option:selected').text())
                    })
                });
            </script>
	<?php $this->load->view('footer/footer') ?>
            
	</body>
</html>