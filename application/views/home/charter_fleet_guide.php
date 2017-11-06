<!DOCTYPE html>
<html>
    <head>
        <title>Charter Fleet Guide</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <?php $this->load->view('header/head'); ?>
        <script>
            $(document).ready(function () {
                $(".date-picker").datepicker({format: "yyyy/mm/dd", todayHighlight: true, autoclose: true, });
                $(".date-picker").datepicker("hide");
            });
        </script>

        <script type="text/javascript">
            $(function () {
                $('#datetimepicker3').datetimepicker({
                    format: 'LT'
                });
            });
        </script>
    </head>


    <body>
        <header>
            <?php $this->load->view('header/header'); ?>

            <div class="container-fluid book page-title jet-bg">
                <div class="row">
                    <h1>Charter Fleet Guide</h1>
                </div>
            </div>
        </header>
        <section class="jet-list">
            <div class="container">
                <div class="row">
                    <h2 class="jets-title">Large Airliner <i class="fa fa-plane" aria-hidden="true"></i><span>46</span></h2>
                    <?php if($arrJetData1){ foreach($arrJetData1 as $key=>$objVal){?>
                    <div class="col-md-4 lpad0">
                        <div class="jet-item">
                            <div class="jet-image">
                                <img src="<?php echo $this->IMAGE_URL.str_replace("..", "", $objVal->banner); ?>" class="img-responsive">
                                <i class="fa fa-wifi" aria-hidden="true"></i>
                            </div>
                            <h3 class="jet-title"><a href="<?php echo base_url('challenger/'.$objVal->id)?>"><?php echo $objVal->jetName;?></a></h3>
                            <h5 class="jet-passengers"><?php echo $objVal->numberOfPassengers;?> Passengers</h5>
                        </div>
                    </div>
                    <?php }}?>
                    <a class="more-jet" href="<?php echo base_url('jet-category/Large_Airliner')?>"> <i class="fa fa-plus" aria-hidden="true"></i> MORE JETS</a>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <h2 class="jets-title">Long Range JETS <i class="fa fa-plane" aria-hidden="true"></i><span>46</span></h2>
                    <?php if($arrJetData2){ foreach($arrJetData2 as $key=>$objVal){?>
                    <div class="col-md-4 lpad0">
                        <div class="jet-item">
                            <div class="jet-image">
                                <img src="<?php echo $this->IMAGE_URL.str_replace("..", "", $objVal->banner); ?>" class="img-responsive">
                                <i class="fa fa-wifi" aria-hidden="true"></i>
                            </div>
                            <h3 class="jet-title"><a href="<?php echo base_url('challenger/'.$objVal->id)?>"><?php echo $objVal->jetName;?></a></h3>
                            <h5 class="jet-passengers"><?php echo $objVal->numberOfPassengers;?> Passengers</h5>
                        </div>
                    </div>
                    <?php }}?>
                    <a class="more-jet" href="<?php echo base_url('jet-category/Long_Range_Jets')?>"> <i class="fa fa-plus" aria-hidden="true"></i> MORE JETS</a>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <h2 class="jets-title">Medium jets <i class="fa fa-plane" aria-hidden="true"></i><span>29</span></h2>
                    <?php if($arrJetData3){ foreach($arrJetData3 as $key=>$objVal){?>
                    <div class="col-md-4 lpad0">
                        <div class="jet-item">
                            <div class="jet-image">
                                <img src="<?php echo $this->IMAGE_URL.str_replace("..", "", $objVal->banner); ?>" class="img-responsive">
                                <i class="fa fa-wifi" aria-hidden="true"></i>
                            </div>
                            <h3 class="jet-title"><a href="<?php echo base_url('challenger/'.$objVal->id)?>"><?php echo $objVal->jetName;?></a></h3>
                            <h5 class="jet-passengers"><?php echo $objVal->numberOfPassengers;?> Passengers</h5>
                        </div>
                    </div>
                    <?php }}?>
                   <a class="more-jet" href="<?php echo base_url('jet-category/Medium_Jets')?>"> <i class="fa fa-plus" aria-hidden="true"></i> MORE JETS</a>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <h2 class="jets-title">Small Jets <i class="fa fa-plane" aria-hidden="true"></i><span>31</span></h2>
                    <?php if($arrJetData4){ foreach($arrJetData4 as $key=>$objVal){?>
                    <div class="col-md-4 lpad0">
                        <div class="jet-item">
                            <div class="jet-image">
                                <img src="<?php echo $this->IMAGE_URL.str_replace("..", "", $objVal->banner); ?>" class="img-responsive">
                                <i class="fa fa-wifi" aria-hidden="true"></i>
                            </div>
                            <h3 class="jet-title"><a href="<?php echo base_url('challenger/'.$objVal->id)?>"><?php echo $objVal->jetName;?></a></h3>
                            <h5 class="jet-passengers"><?php echo $objVal->numberOfPassengers;?> Passengers</h5>
                        </div>
                    </div>
                    <?php }}?>
                   <a class="more-jet" href="<?php echo base_url('jet-category/Small_Jets')?>"> <i class="fa fa-plus" aria-hidden="true"></i> MORE JETS</a>
                </div>
            </div>
        </section>
        <?php $this->load->view('footer/footer') ?>
    </body>

</html>