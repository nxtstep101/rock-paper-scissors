/***Rock, Paper, Scissors - by Nxtstep101***/
//Rock = 1 
//Paper = 2 
//Scissors = 3
var score = 0;
var cpu = Math.floor((Math.random() * 3) + 1);
function rock() {
    if (cpu === 1) {
        alert("CPU: Rock\nIts a tie!");
    } else if (cpu === 2) {
        alert("CPU: Paper\nYou lose!");
        score -= 1;
    } else {
        alert("CPU: Scissors\nYou win!");
        score += 1;
    }
}
 
function paper() {
    if (cpu === 1) {
        alert("CPU: Scissors\nYou lose!");
        score -= 1;
    } else if (cpu === 2) {
        alert("CPU: Paper\nIts a tie!");
    } else {
        alert("CPU: Rock\nYou win!");
        score += 1;
    }
}
 
function scissors() {
    if (cpu === 1) {
        alert("CPU: Rock\nYou lose!");
        score -= 1;
    } else if (cpu === 2) {
        alert("CPU: Paper\nYou win!");
        score += 1;
    } else {
        alert("CPU: Scissors\nIts a tie!");
    }
}
