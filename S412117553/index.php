<?php include 'include/config.php';

$sql = "SELECT * FROM `users` WHERE `users`.`id` = 1";
$result = mysqli_query($con, $sql);
$data = mysqli_fetch_assoc($result);
session_start();
?>
<!DOCTYPE html>
<html lang="en">



<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?=$data['name']?> - <?=$data['title']?></title>
  <meta content="" name="description">
  <meta content="" name="Karim">

 
  <style>
        .highlight {
            color: white;
            font-weight: 500;
            font-size: 19px;
           
        }
    </style>

  
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  
  <link href="View/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="View/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="View/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="View/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="View/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="View/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  
  <link href="View/css/style.css" rel="stylesheet">


</head>

<body>

<?php if(!(isset($_SESSION["user_id"]))){
      header("Location:Log-in.php ");
}
?>
  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container">

      <h1 ><a href="index.php"><?=$data['name']?></a></h1>
      
      <h2 style="color:#fff">I'm <span class="typing" style="color:#fff"></span></h2>
      <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
      

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link active" href="#header" style="font-size:18px;">Home</a></li>
          <li><a class="nav-link" href="#about" style="font-size:18px;">About</a></li>
          <li><a class="nav-link" href="#portfolio" style="font-size:18px;">Portfolio</a></li>
          <li><a class="nav-link" href="#contact" style="font-size:18px;">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      

    </div>
  </header><!-- End Header -->

  <!-- ======= About Section ======= -->
  <section id="about" class="about">

    <!-- ======= About Me ======= -->
    <div class="about-me container">

      <div class="section-title">
        <h2>About</h2>
        <p>Learn more about me</p>
      </div>

      <div class="row">
        <div class="col-lg-4" data-aos="fade-right">
          <img src="View/img/Karim.jpeg" class="img-fluid" alt="" style=" width: 90%;">
        </div>
        <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
          <h3><?php echo $data['title']?></h3>
          <p class="fst-italic" style="font-weight: 700; font: size 30px;">
            <?=$data['slogan']?>
          </p>
          <div class="row">
            <div class="col-lg-6">
              <ul>
                <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span><?php echo date('d M Y', strtotime($data['birthday']))?></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span><a style="color: white;" href="tel:<?=$data['phone']?>"><?=$data['phone']?></a></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span><?=$data['city']?></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span><?=$data['age']?></span></li>
              </ul>
            </div>



            <div class="col-lg-6">
              <ul>
                <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span><?=$data['degree']?></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Certification:</strong> <span><?=$data['certification']?></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span><a style="color: white;" href="mailto:<?=$data['email']?>"><?=$data['email']?></a></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>
                  <?php 
                  if($data['freelance'] == 1){
                    echo "Available";
                  }
                  else{
                    echo "Not Available";
                  }
                  ?>

                </span></li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <br>
      <br>
      <br>

      <div class="row">
        <div class="col-lg-6">
          <h3 class="resume-title">Summary</h3>
          <div class="resume-item pb-0">
            <h4>Karim Maged</h4>
            <p style = "font-size: 17px;"><em>Innovative and deadline-driven Pogrammer with 1+ years of experience Frontend and Backend user-centered  from initial concept to final, polished deliverable.</em></p>
            <p>
            <ul>
              <li>Qassim,Buraidah.</li>
              <li>+966 53 010 2767</li>
              <li>kareemcs41211@gmail.com</li>
            </ul>
            </p>
          </div>

          <h3 class="resume-title">Education</h3>
          <div class="resume-item">
            <h4>Primary and preparatory  Education</h4>
            <h5>2008 - 2016</h5>
            <p style = "font-size: 18px;"><em>Primary and preparatory  Education</em></p>
            <p style = "font-size: 17px;"> I Completed primary education in Egypt and a preparatory level were located between Egypt and Saudi Arabia.
Secondary and University Education: Saudi Arabia</p>
          </div>
          <div class="resume-item">
            <h4>Bachelor of Computer Science</h4>
            <h5>2020 - 2024</h5>
            <p style = "font-size: 18px;"><em>Qassim University, Buraydah, Qassim</em></p>
            <p style = "font-size: 17px;">I pursued my undergraduate education at Qassim University, where I majored in Computer Science. I am passionate about the field of web technologies and artificial intelligence, and I am committed to staying at the forefront of innovation and knowledge in these areas.</p>
          </div>
        </div>
        <div class="col-lg-6">
          <h3 class="resume-title">Certificates</h3>
          <div class="resume-item">
            <h4>Certificates</h4>
            <h5>2019 - Present</h5>
           
            <p>
            <ul>
              <li>How to prepare your manuscript</li>
              <li>How to write an abstract and improve your article</li>
              <li>Leader makers</li>
              <li>Data Structure</li>
              <li>Basic JavaScript</li>
              <li>Basic Python</li>
              <li>Successful personal productivity</li>
              <li>Writing your CV</li>
              <li>Strategic thinking</li>
            </ul>
            </p>
          </div>
          <div class="resume-item">
            <h4>Hobbies and interests</h4>
            
            
            <p>
            <ul>
              <li><span class="highlight"><b> Reading Books: </b></span> I am an avid reader, and I believe that reading is a gateway to continuous learning. I have a diverse interest in various genres, which helps expand my knowledge and creativity.</li>
              <br>
              <li><span class="highlight"><b>Football:</b></span> I have a deep passion for football, both as a player and a dedicated fan. Playing this sport has not only improved my physical fitness but also nurtured teamwork, discipline, and strategic thinking.</li>
              <br>
              <li><span class="highlight"><b>Horse Riding:</b></span> I enjoy the elegance and connection with nature that comes with horse riding. It's an activity that demands balance, patience, and a strong sense of responsibility.</li>
              <br>
              <li><span class="highlight"><b>Chess:</b></span> Chess is a game I find intellectually stimulating. Playing chess has enhanced my problem-solving skills and strategic thinking, which I believe are valuable attributes in both personal and professional life.</li>
              <br>
              <li><span class="highlight"><b>Traveling and Exploring New Countries:</b></span> Exploring new countries is a way to embrace diverse cultures and perspectives. It broadens my horizons, enhances my adaptability, and allows me to develop a global perspective.</li>
              
            </ul>
            </p>
          </div>
        </div>
      </div>


    </div><!-- End About Me -->




    <?php
    
    $counter = "SELECT * FROM `counter`";
    $counter_result = mysqli_query($con, $counter);

    ?>
    <!-- ======= Counts ======= -->
    <div class="counts container">

      <div class="row">
    <?php
    if($counter_result -> num_rows > 0){
      while($row = $counter_result -> fetch_assoc()){
      ?>
        <div class="col-lg-3 col-md-6 mt-5">
          <div class="count-box">
            <i class="<?=$row['icon']?>"></i>
            <span data-purecounter-start="<?=$row['pre']?>" data-purecounter-end="<?=$row['post']?>" data-purecounter-duration="1" class="purecounter"></span>
            <p><?=$row['title']?></p>
          </div>
        </div>
        <?php
      }
    }

    ?>




      </div>

    </div><!-- End Counts -->

    <!-- ======= Interests ======= -->
    <div class="interests container">

      <div class="section-title">
        <h2>Skills</h2>
      </div>

      <div class="row">

      <?php
      
      $skills = "SELECT * FROM `skills`";
      $skills_result = mysqli_query($con, $skills);

      if($skills_result -> num_rows > 0){
        while($skills_row = $skills_result -> fetch_assoc()){
          ?>
            <div class="col-lg-3 col-md-4">
              <div class="icon-box">
                <i class="<?=$skills_row['icon']?>" style="color: #<?=$skills_row['color']?>;"></i>
                <h3><?=$skills_row['title']?></h3>
              </div>
            </div>
          <?php
        }
      }

      ?>
      </div>

     



    </div><!-- End Interests -->


  </section><!-- End About Section -->



  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio">
    <div class="container">

      <div class="section-title">
        <h2>Portfolio</h2>
        <p>My Works</p>
      </div>

      <div class="row">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <?php
              $cat_list = "SELECT * FROM `category`";
              $cat_result = mysqli_query($con, $cat_list);
              if($cat_result -> num_rows > 0){
                while($cat_data = $cat_result -> fetch_assoc()){
                  ?>
                  <li data-filter=".<?php echo $cat_data['name']?>"><?php echo $cat_data['name']?></li>
                  <?php
                }
              }
            ?>
          </ul>
        </div>
      </div>




      <div class="row portfolio-container">
        <?php
          $portfolio = "SELECT * FROM `portfolio`";
          $portfolio_result = mysqli_query($con, $portfolio);

          if($portfolio_result -> num_rows > 0){
            while($portfolio_data = $portfolio_result->fetch_assoc()){
              $category = $portfolio_data['category'];
                $category_sql = "SELECT * FROM `category` WHERE `category`.`id`='$category'";
                $category_result = mysqli_query($con, $category_sql);
                $category_data = mysqli_fetch_assoc($category_result);
              ?>
                <div class="col-lg-4 col-md-6 portfolio-item <?=$category_data['name']?>">
    <div class="portfolio-wrap">
        <img src="<?=$portfolio_data['image']?>" class="img-fluid" alt="">
        <div class="portfolio-info">
            <h4><?=$portfolio_data['title']?></h4>
            <p><?=$category_data['name']?></p>
            <div class="portfolio-links">
                <a href="<?=$portfolio_data['image']?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="<?php echo $portfolio_data['title']?>"><i class="bx bx-plus"></i></a>
                <a href="<?php echo $portfolio_data['url']?>" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>

              </div>
        </div>
    </div>
</div>



              <?php
            }
          }
          else{
            echo "NO Portfolio Found.";
          }
        ?>
      </div>

    </div>
  </section><!-- End Portfolio Section -->




  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <h2>Contact</h2>
        <p>Contact Me</p>
      </div>

      <div class="row mt-2">

        <div class="col-md-6 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-map"></i>
            <h3>My Address</h3>
            <p><?=$data['address']?></p>
          </div>
        </div>




        <div class="col-md-6 mt-4 mt-md-0 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-share-alt"></i>
            <h3>Social Profiles</h3>
            <div class="social-links">
              <?php   
                if($data['twitter']){
              ?>
                  <a href="<?=$data["twitter"]?>" target="_blank" class="twitter"><i class="bi bi-twitter"></i></a>
              <?php
                }
              ?>

              <?php   
                if($data['facebook']){
              ?>
                  <a href="<?=$data["facebook"]?>" target="_blank" class="facebook"><i class="bi bi-facebook"></i></a>
              <?php
                }
              ?>



              <?php   
                if($data['instagram']){
              ?>
                  <a href="<?=$data["instagram"]?>" target="_blank" class="instagram"><i class="bi bi-instagram"></i></a>
              <?php
                }
              ?>

             

             

              <?php   
                if($data['linkedin']){
              ?>
                  <a href="<?=$data["linkedin"]?>" target="_blank" class="linkedin"><i class="bi bi-linkedin"></i></a>
              <?php
                }
              ?>




            </div>
          </div>
        </div>

        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-envelope"></i>
            <h3>Email Me</h3>
            <p><?=$data['email']?></p>
          </div>
        </div>
        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-phone-call"></i>
            <h3>Call Me</h3>
            <p><?=$data['phone']?></p>
          </div>
        </div>
      </div>
      <?php
        if(isset($_POST['send_message'])){
          global $con;
          $name = mysqli_real_escape_string($con, $_POST['name']);
          $email = mysqli_real_escape_string($con, $_POST['email']);
          $subject = mysqli_real_escape_string($con, $_POST['subject']);
          $message = mysqli_real_escape_string($con, $_POST['message']);

          $contact = "INSERT INTO `contact` (`name`, `email`, `subject`, `message`) VALUES ('$name', '$email', '$subject', '$message')";
          mysqli_query($con, $contact);
        }
      ?>
      <form action="#" method="post" class="mt-4">
        <div class="row">
          <div class="col-md-6 form-group">
            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
          </div>
          <div class="col-md-6 form-group mt-3 mt-md-0">
            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
          </div>
        </div>





        <div class="form-group mt-3">
          <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
        </div>
        <div class="form-group mt-3">
          <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
        </div>
        <div class="text-center"><button type="submit" name="send_message">Send Message</button></div>
      </form>

    </div>
  </section><!-- End Contact Section -->

  <div class="credits">
    <?php 
    
    $details = "SELECT * FROM `details` WHERE `details`.`id` = 1";
    $details_result = mysqli_query($con, $details);
    $details_data = mysqli_fetch_assoc($details_result);

    ?>
    


    Designed by <a href="<?=$details_data['url']?>" target="_blank"><?=$details_data['company']?></a>
  </div>
  

  <!-- Vendor JS Files -->
  <script src="View/vendor/purecounter/purecounter.js"></script>
  <script src="View/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="View/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="View/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="View/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="View/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="View/vendor/php-email-form/validate.js"></script>
  <script type="text/javascript">
    var typed = new Typed('.typing', {
      strings: ["Programmer", "Developer", "Designer"],
      loop: true,
      typeSpeed: 120,
      backSpeed: 120
    });
  </script>

  
  <script src="View/js/main.js"></script>

</body>

</html>