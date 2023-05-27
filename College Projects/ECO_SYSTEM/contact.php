<?php include 'include/header.php' ?>

<section class="page-header">
  <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg)">
  </div>
  <div class="container">
    <div class="page-header__inner3">
      <h2>Contact Us</h2>
      <ul class="thm-breadcrumb list-unstyled">
        <li><a href="index.php">Home</a></li>
        <li><span>/</span></li>
        <li>Contact</li>
      </ul>

    </div>
  </div>
</section>


<section class="google-map-two">
            <div class="container">
               
                <div class="google-map-two__bottom">
                    <ul class="google-map-two__bottom-list list-unstyled">
                        <li>
                            <div class="icon">
                                <span class="fas fa-envelope-open"></span>
                            </div>
                            <div class="content">
                                <p><a href="mailto:needhelp@company.com">example@gmail.com</a></p>
                                <p><a href="mailto:info@company.com">example@gmail.com</a></p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <span class="fas fa-phone"></span>
                            </div>
                            <div class="content">
                                <p><a href="tel:92307760600">+91 9365524166554   </a></p>
                                <p><a href="tel:008800680">+91 9365524166554  
                                        </a></p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <span class="fas fa-map"></span>
                            </div>
                            <div class="content">
                                <p>House no-3, Wallport
                                    <br>  Guwahati, Assam</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="donate-one">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="donate-one__left">
                            <div class="section-title text-left">
                                <!-- <span class="section-title__tagline">Help us Donate</span> -->
                                <h2 class="section-title__title">LEAVE A MESSAGE</h2>
                            </div>
                            <!-- <div class="donate-one__shape-1 float-bob-x">
                                <img src="assets/images/shapes/donate-one-shape-1.png" alt="">
                            </div> -->
                            <form action="https://layerdrops.com/wishon/assets/inc/sendemail.php"
                                class="contact-form-box__form contact-form-validated" novalidate="novalidate">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="contact-form-box__input-box">
                                            <input type="text" placeholder="Your Name" name="text">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="contact-form-box__input-box">
                                            <input type="email" placeholder="Phone Number" name="phone">
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12">
                                        <div class="contact-form-box__input-box">
                                            <input type="text" placeholder="Email Address" name="email">
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12">
                                        <div class="contact-form-box__input-box text-message-box">
                                            <textarea name="message" placeholder="Write a Message"></textarea>
                                        </div>
                                        <div class="contact-form-box__btn-box">
                                            <button type="submit" class="thm-btn contact-form-box__btn">Send a
                                                message</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="result"></div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="donate-one__right">
                            <div class="donate-one__img">
                                <!-- <img src="assets/img/contact.png" alt=""> -->
                                <iframe width="512" height="512" id="gmap_canvas" src="https://maps.google.com/maps?q=web%20infotech&t=k&z=11&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                            </div>
                            <!-- <ul class="donate-one__contact list-unstyled">
                                <li>
                                    <div class="icon">
                                        <span class="fas fa-envelope-open"></span>
                                    </div>
                                    <div class="content">
                                        <p><a href="mailto:needhelp@company.com">example@gmail.com</a></p>
                                        <p><a href="tel:8800761610">+91 9365524166</a></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fas fa-map"></span>
                                    </div>
                                    <div class="content">
                                        <p>Rajbari Path, Dispur, Ganeshguri 781005
                                            <br>Guwahati, Assam</p>
                                    </div>
                                </li>
                            </ul> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Donate One End-->



        



<!-- 
<!DOCTYPE html>
<html>
<head>
  <title>Contact Cards</title>
  <style>
    .row {
      display: flex;
      flex-wrap: wrap;
      margin-bottom: 20px;
    }
    .cardz {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    width: 310px;
    height: 206px;
    border: 1px solid #ccc;
    border-radius: 13px;
    padding: 0px;
    margin-right: 20px;
    margin-bottom: 22px;
    background-color: #dedede;
    margin-left: 80px;
    }
    .cardz h2 {
      margin-top: 0;
      font-size: 24px;
      text-align: center;
    }
    .cardz p {
      margin: 0;
      font-size: 16px;
      display: flex;
      align-items: center;
    }
    .cardz .icon {
      margin-right: 10px;
    }
    .cardz .location .icon {
      color: #f44336;
    }
    .cardz .phone .icon {
      color: #2196f3;
    }
    .cardz .email .icon {
      color: #4caf50;
    }
  </style>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-ZVEaBgnt8veoQYSz6fFYbfOk+aFjgR8KMgzlH5GsfyNWyqOXxq5piwhvl5Z/FLfXmP43z7m+JrTawT7PQIUn+A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>


  <div class="row">
    <div class="cardz">
      <h2>Contact 4</h2>
      <p class="location"><i class="icon fas fa-map-marker-alt"></i>456 Elm St, Anytown, USA</p>
    </div>
    <div class="cardz">
      <h2>Contact 5</h2>
      <p class="phone"><i class="icon fas fa-phone"></i>555-5678</p>
    </div>
    <div class="cardz">
      <h2>Contact 6</h2>
      <p class="email"><i class="icon fas fa-envelope"></i>sales@example.com</p>
    </div>
  </div> -->

<!--   
  <!DOCTYPE html>
<html>
  
<head>
    <meta charset="utf-8">
    <title>Customize the scroll-bar</title>
  
    <style media="screen">
        body {
            background-image: linear-gradient(
                to right, dodgerblue, darkblue);
        }
    </style>
</head>
  
<body>

        <div> -->
<!-- Google Map Copied Code -->
<!-- <iframe src=
            "https://maps.google.com/maps?q=web%20infotech&t=k&z=13&ie=UTF8&iwloc=&output=embed"
                    width="1400"
                    height="500"
                    frameborder="0"
                    style="border:0;"
                    allowfullscreen=""
                    aria-hidden="false"
                    tabindex="0">
            </iframe>
        </div>
    </center>
</body>
  
</html>
 -->






 		
		<!-- Start Contact Us -->
		<!-- <section class="contact-us section">
			<div class="container">
				<div class="inner">
					<div class="row"> 
						<div class="col-lg-6">
							<div class="contact-us-left"> -->
								<!--Start Google-map -->
								<!-- <div id="myMap">
                <iframe width="512" height="512" id="gmap_canvas" src="https://maps.google.com/maps?q=web%20infotech&t=k&z=11&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            
                </div> -->
                
								<!--/End Google-map -->
							<!-- </div>
						</div>
						<div class="col-lg-6">
							<div class="contact-us-form">
								<h2>Contact With Us</h2>
								<p>If you have any questions please fell free to contact with us.</p> -->
								<!-- Form -->
								<!-- <form class="form" method="post" action="http://wpthemesgrid.com/themes/mediplus/mail/mail.php">
									<div class="row">
										<div class="col-lg-6">
											<div class="form-group">
												<input type="text" name="name" placeholder="Name" required="">
											</div>
										</div>
										<div class="col-lg-6">
											<div class="form-group">
												<input type="email" name="email" placeholder="Email" required="">
											</div>
										</div>
										<div class="col-lg-6">
											<div class="form-group">
												<input type="text" name="phone" placeholder="Phone" required="">
											</div>
										</div>
										<div class="col-lg-6">
											<div class="form-group">
												<input type="text" name="subject" placeholder="Subject" required="">
											</div>
										</div>
										<div class="col-lg-12">
											<div class="form-group">
												<textarea name="message" placeholder="Your Message" required=""></textarea>
											</div>
										</div>
										<div class="col-12">
											<div class="form-group login-btn">
												<button class="btn" type="submit">Send</button>
											</div>
											<div class="checkbox">
												<label class="checkbox-inline" for="2"><input name="news" id="2" type="checkbox">Do you want to subscribe our Newsletter ?</label>
											</div>
										</div>
									</div>
								</form> -->
								<!--/ End Form -->
							<!-- </div>
						</div>
					</div>
				</div>
				<div class="contact-info">
					<div class="row"> -->
						<!-- single-info -->
						<!-- <div class="col-lg-4 col-12 ">
							<div class="single-info">
								<i class="icofont icofont-ui-call"></i>
								<div class="content">
									<h3>+(000) 1234 56789</h3>
									<p>info@company.com</p>
								</div>
							</div>
						</div> -->
						<!--/End single-info -->
						<!-- single-info -->
						<!-- <div class="col-lg-4 col-12 ">
							<div class="single-info">
								<i class="icofont-google-map"></i>
								<div class="content">
									<h3>2 Fir e Brigade Road</h3>
									<p>Chittagonj, Lakshmipur</p>
								</div>
							</div>
						</div> -->
						<!--/End single-info -->
						<!-- single-info -->
						<!-- <div class="col-lg-4 col-12 ">
							<div class="single-info">
								<i class="icofont icofont-wall-clock"></i>
								<div class="content">
									<h3>Mon - Sat: 8am - 5pm</h3>
									<p>Sunday Closed</p>
								</div>
							</div>
						</div> -->
						<!--/End single-info -->
					<!-- </div>
				</div>
			</div>
		</section> -->
		<!--/ End Contact Us -->

 
<?php include 'include/footer.php' ?>