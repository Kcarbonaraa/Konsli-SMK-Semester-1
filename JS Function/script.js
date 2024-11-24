alert("Javascript money converter (Only from IDR to USD, EUR, CNY)");


let moneyValue   = parseInt(prompt("Your money value"));
let exchangeRate = prompt("Convert to  USD, EUR, JPY");
let result = 0;

function moneyConvert(paramA, paramB){
    if(paramB == "USD"){
        result = paramA * 0.000062758864;
        console.log("From", moneyValue, "Rupiah (Rp.) to", result, "US Dollar ($)");
        document.writeln("From ", moneyValue, " Rupiah (Rp.) to ", result, " US Dollar ($)");
    }else if (paramB == "EUR"){
        result = paramA * 0.000060222095;
        console.log("From", moneyValue, "Rupiah (Rp.) to", result, "Europe Euro (€)");
        document.writeln("From ", moneyValue, " Rupiah (Rp.) to ", result, " Europe Euro (€) ");
    }else if (paramB == "JPY"){
        result = paramA * 0.0097081223;
        console.log("From", moneyValue, "Rupiah (Rp.) to", result, "Japanese Yen (¥)");
        document.writeln("From ", moneyValue, " Rupiah (Rp.) to ", result, " Japanese Yen (¥)");
    }
    else {
        console.info("Unlisted currency to convert");
    }
}

moneyConvert(moneyValue, exchangeRate);