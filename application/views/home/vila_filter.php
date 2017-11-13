<div class="book-form">
    <img src="<?php echo base_url() ?>/assets/images/loader.gif" id="loadervilla" style="display:none" class="loader">
    <h3>Book Your Villa Now</h3>
    <form action="<?php echo base_url('villas');?>" method="post">
        <div class="book-inner">
            <div class="inner-block first firstv">
                <label></label>
                <div class="country-icon">
                    <select class="country" name="villa_country" id="vila_country">
                        <img src="<?php echo base_url(); ?>assets/images/country-code.png">
                        <option>Country</option>
                        <?php foreach($this->villaCountry as $key=>$val){?>
                        <option value="<?php echo $val->id;?>"><?php echo $val->countryName;?></option>
                        <?php }?>
                    </select>
                    <input type="hidden" name="villaCountryName" id="villaCountry">
                    <span class="subline">Country<br>Area</span>
                </div>
                <div class="state-icon">
                    <select class="state" id="villaState" name="villaState">
                        <option>State</option>
                       
                        
                    </select>
                    <input type="hidden" name="villaStateName" id="villaStateName">
                    <span class="subline">Sub<br>Area</span>
                </div>
            </div>
            <!--<div class="inner-block second">
                    <select class="motor">
                            <option>Motor</option>
                            <option>Motor 1</option>
                            <option>Motor 2</option>
                            <option>Motor 3</option>
                            <option>Motor 4</option>
                            <option>Motor 5</option>
                    </select>
                    <select class="trip">
                            <option>One Way</option>
                            <option>Return</option>
                            <option>Both</option>
                    </select>
            </div>-->
            <div class="inner-block thirdv">
                <label></label>
                <select class="departure-port vd" name="destination_name" id="villDestination">
                    <option>Select Destination</option>
                    
                </select>
            </div>
            <div class="inner-block fourth fourthv">
                <div class="form-group">
                    <label>CHECKIN</label>
                    <div class='input-group date' id='datetimepicker1'>
                        <input type='text' id="dparrivalv" name="checkin"  value="<?php echo date("Y-m-d");?>" class="date-picker arrival" placeholder="DD/MM/YYYY"/>
                        <div id="arrivalv"><span><?php echo date("F");?></span><span><?php echo date("j");?></span><span><?php echo date("D");?></span></div>
                    </div>

                </div>
            </div>
            <div class="inner-block fifth fifthv">
                <div class="form-group">
                    <label>CHECKOUT</label>
                    <div class='input-group date' id='datetimepicker1'>
                        <input type='text' id="dpdv" name="checkout" value="<?php echo date("Y-m-d",strtotime("+7 days"));?>" class="date-picker departure" placeholder="DD/MM/YYYY"/>
                        <div id="departurev"><span><?php echo date("F",strtotime("+7 days"));?></span><span><?php echo date("j",strtotime("+7 days"));?></span><span><?php echo date("D",strtotime("+7 days"));?></span></div>
                    </div>
                </div>
            </div>
            <!--<div class="inner-block sixth">
                    <select class="departure-port">
                            <option>Departure Port</option>
                    </select>
                    <select class="arrival-port">
                            <option>Arrival Port</option>
                    </select>
            </div>-->
            <div class="inner-block seventh seventhv">
                <label></label>
                <div class="guest">
                    <p>
                        <img class="fa-plus add" src="<?php echo base_url(); ?>assets/images/plus.png">
                        <span>Guest(S)</span>
                        <input id="qty1" type="text" value="1" class="qty" name="villa_guest"/>
                        <img class="fa-minus minus" src="<?php echo base_url(); ?>assets/images/minus.png">
                    </p>
                </div>
            </div>
            <label></label>
            <div class="inner-block eighth">

                <div class="eight-inner">
                    <img src="<?php echo base_url(); ?>assets/images/search.png">
                    <button class="book-submit" type="submit">Search</button>
                </div>
            </div>
        </div>
    </form>
</div>