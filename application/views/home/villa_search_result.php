<!DOCTYPE html>
<html>
    <head>
        <title>Villa Search Result</title>
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
                    $(".tabbable-line").toggleClass("hide");


                });
            });

        </script>
    </head>

    <header>
        <?php $this->load->view('header/header'); ?>
        <div class="container-fluid book-tab">
            <div class="row">
                <div class="tabbable-line hide">
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
                        <div class="tab-pane active" id="tab_default_1">
                            <div class="book-form">
                                <h3>Book Your Yacht Now</h3>
                                <form>
                                    <div class="book-inner">
                                        <div class="inner-block first">
                                            <div class="country-icon">
                                                <select class="country">
                                                    <img src="<?php echo base_url(); ?>assets/images/country-code.png">
                                                    <option>Country</option>
                                                    <option>Country 1</option>
                                                    <option>Country 2</option>
                                                    <option>Country 3</option>
                                                    <option>Country 4</option>
                                                    <option>Country 5</option>
                                                </select>
                                                <span class="subline">Country<br>Area</span>
                                            </div>
                                            <div class="state-icon">
                                                <select class="state">
                                                    <option>State</option>
                                                    <option>State 1</option>
                                                    <option>State 2</option>
                                                    <option>State 3</option>
                                                    <option>State 4</option>
                                                    <option>State 5</option>
                                                </select>
                                                <span class="subline">Sub<br>Area</span>
                                            </div>
                                        </div>
                                        <div class="inner-block second">
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
                                        </div>
                                        <div class="inner-block third">
                                            <select class="duration">
                                                <option><b>Half Day </b>(9AM - 1PM)</option>
                                                <option>Half Day (2PM - 6PM)</option>
                                                <option>24 Hours (Noon to Noon)</option>
                                                <option>1 Day (9:00 to 19:00 Hours)</option>
                                                <option>More</option>
                                            </select>
                                            <div id="duration"><span>1 Day</span> <span>(9:00 to 19:00 Hours)</span></div>
                                        </div>
                                        <div class="inner-block fourth">
                                            <div class="form-group">
                                                <div class='input-group date' id='datetimepicker1'>
                                                    <input type='text' id="dparrival"  value="" class="date-picker arrival" placeholder="DD/MM/YYYY"/>
                                                    <div id="arrival"><span>MM</span><span>DD</span><span>Day</span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="inner-block fifth">
                                            <div class="form-group">
                                                <div class='input-group date' id='datetimepicker1'>
                                                    <input type='text' id="dpd" class="date-picker departure" placeholder="DD/MM/YYYY"/>
                                                    <div id="departure"><span>MM</span><span>DD</span><span>Day</span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="inner-block sixth">
                                            <select class="departure-port">
                                                <option>Departure Port</option>
                                            </select>
                                            <select class="arrival-port">
                                                <option>Arrival Port</option>
                                            </select>
                                        </div>
                                        <div class="inner-block seventh">
                                            <div class="guest">
                                                <p>
                                                    <img class="fa-plus add" src="<?php echo base_url(); ?>assets/images/plus.png">
                                                    <span>Guest(S)</span>
                                                    <input id="qty1" type="text" value="1" class="qty"/>
                                                    <img class="fa-minus minus" src="<?php echo base_url(); ?>assets/images/minus.png">
                                                </p>
                                            </div>
                                        </div>
                                        <div class="inner-block eighth">
                                            <img src="<?php echo base_url(); ?>assets/images/search.png">
                                            <button class="book-submit" type="submit">Search</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab_default_2">
                            2
                        </div>
                        <div class="tab-pane" id="tab_default_3">
                            3
                        </div>
                        <div class="tab-pane" id="tab_default_4">
                            4
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid page-title villa-bg">
            <div class="row">
                <h1>Villa Search Result</h1>
            </div>
        </div>
    </header>

    <body>
        <div class="container">
            <div class="row">
                <div class="breadcrumb">
                    <ul>
                        <li>Search</li>
                        <li>Select Villa</li>
                        <li>Villa Details</li>
                        <li>Payment</li>
                        <li>Confirmation</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-12 search-result">
                <div class="summary-title">
                    <h5>Search Summary</h5><a href="#" id="modify">Modify</a>
                </div>
                <div class="table-responsive summary-result">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Country</th>
                                <th>State</th>
                                <th>Destination</th>
                                <th>Checkin</th>
                                <th>Checkout</th>
                                <th>Guest (s)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php echo $villaFilterParams['villaCountryName'];?></td>
                                <td><?php echo $villaFilterParams['villaStateName'];?></td>
                                <td>Dubai</td>
                                <td><?php echo $villaFilterParams['checkin'];?></td>
                                <td><?php echo $villaFilterParams['checkout'];?></td>
                                <td><?php echo $villaFilterParams['villa_guest'];?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="container avaibility">
            <div class="row">
                <div class="col-md-12 avialable-title">
                    <h3><?php echo count($villaList);?> Villa(s) avialable from <?php echo $villaFilterParams['villaCountryName'];?> on <?php echo $villaFilterParams['checkin'];?></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <p><b>PRICE</b></p>
                    <div id="range_03" class="irs-hidden-input"></div>

                    <link href="<?php echo base_url(); ?>assets/slider/ion.rangeSlider.css" rel="stylesheet">
                    <link href="<?php echo base_url(); ?>assets/slider/ion.rangeSlider.skinModern.css" rel="stylesheet">

                    <script src="<?php echo base_url(); ?>assets/slider/ion.rangeSlider.min.js"></script>
                    <script src="<?php echo base_url(); ?>assets/slider/ion.rangeSlider-init.js"></script>
                </div>
                <div class="col-md-4"></div><div class="col-md-4">
                    <div class="sorting">
                        <p>Sort By</p>
                        <select class="sort-dropdown">
                            <img src="<?php echo base_url(); ?>assets/images/country-code.png">
                            <option>High to Low</option>
                            <option>Low to High</option>
                            <option>Popular</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid result-list">
            <div class="row">
              <?php
             foreach($villaList as $villaListData){?>
                <div class="col-md-4">
                    <div class="list-inner">
                        <img class="img-responsive" src="<?php echo $imageUrl.str_replace('..','',$villaListData->banner[0]->banner); ?>">
                        <div class="list-detail">
                            <h2><?php echo $villaListData->villaName;?></h2>
                            <ul>
                                <li>€ <?php echo $villaListData->price;?></li>
                                <li>TO SLEEP <?php echo $villaListData->guestSleeping;?></li>
                                <li>AREA <?php echo $villaListData->surfaceArea;?> m<sup>2</sup> </li>
                                <li>ROOMS <?php echo $villaListData->totalRooms;?></li>
                            </ul>
                        </div>
                        <div class="hover-detail" >
                            <h1><?php echo $villaListData->villaName;?></h1>
                            <ul>
                                <li>€ <?php echo $villaListData->price;?></li>
                                <li>TO SLEEP <?php echo $villaListData->guestSleeping;?></li>
                                <li>AREA <?php echo $villaListData->surfaceArea;?> m<sup>2</sup> </li>
                                <li>ROOMS <?php echo $villaListData->totalRooms;?></li>
                            </ul>
                            <?php //$objQueryString = 'villa_country='.$villaFilterParams['villa_country'].'&villaState='.$villaFilterParams['villaState'].'&destinationId='.$villaFilterParams['destination_name'];?>
                            <a href="<?php echo base_url('villa-search').'/'.$villaListData->id;?>">More Info</a>
                        </div>
                    </div>
                </div>
                
                <?php }
               
                ?>
<!--                <div class="col-md-4">
                    <div class="list-inner">
                        <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/villa/2.jpg">
                        <div class="list-detail">
                            <h2>DIAMOND</h2>
                            <ul>
                                <li>€ 108,000.00</li>
                                <li>TO SLEEP 16</li>
                                <li>AREA 1300</li>
                                <li>ROOMS 15</li>
                            </ul>
                        </div>
                        <div class="hover-detail" >
                            <h1>DIAMOND</h1>
                            <ul>
                                <li>€ 108,000.00</li>
                                <li>TO SLEEP 16</li>
                                <li>AREA 1300</li>
                                <li>ROOMS 15</li>
                            </ul>
                            <a href="villa-search.html">More Info</a>
                        </div>
                    </div>
                </div>-->
<!--                <div class="col-md-4">
                    <div class="list-inner">
                        <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/villa/3.jpg">
                        <div class="list-detail">
                            <h2>DIAMOND</h2>
                            <ul>
                                <li>€ 108,000.00</li>
                                <li>TO SLEEP 16</li>
                                <li>AREA 1300</li>
                                <li>ROOMS 15</li>
                            </ul>
                        </div>
                        <div class="hover-detail" >
                            <h1>DIAMOND</h1>
                            <ul>
                                <li>€ 108,000.00</li>
                                <li>TO SLEEP 16</li>
                                <li>AREA 1300</li>
                                <li>ROOMS 15</li>
                            </ul>
                            <a href="villa-search.html">More Info</a>
                        </div>
                    </div>
                </div>-->

            </div>
            
<!--            <div class="row">
                <div class="col-md-4">
                    <div class="list-inner">
                        <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/villa/1.jpg">
                        <div class="list-detail">
                            <h2>DIAMOND</h2>
                            <ul>
                                <li>€ 108,000.00</li>
                                <li>TO SLEEP 16</li>
                                <li>AREA 1300</li>
                                <li>ROOMS 15</li>
                            </ul>
                        </div>
                        <div class="hover-detail" >
                            <h1>DIAMOND</h1>
                            <ul>
                                <li>€ 108,000.00</li>
                                <li>TO SLEEP 16</li>
                                <li>AREA 1300</li>
                                <li>ROOMS 15</li>
                            </ul>
                            <a href="villa-search.html">More Info</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="list-inner">
                        <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/villa/2.jpg">
                        <div class="list-detail">
                            <h2>DIAMOND</h2>
                            <ul>
                                <li>€ 108,000.00</li>
                                <li>TO SLEEP 16</li>
                                <li>AREA 1300</li>
                                <li>ROOMS 15</li>
                            </ul>
                        </div>
                        <div class="hover-detail" >
                            <h1>DIAMOND</h1>
                            <ul>
                                <li>€ 108,000.00</li>
                                <li>TO SLEEP 16</li>
                                <li>AREA 1300</li>
                                <li>ROOMS 15</li>
                            </ul>
                            <a href="villa-search.html">More Info</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="list-inner">
                        <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/villa/3.jpg">
                        <div class="list-detail">
                            <h2>DIAMOND</h2>
                            <ul>
                                <li>€ 108,000.00</li>
                                <li>TO SLEEP 16</li>
                                <li>AREA 1300</li>
                                <li>ROOMS 15</li>
                            </ul>
                        </div>
                        <div class="hover-detail" >
                            <h1>DIAMOND</h1>
                            <ul>
                                <li>€ 108,000.00</li>
                                <li>TO SLEEP 16</li>
                                <li>AREA 1300</li>
                                <li>ROOMS 15</li>
                            </ul>
                            <a href="villa-search.html">More Info</a>
                        </div>
                    </div>
                </div>

            </div>-->
<!--            <div class="row">
                <div class="col-md-4">
                    <div class="list-inner">
                        <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/villa/1.jpg">
                        <div class="list-detail">
                            <h2>DIAMOND</h2>
                            <ul>
                                <li>€ 108,000.00</li>
                                <li>TO SLEEP 16</li>
                                <li>AREA 1300</li>
                                <li>ROOMS 15</li>
                            </ul>
                        </div>
                        <div class="hover-detail" >
                            <h1>DIAMOND</h1>
                            <ul>
                                <li>€ 108,000.00</li>
                                <li>TO SLEEP 16</li>
                                <li>AREA 1300</li>
                                <li>ROOMS 15</li>
                            </ul>
                            <a href="villa-search.html">More Info</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="list-inner">
                        <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/villa/2.jpg">
                        <div class="list-detail">
                            <h2>DIAMOND</h2>
                            <ul>
                                <li>€ 108,000.00</li>
                                <li>TO SLEEP 16</li>
                                <li>AREA 1300</li>
                                <li>ROOMS 15</li>
                            </ul>
                        </div>
                        <div class="hover-detail" >
                            <h1>DIAMOND</h1>
                            <ul>
                                <li>€ 108,000.00</li>
                                <li>TO SLEEP 16</li>
                                <li>AREA 1300</li>
                                <li>ROOMS 15</li>
                            </ul>
                            <a href="villa-search.html">More Info</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="list-inner">
                        <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/villa/3.jpg">
                        <div class="list-detail">
                            <h2>DIAMOND</h2>
                            <ul>
                                <li>€ 108,000.00</li>
                                <li>TO SLEEP 16</li>
                                <li>AREA 1300</li>
                                <li>ROOMS 15</li>
                            </ul>
                        </div>
                        <div class="hover-detail" >
                            <h1>DIAMOND</h1>
                            <ul>
                                <li>€ 108,000.00</li>
                                <li>TO SLEEP 16</li>
                                <li>AREA 1300</li>
                                <li>ROOMS 15</li>
                            </ul>
                            <a href="villa-search.html">More Info</a>
                        </div>
                    </div>
                </div>

            </div>-->
        </div>
    </body>


    <?php $this->load->view('footer/footer') ?>
</body>
</html>