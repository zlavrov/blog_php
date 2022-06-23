<?php

$conn = new mysqli('localhost', 'root', 'root', 'blog_db');
if($conn->connect_error){
    die("Errors: " . $conn->connect_error);
}

?>