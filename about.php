<?php
session_start();
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
      <div class="hero row">
      <h2>About the Game</h2>
      <p>
        Here's a game of wits! Word Yoga is the game everyone's been talking about. Roll up your sleeves and brush up your English, before enganging in this epic game of guessing those evasive 4 words. With 10 chances - getting it right is a sure shot way to get yourself pumping!
      </p>
      <p>
        <strong>Motive: </strong> To guess the 4 letter word assigned to you by Mr. Robot. All the letters will be unique in the word.
      </p>
      <p>
          <strong>How to guess? </strong> Mr. Robot is generous, he gives you 10 chances to enter any 4 letter word. Then after you input the word, he gives you a hint.
      </p>
          <strong>Example: </strong> Say the word Mr. Robot assigned is OVEN. Now you, being the clever person you are, input BEST, Mr. Robot will tell you "0 letter at wrong position, 1 letter at right position." As clearly, the letter E is in the Mr. Robot's word (OVEN), but at wrong position.<br>
          As you are the best, you now enter the word, OATH. Mr. Robot, will give you the hint "0 letter at wrong position, 1 letter at right position".<br>
          You get a brainwave, and enter, OVEN. Mr. Robot concedes defeat, and you win! Go scream and shout!
      </p>
      
      </div>

      <div class="row text-center"><button><a href="/">Click here to play</a></button></div>
    </section>

    <?php include 'footer.php'; ?>

  </body>
</html>
