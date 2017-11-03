<!DOCTYPE html>
<html>
    <head>
        <title>Limousine Services</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <?php $this->load->view('header/head'); ?>
    </head>


    <body>
        <header>

            <?php $this->load->view('header/header'); ?>
            <div class="container-fluid book page-title ls">
                <div class="row">
                    <h1>Villa Limousine Services</h1>
                </div>
            </div>
        </header>
        <section>
            <div class="black-color">
                <div class="container">
                    <div class="row">
                        <div class="your-choice clearfix">
                            <h3>YOUR CHOICE</h3>
                            <div class="col-md-6 ">
                                <div class="form-group gborder">
                                    <div class="col-md-4 col-xs-4"><p class="title">VILLA</p></div>
                                    <div class="col-md-4 col-xs-4"><p class="value"><?php echo (!empty($villalimousineDetails->villaName)) ? $villalimousineDetails->villaName : '';?></p></div>
                                    <div class="col-md-4 col-xs-4"><p class="distance"></p></div>
                                </div>
                                <div class="form-group gborder">
                                    <div class="col-md-4 col-xs-4"><p class="title">CHECKIN</p></div>
                                    <div class="col-md-4 col-xs-4"><p class="value"><?php echo (!empty($checkIn)) ? date('Y-m-d',strtotime($checkIn)) :date('Y-m-d',strtotime($this->villaFilterParams['checkin']));?></p></div>
                                    <div class="col-md-4 col-xs-4"><p class="distance"></p></div>
                                </div>
                                <div class="form-group gborder">
                                    <div class="col-md-4 col-xs-4"><p class="title">CHECKOUT</p></div>
                                    <div class="col-md-4 col-xs-4"><p class="value"><?php echo (!empty($checkOut)) ? date('Y-m-d',strtotime($checkOut)) : date('Y-m-d',strtotime($this->villaFilterParams['checkout']));?></p></div>
                                    <div class="col-md-4 col-xs-4"><p class="distance"></p></div>
                                </div>
                                <div class="form-group gborder">
                                    <div class="col-md-4 col-xs-4"><p class="title">DESTINATION</p></div>
                                    <div class="col-md-4 col-xs-4"><p class="value">DUBAI</p></div>
                                    <div class="col-md-4 col-xs-4"><p class="distance"></p></div>
                                </div>
<!--                                <div class="form-group gborder">
                                    <div class="col-md-4 col-xs-4"><p class="title">Arrival Date</p></div>
                                    <div class="col-md-4 col-xs-4"><p class="value">2017-10-10</p></div>
                                    <div class="col-md-4 col-xs-4"><p class="distance"></p></div>
                                </div>-->

                            </div>
                            <?php $totalPrice = $days*$villalimousineDetails->dayPriceHighestHighSeason;?>
                            <div class="col-md-6 ">
                                <div class="form-group gborder">
                                    <div class="col-md-4 col-xs-4"><p class="title">PRICE</p></div>
                                    <div class="col-md-4 col-xs-4"><p class="value"></p></div>
                                    <div class="col-md-4 col-xs-4"><p class="distance">€ <?php echo (!empty($villalimousineDetails->dayPriceHighestHighSeason)) ? $totalPrice : 0;?></p></div>
                                </div>
                                <div class="form-group gborder">
                                    <div class="col-md-4 col-xs-4"><p class="title">VAT</p></div>
                                    <div class="col-md-4 col-xs-4"><p class="value"></p></div>
                                    <div class="col-md-4 col-xs-4"><p class="distance">€ 0.00</p></div>
                                </div>
                                <div class="form-group gborder">
                                    <div class="col-md-4 col-xs-4"><p class="title">CITY TAX</p></div>
                                    <div class="col-md-4 col-xs-4"><p class="value"></p></div>
                                    <div class="col-md-4 col-xs-4"><p class="distance">€ 0.00</p></div>
                                </div>
                                <div class="form-group gborder">
                                    <div class="col-md-4 col-xs-4"><p class="title">SERVICE TAX</p></div>
                                    <div class="col-md-4 col-xs-4"><p class="value"></p></div>
                                    <div class="col-md-4 col-xs-4"><p class="distance">€ 0.00</p></div>
                                </div>
                                <?php
//                                  $villPrice = $villalimousineDetails->amountofSecurityDeposit;
//                                  $vat = $villalimousineDetails->isTax;
//                                  $city_tax = $villalimousineDetails->cityTaxPercentage;
//                                  $service_tax = $villalimousineDetails->tax1;
//                                  $totalTax = ($vat+$city_tax+$service_tax);
//                                  $taxAmount = ($villPrice * $totalTax)/100;
//                                  $totalAmount = $villPrice + $taxAmount;
                                ?>
                                <div class="form-group gborder">
                                    <div class="col-md-4 col-xs-4"><p class="title">SUB TOTAL</p></div>
                                    <div class="col-md-4 col-xs-4"><p class="value"></p></div>
                                    <div class="col-md-4 col-xs-4"><p class="distance"><b>€ <?php echo $totalPrice;?></b></p></div>
                                </div>
                            </div>			
                        </div> 

                    </div>
                </div>
            </div>
            <form action="<?php echo base_url('save_vill_lumousine');?>" method="get">
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
                                    <input type="text" class="form-control" placeholder="Name" name="limousine_name"/>
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Address" name="limousine_address"/>
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Special Request" name="limousine_special"/>
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
                                    <select class="selectcss col-md-2" name="limousine_transfer_hour">
                                        <option>select</option>
                                        <option>1:00</option>
                                        <option>2:00</option>
                                    </select>
                                </div>

                                <div class="checkbox checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" value="option2" name="limousine_checkbox">
                                    <label for="inlineCheckbox2"> Limousine Arrival </label>
                                </div>

                                <div class="bnbutton">
                                    <button class="bbutton"><i class="fa fa-angle-left" aria-hidden="true"></i> BACK</button>
                                    <button class="nbutton" type="submit">NEXT <i class="fa fa-angle-right" aria-hidden="true"></i></button>
                                </div>
                                </div>



                                </div>

                                </div>
        </form>

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