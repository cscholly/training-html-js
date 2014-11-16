// declare variables
var exvat = 0;
var inclvat = 0;
var vatamount = 0;
var totalamount = 0;
var vatpercentage = 1.14;

//get value from user and calc VAT
function calcVAT() { 
var exvat = document.getElementById('input').value; 
totalamount = Math.round((exvat * vatpercentage)*100)/100;
document.getElementById('result').value = totalamount; 
}