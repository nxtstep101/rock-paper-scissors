<?php
/***Rock, Paper, Scissors - by Nxtstep101***/
//Rock = 1
//Paper = 2 
//Scissors = 3
include "start.php";
function startGame()
{
    session_start();
    $random            = rand(1, 3);
    $cpu               = $random;
    $win               = "Result: You win!";
    $loss              = "Result: You lose!";
    $tie               = "Result: It's a tie!";
    $_SESSION['score'] = ((isset($_SESSION['score'])) ? $_SESSION['score'] : 0);
    
    if (isset($_REQUEST['rock'])) {
        if ($cpu === 1) {
            echo "CPU: Rock<br/>" . $tie;
        } elseif ($cpu === 2) {
            echo "CPU: Paper<br/>" . $loss;
            $_SESSION['score']--;
        } else {
            echo "CPU: Scissors<br/>" . $win;
            $_SESSION['score']++;
        }
    } elseif (isset($_REQUEST['paper'])) {
        if ($cpu === 1) {
            echo "CPU: Rock<br/>" . $win;
        } elseif ($cpu === 2) {
            echo "CPU: Paper<br/>" . $tie;
            $_SESSION['score']++;
        } else {
            echo "CPU: Scissors<br/>" . $loss;
            $_SESSION['score']--;
        }
    } elseif (isset($_REQUEST['scissors'])) {
        if ($cpu === 1) {
            echo "CPU: Rock<br/>" . $loss;
            $_SESSION['score']--;
        } elseif ($cpu === 2) {
            echo "CPU: Paper<br/>" . $win;
            $_SESSION['score']++;
        } else {
            echo "CPU: Scissors<br/>" . $tie;
        }
    } else {
        session_unset();
    }
    echo "<br />Score: " . $_SESSION['score'];
}
?>
<!DOCTYPE html>
<html>
  <body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      <input type="submit" name="rock" value="rock">
      <input type="submit" name="paper" value="paper">
      <input type="submit" name="scissors" value="scissors">
      <input type="submit" name="restart" value="restart">
    </form>
  </body>
</html>
