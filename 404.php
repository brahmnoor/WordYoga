<?php
session_start();
header("HTTP/1.0 404 Not Found");
?>
<!DOCTYPE html>
<html lang="en-US">
  <head>
    <title>Word Yoga - The 4 Letter game everyone's talking about!</title>
    <meta name="description" content="Love games? Want to challenge your brain? Know English? That's all you really need to play this addictive game, where you bend your brain, and exclaim in delight!">
    <?php include 'header-files.php'; ?>
  </head>

  <body class="container">
    <?php include 'topbar.php'; ?>

    <section class="main-content">
      <div class="hero row text-center">
      <h2>404 - Page not Found</h2>
      <p>Wow! You confused us. This page doesn't exist.</p>
      <button><a href="/">Click here to play</a></button>
      </div>

    </section>

    <?php include 'footer.php'; ?>

  </body>
</html>
