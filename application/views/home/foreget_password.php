<!DOCTYPE html>
<html>
    <head>
        <title>Login/Sign Up</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <?php $this->load->view('header/head'); ?>
        <style>
            .error{
    color:red;
}
</style>
        
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
    </head>

    <body id="login">

        <header>
            <?php $this->load->view('header/header'); ?>

            <div class="container-fluid book page-title ls">
                <div class="row">
                    <h1>Login / Sign Up</h1>
                </div>
            </div>
        </header>
        <section>
            <div class="container">
                <div class="row">
                    <div class="login clearfix">
                        <div class="col-md-5 ">
                            <div class="card">
                              <!--  <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active">
                                        <a href="#l" aria-controls="home" role="tab" data-toggle="tab">Login</a></li>
                                    <li role="presentation">
                                        <a href="#r" aria-controls="profile" role="tab" data-toggle="tab">Sign Up</a>
                                    </li>
                                </ul>-->
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="l">
                                        <img src="<?php echo base_url() ?>/assets/images/loader.gif" id="loader" style="display:none;">
                                      <p class="successmessageforget" style="color: red;"></p>
                                     <!--   <p class="successmessage" style="color: green;"></p>
                                       
                                        
                                        <div class="form-group">
                                            <button class="social-icon-f" id="fb"><i class="fa fa-facebook" aria-hidden="true"></i>Log in With Facebook</button>
                                        </div>
                                        <div class="form-group">
                                            <button class="social-icon-g" id="goo"><i class="fa fa-google-plus" aria-hidden="true"></i>Log in with Google </button>
                                        </div>
                                        <div class="form-group clearfix" id="or">
                                            <div class="col-md-5"><hr/></div><div class="col-md-2 or">OR</div><div class="col-md-5"><hr/></div>
                                        </div>-->
                                        <div class="form-group">
                                            <i class="fa fa-user-o i" aria-hidden="true"></i><input type="email" id="user_emailid" class="form-control" placeholder="Email"/>
                                        </div>
                                        <p id="error_user_emailid" style="color: red; display: none;"></p>
                               <!--  <div class="form-group" id="password">
                                            <i class="fa fa-lock i" aria-hidden="true"></i><input type="password" id="user_password" class="form-control" placeholder="Password"/>
                                        </div>
                                        <p id="error_user_password" style="color: red; display: none;"></p>
                                        <div class="form-group" id="remember">
                                            <div class="checkbox checkbox-inline">
                                                <input type="checkbox" id="inlineCheckbox2" value="option2">
                                                <label for="inlineCheckbox2"> Remember Password </label>
                                            </div>
                                        </div>-->
                                        <div class="form-group">
                                            <input type="button" class="submit" id="user_forget" name="login" value="Forget"/>
                                        </div>
                                    <!-- <div class="form-group user_forget" style="display:none;" id="">
                                            <input type="button" class="submit" id="user_forgetdata" name="login" value="Forget"/>
                                        </div>
                                        <div class="form-group">
                                            <p class="ca"><i class="fa fa-lock" aria-hidden="true"></i><a href="" id="forget" >Foregot password</a> 
                                                <i class="fa fa-user-o" aria-hidden="true"></i> New User ? 
                                                Create account</p>
                                        </div>-->
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="r">
                                         <p class="errormessagesignup" style="color: red;"></p>
                                        <p class="successmessagesignup" style="color: green;"></p>
                                        <p id="signup_error" style="display:none;"></p>
                                        <div class="form-group clearfix">
                                            <div class="col-md-2 padding0">
                                                <select class=" selecttitle" id="select_title">
                                                    <option>Title</option>
                                                    <option>Mr.</option>
                                                    <option>Miss</option>
                                                </select>
                                            </div>

                                            <div class="col-md-10 padding0">
                                                <input type="text" class="form-control" id="first_name" placeholder="First Name"/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="last_name" placeholder="Last Name"/>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="email_id" placeholder="Email"/>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" id="password" placeholder="Password"/>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" id="confirm_password"  placeholder="verify Password"/>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" id="mobile_no" placeholder="Mobile No."/>
                                        </div>
                                        <div class="form-group">
                                            <div class="bfh-selectbox bfh-countries" data-country="US" data-flags="true">
                                                <input type="hidden" value="">
                                                <a class="bfh-selectbox-toggle" role="button" data-toggle="bfh-selectbox" href="#">
                                                    <span class="bfh-selectbox-option input-medium" data-option=""></span>
                                                    <b class="caret"></b>
                                                </a>
                                                <div class="bfh-selectbox-options">
                                                    <input type="text" class="bfh-selectbox-filter">
                                                    <div role="listbox">
                                                        <ul role="option">
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="button" class="submit" id="signup" name="signup" value="SIGN UP"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 ">
                            <div id="myCarousel6" class="carousel slide" data-ride="carousel">

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img src="<?php echo base_url(); ?>/assets/images/login/s1.jpg">
                                        <h3>ARTHURO</h3>
                                    </div>

                                    <div class="item">
                                        <img src="<?php echo base_url(); ?>/assets/images/login/s1.jpg">
                                        <h3>ARTHURO</h3>
                                    </div>

                                    <div class="item">
                                        <img src="<?php echo base_url(); ?>/assets/images/login/s1.jpg">
                                        <h3>ARTHURO</h3>
                                    </div>
                                </div>

                                <!-- Left and right controls -->
                                <a class="left carousel-control" href="#myCarousel6" data-slide="prev">
                                    <i class="fa fa-chevron-left" aria-hidden="true"></i>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" href="#myCarousel6" data-slide="next">
                                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>

                        </div>			
                    </div> 
                </div>
            </div>	
        </section>
        <?php $this->load->view('footer/footer') ?>
    </body>

</html>
