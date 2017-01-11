 <?php include 'header.php'?>
 
    <div id="header_lvl3">
			<div id="homepage_header_logo">
				<a href="index.php" title="Return to Homepage"><img src="img/images/guest/logo.png" alt="logo" class="head_logo" /></a>

				<a class="home-icon" href="index.php"><img src="img/home_icon.png" alt="Return to Homepage" title="Return to Homepage"></a>
			</div>

			<div id="header_caption">
				The easiest way to <br /> <span class="green_text">SAVE MONEY</span> and <span class="green_text">MAKE MONEY</span><br /> on stuff you already buy!<br /><br > 
				<span class="try_now">Try it now, It's free!</span>
			</div>
			<div id="fat_stacks">
				<img id="fat_money" src="img/images/guest/fat_stacks.png" alt="money">
				<img id="fat_stacks_glow" src="img/images/guest/money_glow.png" alt="money"> 
			</div>
		</div>

		<div class="clearfix"></div>
	</div>
</div>
	<div class="wrap">

		<!-- <div id="money_bg">
			<img src="/img/images/guest/money_bg.png" alt="money">
		</div> -->

		<div id="leftcol" style="z-index: 9999;" class="left">
			<div class="left" id="guest_mid" style="z-index: 1; position: relative;">
				<script src="http://fast.wistia.com/embed/medias/nsblkeuv7x.jsonp" async></script><script src="../fast.wistia.com/assets/external/E-v1.js" async></script><span class="wistia_embed wistia_async_nsblkeuv7x popover=true popoverContent=link" style="display:inline"><a href="#"><span><img class="video-overlay" src="img/cbk_video_overlay_01.png"><img class="preroll-img" src="img/cbk_video_preroll.gif" alt="Watch Video"></span></a></span>
			</div>
		</div>
		<div id="rightcol" class="right">	
			<div id="guest_form">
				<div id="guest_form_header">
					<h2>YOU ARE INVITED!</h2>
						<p>As a member, you get special discounts and cash back from over 1,500 of your favorite retailers.</p>
												<form id="signform" action="" method="post">
							<input class="textbox_guest"  type="text" name="fname" placeholder="First Name" value="" /><br />
							<input class="textbox_guest"  type="text" name="lname" placeholder="Last Name" value="" /> <br />
							<input class="textbox_guest"  type="text" name="email" id="email" placeholder="Email Address" value="" /> <br />
							<input class="textbox_guest"  id="password" type="password" name="password" placeholder="Create A Password" value="" /><br />
							<input type="hidden" name="try_now_btn" id="try_now_btn" value="register" />
															<span onclick="showReferredBox()" id="referred_check">Were you referred by someone ?</span><br /><div id="ref_text" style="display:none;">Please enter the Reference ID number of the person who invited you in the field below. </div>
							<input style="display:none; margin-left: 15px;" class="textbox_guest" type="text" name="ref" id="ref" value="" />	

							<div class="g-recaptcha" data-sitekey="6Lfz3yMTAAAAAFdGtg4wIRfDblwZCahG7ef_rLAK"></div>

							<button id="try_now_btn" type="submit" value="TRY IT NOW - IT'S FREE!"><span style="position: relative; bottom: 10px;">GET STARTED NOW - IT'S FREE!</span></button>
							<img id="cbk_arrow" src="img/images/guest/guest_arrow.png" alt="Cash Back Arrow">
						</form>

<!-- BELOW IS USED FOR SOCIAL REGISTRATION / SIGNUP -->

      <a href="#"></a>
          <div>
    <!--  <a href=""><img src="img/facebook-register-button.png"></a><br /> 
      Already registered? <a data-modal="modal-11" class="md-trigger" style="cursor: pointer;"> LOGIN </a> -->
      </div>
    
      <!--   <img src="https://graph.facebook.com//picture"> -->
  <pre></pre>
        <!--  <strong><em>You are not Connected.</em></strong> -->
      
  
<!-- ABOVE IS USED FOR SOCIAL REGISTRATION / SIGNUP -->

				</div><br />



			</div>
		</div>
		
		<div class="clearfix"></div>

		<div id="affiliates">
			<ul>
			<!--	<li> <img src="/img/images/guest/amazon_logo.png" alt="amazon"> </li> -->
				<li> <img src="img/images/guest/expedia.png" alt="Expedia"> </li>
				<li><img src="img/images/guest/bj.png" alt="Expedia"> </li>
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
			<p class="modal_paragraph">You make money on every person you refer,<br />
				 so you must sign up before sharing.
			</p>

			<form action="http://www.cashbackkaboom.com/index.php" method="post">
				<input class="textbox_guest"  type="text" name="fname" placeholder="First Name"><br />
				<input class="textbox_guest"  type="text" name="lname" placeholder="Last Name"><br />
				<input class="textbox_guest"  type="text" name="email" placeholder="Email Address"><br />
				<input class="textbox_guest"  type="password" name="password" placeholder="Password"><br />
				<input type="hidden" name="try_now_btn" id="try_now_btn" value="register" />
				<input class="modal_btn" type="submit" value="TRY IT NOW - IT'S FREE!">
			</form>

			<p id="shop_modal_login"> Already a member? <a href="login.php">Login Now</a> </p>

			<button class="md-close"></button>
		</div>
	</div>
</div>

<div class="md-overlay"></div><!-- the overlay element -->

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
<script type="text/javascript">
jQuery(document).ready(function($){
	$( ".me-cannotplay" ).click(function() {
		return false;
	});

	// --- Email addresses must be in lower case and have no trailing spaces
	$("body").on("change", "#email", function(){
		$("#email").val($("#email").val().toLowerCase().trim());
	});
});
</script>

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