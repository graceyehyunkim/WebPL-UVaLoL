<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>UVaLoL</title>
  <link rel="stylesheet" href="navbar.css">
</head>
    <?php session_start();?>
    <?php require('connectdb.php');
    require('players-db.php');
    $players = getAllTasks(); ?>

    <?php if (isset($_SESSION['user'])){
        include("signedin.php");
    } else {
        include("login.php");
    }
    ?>

<head>
    <link rel="stylesheet" href="list.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <title>UVaLoL</title>
</head>


<body style="background-color: rgb(49, 49, 49);">
    <header style="background-image: url('navbar.jpg');">
        <!--Navbar-->

        <h1 style="text-align: center; margin-top: 1.5%; margin-bottom: 1.5%; color: rgb(199, 157, 80);">UvaLoL LCS</h1>
        <hr noshade>
    </header>
    <p class="title" style="margin-top: 20px; background-color: rgb(199, 157, 80);">2020 Spring</p>
    <div style="overflow: auto;">
        <table id="signup-list">
            <!--Table headers-->
            <tr class="list-header">
                <th>
                    <div class="info">Captain
                        <span class="infotext">If the player signed up as a captain (Y/N)</span>
                    </div>
                </th>
                <th>
                    <div class="info">Name
                        <span class="infotext">Name of the player, i.e. Austin Drischler</span>
                    </div>
                </th>
                <th>
                    <div class="info">In-game ID
                        <span class="infotext">In-game ID of the player, i.e. Boetox</span>
                    </div>
                </th>
                <th>
                    <div class="info">School year
                        <span class="infotext">School year, i.e. 1st, 2nd </span>
                    </div>
                </th>
                <th>
                    <div class="info">Last Season's Rank
                        <span class="infotext">Most recently placed rank of the player, at the time of signup</span>
                    </div>
                </th>
                <th>
                    <div class="info">Highest Rank
                        <span class="infotext">Highest placed rank of the player</span>
                    </div>
                </th>
                <th>
                    <div class="info">Preferred Roles
                        <span class="infotext">Roles that the players are willing to play, i.e. top, mid</span>
                    </div>
                </th>
                <th>
                    <div class="info">Preferred Captain
                        <span class="infotext">Captain that the player would like to play with</span>
                    </div>
                </th>
                <th>
                    <div class="info">Fun Fact
                        <span class="infotext">Anything that the player wants to say</span>
                    </div>
                </th>
            </tr>

            <?php foreach ($players as $player): ?>
            <tr class="list-element">
                <td> <?php if ($player['isCaptain'] == 0): echo "No"; else: echo "Yes"; endif; ?> </td>
                <td> <?php echo $player['Name'];?> </td>
                <td> <?php echo $player['PlayerID'];?> </td>
                <td> <?php echo $player['Year'];?> </td>
                <td> <?php echo $player['SeasonRank'];?> </td>
                <td> <?php echo $player['HighestRank'];?> </td>
                <td> <?php echo $player['Role'];?> </td>
                <td> <?php if ($player['Captain'] == NULL): echo "None"; else: echo $player['Captain']; endif; ?> </td>
                <td> <?php echo $player['Funfact'];?> </td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>

<footer>
    <small>All Rights Reserved.</small>
</footer>
</html>