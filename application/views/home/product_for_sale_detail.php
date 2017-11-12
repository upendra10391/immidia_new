<!DOCTYPE html>

<?php
    header('X-Frame-Options: GOFORIT'); 
?>
<html>
    <head>
        <title><?php echo $objValue->villaName?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <?php $this->load->view('header/head'); ?>
    </head>
    <body>
        <header>
            <?php $this->load->view('header/header'); ?>
            <div class="container-fluid page-title">
                <div class="row">
                    <h1><?php echo $objValue->villaName?></h1>
                </div>
            </div>
        </header>
        <section class="slider-section">
            <div class="container-fluid">
                <div class="row">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <?php if(!empty($objValue->banner)){ 
                                    $i = 0;foreach ($objValue->banner as $innerkey=>$value){$active = ($i==0) ? "active": "";?>
                                    <div class="item <?php echo $active;?>">
                                        <img src="<?php echo $this->IMAGE_URL.str_replace("..", "", $value->banner); ?>">
                                    </div>
                                <?php $i++;}}else{?>
                                <div class="item active">
                                    <img src="<?php echo base_url(); ?>assets/images/product-sale-detail/banner1.jpg">
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
                                <?php if(!empty($objValue->banner)){foreach ($objValue->banner as $key=>$value){?>
                                    <li>
                                        <img width="218" height="218" src="<?php echo $this->IMAGE_URL.str_replace("..", "", $value->banner); ?>">
                                    </li>
                                <?php }}else{?>
                                   <li>
                                        <img src="<?php echo base_url(); ?>assets/images/product-sale-detail/t1.png">
                                    </li>
                                <?php }?>
                            </ul>
                        </div>
                    </div>
                    <div class="center"><button><i class="fa fa-phone" aria-hidden="true"></i> call us</button> <button><i class="fa fa-envelope" aria-hidden="true"></i> Email</button></div>
                </div>
            </div>
        </section>
        <?php
            if(!empty($_GET['c'])){
                $this->load->view('home/car_sale_details',array('objValue'=>$objValue));
            }else{
                $this->load->view('home/vila_sale_details',array('objValue'=>$objValue));
            }
         ?>
        <section class="map-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="map-responsive">
                        <iframe src="<?php echo $objValue->locationMapUrl?>" width="600" height="375" frameborder="0" style="border:0" allowfullscreen="" target="_parent"></iframe>
                
                    </div>
                </div>
            </div>
        </section>



        <?php $this->load->view('footer/footer') ?>
    </body>
</html>
