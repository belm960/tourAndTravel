<?php
    include("database3.php");
?>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);
    $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_SPECIAL_CHARS);
    $hash = password_hash($password, PASSWORD_DEFAULT);
    if ($username != "" && $password != ""){
        $sql_query = "insert into user(username, password, name, email) values('$username','$hash','$name','$email')";
        try {
            mysqli_query($conn, $sql_query);
            header("Location: login.php");
        } catch(mysqli_sql_exception){
            echo "Problem has occurred";
        }
    } else{
        $error_message = "Please enter username or password";
    }
}
mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    
<div class="login-box">
    <h2>Create an Account</h2>
    <form action="<?php $_SERVER["PHP_SELF"]?>" method="post">
      <div class="user-box">
        <input type="text" name="username" required="">
        <label>Username</label>
      </div>
      <div class="user-box">
        <input type="password" name="password" required="">
        <label>Password</label>
      </div>
      <div class="user-box">
        <input type="text" name="name" required="">
        <label>Full Name</label>
      </div>
      <div class="user-box">
        <input type="email" name="email" required="">
        <label>Email</label>
      </div>
      <a href="#">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <input type="submit" value="Sign Up">
      </a>
      <?php if (isset($error_message)): ?>
                <span class="error"><?php echo $error_message; ?></span>
            <?php endif; ?>
    </form>
  </div>
</body>
</html>