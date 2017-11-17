<?php// var_dump($_SESSION['villaFilterParams']); ?>
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
                        <option value="<?php echo $val->id;?>" <?php if($val->id==$_SESSION['villaFilterParams']['villa_country']){?> selected="selected" <?php }?>><?php echo $val->countryName;?></option>
                        <?php }?>
                    </select>
                    <input type="hidden" name="villaCountryName" id="villaCountry" value="<?php echo (!empty($_SESSION['villaFilterParams']['villaCountryName'])) ? $_SESSION['villaFilterParams']['villaCountryName'] : '';?>">
                    <span class="subline">Country<br>Area</span>
                </div>
                <div class="state-icon">
                    <select class="state" id="villaState" name="villaState">
                        <?php //var_dump($_SESSION['villaFilterParams']['villaState']);?>
                        <option value="<?php if(!empty($_SESSION['villaFilterParams']['villaState'])){echo $_SESSION['villaFilterParams']['villaState'] ;}else{echo 0;}?>"><?php if(!empty($_SESSION['villaFilterParams']['villaStateName'])){echo $_SESSION['villaFilterParams']['villaStateName'] ;}else{echo 'State';}?></option>
                                               

                    </select>
                    <input type="hidden" name="villaStateName" id="villaStateName" value="<?php echo (!empty($_SESSION['villaFilterParams']['villaStateName'])) ? $_SESSION['villaFilterParams']['villaStateName'] : '';?>">
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
                <select class="departure-port vd" name="destination_name" id="villDestination" value="">
                
                    <option value="<?php if(!empty($_SESSION['villaFilterParams']['destination_name'])){echo $_SESSION['villaFilterParams']['destination_name'] ;}else{echo 0;}?>"><?php if(!empty($_SESSION['villaFilterParams']['villaDestinationName'])){echo $_SESSION['villaFilterParams']['villaDestinationName'] ;}else{echo 'destination';}?></option>
                    
                </select>
                 <input type="hidden" name="villaDestinationName" id="villaDestinationName" value="<?php echo (!empty($_SESSION['villaFilterParams']['villaDestinationName'])) ? $_SESSION['villaFilterParams']['villaDestinationName'] : '';?>">
                
            </div>
            <div class="inner-block fourth fourthv">
                <div class="form-group">
                    <label>CHECKIN</label>
                    <div class='input-group date' id='datetimepicker1'>
                        <input type='text' id="dparrivalv" name="checkin"  value=" <?php echo date("F j,l");?>" class="date-picker arrival" placeholder="DD/MM/YYYY"/>
                        <?php if(!empty($_SESSION['villaFilterParams']['checkin'])){?>
                         <div id="arrivalv"><span><?php echo date('F',strtotime($_SESSION['villaFilterParams']['checkin']));?></span><span><?php echo date('j',strtotime($_SESSION['villaFilterParams']['checkin']));?></span><span><?php echo date('l',strtotime($_SESSION['villaFilterParams']['checkin']));?></span></div>
                       <?php }else{?>
                        <div id="arrivalv"><span><?php echo date("F");?></span><span><?php echo date("j");?></span><span><?php echo date("l");?></span></div>
                        <?php }?>
                    </div>

                </div>
            </div>
            <div class="inner-block fifth fifthv">
                <div class="form-group">
                    <label>CHECKOUT</label>
                    <div class='input-group date' id='datetimepicker1'>
                        <input type='text' id="dpdv" name="checkout" value="<?php echo date("F j,l",strtotime("+7 days"));?>" class="date-picker departure" placeholder="DD/MM/YYYY"/>
                         <?php if(!empty($_SESSION['villaFilterParams']['checkout'])){?>
                         <div id="departurev"><span><?php echo date('F',strtotime($_SESSION['villaFilterParams']['checkout']));?></span><span><?php echo date('j',strtotime($_SESSION['villaFilterParams']['checkout']));?></span><span><?php echo date('l',strtotime($_SESSION['villaFilterParams']['checkout']));?></span></div>
                       <?php }else{?>
                        <div id="departurev"><span><?php echo date("F",strtotime("+7 days"));?></span><span><?php echo date("j",strtotime("+7 days"));?></span><span><?php echo date("l",strtotime("+7 days"));?></span></div>
                        <?php }?>
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

