<?php
function start_popup()
{
    echo "<div id='start_popup'>Rock, Paper, Scissors!<br />By - Nxtstep101<br /><input type='submit' name='start_game' value='Start game'>";
    if ($_POST['start_game']) {
        startGame();
    }
}

start_popup();
?>
