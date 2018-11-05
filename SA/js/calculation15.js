//get value from user and add VAT
    //set variables
    var exvat = 0;
    var inclvat = 0;
    var vatamount = 0;
    var totalamount = 0;
    var vatpercentage = 1.15;

function addVAT() {
    //calculations
    var exvat = document.getElementById('input').value;
    exvat = parseFloat(exvat);
    vatamount = parseFloat(((exvat * 15) / 100));
    totalamount = (parseFloat(exvat)) + (parseFloat(vatamount));
    
    exvat_converted = currencyFormat(parseFloat(exvat));
    vatamount_converted = currencyFormat(parseFloat(vatamount));
    totalamount_converted = currencyFormat(parseFloat(totalamount));
    
    document.getElementById('exclude_vat').innerHTML = exvat_converted;
    document.getElementById('vat').innerHTML = vatamount_converted;
    document.getElementById('include_vat').innerHTML = totalamount_converted;
    document.getElementById('addResult').className = "panel panel-success fade in";
    document.getElementById('addResult').style.backgroundColor = "#dbf6ff";
}

//get value from user and exclude VAT
function exclVAT() {
    //calculations
    var inclvat = document.getElementById('input').value;
    inclvat = parseFloat(inclvat);
    vatamount = currencyFormat(parseFloat(Math.abs((inclvat / 1.15) - inclvat)));
    totalamount = currencyFormat(parseFloat(Math.round((inclvat / vatpercentage) * 100) / 100));
    inclvat_converted = currencyFormat(parseFloat(inclvat));
    document.getElementById('include_vat').innerHTML = inclvat_converted;
    document.getElementById('vat').innerHTML = vatamount;
    document.getElementById('exclude_vat').innerHTML = totalamount;
    document.getElementById('addResult').className = "panel panel-success fade in";
    document.getElementById('addResult').style.backgroundColor = "#dbf6ff";
}

// Reset form
function resetCalc() {
    document.getElementById("calcForm").reset();
    document.getElementById('exclude_vat').innerHTML = exvat_converted;
    document.getElementById('vat').innerHTML = vatamount;
    document.getElementById('include_vat').innerHTML = totalamount;
    document.getElementById('include_vat').innerHTML = inclvat_converted;

}

//currency formatting
function currencyFormat(num) {
    var exvat = 0;
    var inclvat = 0;
    var vatamount = 0;
    var totalamount = 0;
    return "R" + num.toFixed(2).replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,")
}
