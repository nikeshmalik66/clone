
<?php
require ("header.php"); ?>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<!-- Common CSS -->
<link href="http://www.geekytechies.com/assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
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
	<title>Takatof | Contact us</title>

	<!--##########page specific css {{write page name here}}-->
	<link href="http://www.geekytechies.com/assets/plugins/clock/css/jClocksGMT.css" rel="stylesheet">
	<link href="http://www.geekytechies.com/assets/contact.css" rel="stylesheet">
	<!--##########/page specific css {{write page name here}}-->

</head>
<body>
	               




 <!--<div id="preloader">
  <div class="loader">
    <span>{</span><span>}</span>
  </div>
</div>-->







	<section class="mrg-tp">
		<div class="new-bnn bnn-clr2">
		<div class="bnn-inner">
			
			<img src="http://www.geekytechies.com/assets//img/bnn-contact.jpg" width="100%">
				<div class="bnn-text">
					<h1>Contact Us</h1>
					<p>Our goal is to provide our customers a state of the art product at a fraction of the cost, we promise to do what we say, customer service, quality & integrity is the way we build our business.</p>
					<h1>Corporate Address</h1>
					<p><?php echo $address; ?>
				</p>
				</div>
			</div>
		</div>
	</section>
	




	<!--end banner section-->






	<!--form section-->
	<section class="form_section">
		<div class="container">
			<div class="contact-form text-center">
				<h2>We want to hear from you</h2>
				<!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibdu mlaoreet. Proin gravida dolor sit amet </p> -->

				<form action="mail.php" data-parsley-validate method="post">
					<div class="row">
						<div class="col-md-6 col-sm-6">

							<div class="group">      
								<input class="input-txt" type="text" name="name" required />
								<label>Full name</label>
							</div>

							<div class="group">      
								<input class="input-txt"  type="text" name="phone" required>
								<label>Phone number</label>
							</div>

							<div class="group">      
								<input class="input-txt" type="text" name="company" required>
								<label>Company name</label>
							</div>
							<div class="group">  
								<select  class="selectpicker" name="service" data-hide-disabled="true" data-live-search="true" required>
									<option value="">Select a service</option>
									<option value="service1">Logo & Graphics Designing</option>
									<option value="service2">Web Design and Developmen</option>
									<option value="service3">Mobile / Social Media Apps</option>
									<option value="service3">Digital Marketing</option>
									<option value="service3">Social Media Marketing</option>
									<option value="service3">Online and Mobile Ads</option>
									<option value="service3">Other</option>
								</select>
								<label>Select a service</label>
							</div>

							<div class="group">      
								<input class="input-txt" type="text" name="country" required>
								<label>Country</label>
							</div>

						</div>

						<div class="col-md-6 col-sm-6">
							<div class="group">      
								<input class="input-txt" type="email" name="email" required>
								<label>Email address</label>
							</div>

							<div class="group">      
								<textarea class="input-txt" name="message" required></textarea>
								<label>Type your message</label>
							</div>
							<div class="group"> 
								<input class="btn-md bg-green" type="submit" value="submit">
							</div>

						</div>
					</div>




				</form>

			</div>
		</div>
	</section>


	<!--end form section-->


<div class="clock-sec" >
       <img  class="clock-bg" src="http://www.geekytechies.com/assets//img/clock-bg.jpg" width="100%">

        <div class="clocks">
        	<div id="clock_la"></div>
        	<div id="clock_dc"></div>
        	<div id="clock_chicago"></div>
        </div>

</div>









		<section class="startwithus pos-rel " >

    <div class="rocket-img "><div class="col-sm-3 col-sm-offset-1"><img src="assets/img/rocketbg.png"></div></div>
    <div class="container ">
    
          <div class="col-md-10 col-md-offset-2 col-sm-9 col-sm-offset-3 ">
          <h1 class="">Start your business today! </h2>
          <h2>Give us a call </h4>
          <h3>Excited? let’s&nbsp;&nbsp;<span>talk</span></h3>

          <div class="startwith-btn"><a href="contact.php" class="btn">Contact Us</a></div>
          
    </div>
  
</div></section>











<?php 
require("footer.php");
?>


<!-- Common JS -->
<script src="http://www.geekytechies.com/assets/plugins/jquery/jquery-2.1.4.min.js" ></script>
<script src="http://www.geekytechies.com/assets/plugins/bootstrap/js/bootstrap.min.js" ></script>
<script src="http://www.geekytechies.com/assets/plugins/pace/pace.min.js" ></script>
<script src="http://www.geekytechies.com/assets/plugins/parsley/dist/parsley.js" ></script>
<script src="http://www.geekytechies.com/assets/plugins/owl.carousel/owl.carousel.min.js" ></script>
<script src="http://www.geekytechies.com/assets/plugins/bootstrap-select/bootstrap-select.js" ></script>



<script src="http://www.geekytechies.com/assets/wow.js" ></script>


<script src="http://www.geekytechies.com/assets/common.js" ></script>








		<!--##########page specific css {{write page name here}}-->



<script src="http://www.geekytechies.com/assets/plugins/clock/js/jClocksGMT.js" ></script>
<script src="http://www.geekytechies.com/assets/plugins/clock/js/jquery.rotate.js" ></script>


        <script>
           
        </script>


		<script src="http://www.geekytechies.com/assets/contact.js" ></script>





	</body>
	</html>