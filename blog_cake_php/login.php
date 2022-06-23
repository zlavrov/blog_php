<?php
session_start();
include "header/header_log.php";

echo '<form class="form-signin" method="POST">
    <h2>Login</h2>';

echo '
    <input type="text" name="username" class="form-control" placeholder="Username" required><br/>
    <input type="password" name="password" class="form-control" placeholder="Password" required><br/>
    <button class="btn btn-lg btn-primary btn-block type="submit">Login</button>
    <a href="index.php" class="btn btn-lg btn-primary btn-block">Register</a>
</form>

';

require "connect.php";

if(isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($coonection, $query) or die(mysqli_error($coonection));
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        $_SESSION['username'] = $username;
    } else {
        $fanswer = "Error: ";
    }

}

if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];

    header('Location: preview.php');
    exit;

}




include "footer/footer.php";
?>