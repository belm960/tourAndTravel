<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ethio Tour & Travel agancy</title>
  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="../favicon.svg" type="image/svg+xml">
  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="modal.css" class="css">
  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700;800&family=Poppins:wght@400;500;600;700&display=swap"
    rel="stylesheet">
</head>

<body id="top">
  <!-- 
    - #HEADER
  -->
  <header class="header" data-header>
    <div class="overlay" data-overlay></div>
    <div class="header-top">
      <div class="container">
        <a href="tel:+251704292607" class="helpline-box">
          <div class="icon-box">
            <ion-icon name="call-outline"></ion-icon>
          </div>
          <div class="wrapper">
            <p class="helpline-title">For Further Inquires :</p>
            <p class="helpline-number">+251 (704) 292 607</p>
          </div>
        </a>
        <a href="#" class="logo">
          <img src="../assets/images/logo.svg" alt="Tourly logo">
        </a>
        <div class="header-btn-group">
          <button class="nav-open-btn" aria-label="Open Menu" data-nav-open-btn>
            <ion-icon name="menu-outline"></ion-icon>
          </button>
        </div>
      </div>
    </div>
    <div class="header-bottom">
      <div class="container">
        <ul class="social-list">
          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>
          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>
          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-youtube"></ion-icon>
            </a>
          </li>
        </ul>
        <nav class="navbar" data-navbar>
          <div class="navbar-top">
            <a href="#" class="logo">
              <img src="../assets/images/logo-blue.svg" alt="Tourly logo">
            </a>
            <button class="nav-close-btn" aria-label="Close Menu" data-nav-close-btn>
              <ion-icon name="close-outline"></ion-icon>
            </button>
          </div>
          <ul class="navbar-list">
            <li>
              <a href="admin.php" class="navbar-link active" data-nav-link>home</a>
            </li>
            <li>
              <a href="#user" class="navbar-link" data-nav-link>Users</a>
            </li>
            <li>
              <a href="#books" class="navbar-link" data-nav-link>book list</a>
            </li>
            <li>
                <a href="#" class="navbar-link" id="myBtn" data-nav-link>Add Destinations</a>
            </li>
            <li>
                <a href="#" class="navbar-link" id="myBtnp" data-nav-link>Add Packages</a>
            </li>
          </ul>
        </nav>
        <button class="btn btn-primary" id="username">Samuel</button>
      </div>
    </div>
  </header>
  <main>
    <article>
      <!-- 
        - #HERO
      -->
      <section class="hero" id="home">
        <div class="container">
          <h2 class="h1 hero-title">This is the feature you have</h2>
          <p class="hero-text">
            Ac mi duis mollis. Sapiente? Scelerisque quae, penatibus? Suscipit class corporis nostra rem quos
            voluptatibus habitant?
            Fames, vivamus minim nemo enim, gravida lobortis quasi, eum.
          </p>
        </div>
      </section>
      <!-- 
        Book Lists
        -->
    <section class="popular" id="books">
        <div class="container">
          <p class="section-subtitle">Here it is!</p>
          <h2 class="h2 section-title">Book Lists</h2>
          <p class="section-text">
            Fusce hic augue velit wisi quibusdam pariatur, iusto primis, nec nemo, rutrum. Vestibulum cumque laudantium.
            Sit ornare
            mollitia tenetur, aptent.
          </p>
          <div class="container">
            <?php
                include('../database3.php');
                $query = "select * from tour_book";
                $result = mysqli_query($conn, $query);
                ?>
                <div class="container">
                  <ul class="responsive-table">
                    <li class="table-header">
                      <div class="col col-1">Name</div>
                      <div class="col col-2">Email</div>
                      <div class="col col-3">Arrivals</div>
                      <div class="col col-4">Leaving</div>
                    </li>
                    <?php
                    if (mysqli_num_rows($result) > 0) {
                      $sn=1;
                      while($data = mysqli_fetch_assoc($result)) {
                    ?>
                    <li class="table-row">
                      <div class="col col-1" data-label="Name"><?php echo $data['name']; ?></div>
                      <div class="col col-2" data-label="Email"><?php echo $data['email']; ?></div>
                      <div class="col col-3" data-label="Arrivals"><?php echo $data['arrivals']; ?></div>
                      <div class="col col-4" data-label="Leaving"><?php echo $data['leaving']; ?></div>
                    </li>
                    <?php
                    $sn++;}} else { ?>
                    <li>
                    <div class="col col-2">No data found</div>
                    </li>
                    <?php } ?>
                  </ul>
          </div>
        </div>
    </section>
      <!-- 
        - #Users
      -->
      <section class="user" id="user">
        <div class="container">
            <div class="content">
                <p class="section-subtitle">here they are!</p>
                <h2 class="h2 section-title">Our Users</h2>
                <p class="section-text">
                  Fusce hic augue velit wisi quibusdam pariatur, iusto primis, nec nemo, rutrum. Vestibulum cumque
                  laudantium. Sit ornare
                  mollitia tenetur, aptent.
                </p>
                <?php
                include('../database3.php');
                $query = "select * from user";
                $result = mysqli_query($conn, $query);
                ?>
                <div class="container">
                  <ul class="responsive-table">
                    <li class="table-header">
                      <div class="col col-1">Full Name</div>
                      <div class="col col-2">User Name</div>
                      <div class="col col-3">Email</div>
                    </li>
                    <?php
                    if (mysqli_num_rows($result) > 0) {
                      $sn=1;
                      while($data = mysqli_fetch_assoc($result)) {
                    ?>
                    <li class="table-row">
                      <div class="col col-1" data-label="Full Name"><?php echo $data['name']; ?></div>
                      <div class="col col-2" data-label="User Name"><?php echo $data['username']; ?></div>
                      <div class="col col-3" data-label="Email"><?php echo $data['email']; ?></div>
                    </li>
                    <?php
                    $sn++;}} else { ?>
                    <li>
                    <div class="col col-4">No data found</div>
                    </li>
                    <?php } ?>
                  </ul>
                </div>
            </div>
        </div>
      </section>
    </article>
  </main>
  <!-- 
    - #FOOTER
  -->
  <footer class="footer">

    <div class="footer-bottom">
      <div class="container">
        <p class="copyright">
          &copy; 2023 <a href="">Group 6, Computer Science 3rd Year</a>. All rights reserved
        </p>
        <ul class="footer-bottom-list">
          <li>
            <a href="#" class="footer-bottom-link">Privacy Policy</a>
          </li>
          <li>
            <a href="#" class="footer-bottom-link">Term & Condition</a>
          </li>
          <li>
            <a href="#" class="footer-bottom-link">FAQ</a>
          </li>
        </ul>
      </div>
    </div>
  </footer>
  <!--
    dialog box for Destination
  -->
  <div id="myModal" class="modal">
    <?php
    include("../database3.php");
    ?>
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = $_POST["name"];
        $description = $_POST["description"];
        $image_url = "";
        $location = $_POST["location"];
        $activities = $_POST["activities"];
        $best_time = $_POST["best_time"];
        $weather = $_POST["weather"];
        $transportation = $_POST["transportation"];
        $language = $_POST["language"];
        $safety_info = $_POST["safety_info"];
        $rating = $_POST["rating"];
        $reviews = $_POST["reviews"];

        $query = "insert into destination(name, description, image_url, location, activities, best_time, weather, transportation, language, safety_info, rating, reviews) values('$name', '$description','$image_url', '$location', '$activities', '$best_time','$weather','$transportation', '$language', '$safety_info', '$rating', '$reviews')";
        try {
            mysqli_query($conn, $query);
        } catch(mysqli_sql_exception){
            $error_message = mysqli_error($conn);
        }
    }
    mysqli_close($conn);
    ?>

    <!-- Modal content -->
    <div class="modal-content">
      <span class="close" id="closed">&times;</span>
      <div class="login-box">
        <form action="<?php $_SERVER["PHP_SELF"]?>" method="post">
          <div class="row">
              <div class="colum">
                <div class="user-box">
                  <input type="text" name="name" required="">
                  <label>Name</label>
                </div>
                <div class="user-box">
                  <input type="text" name="description" required="">
                  <label>Description</label>
                </div>
                <div class="user-box">
                  <input type="text" name="location" required="">
                  <label>Location</label>
                </div>
                <div class="user-box">
                  <input type="text" name="activities" required="">
                  <label>Activities</label>
                </div>
                <div class="user-box">
                  <input type="text" name="best_time" required="">
                  <label>Best Time</label>
                </div>
                <div class="user-box">
                  <input type="text" name="weather" required="">
                  <label>Weather</label>
                </div>
              </div>
              <div class="colum">
                <div class="user-box">
                  <input type="text" name="transportation" required="">
                  <label>Transportation</label>
                </div>
                <div class="user-box">
                  <input type="text" name="language" required="">
                  <label>Language</label>
                </div>
                <div class="user-box">
                  <input type="text" name="safety_info" required="">
                  <label>Safety Information</label>
                </div>
                <div class="user-box">
                  <input type="text" name="rating" required="">
                  <label>Rating</label>
                </div>
                <div class="user-box">
                  <input type="text" name="reviews" required="">
                  <label>Reviews</label>
                </div>
              </div>
          </div>
          <a href="#">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <input type="submit" value="Add This Destination">
          </a>
          <?php if (isset($error_message)): ?>
                <span class="error"><?php echo $error_message; ?></span>
          <?php endif; ?>
        </form>
      </div>
    </div>
  
  </div>
  <!--
    dialog box for Package
  -->
  <div id="myModalp" class="modal">
  <?php
    include("../database3.php");
    ?>
    <?php
    if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      $extensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$extensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"images/".$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }
   }

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = $_POST["name"];
        $description = $_POST["description"];
        $image_url = "$file_name";
        $duration = $_POST["duration"];
        $no_of_people = $_POST["no_of_people"];
        $location = $_POST["location"];
        $rewiews = $_POST["reviews"];
        $rating= $_POST["rating"];
        $price = $_POST["price"];

        $query = "insert into package(name,description,image_url,duration,no_of_people,location,reviews,rating, price) values('$name', '$description','$image_url', '$duration', '$no_of_people', '$location','$reviews','$rating','$price')";
        try {
            mysqli_query($conn, $query);
        } catch(mysqli_sql_exception){
            $error_message = mysqli_error($conn);
        }
    }
    mysqli_close($conn);
    ?>

    <!-- Modal content -->
    <div class="modal-content">
      <span class="close" id="closep">&times;</span>
      <div class="login-box">
        <form action="<?php $_SERVER["PHP_SELF"]?>" method="post" enctype="multipart/form-data">
          <div class="row">
              <div class="colum">
                <div class="user-box">
                  <input type="text" name="name" required="">
                  <label>Title</label>
                </div>
                <div class="user-box">
                  <input type="text" name="description" required="">
                  <label>Description</label>
                </div>
                <div class="user-box">
                  <input type="file" name="image" placeholder="Image" required="">
                </div>
                <div class="user-box">
                  <input type="number" name="duration" required="">
                  <label>Duration in Day</label>
                </div>
                <div class="user-box">
                  <input type="number" name="no_of_people" required="">
                  <label>Number Of People</label>
                </div>
              </div>
              <div class="colum">
                <div class="user-box">
                  <input type="text" name="location" required="">
                  <label>Location</label>
                </div>
                <div class="user-box">
                  <input type="number" name="reviews" required="">
                  <label>Number of Reviews</label>
                </div>
                <div class="user-box">
                  <input type="number" name="rating" required="">
                  <label>Rating</label>
                </div>
                <div class="user-box">
                  <input type="number" name="price" required="">
                  <label>Price</label>
                </div>
              </div>
          </div>
          <a href="#">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <input type="submit" value="Add This Package">
          </a>
          <?php if (isset($error_message)): ?>
                <span class="error"><?php echo $error_message; ?></span>
          <?php endif; ?>
        </form>
      </div>
    </div>
  </div>

  <!-- 
    - #GO TO TOP
  -->

  <a href="#top" class="go-top" data-go-top>
    <ion-icon name="chevron-up-outline"></ion-icon>
  </a>

  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<!--
    for modal
-->
<script>
    // Get the modal
    var modal = document.getElementById("myModal");
    var modalp = document.getElementById("myModalp");

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");
    var btnp = document.getElementById("myBtnp");

    // Get the <span> element that closes the modal
    var span = document.getElementById("closed");
    var spanp = document.getElementById("closep");
    
    // When the user clicks on the button, open the modal
    btn.onclick = function() {
    modal.style.display = "block";
    }
    btnp.onclick = function() {
    modalp.style.display = "block";
    }
    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
    modal.style.display = "none";
    }
    spanp.onclick = function() {
    modalp.style.display= "none";
    }
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
        modalp.style.display = "none";
    }
    }
</script>
</body>

</html>