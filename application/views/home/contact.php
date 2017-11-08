<!DOCTYPE html>
<html>
    <head>
        <title>Contact</title>
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
            <div class="container-fluid book page-title">
                <div class="row">
                    <h1>Contact Us</h1>
                </div>
            </div>
        </header>
        <section class="">
            <div class="container-fluid">
                <div class="row">
                    <div class="">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7227.4373830041!2d55.151204!3d25.077522!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f6ca659b3267f%3A0xe9fdf3bb43f67028!2sJBC+2+-+Dubai!5e0!3m2!1sen!2sae!4v1509186283547" width="100%" height="510" frameborder="0" style="border:0" allowfullscreen></iframe></div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="contact-form">
                            <form name="contactForm" id="contactForm" action="<?php echo base_url('contact')?>" method="post">
                                <div class="input-group">
                                    <input required="" name="name" type="text" class="form-control" placeholder="Name" >
                                </div>
                                <div class="input-group">
                                    <input required="" name="email" type="email" class="form-control" placeholder="Email" >
                                </div>
                                <div class="input-group">
                                    <input required="" name="subject" type="text" class="form-control" placeholder="Subject" >
                                </div>
                                <div class="form-group">
                                    <textarea required="" name="body" class="form-control" id="exampleTextarea" rows="5" placeholder="Your Message"></textarea>
                                </div>
                                <input id="submitContactForm" type="submit" class="submit" name="submit" value="submit">
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="address">
                            <p><i class="fa fa-home" aria-hidden="true"></i> 709, JBC2, Cluster V,<br/>
                                <span></span>Jumeirah Lakes Towers,<br/>
                                <span></span>Dubai U.A.E.<br/>
                            </p>
                            <p><i class="fa fa-phone" aria-hidden="true"></i> +971 - 43755090<br/></p>
                            <p><i class="fa fa-envelope" aria-hidden="true"></i> support@immidialuxury.com<br/></p>
                            <p class="mobile"><i class="fa fa-mobile" aria-hidden="true"></i> 801230214 (Toll free Number)</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                 $("#contactForm").validate({
                       submitHandler: function(form) {
                            $('#submitContactForm').val("Please Wait ...");
                            $('#submitContactForm').attr('disabled','true');
                            $.ajax({
                                url: "<?php echo base_url('contact')?>",
                                type: "post",
                                data:$("#contactForm").serialize(),
                                success: function (data) {
                                    $('#submitContactForm').removeAttr('disabled');
                                    $('input.form-control').val("");
                                    $('#exampleTextarea').val("");
                                    alert("Thanks for contacting us.");
                                    $('#submitContactForm').val("Submit")
                                }
                            });
                        }
                 });
            });
        </script>
        <?php $this->load->view('footer/footer') ?>
    </body>
</html>