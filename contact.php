<?php
include 'partials/header.php';

?>

<!-- BREADCRUMB
			============================================= -->
<div id="breadcrumb" class="division">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class=" breadcrumb-holder">

					<!-- Breadcrumb Nav -->
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="demo-1.html">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">Contact Us</li>
						</ol>
					</nav>

					<!-- Title -->
					<h4 class="h4-sm steelblue-color">Contact Us</h4>

				</div>
			</div>
		</div> <!-- End row -->
	</div> <!-- End container -->
</div> <!-- END BREADCRUMB -->




<!-- CONTACTS-2
			============================================= -->
<section id="contacts-2" class="wide-60 contacts-section division">
	<div class="container">
		<div class="row">


			<!-- CONTACTS INFO -->
			<div class="col-lg-7">

				<!-- Title-->
				<h4 class="h4-md steelblue-color">Have a Question? We Review and Accept Patients Requests on 24/7 Basis.
				</h4>

				<!-- Text-->
				<p class="contact-notice">Give us a call or send an email. If you are traveling to our clinic for an
					appointment, confirm the correct street address with your appointment staff ahead of time to avoid
					frustration. For more help with specific addresses see below.
				</p>

				<div class="row">


					<!-- CITY CONTACT DATA -->
					<div class="col-md-6">
						<div class="contact-box mb-40">

							<!-- City -->
							<h5 class="h5-sm steelblue-color">Sydney</h5>
							<p>121 King Street, Melbourne,</p>
							<p>Victoria 3000 Australia</p>
							<p>Phone: 1-(800)-569-7890</p>
							<p>Email: <a href="mailto:yourdomain@mail.com" class="blue-color">hello@yourdomain.com</a>
							</p>
						</div>
					</div>


					<!-- CITY CONTACT DATA -->
					<div class="col-md-6">
						<div class="contact-box mb-40">

							<!-- City -->
							<h5 class="h5-sm steelblue-color">Melbourne</h5>
							<p>121 King Street, Melbourne,</p>
							<p>Victoria 3000 Australia</p>
							<p>Phone: 1-(800)-569-7890</p>
							<p>Email: <a href="mailto:yourdomain@mail.com" class="blue-color">hello@yourdomain.com</a>
							</p>
						</div>
					</div>


					<!-- CITY CONTACT DATA -->
					<div class="col-md-6">
						<div class="contact-box mb-40">

							<!-- City -->
							<h5 class="h5-sm steelblue-color">Brisbane</h5>
							<p>121 King Street, Melbourne,</p>
							<p>Victoria 3000 Australia</p>
							<p>Phone: 1-(800)-569-7890</p>
							<p>Email: <a href="mailto:yourdomain@mail.com" class="blue-color">hello@yourdomain.com</a>
							</p>
						</div>
					</div>


					<!-- CITY CONTACT DATA -->
					<div class="col-md-6">
						<div class="contact-box mb-40">

							<!-- City -->
							<h5 class="h5-sm steelblue-color">Adelaide</h5>
							<p>121 King Street, Melbourne,</p>
							<p>Victoria 3000 Australia</p>
							<p>Phone: 1-(800)-569-7890</p>
							<p>Email: <a href="mailto:yourdomain@mail.com" class="blue-color">hello@yourdomain.com</a>
							</p>
						</div>
					</div>


				</div>
			</div> <!-- END CONTACTS INFO -->


			<!-- CONTACT FORM -->
			<div class="col-lg-5">
				<div class="form-holder mb-40">
					<form name="contactForm" class="row contact-form">

						<!-- Contact Form Input -->
						<div id="input-name" class="col-md-12">
							<input type="text" name="name" class="form-control name" placeholder="Enter Your Name*"
								required>
						</div>

						<div id="input-email" class="col-md-12">
							<input type="text" name="email" class="form-control email" placeholder="Enter Your Email*"
								required>
						</div>

						<div id="input-phone" class="col-md-12">
							<input type="tel" name="phone" class="form-control phone"
								placeholder="Enter Your Phone Number*" required>
						</div>

						<!-- Form Select -->
						<div id="input-patient" class="col-md-12 input-patient">
							<select id="inlineFormCustomSelect3" name="patient" class="custom-select patient" required>
								<option value="">Have You Visited Us Before?*</option>
								<option>New Patient</option>
								<option>Returning Patient</option>
								<option>Other</option>
							</select>
						</div>

						<div id="input-subject" class="col-md-12">
							<input type="text" name="subject" class="form-control subject" placeholder="Subject*"
								required>
						</div>

						<div id="input-message" class="col-md-12 input-message">
							<textarea class="form-control message" name="message" rows="6"
								placeholder="Your Message ..." required></textarea>
						</div>

						<!-- Contact Form Button -->
						<div class="col-lg-12 mt-15 form-btn">
							<button type="submit" class="btn btn-blue blue-hover submit">Send Your Message</button>
						</div>

						<!-- Contact Form Message -->
						<div class="col-md-12 contact-form-msg text-center">
							<div class="sending-msg"><span class="loading"></span></div>
						</div>

					</form>
				</div>
			</div> <!-- END CONTACT FORM -->


		</div> <!-- End row -->
	</div> <!-- End container -->
</section> <!-- END CONTACTS-2 -->




<!-- BANNER-8
			============================================= -->
<section id="banner-8" class="bg-fixed banner-section division">
	<div class="container white-color">
		<div class="row d-flex align-items-center">


			<!-- BANNER TEXT -->
			<div class="col-lg-8 offset-lg-2">
				<div class="banner-txt icon-lg text-center">

					<!-- Icon  -->
					<span class="flaticon-072-hospital-5"></span>

					<!-- Title  -->
					<h3 class="h3-sm">Take the First Step to Help</h3>

					<h4 class="h4-lg">Call MedService Clinic Now</h4>
					<h2 class="h2-lg">1-800-123-4560</h2>

				</div>
			</div>


		</div> <!-- End row -->
	</div> <!-- End container -->
</section> <!-- END BANNER-8 -->




<?php
include 'partials/footer.php';

?>