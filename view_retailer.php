 <?php $id=$_GET['sid'];
 
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


<head>
        <title>View Retailer</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:700|Open+Sans:400,700,800|Open+Sans+Condensed:700' rel='stylesheet' type='text/css'>

        <meta name="description" content="The easiest way to SAVE MONEY & MAKE MONEY on stuff you already buy - Try it now, It's free!">


        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="css/nick.css" />
        <link rel="stylesheet" type="text/css" href="css/mobile.css" />
        <link rel="stylesheet" type="text/css" href="css/mobile_update.css">

        <link rel="shortcut icon" href="favicon.ico" />
        <link rel="icon" type="image/ico" href="favicon.ico" />
        <script src="jwpsrv.com/library/czgAhjdJEeKuzSIACp8kUw.js"></script>
        <link href="css/ui-lightness/jquery-ui-1.10.3.custom.css" rel="stylesheet">

        <link src="code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" rel="stylesheet">
        <script src="code.jquery.com/jquery-1.9.1.js"></script>
        <script src="js/viewport.js"></script>
        <script src="code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
        <script src="js/jquery.slicknav.js"></script>

        <style>
            .slicknav_menu {
                display:none;
            }

            @media screen and (max-width: 768px) {
                /* #menu is the original menu */
                #logged_nav {
                    display:none;
                }
                
                .slicknav_menu {
                    display:block;
                }
            }
        </style>


        <!--[if lte IE 9]>
            <script type="text/javascript" src="/js/placeholder_fix.js"></script>
        <![endif]-->
    

        <!--[if IE 8]>
            <link rel="stylesheet" type="text/css" href="/css/ie8.css" />
        <![endif]-->

        <!--[if lt IE 8]>
            <link rel="stylesheet" type="text/css" href="/css/ie_less.css" />
        <![endif]-->
        <script src="../cdn.optimizely.com/js/261957161.js"></script>
</head>

<body>
<style type="text/css">
@media screen and (max-width: 1024px) {

    .account_dropdown > ul > li {
        background: url("images/menu_dropdown2.png") no-repeat scroll 74px 9px rgba(0, 0, 0, 0);
        padding-right: 15px;
        padding-top: 5px;
        text-transform: uppercase;
    }
}
</style>
<!-- <div id="container"> Get rid of wrap -->



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



<div id="header">

    <div id="links">
        <div class="wrap">

            <div class="share_text">
            <b>Share with</b><a class="md-trigger" data-modal="modal-10" href="#"  title="Share on Facebook"><img src="img/facebook.png" width="35"  alt="Share on Facebook" align="absmiddle" /></a> 
            <a class="md-trigger" data-modal="modal-10" href="#" title="Share on Twitter"><img src="img/twitter.png" width="35" alt="Share on Twitter" align="absmiddle" /></a>
            <a class="md-trigger" data-modal="modal-10" href="#" ><img src="img/googleplus.png" width="35" alt="Share on Google+" align="absmiddle"/></a>
        </div>
    
            <div class="account_menu">
                <div class="account_dropdown">

                                        
                        <div class="login_signup">
                            <a href="login.php" class="lo_link ignore-register-modal">Log In</a> | <a href="index.php">Sign Up</a>
                        </div>

                                </div>

            <div class="right">
                <a href="index.php"><img src="images/header/my_fave_shops.png" alt="My Fave Shops" /></a>


            </div>
            </div><!-- .account_menu -->
        </div>
    </div>

    <div class="wrap">
        <div class="inner">

            <a href="#" class="scrollup">Top</a>
            <div id="logo"><a href="index.php" class="lo_link ignore-register-modal"><img src="images/header/logo.png" alt="Cash Back Kaboom" title="Return to Home Page" border="0" /></a></div>
            
            <div class="welcome_back">
                                    <!-- Not Logged In, Show Nothing -->
                            </div>


            <ul id="logged_nav" class="main_nav">
                <li id="shop_nav"><a href="index.php">HOME</a></li>
                <li id="coupons_nav"><a href="coupons.php">COUPONS &amp; DEALS</a></li>
                <li id="money_nav"><a href="getpaid.php">MAKE MONEY</a></li>
                <li id="invite_nav"><a href="index.php">INVITE FRIENDS!</a></li>
                            </ul>

            <div class="clear"></div>
        </div>
    </div>

    	<div id="shop_drop">
		<div class="shop_title">
			<div class="wrap">
				<div class="inner">
					<div class="catdrop_col left">
						<h3>Categories</h3>
					</div>
					<div class="featuredrop_col left">
						<h3>Featured Stores</h3>
					</div>
					<div class="favoriteshopsdrop_col left">
						<h3>My Favorite Stores</h3>
					</div>

					<div class="clear"></div>
				</div>
			</div>

			<div class="clear"></div>
		</div>



		<div class="drop_sub">
			<div class="wrap">
				<div class="inner">
				<div class="catdrop_col">
					<div class="left">
						<ul>
							<li>
								<a href="retailersc055.html?cat=17"><img src="images/icons/dropdown/books.png" alt="Books Icon" /> <span class="cat_info">Books &amp; Magazines</span></a>
							</li>
							<li>
								<a href="retailers3f99.html?cat=16"><img src="images/icons/dropdown/clothin.png" alt="Clothing, Shoes, &amp; Jewelry" /> <span class="cat_info">Apparel</span></a>
							</li>
							<li>
								<a href="retailers6c5d.html?cat=18"><img src="images/icons/dropdown/computer_electronics.png" alt="Computer &amp; Electronics" /> <span class="cat_info">Computer &amp; Electronics</span></a>
							</li>
							<li>
								<a href="retailers54cb.html?cat=23"><img src="images/icons/dropdown/home_garden.png" alt="Home &amp; Garden" /> <span class="cat_info">Home &amp; Garden</span></a>
							</li>
							<li>
								<a href="retailers97dc.html?cat=33"><img src="images/icons/dropdown/toys_games.png" alt="Toys &amp; Games" /> <span class="cat_info">Toys &amp; Games</span></a>
							</li>
						</ul>
					</div>
					<div class="right">
						<ul>
							<li>
								<a href="retailers9035.html?cat=22"><img src="images/icons/dropdown/health_beauty.png" alt="Health &qmp; Beauty" /> <span class="cat_info">Health &amp; Beauty</span></a>
							</li>
							<li>
								<a href="retailers2d79.html?cat=26"><img src="images/icons/dropdown/movies_music.png" alt="Movies &amp; Music" /> <span class="cat_info">Movies &amp; Music</span></a>
							</li>
							<li>
								<a href="retailersede2.html?cat=32"><img src="images/icons/dropdown/sports_outdoors.png" alt="Sports &amp; Outdoors" /> <span class="cat_info">Sports &amp; Outdoors</span></a>
							</li>
							<li>
								<a href="retailers4821.html?cat=20"><img src="images/icons/dropdown/flowers_gifts.png" alt="Flowers, Gifts &amp; Gourmet" /> <span class="cat_info">Flowers, Gifts, Gourmet</span></a>
							</li>
							<li>
								<a href="retailers489b.html?cat=34"><img src="images/icons/dropdown/travel_auto.png" alt="Travel &amp; Auto" /> <span class="cat_info">Travel &amp; Auto</span></a>
							</li>
						</ul>
					</div>
					<div class="clear"></div>
				</div>
				<div class="featuredrop_col">
						<ul>
						
														<li>
								<a href="view_retailer58fb.html?rid=36460"><img src="img/uploads/3ya6cgwqzuirpwc73794_1408559499.jpg" width="100px" height="32px" alt="Fare Buzz" title="Fare Buzz" border="0" /> <span class="cash_back">$5 Cash Back</span></a>
							</li>
														<li>
								<a href="view_retailer0e1b.html?rid=1620136"><img src="img/uploads/xdbqbji8uzd0e69btpju_1420659855.jpg" width="100px" height="32px" alt="The Walking Company" title="The Walking Company" border="0" /> <span class="cash_back">4.5% Cash Back</span></a>
							</li>
														<li>
								<a href="view_retailerfa5f.html?rid=2538890"><img src="img/uploads/u3i3072f2ovbtw1xjoop_1385239160.png" width="100px" height="32px" alt="AVG Technologies" title="AVG Technologies" border="0" /> <span class="cash_back">2.5% Cash Back</span></a>
							</li>
														<li>
								<a href="view_retailerdf4d.html?rid=2948661"><img src="img/uploads/kwuxnl97lh24t5qn2b8m_1394125121.png" width="100px" height="32px" alt="Groupon" title="Groupon" border="0" /> <span class="cash_back">4% Cash Back</span></a>
							</li>
													</ul>
						
						<a href="index.php" class="viewalldrop">View All</a>
				</div>
				<div class="favoriteshopsdrop_col">
						<ul>
												</ul>

						<a href="index.php" class="viewalldrop">View All</a>
				</div>

				<div class="clear"></div>
				</div>
			</div>

			<div class="clear"></div>
		</div>
	</div>

    <div class="wrap">
        <div id="home_searchbox">
            <form action="" method="get" id="searchfrm" name="searchfrm">
                <input type="text" id="searchtext" name="searchtext" class="search_textbox" value="Search for stores..." onClick="if (this.defaultValue==this.value) this.value=''" onKeyDown="this.style.color='#000000'" onBlur="if (this.value=='') this.value=this.defaultValue" />
                <input type="hidden" name="action" value="search" />
                <input type="hidden" name="searchfrm_search_type" id="searchfrm_search_type" value="retailer" />
                <input type="hidden" name="searchfrm_original_term" id="searchfrm_original_term" />
                <input type="submit" class="search_button" value="" />
            </form>
        </div>
    </div>

</div><!-- #header -->


    <div class="clear"></div>



<!-- Sidebar/Left Column/Wrap Start for Layout -->
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
					  <li><a href="retailers-guest.php?/<?php echo $res[$i]["cat_id"];?>"><?php echo $res[$i]["cat_name"];?></a></li>
					 <?php } ?>
					  </ul>       
					
			    </ul>
            </div>
            <div class="bottom">&nbsp;</div>
        </div> 
        
		
		<?php
             $row1= $dbObj->select("SELECT * FROM shop where shop_id=$id");
			?>
		
		
		
        <div class="banner_left_ads">
             
            <a href="http://www.tkqlhce.com/click-4220118-10769835" ><img src="img/uploads/image-link/1ymeadaht23ovq42quh7_1463847971.png" style="max-width:100%;" /></a>
        </div>
    </div>

<div id="column_center">
	<div id="view_retailer">
		<h1><?php echo $row1[0]["name"];?>&nbsp; <a href="#" onclick="if (confirm('Are You sure You realy want to add this retailer to your favorites?') )location.href='index.php?act=add&amp;rid=1834595'"><img src="img/images/star.png" border="0" alt="add" /></a></h1>
		<span id="retail_cashback">Earn at least <?php echo $row1[0]["cashback"];?>% Cash Back!</span>
		<img class="view_retail_divider" src="img/images/divider.jpg" alt="divider" />


		




				<table align="center" width="100%" border="0" cellspacing="0" cellpadding="5">
					<tr class="odd">
						<td width="125" align="center" valign="middle">
							<span class="featured" alt="Featured Retailer" title="Featured Retailer"></span>							<div id="shop_now_padding" class="retailview_imagebox">
							<!-- 	<a  href="/go2store.php?id=" target="_blank"><img src="" width="" height="" alt="" title="Guitar Center" border="0" /></a>   -->
								
								<!-- DISPLAY WEBSITE SCREENSHOT, IF NO SCREENSHOT FOUND DISPLAY STORE LOGO INSTEAD -->
							<!--	<a  href="/go2store.php?id=1834595" target="_blank"><img src="/images/stores/1834595.png" alt="Image not found" onError="this.onerror=null;this.src='http://www.cashbackkaboom.com/img/uploads/lygt8djusgoc0pq2rduk_1387298851.png';" />  -->
							<img src="images/img/<?php echo  $row1[0]["picture"];?>" style="position: absolute; z-index: -1;"  />
<iframe src="http://www.kqzyfj.com/click-4220118-10432687?sid={USERID}" width="1024" height="768" frameBorder="0" scrolling="no"></iframe>  

							</div>
							<div class='rating'><div class='cover'></div><div class='progress' style='width: 0%;'></div></div>						</td>

						<td valign="top">
							<p class="viewretailer_description"><?php echo $row1[0]["shop_des"];?></p>

							<p>
								<a class="shop_now_btn"  href="go2store5ddc.html?id=773&amp;c=763034" target="_blank" > SHOP Guitar Center NOW! &#9658; </a>
							 
							</p>

														
						</td>
					</tr>
				</table>


				<a name="coupons"></a><br />
				<h1>Coupons &amp; Deals</h1>
				<img class="view_retail_divider" src="img/images/divider.jpg" alt="divider" />
				<div id="coupon_tabs_set">
					<div id="tabs_container">
						<ul id="tabs">
							<span id="sortby_label">SORT BY</span>&nbsp;&nbsp;&nbsp;
							<li class="active"><a href="#all"><span>All Offers</span></a></li>
							<li><a href="#free_shipping"><span>Free Shipping</span></a></li>
							<li><a href="#store_wide"><span>Store Wide</span></a></li>
							<li><a href="#percent_off"><span>% OFF</span></a></li>
							<li><a href="#money_off"><span>$ OFF</span></a></li>
						</ul>
					</div>
				</div>


				<div id="all" class="tab_content">
									</div>

				<div id="free_shipping" class="tab_content">
			<p align='center'>There no coupons at this time.</p>				</div>

			<div id="store_wide" class="tab_content">
			<p align='center'>There no coupons at this time.</p>			</div>


			<div id="percent_off" class="tab_content">
			<p align='center'>There no coupons at this time.</p>			</div>

			<div id="money_off" class="tab_content">
			<p align='center'>There no coupons at this time.</p>			</div>

			<div style="clear: both"></div>


			</div>

</div>


</div><!-- .wrap -->


<div class="md-modal md-effect-8" id="modal-8">
	<div class="md-content">
		<div id="footer-logo">
			<img src="img/modal/logo.png" alt="logo" style="position:absolute;bottom:210px; left:-43px; width:27%"> 
		</div>

		<h3>Share with Friends!</h3>
		<img id="footer_divider" src="img/images/divider.jpg" alt="divider" />
		
		<div>
			<p class="blurb">Use Cash Back Ejins fast and easy invitation methods to invite others. Those you invite will be added to your Shopping Network and you’ll get paid each time they shop - over and over again - forever!*</p>
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

			<form action="form.php" method="post">
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
			<a class="ignore-register-modal" href="index.php"><img src="images/footer_logo.png" title="Return to Title Page" alt="Cash Back Kaboom" /></a>
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