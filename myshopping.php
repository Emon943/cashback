<?php include 'user/sub-header.php';?>
            <ul id="logged_nav">
                <li id="shop_nav"><a href="retailers.php"></a></li>
                <li id="coupons_nav"><a href="coupons.php"></a></li>
                <li id="money_nav"><a href="getpaid.php"></a></li>
                <li id="invite_nav"><a href="invite.php"></a></li>
                            </ul>

            <div class="clear"></div>
        </div>
    </div>

    <div id="available_balance_bar">
        <div class="wrap">
            <div class="innerwrap">
                <div class="left">
                    <h1>Available Balance: <span style='cursor: pointer;' class='ttip'> <img src="images/icons/tt_btn.png" /> <span>Available Balace is the amount of funds you may  withdraw.  Available Balance does not include Pending  Cash Back, Cashout Requested, or Year to Date paid funds. <b></b> </span> </span></h1>

                    <div class="funds_info">
                        <div class="fund_amount">
                            <span>$0.00</span>
                        </div>
                        <a href="withdraw.php">Withdraw Funds</a>
                    </div>

                    <div class="clear"></div>
                </div>
                <div class="right">
                    <span class="money_status"><strong>Pending Cash Back:</strong> <span style='cursor: pointer;' class='ttip'> <img src="images/icons/tt_btn.png" /> <span>
                        <p>"Pending" Cash Back are transactions that merchants have reported to us.  It remains as “Pending” to allow time for returns, exchanges, or cancelled orders.</p><br /> 
                        <p>When the transaction fully clears, the “Pending” cash back is then posted to your “Available” cash back.  You are able to then request payment.</p> <br /> 
                        <p>Travel reservations move from "Pending" to your "Available Balance" upon completion of travel itinery.</p> <b></b> </span> </span> 
                    </span><span class="greens">$0.00</span><br />


                    <span class="money_status">Cashout Requested:</span><span style='cursor: pointer;' class='ttip'> <img src="images/icons/tt_btn.png" /> <span><p>You may request payment in any amount of $50 or more.</p><b></b> </span> </span> 
                     <span class="greens">$0.00</span><br />
                    <span class="money_status">Lifetime Cash Back: <span style='cursor: pointer;' class='ttip'> <img src="images/icons/tt_btn.png" /> <span><p>Lifetime Cash Back is the total amount of your "Available Balance" and the total amount of all paid "Withdrawls".</p><b></b> </span> </span> 
                        <span class="greens">$0.00</span><br />
                </div>

                <div class="clear"></div>
            </div><!-- .innerwrap -->

            <div class="clear"></div>
        </div>
    </div>

    <div class="clear"></div>

</div><!-- #header -->

<!-- Sidebar/Left Column/Wrap Start for Layout -->
<div class="wrap">
    <div id="column_left">
       <div class="box">
            <div class="top">
                Shop by Category

                <a href="#" class="expand_contract_mobile"></a>
            </div>
             <?php include 'category.php';?>
			 
            <div class="bottom">&nbsp;</div>
        </div>
        
        <div class="banner_left_ads">
             
            <a href="http://www.cashbackkaboom.com/getpaid.php" ><img src="img/uploads/image-link//img/uploads/image-link//img/uploads/image-li" style="max-width:100%;" /></a>
        </div>
    </div>

<div id="column_center">
<script type="text/javascript">
function showTable1(){
    document.getElementById('my_recent_activity').style.display = "block";
    document.getElementById('payment_history').style.display = "none";
    document.getElementById('click_history').style.display = "none";
    document.getElementById('recent_activity_btn').style.background = "#D5D3C6";
    document.getElementById('payment_hist_btn').style.background = "#F9F9F7";
    document.getElementById('click_hist_btn').style.background = "#F9F9F7";
}

function showTable2(){
    document.getElementById('my_recent_activity').style.display = "none";
    document.getElementById('payment_history').style.display = "block";
    document.getElementById('click_history').style.display = "none";
    document.getElementById('recent_activity_btn').style.background = "#F9F9F7";
    document.getElementById('payment_hist_btn').style.background = "#D5D3C6";
    document.getElementById('click_hist_btn').style.background = "#F9F9F7";
}

function showTable3(){
    document.getElementById('my_recent_activity').style.display = "none";
    document.getElementById('payment_history').style.display = "none";
    document.getElementById('click_history').style.display = "block";
    document.getElementById('recent_activity_btn').style.background = "#F9F9F7";
    document.getElementById('payment_hist_btn').style.background = "#F9F9F7";
    document.getElementById('click_hist_btn').style.background = "#D5D3C6";
}
</script>


    <br /><br />
    
    <div class="table_head_border">
        <h3 class="section" style="float:left;">My Shopping History</h3>

        <div id="shopping_choices">
            <span id="recent_activity_btn" onclick="showTable1()" style="position: relative; left: 6px;">My Shopping History</span> <span id="payment_hist_btn" onclick="showTable2()" style="position: relative; left: 3px;">My Payment History</span> <span id="click_hist_btn" onclick="showTable3()">My Click History</span>
        </div>

        <div class="clear"></div>
    </div> <!-- .table_head_border -->

        <div id="my_recent_activity">
        <h3 class="section">Your Transactions</h3>

                            <p align="center">You have no shopping history at this time.<br/><br/><a class="goback" href="#" onclick="history.go(-1);return false;">Go Back</a></p>
             </div>

    <div id="payment_history" style="display:none;">
        
        <h3 class="section">My Payment History</h3>
        <div style="clear:both;"></div>
        

                <p align="center">There are no transactions in payment history at this time.</p>
            </div>

    <div id="click_history" style="display:none;">
        <h3 class="section" style="float:left;">My Click History</h3>
        <div style="clear:both;"></div>


    
            <table align="center" width="100%" border="0" style="border-bottom: solid 1px #EEEEEE;" cellspacing="0" cellpadding="3" class="my_account_table">
              <tr>
                <th class="network_col_header" width="70%">Store</th>
                <th class="network_col_header" width="30%">Date/Time</th>
              </tr>
                          <tr class="row_odd">
                <td ><a class="click_history" href="go2store.php?id=1702763" target="_blank">Hotels.com</a></td>
                <td style="color: #848482;">11 Jan 2017 02:30:55</td>
              </tr>
                       </table>

    

    </div>
</div>


</div><!-- .wrap -->

<div id="need_more_cash">
	<a href="../invite.php"><img src="images/need_cash_back.png" alt="Need More Cash Back?" /></a><br />
	<a style="cursor:pointerl;" class="hide_link lo_link">Hide</a>
</div>

<div class="md-modal md-effect-8" id="modal-8">
	<div class="md-content">
		<div id="footer-logo">
			<img src="img/modal/logo.png" alt="logo" style="position:absolute;bottom:210px; left:-43px; width:27%"> 
		</div>

		<h3>Share with Friends!</h3>
		<img id="footer_divider" src="img/images/divider.jpg" alt="divider" />
		
		<div>
			<p class="blurb">Use Cash Back Kaboom’s fast and easy invitation methods to invite others. Those you invite will be added to your Shopping Network and you’ll get paid each time they shop - over and over again - forever!*</p>
			<div id="footer_form">
				<form name="footer_modal" action="#" method="post">
					<p><span class="footer_verb">Copy It! </span> <input id="copyit_txtbox" type="text" name="copy" readonly="readonly" onfocus="this.select();" onclick="this.focus();this.select();" value="http://www.cashbackkaboom.com/3735"></p><br />
					<p><span class="footer_verb">Email it!</span> <input id="fname_txtbox" type="text" name="friends_name" placeholder="Friend's Name"> &nbsp; <input id="femail_txtbox" type="text" name="friends_email" placeholder="Friend's Email"></p><br />
					<p><span class="footer_verb">Share It!</span> &nbsp; &nbsp; &nbsp; 
						<a href="http://cashbackkaboom.com/3735" onclick=" window.open('https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(href), 'facebook-share-dialog', 'width=626,height=436'); return false;"><img id="face_btn" src="img/modal/facebook_btn.png" alt="facebook" style="width: 28%" /></a> &nbsp; &nbsp; &nbsp; 

						<script type="text/javascript" src="/platform.twitter.com/widgets.js"></script>

						<a href="https://twitter.com/intent/tweet?text=Want%20to%20save%20money%20on%20items%20you're%20currently%20buying?%20Want%20to%20make%20money%20as%20well?%20Check%20this%20out&url=http%3A%2F%2Fcashbackkaboom.com/3735"><img id="twit_btn" src="img/modal/twitter_btn.png" style="width: 28%" alt="Tweet" /></a>
     				</p> 
				</form>
			</div>
			<button class="md-close"></button>
		</div>
	</div>
</div>

<div class="md-overlay"></div><!-- the overlay element -->


<!-- Register Modal -->
<!-- End Register Modal -->



<div class="clear"></div>

 <?php include 'user/footer.php';?>