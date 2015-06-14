// declare variables
var exvat = 0;
var inclvat = 0;
var vatamount = 0;
var totalamount = 0;
var vatpercentage = 1.14;

//get value from user and calc VAT
function calcVAT() { 
var exvat = document.getElementById('input').value; 
exvat = parseFloat(exvat).toFixed(2);
vatamount = parseFloat(((exvat * 14)/100)).toFixed(2);
totalamount = parseFloat(Math.round((exvat * vatpercentage)*100)/100).toFixed(2);
document.getElementById('exclude_vat').innerHTML = exvat;
document.getElementById('vat').innerHTML = vatamount;
document.getElementById('include_vat').innerHTML = totalamount;
}