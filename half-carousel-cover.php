<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Material Design for Bootstrap</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
    <!-- Custom styles -->
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>
        <!--Main Navigation-->
    <header>
      <style>
        /* Carousel styling */
        #introCarousel,
        .carousel-inner,
        .carousel-item,
        .carousel-item.active {
          height: 100vh;
        }

        .carousel-item:nth-child(1) {
          background-image: url('img/1.png');
          background-repeat: no-repeat;
          background-size: cover;
          background-position: center center;
        }
        .carousel-item:nth-child(2) {
          background-image: url('img/2.png');
          background-repeat: no-repeat;
          background-size: cover;
          background-position: center center;
        }
        .carousel-item:nth-child(3) {
          background-image: url('img/3.png');
          background-repeat: no-repeat;
          background-size: cover;
          background-position: center center;
        }

        /* Height for devices larger than 576px */
        @media (min-width: 992px) {
          #introCarousel {
            margin-top: -58.59px;
          }
          #introCarousel,
          .carousel-inner,
          .carousel-item,
          .carousel-item.active {
            height: 50vh;
          }
        }

        .navbar .nav-link {
          color: #fff !important;
        }
      </style>

      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-dark d-none d-lg-block" style="z-index: 2000;">
        <div class="container-fluid">
          <!-- Navbar brand -->
          <a class="navbar-brand nav-link" target="_blank" href="https://mdbootstrap.com/docs/standard/">
            <strong>MDB</strong>
          </a>
          <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarExample01"
            aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarExample01">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item active">
                <a class="nav-link" aria-current="page" href="#intro">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://www.youtube.com/channel/UC5CF7mLQZhvx8O5GODZAhdA" rel="nofollow"
                  target="_blank">Learn Bootstrap 5</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://mdbootstrap.com/docs/standard/" target="_blank">Download MDB UI KIT</a>
              </li>
            </ul>

            <ul class="navbar-nav d-flex flex-row">
              <!-- Icons -->
              <li class="nav-item me-3 me-lg-0">
                <a class="nav-link" href="https://www.youtube.com/channel/UC5CF7mLQZhvx8O5GODZAhdA" rel="nofollow"
                  target="_blank">
                  <i class="fab fa-youtube"></i>
                </a>
              </li>
              <li class="nav-item me-3 me-lg-0">
                <a class="nav-link" href="https://www.facebook.com/mdbootstrap" rel="nofollow" target="_blank">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="nav-item me-3 me-lg-0">
                <a class="nav-link" href="https://twitter.com/MDBootstrap" rel="nofollow" target="_blank">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="nav-item me-3 me-lg-0">
                <a class="nav-link" href="https://github.com/mdbootstrap/mdb-ui-kit" rel="nofollow" target="_blank">
                  <i class="fab fa-github"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- Navbar -->

      <!-- Carousel wrapper -->
      <div id="introCarousel" class="carousel slide carousel-fade shadow-2-strong" data-mdb-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-mdb-target="#introCarousel" data-mdb-slide-to="0" class="active"></li>
          <li data-mdb-target="#introCarousel" data-mdb-slide-to="1"></li>
          <li data-mdb-target="#introCarousel" data-mdb-slide-to="2"></li>
        </ol>

        <!-- Inner -->
        <div class="carousel-inner">
          <!-- Single item -->
          <div class="carousel-item active">
            <div class="mask" >
              <div class="d-flex justify-content-center align-items-center h-100">
                <div class="text-white text-center">
                  <h1 class="mb-3"></h1>
                  <h5 class="mb-4"></h5>

                 
                </div>
              </div>
            </div>
          </div> 

          <!-- Single item -->
          <div class="carousel-item">
            <div class="mask"> 
              <div class="d-flex justify-content-center align-items-center h-100">
                <div class="text-white text-center">
                  <h2></h2>
                </div>
              </div>
            </div>
          </div>

          <!-- Single item -->
          <div class="carousel-item">
            <div
              class="mask"

            >
              <div class="d-flex justify-content-center align-items-center h-100">
                <div class="text-white text-center">
                  <h2></h2>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Inner -->

        <!-- Controls -->
        <a class="carousel-control-prev" href="#introCarousel" role="button" data-mdb-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#introCarousel" role="button" data-mdb-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <!-- Carousel wrapper -->
    </header>
    <!--Main Navigation-->

    <!--Main layout-->
    <main class="mt-5">
      <div class="container">
        <!--Section: Content-->
        <section>
          <div class="row">
            <div class="col-md-6 gx-5 mb-4">
              <div class="bg-image hover-overlay ripple shadow-2-strong" data-mdb-ripple-color="light">
                <img src="img/3.png" class="img-fluid" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
			
              </div>
            </div>

            <div class="col-md-6 gx-5 mb-4">
              <h4><strong>ROS - Robot Operating System</strong></h4>
              <p class="text-muted">
				The Robot Operating System (ROS) is a set of software libraries and tools that help you 
				build robot applications. From drivers to state-of-the-art algorithms, and with powerful 
				developer tools, ROS has what you need for your next robotics project. And it's all open source.
              </p>
              <p><strong>The ROS Community</strong></p>
              <p class="text-muted">
				The ROS community is a loosely affiliated collection of engineers and hobbyists from around the globe with a shared interest in robotics and open-source software. We like to say ROS is a federated community; meaning individuals create their own sub-communities based on common interests, a specific goal, or a shared language 
				or geographical region. The core ROS source code is built and maintained by Open Robotics and the members of the ROS 2 Technical Steering Committee (TSC); but much of what makes ROS so special is built by other groups within the ROS community. This distributed approach to software development makes the ROS community resilient, and allows ROS to be adapted to a number of specialized use cases. Some people find this approach a bit confusing as they are used to more centralized software development, but they soon realize that allows every 
				individual a chance to work on the things that matter most to them.
              </p>
            </div>
          </div>
        </section>
        <!--Section: Content-->

        <hr class="my-5" />

        <!--Section: Content-->
        <section class="text-center">
          <h4 class="mb-5"><strong>ROS INSTALL</strong></h4>
			<?php 

				include "mazer-main/dist/connect.php";
				$sql="select * from actors order by actor_id desc";
				$result = $c->query($sql);
				$number=$result->num_rows;
				error_reporting(~E_NOTICE);
				$no=1;
                if($number<>0) {  $m=$number/3; $n=$number%3;
                    if($n > 0) { $m++;}				
					 
			?>
          <div class="row">
		   <?php 
		         for($j=1;$j<=3;$j++) {
				 for($i=1;$i<=$m;$i++) {
				    while($rs=$result->fetch_assoc()) {
						$id_anime=$rs["actor_id"];
						$name_anime=$rs["actor_name"];
						$detail_anime=$rs["actor_detail"];
						$photo_anime=$rs["actor_img"];
						$photo="mazer-main/dist/".$photo_anime;
						
			?>	 
            <div class="col-lg-4 col-md-12 mb-4">
              <div class="card">
                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                    <img
                    src="<?=$photo?>"
                    class="img-fluid"
                  />
                  <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                  </a>
                </div>
                <div class="card-body">
                  <h5 class="card-title"><?=$name_anime?></h5>
                  <p class="card-text">
                     <?=$detail_anime?>
                  </p>
                  <a href="#!" class="btn btn-primary">Button</a>
                </div>
              </div>
            </div>
             <?php } // end loop j
			       } // end loop i
				   } // end while
				   } // end number
			 ?>
          </div>
        </section>
        <!--Section: Content-->

        <hr class="my-5" />

        <!--Section: Content-->
        <section class="mb-5">
          <h4 class="mb-5 text-center"><strong>Facilis consequatur eligendi</strong></h4>

          <div class="row d-flex justify-content-center">
            <div class="col-md-6">
              <form>
                <!-- 2 column grid layout with text inputs for the first and last names -->
                <div class="row mb-4">
                  <div class="col">
                    <div class="form-outline">
                      <input type="text" id="form3Example1" class="form-control" />
                      <label class="form-label" for="form3Example1">First name</label>
                    </div>
                  </div>
                  <div class="col">
                    <div class="form-outline">
                      <input type="text" id="form3Example2" class="form-control" />
                      <label class="form-label" for="form3Example2">Last name</label>
                    </div>
                  </div>
                </div>

                <!-- Email input -->
                <div class="form-outline mb-4">
                  <input type="email" id="form3Example3" class="form-control" />
                  <label class="form-label" for="form3Example3">Email address</label>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                  <input type="password" id="form3Example4" class="form-control" />
                  <label class="form-label" for="form3Example4">Password</label>
                </div>

                <!-- Checkbox -->
                <div class="form-check d-flex justify-content-center mb-4">
                  <input
                    class="form-check-input me-2"
                    type="checkbox"
                    value=""
                    id="form2Example3"
                    checked
                  />
                  <label class="form-check-label" for="form2Example3">
                    Subscribe to our newsletter
                  </label>
                </div>

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4">
                  Sign up
                </button>

                <!-- Register buttons -->
                <div class="text-center">
                  <p>or sign up with:</p>
                  <button type="button" class="btn btn-primary btn-floating mx-1">
                    <i class="fab fa-facebook-f"></i>
                  </button>

                  <button type="button" class="btn btn-primary btn-floating mx-1">
                    <i class="fab fa-google"></i>
                  </button>

                  <button type="button" class="btn btn-primary btn-floating mx-1">
                    <i class="fab fa-twitter"></i>
                  </button>

                  <button type="button" class="btn btn-primary btn-floating mx-1">
                    <i class="fab fa-github"></i>
                  </button>
                </div>
              </form>
            </div>
          </div>
        </section>
        <!--Section: Content-->
      </div>
    </main>
    <!--Main layout-->

    <!--Footer-->
    <footer class="bg-light text-lg-start">
      <div class="py-4 text-center">
        <a
          role="button"
          class="btn btn-primary btn-lg m-2"
          href="https://www.youtube.com/channel/UC5CF7mLQZhvx8O5GODZAhdA"
          rel="nofollow"
          target="_blank"
        >
          Learn Bootstrap 5
        </a>
        <a
          role="button"
          class="btn btn-primary btn-lg m-2"
          href="https://mdbootstrap.com/docs/standard/"
          target="_blank"
        >
          Download MDB UI KIT
        </a>
      </div>

      <hr class="m-0" />

      <div class="text-center py-4 align-items-center">
        <p>Follow MDB on social media</p>
        <a
          href="https://www.youtube.com/channel/UC5CF7mLQZhvx8O5GODZAhdA"
          class="btn btn-primary m-1"
          role="button"
          rel="nofollow"
          target="_blank"
        >
          <i class="fab fa-youtube"></i>
        </a>
        <a
          href="https://www.facebook.com/mdbootstrap"
          class="btn btn-primary m-1"
          role="button"
          rel="nofollow"
          target="_blank"
        >
          <i class="fab fa-facebook-f"></i>
        </a>
        <a
          href="https://twitter.com/MDBootstrap"
          class="btn btn-primary m-1"
          role="button"
          rel="nofollow"
          target="_blank"
        >
          <i class="fab fa-twitter"></i>
        </a>
        <a
          href="https://github.com/mdbootstrap/mdb-ui-kit"
          class="btn btn-primary m-1"
          role="button"
          rel="nofollow"
          target="_blank"
        >
          <i class="fab fa-github"></i>
        </a>
      </div>

      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2020 Copyright:
        <a class="text-dark" href="https://mdbootstrap.com/">MDBootstrap.com</a>
      </div>
      <!-- Copyright -->
    </footer>
    <!--Footer-->
    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript" src="js/script.js"></script>
</body>
</html>