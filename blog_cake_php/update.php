<?php

include "header/header.php";

echo '<h1>Update Recipe</h1>';

include "db_config.php";




$sql = "SELECT * FROM blog_tb ORDER BY id DESC ";
if($result = $conn->query($sql)){



    echo "<table><tr><th>Title</th><th>Author</th><th></th></tr>";
    foreach($result as $row){
        echo "<tr>";
            echo "<td>" . $row["title"] . "</td>";
            echo "<td>" . $row["author"] . "</td>";
            echo "<td><a href='/update_form.php?id=" . $row["id"] . "'>Change</a></td>";
        echo "</tr>";
    }
    echo "</table>";
    $result->free();
} else{
    echo "Ошибка: " . $conn->error;
}
$conn->close();








include "footer/footer.php";

?>