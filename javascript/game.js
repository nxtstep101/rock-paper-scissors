/***Rock, Paper, Scissors - by Nxtstep101***/
//Rock = 1
//Paper = 2 
//Scissors = 3
var score = 0;

function rock() {
    var cpu = Math.floor((Math.random() * 3) + 1);
    if (cpu === 1) {
        $('#result').text("CPU: Rock\nIts a tie!");
    } else if (cpu === 2) {
        $('#result').text("CPU: Paper\nYou lose!");
        score -= 1;
    } else {
        $('#result').text("CPU: Scissors\nYou win!");
        score += 1;
    }
    $("#score").text(score);
}

function paper() {
    var cpu = Math.floor((Math.random() * 3) + 1);
    if (cpu === 1) {
        $('#result').text("CPU: Scissors\nYou lose!");
        score -= 1;
    } else if (cpu === 2) {
        $('#result').text("CPU: Paper\nIts a tie!");
    } else {
        $('#result').text("CPU: Rock\nYou win!");
        score += 1;
    }
    $("#score").text(score);
}

function scissors() {
    var cpu = Math.floor((Math.random() * 3) + 1);
    if (cpu === 1) {
        $('#result').text("CPU: Rock\nYou lose!");
        score -= 1;
    } else if (cpu === 2) {
        $('#result').text("CPU: Paper\nYou win!");
        score += 1;
    } else {
        $('#result').text("CPU: Scissors\nIts a tie!");
    }
    $("#score").text(score);
}
