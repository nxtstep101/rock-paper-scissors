/***Rock, Paper, Scissors - by Nxtstep101***/
//Rock = 1
//Paper = 2 
//Scissors = 3
var score = 0;

function rock() {
    var cpu = Math.floor((Math.random() * 3) + 1);
    if (cpu === 1) {
        $('#cpu').text("Rock");
        $('#you').text("Rock");
        $('#result').text("It's a tie!");
    } else if (cpu === 2) {
        $('#cpu').text("Paper");
        $('#you').text("Rock");
        $('#result').text("You lose!");
        score -= 1;
    } else {
        $('#cpu').text("Scissors");
        $('#you').text("Rock");
        $('#result').text("You win!");
        score += 1;
    }
    $("#score").text(score);
}

function paper() {
    var cpu = Math.floor((Math.random() * 3) + 1);
    if (cpu === 1) {
        $('#cpu').text("Rock");
        $('#you').text("Paper");
        $('#result').text("You win!");
        score += 1;
    } else if (cpu === 2) {
        $('#cpu').text("Paper");
        $('#you').text("Paper");
        $('#result').text("It's a tie!");
    } else {
        $('#cpu').text("Scissors");
        $('#you').text("Paper");
        $('#result').text("You lose!");
        score -= 1;
    }
    $("#score").text(score);
}

function scissors() {
    var cpu = Math.floor((Math.random() * 3) + 1);
    if (cpu === 1) {
        $('#cpu').text("Rock");
        $('#you').text("Scissors");
        $('#result').text("You lose!");
        score -= 1;
    } else if (cpu === 2) {
        $('#cpu').text("Paper");
        $('#you').text("Scissors");
        $('#result').text("You win!");
        score += 1;
    } else {
        $('#cpu').text("Scissors");
        $('#you').text("Scissors");
        $('#result').text("It's a tie!");
    }
    $("#score").text(score);
}
