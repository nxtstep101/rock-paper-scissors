<?php
/***Rock, Paper, Scissors - by Nxtstep101***/
//Rock = 1
//Paper = 2 
//Scissors = 3
$random = rand(1, 3);
$cpu    = $random;
$score  = 0;
$win    = "Result: You win!";
$loss   = "Result: You lose!";
$tie    = "Result: It's a tie!";

if (isset($_REQUEST['rock'])) {
    if ($cpu === 1) {
        echo "CPU: Rock<br/>" . $tie;
    } elseif ($cpu === 2) {
        echo "CPU: Paper<br/>" . $loss;
        --$score;
    } else {
        echo "CPU: Scissors<br/>" . $win;
        ++$score;
    }
} elseif (isset($_REQUEST['paper'])) {
    if ($cpu === 1) {
        echo "CPU: Rock<br/>" . $win;
    } elseif ($cpu === 2) {
        echo "CPU: Paper<br/>" . $tie;
        ++$score;
    } else {
        echo "CPU: Scissors<br/>" . $loss;
        --$score;
    }
} else {
    if ($cpu === 1) {
        echo "CPU: Rock<br/>" . $loss;
        --$score;
    } elseif ($cpu === 2) {
        echo "CPU: Paper<br/>" . $win;
        ++$score;
    } else {
        echo "CPU: Scissors<br/>" . $tie;
    }
}
?>
<!DOCTYPE html>
<html>
  <body>
    <form action="game.php" method="post">
      <input type="submit" name="rock" value="rock">
      <input type="submit" name="paper" value="paper">
      <input type="submit" name="scissors" value="scissors">
    </form>
  </body>
</html>
