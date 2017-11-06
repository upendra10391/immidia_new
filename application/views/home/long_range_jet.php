<!DOCTYPE html>
<html>
    <head>
        <title>Long Range Jet</title>
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

    <header>
        <?php $this->load->view('header/header'); ?>
        <div class="container-fluid book page-title jet-bg">
            <div class="row">
                <h1>Long Range Jet</h1>
            </div>
        </div>
    </header>
    <body>
        <section class="jet-list">
            <div class="container">
                <div class="row">
                    <h2 class="jets-title">Long Range Jet <i class="fa fa-plane" aria-hidden="true"></i><span><?php echo count($arrJetData);?></span></h2>
                    <?php if($arrJetData){ foreach($arrJetData as $key=>$objVal){?>
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
                </div>
            </div>
        </section>
        <?php $this->load->view('footer/footer') ?>
    </body>

</html>