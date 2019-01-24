<?php
session_start();
include 'DB.php';


     $name = $_SESSION["userName"];
     $yourscore = 0;



     $sql = "INSERT INTO Scores(name,score)VALUES('$name','$yourscore')";
     $conn->query($sql);

     $_SESSION['gameEnd'] = true;

?>
<!DOCTYPE html>
<html lang="en-US">

  <head>
    <title>You are playing Word Yoga - The 4 Letter game everyone's talking about!</title>
    <meta name="description" content="Love games? Want to challenge your brain? Know English? That's all you really need to play this addictive game, where you bend your brain, and exclaim in delight!">
    <?php include 'header-files.php'; ?>
  </head>

  <body class="container">
    <?php include 'topbar.php'; ?>

    <section class="main-content">

      <p>Ah! You Lost. Your word was <span class="word"><?php echo $_SESSION['newWord'];?></span>.</p>

      <span class="ruler"></span>

      <div class="play-button row text-center">
        <form method="POST" action="redirect.html">
          <input type="text" name="userName" class="name-field" placeholder="Enter your name..." style="padding-right: 2rem;">
          <button type="submit">
            Play Again <i class="fa fa-long-arrow-right play-button"></i>
          </button>
        </form>
      </div>

      <span class="ruler"></span>

      <div class="row">
        <strong>Here are the High Scores<br>
        <span class="col-xs-6">Name</span><span class="col-xs-6">Score</span></strong>
        <?php
        $sql = "SELECT * FROM Scores ORDER BY score DESC";
              $result = $conn->query($sql);
              if($result->num_rows >0) {
               while($row = $result->fetch_assoc()) {
                if ( !is_null($row["name"]) && $row["score"] != 0 && !is_null($row["score"]))
                  echo "<span class='col-xs-6'>".$row["name"]."</span><span class='col-xs-6'>".$row["score"]."</span>";
               }
              }
        ?>
      </div>

    </section>

    <?php include 'footer.php'; ?>

  </body>
</html>
