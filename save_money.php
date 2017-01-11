<?php include 'header.php'?>

				<div id="header_lvl3">
					<div id="homepage_header_logo">
						<a href="index.php" title="Return to Homepage"><img src="img/images/guest/logo.png" alt="logo" class="head_logo" /></a>

						<a class="home-icon" href="index.php"><img src="img/home_icon.png" alt="Return to Homepage" title="Return to Homepage"></a>
					</div>

					<div id="header_caption">
						<span>Save Money<br> <span class="green_text">Every Time You Shop!</span></span>
					</div>
				</div>

				<div class="clearfix"></div>
		</div>
	</div>
	
	<div class="mast-img"></div>

	<body id="guest_bg" class="save-money">
		<div class="wrap">
			<div id="leftcol" class="left" style="z-index: 9999;">
				<div class="left" id="trynow_mid" style="z-index: 1; position: relative;">
					<h2 class="section-title">Cash Back Kaboom gives you 2 great ways to save:</h2>

					<h3><span class="number-circle">1</span> Exclusive Coupons &amp; Special Deals</h3>

					<p>Our powerful software works 24/7, searching every one of our 1,500+ cash-back merchants for <strong>discounts, sales, deals, and free offers</strong>. We literally find thousands of these money-saving opportunities every day, and we share them with our members. So when you shop, <strong>you know you're getting the best deal&nbsp;possible</strong>.</p>

					<h3><span class="number-circle">2</span> Cash Back on Spending</h3>

					<p>That's right. In addition to making sure you get the best prices and deals possible on the stuff you're already buying, <strong>we give you cash back every time you shop</strong> with one of our 1,500+ cash-back merchants. These are stores you're already shopping at, like <strong>Macy's, Target, Best Buy, BJ's</strong> and more. We're talking realy money, too&ndash;not points or credits.</p>

					<h3>So what are you waiting for?</h3>

					<p>Cash Back Kaboom is the world's fastest growing shopping club, and <strong>membership is free</strong>. No risk, all reward. Sign up now and start getting unbeatable deals and cash back <strong>every time you shop</strong>.</p>
				</div>
			</div>
			<script>
				function placeholder(el, w) {


					if (el.value == "Default value" && w == "focus") el.value = "";
					if (el.value == "" && w == "blur") el.value = "Default value";


				}
			</script>
			<div id="rightcol" class="right">
				<div id="guest_form">
					<div id="guest_form_header">
						<h2 style="margin-bottom: 0px;">INSTANT SAVINGS!</h2>
						<p style="margin-bottom: 5px;">Get <strong>special discounts, coupons</strong> and <strong>cash back</strong><br>from over 1500 of  your favorite retailers!</p>
														<form id="signform" action="http://www.cashbackkaboom.com/try_now.php" method="post">
									<input class="textbox_guest" type="text" name="fname" placeholder="First Name" value="" />
									<input class="textbox_guest" type="text" name="lname" placeholder="Last Name" value="" />
									<input class="textbox_guest" type="text" name="email" placeholder="Email Address" value="" />
									<input class="textbox_guest" id="password" type="password" name="password" placeholder="Create A Password" onChange="checkFilled();" value="">
									<input type="hidden" name="try_now_btn" id="try_now_btn" value="register" />
																				<div class="g-recaptcha" data-sitekey="6Lfz3yMTAAAAAFdGtg4wIRfDblwZCahG7ef_rLAK"></div>
											<div>
												<button id="try_now_btn" type="submit" value="TRY IT NOW - IT'S FREE!"><span style="position: relative; bottom: 10px;">TRY IT NOW - IT'S FREE!</span></button>
											</div>
								</form>
					</div>



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

					<form action="#" method="post">
						<input class="textbox_guest" type="text" name="fname" placeholder="First Name">
						<br />
						<input class="textbox_guest" type="text" name="lname" placeholder="Last Name">
						<br />
						<input class="textbox_guest" type="text" name="email" placeholder="Email Address">
						<br />
						<input class="textbox_guest" type="password" name="password" placeholder="Password">
						<br />
						<input type="hidden" name="try_now_btn" id="try_now_btn" value="register" />
						<input class="modal_btn" type="submit" value="TRY IT NOW - IT'S FREE!">
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
		<!-- BELOW AUTO SUBMIT SIGNUP FORM AFTER FACEBOOK FILLS IN FIELDS -->
		<script>
			var input = document.getElementById('password');
			if (input.value.length > 0)
				document.getElementById('signform').submit();
		</script>
		<!-- ABOVE AUTO SUBMIT SIGNUP FORM AFTER FACEBOOK FILLS IN FIELDS -->
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

    <a href="https://twitter.com/intent/tweet?text=Want%20to%20save%20money%20on%20items%20you're%20currently%20buying?%20Want%20to%20make%20money%20as%20well?%20Check%20this%20out&amp;url=http%3A%2F%2Fcashbackkaboom.com"><img id="twit_btn" src="img/modal/twitter_btn.png" style="width: 28%" alt="Tweet" /></a>


     </p> 
				</form>
			</div>

			<button class="md-close"></button>
		</div>
	</div>
</div>


<?php include 'footer.php'?>