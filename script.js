// declare variables
var exvat = 0;
var inclvat = 0;
var vatamount = 0;
var totalamount = 0;
var vatpercentage = 1.14;

//get value from user
exvat = prompt("Enter amount.");

// calculation
totalamount = exvat * vatpercentage;

alert(totalamount);
