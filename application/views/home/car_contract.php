<?php //var_dump($arrDetails['arrPost']);exit;?>
<!DOCTYPE html>
<html>
    <head>
        <title>Contract</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <?php $this->load->view('header/head'); ?>

    </head>
    <body id="contract" class="crc">
        <header>
            <?php $this->load->view('header/header'); ?>
            <div class="container-fluid book page-title ls">
                <div class="row">
                    <h1>Contract</h1>
                </div>
            </div>
        </header>
        <section>
            <div class="container">
                <div class="row">
                    <button class="submit">PRINT</button>
                    <h2 class="center">CAR RENTAL AGREEMENT</h2>
                </div>
                <div class="row ">
                    <div class="col-md-6">
                        <div class="gbox">
                            <p>Service Provider:<span><?php echo $arrDetails['carDetails']->centralAgency?></span></p>
                            <p>Departure location:<span><?php echo $arrDetails['carDetails']->startCity?></span></p>
                            <p>Departure Date:<span><?php echo $arrDetails['arrGet']['depDate']?></span></p>
                            <p>Return location:<span><?php echo $arrDetails['carDetails']->endCity?></span></p>
                            <p>Return Date:<span><?php echo $arrDetails['arrGet']['arrvDate']?></span></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="gbox">
                            <p>Name:<span></span></p>
                            <p>Mobile:<span></span></p>
                            <p>Email:<span></span></p>
                        </div>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-md-6">
                        <div class="gbox">
                            <p>Make & Model:<span><?php echo $arrDetails['carDetails']->carModelId?></span></p>
                            <p>Vehicle reg. No.:<span>  <?php echo $arrDetails['carDetails']->carRegistration?></span></p>
                            <p>Kms. out:<span></span></p>
                            <p>Kms. in:<span></span></p>
                            <p>Kms. driven:<span></span></p>
                            <p>Excess Kms.:<span></span></p>
                            <p>Kms. invoiced<span></span></p>
                            <p>Rate per Kms.<span></span></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="gbox">
                            <p>Driver 1:<span><?php if(!empty($arrDetails['arrPost']['driver1Name'])) echo $arrDetails['arrPost']['driver1Name'] ?></span></p>
                            <p>Driving License No.:<span></span></p>
                            <p>Date of Issue:<span><?php if(!empty($arrDetails['arrPost']['driver1LicenceDate'])) echo date('Y-m-d',strtotime($arrDetails['arrPost']['driver1LicenceDate'])) ?></span></p>
                            <p>Date of birth:<span><?php if(!empty($arrDetails['arrPost']['driver1Dob'])) echo date('Y-m-d',strtotime($arrDetails['arrPost']['driver1Dob'])); ?></span></p>
                            <p>Driver 2:<span><?php if(!empty($arrDetails['arrPost']['driver1Name'])) echo $arrDetails['arrPost']['driver2Name'] ?></span></p>
                            <p>Driving License No.:<span></span></p>
                            <p>Date of Issue:<span><?php if(!empty($arrDetails['arrPost']['driver2LicenceDate'])) echo date('Y-m-d',strtotime($arrDetails['arrPost']['driver2LicenceDate'])); ?></span></p>
                            <p>Date of birth:<span><?php if(!empty($arrDetails['arrPost']['driver2Dob'])) echo date('Y-m-d',strtotime($arrDetails['arrPost']['driver2Dob'])); ?></span></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <p class="center">Between the understanding Parties, hereafter called the “Service Provider” and the “Tenant(s)”, the following has been agreed:</p>
                </div>
                <div class="row">
                    <h3>CREDIT CARD GUARANTEE</h3>
                    <table class="table table-bordered">
                        <tr>
                            <td>Rental days :<?php echo $arrDetails['arrGet']['days']?></td>
                            <td>Drop Off fees: EURO <?php echo $arrDetails['carDetails']->deliveryDetails->dropoffRate?></td>
                            <td>Estimated TOTAL: EURO  <?php echo $arrDetails['arrGet']['price']+$arrDetails['carDetails']->deliveryDetails->deliveryRate+$arrDetails['carDetails']->deliveryDetails->dropoffRate?></td>
                        </tr>
                        <tr>
                            <td>Kms. Included: 250 Km/Day</td>
                            <td>Delivery fees: EURO <?php echo $arrDetails['carDetails']->deliveryDetails->deliveryRate?></td>
                            <td>Deductible: EURO  <?php echo $arrDetails['carDetails']->deductible?></td>
                        </tr>
                    </table>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <p>"I have read and accepted the general rental conditions of this contract attached to the vehicle 
                            documents.</p>
                        <p>I fully accept and agree to abide by them and to restore the above designated vehicle on the 
                            stipulated date. Any dispute concerning the interpretation or execution of this contract shall be 
                            according to the exclusive jurisdiction of serving Courts covering the headquarters of the Rental 
                            Company. The person hiring the car is responsible for any breach of the Road Traffic Act and/or 
                            Parking Regulation and/or Highway code."</p>
                        <table class="table table-bordered">
                            <tr>
                                <td>Signature :<br/></td>
                            </tr>
                            <tr>
                                <td>Customer Name:   <span>Ju Violin</span></td>
                            </tr>
                            <tr>
                                <td>Signed On: <span>2017-10-10</span></td>
                            </tr>
                        </table>
                        <br/>
                        <table class="table table-bordered">
                            <tr>
                                <td>Signature :<br/><img src="<?php echo base_url()?>assets/images/cra/s.jpg" class="img-responsive"</td>
                            </tr>
                            <tr>
                                <td>Service Provider- <span> <?php echo $arrDetails['carDetails']->centralAgency?></span></td>
                            </tr>
                            <tr>
                                <td>Date of signature: <span>2017-10-10</span> </td>
                            </tr>
                            <tr>
                                <td>Broker:<span>http://</span></td>
                            </tr>

                        </table>

                    </div>
                    <div class="col-md-6">
                        <img src="<?php echo base_url()?>assets/images/cra/1.png" class="img-responsive">
                        <img src="<?php echo base_url()?>assets/images/cra/2.png" class="img-responsive">
                        <img src="<?php echo base_url()?>assets/images/cra/3.png" class="img-responsive">
                        <img src="<?php echo base_url()?>assets/images/cra/4.png" class="img-responsive">
                    </div>
                </div>


                <div class="container">
                    <div class="row sp">

                        <h3>GENERAL TERMS AND CONDITIONS</h3>
                        <p>This contract is governed by the general terms and conditions provided therein as well as by the provisions
                            contained in the car rental price list in force and by various other documents countersigned by the customer 
                            and annexed hereto. Upon signing of this Agreement, the customer certifies that he/she has read each and 
                            every clause or provision thereof governing his relations with the service provider.</p>
                        <h4>1. DRIVERS</h4>
                        <ol type="1">
                            <li>Except as otherwise agreed in writing by the service provider, only the persons mentioned by name in the 
                                appropriate box on the back of this contract are entitled to drive the car covered thereby.</li>
                            <li>Furthermore, the driver must have reached the age required as noted in the rental price list 
                                and must be the holder of a valid driver’s license, which he/she has held for at least one year. 
                                In special circumstances, however the service provider may authorize in writing persons who do not fulfil this 
                                requirement to drive a vehicle.</li>
                        </ol>
                        <h4>2. VEHICLE DELIVERY</h4>
                        <ol type="1">
                            <li>Service provider will rent the customer a vehicle which is in perfect working order.</li>
                            <li>At the time of delivery, the customer is responsible for checking carefully that this is the case. 
                                The parties mentioned in the appropriate section on the back of this document must immediately report 
                                any noticeable fault.</li>
                            <li>The customer is liable for any noticeable fault which has not been mentioned at the time of the car 
                                delivery.</li>
                        </ol>
                        <h4>3. VEHICLE USE</h4>
                        <ol type="1">
                            <li>The customer undertakes to use the vehicle consciously and with care. In particular, he/she will 
                                perform regular servicing usually expected such as checking the level of water, oil and brake fluid. 
                                Should the vehicle be used over a long period of time, the customer will replace the oil at his own 
                                expense every 3000 kms with an official dealer of the car make.</li>
                            <li>The customer will never use the vehicle:
                                <ul>
                                    <li>To transport goods which are prohibited or dangerous.</li>
                                    <li>To transport passengers for money.</li>
                                    <li>To transport an excessive number of passengers or subjects.</li>
                                    <li>To give driving lessons, even free of charge.</li>
                                    <li>To tow, push or move other vehicles.</li>
                                    <li>In case of odometer malfunction.</li>
                                    <li>In the event of breakdown or mechanical fault.</li>
                                    <li>On any other surface than standard legally paved roads of the country where the car was hired.<li>
                                </ul>
                            </li>
                            <li>It is strictly forbidden for the customer to use the rented car for any sports events whatsoever such as 
                                motor races, rallies or to perform the reconnaissance of races or racing tracks or any other form of 
                                motor racing events or competitive sports</li>
                            <li>Under no circumstances whatsoever shall the vehicle be driven by anybody under the influence of 
                                medicine alcohol or drugs.</li>
                            <li>It is strictly forbidden for the customer to transform the vehicle, modify its technical features, 
                                add or remove any parts or accessories, engrave it or write any inscriptions on it</li>
                            </ul>
                            </li>
                        </ol>
                        <h4>4. CUSTOMERS OBLIGATIONS IN CASE OF BREAKDOWN OR FAULT</h4>
                        <ul>
                            <li>The customer must immediately inform service provider in writing of any breakdown or fault.</li>
                            <li>The repair must take place at the nearest representative of that make of car and only if service 
                                provider has given its prior consent in writing.</li>
                            <li>If these requirements have been fulfilled and provided that the breakdown or fault is not the result 
                                of an unauthorized or careless use of the vehicle, service provider will reimburse the repair cost to 
                                the customer after both, the invoice and the damaged parts have been presented.</li>
                            <li>If the breakdown or fault is result of an unauthorized or careless use, the customer is liable for 
                                any costs of damage caused to the vehicle including the number of days of vehicle immobilization during 
                                the repair according to the applicable rental price list, in addition to included kms.</li>
                            <li>Service provider refuses to accept liability for any delay, loss or damage resulting from a breakdown 
                                or fault of the vehicle</li>
                        </ul>
                        <h4>5. INSURANCE/CUSTOMER'S OBLIGATIONS IN CASE OF ACCIDENT, DAMAGE, LOSS OR THEFT CAUSED TO THE VEHICLE.</h4>
                        <h5>GENERAL:</h5>
                        <ol>
                            <li>In case of accident or any damage caused to the vehicle, including, amongst other things, theft, theft 
                                attempt, or act of vandalism, the customer promises to take all steps or measures necessary to protect the 
                                service provider’s interests. In particular, he/she must
                                <ul>
                                    <li>Inform the service provider immediately in writing.</li>
                                    <li>Fill in an accident report.</li>
                                    <li>Demand a police report.</li>
                                </ul>
                            <li>In case of accident, the customer must meet the vehicle reparation costs to the agency of departure.</li>
                            <li>The service provider refused to accept responsibility for any delay, loss or damage resulting from an 
                                accident, breakdown or any other mechanical problem with the vehicle.</li>
                        </ol>
                        <h5>THIRD PARTY LIABILITY:</h5>
                        <ol>
                            <li>The Customer (as well as any authorized drivers) is covered by the service provider’s unlimited Third 
                                Party Liability Insurance contract. This insurance includes a fixed deductible specified by the service 
                                provider – for which the customer is responsible. It covers any property and/or physical damage caused to 
                                third parties.</li>
                            <li>In the event that the Third-Party Insurance Company should refuse or reduce the granted benefits by 
                                virtue of Laws of the Country and/or State in which the rental takes place on insurance contracts or in 
                                application of the insurance company’s general terms and conditions, the damage repair shall remain under 
                                customer’s responsibility and the customer shall compensate the service provider for any loss suffered or 
                                damage caused.</li>
                        </ol>
                        <h5>LOSS, THEFT OR DAMAGE CAUSED TO THE VEHICLE:</h5>
                        <ol>
                            <li>The customer does not benefit from any insurance offered by the service provider. The customer is responsible as per the standard terms and conditions of the service provider for Loss, Theft, Attempt to Theft and damage caused to the vehicle based on the options provided to the customer at the time of taking possession of the vehicle.
                            <li>At the conclusion of the contract, the customer may conclude – against payment of the applicable premium a fully comprehensive insurance covering any damages caused to the vehicle or in case of theft or attempt of theft (see above 5.6). If this is the case, the customer shall only be responsible for the deductible, except if the insurance company refuses to indemnify or does not fully indemnify the service provider. In that event, the customer shall indemnify the service provider for any damages or loss the service provider may suffer.
                            <li>In case of damage caused to vehicle, irrespective of the origin of such damage (i.e. collision, accident, theft, attempt of theft, loss, etc.) and irrespective of the insurance option chosen by the customer (art. 5.6), the customer shall indemnify the service provider of the loss incurred due to immobilization of the vehicle, up to 10 days of rental, according to rental rate that has been agreed. This amount is due by the customer, even if the damage is not caused by the customer’s fault.
                            <li>Excluded from the fully comprehensive insurance, for any vehicles (under the customer’s liability) are:
                                <ul>
                                    <li>Damage caused by vandalism;</li>
                                    <li>Damage or loss caused by virtue of art. 3.2 to 3.4;</li>
                                    <li>Loss of revenue due to immobilization;</li>
                                    <li>Damage to tyres, equipment/fittings, and upper parts of the vehicle (canvas cover, tarpaulin, hood);</li>
                                    <li>Damage to mechanical parts resulting from a misuse, from an unauthorized part or from the use of an 
                                        inappropriate fuel;</li>
                                    <li>And damage caused to the vehicle as a result of war, civil disturbances or riots.</li>
                                </ul>
                            </li>
                            <li>Excluded from the fully comprehensive insurance, for convertible vehicles (under the customer’s liability) are also:
                                <ul>
                                    <li>Damage caused to the roof (soft top, hood, mechanism or windows) either by mistake or misuse.</li>
                                    <li>Damage resulting from someone (or several persons) sitting on the hood.</li>
                                    <li>Damage inside the car caused by leaving the roof open in case of rain, wind, or similar reasons.</li>
                                </ul>
                        </ol>
                        <h5>PERSONAL ACCIDENT INSURANCE</h5>
                        <ul>
                            <li><b>Personal Accident Insurance (PAI)</b>:The customer is proposed a Personal Accident Insurance (PAI) 
                                for drivers and passenger(s) by the respective service provider which is at the option of the customer.</li>
                        </ul>
                        <h4>6. AMOUNTS DUE FROM THE CUSTOMER AND GUARANTEES</h4>
                        <ol>
                            <li>If the customer is responsible for a breakdown, defect, accident or for any damages whatsoever, 
                                the rental price remains due for the full period up to the return date as initially agreed, 
                                in addition to any other sums due by the customer to the service provider by virtue of this agreement.</li>
                            <li>The calculation of the kilometric allowance shall only be based on the original odometer.</li>
                            <li>Fuel expenses are exclusively supported by the customer and are calculated by comparison to the fuel 
                                level on car delivery as per the policy of the service provider.</li>
                            <li>The customer guarantees to the service provider that he/she will pay all amounts mentioned above and any 
                                other sum resulting from his contract and in particular, from damage caused to the vehicle by signing a 
                                blank sales draft or any credit card accepted by the service provider. Thus, he/she expressly authorizes 
                                the service provider to cash the amount owed buy the customer as soon as the contract is terminated. The 
                                customer conforms therewith that he/she owes this amount and that he/she must pay it to the service 
                                provider.</li>
                            <li>The customer may be required to pay a cash deposit in order to guarantee the service provider’s claims. 
                                This security earns no interest.</li>
                        </ol>
                        <h4>7. RETURN OF THE VEHICLE</h4>
                        <ul>
                            <li>The customer will return the vehicle in perfect working order at the place and on the date agreed in this 
                                contract, with all accessories and any documents delivered by the service provider. The customer has no right 
                                to retain the vehicle whatsoever.</li>
                            <li>In the event that the customer should leave the vehicle in a place not beforehand accepted by the service 
                                provider, the customer acknowledges hereby that he/she owes the service provider at least (and according to 
                                the model of the rented vehicle) a supplementary allowance as per the policy of the service provider.</li>
                            <li>Any request for prolongation of this contract must be transmitted to the service provider in writing at 
                                least 24 hours before the expiration date.</li>
                            <li>Should the customer breach any of the customer’s obligations, the service provider shall be entitled to 
                                request at any time that the vehicle be returned immediately.</li>
                        </ul>
                        <h4>8. MISCELLANEOUS</h4>
                        <ol>
                            <li>The customer must pay for any fine or ticket incurred during his or her vehicle.</li>
                            <li>The customer promises not to leave the vehicle without first checking that all doors are locked, 
                                that the windows and the sun roof are closed and that he/she or she has not forgotten the keys in/on the 
                                car.</li>
                            <li>The customer discharges the service provider of any responsibility for any damage to personal objects 
                                transported in the vehicle and belonging to the customer or any third person.</li>
                        </ol>
                        <h4>9. CONTRACT CHANGES OR AMMENDMENTS</h4>
                        <p>Special provisions or agreements made in addition to this contract and in particular, any changes or 
                            amendments to this contract and null and void unless they have been agreed upon in writing and duly signed 
                            by both parties</p>
                        <h4>10. NON-EXCERSING OF A RIGHT</h4>
                        <p>In the event that either party of this contract does not exercise any of the rights or claims imparted to 
                            that party according to the general terms and conditions thereof shall in no way be considered as 
                            relinquishment of the benefits of such rites or claims.</p>
                        <h4>11. GOVERNING LAW AND PLACE OF JURISDICTION</h4>
                        <ol>
                            <li>This contract is governed exclusively by the Laws of the Country and/or State in which the rental 
                                takes place.</li>
                            <li>Both parties hereby agree that any law suits arising out of the matters followed in this contract 
                                shall be brought under the competent courts of the Country and/or State in which the rental takes place.</li>
                        </ol>
                    </div>
                </div>	
        </section>
        <?php $this->load->view('footer/footer') ?>
        <script type="text/javascript">
            //plugin bootstrap minus and plus
            //http://jsfiddle.net/laelitenetwork/puJ6G/
            $('.btn-number').click(function (e) {
                e.preventDefault();

                fieldName = $(this).attr('data-field');
                type = $(this).attr('data-type');
                var input = $("input[name='" + fieldName + "']");
                var currentVal = parseInt(input.val());
                if (!isNaN(currentVal)) {
                    if (type == 'minus') {

                        if (currentVal > input.attr('min')) {
                            input.val(currentVal - 1).change();
                        }
                        if (parseInt(input.val()) == input.attr('min')) {
                            $(this).attr('disabled', true);
                        }

                    } else if (type == 'plus') {

                        if (currentVal < input.attr('max')) {
                            input.val(currentVal + 1).change();
                        }
                        if (parseInt(input.val()) == input.attr('max')) {
                            $(this).attr('disabled', true);
                        }

                    }
                } else {
                    input.val(0);
                }
            });
            $('.input-number').focusin(function () {
                $(this).data('oldValue', $(this).val());
            });
            $('.input-number').change(function () {

                minValue = parseInt($(this).attr('min'));
                maxValue = parseInt($(this).attr('max'));
                valueCurrent = parseInt($(this).val());

                name = $(this).attr('name');
                if (valueCurrent >= minValue) {
                    $(".btn-number[data-type='minus'][data-field='" + name + "']").removeAttr('disabled')
                } else {
                    alert('Sorry, the minimum value was reached');
                    $(this).val($(this).data('oldValue'));
                }
                if (valueCurrent <= maxValue) {
                    $(".btn-number[data-type='plus'][data-field='" + name + "']").removeAttr('disabled')
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