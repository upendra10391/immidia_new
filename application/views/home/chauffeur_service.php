<!DOCTYPE html>
<html>
	<head>
		<title>Chauffeur Services</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
       
		<?php $this->load->view('header/head'); ?>	
		
		<script>
         $(function() {
            $( ".date-picker" ).datetimepicker({format: "yyyy/mm/dd"});
            $( ".date-picker" ).datetimepicker("hide");
         });
		$(document).ready(function(){
			$(".book-reservation .expand").click(function(){
			$(".book-reservation").toggleClass("full-width");
			
				
			});
		});
		</script>

	</head>
	
	
	<body class="cs">
            <header>
		<?php $this->load->view('header/header'); ?>
		
		<div class="container-fluid book page-title">
			<div class="row">
				<h1>Chauffeur Services</h1>
			</div>
		</div>
	</header>
		<div class="container-fluid" id="slide">
			<div class="row">
				<div class="col-md-8 slider-section">
					<div class="row">
						<div id="myCarousel" class="carousel slide" data-ride="carousel">

						  <!-- Wrapper for slides -->
						  <div class="carousel-inner">
							<div class="item active">
							  <img src="<?php echo base_url();?>/assets/images/cs/suv-s.jpg">
							  <div class="slide-content">
								<p class="line1">World Class Service</p>
								<p class="line2">Industry leader for more than 30 years</p>
							  </div>
							</div>

							<div class="item">
							  <img src="<?php echo base_url();?>/assets/images/cs/lsedan-s.jpg">
							  <div class="slide-content">
								<p class="line1">World Class Service</p>
								<p class="line2">Industry leader for more than 30 years</p>
							  </div>
							</div>

							<div class="item">
							  <img src="<?php echo base_url();?>/assets/images/cs/v-class-s.jpg">
							  <div class="slide-content">
								<p class="line1">World Class Service</p>
								<p class="line2">Industry leader for more than 30 years</p>
							  </div>
							</div>
						  </div>

						  <!-- Left and right controls -->
						  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
							<img src="<?php echo base_url();?>/assets/images/left.png">
							<span class="sr-only">Previous</span>
						  </a>
						  <a class="right carousel-control" href="#myCarousel" data-slide="next">
							<img src="<?php echo base_url();?>/assets/images/right.png">
							<span class="sr-only">Next</span>
						  </a>
						</div>
						<a class="reserve-online" href="#">Make Reservation Online</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="row">
						<div class="book-reservation">
							<div class="section-one">
								<img src="<?php echo base_url();?>/assets/images/book.png">
								<p>Book Your Reservation</p>
								<span class="expand" href="#"><img src="<?php echo base_url();?>/assets/images/arrow_1.png"/><u>Expand</u><img src="<?php echo base_url();?>/assets/images/arrow_2.png"/></span>
							</div>
							<form method="post" action="chauffeur-booking">
							<div class="destination">
								<div class="from">
									<h4>From</h4>
									<input type="text" class="dest-from" name="origin-input" id="origin-input">
								</div>
								<div class="to">
									<h4>To</h4>
									<input type="text" class="dest-to" name="destination-input" id="destination-input">
								</div>
									
							</div>
							<div class="app-book">

								<input type="hidden" id="orig_latitude" name="orig_latitude"  />
								<input type="hidden" id="orig_longitude" name="orig_longitude"  />
								<input type="hidden" id="dest_latitude" name="dest_latitude"  />
								<input type="hidden" id="dest_longitude" name="dest_longitude"  />
								<input type="hidden" id="estimatedTime" name="estimatedTime"  />
								<input type="hidden" id="estimatedDistance" name="estimatedDistance"  />
								<input type="hidden" id="estimatedTimeInSecond" name="estimatedTimeInSecond"  />
								<input type="hidden" id="short_name" name="short_name"  />

							    <button type="submit" name="isSubmit" class="book-now" >Book Now</button> </br>
							   </form>
								<a href="#"><img src="<?php echo base_url();?>/assets/images/android.png"></a>
								<a href="#"><img src="<?php echo base_url();?>/assets/images/apple.png"></a>
							
							</div>
						</div>
						<div class="map-section">
							<div class="expand-map">

								<div id="map" ></div>

									<style>
										#map {
											  height: 580px;
											}

									</style>

								
								<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAJBsyZL8XGklwkovQ-uk3ixOASbjP9wAY&libraries=places&callback=initMap"
        						async defer></script>

								        <script type="text/javascript">
								          
								function initMap() {
								  var map = new google.maps.Map(document.getElementById('map'), {
								    mapTypeControl: false,
								    center: {lat: -33.8688, lng: 151.2195},
								    zoom: 13
								  });

								  new AutocompleteDirectionsHandler(map);
								}

								 /**
								  * @constructor
								 */
								function AutocompleteDirectionsHandler(map) {
								  this.map = map;
								  this.originPlaceId = null;
								  this.destinationPlaceId = null;
								  this.travelMode = 'DRIVING';
								  var originInput = document.getElementById('origin-input');
								  var destinationInput = document.getElementById('destination-input');
								 // var modeSelector = document.getElementById('mode-selector');
								  this.directionsService = new google.maps.DirectionsService;
								  this.directionsDisplay = new google.maps.DirectionsRenderer;
								  this.directionsDisplay.setMap(map);

								  var originAutocomplete = new google.maps.places.Autocomplete(
								      originInput /*, {placeIdOnly: true} */);
								  var destinationAutocomplete = new google.maps.places.Autocomplete(
								      destinationInput /*, {placeIdOnly: true} */);


								  this.setupPlaceChangedListener(originAutocomplete, 'ORIG');
								  this.setupPlaceChangedListener(destinationAutocomplete, 'DEST');

								
								}

							

								AutocompleteDirectionsHandler.prototype.setupPlaceChangedListener = function(autocomplete, mode) {
								  var me = this;
								  autocomplete.bindTo('bounds', this.map);
								  autocomplete.addListener('place_changed', function() {
								    var place = autocomplete.getPlace();
								    for(var i = 0; i < place.address_components.length; i += 1) {
					                var addressObj = place.address_components[i];
					                for(var j = 0; j < addressObj.types.length; j += 1) {
					                  if (addressObj.types[j] === 'country') {
					                  
					                    if(mode == 'ORIG'){
					                         console.log(addressObj.types[j]); // confirm that this is 'country'
					                        console.log(addressObj.long_name); // confirm that this is the country name
					                        console.log(addressObj.short_name); 
					                       this.countryCode = addressObj.short_name;
					                       this.countryStartName = addressObj.long_name;
					                       $('#short_name').val(addressObj.short_name);


					                 
					                    }else{
					                      this.countryEndName = addressObj.long_name;
					                     
					                    }




					                  }
					                }
					              }


								    if (!place.place_id) {
								      window.alert("Please select an option from the dropdown list.");
								      return;
								    }
								    if (mode === 'ORIG') {
								      me.originPlaceId = place.place_id;
								      document.getElementById("orig_latitude").value= place.geometry.location.lat();
								      document.getElementById("orig_longitude").value= place.geometry.location.lng();
								    } else {
								      me.destinationPlaceId = place.place_id;
								      document.getElementById("dest_latitude").value= place.geometry.location.lat();
								      document.getElementById("dest_longitude").value= place.geometry.location.lng();
								    }
								    me.route();
								  });

								};

								AutocompleteDirectionsHandler.prototype.route = function() {
								  if (!this.originPlaceId || !this.destinationPlaceId) {
								    return;
								  }
								  var me = this;

								  this.directionsService.route({
								    origin: {'placeId': this.originPlaceId},
								    destination: {'placeId': this.destinationPlaceId},
								    travelMode: this.travelMode
								  }, function(response, status) {
								    if (status === 'OK') {
								      me.directionsDisplay.setDirections(response);

								 var point = response.routes[ 0 ].legs[ 0 ];
                                  var estimatedTime = point.duration.text ;
                                  var estimatedDistance = point.distance.text;
                                  var estimatedTimeInSecond = point.duration.value;

                                  $('#estimatedTime').val(estimatedTime);
                                  $('#estimatedDistance').val(estimatedDistance);
                                  $('#estimatedTimeInSecond').val(estimatedTimeInSecond);

                                  console.log(estimatedTimeInSecond)
                                  console.log(estimatedTime);
                                  console.log(estimatedDistance);



								    } else {
								      window.alert('Directions request failed due to ' + status);
								    }
								  });
								};
								        </script>
	
								

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="car-block">
					<div class="block">
						<img src="<?php echo base_url();?>/assets/images/car-block1.png">
						<p>Allstate Limo Commercial</p>
					</div>
					<div class="block">
						<img src="<?php echo base_url();?>/assets/images/car-block2.png">
						<p>World Class Service</p>
					</div>
					<div class="block">
						<img src="<?php echo base_url();?>/assets/images/car-block3.png">
						<p>Expensive Fleet</p>
					</div>
					<div class="block">
						<img src="<?php echo base_url();?>/assets/images/car-block4.png">
						<p>Online Airport Rates</p>
					</div>
					<div class="block">
						<img src="<?php echo base_url();?>/assets/images/car-block5.png">
						<p>Special Occasions</p>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div id="myCarouse2" class="carousel slide" data-ride="carousel">
					
				  <!-- Wrapper for slides -->
				  <div class="carousel-inner">
					<h1 class="slider-title">Our Fleet</h1>
					<div class="item active">
					  <img src="<?php echo base_url();?>/assets/images/cs/lsedan-f.jpg">
					</div>

					<div class="item">
					  <img src="<?php echo base_url();?>/assets/images/cs/suv-f.jpg">
					</div>

					<div class="item">
					  <img src="<?php echo base_url();?>/assets/images/cs/sedan-f.jpg">
					</div>
					<div class="item">
					  <img src="<?php echo base_url();?>/assets/images/cs/v-class-f.jpg">
					</div>
				  </div>

				  <!-- Left and right controls -->
				  <a class="left carousel-control" href="#myCarouse2" data-slide="prev">
					<img src="<?php echo base_url();?>/assets/images/white-arrow-left.png">
					<span class="sr-only">Previous</span>
				  </a>
				  <a class="right carousel-control" href="#myCarouse2" data-slide="next">
					<img src="<?php echo base_url();?>/assets/images/white-arrow-right.png">
					<span class="sr-only">Next</span>
				  </a>
				</div>
				<div class="sedan">
					<p>Sedan</p>
					<a href="chauffeur-booking">Book Now</a>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-3 col-sm-6 sedan">
					<img src="<?php echo base_url();?>/assets/images/cs/sedan-t.jpg">
					<p>Sedan</p>
					<a href="chauffeur-booking">Book Now</a>
				</div>
				<div class="col-md-3 col-sm-6 sedan">
					<img src="<?php echo base_url();?>/assets/images/cs/lsedan-t.jpg">
					<p>Luxury Sedan</p>
					<a href="chauffeur-booking">Book Now</a>
				</div>
				<div class="clearfix visible-sm"></div>
				<div class="col-md-3 col-sm-6 sedan">
					<img src="<?php echo base_url();?>/assets/images/cs/v-class-t.jpg">
					<p>V Class</p>
					<a href="chauffeur-booking">Book Now</a>
				</div>
				<div class="col-md-3 col-sm-6 sedan">
					<img src="<?php echo base_url();?>/assets/images/cs/suv-t.JPG">
					<p>SUV's</p>
					<a href="chauffeur-booking">Book Now</a>
				</div>
			</div>
		</div>
		
		<div class="container-fluid rate-section">
			<div class="row">
				<div class="col-md-6 left-img">
					<div class="row">
						<div class="rate-inner">
							<div id="myCarouse3" class="carousel slide" data-ride="carousel">

							  <!-- Wrapper for slides -->
							  <div class="carousel-inner rate-slider">
								<div class="item active">
									<h5>Airport Limo Service</h5>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
									<a class="book-link" href="chauffeur-booking">Book Now</a>
								</div>

								<div class="item">
									<h5>Airport Limo Service</h5>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
									<a class="book-link" href="chauffeur-booking">Book Now</a>
								</div>

								<div class="item">
									<h5>Airport Limo Service</h5>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
									<a class="book-link" href="chauffeur-booking">Book Now</a>
								</div>
							  </div>

							  <!-- Left and right controls -->
							  <a class="left carousel-control" href="#myCarouse3" data-slide="prev">
								<img src="<?php echo base_url();?>/assets/images/rate-left.png">
							  </a>
							  <a class="right carousel-control" href="#myCarouse3" data-slide="next">
								<img src="<?php echo base_url();?>/assets/images/rate-right.png">
							  </a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 right-img">
					<div class="row">
						<div class="rate-inner">
							<h3>Special Online Airport Rate</h3>
							<div class="box">
								<p class="from-dest">-from LaGuardia-</p>
								<p class="price">$40.00</p>
							</div>
							<div class="box">
								<p class="from-dest">-from JFK-</p>
								<p class="price">$53.00</p>
							</div>
							<div class="box">
								<p class="from-dest">-from Newark-</p>
								<p class="price">$57.00</p>
							</div>
							<h5>* restriction may apply</h5>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		
		<!-- Footer -->
		<?php $this->load->view('footer/footer') ?>
					
		 

	</body>
</html>

