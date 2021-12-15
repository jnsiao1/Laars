<!doctype html>
<html lang="en">
  <head>
  	<title>Contact Form 0</title>
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
								<div id="map">
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
