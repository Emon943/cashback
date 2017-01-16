<?php
    include 'config/config.php';
	$dbObj = new DBUtility();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
        <title>Terms and Conditions </title>
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
								<a href="view_retailercb1d.html?rid=147"><img src="img/uploads/zc91jighp6hogh0m90sw_1411412907.jpg" width="100px" height="32px" alt="Omaha Steaks" title="Omaha Steaks" border="0" /> <span class="cash_back">3.5% Cash Back</span></a>
							</li>
														<li>
								<a href="view_retailer344e.html?rid=1023"><img src="img/uploads/9fgkqk6acmjtsy5bnybt_1407268662.jpg" width="100px" height="32px" alt="Cars Direct" title="Cars Direct" border="0" /> <span class="cash_back">$7.50 Cash Back</span></a>
							</li>
														<li>
								<a href="view_retailer72b3.html?rid=36751"><img src="img/uploads/59pgr8qsqkkmdv99h1ny_1385245797.png" width="100px" height="32px" alt="WalMart Canada" title="WalMart Canada" border="0" /> <span class="cash_back">2% Cash Back</span></a>
							</li>
														<li>
								<a href="view_retailer92ee.html?rid=7160"><img src="img/uploads/479mzh13ifw1mrkbn82y_1408552930.jpg" width="100px" height="32px" alt="Dog.com" title="Dog.com" border="0" /> <span class="cash_back">3% Cash Back</span></a>
							</li>
													</ul>
						
						<a href="index.html" class="viewalldrop">View All</a>
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
</style>
<script type="text/javascript">
function showAgreement(){
    document.getElementById('agreement').style.display = "block";
    document.getElementById('conditions').style.display = "none";

    document.getElementById('shopper_btn').style.background = "#D5D3C6";
    document.getElementById('shopper_btn').style.fontWeight = "bold";
    document.getElementById('makemoney_btn').style.background = "#F9F9F7";
    document.getElementById('makemoney_btn').style.fontWeight = "normal";
}
function showTerms(){
    document.getElementById('agreement').style.display = "none";
    document.getElementById('conditions').style.display = "block";

    document.getElementById('shopper_btn').style.background = "#F9F9F7";
    document.getElementById('shopper_btn').style.fontWeight = "normal";
    document.getElementById('makemoney_btn').style.background = "#D5D3C6";
    document.getElementById('makemoney_btn').style.fontWeight = "bold";
}
</script>
	<h1>Terms and Conditions</h1>
	<img id="terms_divider" src="img/images/divider.jpg" alt="divider" />

		<div id="term_nav">
			<ul style="list-style-type: none;  margin-top: 40px;">
				<li onclick="showAgreement()"><span style="background: #D5D3C6; font-weight: bold;" id="shopper_btn" >Independant Executive Agreement</span></li>
				<li onclick="showTerms()"><span style="background: #F9F9F7;"id="makemoney_btn" >Terms and Conditions</span></li>
			</ul>
		</div>
		<br /><br />

<div id="terms">

	<p>
		As an Independent Marketing Executive, you agree that you have read, understood and fully agreed to the Program Overview, Independent Marketing Executive
		Agreement, and Terms &amp; Conditions, and consent to be bound by all, including any future amendments or updates thereto.              
	</p>

	<h1>Program Overview</h1>
	<p>
		Cash Back Kaboom, LLC. ("Cash Back Kaboom ") is a marketing company that offers a FREE service that allows member shoppers to earn cash back on qualified purchases 
		at over 1,500 great stores. It’s fast and easy to sign up with Cash Back Kaboom. No money to pay, no fancy software to install, no obligation of any kind. All that’s 
		required is that you give us your name and email address and then create password—and you’re automatically enrolled and eligible to receive cash back when you shop. 
		It’s as simple as that! 
	</p>
	<p>
		People often ask, “How can you get me cash back just for shopping like I normally do?” The fact is, our affiliated merchants love our business—and it shows. They 
		reward us with a generous referral fee for sending lots of Cash Back Kaboom members their way. When you shop, we take a portion of the fee to pay you cash back on
		 your purchase. And unlike some of our competitors, we don’t keep the rest. We choose to spread the wealth around and pay more cash back to all the good people 
		 throughout your shopping network—those who got you here in the first place. It’s no wonder we’ve fast become “The Fastest-Growing Shopping Club in the World!”
	</p>

	<p>
		Before you get started saving and making money, we want to first make sure you fully understand how to get the most out of your Cash Back Kaboom membership. So we 
		ask you to please read your Independent Marketing Executive Agreement, which gives you information on your responsibilities as a Cash Back Kaboom Member. In addition,
		please review our Terms &amp; Conditions to find out how to shop, save and get paid with Cash Back Kaboom. If you have any question, we invite you to check out the <a href="faq.php">FAQs</a>
		section of our website, and know that you’re always welcome to Contact Us with any questions you may have. 
	</p>

	<br /><br />
	<div id="agreement">
		<h1>Independent Marketing Executive Agreement </h1>

		<p>As an Independent Marketing Executive, you agree that you have read, understood and fully agree to the Program Overview, Independent Marketing Agreement, the Terms &amp; Conditions, and consent to be bound by all including any future amendments or updates thereto.</p><br />
		<p>
			<strong>1.</strong> I am competent and of legal age to enter into binding contracts in the State in which I enter this Agreement with Cash Back Kaboom. <br /><br />
		
			<strong>2.</strong> I understand that a membership in Cash Back Kaboom is free and that I do not need to partake in the Cash Back Kaboom referral program (recruit others) to receive cash back when I shop at a Participating Merchants.  <br /><br />          
		
			<strong>3.</strong> I understand that as an Independent Marketing Executive, I am an Independent Contractor and not an employee, Legal Executive or franchisee of Cash Back Kaboom.<br /><br />
		
			<strong>4.</strong> I understand that I have become a Cash Back Kaboom Independent Contractor at no cost. My free membership entitles me to access to the Cash Back Kaboom website to receive cash back when I shop and partake in the Cash Back Kaboom referral program and compensation plan, unless otherwise cancelled. <br /><br />
		
			<strong>5.</strong> I understand that Cash Back Kaboom Participating Merchants do not support, approve, endorse or sponsor the Cash Back Kaboom referral program, marketing strategy, and related compensation plan; nor are they responsible for direct payment of cash back to Members for personal shopping or referral commissions generated throughout my 10-level shopping network. <br /><br />
		
			<strong>6.</strong> I understand that posting a message on my referral link on any Cash Back Kaboom-affiliated Partner Store’s Facebook or Twitter Page is not allowed and that keyword bidding for search marketing campaigns is prohibited and will result in my immediate termination as a Cash Back Kaboom Member, forfeiting all cash back due. <br /><br />
		
			<strong>7.</strong> I further understand and agree that I will not be treated as an employee for federal or state tax purposes, nor for purposes of the Federal Unemployment Tax Act, the Federal Insurance Contributions Act, the Social Security Act, or any State Unemployment Acts, State Employment Security Acts or State Workers Compensation Acts. I understand that I may be taxed on my accrual of cash back rewards, depending on the amount of cash back rewards I accrue and the tax laws of federal, state, and local jurisdictions. In all instances, I will be solely responsible for any and all tax liability arising out of my accrual or redemption of cash back from purchases at Cash Back Kaboom Participating Merchants and referral commissions. I agree to pay all applicable federal and state income taxes, sales taxes, self-employment taxes, and sales taxes and/or local license fees that may become due as a result of my activities under this Agreement.<br /><br /> 
		
			<strong>8.</strong> I understand that acceptance of this Agreement by Cash Back Kaboom does not constitute the sale of a franchise and that there are no exclusive territories granted to anyone. I also understand that I am not acquiring interest in a security. <br /><br />
		
			<strong>9.</strong> I understand that my success as an Independent Marketing Executive is dependent upon my own skills and efforts. I do not expect to receive profits as a result of the efforts of any individual or entity other than myself. <br /><br />
		
			<strong>10.</strong> As a Cash Back Kaboom Independent Marketing Executive, I agree to use my best efforts to invite, develop and service at least one member shopper. <br /><br />
		
			<strong>11.</strong> I understand that Cash Back Kaboom makes no claims or warranties of any kind including, but not limited to, any claim for earnings other than those included on the Cash Back Kaboom website or in official written literature. I will not create, publish or distribute any literature or materials representing Cash Back Kaboom or its products and services other than those that are provided by Cash Back Kaboom. <br /><br />
			
			<strong>12.</strong> I understand that Cash Back Kaboom will not be responsible for the loss of any commissions, bonuses or other payments because of errors or delays in receiving agreements, orders, changes or other necessary information from its network of affiliate Management Companies and its affiliated Merchant Partners. <br /><br />
		
			<strong>13.</strong> I understand that Cash Back Kaboom is not responsible for any changes to or withdrawals by a Participating Merchant’s participation in the Cash Back Kaboom program, or for any effect on accrual of cash back rewards caused by such changes, discontinuance, or withdrawal. If a Participating Merchant fails to report a transaction to Cash Back Kaboom, or withholds payment to Cash Back Kaboom for any reason, I understand that Cash Back Kaboom reserves the right to cancel the cash back award associated with the transaction. I understand that any cash back awarded to me is subject to cancellations, adjustments for returns, and other unforeseen events. I understand that Cash Back Kaboom can apply any adjustment or cancellation of cash back awarded to my account at any time in its sole discretion. Should I not agree with any adjustments made to my member account, my sole remedy is to cancel my Cash Back Kaboom membership.<br /><br />

			<strong>14.</strong> I understand that it is my responsibility to check my account to ensure that cash back from all my transactions has been properly credited and paid and that my Pending account and Available account balances are accurate. If I believe that cash back has not been correctly credited to my account, I understand I must contact Cash Back Kaboom, with all pertinent information related to my transaction, within 60 days of the transaction so Cash Back Kaboom may investigate. Should I disagree with any adjustments made to my account or payments made, my sole remedy is to cancel my Cash Back Kaboom membership.<br /><br />

			<strong>15.</strong> I have carefully reviewed the Cash Back Kaboom Compensation Plan and FAQs and acknowledge that they are incorporated as part of this Agreement in their present form and as modified from time to time by Cash Back Kaboom at its sole discretion. <br /><br />                                                       

			<strong>16.</strong> I understand that, upon notification to its Independent Marketing Executives, Cash Back Kaboom may at its discretion amend the Cash Back Kaboom Terms &amp; Conditions, Compensation Plan, FAQs, and this Independent Marketing Executive Agreement. I agree to abide by any and all such amendments. The continuation of my Cash Back Kaboom membership and my acceptance of commissions and bonus checks or other payments from Cash Back Kaboom constitutes my acceptance of any such amendments. <br /><br />                                        

			<strong>17.</strong> My violation of any of the terms of this Agreement or of the Terms &amp; Conditions may result, at Cash Back Kaboom’s discretion, in forfeiture of commission and bonus checks or other payments from Cash Back Kaboom on all or part of my shopping network, or cancellation of this Agreement, or other corrective action as specified in the Statement of Policies. <br /><br />
			 
			<strong>18.</strong> I may cancel this Agreement for any reason at any time by giving written notice to Cash Back Kaboom bearing my original signature, printed name, address, Cash Back Kaboom Member ID# and reason for canceling. Written cancellations received by Cash Back Kaboom on or before the 25th of the month will be effective the following month. Cancellation notices must be mailed to: Cash Back Kaboom LLC, 82 Kensington Ct, Rochester, NY 14612. <br /><br />
			 
			<strong>19.</strong>. I understand that this Agreement, with the Cash Back Kaboom Terms &amp; Conditions and Compensation Plan, constitutes the entire agreement between myself and Cash Back Kaboom and no other promises, representations, guarantees or agreements of any kind will be valid unless in writing and officially authorized in writing by Cash Back Kaboom. This provision does not in any way limit Cash Back Kaboom’s ability to unilaterally amend or modify this Agreement, its Compensation Plan, FAQs, or Privacy Policy without my prior written consent. <br /><br />
			 
			<strong>20.</strong> I understand that if any provision of this Agreement is held to be invalid all other provisions shall remain in effect and enforceable. <br /><br />

			<strong>21.</strong> I understand that claims or disputes of any nature between one or more current or former Independent Marketing Executives and Cash Back Kaboom (or its officers or employees), if not resolved by mutual agreement, shall be resolved by binding arbitration administered by the American Arbitration Association in accordance with its Commercial Arbitration Rules. Such arbitration shall take place in Monroe County, New York. The prevailing party in the proceeding between Registered Independent Marketing Executives and Cash Back Kaboom (or its officers and employees) shall be entitled to an award of attorney’s fees and cost. <br /><br />                                        
			 
			<strong>22.</strong> I understand that if this Agreement is altered in any way it will not be deemed accepted by Cash Back Kaboom, regardless of passage of time or payment of commissions by Cash Back Kaboom.<br /><br />
			 
			<strong>23.</strong> I consent to Cash Back Kaboom sending me e-mail including, but not limited to, messages that Cash Back Kaboom considers pertinent to my member shopping activities, the Independent Marketing Executive Agreement, the Cash Back Kaboom marketing program and Compensation Plan. <br /><br />
			 
			<strong>24.</strong> I understand that Cash Back Kaboom’s network of Participating Merchants is responsible for reporting qualifying purchases (and related returns, refunds and/or coupon use) to Cash Back Kaboom and that Participating Merchants may not report my purchase to Cash Back Kaboom if they determine that my purchase did not qualify for cash back because I did not comply with this Agreement or additional terms disclosed on the Participating Merchant's site, or if the Participating Merchant determines that I was not referred to them by Cash Back Kaboom. I also agree that Cash Back Kaboom may disqualify reported purchases based on its investigation and conclusion that I have not complied with this Agreement or the terms disclosed on the Participating Merchant’s site.<br /><br />
		</p>
	</div>
	<div id="conditions" style="display: none;">
		<h1>Terms &amp; Conditions </h1>
		<p>
			This section identifies the manner in which you may register for a free Cash Back Kaboom membership; when and how you are paid cash back on purchases and referral commissions; what rights you have to receive
			cash back on purchases and referral commissions, and Cash Back Kaboom’s rights and responsibilities with respect to the Cash Back Kaboom Privacy Policy, Terms and Conditions and Independent Marketing Executive Agreement.
		</p>
		<p>
			<strong>General Provisions</strong>
			By using the Site you agree to be bound by the terms in the Privacy Policy, Terms and Conditions and Independent Marketing Executive Agreement, and you agree to follow the guidelines and policies that Cash Back Kaboom may post on the Site or provide in emails to your registered email address from time to time. If you do not agree to our Privacy Policy, Terms and Agreements, and Independent Marketing Executive Agreement, you are not authorized to access or use the Cash Back Kaboom website and should immediately exit and not use the Site in any way. <br /><br />

			Cash Back Kaboom makes its website available to you conditioned upon your full acceptance of all terms contained in our Privacy Policy, Terms and Agreements, and Independent Marketing Executive Agreement. You understand and agree that from time to time Cash Back Kaboom has the right to, and may, modify our Privacy Policy, Terms and Agreements, an Independent Marketing Executive Agreement, and such modifications will be effective immediately upon posting on our website or in emails to your registered email address. Your continued use of the Cash Back Kaboom website after modifications or changes to our Privacy Policy, Terms and Agreements, and/or Independent Marketing Executive Agreement have been posted will mean that you accept and agree to all posted changes. <br /><br />

			We suggest that you check back periodically to see if there have been any changes to our Privacy Policy, Terms and Agreements, and Independent Marketing Executive Agreement and provisions contained therein. This Agreement applies to all users of the Cash Back Kaboom website, including visitors and registered members. <br />
		</p>


		<p><strong>1. Membership Eligibility</strong><br />
			Cash Back Kaboom offers a free membership that allows its member to receive coupons, free shipping offers, special deals and cash back when they shop at over 1,500 Participating Merchants. In addition, Cash Back Kaboom offers members an opportunity to invite others to join Cash Back Kaboom and earn referral commissions when a member in their commissionable shopping network makes a qualified purchase at a Participating Merchant. <br /><br />

			Members are not required to partake in the Cash Back Kaboom referral plan (to invite others to join Cash Back Kaboom) in order to receive cash back from purchases when they shop at Participating Merchants. Members may, upon fully understanding the terms in our Privacy Policy, Terms and Conditions, and Independent Marketing Executive Agreement and at their own discretion, refer people to the program and receive referral commissions based on qualified purchases made by member shoppers throughout their commissionable shopping network. Members must have Internet access and a valid working e-mail address to receive the privileges of the program. Participation in the program is limited to individuals who are 18 years of age or older.<br /><br />
		</p>

		<p><strong>2. Earning Cash Back on Purchases and Referral Commissions</strong><br />                  
			As a Cash Back Kaboom member shopper, you earn cash back when you make a qualifying online purchase from the Merchants that Participate (Participating Merchants) in our program. Some Participating Merchants may have special requirements or may pay different cash back amounts on certain products or services, or no cash back at all. To view a Participating Merchant’s cash back payout and/or special requirements and restrictions, select the merchant of your choice and click on the corresponding Conditions. <br /><br />

			Participating Merchants do not support, approve, sponsor, or endorse Cash Back Kaboom, its marketing plan, or its compensation plan. All merchant trademarks and logos are the property of the respective merchants. The list of available merchants may change at any time.<br /><br />

			As an Independent Marketing Executive, you have the ability to earn money in the form of commissions, made by member shoppers in your 10-level commissionable network. Such commissions are separate and apart from, and in addition to, any cash back earned on your personal shopping or any other discounts available when you shop through a Cash Back Kaboom Participating Merchant.<br /><br />
		</p>			 

		<p><strong>3. Cash Back Eligibility</strong><br />
			Cash back is calculated and awarded on the basis of the purchase amount, excluding taxes, shipping, and special handling charges. Fees for additional services, such as gift-wrapping, as well as any portion of the price covered by a gift certificate, online coupon or merchant credit are generally excluded from generating cash back. <br /><br />

			To be eligible to receive cash back and referral commissions, a qualifying purchase must be made by you and/or members in your 10-level shopping network. Generally, in order to make a qualifying purchase, the following criteria must occur:<br /><br />

			1. Members must be at least 18 years of age.<br />
			2. Members must log on to cashbackkaboom.com and enter their email address and password. <br />
			3. After logging in to Cash Back Kaboom, Members must click on any Participating Merchant’s link to begin their shopping experience.<br />
			4. Members must link from cashbackkaboom.com to a Participating Merchant’s Site, add items to a Participating Merchant’s shopping cart, and complete the transaction.<br />
			5. Members must have cookies enabled on their web browser.<br />
			6. To continue shopping at another Participating Merchant, Members must return to cashbackkaboom.com and link from the Site to the next Participating Merchant.<br />
			7. Members must not link to a Participating Merchant through a Participating Merchant’s email.<br />
			8. After linking to a Participating Merchant’s site, Members must not click on any banner ad or other link that takes them away from or off of the site. <br /><br />

			The most common reasons for purchases being deemed ineligible for cash back awards include the following:<br />

			1. Members did not begin their shopping experience by logging in to their Cash Back Kaboom account at cashbackkaboom.com; instead they went directly to the Participating Merchant’s site.<br />
			2. Shoppers complete a transaction with one Participating Merchant and go to another Participating Merchant’s website by typing a new address (URL) in the browser or clicking on a link or advertisement on the Participating Merchant’s site. In order to earn cash back from Participating Merchants, shoppers must link to each store through the Cash Back Kaboom website.<br />
			3. Members clicked on "special offers" or toolbars from other websites that took them away from the Participating Merchant’s website while shopping.<br /> 
			4. Members allowed too much time to lapse between linking to the Participating Merchant and completing the purchase. <br />
			5. Members contacted the merchant by phone to change an order. <br />
			6. Members failed to abide by the restrictions imposed by a Participating Merchant.<br />

			Determination of whether or not a purchase is made correctly through a Participating Merchant is at the discretion of Cash Back Kaboom and the Participating Merchant. Cash Back Kaboom is not responsible for tracking problems resulting from incorrect usage of the website, disabling cookies, computer issues resulting from unknown causes such as third-party software or other issues, Participating Merchant errors or omissions or from any other failure of tracking mechanisms.<br /><br />
		</p>

		<p><strong>4. Payment Timetable </strong><br />                             
			Upon registration with Cash Back Kaboom, a “My Account” tab will be set up in your name that allows you to view your shopping history, your cash back earned through personal shopping and your referral commissions earned through your 10-level shopping network. <br /><br />

			The appropriate cash back and referral commissions will be initially posted to your account as "Pending," usually within thirty (30) days of the date that a Participating Merchant reports your transaction to Cash Back Kaboom. For a period of up to sixty (60) days thereafter, your cash back may stay as "Pending." This time period is in accordance with the Participating Merchant's right to reverse a transaction for exchanges or cancellation purposes. Once the participating merchant authorizes the payment in connection with a qualifying purchase made by your or a member in your 10-level shopping network, we will credit your account with the applicable cash back or referral commissions. Your cash back and/or referral commissions earned will then be identified as "Available Balance," at which time you can request a payment. <br /><br />

			Please note Cash back Kaboom does its best to expedite payments to pay cash back on your purchase. However, orders from some Participating Merchants may be delayed due to delayed processing and reporting by the Merchant. In those cases, we reserve the right to delay payment on purchases based the merchant’s policies and procedures at any time.<br /><br />
		</p>
			 
		<p><strong>5. Requesting Payment </strong><br />                              
			To redeem your cash back and referral commissions, you must have $50.00 or more in your “Available” account. You may request to receive payment electronically through any method listed on the Withdraw Funds page of the Cash back Kaboom website. The funds will be distributed to you within thirty (30) business days of receipt of your request for payment. There is no automatic or periodic redemption. Cash Back Kaboom is not responsible for lost email transactions or any other event beyond the control of Cash Back Kaboom that would prevent a member from receiving payment.<br /><br />

			You may be taxed on your receipt of cash back from personal shopping or from referral commissions generated by members in your 10-level shopping network, depending on the tax laws of federal, state, and local jurisdictions. You are solely responsible for redeeming your cash back earned from purchases at Participating Merchants as well as referral commissions. <br /><br />
		</p>

		<p><strong>6. Account Adjustments  </strong><br />                      
			All cash back from purchases at Participating Merchants and referral commissions awarded to you are subject to adjustments for returns and cancellations, Cash Back Kaboom's receipt of information and payments on such purchases/orders from Participating Merchants, and other events. Cash Back Kaboom reserves the right to make adjustments to your account at any time in accordance with this Agreement. If you disagree with any adjustments made to your member account, your sole remedy is to discontinue your Agreement as an Independent Marketing Executive of Cash Back Kaboom. Cash Back Kaboom is not responsible for changes to Cash Back Kaboom or discontinuance of, any Participating Merchant, or any Participating Merchant's withdrawal from the Program, for any effect on accrual of cash back from purchases at Participating Merchants and referral commissions caused by such changes, discontinuance or withdrawal.<br /><br />
		</p>			 

		<p><strong>7. Termination of Program</strong><br />                       
			Cash Back Kaboom reserves the right to terminate any Program in whole or in part at any time with notice. In the event a Program is terminated, you will have sixty (60) days to redeem your Available cash back from purchases made by you at Participating Merchants and on referral commissions from the date notice is transmitted by Cash Back Kaboom to the email address specified in your account. Notification will be sent to the email address provided to Cash Back Kaboom during the registration process. Cash Back Kaboom will not be responsible for failing to notify you of Program termination where such failure is caused by an inaccurate email address, your failure to check email, or your failure to inform Cash Back Kaboom of a change in your email address.<br /><br />
		</p>

		<p><strong>8. Member Responsibilities</strong><br />                          
			You are responsible for maintaining accurate account information at all times, including valid email address information. You are responsible for keeping your email address, password and all other information concerning your account confidential. Cash Back Kaboom is entitled to act on instructions received under your username and password. Cash Back Kaboom is not responsible for any credits or debits made to your account by someone else using your username or password and is not responsible for any losses or liabilities incurred through the use of your password by a third party.<br /><br />

			You are responsible for reviewing your account balance on a regular basis, and for checking to ensure that all cash back and referral commissions have been properly credited to your account. If a discrepancy occurs in your member account, such as cash back not being credited, then you must contact Cash Back Kaboom via the customer support link on our website within sixty (60) days of the purchase/order date from a Participating Merchant. If you fail to contact Cash Back Kaboom within that 60-day period, such purchase/order shall be deemed to be accurate and you thereby waive any right to dispute said purchase/order.<br /><br />
		</p>

		<p><strong>9. Cash Back Kaboom Responsibilities</strong><br />
			When you sign up for your free membership, Cash Back Kaboom will provide you with a unique Member ID# that tracks your shopping activity. When you log in to Cash Back Kaboom, your Member ID# activates. When you click on a Participating Merchant link, the ID# it follows you to the merchant’s website. When you make a purchase, the merchant recognizes you as a Cash Back Kaboom member and thanks you for shopping by paying you cash back.<br /><br />

			Please note: Your cash back does not show up in a merchant's shopping cart at checkout. It is usually credited within a few days as “Pending Cash Back” in your Cash Back Kaboom account.<br /><br />

			“Pending Cash Back” means that you have made a qualified purchase and the merchant has reported the transaction to us. It remains as “Pending” while the merchant allows time for returns, exchanges, or cancelled orders. When the transaction fully clears and merchants know you’re a happy customer, your “Pending” cash back is then posted as “Available” cash back and may be withdrawn if the amount totals $50 or more.<br /><br />

			Please note: Each merchant has its own time period to allow for returns, exchanges and cancelled orders. Most purchases go to “Pending” within 1-5 business days. They may stay in a “Pending” state for up to 60 days before becoming become “Available.” Most travel transactions become “Available” only upon the completion of the travel itinerary.<br /><br />

			It is the sole responsibility of Cash Back Kaboom to collect fees from its Participating Merchants and track and distribute cash back to Member shoppers for their personal shopping and for commission generated by Members throughout their 10-level shopping networks, according to the Cash Back Kaboom Compensation Plan. <br /><br />

			Cash Back Kaboom is solely responsible for all phases of its website, marketing strategy and related Compensation Plan. Cash Back Kaboom is responsible for uploading all affiliate merchant links, coupons, and special deals, as well as regular maintenance of the Cash Back Kaboom website. <br /><br />
		</p>

		<p><strong>10. Participating Merchants’ Responsibilities</strong><br />
			Cash Back Kaboom Participating Merchants do not support, approve, endorse or sponsor Cash Back Kaboom’s marketing strategy and related compensation plan, and they are not responsible for direct payment of cash back on personal purchases by member shoppers or referral commissions generated throughout members’ 10-level shopping networks.<br /><br /> 

			Participating Merchants are responsible for all purchases made on their sites, including processing payments, utilization of coupons, shipping and handling, returns and cancelled orders.<br /><br />
		</p>

		<p><strong>11. Shipping and Return Policies</strong><br />
			Products purchased through a link on the Cash Back Kaboom website to a third-party Partner Merchant's website are covered by that Partner Merchant's individual Return and Shipping Policies, which are available on the third party Partner Merchant's Website.<br /><br />
		</p>

		<p><strong>12. Use of Online Coupons  </strong><br />                   
			Cash Back Kaboom provides online coupons from its Participating Merchants as a free service to its members. Cash Back Kaboom is not responsible for the redemption, errors/omissions or expiration of online coupons. It is the Member’s responsibility to ensure that discounts, special pricing, or free offer are presented in the checkout process with the Participating Merchant. All offers and promotions on the Cash Back Kaboom website are subject to change without notice. Cash Back Kaboom has no control over the legality of any coupons or other offers made by Participating Merchants, the ability of the Participating Merchants to complete the sales in accordance with the offers, or the quality of the goods offered by the Participating Merchants. Cash Back Kaboom has no control over whether Participating Merchants will honor the offers shown on cashbackkaboom.com and does not guarantee the accuracy or completeness of the information contained on the website. In the event you have a dispute with a Participating Merchant that in any way relates to Cash Back Kaboom or the use of information from the website, you agree to waive and release Cash Back Kaboom from any and all claims, demands, actions, damages, losses, costs or expenses of every kind and nature, known and unknown, disclosed and undisclosed relating to that dispute.<br /><br />
		</p>

		<p><strong>13. Receiving Email Communications from Cash Back Kaboom</strong><br />
			When you sign up for your free Cash Back Kaboom membership, you automatically agree to receive communications that we deem account- and membership-related as well as shopping-related emails that feature coupons and special offers available to Cash Back Kaboom Members. You can, at any time, opt out of receiving Cash back Kaboom emails by clicking the “unsubscribe” link in any email we send you. Since we do need to communicate account information with you in order to provide you with necessary services to maintain your membership, you cannot unsubscribe from account information emails. If you wish to cease all communication from Cash Back Kaboom, you can close your account by contacting our Customer Support team.<br /><br />
		</p>			 

		<p><strong>14. General </strong><br />
			Participation in Cash Back Kaboom membership and the cash back received under the Cash Back Kaboom Program may not be assigned or transferred to any third party, except as expressly permitted by Cash Back Kaboom, in writing. The sale, transfer, lending, exchange, pooling or barter of any commissions, other than by Cash Back Kaboom, is expressly prohibited. Any Cash Back Kaboom commission assigned, sold, or otherwise transferred in violation of the Terms and Conditions and will result in termination of the Cash Back Kaboom membership and Independent Marketing Executive Agreement and forfeiture of all present and future commissions. <br /><br />

			Cash Back Kaboom will use information collected from members as set forth in our Privacy Policy. Members are encouraged to read our Privacy Policy to understand our information collection and use practices. <br /><br />

			Members are responsible for any taxes that may be due on cash back from personal purchases and referral commission.<br /><br />

			Cash back from personal purchases and from commissions redeemed through the referral commission program have no cash value until such time as payment is requested and shall have no property rights or other legal interest in Cash Back Kaboom.<br /><br />
		</p>

		<p><strong>15. Compliance with Laws and Regulations </strong><br />                   
			You agree to comply with all applicable laws, rules and regulations. You may participate in Cash Back Kaboom if and to the extent that such participation is permitted by such laws, rules and regulations. Cash Back Kaboom may refuse to enroll you or may restrict, modify or terminate your username, password and registration without liability to you or any other third party if you violate any law, rule or regulation, of if your participation could violate any law, rule or regulation.<br /><br />
		</p>

		<p><strong>16. Proprietary Rights to Content</strong><br />                          
			You acknowledge that Cash Back Kaboom services, software and content, including but not limited to text, sounds, photographs, graphics, or other material contained in any Cash Back Kaboom communication, advertisements or messages, whether by Cash Back Kaboom, cashbackkaboom.com or Cash Back Kaboom’s advertisers or network of Participating Merchants, are protected by copyrights, trademarks, service marks, patents, and/or other proprietary rights and laws. You are only permitted to use content, services, or software as expressly authorized by Cash Back Kaboom, its advertisers and Affiliated Merchants, as the case may be.<br /><br />
		</p>

		<p><strong>17. Inactive Member Accounts &amp; Termination of Membership</strong><br />
			Because membership in the Cash Back Kaboom program is free, and there is no charge to track and maintain your account, Cash Back Kaboom finds it necessary to terminate inactive member accounts due to inactivity over a 12-month period.

			Cash Back Kaboom reserves the right to debit your inactive account one dollar ($1.00) per month to recover the cost of account maintenance until (a) you reactivate your account by logging in and starting a shopping session, using the Invite Friends page on the site to send out invitations, or updating your account information, or (b) your account balance is $0. If the balance in your inactive account is or becomes $0, Cash Back Kaboom will close your account permanently and cease to maintain your account records and website access. Cash Back Kaboom will not continue to charge your account if your account balance reaches $0. <br /><br />
		</p>

		<p><strong>18. Termination of Cash Back Kaboom Agreement</strong><br />
			(a) Any violation of the Terms and Conditions of this Agreement is grounds for termination of your user name, password and registration with Cash Back Kaboom.<br /><br />
			(b) Cash Back Kaboom reserves the right to terminate your user name, password and registration, if you do not renew your Independent Marketing Executive Agreement twelve (12) months from your anniversary date.<br /><br />
			(c) You may terminate your user name, password and registration at any time by sending an email to our Customer Support team.<br /><br />
			(d) If your user name, password and registration with Cash Back Kaboom are terminated for any reason, either by you or by Cash Back Kaboom, you shall forfeit any and all earned cash back or commissions in your account. <br /><br />
		</p>

		<p><strong>19. Notice</strong><br />                                   
			All Cash Back Kaboom notices will be given by email or postal mail, or by general posting to the Cash Back Kaboom website.<br /><br />
		</p>			                                         

		<p><strong>20. Waiver </strong><br />                         
			Any failure to exercise or enforce any right or provision of this Agreement on the part of Cash Back Kaboom shall not constitute a waiver of such right or provision.<br /><br />
		</p>

		<p><strong>21. Choice of Law </strong><br />                               
			This Agreement shall be governed by and construed in accordance with the laws of the State of New York, without reference to conflicts of law rules, and you consent to exclusive jurisdiction and venue in the courts located in Monroe County, in the State of New York, for all matters in connection with this Agreement or your use of Cash Back Kaboom.<br /><br />
		</p>

		<p><strong>22. Severability of Provisions </strong><br />                             
			Cash Back Kaboom reserves the right to terminate your membership, user name, password and registration in the Cash Back Kaboom program if your account has been associated with any legally questionable activity. Any provision (or part thereof) of this Agreement which is found to be invalid, prohibited, or unenforceable shall be ineffective only to the extent of such prohibition and unenforceable, without invalidating the remainder of the provision or the remaining provisions hereof. To the extent permitted by the applicable law, each of the parties hereto hereby waives any provision of law, which prohibits or renders unenforceable any provisions hereof in any respect. <br /><br />
		</p>

		<p><strong>23. Protecting Your Information </strong><br />
			Cash Back Kaboom does not sell or rent your information to third parties. Cash Back Kaboom requires your name and address in order to send you payment and other rewards earned through Cash Back Kaboom. Any other information we gather will be used only to improve your shopping experience at cashbackcaboom.com. Such information might include your favorite stores, preferred types of coupons, special offers or shopping categories. As detailed in the Cash Back Kaboom Privacy Policy, Cash Back Kaboom does not disclose your information to third parties except as necessary (a) for Cash Back Kaboom payroll agents and payment service providers to make Cash Back Kaboom' payments to you; (b) to comply with government agency or court orders or requests; (c) in providing aggregated or non-personalized marketing services for advertising or store partners; or (d) for Cash Back Kaboom's agents and to send email communications to you.<br /><br />
		</p>

		<p><strong>24. Disclaimers and Limitations of Liabilities</strong><br />
			Cashbackkaboomcom is being provided by Cash Back Kaboom “as is” and “as available.” To the maximum extent permitted by law, Cash Back Kaboom disclaims all representations and warranties, express or implied, with respect to cashbackkaboom.com, including, but not limited to, implied warranties of merchantability and fitness for any particular purpose and implied warranties arising from course of dealing or course of performance. You agree that Cash Back Kaboom will not be liable for any costs or damages arising out of a dispute between you and any affiliated merchant, and you hereby expressly waive any such claim against Cash Back Kaboom and its members, officers, directors, employees, parents, subsidiaries, agents and executives. Cash Back Kaboom does not make any representations or guarantees regarding any goods or services offered or provided by affiliate merchants or suppliers. Cash Back Kaboom does not make any representations that access to this site will be uninterrupted or error-free, and Cash Back Kaboom assumes no responsibility for any damage caused by your accessing, or inability to access, this site, including, but not limited to, your inability to receive Cash Back Kaboom commissions by purchasing items with a Participating Merchant. In no event shall Cash Back Kaboom be liable for any damages, claims or losses incurred (including without limitation compensatory, incidental, indirect, special, consequential, or exemplary damages), however caused and under any theory of liability arising in connection with your use of cashbackkaboom.com; any act or omission by Cash Back Kaboom in administering the website or the program; or the purchase or use of any goods or services of merchants or suppliers, even if Cash Back Kaboom has been advised of the possibility of such damages, claims, or losses and notwithstanding any failure of essential purpose of any limited remedy. Notwithstanding the foregoing, in no event shall Cash Back Kaboom be liable to you for direct damages caused by Cash Back Kaboom in excess of the commissions earned by you during the most recent six (6) months. Some states do not allow limitations on incidental or consequential damages, so the above limitation may not apply to you.<br /><br />

			You agree to indemnify and hold Cash Back Kaboom, its parents, subsidiaries, affiliates, officers, directors and employees, harmless from any claim or demand, including reasonable attorney’s fees and expenses, made by any third party due to or arising out of your use of Cash Back Kaboom.<br /><br />
		</p>

		<p><strong>25. Amendment to Agreement </strong><br />
			The Terms and Conditions set forth within this agreement may change from time to time. Cash Back Kaboom will post those changes on this page. You consent to be bound by all said Terms and Conditions, including any and all updates thereto. Cash Back Kaboom will not be responsible if you do not learn of the modification. It is your responsibility to check this page regularly to determine whether the agreement has been modified. <br /><br />
		</p>

	</div>
</div> <!-- END TERMS -->


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