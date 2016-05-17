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

   <title>RealTBC - Home</title>
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

<header>

<div style="background: #fff;">

   <section id="top-navigation" class="container-fluid nopadding">
   <img style="width:1220px;" src="./assets/custom/images/banner.jpg" />
               <ul id="nav" class="row nopadding cd-side-navigation">
               <li class="col-xs-4 col-sm-2 nopadding menuitem green">
                  <a href="http://realtbc.com" class="hvr-sweep-to-bottom"><i class="flaticon-insignia"></i><span>home</span></a>
               </li>
               <li class="col-xs-4 col-sm-2 nopadding menuitem green">
                  <a href="http://forums.realtbc.com" target="_blank" class="hvr-sweep-to-bottom"><i class="flaticon-profile5"></i><span>Forum</span></a>
               </li>
               <li class="col-xs-4 col-sm-2 nopadding menuitem green">
                  <a href="https://discord.gg/0xjzBRRX754v5hLp" target="_blank" class="hvr-sweep-to-bottom"><i class="flaticon-earphones18"></i><span>Discord</span></a>
               </li>
               <li class="col-xs-4 col-sm-2 nopadding menuitem green">
                  <a href="https://github.com/antisocial89/RealTBC_Issue_tracker/issues" target="_blank" class="hvr-sweep-to-bottom"><i class="flaticon-placeholders4"></i><span>Bug Tracker</span></a>
               </li>
               <li class="col-xs-4 col-sm-2 nopadding menuitem green">
                  <a href="#openModal" class="hvr-sweep-to-bottom"><i class="flaticon-arrows-4"></i><span>Connect</span></a>
               </li>
               <li class="col-xs-4 col-sm-2 nopadding menuitem green">
                  <a href="http://realtbc.com/support" class="hvr-sweep-to-bottom"><i class="flaticon-circle-5"></i><span>Support</span></a>
               </li>
            </ul>
   		<center>
        <img src="assets/images/404.png" alt="404" />
        <h2>Error 404</h2>
        <h3>This page has been lost in the Twisting Nether.</h3>
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
            <a class="uppercase" href="#openModal">Connect</a>
            <a class="uppercase" href="#openModal">Support</a>
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
