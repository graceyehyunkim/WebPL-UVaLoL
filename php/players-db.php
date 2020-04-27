<?php

    function addTask($isCaptain, $Name, $PlayerID, $Year, $SeasonRank, $HighestRank, $Role, $Captain, $Funfact)
    {
        global $db;

        $query = "INSERT INTO players (isCaptain, Name, PlayerID, Year, SeasonRank, HighestRank, Role, Captain, Funfact) VALUES (:isCaptain, :Name, :PlayerID, :Year, :SeasonRank, :HighestRank, :Role, :Captain, :Funfact)";

        $statement = $db->prepare($query);
        $statement->bindValue(':isCaptain', $isCaptain);
        $statement->bindValue(':Name', $Name);
        $statement->bindValue(':PlayerID', $PlayerID);
        $statement->bindValue(':Year', $Year);
        $statement->bindValue(':SeasonRank', $SeasonRank);
        $statement->bindValue(':HighestRank', $HighestRank);
        $statement->bindValue(':Role', $Role);
        $statement->bindValue(':Captain', $Captain);
        $statement->bindValue(':Funfact', $Funfact);
        $statement->execute();
        $statement->closeCursor();
    }

    function updateTaskInfo($isCaptain, $Name, $PlayerID, $Year, $SeasonRank, $HighestRank, $Role, $Captain, $Funfact)
    {
        global $db; 

        $query = "UPDATE players SET isCaptain=:isCaptain, Name=:Name, Year=:Year, SeasonRank=:SeasonRank, HighestRank=:HighestRank, Role=:Role, Captain=:Captain, Funfact=:Funfact WHERE PlayerID=:PlayerID";
        $statement = $db->prepare($query);
        $statement->bindValue(':isCaptain', $isCaptain);
        $statement->bindValue(':Name', $Name);
        $statement->bindValue(':Year', $Year);
        $statement->bindValue(':SeasonRank', $SeasonRank);
        $statement->bindValue(':HighestRank', $HighestRank);
        $statement->bindValue(':Role', $Role);
        $statement->bindValue(':Captain', $Captain);
        $statement->bindValue(':Funfact', $Funfact);
        $statement->bindValue(':PlayerID', $PlayerID);
        $statement->execute(); 
        $statement->closeCursor();

    }

    function getAllTasks()
    {
        global $db;
        $query = "SELECT * FROM players";
        $statement = $db->prepare($query);
        $statement->execute();
        $results = $statement->fetchAll();
        $statement->closeCursor();
        return $results; 
    }

?>
