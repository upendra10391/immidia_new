
<!DOCTYPE html>
<html>
	<head>
		<title>Choose Vehicle</title>
			 <?php $this->load->view('header/head'); ?>

		
	</head>
	
	<header>
	<?php $this->load->view('header/header'); ?>
		
		<div class="container-fluid book page-title page-title2">
			<div class="row">
				<h1>CUSTOMER INFORMATION</h1>
			</div>
		</div>
	</header>
	<body class="choosevechicle">
	<section class="ride-detail">
		<div class="container-fluid brown-color">
			<div class="container">
			<div class="row">
				
					<div class="col-md-12 ride-title">
						<h1>Choose Vehicle</h1>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="breadcrumb">
					<ul>
						<li>RIDE DETAILS</li>
						<li>YOUR BOOKING</li>
						<li>CONTACT INFORMATION</li>
						<li>PAYMENT INFORMATION</li>
					</ul>
				</div>
			</div>
		</div>

		<div class="container">

		

			<div class="row" >	
			<?php  if($this->chauffeurListing->isClass_E == 1){  ?>	
				<div class="col-md-6">
					<div class="car-box" onclick="selectType('E')">
						<div class="row">
							<div class="col-md-3 col-xs-3">
								<h4>CLASS E</h4>
								<h2><?=$this->chauffeurListing->currency?><?=$this->chauffeurListing->classEPrice?></h2>
								<div class="ic"><img src="<?=base_url()?>/assets/images//choose-vehicle/i1.png" class=""> 3 <img src="<?=base_url()?>/assets/images//choose-vehicle/i2.png" class=""> 3 </div>
							</div>
							<div class="col-md-9 col-xs-9">
								<img src="<?=base_url()?>/assets/images//choose-vehicle/1.png" class="img-responsive">
							</div>
						</div>
					</div>
				</div>
				<?php } ?>
				<?php  if($this->chauffeurListing->isClass_V == 1){  ?>	
				<div class="col-md-6">
				    <div class="car-box" onclick="selectType('V')">
						<div class="row">
							<div class="col-md-3 col-xs-3">
								<h4>CLASS V</h4>
								<h2><?=$this->chauffeurListing->currency?><?=$this->chauffeurListing->classVPrice?></h2>
								<div class="ic"><img src="<?=base_url()?>/assets/images//choose-vehicle/i1.png" class=""> 4 <img src="<?=base_url()?>/assets/images//choose-vehicle/i2.png" class=""> 4 </div>
							</div>
							<div class="col-md-9 col-xs-9">
								<img src="<?=base_url()?>/assets/images//choose-vehicle/2.png" class="img-responsive">
							</div>
						</div>
					</div>
				</div>
				<?php } ?>
			</div>

			

			<div class="row">	

			 <?php  if($this->chauffeurListing->isClass_S == 1){  ?>	
				<div class="col-md-6">
					<div class="car-box" onclick="selectType('S')">
						<div class="row">	
							<div class="col-md-3 col-xs-3">
								<h4>CLASS S</h4>
								<h2><?=$this->chauffeurListing->currency?><?=$this->chauffeurListing->classSPrice?></h2>
								<div class="ic"><img src="<?=base_url()?>/assets/images//choose-vehicle/i1.png" class=""> 4 <img src="<?=base_url()?>/assets/images//choose-vehicle/i2.png" class=""> 4 </div>
							</div>
							<div class="col-md-9 col-xs-9">
								<img src="<?=base_url()?>/assets/images//choose-vehicle/3.png" class="img-responsive">
							</div>
						</div>
					</div>
				</div>
				<?php } ?>

				<?php  if($this->chauffeurListing->isClass_SUV == 1){  ?>
				<div class="col-md-6">
					<div class="car-box" onclick="selectType('SUV')">
						<div class="row">	
							<div class="col-md-3 col-xs-3">
								<h4>CLASS SUV</h4>
								<h2><?=$this->chauffeurListing->currency?><?=$this->chauffeurListing->classSUVPrice?></h2>
								<div class="ic"><img src="<?=base_url()?>/assets/images//choose-vehicle/i1.png" class=""> 5 <img src="<?=base_url()?>/assets/images//choose-vehicle/i2.png" class=""> 5 </div>
							</div>
							<div class="col-md-9 col-xs-9">
								<img src="<?=base_url()?>/assets/images//choose-vehicle/4.png" class="img-responsive">
							</div> 
						</div>
					</div>
				</div>
				<?php } ?>
			</div>
			
		</div>
	
		<div class="container-fluid brown-color">

			<div class="row">
				<div class="container">
				    <div class="previous-step">
						
						<a href="#"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
						<h4>PREVIOUS Step</h4>
					</div>
					<div class="next-step">
						<h4>Next Step</h4>
						<a id="go_for_customer" href="chauffeur-customer-info/class_E"><i class="fa fa-angle-right" aria-hidden="true"></i></a>

						<script type="text/javascript">
								
								function selectType(type){

									if(type == 'E'){
										$('#go_for_customer').attr('href','chauffeur-customer-info/class_E');
									}else if(type == 'V'){
										$('#go_for_customer').attr('href','chauffeur-customer-info/class_V');
									}else if(type == 'S'){
										$('#go_for_customer').attr('href','chauffeur-customer-info/class_S');
									}else{
										$('#go_for_customer').attr('href','chauffeur-customer-info/class_SUV');
									}
								}

						</script>



					</div>
				</div>
			</div>
		</div>
	</section>
<?php $this->load->view('footer/footer') ?>
</body>

</html>