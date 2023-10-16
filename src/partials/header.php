<?php include 'config/database.php'; ?>
<style>
  <?php include 'css/style.css'; ?>
</style>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Austin Curran</title>
</head>

<body>
  <div class="menu">
    <ul class="menu-items">
      <li><a href="/index.php">Home</a></li>
      <li><a href="/feedback.php">Feedback</a></li>
      <li><a href="/about.php">About</a></li>
    </ul>
  </div>

  <section class="showcase">
    <header>
      <h2 class="logo">Austin Curran</h2>
      <div class="toggle"></div>
    </header>

    <video muted loop autoplay>
      <source src="img/creek.mp4" type="video/mp4">
      Sorry, your browser doesn't support the video element.
    </video>

    <div class="overlay"></div>