<?php
include_once 'common.php';
error_reporting(E_ERROR);
$mobile = $_GET['mobile']? $_GET['mobile'] : '0';
header('Content-Type: text/html; charset=UTF-8');
?>
<!DOCTYPE html>
<html lang="en">
  <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.ico">

    <title><?php echo $lang['PAGE_TITLE']; ?></title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/js/fancybox/jquery.fancybox.css" rel="stylesheet" />

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body data-spy="scroll" data-offset="0" data-target="#theMenu">
  <?php 
	if ($mobile == 0)
	{ ?>
	  	<div id="languages">
			<a href="index.php?lang=eu">Euskara</a> / 
			<a href="index.php?lang=es"><?php echo utf8_encode("Español"); ?></a>
		</div>
	
		<!-- Menu -->
		<nav class="menu" id="theMenu">
			<div class="menu-wrap">
				<a href="index.php#home" class="smoothScroll"><?php echo $lang['MENU_HOME']; ?></a>
				<a href="#about" class="smoothScroll"><?php echo $lang['MENU_WHAT_IS']; ?></a>
				<!--<a href="#portfolio" class="smoothScroll"><?php echo $lang['MENU_PORTFOLIO']; ?></a>-->
				<a href="#services" class="smoothScroll"><?php echo $lang['MENU_FUNCTIONS']; ?></a>
	            <!--<a href="#talk_about" class="smoothScroll"><?php echo $lang['MENU_TALK_ABOUT']; ?></a>-->
	            <a href="#faq" class="smoothScroll"><?php echo $lang['MENU_FAQ']; ?></a>
				<!--<a href="index.php#contact" class="smoothScroll"><?php echo $lang['MENU_CONTACT_US']; ?></a>-->
				<a href="https://www.facebook.com/races.servirace/" target="_blank"><i class="fa fa-facebook"></i></a>
				<a href="http://www.twitter.com/mugan86" target="_blank"><i class="fa fa-twitter"></i></a>
				<!--<a href="mailto:servirace.app@gmail.com" target="_blank"><i class="fa fa-dribbble"></i></a>-->
				<a href="mailto:servirace.app@gmail.com" target="_blank"><i class="fa fa-envelope"></i></a>
			</div>
	
			<!-- Menu button -->
			<div id="menuToggle"><i class="fa fa-bars"></i></div>
		</nav>
		<?php 
	} ?>
	<section id="home" name="home"></section>
	<div id="headerwrap">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<h1 class="title_web">ServiRace</h1>
					<a class="btn btn-default" href="https://play.google.com/store/apps/details?id=com.amugika.servirace" target="_blank"><span class="glyphicon glyphicon-download"></span>&nbsp;<?php echo $lang['DOWNLOAD_APP_FROM_GPLAY']; ?></a>
				</div>
			</div><!--/row -->
		</div><!--/container -->
	</div><!--/headerwrap -->

	<section id="about" name="about"></section>
	<div id="aboutwrap">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 name">
					<img class="img-responsive" src="https://scontent.fmad3-2.fna.fbcdn.net/v/t1.0-9/14046007_10210504824203938_2860154795133860208_n.jpg?oh=23e435a749ba1b5b26e792c37d29adc6&oe=58F09E9F">
					<p>Anartz Mugika</p>
					<p><?php echo $lang['MY_DESCRIPTION_PROFILE']; ?></p>
					<ul class="list-inline text-center">
                        <li>
                            <a href="https://twitter.com/mugan86" target="_blank">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="https://play.google.com/store/apps/developer?id=Anartz%20Mugika&hl=es" target="_blank">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-play fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <!--<li>
                            <a href="http://youtube.com/mugan86" target="_blank">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-youtube fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="https://bitbucket.org/amugika/" target="_blank">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-bitbucket fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>-->
                        <li>
                            <a href="https://www.linkedin.com/pub/anartz-mugika/62/7a0/0" target="_blank">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <!--<li>
                            <a href="https://github.com/mugan86" target="_blank">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>-->
                    </ul>
					<!--<div class="name-label"></div>-->

				</div><!--/col-lg-4-->
				<div class="col-lg-8 name-desc">
					<?php echo $lang['WHAT_IS_SERVIRACE_WHAT_OFFER']; ?>

				</div><! --/col-lg-8-->

			</div><!-- /row -->
		</div><!-- /container -->
	</div><!-- /aboutwrap -->

	<!-- ABOUT SEPARATOR -->
	<!--<div class="sep about" data-stellar-background-ratio="0.5"></div>-->

	<!-- PORTFOLIO SECTION -->
	<!--<section id="portfolio" name="portfolio"></section>
	<div id="portfoliowrap">
		<div class="container">
			<div class="row mt">
				<h1><?php echo $lang['APP_IMAGES']; ?></h1>
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc">
					<div class="project-wrapper">
	                    <div class="project">
	                        <div class="photo-wrapper">
	                            <div class="photo">
	                            	<a class="fancybox" href="assets/img/portfolio/port02.jpg"><img class="img-responsive" src="assets/img/portfolio/port01.jpg" alt=""></a>
	                            </div>
	                            <div class="overlay"></div>
	                        </div>
	                    </div>
	                </div>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc">
					<div class="project-wrapper">
	                    <div class="project">
	                        <div class="photo-wrapper">
	                            <div class="photo">
	                            	<a class="fancybox" href="assets/img/portfolio/port02.jpg"><img class="img-responsive" src="assets/img/portfolio/port02.jpg" alt=""></a>
	                            </div>
	                            <div class="overlay"></div>
	                        </div>
	                    </div>
	                </div>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc">
					<div class="project-wrapper">
	                    <div class="project">
	                        <div class="photo-wrapper">
	                            <div class="photo">
	                            	<a class="fancybox" href="assets/img/portfolio/port03.jpg"><img class="img-responsive" src="assets/img/portfolio/port03.jpg" alt=""></a>
	                            </div>
	                            <div class="overlay"></div>
	                        </div>
	                    </div>
	                </div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc">
					<div class="project-wrapper">
	                    <div class="project">
	                        <div class="photo-wrapper">
	                            <div class="photo">
	                            	<a class="fancybox" href="assets/img/portfolio/port03.jpg"><img class="img-responsive" src="assets/img/portfolio/port03.jpg" alt=""></a>
	                            </div>
	                            <div class="overlay"></div>
	                        </div>
	                    </div>
	                </div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc">
					<div class="project-wrapper">
	                    <div class="project">
	                        <div class="photo-wrapper">
	                            <div class="photo">
	                            	<a class="fancybox" href="assets/img/portfolio/port03.jpg"><img class="img-responsive" src="assets/img/portfolio/port03.jpg" alt=""></a>
	                            </div>
	                            <div class="overlay"></div>
	                        </div>
	                    </div>
	                </div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc">
					<div class="project-wrapper">
	                    <div class="project">
	                        <div class="photo-wrapper">
	                            <div class="photo">
	                            	<a class="fancybox" href="assets/img/portfolio/port03.jpg"><img class="img-responsive" src="assets/img/portfolio/port03.jpg" alt=""></a>
	                            </div>
	                            <div class="overlay"></div>
	                        </div>
	                    </div>
	                </div>
				</div>
			</div>
		</div><!--/container -->
		<!--<div class="container">
			<div class="row mt centered">
				<h1>MY DESIGN PROCESS</h1>
				<div class="col-lg-4 proc">
					<i class="fa fa-coffee"></i>
					<h3>The Meeting</h3>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
				</div>
				<div class="col-lg-4 proc">
					<i class="fa fa-cogs"></i>
					<h3>The Ideas</h3>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
				</div>
				<div class="col-lg-4 proc">
					<i class="fa fa-heart"></i>
					<h3>The Product</h3>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
				</div>

			</div>
		</div>
	</div><! --/Portfoliowrap -->

	<!-- PORTFOLIO SEPARATOR -->
	<!--<div class="sep portfolio" data-stellar-background-ratio="0.5"></div>-->

	<!--<div id="testimonials">
		<div class="container">

			<div class="row">
				<div class="col-lg-8 col-lg-offset-2 ">
				<h1 class="centered"><?php echo $lang['APP_OPINION_USERS_TITLE']; ?></h1>
					<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
					  <!-- Wrapper for slides -->
					  <!--<div class="carousel-inner">
					    <div class="item active mb centered">
					      <h3>MARK WEBBER</h3>
					      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
					      <p><img class="img-circle" src="assets/img/pic-t1.jpg" width="80"></p>
					    </div>

					    <div class="item mb centered">
					      <h3>PAUL LEVINGSTON</h3>
					      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
					      <p><img class="img-circle" src="assets/img/pic-t2.jpg" width="80"></p>
					    </div>

					    <div class="item mb centered">
					      <h3>LUCY LENNIN</h3>
					      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
					      <p><img class="img-circle" src="assets/img/pic-t3.jpg" width="80"></p>
					    </div>
					    <div class="item mb centered">
					      <h3>LUCY LENNIN</h3>
					      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
					      <p><img class="img-circle" src="assets/img/pic-t3.jpg" width="80"></p>
					    </div>
					    <div class="item mb centered">
					      <h3>LUCY LENNIN</h3>
					      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
					      <p><img class="img-circle" src="assets/img/pic-t3.jpg" width="80"></p>
					    </div>
					    <div class="item mb centered">
					      <h3>LUCY LENNIN</h3>
					      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
					      <p><img class="img-circle" src="assets/img/pic-t3.jpg" width="80"></p>
					    </div>

					  </div>
					  <!-- Indicators -->
					  <!--<ol class="carousel-indicators">
					    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
					    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
					    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
					    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
					    <li data-target="#carousel-example-generic" data-slide-to="5"></li>
					  </ol>
					</div>

				</div>
			</div>
		</div>
	</div><!--/testimonials -->

	<!-- SERVICE SECTION -->
	<section id="services" name="services"></section>
	<div id="servicewrap">
		<div class="container">
			<div class="row">
				<div class="col-lg-8-offset-2 centered">
					<h1><?php echo $lang['APP_FUNCTIONS']; ?></h1>
					<h3><?php echo $lang['APP_FUNCTIONS_SUBTITLE']; ?></h3>
					<p><?php echo $lang['APP_FUNCTIONS_TEXT']; ?></p>
				</div><!-- /col-lg-8 -->
			</div><!--/row -->

			<div class="row mt">
				<div class="col-lg-3 service">
					<i class="fa fa-search"></i><?php echo $lang['APP_FUNCTIONS_RACE_SEARCH_TITLE']; ?>
					<p class="text"><?php echo $lang['APP_FUNCTIONS_RACE_SEARCH_DESC']; ?></p>
				</div>
				<div class="col-lg-3 service">
					<i class="fa fa-calendar"></i><?php echo $lang['APP_FUNCTIONS_PASS_RACES_TITLE']; ?>
					<p class="text"><?php echo $lang['APP_FUNCTIONS_PASS_RACES_DESC']; ?></p>
				</div>
				<div class="col-lg-3 service">
					<i class="fa fa-hand-o-right"></i><?php echo $lang['APP_FUNCTIONS_NEXT_RACES_TITLE']; ?>
					<p class="text"><?php echo $lang['APP_FUNCTIONS_NEXT_RACES_DESC']; ?></p>
				</div>
				<div class="col-lg-3 service">
					<i class="fa fa-location-arrow"></i><?php echo $lang['APP_FUNCTIONS_NEAR_RACES_TITLE']; ?>
					<p class="text"><?php echo $lang['APP_FUNCTIONS_NEAR_RACES_DESC']; ?></p>
				</div>
			</div><!--/row -->
			<div class="row mt">
				<div class="col-lg-3 service">
					<i class="fa fa-comment-o"></i><?php echo utf8_encode($lang['APP_FUNCTIONS_RACE_OPINIONS_TITLE']); ?>
					<p class="text"><?php echo $lang['APP_FUNCTIONS_RACE_OPINIONS_DESC']; ?></p>
				</div>
				<div class="col-lg-3 service">
					<i class="fa fa-calendar-plus-o"></i><?php echo $lang['APP_FUNCTIONS_ADD_RACE_TO_CALENDAR_TITLE']; ?>
					<p class="text"><?php echo $lang['APP_FUNCTIONS_ADD_RACE_TO_CALENDAR_DESC']; ?></p>
				</div>
				<div class="col-lg-3 service">
					<i class="fa fa-bell-o"></i><?php echo $lang['APP_FUNCTIONS_RACE_OPINION_ALERT_TITLE']; ?>
					<p class="text"><?php echo $lang['APP_FUNCTIONS_RACE_OPINION_ALERT_DESC']; ?></p>
				</div>
				<div class="col-lg-3 service">
					<i class="fa fa-search-plus"></i><?php echo $lang['APP_FUNCTIONS_MORE_FUNCTIONS_TITLE']; ?>
					<p class="text"><?php echo $lang['APP_FUNCTIONS_MORE_FUNCTIONS_DESC']; ?></p>
				</div>
			</div><!--/row -->

		</div><!--/container -->
	</div><!--/servicewrap -->
    <!--<section id="talk_about" name="talk_about"></section>
    <div class="container-fluid event_row" >
    	<div class="container">
	    	<div class="events row">
	          <h2 class="page-header"><?php echo $lang['TALK_ABOUT_APP']; ?></h2>
	            <div class="col-sm-4 event">
	              <div class="thumbnail">
	                <div class="overlay"></div>
	                <img class="img-responsive" alt="alternative text" src="http://lorempixel.com/800/400/nightlife?1">
	              </div>
	              <span class="label label-info date">Jun 12</span>
	              <span class="label label-primary">Boys 5$</span>
	              <span class="label label-danger">Girls FREE</span>
	              <p>
	                <strong>Business &amp; Entrepreneurs Workshop</strong><br>
	                <em>at Grand Hotel Italia</em><br>
	                <span class="small">10:00 AM - 21:00 PM</span>
	              </p>
	            </div>
	            <div class="col-sm-4 event">
	              <div class="thumbnail">
	                <div class="overlay"></div>
	                <img class="img-responsive" alt="alternative text" src="http://lorempixel.com/800/400/nightlife?2">
	              </div>
	              <span class="label label-info date">Jun 12</span>
	              <span class="label label-primary">Boys 5$</span>
	              <span class="label label-danger">Girls FREE</span>
	              <p>
	                <strong>Business &amp; Entrepreneurs Workshop</strong><br>
	                <em>at Grand Hotel Italia</em><br>
	                <span class="small">10:00 AM - 21:00 PM</span>
	              </p>
	            </div>
	            <div class="col-sm-4 event" ng-click="goToUrl('http://www.google.com')">
	              <div class="thumbnail">
	                <div class="overlay"></div>
	                <img class="img-responsive" alt="alternative text" src="http://lorempixel.com/800/400/nightlife?3">
	              </div>
	              <span class="label label-info date">Jun 12</span>
	              <span class="label label-primary">Boys 5$</span>
	              <span class="label label-danger">Girls FREE</span>
	              <p>
	                <strong>Business &amp; Entrepreneurs Workshop</strong><br>
	                <em>at Grand Hotel Italia</em><br>
	                <span class="small">10:00 AM - 21:00 PM</span>
	              </p>
	            </div>
	        </div>
        </div>
    </div>-->

    <section id="faq" name="contact"></section>

        <!-- FAQ -->
    <div class="container">
    	<div class="row">
				<div class="col-lg-8-offset-2 centered">
					<h1><?php echo $lang['FAQ_TITLE']; ?></h1>
					<h3><?php echo $lang['FAQ_SUBTITLE']; ?></h3>
					<p><?php echo $lang['FAQ_MORE_INFO']; ?></p>
				</div><!-- /col-lg-8 -->
			</div><! --/row -->

 		<div class="row">
            <div class="col-lg-12">
                <div class="panel-group" id="accordion">
                     <!--<div class="panel panel-default">
                        <div class="panel-heading">
                        	<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseWhat">
	                            <h4 class="panel-title">
	                                <span><?php echo $lang['FAQ_WHAT_IS_SERVIRACE_TITLE']; ?></span>
	                                <i class="indicator glyphicon glyphicon-plus pull-right"></i>
	                            </h4>
	                       	</a>
                        </div>
                        <div id="collapseWhat" class="panel-collapse collapse">
                            <div class="panel-body">
                                <?php echo $lang['FAQ_WHAT_IS_SERVIRACE_DESCRIPTION']; ?>
                            </div>
                        </div>
                    </div>-->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        	<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseCost">
	                            <h4 class="panel-title">
	                                <span><?php echo $lang['FAQ_HOW_MUCH_SERVIRACE_TITLE']; ?></span>
                                    <i class="indicator glyphicon glyphicon-plus pull-right"></i>
	                            </h4>
                        	</a>
                        </div>
                        <div id="collapseCost" class="panel-collapse collapse">
                            <div class="panel-body">
                                <?php echo $lang['FAQ_HOW_MUCH_SERVIRACE_DESCRIPTION']; ?>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        	<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOtherPlatform">
	                            <h4 class="panel-title">
	                                <span><?php echo $lang['FAQ_OTHER_VERSIONS_SERVIRACE_TITLE']; ?></span>
	                                <i class="indicator glyphicon glyphicon-plus pull-right"></i>
	                            </h4>
                            </a>
                        </div>
                        <div id="collapseOtherPlatform" class="panel-collapse collapse">
                            <div class="panel-body">
                            	<?php echo $lang['FAQ_OTHER_VERSIONS_SERVIRACE_DESCRIPTION']; ?>
                            </div>
                        </div>
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseNoFindRace">
	                            <h4 class="panel-title">
	                            	<span><?php echo $lang['FAQ_NO_FOUND_RACES_EXPLAIN_SERVIRACE_TITLE']; ?></span>
	                                <i class="indicator glyphicon glyphicon-plus pull-right"></i>
	                            </h4>
	                        </a>
                        </div>
                        <div id="collapseNoFindRace" class="panel-collapse collapse">
                            <div class="panel-body">
                                <?php echo $lang['FAQ_NO_FOUND_RACES_EXPLAIN_SERVIRACE_DESCRIPTION']; ?>
                            </div>
                        </div>
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        	<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseAdvantages">
	                            <h4 class="panel-title">
	                                <span><?php echo $lang['FAQ_REGISTER_USERS_ADVANTAGES_SERVIRACE_TITLE']; ?></span>
	                                <i class="indicator glyphicon glyphicon-plus pull-right"></i>
	                            </h4>
                        	</a>
                        </div>
                        <div id="collapseAdvantages" class="panel-collapse collapse">
                            <div class="panel-body">
                                <?php echo $lang['FAQ_REGISTER_USERS_ADVANTAGES_SERVIRACE_DESCRIPTION']; ?>
                            </div>
                        </div>
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.panel-group -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
    </div>
    <br/>

	<!-- SERVICE SECTION -->
	<section id="contact" name="contact"></section>
	<!-- CONTACT SEPARATOR -->
	<!--<div class="sep contact" data-stellar-background-ratio="0.5"></div>-->

	<div id="contactwrap">
		<div class="container">
			<div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <ul class="list-inline text-center">
                        <li>
                            <a href="https://twitter.com/mugan86" target="_blank">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="https://play.google.com/store/apps/developer?id=Anartz%20Mugika&hl=es" target="_blank">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-play fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <!--<li>
                            <a href="http://youtube.com/mugan86" target="_blank">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-youtube fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="https://bitbucket.org/amugika/" target="_blank">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-bitbucket fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>-->
                        <li>
                            <a href="https://www.linkedin.com/pub/anartz-mugika/62/7a0/0" target="_blank">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <!--<li>
                            <a href="https://github.com/mugan86" target="_blank">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>-->
                    </ul>
                    <p class="copyright text-muted">Copyright &copy; Servirace <script> document.write(new Date().getFullYear())</script> - 
                    					<?php echo $lang['DEVELOPE_BY']; ?>
                    </p>
                    
                </div>
			
     
     
				<!--<div class="row"><div class="col-lg-6">
					<p><?php echo $lang['CONTACT_WITH_ME']; ?></p>
					<p><?php echo $lang['CONTACT_WITH_ME_TEXT']; ?></p>
					<p>
						<small>5th Avenue, 987<br/>
						38399, New York,<br/>
						USA.</small>
					</p>
					<p>
						<small>Tel. 9888-4394<br/>
						Mail. servirace.app@gmail.com<br/>
						Skype. NYCDesign
					</p>

				</div>

				<div class="col-lg-6">
					<form role="form">
					  <div class="form-group">
					    <label for="exampleInputName1"><?php echo $lang['FORM_YOUR_NAME_LABEL']; ?></label>
					    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="<?php echo $lang['FORM_YOUR_NAME_PLACEHOLDER']; ?>">
					    <label for="exampleInputEmail1"><?php echo $lang['FORM_MAIL_LABEL']; ?></label>
					    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="<?php echo $lang['FORM_MAIL_PLACEHOLDER']; ?>">
					    <label for="exampleInputText1"><?php echo $lang['FORM_MESSAGE_LABEL']; ?></label>
					    <textarea class="form-control" placeholder="<?php echo $lang['FORM_MESSAGE_PLACEHOLDER']; ?>" rows="3"></textarea>
					  </div>
					  <button type="submit" class="btn btn-default"><?php echo $lang['FORM_SEND_BUTTON_LABEL']; ?></button>
					</form>
				</div>
 </div>-->
			</div><! --/row -->
		</div><!-- /container -->
	</div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="assets/js/classie.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/smoothscroll.js"></script>
	<script src="assets/js/jquery.stellar.min.js"></script>
	<script src="assets/js/fancybox/jquery.fancybox.js"></script>
	<script src="assets/js/main.js"></script>
	<script src="assets/js/servirace.js"></script>
		<script>
		$(function(){
			$.stellar({
				horizontalScrolling: false,
				verticalOffset: 40
			});
		});
		</script>

		<script type="text/javascript">
      $(function() {
        //    fancybox
          jQuery(".fancybox").fancybox();
      });
	   </script>

  </body>
</html>