<?php

if ($_FILES && $_FILES["filename"]["error"]== UPLOAD_ERR_OK && isset($_POST["title"]) && isset($_POST["content"]) && isset($_POST["author"]) && isset($_POST["tags"])) {
      
include "db_config.php";

    $name = "images/" . $_FILES["filename"]["name"];
    move_uploaded_file($_FILES["filename"]["tmp_name"], $name);

    $title = $conn->real_escape_string($_POST["title"]);
    $content = $conn->real_escape_string($_POST["content"]);
    $author = $conn->real_escape_string($_POST["author"]);
    $tags = $conn->real_escape_string($_POST["tags"]);

    $sql = "INSERT INTO blog_tb (title, content, author, tags, image) VALUES ('$title', '$content', '$author', '$tags', '$name')";
    if($conn->query($sql)){

        // SELECT id FROM `blog_tb` ORDER BY id DESC LIMIT 1;
        $sql = "SELECT id FROM `blog_tb` ORDER BY id DESC LIMIT 1";
        if($result = $conn->query($sql)) {
            $gen1 = '<?php 
                     include "../header/header.php";
                     include "../db_config.php";
                     $sql = "SELECT * FROM blog_tb WHERE id = ';

            $gen2 = '"; if($result = $conn->query($sql)){
                     foreach($result as $row){
                     echo \'<div class="alert alert-warning mt-2">\';
                     echo \'<h3>\' . $row[\'title\'] . \'</h3>\';
                     echo \'<p>\' . $row[\'author\'] . \'</p>\';
                     echo \'<p>\' . $row[\'date\'] . \'</p>\';
                     echo \'<img style="float: left;" src = "../\' . $row[\'image\'] . \'" width = "100px" height = "100px"/>\';
                     echo \'<p>\' . $row[\'content\'] . \'</p>\';
                     echo \'<p><a href="index.php">\' . $row[\'tags\'] . \'</a></p>\';
                     echo \'</div>\';
                    } $result->free();
                    } else{
                    echo "Errors: " . $conn->error;
                    }
                    $conn->close();
                    include "../footer/footer.php";
                    ?>';

            foreach($result as $row) {
                $filen = fopen("articles/tort" . $row['id'] . ".php", 'a');
                $str = $gen1 . $row['id'] . $gen2;
                fwrite($filen, $str);
                fclose($filen);
            }
            header("Location: preview.php");
            exit;
        } 

    } else {
                echo "Errors: " . $conn->error;
    }
    $conn->close();
}

?>