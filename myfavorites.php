<?php
    session_start();
    ob_start();
    include 'config/config.php';
	$dbObj =	new DBUtility();
    ?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
        <title>My Favorite Stores | Cash Back Kaboom</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:700|Open+Sans:400,700,800|Open+Sans+Condensed:700' rel='stylesheet' type='text/css'>

        <meta name="description" content="The easiest way to SAVE MONEY & MAKE MONEY on stuff you already buy - Try it now, It's free!">


        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="css/nick.css" />
        <link rel="stylesheet" type="text/css" href="css/mobile.css" />
        <link rel="stylesheet" type="text/css" href="css/mobile_update.css">

        <link rel="shortcut icon" href="favicon.ico" />
        <link rel="icon" type="image/ico" href="favicon.ico" />
        <script src="http://jwpsrv.com/library/czgAhjdJEeKuzSIACp8kUw.js"></script>
        <link href="css/ui-lightness/jquery-ui-1.10.3.custom.css" rel="stylesheet">

        <link src="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" rel="stylesheet">
        <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
        <script src="js/viewport.js"></script>
        <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
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


       
        <script src="/cdn.optimizely.com/js/261957161.js"></script>
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

<div id="header">

    <div id="links">
        <div class="wrap">

            <div class="share_text">
        <span>  
          <b class="share_text">Share with</b> 
            <a href="javascript:window.open('http://www.facebook.com/sharer/sharer.php?s=100&p[url]=http://www.cashbackkaboom.com/3735&p[images][0]=http://www.cashbackkaboom.com/images/header/logo.png&p[title]=Check this video out. You get cash back when you shop and make money too. It\'s Free!', '_blank', 'width=400,height=500');void(0);"><img src="img/facebook.png"  class="share_text" alt="Share on Facebook" width="35" align="absmiddle" /></a>
            <a href="javascript:window.open('http://twitter.com/home?status=Check this video out. You get cash back when you shop and make money too. It\'s Free! http://www.cashbackkaboom.com/3735', '_blank', 'width=400,height=500');void(0);" class="share_text"><img src="img/twitter.png" alt="Share on Twitter" width="35" align="absmiddle" /></a>
            <a href="https://plus.google.com/share?url=Earn Cashback http://www.cashbackkaboom.com/3735" target="_blank" onClick="javascript:window.open(this.href,
            '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" class="share_text"><img src="img/googleplus.png" width="35" alt="Share on Google+" align="absmiddle"></a>
       </span>
        </div>
    
            <div class="account_menu">
                <div class="account_dropdown">

                                    <ul>
                        <li>
                            <a href="#">My Account</a>

                            <ul>
                                <li><a href="myprofile.php">My Settings</a></li>
                                <li><a href="myfavorites.php">My Favorite Stores</a></li>
                                <li><a href="myshopping.php">My Shopping History</a></li>
                                <li><a href="mynetwork.php">My Shopping Network</a></li>
                                <li><a href="withdraw.php">Withdraw Funds</a></li>
                                <li><a href="invite.php">Refer My Friends</a></li>
                                <li><a href="myprofile.php">Edit My Profile</a></li>
                                <li><a href="store">CBK Promo Items</a></li>
                                <li><a href="video_savemoney.php">View Videos</a></li>
                                <li><a href="mysupport.php">Support</a></li>
                                <li><a href="logout.php">Logout</a></li>
                            </ul>
                        </li>
                    </ul>

                <div class="balance_info">
                    <strong>Balance:</strong> <em class="mbalance">$0.00</em>
                </div>
                            
                                </div>

            <div class="right">
                <a href="myfavorites.php"><img src="images/header/my_fave_shops.png" alt="My Fave Shops" /></a>


            </div>
            </div><!-- .account_menu -->
        </div>
    </div>

    <div class="wrap">
        <div class="inner">

            <a href="#" class="scrollup">Top</a>
            <div id="logo"><a href="" class="lo_link ignore-register-modal"><img src="images/header/logo.png" alt="Cash Back Kaboom" title="Return to Home Page" border="0" /></a></div>
            
            <div class="welcome_back">
                               <?php
							if (@$_SESSION['user'] != "") {
								?>
								<div>
									<?php echo "Welcome " . $_SESSION['first_name'] . "!"; ?>
								</div>
								<?php
							}else{
								echo "Welcome" ." " .$_SESSION['ref_id'] . "!";
							}
							?>
                            </div>


            <ul id="logged_nav" class="main_nav">
                <li id="shop_nav"><a href="">HOME</a></li>
                <li id="coupons_nav"><a href="coupons.php">COUPONS &amp; DEALS</a></li>
                <li id="money_nav"><a href="getpaid.php">MAKE MONEY</a></li>
                <li id="invite_nav"><a href="invite.php">INVITE FRIENDS!</a></li>
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
								<a href="retailers.php?cat=17"><img src="images/icons/dropdown/books.png" alt="Books Icon" /> <span class="cat_info">Books &amp; Magazines</span></a>
							</li>
							<li>
								<a href="retailers.php?cat=16"><img src="images/icons/dropdown/clothin.png" alt="Clothing, Shoes, &amp; Jewelry" /> <span class="cat_info">Apparel</span></a>
							</li>
							<li>
								<a href="retailers.php?cat=18"><img src="images/icons/dropdown/computer_electronics.png" alt="Computer &amp; Electronics" /> <span class="cat_info">Computer &amp; Electronics</span></a>
							</li>
							<li>
								<a href="retailers.php?cat=23"><img src="images/icons/dropdown/home_garden.png" alt="Home &amp; Garden" /> <span class="cat_info">Home &amp; Garden</span></a>
							</li>
							<li>
								<a href="retailers.php?cat=33"><img src="images/icons/dropdown/toys_games.png" alt="Toys &amp; Games" /> <span class="cat_info">Toys &amp; Games</span></a>
							</li>
						</ul>
					</div>
					<div class="right">
						<ul>
							<li>
								<a href="retailers.php?cat=22"><img src="images/icons/dropdown/health_beauty.png" alt="Health &qmp; Beauty" /> <span class="cat_info">Health &amp; Beauty</span></a>
							</li>
							<li>
								<a href="retailers.php?cat=26"><img src="images/icons/dropdown/movies_music.png" alt="Movies &amp; Music" /> <span class="cat_info">Movies &amp; Music</span></a>
							</li>
							<li>
								<a href="retailers.php?cat=32"><img src="images/icons/dropdown/sports_outdoors.png" alt="Sports &amp; Outdoors" /> <span class="cat_info">Sports &amp; Outdoors</span></a>
							</li>
							<li>
								<a href="retailers.php?cat=20"><img src="images/icons/dropdown/flowers_gifts.png" alt="Flowers, Gifts &amp; Gourmet" /> <span class="cat_info">Flowers, Gifts, Gourmet</span></a>
							</li>
							<li>
								<a href="retailers.php?cat=34"><img src="images/icons/dropdown/travel_auto.png" alt="Travel &amp; Auto" /> <span class="cat_info">Travel &amp; Auto</span></a>
							</li>
						</ul>
					</div>
					<div class="clear"></div>
				</div>
				<div class="featuredrop_col">
						<ul>
						
														<li>
								<a href="view_retailer.php?rid=38464"><img src="http://www.cashbackkaboom.com/img/uploads/xbj16zaa1ho2lg9eixwx_1411412214.jpg" width="100px" height="32px" alt="New York and Company" title="New York and Company" border="0" /> <span class="cash_back">5% Cash Back</span></a>
							</li>
														<li>
								<a href="view_retailer.php?rid=38287"><img src="http://www.cashbackkaboom.com/img/uploads/402sx7cfhmixma39qdsc_1411412711.jpg" width="100px" height="32px" alt="Nunn Bush Canada" title="Nunn Bush Canada" border="0" /> <span class="cash_back">5% Cash Back</span></a>
							</li>
														<li>
								<a href="view_retailer.php?rid=36605"><img src="http://www.cashbackkaboom.com/img/uploads/0o76cikr043e2phoe9xv_1406736702.jpg" width="100px" height="32px" alt="Samsonite" title="Samsonite" border="0" /> <span class="cash_back">2.5% Cash Back</span></a>
							</li>
														<li>
								<a href="view_retailer.php?rid=38132"><img src="http://www.cashbackkaboom.com/img/uploads/6pfoza5wt6seetsbcc6a_1407260709.jpg" width="100px" height="32px" alt="C.O. Bigelow" title="C.O. Bigelow" border="0" /> <span class="cash_back">4% Cash Back</span></a>
							</li>
													</ul>
						
						<a href="" class="viewalldrop">View All</a>
				</div>
				<div class="favoriteshopsdrop_col">
						<ul>
												</ul>

						<a href="myfavorites.php" class="viewalldrop">View All</a>
				</div>

				<div class="clear"></div>
				</div>
			</div>

			<div class="clear"></div>
		</div>
	</div>

    <div class="wrap">
        <div id="home_searchbox">
            <form action="search.php" method="get" id="searchfrm" name="searchfrm">
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
            <div class="middle">
                <ul id="categories">
                    <li><a href="retailers.php">All Stores</a></li>
                    <ul style='padding-left:0px;margin:0;'><li><a href="retailers.php?cat=16">Apparel</a></li></ul><ul style='padding-left:0px;margin:0;'><li><a href="retailers.php?cat=1">Automotive</a></li></ul><ul style='padding-left:0px;margin:0;'><li><a href="retailers.php?cat=2">Baby &amp; Kids</a></li></ul><ul style='padding-left:0px;margin:0;'><li><a href="retailers.php?cat=37">Beauty</a></li></ul><ul style='padding-left:0px;margin:0;'><li><a href="retailers.php?cat=17">Books &amp; Magazines</a></li></ul><ul style='padding-left:0px;margin:0;'><li><a href="retailers.php?cat=39">Canada</a></li></ul><ul style='padding-left:0px;margin:0;'><li><a href="retailers.php?cat=35">Cell Phones &amp; Plans</a></li></ul><ul style='padding-left:0px;margin:0;'><li><a href="retailers.php?cat=18">Computers &amp; Electronics</a></li></ul><ul style='padding-left:0px;margin:0;'><li><a href="retailers.php?cat=36">Contacts &amp; Glasses</a></li></ul><ul style='padding-left:0px;margin:0;'><li><a href="retailers.php?cat=8">Food &amp; Drink</a></li></ul><ul style='padding-left:0px;margin:0;'><li><a href="retailers.php?cat=19">Furniture &amp; D&eacute;cor</a></li></ul><ul style='padding-left:0px;margin:0;'><li><a href="retailers.php?cat=20">Gifts &amp; Flowers</a></li></ul><ul style='padding-left:0px;margin:0;'><li><a href="retailers.php?cat=21">Green</a></li></ul><ul style='padding-left:0px;margin:0;'><li><a href="retailers.php?cat=22">Health &amp; Wellness</a></li></ul><ul style='padding-left:0px;margin:0;'><li><a href="retailers.php?cat=23">Home &amp; Garden</a></li></ul><ul style='padding-left:0px;margin:0;'><li><a href="retailers.php?cat=24">Jewelry &amp; Accessories</a></li></ul><ul style='padding-left:0px;margin:0;'><li><a href="retailers.php?cat=25">Local Deals</a></li></ul><ul style='padding-left:0px;margin:0;'><li><a href="retailers.php?cat=26">Music &amp; Movies</a></li></ul><ul style='padding-left:0px;margin:0;'><li><a href="retailers.php?cat=27">Office &amp; Printing</a></li></ul><ul style='padding-left:0px;margin:0;'><li><a href="retailers.php?cat=28">Other</a></li></ul><ul style='padding-left:0px;margin:0;'><li><a href="retailers.php?cat=29">Pets</a></li></ul><ul style='padding-left:0px;margin:0;'><li><a href="retailers.php?cat=30">Services</a></li></ul><ul style='padding-left:0px;margin:0;'><li><a href="retailers.php?cat=31">Shoes</a></li></ul><ul style='padding-left:0px;margin:0;'><li><a href="retailers.php?cat=32">Sports &amp; Fitness</a></li></ul><ul style='padding-left:0px;margin:0;'><li><a href="retailers.php?cat=33">Toys &amp; Games</a></li></ul><ul style='padding-left:0px;margin:0;'><li><a href="retailers.php?cat=34">Travel</a></li></ul>                </ul>
            </div>
            <div class="bottom">&nbsp;</div>
        </div>
        
        <div class="banner_left_ads">
             
            <a href="http://www.cashbackkaboom.com/getpaid.php" ><img src="img/uploads/image-link//img/uploads/image-link//img/uploads/image-li" style="max-width:100%;" /></a>
        </div>
    </div>

<div id="column_center">

	<h1 class="pagetitle">My Favorite Shops</h1>


		  

				<p align="center">You do not have favorite stores at this time.<br/><br/></p>
							<div class="empty_box">
					<div class="store_text">
						<div class="plus_sign">  </div>
						<div class="add_store" > <br />
							<a class="md-trigger" data-modal="modal-9">Add A Store</a>
						</div>
					</div>
				</div>
								<div class="empty_box">
					<div class="store_text">
						<div class="plus_sign">  </div>
						<div class="add_store" > <br />
							<a class="md-trigger" data-modal="modal-9">Add A Store</a>
						</div>
					</div>
				</div>
								<div class="empty_box">
					<div class="store_text">
						<div class="plus_sign">  </div>
						<div class="add_store" > <br />
							<a class="md-trigger" data-modal="modal-9">Add A Store</a>
						</div>
					</div>
				</div>
								<div class="empty_box">
					<div class="store_text">
						<div class="plus_sign">  </div>
						<div class="add_store" > <br />
							<a class="md-trigger" data-modal="modal-9">Add A Store</a>
						</div>
					</div>
				</div>
								<div class="empty_box">
					<div class="store_text">
						<div class="plus_sign">  </div>
						<div class="add_store" > <br />
							<a class="md-trigger" data-modal="modal-9">Add A Store</a>
						</div>
					</div>
				</div>
								<div class="empty_box">
					<div class="store_text">
						<div class="plus_sign">  </div>
						<div class="add_store" > <br />
							<a class="md-trigger" data-modal="modal-9">Add A Store</a>
						</div>
					</div>
				</div>
				     

     <!-- STORE FINDER MODAL -->
	<div class="md-modal md-effect-8" id="modal-9">
		<div class="md-content">
			<div>
				<div id="storefinder_header"><img src="img/images/store_icon.png" border="0" alt="house" /> &nbsp; ADD A STORE</div>
				<div id="store_blurb">Just start typing to find any of our 1,500 <br />
					amazing stores to add to your favorites. Once you find<br />
					a favorite store	simply click the <img border="0" alt="Delete" src="img/images/star.png"> to add it to your<br /> favorites section.</div></div>
				<div id="footer_form">
<!-- 					<form name="storefinder_modal" action="#" method="post">
						<p> <input id="storefind_box" type="text" name="store_name" placeholder="Enter Store Name"></p><br />
					</form> -->
				<form name="storefinder_modal" action="search.php" method="get" id="searchfrm" name="searchfrm">
					<input type="text" id="storefind_box" name="searchtext" class="search_textbox" value="Search for stores..." onclick="if (this.defaultValue==this.value) this.value=''" onkeydown="this.style.color='#000000'" onblur="if (this.value=='') this.value=this.defaultValue" />
					<input type="hidden" name="action" value="search" />
					<input type="hidden" name="searchfrm_search_type" id="searchfrm_search_type" value="retailer" />
				</form>
				</div>

				<button class="md-close"></button>
			</div>
		</div>
	</div>

	<div class="md-overlay"></div><!-- the overlay element -->

	<div class="clear"></div>
	<!-- END STORE FINDER MODAL -->

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

<div id="footer">
	<div class="wrap">
		<div class="left">
			<a href="faq.php" class="ignore-register-modal">FAQs</a>&nbsp;&nbsp;<a href="terms.php" class="ignore-register-modal">Terms and Conditions</a>&nbsp;&nbsp;<a href="privacy.php" class="ignore-register-modal">Privacy Policy</a>&nbsp;&nbsp;<a href="contact.php" class="ignore-register-modal">Contact Us</a>
		</div>

		<div class="right">
			<a class="ignore-register-modal" href=""><img src="images/footer_logo.png" title="Return to Title Page" alt="Cash Back Kaboom" /></a>
		</div>

		<div class="share_text">
		<span>  
		    <a href="javascript:window.open('http://www.facebook.com/sharer/sharer.php?s=100&amp;p[url]=http://www.cashbackkaboom.com/30&amp;p[images][0]=http://www.cashbackkaboom.com/images/header/logo.png&amp;p[title]=Check this video out. You get cash back when you shop and make money too. It\'s Free!', '_blank', 'width=400,height=500');void(0);"><img src="img/facebook.png" class="share_text" alt="Share on Facebook" width="35" align="absmiddle"></a>
		    <a href="javascript:window.open('http://twitter.com/home?status=Check this video out. You get cash back when you shop and make money too. It\'s Free! http://www.cashbackkaboom.com/30', '_blank', 'width=400,height=500');void(0);" class="share_text"><img src="img/twitter.png" alt="Share on Twitter" width="35" align="absmiddle"></a>
		    <a href="https://plus.google.com/share?url=Earn Cashback http://www.cashbackkaboom.com/30" target="_blank" onclick="javascript:window.open(this.href,
		    '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" class="share_text"><img src="img/googleplus.png" width="35" alt="Share on Google+" align="absmiddle"></a>
		</span>
		</div>

		<div class="clear"></div>

		<!-- Do not remove this copyright notice! -->
			<div class="powered-by">&copy; 2017 Cash Back Kaboom <div>
		<!-- Do not remove this copyright notice! -->
	</div>
</div>

<!-- For Shop Page, if not logged in, display a modal to register -->
	<!-- classie.js by @desandro: https://github.com/desandro/classie -->
	<script src="js/classie.js" type="text/javascript"></script>
	<script src="js/modalEffects.js" type="text/javascript"></script>

	<script src="js/mediaelement-and-player.min.js" type="text/javascript"></script>
	<link rel="stylesheet" href="js/mediaelementplayer.css" />

	<script>
	$('video,audio').mediaelementplayer();
	</script>

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
		$.get( "session/hide_more_cash.php");
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
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-45554800-1', 'cashbackkaboom.com');
  ga('send', 'pageview');

</script>

</body>
</html>
