<?php
    session_start();
    ob_start();
    include 'config/config.php';
	$dbObj =	new DBUtility();
    ?>
    <!DOCTYPE html>
    <html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <title>Retailers</title>
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
                display: none;
            }
            
            @media screen and (max-width: 768px) {
                /* #menu is the original menu */
                #logged_nav {
                    display: none;
                }
                .slicknav_menu {
                    display: block;
                }
            }
        </style>

        <!--[if lte IE 9]>
            <script type="text/javascript" src="js/placeholder_fix.js"></script>
        <![endif]-->

        <!--[if IE 8]>
            <link rel="stylesheet" type="text/css" href="css/ie8.css" />
        <![endif]-->

        <!--[if lt IE 8]>
            <link rel="stylesheet" type="text/css" href="css/ie_less.css" />
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
                        <b>Share with</b>
                        <a class="md-trigger" data-modal="modal-10" href="#" title="Share on Facebook"><img src="img/facebook.png" width="35" alt="Share on Facebook" align="absmiddle" /></a>
                        <a class="md-trigger" data-modal="modal-10" href="#" title="Share on Twitter"><img src="img/twitter.png" width="35" alt="Share on Twitter" align="absmiddle" /></a>
                        <a class="md-trigger" data-modal="modal-10" href="#"><img src="img/googleplus.png" width="35" alt="Share on Google+" align="absmiddle" /></a>
                    </div>
                    <div class="account_menu">
                        <div class="account_dropdown">
						
                            <ul>
                                <li>
                                    <a href="#">My Account</a>
                                    <ul>
                                        <li>
                                            <a href="myprofile.php">My Settings</a>
                                        </li>
                                        <li>
                                            <a href="myfavorites.php">My Favorite Stores</a>
                                        </li>
                                        <li>
                                            <a href="myshopping.php">My Shopping History</a>
                                        </li>
                                        <li>
                                            <a href="mynetwork.php">My Shopping Network</a>
                                        </li>
                                        <li>
                                            <a href="withdraw.php">Withdraw Funds</a>
                                        </li>
                                        <li>
                                            <a href="invite.php">Refer My Friends</a>
                                        </li>
                                        <li>
                                            <a href="myprofile.php">Edit My Profile</a>
                                        </li>
                                        <li>
                                            <a href="store">CBK Promo Items</a>
                                        </li>
                                        <li>
                                            <a href="video_savemoney.php">View Videos</a>
                                        </li>
                                        <li>
                                            <a href="mysupport.php">Support</a>
                                        </li>
                                        <li>
                                            <a href="user/logout.php">Logout</a>
                                        </li>
                                    </ul>
								</li>
							</ul>
                                    <div class="balance_info">
                                        <strong>Balance:</strong>
                                        <em class="mbalance">$0.00</em>
                                    </div>
                        </div>
                        <div class="right">
							<a href="myfavorites.php">
							<img src="images/header/my_fave_shops.png" alt="My Fave Shops">
							</a>
						</div>
                    </div>
                </div>
            </div>

            <div class="wrap">
                <div class="inner">

                    <a href="#" class="scrollup">Top</a>
                    <div id="logo">
                        <a href="index.php" class="lo_link ignore-register-modal"><img src="images/header/logo.png" alt="Cash Back Kaboom" title="Return to Home Page" border="0" /></a>
                    </div>

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