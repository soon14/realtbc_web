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
   <link href="theme/css/message.css"                                property='stylesheet' rel="stylesheet" type="text/css" media="screen"/>
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
                    <input name="uname" placeholder="Username" type="text">
                    <br />
                    <label>Email</label>
                    <input name="email" placeholder="Email Address" type="text">
                    <br />
                    <label>Captcha Code</label><img src="" alt="" class="captcha-append" />
                    <input name="captcha" placeholder="" type="text">
                    <div class="clearfix"><br>
                    <input data-url="" type="button" name="dosubmit" class="wojo button" style="font-size: 15px;font-weight: bold;color: #259e33;margin-bottom:5px;margin-top:-7px;" value="Reset Password"> <!-- data-url="/ajax/user.php" -->
                    </div>
                    <a href="#regModal">Login</a>
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
                            <form id="wojo_form2" name="wojo_form" method="post">
                            <label>Username</label>
                            <input name="username" placeholder="Username" type="text">
                            <br />
                            <label>Password</label>
                            <input name="pass" placeholder="Password" type="password">
                            <br />
                            <label>Email</label>
                            <input name="email" placeholder="Email Address" type="text">
                            <br />
                            <label>Captcha Code</label><img src="" alt="" class="captcha-append">
                            <input type="text" placeholder="" name="captcha">
                            <div class="clearfix content-center">
                            <input data-url="" type="button" name="dosubmit2" class="wojo button" style="margin-top:14px;margin-bottom:10px;font-size: 15px;font-weight: bold;color: #259e33;" value="Create Account"> <!-- data-url="/ajax/user.php" -->
                            </div>
                            <input name="doRegister" type="hidden" value="1">
                            </form>
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
            	<div class="register">
            		<img class="regicon" src="assets/images/avatar.png" alt="" width="54px" height="54px" />
                    <p class="loginto"><a href="#regModal">Login</a> to personalize your visit and enhance your experience.</p>
                    <p class="loginlast">Don't have one? <a href="#createModal">Create One</a>.</p>
                </div>
            </div>
    </div>
        </nav>

        <div class="col-md-12 nopadding">
            <div class="row nopadding">
            <div class="row nopadding">
                   <div class="col-md-9 wow fadeInDown" style="padding-left: 40px; padding-top:20px; visibility: visible; animation-delay: 0.2s; animation-name: fadeInDown;" data-wow-delay="0.2s" data-wow-offset="10">
                      <div class="row nopadding" style="font-weight: bold; color: #303030;">
                        <h4>Are you a Core or Database Developer? Can you script Dungeons and Raids? We are also recruiting Content Testers. Do you want to make a difference?</h4>
                      </div>
                    </div>
                    <div class="col-md-3 wow fadeInDown">
                        <form class="applybutton" action="#applyModal">
    						<input type="submit" value="Apply Now">
						</form>
                    </div>
                  </div>
               <div class="col-md-6 nopadding">
                  <div class="row nopadding">
                     <div class="col-md-12 fullwidth padding-40 wow fadeInDown" data-wow-delay="0.2s" data-wow-offset="10">
                        <div class="row nopadding">
                           <h3 class="font-accident-two-normal uppercase" style="color: #303030;">About RealTBC</h3>
                           <div class="quote">
                              <h5 class="font-accident-one-bold hovercolor uppercase">We're a team dedicated to bringing you TBC in it's finest form</h5>
                              <div class="dividewhite1"></div>
                              <p class="small">
                                 Forged from the dreams of players from around the world, a community driven to deliver the most complete Burning Crusade server of all time, as it was back when it was playable. The development of RealTBC focuses on creating a stable, enjoyable, and Blizzlike Burning Crusade experience. With a progressive content release system, raids and other content will be released as it happened during Burning Crusade's glory days. A realm that cannot be rivaled by any other community, with a highly efficient and skillful development team we will focus on bringing Outlands and all of Burning Crusade content back to life and playable the way it once was. Join us as we continue to make history!
                              </p>
                           </div>
                             <div class="quote">
                              <h5 class="font-accident-one-bold hovercolor uppercase">What we strive to accomplish</h5>
                              <div class="dividewhite1"></div>
                              <p class="small">
                                 At RealTBC, our development focuses on creating the utmost retail Burning Crusade experience ever. We will never ask for donations, but we will not turn them them away either, as they help us continue to deliver a fantastic gaming experience. There will be no donation shop or vote shopa and players will have to play the game in order to obtain their gear. We will create a system that will allow players to obtain rare TCG Mounts such as the Swift Spectral Tiger. We also intend to implement an anti-cheat system that will make our realms enjoyable to play on, hacker free. With active moderators and game masters working around the clock we will keep our community a safe and enjoyable place to enjoy your favorite expansion with your friends.
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

                <div class="col-md-6 nopadding">
                  <div class="row nopadding">
                    <div class="col-md-12 fullwidth padding-40 wow fadeInDown" data-wow-delay="0.2s" data-wow-offset="10">
                      <div class="row nopadding">
                        <h3 class="font-accident-two-normal uppercase" style="color: #303030;">Announcements</h3>

                      </div>
                    </div>
                  </div>
                </div>
             </div>
          </div>

          <div class="row nopadding">

           <div class="col-md-12 nopadding">

           <h3 class="font-accident-two-normal uppercase fontcolor-invert" style="text-align: center;">Featured Fixes</h3>

           <div class="content-wrap">

   <div id="blog" class="inner-content">

      <!-- Blog Block -->
      <section class="inner-section">

         <div id="isotope-filters" class="port-filter port-filter-light text-center wow fadeInLeft" data-wow-delay="0.6s" data-wow-offset="10">
            <ul>
               <li><a href="#all" data-filter="*">All Featured</a></li>
               <li><a href="#dar" data-filter=".dar">Dungeon & Raid</a></li>
               <li><a href="#quests" data-filter=".quests">Quests</a></li>
            </ul>
         </div>

         <div class="dividewhite3"></div>

         <div class="grid container-fluid text-center wow fadeInDown" data-wow-delay="0.6s" data-wow-offset="10">

            <div id="posts" class="row popup-container">

                  <div class="grid-item dar design col-md-4 col-sm-6">
                     <div class="item-wrap">
                        <figure class="">
                           <div class="popup-call">
                              <a href="#errorModal"><i class="flaticon-youtube33"></i></a>
                           </div>
                           <img src="assets/custom/images/blog/thumbs/01.jpg" class="img-responsive" alt="img11"/>
                           <figcaption>
                              <div class="post-header">
                                 <h5><a href="blogpost.html">Hellfire Ramparts Revamped</a></h5>
                              </div>
                              <div class="post-entry">
                              </div>
                              <div class="post-tag pull-left">
                                 <span><a href="#dar" data-filter=".dar">Dungeon & Raid</a></span><span>
                              </div>
                           </figcaption>
                        </figure>
                     </div>
                  </div>

                    <div class="grid-item grid-sizer dar col-md-4 col-sm-6">
                     <div class="item-wrap">
                        <figure class="">
                           <div class="popup-call">
                              <a href="#errorModal" class="gallery-item"><i class="flaticon-youtube33"></i></a>
                           </div>
                           <img src="assets/custom/images/blog/thumbs/02.jpg" class="img-responsive" alt="img03"/>
                           <figcaption>
                              <div class="post-header">
                                 <h5><a href="blogpost.html">Coming Soon</a></h5>
                              </div>
                              <div class="post-entry">
                              </div>
                              <div class="post-tag pull-left">
                                 <span><a href="#dar" data-filter=".dar">Dungeon & Raid</a></span>
                              </div>
                           </figcaption>
                        </figure>
                     </div>
                  </div>

                  <div class="grid-item quests col-md-4 col-sm-6">
                     <div class="item-wrap">
                        <figure class="">
                           <div class="popup-call">
                              <a href="#errorModal" class="gallery-item"><i class="flaticon-youtube33"></i></a>
                           </div>
                           <img src="assets/custom/images/blog/thumbs/02.jpg" class="img-responsive" alt="img11"/>
                           <figcaption>
                              <div class="post-header">
                                 <h5><a href="blogpost.html">Coming Soon</a></h5>
                              </div>
                              <div class="post-entry">
                              </div>
                              <div class="post-tag pull-left">
                                 <span><a href="#quests" data-filter=".quest">Quests</a></span>
                              </div>
                           </figcaption>
                        </figure>
                     </div>
                  </div>

				</div>
            </div>

         <div class="dividewhite8"></div>

      </section>
      <!-- /Blog Block -->

   </div>

</div>

		   <div class="clear"></div>

           </div>

          </div>

          <div class="row nopadding">

         <div class="col-md-12 circle-skills nopadding height-400">
            <div class="padding-50 wow fadeInDown" data-wow-delay="0.6s" data-wow-offset="5" style="margin-left: 60px; margin-top: -40px;">
               <h3 class="font-accident-two-normal uppercase fontcolor-invert" style="text-align: center; margin-left: -60px;">Development Progress</h3>
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
                        <h6 class="uppercase dark">The Dark Portal Opens is the world event sparked with patch 2.0.3, immediately preceding the release of World of Warcraft: The Burning Crusade where the Dark Portal reopened.</h6>
                     </div>
                  </div>
               </li>
               <li class="timeline-inverted">
                  <div class="timeline-badge success"><i class="flaticon-arrows"></i></div>
                  <div class="timeline-panel wow fadeInRight" data-wow-delay="0.3s" data-wow-offset="10">
                     <p class="timeline-time fontcolor-timeline"><i class="glyphicon glyphicon-time"></i> To be determined</p>
                     <div class="timeline-photo timeline-bg02-01"></div>
                     <div class="timeline-heading">
                        <h3 class="font-accident-two-normal uppercase">The Black Temple | Patch 2.1</h3>
                        <h6 class="uppercase dark">The Black Temple is the fortress-citadel of Illidan Stormrage, Lord of Outland. It was once known as the Temple of Karabor, and has changed hands many times over the generations.</h6>
                     </div>
                  </div>
               </li>
               <li>
                  <div class="timeline-badge danger"><i class="flaticon-arrows"></i></div>
                  <div class="timeline-panel wow fadeInLeft" data-wow-delay="0.3s" data-wow-offset="10">
                     <p class="timeline-time fontcolor-timeline"><i class="glyphicon glyphicon-time"></i> To be determined</p>
                     <div class="timeline-photo timeline-bg03-01"></div>
                     <div class="timeline-heading">
                        <h3 class="font-accident-two-normal uppercase">The Gods of Zul'Aman | Patch 2.3</h3>
                        <h6 class="uppercase dark">The stronghold of Zul'Aman has stood for millennia as the Amani trolls' seat of power and bastion of the fearless, cunning warlord Zul'jin.</h6>
                     </div>
                  </div>
               </li>
               <li class="timeline-inverted info">
                  <div class="timeline-badge warning"><i class="flaticon-circle"></i></div>
                  <div class="timeline-panel wow fadeInRight" data-wow-delay="0.3s" data-wow-offset="10">
                     <p class="timeline-time fontcolor-timeline"><i class="glyphicon glyphicon-time"></i> To be determined</p>
                     <div class="timeline-photo timeline-bg04-01"></div>
                     <div class="timeline-heading">
                        <h3 class="font-accident-two-normal uppercase">Fury of the Sunwell | Patch 2.4</h3>
                        <h6 class="uppercase dark">The glorious fount of arcane energy known as the Sunwell empowered the high elves for millennia, until the death knight Arthas laid siege to the elven kingdom and corrupted its sacred energies. Seeing no other alternative, a band of survivors led by Prince Kael'thas destroyed the ancient fount. Over time the surviving elves fell prey to a crippling magical withdrawal.</h6>
                     </div>
                  </div>
               </li>
            </ul>
            <div class="dividewhite4"></div>
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
