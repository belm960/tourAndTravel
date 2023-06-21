<?php
// We need to use sessions
session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php include "head.php"; ?>
</head>

<body id="top">
  <!-- Header -->
  <?php include "header.php"; ?>

  <!-- main -->
  <main>
    <article>

      <!-- 
        - #Introduction
      -->
      <section class="hero" id="home" style="background-image: url('./assets/images/ethi/landscape.jpg');">
        <div class="container">
          <h2 class="h1 hero-title">Journey to explore Ethiopia</h2>
          <p class="hero-text">        
            Ethiopia entices with ancient rock-hewn churches, 
            vibrant tribes, stunning landscapes like Simien Mountains, 
            and flavorsome cuisine. Dive into history at the National Museum. 
            Experience warmth and hospitality in captivating Ethiopia.
          </p>
          <div class="btn-group">
            <button class="btn btn-primary" onclick="window.location.href='signup.php'">Create Account Now</button>
          </div>
        </div>
      </section>
      <!-- 
        - #GALLERY
      -->
      <section class="gallery" id="gallery">
        <div class="container">
          <p class="section-subtitle">Photo Gallery</p>
          <h2 class="h2 section-title">Photo's of our beloved people and culture</h2>
          <p class="section-text">
            Behold the stunning visuals of Ethiopian places captured in these photos. 
            Immerse yourself in the beauty of ancient rock-hewn churches, 
            vibrant tribes, breathtaking landscapes, and rich cultural heritage.
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

      <!-- 
        - #CONTACT
      -->
      <section class="cta">
        <div class="container">
          <div class="cta-content">
            <p class="section-subtitle">Call To Action</p>
            <h2 class="h2 section-title">Ready For Unforgatable Travel. Remember Us!</h2>
            <p class="section-text">
              Welcome to our premier tour and travel agency in Ethiopia. 
              We pride ourselves on curating unforgettable experiences, 
              showcasing the country's rich cultural heritage, ancient landmarks, 
              diverse landscapes, and warm hospitality. 
              Trust us to create your dream journey through Ethiopia's wonders.
            </p>
          </div>
          <button class="btn btn-secondary" onclick="window.location.href='#contact'">Contact Us !</button>
        </div>
      </section>
    </article>
  </main>


  <!-- Foter -->
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