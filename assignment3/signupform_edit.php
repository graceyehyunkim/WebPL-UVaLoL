<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="navbar.css">
  
  <title>PHP and database</title>    
</head>

<?php
        include('connectdb.php');
        include('players-db.php');
        session_start();
?>

<body style="background-color: rgb(49, 49, 49); font-family: Roboto; color: rgb(228, 194, 133);">
    <h1>Editted correctly! Redirecting back home in 10.</h1><br>

    <h2>Your information:</h2>

    Name: <?php echo $_POST["name"]; ?> <br>
    Email address: <?php echo $_POST["email"]; ?><br>
    Id: <?php echo $_SESSION["id"]; ?><br>
    Year: <?php echo $_POST["year"]; ?><br>
    Season Rank: <?php echo $_POST["seasonrank"]; ?><br>
    Highest Rank: <?php echo $_POST["highestrank"]; ?><br>
    Role: <?php echo $_POST["role"]; ?><br>
    Preferred Captain: <?php echo $_POST["captain"]; ?><br>
    Fun Fact: <?php echo $_POST["funfact"]; ?><br>
    <br>

    <?php
        if (isset($_SESSION['id'])) {
            if (isset($_POST['isCaptain']) && $_POST['isCaptain']=='isCaptain') { //isChecked
                updateTaskInfo(TRUE, $_POST['name'], $_SESSION['id'], $_POST['year'], $_POST['seasonrank'], $_POST['highestrank'], $_POST['role'], $_POST['captain'], $_POST['funfact']);
            } else {
                updateTaskInfo(FALSE, $_POST['name'], $_SESSION['id'], $_POST['year'], $_POST['seasonrank'], $_POST['highestrank'], $_POST['role'], $_POST['captain'], $_POST['funfact']);
            }
        }
        header('refresh:10; url=home.php');
    ?>

  </div>
</body>
</html>
