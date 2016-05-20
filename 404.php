<?php
  /**
   * Index
   *
   * @package Membership Manager Pro
   * @author wojoscripts.com
   * @copyright 2015
   * @version $Id: index.php, v3.00 2015-03-10 10:12:05 gewa Exp $
   */
  define("_VALID_PHP", true);
  require_once("init.php");
  
  if ($user->logged_in)
      redirect_to(SITEURL . "/account.php");
	  
  if (isset($_POST['doLogin']))
      : $result = $user->login($_POST['username'], $_POST['password']);
  
  /* Login Successful */
  if ($result)
      : redirect_to("account.php");
  endif;
  endif;
?>
<!DOCTYPE html>
<html lang="en">
<!--[if IE 9]>
<html class="ie9" lang="en">    <![endif]-->
<!--[if IE 8]>
<html class="ie8" lang="en">    <![endif]-->
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name=viewport content="width=device-width, initial-scale=1">

   <title>RealTBC - Error</title>
   <script type="text/javascript">
   var SITEURL = "<?php echo SITEURL; ?>";
   var ADMINURL = "<?php echo ADMINURL; ?>";
   </script>
   <link rel="icon" href="assets/custom/images/favicon.ico" sizes="16x16" type="image/png">

	<meta name="description" content="RealTBC Private Server - Start at level 60, a full set of level gear, epic mount, and all skills. Join and enjoy a 'real' TBC experience!">
	<meta name="keywords" content="RealTBC, TBC, Burning Crusade, WoW, World of Warcraft, Private Server, Instant 60, Starting Gear, Epic Mount, Start With All Spells, Scripted Raids, Working Battlegrounds, Battlegrounds, BG, Battleground, Working Arenas, Arenas, Arena, Blizzlike, Blizzlike Content">
	<meta name="author" content="RealTBC">

   <!-- CSS -->
   <link href="assets/vendor/bootstrap/css/bootstrap.min.css"        property='stylesheet' rel="stylesheet" type="text/css" media="screen"/>
   <link href="assets/vendor/fontawesome/css/font-awesome.min.css"   property='stylesheet' rel="stylesheet" type="text/css" media="screen"/>
   <link href="assets/vendor/flaticons/flaticon.css"                 property='stylesheet' rel="stylesheet" type="text/css" media="screen"/>
   <link href="assets/vendor/hover/css/hover-min.css"                property='stylesheet' rel="stylesheet" type="text/css" media="screen"/>
   <link href="assets/vendor/wow/animate.css"                        property='stylesheet' rel="stylesheet" type="text/css" media="screen"/>
   <link href="assets/vendor/mfp/css/magnific-popup.css"             property='stylesheet' rel="stylesheet" type="text/css" media="screen"/>
   <link rel="stylesheet" href="theme/css/message.css" type="text/css" />
   <!-- Remove this for disable demo panel styles -->
   <!--<link href="assets/vendor/styleselector/styleselector.css"        property='stylesheet' rel="stylesheet" type="text/css" media="screen"/>-->
   <!-- Custom styles -->
   <link href="assets/custom/css/style.css"                          property='stylesheet' rel="stylesheet" type="text/css" media="screen"/>

   <style>
      #preloader {
         position: fixed;
         left: 0;
         top: 0;
         z-index: 99999;
         width: 100%;
         height: 100%;
         overflow: visible;
         background: #666666 url("assets/custom/images/preloader.gif") no-repeat center center; }
   </style>

</head>

<img class="reallogo" src="assets/images/logo.png" alt="logo" />

<div class="col-md-12 nopadding" style="/* float: right; */">
  <div style="width: 225px; float: right;">
    <div class="inline-block"><a href="https://www.facebook.com/Realtbc-1634787043427455/" target="_blank"><img class="mediaicon hvr-grow" src="assets/images/social/fb.png" alt=""></a></div>
    <div class="inline-block"><a href="https://twitter.com/real_TBC" target="_blank"><img class="mediaicon hvr-grow" src="assets/images/social/twit.png" alt=""></a></div>
    <div class="inline-block"><a href="#!"><img class="mediaicon hvr-grow" src="assets/images/social/yt.png" alt=""></a></div>
	</div>
</div>

<div class="clear"></div>

<body class="boxed">
<div class="global">

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6&appId=1740899199477936";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>

<!--Pre-Loader-->
<div id="preloader"></div>

<div id="errorModal" class="modalDialog">
			    <div>
                	<a href="#close" title="Close" class="close">X</a>
			        <h4 style="color: #555; text-align: center;">We're sorry about that</h4>
                    <div id="loginform" class="col-md-5 col-lg-4 login-container">
						<p>This feature is currently under construction.</p>
                    </div>
				</div>
            </div>

<div id="regModal" class="modalDialog">
			    <div>
                	<a href="#close" title="Close" class="close">X</a>
			        <h4 style="color: #555; text-align: center;">Account Management</h4>
			        <div id="loginform" class="col-md-5 col-lg-4 login-container">
          				<form method="post" id="login_form" name="login_form"> 
          					<label>Username</label>
         					<input name="username" placeholder="Username" type="text"> 
          						<br />
          					<label>Password</label>
          					<input name="password" placeholder="Password" type="password">  
         						<div class="clearfix"> 
          					<input name="submit" type="submit" value="Login">
          						</div> 
          					<input name="doLogin" type="hidden" value="1"> 
          				</form>
		  					<?php print Filter::$showMsg;?>
          					<p>Forgot your password? <a href="#passresetModal">Recover it</a>.</p>
          					<p class="realmlist">set realmlist logon.realtbc.com</p>
			     	</div>
                    
				</div>
            </div>
<div id="passresetModal" class="modalDialog">
            <div>
            <a href="#close" title="Close" class="close">X</a>
			<h4 style="color: #555; text-align: center;">Reset Password</h4>
            <div id="loginform" class="col-md-5 col-lg-4 login-container">
                    <form id="wojo_form" name="wojo_form" method="post">
                    <label>Username</label>
                    <input name="uname" placeholder="<?php echo Core::$word->USERNAME;?>" type="text">
                    <br />
                    <label>Email</label>
                    <input name="email" placeholder="<?php echo Core::$word->UR_EMAIL;?>" type="text">
                    <br />
                    <label>Captcha Code</label><img src="<?php echo SITEURL;?>/lib/captcha.php" alt="" class="captcha-append" />
                    <input name="captcha" placeholder="<?php echo Core::$word->UA_PASS_RTOTAL;?>" type="text">
                    <div class="clearfix"><br>
                    <input data-url="/ajax/user.php" type="button" name="dosubmit" class="wojo button" style="font-size: 15px;font-weight: bold;color: #259e33;margin-bottom:5px;margin-top:-7px;" value="Reset Password">
                    </div>
                    <a href="#regModal"><?php echo Core::$word->UA_BLOGIN;?></a>
                    <input name="passReset" type="hidden" value="1">
                    </form>
            </div>
            </div>
            </div>
            <div id="createModal" class="modalDialog">
			    <div>
                	<a href="#close" title="Close" class="close">X</a>
			        <h4 style="color: #555; text-align: center;">Account Creation</h4>
			        <div id="loginform" class="col-md-5 col-lg-4 login-container">
          					<?php if(!$core->reg_allowed):?>
                            <?php echo Filter::msgSingleAlert(Core::$word->UA_NOMORE_REG);?>
                            <?php elseif($core->user_limit !=0 and $core->user_limit == countEntries(Users::uTable)):?>
                            <?php echo Filter::msgSingleAlert(Core::$word->UA_MAX_LIMIT);?>
                            <?php else:?>
                            <form id="wojo_form2" name="wojo_form" method="post">
                            <label>Username</label>
                            <input name="username" placeholder="<?php echo Core::$word->USERNAME;?>" type="text">
                            <br />
                            <label>Password</label>
                            <input name="pass" placeholder="<?php echo Core::$word->PASSWORD;?>" type="password">
                            <br />
                            <label>Email</label>
                            <input name="email" placeholder="<?php echo Core::$word->UR_EMAIL;?>" type="text">
                            <br />
                            <label>Captcha Code</label><img src="<?php echo SITEURL;?>/lib/captcha.php" alt="" class="captcha-append">
                            <input type="text" placeholder="<?php echo Core::$word->UA_REG_RTOTAL;?>" name="captcha">      
                            <div class="clearfix content-center">
                            <input data-url="/ajax/user.php" type="button" name="dosubmit2" class="wojo button" style="margin-top:14px;margin-bottom:10px;font-size: 15px;font-weight: bold;color: #259e33;" value="Create Account">
                            </div>
                            <input name="doRegister" type="hidden" value="1">
                            </form>
                            <?php endif;?>
			     	</div>
				</div>
            </div>
            
            <div id="applyModal" class="modalDialog">
			    <div>
                	<a href="#close" title="Close" class="close">X</a>
			        <h4 style="color: #555; text-align: center;">Join the Team</h4>
			        <div id="loginform" class="col-md-5 col-lg-4 login-container">
          				<form action="https://docs.google.com/forms/d/1HzKAPO8LLNtnHRp0NF9Vsc_ELztuAcpvfuJVM-yY0as/" target="_blank">
    						<input type="submit" value="Developer Application">
						</form>
                        <form action="https://docs.google.com/forms/u/0/d/1P45mAbmOMt8HOEh68L7vx-KRYUZCA1EHLi--d2JUrgQ/" target="_blank">
    						<input type="submit" value="Content Tester Application">
						</form>
                        <br>
			     	</div>
				</div>
            </div>

<header>

<div style="background: #fff;">

   <section id="top-navigation" class="container-fluid nopadding">
               			<nav>
        <div class="col-md-12 nopadding">
            <div class="col-md-9 nopadding">
               <ul id="nav" class="row nopadding cd-side-navigation">
               <li class="col-xs-4 col-sm-2 nopadding menuitem green">
                  <a href="index.php" class="hvr-underline-from-center"><i class="flaticon-insignia"></i><span>home</span></a>
               </li>
               <li class="col-xs-4 col-sm-2 nopadding menuitem green">
                  <a href="http://forums.realtbc.com" target="_blank" class="hvr-underline-from-center"><i class="flaticon-profile5"></i><span>Forum</span></a>
               </li>
               <li class="col-xs-4 col-sm-2 nopadding menuitem green">
                  <a href="https://discord.gg/0xjzBRRX754v5hLp" target="_blank" class="hvr-underline-from-center"><i class="flaticon-earphones18"></i><span>Discord</span></a>
               </li>
               <li class="col-xs-4 col-sm-2 nopadding menuitem green">
                  <a href="https://github.com/antisocial89/realtbc_issues/issues" target="_blank" class="hvr-underline-from-center"><i class="flaticon-placeholders4"></i><span>Bug Tracker</span></a>
               </li>
               <li class="col-xs-4 col-sm-2 nopadding menuitem green">
                  <a href="#errorModal" class="hvr-underline-from-center"><i class="flaticon-arrows-4"></i><span>Connect</span></a>
               </li>
               <li class="col-xs-4 col-sm-2 nopadding menuitem green">
                  <a href="#errorModal" class="hvr-underline-from-center"><i class="flaticon-circle-5"></i><span>Support</span></a>
               </li>
            </ul>
        </div>
        	<div class="col-md-3 nopadding">
            	<div class="register">
            		<img class="regicon" src="assets/images/avatar.png" alt="" width="54px" height="54px" />
                    <p class="loginto"><a href="#regModal">Login</a> to personalize your visit and enhance your experience.</p>
                    <p class="loginlast">Don't have one? <a href="#createModal">Create One</a>.</p>
                </div>
            </div>
    </div>
        </nav>
   		<center>
        <img src="assets/images/404.png" alt="404" />
        <h2>Something went wrong</h2>
        <p class="fourohfour">There may have been a page here once, but it's gone now.</p>
        <br>
        </center>
   </section>
</header>
<footer class="padding-50" style="background: #fff;">
   <div class="container-fluid nopadding">
      <div class="row wow fadeInDown" data-wow-delay=".2s" data-wow-offset="10">
         <div class="col-md-6 cv-link">
            <h4 class="font-accident-two-normal uppercase">Navigation</h4>
            <div class="dividewhite1"></div>
            <a class="uppercase" href="http://realtbc.com">Home</a>
            <a class="uppercase" href="http://forums.realtbc.com">Forum</a>
            <a class="uppercase" href="https://discord.gg/0xjzBRRX756aJzQc">Discord</a>
            <a class="uppercase" href="https://github.com/antisocial89/RealTBC_Issue_tracker/issues">Bug Tracker</a>
            <a class="uppercase" href="#errorModal">Connect</a>
            <a class="uppercase" href="#errorModal">Support</a>
            <div class="divider-dynamic"></div>
         </div>
         <div class="col-md-3 social-alignment">
         <div class="social-alignment">
            <h4 class="font-accident-two-normal uppercase">Follow us on</h4>
            <div class="inline-block"><a href="https://www.facebook.com/Realtbc-1634787043427455/" target="_blank"><i class="flaticon-facebook45"></i></a></div>
            <div class="inline-block"><a href="https://twitter.com/real_TBC" target="_blank"><i class="flaticon-twitter39"></i></a></div>
            <div class="inline-block"><a href="#!"><i class="flaticon-youtube33"></i></a></div>
            <div class="divider-dynamic"></div>
         </div>
         </div>
      </div>
      <div class="dividewhite1"></div>
      <div class="row wow fadeInDown" data-wow-delay=".4s" data-wow-offset="10">
         <div class="col-md-12 copyrights">
            <p>World of Warcraft® and Blizzard Entertainment® are all trademarks or registered trademarks of Blizzard Entertainment in the United States and/or other countries. These terms and all related materials, logos, and images are copyright © Blizzard Entertainment. This site is in no way associated with or endorsed by Blizzard Entertainment®.</p>
         </div>
      </div>
   </div>
   
 </div>
</footer>
</body>

<div id="image-cache" class="hidden"></div>

<!-- JS -->
<script src="assets/vendor/jquery/js/jquery-2.2.0.min.js"            type="text/javascript"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.min.js"            type="text/javascript"></script>
<script src="assets/vendor/imagesloaded/js/imagesloaded.pkgd.min.js" type="text/javascript"></script>
<script src="assets/vendor/isotope/js/isotope.pkgd.min.js"           type="text/javascript"></script>
<script src="assets/vendor/mfp/js/jquery.magnific-popup.min.js"      type="text/javascript"></script>
<script src="assets/vendor/circle-progress/circle-progress.js"       type="text/javascript"></script>
<script src="assets/vendor/waypoints/waypoints.min.js"               type="text/javascript"></script>
<script src="assets/vendor/anicounter/jquery.counterup.min.js"       type="text/javascript"></script>
<script src="assets/vendor/wow/wow.min.js"                           type="text/javascript"></script>
<script src="assets/vendor/pjax/jquery.pjax.js"                      type="text/javascript"></script>
<!-- Remove this for disable demo panel script -->
<!--<script src="assets/vendor/styleselector/styleselector.js"           type="text/javascript"></script>-->
<!-- Custom scripts -->
<script src="assets/custom/js/custom.js"                             type="text/javascript"></script>
<script src="assets/js/global.js"></script>
<script src="theme/js/master.js"></script>
<script type="text/javascript">
// <![CDATA[
$(document).ready(function () {
    $('#backto').click(function () {
        $("#passform").slideUp("slow");
        $("#loginform").slideDown("slow");
    });
	$('#backto2').click(function () {
        $("#regform").slideUp("slow");
        $("#loginform").slideDown("slow");
    });
    $('#passreset').click(function () {
        $("#loginform").slideUp("slow");
        $("#passform").slideDown("slow");
    });
	$('#regnow').click(function () {
        $("#loginform").slideUp("slow");
        $("#regform").slideDown("slow");
    });
});
// ]]>
</script>
</body>

</html>
