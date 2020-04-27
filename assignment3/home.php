<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>UVaLoL</title>
  <link rel="stylesheet" href="navbar.css">
</head>
    <?php session_start();?>

    <?php if (isset($_SESSION['user'])){
        include("signedin.php");
    } else {
        include("login.php");
    }
    ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="30">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <title>UVaLoL</title>
    <style>
        * {
            box-sizing: border-box;
        }
        
        body {
            font-family: Roboto;
            color: rgb(228, 194, 133);
        }
        
        h2 {
            text-align: center;
            color: rgb(32, 32, 32);
            background-color: rgb(199, 157, 80);
        }
        
        nav {
            background-image: url("navbar.jpg");
            padding: 15px;
        }
        
        div[class=container] {
            border-style: groove;
            border-color: rgb(228, 194, 133);
            margin: 1%;
            margin-bottom: 2%;
            padding-left: 2%;
            padding-right: 2%;
            padding-bottom: 2%;
        }
        
        #col1 {
            float: left;
            width: 50%;
            height: 100%;
            padding: 7px;
        }
        
        #col2 {
            float: right;
            width: 50%;
            height: 100%;
        }
        
        #discord {
            color: rgb(133, 228, 212);
        }
        
        #discord:hover {
            color: red;
        }
        
        #rulebook {
            color: rgb(133, 228, 212);
        }
        
        .signupbtn {
            /*sign up button position*/
            float: right;
            background-color: rgb(199, 157, 80);
        }
        
        @media only screen and (max-width: 768px) {
            /*Changes when screen is too small*/
            #col1,
            #col2 {
                width: 100%;
                height: 45%;
            }
        }
        
        .login-container {
            float: right;
        }
    </style>
</head>

<body style="background-color: rgb(49, 49, 49);">
    <header style="background-image: url('navbar.jpg');">
        <!--Navbar-->

        <head>
            <title>UVaLoL</title>
            <link rel="stylesheet" href="navbar.css">
        </head>

        <h1 style="text-align: center; margin-top: 1.5%; margin-bottom: 1.5%; color: rgb(199, 157, 80);">UvaLoL LCS</h1>
        <hr noshade>
    </header>

    <div id="col1">
        <!--About-->
        <div class="container">
            <h2>About UVa LCS</h2>
            <p>The University of Virginia's very own League of Legends players. <br> Join our <span id="discord"><u>Discord</u></span> and our chatroom "UvaLoL" on the LoL client!</p> Current officers:
            <ul>
                <li>Old President that still helps out a bit: Kane Lee</li>
                <li>Presidents: Kelly Cen and Taylor Nelson</li>
                <li>Community Manager: David Xue and Andrew Wang</li>
                <li>uLol Analyst: Ryan Kann</li>
                <li>Casters: Gabe Argush, Taylor Smith, Chris Martin</li>
            </ul>
        </div>
    </div>

    <div id="col2">
        <!--Upcoming tournaments + Sign Up button-->
        <div class="container">
            <h2>Upcoming Tournament</h2>
            <p>2020 Spring Split</p>
            <p>2/1 - 5/1</p>
            <?php if (isset($_SESSION['user'])){ ?>
                <button onclick="window.location.href = 'signupform.php';" class="signupbtn">Sign Up</button>
            <?php } else { ?>
                <button style="color: black; background-color: gray;" class="signupbtn">You must Log in first!</button>
             <?php } ?>
           <div style="clear: both;"></div>
        </div>

        <!--Rules-->
        <div id="clear"></div>
        <div class="container">
            <h2>Rules</h2>
            <a href="" id="rulebook">Link to the 2019-2020 rulebook</a>
        </div>
    </div>
</body>

<script src="custom.js"></script>

<footer>
    <small>All Rights Reserved.</small>
</footer>
</html>