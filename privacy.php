<?php
    include 'config/config.php';
	$dbObj = new DBUtility();
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">


<head>
        <title>Privacy Policy </title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:700|Open+Sans:400,700,800|Open+Sans+Condensed:700' rel='stylesheet' type='text/css'>

        <meta name="description" content="The easiest way to SAVE MONEY & MAKE MONEY on stuff you already buy - Try it now, It's free!">


        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="css/nick.css" />
        <link rel="stylesheet" type="text/css" href="css/mobile.css" />
        <link rel="stylesheet" type="text/css" href="css/mobile_update.css">

        <link rel="shortcut icon" href="favicon.ico" />
        <link rel="icon" type="image/ico" href="favicon.ico" />
        <script src="../jwpsrv.com/library/czgAhjdJEeKuzSIACp8kUw.js"></script>
        <link href="css/ui-lightness/jquery-ui-1.10.3.custom.css" rel="stylesheet">

        <link src="../code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" rel="stylesheet">
        <script src="../code.jquery.com/jquery-1.9.1.js"></script>
        <script src="js/viewport.js"></script>
        <script src="../code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
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
								<a href="view_retailer979d.html?rid=1509043"><img src="img/uploads/hu6agrkitgahvny6wp87_1387295913.png" width="100px" height="32px" alt="Choice Hotels" title="Choice Hotels" border="0" /> <span class="cash_back">3% Cash Back</span></a>
							</li>
														<li>
								<a href="view_retailer6e85.html?rid=4018320"><img src="img/uploads/d2ol4y5hei14mztwtldg_1390498372.png" width="100px" height="32px" alt="Express" title="Express" border="0" /> <span class="cash_back">2.5% Cash Back</span></a>
							</li>
														<li>
								<a href="view_retailer72c8.html?rid=37766"><img src="img/uploads/w2mdh56092fz5f7060j5_1420729041.jpg" width="100px" height="32px" alt="Wholesale Costume Club" title="Wholesale Costume Club" border="0" /> <span class="cash_back">5% Cash Back</span></a>
							</li>
														<li>
								<a href="view_retailer0c49.html?rid=2393553"><img src="img/uploads/qjhzsqa5ouf244clrgbw_1389361562.png" width="100px" height="32px" alt="Otter Box" title="Otter Box" border="0" /> <span class="cash_back">6.4% Cash Back</span></a>
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
            <form action="http://www.cashbackkaboom.com/search.php" method="get" id="searchfrm" name="searchfrm">
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
                                    <li>
                                        <a href="cat_shop.php?id=<?php echo $res[$i]["cat_id"];?>">
                                            <?php echo $res[$i]["cat_name"];?>
                                        </a>
                                    </li>
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
<style type="text/css">
	.md-modal{
		left: 40%;
	}
#column_center p{
	color: #606060;
	font-size: 15px;
	font-family: 'Open Sans',Tahoma,Verdana,Arial,Helvetica,sans-serif;
	font-weight: normal;
}
</style>
	<h1>Privacy Policy</h1>
	<p><p style="margin-left: 40px;">&nbsp;</p>
<p>What data, how and why we collect information about you.</p>
<p><br />
<br />
Our goal is to maximize the benefits for every Cash Back Kaboom member to provide as many member benefits as possible. Our major focus is to redirect the cash back we receive from our affiliated merchants to our members and those members in their upline shopping network. In order to track and reward members with cash back, we collect certain information from you such as your name and email address and mailing address if you request payment by check.&nbsp; Cash Back Kaboom will not sell or rent any of your personal information to third parties for their marketing purposes and only shares your personal information with third parties as described in this policy.<br />
<br />
When you visit the Cashbackkaboom.com website or use our services, we collect information sent to us by your computer, mobile phone or other access device. The information sent to us includes data on the pages you access, your computer IP address, device identifiers, the type of operating system you&rsquo;re using, your location, mobile network information, standard web log data and other information. Web log data includes the browser type you&rsquo;re using and traffic to and from our site. When you visit the Cash Back Kaboom.com website we may also collect information about your transactions and your activities.<br />
<br />
In addition, if you open a Cash Back Kaboom member account, we may collect the following types of information:<br />
<br />
&bull;&nbsp;&nbsp; &nbsp;Contact information, such as your name, address, phone, email, and other similar information.<br />
&bull;&nbsp;&nbsp; &nbsp;Financial information, such as the full bank account numbers, information that you link to your Cash Back Kaboom account when you request payment. <br />
&bull;&nbsp;&nbsp; &nbsp;Detailed personal information such as your date of birth or social security number when your requested payments reach $600.00 (six hundred dollars) or more.<br />
<br />
In order to help protect you from fraud and misuse of your personal information, we may collect information about your use and interaction with our website and services. For example, we may evaluate your computer, mobile phone or other access device to identify any malicious software or activity.<br />
<br />
<a style="display: inline;" href="#">Back To Top</a><br />
<br />
<br />
How we use Cookies.<br />
<br />
When you access our website and use our services, we (including companies we work with) may place small data files on your computer or other device. These data files may be cookies, pixel tags, &quot;Flash cookies,&quot; or other local storage provided by your browser or associated applications (&quot;Cookies&quot;). We use these technologies to: recognize you as a Cash Back Kaboom customer; customize Cash Back Kaboom services, content, and advertising; measure promotional effectiveness; help ensure that your account security is not compromised; mitigate risk and prevent fraud; and to promote trust and safety across our Cash Back Kaboom.com site.<br />
<br />
We and our affiliated&nbsp; merchants may use both session and persistent Cookies. Session Cookies expire and no longer have any effect when you log out of your account or close your browser. Persistent Cookies may remain on your device until you erase them or they expire.<br />
<br />
We and our affiliated merchants may encode our Cookies so that we can interpret the information stored in them. You are free to decline our Cookies if your browser or browser add-on permits, but doing will interfere with your use of the&nbsp; Cash Back Kaboom website and will negate the cash back on your personal shopping and the cash back you may earn through our marketing and related Compensation Plan. Refer to the help section of your browser, browser extensions, or installed applications for instructions on blocking, deleting, or disabling Cookies.<br />
<br />
You may encounter Cookies on websites that we do not control. For example, if you view a web page created by a third party or use an application developed by a third party, there may be a Cookie placed by the web page or application. Likewise, these third parties may place their own Cookies that are not subject to our control and the Cash Back Kaboom Privacy Policy does not cover their use.<br />
<br />
<a style="display: inline;" href="#">Back To Top</a><br />
<br />
<br />
How we protect and store personal information.<br />
<br />
Throughout this policy, we use the term &quot;personal information&quot; to describe information that can be associated with a specific person and can be used to identify that person. We do not consider personal information to include information that has been made anonymous so that it does not identify a specific user.<br />
<br />
We store and process your personal information on our computers in the US.&nbsp;&nbsp; We protect your information using physical, technical, and administrative security measures to reduce the risks of loss, misuse, unauthorized access, disclosure and alteration. Some of the safeguards we use are firewalls and data encryption.<br />
<br />
<a style="display: inline;" href="#">Back To Top</a><br />
<br />
<br />
How we use the personal information we collect.<br />
<br />
Our primary purpose in collecting personal information is to provide you with a secure, smooth, efficient, and customized shopping experience. We may use your personal information to:<br />
<br />
&bull;&nbsp;&nbsp; &nbsp;provide CASH BACK KABOOM services and customer support;<br />
&bull;&nbsp;&nbsp; &nbsp;process transactions and send notices about your transactions;<br />
&bull;&nbsp;&nbsp; &nbsp;resolve disputes, collect fees, and troubleshoot problems;<br />
&bull;&nbsp;&nbsp; &nbsp;prevent potentially prohibited or illegal activities, and enforce our User Agreement;<br />
&bull;&nbsp;&nbsp; &nbsp;customize, measure, and improve CASH BACK KABOOM services&nbsp; and the content, layout, and operation of our websites and applications;<br />
&bull;&nbsp;&nbsp; &nbsp;deliver targeted marketing, service update notices, and promotional offers based on your communication preferences;<br />
&bull;&nbsp;&nbsp; &nbsp;contact you at any telephone number, by placing a voice call or through text (SMS) or email messaging, as authorized by our User Agreement.<br />
&bull;&nbsp;&nbsp; &nbsp;compare information for accuracy and verify it with third parties.<br />
<br />
<a style="display: inline;" href="#">Back To Top</a><br />
<br />
<br />
How we market to you.<br />
<br />
Once we collect personal information from you - we do not sell or rent it to third parties for their marketing purposes without your explicit consent. We may combine your information with information we collect from other companies and use it to improve and personalize our Cash Back Kaboom website shopping content, email communications and advertising. If you do not wish to receive marketing communications from us or participate in our ad-customization programs, simply indicate your preference by clicking on the &ldquo;My Account&rdquo; tab and going to the &rdquo;Edit My Profile&rdquo; and updating your preferences.<br />
<br />
We may call or text message (SMS) you at a mobile phone number that you have provided to us. You can indicate your contact preferences by logging into your &ldquo;My Account&rdquo; and or by following the directions provided within the communication.<br />
<br />
We respect your communication preferences. If you no longer wish to receive notifications via our application, you can adjust your preferences by visiting the settings page of the application.<br />
<br />
<a style="display: inline;" href="#">Back To Top</a><br />
<br />
<br />
Your choices and responsibilities<br />
<br />
We may send you emails that pertain to special deals and cash back offerings from our affiliated merchants. Plus you may receive email updates that pertain to the Cash Back Kaboom marketing and Compensation Plan. All emails you receive from Cash Back Kaboom offer you the opportunity to unsubscribe from any future promotional email. Simply follow the directions we include in every email to unsubscribe.<br />
<br />
It is the sole responsibility of Cash Back Kaboom members to update and maintain accurate contact information in their account. You can make changes by visiting &ldquo;My Account&rdquo; and editing personal information.&nbsp; In addition, to change payment specifications you may edit information under &ldquo;My Account&rdquo; and &ldquo;Request Payment.&rdquo; Email, street addresses and banking information that are entered by members are the addresses that will be used for all contact including for sending you cash back payments. Cash Back Kaboom is not responsible for payments sent to an incorrect addresses provided by you.<br />
<br />
Cash Back Kaboom will post all changes to this Privacy Policy here at cashbackkaboom.com. You are responsible for checking on policy updates that may occur.<br />
<br />
<a style="display: inline;" href="#">Back To Top</a><br />
<br />
<br />
How we share personal information with others.<br />
<br />
Cash Back Kaboom will not sell or rent any of your personal information to third parties for their marketing purposes and only shares your personal information with third parties as described in this policy.<br />
<br />
To process cash back payments to you, or for you to order promotional materials and marketing aids from our website, we may share some of your personal information including but not limited to; our Bank for ACH transfer to your account, our Payroll Company if you wish to receive payment by check and to receive tax information; and our printer for packing and delivering promotional items and sales aids.&nbsp; Information may include but not limited to: your name, email and physical address, date of sign-up, payments you have received from Cash Back Kaboom, and whether you have verified control of a bank account. &nbsp;<br />
<br />
Please note that all Cash Back Kaboom affiliated merchants, companies, banks and vendors have their own privacy policies, and although Cash Back Kaboom&rsquo;s User Agreement does not allow the other transacting party to use this information for anything other than providing Cash Back Kaboom members with efficient service, Cash Back Kaboom is not responsible for their actions, including their information protection practices.<br />
<br />
Regardless, we will not disclose your personal information to anyone you have paid or who has processed a payment to you using Cash Back Kaboom, or with the third parties that offer or use Cash Back Kaboom services, except with your express permission or if we are required to do so to comply with a subpoena, or other legal process.<br />
<br />
<a style="display: inline;" href="#">Back To Top</a><br />
<br />
<br />
How we share personal information with other parties<br />
<br />
We may share your personal information with:&nbsp; Law enforcement, government officials, or other third parties pursuant to a subpoena, court order, or other legal process or requirement applicable to CASH BACK KABOOM or one of its affiliates; when we need to do so to comply with law or; when we believe, in our sole discretion, that the disclosure of personal information is necessary to prevent physical harm or financial loss, to report suspected illegal activity or to investigate violations of our User Agreement.<br />
&nbsp;&nbsp; &nbsp;<br />
<a style="display: inline;" href="#">Back To Top</a><br />
<br />
<br />
How you can restrict Cash Back Kaboom from sharing your personal information<br />
<br />
Cash Back Kaboom maintains your preferences for use and sharing of information, including how we contact you. Some federal and state laws allow you to restrict the sharing of your personal information in certain instances. Cash Back Kaboom does not share your personal information with third parties for their marketing purposes unless you have given your explicit consent. &nbsp;<br />
<br />
<a style="display: inline;" href="#">Back To Top</a><br />
<br />
<br />
How you can access or change your personal information<br />
<br />
You can review and edit your personal information at any time by logging in to your CASH BACK KABOOM account, clicking the &ldquo;My Account&rdquo; tab account and &ldquo;Edit My Profile.&rdquo;&nbsp; You can also close your account through the Cash Back Kaboom website. If you close your Cash Back Kaboom account, we will mark your account in our database as &quot;Closed,&quot; but may retain personal information from your account to collect any fees owed, resolve disputes, troubleshoot problems, assist with any investigations, prevent fraud, enforce our User Agreement, or take other actions as required or permitted by law.<br />
<br />
<a style="display: inline;" href="#">Back To Top</a><br />
<br />
<br />
How you can contact us about Privacy questions<br />
<br />
To contact us with any questions pertaining to this Private Policy statement of any other questions you may have about your Cash Back Kaboom membership, please click the Contact Us link on our website and leave a message including your phone number.</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p></p>

</div>


</div><!-- .wrap -->

<div id="need_more_cash">
	<a href="index.php"><img src="images/need_cash_back.png" alt="Need More Cash Back?" /></a><br />
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
				<form name="footer_modal" action="http://www.cashbackkaboom.com/#" method="post">
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

			<form action="http://www.cashbackkaboom.com/index.php" method="post">
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
			<div class="powered-by">&copy; 2017 Cash Back Kaboom <div>
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