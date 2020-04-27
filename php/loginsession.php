<?php

header('Access-Control-Allow-Origin: http://localhost:4200');
header('Access-Control-Allow-Headers: X-Requested-With, Content-Type, Origin, Authorization, Accept, Client-Security-Token, Accept-Encoding');
header('Access-Control-Max-Age: 1000');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS, DELETE, PUT');

require('connectdb.php');
require('players-db.php');

session_start();
$sqlplayers = getAllTasks(); 

$players = [];

foreach ($sqlplayers as $sqlplayer) {
    $player = [];
    if ($sqlplayer['isCaptain'] == 0){ 
        $player['isCaptain'] = "No"; 
    } else{
        $player['isCaptain'] = "Yes"; 
    }  

    $player['Name'] = $sqlplayer['Name'];
    $player['PlayerID'] = $sqlplayer['PlayerID'];
    $player['Year'] = $sqlplayer['Year'];
    $player['SeasonRank'] = $sqlplayer['SeasonRank'];
    $player['HighestRank'] = $sqlplayer['HighestRank'];
    $player['Role'] = $sqlplayer['Role'];

    if ($sqlplayer['Captain'] == NULL){ 
        $player['Captain'] = "None"; 
    } else{
        $player['Captain'] = $sqlplayer['Captain'];
    } 

    $player['Funfact'] = $sqlplayer['Funfact'];
    $player['Password'] = $sqlplayer['Password'];

    array_push($players, $player);
}
    echo json_encode(['data'=>$players]);

?>