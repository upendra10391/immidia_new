<?php //var_dump($_SESSION['carsearch']);?>
<div class="book-form">
    <img src="<?php echo base_url() ?>/assets/images/loader.gif" id="loaderCar" style="display:none" class="loader">
    <h3>Book Your Car Now</h3>
    <form action="<?php echo base_url('car')?>" method="get">
        <div class="book-inner">
            <div class="inner-block first firstv">
                <label></label>
                <div class="country-icon">
                    <select id="carCountry" name="carCountry" class="country">
                        <img src="<?php echo base_url() ?>/assets/images/country-code.png">
                        <option value="">Country</option>
                            <?php foreach ($this->carCountry as $key => $value) {?>
                        <option value="<?php echo $value->id ?>" <?php if($value->id==$_SESSION['carsearch']['carCountry']){?> selected="selected" <?php }?>><?php echo $value->countryName ?></option>
                        <?php }?>
                    </select>
                    <span class="subline">Country<br>Area</span>
                </div>
                <div class="state-icon">
                    <select class="state" name="carState" id="carState">>
                        <option><?php if(!empty($_SESSION['carsearch']['carStateName'])){echo $_SESSION['carsearch']['carStateName'] ;}else { echo 'State';}?></option>
                    </select>
                    <span class="subline">Sub<br>Area</span>
                </div>
            </div>
            <div class="inner-block fourth fourthv">
                <label>DEPARTURE</label>
                <div class="form-group">
                    <div class='input-group date' id='datetimepicker1'>
                        <input name="bookingDate" type='text' id="dparrivalc"  value="<?php echo date("Y-m-d");?>" class="date-picker arrival" placeholder="DD/MM/YYYY"/>
                    <div id="arrivalc"><span><?php echo date("F");?></span><span><?php echo date("j");?></span><span><?php echo date("D");?></span></div>
                   <!-- <div id="arrivalc"><span><?php if(!empty($_SESSION['carsearch'])){echo $_SESSION['carsearch']['carStateName'] ;}?></span></div>
                   --> </div>
                </div>
            </div>

            <div class="inner-block third">
                <label></label>
                <select class="durationc" name="days">
                   <?php foreach ($this->carHours as $key => $value) { ?>
                        <option data-value="<?= $value->id ?>" value="<?= $value->id ?>"><?= $value->hoursdays ?></option>
                    <?php } ?>
                </select>
                <div id="durationc"><span><?php if(!empty($_SESSION['carsearch']['days'])){echo $_SESSION['carsearch']['days'] ;}else { echo '1 Day';}?></span></div>
            </div>
            <div class="inner-block seventh seventhv">
                <label></label>
                <div class="guest">
                    <p>
                        <img class="fa-plus add" src="<?php echo base_url(); ?>assets/images/plus.png">
                        <span><?php if(!empty($_SESSION['carsearch']['noOfPasenger'])){echo $_SESSION['carsearch']['noOfPasenger'] ;}else { echo 'Guest(S)';}?></span>
                        <input id="qty1" type="text" value="<?php if(!empty($_SESSION['carsearch']['noOfPasenger'])){echo $_SESSION['carsearch']['noOfPasenger'] ;}else { echo '1';}?>" class="qty" name="noOfPasenger"/>
                        <img class="fa-minus minus" src="<?php echo base_url(); ?>assets/images/minus.png">
                    </p>
                </div>
            </div>
            <div class="inner-block second thirdv">
                <label></label>
                <select class="motor" name="driver">
                    <option value=""><?php if($_SESSION['carsearch']['driver']==0){echo 'With Driver' ;}else { echo 'Without Driver';}?></option>
                    <option value="1">With Driver</option>
                    <option value="0">Without Driver</option>
                </select>
                <select class="trip" name="classification" id="cartypeselect">
                    <option value=""><?php if(!empty($_SESSION['carsearch']['cartype'])){echo $_SESSION['carsearch']['cartype'];}else { echo 'Car Type';}?></option>
                    <?php foreach ($this->carClassification as $key => $value) {?>
                        <option value="<?php echo $value->id ?>"><?php echo $value->classificationName ?></option>
                    <?php }?>
                </select>
            </div>
           

            <label></label>
            <div class="inner-block eighth">
                <div class="eight-inner">
                    <img src="<?php echo base_url(); ?>assets/images/search.png">
                    <button class="book-submit" type="submit">Search</button>
                </div>
            </div>
        </div>
        <input type="hidden" value="" id="carCountryName" name="carCountryName"/>
        <input type="hidden" value="" id="carStateName" name="carStateName"/>
         <input type="hidden" name="cartype" value="" id="cartype">
    </form>
</div>