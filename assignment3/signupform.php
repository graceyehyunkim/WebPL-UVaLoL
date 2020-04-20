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
        
        h1 {
            text-align: center;
            color: rgb(199, 157, 80);
        }
        
        .container {
            padding: 16px;
        }
        
        input[type=text] {
            width: 50%;
        }
        
        input[name=funfact] {
            padding: 15px;
        }
        
        #submitbtn {
            background-color: rgb(199, 157, 80);
            padding: 7px;
        }
        
        .submitbtn:hover {
            opacity: 10;
        }
        
        nav {
            background-image: url("navbar.jpg");
            padding: 15px;
        }
        
        @media only screen and (max-width: 768px) {
            /*Changes when screen is too small*/
            #col1,
            #col2 {
                width: 100%;
                height: 45%;
            }
        }
    </style>
</head>

<script>
    /* Sets focus on "name" field on form */
    function setFocus() {
        document.getElementById("namefield").focus();
    }
</script>


<body onload="setFocus()" style="background-color: rgb(49, 49, 49);">
    <header style="background-image: url('navbar.jpg');">
        <!--Navbar-->

        <head>
            <title>UVaLoL</title>
            <link rel="stylesheet" href="navbar.css">
        </head>

        <h1 style="text-align: center; margin-top: 1.5%; margin-bottom: 1.5; color: rgb(199, 157, 80);">UvaLoL LCS</h1>
        <hr noshade>
    </header>
    
    <section id="form">


        <?php if(!isset($_SESSION['id'])) { ?>

        <form id="signup" action="signupform_submit.php" method="post">
            <!--Form container-->
            <div class="container">
                <h1>2020 Spring Split Signup form</h1>
                <hr>

                <input type="checkbox" id="iscaptain" name="iscaptain" value="iscaptain">
                <label for="iscaptain">Are you signing up to be a Captain?</label>

                <br>
                <label for="name">Name</label><br>
                <input id="namefield" type="text" id="name" name="name" required><br>

                <label for="id">In-game ID</label><br>
                <input type="text" id="ID" name="id" required><br>

                <label for="year">School year</label><br>
                <input type="text" id="year" name="year" required><br>

                <label for="email">Uva email</label><br>
                <input type="text" id="email" name="email" required><br>

                <label for="seasonrank">Your last season's rank</label><br>
                <select id="seasonrank" name="seasonrank">
                    <option value="challenger">Challenger</option>
                    <option value="grandmaster">Grandmaster</option>
                    <option value="master">Master</option>
                    <option value="diamond1">Diamond I</option>
                    <option value="diamond2">Diamond II</option>
                    <option value="diamond3">Diamond III</option>
                    <option value="diamond4">Diamond IV</option>
                    <option value="plat1">Platinum I</option>
                    <option value="plat2">Platinum II</option>
                    <option value="plat3">Platinum III</option>
                    <option value="plat4">Platinum IV</option>
                    <option value="gold1">Gold I</option>
                    <option value="gold2">Gold II</option>
                    <option value="gold3">Gold III</option>
                    <option value="gold4">Gold IV</option>
                    <option value="silver1">Silver I</option>
                    <option value="silver2">Silver II</option>
                    <option value="silver3">Silver III</option>
                    <option value="silver4">Silver IV</option>
                    <option value="bronze1">Bronze I</option>
                    <option value="bronze2">Bronze II</option>
                    <option value="bronze3">Bronze III</option>
                    <option value="bronze4">Bronze IV</option>
                    <option value="iron1">Iron I</option>
                    <option value="iron2">Iron II</option>
                    <option value="iron3">Iron III</option>
                    <option value="iron4">Iron IV</option>
                    <option value="unranked">Unranked</option>
                </select><br>

                <label for="highestrank">Your highest rank</label><br>
                <select id="highestrank" name="highestrank">
                    <option value="challenger">Challenger</option>
                    <option value="grandmaster">Grandmaster</option>
                    <option value="master">Master</option>
                    <option value="diamond1">Diamond I</option>
                    <option value="diamond2">Diamond II</option>
                    <option value="diamond3">Diamond III</option>
                    <option value="diamond4">Diamond IV</option>
                    <option value="plat1">Platinum I</option>
                    <option value="plat2">Platinum II</option>
                    <option value="plat3">Platinum III</option>
                    <option value="plat4">Platinum IV</option>
                    <option value="gold1">Gold I</option>
                    <option value="gold2">Gold II</option>
                    <option value="gold3">Gold III</option>
                    <option value="gold4">Gold IV</option>
                    <option value="silver1">Silver I</option>
                    <option value="silver2">Silver II</option>
                    <option value="silver3">Silver III</option>
                    <option value="silver4">Silver IV</option>
                    <option value="bronze1">Bronze I</option>
                    <option value="bronze2">Bronze II</option>
                    <option value="bronze3">Bronze III</option>
                    <option value="bronze4">Bronze IV</option>
                    <option value="iron1">Iron I</option>
                    <option value="iron2">Iron II</option>
                    <option value="iron3">Iron III</option>
                    <option value="iron4">Iron IV</option>
                    <option value="unranked">Unranked</option>
                </select><br>

                <label for="role">Preferred role(s)</label><br>
                <select id="role" name="role">
                    <option value="top">Top</option>
                    <option value="jungle">Jungle</option>
                    <option value="mid">Mid</option>
                    <option value="bot">Bot</option>
                    <option value="support">Support</option>
                </select><br>

                <label for="captain">Preferred captain</label><br>
                <input type="text" name="captain"><br>

                <label for="funfact">Fun fact about yourself</label><br>
                <input type="text" name="funfact"><br>

                <button type="submit" id="submitbtn" onclick="confirm('Press OK only if you have reviewed the application.')">Submit</button>
            </div>
        </form>

        <?php
        } else { ?>

            <form id="signup" action="signupform_edit.php" method="post">
            <!--Form container-->
            <div class="container">
                <h1>2020 Spring Split Signup form</h1>
                <hr>

                <h2>You have already signed up! Submit if you need to update your information.</h2>

                <input type="checkbox" id="iscaptain" name="iscaptain" value="iscaptain">
                <label for="iscaptain">Are you signing up to be a Captain?</label>

                <br>
                <label for="name">Name</label><br>
                <input id="namefield" type="text" id="name" name="name" required><br>

                <label for="year">School year</label><br>
                <input type="text" id="year" name="year" required><br>

                <label for="email">Uva email</label><br>
                <input type="text" id="email" name="email" required><br>

                <label for="seasonrank">Your last season's rank</label><br>
                <select id="seasonrank" name="seasonrank">
                    <option value="challenger">Challenger</option>
                    <option value="grandmaster">Grandmaster</option>
                    <option value="master">Master</option>
                    <option value="diamond1">Diamond I</option>
                    <option value="diamond2">Diamond II</option>
                    <option value="diamond3">Diamond III</option>
                    <option value="diamond4">Diamond IV</option>
                    <option value="plat1">Platinum I</option>
                    <option value="plat2">Platinum II</option>
                    <option value="plat3">Platinum III</option>
                    <option value="plat4">Platinum IV</option>
                    <option value="gold1">Gold I</option>
                    <option value="gold2">Gold II</option>
                    <option value="gold3">Gold III</option>
                    <option value="gold4">Gold IV</option>
                    <option value="silver1">Silver I</option>
                    <option value="silver2">Silver II</option>
                    <option value="silver3">Silver III</option>
                    <option value="silver4">Silver IV</option>
                    <option value="bronze1">Bronze I</option>
                    <option value="bronze2">Bronze II</option>
                    <option value="bronze3">Bronze III</option>
                    <option value="bronze4">Bronze IV</option>
                    <option value="iron1">Iron I</option>
                    <option value="iron2">Iron II</option>
                    <option value="iron3">Iron III</option>
                    <option value="iron4">Iron IV</option>
                    <option value="unranked">Unranked</option>
                </select><br>

                <label for="highestrank">Your highest rank</label><br>
                <select id="highestrank" name="highestrank">
                    <option value="challenger">Challenger</option>
                    <option value="grandmaster">Grandmaster</option>
                    <option value="master">Master</option>
                    <option value="diamond1">Diamond I</option>
                    <option value="diamond2">Diamond II</option>
                    <option value="diamond3">Diamond III</option>
                    <option value="diamond4">Diamond IV</option>
                    <option value="plat1">Platinum I</option>
                    <option value="plat2">Platinum II</option>
                    <option value="plat3">Platinum III</option>
                    <option value="plat4">Platinum IV</option>
                    <option value="gold1">Gold I</option>
                    <option value="gold2">Gold II</option>
                    <option value="gold3">Gold III</option>
                    <option value="gold4">Gold IV</option>
                    <option value="silver1">Silver I</option>
                    <option value="silver2">Silver II</option>
                    <option value="silver3">Silver III</option>
                    <option value="silver4">Silver IV</option>
                    <option value="bronze1">Bronze I</option>
                    <option value="bronze2">Bronze II</option>
                    <option value="bronze3">Bronze III</option>
                    <option value="bronze4">Bronze IV</option>
                    <option value="iron1">Iron I</option>
                    <option value="iron2">Iron II</option>
                    <option value="iron3">Iron III</option>
                    <option value="iron4">Iron IV</option>
                    <option value="unranked">Unranked</option>
                </select><br>

                <label for="role">Preferred role(s)</label><br>
                <select id="role" name="role">
                    <option value="top">Top</option>
                    <option value="jungle">Jungle</option>
                    <option value="mid">Mid</option>
                    <option value="bot">Bot</option>
                    <option value="support">Support</option>
                </select><br>

                <label for="captain">Preferred captain</label><br>
                <input type="text" name="captain"><br>

                <label for="funfact">Fun fact about yourself</label><br>
                <input type="text" name="funfact"><br>

                <button type="submit" id="submitbtn" onclick="confirm('Press OK only if you have reviewed the application.')">Submit</button>
            </div>
        </form>

        <?php } ?>

    </section>
</body>

<footer>
    <small>All Rights Reserved.</small>
</footer>
</html>