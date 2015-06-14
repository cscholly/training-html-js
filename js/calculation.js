//get value from user and add VAT
function addVAT() { 
    //set variables
var exvat = 0;
var inclvat = 0;
var vatamount = 0;
var totalamount = 0;
var vatpercentage = 1.14;
    //calculations
var exvat = document.getElementById('input').value; 
exvat = parseFloat(exvat).toFixed(2);
vatamount = parseFloat(((exvat * 14)/100)).toFixed(2);
totalamount = parseFloat(Math.round((exvat * vatpercentage)*100)/100).toFixed(2);
document.getElementById('exclude_vat').innerHTML = exvat;
document.getElementById('vat').innerHTML = vatamount;
document.getElementById('include_vat').innerHTML = totalamount;
}

//get value from user and exclude VAT
function exclVAT() {
    //set variables
var exvat = 0;
var inclvat = 0;
var vatamount = 0;
var totalamount = 0;
var vatpercentage = 1.14;
    //calculations
var inclvat = document.getElementById('input').value; 
inclvat = parseFloat(inclvat).toFixed(2);
vatamount = parseFloat(Math.abs((inclvat/1.14)-inclvat)).toFixed(2);
totalamount = parseFloat(Math.round((inclvat / vatpercentage)*100)/100).toFixed(2);
document.getElementById('include_vat').innerHTML = inclvat;
document.getElementById('vat').innerHTML = vatamount;
document.getElementById('exclude_vat').innerHTML = totalamount;
}