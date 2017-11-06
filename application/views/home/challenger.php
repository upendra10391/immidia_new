<!DOCTYPE html>
<html>
    <head>
        <title>Challenger 605</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <?php $this->load->view('header/head'); ?>

    </head>

    <header>

        <?php $this->load->view('header/header'); ?>
        <div class="container-fluid book page-title jet-bg">
            <div class="row">
                <h1>Challenger 605</h1>
            </div>
        </div>
    </header>
    <body>

        <section class="slider-section">
            <div class="h"></div>
            <div class="container-fluid">
                <div class="row">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="<?php echo base_url(); ?>assets/images/jet/ch-890/b1.png">
                            </div>

                            <div class="item">
                                <img src="<?php echo base_url(); ?>assets/images/jet/ch-890/b1.png">
                            </div>

                            <div class="item">
                                <img src="<?php echo base_url(); ?>assets/images/jet/ch-890/b1.png">
                            </div>
                        </div>

                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                            <i class="fa fa-chevron-left" aria-hidden="true"></i>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next">
                            <i class="fa fa-chevron-right" aria-hidden="true"></i>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section>

            <div class="container-fluid">
                <div class="row">
                    <div id="thumbnail-slider">
                        <div class="inner">
                            <ul>
                                <li>
                                    <img src="<?php echo base_url(); ?>assets/images/jet/ch-890/t1.png">
                                </li>
                                <li>
                                    <img src="<?php echo base_url(); ?>assets/images/jet/ch-890/t1.png">
                                </li>
                                <li>
                                    <img src="<?php echo base_url(); ?>assets/images/jet/ch-890/t1.png">
                                </li>
                                <li>
                                    <img src="<?php echo base_url(); ?>assets/images/jet/ch-890/t1.png">
                                </li>
                                <li>
                                    <img src="<?php echo base_url(); ?>assets/images/jet/ch-890/t1.png">
                                </li>
                                <li>
                                    <img src="<?php echo base_url(); ?>assets/images/jet/ch-890/t1.png">
                                </li>
                                <li>
                                    <img src="<?php echo base_url(); ?>assets/images/jet/ch-890/t1.png">
                                </li>
                                <li>
                                    <img src="<?php echo base_url(); ?>assets/images/jet/ch-890/t1.png">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="jet-description">
            <div class="container">
                <div class="row nopad">
                    <h3>OVERVIEW</h3>
                    <p>A member of Bombardier’s Challenger 600 family of corporate jets, the Challenger 605 features one of the 
                        most advanced cockpits available today.Based on the tried and tested designs of the other Challenger 600 
                        business jets (including the Challenger 600, Challenger 601 and Challenger 604), theChallenger 605 offers 
                        larger cabin windows and a wider cabin. The long flight range offers non-stop flights from Geneva to New York 
                        or Los Angeles to New York. Top cruise speeds are mach 0.82, one of thefastest in its class.</p>
                    <h3>COMFORT AND SIZE</h3>
                    <p>The Challenger cabin is one of the widest available in its class. This makes passengers feel that they are 
                        in a large room as apposed to an aircraft cabin. The large windows give excellent exterior vision as well as 
                        filling the cabin with natural light.</p>
                    <h3>Feature</h3>
                    <ul>
                        <li>Transatlantic flight range</li>
                        <li>Wide cabin with a roomy feel</li>
                        <li>Access to the baggage hold during flight</li>
                        <li>Modern flight deck with excellent avionics</li>
                    </ul>
                    <h3>SPECIFICATIONS</h3>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <tr>
                                <td>Manufacturer : </td><td>Bombardier</td>
                            </tr>
                            <tr>
                                <td>Model : </td><td>Challenger 605</td>
                            </tr>
                            <tr>
                                <td>Classification : </td><td>Long Range Jet</td>
                            </tr>
                            <tr>
                                <td>Seats : </td><td>10</td>
                            </tr> 
                            <tr>
                                <td>Speed : </td><td>459 kts</td>
                            </tr>
                            <tr>
                                <td>Range :  </td><td>4077 nm</td>
                            </tr> 
                            <tr>
                                <td>Average cost per flying hour : </td><td>£4 800 $6 963 €6 186</td>
                            </tr>
                            <tr>
                                <td>Interior Height :  </td><td>1.85 m</td>
                            </tr> 
                            <tr>
                                <td>Interior Width :  </td><td>2.49 m</td>
                            </tr> 
                            <tr>
                                <td>Luggage Capacity :  </td><td>115 cu.ft.</td>
                            </tr> 
                            <tr>
                                <td>Aircraft Purchase Price :  </td><td> $26 710 000</td>
                            </tr> 
                        </table>
                    </div></div>
            </div>
        </section>

        <?php $this->load->view('footer/footer') ?>
    </body>
</html>