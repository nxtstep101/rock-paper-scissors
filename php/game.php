<?php
/***Rock, Paper, Scissors - by Nxtstep101***/
//Rock = 1
//Paper = 2 
//Scissors = 3
$random = rand(1, 3);
$cpu    = $random;
$score = 0;
if (isset($_POST['rock'])) {
//rock
} elseif (isset($_POST['paper'])) {
//paper
} else {
//scissors
}
?>
<form action="game.php" method="post">
<input type="submit" name="rock" value="rock">
<input type="submit" name="paper" value="paper">
<input type="submit" name="scissors" value="scissors">
</form>
