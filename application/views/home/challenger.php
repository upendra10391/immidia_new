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
            <div class="container-fluid">
                <div class="row">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <?php if(!empty($arrJetData)){ 
                                    $i = 0;foreach ($arrJetData as $key=>$value){$active = ($i==0) ? "active": "";?>
                                    <div class="item <?php echo $active;?>">
                                        <img src="<?php echo $this->IMAGE_URL.str_replace("..", "", $value->banner); ?>">
                                    </div>
                            <?php $i++;}}else{?>
                                <div class="item active">
                                  <img src="<?php echo base_url(); ?>/assets/images/car-search/b1.PNG">
                                </div>
                            <?php }?>
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
                                <?php if(!empty($arrJetData)){foreach ($arrJetData as $key=>$value){?>
                                    <li>
                                        <img width="218" height="218" src="<?php echo $this->IMAGE_URL.str_replace("..", "", $value->banner); ?>">
                                    </li>
                                <?php }}else{?>
                                    <li>
                                            <img width="218" height="218" src="<?php echo base_url(); ?>/assets/images/car-search/t1.jpg">
                                    </li>
                                <?php }?>
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
                    <?php $objRow = $arrJetData[0];?>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <tr>
                                <td>Manufacturer : </td><td><?php echo $objRow->manufacturer?></td>
                            </tr>
                            <tr>
                                <td>Model : </td><td><?php echo $objRow->model?></td>
                            </tr>
                            <tr>
                                <td>Classification : </td><td><?php echo $objRow->class?></td>
                            </tr>
                            <tr>
                                <td>Seats : </td><td><?php echo $objRow->seats?></td>
                            </tr> 
                            <tr>
                                <td>Speed : </td><td><?php echo $objRow->manufacturer?></td>
                            </tr>
                            <tr>
                                <td>Range :  </td><td><?php echo $objRow->speed ?></td>
                            </tr> 
                            <tr>
                                <td>Average cost per flying hour : </td><td><?php echo $objRow->avgCost  ?></td>
                            </tr>
                            <tr>
                                <td>Interior Height :  </td><td><?php echo $objRow->interiorHeight?> </td>
                            </tr> 
                            <tr>
                                <td>Interior Width :  </td><td><?php echo $objRow->interiorWidth?></td>
                            </tr> 
                            <tr>
                                <td>Luggage Capacity :  </td><td><?php echo $objRow->luggageCapacity?></td>
                            </tr> 
                            <tr>
                                <td>Aircraft Purchase Price :  </td><td> <?php echo $objRow->purchasePrice?></td>
                            </tr> 
                        </table>
                    </div></div>
            </div>
        </section>

        <?php $this->load->view('footer/footer') ?>
    </body>
</html>