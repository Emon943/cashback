  <?php
    include 'config/config.php';
	 $dbObj =	new DBUtility();
	
	$msg="Thank You For Being With Us";
	if(isset($_POST['submit']))
	{
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$password=$_POST['password'];

	$sql="INSERT INTO members_details(first_name,last_name,email_address,password)
	VALUES ('".$fname."', '".$lname."', '".$email."','".$password."')";

	if (mysql_query($sql)) {
		echo $msg;
	} else {
		echo "Error: " . $sql . "<br>" . mysql_error();
	}
	}



    ?>
	



<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<title>Retailers-Guest</title>

<head>
<!-- Facebook Like Thumbnail -->
<meta property="og:image" content="images/fb_logo.png" />
<!-- End Facebook Like Thumbnail -->
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="css/guest.css" />
	<link rel="stylesheet" type="text/css" href="css/nick.css" />
	<link rel="stylesheet" type="text/css" href="css/mobile_update.css">
	<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:700|Open+Sans:400,700,800|Open+Sans+Condensed:700' rel='stylesheet' type='text/css'>
	<script src="code.jquery.com/jquery-1.9.1.js"></script>
	<script src="code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
	<script src='../www.google.com/recaptcha/api.js'></script>
	<style>
		#modal-10 {
			padding-bottom: 0;
			position: fixed;
			top: 340px;
		}
		#modal-10 .md-close {
			top: -95px;
		}
		#modal-10 .md-content {
			padding:10px 0 0;
		}
	</style>

	<!--[if lte IE 9]>
		<script type="text/javascript" src="/js/placeholder_fix.js"></script>
	<![endif]-->
	

	<!--[if lte IE 8]>
		<link rel="stylesheet" type="text/css" href="/css/ie8.css" />
	<![endif]-->
</head>
<script type="text/javascript">
	//Redirect to login.php, bypassing the modal, if on a mobile device
	function mobileCheck(){
		if( /Android|webOS|iPhone|iPod|BlackBerry|IEMobile/i.test(navigator.userAgent) ) {
		    window.location = "login.php";
		}	
	}
</script>
<div id="header">
	<div class="wrap">
		<div id="top_bar">
						<div class="right">
				<a onclick="mobileCheck()" style="cursor: pointer;font-size: 14px;" class="md-trigger share_li_link" data-modal="modal-11"> <span id="guest_member_login">Phone +44 (0) 7859 055 647 |  MEMBER LOGIN </span> <span id="guest_share_with">Share with</span> </a>

				<a class="md-trigger" data-modal="modal-10" href="#"  title="Share on Facebook"><img src="img/facebook.png" width="35"  alt="Share on Facebook" align="absmiddle" /></a> 
				<a class="md-trigger" data-modal="modal-10" href="#" title="Share on Twitter"><img src="img/twitter.png" width="35" alt="Share on Twitter" align="absmiddle" /></a>
				<a class="md-trigger" data-modal="modal-10" href="#" ><img src="img/googleplus.png" width="35" alt="Share on Google+" align="absmiddle"/></a>
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
				<a class="ignore-register-modal" href="index.php" title="Return to Homepage" class="lo_link"><img src="img/images/guest/logo.png" alt="logo" class="head_logo" /></a>

				<a class="home-icon" href="index.html"><img src="img/home_icon.png" alt="Return to Homepage" title="Return to Homepage"></a>
			</div>

			<div id="header_caption">
				The easiest way to <br /> <span class="green_text">SAVE MONEY</span> and <span class="green_text">MAKE MONEY</span><br /> on stuff you already buy!<br /><br > 
				<span class="try_now">Try it now, It's free!</span>
			</div>
		</div>

		<div class="clearfix"></div>
	</div>
</div>
<div id="slidewrap">
	<div id="slider">
		<div class="wrap">
			<div class="innerslide">

				<a href="view_retailer9287.html?rid=3184"><img src="upload/macys2.png"  /></a><a href="view_retailer5e19.html?rid=1874913"><img src="upload/Hot%20Summer%20Travel%20Deals%20facebook%20(1).png"  /></a><a href="view_retailer97bb.html?rid=24550"><img src="upload/vitamin%20World.png"  /></a><a href="index.html"><img src="upload/homecbk.png"  /></a><a href="view_retailerdf88.html?rid=36061"><img src="upload/adminbonton.png"  /></a>			</div>
		</div>
	</div>

	<div class="home_coupons">
			<?php
			$sql="select * from shop";
             $res= $dbObj->select($sql);
			?>
		<div id="homescroll">
		
		<?php for ($i = 0; $i < count($res); $i++) {?>
		
					<div>
		<!--	<a href="/view_retailer.php?rid=7160"><img src="http://www.cashbackkaboom.com/img/uploads/479mzh13ifw1mrkbn82y_1408552930.jpg" width="120" height="65" alt="Dog.com" title="Dog.com" border="0" /></a> -->
			<a href="view_retailer.php?sid=<?php echo $res[$i]["shop_id"];?>"><img src="images/img/<?php echo $res[$i]["picture"];?>" width="120" height="65" alt="Ejins.com" title="Ejins.com" border="0" /></a>
			<span class="thumbnail-text">
				<?php echo $res[$i]["cashback"];?>% Cashback
			</span>
		</div>
		
					 
<?php } ?>
	
				
</div>
		<div style="clear: both"></div>
		
			<div class="clear"></div>
	</div>
</div>

<!-- End Homepage Exlusively -->

<div class="wrap">
    <div id="column_left">
       <div class="box">
            <div class="top">
                Shop by Category

                <a href="#" class="expand_contract_mobile"></a>
            </div>
			<?php
			$sql="select * from category";
             $res= $dbObj->select($sql);
			?>
            <div class="middle">
                <ul id="categories">
                    <li><a href="retailers.php">All Stores</a></li>
                    <ul style='padding-left:0px;margin:0;'>
					<?php for ($i = 0; $i < count($res); $i++) {?>
					<li><a href="retailers-guest.php?id=<?php echo $res[$i]["cat_id"];?>"><?php echo $res[$i]["cat_name"];?></a></li>
					 <?php } ?>
					  </ul>       
					
			    </ul>
            </div>
            <div class="bottom">&nbsp;</div>
        </div>
        
        <div class="banner_left_ads">
             
            <a href="http://www.tkqlhce.com/click-4220118-10769835" ><img src="img/uploads/image-link/1ymeadaht23ovq42quh7_1463847971.png" style="max-width:100%;" /></a>
        </div>
    </div>

<div id="column_center">

<div class="featured_coupons_deals">
	<h1>Featured Coupons &amp; Deals</h1>
	
   
   <?php
	$c_id=$_GET["id"];
	$sql="SELECT * FROM shop
     JOIN category
     ON shop.cat_id=category.cat_id where shop.cat_id=$c_id";
     $res= $dbObj->select($sql);
	// var_dump($res)
   ?>


<table align="center" width="100%" border="0" cellspacing="0" cellpadding="5" class="retailer_list">
	 
      	<?php
		 for ($i = 0; $i < count($res); $i++) {
		?>		
		<tr class="odd">
		 
						<td width="125" align="center" valign="middle">
							<span class="featured" alt="Featured Retailer" title="Featured Retailer"></span>							
							<span class="retail_shop" id="store_list"><a href="view_retailer.php?sid=<?php echo $res[$i]["shop_id"];?>" class="md-trigger" data-modal="modal-10"><img src="images/img/<?php echo  $res[$i]["picture"];?>" width="120" height="65" alt="1-800-FLOWERS" title="1-800-FLOWERS" border="0" /></a></span>
							<div class='rating'><div class='cover'></div><div class='progress' style='width: 0%;'></div></div>						</td>
						<td align="left" valign="middle">
		
							<table width="100%" border="0" cellspacing="0" cellpadding="3" style="float:left;">
								<tr>
									<td width="65%" align="left" valign="top">
										<a class="retailer_title" href="view_retailer.php?sid=<?php echo $res[$i]["shop_id"];?>"><?php echo $res[$i]["name"];?></a> <a href="#" onclick="if (confirm('Are You sure You realy want to add this retailer to your favorites?') )location.href='index.html?act=add&amp;rid=773'"><img src="img/images/star.png" border="0" alt="add" /></a>
									</td>
									<td nowrap="nowrap" width="10%" align="right" valign="top" class="no-content-cell"> &nbsp; </td>
									<td nowrap="nowrap" width="30%" align="right" valign="top" class="no-content-cell"> &nbsp; </td>
								</tr>
								<tr>
									<td colspan="3" valign="middle" align="left">
										<p class="cbk_green"><?php echo $res[$i]["shop_des"];?>&nbsp;<br /><br /></p>
																		</td>

									<td valign="top" align="left">

										<a href="go2store5ddc.html?id=773&amp;c=763034" target="_blank" class="grab_this">
											<span class="gold">Plus <?php echo $res[$i]["cashback"];?>% Cashback!</span><br />
											<span class="grab_text">Grab This Deal</span>
										</a>

<!-- ********************** Below added for Social Sharing ******************** -->
										<div class="share_this_deal clear">
											<span>Share this deal</span>
									<a href="http://www.facebook.com/sharer/sharer.php?s=100&amp;p[url]=http%3A%2F%2Fwww.cashbackkaboom.com%2Fview_retailer.php%3Frid%3D773%26ref%3D&amp;p[images][0]=http://www.cashbackkaboom.com/images/header/logo.png&amp;p[title]=1-800-FLOWERS&amp;p[summary]=Save+Up+to+50%25+Off+on+Flowers+and+Gifts%21+Send+Truly+Original+Arrangements+at+1800flowers.+%28No+Promo+Code+Required%29%21" target="_blank" onclick="window.open(this.href, '_blank', 'width=400,height=500');return false;"><img src="images/icon_facebook.png"  alt="Share on Facebook" /></a>

										<a href="http://twitter.com/home?status=Save+Up+to+50%25+Off+on+Flowers+and+Gifts%21+Send+Truly+Original+Arrangements+at+1800flowers.+%28No+Promo+Code+Required%29%21%20http://www.cashbackkaboom.com/view_retailer.php?rid=773%26ref=" target="_blank" title="Share on Twitter" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><img src="images/icon_twitter.png" alt="Share on Twitter" /></a>
											
											<a href="https://plus.google.com/share?url=The%20Easiest%20Way%20to%20SAVE%20MONEY%20and%20MAKE%20MONEY%20on%20stuff%20you%20already%20buy!%20Save+Up+to+50%25+Off+on+Flowers+and+Gifts%21+Send+Truly+Original+Arrangements+at+1800flowers.+%28No+Promo+Code+Required%29%21%20http://www.cashbackkaboom.com/view_retailer.php?rid=773%26ref=" title="Share on Google+" target="_blank" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><img src="images/icon_google.png" alt="Share on Google+" /></a>
	  							    	</div>
<!-- ********************** Above added for Social Sharing ******************** -->
									</td>
								</tr>
							</table>
						</td>
					</tr>
					<?php } ?>
					
			
					

	  							    	</div>
<!-- ********************** Above added for Social Sharing ******************** -->
									</td>
								</tr>
			                
							</table>
						</td>
					</tr>		
					<tr>
		  <td valign="middle" align="center" colspan="2">
			<div class='pagination'><span class='disabled'>&#139; Previous</span><span class='curPage'>1</span><a href='index93a8.html?column=&amp;order=&amp;page=2'>2</a><a href='index8da6.html?column=&amp;order=&amp;page=3'>3</a><a href='index9c65.html?column=&amp;order=&amp;page=4'>4</a><a href='indexfadc.html?column=&amp;order=&amp;page=5'>5</a><a href='index0b1c.html?column=&amp;order=&amp;page=6'>6</a><a href='indexdf56.html?column=&amp;order=&amp;page=7'>7</a><a href='index6c1b.html?column=&amp;order=&amp;page=8'>8</a><a href='index1155.html?column=&amp;order=&amp;page=9'>9</a>...<a href='indexd26c.html?column=&amp;order=&amp;page=61'>61</a><a href='index6491.html?column=&amp;order=&amp;page=62'>62</a><a href='index93a8.html?column=&amp;order=&amp;page=2'>Next &#155;</a></div>
		  </td>
		</tr>
		</table>
	</div>
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
</div>


</div><!-- .wrap -->

<div id="need_more_cash">
	<a href="index.html"><img src="images/need_cash_back.png" alt="Need More Cash Back?" /></a><br />
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
				<form name="footer_modal" action="" method="post">
					<p><span class="footer_verb">Copy It! </span> <input id="copyit_txtbox" type="text" name="copy" readonly="readonly" onfocus="this.select();" onclick="this.focus();this.select();" value="0.html"></p><br />
					<p><span class="footer_verb">Email it!</span> <input id="fname_txtbox" type="text" name="friends_name" placeholder="Friend's Name"> &nbsp; <input id="femail_txtbox" type="text" name="friends_email" placeholder="Friend's Email"></p><br />
					<p><span class="footer_verb">Share It!</span> &nbsp; &nbsp; &nbsp; 
						<a href="0.html" onclick=" window.open('https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(href), 'facebook-share-dialog', 'width=626,height=436'); return false;"><img id="face_btn" src="img/modal/facebook_btn.png" alt="facebook" style="width: 28%" /></a> &nbsp; &nbsp; &nbsp; 

						<script type="text/javascript" src="../platform.twitter.com/widgets.js"></script>

						<a href="https://twitter.com/intent/tweet?text=Want%20to%20save%20money%20on%20items%20you're%20currently%20buying?%20Want%20to%20make%20money%20as%20well?%20Check%20this%20out&amp;url=http%3A%2F%2Fcashbackkaboom.com/0"><img id="twit_btn" src="img/modal/twitter_btn.png" style="width: 28%" alt="Tweet" /></a>
     				</p> 
				</form>
			</div>
			<button class="md-close"></button>
		</div>
	</div>
</div>

<div class="md-overlay"></div><!-- the overlay element -->


<!-- Register Modal -->
 <!-- SIGN UP MODAL -->
<div class="md-modal md-effect-8" id="modal-10">
	<div class="md-content">
		<div class="center_text">
			<div> <img id="shop_modal_img" src="img/modal/logo.png" width="30%"> </div>
			<div id="shop_modal_header">Join for free and get cash back!</div>
			<p class="modal_paragraph">As a member, you get special discounts and cash<br />back from over 1,500 of your favorite retailers.
			</p>

			<form action="" method="post">
				<input class="textbox_guest"  type="text" name="fname" placeholder="First Name"><br />
				<input class="textbox_guest"  type="text" name="lname" placeholder="Last Name"><br />
				<input class="textbox_guest"  type="text" name="email" placeholder="Email Address"><br />
				<input class="textbox_guest"  type="password" name="password" placeholder="Password"><br />
				<input type="hidden" name="try_now_btn" id="try_now_btn" value="register" />
				<div class="g-recaptcha" data-sitekey="6Lfz3yMTAAAAAFdGtg4wIRfDblwZCahG7ef_rLAK"></div>
				<input class="modal_btn" type="submit" name="submit" value="TRY IT NOW - IT'S FREE!">
			</form>

			<p id="shop_modal_login_member"> Already a member? <a href="login.php" class="ignore-register-modal">Login Now</a> </p>
			<p id="shop_modal_login_password"> Forgot Your Password? <a href="forgot.php" class="ignore-register-modal">Reset Now</a> </p>

			<button class="md-close"></button>
		</div>
	</div>
</div>

<div class="md-overlay"></div><!-- the overlay element -->

<div class="clear"></div>
<!-- END SIGN UP MODAL -->
<!-- End Register Modal -->



<div class="clear"></div>

<div id="footer">
	<div class="wrap">
		<div class="left">
			<a href="#" class="ignore-register-modal">FAQs</a>&nbsp;&nbsp;<a href="#" class="ignore-register-modal">Terms and Conditions</a>&nbsp;&nbsp;<a href="#" class="ignore-register-modal">Privacy Policy</a>&nbsp;&nbsp;<a href="#" class="ignore-register-modal">Contact Us</a>
		</div>

		<div class="right">
			<a class="ignore-register-modal" href="index.html"><img src="images/footer_logo.png" title="Return to Title Page" alt="Cash Back Kaboom" /></a>
		</div>

		<div class="share_text">
		<span>  
		    <a href="javascript:window.open('http://www.facebook.com/sharer/sharer.php?s=100&amp;p[url]=http://www.cashbackkaboom.com/30&amp;p[images][0]=http://www.cashbackkaboom.com/images/header/logo.png&amp;p[title]=Check this video out. You get cash back when you shop and make money too. It\'s Free!', '_blank', 'width=400,height=500');void(0);"><img src="img/facebook.png" class="share_text" alt="Share on Facebook" width="35" align="absmiddle"></a>
		    <a href="javascript:window.open('http://twitter.com/home?status=Check this video out. You get cash back when you shop and make money too. It\'s Free! http://www.cashbackkaboom.com/30', '_blank', 'width=400,height=500');void(0);" class="share_text"><img src="img/twitter.png" alt="Share on Twitter" width="35" align="absmiddle"></a>
		    <a href="https://plus.google.com/share?url=Earn%20Cashback%20http://www.cashbackkaboom.com/30" target="_blank" onclick="javascript:window.open(this.href,
		    '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" class="share_text"><img src="img/googleplus.png" width="35" alt="Share on Google+" align="absmiddle"></a>
		</span>
		</div>

		<div class="clear"></div>

		<!-- Do not remove this copyright notice! -->
			<div class="powered-by"><span class="powered-by">&copy; 2017 Cash Back EJINS | website by: <a class="ignore-register-modal" href="#" title="Creative Momentum" target="_blank"><b>EJINS<b></a><span> <div>
		<!-- Do not remove this copyright notice! -->
	</div>
</div>

<!-- For Shop Page, if not logged in, display a modal to register -->
	<!-- classie.js by @desandro: https://github.com/desandro/classie -->
	<script src="js/classie.js" type="text/javascript"></script>

				<script src="js/loggedout_modal.js" type="text/javascript"></script>
		


<script src="js/nivo-slider/jquery.nivo.slider.pack.js" type="text/javascript"></script>
<script type="text/javascript" src="js/jquery.autocomplete.js"></script>
<script type="text/javascript" src="js/jsCarousel.js"></script>
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<script type="text/javascript" src="js/cashbackengine.js"></script>

<script type="text/javascript">
$(window).load(function() {
    $('#slider .innerslide').nivoSlider({
        effect: 'random', // Specify sets like: 'fold,fade,sliceDown'
        slices: 15, // For slice animations
        boxCols: 8, // For box animations
        boxRows: 4, // For box animations
        animSpeed: 600, // Slide transition speed
        pauseTime: 9000, // How long each slide will show
        startSlide: 0, // Set starting Slide (0 index)
        directionNav: true, // Next & Prev navigation
        controlNav: false, // 1,2,3... navigation
        controlNavThumbs: false, // Use thumbnails for Control Nav
        pauseOnHover: true, // Stop animation while hovering
        manualAdvance: false, // Force manual transitions
        prevText: '', // Prev directionNav text
        nextText: '', // Next directionNav text
        randomStart: false, // Start on a random slide
        beforeChange: function(){}, // Triggers before a slide transition
        afterChange: function(){}, // Triggers after a slide transition
        slideshowEnd: function(){}, // Triggers after all slides have been shown
        lastSlide: function(){}, // Triggers when last slide is shown
        afterLoad: function(){} // Triggers when slider has loaded
    });
});


$("#shop_nav").mouseenter(function(){
	$('#shop_drop').show();
}).mouseleave(function() {
	$('#shop_drop').hide();
});

$("#shop_drop").mouseenter(function() {
	$(this).show();
}).mouseleave(function() {
	$(this).hide();
});

jQuery(document).ready(function($){
	// --- Add chrome class if using chrome
	var Chrome = false;
	if (navigator.userAgent.toLowerCase().indexOf('chrome') > -1) {
		Chrome = true;
		$('body').addClass('chrome');
	}

	// --- Add active class to navigation element
    var url = window.location.pathname, 
        urlRegExp = new RegExp(url.replace(/\/$/,'') + "$"); // create regexp to match current url pathname and remove trailing slash if present as it could collide with the link in navigation in case trailing slash wasn't present there
        // now grab every link from the navigation
        $('#homepage_header_nav a').each(function(){
            // and test its normalized href against the url pathname regexp
            if(urlRegExp.test(this.href.replace(/\/$/,''))){
                $(this).addClass('active');
            }
        });

	$("body").on("click", ".hide_link", function(){
		$.get( "session/hide_more_cash.html");
		$("#need_more_cash").fadeOut();
	});
});

$('#column_left .box .top').on( "click", function() {
  $( "#column_left .box .middle" ).toggle( "fast", function() {});
  $(this).toggleClass('active');
  return false;
});

$(document).ready(function() {
	    $(".cashbackengine_tooltip").click(
	        function() { $(this).contents("span:last-child").css({ display: "block" }); return false; }
	    );
	    $(".cashbackengine_tooltip").mousemove(function(e) {
	        // var mousex = e.pageX + 10;
	        // var mousey = e.pageY + 10;
	        var mousex = 90;
	        var mousey = 0;
	        $(this).contents("span:last-child").css({  top: mousey, left: mousex });
	    });
});

$(function(){
	$('#logged_nav').slicknav();
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