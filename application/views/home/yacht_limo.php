<!DOCTYPE html>
<html>
	<head>
	 <?php $this->load->view('header/head'); ?>
		
	</head>
	
	<header>
		<div class="container-fluid top-header black-header">
			<div class="row">
				<div class="col-md-2 logo">
					<a href="index.html"><img class="img-responsive" src="images/logo.png" /></a>
				</div>
				<div class="col-md-10 main-menu">
					 <nav class="navbar">
						<div class="navbar-header">
						  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						  </button>
						</div>
						<div class="collapse navbar-collapse" id="myNavbar">
						   <ul class="nav navbar-nav">
							<li class="menu-1"><a href="#">Products for Sale</a></li>
							<li class="menu-5"><a href="#">My account</a></li>
							<li class="menu-6"><a href="#">Contact us</a></li>
							<li class="menu-7"><a href="#">Immidia galaxy</a></li>
						  </ul>
					  </div>
					</nav>
				</div>
			</div>
		</div>
		
		<div class="container-fluid book page-title ls">
			<div class="row">
				<h1>Limousine Services</h1>
			</div>
		</div>
	</header>
	<body>
	<section>
		<div class="black-color">
			<div class="container">
				<div class="row">
					<div class="your-choice clearfix">
						<h3>YOUR CHOICE</h3>
						<div class="col-md-6 ">
							<div class="form-group gborder">
								<div class="col-md-4 col-xs-4"><p class="title">Yacht</p></div>
								<div class="col-md-4 col-xs-4"><p class="value">Arthuro III</p></div>
								<div class="col-md-4 col-xs-4"><p class="distance">€ 2250{inc.vat}</p></div>
							</div>
							<div class="form-group gborder">
								<div class="col-md-4 col-xs-4"><p class="title">Delivery port</p></div>
								<div class="col-md-4 col-xs-4"><p class="value">Cap D'Ail</p></div>
								<div class="col-md-4 col-xs-4"><p class="distance"></p></div>
							</div>
							<div class="form-group gborder">
								<div class="col-md-4 col-xs-4"><p class="title">Arrival Port</p></div>
								<div class="col-md-4 col-xs-4"><p class="value">port-Vauban</p></div>
								<div class="col-md-4 col-xs-4"><p class="distance"></p></div>
							</div>
							<div class="form-group gborder">
								<div class="col-md-4 col-xs-4"><p class="title">Departure Date</p></div>
								<div class="col-md-4 col-xs-4"><p class="value">2017-10-10</p></div>
								<div class="col-md-4 col-xs-4"><p class="distance"></p></div>
							</div>
							<div class="form-group gborder">
								<div class="col-md-4 col-xs-4"><p class="title">Arrival Date</p></div>
								<div class="col-md-4 col-xs-4"><p class="value">2017-10-10</p></div>
								<div class="col-md-4 col-xs-4"><p class="distance"></p></div>
							</div>
							
						</div>
						<div class="col-md-6 ">
							<div class="form-group gborder">
								<div class="col-md-4 col-xs-4"><p class="title">Departure Rate</p></div>
								<div class="col-md-4 col-xs-4"><p class="value"></p></div>
								<div class="col-md-4 col-xs-4"><p class="distance">€ 387.50</p></div>
							</div>
							<div class="form-group gborder">
								<div class="col-md-4 col-xs-4"><p class="title">Drop Off Rate</p></div>
								<div class="col-md-4 col-xs-4"><p class="value"></p></div>
								<div class="col-md-4 col-xs-4"><p class="distance">€ 193.75</p></div>
							</div>
							<div class="form-group gborder">
								<div class="col-md-4 col-xs-4"><p class="title">Formula</p></div>
								<div class="col-md-4 col-xs-4"><p class="value">Regular</p></div>
								<div class="col-md-4 col-xs-4"><p class="distance">€ 775</p></div>
							</div>
							<div class="form-group gborder">
								<div class="col-md-4 col-xs-4"><p class="title">Extra Time ?</p></div>
								<div class="col-md-4 col-xs-4"><p class="value"></p></div>
								<div class="col-md-4 col-xs-4"><p class="distance">€ 0</p></div>
							</div>
							<div class="form-group gborder">
								<div class="col-md-4 col-xs-4"><p class="title">Total</p></div>
								<div class="col-md-4 col-xs-4"><p class="value"></p></div>
								<div class="col-md-4 col-xs-4"><p class="distance"><b>€ 3787.00</b></p></div>
							</div>
						</div>			
					</div> 
					
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				
				<div class="limousine-services">
					<h3>TAKE ADVANTAGE OF OUR LIMOUSINE SERVICES</h3>
					<p class="subtitle">(Free Upto 6 Persons & Upto 25 KM)</p>
					
					
					<div class="checkbox checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" value="option1">
                        <label for="inlineCheckbox1"> Limousine Departure </label>
                    </div>
					<h4 class="btitle">LIMOUSINE PICKUP<h4>
					
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Name"/>
					</div>
					
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Address"/>
					</div>
					
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Special Request"/>
					</div>
					
					
					<div class="form-group clearfix">
						<label class="col-md-3">Number Of person</label>
						<div class="col-md-1 input-group np">
							<span class="input-group-btn">
								<button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
									<span class="glyphicon glyphicon-minus"></span>
								</button>
							</span>
							<input type="text" name="quant[1]" class="form-control input-number" value="1" min="1" max="10">
							<span class="input-group-btn">
								<button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[1]">
									<span class="glyphicon glyphicon-plus"></span>
								</button>
							</span>
						</div>
					</div>
					<div class="form-group clearfix">
					<label class="col-md-3">Transfer Hour:</label>
					<select class="selectcss col-md-2">
						<option>select</option>
						<option>1:00</option>
						<option>2:00</option>
					</select>
					</div>
					
					<div class="checkbox checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" value="option2">
                        <label for="inlineCheckbox2"> Limousine Arrival </label>
                    </div>
					
					<div class="bnbutton">
						<button class="bbutton"><i class="fa fa-angle-left" aria-hidden="true"></i> BACK</button>
						<button class="nbutton">NEXT <i class="fa fa-angle-right" aria-hidden="true"></i></button>
					</div>
				</div>
				
				
			
			</div>
		
		</div>
		
	</section>
	<footer class="footer">
		<div class="container-fluid footer-bottom">
			<div class="row">
				<div class="col-md-4 col-one">
					<div class="col-inner">
						<div class="left">
							<img class="img-responsive" src="images/logo1.png" />
							<p>Protector of the seas</p>
						</div>
						<div class="right">
							<img class="img-responsive" src="images/logo2.png" />
							<p>International Luxury hotel association</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-two">
					<div class="col-inner">
						<h3 class="title">Quick Links</h3>
						<div class="left">
							<ul>
								<li><a href="#">Privacy</a></li>
								<li><a href="#">Terms of Use</a></li>
								<li><a href="#">Assistance</a></li>
							</ul>
						</div>
						<div class="right">
							<ul>
								<li><a href="#">Contact Us</a></li>
								<li><a href="#">Sitemap</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-three">
					<div class="col-inner">
						<h3 class="title">Subscribe to our newsletter</h3>
						<form>
							<input type="email" class="newsletter-email" id="email" placeholder="Email">
							<button type="submit" class="newsletter-subscribe">Subscribe</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid footer-copyright">
			<div class="row">
				<div class="col-md-6 social-icon">
					<ul>
						<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
					</ul>
				</div>
				<div class="col-md-6 copyright">
					<p>&copy; Copyright 2017 - <a href="#">Immidialuxury.com</a></p>
				</div>
			</div>
		</div>
	</footer>
<script type="text/javascript">
	//plugin bootstrap minus and plus
//http://jsfiddle.net/laelitenetwork/puJ6G/
$('.btn-number').click(function(e){
    e.preventDefault();
    
    fieldName = $(this).attr('data-field');
    type      = $(this).attr('data-type');
    var input = $("input[name='"+fieldName+"']");
    var currentVal = parseInt(input.val());
    if (!isNaN(currentVal)) {
        if(type == 'minus') {
            
            if(currentVal > input.attr('min')) {
                input.val(currentVal - 1).change();
            } 
            if(parseInt(input.val()) == input.attr('min')) {
                $(this).attr('disabled', true);
            }

        } else if(type == 'plus') {

            if(currentVal < input.attr('max')) {
                input.val(currentVal + 1).change();
            }
            if(parseInt(input.val()) == input.attr('max')) {
                $(this).attr('disabled', true);
            }

        }
    } else {
        input.val(0);
    }
});
$('.input-number').focusin(function(){
   $(this).data('oldValue', $(this).val());
});
$('.input-number').change(function() {
    
    minValue =  parseInt($(this).attr('min'));
    maxValue =  parseInt($(this).attr('max'));
    valueCurrent = parseInt($(this).val());
    
    name = $(this).attr('name');
    if(valueCurrent >= minValue) {
        $(".btn-number[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')
    } else {
        alert('Sorry, the minimum value was reached');
        $(this).val($(this).data('oldValue'));
    }
    if(valueCurrent <= maxValue) {
        $(".btn-number[data-type='plus'][data-field='"+name+"']").removeAttr('disabled')
    } else {
        alert('Sorry, the maximum value was reached');
        $(this).val($(this).data('oldValue'));
    }
    
    
});
$(".input-number").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
             // Allow: Ctrl+A
            (e.keyCode == 65 && e.ctrlKey === true) || 
             // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
	</script>

</body>

</html>