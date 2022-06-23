<?php

include "header/header.php";

include "db_config.php";




if(isset($_POST["id"]))
{
    $userid = $conn->real_escape_string($_POST["id"]);
    $sql = "DELETE FROM blog_tb WHERE id = '$userid'";
    if($conn->query($sql)){
        header("Location: preview.php");
        exit;
    }
    else{
        echo "Error: " . $conn->error;
    }
    $conn->close();  
}











include "footer/footer.php";

?>