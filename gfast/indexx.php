<?php
	ob_start();
	session_start();
	$conn =mysqli_connect("localhost","root","","db_gfast");

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	$email = $_SESSION["login"];
	$query="select * from usertbl where email='$email'";
	$result2 = mysqli_query($conn,$query);
	$row2=mysqli_fetch_assoc($result2);

	if (!isset($_SESSION["login"])) {
		header("Location: login.php");
	}
	else{

?>
<!DOCTYPE html>
<!-- test101: using ATOM -->
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Welcome to G-Fast</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />

				<!-- fa icons -->
		    <link href="../../fa/css/fontawesome.css" rel="stylesheet">
		    <link href="../../fa/css/brands.css" rel="stylesheet">
		    <link href="../../fa/css/solid.css" rel="stylesheet">

				<!-- modal -->
				<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
				<link rel="stylesheet" href="modal/css/ionicons.min.css">
				<link rel="stylesheet" href="modal/css/style.css">

        <style>
          header.masthead {
            background-image: url("assets/img/bg-header.jpg");
          }
          #session_email{
            color: white;
          }
          .logoutRef{
            text-decoration: none;
          }

					/* dropdown  */
					.dropbtn {
					  background-color: #04AA6D;
					  color: white;
					  padding: 23px;
					  font-size: 16px;
					  border: none;
					}

					.dropdown {
					  position: relative;
					  display: inline-block;
					}

					.dropdown-content {
					  display: none;
					  position: absolute;
					  background-color: #f1f1f1;
					  min-width: 160px;
					  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
					  z-index: 1;


					}

					.dropdown-content a {
					  color: black;
					  padding: 12px 16px;
					  text-decoration: none;
					  display: block;
					}

					.dropdown-content a:hover {background-color: #ddd;}

					.dropdown:hover .dropdown-content {display: block;}

					.dropdown:hover .dropbtn {background-color: #3e8e41;}

        </style>

    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">

								<div class="dropdown">
								  <span id="session_email"><?=$_SESSION['login'];?> <i class="fas fa-sort-down" style="color:white"></i></span>
								  <div class="dropdown-content">
								    <a type="button" data-toggle="modal" data-target="#updateUser">Edit Account</a>
								    <a href="login/logout.php">Logout</a>
								  </div>
								</div>

                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                        <!-- <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li> -->
                        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#team">Team</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead"  >
            <div class="container">
                <div class="masthead-subheading">Welcome To!</div>
                <div class="masthead-heading text-uppercase">G-Fast</div>
                <a class="btn btn-primary btn-xl text-uppercase" href="order.php">Start Here</a>

            </div>
        </header>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Services</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">E-Commerce</h4>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Responsive Design</h4>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Web Security</h4>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- About-->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">About</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/1.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>2009-2011</h4>
                                <h4 class="subheading">Our Humble Beginnings</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/2.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>March 2011</h4>
                                <h4 class="subheading">An Agency is Born</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/3.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>December 2015</h4>
                                <h4 class="subheading">Transition to Full Service</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/4.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>July 2020</h4>
                                <h4 class="subheading">Phase Two Expansion</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>
                                Be Part
                                <br />
                                Of Our
                                <br />
                                Story!
                            </h4>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- Team-->
        <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">WORKFORCE TEAM</h2>
                    <h3 class="section-subheading text-muted">We are the aspiring student developers from Cebu Institute of Technology. <br> We welcome you all to the application that we are working on, the G-Fast: A GPS-Drivin Online Fuelling Application. <br><br>To Know more about us, see our teams descriptions below!</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/siao.jpg" alt="..." />
                            <h4>JONEIL SIAO</h4>
                            <p class="text-muted">A 3rd year student in Cebu Institute of Technology University taking the course of BSIT from Dumanjug Cebu, that like to read manhua and playing video games</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/jn.siao"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/Almasa.png" alt="..." />
                            <h4>NINO JOHN ALMASA</h4>
                            <p class="text-muted">/*HELLO WORLD!*/<br>A third year BSIT student of Cebu Institute of Technology - University and currently resides in Dumanjug, Cebu. Fascinated in uncovering the mysteries of the world</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/LADRES.jpeg" alt="..." />
                            <h4>ROBERTO LADRES</h4>
                            <p class="text-muted">A third year aspiring student Developer from Buenavista, Bohol. Who is currently studying in Cebu Institute of technology in a program of Bachelor of Science in Information Technology.</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <br><br>
                    <div class="col-lg-4" style="margin-left:210px">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/Rosales.jpg" alt="..." />
                            <h4>GEROSS ROSALES</h4>
                            <p class="text-muted">A 3rd year BSIT student, currently studying at Cebu Institute Technology University from Talisay City, Cebu</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/singson.jpg" alt="..." />
                            <h4>ANGELERINA SINGSON</h4>
                            <p class="text-muted">Currently a third year BSIT student at a well known university in Cebu. Born in Dasmarinas Cavite on July 5,1999 and currently living in the province of Cebu.</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p></div>
                </div>
            </div>
        </section>
        <!-- Clients-->
        <div class="py-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="https://www.office.com/" target="_blank" rel="noopener noreferrer"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/microsoft.svg" alt="..." /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="https://gmail.com/" target="_blank" rel="noopener noreferrer"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/google.svg" alt="..." /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="https://web.facebook.com" target="_blank" rel="noopener noreferrer"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/facebook.svg" alt="..." /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="https://www.ibm.com" target="_blank" rel="noopener noreferrer"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/ibm.svg" alt="..." /></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Contact Us</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <!-- * * * * * * * * * * * * * * *-->
                <!-- * * SB Forms Contact Form * *-->
                <!-- * * * * * * * * * * * * * * *-->
                <!-- This form is pre-integrated with SB Forms.-->
                <!-- To make this form functional, sign up at-->
                <!-- https://startbootstrap.com/solution/contact-forms-->
                <!-- to get an API token!-->
                <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <!-- Name input-->
                                <input class="form-control" id="name" type="text" placeholder="Your Name *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <div class="form-group">
                                <!-- Email address input-->
                                <input class="form-control" id="email" type="email" placeholder="Your Email *" data-sb-validations="required,email" />
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <div class="form-group mb-md-0">
                                <!-- Phone number input-->
                                <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <!-- Message input-->
                                <textarea class="form-control" id="message" placeholder="Your Message *" data-sb-validations="required"></textarea>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                            </div>
                        </div>
                    </div>
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center text-white mb-3">
                            <div class="fw-bolder">Form submission successful!</div>
                            To activate this form, sign up at
                            <br />
                            <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                        </div>
                    </div>
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                    <!-- Submit Button-->
                    <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase disabled" id="submitButton" type="submit">Send Message</button></div>
                </form>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Copyright &copy; Your Website 2021</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                        <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                    </div>
                </div>
            </div>
            <br><br>

        </footer>

				<!-- Modal Add User -->
				<div id='updateUser' class='modal fade' role='dialog'>

				<div class='modal-dialog'>

					<!-- Modal content-->
					<div class='modal-content'>
						<div class='modal-header'>

						</div>
						<div class='modal-body'>


							<div class='modal-body p-4 py-5 p-md-5'>
								<h3 class='text-center mb-3'>Update User</h3>
								<br>
								<form class='signup-form'  method='POST'>
										<input type='text' class='form-control' value='<?=$row2["userID"]?>' name='user_ID' hidden>
									<div class='form-group mb-2'>
										<label for='name'>First Name</label>
										<input type='text' class='form-control' value='<?=$row2["firstName"]?>' name='fName'>
									</div>
									<div class='form-group mb-2'>
										<label for='name'>Last Name</label>
										<input type='text' class='form-control' value='<?=$row2["lastName"]?>' name='lName'>
									</div>
									<div class='form-group mb-2'>
										<label for='email'>Email</label>
										<input type='text' class='form-control' value='<?=$row2["email"]?>' name='Email' >
									</div>
									<div class='form-group mb-2'>
										<label >Password</label>
										<input type='text' class='form-control' value='<?=$row2["password"]?>' name='Password'>
									</div>
									<div class='form-group mb-2'>
										<label >Phone</label>
										<input type='text' class='form-control' value='<?=$row2["phone"]?>' name='Phone'>
									</div>
									<br>
									<div class='form-group mb-2'>
										<button type='submit' class='form-control btn btn-primary rounded submit px-3' name='btnUpdateUser'>Upate User</button>
									</div>


								</form>
							</div>


						</div>
						<div class='modal-footer'>
							<button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
						</div>
					</div>

				</div>
			</div>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

				<!-- modal -->
		    <script src="modal/js/jquery.min.js"></script>
		    <script src="modal/js/popper.js"></script>
		    <script src="modal/js/bootstrap.min.js"></script>
		    <script src="modal/js/main.js"></script>
    </body>
</html>
<?php
	if(isset($_POST['btnUpdateUser'])){

			$fName=$_POST['fName'];
			$user=$_POST['user_ID'];
			$lName=$_POST['lName'];
			$Email=$_POST['Email'];
			$Pwd=$_POST['Password'];
			$Phone=$_POST['Phone'];

			$sql3 = mysqli_query($conn,"UPDATE usertbl set firstName='$fName',lastName='$lName',email='$Email',password='$Pwd',phone='$Phone' where userID = $user");
			$_SESSION["login"]=	$Email;
			header("Location: indexx.php");

	}

}
?>
