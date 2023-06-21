<?php
// We need to use sessions
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: login.php');
	exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php include "head.php"; ?>
  <link rel="stylesheet" href="./admin/modal.css">
  <link rel="stylesheet" href="book.css">
</head>

<body id="top">
  <!-- 
    - #HEADER
  -->
  <?php include "header.php"; ?>
  <main>
    <article>
      <!-- 
        - #HERO
      -->
      <section class="hero" id="home">
        <div class="container">

          <h2 class="h1 hero-title">Book Here</h2>

          <p class="hero-text">
          Experience the ease of online booking with Ethio Tour and Travel Agency. Our user-friendly platform allows you to effortlessly select and secure your desired Ethiopian adventure. Start your journey with simplicity and convenience.
          </p>

        </div>
      </section>
    <!-- My Book Lists -->
    <?php include "mybooks.php" ?>

    <!-- Tour Booking -->
    <?php
        include("database3.php");
    ?>
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $address = $_POST["address"];
        $location = $_POST["location"];
        $guest = $_POST["guest"];
        $arrivals = $_POST["arrivals"];
        $leaving = $_POST["leaving"];
        $uid = $_SESSION['id'];

        $query = "insert into tour_book(name, email, phone, address, location, guest, arrivals, leaving,uid) values('$name', '$email', '$phone','$address','$location','$guest', '$arrivals', '$leaving','$uid')";
        try {
            mysqli_query($conn, $query);
        } catch(mysqli_sql_exception){
            $error_message = mysqli_error($conn);
        }
    }
    mysqli_close($conn);
    ?>

    <!-- 
      Tour Booking
    -->

    <section class="popular" id="formbook">
      <div class="container">

        <p class="section-subtitle">Discover Your Wish!</p>

        <h2 class="h2 section-title">Book Here</h2>

        <p class="section-text">
        With Ethio Tour and Travel Agency's online booking, planning your Ethiopian adventure is a breeze. Our intuitive platform lets you customize your trip, ensuring a seamless and stress-free experience from start to finish. Book now and embark on an unforgettable journey.
        </p>

        <div class="login-box">
          <form action="<?php $_SERVER["PHP_SELF"]?>" method="post">
            <div class="row">
                <div class="colum">
                  <div class="user-box">
                    <input type="text" name="name" required="">
                    <label>Full Name</label>
                  </div>
                  <div class="user-box">
                    <input type="email" name="email" required="">
                    <label>Email</label>
                  </div>
                  <div class="user-box">
                    <input type="tel" name="phone" required="">
                    <label>Phone Number</label>
                  </div>
                  <div class="user-box">
                    <input type="text" name="address" required="">
                    <label>Address</label>
                  </div>
                </div>
                <div class="colum">
                  <div class="user-box">
                    <input type="text" name="location" required="">
                    <label>Location</label>
                  </div>
                  <div class="user-box">
                    <input type="text" name="guest" required="">
                    <label>Guests</label>
                  </div>
                  <div class="user-box">
                    <input type="date" name="arrivals" required="">
                    <label>Arrival Date</label>
                  </div>
                  <div class="user-box">
                    <input type="date" name="leaving" required="">
                    <label>Leaving Date</label>
                  </div>
                </div>
            </div>
            <a href="#">
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              <input type="submit" value="Book">
            </a>
            <?php if (isset($error_message)): ?>
                <span class="error"><?php echo $error_message; ?></span>
            <?php endif; ?>
            </form>
        </div>

      </div>
    </section>

    </article>
  </main>
  <!-- 
    - #FOOTER
  -->
  <?php
  include "footer.php";
?>

  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>