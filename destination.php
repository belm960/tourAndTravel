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

          <h2 class="h1 hero-title">We have many destinations</h2>

          <p class="hero-text">
            Ac mi duis mollis. Sapiente? Scelerisque quae, penatibus? Suscipit class corporis nostra rem quos
            voluptatibus habitant?
            Fames, vivamus minim nemo enim, gravida lobortis quasi, eum.
          </p>

        </div>
      </section>

      <!-- 
        - #POPULAR
      -->

      <section class="popular" id="destination">
          <div class="container">

          <p class="section-subtitle">Uncover place</p>

          <h2 class="h2 section-title">Popular destination</h2>

          <p class="section-text">
            Fusce hic augue velit wisi quibusdam pariatur, iusto primis, nec nemo, rutrum. Vestibulum cumque laudantium.
            Sit ornare
            mollitia tenetur, aptent.
          </p>

          <form action="" class="tour-search-form" style="color:black; margin-bottom: 50px;">
            <div class="input-wrapper" style="width:400px">
              <label for="destination" class="input-label" style="color:black">Search Destination*</label>

              <input type="text" name="destination" id="destination" style="border-style: double; border-color:black" required placeholder="Enter Destination"
                class="input-field">
            </div>
          </form>

          <ul class="popular-list">
          <?php
          include('database3.php');
          $query = "select * from destination";
          $result = mysqli_query($conn, $query);
          ?>
          <?php
          if (mysqli_num_rows($result) > 0) {
            $sn=1;
            while($data = mysqli_fetch_assoc($result)) {
          ?>
          <li>
            <div class="popular-card">

              <figure class="card-img">
                <img src="./assets/images/popular-1.jpg" alt="San miguel, italy" loading="lazy">
              </figure>

              <div class="card-content">

                <div class="card-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </div>

                <p class="card-subtitle">
                  <a href="#"><?php echo $data['location']; ?></a>
                </p>

                <h3 class="h3 card-title">
                  <a href="#"><?php echo $data['name']; ?></a>
                </h3>

                <p class="card-text">
                  <?php echo $data['description']; ?>
                </p>

              </div>

            </div>
          </li>
        <?php
          $sn++;}} else { ?>
            <tr>
            <td colspan="8">No data found</td>
            </tr>

        <?php } ?>
          </ul>
          <button class="btn btn-primary">More destintion</button>

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