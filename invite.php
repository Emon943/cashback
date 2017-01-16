
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
								<a href="view_retailer.php?rid=24348"><img src="http://www.cashbackkaboom.com/img/uploads/15lls5w6w1uy00w7e4ic_1406174598.jpg" width="100px" height="32px" alt="GameStop" title="GameStop" border="0" /> <span class="cash_back">2.5% Cash Back</span></a>
							</li>
														<li>
								<a href="view_retailer.php?rid=1844"><img src="http://www.cashbackkaboom.com/img/uploads/mqiayc84jluhp3s63ba2_1407258940.jpg" width="100px" height="32px" alt="Blinds Express" title="Blinds Express" border="0" /> <span class="cash_back">2% Cash Back</span></a>
							</li>
														<li>
								<a href="view_retailer.php?rid=2902"><img src="http://www.cashbackkaboom.com/img/uploads/843e2q5brgbq6ssvpd8x_1407270130.jpg" width="100px" height="32px" alt="Boscovs Department Store" title="Boscovs Department Store" border="0" /> <span class="cash_back">3% Cash Back</span></a>
							</li>
														<li>
								<a href="view_retailer.php?rid=4334"><img src="http://www.cashbackkaboom.com/img/uploads/9904dbrokcl162k7n4ry_1411412656.jpg" width="100px" height="32px" alt="NHL Store" title="NHL Store" border="0" /> <span class="cash_back">3% Cash Back</span></a>
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
<!-- The following is to remove the banner on the right from this page alone -->
<style type="text/css">
	#need_more_cash{
		display: none;
	}
	#last_row{
	    float: right;
	    margin-right: 5px;
	    margin-top: 10px;
	    margin-bottom: 3px;
	}
	input.textbox, select{
	    background: none repeat scroll 0 0 white;
	    border: 1px solid #B7B7B7;
	    border-radius: 0 0 0 0;
	    color: #878787;
	    font-family: 'Open Sans',Tahoma,Verdana,Arial,Helvetica,sans-serif;
	    font-size: 15px;
	    margin-bottom: 10px;
	    padding: 15px 10px;
	    width: 285px;
	}
	.textbox.cell2{
		margin-right: -4px;
		margin-left: 17px;
	}
</style>

<script type="text/javascript">
	function addTextBox() {
		var last_row = document.getElementById("last_row");
		var newRow = document.createElement("tr");
		var name = document.createElement("input");
		var email = document.createElement("input");
		var cell1 = document.createElement("td");
		var cell2 = document.createElement("td")
		cell1.innerHTML = "<input type='text' name='fname[]' class='textbox cell1' placeholder='Additional Friend  First Name' value='' size='27' />";
		cell2.innerHTML = "<input type='text' name='femail[]' class='textbox cell2' placeholder='Additional Friend Email Address' value='' size='27' />";

		newRow.appendChild(cell1);
		newRow.appendChild(cell2);
		last_row.insertBefore(newRow, last_row.childNodes[0]);

}
</script>
	<h1 class="pagetitle">Let's Make Some Money!</h1>
	<div id="invite_make_money">
		Use Cash Back Kaboom's fast and easy invitation methods to invite others.  Those you invite will be added to your
		Shopping Network and you'll get paid each time they shop - over and over again - forever!
	</div>
	<img src="images/invite_3.png" alt="invite!"><br /><br />

	
<!-- 	 -->
<table class="refer_table">
<td width="10%" class="table_title">Email It!</td> 
<td width="90%" height="50">
Here’s an easy way to invite friends to get a FREE Cash Back Kaboom membership. Just enter their name and email address and we’ll send out an email invite right away!
</td></tr>
	<form action="" method="post" name="invite_form">
	
	<table id="invite"  >
		          
					            <tr>
			<td>
				<table id="email_it_table">
                    <tr>
                    	                    		<tr>
                    			<td style="font-size: 15px; font-weight: bold; color: #606060;" align="center">First Name</td>
                    			<td width="15">&nbsp;</td>
                    			<td style="font-size: 15px; font-weight: bold; color: #606060;" align="center">Email Address</td>
                    		</tr>
                    							<td align="left" valign="top"><span class="req"><!-- * --> </span><br/>
							<input type="text" name="fname[1]" class="textbox" placeholder="Friend #1 First Name" value="" size="27" />
						</td>
						<td width="15">&nbsp;</td>
						<td align="left" valign="top"><span class="req"><!-- * --> </span><br/>
							<input type="text" name="femail[1]" class="textbox" placeholder="Friend #1 Email Address" value="" size="27" />
						</td>
					</tr>
				</table>
			</td>
          </tr>
		            <tr>
			<td>
				<table id="email_it_table">
                    <tr>
                    							<td align="left" valign="top"><br/>
							<input type="text" name="fname[2]" class="textbox" placeholder="Friend #2 First Name" value="" size="27" />
						</td>
						<td width="15">&nbsp;</td>
						<td align="left" valign="top"><br/>
							<input type="text" name="femail[2]" class="textbox" placeholder="Friend #2 Email Address" value="" size="27" />
						</td>
					</tr>
				</table>
			</td>
          </tr>
		            <tr>
			<td>
				<table id="email_it_table">
                    <tr>
                    							<td align="left" valign="top"><br/>
							<input type="text" name="fname[3]" class="textbox" placeholder="Friend #3 First Name" value="" size="27" />
						</td>
						<td width="15">&nbsp;</td>
						<td align="left" valign="top"><br/>
							<input type="text" name="femail[3]" class="textbox" placeholder="Friend #3 Email Address" value="" size="27" />
						</td>
					</tr>
				</table>
			</td>
          </tr>
		  		  <tr id="last_row">
		  	

		  </tr>
		  <tr>
		  	<td>
		  		<div style="width:50%;float:left;">
		  		<p style="cursor:pointer; margin-left: 70px;" onclick="addTextBox()">Add another friend <img src="img/modal/plus_icon.png" alt="add"></p>
		  		</div>

		  		<div style="width:50%;float:right;text-align:center;">
			  		<input type="hidden" name="action" id="action" value="friend" />
					<div><button type="submit" id="invite_btn" name="Send" id="Send" value="Send Messages!" style="display: block; float: none; margin: 0 auto;" /><span style="position: relative; bottom: 0px;">Send Messages!</span></div>
					
		  		</div>

		  		<div class="clear"></div>
		  	</td>
		  </tr>
     	
          <tr>		
			<td style='float: right; margin-right: 110px;'><span style='cursor: pointer;' class='ttip'> View Sample Email <span style="width: 700px !important; left: 105px; top: 312px;"><p style="color: #606060; font-size: 15px; font-weight: normal;">
Hello <i>friend</i>, <br /> <br /><br /> 

Your friend, would like to invite you to check out Cash Back Kaboom the world's fastest growing, members-only shopping club.  It's totally FREE and it only takes seconds to join.<br /><br />

Cash Back Kaboom pays you CASH BACK when you shop with brand name merchants like Macy's, Target, Expedia, Best Buy, Kohl's, Bj's and over 1,500 more great stores.<br /><br /> 

Plus, you get thousands of coupons, free shipping offers and special member deals,  so when you shop - you're sure to get the BEST PRICE and CASH BACK too.<br /><br />

And if you want MAKE MONEY, you can get CASH BACK every time other people shop, over and over again... forever!<br /><br />

Please visit www.cashbackkaboom.com/### now to accept your invitation to get your 100% FREE Cash Back Kaboom membership today. You'll be glad you did!<br /><br />

Best Regards,<br /><br />

The Cash Back Kaboom Crew<br /><br /></p><b></b> </span> </span></td>
          </tr>

		  	</table>
		
	</form>

	<div style="clear: both;"></div>

	<table class="refer_table">
		<tr> 
			<td width="10%" class="table_title">Share It!</td> 
			<td width="90%" height="70">Spread the good news on your favorite social sites.  Let people know how they can save money - and make money with a FREE Cash Back Kaboom membership of their own. They'll be glad you did!</td>
		</tr>
		<tr> 
			<td width="10%">&nbsp;</td>
			<td width="90%">


					<a href="javascript:window.open('http://www.facebook.com/sharer/sharer.php?s=100&p[url]=http://www.cashbackkaboom.com/3735&p[images][0]=http://www.cashbackkaboom.com/images/header/logo.png&p[title]=Check this video out. You get cash back when you shop and make money too. It\'s Free! ', '_blank', 'width=400,height=500');void(0);"><img src="img/modal/facebook_btn.png"  alt="Share on Facebook" style="width: 28%"></a>&nbsp;&nbsp;&nbsp;
					<a href="javascript:window.open('http://twitter.com/home?status=Check this video out. You get cash back when you shop and make money too. It\'s Free! http://www.cashbackkaboom.com/3735', '_blank', 'width=400,height=500');void(0);"><img src="img/modal/twitter_btn.png" alt="Share on Twitter" style="width: 28%" /></a>&nbsp;&nbsp;&nbsp;
<a href="https://plus.google.com/share?url=http://www.cashbackkaboom.com/3735" target="_blank" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><img src="img/modal/googleplus.png" alt="Share on Google+" /></a>
			</td>
		</tr>
	</table>

	<table class="refer_table">
		<tr> <td width="10%" class="table_title">Copy It!</td>  <td width="90%" >Use the link below to invite others in the blogosphere - or paste it in a personal email and blast it off to your contact list. Anyone who clicks the link and signs up is automatically added to your Shopping Network!</td> </tr>
		<tr> <td width="10%">&nbsp;</td>     <td width="90%" height="90"> <input type="text" class="textbox" size="60" readonly="readonly" onfocus="this.select();" onclick="this.focus();this.select();" value="http://www.cashbackkaboom.com/3735" /> </td> </tr>
	</table>

	<table class="refer_table">
		<tr> <td width="10%" class="table_title">Promo Items</td>  <td width="90%" >Use brochures business cards and promotional items to build your network and your income. Visit our store now.  </td> </tr>
		<tr> <td width="10%">&nbsp;</td><td width="90%" height="70" id="email_tag"><a href="http://cashbackkaboom.com/store"><img src="img/modal/promo-items.png" style="width: 251px" alt="goto store" /></a>
		<form method="get" action="store">
		<button type="submit" href="http://cashbackkaboom.com/store" id="invite_btn" style="cursor: pointer; position: relative; right: 125px; top:35px;" id="Send" value="Shop Now!">
		</form>
		<span style="position: relative; bottom: 0px;">Shop Now!</span> </td> </tr>
	</table>

<h1 class="pagetitle"></h1>
	<div id="invite_disclaimer">
		<p><b>Disclaimer:</b><br/><br/>
			You earn cash back on any referral that joins Cash Back Kaboom through your invitation and makes a qualified online purchase at one of our 1,500 plus affiliated
			stores through Cash Back Kaboom. Cash Back generated through your referrals and any subsequent referrals up to 10 Shopping Levels is added to your Cash
			Back Kaboom member account. You may request payment once $50 in Cash Back has accrued. No self-referrals allowed.<br/><br/><font color="red"> IMPORTANT!</font> Posting a message containing
			your referral link on any Cash Back Kaboom affiliated partners Facebook or Twitter Page is strictly prohibited and will result in your accounts immediate termination and forfeiture of all cash-back due. Keyword bidding for search marketing campaigns is prohibited. You are responsible for any taxes on the
			Cash Back earned through the Cash Back Kaboom referral program and related Compensation Plan, as applicable by law. The Cash Back Kaboom referral
			program is open only to individuals eighteen (18) years of age or older. 
		</p>
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