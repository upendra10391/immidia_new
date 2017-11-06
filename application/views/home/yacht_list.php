

<!DOCTYPE html>
<html>
	<head>
 		<?php $this->load->view('header/head'); ?>
	</head>
	
	<header>
		<?php $this->load->view('header/header');?>
				<div class="container-fluid book-tab">
			<div class="row">
				<div class="tabbable-line hide">
					<ul class="nav nav-tabs ">
						<li class="option-tab">
							<a href="#tab_default_1" data-toggle="tab">
							<img class="img-responsive" src="<?=base_url()?>/assets/images/1.png"/> </a>
						</li>
						<li class="option-tab">
							<a href="#tab_default_2" data-toggle="tab">
							<img class="img-responsive" src="<?=base_url()?>/assets/images/2.png"/> </a>
						</li>
						<li class="option-tab">
							<a href="#tab_default_3" data-toggle="tab">
							<img class="img-responsive" src="<?=base_url()?>/assets/images/3.png"/> </a>
						</li>
						<li class="option-tab">
							<a href="#tab_default_4" data-toggle="tab">
							<img class="img-responsive" src="<?=base_url()?>/assets/images/4.png"/> </a>
						</li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane active" id="tab_default_1">
							  <?php $this->load->view('home/yacht_filter'); ?>
						</div>
						<div class="tab-pane" id="tab_default_2">
							2
						</div>
						<div class="tab-pane" id="tab_default_3">
							3
						</div>
						<div class="tab-pane" id="tab_default_4">
							4
						</div>
					</div>
				</div>
			</div>
		</div>
	
		<div class="container-fluid page-title">
			<div class="row">
				<h1>Search Result</h1>
			</div>
		</div>
	</header>
	
	<body>
		<div class="container">
			<div class="row">
				<div class="breadcrumb">
					<ul>
						<li>Search</li>
						<li>Select Yacht</li>
						<li>Yacht Details</li>
						<li>Payment</li>
						<li>Confirmation</li>
					</ul>
				</div>
			</div>
			<div class="col-md-12 search-result">
				<div class="summary-title">
					<h5>Search Summary</h5><a href="#" id="modify">Modify</a>
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
		</div>
		<div class="container avaibility">
			<div class="row">
				<div class="col-md-12 avialable-title">
					<h3>11 Yacht(s) avialable from <?=$this->yachtFilterParams['yachtDepartureCityName']?>  on <?=$this->yachtFilterParams['departureDate']?></h3>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
				<p><b>PRICE</b></p>
<div id="range_03" class="irs-hidden-input"></div>
                              
									<link href="<?= base_url() ?>/assets/slider/ion.rangeSlider.css" rel="stylesheet">
    <link href="<?= base_url() ?>/assets/slider/ion.rangeSlider.skinModern.css" rel="stylesheet">
    
    <script src="<?= base_url() ?>/assets/slider/ion.rangeSlider.min.js"></script>
    <script src="<?= base_url() ?>/assets/slider/ion.rangeSlider-init.js"></script>
									</div>
				<div class="col-md-4"></div><div class="col-md-4">
					<div class="sorting">
						<p>Sort By</p>
						<select class="sort-dropdown">
							<img src="<?=base_url()?>/assets/images/country-code.png">
							<option>High to Low</option>
							<option>Low to High</option>
							<!-- <option>Popular</option> -->
						</select>
					</div>
				</div>
			</div>
		</div>
		
		<?php 

		//print_r($this->yachtList);

		foreach ($this->yachtList as $key => $value) { 


			?>
		

		<div class="container-fluid result-list">
			<div class="row">
				<div class="col-md-4">
					<div class="list-inner">
						<img class="img-responsive" style="height:465px;" src="<?=$this->IMAGE_URL.substr($value->banner[0]->banner,2)?>">

						<div class="list-detail">
							<h2><?=$value->name ?></h2>

							<?php 
							if(isset($value->price))
							{
								$_SESSION['yachtFilterParams']['yachtUpdatePrice'] = $value->price *  $this->yachtFilterParams['yachtDaysDiff'];	
							}

							?>

							<ul>
								<li>€ <?= isset($value->price) ?  $value->price *  $this->yachtFilterParams['yachtDaysDiff'] : 0 ?></li>
								<li>Guest <?= isset($value->numberOfGuests) ? $value->numberOfGuests : 0 ?></li>
								<li>Cabin <?= isset($value->cabins) ?  $value->cabins : 0?></li>
								<li>Speed <?=isset($value->speed) ? $value->speed : 0?></li>
							</ul>
						</div>
						<div class="hover-detail" >
							<h1><?=$value->name ?></h1>
							<ul>
								<li>€ <?= isset($value->price) ?  $value->price *  $this->yachtFilterParams['yachtDaysDiff'] : 0 ?></li>
								<li>Guest <?= isset($value->numberOfGuests) ? $value->numberOfGuests : 0 ?></li>
								<li>Cabin <?= isset($value->cabins) ?  $value->cabins : 0?></li>
								<li>Speed <?=isset($value->speed) ? $value->speed : 0?></li>
							</ul>
							<a href="yachts_details/<?=$value->id.'/'.str_replace(" ", '_', $value->name)?>">Book Now</a>
						</div>
					</div>
				</div>

				<?php }  ?>

			
			</div>
		</div>
	</body>
	
	
	<?php $this->load->view('footer/footer') ?>

</html>