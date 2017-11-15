<?php
$today =date("Y-m-d",strtotime("+7 days"));
//var_dump($today);exit;?>
<!DOCTYPE html>
<html>
    <head>
        <title>Contract</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <?php $this->load->view('header/head'); ?>
    </head>

    <header>

        <?php $this->load->view('header/header'); ?>
        <div class="container-fluid book page-title villa-bg">
            <div class="row">
                <h1>Contract</h1>
            </div>
        </div>
    </header>
    <body id="contract" class="crc">
        <section>
            <div class="container">
                <div class="row">
                    <button class="submit">PRINT</button>
                    <h2 class="center">SHORT TERM VILLA RENTAL AGREEMENT</h2>
                </div>
                <div class="row ">
                    <p>This agreement is made on <b>2017-10-28</b></p>
                    <div class="col-md-6">
                        <p>between</p>
                        <div class="gbox">
                            <p>Name:<span><?php echo $blogs->villaName;?></span></p>
                            <p>Passport number:<span>Antibes</span></p>
                            <p>Phone:<br/><br/>(hereinafter called “the Tenant(s)”)<br/><br/>ON THE OTHER HAND</p>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <p>and</p>
                        <div class="gbox">
                            <p>The Service Provider:<span><?php echo $blogs->ownerName;?></span></p>
                            <p>Address:<span><?php echo $blogs->address;?></span></p>
                            <p>Name:<span>Diamond</span></p>
                            <p>Located in:<span>Courchevel</span><br/><br/>concerning the short-term rental of the property</p>

                        </div>
                    </div>
                </div>
                <div class="row ">
                    <p>Between the understanding Parties, hereafter called the “Service Provider” and the “Tenant(s)”, the following has been agreed:</p>
                    <div class="col-md-12">
                        <div class="gbox">
                            <p><span>36</span></p>
                            <p>Vehicle reg. No.:<span>  EB 547 BQ</span></p>
                            <p>Number of Guests:<span> 1</span></p>
                            <p>Rental period begins at 2 pm on:<span> 2017-10-28 and ends at 10 am on 2017-11-04</span></p>
                            <p>Rental Amount:<span> EURO  130410</span></p>
                            <p>Security deposit:<span><?php echo $blogs->amountofSecurityDeposit;?></span></p>
                            <p>Local taxes:<span><?php echo $blogs->cityTaxPercentage;?></span></p>
                            <p>Total Amount:<span> EURO  130410</span></p>
                            <p>Address of the property:<span> Courchevel 1850</span></p>
                            <p>Type of property:<span><?php echo $blogs->view;?></span></p>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row sp">

                        <h3>TERMS OF THE AGREEMENT</h3>
                        <ol>
                            <li>Should the Tenant(s) violate any of the terms of this agreement, the rental period shall be terminated 
                                immediately. The Tenant(s) shall vacate the premises at the expiration time and date of this agreement.</li>
                            <li>Smoking is allowed only outside the property.</li>
                            <li>The Tenant(s) shall not sublet the property.</li>
                            <li>The Tenant(s) shall have no more than the allowed number of people reside or sleep in the premises. 
                                Every extra person above the permitted number will be charged.</li>
                            <li>The Tenant(s) shall not create noise or disturb or annoy the surrounding property owners. 
                                Creating a disturbance of the above nature shall be grounds for immediate termination of this 
                                agreement and Tenant(s) shall then immediately vacate the premises. Quiet hour starts at 10 PM. 
                                We are not responsible for any complaints from other parties caused by the disturbance.</li>
                            <li>The Tenant(s) must be insured against “Tenant’s risks & liabilities”. The tenant(s) or insurance company 
                                cannot get any responsibility from the Landlord or from the service provider.</li>
                            <li>Tenant(s) agrees that fireworks and other hazardous materials shall not be used in or around the property.</li>
                            <li>Tenant(s) shall not use the property for illegal purposes and activities as per the law of the country of 
                                residence and will involve the Local Police if the Tenant(s) are found to be doing any of such activities, which 
                                will immediately cause termination of this agreement with no refund of rent or deposit.</li>
                            <li>Tenant(s) is/are advised that the property contains electrical appliances and will seek assistance in 
                                proper operation of the items. Landlord/Service Providers are not responsible for misuse of any electrical 
                                appliances in the apartment and/or damages caused.</li>
                            <li>Cable tv and wireless internet are provided in most of the villas and service level have been chosen by 
                                the Landlord. No refund of rent shall be given for outages, content, lack of content, speed, access problem, 
                                lack of knowledge of use, or personal preferences with regard to cable tv and/or internet services.</li>
                            <li>The Tenant(s) agrees that the rental period may not be extended without prior agreement of the service 
                                provider.</li>
                            <li>The Tenant(s) declares upon his/their honor that he/they will not undertake any professional activity 
                                in the holiday home and that the holiday home is being rented to him/them as temporary accommodation only, 
                                these being major previsions in the absence of which this rental would not have been granted.</li>
                            <li>The Tenant(s) agrees to accept the rented holiday home in its condition upon entry.</li>
                        </ol>
                        <p>Furniture and household effects must only sustain depreciation from normal use, for which they are 
                            designed. Those that are missing or made unusable due to abnormal use, must be paid for or replaced by the 
                            Tenant(s) with the consent of the service provider. If necessary, the following amounts of money will be 
                            retained: the value of broken or cracked objects, the cost of washing or cleaning stained rugs, blankets, 
                            mattresses, bedding, etc.</p>
                        <h4>PERSONAL BELONGINGS</h4>
                        <ol>
                            <li>Personal belongings left behind by Tenant(s) will be held for a period of maximum 7 days and every 
                                reasonable effort will be made to contact the Tenant(s) for return.</li>
                            <li>We do not take any responsibility of your personal belongings or any missing items.</li>
                            <li>If we find any of your personal belongings in our property after your departure, we will try and contact 
                                you to get the details as to where to ship the lost items; all the delivery charges will have to be paid by 
                                the Tenant(s) with a service fee on collection basis or the item(s) will only be shipped once we receive the 
                                full delivery and service fee charges.</li>
                        </ol>
                        <h4>SECURITY DEPOSIT AND REFUNDS</h4>
                        <ol>
                            <li>There shall be no refund of rent due to shortened stays or ruined expectations due to weather conditions, 
                                natural disasters, work, family emergencies and other commitments.</li>
                            <li>The Tenant(s) shall maintain the premises in a good, clean, and ready to rent condition, and use the 
                                premises only in a careful and lawful manner. The cost of any damage to the property caused by the Tenant(s) 
                                or/and any member residing at the property during the rental period will be deducted from the security 
                                deposit after the room inspection within 10 to 15 working days after the check-out date. If the security 
                                deposit is not sufficient to cover the damage(s), the Tenant(s) and/or other people residing at the 
                                property during the rental period will be responsible for paying any additional costs required immediately 
                                to the Landlord/Service Provider.</li>
                            <li>The cost of Deep Cleaning Fee will be deducted from Security Deposit if the premises are not returned 
                                in a good and clean condition without excessive debris in the premises.</li>
                        </ol>
                        <h4>CANCELLATION OR NO SHOWS</h4>
                        <ol>
                            <li>Cancellation: Cancellation policy is applicable for bookings made more than 30 days in advance. 
                                70% of the amount collected can be refunded until 30 days’ prior to arrival.</li>
                            <li>If the tenant cancels after the check-in time, no refund will be made.</li>
                            <li>In case of a no show, no refund will be made.</li>
                        </ol>
                        <h4>CANCELLATION BY Broker/Service provider</h4>
                        <p>On a very rare occasion, and/or in case of an emergency, we may need to cancel or relocate the booking. 
                            Whilst we always try to remain the booking unchanged, we must reserve the right to do so; in such 
                            circumstances the Tenant(s) will be notified as soon as the changes happen. All efforts will be made 
                            to re</p>
                        <p>locate your booking to an alternative property of the same standard. If the alternate option is not 
                            accepted by the Tenant(s), the payment, received by us will be fully refunded back. We regret we cannot 
                            pay any expenses, costs or losses incurred by the Tenant(s) as a result of any change or cancellation.</p>
                        <h4>LOST KEYS</h4>
                        <p>Keys, building access cards and a parking transponder handed to the Tenant(s) by us must be handed back 
                            to us on the date of the check-out. In case of a loss, charges will be applicable:</p>
                        <p>The booking is deemed to be confirmed ONLY after the payment of the total amount is paid in by the 
                            Tenant(s).</p>
                        <p>Please fill in and sign 2 (two) copies of this Agreement. One executed original will be passed back 
                            to you.</p>
                        <p>(We) agree to abide by the above conditions and hereby declare that the information provided above is 
                            true:</p>
                        <table class="table table-bordered">
                            <tr>
                                <td>Signed On : <span>2017-10-28</span></td>
                                <td>Signed On : <span>2017-10-28</span></td>
                            </tr>
                            <tr>
                                <td>Guest name: <span>Ju Violin</span></td>
                                <td>Service Provider : <span><?php echo $blogs->ownerName;?></span></td>
                            </tr>
                            <tr>
                                <td>Date of signature:  <span>2017-10-10</span></td>
                                <td>Date of signature:  <span>2017-10-10</span></td>
                            </tr>
                        </table>
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