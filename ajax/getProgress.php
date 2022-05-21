<?php
require_once("../includes/config.php");
if(isset($_POST["videoId"]) && isset($_POST["username"])){
    $query = $con->prepare("SELECT progress FROM videoprogress
                            dateModified=NOW() WHERE username=:username AND videoId=:videoId");
    $query->bindValue(":username", $_POST["username"]);
    $query->bindValue(":videoId", $_POST["videoId"]);
    $query->execute();

    if($query->rowCount() == 0){
        $query = $con->prepare("INSERT INTO videoprogress (username, videoId)
                                VALUES(:username, :videoId)");
        $query->bindValue(":username", $_POST["username"]);
        $query->bindValue(":videoId", $_POST["videoId"]);

        $query->execute();
        echo $query->fetchColumn();
    }
}else{
    echo "No videoId or username passed into file";
}
?>