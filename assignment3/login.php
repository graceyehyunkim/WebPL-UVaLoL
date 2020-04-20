<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>UVaLoL</title>
  <link rel="stylesheet" href="navbar.css">
</head>

<body>
  <div class="navbar">
      <a href="home.php" class="nav-item nav-link" routerLink='/home'>Home</a>
      <a href="list.php" class="nav-item nav-link" routerLink='/list'>Signup List</a>
      <a href="draft.html" class="nav-item nav-link" routerLink='/draft'>Draft</a>

      <div class="login-container">
          <form name="loginForm" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
              <input type="text" placeholder="Username" name="username" id="loginID" autofocus required>
              <input type="text" placeholder="Password" name="pwd" id="loginPassword" required>
              <button type="submit" id="loginbutton" value="Sign in">Login</button>
          </form>
      </div>
  </div>

  <?php    
    function reject($entry) {
      echo '<script>alert("Login failed due to incorrect input! Please try again.")</script>';
    }
  ?>
  <?php 
    if (($_SERVER['REQUEST_METHOD']=="POST") && (strlen($_POST['username']) > 0)) {
      $user = trim($_POST['username']);
      //checks to see if it's made of alphanumeric characters
      if (!ctype_alnum($user)) { 
          //error
          reject('username');
      }
      //checks to see if password is set (not null)
      else if (isset($_POST['pwd'])) {
          $pwd = trim($_POST['pwd']);
          if (!ctype_alnum($pwd)) {
              //error
              reject('password');
          }
          else {
              $_SESSION['user'] = $user;
              $hash_pwd = password_hash($pwd, PASSWORD_BCRYPT);
              $_SESSION['pwd'] = $hash_pwd;
              header('Location: home.php');
          }
      }
  }

  
  ?>

</body>
</html>
