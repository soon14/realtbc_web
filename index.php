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

   <section id="top-navigation" class="container-fluid nopadding">
   <img style="width:1220px;" src="./assets/custom/images/banner.jpg" />
   </section>

   <section id="top-navigation" class="container-fluid nopadding">
      <div class="row nopadding ident e-bg-light-texture">

         <!-- Photo 
            <div class="col-md-5 col-lg-4 vc-photo">
				      <form class="login" action="" method="post">
                	<label>Username</label>
                    <br>
                    <input type="text" id="username">
                    <label>Password</label>
                    <br>
                    <input type="password" id="password">
                    <br>
                    <input type="submit" value="Login">
                    <p>Don't have an account? <a href="#">Create one.</a></p>
                </form>
            </div>-->
         <!-- /Photo -->

         <div class="col-md-7 col-lg-8 vc-name nopadding">
            <!-- Name-Position -->
            <div class="row nopadding name">
               <div class="col-md-10 name-title"><h2 class="font-accident-two-light uppercase">Download & Help Us!</h2></div>
               <div class="col-md-2 nopadding name-pdf">
                  <a href="#openModal" class="hvr-sweep-to-right"><i class="flaticon-download149" title="Download"></i></a>
               </div>
            </div>
            <div class="row nopadding position">
               <div class="col-md-10 position-title">

                  <section class="cd-intro">
                     <h4 class="cd-headline clip is-full-width font-accident-two-normal uppercase">
                        <span>Join and </span>
                        <span class="cd-words-wrapper">
                           <b class="is-visible">Help us find bug and exploits</b>
                           <b>Get to know the community</b>
                           <b>help shape the future for TBC</b>
                        </span>
                     </h4>
                  </section>

               </div>

            </div>
            <!-- /Name-Position -->

            <!-- Main Navigation -->

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
                  <a href="#openModal" class="hvr-sweep-to-bottom"><i class="flaticon-circle-5"></i><span>Support</span></a>
               </li>
            </ul>

			<div id="openModal" class="modalDialog">
			    <div>	<a href="#close" title="Close" class="close">X</a>

			        	<h2 style="color: #555">We're sorry about that</h2>

			        <p>RealTBC is still under heavy development. <strong>This feature is currently disabled.</strong></p>
			        <p>We update our page frequently and can't wait to provide you all with the best TBC experience ever created!</p>
                    <p>In the meantime, feel free to join us on our Community Forum.</p>
			    </div>
			</div>
            <!-- /Main Navigation -->
         </div>

        <div id="loginform" class="col-md-5 col-lg-4 login-container" style="padding-left:20px; padding-right:20px; height:360px;">
          <form method="post" id="login_form" name="login_form"> 
          <h3 style="color: #303030; margin: 5px auto; text-align: center;">Account Management</h3>
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
          <p>Forgot your password? <a id="passreset">Recover it</a>.</p>
          <p>Don't have an account? <a id="regnow">Create one</a>.</p>
          <p class="realmlist">set realmlist logon.realtbc.com</p>
        </div>
        <div id="passform" class="col-md-5 col-lg-4 login-container" style="display:none; padding-left:20px; padding-right:20px; height:360px;">
            <form id="wojo_form" name="wojo_form" method="post">
              <h3 style="color: #303030; margin: 5px auto; text-align: center;">Password Reset</h3>
              <label>Username</label>
              <input name="uname" placeholder="<?php echo Core::$word->USERNAME;?>" type="text">
              <br />
              <label>Email</label>
              <input name="email" placeholder="<?php echo Core::$word->UR_EMAIL;?>" type="text">
              <br />
              <label>Captcha Code</label><img src="<?php echo SITEURL;?>/lib/captcha.php" alt="" class="captcha-append" />
              <input name="captcha" placeholder="<?php echo Core::$word->UA_PASS_RTOTAL;?>" type="text">
              <div class="clearfix">
              <button data-url="/ajax/user.php" type="button" name="dosubmit" class="wojo button">Recover Account</button>
              </div>
              <div class="backtofix"><a id="backto"><?php echo Core::$word->UA_BLOGIN;?></a></div>
              <input name="passReset" type="hidden" value="1">
            </form>
         </div>
         <div id="regform" class="col-md-5 col-lg-4 login-container" style="display:none; padding-left:20px; padding-right:20px; height:360px;">
          <h3 style="color: #303030; margin: 5px auto; text-align: center;">Create an Account</h3>
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
              <button data-url="/ajax/user.php" type="button" name="dosubmit2" value="Create Account">Create Account</button>
            </div>
            <a id="backto2"><?php echo Core::$word->UA_BLOGIN;?></a>
            <input name="doRegister" type="hidden" value="1">
          </form>
          <?php endif;?>
        </div>
      </div>
   </section>

</header>

<div class="col-md-12 nopadding">
            <div class="row nopadding">
                   <div class="col-md-12 fullwidth padding-30 wow fadeInDown" style="margin-left: 30px; margin-bottom: -40px;" data-wow-delay="0.2s" data-wow-offset="10">
                      <div class="row nopadding" style="font-weight: bold; color: #303030;">
                        <h4>Are you a core or database developer? Can you script events in ScriptDev2? Can you create and edit amazing videos? Want to be a Game Master?
                        <a class="apply" href="https://docs.google.com/forms/d/1HzKAPO8LLNtnHRp0NF9Vsc_ELztuAcpvfuJVM-yY0as/" target="_blank">Apply Now!</a></h4>
                      </div>
                    </div>
                  </div>
              </div>
            
          </body>

        <div class="col-md-12 nopadding">
            <div class="row nopadding">
               <div class="col-md-6 nopadding">
                  <div class="row nopadding">
                     <div class="col-md-12 fullwidth padding-50 wow fadeInDown" data-wow-delay="0.2s" data-wow-offset="10">
                        <div class="row nopadding">
                           <h3 class="font-accident-two-normal uppercase" style="color: #303030;">About RealTBC</h3>
                           <div class="quote">
                              <h5 class="font-accident-one-bold hovercolor uppercase">We're a team dedicated to bringing you TBC in it's finest form</h5>
                              <div class="dividewhite1"></div>
                              <p class="small">
                                 Forged from the dreams of players from around the world, a community driven to deliver the most complete Burning Crusade server of all time, as it was back when it was playable. The development of RealTBC focuses on creating a stable, enjoyable, and completely Blizzlike Burning Crusade experience. With the goal of a progressive content release system, raids and other content will be released as it happened during Burning Crusade's glory days. A server aiming to not be rivaled by any other community, with a highly efficient and skillful development team we will focus on bringing the Outlands and all of Burning Crusade content back to life and playable the way it once was. Join us as we continue to make history!
                              </p>
                           </div>
                             <div class="quote">
                              <h5 class="font-accident-one-bold hovercolor uppercase">What we strive to accomplish</h5>
                              <div class="dividewhite1"></div>
                              <p class="small">
                                 At RealTBC, our development focuses on creating the utmost retail Burning Crusade experience ever. We will never ask for donations, but we will not turn them them away either, as they help us continue to deliver a fantastic gaming experience, there will be no donation shop or vote shop, players will have to play the game in order to obtain their gear. We will create a system that will allow players to obtain rare TCG Mounts such as the Swift Spectral Tiger. We also intend to implement an anti-cheat system that will make our realms enjoyable to play on, hacker free. With active moderators and game masters working around the clock we will keep our community a safe and enjoyable place to enjoy your favorite expansion with your friends.
                              </p>
                           </div>
                          <div class="quote">
                              <h5 class="font-accident-one-bold hovercolor uppercase">Our Plans</h5>
                              <div class="dividewhite1"></div>
                              <p class="small"> At RealTBC's release, players will be able to explore all of the content available during the "Dark Portal Opens Event". Our first goal is to ensure that spells, talents, dungeons, raids, and quests work correctly for launch. With that said, we will be holding numerous open testing phases for players to help us with development of RealTBC. We plan on holding a pre-alpha, open alpha, pre-beta, and open beta in which any player will be able to login and play on our realm and help us obtain information on various exploits and bugs. Only certain dungeons and raids will be available at launch. We will then continue to implement a series of content releases that will enable players to face Archimonde, Illidan, and much more.</p>
                            </div>
                        </div>
                        <div class="divider-dynamic"></div>
                     </div>
                  </div>
               </div>

<!-- Container -->

                <div class="col-md-6 nopadding ">
                  <div class="row nopadding">
                    <div class="col-md-12 fullwidth padding-50 wow fadeInDown" data-wow-delay="0.2s" data-wow-offset="10">
                      <div class="row nopadding">
                        <h3 class="font-accident-two-normal uppercase" style="color: #303030;">Announcements</h3>
                        	<?php 
                          	$feed_url = 'http://forums.realtbc.com/index.php?forums/announcements.2/index.rss'; 
                          	$xml_data = simplexml_load_file($feed_url);

                          	$i=0; 
                          	foreach($xml_data->channel->item as $ritem) { 

                          	$e_title       = (string)$ritem->title; 
                          	$e_link        = (string)$ritem->link; 
                          	$e_pubDate     = (string)$ritem->pubDate; 
                          	$e_author      = (string)$ritem->author;
                          	$e_content     = $ritem->children("content", true);
                          	$e_encoded     = (string)$e_content->encoded; 
                            $description   = substr($e_encoded, 0, 350).'<a style="font-weight: bold;" href="' . $e_link . '"> ...Read More</a>';

                          	$n = ($i+1);
                          	print "\n"; 
                          	print '<h5 class="font-accident-one-bold hovercolor uppercase" style="margin-bottom: 5px;"><a href="' . $e_link . '">'. $e_title .'</a></h2>'."\n"; 
                  			print '<p class="date" style="margin: 0px;">'. str_replace('+0000', '', $e_pubDate) .'</p>'."\n"; 
                          	print '<p style="margin: 0px;"> <strong>By '. str_replace('invalid@example.com', '', $e_author) .'</strong></p>'."\n"; 
                          	print '<p class="small" style="margin-top: 5px; padding-bottom: 5px;">'. $description .'</p>'."\n"; 

                          	$i++; 
                          	}
							
                          	?>
                      </div>
                    </div>
                  </div>
                </div>
             </div>
          </div>
      


      <div class="row nopadding" style="background: #fff;">

         <div class="col-md-12 circle-skills nopadding height-400" style="background: #fff;">
            <div class="padding-50 wow fadeInLeft" data-wow-delay="0.6s" data-wow-offset="5" style="margin-left: 50px;">
               <h3 class="font-accident-two-normal uppercase fontcolor-invert" style="text-align: center; margin-left: -55px;">Development Progress</h3>
               <div class="row">
                  <div class="col-sm-4 nopadding">
                     <div class="progressbar" data-animate="false">
                        <div class="circle font-accident-one-normal fontcolor-invert" data-percent="1">
                           <div></div>
                           <h4 class="font-accident-one-normal uppercase circle-one">Overall</h4>
                           <p class="small">
                              TBD
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-4 nopadding">
                     <div class="progressbar" data-animate="false">
                        <div class="circle font-accident-one-normal fontcolor-invert" data-percent="1">
                           <div></div>
                           <h4 class="font-accident-one-normal uppercase circle-two">Raids</h4>
                           <p class="small">
                              TBD
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-4 nopadding">
                     <div class="progressbar" data-animate="false">
                        <div class="circle font-accident-one-normal fontcolor-invert" data-percent="1">
                           <div></div>
                           <h4 class="font-accident-one-normal uppercase circle-three">Dungeons</h4>
                           <p class="small">
                              TBD
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-4 nopadding">
                     <div class="progressbar" data-animate="false">
                        <div class="circle font-accident-one-normal fontcolor-invert" data-percent="1">
                           <div></div>
                           <h4 class="font-accident-one-normal uppercase circle-four">Battlegrounds</h4>
                           <p class="small">
                             TBD
                           </p>
                        </div>
                     </div>
                  </div>
                    <div class="col-sm-4 nopadding">
                     <div class="progressbar" data-animate="false">
                        <div class="circle font-accident-one-normal fontcolor-invert" data-percent="1">
                           <div></div>
                           <h4 class="font-accident-one-normal uppercase circle-five">Spells</h4>
                           <p class="small">
                             TBD
                           </p>
                        </div>
                     </div>
                  </div>
                    <div class="col-sm-4 nopadding">
                     <div class="progressbar" data-animate="false">
                        <div class="circle font-accident-one-normal fontcolor-invert" data-percent="1">
                           <div></div>
                           <h4 class="font-accident-one-normal uppercase circle-six">Talents</h4>
                           <p class="small">
                              TBD
                           </p>
                        </div>
                     </div>
                  </div>
                    <div class="col-sm-4 nopadding">
                     <div class="progressbar" data-animate="false">
                        <div class="circle font-accident-one-normal fontcolor-invert" data-percent="1">
                           <div></div>
                           <h4 class="font-accident-one-normal uppercase circle-seven">Quests</h4>
                           <p class="small">
                             TBD
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-4 nopadding">
                     <div class="progressbar" data-animate="false">
                        <div class="circle font-accident-one-normal fontcolor-invert" data-percent="1">
                           <div></div>
                           <h4 class="font-accident-one-normal uppercase circle-eight">Professions</h4>
                           <p class="small">
                             TBD
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
   </section>
</div>

      <!-- Timeline Block -->
      <section id="timeline-vertical" class="inner-section">

         <div class="container-fluid nopadding timeline-background">
            <div class="dividewhite4"></div>
            <div class="text-center wow fadeInDown" data-wow-delay="0.6s" data-wow-offset="10">
               <h3 class="font-accident-two-normal uppercase" style="color: #2A2A2A;">Progressive Timeline</h3>
               <div class="dividewhite1"></div>
            </div>

            <ul class="timeline-vert timeline-light">
               <li>
                  <div class="timeline-badge primary"><i class="flaticon-circle-1"></i></div>
                  <div class="timeline-panel wow fadeInLeft" data-wow-delay="0.3s" data-wow-offset="10">
                     <p class="timeline-time fontcolor-timeline"><i class="glyphicon glyphicon-time"></i> Available upon release</p>
                     <div class="timeline-photo timeline-bg01-01"></div>
                     <div class="timeline-heading">
                        <h3 class="font-accident-two-normal uppercase">Dark Portal Opens | Patch 2.0.3</h3>
                        <h6 class="uppercase">The Dark Portal Opens is the world event sparked with patch 2.0.3, immediately preceding the release of World of Warcraft: The Burning Crusade where the Dark Portal reopened.</h6>
                     </div>
                  </div>
               </li>
               <li class="timeline-inverted">
                  <div class="timeline-badge success"><i class="flaticon-arrows"></i></div>
                  <div class="timeline-panel wow fadeInRight" data-wow-delay="0.3s" data-wow-offset="10">
                     <p class="timeline-time fontcolor-timeline" style="background: #888;"><i class="glyphicon glyphicon-time"></i> To be determined</p>
                     <div class="timeline-photo timeline-bg02-01"></div>
                     <div class="timeline-heading">
                        <h3 class="font-accident-two-normal uppercase" style="color: #303030;">The Black Temple | Patch 2.1</h3>
                        <h6 class="uppercase" style="color: #303030;">The Black Temple is the fortress-citadel of Illidan Stormrage, Lord of Outland. It was once known as the Temple of Karabor, and has changed hands many times over the generations.</h6>
                     </div>
                  </div>
               </li>
               <li>
                  <div class="timeline-badge danger"><i class="flaticon-arrows"></i></div>
                  <div class="timeline-panel wow fadeInLeft" data-wow-delay="0.3s" data-wow-offset="10">
                     <p class="timeline-time fontcolor-timeline" style="background: #888;"><i class="glyphicon glyphicon-time"></i> To be determined</p>
                     <div class="timeline-photo timeline-bg03-01"></div>
                     <div class="timeline-heading">
                        <h3 class="font-accident-two-normal uppercase" style="color: #303030;">The Gods of Zul'Aman | Patch 2.3</h3>
                        <h6 class="uppercase" style="color: #303030;">The stronghold of Zul'Aman has stood for millennia as the Amani trolls' seat of power and bastion of the fearless, cunning warlord Zul'jin.</h6>
                     </div>
                  </div>
               </li>
               <li class="timeline-inverted info">
                  <div class="timeline-badge warning"><i class="flaticon-circle"></i></div>
                  <div class="timeline-panel wow fadeInRight" data-wow-delay="0.3s" data-wow-offset="10">
                     <p class="timeline-time fontcolor-timeline" style="background: #888;"><i class="glyphicon glyphicon-time"></i> To be determined</p>
                     <div class="timeline-photo timeline-bg04-01"></div>
                     <div class="timeline-heading">
                        <h3 class="font-accident-two-normal uppercase" style="color: #303030;">Fury of the Sunwell | Patch 2.4</h3>
                        <h6 class="uppercase" style="color: #303030;">The glorious fount of arcane energy known as the Sunwell empowered the high elves for millennia, until the death knight Arthas laid siege to the elven kingdom and corrupted its sacred energies. Seeing no other alternative, a band of survivors led by Prince Kael'thas destroyed the ancient fount. Over time the surviving elves fell prey to a crippling magical withdrawal.</h6>
                     </div>
                  </div>
               </li>
            </ul>
            <div class="dividewhite4"></div>
         </div>

      </section>
      <!-- /Timeline Block -->
<footer class="padding-50">
   <div class="container-fluid nopadding">
      <div class="row wow fadeInDown" data-wow-delay=".2s" data-wow-offset="10">
         <div class="col-md-6 cv-link">
            <h4 class="font-accident-two-normal uppercase">Navigation</h4>
            <div class="dividewhite1"></div>
            <a class="uppercase" href="index.html">Home</a>
            <a class="uppercase" href="#openModal">Forum</a>
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
</footer>
</div>

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
