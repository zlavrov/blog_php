<?php

include "db_config.php";

include "header/header.php";

if($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["id"]))
{
    $userid = $conn->real_escape_string($_GET["id"]);
    $sql = "SELECT * FROM blog_tb WHERE id = '$userid'";
    if($result = $conn->query($sql)){
        if($result->num_rows > 0){
            foreach($result as $row){
                $title = $row["title"];
                $content = $row["content"];
                $author = $row["author"];
                $tags = $row["tags"];
                echo '<h1>Run Recipe</h1>
                <form action="make_update.php" method="POST">
                    <input type=' . '"hidden" ' . 'name=' . '"id" ' . 'value="' . $userid . '" />
                    <input required class="form-control" type="text" name="title" value="' . $title . '" placeholder="Enter the title"><br/>
                    <textarea rows="10" required class="form-control" placeholder="Enter a description" name="content" value="">' . $content . '</textarea><br/>
                    <input required class="form-control" type="text" name="author" value="' . $author . '" placeholder="Leave an alias"><br/>
                    <input required class="form-control" type="text" name="tags" value="' . $tags . '" placeholder="Add tags"><br/>
                    <button type="submit" value="Save" class="btn btn-success">Add</button>
                </form>';
            }

        }
        else{
            echo "<div>Recipe not found</div>";
        }
        $result->free();
    } else{
        echo "Error: " . $conn->error;
    }
}

$conn->close();

include "footer/footer.php";

?>