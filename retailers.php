<?php
    session_start();
    ob_start();
    include 'config/config.php';
	$dbObj =	new DBUtility();
    ?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
        <title>Stores | Cash Back Kaboom</title>
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
            <b>Share with</b><a class="md-trigger" data-modal="modal-10" href="#"  title="Share on Facebook"><img src="img/facebook.png" width="35"  alt="Share on Facebook" align="absmiddle" /></a> 
            <a class="md-trigger" data-modal="modal-10" href="#" title="Share on Twitter"><img src="img/twitter.png" width="35" alt="Share on Twitter" align="absmiddle" /></a>
            <a class="md-trigger" data-modal="modal-10" href="#" ><img src="img/googleplus.png" width="35" alt="Share on Google+" align="absmiddle"></a>
        </div>
    
            <div class="account_menu">
                <div class="account_dropdown">

                                        
                        <div class="login_signup">
                            <a href="login.php" class="lo_link ignore-register-modal">Log In</a> | <a href="register.php">Sign Up</a>
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
                                    <!-- Not Logged In, Show Nothing -->
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
								<a href="view_retailer.php?rid=36693"><img src="http://cashbackkaboom.com/store_logos/lg_36693.jpg" width="100px" height="32px" alt="Shades Shutters Blinds" title="Shades Shutters Blinds" border="0" /> <span class="cash_back">5% Cash Back</span></a>
							</li>
														<li>
								<a href="view_retailer.php?rid=1836140"><img src="http://www.cashbackkaboom.com/img/uploads/dppck7oa3ib8uyk20a9c_1387300182.png" width="100px" height="32px" alt="Pet Street Mall" title="Pet Street Mall" border="0" /> <span class="cash_back">4% Cash Back</span></a>
							</li>
														<li>
								<a href="view_retailer.php?rid=1019547"><img src="http://www.cashbackkaboom.com/img/uploads/1100guxt0q80obqa45sv_1389183975.png" width="100px" height="32px" alt="39 Dollar Glasses" title="39 Dollar Glasses" border="0" /> <span class="cash_back">5% Cash Back</span></a>
							</li>
														<li>
								<a href="view_retailer.php?rid=3092327"><img src="http://www.cashbackkaboom.com/img/uploads/a5oo5ka590m8gx7phk49_1418918429.jpg" width="100px" height="32px" alt="Solstice Sunglasses" title="Solstice Sunglasses" border="0" /> <span class="cash_back">4.8% Cash Back</span></a>
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
             <?php include 'category.php';?>
			 
            <div class="bottom">&nbsp;</div>
        </div>
        
        <div class="banner_left_ads">
             
            <a href="http://www.cashbackkaboom.com/getpaid.php" ><img src="img/uploads/image-link//img/uploads/image-link//img/uploads/image-li" style="max-width:100%;" /></a>
        </div>
    </div>

<div id="column_center">
	<div id="retailers">
		<h1>Stores</h1>

		<p class="category_description"></p>




		   <script type="text/javascript">
	   jQuery(document).ready(function($){
	   		$( "#slider_stores").fadeIn(1000)
	   });
	   </script>
	   <?php
			 $sql="select * from shop";
             $res= $dbObj->select($sql);
			 $result=count($res);
			 
			?>
			<h3 class="featured_title">&nbsp;&nbsp;<?php echo $result;?>&nbsp;Featured Stores</h3>
			
			   <div id="slider_stores">
				<div id="scrollstores" class="feat_stores">
				<?php for ($i = 0; $i < count($res); $i++) {
			       ?> 
					<div>
					<div class="carousel_imagebox">
					
						<a href="view_retailer.php?sid=<?php echo $res[$i]["shop_id"];?>"><img src="images/img/<?php echo $res[$i]["picture"];?>" width="120" height="65" alt="Wild Tangent Media/Games" title="Wild Tangent Media/Games" border="0" /></a><div style="clear: both"></div>
						<span class="thumbnail-text">
							<a href="go2store.php?id=3049997" target="_blank">
								<?php echo $res[$i]["cashback"];?>% Cashback
							</a>
						</span>
					</div>	
									
					<div style="clear: both"></div>
				</div>
                 <?php } ?>					
				</div>
			</div>
			
			<div style="clear: both"></div>
		

		<div id="alphabet">
			<ul>
				<li><a href="retailers.php">All</a></li>
				<li><a href="retailers.php?letter=0-9" >0-9</a></li><li><a href="retailers.php?letter=A" >A</a></li><li><a href="retailers.php?letter=B" >B</a></li><li><a href="retailers.php?letter=C" >C</a></li><li><a href="retailers.php?letter=D" >D</a></li><li><a href="retailers.php?letter=E" >E</a></li><li><a href="retailers.php?letter=F" >F</a></li><li><a href="retailers.php?letter=G" >G</a></li><li><a href="retailers.php?letter=H" >H</a></li><li><a href="retailers.php?letter=I" >I</a></li><li><a href="retailers.php?letter=J" >J</a></li><li><a href="retailers.php?letter=K" >K</a></li><li><a href="retailers.php?letter=L" >L</a></li><li><a href="retailers.php?letter=M" >M</a></li><li><a href="retailers.php?letter=N" >N</a></li><li><a href="retailers.php?letter=O" >O</a></li><li><a href="retailers.php?letter=P" >P</a></li><li><a href="retailers.php?letter=Q" >Q</a></li><li><a href="retailers.php?letter=R" >R</a></li><li><a href="retailers.php?letter=S" >S</a></li><li><a href="retailers.php?letter=T" >T</a></li><li><a href="retailers.php?letter=U" >U</a></li><li><a href="retailers.php?letter=V" >V</a></li><li><a href="retailers.php?letter=W" >W</a></li><li><a href="retailers.php?letter=X" >X</a></li><li><a href="retailers.php?letter=Y" >Y</a></li><li class="last"><a href="retailers.php?letter=Z" >Z</a></li>			</ul>
		</div>

 <?php
	$sql="SELECT * FROM shop
     JOIN category
     ON shop.cat_id=category.cat_id";
     $res= $dbObj->select($sql);
	//var_dump($res)
   ?>

				<table align="center" width="100%" border="0" cellspacing="0" cellpadding="5" class="retailer_list">
				 <?php
		           for ($i = 0; $i < count($res); $i++) {
		         ?>
						<tr class="odd">
						<td width="125" align="center" valign="middle">
                                    <span class="featured" alt="Featured Retailer" title="Featured Retailer"></span>
                                    <span class="retail_shop" id="store_list"><a href="view_retailer.php?sid=<?php echo $res[$i]["shop_id"];?>" class="md-trigger" data-modal="modal-10"><img src="images/img/<?php echo $res[$i]["picture"];?>" width="120" height="65" alt="1-800-FLOWERS" title="1-800-FLOWERS" border="0" /></a></span>
                                    <div class='rating'>
                                        <div class='cover'></div>
                                        <div class='progress' style='width: 0%;'></div>
                                    </div>
                                </td>
						<td align="left" valign="middle">
		
							<table width="100%" border="0" cellspacing="0" cellpadding="3" style="float:left;">
								<tr>
									<td width="65%" align="left" valign="top" class="no-margin-cell">
										 <a class="retailer_title" href="view_retailer.php?sid=<?php echo $res[$i]["shop_id"];?>">
                                                    <?php echo $res[$i]["name"];?>
                                                </a> <a href="#" onclick="if (confirm('Are You sure You realy want to add this retailer to your favorites?') )location.href='/myfavorites.php?act=add&rid=36950'"><img src="img/images/star.png" border="0" alt="add" /></a>
									</td>
									<td nowrap="nowrap" width="10%" align="right" valign="top" class="no-content-cell">
						<td nowrap="nowrap" width="30%" align="right" valign="top" class="no-content-cell">
										&nbsp;
									</td>
								</tr>
								<tr>
									<td colspan="3" valign="middle" align="left" class="no-margin-cell"><p class="cbk_green">1-800-AnyLens sells all the name brand contact lenses with a Best Price Guarantee.  Easy ordering and fast delivery right to your door makes 1-800-Any-Lens a great source to get all your eye care products.&nbsp;</p></td>

									<td valign="top" align="left">

									<a href="go2store.php?id=36950" target="_blank" class="grab_this">
										<span class="gold">Plus 4% Cashback!</span><br />
										<span class="grab_text">Grab This Deal</span>
									</a>


									<!-- Added in Ability to Share Deals through Facebook -->

                                      <div id="social_icons">
										Share this deal.&nbsp;<a href="javascript:window.open('http://www.facebook.com/sharer.php?u=http://www.cashbackkaboom.com/view_retailer.php?rid=36950%26ref=0' , '_blank', 'width=400,height=500');void(0);" ><img src="images/icon_facebook.png"  alt="Share on Facebook" align="absmiddle" /></a> &nbsp;
										<a href="http://twitter.com/home?status=1-800-AnyLens+sells+all+the+name+brand+contact+lenses+with+a+Best+Price+Guarantee.++Easy+ordering+and+fast+delivery+right+to+your+door+makes+1-800-Any-Lens+a+great+source+to+get+all+your+eye+care+products.&nbsp;http://www.cashbackkaboom.com/view_retailer.php?rid=36950%26ref=0" target="_blank" title="Share on Twitter" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><img src="images/icon_twitter.png" alt="Share on Twitter" align="absmiddle" /></a>
&nbsp;&nbsp;
<a href="https://plus.google.com/share?url=The Easiest Way to SAVE MONEY and MAKE MONEY on stuff you already buy! http://www.cashbackkaboom.com/view_retailer.php?rid=36950%26ref=0" target="_blank" onclick="javascript:window.open(this.href,
  '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><img src="images/icon_google.png" alt="Share on Google+" align="absmiddle"></a>								
										&nbsp;&nbsp;
							
                                      </div>
									
									</td>
								</tr>
						 
							</table>
		
						</td>
					</tr>
					 <?php 
							}
							?>
	</table>

		
					


					<tr>
					  <td valign="middle" align="center" colspan="2">
						<div class='pagination'><span class='disabled'>&#139; Previous</span><span class='curPage'>1</span><a href='retailers.php?column=title&order=asc&page=2'>2</a><a href='retailers.php?column=title&order=asc&page=3'>3</a><a href='retailers.php?column=title&order=asc&page=4'>4</a><a href='retailers.php?column=title&order=asc&page=5'>5</a><a href='retailers.php?column=title&order=asc&page=6'>6</a><a href='retailers.php?column=title&order=asc&page=7'>7</a><a href='retailers.php?column=title&order=asc&page=8'>8</a><a href='retailers.php?column=title&order=asc&page=9'>9</a>...<a href='retailers.php?column=title&order=asc&page=32'>32</a><a href='retailers.php?column=title&order=asc&page=33'>33</a><a href='retailers.php?column=title&order=asc&page=2'>Next &#155;</a></div>
					  </td>
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
					<p><span class="footer_verb">Copy It! </span> <input id="copyit_txtbox" type="text" name="copy" readonly="readonly" onfocus="this.select();" onclick="this.focus();this.select();" value="http://www.cashbackkaboom.com/0"></p><br />
					<p><span class="footer_verb">Email it!</span> <input id="fname_txtbox" type="text" name="friends_name" placeholder="Friend's Name"> &nbsp; <input id="femail_txtbox" type="text" name="friends_email" placeholder="Friend's Email"></p><br />
					<p><span class="footer_verb">Share It!</span> &nbsp; &nbsp; &nbsp; 
						<a href="http://cashbackkaboom.com/0" onclick=" window.open('https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(href), 'facebook-share-dialog', 'width=626,height=436'); return false;"><img id="face_btn" src="img/modal/facebook_btn.png" alt="facebook" style="width: 28%" /></a> &nbsp; &nbsp; &nbsp; 

						<script type="text/javascript" src="/platform.twitter.com/widgets.js"></script>

						<a href="https://twitter.com/intent/tweet?text=Want%20to%20save%20money%20on%20items%20you're%20currently%20buying?%20Want%20to%20make%20money%20as%20well?%20Check%20this%20out&url=http%3A%2F%2Fcashbackkaboom.com/0"><img id="twit_btn" src="img/modal/twitter_btn.png" style="width: 28%" alt="Tweet" /></a>
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

			<form action="index.php" method="post">
				<input class="textbox_guest"  type="text" name="fname" placeholder="First Name"><br />
				<input class="textbox_guest"  type="text" name="lname" placeholder="Last Name"><br />
				<input class="textbox_guest"  type="text" name="email" placeholder="Email Address"><br />
				<input class="textbox_guest"  type="password" name="password" placeholder="Password"><br />
				<input type="hidden" name="try_now_btn" id="try_now_btn" value="register" />
				<div class="g-recaptcha" data-sitekey="6Lfz3yMTAAAAAFdGtg4wIRfDblwZCahG7ef_rLAK"></div>
				<input class="modal_btn" type="submit" value="TRY IT NOW - IT'S FREE!">
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
			<div class="powered-by">&copy; 2017 Cash Back Ramsitech <div>
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