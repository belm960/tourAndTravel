<?php
// We need to use sessions
session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "head.php"; ?>
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

          <h2 class="h1 hero-title">what we offer !</h2>

          <p class="hero-text">
          Our carefully crafted packages at Ethio Tour and Travel Agency offer unparalleled experiences in Ethiopia. From cultural immersions and historical explorations to thrilling adventures and wildlife encounters, our diverse range of packages caters to every traveler's interests. Discover Ethiopia's wonders with our thoughtfully curated and customizable packages.
          </p>
        </div>
      </section>
      <!-- 
        - #PACKAGE
      -->
      <section class="package" id="package">
        <div class="container">
          <p class="section-subtitle">Popular Packeges</p>
          <h2 class="h2 section-title">Checkout Our Packeges</h2>
          <p class="section-text">
          Explore Ethiopia's wonders with our meticulously designed packages. Whether you desire a cultural odyssey, wildlife safari, or an adrenaline-fueled adventure, we offer a variety of options to suit your preferences. Let our expertly crafted packages create lasting memories of your Ethiopian journey.
          </p>
          <ul class="package-list">
              <?php
            include('database3.php');
            $query = "select * from package";
            $result = mysqli_query($conn, $query);
            ?>
            <?php
            if (mysqli_num_rows($result) > 0) {
              $sn=1;
              while($data = mysqli_fetch_assoc($result)) {
            ?>
            <li>
              <div class="package-card">
                <figure class="card-banner">
                  <img src="./assets/images/packege-1.jpg" alt="Experience The Great Holiday On Beach" loading="lazy">
                </figure>
                <div class="card-content">
                  <h3 class="h3 card-title"><?php echo $data['name'] ?></h3>
                  <p class="card-text">
                  <?php echo $data['description'] ?>
                  </p>
                  <ul class="card-meta-list">
                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="time"></ion-icon>
                        <p class="text"><?php echo $data['duration'] ?> Days</p>
                      </div>
                    </li>
                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="people"></ion-icon>
                        <p class="text">pax: <?php echo $data['no_of_people'] ?></p>
                      </div>
                    </li>
                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="location"></ion-icon>
                        <p class="text"><?php echo $data['location'] ?></p>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="card-price">
                  <div class="wrapper">
                    <p class="reviews">(<?php echo $data['reviews'] ?> reviews)</p>
                    <div class="card-rating">
                    <?php for($i=0;$i<$data['rating'];$i++) {?>
                      <ion-icon name="star"></ion-icon>
                      <?php } ?>
                    </div>
                  </div>
                  <p class="price">
                  <?php echo $data['price'] ?> Birr
                    <span>/ per person</span>
                  </p>
                  <button class="btn btn-secondary" onclick="window.location.href='book.php'">Book Now</button>
                </div>
              </div>
            </li>
            <?php
            $sn++;}} else { ?>
            <li>
            No data found
            </li>
            <?php } ?>
          </ul>
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