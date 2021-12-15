<!doctype html>
<html lang="en">
  <head>
  	<title>Order Now</title>
    <style>
      .input[type=text], select{
        width: 100%;
        padding: 12px 20px;
        margin:8px 0;
        display:inline-block;
        border:1px solid #ccc;
        border-radius: 4px;
        box-sizing:border-box;
      }
    
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Order Now!</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12">
					<div class="wrapper">
						<div class="row no-gutters mb-5">
							<div class="col-md-7">
								<div class="contact-wrap w-100 p-md-5 p-4">
									<h3 class="mb-4">User/Client</h3>
									<div id="form-message-warning" class="mb-4"></div>
				      		<div id="form-message-success" class="mb-4">
				      		</div>
									<form method="POST" id="contactForm" name="contactForm" class="contactForm">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="name">Location</label>
													<input type="text" class="form-control" name="name" id="name" placeholder="Type Location">
												</div>
											</div>
                      <br>
											<div class="col-md-6">
												<div class="form-group">
                          <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
        <label class="form-check-label" for="invalidCheck2"> </label>
         WindSheild Cleaning
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
                          <label type="text">Gastype Price</label>
      <select id="gas">
      <option class="gas">Select</option>
      <option value="Petron" >Petron 150</option>
      <option value="Petron" >Shell 250</option>
    </select>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
                          <label type="text">Mode of Payment</label>
      <select id="gas">
      <option class="gas">Select</option>
      <option value="Petron" >GCash</option>
      <option value="Petron" >PayMaya</option>
    </select>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="submit" value="Confirm" class="btn btn-primary">
													<div class="submitting"></div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
							<div class="col-md-5 d-flex align-items-stretch">
								<!-- <div id="map">
			          </div> -->
                <div class="map" style="float: left; margin-right: 20px;">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d125585.22372705504!2d123.77625454866048!3d10.378756863835617!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33a999258dcd2dfd%3A0x4c34030cdbd33507!2sCebu%20City%2C%20Cebu!5e0!3m2!1sen!2sph!4v1639028347850!5m2!1sen!2sph" width="510" height="535" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.validate.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>
