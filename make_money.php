	<!DOCTYPE html>
	<html xmlns="http://www.w3.org/1999/xhtml">
	<title>make money</title>

<head>
		<!-- Facebook Like Thumbnail -->
		<meta property="og:title" content="Join Today!" />
		<meta property="og:description" content="Right Now!" />
		<meta property="og:url" content="make_money.php" />
		<meta property="og:image" content="images/fb_logo.png" />
		<meta property="og:video" content="http://www.youtube.com/v/t6v7_-Wl-pE?autohide=1&amp;version=3">
		<meta property="og:video:type" content="application/x-shockwave-flash">
		<meta property="og:video:width" content="640">
		<meta property="og:video:height" content="360">
		<!-- End Facebook Like Thumbnail -->
		<script src="js/accounting.js"></script>
		<script type="text/javascript">
			//Redirect to login.php, bypassing the modal, if on a mobile device
			function mobileCheck() {
				if (/Android|webOS|iPhone|iPod|BlackBerry|IEMobile/i.test(navigator.userAgent)) {
					window.location = "login.php";
				}
			}
		</script>
		<style type="text/css">
			.md-close {
				top: -100px !important;
			}
		</style>
		<script src="../ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script src="js/viewport.js"></script>
		<script type="text/javascript">
			function setTotal() {
				var num_shoppers = (document.getElementById('num_shoppers').value) * 1;
				var avg_num_shoppers = (document.getElementById('avg_num_shoppers').value) * 1;
				var avg_spent = (document.getElementById('avg_spent').value) * 1;

				var rebate = 0.05 * avg_spent; //assuming a standard 2.5% rebate off average spent by all people.

				var shopper = 0.025 * rebate; //you get 50% off the rebate from your purchase
				var lvl1 = num_shoppers;
				lvl1_money = (0.02 * rebate * lvl1);
				var lvl2 = lvl1 * avg_num_shoppers;
				lvl2_money = (0.02 * rebate * lvl2);
				var lvl3 = lvl2 * avg_num_shoppers;
				lvl3_money = (0.02 * rebate * lvl3);
				var lvl4 = lvl3 * avg_num_shoppers;
				lvl4_money = (0.02 * rebate * lvl4);
				var lvl5 = lvl4 * avg_num_shoppers;
				lvl5_money = (0.02 * rebate * lvl5);
				var lvl6 = lvl5 * avg_num_shoppers;
				lvl6_money = (0.02 * rebate * lvl6);
				var lvl7 = lvl6 * avg_num_shoppers;
				lvl7_money = (0.02 * rebate * lvl7);
				var lvl8 = lvl7 * avg_num_shoppers;
				lvl8_money = (0.02 * rebate * lvl8);
				var lvl9 = lvl8 * avg_num_shoppers;
				lvl9_money = (0.04 * rebate * lvl9);

				var myMoney = shopper + lvl1_money + lvl2_money + lvl3_money + lvl4_money + lvl5_money + lvl6_money + lvl7_money + lvl8_money + lvl9_money;

				document.getElementById('total').value = accounting.formatMoney(myMoney);

			}

			jQuery(document).ready(function () {
				setTotal();
			});
		</script>

		<link rel="stylesheet" type="text/css" href="css/guest.css">
		<link rel="stylesheet" type="text/css" href="css/mobile_update.css">
		<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:700|Open+Sans:400,700,800|Open+Sans+Condensed:700' rel='stylesheet' type='text/css'>

		<!--[if lte IE 9]>
        <script type="text/javascript" src="/js/placeholder_fix.js"></script>
    <![endif]-->

		<!--[if lte IE 8]>
        <link rel="stylesheet" type="text/css" href="/css/ie8.css" />
    <![endif]-->

		<!--[if IE 7]>
        <link rel="stylesheet" type="text/css" href="/css/ie7.css" />
    <![endif]-->
		<style type="text/css">
			@media screen and (max-width: 1024px) {
				#guest_form {
					background-color: #FFFFFF;
					border: 1px solid #C3C3C3;
					padding-bottom: 18px;
					position: absolute;
					right: 0;
					width: 40%;
				}
				#fat_money {
					margin-right: 90px;
				}
				#fat_stacks_glow {
					display: none;
				}
			}
			/* iPads (landscape) ----------- */
			
			@media only screen and (min-device-width: 768px) and (max-device-width: 1024px) and (orientation: landscape) {
				#share {
					bottom: 175px;
				}
			}
			/* iPads (portrait) ----------- */
			
			@media only screen and (min-device-width: 768px) and (max-device-width: 1024px) and (orientation: portrait) {
				#share {
					bottom: 175px;
				}
			}
		</style>
	</head>

	<body id="guest_bg" class="make-money">

		<div class="bigwrap">
			<div id="header">
				<div class="wrap">
					<div id="top_bar">
																								<div class="right">
											<a onclick="mobileCheck()" style="cursor: pointer;" class="md-trigger" data-modal="modal-11"> <span id="guest_member_login"> Phone +44 (0) 7859 055 647 |  
                            MEMBER LOGIN 
                        </span> <span id="guest_share_with">Share with</span> </a>

											<a class="md-trigger" data-modal="modal-10" href="#" title="Share on Facebook"><img src="img/facebook.png" width="35" alt="Share on Facebook" align="absmiddle" /></a>
											<a class="md-trigger" data-modal="modal-10" href="#" title="Share on Twitter"><img src="img/twitter.png" width="35" alt="Share on Twitter" align="absmiddle" /></a>
											<a class="md-trigger" data-modal="modal-10" href="#"><img src="img/googleplus.png" width="35" alt="Share on Google+" align="absmiddle" /></a>
										</div>
															</div>
					<br />

					        <div id="homepage_header_nav" class="clearfix">
                            <ul style="color:#fff">
                    <li> <a class="ignore-register-modal" href="save_money.php" class="lo_link"> SAVING MONEY </a> </li>
                    <li> <a class="ignore-register-modal" href="make_money.php" class="lo_link"> MAKING MONEY </a> </li>
                    <li> <a class="ignore-register-modal" href="retailers-guest.php" class="lo_link"> VIEW STORES </a> </li>
                                    </ul>
                    </div>

						<div id="header_lvl3">
							<div id="homepage_header_logo">
								<a href="index.php" title="Return to Homepage"><img src="img/images/guest/logo.png" alt="logo" class="head_logo" /></a>

								<a class="home-icon" href="index.php"><img src="img/home_icon.png" alt="Return to Homepage" title="Return to Homepage"></a>
							</div>

							<div id="header_caption">
								<span>Make Money<br> <span class="green_text">When Other People Shop!</span></span>
							</div>
						</div>

						<div class="clearfix"></div>
				</div>
			</div>
			<div class="mast-img"></div>
			<div class="wrap">
				<div id="leftcol" class="left" style="z-index: 9999;">
					<div class="left make-money" id="trynow_mid" style="z-index: 1; position: relative;">
						<h2 class="section-title">In addition to saving you money on your own purchases, Cash Back Kaboom pays you for purchases other people make.</h2>
						
						<h3>How Does It Work?<br><small>It couldn't be easier.</small></h3>

						<p>Once you have your free membership, simply invite friends and family to create their own accounts. Share invitations via email, social media, or printed brochures&ndash;anyone who joins using your referral code will be <strong>automatically added to your network</strong>.</p>

						<p>Then any time they shop with one of our 1,500+ online merchants, you'll both earn cash back on what they buy. And it gets even better: you'll also earn money when people they refer shop, and when people those people refer shop, and so on up to nine levels.</p>
						
						<h3>Why Make Money with Cash Back Kaboom?<br><small>It's simple, it's easy, and it's risk-free. But here are a few more reasons:</small></h3>

						<ul>
							<li><span class="number-circle">1</span> <strong>Supplement Your Income</strong><br><p>Do you know anyone who couldn't use a little extra cash every now and then? Neither do we. Cash Back Kaboom helps you save and earn money, and it helps your friends and family save and earn money&ndash;and it doesn't cost anyone a thing.</p></li>
							<li><span class="number-circle">2</span> <strong>Create a Financial Safety Net</strong><br><p>Provide for your extended family without taking away from your own income. Have the oldest 3 members create accounts and invite the next oldest 3, who invite the next, and so on&ndash;and watch the family income grow (adults over 18 only please).</p></li>
							<li><span class="number-circle">3</span> <strong>Leave a Legacy</strong><br><p>Place your Cash Back Kaboom membership in trust to your heirs in your will. Even after your shopping days are done, the people in your network will continue to make purchases, and therefore continue to generate income for you, for years to come.</p></li>
							<li><span class="number-circle">4</span> <strong>Boost Fundraising Efforts</strong><br><p>Invite your favorite charity or nonprofit to create a membership. Have them invite other people in the organization in a way that builds the best geometric progression. The money they all make on their purchases can be a real boon to their bottom line!</p></li>
						</ul>
						
						<img id="makemoney_arrow" style="margin-left: -3px; margin-top: 10px; z-index: 9999;" src="img/images/guest/money_arrow.png" alt="cash back arrow" />
					</div>
				</div>

				<div id="rightcol" class="right">
					<div style="z-index: 0; height: 275px; right: -12px; position: relative;">
						<script src="http://fast.wistia.com/embed/medias/4ldqdusmxa.jsonp" async></script>
						<script src="../fast.wistia.com/assets/external/E-v1.js" async></script><span class="wistia_embed wistia_async_4ldqdusmxa popover=true popoverContent=link" style="display:inline"><a href="#"><span><img class="video-overlay" src="img/cbk_video_overlay_alt.png"><img class="preroll-img" src="img/cbk_video_preroll.gif" alt="Watch Video"></span></a></span>
					</div>
					
					<div style="z-index: 0; right: -12px; position: relative;">
						<h2 style="display: block; widht: 100%; padding: 10px 15px; text-align: center; color: white; background: #195d35;">Check out our calculator to see how much you could make</h2>
					</div>
					
					<div id="guest_form" style="z-index: 0; height: 425px;">
						<div id="paid_form_header" class="make_money_form">
							<h2>GET PAID!</h2>
							<p>Share with friends &amp; <strong>maximize your earning potential!</strong></p>
							<br />
							<img src="img/images/guest/squiggle.png" alt="squiggle">
							<br />
							<br />
							<form action="http://www.cashbackkaboom.com/getpaid.php" method="post">
								<p> If you <strong>sign up</strong>
									<input class="textbox_getpaid" type="text" id="num_shoppers" name="num_shoppers" onchange="setTotal()" value="3" /> shoppers, and those shoppers</p>
								<p>beneath you <strong>sign up an average</strong> of
									<input class="textbox_getpaid" id="avg_num_shoppers" type="text" name="avg_num_shoppers" onchange="setTotal()" value="3" /> shoppers, </p>
								<p> and everyone <strong>spends an average $</strong>
									<input class="textbox_getpaid" id="avg_spent" type="text" name="avg_spent" onchange="setTotal()" value="120" /> a month </p>
								<img src="img/images/guest/divider.png" alt="divider">
								<!--[if !IE 8]>
                                    aaaa
                                <![endif]-->
								<p><span id="money_earned" style="display: inline-block; font-size: 14px; margin-top: 15px;">YOU WOULD EARN<br><input style="padding: 10px; width: 180px; color: #1D632F; font-family: 'Roboto Slab',serif; font-size: 14px; margin: 5px; text-align: center;"  id="total" type="text" name="total" value="2,953.86" /><span id="asterisk"> *</span><br>EACH MONTH!</span>
								</p>
							</form>
						</div>
					</div>
					<div id="share">
														<a href="try_now.php">TRY IT NOW - IT'S FREE!</a>
													</div>
				</div>

				<div class="clearfix"></div>

				<div id="affiliates">
					<ul>
						<li> <img src="img/images/guest/expedia.png" alt="Expedia"> </li>
						<li> <img src="img/images/guest/bj.png" alt="Expedia"> </li>
						<li> <img src="img/images/guest/bestbuy_logo.png" alt="Best Buy"> </li>
						<li> <img src="img/images/guest/macys_logo.png" alt="Macys"> </li>
						<li> <img src="img/images/guest/dell_logo.png" alt="Dell"> </li>
						<li> <img src="img/images/guest/target_logo.png" alt="Target"> </li>
					</ul>
				</div>
			</div>
	<div style="clear:both"></div>





	<!-- SIGN UP MODAL -->
	<div class="md-modal md-effect-8" id="modal-10">
		<div class="md-content">
			<div class="center_text">
				<div> <img id="shop_modal_img" src="img/modal/logo.png" width="30%"> </div>
				<div id="shop_modal_header"> Sign up to Share </div>
				<p class="modal_paragraph">You make money on every person you refer,
					<br /> so you must sign up before sharing.
				</p>

				<form action="http://www.cashbackkaboom.com/index-guest.php" method="post">
					<input class="textbox_guest" type="text" name="fname" placeholder="First Name" />
					<br />
					<input class="textbox_guest" type="text" name="lname" placeholder="Last Name" />
					<br />
					<input class="textbox_guest" type="text" name="email" placeholder="Email Address" />
					<br />
					<input class="textbox_guest" type="password" name="password" placeholder="Password" />
					<br />
					<input type="hidden" name="try_now_btn" id="try_now_btn" value="register" />
					<input class="modal_btn" type="submit" value="TRY IT NOW - IT'S FREE!" />
				</form>

				<p id="shop_modal_login"> Already a member? <a href="login.php">Login Now</a> </p>

				<button class="md-close"></button>
			</div>
		</div>
	</div>

	<div class="md-overlay"></div>
	<!-- the overlay element -->

	<div class="clear"></div>
	<!-- END SIGN UP MODAL -->

	 <!-- MEMBER LOGIN MODAL -->
<div class="md-modal md-effect-8" id="modal-11">
	<div class="md-content">
		<div class="center_text">
			<div> <img id="shop_modal_img_login" src="img/modal/logo.png" width="40%"> </div>
			<div id="shop_modal_header"> Member Login </div> <br />
				<form action="#" method="post">
		            <input class="textbox_guest" type="text" class="textbox" name="username" placeholder="Email Address" value="" size="25" /><br />
		            <input class="textbox_guest" type="password" class="textbox" name="password" placeholder="Password" value="" size="25" /><br />
				  	<input type="hidden" name="action" value="login" />
					<input class="modal_btn" type="submit" class="submit" name="login" id="login" value="Login" /><br />
					<div id="bottom_line">
						<div style="float:left; margin-left:20px;">
							<span>Remember Me:</span>
							<div class="squaredFour">
								<input type="checkbox" value="None" id="squaredFour" name="remember" />
								<label for="squaredFour"></label>
							</div>
						</div>
						<div id="bottom_line_box2">
							<a id="forgot_pass_modal" href="forgot.php" class="ignore-register-modal">Forgot your password?</a>
						</div>
						<div class="clear"></div>
					</div>


		      </form>
			<button class="md-close"></button>
		</div>
	</div>
</div>

<div class="md-overlay"></div><!-- the overlay element -->

<div class="clear"></div>
<!-- END MEMBER LOGIN MODAL -->
		<div class="md-modal md-effect-8" id="modal-8">
	<div class="md-content">
		<div id="footer-logo"> <img src="img/modal/logo.png" alt="logo" style="position:absolute;bottom:210px; left:-43px; width:27%"> </div>
		<h3>Share with Friends!</h3>
		<img id="footer_divider" src="img/images/divider.jpg" alt="divider" />
		<div>
			<p class="blurb">Get cash back when you shop and make money too. Sign-up takes just a few seconds and Its Free! Check out this video out as it explains how Cash Back Kaboom works.</p>
			<div id="footer_form">
				<form name="footer_modal" action="http://www.cashbackkaboom.com/#" method="post">
					<p><span class="footer_verb">Copy It! </span> <input id="copyit_txtbox" type="text" name="copy" readonly="readonly" onfocus="this.select();" onclick="this.focus();this.select();" value=""></p><br />
					<p><span class="footer_verb">Email it!</span> <input id="fname_txtbox" type="text" name="friends_name" placeholder="Friend's Name"> &nbsp; <input id="femail_txtbox" type="text" name="friends_email" placeholder="Friend's Email"></p><br />
					<p><span class="footer_verb">Share It!</span> &nbsp; &nbsp; &nbsp; 


<a href="#" 
  onclick="
    window.open(
      'https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(location.href), 
      'facebook-share-dialog', 
      'width=626,height=436'); 
    return false;"><img id="face_btn" src="img/modal/facebook_btn.png" alt="facebook" style="width: 28%"></a> &nbsp; &nbsp; &nbsp; 




    <script type="text/javascript" src="../platform.twitter.com/widgets.js"></script>

    <a href="https://twitter.com/"><img id="twit_btn" src="img/modal/twitter_btn.png" style="width: 28%" alt="Tweet" /></a>


     </p> 
				</form>
			</div>

			<button class="md-close"></button>
		</div>
	</div>
</div>


<div id="footer">
	<div class="wrap">
		<div class="left">
			<a href="#" class="lo_link">FAQs</a>&nbsp;&nbsp;<a href="#" class="lo_link">Terms and Conditions</a>&nbsp;&nbsp;<a href="#" class="lo_link">Privacy Policy</a>&nbsp;&nbsp;<a href="#" class="lo_link">Contact Us</a>
			<br />
		</div>

		<div class="right">
			<a href="index.php"><img src="images/footer_logo.png" alt="Cash Back Kaboom" /></a>
		</div>

		<div class="share_text">
		<span>  
		    <a href="javascript:window.open('http://www.facebook.com/sharer/sharer.php?s=100&amp;p[url]= http://cashback.ramsitech.com/30&amp;p[images][0]=http://cashback.ramsitech.com/images/header/logo.png&amp;p[title]=Check this video out. You get cash back when you shop and make money too. It\'s Free!', '_blank', 'width=400,height=500');void(0);"><img src="img/facebook.png" class="share_text" alt="Share on Facebook" width="35" align="absmiddle"></a>
		    <a href="javascript:window.open('http://twitter.com/home?status=Check this video out. You get cash back when you shop and make money too. It\'s Free!http://cashback.ramsitech.com/30', '_blank', 'width=400,height=500');void(0);" class="share_text"><img src="img/twitter.png" alt="Share on Twitter" width="35" align="absmiddle"></a>
		    <a href="https://plus.google.com/share?url=Earn%20Cashback%20 http://cashback.ramsitech.com/30" target="_blank" onclick="javascript:window.open(this.href,
		    '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" class="share_text"><img src="img/googleplus.png" width="35" alt="Share on Google+" align="absmiddle"></a>
		</span>
		</div>

		<div class="clear"></div>

		<span class="powered-by">&copy; 2017 Cash Back EJINS | website by: <a class="ignore-register-modal" href="#" title="Creative Momentum" target="_blank"><b>EJINS<b></a><span>

			<div class="make_money_disc">
			<p>*Hey Kaboomers!  Just want to let you know that the Cash Back Calculator tool is for general illustration purposes only and actual results WILL vary. The monthly earnings displayed is based on an average cash back paid to shoppers of 2.5%. The remaining calculations are dependent solely on the assumptions you insert into the Cash Back Calculator including; how many members you may refer; how many members each member throughout your shopping network may refer; and how much money you think each member may spend per month shopping through Cash Back Kaboom.  The Cash Back Calculator then combines your assumptions with the 2.5% average cash back and projects a monthly payout according to Cash Back Kaboom Compensation Plan.</p>

			<p>However, assumptions are not reality.  So let's assume all your assumptions are not 100% accurate and your Shopping Network doesn't grow as assumed, up to 10 levels of shopping activity.  If your assumptions are incorrect, then your monthly earnings may not be as projected.</p>

			<p>That's why we at Cash Back Kaboom suggest you insert reasonable guestimates into the Cash Back Calculator. Use it in an "under-promise, over-deliver" way and you'll be amazed at the Cash Back you'll receive month after month, year after year.</p>

			<p>Anyway, enough of all this serious Disclaimer stuff.  We assume you'll have fun using the Cash Back Calculator - and use it wisely to help plan your journey to a secure financial future!</p>
		
			<p>For specific details on everything you need to know about Cash Back Kaboom, please refer to Cash Back Kaboom's <a href="#">FAQS</a>, <a href="#">Privacy Policy</a>, <a href="#">Terms &amp; Conditions</a> and <a href="#">Member Agreement</a> - and don't hesitate to <a href="">Contact Us</a> with any questions you may have.</p>
		</div>
	
	</div>
</div>
</div><!-- .bigwrap -->

<!--</div> #container -->

<!-- classie.js by @desandro: https://github.com/desandro/classie -->
<script src="../ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script src="js/classie.js" type="text/javascript"></script>
<script src="js/modalEffects.js" type="text/javascript"></script>

<script src="js/mediaelement-and-player.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="js/mediaelementplayer.css" />

<script>
// using jQuery
$('video,audio').mediaelementplayer(/* Options */);
</script>

<script type="text/javascript">
$(function(){

    var url = window.location.pathname, 
        urlRegExp = new RegExp(url.replace(/\/$/,'') + "$"); // create regexp to match current url pathname and remove trailing slash if present as it could collide with the link in navigation in case trailing slash wasn't present there
        // now grab every link from the navigation
        $('#homepage_header_nav a').each(function(){
            // and test its normalized href against the url pathname regexp
            if(urlRegExp.test(this.href.replace(/\/$/,''))){
                $(this).addClass('active');
            }
        });

});
</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-45554800-1', 'cashbackkaboom.com');
  ga('send', 'pageview');

</script>
</body>



</html>