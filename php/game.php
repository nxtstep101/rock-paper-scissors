<?php
/***Rock, Paper, Scissors - by Nxtstep101***/
//Rock = 1
//Paper = 2 
//Scissors = 3
$random = rand(1, 3);
$cpu    = $random;
$score  = 0;

if (isset($_REQUEST['rock'])) {
    rock();
} elseif (isset($_REQUEST['paper'])) {
    paper();
} else {
    scissors();
}

function rock()
{
    if ($cpu === 1) {
        echo "It's a tie!";
    } elseif ($cpu === 2) {
        echo "You lose!";
        $score--;
    } else {
        echo "You win!";
        $score++;
    }
}

function paper()
{
    if ($cpu === 1) {
        echo "You win!";
        $score++;
    } elseif ($cpu === 2) {
        echo "It's a tie!";
    } else {
        echo "You lose!";
        $score--;
    }
}

function scissors()
{
    if ($cpu === 1) {
        echo "You lose!";
        $score--;
    } elseif ($cpu === 2) {
        echo "You win!";
        $score++;
    } else {
        echo "It's a tie!";
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
