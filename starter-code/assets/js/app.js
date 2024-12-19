let person = prompt("Type your name here,");
let time = prompt("Give the duration in minutes you want to convert");
document.write("hello" + person);
document.write("<br>");
if (time > 60) { 
    document.write("output:" + time > 60+ "hours" + time%60 + "minutes");
} else if (time < 60) {
    document.write("output:" + time + "minutes")
}
else { 
    document.write("output:" + time + "minutes");
}

