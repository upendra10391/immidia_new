<!DOCTYPE html>
<html>
    <head>
        <title>Food & Drinks</title>
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
        <div class="container-fluid book page-title ls">
            <div class="row">
                <h1>Food & Drinks</h1>
            </div>
        </div>
    </header>
        <section>
            <form action="<?php echo base_url('villa-payment');?>" method="POST">
            <div class="black-color">
                <div class="container">
                    <div class="row">
                        <div class="your-choice clearfix">
                            <h3>YOUR CHOICE</h3>
                            <div class="col-md-6 ">
                                <div class="form-group gborder">
                                    <div class="col-md-4 col-xs-4"><p class="title">VILLA</p></div>
                                    <div class="col-md-4 col-xs-4"><p class="value"><?php echo (!empty($getDetails['villa_name'])) ? $getDetails['villa_name'] : '';?></p></div>
                                    <div class="col-md-4 col-xs-4"><p class="distance"></p></div>
                                </div>
                                <div class="form-group gborder">
                                    <div class="col-md-4 col-xs-4"><p class="title">CHECKIN</p></div>
                                    <div class="col-md-4 col-xs-4"><p class="value"><?php echo (!empty($getDetails['checkIn'])) ? $getDetails['checkIn'] : '';?></p></div>
                                    <div class="col-md-4 col-xs-4"><p class="distance"></p></div>
                                </div>
                                <div class="form-group gborder">
                                    <div class="col-md-4 col-xs-4"><p class="title">CHECKOUT</p></div>
                                    <div class="col-md-4 col-xs-4"><p class="value"><?php echo (!empty($getDetails['checkOut'])) ? $getDetails['checkOut'] : '';?></p></div>
                                    <div class="col-md-4 col-xs-4"><p class="distance"></p></div>
                                </div>
                                <div class="form-group gborder">
                                    <div class="col-md-4 col-xs-4"><p class="title">DESTINATION</p></div>
                                    <div class="col-md-4 col-xs-4"><p class="value">DUBAI</p></div>
                                    <div class="col-md-4 col-xs-4"><p class="distance"></p></div>
                                </div>
                                
                                <div class="form-group fborder">
                                    <div class="col-md-12 col-xs-12"><p class="title">Food And Beverage</p></div>
                                    <div class="col-md-10 col-xs-10" id="fooAndBeverage">
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 ">
                                <div class="form-group gborder">
                                    <div class="col-md-4 col-xs-4"><p class="title">PRICE</p></div>
                                    <div class="col-md-4 col-xs-4"><p class="value"></p></div>
                                    <div class="col-md-4 col-xs-4"><p class="distance">€ <?php echo (!empty($getDetails['price'])) ? $getDetails['price'] : 0.00;?></p></div>
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
                                    <div class="col-md-4 col-xs-4"><p class="title">SERVICE TAX ?</p></div>
                                    <div class="col-md-4 col-xs-4"><p class="value"></p></div>
                                    <div class="col-md-4 col-xs-4"><p class="distance">€ 0.00</p></div>
                                </div>
                                <div class="form-group gborder">
                                    <div class="col-md-4 col-xs-4"><p class="title"><b>SUB TOTAL</b></p></div>
                                    <div class="col-md-4 col-xs-4"><p class="value"></p></div>
                                    <div class="col-md-4 col-xs-4"><p class="distance"><b>€ <?php echo (!empty($getDetails['price'])) ? $getDetails['price'] : 0.00;?></b></p></div>
                                </div>
                            </div>			
                        </div> 

                    </div>
                </div>
            </div>
            <?php //echo "<pre>";var_dump($foodDetails[0]->FoodItems);exit;?>
            <div class="container">
                <div class="row">
                    
                        <div class="food-drink">
                            <h3>Food & DRINK</h3>
                            <div class="panel-group">
                                <?php 
                                if(!empty($foodDetails)){
                                $i=1;
                                foreach($foodDetails as $foodDetailsData){?>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" href="#collapse<?php echo $i;?>">(<?php echo $foodDetailsData->categoryName;?>) <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                        </h4>
                                    </div>
                                    <div id="collapse<?php echo $i;?>" class="panel-collapse collapse">

                                        <div class="panel-body">
                                                        <div class="row fdtitle">
                                                            <div class="col-md-4 col-xs-4"><p class="name">Name</p></div> 
                                                            <div class="col-md-4 col-xs-4"><p class="price">Price</p></div> 
                                                            <div class="col-md-4 col-xs-4"><p class="quantity">Quantity</p></div>
                                                        </div>

                                                        <div class="fditems">
                                                             <?php 
                                                             foreach($foodDetailsData->FoodItems as $foodItemsData){?>
                                                                    <div class="row fditem clearfix">
                                                                        <div class="col-md-4 col-xs-4"><p class="name" ><?php echo $foodItemsData->itemName;?></p></div> 
                                                                        <div class="col-md-4 col-xs-4"><p class="price" >€ <span id="amount_span_<?php echo $i."_".$foodItemsData->id?>"><?php echo $foodItemsData->amount;?></span></p></div> 
                                                                        <div class="col-md-4 col-xs-4">
                                                                            <select class="select_qty" data-id-counter="<?php echo $i;?>" name="select_qty_<?php echo $i;?>[]" id="select_qty_<?php echo $foodItemsData->id?>" data-name="<?php echo str_replace("\"", "", $foodItemsData->itemName);?>" data-price="<?php echo $foodItemsData->amount;?>">
                                                                                <option value="">select</option>
                                                                                <option value="1">1</option>
                                                                                <option value="2">2</option>
                                                                                <option value="3">3</option>
                                                                                <option value="4">4</option>
                                                                                <option value="5">5</option>
                                                                                <option value="6">6</option>
                                                                                <option value="7">7</option>
                                                                                <option value="8">8</option>
                                                                                <option value="9">9</option>
                                                                                <option value="10">10</option>

                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                             <?php }?>
                                                        </div>


                                                    </div>

                                    </div>
                                </div>
                                <?php $i = $i+1;}}else{?>
                                <div> NO DATA FOUND </div>
                                <?php }?>
                            <div class="bnbutton">
                                <button class="bbutton" data-href="<?php echo base_url('villalimousineDetail');?>" data-id="<?php echo $villId;?>" id="backVillaFoods"><i class="fa fa-angle-left" aria-hidden="true"></i> BACK</button>
                                <button class="nbutton" type="submit">NEXT <i class="fa fa-angle-right" aria-hidden="true"></i></button>
                            </div>
                        </div>



                    </div>
                
            </div>
                </form>
        </section>
       <?php $this->load->view('footer/footer') ?>
    </body>

</html>