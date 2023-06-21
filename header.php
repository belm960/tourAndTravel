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
                <img src="./assets/images/logo.svg" alt="Ethio Tour logo">
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
                    <a href="https://www.facebook.com/profile.php?id=100093491438424" class="social-link" target="_blank">
                        <ion-icon name="logo-facebook"></ion-icon>
                    </a>
                </li>
                <li>
                    <a href="#" class="social-link">
                        <ion-icon name="logo-twitter"></ion-icon>
                    </a>
                </li>
                <li>
                    <a href="https://www.youtube.com/channel/UCI-oz_KCYHrCRm8CpJjPmDA" class="social-link" target="_blank">
                        <ion-icon name="logo-youtube"></ion-icon>
                    </a>
                </li>
            </ul>
            <nav class="navbar" data-navbar>
                <div class="navbar-top">
                <a href="#" class="logo">
                    <img src="./assets/images/logo-blue.svg" alt="Tourly logo">
                </a>
                <button class="nav-close-btn" aria-label="Close Menu" data-nav-close-btn>
                    <ion-icon name="close-outline"></ion-icon>
                </button>
                </div>
                <ul class="navbar-list">
                <li>
                    <a href="index.php" class="navbar-link active" data-nav-link>home</a>
                </li>
                <li>
                    <a href="about.php" class="navbar-link" data-nav-link>about us</a>
                </li>
                <li>
                    <a href="destination.php" class="navbar-link" data-nav-link>destination</a>
                </li>
                <li>
                    <a href="package.php" class="navbar-link" data-nav-link>packages</a>
                </li>
                <li>
                    <a href="book.php" class="navbar-link" data-nav-link>book</a>
                </li>
                <li>
                    <a href="#contact" class="navbar-link" data-nav-link>contact us</a>
                </li>
                </ul>
            </nav>
            <?php if (isset($_SESSION['loggedin'])) { ?>
                <button class="btn btn-primary"><?php $username = $_SESSION['name']; echo $username;?></button>
                <button class="btn btn-primary" id="logout" onclick="window.location.href='logout.php'">LogOut</button>
            <?php } else { ?>
            <button class="btn btn-primary" id="signin">Sign In</button>
            <?php } ?>
        </div>
    </div>
</header>

    <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>