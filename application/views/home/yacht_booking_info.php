<?php
//var_dump($blogs->firstName);exit;
//echo !empty($blogs->deliveryArea) ? $blogs->deliveryArea:'0';exit;
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Yacht Booking</title>
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
		<script>
	function openCity(evt, cityName) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the link that opened the tab
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
function openCity1(evt, cityName) {
    // Declare all variables
    var i1, tabcontent1, tablinks1;

    // Get all elements with class="tabcontent" and hide them
    tabcontent1 = document.getElementsByClassName("tabcontent1");
    for (i1 = 0; i1 < tabcontent1.length; i1++) {
        tabcontent1[i1].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks1 = document.getElementsByClassName("tablinks1");
    for (i1 = 0; i1 < tablinks1.length; i1++) {
        tablinks1[i1].className = tablinks1[i1].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the link that opened the tab
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
		</script>
	</head>
	
	<header>
		<?php $this->load->view('header/header'); ?>
		
		<div class="container-fluid book page-title">
			<div class="row">
				<h1>Yacht Booking</h1>
			</div>
		</div>
	</header>
	<body>
	<section class="yacht-booking">
		<div class="container-fluid">
			<div class="row">
				<div class="tab">
					<button class="tablinks active" onclick="openCity(event, 'Booking')"><i class="fa fa-desktop" aria-hidden="true"></i><span>Booking</span></button>
					<button class="tablinks" onclick="openCity(event, 'Profile')"><i class="fa fa-user" aria-hidden="true"></i><span>Profile</span></button>
					<button class="tablinks" onclick="openCity(event, 'Help')"><i class="fa fa-question-circle" aria-hidden="true"></i><span>Help</span></button>
				</div>
				<div id="Booking" class="tabcontent " style="display: block;">
					<div class="row moreinfo">
						<div class="col-md-6">
							<div class="form-group gborder">
								<div class="col-md-6 col-xs-6 nopd"><p class="title">Booking Reference No</p></div>
								<div class="col-md-6 col-xs-6 nopd"><p class="distance"><?php echo $blogs->bookingSequenceNumber;?></p></div>
							</div>
							<div class="form-group gborder">
								<div class="col-md-6 col-xs-6 nopd"><p class="title">Booking Date From</p></div>
								<div class="col-md-6 col-xs-6 nopd"><p class="distance"><?php echo $blogs->departureDateTime;?></p></div>
							</div>
							<div class="form-group gborder">
								<div class="col-md-6 col-xs-6 nopd"><p class="title">Booking Date To</p></div>
								<div class="col-md-6 col-xs-6 nopd"><p class="distance"><?php echo $blogs->arrivalDateTime ;?></p></div>
							</div>
							<div class="form-group gborder">
								<div class="col-md-6 col-xs-6 nopd"><p class="title">Booking Date To</p></div>
								<div class="col-md-6 col-xs-6 nopd"><p class="distance"><?php echo $blogs->arrivalDateTime ;?></p></div>
							</div>
							<div class="form-group gborder">
								<div class="col-md-6 col-xs-6 nopd"><p class="title">Customer Name</p></div>
								<div class="col-md-6 col-xs-6 nopd"><p class="distance"><?php echo $blogs->firstName;?></p></div>
							</div>
							<div class="form-group gborder">
								<div class="col-md-6 col-xs-6 nopd"><p class="title">Source</p></div>
								<div class="col-md-6 col-xs-6 nopd"><p class="distance"><?php echo $blogs->websiteLink;?></p></div>
							</div>
							<div class="form-group gborder">
								<div class="col-md-6 col-xs-6 nopd"><p class="title">Service Provider</p></div>
								<div class="col-md-6 col-xs-6 nopd"><p class="distance"></p></div>
							</div>
							<div class="form-group gborder">
								<div class="col-md-6 col-xs-6 nopd"><p class="title">Line Of Business</p></div>
								<div class="col-md-6 col-xs-6 nopd"><p class="distance"><?php echo $blogs->serviceName;?></p></div>
							</div>
							<div class="form-group gborder">
								<div class="col-md-6 col-xs-6 nopd"><p class="title">Fleet Name</p></div>
								<div class="col-md-6 col-xs-6 nopd"><p class="distance"><?php echo $blogs->productName;?></p></div>
							</div>
							<div class="form-group fborder">
							<div class="col-md-12 col-xs-12 nopd"><p class="title">Food And Beverage</p></div>
							<?php
							foreach($food as $objfood)
							{
							?>
								<div class="col-md-10 col-xs-10 nopd">
                                                                    
									<p class="fitem">
										<span class="iname"><?php echo $objfood->itemName;?></span>
										<span class="iqut"><?php echo $objfood->quantity;?></span>
										<span class="iprice">€ <?php echo $objfood->itemprice;?></span>
									</p>
                                                                        
								<!--	<p class="fitem">
										<span class="iname">Chichen Sandwich</span>
										<span class="iqut"><?php echo $blogs->quantity;?></span>
										<span class="iprice">€ <?php echo $blogs->itemprice;?></span>
									</p>
									<p class="fitem">
										<span class="iname">Minuty Cuvee prestige - 75cl</span>
										<span class="iqut"><?php echo $blogs->quantity;?></span>
										<span class="iprice">€ <?php echo $blogs->itemprice;?></span>
									</p> -->
								</div>
							<?php } ?>
							</div>
						</div>
						<div class="col-md-6 ">
							<div class="form-group gborder">
								<div class="col-md-6 col-xs-6 nopd"><p class="title">Rent</p></div>
								<div class="col-md-6 col-xs-6 nopd"><p class="distance">€ 852</p></div>
							</div>
							<div class="form-group gborder">
								<div class="col-md-6 col-xs-6 nopd"><p class="title">Vat</p></div>
								<div class="col-md-6 col-xs-6 nopd"><p class="distance"><?php echo !empty($blogs->vat) ? $blogs->vat:'0';?></p></div>
							</div>
							<div class="form-group gborder">
								<div class="col-md-6 col-xs-6 nopd"><p class="title">Gross</p></div>
								<div class="col-md-6 col-xs-6 nopd"><p class="distance">€ 10</p></div>
							</div>
							<div class="form-group gborder">
								<div class="col-md-6 col-xs-6 nopd"><p class="title">City Tax</p></div>
								<div class="col-md-6 col-xs-6 nopd"><p class="distance">€ 10</p></div>
							</div>
							<div class="form-group gborder">
								<div class="col-md-4 col-xs-4 nopd"><p class="title">Formula</p></div>
								<div class="col-md-4 col-xs-4 nopd"><p class="value">Regular</p></div>
								<div class="col-md-4 col-xs-4 nopd"><p class="distance">€ <?php echo !empty($blogs->formulaPrice) ? $blogs->formulaPrice:'0';?></p></div>
							</div>
							<div class="form-group gborder">
								<div class="col-md-6 col-xs-6 nopd"><p class="title">Delivery Rate</p></div>
								<div class="col-md-6 col-xs-6 nopd"><p class="distance">€ <?php echo !empty($blogs->deliveryArea) ? $blogs->deliveryArea:'0';?></p></div>
							</div>
							<div class="form-group gborder">
								<div class="col-md-6 col-xs-6 nopd"><p class="title">Drop Off Rate</p></div>
								<div class="col-md-6 col-xs-6 nopd"><p class="distance">€ <?php echo !empty($blogs->dropoffArea) ? $blogs->dropoffArea:'0';?></p></div>
							</div>
							<div class="form-group gborder">
								<div class="col-md-6 col-xs-6 nopd"><p class="title">Extra time ?</p></div>
								<div class="col-md-6 col-xs-6 nopd"><p class="distance">€ <?php echo !empty($blogs->extraTime) ? $blogs->extraTime:'0';?></p></div>
							</div>
							<div class="form-group gborder">
								<div class="col-md-6 col-xs-6 nopd"><p class="title">transaction Charges</p></div>
								<div class="col-md-6 col-xs-6 nopd"><p class="distance">€ <?php echo !empty($blogs->transactionFee) ? $blogs->transactionFee:'0';?></p></div>
							</div>
							<div class="form-group gborder">
								<div class="col-md-6 col-xs-6 nopd"><p class="title"><b>Total</b></p></div>
								<div class="col-md-6 col-xs-6 nopd"><p class="distance"><b>€ <?php echo $blogs->total;?></b></p></div>
							</div>
						
						</div>
					</div>
				</div>
				<div id="Profile" class="tabcontent" style="display: none;">
					<h3>YOUR PROFILE</h3>
					<p>Profile is YOUR PROFILE.</p> 
				</div>
				<div id="Help" class="tabcontent" style="display: none;">
					<h3>HELP</h3>
					<p>HELP is your help.</p>
				</div>
			</div>
		</div>
	
	</section>
	<?php $this->load->view('footer/footer') ?>
</body>

</html>