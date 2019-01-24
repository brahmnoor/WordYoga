<?php
session_start();
// include 'DB.php';


     $name = $_SESSION["userName"];
     $yourscore = 10 - $_SESSION['attempts'];


/*
    $sql = "INSERT INTO Scores(name,score)VALUES('$name','$yourscore')";
     $conn->query($sql);
*/
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

    <section class="main-content row">
      <img class="col-xs-12" src="img/win.png">
      <p>Congrats <?php echo $name ?>! You guessed Mr. Robot's word. Your score is <?php echo $yourscore ?></p>
      <p>The word was <span class='word'><?php echo $_SESSION['newWord'] ?></span>.</p>
      <span class="ruler"></span>
      <strong>Here are the High Scores<br>
      <span class="col-xs-6">Name</span><span class="col-xs-6">Score</span></strong>
      <span class='col-xs-6'><?php $name ?></span><span class='col-xs-6'><?php $yourscore ?></span>
      <?php
      /*
        $sql = "SELECT * FROM Scores ORDER BY score DESC";
              $result = $conn->query($sql);
              if($result->num_rows >0) {
               while($row = $result->fetch_assoc()) {
                if ( !is_null($row["name"]) && $row["score"] != 0 && !is_null($row["score"]))
                  echo "<span class='col-xs-6'>".$row["name"]."</span><span class='col-xs-6'>".$row["score"]."</span>";
               }
              }
      */
        ?>
      <span class="ruler"></span>
    </section>

    <?php include 'footer.php'; ?>

  </body>

</html>
