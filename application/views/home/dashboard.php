<!DOCTYPE html>
<html>
    <head>
        <title>Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <?php $this->load->view('header/head'); ?>
        <script>
            $(document).ready(function () {
                $(".date-picker").datepicker({format: "yyyy/mm/dd", todayHighlight: true, autoclose: true, });
                $(".date-picker").datepicker("hide");
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


    <body>
        <header>
            <?php $this->load->view('header/header'); ?>

            <div class="container-fluid book page-title">
                <div class="row">
                    <h1>Dashboard</h1>
                </div>
            </div>
        </header>
        <body>
      <section class="yacht-booking">
		<div class="container-fluid">
			<div class="row">
				<div class="tab">
					<button class="tablinks " onclick="openCity(event, 'Booking')"><i class="fa fa-desktop" aria-hidden="true"></i><span>Booking</span></button>
					<button class="tablinks active" onclick="openCity(event, 'Profile')"><i class="fa fa-user" aria-hidden="true"></i><span>Profile</span></button>
					<button class="tablinks" onclick="openCity(event, 'Help')"><i class="fa fa-question-circle" aria-hidden="true"></i><span>Help</span></button>
				</div>
				<div id="Booking" class="tabcontent " style="display: none;">
					<h3>Booking</h3>
				</div>
				<div id="Profile" class="tabcontent" style="display: block;">
					<div class="row profile">
						<div class="col-md-4 ">
							<div>
								<p class="fsname"><i class="fa fa-user" aria-hidden="true"></i>
								<span class="iname">john violin</span><span class="logout"><i class="fa fa-sign-out" aria-hidden="true"></i><a>logout</a></span></p>
							</div>
							<div class="ptabs">
								<a class="tablinks1 active" onclick="openCity1(event, 'pi')">Travellers <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
								<a class="tablinks1 " onclick="openCity1(event, 'yd')">Your Documents <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
								<a class="tablinks1 " onclick="openCity1(event, 'ms')">My Settings <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
							</div>
						</div>
						<div  class="col-md-8 ">
							<div id="pi" class="tabcontent1 " style="display: block;">
								<h3>EDIT YOUR PERSONAL INFORMATION</h3>
								<div class="yti">
								<div class="pbox">
									<p>Your name as on passport</p>
                                                                        <p class="successmessageedit" style="color: green;"></p>
									<div class="row">
										<div class="col-md-3">
											<div class="form-group">
												<select class="gender">
													<option>MR.</option>
													<option>MISS</option>
													<option></option>
												</select>
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<input type="text" id="firstnameedit" class="form-control" value="john" placeholder="First Name">
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<input type="text" class="form-control" id="lasttnameedit" value="violin" placeholder="Last Name">
											</div>
										</div>
										
									</div>
								</div>
								<div class="pbox">
									<p>Edit Your Contact Information</p>
                                                                         
									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<input type="email" class="form-control" readonly value="johnviolin@gmail.com" placeholder="Email Id">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<input type="text" class="form-control" id="phonenumber" value="+919874563210" placeholder="Mobile No">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<select class="country">
													<option>Select Country</option>
													<option>India</option>
													<option></option>
												</select>
											</div>
										</div>
									</div>
									<div class="wrap3">
									<button class="submit" id="editprofile">Edit</button>
									</div>
								</div>
								</div>
							</div>
							<div id="yd" class="tabcontent1 " style="display: none;">
								<h3>YOUR PASSPORT INFORMATION</h3>
								<div class="pbox">
									<p>Your name as on the passport</p>
									<div class="row">
										<div class="col-md-3">
											<div class="form-group">
												<select class="">
													<option>MR.</option>
													<option>MISS</option>
													<option></option>
												</select>
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<input type="text" class="form-control" placeholder="First Name">
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<input type="text" class="form-control" placeholder="Middle Name">
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<input type="text" class="form-control" placeholder="Last Name">
											</div>
										</div>
									</div>
									
								</div>
								<div class="pbox">
									<p>Passport Details</p>
									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<select class="">
													<option>Select Country</option>
													<option>India</option>
													<option></option>
												</select>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<input type="text" class="form-control" placeholder="Document Number">
											</div>
										</div>
									</div>
									
								</div>
								<div class="pbox">
									<p>Date of Expiry</p>
									<div class="row">
										<div class="col-md-3">
											<div class="input-group date" id="datetimepicker10">
												<input type="text" class="form-control date-picker" placeholder="YYYY/MM/DD">
											</div>
										</div>
										
									</div>
									<div class="wrap3">
									<button class="submit">Save</button>
									</div>
								</div>
								
							</div>
							<div id="ms" class="tabcontent1 " style="display: none;">
							<h3>YOUR SETTINGS</h3>
								<div class="pbox">
									<p>Change Password</p>
                                                                         <p class="successmessagechange" style="color: green;"></p>
                                                                        <p id="error_user_bothpasswordnotmatch" style="color: red; display: none;"></p>
									<div class="row">
										
										<div class="col-md-4">
											<div class="form-group">
												<input type="text" class="form-control" id="oldpass" placeholder="Current Password">
                                                                                                 <p id="error_user_oldpassword" style="color: red; display: none;"></p>
							
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<input type="text" class="form-control" id="newpass" placeholder="New Password">
                                                                                                <p id="error_user_newpassword" style="color: red; display: none;"></p>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<input type="text" class="form-control" placeholder="Confirm Password" id="cnfpass">
                                                                                                <p id="error_user_cnfpassword" style="color: red; display: none;"></p>
											</div>
										</div>
									</div>
									<div class="wrap3">
									<button class="submit" type="button" id="changepassword">Submit</button>
									</div>
								
								</div>
							
							
							
							</div>
						</div>
				</div>
				
			</div>
			<div id="Help" class="tabcontent" style="display: none;">
					<h3>HELP</h3>
					<p>HELP is your help.</p>
				</div>
		</div>
	
	</section>
        <?php $this->load->view('footer/footer') ?>
    </body>

</html>
