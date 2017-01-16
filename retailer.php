<?php
    session_start();
    ob_start();
    include 'config/config.php';
	$dbObj =	new DBUtility();
    ?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
        <title>Coupons & Deals | Cash Back </title>
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
                                <li><a href="user/logout.php">Logout</a></li>
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
								<a href="view_retailer.php?rid=35645"><img src="http://www.cashbackkaboom.com/img/uploads/9lx4p6007wf6fymmj3ph_1389461115.png" width="100px" height="32px" alt="Bedding.com" title="Bedding.com" border="0" /> <span class="cash_back">5% Cash Back</span></a>
							</li>
							<li>
								<a href="view_retailer.php?rid=40196"><img src="http://www.cashbackkaboom.com/img/uploads/f50gj2dzyvy5n6huq459_1418932244.jpg" width="100px" height="32px" alt="Sure Fit" title="Sure Fit" border="0" /> <span class="cash_back">6% Cash Back</span></a>
							</li>
							<li>
								<a href="view_retailer.php?rid=1410131"><img src="http://www.cashbackkaboom.com/img/uploads/nagedf8ifdstjj4l93jr_1418918389.jpg" width="100px" height="32px" alt="Soft Surroundings" title="Soft Surroundings" border="0" /> <span class="cash_back">2.4% Cash Back</span></a>
							</li>
							<li>
								<a href="view_retailer.php?rid=4008588"><img src="http://www.cashbackkaboom.com/img/uploads/zn35nh37nz3c8564jcnu_1406297578.jpg" width="100px" height="32px" alt="Sur La Table" title="Sur La Table" border="0" /> <span class="cash_back">3.5% Cash Back</span></a>
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

       <script type="text/javascript">
       jQuery(document).ready(function($){
            $( "#slider_stores").fadeIn(1000)
       });
       </script>


    <div id="coupons">
     <h1>Store</h1>
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
                <li><a href="coupons.php">All</a></li>
                <li><a href="coupons.php?letter=0-9" >0-9</a></li><li><a href="coupons.php?letter=A" >A</a></li><li><a href="coupons.php?letter=B" >B</a></li><li><a href="coupons.php?letter=C" >C</a></li><li><a href="coupons.php?letter=D" >D</a></li><li><a href="coupons.php?letter=E" >E</a></li><li><a href="coupons.php?letter=F" >F</a></li><li><a href="coupons.php?letter=G" >G</a></li><li><a href="coupons.php?letter=H" >H</a></li><li><a href="coupons.php?letter=I" >I</a></li><li><a href="coupons.php?letter=J" >J</a></li><li><a href="coupons.php?letter=K" >K</a></li><li><a href="coupons.php?letter=L" >L</a></li><li><a href="coupons.php?letter=M" >M</a></li><li><a href="coupons.php?letter=N" >N</a></li><li><a href="coupons.php?letter=O" >O</a></li><li><a href="coupons.php?letter=P" >P</a></li><li><a href="coupons.php?letter=Q" >Q</a></li><li><a href="coupons.php?letter=R" >R</a></li><li><a href="coupons.php?letter=S" >S</a></li><li><a href="coupons.php?letter=T" >T</a></li><li><a href="coupons.php?letter=U" >U</a></li><li><a href="coupons.php?letter=V" >V</a></li><li><a href="coupons.php?letter=W" >W</a></li><li><a href="coupons.php?letter=X" >X</a></li><li><a href="coupons.php?letter=Y" >Y</a></li><li class="last"><a href="coupons.php?letter=Z" >Z</a></li>            </ul>
        </div>

     <?php
	$sql="SELECT * FROM shop
     JOIN category
     ON shop.cat_id=category.cat_id";
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
										<a class="retailer_title" href="view_retailer.php?sid=<?php echo $res[$i]["shop_id"];?>"><?php echo $res[$i]["name"];?></a> <a href="#" onclick="if (confirm('Are You sure You realy want to add this retailer to your favorites?') )location.href='index.php?act=add&amp;rid=773'"><img src="img/images/star.png" border="0" alt="add" /></a>
									</td>
									<td nowrap="nowrap" width="10%" align="right" valign="top" class="no-content-cell"> &nbsp; </td>
									<td nowrap="nowrap" width="30%" align="right" valign="top" class="no-content-cell"> &nbsp; </td>
								</tr>
								<tr>
							<td colspan="3" valign="middle" align="left">
										<p class="cbk_green"><?php echo $res[$i]["shop_des"];?>&nbsp;<br /><br /></p>
								Coupon Code:
							<img style="margin-bottom: -4px; margin-left: 10px; z-index: -1" src="images/scisor.png">
                              <p class="coupon_boxed">
							  <?php
							  if($res[$i]["coupon_code"]!=null){
							  echo $res[$i]["coupon_code"];
							  }else{
								  echo 'No Required Coupon';
							  }
							  ?>
							  
							  </p>							
																		
						</td>

									<td valign="top" align="left">

										<a href="<?php echo $res[$i]["url"];?>" target="_blank" class="grab_this">
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

            <tr>
					  <td valign="middle" align="center" colspan="2">
						<div class='pagination'><span class='disabled'>&#139; Previous</span><span class='curPage'>1</span><a href='retailerse90b.html?column=title&amp;order=asc&amp;page=2'>2</a><a href='retailers4193.html?column=title&amp;order=asc&amp;page=3'>3</a><a href='retailers1523.html?column=title&amp;order=asc&amp;page=4'>4</a><a href='retailers66d6.html?column=title&amp;order=asc&amp;page=5'>5</a><a href='retailersa78b.html?column=title&amp;order=asc&amp;page=6'>6</a><a href='retailerseb28.html?column=title&amp;order=asc&amp;page=7'>7</a><a href='retailers8990.html?column=title&amp;order=asc&amp;page=8'>8</a><a href='retailers09aa.html?column=title&amp;order=asc&amp;page=9'>9</a>...<a href='retailers3e8f.html?column=title&amp;order=asc&amp;page=32'>32</a><a href='retailersd65b.html?column=title&amp;order=asc&amp;page=33'>33</a><a href='retailerse90b.html?column=title&amp;order=asc&amp;page=2'>Next &#155;</a></div>
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
					<p><span class="footer_verb">Copy It! </span> <input id="copyit_txtbox" type="text" name="copy" readonly="readonly" onfocus="this.select();" onclick="this.focus();this.select();" value="http://www.cashbackkaboom.com/3735"></p><br />
					<p><span class="footer_verb">Email it!</span> <input id="fname_txtbox" type="text" name="friends_name" placeholder="Friend's Name"> &nbsp; <input id="femail_txtbox" type="text" name="friends_email" placeholder="Friend's Email"></p><br />
					<p><span class="footer_verb">Share It!</span> &nbsp; &nbsp; &nbsp; 
						<a href="http://cashbackkaboom.com/3735" onclick=" window.open('https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(href), 'facebook-share-dialog', 'width=626,height=436'); return false;"><img id="face_btn" src="img/modal/facebook_btn.png" alt="facebook" style="width: 28%" /></a> &nbsp; &nbsp; &nbsp; 

						<script type="text/javascript" src="platform.twitter.com/widgets.js"></script>

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