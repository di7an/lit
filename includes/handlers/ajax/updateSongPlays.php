<?php 
include("../../config.php");

if(isset($_POST['songId'])) {
    $songId = $_POST['songId'];

    $playsQuery = mysqli_query($dbConnection, "UPDATE songs SET plays = plays + 1 WHERE id='$songId'");
}

?>