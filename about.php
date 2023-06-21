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
          <h2 class="h1 hero-title">Explore About Us!</h2>
          <p class="hero-text">
          Welcome to Ethio Tour and Travel Agency, your trusted 
          companion for unforgettable adventures in Ethiopia. With our expertise, 
          personalized service, and passion for exploration, we curate remarkable 
          journeys that showcase the country's beauty, culture, and warm hospitality. 
          Let's embark on an extraordinary Ethiopian experience together.
          </p>
        </div>
      </section>
      <!-- 
        - #about Us
      -->
      <section class="gallery" id="gallery">
        <div class="container">
          <p class="section-subtitle">Who We Are ?</p>

          <h2 class="h2 section-title">Ethio Tour</h2>

          <p class="section-text">
          At Ethio Tour and Travel Agency, we offer a range of exceptional services to ensure your Ethiopian adventure surpasses all expectations. From meticulously planned itineraries and personalized tours to experienced guides and seamless logistics, we take care of every detail. Our services encompass cultural tours, wildlife safaris, historical explorations, adventure treks, and more. Whether you seek to witness the rock-hewn churches of Lalibela, encounter unique tribes in the Omo Valley, or explore the stunning landscapes of the Simien Mountains, our team is dedicated to creating unforgettable experiences. Trust us to introduce you to the wonders of Ethiopia with our expertise, passion, and commitment to excellence.
          some of the places we will give services are described by the image.
          </p>

          <ul class="gallery-list">
            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="./assets/images/ethi/cloth1.jpg" alt="Gallery image">
              </figure>
            </li>
            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="./assets/images/ethi/debub.jpg" alt="Gallery image">
              </figure>
            </li>
            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="./assets/images/ethi/abat.jpg" alt="Gallery image">
              </figure>
            </li>
            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="./assets/images/ethi/oro.jpg" alt="Gallery image">
              </figure>
            </li>
            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="./assets/images/ethi/tmket.jpg" alt="Gallery image">
              </figure>
            </li>
          </ul>

        </div>
      </section>

    </article>
  </main>
  <!-- 
    - #FOOTER
  -->
<?php include "footer.php"; ?>

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