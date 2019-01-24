<?php
session_start();

//game function
function gameOver($flag) {
$name = $_SESSION["userName"];                                                                   //sending name and final score to win.php
   if ($flag === 1) {
          $finalscore = 10 - $_SESSION['attempts'];                                                        //session variables are used only within that particular php page
          header("Location:http://www.wordyo.ga/win.php");
     die();
   }
   else if ( $_SESSION['attempts'] === 10) {
   	$word = $_SESSION['newWord'];
     header("Location:http://www.wordyo.ga/lose.php");
     die();
   }
}

function checker($userInput, $newWord) {
	$flag = 0;
	if($userInput === $newWord) {
		gameOver(1);
  }
  $a1 = str_split($newWord);
  $a2 = str_split($userInput);
  $rightLetter = 0;
  $rightPos = 0;
  for($i = 0; $i < count($a2); $i++) {
    	for($j = 0; $j < count($a1); $j++) {
    		if($a2[$i] === $a1[$j]) {
                if($i===$j) {
                	$rightPos++;
                }
                else {
                	$rightLetter++;
                }
    		}
    	}
    }
    $_SESSION['scores'][$_SESSION['attempts']]= $rightPos." letter(s) at right position, "." ".$rightLetter." letter(s) at wrong position.";
    $_SESSION['attempts'] = $_SESSION['attempts'] + 1;
    gameOver($flag);
}

if(isset($_POST["sendLetter"]) && $_SESSION['gameEnd'] != true) {
  if(isset($_POST["guess-1"])) {
    $newWord = $_SESSION['newWord'];
    $userInput = strtolower($_POST["guess-1"].$_POST["guess-2"].$_POST["guess-3"].$_POST["guess-4"]);
    if( in_array($userInput, $_SESSION['wordCheckList']) ) {
      $_SESSION['userWords'][$_SESSION['attempts']] = $userInput;
      checker($userInput,$newWord);
    }
    else {
    	echo "wrong input";
    }
  }
}

else {
  $var = file_get_contents('wordlist-check.txt');
	$_SESSION['wordCheckList'] = explode(',', $var);
  $var = file_get_contents('wordlist.txt');
  $result = explode(',', $var);
	$_SESSION['newWord'] = $result[array_rand($result)];
	$_SESSION['attempts'] = 0;
	$_SESSION['gameEnd'] = false;
	$_SESSION['userWords'] = array();
	$_SESSION['scores'] = array();
}

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
			<div class="row text-center" style="border-bottom: 2px solid #FFF;">
  			<form method ="POST" action="">
  				<input type="text" class="letter" name="guess-1" maxlength="1" id="1">
          <input type="text" class="letter" name="guess-2" maxlength="1" id="2">
          <input type="text" class="letter" name="guess-3" maxlength="1" id="3">
          <input type="text" class="letter" name="guess-4" maxlength="1" id="4">
          <input type="hidden" value = "true" name="sendLetter">
  				<button type="submit" style="margin-left: 1.5rem;">Try this word</button>
  			</form>
			</div>
      <div class="row text-center" style="border-bottom: 2px solid #FFF;">
			     <?php echo "<p>You have ".(10 - $_SESSION['attempts'])." attempts left.</p>"; ?>
			        <?php
				          for($i = 0; $i <= $_SESSION['attempts']; $i++)
					             echo "<p><span class='word'>".$_SESSION['userWords'][$i]."</span> ".$_SESSION['scores'][$i]."</p>";
			       ?>
      </div>
		</section>

		<?php include 'footer.php'; ?>

    <script type="text/javascript">
    var once = 0;
    function checker() {
      if (document.getElementById('1').value.length == 1 && once == 0) {
        document.getElementById('2').focus();
        once++;
      }
      if (document.getElementById('2').value.length == 1 && once == 1) {
        document.getElementById('3').focus();
        once++;
      }
      if (document.getElementById('3').value.length == 1 && once == 2) {
        document.getElementById('4').focus();
        once++;
      }
    }
    setInterval(checker, 500);
    </script>

	</body>
</html>
