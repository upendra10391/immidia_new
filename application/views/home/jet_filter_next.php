<div class="book-form">
    <h3>Book Your Jet Now</h3>
    <form method="POST" action="<?php echo base_url()."?".$_SERVER['QUERY_STRING']?>">
        <div class="book-inner" id="next" style="clear:both;">
            <div class="inner-block eighth pf">
                <div class="eight-inner">
                    <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
                    <button class="book-submit previous" type="button">Previous</button>
                </div>
            </div>
            <div class="inner-block first pf">
                <input type="text"  name="firstname" class="from" placeholder="First Name"/>
                <input type="text"  name="lastname" class="to" placeholder="Last Name"/>

            </div>
            <div class="inner-block first pf">
                <input type="email"  name="email" class="from" placeholder="Email"/>
                <input type="text"  name="phone" class="to" placeholder="Phone"/>
            </div>
            <div class="inner-block fifth pf1">
                <textarea name="comments" class="" row="3" placeholder="comment"></textarea>
            </div>
            <div class="inner-block sixth pf">
                <select class="departure-port" name="depPort">
                    <option>Advertising</option>
                    <option>Personal Referral</option>
                    <option>Article</option>
                    <option>E-Mail</option>
                    <option>Facebook/Twitter</option>
                </select>
            </div>
            <div class="inner-block eighth pf">
                <div class="eight-inner">
                    <img src="<?php echo base_url(); ?>assets/search.png">
                    <button class="book-submit" type="submit">Book</button>
                </div>
            </div>
        </div>
    </form>
</div>