<?php //var_dump($_SESSION['yachtFilterParams']);?>
<div class="book-form">
    <img src="<?php echo base_url() ?>/assets/images/loader.gif" id="loader" style="display:none" class="loader">
    <h3>Book Your Yacht Now</h3>
    <form action="yachts" method="post">
        <div class="book-inner">
            <div class="inner-block first">
                <label></label>
                <div class="country-icon">
                    <select id="yachtCountry" name="yachtCountry" class="country" onchange="getYachtState(this.value)">
                        <img src="<?php echo base_url() ?>/assets/images/country-code.png">
                        <option><?php if(!empty($_SESSION['yachtFilterParams']['yachtCountryName'])){echo $_SESSION['yachtFilterParams']['yachtCountryName'] ;}else { echo 'Country';}?></option>
                        <?php foreach ($this->yachtCountry as $key => $value) {
                            ?>
                            <option value="<?php echo $value->countryId ?>" <?php if($value->id==$_SESSION['yachtFilterParams']['yachtCountry']){?> selected="selected" <?php }?>><?php echo $value->countryName ?></option>
                        <?php } ?>
                    </select>
                    <input type="hidden" name="yachtCountryName" id="countryName">
                    <span class="subline">Country<br>Area</span>
                </div>
                <div class="state-icon">
                    <select class="state" name="yachtState" id="yachtState" onchange="getYachtDepartureCity('yachtCountry', 'yachtState', '1', 'yachtDays', 'yachtType', 'routeType')">>
                        <option><?php if(!empty($_SESSION['yachtFilterParams']['yachtStateName'])){echo $_SESSION['yachtFilterParams']['yachtStateName'] ;}else { echo 'State';}?></option>
                    </select>
                    <input type="hidden" name="yachtStateName" id="stateName">
                    <span class="subline">Sub<br>Area</span>
                </div>
            </div>
            <div class="inner-block second">
                <label></label>
                <select class="motor" name="yachtType" id="yachtType" onchange="getYachtDepartureCity('yachtCountry', 'yachtState', '1', 'yachtDays', 'yachtType', 'routeType');
                                                        validateSuperYacht('yachtType', 'yachtDays');">
                    <option value="0" <?php if($_SESSION['yachtFilterParams']['yachtType']==0){?> selected="selected" <?php }?>><?php if(!empty($_SESSION['yachtFilterParams']['yachtTypename'])){echo $_SESSION['yachtFilterParams']['yachtTypename'] ;}else { echo 'SAIL';}?></option>
                    <option value="1" selected>MOTOR/YACHT</option>
                    <option value="2" <?php if($_SESSION['yachtFilterParams']['yachtType']==2){?> selected="selected" <?php }?>>SUPER YACHT</option>

                </select>
                <select name="routeType" class="trip" id="routeType" onchange="getYachtDepartureCity('yachtCountry', 'yachtState', '1', 'yachtDays', 'yachtType', 'routeType')">
                    <option value="0" <?php if($_SESSION['yachtFilterParams']['routeType']==0){?> selected="selected" <?php }?>><?php if(!empty($_SESSION['yachtFilterParams']['routeTypename'])){echo $_SESSION['yachtFilterParams']['routeTypename'] ;}else { echo 'One Way';}?></option>
                    <option value="1" <?php if($_SESSION['yachtFilterParams']['routeType']==1){?> selected="selected" <?php }?>>Return</option>		
                </select>
            </div>
            <div class="inner-block third">
                <label></label>
                <select name="yachtDays" id="yachtDays" class="duration" onchange="onSelectYachtDaysChange('yachtDays', 'dpd')">
                    <?php foreach ($this->daysArrayInit as $key => $value) { ?>
                        <option data-value="<?= $value['id'] ?>" value="<?= $value['id'] ?>" <?=($value['id'] == 4) ? 'selected' : '' ?>
                        ><?= $value['name'] ?></option>
                    <?php } ?>
                </select>
                <div id="duration"><span>1 Day</span> <span>(9:00 to 19:00 Hours)</span></div>
            </div>
            <div class="inner-block fourth">
                <label>DEPARTURE</label>
                <div class="form-group">
                    <div class='input-group date' id='datetimepicker1'>
                        <input type='text' name="departureDate" id="dparrival"  value="" class="date-picker arrival" placeholder="DD/MM/YYYY" onchange="getDepartureDate('dparrival', 'dpd', 'yachtDays');" />
                        <div id="arrival"><span>MM</span><span>DD</span><span>Day</span></div>
                    </div>
                </div>
            </div>
            <div class="inner-block fifth">
                <label>ARRIVAL</label>
                <div class="form-group">
                    <div class='input-group date' id='datetimepicker1'>
                        <input type='text' disabled name="arrivalDate" id="dpd" class="date-picker departure" placeholder="DD/MM/YYYY" />
                        <div id="departure"><span>MM</span><span>DD</span><span>Day</span></div>
                    </div>
                </div>
            </div>
            <div class="inner-block sixth">
                <label></label>
                <select name="departureCity" class="departure-port" id="departureCity" onchange="getYachtArrivalCity('yachtCountry', 'yachtState', '1', 'yachtDays', 'departureCity', 'yachtType', 'routeType')"">
                    <option><?php if(!empty($_SESSION['yachtFilterParams']['yachtDepartureCityName'])){echo $_SESSION['yachtFilterParams']['yachtDepartureCityName'] ;}else { echo 'Departure Port';}?></option>
                </select>
                <input type="hidden" name="yachtDepartureCityName" id="departureCityName">
                <select name="arrivalCity" class="arrival-port" id="arrivalCity" onchange="getArrivalCityName('arrivalCity');">
                    <option><?php if(!empty($_SESSION['yachtFilterParams']['yachtArrivalCityName'])){echo $_SESSION['yachtFilterParams']['yachtArrivalCityName'] ;}else { echo 'Arrival Port';}?></option>
                </select>
                <input type="hidden" name="yachtArrivalCityName" id="arrivalCityName">
            </div>
            <div class="inner-block seventh">
                <label></label>
                <div class="guest">
                    <p>
                        <img class="fa-plus add" src="<?php echo base_url(); ?>assets/images/plus.png">
                        <span>Guest(S)</span>
                        <input id="qty1" type="text" name="guest" value="1" class="qty"/>
                        <img class="fa-minus minus" src="<?php echo base_url(); ?>assets/images/minus.png">
                    </p>
                </div>
            </div>
            <label></label>
            <div class="inner-block eighth">
                <div class="eight-inner">
                    <img src="<?php echo base_url(); ?>assets/images/search.png">
<input type="hidden" name="yachtTypename" value="" id="yachtTypename">
<input type="hidden" name="routeTypename" value="" id="routeTypename">
                    <button class="book-submit" type="submit">Search</button>
                </div>
            </div>
        </div>
    </form>
</div>