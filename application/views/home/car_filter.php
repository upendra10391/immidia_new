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
                            <?php foreach ($this->yachtCountry as $key => $value) {?>
                            <option value="<?php echo $value->countryId ?>"><?php echo $value->countryName ?></option>
                        <?php }?>
                    </select>
                    <span class="subline">Country<br>Area</span>
                </div>
                <div class="state-icon">
                    <select class="state" name="carState" id="carState">>
                        <option>State</option>
                    </select>
                    <span class="subline">Sub<br>Area</span>
                </div>
            </div>
            <div class="inner-block fourth fourthv">
                <label>DEPARTURE</label>
                <div class="form-group">
                    <div class='input-group date' id='datetimepicker1'>
                        <input name="bookingDate" type='text' id="dparrivalc"  value="" class="date-picker arrival" placeholder="DD/MM/YYYY"/>
                        <div id="arrivalc"><span>MM</span><span>DD</span><span>Day</span></div>
                    </div>
                </div>
            </div>

            <div class="inner-block third">
                <label></label>
                <select class="durationc" name="days">
                    <?php foreach ($this->daysArrayInit as $key => $value) { if($key <5){ ?>
                        <option data-value="<?= $value['id'] ?>" value="<?= $value['id'] ?>" <?=($value['id'] == 4) ? 'selected' : '' ?>
                        ><?= $value['name'] ?></option>
                    <?php }} ?>
                </select>
                <div id="durationc"><span>1 Day</span><span>(9:00 to 19:00 Hours)</span></div>
            </div>
            <div class="inner-block seventh seventhv">
                <label></label>
                <div class="guest">
                    <p>
                        <img class="fa-plus add" src="<?php echo base_url(); ?>assets/images/plus.png">
                        <span>Guest(S)</span>
                        <input id="qty1" type="text" value="1" class="qty" name="noOfPasenger"/>
                        <img class="fa-minus minus" src="<?php echo base_url(); ?>assets/images/minus.png">
                    </p>
                </div>
            </div>
            <div class="inner-block second thirdv">
                <label></label>
                <select class="motor" name="driver">
                    <option value="">Type</option>
                    <option value="0">With Driver</option>
                    <option value="1">Without Driver</option>
                </select>
                <select class="trip" name="classification">
                    <option value="">Car Type</option>
                    <?php foreach ($this->carHours as $key => $value) { ?>
                        <option data-value="<?= $value->id ?>" value="<?= $value->id ?>"><?= $value->hoursdays ?></option>
                    <?php } ?>
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
    </form>
</div>