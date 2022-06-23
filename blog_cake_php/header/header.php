<?php

echo '<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <title>Главная</title>
</head>
<body>
    <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
        <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
          <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" class="me-2" viewBox="0 0 118 94" role="img"><title>Bootstrap</title><path fill-rule="evenodd" clip-rule="evenodd" d="M 10,30 A 20,20 0,0,1 50,30 A 20,20 0,0,1 90,30 Q 90,60 50,90 Q 10,60 10,30 z" fill="currentColor"></path></svg>
          <span class="fs-4">Blog</span>
        </a>
  
        <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
        <a href="logout.php" class="btn">Logout</a>
          <h6><a class="me-3 py-2 text-dark text-decoration-none" href="/preview.php">Main</a></h6>
          <h6><a class="me-3 py-2 text-dark text-decoration-none" href="/aboutus.php">AboutUs</a></h6>
          <select name="forma" onchange="location = this.value;" class="form-select" aria-label="Default select example">
            <option selected>
              Open this select menu
            </option>
            <option value="/create.php"">
              Create article
            </option>
            <option value="/delate.php">
              Delate article
            </option>
            <option value="/update.php">
              Update article
            </option>
          </select>
        </nav>
      </div>
      <div class="container">';

?>