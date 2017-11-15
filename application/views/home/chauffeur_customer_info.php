<?php 
		
		

		if($this->ClassType == 'class_E'){
			$price  = $_SESSION['chauffeurFilterParams']['response']->currency . $_SESSION['chauffeurFilterParams']['response']->classEPrice ;
			$name = "CLASS E";
			$_SESSION['chauffeurFilterParams']['updated_details']['currency'] = $_SESSION['chauffeurFilterParams']['response']->currency;
			$_SESSION['chauffeurFilterParams']['updated_details']['price'] = $_SESSION['chauffeurFilterParams']['response']->classEPrice; 
			$_SESSION['chauffeurFilterParams']['updated_details']['name'] = $name;  

		}else if($this->ClassType == 'class_V'){
			$price  = $_SESSION['chauffeurFilterParams']['response']->currency . $_SESSION['chauffeurFilterParams']['response']->classVPrice ;
			$name = "CLASS V";
			$_SESSION['chauffeurFilterParams']['updated_details']['currency'] = $_SESSION['chauffeurFilterParams']['response']->currency;
			$_SESSION['chauffeurFilterParams']['updated_details']['price'] = $_SESSION['chauffeurFilterParams']['response']->classEPrice; 
			$_SESSION['chauffeurFilterParams']['updated_details']['name'] = $name;  
		}else if($this->ClassType == 'class_S'){
			$price  = $_SESSION['chauffeurFilterParams']['response']->currency . $_SESSION['chauffeurFilterParams']['response']->classSPrice ;
			$name = "CLASS S";
			$_SESSION['chauffeurFilterParams']['updated_details']['currency'] = $_SESSION['chauffeurFilterParams']['response']->currency;
			$_SESSION['chauffeurFilterParams']['updated_details']['price'] = $_SESSION['chauffeurFilterParams']['response']->classEPrice; 
			$_SESSION['chauffeurFilterParams']['updated_details']['name'] = $name;  
		}else{
			$price  = $_SESSION['chauffeurFilterParams']['response']->currency . $_SESSION['chauffeurFilterParams']['response']->classSUVPrice ;
			$name = "CLASS SUV";
			$_SESSION['chauffeurFilterParams']['updated_details']['currency'] = $_SESSION['chauffeurFilterParams']['response']->currency;
			$_SESSION['chauffeurFilterParams']['updated_details']['price'] = $_SESSION['chauffeurFilterParams']['response']->classEPrice; 
			$_SESSION['chauffeurFilterParams']['updated_details']['name'] = $name;   
		}

?>



<!DOCTYPE html>
<html>
	<head>
		<title>CUSTOMER INFORMATION</title>
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
	<body class="customerinfomation">
	<section class="ride-detail">
		<div class="container-fluid brown-color">
			<div class="container">
				<div class="row">
					<div class="col-md-12 ride-title">
						<h1>YOUR BOOKING</h1>
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
		<div class="container-fluid">
				<div class="container yourbooking">
					<div class="row">		
						<div class="col-md-7">
							<img src="<?=base_url()?>/assets/images//customer-info/1.jpg" class="img-responsive" />
							<h4><?=$name?></h4>
							<div class="icc"><img src="<?=base_url()?>/assets/images//choose-vehicle/i1.png" class=""> <?= $_SESSION['chauffeurFilterParams']['passenger']?> </div>
							<div class="icc"><img src="<?=base_url()?>/assets/images//choose-vehicle/i2.png" class=""><?= $_SESSION['chauffeurFilterParams']['luggage']?> </div>
						</div>
						<div class="col-md-5">
							
							
                            <div class="binfo">
						<p class="pb">*Actual Vehicle May Very<p/>
						<p class="pb"><img src="<?=base_url()?>/assets/images//customer-info/i3.png" class=""> ,<?= $_SESSION['chauffeurFilterParams']['origin-input']?><br/>
						&nbsp;&nbsp;<img src="<?=base_url()?>/assets/images//customer-info/i4.png" class=""><br/>
						&nbsp;&nbsp;<img src="<?=base_url()?>/assets/images//customer-info/i4.png" class=""><br/>
						&nbsp;&nbsp;<img src="<?=base_url()?>/assets/images//customer-info/i4.png" class=""><br/>
						&nbsp;&nbsp;<img src="<?=base_url()?>/assets/images//customer-info/i4.png" class=""><br/>
						<img src="<?=base_url()?>/assets/images//customer-info/i5.png" class=""><?= $_SESSION['chauffeurFilterParams']['destination-input']?><br/><br/><p/>
			
						<p class="pbp"><img src="<?=base_url()?>/assets/images//customer-info/i6.png" class=""> <!-- <select class="priceb">
										<option>Price Breakdown</option>
										<option>Country 2</option>
										<option>Country 3</option>
										<option>Country 4</option>
										<option>Country 5</option>
										<option>Country 6</option>
										<option>Country 7</option>
										<option>Country 8</option>
										<option>Country 9</option>
										<option>Country 10</option>
									</select> --><?=$price?></p>
					</div>	
                     					</div>					
				</div>
									
						</div>
					</div>
		<div class="container-fluid brown-color">
			<div class="container">
				<div class="row">
					<div class="col-md-12 ride-title">
						<h1>CONTACT INFORMATION</h1>
					</div>
				</div>
			</div>
		</div>
	    <div class="container-fluid">
			<div class="row">
				<div class="container customerinfo">
					<div class="col-md-6 ">
						<h3>Person Making The Reservation</h3>
						<p>Please Sign In If You Are a Returning user <a>SIGN IN</a> <a>REGITER</a></p>
						 <div class="form-group">
							<input type="text"
								<?php if(isset($_SESSION['user_login'])){ ?>
								value="<?=$_SESSION['user_login']->firstName?>"
								<?php } ?>
							 class="form-control" placeholder="First Name"/>
						</div>
						<div class="form-group">
							<input type="text"
							<?php if(isset($_SESSION['user_login'])){ ?>
								value="<?=$_SESSION['user_login']->lastName?>"
								<?php } ?>
							 class="form-control" placeholder="Last Name"/>
						</div>
						<div class="form-group">
							<input type="text"
							<?php if(isset($_SESSION['user_login'])){ ?>
								value="<?=$_SESSION['user_login']->contactNumber?>"
								<?php } ?>
							 class="form-control" placeholder="Phone"/>
						</div>
						<div class="form-group">
							<input type="text" 
							
								<?php if(isset($_SESSION['user_login'])){ ?>
								value="<?=$_SESSION['user_login']->mailId?>"
								<?php } ?>
							class="form-control" placeholder="Email"/>
						</div>
						
					</div>
					<div class="col-md-6 ">
					   <h3>Personal Travelling</h3>
					    <div class="radio">
                                <input type="radio" name="radio1" id="radio1" value="option1" >
                                <label for="radio1">
                                   same As person Making The Reservation
                                </label>
                            </div>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="First Name"/>
						</div>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Last Name"/>
						</div>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Phone"/>
						</div>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Email"/>
						</div>
								
									
					</div> 
					<div class="col-md-12 ">
					<form action="<?=base_url()?>/submit-chauffeur-order" method="post">
					    <div class="radio">
                                <input type="radio" name="radio2" id="radio2" value="option1" required="" title="I Agree To The <a>Terms And Conditions Of The Reservation">
                                <label for="radio2" class="tc">
                                    I Agree To The <a>Terms And Conditions Of The Reservation</a><u>
                                </label>
                            </div>
						
						<input type="submit" name="submit" value="SUBMIT RESERVATION" />
						</form>
					</div>
					</div>
				</div>
			</div>
		</div>
		
	</section>
	
	<?php $this->load->view('footer/footer') ?>
</body>

</html>