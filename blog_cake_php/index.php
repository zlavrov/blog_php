<?php

include "header/header_log.php";

require "connect.php";

if(isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "INSERT INTO users (username, password, email, active) VALUES ('$username', '$password', '$email', 0)";
    $result = mysqli_query($coonection, $query);

    if($result) {
        $ganswer = "Registration successful";
    } else {
        $fanswer = "Registration failed";
    }
}








echo '<form class="form-signin" method="POST">
    <h2>Registration</h2>';

if(isset($ganswer)) {
    echo '<div class="alert-success" role="alert">' . $ganswer . '</div><br/>';
}
if(isset($fanswer)) {
    echo '<div class="alert-danger" role="alert">' . $fanswer . '</div><br/>';
}




echo '
    <input type="text" name="username" class="form-control" placeholder="Username" required><br/>
    <input type="email" name="email" class="form-control" placeholder="Email" required><br/>
    <input type="password" name="password" class="form-control" placeholder="Password" required><br/>
    <button class="btn btn-lg btn-primary btn-block type="submit">Register</button>
    <a href="login.php" class="btn btn-lg btn-primary btn-block">Login</a>
</form>

';








include "footer/footer.php";
?>