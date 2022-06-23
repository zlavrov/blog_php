<?php

include "db_config.php";

include "header/header.php";

if (isset($_POST["id"]) && isset($_POST["title"]) && isset($_POST["content"]) && isset($_POST["author"]) && isset($_POST["tags"])) {
      
    $userid = $conn->real_escape_string($_POST["id"]);
    $title = $conn->real_escape_string($_POST["title"]);
    $content = $conn->real_escape_string($_POST["content"]);
    $author = $conn->real_escape_string($_POST["author"]);
    $tags = $conn->real_escape_string($_POST["tags"]);

    $sql = "UPDATE blog_tb SET title = '$title', content = '$content', author = '$author', tags = '$tags' WHERE id = '$userid'";
    if($result = $conn->query($sql)){
        header("Location: preview.php");
        exit;
    } else{
        echo "Error: " . $conn->error;
    }
}
else{
    echo "Incorrect data";
}
$conn->close();


include "footer/footer.php";

?>
