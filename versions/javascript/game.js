/***Rock, Paper, Scissors - by Nxtstep101***/
//Rock = 1 
//Paper = 2 
//Scissors = 3
var wins = 0;
var losses = 0;
var ties = 0;

function rock() {
    setTimeout(function() {
        var cpu = Math.floor((Math.random() * 3) + 1);
        if (cpu === 1) {
            $('#cpu').text("Rock");
            $('#you').text("Rock");
            $('#result').text("It's a tie!");
            ties += 1;
        } else if (cpu === 2) {
            $('#cpu').text("Paper");
            $('#you').text("Rock");
            $('#result').text("You lose!");
            losses += 1;
        } else {
            $('#cpu').text("Scissors");
            $('#you').text("Rock");
            $('#result').text("You win!");
            wins += 1;
        }
        var score = wins - losses;
        $("#wins").text(wins);
        $("#losses").text(losses);
        $("#ties").text(ties);
        $("#score").text(score);
    }, 250);
}

function paper() {
    setTimeout(function() {
        var cpu = Math.floor((Math.random() * 3) + 1);
        if (cpu === 1) {
            $('#cpu').text("Rock");
            $('#you').text("Paper");
            $('#result').text("You win!");
            wins += 1;
        } else if (cpu === 2) {
            $('#cpu').text("Paper");
            $('#you').text("Paper");
            $('#result').text("It's a tie!");
            ties += 1;
        } else {
            $('#cpu').text("Scissors");
            $('#you').text("Paper");
            $('#result').text("You lose!");
            losses += 1;
        }
        var score = wins - losses;
        $("#wins").text(wins);
        $("#losses").text(losses);
        $("#ties").text(ties);
        $("#score").text(score);
    }, 250);
}

function scissors() {
    setTimeout(function() {
        var cpu = Math.floor((Math.random() * 3) + 1);
        if (cpu === 1) {
            $('#cpu').text("Rock");
            $('#you').text("Scissors");
            $('#result').text("You lose!");
            losses += 1;
        } else if (cpu === 2) {
            $('#cpu').text("Paper");
            $('#you').text("Scissors");
            $('#result').text("You win!");
            wins += 1;
        } else {
            $('#cpu').text("Scissors");
            $('#you').text("Scissors");
            $('#result').text("It's a tie!");
            ties += 1;
        }
        var score = wins - losses;
        $("#wins").text(wins);
        $("#losses").text(losses);
        $("#ties").text(ties);
        $("#score").text(score);
    }, 250);
}
