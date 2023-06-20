<?php
    include("database3.php");
?>
<?php
    session_start();
?>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $error_message = "";
    $username = $_POST["username"];
    $password = $_POST["password"];
    if($username != "" && $password != ""){
        $query = "select * from user where username='$username'";
        $result = mysqli_query($conn, $query);
        if(mysqli_num_rows($result)>0 ){
            $row = mysqli_fetch_assoc($result);
            $id = $row["id"];
            $useri = $row["username"];
            $passi = $row["password"];
            if (password_verify($password,$passi)){
                session_regenerate_id();
                $_SESSION['loggedin'] = TRUE;
                $_SESSION['name'] = $useri;
                $_SESSION['id'] = $id;
                header("Location: book.php");
            } else{
                $error_message = "incorrect username or password";
            }
        } else {
            $error_message = "No username registered!";
        }
    }else {
        $error_message = "empty username or password";
    }
}
mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    
<div class="login-box">
    <h2>Login</h2>
    <form action="<?php $_SERVER["PHP_SELF"]?>" method="post">
      <div class="user-box">
        <input type="text" name="username" required="">
        <label>Username</label>
      </div>
      <div class="user-box">
        <input type="password" name="password" required="">
        <label>Password</label>
      </div>
      <a href="#">
      <span></span>
      <span></span>
        <span></span>
        <span></span>
        <input type="submit" value="Sign In">
      </a>
      <?php if (isset($error_message)): ?>
                <span class="error"><?php echo $error_message; ?></span>
      <?php endif; ?>
    </form>
  </div>
</body>
</html>