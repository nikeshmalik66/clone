<?php
require ("header.php"); ?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<!-- Common CSS -->
<link href="/assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
<link href="http://www.geekytechies.com/assets/plugins/pace/pace.css" rel="stylesheet">
<link href="http://www.geekytechies.com/assets/plugins/parsley/src/parsley.css" rel="stylesheet">
<link href="http://www.geekytechies.com/assets/plugins/owl.carousel/assets/owl.carousel.css" rel="stylesheet">
<link href="http://www.geekytechies.com/assets/plugins/bootstrap-select/bootstrap-select.css" rel="stylesheet">
<link href="http://www.geekytechies.com/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<link href="http://www.geekytechies.com/assets/bootstrap-theme.css" rel="stylesheet">
<link href="http://www.geekytechies.com/assets/animate.css" rel="stylesheet">
<link href="http://www.geekytechies.com/assets/style.css" rel="stylesheet">
<link href="http://www.geekytechies.com/assets/contact.css" rel="stylesheet">
<link href="http://www.geekytechies.com/assets/common.css" rel="stylesheet">
<!-- Common CSS -->

<!-- Favicon -->
<link rel="shortcut icon" href="http://www.geekytechies.com/assets/img/favicon.png">
<!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>

<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet"> -->

<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Raleway:100,200,300,400,500,600,700,800,900|Roboto:100,300,400,500,700,900" rel="stylesheet">



<!-- Favicon -->


<!-- css3-mediaqueries.js for IE less than 9 -->
    <!--[if lt IE 9]>
    <script src="http://www.geekytechies.com/assets/css3-mediaqueries.js" ></script>
    <![endif]-->

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://www.geekytechies.com/assets/html5.js" ></script>
    <![endif]-->

    
	<!--##########page specific css {{write page name here}}-->
    <link href="http://www.geekytechies.com/assets/portfolio.css" rel="stylesheet">
    
	<link href="http://www.geekytechies.com/assets/how_we_work/easy-responsive-tabs.css" rel="stylesheet">

    <link href="http://www.geekytechies.com/assets/how_we_work/howworks.css" rel="stylesheet">

	<!--##########/page specific css {{write page name here}}-->
	<body>

	<!--banner section-->
	<section class="mrg-tp">
		<div class="banner my-bnn">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#carousel-example-generic" data-slide-to="0" ></li>
					<li data-target="#carousel-example-generic" data-slide-to="1" class="active"></li>
					<li data-target="#carousel-example-generic" data-slide-to="2"></li>
					<li data-target="#carousel-example-generic" data-slide-to="3"></li>
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">

						

					<div class="item active">
						<img src="http://www.geekytechies.com/assets//img/b1.jpg">
					</div>
					<div class="item ">
						<img src="http://www.geekytechies.com/assets//img/b2.jpg">
					</div>
					<div class="item">
						<img src="http://www.geekytechies.com/assets//img/b3.jpg">
					</div>
					<div class="item">
						<img src="http://www.geekytechies.com/assets//img/b4.jpg">
					</div>

                                                <div class="my_bnn_text hidden-xs">
							<h1>Get The Best <br/><span>Website Designers & Developers</span> </h1>
							<a class="read-more" href="#about_home">read more</a>
						</div>



				</div>

				<!-- Controls -->
				<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
	</section>
	<!--end banner section-->
<div class="clearfix"></div>

    <div class="my-bnn hidden-sm hidden-lg visible-xs">
    	<div class="my_bnn_text " style="position:static;transform:initial;padding: 5%; background: #081019;">
			<h1>Get The Best <br/><span>Website Designers & Developers</span> </h1>
			<a class="read-more" href="#about_home">read more</a>
		</div>
	</div>

	<!--about -->

	<section class="bg-green" id="about_home">
		<div class="container">
			<div class="home_ourweb">
				<div class="row" style="margin:0px">
					<div class="col-md-5">
						<div class="homeabout_img">
						 <img src="http://www.geekytechies.com/assets//img/about-ch.png">
						</div>
					</div>
					<div class="col-md-7 pull-right">
						<div class="about_ourweb home">
							<h1>About <?php echo $title; ?> </h1>
							<h3 style="color: rgba(147,252,231,.6);">We do quality for less!</h3>
<p>Our goal is to provide our customers a state of the art product at a fraction of the cost, we promise to do what we say, customer service, quality &amp; integrity is the way we build our business. We are here for you, we can build a Website, Application, Logo and much more, that will get your business going, bring you customers and increase your bottom line, in a week. <?php echo $title; ?> .com </p>




								<a class="btn-md bg-dark-green" href="#" data-toggle="modal" data-target="#myModal">Request a quote</a>


								<!-- Modal -->
								  <div class="modal vk_model fade" id="myModal" role="dialog">
								    <div class="modal-dialog">
								    
								      <!-- Modal content-->
								      <div class="modal-content">
								        <div class="modal-header">
								          <button type="button" class="close" data-dismiss="modal">
								          	<!-- <img src="http://www.geekytechies.com/assets/"> -->
								          	<span>✕</span>
								          </button>
								          <h2>Contact us</h2>
								          <p>Send us your details and we will be in-touch to discuss your needs. <!-- <br>
								          Or call us on 
								          <a href="tel:1234567890"> 1234567890</a> --></p>
								        </div>


								        <div class="modal-body">
								         <form  method="post" action="mail2.php" data-parsley-validate>
					<div class="row">
						<div class="col-md-6 col-sm-6">

							<div class="group">      
								<input class="input-txt"  name="name"  placeholder="Your Full Name" type="text" required />
							</div>

							<div class="group">      
								<input class="input-txt" name="email" placeholder="Your email"  type="gmail" required>
							</div>

							<div class="group">      
								<input class="input-txt" name="phone" placeholder="Your Contact Number"   type="gmail" required>
							</div>

							
							<div class="group">  
								<select  name="service" class="selectpicker" data-hide-disabled="true" data-live-search="true" required>
									<option value="">Select a service</option>
									<option value="logo_graphics">Logo & Graphics Designing</option>
									<option value="web_design_dev">Web Design and Developmen</option>
									<option value="social_media">Mobile / Social Media Apps</option>
									<option value="digital_marketing">Digital Marketing</option>
									<option value="social_media_marketing">Social Media Marketing</option>
									<option value="online_mobile_ads">Online and Mobile Ads</option>
									<option value="other">Other</option>
								</select>
								</select>
							</div>

							

						</div>

						<div class="col-md-6 col-sm-6">
							<div class="group">      
								<input class="input-txt"  name="company" placeholder="Your company name"  type="text" required>
							</div>

							<div class="group">      
								<textarea class="input-txt form-control" name="message" rows="5" placeholder="Your Message"  required></textarea>
							</div>
							<div class="group"> 
								<input class="btn-md bg-green" type="submit" value="submit">
							</div>

						</div>
					</div>




				</form>

								        </div>



								        
								      </div> <!-- Modal content End--> 
								    
								    </div>
								  </div><!-- Modal End -->								  

							</div>	
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- end about -->

		












<div class="other_serv">
	<div class="container">

				<div class="our-passion" style="padding-top:0">
					<h2>Our <span> services</span></h2>
					<p> <?php echo $title; ?> offers professional web and mobile application with a nimble & dynamic presence. We make business grow with our various verticals. </p>
				</div>





<div class="new_ser pos-rel">
	<img class="img_center" src="http://www.geekytechies.com/assets//img/ser.png">


	<div class="col-xs-6 comm_ser comm_ser1">		

		<a href="services.php#webdev" class="talk-bubble tri-right right-top round service_icon"> 		
 		 	<div class="icon-img">
 				<img src="http://www.geekytechies.com/assets//img/icoo1.png">
 			</div>
    		<p>Web Design and Development</p> 		
		</a>

		<a href="services.php#mobileapp" class="talk-bubble tri-right right-top round right-in service_icon bg_serv2">
 			<div class="icon-img">
 				<img src="http://www.geekytechies.com/assets//img/icoo2.png">
 			</div>
    		<p>Mobile / Social Media Apps</p> 		 
		</a>

		<a href="services.php#logo_grph" class="talk-bubble tri-right right-top round right-in service_icon bg_serv3">
 			<div class="icon-img">
 				<img src="http://www.geekytechies.com/assets//img/icoo3.png">
 			</div>
    		<p>Logo & Graphics Designing</p> 		 
		</a>

	</div>





	<div class="col-xs-6 comm_ser comm_ser2">
		<a href="services.php#online_ads" class="talk-bubble tri-right left-top round service_icon bg_serv4">
 			<div class="icon-img">
 				<img src="http://www.geekytechies.com/assets//img/icoo4.png">
 			</div>
    		<p>Online and Mobile Ads</p>
		</a>


		<a href="services.php#digital" class="talk-bubble tri-right left-top round service_icon bg_serv5">
 		 	<div class="icon-img">
 				<img src="http://www.geekytechies.com/assets//img/icoo5.png">
 			</div>
    		<p>Digital & Social Media Marketing</p>
		</a>


		<a href="javascript:$zopim.livechat.window.show()" class="talk-bubble tri-right left-top round service_icon bg_serv6">
 		 	<div class="icon-img"  style="height: 100px;">
 				<img src="http://www.geekytechies.com/assets//img/worktogeather.png">
 			</div>
    		<h3>Let’s Work Together</h3>
		</a>

	</div>

</div>
<div class="clearfix"></div>









	</div>
</div>


























<section class="wp_dev">
	<div class="container">
		<!-- <h2>abc</h2>
		<h4> xyx</h4> -->

		<div class="row wp_row">
			<div class="col-sm-6 wp_col_1">
				<h3>Website Design</h3>
				<p>Let's face it. The first thing that can fetch you customers is how stunning your website looks. Website Designing being our forte, we deliver to you the best possible layout keeping in mind the target audience. </p>
			</div>

			<div class="col-sm-6 wp_col_2 ">
				<img class="wow slideInRight" data-wow-duration="1s" src="assets/img/wp_dev1.png">

			</div>
		</div>

	</div>
</section>




<section class="wp_dev wp_dev2">
		<div class="container">

			<div class="row wp_row ">

				<div class="col-sm-6 wp_col_1 col-sm-offset-6">
					<h3>Web Development</h3>
					<p>Simple or intricate, just name it and our tech buggers will hop on their coding scooters riding all the way down to provide you with the best user interface. They might as well leave your expected milestone behind!</p>
				</div>
				<div class="col-sm-6 wp_col_2 ">
					<img class="wow slideInLeft" data-wow-duration="1s" src="assets/img/wp_dev2.png">

				</div>
			</div>

		</div>
	</section>


<section class="wp_dev">
		<div class="container">

			<div class="row wp_row ">
				<div class="col-sm-6 wp_col_1">
				
					

					<h3>Logo & Graphics Designing</h3>
					<p>
					Logo & Graphic Designing makes you stand out among your competition!
					<br> 
With that in mind we strive to incorporate your vision of design with our creativity. This is to insure that the proper branding process allows your name to have a lasting impression on the web, in print & in other places where you might deploy your graphics. </p>



				</div>

				<div class="col-sm-6 wp_col_2 ">
					<img class="wow slideInRight" data-wow-duration="1s" src="assets/img/wp_dev5.png">

				</div>
			</div>

		</div>
	</section>


<section class="wp_dev wp_dev2">
		<div class="container">

			<div class="row wp_row ">

				<div class="col-sm-6 wp_col_1 col-sm-offset-6">

					<h3>Dedicated Resources</h3>
					<p>We promise to deliver any task that has been assigned to us within the given time-frame. A completely dedicated team with highly resourceful software covers every aspect of your task with most extreme accuracy. You can depend on Us.</p>


				</div>
				<div class="col-sm-6 wp_col_2 ">
					<img class="wow slideInLeft" data-wow-duration="1s" src="assets/img/wp_dev6.png">

				</div>
			</div>

		</div>
	</section>






























				



					<section class="startwithus pos-rel " >

    <div class="rocket-img "><div class="col-sm-3 col-sm-offset-1"><img src="assets/img/rocketbg.png"></div></div>
    <div class="container ">
    
          <div class="col-md-10 col-md-offset-2 col-sm-9 col-sm-offset-3 ">
          <h1 class="">Start your business today! </h2>
          <h2>Give us a call </h4>
          <h3>Excited? let’s&nbsp;&nbsp;<span>talk</span></h3>

          <div class="startwith-btn"><a href="javascript:$zopim.livechat.window.show()" class="btn">Contact Us</a></div>
          
    </div>
  
</div></section>





<script>
 
  $zopim(function() {
    $zopim.livechat.window.show();
  });
 
</script>


				


<?php 
require("footer.php");
?>




				</body>
				</html>