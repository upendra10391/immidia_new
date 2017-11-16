<!DOCTYPE html>
<html>
	<head>
		<title>Search</title>
		    <?php $this->load->view('header/head'); ?>

		
	</head>
	
	<header>
			<?php $this->load->view('header/header');?>
		
		<div class="container-fluid page-title">
			<div class="row">
				<h1><?=$this->yachtDetails->name?></h1>
			</div>
		</div>
	</header>
	<body >

	<section class="slider-section">
		<div class="container-fluid">
			<div class="row">
				<div id="myCarousel" class="carousel slide" data-ride="carousel">

				  <!-- Wrapper for slides -->
				  <div class="carousel-inner">
					<div class="item active">
					  <img class="ban_large" src="<?=	$this->IMAGE_URL.substr($this->yachtDetails->banner[0]->banner,2)?>">
					</div>

					<div class="item">
					  <img  class="ban_large"  src="<?=	$this->IMAGE_URL.substr($this->yachtDetails->banner[1]->banner,2)?>">
					</div>

					<div class="item">
					  <img class="ban_large"  src="<?=	$this->IMAGE_URL.substr($this->yachtDetails->banner[2]->banner,2)?>">
					</div>
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
							<li>
					<?php if(isset($this->yachtDetails->banner[0])){ ?>

								<img class="ban" src="<?=	$this->IMAGE_URL.substr($this->yachtDetails->banner[0]->banner,2)?>">
						<?php } ?>
							</li>
							<li>
							<?php if(isset($this->yachtDetails->banner[1])){ ?>
								<img class="ban" src="<?=	$this->IMAGE_URL.substr($this->yachtDetails->banner[1]->banner,2)?>">
								<?php } ?>
							</li>
							<li>
							<?php if(isset($this->yachtDetails->banner[2])){ ?>
								<img class="ban" src="<?=	$this->IMAGE_URL.substr($this->yachtDetails->banner[2]->banner,2)?>">
								<?php } ?>
							</li>
							<li>
							<?php if(isset($this->yachtDetails->banner[3])){ ?>
								<img class="ban"  src="<?=	$this->IMAGE_URL.substr($this->yachtDetails->banner[3]->banner,2)?>">
								<?php } ?>
							</li>
							<li>
							<?php if(isset($this->yachtDetails->banner[4])){ ?>
								<img class="ban" src="<?=	$this->IMAGE_URL.substr($this->yachtDetails->banner[4]->banner,2)?>">
								<?php } ?>
							</li>
							<li>
							<?php if(isset($this->yachtDetails->banner[5])){ ?>
								<img class="ban" src="<?=	$this->IMAGE_URL.substr($this->yachtDetails->banner[5]->banner,2)?>">
								<?php } ?>
							</li>
							<li>
							<?php if(isset($this->yachtDetails->banner[6])){ ?>
								<img class="ban" src="<?=	$this->IMAGE_URL.substr($this->yachtDetails->banner[6]->banner,2)?>">
								<?php } ?>
							</li>
							<li>
							<?php if(isset($this->yachtDetails->banner[7])){ ?>
								<img class="ban" src="<?=	$this->IMAGE_URL.substr($this->yachtDetails->banner[7]->banner,2)?>">
								<?php } ?>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<section class="search-detail">
		<div class="container-fluid main-container">
			<div class="row">
				<div class="container">
					<div class="info-section">
						<div class="info first">
							<img src="<?=base_url()?>/assets/images/search1.png" alt="1">
							<p class="title">Guest</p>
							<p class="count"><?=$this->yachtDetails->numberOfGuests?></p>
						</div>
						<div class="info second">
							<img src="<?=base_url()?>/assets/images/search2.png" alt="1">
							<p class="title">Guest Sleeping</p>
							<p class="count"><?=$this->yachtDetails->guestSleeping?></p>
						</div>
						<div class="info sixth">
							<img src="<?=base_url()?>/assets/images/search3.png" alt="1">
							<p class="title">Cabins</p>
							<p class="count"><?=$this->yachtDetails->cabins?></p>
						</div>
						<div class="info fourth">
							<img src="<?=base_url()?>/assets/images/search4.png" alt="1">
							<p class="title">Speed</p>
							<p class="count"><?=$this->yachtDetails->speed?></p>
						</div>
						<div class="info fifth">
							<img src="<?=base_url()?>/assets/images/search5.png" alt="1">
							<p class="title">Length</p>
							<p class="count"><?=$this->yachtDetails->length?></p>
						</div>
					</div>
					<div class="info-details">
						<div class="col-md-6">
							<ul class="first">
								<li>Location</li>
								<li>Port of Registry<span><?=$this->yachtDetails->portOfRegistry?></span></li>
							</ul>
							<ul>
								<li>Specification</li>
								<li>Length<span><?=$this->yachtDetails->length?> Meters</span></li>
								<li>Beam<span><?=$this->yachtDetails->beamUnit?> Meters</span></li>
								<li>Draft<span><?=$this->yachtDetails->draft?> Meters</span></li>
								<li>Number Of Crew<span><?=$this->yachtDetails->numberOfCrew?></span></li>
								<li>Built Year<span><?=$this->yachtDetails->builtYear?></span></li>
								<li>Builder<span><?=$this->yachtDetails->builder?></span></li>
								<li>Flag<span><?=$this->yachtDetails->countryName?></span></li>
								<li>Hull Construction<span><?=$this->yachtDetails->hullConstruction?></span></li>
								<li>Air Conditioning<span><?=$this->yachtDetails->isAirConditioning == 1 ? "YES" : "NO" ?></span></li>
								<li>Hull Configuration<span><?=$this->yachtDetails->hullConfiguration?></span></li>
							</ul>
							<div class="download-section">
								<div class="brochure">
									<img src="<?=base_url()?>/assets/images/search6.png"><a class="left" href="#">Download PDF Brochure</a>
								</div>
								<div class="email">
									<img src="<?=base_url()?>/assets/images/search7.png"><a class="right" href="#">Email PDF Brochure</a>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<ul class="second">
								<li>Equipment</li>
								<li>Engine<span><?=$this->yachtDetails->hullConfiguration?></span></li>
								<li>Cruising Speed<span><?=$this->yachtDetails->speed?></span></li>
								<li>Fuel Consumtion<span><?=$this->yachtDetails->fuelConsumption?> L/Hour</span></li>
								<li>Number Of Crew<span><?=$this->yachtDetails->numberOfCrew?></span></li>
							</ul>
							
						     <ul>
								<li>Accomodation</li>
								<li>Number of Cabins<span><?=$this->yachtDetails->cabins?></span></li>
								<li>Cabin Configuration<span> <?=$this->yachtDetails->cabinConfiguration?></span></li>
								<li>Bed Configuration<span><?=$this->yachtDetails->bedConfigurtion?></span></li>
								<li>Number Of Guests<span><?=$this->yachtDetails->numberOfGuests ?></span></li>
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
						<h5>Search Summary</h5>
                                                <a href="#">Modify</a>
					</div>
					<div class="table-responsive summary-result">
						<table class="table">
							<thead>
							  <tr>
								<th>Country</th>
								<th>State</th>
								<th>Vehicle</th>
								<th>Duration</th>
								<th>Depart</th>
								<th>Return</th>
								<th>Departure Port</th>
								<th>Arrival Port</th>
								<th>Guest (s)</th>
							  </tr>
							</thead>
							<tbody>
								<tr>
								<td><?=$this->yachtFilterParams['yachtCountryName']?></td>
								<td><?=$this->yachtFilterParams['yachtStateName']?></td>
								<td>
										<?php 

											if($this->yachtFilterParams['yachtType'] == 0){
												echo "SAIL";
											}else if($this->yachtFilterParams['yachtType'] == 1){
												echo "MOTOR";
											}else{
												echo "SUPER YAHCT";
											}

										?>

								</td>
								<td>
								<?php 
								foreach ($this->daysArrayInit as $key => $value) {
											if($value['id'] == $this->yachtFilterParams['yachtDays']){
												echo $value['name'];
											}
									
								}
								 ?>
							    </td>
								<td><?=$this->yachtFilterParams['departureDate']?></td>
								<td><?php 
									if(isset($this->yachtFilterParams['arrivalDate'])){
										echo $this->yachtFilterParams['arrivalDate'];
									}else{
										echo $this->yachtFilterParams['departureDate'];
									}

								 ?></td>
								<td><?=$this->yachtFilterParams['yachtDepartureCityName']?></td>
								<td><?=$this->yachtFilterParams['yachtArrivalCityName']?></td>
								<td><?=$this->yachtFilterParams['guest']?></td>
							</tr>
							</tbody>
						</table>
					</div>
				</div>
			<form action="<?=base_url()?>yacht_limo/<?=str_replace(" ", '_',$this->yachtDetails->name)?>" method="post">
				 <div class="col-md-12">
					<select name="departureHour" class="trip yacht_filter" id="departureHour" onchange="">
					<option value="">Departure Hour</option>
       				<?php 
       			
       				foreach ($this->allTime as $key => $value){ 

   							if($this->yachtFilterParams['yachtDays'] == 1){ ?>
   							<option value="<?=$value->id?>"
   							<?= ($value->id == 1) ? 'selected' : '' ?>	
   							><?=$value->time?></option>
   							<?php }else if($this->yachtFilterParams['yachtDays'] == 2){ ?>
   							<option value="<?=$value->id?>"
   							<?= ($value->id == 21) ? 'selected' : '' ?>	
   							><?=$value->time?></option>
   							<?php }else if($this->yachtFilterParams['yachtDays'] == 3){ ?>
   							<option value="<?=$value->id?>"
   							<?= ($value->id == 13) ? 'selected' : '' ?>	
   							><?=$value->time?></option>
   							<?php }else if($this->yachtFilterParams['yachtDays'] == 4){ ?>
   							<option value="<?=$value->id?>"
   							<?= ($value->id == 1) ? 'selected' : '' ?>
   							><?=$value->time?></option>
   						<?php 	}else{ ?>
   							<option value="<?=$value->id?>"
   							<?= ($value->id == 40) ? 'selected' : '' ?>
   							><?=$value->time?></option>
   						<?php }	
				
   						}	
       					?> 
	
               		   </select>

               		   <select name="arrivalHour" class="trip yacht_filter" id="arrivalHour" onchange="">
						<option value="">Arrival Hour</option>

           				<?php foreach ($this->allTime as $key => $value){ 

   							if($this->yachtFilterParams['yachtDays'] == 1){ ?>
   							<option value="<?=$value->id?>"
   							<?= ($value->id == 17) ? 'selected' : '' ?>	
   							><?=$value->time?></option>
   							<?php }else if($this->yachtFilterParams['yachtDays'] == 2){ ?>
   							<option value="<?=$value->id?>"
   							<?= ($value->id == 37) ? 'selected' : '' ?>	
   							><?=$value->time?></option>
   							<?php }else if($this->yachtFilterParams['yachtDays'] == 3){ ?>
   							<option value="<?=$value->id?>"
   							<?= ($value->id == 13) ? 'selected' : '' ?>	
   							><?=$value->time?></option>
   							<?php }else if($this->yachtFilterParams['yachtDays'] == 4){ ?>
   							<option value="<?=$value->id?>"
   							<?= ($value->id == 40) ? 'selected' : '' ?>
   							><?=$value->time?></option>
   						<?php 	}else{ ?>
   							<option value="<?=$value->id?>"
   							<?= ($value->id == 40) ? 'selected' : '' ?>
   							><?=$value->time?></option>
   						<?php }	
				
   						}	
       					?> 		                   					
               		   </select>
               		   <br/>
               		   <br/>
				</div>


				<div class="col-md-12">
					<div class="back-next">
						<a class="back" href="javascript:void(0)" onclick="goBack()"><i class="fa fa-angle-left" aria-hidden="true"></i>Back to Search</a>
						<?php if($this->yachtFilterParams['yachtType'] == 2){ ?>
						<a href="javascript:void(0)" onclick="isLogin('<?=isset($_SESSION['user_login']) ? 1 : 0 ?>');" 
						<?php if(isset($_SESSION['user_login'])){ ?>
						 data-toggle="modal" data-target="#myModal" 
						 <?php } ?>

						  class="next" style="border: none;">Submit Query<i class="fa fa-angle-right" aria-hidden="true"></i></a>
						<?php }else{ ?>
						<button type="submit" class="next" style="border: none;">Next<i class="fa fa-angle-right" aria-hidden="true"></i></button>
						<?php } ?>
					</div>
				</div>
			  </form>
			</div>
		</div>
	</section>
	<script type="text/javascript">
			
	</script>
		
	<?php $this->load->view('footer/footer') ?>
	</body>
</html>


	<!---------popup---------->
							<div id="myModal" class="modal fade" role="dialog">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4 class="modal-title">Super Yacht Information</h4>
										</div>
										<div class="modal-body">
											<h5>Yacht Booking</h5>
											<p class="">country<span><?=$this->yachtFilterParams['yachtCountryName']?></span></p>
											<p class="">State<span><?=$this->yachtFilterParams['yachtStateName']?>	</span></p>
											<p class="">Vehicle<span>
												<?php 
												if($this->yachtFilterParams['yachtType'] == 0){
													echo "SAIL" ;
												}else if($this->yachtFilterParams['yachtType'] == 1){
													echo "MOTOR" ;
												}else{
													echo "SUPER YACHT";
												}
												?>
											</span></p>
											<p class="">Duration<span><?php 
								foreach ($this->daysArrayInit as $key => $value) {
											if($value['id'] == $this->yachtFilterParams['yachtDays']){
												echo $value['name'];
											}
									
								}
								 ?></span></p>
											<p class="">Depart<span><?=$this->yachtFilterParams['departureDate']?></span></p>


											<p class="">Return<span><?php 
									if(isset($this->yachtFilterParams['arrivalDate'])){
										echo $this->yachtFilterParams['arrivalDate'];
									}else{
										echo $this->yachtFilterParams['departureDate'];
									}

								 ?>	</span></p>
											<p class="">Departure Port<span><?=$this->yachtFilterParams['yachtDepartureCityName']?></span></p>
											<p class="">Arrival Port<span><?=$this->yachtFilterParams['yachtArrivalCityName']?></span></p>
											<p class="">Guest (s)<span><?=$this->yachtFilterParams['guest']?></span></p>
											<br/>
											<h5>Yacht Booking</h5>
											<div class="row">
												
												<div class="col-md-6">
													<p class="">Customer Name<span><?=$_SESSION['user_login']->firstName .' ' . $_SESSION['user_login']->lastName?></span></p>
													<p class="">Email<span><?=$_SESSION['user_login']->mailId?></span></p>
													<p class="">Contact<span><?=$_SESSION['user_login']->contactNumber?></span></p>
												</div>
												<div class="col-md-6">
												<form action="<?=base_url()?>super_yacht"  method="post">
													<div class="form-group">
														<textarea name="msg" class="form-control" rows="2" id="comment"></textarea>
													</div>
													<input type="submit" class="submit" name="submit" value="Send Query" />
												</div>
											</div>
							
										</div>

									</div>
								</div>
							</div>
							<!------------------->