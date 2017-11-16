<!DOCTYPE html>
<html>
    <head>
        <title>Car Search Result</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <?php $this->load->view('header/head'); ?>	
        <script>
            $(function () {
                $(".date-picker").datepicker({format: "MM d DD", todayHighlight: true, autoclose: true, });
                $(".date-picker").datepicker("hide");
            });
            $(function () {
                $('input#dparrival').change(function () {
                    adate = $("#dparrival").val();
                    var strArray = adate.split(" ");
                    $("#arrival").html("<span>" + strArray[0] + "</span><span>" + strArray[1] + "</span><span>" + strArray[2] + "</span>");
                })
            });

            $(function () {
                $('input#dpd').change(function () {
                    adate1 = $("#dpd").val();
                    var strArray1 = adate1.split(" ");
                    $("#departure").html("<span>" + strArray1[0] + "</span><span>" + strArray1[1] + "</span><span>" + strArray1[2] + "</span>");
                })
            });
            $(function () {
                $('select.duration').change(function () {
                    adate2 = $(".duration").val();
                    var strArray2 = adate2.split("(");
                    $("#duration").html("<span>" + strArray2[0] + "</span><span>(" + strArray2[1] + "</span>");
                })
            });
            $(function () {
                $('.add').on('click', function () {
                    var $qty = $(this).closest('p').find('.qty');
                    var currentVal = parseInt($qty.val());
                    if (!isNaN(currentVal)) {
                        $qty.val(currentVal + 1);
                    }
                });
                $('.minus').on('click', function () {
                    var $qty = $(this).closest('p').find('.qty');
                    var currentVal = parseInt($qty.val());
                    if (!isNaN(currentVal) && currentVal > 0) {
                        $qty.val(currentVal - 1);
                    }
                });
            });
            $('.option-tab').click(function () {
                $('.book-tab .tab-content').css('display', 'block').css('color', '');
            });

            $(function () {
                var vid = document.getElementById("bgvid");
                var pauseButton = document.querySelector("#polina button");

                if (window.matchMedia('(prefers-reduced-motion)').matches) {
                    vid.removeAttribute("autoplay");
                    vid.pause();
                    pauseButton.innerHTML = "Paused";
                }

            });
            $(document).ready(function () {
                $("#modify").click(function () {
                    $(".tabbable-line").toggle("");
                    $('#tab_default_3_a').click();
                });
            });

        </script>
    </head>



    <body>
        <header>
            <?php $this->load->view('header/header'); ?>
            <div class="container-fluid book-tab">
                <div class="row">
                    <div class="tabbable-line" style="display:none;">
                        <ul class="nav nav-tabs ">
                            <li class="option-tab">
                                <a href="#tab_default_1" data-toggle="tab">
                                    <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/1.png"/> </a>
                            </li>
                            <li class="option-tab">
                                <a href="#tab_default_2" data-toggle="tab">
                                    <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/2.png"/> </a>
                            </li>
                            <li class="option-tab">
                                <a href="#tab_default_3" data-toggle="tab">
                                    <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/3.png"/> </a>
                            </li>
                            <li class="option-tab">
                                <a href="#tab_default_4" data-toggle="tab">
                                    <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/4.png"/> </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane <?php if($this->input->get('jet')!='next'){?> active <?php }?>" id="tab_default_1">
                                <?php $this->load->view('home/yacht_filter'); ?>
                            </div>
                            <div class="tab-pane <?php if($this->input->get('jet')=='next'){?> active <?php }?>" id="tab_default_2">
                                    <?php 
                                        if($this->input->get('jet')=='next'){
                                            $this->load->view('home/jet_filter_next');
                                        }else{
                                            $this->load->view('home/jet_filter');
                                        }
                                    ?>
                            </div>
                            <div class="tab-pane" id="tab_default_3">
                                <?php $this->load->view('home/car_filter');?>

                            </div>
                            <div class="tab-pane" id="tab_default_4">
                                  <?php $this->load->view('home/vila_filter'); ?>

                            </div>
                        </div>
                    </div>
                    <div class="tabbable-line hide">
                        <ul class="nav nav-tabs ">
                            <li class="option-tab">
                                <a href="#tab_default_1" data-toggle="tab">
                                    <img class="img-responsive" src="<?php echo base_url(); ?>/assets/images/1.png"/> </a>
                            </li>
                            <li class="option-tab">
                                <a href="#tab_default_2" data-toggle="tab">
                                    <img class="img-responsive" src="<?php echo base_url(); ?>/assets/images/2.png"/> </a>
                            </li>
                            <li class="option-tab">
                                <a href="#tab_default_3" data-toggle="tab" id="tab_default_3_a">
                                    <img class="img-responsive" src="<?php echo base_url(); ?>/assets/images/3.png"/> 
                                </a>
                            </li>
                            <li class="option-tab">
                                <a href="#tab_default_4" data-toggle="tab">
                                    <img class="img-responsive" src="<?php echo base_url(); ?>/assets/images/4.png"/> </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="container-fluid page-title">
                <div class="row">
                    <h1>Search Result</h1>
                </div>
            </div>
        </header>
        <div class="container">
            <div class="row">
                <div class="breadcrumb">
                    <ul>
                        <li>Search</li>
                        <li>Select CAR</li>
                        <li>CAR Details</li>
                        <li>Payment</li>
                        <li>Confirmation</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-12 search-result">
                <div class="summary-title">
                    <h5>Search Summary</h5>
                  <a href="#" id="modify">Modify</a>
                </div>
                <div class="table-responsive summary-result">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Country</th>
                                <th>State</th>
                                <th>Duration</th>
                                <th>Departure</th>
                                <th>PASSENGER (s)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php echo $postData['carCountryName']?></td>
                                <td><?php echo $postData['carStateName']?></td>
                                <td><?php echo ($postData['days']>=5) ? $postData['days']-4 : $postData['days'];echo ($postData['days']>=5) ? " days" : " hours"?></td>
                                <td><?php echo $postData['bookingDate'];?></td>
                                <td><?php echo $postData['noOfPasenger'];?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="container avaibility">
            <div class="row">
                <div class="col-md-12 avialable-title">
                    <h3><?php echo count($arrCarDetails)?> CAR(S) avialable from <?php echo $postData['carStateName']?> on <?php echo $postData['bookingDate']?></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <p><b>PRICE</b></p>
                    <div id="range_03" class="irs-hidden-input"></div>
                    <link href="<?php echo base_url(); ?>/assets/slider/ion.rangeSlider.css" rel="stylesheet">
                    <link href="<?php echo base_url(); ?>/assets/slider/ion.rangeSlider.skinModern.css" rel="stylesheet">

                    <script src="<?php echo base_url(); ?>/assets/slider/ion.rangeSlider.min.js"></script>
                    <script src="<?php echo base_url(); ?>/assets/slider/ion.rangeSlider-init.js"></script>
                </div>
                <div class="col-md-4"></div><div class="col-md-4">
                    <div class="sorting">
                        <p>Sort By</p>
                        <select class="sort-dropdown">
                            <img src="<?php echo base_url(); ?>/assets/images/country-code.png">
                            <option>High to Low</option>
                            <option>Low to High</option>
                            <!-- <option>Popular</option> -->
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <?php
            $varExtraQuerystring = $_SERVER['QUERY_STRING'];
        ?>
        <div class="container-fluid result-list">
            <div class="row">
                <?php if($arrCarDetails){ foreach ($arrCarDetails as $objCarDetails){?>
                <div class="col-md-4">
                    <div class="list-inner">
                        <img class="img-responsive" src="<?php echo $this->IMAGE_URL.str_replace("..", "", $objCarDetails->banner[0]->banner); ?>">
                        <div class="list-detail">
                            <h2><?php echo $objCarDetails->carName?></h2>
                            <ul>
                                <li><?php echo $this->arrCurrency[$objCarDetails->currencyId]." ".$objCarDetails->price?></li>
                                <li>Passenger <?php echo $objCarDetails->numberOfPassengers?></li>
                                <li>Fuel / <?php echo $objCarDetails->fuelType?></li>
                            </ul>
                        </div>
                        <div class="hover-detail" >
                            <h1><?php echo $objCarDetails->carName?></h1>
                            <ul>
                                <li><?php echo $this->arrCurrency[$objCarDetails->currencyId]." ".$objCarDetails->price?></li>
                                <li>Passenger <?php echo $objCarDetails->numberOfPassengers?></li>
                                <li>Fuel / <?php echo $objCarDetails->fuelType?></li>
                            </ul>
                            <a href="<?php echo base_url('car-details/'.$objCarDetails->id.'?'.$varExtraQuerystring."&price=".$objCarDetails->price)?>">Book Now</a>
                        </div>
                    </div>
                </div>
                <?php }}?>
            </div>
        </div>
    </body>
    <?php $this->load->view('footer/footer') ?>
</body>
</html>