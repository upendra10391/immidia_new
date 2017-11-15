
<!DOCTYPE html>
<html>
	<head>
		<title>Booking</title>
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
	
	<header>
			<?php $this->load->view('header/header'); ?>
		
		<div class="container-fluid book page-title">
			<div class="row">
				<h1>Booking</h1>
			</div>
		</div>
	</header>
	<body>
	<section class="ride-detail">
	<form method="post" action="chauffeur-listing">
		<div class="container-fluid brown-color">
			<div class="row">
				<div class="container">
					<div class="col-md-4 ride-title">
						<h1>Ride Details</h1>
					</div>
					<div class="col-md-8 ride-dropdown">
						<div class="left">
							<img src="<?=base_url()?>/assets/images//booking/icon_1.png">
							<label>Passengers</label>
							<select name="passenger" class="passenger">
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
								<option>6</option>
								<option>7</option>
								<option>8</option>
								<option>9</option>
								<option>10</option>
							</select>
						</div>
						<div class="right">
							<img src="<?=base_url()?>/assets/images//booking/icon_3.png">
							<label>Luggage</label>
							<select class="passenger" name="luggage">
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
								<option>6</option>
								<option>7</option>
								<option>8</option>
								<option>9</option>
								<option>10</option>
							</select>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="container">
					<div class="col-md-6 ride-left">
						<div class="common-row first-row bottom-border">
							<div class="airport">
							<img src="<?=base_url()?>/assets/images//booking/icon_4.png">Choose Airport: JFK EWR LGA</div>
						</div>
						<div class="common-row second-row bottom-border">
							<div colspan="2">
								<img src="<?=base_url()?>/assets/images//booking/icon_5.png">
								<input type="text" class="dest-from" name="origin-input" id="origin-input" style="width: 88%;border: none;"
								<?php if(isset($_SESSION['chauffeurFilterParams'])){ ?>
											 value="<?=$_SESSION['chauffeurFilterParams']['origin-input']?>"

											<?php } ?>
											>
							</div>
						</div>
						<div class="common-row third-row bottom-border">
							<div class="pick-date">
								<img class="calender-img" src="<?=base_url()?>/assets/images//booking/icon_7.png">
								<div class='input-group date' id='datetimepicker-ride'>
									<label>Date</label>
									<input type="text" name="pickup_date" class="date-picker" placeholder="YYYY/MM/DD"/>
								</div>
							</div>
								
							<div class="pick-time">
								<img class="calender-img" src="<?=base_url()?>/assets/images//booking/icon_7.png">
								<div class='input-group date' id='datetimepicker-ride'>
									<label>Pickup Time</label>
									<input type='text' name="pickup_time"  id='datetimepicker3' placeholder="HH:MM" />
								</div>	
								
							</div>
						</div>
						
						<div class="common-row first-row">
							<div>
								<img src="<?=base_url()?>/assets/images//booking/icon_8.png">
								<input type="text" class="form-control comment" placeholder="Add Pickup Comments" name="pickup_comments_one"/>
							</div>
						</div>
					</div>
					<div class="col-md-6 ride-right">
						<div class="common-row first-row bottom-border">
							<div class="airport"><img src="<?=base_url()?>/assets/images//booking/icon_4.png">Choose Airport: JFK EWR LGA</div>
						</div>
						<div class="common-row second-row bottom-border">
							<div colspan="2">
								<img src="<?=base_url()?>/assets/images//booking/icon_5.png">
									<input type="text" class="dest-to" name="destination-input" id="destination-input" style="    width: 88%;border: none;"
										<?php if(isset($_SESSION['chauffeurFilterParams'])){ ?>
											 value="<?=$_SESSION['chauffeurFilterParams']['destination-input']?>"

											<?php } ?>
										>
							</div>
						</div>
						<div class="common-row third-row bottom-border">
							<div class="pick-date">
								<img class="calender-img" src="<?=base_url()?>/assets/images//booking/icon_7.png">
								<div class='input-group date' id='datetimepicker-ride'>
									<label>Drive Time(Est)</label>
									<input id="est_drive_time" type="text"
										<?php if(isset($_SESSION['chauffeurFilterParams'])){ ?>
											 value="<?=$_SESSION['chauffeurFilterParams']['estimatedTime']?>"

											<?php } ?>
									   placeholder="YYYY/MM/DD"/>
								</div>
							</div>
								
							<div class="pick-time">
								<div class="checkbox checkbox-inline">
								<input type="checkbox" id="inlineCheckbox2" name="driver2" value="option2" onchange="valueChanged()">
								<label for="inlineCheckbox2" class="adh1"> As Directed Hourly</label>
							</div>
								
							</div>
							<script type="text/javascript">
function valueChanged()
{
    if($('#inlineCheckbox2').is(":checked"))   
        $(".dh").show();
    else
        $(".dh").hide();
}
</script>
						</div>
						<div class="common-row second-row bottom-border dh " style="display:none;">
							<div colspan="2">
								<img class="calender-img" src="<?=base_url()?>/assets/images//booking/icon_7.png">
								<select class="directed-hourly" >
									<option>2 Hrs</option>
									<option>4 Hrs</option>
									<option>6 Hrs</option>
									<option>8 Hrs</option>
									<option>12 Hrs</option>
									<option>24 Hrs</option>
								</select>
							</div>
						</div>
						<div class="common-row fourth-row">
							<div >
								<img src="<?=base_url()?>/assets/images//booking/icon_8.png">
								<input type="text" class="form-control comment" placeholder="Add Pickup Comments" name="pickup_comments_two"/>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid brown-color">
			<div class="row">
				<div class="container">
					<div class="next-step">
					   			 <input type="hidden" id="orig_latitude" name="orig_latitude"		<?php if(isset($_SESSION['chauffeurFilterParams'])){ ?>
											 value="<?=$_SESSION['chauffeurFilterParams']['orig_latitude']?>"

											<?php } ?>  
					   			 />
								<input type="hidden" id="orig_longitude" name="orig_longitude"  
								<?php if(isset($_SESSION['chauffeurFilterParams'])){ ?>
											 value="<?=$_SESSION['chauffeurFilterParams']['orig_longitude']?>"

											<?php } ?>  
								/>
								<input type="hidden" id="dest_latitude" name="dest_latitude"	<?php if(isset($_SESSION['chauffeurFilterParams'])){ ?>
											 value="<?=$_SESSION['chauffeurFilterParams']['dest_latitude']?>"

											<?php } ?>   
								/>
								<input type="hidden" id="dest_longitude" name="dest_longitude	" 
										<?php if(isset($_SESSION['chauffeurFilterParams'])){ ?>
											 value="<?=$_SESSION['chauffeurFilterParams']['dest_longitude']?>"

											<?php } ?>  

								 />
								<input type="hidden" id="estimatedTime" name="estimatedTime"	<?php if(isset($_SESSION['chauffeurFilterParams'])){ ?>
											 value="<?=$_SESSION['chauffeurFilterParams']['estimatedTime']?>"

											<?php } ?>  
								/>
								<input type="hidden" id="estimatedDistance" name="estimatedDistance"  
									<?php if(isset($_SESSION['chauffeurFilterParams'])){ ?>
											 value="<?=$_SESSION['chauffeurFilterParams']['estimatedDistance']?>"

											<?php } ?> 

								/>
								<input type="hidden" id="estimatedTimeInSecond" name="estimatedTimeInSecond"

									<?php if(isset($_SESSION['chauffeurFilterParams'])){ ?>
											 value="<?=$_SESSION['chauffeurFilterParams']['estimatedTimeInSecond']?>"

											<?php } ?>

								  />

								  	<input type="hidden" id="short_name" name="short_name"  
								  	<?php if(isset($_SESSION['chauffeurFilterParams'])){ ?>
											 value="<?=$_SESSION['chauffeurFilterParams']['short_name']?>"

											<?php } ?>

								  	/>
								  		
						<h4>Next Step</h4>

						<button style="    background: black;
    border: none;
    margin-left: 3px;
    margin-top: 3px;" type="submit" name="isSubmit"><i class="fa fa-angle-right" aria-hidden="true"></i></button>


					</div>
				</div>
			</div>
		</div>
		<section class="map-section">
			<div class="container-fluid">
				<div class="row">
					<div class="map-responsive">
						<div id="map" ></div>
					</div>

						<style>
										#map {
											  height: 580px;
											}

									</style>

								
								<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAJBsyZL8XGklwkovQ-uk3ixOASbjP9wAY&libraries=places&callback=initMap"
        						async defer></script>

								        <script type="text/javascript">



								      function isSessionDefaultMap(map,origin,destination){
								     

										        directionsService = new google.maps.DirectionsService();
										        directionsDisplay = new google.maps.DirectionsRenderer({
										          suppressMarkers: false,
										          suppressInfoWindows: true
										        });
										        directionsDisplay.setMap(map);

										        var request = {
										          origin: origin, 
										          destination: destination,
										          travelMode: google.maps.DirectionsTravelMode.DRIVING
										        };
										        directionsService.route(request, function(response, status) {
										          if (status == google.maps.DirectionsStatus.OK) {
										            directionsDisplay.setDirections(response);
										          }
										        });
								      }  	

								          
								function initMap() {
								  var map = new google.maps.Map(document.getElementById('map'), {
								    mapTypeControl: false,
								    center: {lat: -33.8688, lng: 151.2195},
								    zoom: 13
								  });

								  		<?php 

								      	  if(isset($_SESSION['chauffeurFilterParams'])){ ?>
								        	


								        	var origin  = new google.maps.LatLng(<?=$_SESSION['chauffeurFilterParams']['orig_latitude']?>, <?=$_SESSION['chauffeurFilterParams']['orig_longitude']?>);
								        	var destination  = new google.maps.LatLng(<?=$_SESSION['chauffeurFilterParams']['dest_latitude']?>, <?=$_SESSION['chauffeurFilterParams']['dest_longitude']?>);

								        isSessionDefaultMap(map,origin,destination);

								        <?php } ?>



								  new AutocompleteDirectionsHandler(map,origin,destination);
								}

								 /**
								  * @constructor
								 */
								function AutocompleteDirectionsHandler(map,origin,destination) {
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
								   this.route();

								
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
                                  $('#est_drive_time').val(estimatedTime);
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
		</section>
		</form>
	</section>
		<?php $this->load->view('footer/footer') ?>


		
</body>

</html>