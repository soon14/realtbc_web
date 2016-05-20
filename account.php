<?php
  define("_VALID_PHP", true);
  require_once("init.php");
  
  if (!$user->logged_in)
      redirect_to("index.php");
	  
  $row = $user->getUserData();
  $mrow = $user->getUserMembership();
  $gatelist = $member->getGateways(true);
  $listpackrow = $member->getMembershipListFrontEnd();
  $datacountry = $content->getCountryList();
  $utransrow = $member->getUserTransactions();
  $pcheck = $core->paypack;
?>
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

</head>

<div class="reallogo"></div>
<div class="illidan"><</div>

<div class="clear"></div>

<body class="boxed">

<div class="global">

<div class="socialicons">
	<ul>
		<li><a href="https://www.facebook.com/Realtbc-1634787043427455/" target="_blank"><i class="fa fa-facebook"></i></a></li>
		<li><a href="https://twitter.com/real_TBC" target="_blank"><i class="fa fa-twitter"></i></a></li>
		<li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
	</ul>
</div>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6&appId=1740899199477936";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>
<header>

   <section id="top-navigation" class="container-fluid nopadding">
			<nav>
        <div class="col-md-12 nopadding">
            <div class="col-md-9 nopadding">
               <ul id="nav" class="row nopadding cd-side-navigation">
               <li class="col-xs-4 col-sm-2 nopadding menuitem green">
                  <a href="index.php" class="hvr-underline-from-center"><i class="fa fa-globe"></i><span>home</span></a>
               </li>
               <li class="col-xs-4 col-sm-2 nopadding menuitem green">
                  <a href="http://forums.realtbc.com" target="_blank" class="hvr-underline-from-center"><i class="fa fa-comments-o"></i><span>Forum</span></a>
               </li>
               <li class="col-xs-4 col-sm-2 nopadding menuitem green">
                  <a href="https://discord.gg/0xjzBRRX754v5hLp" target="_blank" class="hvr-underline-from-center"><i class="fa fa-headphones"></i><span>Discord</span></a>
               </li>
               <li class="col-xs-4 col-sm-2 nopadding menuitem green">
                  <a href="https://github.com/antisocial89/realtbc_issues/issues" target="_blank" class="hvr-underline-from-center"><i class="fa fa-exclamation"></i><span>Bug Tracker</span></a>
               </li>
               <li class="col-xs-4 col-sm-2 nopadding menuitem green">
                  <a href="#errorModal" class="hvr-underline-from-center"><i class="fa fa-plug"></i><span>Connect</span></a>
               </li>
               <li class="col-xs-4 col-sm-2 nopadding menuitem green">
                  <a href="#errorModal" class="hvr-underline-from-center"><i class="fa fa-shield"></i><span>Armory</span></a>
               </li>
            </ul>
        </div>
            <div class="col-md-3 nopadding">
            	<ul id="nav" class="row nopadding cd-side-navigation">
                <li class="col-xs-4 col-sm-6 nopadding menuitem green">
                  <a href="account.php" class="hvr-underline-from-center"><i class="flaticon-paper40" style="padding-top:0px;"></i><span style="margin-top:-13px;">My Account</span></a>
                </li>
                <li class="col-xs-4 col-sm-6 nopadding menuitem red">
                  <a href="logout.php" class="hvr-underline-from-center"><i class="flaticon-circle-3" style="padding-top:0px;"></i><span style="margin-top:-13px;">Logout</span></a>
                </li>
                </ul>
            </div>
    </div>
        </nav>
<div id="wrap" class="top-space">
  <div class="col-md-12 nopadding">
  	  <div class="col-md-6 padding-40">
            <div id="account" class="wojo tab data">
              <h3 class="font-accident-two-normal uppercase" style="color: #303030;">My Account</h3>
              <form id="wojo_form" name="wojo_form" method="post">
                <label>Username</label>
                <div class="field">
                  <input name="username" type="text" disabled="disabled" value="<?php echo $row->username;?>"></div>
                </div>
                <label>Password</label>
                <div class="field">
                  <input name="password" placeholder="<?php echo Core::$word->PASSWORD;?>" type="password">
                </div>
                <label>Email</label>
                <div class="field">
                  <input name="email" placeholder="<?php echo Core::$word->EMAIL;?>" type="text" value="<?php echo $row->email;?>">
                </div>
                <?php echo $content->rendertCustomFields('profile', $row->custom_fields, "two", false);?>
                <label>Last Login Date</label>
                <div class="two fields">
                  <div class="field disabled">
                    <input name="lastlogin" title="<?php echo Core::$word->UR_LASTLOGIN;?>" type="text" disabled value="<?php echo (strtotime($row->lastlogin) === false) ? "-/-" : Filter::dodate("long_date", $row->lastlogin);?>" readonly>
                  </div>
                  <div class="field disabled">
                  <label>Last Login IP</label>
                    <input name="lastip" title="<?php echo Core::$word->UR_LASTLOGIN_IP;?>" type="text" disabled value="<?php echo $row->lastip;?>" readonly>
                  </div>
                </div>
                <label>Date Registered</label>
                <div class="two fields">
                  <div class="field disabled">
                    <input name="created" type="text" title="<?php echo Core::$word->UR_DATE_REGGED;?>" disabled value="<?php echo Filter::dodate("long_date", $row->created);?>" readonly>
                  </div>
                  <div class="field">
                    <label><?php echo Core::$word->UR_IS_NEWSLETTER;?></label>
                    <div style="width:15px;">
                      <input type="checkbox" name="newsletter" value="1" <?php getChecked($row->newsletter, 1); ?>>
                    </div>
                  </div>
                </div>
                <div style="width:160px;margin: 0 auto;">
                  <input data-url="/ajax/controller.php" type="button" name="dosubmit" class="wojo button" value="Update Profile" style="margin-top:14px;margin-bottom:10px;font-size: 15px;font-weight: bold;color: #259e33;width:160px;">
                </div>
                <input name="processUser" type="hidden" value="1">
              </form>
            </div>
          </div>
        </div>
</section>
      
      <footer class="padding-50">
   <div class="container-fluid nopadding">
      <div class="row wow fadeInDown" data-wow-delay=".2s" data-wow-offset="10">
         <div class="col-md-6 cv-link">
            <h4 class="font-accident-two-normal uppercase">Navigation</h4>
            <div class="dividewhite1"></div>
            <a class="uppercase" href="index.php">Home</a>
            <a class="uppercase" href="https://forums.realtbc.com/">Forum</a>
            <a class="uppercase" href="https://discord.gg/0xjzBRRX756aJzQc">Discord</a>
            <a class="uppercase" href="https://github.com/antisocial89/realtbc_issues/issues">Bug Tracker</a>
            <a class="uppercase" href="#errorModal">Connect</a>
            <a class="uppercase" href="#errorModal">Support</a>
            <div class="divider-dynamic"></div>
         </div>
         <div class="col-md-3 social-alignment">
         <div class="social-alignment">
            <h4 class="font-accident-two-normal uppercase">Follow us on</h4>
            <div class="inline-block foot"><a href="https://www.facebook.com/Realtbc-1634787043427455/" target="_blank"><i class="fa fa-facebook"></i></a></div>
            <div class="inline-block foot"><a href="https://twitter.com/real_TBC" target="_blank"><i class="fa fa-twitter"></i></a></div>
            <div class="inline-block foot"><a href="#!"><i class="fa fa-youtube-play"></i></a></div>
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
</footer>
   
</div>

</header>

</div>

</body>
<script type="text/javascript" src="assets/js/jquery.js"></script>
<script type="text/javascript" src="assets/js/jquery-ui.js"></script>
<script src="assets/js/global.js"></script>
<script src="theme/js/master.js"></script>
<script src="assets/js/jquery.ui.touch-punch.js"></script>
<script type="text/javascript">
// <![CDATA[
$(document).ready(function() {
    $('#plans').elasticColumns({
        innerMargin: 36,
        outerMargin: 0,
        columns: 2
    });
    $("body").on("click", "a.add-cart", function() {
        var id = $(this).data('id');
        price = $(this).data('price');
        $.ajax({
            type: "POST",
			dataType:'json',
            url: SITEURL + "/ajax/controller.php",
            data: {
                addtocart: 1,
                id: id,
                price: price
            },
            success: function(json) {
                $("#show-result").html(json.message);
				$('html, body').animate({
					scrollTop: $("#wrap").offset().top
				}, 1000);
            }
        });
        return false;
    });
    $("body").on("click", "input[name='gateway']", function() {
        var id = $(this).prop('value');
		var mid = $(this).data('gateway');
        $.ajax({
            type: "GET",
			dataType:'json',
            url: SITEURL + "/ajax/controller.php",
            data: {
                loadGateway: 1,
                id: id,
				mid: mid
            },
            success: function(json) {
				$("#gdata").html(json.message);
				$('html, body').animate({
					scrollTop: $("#gatedata").offset().top
				}, 500);
            }
        });
    });
    $("body").on("click", "#cinput", function() {
        var id = $(this).data('id');
        var $code = $("input[name=coupon]");
        if (!$code.val()) {
            $code.closest('div').addClass('error');
        } else {
            $.ajax({
                type: "get",
                dataType: 'json',
                url: SITEURL + "/ajax/controller.php",
                data: {
                    doCoupon: 1,
                    id: id,
                    code: $code.val()
                },
                success: function(json) {
                    if (json.type == "success") {
                        $code.closest('div').removeClass('error');
                        $(".totaltax").html(json.tax);
                        $(".totalamt").html(json.gtotal);
                        $(".disc").html(json.disc);
                        $(".disc").parent().addClass('error');
                    } else {
                        $code.closest('div').addClass('error');
                    }
                }

            });
        }
        return false;
    });
});
// ]]>
</script>