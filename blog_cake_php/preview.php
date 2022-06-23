<?php

include "header/header.php";

echo '<h1>Cake preview</h1>';

include "db_config.php";




$sql = "SELECT * FROM blog_tb ORDER BY id DESC ";
if($result = $conn->query($sql)){

    foreach($result as $row){
        echo '<div class="alert alert-warning mt-2">';
        echo '<h3>' . $row['title'] . '</h3>';
        echo '<p>' . $row['author'] . '</p>';
        echo '<p>' . $row['date'] . '</p>';
        echo '<img style="float: left;" src = "' . $row['image'] . '" width = "100px" height = "100px"/>';
        $rest = substr($row['content'], 0, 900);
        echo '<p>' . $rest . '<b>...<a href="articles/tort' . $row['id'] . '.php">Read more</a></b></p>';
        echo '<p><a href="index.php">' . $row['tags'] . '</a></p>';
        echo '</div>';
    }

    

    $result->free();
} else{
    echo "Errors: " . $conn->error;
}
$conn->close();

include "footer/footer.php";
?>