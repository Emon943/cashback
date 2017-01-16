<?php
    include 'config/config.php';
	$dbObj = new DBUtility();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">


<head>
        <title>Faqs</title>
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
								<a href="view_retailer9eaf.html?rid=35732"><img src="img/uploads/ohnan22ipii6re3taa5e_1407265403.jpg" width="100px" height="32px" alt="CallingCards.com" title="CallingCards.com" border="0" /> <span class="cash_back">5% Cash Back</span></a>
							</li>
														<li>
								<a href="view_retailer3c15.html?rid=38663"><img src="img/uploads/el8jbxo8d6l916oaswrw_1421794377.jpg" width="100px" height="32px" alt="Orvis" title="Orvis" border="0" /> <span class="cash_back">3% Cash Back</span></a>
							</li>
														<li>
								<a href="view_retailerf644.html?rid=1834595"><img src="img/uploads/lygt8djusgoc0pq2rduk_1387298851.png" width="100px" height="32px" alt="Guitar Center" title="Guitar Center" border="0" /> <span class="cash_back">3% Cash Back</span></a>
							</li>
														<li>
								<a href="view_retailerf8e1.html?rid=38539"><img src="img/uploads/ii56l57bryjgu04ld3sd_1411411862.jpg" width="100px" height="32px" alt="Naturalizer Canada" title="Naturalizer Canada" border="0" /> <span class="cash_back">5% Cash Back</span></a>
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
<script type="text/javascript">
function showTenShop(){
    document.getElementById('topshop').style.display = "block";
    document.getElementById('topmake').style.display = "none";
    document.getElementById('shop_cat').style.display = "none";
    document.getElementById('make_money').style.display = "none";
    document.getElementById('cashback').style.display = "none"; 
    document.getElementById('eligibility').style.display = "none";

    document.getElementById('shopper_btn').style.background = "#F9F9F7";
    document.getElementById('shopper_btn').style.fontWeight = "normal";
    document.getElementById('makemoney_btn').style.background = "#F9F9F7";
    document.getElementById('makemoney_btn').style.fontWeight = "normal";
    document.getElementById('cashback_btn').style.background = "#F9F9F7";
    document.getElementById('cashback_btn').style.fontWeight = "normal";
    document.getElementById('eligibility_btn').style.background = "#F9F9F7";
    document.getElementById('eligibility_btn').style.fontWeight = "normal";
}
function showTenMakeMoney(){
    document.getElementById('topshop').style.display = "none";
    document.getElementById('topmake').style.display = "block";
    document.getElementById('shop_cat').style.display = "none";
    document.getElementById('make_money').style.display = "none";
    document.getElementById('cashback').style.display = "none"; 
    document.getElementById('eligibility').style.display = "none";

    document.getElementById('shopper_btn').style.background = "#F9F9F7";
    document.getElementById('shopper_btn').style.fontWeight = "normal";
    document.getElementById('makemoney_btn').style.background = "#F9F9F7";
    document.getElementById('makemoney_btn').style.fontWeight = "normal";
    document.getElementById('cashback_btn').style.background = "#F9F9F7";
    document.getElementById('cashback_btn').style.fontWeight = "normal";
    document.getElementById('eligibility_btn').style.background = "#F9F9F7";
    document.getElementById('eligibility_btn').style.fontWeight = "normal";
}

function showShop(){
    document.getElementById('topshop').style.display = "none";
    document.getElementById('topmake').style.display = "none";
    document.getElementById('shop_cat').style.display = "block";
    document.getElementById('make_money').style.display = "none";
    document.getElementById('cashback').style.display = "none"; 
    document.getElementById('eligibility').style.display = "none";

    document.getElementById('shopper_btn').style.background = "#D5D3C6";
    document.getElementById('shopper_btn').style.fontWeight = "bold";
    document.getElementById('makemoney_btn').style.background = "#F9F9F7";
    document.getElementById('makemoney_btn').style.fontWeight = "normal";
    document.getElementById('cashback_btn').style.background = "#F9F9F7";
    document.getElementById('cashback_btn').style.fontWeight = "normal";
    document.getElementById('eligibility_btn').style.background = "#F9F9F7";
    document.getElementById('eligibility_btn').style.fontWeight = "normal";
}

function showMakeMoney(){
    document.getElementById('topshop').style.display = "none";
    document.getElementById('topmake').style.display = "none";
    document.getElementById('shop_cat').style.display = "none";
    document.getElementById('make_money').style.display = "block";
    document.getElementById('cashback').style.display = "none"; 
    document.getElementById('eligibility').style.display = "none";

    document.getElementById('shopper_btn').style.background = "#F9F9F7";
    document.getElementById('shopper_btn').style.fontWeight = "normal";
    document.getElementById('makemoney_btn').style.background = "#D5D3C6";
    document.getElementById('makemoney_btn').style.fontWeight = "bold";
    document.getElementById('cashback_btn').style.background = "#F9F9F7";
    document.getElementById('cashback_btn').style.fontWeight = "normal";
    document.getElementById('eligibility_btn').style.background = "#F9F9F7";
    document.getElementById('eligibility_btn').style.fontWeight = "normal";
}

function showCashback(){
    document.getElementById('topshop').style.display = "none";
    document.getElementById('topmake').style.display = "none";
    document.getElementById('shop_cat').style.display = "none";
    document.getElementById('make_money').style.display = "none";
    document.getElementById('cashback').style.display = "block";
    document.getElementById('eligibility').style.display = "none";

    document.getElementById('shopper_btn').style.background = "#F9F9F7";
    document.getElementById('shopper_btn').style.fontWeight = "normal";
    document.getElementById('makemoney_btn').style.background = "#F9F9F7";
    document.getElementById('makemoney_btn').style.fontWeight = "normal";
    document.getElementById('cashback_btn').style.background = "#D5D3C6";
    document.getElementById('cashback_btn').style.fontWeight = "bold";
    document.getElementById('eligibility_btn').style.background = "#F9F9F7";
    document.getElementById('eligibility_btn').style.fontWeight = "normal";
}
function showEligibility(){
    document.getElementById('topshop').style.display = "none";
    document.getElementById('topmake').style.display = "none";    
    document.getElementById('shop_cat').style.display = "none";
    document.getElementById('make_money').style.display = "none";
    document.getElementById('cashback').style.display = "none";
    document.getElementById('eligibility').style.display = "block";

    document.getElementById('shopper_btn').style.background = "#F9F9F7";
    document.getElementById('shopper_btn').style.fontWeight = "normal";
    document.getElementById('makemoney_btn').style.background = "#F9F9F7";
    document.getElementById('makemoney_btn').style.fontWeight = "normal";
    document.getElementById('cashback_btn').style.background = "#F9F9F7";
    document.getElementById('cashback_btn').style.fontWeight = "normal";
    document.getElementById('eligibility_btn').style.background = "#D5D3C6";
    document.getElementById('eligibility_btn').style.fontWeight = "bold";
}

$(document).ready(function(){
    $("#topshop1q").click(function(){
        $("#topshop1a").toggle(250);
        });
    $("#topshop2q").click(function(){
        $("#topshop2a").toggle(250);
        });
    $("#topshop3q").click(function(){
        $("#topshop3a").toggle(250);
        });
    $("#topshop12q").click(function(){
        $("#topshop12a").toggle(250);
        });
    $("#topshop13q").click(function(){
        $("#topshop13a").toggle(250);
        });
    $("#topshop14q").click(function(){
        $("#topshop14a").toggle(250);
        });
    $("#topshop15q").click(function(){
        $("#topshop15a").toggle(250);
        });
    $("#topshop16q").click(function(){
        $("#topshop16a").toggle(250);
        });
    $("#topshop19q").click(function(){
        $("#topshop19a").toggle(250);
        })
    $("#topshop37q").click(function(){
        $("#topshop37a").toggle(250);
        });
    $("#view_top10_shop").click(function(){
        $("#topshop1a").toggle(250);
        $("#topshop2a").toggle(250);
        $("#topshop3a").toggle(250);
        $("#topshop12a").toggle(250);
        $("#topshop13a").toggle(250);
        $("#topshop14a").toggle(250);
        $("#topshop15a").toggle(250);
        $("#topshop16a").toggle(250);
        $("#topshop19a").toggle(250);
        $("#topshop37a").toggle(250);
        });


    $("#topmake1q").click(function(){
        $("#topmake1a").toggle(250);
        });
    $("#topmake2q").click(function(){
        $("#topmake2a").toggle(250);
        });
    $("#topmake3q").click(function(){
        $("#topmake3a").toggle(250);
        });
    $("#topmake4q").click(function(){
        $("#topmake4a").toggle(250);
        });
    $("#topmake5q").click(function(){
        $("#topmake5a").toggle(250);
        });
    $("#topmake6q").click(function(){
        $("#topmake6a").toggle(250);
        });
    $("#topmake7q").click(function(){
        $("#topmake7a").toggle(250);
        });
    $("#topmake8q").click(function(){
        $("#topmake8a").toggle(250);
        });
    $("#topmake9q").click(function(){
        $("#topmake9a").toggle(250);
        });
    $("#topmake10q").click(function(){
        $("#topmake10a").toggle(250);
        });
    $("#view_top10_money").click(function(){
        $("#topmake1a").toggle(250);
        $("#topmake2a").toggle(250);
        $("#topmake3a").toggle(250);
        $("#topmake4a").toggle(250);
        $("#topmake5a").toggle(250);
        $("#topmake6a").toggle(250);
        $("#topmake7a").toggle(250);
        $("#topmake8a").toggle(250);
        $("#topmake9a").toggle(250);
        $("#topmake10a").toggle(250);
        });


    $("#shop1q").click(function(){
        $("#shop1a").toggle(250);
        });
    $("#shop2q").click(function(){
        $("#shop2a").toggle(250);
        });
    $("#shop3q").click(function(){
        $("#shop3a").toggle(250);
        });
    $("#shop4q").click(function(){
        $("#shop4a").toggle(250);
        });
    $("#shop5q").click(function(){
        $("#shop5a").toggle(250);
        });
    $("#shop6q").click(function(){
        $("#shop6a").toggle(250);
        });
    $("#shop7q").click(function(){
        $("#shop7a").toggle(250);
        });
    $("#shop8q").click(function(){
        $("#shop8a").toggle(250);
        });
    $("#shop9q").click(function(){
        $("#shop9a").toggle(250);
        });
    $("#shop10q").click(function(){
        $("#shop10a").toggle(250);
        });
    $("#shop11q").click(function(){
        $("#shop11a").toggle(250);
        });
    $("#shop12q").click(function(){
        $("#shop12a").toggle(250);
        });
    $("#shop13q").click(function(){
        $("#shop13a").toggle(250);
        });
    $("#shop14q").click(function(){
        $("#shop14a").toggle(250);
        });
    $("#shop15q").click(function(){
        $("#shop15a").toggle(250);
        });
    $("#shop16q").click(function(){
        $("#shop16a").toggle(250);
        });
    $("#shop17q").click(function(){
        $("#shop17a").toggle(250);
        });
    $("#shop18q").click(function(){
        $("#shop18a").toggle(250);
        });
    $("#shop19q").click(function(){
        $("#shop19a").toggle(250);
        });
    $("#shop20q").click(function(){
        $("#shop20a").toggle(250);
        });
    $("#shop21q").click(function(){
        $("#shop21a").toggle(250);
        });
    $("#shop22q").click(function(){
        $("#shop22a").toggle(250);
        });
    $("#shop23q").click(function(){
        $("#shop23a").toggle(250);
        });
    $("#shop24q").click(function(){
        $("#shop24a").toggle(250);
        });
    $("#shop25q").click(function(){
        $("#shop25a").toggle(250);
        });
    $("#shop26q").click(function(){
        $("#shop26a").toggle(250);
        });
    $("#shop27q").click(function(){
        $("#shop27a").toggle(250);
        });
    $("#shop28q").click(function(){
        $("#shop28a").toggle(250);
        });
    $("#shop29q").click(function(){
        $("#shop29a").toggle(250);
        });
    $("#shop30q").click(function(){
        $("#shop30a").toggle(250);
        });
    $("#shop31q").click(function(){
        $("#shop31a").toggle(250);
        });
    $("#shop32q").click(function(){
        $("#shop32a").toggle(250);
        });
    $("#shop33q").click(function(){
        $("#shop33a").toggle(250);
        });
    $("#shop34q").click(function(){
        $("#shop34a").toggle(250);
        });
    $("#shop35q").click(function(){
        $("#shop35a").toggle(250);
        });
    $("#shop36q").click(function(){
        $("#shop36a").toggle(250);
        });
    $("#shop37q").click(function(){
        $("#shop37a").toggle(250);
        });
    $("#shop38q").click(function(){
        $("#shop38a").toggle(250);
        });
    $("#shop39q").click(function(){
        $("#shop39a").toggle(250);
        });
    $("#shop40q").click(function(){
        $("#shop40a").toggle(250);
        });

    $("#make1q").click(function(){
        $("#make1a").toggle(250);
        });
    $("#make2q").click(function(){
        $("#make2a").toggle(250);
        });
    $("#make3q").click(function(){
        $("#make3a").toggle(250);
        });
    $("#make4q").click(function(){
        $("#make4a").toggle(250);
        });
    $("#make5q").click(function(){
        $("#make5a").toggle(250);
        });
    $("#make6q").click(function(){
        $("#make6a").toggle(250);
        });
    $("#make7q").click(function(){
        $("#make7a").toggle(250);
        });
    $("#make8q").click(function(){
        $("#make8a").toggle(250);
        });
    $("#make9q").click(function(){
        $("#make9a").toggle(250);
        });
    $("#make10q").click(function(){
        $("#make10a").toggle(250);
        });
    $("#make11q").click(function(){
        $("#make11a").toggle(250);
        });
    $("#make12q").click(function(){
        $("#make12a").toggle(250);
        });
    $("#make13q").click(function(){
        $("#make13a").toggle(250);
        });
    $("#make14q").click(function(){
        $("#make14a").toggle(250);
        });

    $("#cashback1q").click(function(){
        $("#cashback1a").toggle(250);
        });
    $("#cashback2q").click(function(){
        $("#cashback2a").toggle(250);
        });
    $("#cashback3q").click(function(){
        $("#cashback3a").toggle(250);
        });
    $("#cashback4q").click(function(){
        $("#cashback4a").toggle(250);
        });
    $("#cashback5q").click(function(){
        $("#cashback5a").toggle(250);
        });
    $("#cashback6q").click(function(){
        $("#cashback6a").toggle(250);
        });
    $("#cashback7q").click(function(){
        $("#cashback7a").toggle(250);
        });
    $("#cashback8q").click(function(){
        $("#cashback8a").toggle(250);
        });
    $("#cashback9q").click(function(){
        $("#cashback9a").toggle(250);
        });
    $("#cashback10q").click(function(){
        $("#cashback10a").toggle(250);
        });
    $("#cashback11q").click(function(){
        $("#cashback11a").toggle(250);
        });
    $("#cashback12q").click(function(){
        $("#cashback12a").toggle(250);
        });
    $("#cashback13q").click(function(){
        $("#cashback13a").toggle(250);
        });
    $("#cashback14q").click(function(){
        $("#cashback13a").toggle(250);
        });


    $("#eligibility1q").click(function(){
        $("#eligibility1a").toggle(250);
        });
    $("#eligibility2q").click(function(){
        $("#eligibility2a").toggle(250);
        });
    $("#eligibility3q").click(function(){
        $("#eligibility3a").toggle(250);
        });
    $("#eligibility4q").click(function(){
        $("#eligibility4a").toggle(250);
        });
    $("#eligibility5q").click(function(){
        $("#eligibility5a").toggle(250);
        });
    $("#eligibility6q").click(function(){
        $("#eligibility6a").toggle(250);
        });
    $("#eligibility7q").click(function(){
        $("#eligibility7a").toggle(250);
        });
    $("#eligibility8q").click(function(){
        $("#eligibility8a").toggle(250);
        });
    $("#eligibility9q").click(function(){
        $("#eligibility9a").toggle(250);
        });
    $("#eligibility10q").click(function(){
        $("#eligibility10a").toggle(250);
        });
    $("#eligibility11q").click(function(){
        $("#eligibility11a").toggle(250);
        });
    });  
    </script>


<style type="text/css">

    .md-modal{

        left: 40%;

    }

</style>



	<script type="text/javascript">

	   jQuery(document).ready(function($){

			$( "p" ).click(function() {

				$( this ).toggleClass( "open" );

			});

	   });

	</script>



<style type="text/css">

@media only screen and (min-device-width : 719px) and (max-device-width : 721px) and (-webkit-min-device-pixel-ratio : 2) and (orientation : portrait) { 

	#faq_nav ul li{

		display: list-item !important;

	}

}

	#column_center h1{

		margin-bottom: 0px;

	}

	.closed{

	    background-image: url("img/grey_arrow_right.png");

	    background-position: 580px center;

	    background-repeat: no-repeat;

	}

	.open{

	    background-image: url("img/grey_arrow_down.png");

	    background-position: 578px center;

	}

</style>

	<span style="clear:both;"></span>



	

    <div id="faq">

 

        <div>

            <h1> Frequently Asked Questions </h1>

            <img id="faq_divider" src="img/images/divider.jpg" alt="divider" />

            <p>We ask all Cash Back Kaboom members to please read through these Frequently Asked Questions before submitting an online support request; your question may be answered below.</p>

        </div><br />



		<div id="faq_nav" >

			<ul style="list-style-type: none;  margin-top: 40px;">

				<li onclick="showShop()"><span style="background: #F9F9F7;" id="shopper_btn" >Shopping FAQs</span></li>

				<li onclick="showMakeMoney()"><span style="background: #F9F9F7;"id="makemoney_btn" >Make Money FAQs</span></li>

				<li onclick="showCashback()"> <span style="background: #F9F9F7;"id="cashback_btn" >Cash Back FAQs</span></li>

				<li onclick="showEligibility()"><span style="background: #F9F9F7;"id="eligibility_btn" >Eligibility  FAQs</span></li>

			</ul>

		</div>



		<div id="topshop"  style="margin-top: 40px;">

			<h1>Top 10 Shopping FAQs</h1>

	        <p class="closed" id="topshop1q"><span style="cursor:pointer"><strong> I placed an order, when does "pending" cash back show up in my account?</strong></span></p>

	            <div id="topshop1a" style="display:none;">

	                <p style="background: none; margin-left: 25px;">Most merchants report a purchase to us in just a few days; others may take up to 2-3 weeks from the shipping date. No cash back will show in your account until the merchant reports to us. When they do, it is automatically posted to your account as “pending”. It remains “pending” while the merchant allows time for returns, exchanges, or cancelled orders. When the transaction fully clears and the merchant knows you’re satisfied with your purchase, your “pending” cash back is then posted as “available” cash back and may be withdrawn if the total available is $50 or more. <br /><br /> If you don't see anything posted to your account within 30 days, please send us complete order information on a Customer Support Request. <br /><br /><span class="redfaq">Remember:</span> Some travel merchants send us only an initial report or may send nothing at all until after your itinerary is complete.   </p>

	            </div>

	        <p class="closed" id="topshop2q"><span style="cursor:pointer"><strong>  While shopping, can I browse other sites and still get cash back?</strong></span></p>

	            <div id="topshop2a" style="display:none;">

	                <p style="background: none; margin-left: 25px;">Unfortunately, no.  Browsing other websites and/or clicking on ads that take you to other websites while shopping will disconnect your Cash Back Kaboom Member ID code that tracks your shopping activity. If you click off a merchant website while shopping, it is imperative that you come back to CashBackKaboom.com and once again click on the merchant to reconnect your tracking code.<br /><br /> <span class="redfaq">Important!</span>  To get credit for cash back, it is important to click to a merchant website from Cash Back Kaboom, put items in the shopping cart and complete your transaction.  </p>

	            </div>

	        <p class="closed" id="topshop3q"><span style="cursor:pointer"><strong> I think I may not have been credited with cash back. What should I do?</strong></span></p>

	            <div id="topshop3a" style="display:none;">

	                <p style="background: none; margin-left: 25px;">It is always our goal to get you all the cash back to which you're entitled! If you believe you were not credited cash back from a transaction, please contact Customer Support with a Cash Back Inquiry claim and the Crew from Cash Back Kaboom will look into it right away.<br /><br /> <span class="redfaq">Important!</span>  Please be sure to retain all transaction receipts sent to you from merchants, just in case you need to submit a Cash Back Inquiry claim. </p>

	            </div>

	        <p class="closed" id="topshop12q"><span style="cursor:pointer"><strong> How do I get paid?</strong></span></p>

	            <div id="topshop12a" style="display:none;">

	                <p style="background: none; margin-left: 25px;">To get paid, simply click on “My Account” and then “Withdraw Funds.”  There you can view your “Available Balance.”   Once you have an available balance of at least $50, you can choose to withdraw any amount--or all of it--and have it sent right to your bank account or put on a debit card.</p>

	            </div>

	        <p class="closed" id="topshop13q"><span style="cursor:pointer"><strong>  How do you track shopping activity and reward me with cash back?</strong></span></p>

	            <div id="topshop13a" style="display:none;">

	                <p style="background: none; margin-left: 25px;">When you sign up for your free membership, you are automatically provided a unique Member ID# that tracks your shopping activity.  Every time you log in to Cash Back Kaboom, your Member ID# activates.  When you click on a merchant link, your ID# follows you to the merchant website.  When you make a purchase, the merchant recognizes you as a Cash Back Kaboom member and thanks you for shopping by paying you cash back. <br /><br /><span class="redfaq">Please note:</span>  Your cash back does not show up in the merchant's shopping cart at checkout.  It is usually credited to your Cash Back Kaboom account within a few days as “Pending Cash Back.”</p>

	            </div>

	        <p class="closed" id="topshop14q"><span style="cursor:pointer"><strong>  What is “Pending” and “Available” Cash Back?</strong></span></p>

	            <div id="topshop14a" style="display:none;">

	                <p style="background: none; margin-left: 25px;">If you have a “Pending Cash Back” amount, it means that you have made a qualified purchase and the merchant has reported the transaction to us. It remains “pending” while the merchant allows time for returns, exchanges, or cancelled orders. When the transaction fully clears and the merchant knows you’re satisfied with your purchase, your “pending” cash back is then posted as “available” cash back and may be withdrawn if the total available is $50 or more.<br /><br /> <span class="redfaq">Please note:</span>   Each merchant has its own time period to allow for returns, exchanges and cancelled orders. Most purchases go to “Pending” within 1-5 business days. They may stay in a “Pending” state for up to 60 days before becoming “Available.” Most travel transactions become “Available” cash back upon the date the travel is concluded.</p>

	            </div>

	        <p class="closed" id="topshop15q"><span style="cursor:pointer"><strong>  What can I do to make sure I receive cash back?</strong></span></p>

	            <div id="topshop15a" style="display:none;">

	                <p style="background: none; margin-left: 25px;">  •	Always log in to your account through the Cash Back Kaboom website to begin shopping. <br /><br />

													•	Enable cookies on your browser. Our partner merchants use cookies to track your purchases so you can get cash back.  <br /><br />

													•	Always link to a merchant website through Cash Back Kaboom. <br /><br />

													•	Always stay on a merchant website until you finish your transaction.  Browsing or clicking off a merchant website will disconnect your tracking code. <br /><br />

													•	Add items to the merchant's shopping cart and complete the transaction.  <br /><br />

													•	Only shop from emails you receive from Cash Back Kaboom. <br /><br />

													•	Only use coupons you find on the Cash Back Kaboom website. <br /><br />

													•	When shopping, do not click off a merchant website and come back and shop.  When you leave the merchant website your tracking code disconnects. <br /><br />

													•	If you click off a merchant website while shopping, click back to Cash Back Kaboom and then once again link to the merchant and shop. <br /><br />

													•	To earn cash back, some merchants require that your shopping cart be empty when you click from Cash Back Kaboom to the store's website.  <br /><br />

													•	Be sure to retain all transaction receipts sent to you from merchants, just in case you need to submit a Cash Back Inquiry claim..  <br /><br />

													</p>

	            </div>

	        <p class="closed" id="topshop16q"><span style="cursor:pointer"><strong>  What will prevent me from earning cash back?</strong></span></p>

	            <div id="topshop16a" style="display:none;">

	                <p style="background: none; margin-left: 25px;">  •	You do not log in and begin shopping through cashbackkaboom.com.  <br /><br />

													•	You do not enable cookies on your browser before shopping. <br /><br />

													•	You type a merchant address into the browser and go directly to a merchant website rather than linking to them through Cash Back Kaboom.  <br /><br />

													•	You're on a merchant website and click off to visit another website, or you click on a special offer or paid ad that takes you to another website.  <br /><br />

													•	You use a coupon or a special offer code from another website or coupon site and apply it at checkout.  <br /><br />

													•	You receive an email from a merchant, click a link in it, and go to their website to shop. <br /><br />  

													•	You purchase products that were already in your shopping cart from a previous visit to the merchant. <br /><br />

													</p>

	            </div>

	        <p class="closed" id="topshop19q"><span style="cursor:pointer"><strong>  Can I use a coupon from another site and still get cash back?</strong></span></p>

	            <div id="topshop19a" style="display:none;">

	                <p style="background: none; margin-left: 25px;">  Unfortunately, no.  Most coupon codes or coupon links you find outside of Cash Back Kaboom will void our cash back on your purchases. <br /><br />



													Coupons from random internet websites, including coupon sites, are often linked to specific tracking codes that pay those websites--not you. This means that, when a non-Cash Back Kaboom code is used in a transaction, the other site will automatically get credit for your purchase, regardless of whether you clicked through from Cash Back Kaboom before ordering.<br /><br />



													<span class="redfaq">Please note:</span>  If you receive an email from a merchant (even if it is a partner merchant on our site) and click through to their site from that email to shop, you will not get credit for the transaction.  However, you will receive cash back when you shop from an email sent directly to you from Cash Back Kaboom.

													</p>

	            </div>

	        <p class="closed" id="topshop37q"><span style="cursor:pointer"><strong>  I've forgotten my email/password.  What do I do?</strong></span></p>

	            <div id="topshop37a" style="display:none;">

	                <p style="background: none; margin-left: 25px;">Just click on the Member Login link on the top of the page and click on “Forgot your password?”</p>

	            </div>

	            <p class="closed" id="view_top10_shop"><span style="cursor:pointer"><strong style="text-decoration: underline;"> View All</strong></span></p>

		</div>



		<div id="topmake"  style="margin-top: 40px;">

			<h1>Top 10 Make Money FAQs</h1>

	        <p class="closed" id="topmake1q"><span style="cursor:pointer"><strong>  How does the Cash Back Kaboom "Invite-a-Friend" program work?</strong></span></p>

	            <div id="topmake1a" style="display:none;">

	                <p style="background: none; margin-left: 25px;">It’s simple. Just invite your friends to sign up for their free Cash Back Kaboom membership. When they join, you get credit for the referral, and they are automatically added to your shopping network. When they shop, you receive part of the cash back we receive from our partner merchants.</p>

	            </div>



	        <p class="closed" id="topmake2q"><span style="cursor:pointer"><strong>  What methods can I use to invite people to join?</strong></span></p>

	            <div id="topmake2a" style="display:none;">

	                <p style="background: none; margin-left: 25px;">Cash Back Kaboom offers several "Invite-A-Friend" tools to help you recruit other members. Just click on the Invite Friends page to view fast and easy methods you can use, including Facebook, Twitter, email, blogs and Cash back Kaboom brochures.</p>



	            </div>



	        <p class="closed" id="topmake3q"><span style="cursor:pointer"><strong> How do I get credit for a referral? </strong></span></p>

	            <div id="topmake3a" style="display:none;">

	                <p style="background: none; margin-left: 25px;">When you join, you are given a unique Member ID#, which is imbedded in all the invitation methods on the Invite Friends page. When the recipient clicks on the invitation you sent, your Member ID# activates and the member is directed to your Sign Up page.  <br /><br />



												<span class="redfaq">Please note:</span>  When a person joins through your invitation, you get credit for the referral and the new member is automatically added to the 2nd level of your shopping network. When that member shops you are paid a percentage of the posted cash back. 

												</p>

	            </div>



	        <p class="closed" id="topmake4q"><span style="cursor:pointer"><strong>  I invited a person who went directly to Cashbackkaboom.com and joined;<br /> can I get still credit for the referral?</strong></span></p>

	            <div id="topmake4a" style="display:none;">

	                <p style="background: none; margin-left: 25px;">Unfortunately, you cannot. In order for you to get credit for a referral, we need to know where it came from.  The member you invite must join by clicking to Cashbackkaboom.com through your invitation link or using the Member ID# on the back of Cash Back Kaboom brochures.  <br /><br />

 

													<span class="redfaq">Please note:</span>  If you suspect that a member you invited forgot to use your invite link to join, please notify us and we will gladly insert them into your shopping network.

													</p>

	            </div>



	        <p class="closed" id="topmake5q"><span style="cursor:pointer"><strong>  How do I get paid?</strong></span></p>

	            <div id="topmake5a" style="display:none;">

	                <p style="background: none; margin-left: 25px;">To get paid, simply click on “My Account” and then “Withdraw Funds.”  There you can view your “Available Balance.”   Once you have an available balance of at least $50, you can choose to withdraw any amount--or all of it--and have it sent right to your bank account or put on a debit card.</p>

	            </div>



	        <p class="closed" id="topmake6q"><span style="cursor:pointer"><strong>  How many shopping levels can I get paid on?</strong></span></p>

	            <div id="topmake6a" style="display:none;">

	                <p style="background: none; margin-left: 25px;">You receive cash back on your personal shopping (shopping level 1), the people you personally invite (shopping level 2) and all subsequent referrals by members in your network for levels 3-10.<br /><br />



													<span class="redfaq">Hot Tip!</span>  Cash Back Kaboom doubles the cash back on all shopping by members on your 10th shopping level!

													</p>

	            </div>



	        <p class="closed" id="topmake7q"><span style="cursor:pointer"><strong> How do I find out how many members are in my shopping network?</strong></span></p>

	            <div id="topmake7a" style="display:none;">

	                <p style="background: none; margin-left: 25px;">Click the “My Account” tab at the top of the page, and then click “My Shopping Network.”</p>

	            </div>



	        <p class="closed" id="topmake8q"><span style="cursor:pointer"><strong>  Can I post my referral link on a merchant's Facebook or Twitter page?</strong></span></p>

	            <div id="topmake8a" style="display:none;">

	                <p style="background: none; margin-left: 25px;">Absolutely not. Posting any referral link on a merchant's Facebook or Twitter page to invite their customers to join Cash Back Kaboom is in direct violation of your Member Agreement and is grounds for immediate termination from the Cash Back Kaboom program and forfeiture of all Pending and Available cash back owed.</p>

	            </div>



	        <p class="closed" id="topmake9q"><span style="cursor:pointer"><strong>  How do I use the Cash Back Kaboom brochure to invite people?</strong></span></p>

	            <div id="topmake9a" style="display:none;">

	                <p style="background: none; margin-left: 25px;">When you order a brochure, it comes printed with your unique member ID# on the back (cashbackkaboom.com/yourID). Simply hand out the brochures or place brochure displays in any high traffic area.  When people pick up the brochure and use cashbackkaboom.com/yourID# to join, they are automatically placed on level 2 of your shopping network.<br /><br />



													<span class="redfaq">Hot Tip!</span>  The best way to get owners of coffee shops, hair salons, restaurants and bars, health clubs, etc., to display brochures is to invite them to join. They will be added to level 2 of your shopping network. They order brochures printed with their Member ID# and display them in their business--and you both benefit from all subsequent enrollments. 

													</p>

	            </div>

	        <p class="closed" id="topmake10q"><span style="cursor:pointer"><strong> Can I sign up nonprofits, schools and organizations that need to raise<br /> money?</strong></span></p>

	            <div id="topmake10a" style="display:none;">

	                <p style="background: none; margin-left: 25px;">Yes. Simply sign them up and they can pass out brochures at any functions or fundraising activities. Plus, Cash Back Kaboom can provide banner ads for websites that need to raise funds. When their followers shop, they get cash back--and so does the organization (and you do, too)!  Plus, when the followers invite others, the organization continues to receive cash back on all subsequent referral shopping, up to 10 levels.   </p>

	            </div>
	            <p class="closed" id="view_top10_money"><span style="cursor:pointer"><strong style="text-decoration: underline;"> View All</strong></span></p>
		</div>

	    <div id="shop_cat"  style="margin-top: 40px; display:none;">

	        <h1>Shopping FAQs</h1>

	        <p class="closed" id="shop1q"><span style="cursor:pointer"><strong>  I placed an order, when does "pending" cash back show up in my account?</strong></span></p>

	            <div id="shop1a" style="display:none;">

	                <p style="background: none; margin-left: 25px;">Most merchants report a purchase to us in just a few days; others may take up to 2-3 weeks from the shipping date. No cash back will show in your account until the merchant reports to us. When they do, it is automatically posted to your account as “pending”. It remains “pending” while the merchant allows time for returns, exchanges, or cancelled orders. When the transaction fully clears and the merchant knows you’re satisfied with your purchase, your “pending” cash back is then posted as “available” cash back and may be withdrawn if the total available is $50 or more. <br /><br /> If you don't see anything posted to your account within 30 days, please send us complete order information on a Customer Support Request. <br /><br /><span class="redfaq">Remember:</span> Some travel merchants send us only an initial report or may send nothing at all until after your itinerary is complete.   </p>

	            </div>



	        <p class="closed" id="shop2q"><span style="cursor:pointer"><strong>  While shopping, can I browse other sites and still get cash back?</strong></span></p>

	            <div id="shop2a" style="display:none;">

	                <p style="background: none; margin-left: 25px;">Unfortunately, no.  Browsing other websites and/or clicking on ads that take you to other websites while shopping will disconnect your Cash Back Kaboom Member ID code that tracks your shopping activity. If you click off a merchant website while shopping, it is imperative that you come back to CashBackKaboom.com and once again click on the merchant to reconnect your tracking code.<br /><br /> <span class="redfaq">Important!</span>  To get credit for cash back, it is important to click to a merchant website from Cash Back Kaboom, put items in the shopping cart and complete your transaction.  </p>

	            </div>



	        <p class="closed" id="shop3q"><span style="cursor:pointer"><strong>   I think I may not have been credited with cash back. What should I do?</strong></span></p>

	            <div id="shop3a" style="display:none;">

	                <p style="background: none; margin-left: 25px;">It is always our goal to get you all the cash back to which you're entitled! If you believe you were not credited cash back from a transaction, please contact Customer Support with a Cash Back Inquiry claim and the Crew from Cash Back Kaboom will look into it right away.<br /><br /> <span class="redfaq">Important!</span>  Please be sure to retain all transaction receipts sent to you from merchants, just in case you need to submit a Cash Back Inquiry claim. </p>

	            </div>



	        <p class="closed" id="shop4q"><span style="cursor:pointer"><strong> Am I buying directly from Cash Back Kaboom?</strong></span></p>

	            <div id="shop4a" style="display:none;">

	                <p style="background: none; margin-left: 25px;">No, you are not. Cash Back Kaboom is not a store and does not sell any products.  Cash Back Kaboom is a shopping service that pays you cash back when you shop from any of the partner merchants listed on our website. If you have a question about the product(s) you ordered from a partner merchant through our website, please contact the merchant directly.</p>

	            </div>



	        <p class="closed" id="shop5q"><span style="cursor:pointer"><strong>   How do I sign up to get my Free Cash Back Kaboom membership?</strong></span></p>

	            <div id="shop5a" style="display:none;">

	                <p style="background: none; margin-left: 25px;">It’s easy! Just register your name, email address and a password with Cash Back Kaboom and you’re eligible to shop and receive cash back from more than 1,500 affiliated merchants. Plus, your free membership entitles you to earn cash back when other members shop throughout your shopping network. </p>

	            </div>



	        <p class="closed" id="shop6q"><span style="cursor:pointer"><strong>  How many Cash Back Kaboom partner merchants offer cash back?</strong></span></p>

	            <div id="shop6a" style="display:none;">

	                <p style="background: none; margin-left: 25px;">They all do! Cash Back Kaboom members receive special deals, deep discount coupons and up to 30% cash back on purchases from more than 1,500 merchants.<br /><br />  <span class="redfaq">Please note:</span>  Due to the fact that some merchants have many different products across many categories, they may not offer the same cash back on all products or services that they offer.  For cash back availability, please check the Conditions listed under each merchant's description.</p>

	            </div>



	        <p class="closed" id="shop7q"><span style="cursor:pointer"><strong>  Do I need to do anything special to get cash back?</strong></span></p>

	            <div id="shop7a" style="display:none;">

	                <p style="background: none; margin-left: 25px;">No, nothing special at all. Just log in and start your shopping experience at Cash Back Kaboom. Click on a merchant's links, coupons or special deals, and off you go to the merchant's website.  There, you purchase items and check out as you normally would. The cash back will be reported to your Cash Back Kaboom account as “Pending Cash Back,” usually within 1-7 business days after the ship date of your order--or sometimes even earlier, depending on the merchant's reporting policy.<br /><br /><span class="redfaq">Important!</span>  Make sure that you enable cookies on your browser while you are shopping. To know that you are a Cash Back Kaboom member, our merchants use cookies to track your purchase so you can get cash back. Remember, if the store doesn't track your purchase, Cash Back Kaboom does not receive a referral fee, which means we can't pay the cash back.</p>

	            </div>



	        <p class="closed" id="shop8q"><span style="cursor:pointer"><strong>  Who is responsible for transactions that take place on a merchant's website? </strong></span></p>

	            <div id="shop8a" style="display:none;">

	                <p style="background: none; margin-left: 25px;">Once you click on a merchant and visit their website, the merchant is responsible for all phases of the transaction that takes place. This includes but is not limited to adding items to the shopping cart, applying acceptable coupons, accepting payment at checkout, shipping/handling, returns, exchanges, back orders and customer support. </p>

	            </div>



	        <p class="closed" id="shop9q"><span style="cursor:pointer"><strong>  How does Cash Back Kaboom calculate my cash back? </strong></span></p>

	            <div id="shop9a" style="display:none;">

	                <p style="background: none; margin-left: 25px;">Cash back is calculated and awarded on the basis of the purchase amount, excluding taxes and shipping and special handling charges. Fees for additional services (such as gift wrapping) as well as any portion of the price covered by a gift certificate, online coupons or a merchant credit are generally excluded from generating cash back. </p>

	            </div>

	        <p class="closed" id="shop10q"><span style="cursor:pointer"><strong>  How much cash back do merchants pay?</strong></span></p>

	            <div id="shop10a" style="display:none;">

	                <p style="background: none; margin-left: 25px;">Each merchant pays a different amount of cash back, ranging anywhere from 1% to 25%. Please note that you may see “Up to” before the posted cash back amount. We do this because a merchant may be selling many different products and services in multiple categories with varying cash back amounts. Rest assured, we will get you the highest cash back possible on every purchase you make.</p>

	            </div>

	        <p class="closed" id="shop11q"><span style="cursor:pointer"><strong>   Why do your partner merchants pay you cash-back? </strong></span></p>

	            <div id="shop11a" style="display:none;">

	                <p style="background: none; margin-left: 25px;">It’s simple. Our partner merchants want business from the fastest-growing shopping club in the world! We direct our member shoppers to their websites and they reward us with cash back. We keep a tiny bit of the cash back to run the Cash Back Kaboom program and pass the remainder on to our loyal members.</p>

	            </div>

	        <p class="closed" id="shop12q"><span style="cursor:pointer"><strong>  How do I get paid?</strong></span></p>

	            <div id="shop12a" style="display:none;">

	                <p style="background: none; margin-left: 25px;">To get paid, simply click on “My Account” and then “Withdraw Funds.”  There you can view your “Available Balance.”   Once you have an available balance of at least $50, you can choose to withdraw any amount--or all of it--and have it sent right to your bank account or put on a debit card.</p>

	            </div>

	        <p class="closed" id="shop13q"><span style="cursor:pointer"><strong>  How do you track shopping activity and reward me with cash back?</strong></span></p>

	            <div id="shop13a" style="display:none;">

	                <p style="background: none; margin-left: 25px;">When you sign up for your free membership, you are automatically provided a unique Member ID# that tracks your shopping activity.  Every time you log in to Cash Back Kaboom, your Member ID# activates.  When you click on a merchant link, your ID# follows you to the merchant website.  When you make a purchase, the merchant recognizes you as a Cash Back Kaboom member and thanks you for shopping by paying you cash back. <br /><br /><span class="redfaq">Please note:</span>  Your cash back does not show up in the merchant's shopping cart at checkout.  It is usually credited to your Cash Back Kaboom account within a few days as “Pending Cash Back.”</p>

	            </div>

	        <p class="closed" id="shop14q"><span style="cursor:pointer"><strong>  What is “Pending” and “Available” Cash Back?</strong></span></p>

	            <div id="shop14a" style="display:none;">

	                <p style="background: none; margin-left: 25px;">If you have a “Pending Cash Back” amount, it means that you have made a qualified purchase and the merchant has reported the transaction to us. It remains “pending” while the merchant allows time for returns, exchanges, or cancelled orders. When the transaction fully clears and the merchant knows you’re satisfied with your purchase, your “pending” cash back is then posted as “available” cash back and may be withdrawn if the total available is $50 or more.<br /><br /> <span class="redfaq">Please note:</span>   Each merchant has its own time period to allow for returns, exchanges and cancelled orders. Most purchases go to “Pending” within 1-5 business days. They may stay in a “Pending” state for up to 60 days before becoming “Available.” Most travel transactions become “Available” cash back upon the date the travel is concluded.</p>

	            </div>

	        <p class="closed" id="shop15q"><span style="cursor:pointer"><strong>  What can I do to make sure I receive cash back?</strong></span></p>

	            <div id="shop15a" style="display:none;">

	                <p style="background: none; margin-left: 25px;">  •	Always log in to your account through the Cash Back Kaboom website to begin shopping. <br /><br />

													•	Enable cookies on your browser. Our partner merchants use cookies to track your purchases so you can get cash back.  <br /><br />

													•	Always link to a merchant website through Cash Back Kaboom. <br /><br />

													•	Always stay on a merchant website until you finish your transaction.  Browsing or clicking off a merchant website will disconnect your tracking code. <br /><br />

													•	Add items to the merchant's shopping cart and complete the transaction.  <br /><br />

													•	Only shop from emails you receive from Cash Back Kaboom. <br /><br />

													•	Only use coupons you find on the Cash Back Kaboom website. <br /><br />

													•	When shopping, do not click off a merchant website and come back and shop.  When you leave the merchant website your tracking code disconnects. <br /><br />

													•	If you click off a merchant website while shopping, click back to Cash Back Kaboom and then once again link to the merchant and shop. <br /><br />

													•	To earn cash back, some merchants require that your shopping cart be empty when you click from Cash Back Kaboom to the store's website.  <br /><br />

													•	Be sure to retain all transaction receipts sent to you from merchants, just in case you need to submit a Cash Back Inquiry claim.  <br /><br />

													</p>

	            </div>

	        <p class="closed" id="shop16q"><span style="cursor:pointer"><strong>  What will prevent me from earning cash back?</strong></span></p>

	            <div id="shop16a" style="display:none;">

	                <p style="background: none; margin-left: 25px;">  •	You do not log in and begin shopping through cashbackkaboom.com.  <br /><br />

													•	You do not enable cookies on your browser before shopping. <br /><br />

													•	You type a merchant address into the browser and go directly to a merchant website rather than linking to them through Cash Back Kaboom.  <br /><br />

													•	You're on a merchant website and click off to visit another website, or you click on a special offer or paid ad that takes you to another website.  <br /><br />

													•	You use a coupon or a special offer code from another website or coupon site and apply it at checkout.  <br /><br />

													•	You receive an email from a merchant, click a link in it, and go to their website to shop. <br /><br />  

													•	You purchase products that were already in your shopping cart from a previous visit to the merchant. <br /><br />

													</p>

	            </div>

	        <p class="closed" id="shop17q"><span style="cursor:pointer"><strong> Can I click on an email I received from a merchant and still get cash back?</strong></span></p>

	            <div id="shop17a" style="display:none;">

	                <p style="background: none; margin-left: 25px;">Unfortunately, no. Even if it is an email from one of our partner merchants, you will not get cash back. Remember: always log in to Cash Back Kaboom and begin shopping from the site to ensure that the merchant credits your account.</p>

	            </div>

	        <p class="closed" id="shop18q"><span style="cursor:pointer"><strong>  If I click on a merchant from Cash Back Kaboom and leave the merchant website and then come back and shop, will I still get cash back?</strong></span></p>

	            <div id="shop18a" style="display:none;">

	                <p style="background: none; margin-left: 25px;">No, you will not. When you leave a merchant's site, your Member ID# that tracks your purchase will not continue to follow you to the next site and will not reconnect when you come back. Just go back to Cash Back Kaboom, click on the merchant and start your shopping experience again. </p>

	            </div>

	        <p class="closed" id="shop19q"><span style="cursor:pointer"><strong>  Can I use a coupon from another site and still get cash back?</strong></span></p>

	            <div id="shop19a" style="display:none;">

	                <p style="background: none; margin-left: 25px;">  Unfortunately, no.  Most coupon codes or coupon links you find outside of Cash Back Kaboom will void our cash back on your purchases. <br /><br />



													Coupons from random internet websites, including coupon sites, are often linked to specific tracking codes that pay those websites--not you. This means that, when a non-Cash Back Kaboom code is used in a transaction, the other site will automatically get credit for your purchase, regardless of whether you clicked through from Cash Back Kaboom before ordering.<br /><br />



													<span class="redfaq">Please note:</span>  If you receive an email from a merchant (even if it is a partner merchant on our site) and click through to their site from that email to shop, you will not get credit for the transaction.  However, you will receive cash back when you shop from an email sent directly to you from Cash Back Kaboom.

													</p>

	            </div>

	        <p class="closed" id="shop20q"><span style="cursor:pointer"><strong>  What do I do to receive cash back when checking out of a partner <br /> merchant from Cash Back Kaboom?</strong></span></p>

	            <div id="shop20a" style="display:none;">

	                <p style="background: none; margin-left: 25px;">Nothing special at all! Just log in to the Cash Back Kaboom website and click on a merchant link. You will then be directed to that merchant's website, where you can browse, load items to the shopping cart, and check out. It's as easy as that!<br/>



													We receive confirmation for your order from our partner merchants, usually within 1-7 days, and post your cash back as “Pending” to your account.

													</p>

	            </div>

	        <p class="closed" id="shop21q"><span style="cursor:pointer"><strong> How long does it take for “Pending” cash back to be posted to my account <br /> after I have placed an order?</strong></span></p>

	            <div id="shop21a" style="display:none;">

	                <p style="background: none; margin-left: 25px;">Each of our partner merchants has its own policy.  Most orders are reported to Cash Back Kaboom in a short time following either ship date or order date; travel purchases may not be reported until conclusion of the travel. <br /><br />



													On average, your cash back is credited as “Pending” to your account within 1-7 business days from the order date or the ship date. <br /><br />



													However, certain partner merchants may take up to 60 days following the order date to report to Cash Back Kaboom that the purchase or offer has been completed. <br /><br />



													<span class="redfaq">Important!</span>  Please be sure to retain all transaction receipts sent to you from merchants, just in case you need to submit a Cash Back Inquiry claim. <br /><br />

													</p>

	            </div>

	        <p class="closed" id="shop22q"><span style="cursor:pointer"><strong>  I forgot to start my shopping through Cash Back Kaboom, can I still get <br /> cash back?</strong></span></p>

	            <div id="shop22a" style="display:none;">

	                <p style="background: none; margin-left: 25px;">Unfortunately, no. Orders placed directly online without first logging in to Cash Back Kaboom will not qualify for cash back. To receive cash back, it is mandatory that you first log in to Cash Back Kaboom, then click on a partner merchant and shop.<br /><br />



													It is your click through to the partner merchant from Cash Back Kaboom that activates your Member ID# tracking code. This code follows you to the merchant's website and records your shopping activity to make sure you’re credited with cash back. <br /><br />



													<span class="redfaq">Always Remember:</span>  To get credit for your cash back it is imperative that you start your shopping experience by logging in at Cash Back Kaboom! <br /><br />

													</p>

	            </div>

	        <p class="closed" id="shop23q"><span style="cursor:pointer"><strong> Are orders placed via telephone or in-merchant purchases eligible for <br /> rebates?</strong></span></p>

	            <div id="shop23a" style="display:none;">

	                <p style="background: none; margin-left: 25px;">Only orders placed online through merchant links found on the Cash Back Kaboom website are eligible for receiving cash back.<br /><br />



													<span class="redfaq">Tip:</span> If you need a partner merchant's customer service representative to help you with an order, it is important that you do not let them generate the order for you, as the purchase will then not qualify for cash back. Just thank the rep for their help, let them know that you will finish the order yourself online, and then log in to Cash Back Kaboom, click the merchant link and place your order.

													</p>

	            </div>

	        <p class="closed" id="shop24q"><span style="cursor:pointer"><strong> What happens if I exchange a product or make changes to an order?</strong></span></p>

	            <div id="shop24a" style="display:none;">

	                <p style="background: none; margin-left: 25px;">If you contact a merchant to change your order (even for an exchange) it can sometimes negate your cash back. In general, a merchant will cancel the original order and generate a new order that does not have cash back tied to it.



													When making changes to an order, we advise you to first cancel your original order and then go to Cashbackkaboom.com, log-in, click the merchant link and re-order.

													</p>

	            </div>

	        <p class="closed" id="shop25q"><span style="cursor:pointer"><strong> A partner merchant sent me an email.  Can I use it and still get cash back?</strong></span></p>

	            <div id="shop25a" style="display:none;">

	                <p style="background: none; margin-left: 25px;">If you receive an email from a merchant (even if it is a partner merchant on our site) and click through to their site from the email to shop, you will not get credit for the transaction.  <br /><br />



													<span class="redfaq">Remember:</span>  You will receive cash back when you click on a link and shop from an email sent directly to you from Cash Back Kaboom.

													</p>

	            </div>

	        <p class="closed" id="shop26q"><span style="cursor:pointer"><strong> How do I find what I want to shop for?    </strong></span></p>

	            <div id="shop26a" style="display:none;">

	                <p style="background: none; margin-left: 25px;">Our easy-to-navigate website makes shopping a fast, fun and money-saving experience.   <br /><br />

													Use any of the following methods to find a merchant, a service, a specific product or a special deal--and get cash back at any one of more 1,500 partner merchants:  



													•	Click "All Stores" to view an alphabetical list of all cash back merchants at Cash Back Kaboom.

													•	Browse a specific category in the left-hand navigation bar on every page to shop by Apparel, Computers, Travel, etc.

													•	Click on the "Coupons and Deals" page in the top navigation bar to find Free Shipping Offers, $ Off Offers, % Off Offers, Daily Specials and more! 

													•	Use our powerful search bar feature to a find your merchant. Simply type in the merchant name, i.e., "Target," "Travelocity," “Macy’s,” etc.

													•	Use the search bar feature to look for a specific type of product by typing in "apple ipad," "sony tv," “dell desktop computer,” etc.

													</p>

	            </div>

	        <p class="closed" id="shop27q"><span style="cursor:pointer"><strong> While shopping, can I leave a merchant's site, click back and shop, and  <br /> still get cash back?</strong></span></p>

	            <div id="shop27a" style="display:none;">

	                <p style="background: none; margin-left: 25px;">Unfortunately, no.  Once you click on a merchant link through Cash Back Kaboom and shop, make sure you complete the purchase in that same session to ensure the cash back is credited to your account.<br /><br />

	     

													<span class="redfaq">Important!</span>  Do not click or surf, comparison shop, or visit other websites after clicking through to a merchant from Cash Back Kaboom. Your Member ID# that tracks your purchase will disconnect and you will not receive cash back. To reconnect your tracking ID#, simply go back to Cash back Kaboom, click on a merchant link and begin shopping. 

													</p>

	            </div>

	        <p class="closed" id="shop28q"><span style="cursor:pointer"><strong>  I want to place multiple orders at a merchant. What is the best way to<br /> ensure cash back tracking?</strong></span></p>

	            <div id="shop28a" style="display:none;">

	                <p style="background: none; margin-left: 25px;">If you are placing multiple orders at a merchant, you will need to have a unique click-through to that merchant from Cash Back Kaboom for each unique order. For example, if you place your first order at a merchant through Cash Back Kaboom and then leave the merchant’s site to visit another site, or turn off your computer, you must log back in to Cash Back Kaboom, click through to the merchant again, and place your order. </p>

	            </div>

	        <p class="closed" id="shop29q"><span style="cursor:pointer"><strong>  Will surfing online for coupons or other deal sites affect cash <br /> back tracking?</strong></span></p>

	            <div id="shop29a" style="display:none;">

	                <p style="background: none; margin-left: 25px;">Yes, almost every coupon code or coupon link you find outside of Cash Back Kaboom can void the Cash Back Kaboom cash back on your purchases.<br /><br />



													Coupons from random internet websites, including coupon sites, are often linked to specific tracking codes that pay those websites--and not you. This means that, when a non-Cash Back Kaboom code is used in a transaction, the other site will automatically get credit for your purchase, regardless of whether you clicked through Cash Back Kaboom before ordering. <br /><br />



													<span class="redfaq">Always Remember:</span> Use coupons found only at Cash Back Kaboom or sent to you in an email from Cash back Kaboom to ensure accurate cash back tracking. Using other coupons will often interfere with cash back tracking.  

													</p>

	            </div>

	        <p class="closed" id="shop30q"><span style="cursor:pointer"><strong> Am I eligible for cash back if I make a purchase using a Gift Card?</strong></span></p>

	            <div id="shop30a" style="display:none;">

	                <p style="background: none; margin-left: 25px;">Each merchant has its own policy. In general, a purchase made with a gift card or gift certificate redemption not purchased through Cash Back Kaboom is not eligible for a cash back rebate. We suggest you check Merchant Conditions to see if a specific merchant pays cash back on gift card purchases. You will receive cash back when you purchase a gift card from any of our partner merchants that are listed in the Gift Cards category.</p>

	            </div>

	        <p class="closed" id="shop31q"><span style="cursor:pointer"><strong>   Are orders placed via telephone eligible for cash back rebates?</strong></span></p>

	            <div id="shop31a" style="display:none;">

	                <p style="background: none; margin-left: 25px;">Unfortunately, telephone orders or live chat orders do not qualify for cash back at Cash Back Kaboom. </p>

	            </div>

	        <p class="closed" id="shop32q"><span style="cursor:pointer"><strong>  After I click through to a merchant, how long is the shopping session  <br /> open to earn cash back?</strong></span></p>

	            <div id="shop32a" style="display:none;">

	                <p style="background: none; margin-left: 25px;">We suggest that you complete your purchase as soon as possible after you click through to a Cash Back Kaboom partner merchant. If considerable time has elapsed since you clicked through to the merchant site, it would be a good idea to once again log in to Cash Back Kaboom and then link back to that same merchant.</p>

	            </div>

	        <p class="closed" id="shop33q"><span style="cursor:pointer"><strong>  Where can I view my shopping history?</strong></span></p>

	            <div id="shop33a" style="display:none;">

	                <p style="background: none; margin-left: 25px;">Click the "My Account" tab in the top header of the Cash Back Kaboom website.  Then click “My Shopping History” and view all your transactions including the merchants you shopped, the dates, the purchase amounts, and the "Pending" cash back earned from your purchases.</p>,

	            </div>

	        <p class="closed" id="shop34q"><span style="cursor:pointer"><strong> Where do I find my Account Balance?</strong></span></p>

	            <div id="shop34a" style="display:none;">

	                <p style="background: none; margin-left: 25px;">You can view both your “Pending” and “Available” cash back balances on the top of the My Shopping History, My Shopping Network, and Withdraw Funds pages. </p>

	            </div>

	        <p class="closed" id="shop35q"><span style="cursor:pointer"><strong>  Will I receive cash back on every item I purchase? </strong></span></p>

	            <div id="shop35a" style="display:none;">

	                <p style="background: none; margin-left: 25px;">Not necessarily. We have individual agreements with each of our partner merchants. Each merchant has certain terms and conditions which may exclude certain products or services from generating a commission. Please check Merchant Conditions, located under a merchant's description, to view the items that may not pay cash back.<br /><br />



													<span class="redfaq">Please note:</span>  In general, the cash-back is based on your net purchase price, generally excluding taxes, shipping &amp; handling, online coupons, gift cards and any special services such as gift-wrapping. 

													</p>

	            </div>

	        <p class="closed" id="shop36q"><span style="cursor:pointer"><strong>  Can I buy direct from the merchant and still get cash back? </strong></span></p>

	            <div id="shop36a" style="display:none;">

	                <p style="background: none; margin-left: 25px;">No. If you deal with the merchant on the phone or on a merchant chat line, or make a purchase without using links from Cash Back Kaboom, then you will not receive cash back. In fact, calling the merchant to change an order you placed through Cash Back Kaboom can cancel your cash back. Finally, if you request a price-match, the retailer will essentially cancel your Cash Back Kaboom order and place a new one. Again, you will not earn cash back.</p>

	            </div>

	        <p class="closed" id="shop37q"><span style="cursor:pointer"><strong> I've forgotten my email/password.  What do I do?</strong></span></p>

	            <div id="shop37a" style="display:none;">

	                <p style="background: none; margin-left: 25px;">Just click on the "Member Login" link on the top of the page and click on “Forgot your password?”</p>

	            </div>

	        <p class="closed" id="shop38q"><span style="cursor:pointer"><strong>  Can I check out other websites after clicking on a merchant through<br /> Cash Back Kaboom?</strong></span></p>

	            <div id="shop38a" style="display:none;">

	                <p style="background: none; margin-left: 25px;">We understand that comparison shopping is important. However, surfing away from the Cash Back Kaboom site during a transaction may cause tracking problems for your transactions. This can result in cash back not posting to your account.<br /><br />



													<span class="redfaq">Important!</span>  It is imperative that, once you are done comparison shopping, you return to Cash Back Kaboom and click through to the merchant, load items in the shopping cart and complete your purchase.

													</p>

	            </div>

	        <p class="closed" id="shop39q"><span style="cursor:pointer"><strong>   I comparison shop, but I just open new browser tabs. That’s okay, right?</strong></span></p>

	            <div id="shop39a" style="display:none;">

	                <p style="background: none; margin-left: 25px;">Unfortunately, it is not. Having too many windows or tabs open can confuse tracking systems and award the commission to another website. Again, we suggest that you finish comparison shopping, close all other windows or tabs, and then click through Cash Back Kaboom one last time for your final purchase.</p>

	            </div>

	        <p class="closed" id="shop40q"><span style="cursor:pointer"><strong>  How do I contact Customer support with a Cash Back Inquiry claim?</strong></span></p>

	            <div id="shop40a" style="display:none;">

	                <p style="background: none; margin-left: 25px;">It’s easy.  Just click on the “My Account” tab at the top of the page and then "Member Support." There you can leave a general message or Click the “Where’s My Cash Back?” button. Enter the information and be sure to copy and paste the online receipt the merchant sent you detailing your transaction. <br /><br />



					<span class="redfaq">Important!</span>  Please be sure to retain all transaction receipts sent to you from merchants, just in case you need to submit a Cash Back Inquiry claim. 

					</p>

	            </div>

	    </div>



	    <div id="make_money" style="display:none;  margin-top: 40px;">

	        <h1>Make Money FAQs</h1>

	        <p class="closed" id="make1q"><span style="cursor:pointer"><strong>  How does the Cash Back Kaboom "Invite-a-Friend" program work?</strong></span></p>

	            <div id="make1a" style="display:none;">

	                <p style="background: none; margin-left: 25px;">It’s simple. Just invite your friends to sign up for their free Cash Back Kaboom membership. When they join, you get credit for the referral, and they are automatically added to your shopping network. When they shop, you receive part of the cash back we receive from our partner merchants.</p>

	            </div>



	        <p class="closed" id="make2q"><span style="cursor:pointer"><strong>  What methods can I use to invite people to join?</strong></span></p>

	            <div id="make2a" style="display:none;">

	                <p style="background: none; margin-left: 25px;">Cash Back Kaboom offers several "Invite-A-Friend" tools to help you recruit other members. Just click on the Invite Friends page to view fast and easy methods you can use, including Facebook, Twitter, email, blogs and Cash Back Kaboom brochures.</p>



	            </div>



	        <p class="closed" id="make3q"><span style="cursor:pointer"><strong>How do I get credit for a referral? </strong></span></p>

	            <div id="make3a" style="display:none;">

	                <p style="background: none; margin-left: 25px;">When you join, you are given a unique Member ID#, which is imbedded in all the invitation methods on the Invite Friends page. When the recipient clicks on the invitation you sent, your Member ID# activates and the member is directed to your Sign Up page.  <br /><br />



												<span class="redfaq">Please note:</span>  When a person joins through your invitation, you get credit for the referral and the new member is automatically added to the 2nd level of your shopping network.  When that member shops you are paid a portion of the posted cash back.

												</p>

	            </div>



	        <p class="closed" id="make4q"><span style="cursor:pointer"><strong>  I invited a person who went directly to Cashbackkaboom.com and joined;<br /> can I get still credit for the referral?</strong></span></p>

	            <div id="make4a" style="display:none;">

	                <p style="background: none; margin-left: 25px;">Unfortunately, you cannot. In order for you to get credit for a referral, we need to know where it came from.  The member you invite must join by clicking to Cashbackkaboom.com through your invitation link or using the Member ID# on the back of Cash Back Kaboom brochures.  <br /><br />

 

													<span class="redfaq">Please note:</span>  If you suspect that a member you invited forgot to use your invite link to join, please notify us and we will gladly insert them into your shopping network.

													</p>

	            </div>



	        <p class="closed" id="make5q"><span style="cursor:pointer"><strong> How do I get paid?</strong></span></p>

	            <div id="make5a" style="display:none;">

	                <p style="background: none; margin-left: 25px;">To get paid, simply click on “My Account” and then “Withdraw Funds.”  There you can view your “Available Balance.”   Once you have an available balance of at least $50, you can choose to withdraw any amount--or all of it--and have it sent right to your bank account or put on a debit card.</p>

	            </div>



	        <p class="closed" id="make6q"><span style="cursor:pointer"><strong>  How many shopping levels can I get paid on?</strong></span></p>

	            <div id="make6a" style="display:none;">

	                <p style="background: none; margin-left: 25px;">You receive cash back on your personal shopping (shopping level 1), the people you personally invite (shopping level 2) and all subsequent referrals by members in your network for levels 3-10.<br /><br />



													<span class="redfaq">Hot Tip!</span>  Cash Back Kaboom doubles the cash back on all shopping by members on your 10th shopping level!

													</p>

	            </div>



	        <p class="closed" id="make7q"><span style="cursor:pointer"><strong>  How do I find out how many members are in my shopping network?</strong></span></p>

	            <div id="make7a" style="display:none;">

	                <p style="background: none; margin-left: 25px;">Click the “My Account” tab at the top of the page, and then click “My Shopping Network.”</p>

	            </div>



	        <p class="closed" id="make8q"><span style="cursor:pointer"><strong> Can I post my referral link on a merchant's Facebook or Twitter page?</strong></span></p>

	            <div id="make8a" style="display:none;">

	                <p style="background: none; margin-left: 25px;">Absolutely not. Posting any referral link on a merchant's Facebook or Twitter page to invite their customers to join Cash Back Kaboom is in direct violation of your Member Agreement and is grounds for immediate termination from the Cash Back Kaboom program and forfeiture of all Pending and Available cash back owed.</p>

	            </div>



	        <p class="closed" id="make9q"><span style="cursor:pointer"><strong>  How do I use the Cash Back Kaboom brochure to invite people?</strong></span></p>

	            <div id="make9a" style="display:none;">

	                <p style="background: none; margin-left: 25px;">When you order a brochure, it comes printed with your unique member ID# on the back (cashbackkaboom.com/yourID). Simply hand out the brochures or place brochure displays in any high traffic area.  When people pick up the brochure and use cashbackkaboom.com/yourID# to join, they are automatically placed on level 2 of your shopping network.<br /><br />



													<span class="redfaq">Hot Tip!</span>  The best way to get owners of coffee shops, hair salons, restaurants and bars, health clubs, etc., to display brochures is to invite them to join. They will be added to level 2 of your shopping network. They order brochures printed with their Member ID# and display them in their business--and you both benefit from all subsequent enrollments. 

													</p>

	            </div>

	        <p class="closed" id="make10q"><span style="cursor:pointer"><strong> Can I sign up nonprofits, schools and organizations that need to raise money?</strong></span></p>

	            <div id="make10a" style="display:none;">

	                <p style="background: none; margin-left: 25px;">Yes. Simply sign them up and they can pass out brochures at any functions or fundraising activities. Plus, Cash Back Kaboom can provide banner ads for websites that need to raise funds. When their followers shop, they get cash back--and so does the organization (and you do, too)!  Plus, when the followers invite others, the organization continues to receive cash back on all subsequent referral shopping, up to 10 levels.   </p>

	            </div>

	        <p class="closed" id="make11q"><span style="cursor:pointer"><strong>   I forgot to put in the email of the person who referred me. Is it too late?</strong></span></p>

	            <div id="make11a" style="display:none;">

	                <p style="background: none; margin-left: 25px;">Not at all! Please contact us and provide your friend’s email address. We will add you to that person’s list of referrals, as allowable in our Terms and Conditions.</p>

	            </div>



	        <p class="closed" id="make12q"><span style="cursor:pointer"><strong>  I have sent out many invites, but I am not showing many personal <br /> referred members on my 2nd shopping level. Why?</strong></span></p>

	            <div id="make12a" style="display:none;">

	                <p style="background: none; margin-left: 25px;">First, if you can, we suggest you follow up any email you send out with a phone call. Ask the person you invited to check their spam filter. <br /><br />



													Also, please remember that not everyone who follows your link is going to sign up as a Cash Back Kaboom member. <br /><br />



													However, you can rest assured that the Cash Back Kaboom "Invite-A-Friend" program utilizes a very accurate system with powerful tracking cookies, and tested on a regular basis, to be sure members are being properly credited with referrals. <br /><br />



													<span class="redfaq">Please note:</span>  If you feel that you are not being credited properly for certain referrals, please Contact Us with the email addresses of the member who signed up. Our Crew at Cash back Kaboom will gladly look into it and add them to your 2nd shopping level right away.

													</p>

	            </div>



	        <p class="closed" id="make13q"><span style="cursor:pointer"><strong>   How do I build a referral link to a specific page on Cash Back Kaboom?</strong></span></p>

	            <div id="make13a" style="display:none;">

	                <p style="background: none; margin-left: 25px;">Go to the "Invite Friends" page and simply copy the referral link displayed under the "Copy It" section of the page (http://cashbackkaboom/yourID#). You can then paste the link into personal emails, blogs, articles, Facebook posts, Twitter tweets, or anywhere else you think it may entice people to join.  <br /><br />



													<span class="redfaq">Important!</span> Posting any referral link on a merchant's Facebook or Twitter page to invite their customers to join Cash Back Kaboom is in direct violation of your Member Agreement and is grounds for immediate termination from the Cash Back Kaboom program and forfeiture of all Pending and Available cash back owed.

													</p>

	            </div>

	        <p class="closed" id="make14q"><span style="cursor:pointer"><strong>  Can I refer myself?</strong></span></p>

	            <div id="make14a" style="display:none;">

	                <p style="background: none; margin-left: 25px;">No. Members may only maintain one Cash Back Kaboom membership account per the Cash Back Kaboom Terms and Conditions.  However, there can be more than one member per household.</p>

	            </div>

	    </div>



	    <div id="cashback" style="display:none;  margin-top: 40px;">

	        <h1>Cash Back FAQs</h1>

	        <p class="closed" id="cashback1q"><span style="cursor:pointer"><strong>   I just finished a purchase. Why isn’t it showing up in my account?</strong></span></p>

	            <div id="cashback1a" style="display:none;">

	                <p style="background: none; margin-left: 25px;">Cash back does not appear immediately in your account. Each day, Cash Back Kaboom receives reports from our partner merchants that list qualified transactions (purchases that are eligible for cash back). Once we receive and process this data, the order will appear in your account as “Pending Cash Back,” generally within 1-7 business days.<br/>



													<span class="redfaq">Important!</span>  Please be sure to retain all transaction receipts in case you need to submit a Cash Back Inquiry claim. 

													</p>

	            </div>



	        <p class="closed" id="cashback2q"><span style="cursor:pointer"><strong>  How long does it take a merchant to report my transaction?</strong></span></p>

	            <div id="cashback2a" style="display:none;">

	                <p style="background: none; margin-left: 25px;">Reporting of transactions time varies for each merchant. Generally, your cash back will appear within 1-7 business days of your transaction as “Pending”. Some merchants do not report a transaction as “Pending” until the order has shipped to the customer. Some travel merchants may not report transactions as “Pending” until the completion of the travel itinerary.</p>



	            </div>



	        <p class="closed" id="cashback3q"><span style="cursor:pointer"><strong>  How long does cash back remain “Pending” in my account?</strong></span></p>

	            <div id="cashback3a" style="display:none;">

	                <p style="background: none; margin-left: 25px;">Each of our partner merchants has its own policy.  Most orders are reported to Cash Back Kaboom in a short time following either ship date or order date; travel purchases may not be reported until conclusion of the travel. <br /><br />



													On average, your cash back is credited as “Pending” to your account within 1-7 business days from the order date or the ship date. <br /><br />



													However, certain partner merchants may take up to 60 days following the order date to report to Cash Back Kaboom that the purchase or offer has been completed. <br /><br />



													<span class="redfaq">Important!</span>  Please be sure to retain all transaction receipts sent to you from merchants, just in case you need to submit a Cash Back Inquiry claim..

													</p>

	            </div>



	        <p class="closed" id="cashback4q"><span style="cursor:pointer"><strong>   It has been 60 days and my cash back has still not appeared in  “Pending”.<br /> Now what?</strong></span></p>

	            <div id="cashback4a" style="display:none;">

	                <p style="background: none; margin-left: 25px;">It is our goal to do everything in our power to get you your cash back. If your cash back still has not appeared as “Pending Cash Back” after 60 days, please contact Customer Support with a Cash Back Inquiry claim and one of our dedicated customer service agents will open a claim and expedite the process.  All claims are subject to the Terms and Conditions that all members agree to when joining Cash Back Kaboom.<br /><br />



													<span class="redfaq">Important!</span>  Please be sure to retain all transaction receipts, just in case you need to submit a Cash Back Inquiry claim. 

													</p>

	            </div>



	        <p class="closed" id="cashback5q"><span style="cursor:pointer"><strong> I think my cash back amount is wrong.  What should I do?</strong></span></p>

	            <div id="cashback5a" style="display:none;">

	                <p style="background: none; margin-left: 25px;">It is important to remember that some of our merchants offer hundreds of products or services and may pay different cash back amounts on each. Rest assured that we do everything possible to get you the highest cash back on every purchase you make.<br /><br />



													<span class="redfaq">Please note:</span>  From time to time, a merchant may report an order amount incorrectly. If you believe this is the case, please contact Customer Support with a Cash Back Inquiry and a claim will be opened with the partner merchant where your transaction occurred. <br /><br />



													All claims are subject to the Terms and Conditions that all members agree to when joining Cash Back Kaboom.

													</p>

	            </div>



	        <p class="closed" id="cashback6q"><span style="cursor:pointer"><strong> How do I contact customer support with a Cash Back Inquiry claim?</strong></span></p>

	            <div id="cashback6a" style="display:none;">

	                <p style="background: none; margin-left: 25px;">It’s easy. Just click on the “My Account” tab at the top of the page and then click on "Member Support." There you can leave a general message or click the “Where’s my cash back?” button. Enter the information and be sure to copy and paste the online receipt detailing your transaction that you received from the merchant.     </p>

	            </div>



	        <p class="closed" id="cashback7q"><span style="cursor:pointer"><strong>  Why did my “Pending Cash Back” on a transaction zero out?</strong></span></p>

	            <div id="cashback7a" style="display:none;">

	                <p style="background: none; margin-left: 25px;">Cash Back can be zeroed out (reversed) for several reasons, including:<br /><br />



													•	The partner merchant processed the order as a "return," as “exchanged,” or as “cancelled.".<br /><br />

													•	The partner merchant reversed the order due to use of an unauthorized coupon.<br /><br />

													•	The partner merchant reversed the order due to a customer service representative changing your order per your request.<br /><br />



													If an exchange or partial return was made on an order and the whole order was reversed, please contact Customer Support with a Cash Back Inquiry and a claim will be opened with the partner merchant where your transaction occurred.

													</p>

	            </div>



	        <p class="closed" id="cashback8q"><span style="cursor:pointer"><strong>  Is there a limit to how much cash back I can earn?</strong></span></p>

	            <div id="cashback8a" style="display:none;">

	                <p style="background: none; margin-left: 25px;">There is no limit to how much cash back you can earn. Similarly, there is no limit to how much cash back you can receive when members in your shopping network make purchases. </p>

	            </div>



	        <p class="closed" id="cashback9q"><span style="cursor:pointer"><strong>  What is the difference between "Pending Cash Back" and "Available Cash Back"?</strong></span></p>

	            <div id="cashback9a" style="display:none;">

	                <p style="background: none; margin-left: 25px;">If you have a “Pending Cash Back” amount, it means that you have made a qualified purchase and the merchant has reported the transaction to us. It remains “pending” while the merchant allows time for returns, exchanges, or cancelled orders. When the transaction fully clears and the merchant knows you’re satisfied with your purchase, your “pending” cash back is then posted as “available” cash back and may be withdrawn if the total available is $50 or more.<br /><br /> <span class="redfaq">Please note:</span>   Each merchant has its own time period to allow for returns, exchanges and cancelled orders. Most purchases go to “Pending” within 1-5 business days. They may stay in a “Pending” state for up to 60 days before becoming “Available.” Most travel transactions become “Available” cash back upon the date the travel is concluded.</p>

	            </div>

	        <p class="closed" id="cashback10q"><span style="cursor:pointer"><strong>   Why is there a wait for "Pending Cash Back" to move to <br /> "Available Cash Back"?</strong></span></p>

	            <div id="cashback10a" style="display:none;">

	                <p style="background: none; margin-left: 25px;">Since most merchants have a period when returns, exchanges and cancellations are allowed, we must provide a similar time frame, during which merchants can adjust the cash back when orders are changed.<br /><br />



													<span class="redfaq">Please note:</span> Merchants have different return and cancellation policies. Sixty days allows us to cover all of our merchants’ time limits for returns or changes to an order.

													</p>

	            </div>

	        <p class="closed" id="cashback11q"><span style="cursor:pointer"><strong> It has been 60 days and my cash back is still "Pending."  What should I do?</strong></span></p>

	            <div id="cashback11a" style="display:none;">

	                <p style="background: none; margin-left: 25px;">Please contact Customer Support and we will assist you further. However, please remember that the 60-day period begins on the date the transaction posts to your account, not the date that the order takes place.<br /><br />



													<span class="redfaq">Important!</span>  Please be sure to retain all merchant receipts, just in case you need to submit a Cash Back Inquiry claim. 

													</p>

	            </div>



	    </div>



   	    <div id="eligibility" style="display:none;  margin-top: 40px;">

	        <h1>Eligibility FAQs </h1>

	        <p class="closed" id="eligibility1q"><span style="cursor:pointer"><strong> I want to purchase a gift card from a merchant.  Are they eligible for<br /> cash back?</strong></span></p>

	            <div id="eligibility1a" style="display:none;">

	                <p style="background: none; margin-left: 25px;">In most cases, probably not. Cash back on gift card purchases varies from merchant to merchant. We suggest you check out the Merchant Conditions posted under each merchant's description to view specific gift card policies. <br /><br />



													<span class="redfaq">Hot Tip!</span> If you want to earn cash back when you purchase a gift card, we suggest you purchase from merchants on Cash Back Kaboom that specifically sell gift cards. To find merchants that sell gift cards and reward you with cash back, insert “gift cards” into the search bar located at the top of the page.

													</p>

	            </div>



	        <p class="closed" id="eligibility2q"><span style="cursor:pointer"><strong>  Will I get cash back if I make a purchase with a gift card?</strong></span></p>

	            <div id="eligibility2a" style="display:none;">

	                <p style="background: none; margin-left: 25px;">Whether you use a gift card to pay for the whole order or just part of one, a gift card generally voids cash back on your purchases. </p>

	            </div>



	        <p class="closed" id="eligibility3q"><span style="cursor:pointer"><strong>  If I pay for an order in installments, will my cash back be affected?</strong></span></p>

	            <div id="eligibility3a" style="display:none;">

	                <p style="background: none; margin-left: 25px;">No, the order will still be eligible for cash back.</p>

	            </div>



	        <p class="closed" id="eligibility4q"><span style="cursor:pointer"><strong>  Can I get a rebate for a pre-order?</strong></span></p>

	            <div id="eligibility4a" style="display:none;">

	                <p style="background: none; margin-left: 25px;">If the cash back tracking is important to you, pre-orders are not recommended, as the merchant will most likely not reward you with cash back.  </p>

	            </div>



	        <p class="closed" id="eligibility5q"><span style="cursor:pointer"><strong>   If I purchase a subscription, will I get cash back each time it renews?</strong></span></p>

	            <div id="eligibility5a" style="display:none;">

	                <p style="background: none; margin-left: 25px;">Unless explicitly stated by the merchant, subscriptions come with a one-time cash back payment. Auto-renewals are not eligible for cash back. This may also occur with auto-delivery or "auto-ship" programs. To continue to receive cash back, before your subscription expires, go to Cash Back Kaboom, click on the merchant and once again renew your subscription.</p>

	            </div>



	        <p class="closed" id="eligibility6q"><span style="cursor:pointer"><strong>   Can I use more than one cash back program for a purchase?</strong></span></p>

	            <div id="eligibility6a" style="display:none;">

	                <p style="background: none; margin-left: 25px;">No, Cash Back Kaboom cannot be combined with other cash back programs or rewards sites. <br /><br />



													<span class="redfaq">Remember:</span> When you shop at Cash Back Kaboom, you will not be rewarded with cash back if you use coupons from any other website or emails you received.

													</p>

	            </div>



	        <p class="closed" id="eligibility7q"><span style="cursor:pointer"><strong>   Are taxes, service fees or shipping eligible for cash back?</strong></span></p>

	            <div id="eligibility7a" style="display:none;">

	                <p style="background: none; margin-left: 25px;">No. Taxes, along with any fees charged by our merchants for shipping &amp;amp; handling or gift wrapping are not eligible for cash back. Purchases paid for with gift certificates or merchant credit, or using online coupons, are also not eligible for cash back.  </p>

	            </div>



	        <p class="closed" id="eligibility8q"><span style="cursor:pointer"><strong>  Can I get cash back on warranties?</strong></span></p>

	            <div id="eligibility8a" style="display:none;">

	                <p style="background: none; margin-left: 25px;">Extended warranties that are sold along with merchandise generally are not eligible for cash back. This includes plans such as travel insurance.</p>

	            </div>



	        <p class="closed" id="eligibility9q"><span style="cursor:pointer"><strong>  I don't live in the U.S. or Canada. Will I get cash back on my purchases?</strong></span></p>

	            <div id="eligibility9a" style="display:none;">

	                <p style="background: none; margin-left: 25px;">Yes, most international orders are eligible for cash back. However, we cannot guarantee that you will receive cash back for your purchases due to some of the internal merchant policies on transactions from international orders.</p>

	            </div>

   	    </div>





    </div>
    <div style="clear: both;"></div>





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