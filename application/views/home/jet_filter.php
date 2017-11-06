<div class="book-form">
    <h3>Book Your Jet Now</h3>
    <form action="<?php echo base_url()?>" method="GET">
        <div class="book-inner" >
            <div class="inner-block first">
                <label></label>
                <input type="text"  name="jetCityFrom" class="from" placeholder="FROM : city, state"/>
                <input type="text"  name="jetCityTo" class="to" placeholder="To : city, state"/>
            </div>
            <div class="inner-block second fourthv">
                <label></label>
                <select class="motor" name="jetType">
                    <?php if($this->arrJetType){ foreach($this->arrJetType as $key=>$val){?>
                        <option value="<?php echo $key?>"><?php echo $val;?></option>
                    <?php }}?>
                </select>
                <select class="trip" name="jetRoundType" id="jetRoundType">
                    <option value="One Way">One Way</option>
                    <option value="Round Trip" selected="">Round Trip</option>
                </select>
            </div>

            <div class="inner-block fourth fourthv">
                <label>DEPARTURE</label>
                <div class="form-group">
                    <div class='input-group date' id='datetimepicker1'>
                        <input name="jetDepDate" type='text' id="dparrivalj"  value="" class="date-picker arrival" placeholder="DD/MM/YYYY"/>
                        <div id="arrivalj"><span>MM</span><span>DD</span><span>Day</span></div>
                    </div>
                </div>
            </div>
            <div class="inner-block fifth fourthv" id="divArrvDate">
                <label>ARRIVAL</label>
                <div class="form-group">
                    <div class='input-group date' id='datetimepicker1'>
                        <input name="jetArrDate" type='text' id="dpdj" class="date-picker departure" placeholder="DD/MM/YYYY"/>
                        <div id="departurej"><span>MM</span><span>DD</span><span>Day</span></div>
                    </div>
                </div>
            </div>
            <div class="inner-block sixth fourthv">
                <label></label>
                <select class="departure-port" name="jetDepTime">
                    <option>Departure Time</option>
                    <option value="2" >09:15</option>
                    <option value="3" >09:30</option>
                    <option value="4" >09:45</option>
                    <option value="5" >10:00</option>
                    <option value="6" >10:15</option>
                    <option value="7" >10:30</option
                    <option value="8" >10:45</option>
                    <option value="9" >11:00</option>
                    <option value="10" >11:15</option>
                    <option value="11" >11:30</option>
                    <option value="12" >11:45</option>
                    <option value="13" >12:00</option>
                    <option value="14" >12:15</option>
                    <option value="15" >12:30</option>
                    <option value="16" >12:45</option>
                    <option value="17" >13:00</option>
                    <option value="18" >13:15</option>
                    <option value="19" >13:30</option>
                    <option value="20" >13:45</option>
                    <option value="21" >14:00</option>
                    <option value="22" >14:15</option>
                    <option value="23" >14:30</option>
                    <option value="24" >14:45</option>
                    <option value="25" >15:00</option>
                    <option value="26" >15:15</option>
                    <option value="27" >15:30</option>
                    <option value="28" >15:45</option>
                    <option value="29" >16:00</option>
                    <option value="30" >16:15</option>
                    <option value="31" >16:30</option>
                    <option value="32" >16:45</option>
                    <option value="33" >17:00</option>
                    <option value="34" >17:15</option>
                    <option value="35" >17:30</option>
                    <option value="36" >17:45</option>
                    <option value="37" >18:00</option>
                    <option value="38" >18:15</option>
                    <option value="39" >18:30</option>
                    <option value="40" >19:00</option>
                    <option value="41" >19:15</option>
                    <option value="42" >19:30</option>
                    <option value="43" >19:45</option>
                    <option value="44" >20:00</option>
                    <option value="45" >20:15</option>
                    <option value="46" >20:30</option>
                    <option value="47" >20:45</option>
                    <option value="48" >21:00</option>
                    <option value="49" >21:15</option>
                    <option value="50" >21:30</option>
                    <option value="51" >21:45</option>
                    <option value="52" >22:00</option>
                    <option value="53" >22:15</option>
                    <option value="54" >22:30</option>
                    <option value="55" >22:45</option>
                    <option value="56" >23:00</option>
                    <option value="57" >23:15</option>
                    <option value="58" >23:30</option>
                    <option value="59" >23:45</option>
                </select>
                <select class="arrival-port" name="jetArrTime">
                    <option>Arrival Time</option>
                    <option value="1" >09:00</option>
                    <option value="2" >09:15</option>
                    <option value="3" >09:30</option>
                    <option value="4" >09:45</option>
                    <option value="5" >10:00</option>
                    <option value="6" >10:15</option>
                    <option value="7" >10:30</option
                    <option value="8" >10:45</option>
                    <option value="9" >11:00</option>
                    <option value="10" >11:15</option>
                    <option value="11" >11:30</option>
                    <option value="12" >11:45</option>
                    <option value="13" >12:00</option>
                    <option value="14" >12:15</option>
                    <option value="15" >12:30</option>
                    <option value="16" >12:45</option>
                    <option value="17" >13:00</option>
                    <option value="18" >13:15</option>
                    <option value="19" >13:30</option>
                    <option value="20" >13:45</option>
                    <option value="21" >14:00</option>
                    <option value="22" >14:15</option>
                    <option value="23" >14:30</option>
                    <option value="24" >14:45</option>
                    <option value="25" >15:00</option>
                    <option value="26" >15:15</option>
                    <option value="27" >15:30</option>
                    <option value="28" >15:45</option>
                    <option value="29" >16:00</option>
                    <option value="30" >16:15</option>
                    <option value="31" >16:30</option>
                    <option value="32" >16:45</option>
                    <option value="33" >17:00</option>
                    <option value="34" >17:15</option>
                    <option value="35" >17:30</option>
                    <option value="36" >17:45</option>
                    <option value="37" >18:00</option>
                    <option value="38" >18:15</option>
                    <option value="39" >18:30</option>
                    <option value="40" >19:00</option>
                    <option value="41" >19:15</option>
                    <option value="42" >19:30</option>
                    <option value="43" >19:45</option>
                    <option value="44" >20:00</option>
                    <option value="45" >20:15</option>
                    <option value="46" >20:30</option>
                    <option value="47" >20:45</option>
                    <option value="48" >21:00</option>
                    <option value="49" >21:15</option>
                    <option value="50" >21:30</option>
                    <option value="51" >21:45</option>
                    <option value="52" >22:00</option>
                    <option value="53" >22:15</option>
                    <option value="54" >22:30</option>
                    <option value="55" >22:45</option>
                    <option value="56" >23:00</option>
                    <option value="57" >23:15</option>
                    <option value="58" >23:30</option>
                    <option value="59" >23:45</option>
                </select>
            </div>

            <div class="inner-block seventh">
                <label></label>
                <div class="guest">
                    <p>
                        <img class="fa-plus add" src="<?php echo base_url(); ?>assets/images/plus.png">
                        <span>Passengers</span>
                        <input name="no_of_passanger" id="qty1" type="text" value="1" class="qty"/>
                        <img class="fa-minus minus" src="<?php echo base_url(); ?>assets/images/minus.png">
                    </p>
                </div>
            </div>
            <label></label>
            <div class="inner-block eighth">
                <div class="eight-inner">
                    <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                    <button class="book-submit" type="submit">Next</button>
                </div>
            </div>
        </div>
        <input type="hidden" value="next" name="jet"/>
    </form>
</div>