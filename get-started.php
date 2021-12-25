
<?php
require ("header.php"); ?>


<title> <?php echo $mobile; ?> </title>
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
	<!--##########page specific css {{write page name here}}-->
	
	<link href="http://www.geekytechies.com/assets/common.css" rel="stylesheet">
	<link href="http://www.geekytechies.com/assets/home.css" rel="stylesheet">
	
	<link href="http://www.geekytechies.com/assets/price.css" rel="stylesheet">
	<!--##########/page specific css {{write page name here}}-->

</head>
<body>
	               


    <!--header End-->


 <!--<div id="preloader">
  <div class="loader">
    <span>{</span><span>}</span>
  </div>
</div>-->




	<section class="mrg-tp">
		<div class="new-bnn bnn-clr3">
		<div class="bnn-inner">
			
			<img src="http://www.geekytechies.com/assets//img/bnn-how-we-work.jpg" width="100%">
				<div class="bnn-text">
					<h1>Getting Started</h1>
					<p>Our web site packages are divided into various, highly affordable website plans, from Custom Responsive Web Site , WPress Web Site to E-commerce Web Site Plans.We strive to design and make the most appealing yet most user friendly web sites on the web.</p>
				</div>
			</div>
		</div>
	</section>



<section class="heading-pricing">

	<div class="container vk_model ">
		<!-- <h2 class=" text-center">Sign up Now</h2> -->


		<form method="post" action="mail-signup.php" class="col-sm-8 col-sm-offset-2" data-parsley-validate="" novalidate="">

			
			<div class="feild-set">
				<h3>Personal Information</h3>

				<div class="group">
			      <label for="cname">Company Name: * </label>
			      <input type="text" class="input-txt" id="cname" name="cname" placeholder="Enter Company Name"  required="">
			    </div>

			    <div class="row">
			    	<div class="col-sm-6">
			    		<div class="group">
					      <label for="fname">Contact First Name: * </label>
					      <input type="text" class="input-txt" id="fname" name="fname" placeholder="Enter Your First Name"  required="">
					    </div>
			    	</div>
			    	<div class="col-sm-6">
			    		<div class="group">
					      <label for="lname">Contact Last Name: * </label>
					      <input type="text" class="input-txt" id="lname" name="lname" placeholder="Enter Your Last Name"  required="">
					    </div>
			    	</div>
			    </div>


			    <div class="group">
			      <label for="address">Address:</label>
			      <input type="text" class="input-txt" id="address" name="address" placeholder="Enter Address" >
			    </div>


			     <div class="row">
			    	<div class="col-sm-4">
			    		<div class="group">
					      <label for="city">City: * </label>
					      <input type="text" class="input-txt" id="city" name="city" placeholder="Enter City"  required="">
					    </div>
			    	</div>
			    	<div class="col-sm-4">
			    		<div class="group">
					      <label for="state">State: * </label>
					      <input type="text" class="input-txt" id="state" name="state" placeholder="Enter State"  required="">
					    </div>
			    	</div>
			    	<div class="col-sm-4">
			    		<div class="group">
					      <label for="zip">Zip: * </label>
					      <input type="text" class="input-txt" id="zip" name="zip" placeholder="Enter Zip"  required="">
					    </div>
			    	</div>
			    </div>


			    <div class="row">
			    	<div class="col-sm-4">
			    		<div class="group">
					      <label for="phone">Phone: * </label>
					      <input type="text" class="input-txt" id="phone" name="phone" placeholder="Enter Phone"  required="">
					    </div>
			    	</div>
			    	<div class="col-sm-4">
			    		<div class="group">
					      <label for="cell">Cell Phone:</label>
					      <input type="text" class="input-txt"  id="cell" name="cell" placeholder="Enter Cell Phone">
					    </div>
			    	</div>
			    	<div class="col-sm-4">
			    		<div class="group">
					      <label for="fax">Fax </label>
					      <input type="text" class="input-txt" id="fax" name="fax" placeholder="Enter Fax">
					    </div>
			    	</div>
			    </div>

			    <div class="group">
			      <label for="email">Email *:</label>
			      <input type="email" class="input-txt" id="email" name="email" placeholder="Enter Email" required="">
			    </div>


			  </div> <!--Feildset -->




			 <div class="feild-set">
			 	<h3>Payment</h3>	

					<div class="group">  
					<label>Choose a Payment Method: * </label>
						<select  name="method" class="selectpicker" data-hide-disabled="true" data-live-search="true" required>
							<option value="">Choose Method: </option>
							<option value="card">Credit Card / Debit Card</option>
							<option value="paypal-stripe">Paypal / Stripe</option>
							<option value="wire-checks">Wire / E-Checks / Checks</option>
						</select>
					</div>

					<div class="group">
					      <label for="payment_plan">Payment Plan: * </label>
					      <input type="text" class="input-txt" id="payment_plan" name="payment_plan" placeholder="Enter Plan" required="">
					    </div>


				<h4>Billing Address 
					<small>( Same Address as above  
			<label class="radio-inline"><input type="radio" name="address_same" value="same">Same</label>
			<label class="radio-inline"><input type="radio" name="address_same" value="different" >Different</label>
					)</small>
				</h4>

				<div class="row">
			    	<div class="col-sm-6">
			    		<div class="group">
					      <label for="b_name">Name: </label>
					      <input type="text" class="input-txt" id="b_name" name="b_name" placeholder="Enter Name">
					    </div>
			    	</div>
			    	<div class="col-sm-6">
			    		<div class="group">
					      <label for="b_address">Address:</label>
					      <input type="text" class="input-txt" id="b_address" name="b_address" placeholder="Enter Address">
					    </div>
			    	</div>
			    </div>



			    <div class="row">
			    	<div class="col-sm-4">
			    		<div class="group">
					      <label for="b_city">City: </label>
					      <input type="text" class="input-txt" id="b_city" name="b_city" placeholder="Enter Phone"  >
					    </div>
			    	</div>
			    	<div class="col-sm-4">
			    		<div class="group">
					      <label for="b_state">State</label>
					      <input type="text" class="input-txt" id="b_state" name="b_state" placeholder="Enter Cell Phone">
					    </div>
			    	</div>
			    	<div class="col-sm-4">
			    		<div class="group">
					      <label for="b_zip">Zip: </label>
					      <input type="text" class="input-txt" id="b_zip" name="b_zip" placeholder="Enter Fax">
					    </div>
			    	</div>
			    </div>	



			</div> <!--Feildset -->	


		<div class="feild-set">
			<h3>Service Terms</h3>

				<div class="group">
					<textarea  type="textarea" class="input-txt terms-textarea" id="terms" name="terms" readonly><?php echo $title; ?> Service Terms
Welcome to the <?php echo $title; ?>.com web site (the "Site"). By accessing this web site and/or engaging with <?php echo $title; ?>,  for services rendered, you agree to be bound by the Service Terms and Conditions listed below (the "Service Terms"). If you do not agree to all of the Service Terms, please do not use this web site or do not engage <?php echo $title; ?>, to provide you with any service or product.
Below is a list of our Service Terms and Conditions that you agree to be bound by. By checking the box "I Agree to Service Terms and Conditions" and clicking the "Continue" button on this page below to submit your order, constitutes your full agreement to these Service Terms and Conditions.
1. Service Promotion
You hereby acknowledge and understand that you are engaging into this Service Terms and Conditions agreement for the designing, building, hosting and ongoing maintenance of your web site, which has been promoted to you via this <?php echo $title; ?>.com web site, or by an authorized representative of . <?php echo $title; ?> will be the primary developer of your web site, and will be responsible for the initiation, fulfillment, maintenance and billing charges pertaining to your web site.
2. Web Site Services
You acknowledge and understand that <?php echo $title; ?> will design and deploy your web site along with basic search engine optimization that are included as part of your monthly fee, which includes but is not limited to; minor web site updates, web site hosting, e-mail hosting, server storage and bandwidth. Major web site updates, such as a complete web site re-design, major navigational changes, database driven applications or e-commerce integration, among others, will require additional charges based on the complexity and time needed to accomplish them, which will be determined by <?php echo $title; ?> via a quote, upon request. You also agree to submit all web site updates via the <?php echo $title; ?> official email id, as opposed to submitting updates by phone or email, unless duly authorized by <?php echo $title; ?>.
3. Billing Terms
You acknowledge and understand that your recurring monthly web site payments will be automatically charged by <?php echo $title; ?> via Credit Card or Electronic Check, depending on your preferred method of payment. You authorize <?php echo $title; ?>, to charge your credit card or debit card for first and last month's payment (2 months) upon the commencement of your web site project. Generally, this first charge occurs on the current month if the sign up date is between the 1st to the 25th day of the current month. If you sign up after the 25th day of the month, your first and last month's payment will roll over to the next month on the 15th day. Customers who pay via check will be invoiced either on a monthly or annual basis. Failure to make a payment may result in the deactivation of your web site, email and maintenance services. All charges are non refundable unless expressly authorized by <?php echo $title; ?> . In the event of a billing dispute, whereby <?php echo $title; ?> does not agree to, or authorize a refund, you agree not to run a chargeback via your bank or credit card provider under any circumstances. If   <?php echo $title; ?> does find a legitimate reason for a refund, we will process it via our electronic merchant processor.
4. Web Site Leads
You acknowledge and understand that all web site leads that are submitted by visitors from your web site forms will be automatically emailed to your email address that we have on file. We can also send these leads to multiple email addresses, if required. However, due to varying degrees of spam filters and security software used by various third party email providers such as Google, Yahoo, MSN, AOL, SBC, etc., we cannot guarantee the delivery of web site leads to your email inbox. We will run an initial test of your web site forms to ensure that email delivery is successful to your email address but will not be held liable in the event that such web site leads are not successfully delivered to your email address. Therefore, we encourage you to test your web site lead forms periodically to ensure delivery.
5. Web Site Email Accounts
You acknowledge and understand that any email accounts created and hosted by <?php echo $title; ?> for your web site domain name will be automatically downloaded to your choice of email program. We will issue you a secure password for each email address. Due to varying degrees of spam filters and security software used by various email programs such as Outlook, GMail, MAC Mail, MS Exchange, etc., we cannot guarantee the delivery of emails to your email program and will not be held liable in the event that such emails are not successfully delivered to your email program. Therefore, we encourage you to test your email addresses periodically. While we take great measures to prevent spam and viruses on all our servers, we will not be held liable in the event that your email addresses receive spam or viruses that adversely affect your computer, mobile devices, or your personal privacy, in any way. We do not back up your email accounts or email messages, so make sure you do so on your local PC or mobile device.
6. Ownership Terms
You acknowledge and understand that the  <?php echo $title; ?> Web Site Plans are based on ongoing monthly payments over a 36 month period (depending on the plan you choose - see our "Comparison Chart"), at which point you will then own the web site outright, including all copyrighted materials and contents. You will have the option to discontinue services at the end of this 36 month period, or choose to continue our services on a month-to-month basis at a reduced monthly rate (to be determined by <?php echo $title; ?>). However, if we provide you with a new web site redesign and rebuild at no extra cost, at any stage within this initial 36 month period, the service terms will restart for an additional 36 month period, depending on your web site plan.
Since <?php echo $title; ?>  does not charge an "Set Up" cost for your web site, you acknowledge and understand that your ongoing monthly payments will be used primarily to pay for your web site and maintenance over a 36 month period), which includes web site design, programming, minor site updates, basic search engine optimization and print design services, based on your web site plan. In the event that <?php echo $title; ?> does charge a "Set Up" cost for your web site, it will go towards the 36 month service term. Should you choose to pay for your website 36 month term up front to receive a discount, you will own the web site outright, upon its completion.
You acknowledge and understand that in the event that you sell your company to a new owner, the website service terms will transfer to the new owner, should they decide to take over the website.
7. Minimum Commitment
Since <?php echo $title; ?> is essentially funding the initial design and development of your web site, you acknowledge and understand that you will not be able to cancel your web site and payment schedule within the first 12 months of your initial web site "Billing Date". Otherwise you will be liable to pay the balance of the remaining 12-month payment schedule in full. You also agree that you will not request any refunds or engage in electronic charge-backs after you have been charged, regardless of any reason, whatsoever.
8. Intellectual Property Terms
You acknowledge and understand that if you do cancel your web site and payment within 36 months (depending on the plan you choose - see our "Comparison Chart"), from the first payment date, you will not be able to take ownership of the web site design or any of it's copyrighted contents or intellectual property. The only option would be for you to pay the remaining balance of the 36 month service term, before we would release the copyrighted materials and complete web site contents to you in full.
9. Web Site FTP Access
You acknowledge and understand that due to strict security measures and copyright protection, we will not provide you with FTP access to your web site, or any third party, until the end of your 36 month service term (depending on the plan you choose - see our "Comparison Chart"), unless written authorization of such has been granted by <?php echo $title; ?>. If however, FTP access has been granted, you agree and accept that the copyrighted web site content in it�s entirety may not be copied and/or moved to another web host or third party provider within the 36 month service term. Violators will be held liable for compensation of the entire amount of the remaining balance of the 36 month service term.
10. Domain Name Ownership
You acknowledge and understand that if you do cancel your web site and payment within 36 months of your first payment date, you will not be able to take ownership of the web site domain name if it was registered by <?php echo $title; ?>, unless you registered it yourself via a third party registrar. If <?php echo $title; ?>  did register your domain name on your behalf, you would have to pay a $100 domain name transfer fee before we release the domain name to you.
11. Service Termination
You acknowledge and understand that <?php echo $title; ?> retains the right to terminate the relationship and your web site at any time, if it so deems necessary under any circumstances without any written notice or explanation. You also retain the right to terminate the relationship and your web site, under any circumstances via 30 Calendar days written notice and within the confines stated of the "Ownership Terms", "Minimum Commitment" and "Intellectual Property Terms", mentioned above.
12. Service Terms Changes
<?php echo $title; ?>, may from time to time modify or revise the Service Terms by updating this Web page. Your use of our Site following any such change constitutes your agreement to follow and be bound by the Service Terms as changed. If any change is unacceptable to you, your only recourse is to terminate your use of this Site, your web site or any other product or service being rendered.
Disclaimer
This site, its contents, and all information, products, and services contained in or offered through this site are provided on an "as is" and "as available" basis without representations or warranties of any kind. <?php echo $title; ?>, expressly disclaims all such representations and warranties, either express or implied, including, without limitation, warranties of title, merchantability, fitness for a particular purpose, or non-infringement and any implied warranties arising from course of dealing or course of performance.<?php echo $title; ?>, does not warrant that this site or its contents will be complete, accurate, uninterrupted, secure, or error free or that the site or the server that makes it available are free of viruses or other harmful components. All information is subject to change without notice.
Indemnification
You agree to defend, indemnify, and hold <?php echo $title; ?>, harmless from and against any and all claims, losses, damages, liabilities, costs, and expenses, including attorneys' fees, arising from or related to your (i) use of the Site or (ii) violation of any of these Terms.
Limitation of Liability
In no event shall <?php echo $title; ?> , be liable for any direct, indirect, consequential, special, or incidental damages arising out of or related to your use of or inability to use this site or goods or services purchased or obtained through this site, whether in an action under contract, negligence, or any other theory, even if <?php echo $title; ?>, has been advised of the possibility of such damages.<?php echo $title; ?> total liability for any claim arising from or related to your use of this Site shall not exceed one hundred dollars (US $100).
Miscellaneous
These Terms are governed by and shall be construed in accordance with the laws of the State of Nevada, County of Carson City, without giving effect to any principles of conflicts of law. If any provision of these Terms shall be unlawful, void, or for any reason unenforceable, then that provision shall be deemed severable from these Service Terms and shall not affect the validity and enforceability of any remaining provisions. These Service Terms are effective unless and until terminated by <?php echo $title; ?>.
We highly recommend you print a copy of these existing Service Terms and Conditions by clicking the link, provided to the right side of this box.<?php echo $title; ?>
<?php echo $address; ?></textarea>
		</div>


			
		
		

		 
		 
		<div class="clearfix"></div>

		    <div class="checkbox">
		    	<div style="position:relative">
			      <label >
			      	<input type="checkbox" name="iagree" required="" value="yes"> I Agree Service Terms and Conditions
			      </label>
			    </div>
			     <p>By clicking on the "Continue" button you hereby agree to abide by our <b>Service Terms and Conditions</b> before signing up for any of our Program service plans.</p>
			    
		    </div>

		    <div class="clearfix"></div>


		    <button type="submit" class=" btn-md bg-green">Submit</button>

		    </div> <!--Feildset -->	


  		</form>
			
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








					




<


<?php 
require("footer.php");
?>



<script src="http://www.geekytechies.com/assets/plugins/jquery/jquery-2.1.4.min.js" ></script>
<script src="http://www.geekytechies.com/assets/plugins/bootstrap/js/bootstrap.min.js" ></script>
<script src="http://www.geekytechies.com/assets/plugins/pace/pace.min.js" ></script>
<script src="http://www.geekytechies.com/assets/plugins/parsley/dist/parsley.js" ></script>
<script src="http://www.geekytechies.com/assets/plugins/owl.carousel/owl.carousel.min.js" ></script>
<script src="http://www.geekytechies.com/assets/plugins/bootstrap-select/bootstrap-select.js" ></script>



<script src="http://www.geekytechies.com/assets/wow.js" ></script>


<script src="http://www.geekytechies.com/assets/common.js" ></script>








	<!--##########page specific css {{write page name here}}-->
	<!--##########page specific css {{write page name here}}-->


	
</body>
</html>