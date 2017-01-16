        <?php include 'user/sub-header.php';?>

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
								<a href="view_retailer.php?rid=3739701"><img src="http://www.cashbackkaboom.com/img/uploads/qpradouf1x9enw7jfwj9_1387296659.png" width="100px" height="32px" alt="Hertz Car Rental" title="Hertz Car Rental" border="0" /> <span class="cash_back">2% Cash Back</span></a>
							</li>
														<li>
								<a href="view_retailer.php?rid=37743"><img src="http://www.cashbackkaboom.com/img/uploads/lsn7dr01icqybtxmufi2_1407270064.jpg" width="100px" height="32px" alt="Bogs Footwear Canada" title="Bogs Footwear Canada" border="0" /> <span class="cash_back">3.5% Cash Back</span></a>
							</li>
														<li>
								<a href="view_retailer.php?rid=2400910"><img src="http://www.cashbackkaboom.com/img/uploads/hqa07tlbo7iux9dc51cu_1389183518.png" width="100px" height="32px" alt="24 Hour Fitness" title="24 Hour Fitness" border="0" /> <span class="cash_back">2.5% Cash Back</span></a>
							</li>
														<li>
								<a href="view_retailer.php?rid=2568723"><img src="http://www.cashbackkaboom.com/img/uploads/bdnhnj8devcw15kn7h34_1386520347.png" width="100px" height="32px" alt="Walgreens" title="Walgreens" border="0" /> <span class="cash_back">4% Cash Back</span></a>
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

        <h1 class="pagetitle">My Profile</h1>

		


						<div id="profile">
			<div class="leftcol">
				<h1 class="profile_head">My Details</h1>
				<form action="" method="post" class="myprofile_info">
		            <!-- <span class="username">motiur943@gmail.com</span> <br /> -->

					<input type="text" class="textbox" name="fname" id="fname" placeholder="First Name" value="Motiur" size="25" /> <br />
					<input type="text" class="textbox" name="lname" id="lname" placeholder="Last Name" value="Rahman" size="25" /> <br />
					<input type="text" class="textbox" name="email" id="email" placeholder="Email Address" value="motiur943@gmail.com" size="25" /> <br />

					<input type="text" class="textbox" name="address1" id="address1" placeholder="Address 1" value=""  size="25" /> <br />
					<input type="text" class="textbox" name="address2" id="address2" placeholder="Address 2" value="" size="25" /> <br />
					<input type="text" class="textbox" name="city"     id="city"     placeholder="City"      value=""     size="25" /> <br />
					<input type="text" class="textbox" name="state"    id="state"    placeholder="State"     value=""    size="25" /> <br />
					<input type="text" class="textbox" name="zip"      id="zip"      placeholder="zip"       value=""      size="25" /> <br />
					<input type="text" class="textbox" name="phone"    id="phone"    placeholder="Phone #"   value=""    size="25" /> <br />
					<!-- <input type="checkbox" name="newsletter" class="checkboxx" value="1" /> &nbsp; I'd like to receive newsletter -->

					<div class="clear"></div>

					<input type="hidden" name="action" value="editprofile" />
					<input name="uid" type="hidden" value="3735" />
					<input style="margin-left: 37px;" type="submit" class="profile_btns" name="Update" id="Update" value="Update details" />&nbsp;&nbsp;
					<!-- <input type="button" class="cancel" name="cancel" value="Cancel" onClick="javascript:document.location.href='myaccount.php'" /> -->
		          </table>
		        </form>
	    	</div>

			<div class="rightcol">
			<h1 class="profile_head">Change Password</h1>

							<form action="" method="post" class="myprofile_info">
					<!--[if lte IE 8]>		Current Password	<![endif]-->
					<input type="password" class="textbox" name="password" id="password" placeholder="Current Password" value="" size="25" /><br />
					<!--[if lte IE 8]>		New Password	<![endif]-->
					<input type="password" class="textbox" name="newpassword" id="newpassword" placeholder="New Password" value="" size="25" /> <br />
					<!--[if lte IE 8]>		Confirm New Password	<![endif]-->
					<input type="password" class="textbox" name="newpassword2" id="newpassword2" placeholder="Confirm New Password" value="" size="25" /><br />

					<div class="clear"></div>

					<input type="hidden" name="action" value="changepwd" />
					<input name="uid" type="hidden" value="3735" />
					<input style="margin-left: 37px;" type="submit" class="profile_btns" name="Change" id="Change" value="Change password" />&nbsp;&nbsp;
					<!-- <input type="button" class="cancel" name="cancel" value="Cancel" onClick="javascript:document.location.href='myaccount.php'" /> -->
				</form>
			</div>

		<div class="clear"></div>
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