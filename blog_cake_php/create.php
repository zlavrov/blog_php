<?php

include "header/header.php";

echo '<h1>Run Recipe</h1>
<form action="save.php" method="POST" enctype="multipart/form-data">

    <input required class="form-control" type="text" name="title" placeholder="Enter the title"><br/>

    <input type="file" class="btn-success" name="filename" size="10" /><br/><br/>

    <textarea rows="10" required class="form-control" placeholder="Enter a description" name="content"></textarea><br/>

    <input required class="form-control" type="text" name="author" placeholder="Leave an alias"><br/>

    <input required class="form-control" type="text" name="tags" placeholder="Add tags"><br/>

    <button type="submit" class="btn btn-success">Add</button>

</form>';

include "footer/footer.php";

?>