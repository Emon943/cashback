<!DOCTYPE html>
<html>

	<head>
		<link rel="stylesheet" type="text/css" href="css/guest.css">
		<link rel="stylesheet" type="text/css" href="css/mobile_update.css">
		<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:700|Open+Sans:400,700,800|Open+Sans+Condensed:700' rel='stylesheet' type='text/css'>
		<!--[if lte IE 9]>
		<script type="text/javascript" src="js/placeholder_fix.js"></script>
	<![endif]-->

		<!--[if lte IE 8]>
		<link rel="stylesheet" type="text/css" href="css/ie8.css" />
	<![endif]-->
		<script src="js/accounting.js"></script>
		<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
		<script src="js/viewport.js"></script>

	</head>

	<script type="text/javascript">
		//Redirect to login.php, bypassing the modal, if on a mobile device
		function mobileCheck() {
			if (/Android|webOS|iPhone|iPod|BlackBerry|IEMobile/i.test(navigator.userAgent)) {
				window.location = "http://www.cashbackkaboom.com/login.php";
			}
		}
	</script>

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
			.account_dropdown > ul > li {
				background: url("images/menu_dropdown2.png") no-repeat scroll 74px 9px rgba(0, 0, 0, 0);
				padding-right: 15px;
				padding-top: 5px;
				text-transform: uppercase;
			}
		}
	</style>

	<script src="js/accounting.js"></script>

	<body id="guest_bg" class="make-money">
		<div class="bigwrap">
			<div id="header">
				<div class="wrap">

					<div id="top_bar">
													<span id="get_social_icons">
					<span id="get_share">Share with </span>
							<a href="javascript:window.open('http://www.facebook.com/sharer/sharer.php?s=100&p[url]=http://www.cashbackkaboom.com/3735&p[images][0]=http://www.cashbackkaboom.com/images/header/logo.png&p[title]=Check this out, you get cash back on things you already buy and make money when you share it. This video explains it all', '_blank', 'width=400,height=500');void(0);"><img src="img/facebook.png" alt="Share on Facebook" width="35" align="absmiddle" /></a>
							<a href="javascript:window.open('http://twitter.com/home?status=Check this out, you get cash back on things you already buy and make money when you share it. This video explains http://www.cashbackkaboom.com/3735', '_blank', 'width=400,height=500');void(0);"><img src="img/twitter.png" alt="Share on Twitter" width="35" align="absmiddle" /></a>
							<a href="https://plus.google.com/share?url=Check this out, you get cash back on things you already buy and make money when you share it. This video explains http://www.cashbackkaboom.com/3735" target="_blank" onclick="javascript:window.open(this.href,
					'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><img src="img/googleplus.png" width="35" alt="Share on Google+" align="absmiddle" /></a>

							</span>
							<div id="links">
								<div class="account_menu">
									<div class="account_dropdown">


										<ul>
											<li>
												<a id="my_account_link" href="myprofile.php" style="position:relative; top: 1px;">My Account</a>

												<ul>
													<li><a href="myfavorites.php">My Favorite Stores</a></li>
													<li><a href="myshopping.php">My History &amp; Payments</a></li>
													<li><a href="mynetwork.php">My Shopping Network</a></li>
													<li><a href="withdraw.php">Withdraw Funds</a></li>
													<li><a href="invite.php">Refer My Friend</a></li>
													<li><a href="myprofile.php">Edit My Profile</a></li>
													<li><a href="store">CBK Promo Items</a></li>
													<li><a href="video_savemoney.php">View Videos</a></li>
													<li><a href="mysupport.php">Support</a></li>
													<li><a href="user/logout.php">Logout</a></li>
												</ul>
											</li>
										</ul>

										<div class="balance_info">
											<strong>Balance:</strong> <em class="mbalance" style="font-weight: bold;">$0.00</em>
										</div>
									</div>


									<div class="right myfavs_links">
										<a style="position: relative; bottom: 0px !important;" href="myfavorites.php"><img src="images/header/my_fave_shops.png" alt="My Fave Shops" /></a>
									</div>
								</div>
								<!-- .account_menu -->
							</div>
												</div>
					<br/>

					        <div id="homepage_header_nav" class="clearfix">
                            <ul id="logged_nav">
                    <li id="coupons_nav"><a href="coupons.php">COUPONS &amp; DEALS</a></li>
                    <li id="money_nav"><a href="getpaid.php">MAKE MONEY</a></li>
                    <li id="invite_nav"><a href="invite.php">INVITE FRIENDS!</a></li>
                                    </ul>
                    </div>

						<div id="header_lvl3">
							<div id="homepage_header_logo">
								<a href="" title="Return to Homepage"><img src="img/images/guest/logo.png" alt="logo" class="head_logo" /></a>

								<a class="home-icon" href=""><img src="img/home_icon.png" alt="Return to Homepage" title="Return to Homepage"></a>
							</div>

							<div id="header_caption">
								<span>Make Money<br> <span class="green_text">When Other People Shop!</span></span>
							</div>
						</div>

						<div class="clearfix"></div>
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
								<a href="view_retailer.php?rid=38747"><img src="http://www.cashbackkaboom.com/img/uploads/y0aj97k1y502r9ip6e04_1421539723.jpg" width="100px" height="32px" alt="Forever 21 Canada" title="Forever 21 Canada" border="0" /> <span class="cash_back">2.5% Cash Back</span></a>
							</li>
														<li>
								<a href="view_retailer.php?rid=3939"><img src="http://www.cashbackkaboom.com/img/uploads/z32stgtncbmhpz0ki5wr_1411412149.jpg" width="100px" height="32px" alt="Net Nanny" title="Net Nanny" border="0" /> <span class="cash_back">13% Cash Back</span></a>
							</li>
														<li>
								<a href="view_retailer.php?rid=38891"><img src="http://www.cashbackkaboom.com/img/uploads/1c2fkaxijdz31l5ge4h2_1418679715.jpg" width="100px" height="32px" alt="Shoebuy.com" title="Shoebuy.com" border="0" /> <span class="cash_back">6% Cash Back</span></a>
							</li>
														<li>
								<a href="view_retailer.php?rid=36751"><img src="http://www.cashbackkaboom.com/img/uploads/59pgr8qsqkkmdv99h1ny_1385245797.png" width="100px" height="32px" alt="WalMart Canada" title="WalMart Canada" border="0" /> <span class="cash_back">2% Cash Back</span></a>
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
	</div>			</div>
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
							<li><span class="number-circle">1</span> <strong>Supplement Your Income</strong>
								<br>
								<p>Do you know anyone who couldn't use a little extra cash every now and then? Neither do we. Cash Back Kaboom helps you save and earn money, and it helps your friends and family save and earn money&ndash;and it doesn't cost anyone a thing.</p>
							</li>
							<li><span class="number-circle">2</span> <strong>Create a Financial Safety Net</strong>
								<br>
								<p>Provide for your extended family without taking away from your own income. Have the oldest 3 members create accounts and invite the next oldest 3, who invite the next, and so on&ndash;and watch the family income grow (adults over 18 only please).</p>
							</li>
							<li><span class="number-circle">3</span> <strong>Leave a Legacy</strong>
								<br>
								<p>Place your Cash Back Kaboom membership in trust to your heirs in your will. Even after your shopping days are done, the people in your network will continue to make purchases, and therefore continue to generate income for you, for years to come.</p>
							</li>
							<li><span class="number-circle">4</span> <strong>Boost Fundraising Efforts</strong>
								<br>
								<p>Invite your favorite charity or nonprofit to create a membership. Have them invite other people in the organization in a way that builds the best geometric progression. The money they all make on their purchases can be a real boon to their bottom line!</p>
							</li>
						</ul>

						<img id="makemoney_arrow" style="margin-left: -3px; margin-top: 10px; z-index: 9999;" src="img/images/guest/money_arrow.png" alt="cash back arrow" />
					</div>
				</div>

				<div id="rightcol" class="right">
					<div style="z-index: 0; height: 275px; right: -12px; position: relative;">
						<script src="/fast.wistia.com/embed/medias/4ldqdusmxa.jsonp" async></script>
						<script src="/fast.wistia.com/assets/external/E-v1.js" async></script><span class="wistia_embed wistia_async_4ldqdusmxa popover=true popoverContent=link" style="display:inline"><a href="#"><span><img class="video-overlay" src="img/cbk_video_overlay_alt.png"><img class="preroll-img" src="img/cbk_video_preroll.gif" alt="Watch Video"></span></a>
						</span>
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
							<form action="getpaid.php" method="post">
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
								<p><span id="money_earned" style="display: inline-block; font-size: 14px; margin-top: 15px;">YOU WOULD EARN<br><input style="padding: 10px; width: 180px; color: #1D632F; font-family: 'Roboto Slab',serif; font-size: 14px; margin: 5px; text-align: center;"  id="total" type="text" name="total" value="$2,953.86" /><span id="asterisk"> *</span>
									<br>EACH MONTH!</span>
								</p>
							</form>
						</div>
					</div>
					<div id="share">
													<a class="md-trigger" data-modal="modal-8">SHARE WITH FRIENDS!</a>
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

			<div class="md-modal md-effect-8" id="modal-8">
				<div class="md-content">
					<div id="footer-logo"> <img src="img/modal/logo.png" alt="logo" style="position:absolute;bottom:210px; left:-43px; width:27%"> </div>
					<h3>Share with Friends!</h3>
					<img id="footer_divider" src="img/images/divider.jpg" alt="divider" />
					<div>
						<p class="blurb">Share CashBackKaboom.com with your friends and followers on Facebook, Twitter or by Email. When a friend clicks on your share, you will get a coupon for _% off your next order and your friend will get a coupon for _% off too. The _% off cannot be combined with others.</p>
						<div id="footer_form">
							<form name="footer_modal" action="#" method="post">
								<p><span class="footer_verb">Copy It! </span>
									<input id="copyit_txtbox" type="text" name="copy" readonly="readonly" onfocus="this.select();" onclick="this.focus();this.select();" value="">
								</p>
								<br />
								<p><span class="footer_verb">Email it!</span>
									<input id="fname_txtbox" type="text" name="friends_name" placeholder="Friend's Name"> &nbsp;
									<input id="femail_txtbox" type="text" name="friends_email" placeholder="Friend's Email">
								</p>
								<br />
								<p><span class="footer_verb">Share It!</span> &nbsp; &nbsp; &nbsp;


									<a href="#" onclick="
    window.open(
      'https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(location.href), 
      'facebook-share-dialog', 
      'width=626,height=436'); 
    return false;"><img id="face_btn" src="img/modal/facebook_btn.png" alt="facebook" style="width: 28%"></a> &nbsp; &nbsp; &nbsp;




									<script type="text/javascript" src="/platform.twitter.com/widgets.js"></script>

									<a href="https://twitter.com/intent/tweet?text=Want%20to%20save%20money%20on%20items%20you're%20currently%20buying?%20Want%20to%20make%20money%20as%20well?%20Check%20this%20out&url=http%3A%2F%2Fcashbackkaboom.com"><img id="twit_btn" src="img/modal/twitter_btn.png" style="width: 28%" alt="Tweet" /></a>


								</p>
							</form>
						</div>

						<button class="md-close"></button>
					</div>
				</div>
			</div>

			<div class="md-overlay"></div>
			<!-- the overlay element -->
		</div>

		<!-- classie.js by @desandro: https://github.com/desandro/classie -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
		<script src="js/classie.js" type="text/javascript"></script>
		<script src="js/modalEffects.js" type="text/javascript"></script>

		<script src="js/mediaelement-and-player.min.js" type="text/javascript"></script>
		<link rel="stylesheet" href="js/mediaelementplayer.css" />

		<script>
			// using jQuery
			$('video,audio').mediaelementplayer( /* Options */ );
		</script>

		<script type="text/javascript">
			$(document).ready(function () {
				var Chrome = false;

				if (navigator.userAgent.toLowerCase().indexOf('chrome') > -1) {
					Chrome = true;
					$('body').addClass('chrome');
				}
			});

			$("#shop_nav").mouseenter(function () {
				$('#shop_drop').show();
			}).mouseleave(function () {
				$('#shop_drop').hide();
				// alert('exit');
			});

			$("#shop_drop").mouseenter(function () {
				$(this).show();
				// alert('entered');
			}).mouseleave(function () {
				$(this).hide();
				// alert('exit');
			});

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
							<p><span class="footer_verb">Copy It! </span>
								<input id="copyit_txtbox" type="text" name="copy" readonly="readonly" onfocus="this.select();" onclick="this.focus();this.select();" value="">
							</p>
							<br />
							<p><span class="footer_verb">Email it!</span>
								<input id="fname_txtbox" type="text" name="friends_name" placeholder="Friend's Name"> &nbsp;
								<input id="femail_txtbox" type="text" name="friends_email" placeholder="Friend's Email">
							</p>
							<br />
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

		<div class="md-overlay"></div>
		<!-- the overlay element -->


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
				<div class="powered-by">&copy;
					2017 Cash Back Kaboom | website by: <a class="ignore-register-modal" href="http://www.acceleratemediainc.com/" title="Creative Momentum" target="_blank"><b style="color: #F8C242; font-size: 14px; ">Accelerate Media Inc.</b></a>
						<div>
							<!-- Do not remove this copyright notice! -->
							<div class="make_money_disc">
								<p>*Hey Kaboomers! Just want to let you know that the Cash Back Calculator tool is for general illustration purposes only and actual results WILL vary. The monthly earnings displayed is based on an average cash back paid to shoppers of 2.5%. The remaining calculations are dependent solely on the assumptions you insert into the Cash Back Calculator including; how many members you may refer; how many members each member throughout your shopping network may refer; and how much money you think each member may spend per month shopping through Cash Back Kaboom. The Cash Back Calculator then combines your assumptions with the 2.5% average cash back and projects a monthly payout according to Cash Back Kaboom Compensation Plan.</p>

								<p>However, assumptions are not reality. So let's assume all your assumptions are not 100% accurate and your Shopping Network doesn't grow as assumed, up to 10 levels of shopping activity. If your assumptions are incorrect, then your monthly earnings may not be as projected.</p>

								<p>That's why we at Cash Back Kaboom suggest you insert reasonable guestimates into the Cash Back Calculator. Use it in an "under-promise, over-deliver" way and you'll be amazed at the Cash Back you'll receive month after month, year after year.</p>

								<p>Anyway, enough of all this serious Disclaimer stuff. We assume you'll have fun using the Cash Back Calculator - and use it wisely to help plan your journey to a secure financial future!</p>

								<p>For specific details on everything you need to know about Cash Back Kaboom, please refer to Cash Back Kaboom's <a href="faq.php">FAQS</a>, <a href="privacy.php">Privacy Policy</a>, <a href="terms.php">Terms &amp; Conditions</a> and <a href="broken-link.php">Member Agreement</a> - and don't hesitate to <a href="contact.php">Contact Us</a> with any questions you may have.</p>
							</div>
						</div>
				</div>
			</div>
		</div>

	</body>

</html>