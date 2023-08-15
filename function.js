 
		

function takeData45() {


let number4Array = []
	var number45 = document.querySelectorAll("#mytable tr td:nth-child(3)");
	

number45.forEach(function(td) {
    console.log(td.innerHTML);
    number4Array.push(td.innerHTML)
});
console.log(number4Array);



	let price45Array = []
	var price45 = document.querySelectorAll("#mytable tr td:nth-child(4)");
	

price45.forEach(function(td) {
    console.log(td.innerHTML);
    price45Array.push(td.innerHTML)
});
console.log(price45Array);



let newNumber45Array = [];
	
for (let i = 0; i < number45.length; i++) {
    for (let k = 0; k < price45.length; k++) {
        let number44 = number45[i].innerHTML;
        let price455 = price45[k].innerHTML;
        let new45Array = "";


 if(i == k){
        if (number44.length === 4) {
            new45Array = `|${14}.${number44}.${price455}`;
        } else if (number44.length === 5) {
            new45Array = `|${15}.${number44}.${price455}`;
        }else  if (number44.length === 2) {
        	  new45Array = `|${7}.${number44}.${price455}`;
        }else{
        	new45Array = ""
        }

        newNumber45Array.push(new45Array);
      }
    }
}

console.log(newNumber45Array);
 let allOfnewNumber45Array = newNumber45Array.join("") 
var newNumber45Arra = allOfnewNumber45Array.split("|").filter(Boolean); 
  
  let allData4 = [];
  let lastNum = "";
  let share = 0;
  let combinationxXArray = [];
  let combinationx = [];

  

  var input4 = newNumber45Arra.filter(function (item) {
    var num = item.split(".")[0];
   return num === '14';
  });
console.log(input4);

   const allAmount = newNumber45Arra.map(item => parseFloat(item.split(".")[2]));
    let totalCost = allAmount.reduce((acc, val) => acc + val, 0);
 
 
let amount = input4.map((item) => item.split(".")[2]);
let number4 = input4.map((item) => item.split(".")[1]);

for (var x = 0; x < number4.length; x++) {
  let inputDigits = number4[x].split(""); 
 


function factorial(n) {
    if (n === 0 || n === 1) {
        return 1;
    } else {
        return n * factorial(n - 1);
    }
}

function permutation(n, r) {
    if (n < r) {
        return "n must be greater than or equal to r";
    }
    
    const numerator = factorial(n);
    const denominator = factorial(n - r);
    
    return numerator / denominator;
}

const n =  inputDigits.length
const r = 3

const result = permutation(n, r);
console.log(`P(${n}, ${r}) = ${result}`);


  console.log(inputDigits); 

    combinationx = []; // Reset combinationx array for each input
    
    for (var i = 0; i < inputDigits.length; i++) {
      for (var j = 0; j < inputDigits.length; j++) {
        for (var k = 0; k < inputDigits.length; k++) {
          if (i !== j && i !== k && j !== k) {
            var combination = {
              digits: inputDigits[i]  + inputDigits[j] + inputDigits[k],
            };
            share = Math.floor(parseInt(amount[x]) / result)+1;
            lastNum = `|4.${combination.digits}.${share}`;
            combinationx.push(lastNum);
          }
        }
      }
    }
    
    combinationxXArray.push(combinationx.join(''));
  }
   console.log(combinationxXArray);

  var combinationsOutputElement =  combinationxXArray.join('');
  document.getElementById("combinationsOutput").innerHTML = combinationsOutputElement 

  let allData5 = [];
  let lastNum5 = "";
  let share5 = 0;
  let combinationxXArray5 = [];
  let combinationx5 = [];


  var input5 = newNumber45Arra.filter(function (item) {
    var num = item.split(".")[0];
   return num === '15';
  });
console.log(input5);
  var amount5 = input5.map((item) => item.split(".")[2]);
var number5 = input5.map((item) => item.split(".")[1]);

 for (var x = 0; x < number5.length; x++) {
  let inputDigits5 = number5[x].split(""); 
 


function factorial(n) {
    if (n === 0 || n === 1) {
        return 1;
    } else {
        return n * factorial(n - 1);
    }
}

function permutation(n, r) {
    if (n < r) {
        return "n must be greater than or equal to r";
    }
    
    const numerator = factorial(n);
    const denominator = factorial(n - r);
    
    return numerator / denominator;
}

const n =  inputDigits5.length
const r = 3

const result = permutation(n, r);
console.log(`P(${n}, ${r}) = ${result}`);



  console.log(inputDigits5); 

    combinationx5 = []; // Reset combinationx array for each input
    
    for (var i = 0; i < inputDigits5.length; i++) {
      for (var j = 0; j < inputDigits5.length; j++) {
        for (var k = 0; k < inputDigits5.length; k++) {
          if (i !== j && i !== k && j !== k) {
            let combination = {
              digits: inputDigits5[i]  + inputDigits5[j] + inputDigits5[k],
            };
            share5 = Math.floor(parseInt(amount5[x]) / result);
            lastNum5 = `|4.${combination.digits}.${share5}`;
            combinationx5.push(lastNum5);
          }
        }
      }
    }
    
    combinationxXArray5.push(combinationx5.join(''));
  }
    
     console.log(combinationxXArray5);

  var combinationsOutputElement5 =  combinationxXArray5.join('');
  document.getElementById("combinationsOutput5").innerHTML = combinationsOutputElement5
  
  let allData = []
   const result = document.getElementById("combinationsOutput").innerText;
  const result5 = document.getElementById("combinationsOutput5").innerText;
   allData.push(result)
   allData.push(result5)
 
  let allOfData = allData.join("") 
  console.log(allOfData);
 console.log(result5);
 console.log(result);

var groupedDataa = {};
var inputLastnum = allOfData.split("|").filter(Boolean); // Remove empty strings

inputLastnum.forEach(function(item) {
  var parts = item.split('.');
  var type = parts[0];
  var number = parts[1];
  var price = parseFloat(parts[2]);

  if (!groupedDataa[type]) {
    groupedDataa[type] = {};
  }

  if (!groupedDataa[type][number]) {
    groupedDataa[type][number] = 0;
  }

  groupedDataa[type][number] += price;
});

var combinedDataa = [];

for (var type in groupedDataa) {
  for (var number in groupedDataa[type]) {
    var price = groupedDataa[type][number];
    
	let data =  "|4." + number + "." + parseFloat(price);
	combinedDataa.push(data)
  }
}

var allresult = combinedDataa.join('');

console.log(combinedDataa);


  const afterPrice = combinedDataa.map(item => parseFloat(item.split(".")[2]));
    let totalAfterCost = afterPrice.reduce((acc, val) => acc + val, 0);
  


  const beforePrice = newNumber45Arra.map(item => parseFloat(item.split(".")[2]));
    let totalbeforeCost = beforePrice.reduce((acc, val) => acc + val, 0);

document.getElementById("totalAfterCost").innerHTML = "totalbefore : " +totalbeforeCost +"  /  "+ "totalAfter : " +totalAfterCost 


 document.getElementById("combinationsOutputall45").innerHTML = allresult;

const data45 = document.getElementById('combinationsOutputall45').innerHTML;
console.log(data45); 
}
		function processJson() {
			  const today = new Date();
			const date = today.toLocaleDateString();
			const time = today.toLocaleTimeString();
    
    const formattedDate = `${today.toLocaleDateString()} ${today.toLocaleTimeString()} | web ` ;

  // Tarih etiketinin içeriğini güncelle
  document.querySelector('p').textContent = formattedDate;

			// Tarih ve saati HTML içeriğine ekle
		
			const jsonData = document.getElementById("jsonData").value;

			// Her bir satırı ayrı ayrı işle
			const lines = jsonData.split("\n");
			let veriler = [];

			for (let i = 0; i < lines.length; i++) {
				const line = lines[i];
				if (line.trim() === "") continue; // boş satırları atla

				let parsedJson;
				try {
					parsedJson = JSON.parse(line);
				} catch (error) {
					alert("Geçersiz JSON verileri");
					return;
				}

				// Verileri düzenle ve veriler dizisine ekle
				for (let j = 0; j < parsedJson.length; j++) {
					let type = parsedJson[j].Type;
					let value = parsedJson[j].Value;
					let price = parsedJson[j].Price;

					if (value.length === 3 && type === "บน") {
						type = "1";
					} else if (value.length === 3 && type === "โต๊ด") {
						type = "4";
					} else if (value.length === 3 && type === "ล่าง") {
						type = "6";
					} else if (value.length === 2 && type === "ล่าง") {
						type = "8";
					} else if (value.length === 2 && type === "บน") {
						type = "7";
					} else if (value.length === 1 && type === "บน") {
						type = "9";
					} else if (value.length === 1 && type === "ล่าง") {
						type = "10";
					}

					veriler.push({
						Type: type,
						Value: value,
						Price: price
					});
				}
			}
veriler.sort((a, b) => {
    const aType = parseInt(a.Type);
    const bType = parseInt(b.Type);
    if (aType < bType) return -1;
    if (aType > bType) return 1;
    if (a.Value < b.Value) return -1;
    if (a.Value > b.Value) return 1;
    return 0;
});
      

			// HTML içeriğini oluştur
			let html = "";
			for (let i = 0; i < veriler.length; i++) {
				html += `|${veriler[i].Type}.${veriler[i].Value}.${veriler[i].Price} `;
			}

			// Son | karakterini kaldır
			html = html.slice(0, -1);

			// HTML içeriğini ekrana yazdır
			document.getElementById("jsonVerileri").innerHTML = html;
		}
    




function toggle(id){
 var e = document.getElementById(id);
    if (e.style.display == 'block' || e.style.display == '') {
        e.style.display = 'none';
    } else {
        e.style.display = 'block';
    }
	
	
let limited3 = [392,495,728,812,579,901,902,904,905,907,908,147,324,475,479,359,149,139,195,928]; 
let limited2 = [02,01,04,05,07,08,09,14,17,19,27,28,29,57,53,59,79,89];

   
let permutations3Items = [];
  for (let i = 0; i < limited3.length; i++) {
  let Item3 = limited3[i].toString(); // convert to string before splitting
 
  let digits = Item3.split("");
  let results = []; // define results before using it
  function permute(arr, memo = []) {
    if (arr.length === 0) {
      results.push(memo.join(""));
    } else {
      for (let i = 0; i < arr.length; i++) {
        let curr = arr.slice();
        let next = curr.splice(i, 1);
        permute(curr.slice(), memo.concat(next));
      }
    }
  }
  permute(digits);
  permutations3Items.push(...new Set(results));
 
console.log(permutations3Items);
  }
    
let lastTwoDigits = [];

for (let i = 0; i < permutations3Items.length; i++) {
  let str = permutations3Items[i];
  let digits = str.slice(-2);
  lastTwoDigits.push(digits);
}

console.log(lastTwoDigits);
  
const limitednum2 = [];
 

//let limited2 = [02, 04, 25, 58, 09, 59, 79, 89];

for (let i = 0; i < limited2.length; i++) {
  const Item2 = limited2[i].toString().padStart(2, '0');
  const permutationsNumber = [];

  const perm1 = Item2;
  const perm2 = Item2.split('').reverse().join('');

  permutationsNumber.push(perm1, perm2);

  limitednum2.push(...permutationsNumber);
}
console.log(limitednum2);
 

document.getElementById("limitedNumber22").innerHTML ="limit2 : "+limitednum2
document.getElementById("limitedNumber33").innerHTML ="limit3 : "+permutations3Items



}
	



function type9to111() {

let limitednum2 = document.getElementById("limitedNumber22").innerHTML 
let permutations3Items = document.getElementById("limitedNumber33").innerHTML 
let limited22 = limitednum2.toString().padStart(2,'0');
	//ต้องแยก เป็น 1 ตัวแล้วฟิลเตอร์ อีกที ว่า เอาไร ผันไปไหน
	let types = {};
   let betout1 = []
   let last1 = []
   let notmatch = []
   
  let newlast1 = []

let uniqueData =  []




var percenCus = 0.72;
const percen = 0.7;



 let Number =[]
 
 
for (var k = 0; k < 1000; k++) { 
Number[k] = k
}
console.log(Number);


  var data = document.getElementById("originalinput-data").value;
  var dataArray = data.split("|");
  if (dataArray[0].trim() === "") {
    dataArray.shift();
  }
console.log(dataArray);

  
    var originaldataArray = dataArray.filter(function(item) {
    var price = parseFloat(item.split(".")[2]);
    return price !== 0;
});


 var afterdata = document.getElementById("afinput-data").value;
  var afinputArray = afterdata.split("|");
  if (afinputArray[0].trim() === "") {
    afinputArray.shift();
  }
console.log(afinputArray);

  
    var afdataArray = afinputArray.filter(function(item) {
    var price = parseFloat(item.split(".")[2]);
    return price !== 0;
});

let profit1Array = [];
let profit4Array = [];
let profit7Array = [];
let profit8Array = [];
let profit9Array = [];
let profit10Array = [];
//  type === 1

var filteredArray1 = originaldataArray.filter(function(item) {
  return item.split('.')[0] === '1';
});

console.log(filteredArray1);

 const orArrayPrice1 = filteredArray1.map(item => parseFloat(item.split(".")[2]));
  const ortotalCost1 = orArrayPrice1.reduce((acc, val) => acc + val, 0);
console.log(ortotalCost1);
var affilteredArray1 = afdataArray.filter(function(item) {
  return item.split('.')[0] === '1';
});

console.log(affilteredArray1);
const afArrayPrice1 = affilteredArray1.map(item => parseFloat(item.split(".")[2]));
  const aftotalCost1 = afArrayPrice1.reduce((acc, val) => acc + val, 0);
console.log(aftotalCost1);
 for (var x = 0; x < 1000; x++) {
  const payCus1 = 500;
  
  let win_Lucky3Up_element = filteredArray1.find(item => item.split(".")[1] === [x].toString().padStart(3, '0'));

  let win_Lucky3UpPrice = 0;
if (win_Lucky3Up_element) {
    win_Lucky3UpPrice = parseFloat(win_Lucky3Up_element.split(".")[2]);
  }else{
  win_Lucky3UpPrice = 0;
  }


  
console.log(`or = ${win_Lucky3UpPrice}`);
 let afwin_Lucky3Up_element = affilteredArray1.find(item => item.split(".")[1] === [x].toString().padStart(3, '0'));
 let afwin_Lucky3UpPrice = 0;
 if (afwin_Lucky3Up_element) {
   afwin_Lucky3UpPrice = parseFloat(afwin_Lucky3Up_element.split(".")[2]);
  }else{
  afwin_Lucky3UpPrice = 0;
  }
  

  
console.log(`af = ${afwin_Lucky3UpPrice}`);
if (permutations3Items.includes(x.toString())) {
neRevenue1 = (aftotalCost1*percen) + (win_Lucky3UpPrice * (payCus1/2));
profitType1= Math.floor(((ortotalCost1*percenCus)+(afwin_Lucky3UpPrice * (payCus1/2)))- neRevenue1);
}else{
neRevenue1 = (aftotalCost1*percen) + (win_Lucky3UpPrice * payCus1);
profitType1= Math.floor(((ortotalCost1*percenCus)+(afwin_Lucky3UpPrice * payCus1))- neRevenue1);

}
  

console.log(` x1 =  ${[x]} islimit = ${permutations3Items.includes(x.toString())}  profit = ${profitType1}`);
profit1Array.push(profitType1);

}


//  type === 4
var filteredArray4 = originaldataArray.filter(function(item) {
  return item.split('.')[0] === '4';
});
console.log(filteredArray4);
 const orArrayPrice4 = filteredArray4.map(item => parseFloat(item.split(".")[2]));
  const ortotalCost4 = orArrayPrice4.reduce((acc, val) => acc + val, 0);


var affilteredArray4 = afdataArray.filter(function(item) {
  return item.split('.')[0] === '4';
});
console.log(affilteredArray4);
const afArrayPrice4 = affilteredArray4.map(item => parseFloat(item.split(".")[2]));
  const aftotalCost4 = afArrayPrice4.reduce((acc, val) => acc + val, 0);
  
  
  
  
  
 for (var x = 0; x < 1000; x++) {
let permutations3Items4 = [];
  let Item3 = [x].toString().padStart(3, '0'); // convert to string before splitting
 
  let digits = Item3.split("");
  let results = []; // define results before using it
  function permute(arr, memo = []) {
    if (arr.length === 0) {
      results.push(memo.join(""));
    } else {
      for (let i = 0; i < arr.length; i++) {
        let curr = arr.slice();
        let next = curr.splice(i, 1);
        permute(curr.slice(), memo.concat(next));
      }
    }
  }
  permute(digits);
  permutations3Items4.push(...new Set(results));
 
console.log(permutations3Items4);
  
  const payCus4 = 100;

 for (var x = 0; x < 1000; x++) {
  let permutations3Items4Num = generatePermutations3Items(x);

  let totalorwin = 0; // Initialize totalorwin outside the loop
  for (var m = 0; m < permutations3Items4Num.length; m++) {
    let win_Lucky3Up_element = filteredArray4.find(item => item.split(".")[1] === permutations3Items4Num[m].padStart(3, '0'));

    let win_Lucky3UpPrice = 0;
  if (win_Lucky3Up_element) {
      win_Lucky3UpPrice = parseFloat(win_Lucky3Up_element.split(".")[2]);
    } else {
      win_Lucky3UpPrice = 0;
    }

    totalorwin += win_Lucky3UpPrice;
    console.log(`or = ${win_Lucky3UpPrice}`);
  }

  let totalafwin = 0; // Initialize totalafwin outside the loop
  for (var b = 0; b < permutations3Items4Num.length; b++) {
    let afwin_Lucky3Up_element = affilteredArray4.find(item => item.split(".")[1] === permutations3Items4Num[b].toString().padStart(3, '0'));

    let afwin_Lucky3UpPrice = 0;
  if (afwin_Lucky3Up_element) {
      afwin_Lucky3UpPrice = parseFloat(afwin_Lucky3Up_element.split(".")[2]);
    } else {
      afwin_Lucky3UpPrice = 0;
    }

    totalafwin += afwin_Lucky3UpPrice;
    console.log(`af = ${afwin_Lucky3UpPrice}`);
  }
if (permutations3Items.includes(x.toString())) {
neRevenue4 = (aftotalCost4 * percen) + (totalorwin * (payCus4/2));
  profitType4 = parseInt(((ortotalCost4 * percenCus) + (totalafwin * (payCus4/2))) - neRevenue4);
}else{
neRevenue4 = (aftotalCost4 * percen) + (totalorwin * payCus4);
  profitType4 = parseInt(((ortotalCost4 * percenCus) + (totalafwin * payCus4)) - neRevenue4);
  }

  console.log(` x4 = ${x}  islimit = ${permutations3Items.includes(x.toString())}   profit = ${profitType4}`);
  profit4Array.push(profitType4);

}
}

//  type === 6
var filteredArray6 = originaldataArray.filter(function(item) {
  return item.split('.')[0] === '6';
});
console.log(filteredArray6);

 const orArrayPrice6 = filteredArray6.map(item => parseFloat(item.split(".")[2]));
  const ortotalCost6 = orArrayPrice6.reduce((acc, val) => acc + val, 0);


var affilteredArray6 = afdataArray.filter(function(item) {
  return item.split('.')[0] === '6';
});

console.log(affilteredArray6);
const afArrayPrice6 = affilteredArray6.map(item => parseFloat(item.split(".")[2]));
  const aftotalCost6 = afArrayPrice6.reduce((acc, val) => acc + val, 0);


//  type === 7
var filteredArray7 = originaldataArray.filter(function(item) {
  return item.split('.')[0] === '7';
});
console.log(filteredArray7);
 const orArrayPrice7 = filteredArray7.map(item => parseFloat(item.split(".")[2]));
  const ortotalCost7 = orArrayPrice7.reduce((acc, val) => acc + val, 0);
console.log(ortotalCost7);


var affilteredArray7 = afdataArray.filter(function(item) {
  return item.split('.')[0] === '7';
});
console.log(affilteredArray7);
const afArrayPrice7 = affilteredArray7.map(item => parseFloat(item.split(".")[2]));
  const aftotalCost7 = afArrayPrice7.reduce((acc, val) => acc + val, 0);
console.log(aftotalCost7);



for (var x = 0; x < 100; x++) {
  let numberX = x;
  let limitXx = ""
  for (var i = 0; i < limited22.length; i++) {
    limitXx = limited22[i];
}
  const payCus7 = 70;

  let win_Lucky3Up_element = filteredArray7.find(item => item.split(".")[1] === x.toString().padStart(2, '0'));

  let win_Lucky3UpPrice = 0;
    
if(win_Lucky3Up_element) {
    win_Lucky3UpPrice = parseFloat(win_Lucky3Up_element.split(".")[2]);
	
  } else {
    win_Lucky3UpPrice = 0;
  }

  console.log(`or = ${win_Lucky3UpPrice}`);

  let afwin_Lucky3UpPrice = 0;
  let afwin_Lucky3Up_element = affilteredArray7.find(item => item.split(".")[1] === x.toString().padStart(2, '0'));
  
  
if (afwin_Lucky3Up_element) {
  afwin_Lucky3UpPrice = parseFloat(afwin_Lucky3Up_element.split(".")[2]);
} else {
  afwin_Lucky3UpPrice = 0;
}

console.log(`af = ${afwin_Lucky3UpPrice}`);

 

 
 if (limited22.includes(numberX.toString().padStart(2, '0'))) {
  neRevenue7 = (aftotalCost7 * percen) + (win_Lucky3UpPrice * (payCus7/2));
  profitType7 = parseInt(((ortotalCost7 * percenCus) + (afwin_Lucky3UpPrice * (payCus7/2))) - neRevenue7);
  }else{
  neRevenue7 = (aftotalCost7 * percen) + (win_Lucky3UpPrice * payCus7);
  profitType7 = parseInt(((ortotalCost7 * percenCus) + (afwin_Lucky3UpPrice * payCus7)) - neRevenue7);
  
  
  }

   console.log(`x7 = ${x}  islimit = ${limited22.includes(numberX.toString().padStart(2, '0'))}   profit = ${profitType7}`);
  

  profit7Array.push(profitType7);
}



//  type === 8
 const payCus8 = 70;

var filteredArray8 = originaldataArray.filter(function(item) {
  return item.split('.')[0] === '8';
});
console.log(filteredArray8);
 const orArrayPrice8 = filteredArray8.map(item => parseFloat(item.split(".")[2]));
  const ortotalCost8 = orArrayPrice8.reduce((acc, val) => acc + val, 0);



var affilteredArray8 = afdataArray.filter(function(item) {
  return item.split('.')[0] === '8';
});
console.log(affilteredArray8);
const afArrayPrice8 = affilteredArray8.map(item => parseFloat(item.split(".")[2]));
  const aftotalCost8 = afArrayPrice8.reduce((acc, val) => acc + val, 0);


for (var x = 0; x < 100; x++) {
  const payCus8 = 70;

  let win_Lucky3Up_element = filteredArray8.find(item => item.split(".")[1] === x.toString().padStart(2, '0'));

  let win_Lucky3UpPrice = 0;
  if (win_Lucky3Up_element) {
    win_Lucky3UpPrice = parseFloat(win_Lucky3Up_element.split(".")[2]);
  } else {
    win_Lucky3UpPrice = 0;
  }

  console.log(`or = ${win_Lucky3UpPrice}`);

  let afwin_Lucky3UpPrice = 0;
  let afwin_Lucky3Up_element = affilteredArray8.find(item => item.split(".")[1] === x.toString().padStart(2, '0'));
  if (afwin_Lucky3Up_element) {
    afwin_Lucky3UpPrice = parseFloat(afwin_Lucky3Up_element.split(".")[2]);
  } else {
    afwin_Lucky3UpPrice = 0;
  }

  console.log(`af = ${afwin_Lucky3UpPrice}`);
 if (limited22.includes(x.toString())) {
  neRevenue8 = (aftotalCost8 * percen) + (win_Lucky3UpPrice * (payCus8/2));
  profitType8 = parseInt(((ortotalCost8 * percenCus) + (afwin_Lucky3UpPrice * (payCus8/2))) - neRevenue8);
  }else {
  neRevenue8 = (aftotalCost8 * percen) + (win_Lucky3UpPrice * payCus8);
  profitType8 = parseInt(((ortotalCost8 * percenCus) + (afwin_Lucky3UpPrice * payCus8)) - neRevenue8);
  }
  console.log(` x8 = ${x}  profit = ${profitType8}`);

  profit8Array.push(profitType8);
}



//  type === 9
 const payCus9 = 3;

var filteredArray9 = originaldataArray.filter(function(item) {
  return item.split('.')[0] === '9';
});

console.log("filteredArray9:", filteredArray9);

const orArrayPrice9 = filteredArray9.map(item => parseInt(item.split(".")[2]));
const ortotalCost9 = parseInt(orArrayPrice9.reduce((acc, val) => acc + val, 0));

var affilteredArray9 = afdataArray.filter(function(item) {
  return item.split('.')[0] === '9';
});

console.log("affilteredArray9:", affilteredArray9);

const afArrayPrice9 = affilteredArray9.map(item => parseInt(item.split(".")[2]));
const aftotalCost9 = parseInt(afArrayPrice9.reduce((acc, val) => acc + val, 0));


for (var x = 0; x < 1000; x++) {
  let item33 = x.toString().padStart(3, '0');
  let digit3 = item33.split("");

 
   digit3 = digit3.filter((item, index) => digit3.indexOf(item) === index);

  let totalorwin = 0;
  let win_Lucky3UpPrice = 0; 
  for (var m = 0; m < digit3.length; m++) {
    let win_Lucky3Up_element = filteredArray9.find(item => item.split(".")[1] === digit3[m]);
    let win_Lucky3UpPrice = win_Lucky3Up_element ? parseInt(win_Lucky3Up_element.split(".")[2]) : 0;

    totalorwin += win_Lucky3UpPrice; 

  }
console.log(`or = ${win_Lucky3UpPrice} totalorwin= ${totalorwin}`);
   let totalafwin = 0;
    let afwin_Lucky3UpPrice = 0;
  for (var b = 0; b < digit3.length; b++) {
    let afwin_Lucky3Up_element = affilteredArray9.find(item => item.split(".")[1] === digit3[b]);
    let afwin_Lucky3UpPrice = afwin_Lucky3Up_element ? parseFloat(afwin_Lucky3Up_element.split(".")[2]) : 0;

    totalafwin += afwin_Lucky3UpPrice; 


  }
console.log(`af = ${afwin_Lucky3UpPrice} totalafwin= ${totalafwin}`);
  let percen9 = 0.9;
  let neRevenue9 = (aftotalCost9 * percen9) + (totalorwin * payCus9);
  let profitType9 = parseInt(((ortotalCost9 * percen9) + (totalafwin * payCus9)) - neRevenue9);

  console.log(` x9 =  ${[x]}  profit = ${profitType9}`);

profit9Array.push(profitType9);
}


//  type === 10
var filteredArray10 = originaldataArray.filter(function(item) {
  return item.split('.')[0] === '10';
});
console.log(filteredArray10)
 const orArrayPrice10 = filteredArray10.map(item => parseFloat(item.split(".")[2]));
  const ortotalCost10 = orArrayPrice10.reduce((acc, val) => acc + val, 0);

var affilteredArray10 = afdataArray.filter(function(item) {
  return item.split('.')[0] === '10';
});

console.log(affilteredArray10);
const afArrayPrice10 = affilteredArray10.map(item => parseFloat(item.split(".")[2]));
  const aftotalCost10 = afArrayPrice10.reduce((acc, val) => acc + val, 0);


for (var x = 0; x < 10; x++) {
  const payCus10 = 4;
  
  let win_Lucky3Up_element = filteredArray10.find(item => item.split(".")[1] === [x].toString().padStart(1, '0'));

  let win_Lucky3UpPrice = 0;
  if ([x] === permutations3Items ){
  win_Lucky3UpPrice = parseFloat(win_Lucky3Up_element.split(".")[2])/2;
  }else if (win_Lucky3Up_element) {
    win_Lucky3UpPrice = parseFloat(win_Lucky3Up_element.split(".")[2]);
  }else{
  win_Lucky3UpPrice = 0;
  }


  
console.log(`or = ${win_Lucky3UpPrice}`);

 let afwin_Lucky3UpPrice = 0;
let afwin_Lucky3Up_element = affilteredArray10.find(item => item.split(".")[1] === [x].toString().padStart(1, '0'));
if ([x] === permutations3Items ){ 
 afwin_Lucky3UpPrice = parseFloat(afwin_Lucky3Up_element.split(".")[2])/2;
 }else if (afwin_Lucky3Up_element) {
   afwin_Lucky3UpPrice = parseFloat(afwin_Lucky3Up_element.split(".")[2]);
  }else{
  afwin_Lucky3UpPrice = 0;
  }

  
console.log(`af = ${afwin_Lucky3UpPrice}`);

  let neRevenue10 = (parseFloat(aftotalCost10)*percen) + (parseFloat(win_Lucky3UpPrice) * payCus10);
profitType110 = ((parseFloat(ortotalCost10)*percenCus)+(parseFloat(afwin_Lucky3UpPrice )* payCus10))- neRevenue10;
console.log(` x10 =  ${[x]}  profit = ${profitType110}`);
profit10Array.push(profitType110);


}


function getLastDigit(num) {
  return num % 10;
}
// Define the function to show Profit Type 7 for a paddedNumber
function showProfitType7ForPaddedNumber(paddedNumber) {
  const lastTwoDigits = parseInt(paddedNumber) % 100;
  return profit7Array[lastTwoDigits]; // Return the profitType7 value for the given paddedNumber
}

function showProfitType8ForPaddedNumber(paddedNumber) {
  const lastTwoDigits = parseInt(paddedNumber) % 100;
  return profit8Array[lastTwoDigits]; // Return the profitType7 value for the given paddedNumber
}





// Assuming you have initialized profit1Array, profit4Array, profit9Array earlier in the code
// For example:


var tableHtml = "";
var itemArray;
var totalGreaterThanZero = 0;
var totalLessThanZero = 0;

for (var i = 0; i < 1000; i++) {
  var paddedNumber = i.toString().padStart(3, '0'); 
 
  // Calculate the profitType7 for the current paddedNumber using the showProfitType7ForPaddedNumber function
  var profitType7 = showProfitType7ForPaddedNumber(paddedNumber);
  var profitType8 = showProfitType8ForPaddedNumber(paddedNumber);
  var lastDigit = getLastDigit(i);
 

  itemArray = [paddedNumber, profit1Array[i], profit4Array[i], profitType7, profit9Array[i]]; // Add the profitType7 value to the itemArray
for (let col = 1; col < itemArray.length; col++) {
  for (let row = 0; row < 1000; row++) {
    let value = itemArray[col][row];
    if (value > 0) {
      counts.greaterThanZero[col - 1]++;
    } else if (value < 0) {
      counts.lessThanZero[col - 1]++;
    }
  }
}


  var currentRowHtml = ""; // Initialize the row's HTML for the current iteration.

  var total = 0; // Initialize the total for the current row outside of the inner loop

  var total = 0; // Initialize the total for the current row outside of the inner loop

  for (var m = 0; m < itemArray.length; m++) {
 var value = itemArray[m];
  if (value === undefined) {
    value = 0; // Set the value to 0 if it's undefined
  } else if (m > 0) {
    total += parseInt(value); // Calculate the total for valid values (skip the first element which is the paddedNumber)
  }

  // Check if value matches any value in permutations3Items
  if (permutations3Items.includes(value)) {
    currentRowHtml = `<tr style="background-color: yellow;">`; // Set background color for the entire row
    total += parseInt(value);
  }
  currentRowHtml += "<td>" + value + "</td>"; // Add each item of itemArray as a cell in the row
} 

if (total < 0) {
    currentRowHtml += `<td style="color: red;">${total}</td>`; // Add the total as the last cell in the row with red color
  } else {
    currentRowHtml += "<td>" + total + "</td>"; // Add the total as the last cell in the row
  }

if (total !== 0) {
  tableHtml += currentRowHtml + "</tr>"; // Add the row to the tableHtml only if the total is not 0
}

  // Count positive and negative values in the total column
  if (total > 0) {
    totalGreaterThanZero++;
	
  } else if (total < 0) {
    totalLessThanZero++;
	
	// Set background color for the entire row
  }
}

var finalTableHtml = "<table><tr><th>เลข</th><th>1</th><th>4</th><th>7</th><th>9</th><th>total</th>"
finalTableHtml += "Total > 0: " + totalGreaterThanZero+ "  /   " ;
finalTableHtml += "Total < 0: " + totalLessThanZero ;

finalTableHtml += "</tr>" + tableHtml + "</table>"; // Concatenate the tableHtml with the table header

document.getElementById("table").innerHTML = finalTableHtml;





}



function generatePermutations3Items(num) {
  let Item3 = num.toString().padStart(3, '0'); // convert to string before splitting

  let digits = Item3.split("");
  let results = []; // define results before using it

  function permute(arr, memo = []) {
    if (arr.length === 0) {
      results.push(memo.join(""));
    } else {
      for (let i = 0; i < arr.length; i++) {
        let curr = arr.slice();
        let next = curr.splice(i, 1);
        permute(curr.slice(), memo.concat(next));
      }
    }
  }

  permute(digits);
  return [...new Set(results)];
}

function getDatafromCalculate(){


}


