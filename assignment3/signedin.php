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
        <form action="logout.php" method="get">
            <button type="submit" id="logoutbutton" value="Log out">Logout</button>
        </form>  
    </div>
    <p style="float:right; color: rgb(199, 157, 80); padding-right: 15px; text-align: center;font-family: Helvetica;font-size: 20px;text-decoration: none;">Hello, <?php echo $_SESSION['user']; ?>!</p>
  </div>
</body>
</html>
