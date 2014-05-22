<?php
/***Rock, Paper, Scissors - by Nxtstep101***/
//Rock = 1
//Paper = 2 
//Scissors = 3
$random = rand(1, 3);
$cpu    = $random;
$score  = 0;

if (isset($_REQUEST['rock'])) {
    if ($cpu === 1) {
        echo "CPU: Rock<br/>Result: It's a tie!";
    } elseif ($cpu === 2) {
        echo "CPU: Paper<br/>Result: You lose!";
        $score--;
    } else {
        echo "CPU:Scissors<br/>Result: You win!";
        $score++;
    }
} elseif (isset($_REQUEST['paper'])) {
    if ($cpu === 1) {
        echo "CPU: Rock<br/>Result: You win!";
    } elseif ($cpu === 2) {
        echo "CPU: Paper<br/>Result: It's a tie!";
        $score++;
    } else {
        echo "CPU: Paper<br/>Result: You lose!";
        $score--;
    }
} else {
    if ($cpu === 1) {
        echo "CPU: Rock<br/>Result: You lose!";
        $score--;
    } elseif ($cpu === 2) {
        echo "CPU: Paper<br/>Result: You win!";
        $score++;
    } else {
        echo "CPU: Scissors<br/>Result: It's a tie!";
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
