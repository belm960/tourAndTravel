<section class="popular" id="books">
        <div class="container">

          <p class="section-subtitle">Here it is!</p>
          <h2 class="h2 section-title">My Book Lists</h2>
          <p class="section-text">
          With Ethio Tour and Travel Agency, your dream destinations are just a book away. Explore our diverse selection of itineraries and secure your spot on our exclusive list of extraordinary journeys. Start your unforgettable adventure today.
          </p>

          <div class="container">
            <?php
                include('./database3.php');
                $id= $_SESSION['id'];
                $query = "select * from tour_book where uid = '$id'";
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