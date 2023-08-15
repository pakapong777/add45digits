<?php

include_once('functions.php'); 

$insertdata = new DB_con();

if (isset($_POST['insert'])) {
    $name = $_POST['name'];
    $number45 = $_POST['number45'];
    $Price = $_POST['Price'];

   // Validate $number45 length

    if (in_array(strlen($number45), array(2, 4, 5))) {

    $sql = $insertdata->insert($name, $number45, $Price);

    if ($sql) {
        echo "<script> alert('บันทึก');</script>";
        header("Location: insert.php"); // Redirect to a success page
        exit; // Important to exit after redirect
    } else {
        echo "<script> alert('ตั้งสติคะ ไม่บันทึก');</script>";
         header("Location: insert.php"); // Redirect to a success page
        exit; // Important to exit after redirect
    }
}
else {
        
       
echo "<script> alert('ใส่เลขได้แค่ 2,4,5 ตัว');</script>";
 header("Location: insert.php"); // Redirect to a success page
        exit; // Important to exit after redirect
    }
}
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
	<link rel="stylesheet"  href="main.css">
  <script src="function.js" ></script>
  
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </head>
    <style >
  body {
  background: linear-gradient(#D86E0C, #ddd, #ddd, #ffffff);
  background-size: 100%;
  background-position: center center;
  background-repeat: no-repeat;
  align-items: center;
  margin: 3% 8%;
  font-family: Arial, Helvetica, sans-serif;
}
 </style>
  <body>


<ul class="nav nav-pills nav-fill">
   <li class="nav-item" type="button" onclick="openCity(event, 'London')">INPUT4-5</li>
   <li class="nav-item" type="button" onclick="openCity(event, 'thai')">JSON</li>
   <li class="nav-item" type="button"  onclick="openCity(event, 'Paris')">CALCULATE</li>
   <li class="nav-item" type="button"  onclick="openCity(event, 'Tokyo')">CHECKPROFIT</li>
</ul>


	<div id="London" class="tabcontent">
		<div class="container">
  		<h1 class="mt-5" style="font-weight: 700; color:white;">INPUT4-5</h1>

	<!-- hide -->



	

  		<hr>
			<form action="insert.php" method="post">

  			<div class="mt-3"></div>
    <div class="input-group mb-3">
<!-- <input type="number" name="name"><br> -->
 <select type="select" class="form-control"  name="name"  aria-label="ชื่อลูกค้า" required>
                <option >เลือกชื่อลูกค้า...</option>
                 <option>1แอน</option> 
                 <option>2มุ้ย</option> 
                 <option>3ติ๊ก3</option>
                  <option>4นัด4</option> 
                  <option>5หยอย5</option> 
                  <option>6มะ6</option> 
                  <option>7น้องยา7</option>
                  <option>8จ๋า8</option>
                  <option>9ศรี9</option>
                  <option>10กระต่าย10</option><option>11หย๊ะ11</option><option>12ป้อม12</option><option>13เล็ก13</option><option>14จารี14</option><option>15นาท15</option><option>16น้องอ้อย16</option><option>17แมว17</option><option>18ก้อย18</option><option>19อ้อย19</option><option>20ติ๋ม20</option><option>21ชุ</option><option>22ทราย</option><option>23กิีม</option><option>24Nong</option><option>25</option>
                  <option>26</option>
              </select>


 

<input type="number" class="form-control" name="number45" aria-label="เลข" placeholder="เลข"  autocomplete="off" required>


    
        <input type="number" class="form-control"  aria-label="ราคา"  name="Price" autocomplete="off" placeholder="ราคา"  required>
    
 
        <button type="submit" name="insert" class="btn btn-primary ">add</button>
    

</div>
 </form>



	<div class="container mt-5">
		<hr>
  	
  	<table id="mytable" class="table table-bordered table-striped ">
  	
  	<thead class="mt-10">
  		<th>id</th>
  		<th>ชื่อ</th>
  		<th>เลข</th>
  		<th>ราคา</th>
  		<th>เวลา</th>
  		
  		<th>delete</th>
  	</thead> 
  		<tbody>
  			<?php
  				include_once('functions.php');
  				$fetchdata = new DB_con();
  				$sql =$fetchdata->fetchdata();
  				while($row = mysqli_fetch_array($sql)) {
  					
  			?>

  			<tr>
  				<td><?php echo $row['id']; ?></td><td><?php echo $row['name']; ?></td>
  				<td><?php echo $row['number45']; ?></td>
  				<td><?php echo $row['Price']; ?></td>
  				<td><?php echo $row['postingdate']; ?></td>
  				
  				<td><a href="delete.php?del=<?php echo $row['id'];?>" class="btn btn-danger">delete</a></td> 
  				
  			</tr>



  			<?php
				}

  			?>
  		</tbody>
  		<tfoot>
    <tr>
         <th colspan="3" style="text-align:right">รวม :</th>
         <th></th>
        </tr>
    </tfoot>

  	</table>



</div><br>
<div class="container">
    <hr>
   

<button type="button" class="btn btn-danger" onclick="takeData45()">gettype4</button>

<h2 id="totalAfterCost" class="form-control" style="color:orangered;"></h2>
<div id="combinationsOutputall45"  style="overflow: auto; overflow-wrap: break-word;"  class="form-control"></div>
 <div class="myinput"  style="overflow: auto; overflow-wrap: break-word;display:none;"     >4ตัว >><br>
	<div id="combinationsOutput"></div>
 </div><br>
 
  <div class="myinput"  style="overflow: auto; overflow-wrap: break-word;display:none;"     >5ตัว >><br>
	<div id="combinationsOutput5"></div>
  </div><br>


<!-- hide -->
</div>
</div>
</div>




<div id="thai" class="tabcontent">
	<div class="container">
	<h1 class="mt-3" style="font-weight: 700; color:white;">JSON </h1>

	<form class="my-input" id="jsonForm">
		<label for="jsonData"></label><br>
		<textarea id="jsonData" name="jsonData" rows="10" cols="60" ></textarea><br><br>
		<button type="button" onclick="processJson()">NumEx Data</button><br><br>
		<hr>
	
  <br>
	<p>today</p><br>
	<div id="jsonVerileri"></div>
  <br>
  <hr>
<button type="button" onclick="copyResult()">COPY</button><br>
</form>
  <script>
  

	</script>

</div>
</div>

<div id="Paris" class="tabcontent">
	<div class="container">
	<h1 class="mt-5" style="font-weight: 700; color:white;">  </h1>

<input class="my-input" type="text" id="input-data"  placeholder="|ชนิด.เลข.ราคา">
	<button  type="button"  onclick="createTable();allDatabetout();">GET DATA</button>
	
	
	

<!--type1-->
<h2  style="color:orange; " > betout </h2>
<div style="border:1px solid black; border-radius: 5px;width:90%;">
<h2 id="totalall" style="color:orange; " ></h2>

<div style="overflow: auto; overflow-wrap: break-word; " id="combinationsOutputall"></div><br>
<div style="overflow: auto; overflow-wrap: break-word;display:none;  " id="betout4"></div><br>
<div style="overflow: auto; overflow-wrap: break-word;display:none;  " id="betout6"></div><br>
<div style="overflow: auto; overflow-wrap: break-word;display:none;  " id="betout7"></div><br>
<div style="overflow: auto; overflow-wrap: break-word;display:none;  " id="betout8"></div><br>
<div style="overflow: auto; overflow-wrap: break-word;display:none;  " id="betout1"></div><br>
<div style="overflow: auto; overflow-wrap: break-word;display:none;  " id="betout10"></div><br>
<div style="overflow: auto; overflow-wrap: break-word;display:none;  " id="betout9"></div><br>

<div style="overflow: auto; overflow-wrap: break-word;display:none; " id="LastDataNumArray1"></div><br>

<div style="overflow: auto; overflow-wrap: break-word; " id="betout"></div><br>
</div><br>	
	
	
<h2 id="best-x1" style="color:orange; " ></h2>
<div style="border:1px solid black; border-radius: 5px;width:90%;">

<p></p>

<div style="overflow: auto; overflow-wrap: break-word;display:none; " id="newtype1afterchange"></div><br>
<div style="overflow: auto; overflow-wrap: break-word;display:none;  " id="type1from9"></div><br>
<div style="overflow: auto; overflow-wrap: break-word;" id="type1"></div><br>
</div><br>

<!--type4-->
<h2 id="best-x4" style="color:orange; " ></h2>
<div style="border:1px solid black; border-radius: 5px;width:90%;">
<p></p>

<div style="overflow: auto; overflow-wrap: break-word; " id="type4"></div><br>
</div><br>

<!--type6-->	
<h2 id="best-x6" style="color:orange; " ></h2>
<div style="border:1px solid black; border-radius: 5px;width:90%;">
<p></p>
<div style="overflow: auto; overflow-wrap: break-word;" id="type6"></div><br>
</div><br>	

<!--type7-->
<h2 id="best-x7" style="color:orange; " ></h2>
<div style="border:1px solid black; border-radius: 5px;width:90%;">
<p></p>
<div style="overflow: auto; overflow-wrap: break-word;  " id="type7"></div><br>
</div><br>

<!--type8-->
<h2 id="best-x8" style="color:orange; " ></h2>
<div style="border:1px solid black; border-radius: 5px;width:90%;">
<p></p>
<div style="overflow: auto; overflow-wrap: break-word;" id="type8"></div><br>
<div style="overflow: auto; overflow-wrap: break-word;display:none;" id="type8from10"></div><br>
</div><br>

<!--type9-->
<h2 id="best-x9" style="color:orange; " ></h2>
<div style="border:1px solid black; border-radius: 5px;width:90%;">
<p></p>
<div style="overflow: auto; overflow-wrap: break-word;" id ="betout99"></div><br>
<div style="overflow: auto; overflow-wrap: break-word;" id="type9"></div><br>
</div><br>


<!--type10-->
<h2 id="best-x10" style="color:orange; " ></h2>
	
<div style="border:1px solid black; border-radius: 5px;width:90%;">
<p></p>
<div style="overflow: auto; overflow-wrap: break-word;" id="change10"></div><br>
<div style="overflow: auto; overflow-wrap: break-word;" id="type10"></div><br>
<div style="overflow: auto; overflow-wrap: break-word;" id="type10to8"></div><br>
</div><br>
	
</div>


</div>


<div id="Tokyo" class="tabcontent">

<div class="container" id="menu">
   <button type="button" onclick="toggle('newBill'); " style="float:right;">EDIT</button>

<form name="billnew" id="newBill" style="display:none;">

<h2 id="limitedNumber22" style="color:white;overflow: auto;font-size:15px; overflow-wrap: break-word; "  ></h2>
<h2 id="limitedNumber33" style="color:white;overflow: auto; font-size:15px;overflow-wrap: break-word; " ></h2>
</form>
</div>
<input class="my-input" type="text" id="originalinput-data"  placeholder="original|ชนิด.เลข.ราคา"> <input class="my-input" type="text" id="afinput-data"  placeholder="after|ชนิด.เลข.ราคา">
<button type="button" onclick="type9to111()">GET TABLE</button>


<div  id="table"></div><br>

</div><br>

	

<script>


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




function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}





function createTable() {
let limitednum2 = document.getElementById("limitedNumber22").innerHTML 
let permutations3Items = document.getElementById("limitedNumber33").innerHTML 
let limited22 = limitednum2.toString().padStart(2,'0');
  var data = document.getElementById("input-data").value;
  var percenCus = 0.72;
  var newCombinedData = data.split("|");
  if (newCombinedData[0].trim() === "") {
    newCombinedData.shift();
  }
  var newgroupedData = {};

// Group items by type and number
newCombinedData.forEach(function(item) {
  var parts = item.split('.');
  var type = parts[0];
  var number = parts[1];
  var price = parseFloat(parts[2]);
  
  if (!newgroupedData[type]) {
    newgroupedData[type] = {};
  }
  
  if (!newgroupedData[type][number]) {
    newgroupedData[type][number] = 0;
  }
  
  newgroupedData[type][number] += price;
});

// Combine items with the same type and number
var dataArray = [];


for (var type in newgroupedData) {
  for (var number in newgroupedData[type]) {
    var price = newgroupedData[type][number];
    dataArray.push( type + '.' + number + '.' + parseFloat(price));
  }
}
var types = {};

var result = '|' + dataArray.join('|');
console.log(dataArray);


	
  for (var i = 0; i < dataArray.length; i++) {
    var itemArray = dataArray[i].split(".");
    var type = itemArray[0];
    var number1 = itemArray[1];
    var price = parseFloat(itemArray[2]);

    if (!(type in types)) {
      types[type] = {
        count: 1,
        price: price
      };
    } else {
      types[type].count += 1;
      types[type].price += price;
    }
  }

  // create separate table for each type
  for (var type in types) {
    if (types.hasOwnProperty(type)) {
      var table = document.createElement("table");
      var headerRow = table.insertRow(0);
      var headerCell1 = headerRow.insertCell(0);
      var headerCell2 = headerRow.insertCell(1);
      headerCell1.innerHTML = "Type " + type;
      headerCell2.innerHTML = "Total: $" + types[type].price.toFixed(2);

      for (var i = 0; i < dataArray.length; i++) {
        var itemArray = dataArray[i].split(".");
        var itemType = itemArray[0];
        var number1 = itemArray[1];
        var price = parseFloat(itemArray[2]);

        if (itemType === type) {
          var row = table.insertRow(-1);
          var cell1 = row.insertCell(0);
          var cell2 = row.insertCell(1);
          cell1.innerHTML = number1;
          cell2.innerHTML = "$" + price.toFixed(2);
        }
	
      }
	  console.log(dataArray);
} 
//  type === 1
var filteredArray = dataArray.filter(function(item) {
  return item.split('.')[0] === '1';
});
var output1 = filteredArray.join('|');
console.log(output1);
document.getElementById('type1').innerHTML = "|"+output1;

//  type === 4
var filteredArray = dataArray.filter(function(item) {
  return item.split('.')[0] === '4';
});
var output4 = filteredArray.join('|');
console.log(output4);
document.getElementById('type4').innerHTML = "|"+output4;

//  type === 6
var filteredArray = dataArray.filter(function(item) {
  return item.split('.')[0] === '6';
});
var output6 = filteredArray.join('|');
console.log(output6);
document.getElementById('type6').innerHTML = "|"+output6;

//  type === 7
var filteredArray = dataArray.filter(function(item) {
  return item.split('.')[0] === '7';
});
var output7 = filteredArray.join('|');
console.log(output7);
document.getElementById('type7').innerHTML = "|"+output7;

//  type === 8
var filteredArray = dataArray.filter(function(item) {
  return item.split('.')[0] === '8';
});

var output8 = filteredArray.join('|');
console.log(output8);
document.getElementById('type8').innerHTML = "|"+output8;

//  type === 9
var filteredArray = dataArray.filter(function(item) {
  return item.split('.')[0] === '9';
});
var output9 = filteredArray.join('|');
console.log(output9);
document.getElementById('type9').innerHTML = "|"+output9;


//  type === 10
var filteredArray = dataArray.filter(function(item) {
  return item.split('.')[0] === '10';
});
var output10 = filteredArray.join('|');
console.log(output10);
document.getElementById('type10').innerHTML = "|"+output10;

}

}
//----------------------------------------------------------------------------------------------------------------
/*

function type10to8() {

var percenCus = 0.7;
  var data = document.getElementById("type10").innerHTML;
  var inputArray = data.split("|");
  if (inputArray[0].trim() === "") {
    inputArray.shift();
  }



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
 
const firstlimitednum= [];

//let limited2 = [02, 04, 25, 58, 09, 59, 79, 89];

for (let i = 0; i < limitednum2.length; i++) {
  const Item2 = limitednum2[i].toString().padStart(2, '0');
  const permutationsNumber = [];

  const perm1 = Item2.split('')[0]
  const perm2 = Item2.split('')[1]

  permutationsNumber.push(perm1, perm2);

  firstlimitednum.push(...permutationsNumber);
}
console.log(firstlimitednum);
 

 //const inputArray = ['9.0.600', '9.2.300', '9.3.150', '9.4.50', '9.5.1150', '9.6.1950', '9.7.2100', '9.8.2400', '9.9.1000'];
let digits = inputArray.map((item) => item.split(".")[1]);
let amount = inputArray.map((item) => parseFloat(item.split(".")[2]));
 

let countMap2 = {};
for (const num of firstlimitednum) {
  countMap2[num] = (countMap2[num] || 0) + 1;
}

console.log("Count Map:", countMap2);





let newAmountArray = digits.map((digit, index) => {
  if (countMap2[digit] === undefined) {
    return amount[index]; // Set newAmount to original amount if countMap2[digit] is 0
  } else {
    return Math.floor(parseFloat(amount[index])-((parseFloat(amount[index]) /19 )* countMap2[digit]));
  }
});
let newDataArray = inputArray.map((item, index) => `10.${digits[index]}.${newAmountArray[index]}`);


console.log("New Data:", newDataArray);
console.log("New Amount Array:", newAmountArray);

const LastSetNumArray = inputArray.map((item, index) => {
  const [type, number, price] = item.split('.');
  const remainderNum = parseInt(number.slice(-2));
  const newPrice = parseFloat(price);
  if (newPrice > newAmountArray[index]) {
    return `${type}.${number}.${newPrice - newAmountArray[index]}`;
  } else {
    return `${type}.${number}.${0}`;
  }
});


console.log(LastSetNumArray);
 var filArray10 = LastSetNumArray.filter(function(item) {
    var price = parseFloat(item.split(".")[2]);
    return price !== 0;
});

let permutNumber= []

for (let i = 0; i < 100; i++) {
  const Item2 = [i].toString().padStart(2, '0');
 
  permutNumber.push(Item2);

  
}
console.log(permutNumber);
let lastNum = "";
for (let i = 0; i < permutNumber.length; i++) {
const newNumber  = permutNumber[i].toString().padStart(2, '0');
  const permutationsNumber = [];

  const perm1 = newNumber.split('')[0]
  const perm2 = newNumber.split('')[1]
  let amountPrice1 = 0
  let amountPrice2 = 0
for (let s = 0; s < digits.length; s++) {
 if ( perm1 === digits[s] ) {
    amountPrice1 = Math.floor(parseFloat(amount[s])/19)
	 }
 else if ( perm2 === digits[s] ) {
    amountPrice2 = Math.floor(parseFloat(amount[s])/19)
}
}
if(perm1 !== perm2){
 shared = amountPrice1+ amountPrice2
 }
 else if(perm1 === perm2){
 shared = amountPrice1
 }
  lastNum += `|8.${permutNumber[i]}.${shared}`;

 
 }

console.log(lastNum);


var uniqueDataa = lastNum.split("|").filter(Boolean); // Remove empty strings
console.log(uniqueDataa);

let uniqueData = []
const uniqueDataNumArray = [];
const dataNumSet = new Set();

for (const item of uniqueDataa) {
  if (!dataNumSet.has(item)) {
    dataNumSet.add(item);
    uniqueDataNumArray.push(item);
  }
}

console.log(uniqueDataNumArray);

const uniqueDataNumSet = new Set(uniqueDataNumArray); // Use a Set to remove duplicates
uniqueData.push(uniqueDataNumArray.join('|'));

console.log(uniqueData);
const combinedLastData = uniqueData.join('|');
var inputLastnumM = combinedLastData.split("|").filter(Boolean); 
/* 
const combination = [];
const share = [];
let lastNum = "";

for (let s = 0; s < digits.length; s++) {
  let shared = 0;

  for (let i = 0; i < 10; i++) {
  for (let b = 0; b < 10; b++) {
        const numberN = `${b}${i}`;
	
		let  amountPriceI = 0
		  if (`${i}` === digits[s] ||`${b}` === digits[s] && `${b}`!== `${i}`) {
            amountPriceI = Math.floor(parseFloat(amount[s])/19)+ Math.floor(parseFloat(amount[s])/19);
			console.log(amountPriceI);
          }
          if (`${i}` === digits[s]||`${b}` === digits[s] && `${b}`=== `${i}`) {
            amountPriceI = Math.floor(parseFloat(amount[s])/19)
			
          }
		 
          shared = amountPriceI
          lastNum += `|8.${numberN}.${shared}`;
        }
      
	  }}
    



let dataArray = inputLastnumM.filter(item => {
  let numss = item.split(".")[1].split(",");
  return numss.every(num => !limitednum2.includes(num));
});
  
console.log(dataArray);

const ArrayPrice = dataArray.map(item => parseFloat(item.split(".")[2]));
    let totalCost = ArrayPrice.reduce((acc, val) => acc + val, 0);
 let minProfit = Infinity;
 let maxProfit = 0;
 let bestXProfit = 0;
    let bestX = 0;

let percen = 0.7;
let payBetout = 70;
    // Determine the payCus value based on the total price range
   
let payCus = 70;

 for (let x = 0; x <= Math.max(...ArrayPrice); x++) {
        let sumNewarray = ArrayPrice.reduce((acc, val) => acc + Math.max(0, val - x),0);
        let neRevenue = (sumNewarray*percen) + ((x+1) *payCus);
		
		
      let profit = ((totalCost * percenCus) + payCus) - neRevenue;
      console.log(`x=${x}, sumNewarray=${Math.floor(sumNewarray)}, neRevenue=${Math.floor(neRevenue)}, profit=${ Math.floor(profit)}`);
       
    if (profit > 1000 && profit < maxProfit) {
      minProfit = profit;
      bestX = x;
    }

    if (profit > maxProfit) {
      maxProfit = profit;
      bestXProfit = x;
    }
	
	

  console.log(`The value of x that minimizes the profit is ${bestX} with a minimum positive profit of ${minProfit}`);
  console.log(`The value of x that maximizes the profit is ${bestXProfit} with a maximum profit of ${maxProfit}`);
  
}
const LastDataNumArray = dataArray.map(item => {
  const [type, number, price] = item.split('.');
  const remainderNum = parseInt(number) 
  const newPrice = parseFloat(price);
  if (price > bestX ) {
  
      return `${type}.${number}.${price - bestX }`;
    } else {
    return `${type}.${number}.${0}`;
    } 
});

console.log(LastDataNumArray);


var filArray1 = LastDataNumArray.filter(function(item) {
    var price = parseFloat(item.split(".")[2]);
    return price !== 0;
});

let uniqueData1 =  []
uniqueData1.push(...filArray10)
uniqueData1.push(...filArray1)

console.log(uniqueData1);
  
const ArrayPriceNew = uniqueData1.map(item => parseFloat(item.split(".")[2]));
  const total = ArrayPriceNew.reduce((acc, val) => acc + val, 0);

  document.getElementById("betout10").innerHTML = uniqueData1.join("|")
  document.getElementById("change10").innerHTML =  totalCost +":"  +"<br>"+ filArray10.join("|")+ filArray1.join("|")
 console.log(uniqueData1);

  document.getElementById("best-x10").innerHTML = `type10:   ตัด  ${bestX} จะได้กำไรขั้นต่ำ${Math.floor(minProfit)} /  ตัด ${bestXProfit} จะได้กำไรสูงสุด ${Math.floor(maxProfit)}  /   ราคารวม  ${Math.floor(total)}`;





 

	}


	/*
const uniqueDataNumSet = new Set(uniqueDataNumArray); // Use a Set to remove duplicates
uniqueData.push(uniqueDataNumArray.join('|'));

console.log(uniqueData);
const combinedLastData = uniqueData.join('|');
var inputLastnumM = combinedLastData.split("|").filter(Boolean); // Remove empty strings

console.log("Combined Last Data:", combinedLastData);

// Calculate total cost for the combined last data
const combinedArrayPrice = inputArray.map(item => parseFloat(item.split(".")[2]));
const totalCombinedCost = combinedArrayPrice.reduce((acc, val) => acc + val, 0);
const combinedArrayPrice1 = inputLastnumM.map(item => parseFloat(item.split(".")[2]));
const totalCombinedCostw = combinedArrayPrice1.reduce((acc, val) => acc + val, 0);


document.getElementById("combinedDatalastNum").innerHTML = combinedLastData
*/
//-___________________________________________________________________________________________


function type8(){
	let limitednum2 = document.getElementById("limitedNumber22").innerHTML 
let permutations3Items = document.getElementById("limitedNumber33").innerHTML 
let limited22 = limitednum2.toString().padStart(2,'0');
 var types = {};
 let betout8 = []
    var data8 = document.getElementById("type8").innerHTML;
	console.log(data8)
	
  //  var percenCus = document.getElementById("input-percenCus").value;
  var percenCus = 0.72
    var dataArray = data8.split("|");
    if (dataArray[0].trim() === "") {
        dataArray.shift();
    }
   
  const ArrayPrice = dataArray.map(item => parseFloat(item.split(".")[2]));
  let totalCost = ArrayPrice.reduce((acc, val) => acc + val, 0);
 let minProfit = Infinity;
 let maxProfit = 0;
 let bestXProfit = 0;
    let bestX = 0;

let percen = 0.7;
let payBetout = 70;
    // Determine the payCus value based on the total price range
   
let payCus = 70;

 for (let x = 0; x <= Math.max(...ArrayPrice); x++) {
        let sumNewarray = ArrayPrice.reduce((acc, val) => acc + Math.max(0, val - x),0);
        let neRevenue = (sumNewarray*percen) + ((x+1) *payCus);
		
		
      let profit = ((totalCost * percenCus) + payCus) - neRevenue;
      console.log(`x=${x}, sumNewarray=${Math.floor(sumNewarray)}, neRevenue=${Math.floor(neRevenue)}, profit=${ Math.floor(profit)}`);
       
    if (profit > 1000 && profit < maxProfit) {
      minProfit = profit;
      bestX = x;
    }

    if (profit > maxProfit) {
      maxProfit = profit;
      bestXProfit = x;
    }
	
	

  console.log(`The value of x that minimizes the profit is ${bestX} with a minimum positive profit of ${minProfit}`);
  console.log(`The value of x that maximizes the profit is ${bestXProfit} with a maximum profit of ${maxProfit}`);
  
}
const LastDataNumArray = dataArray.map(item => {
  const [type, number, price] = item.split('.');
  const remainderNum = parseInt(number) 
  const newPrice = parseFloat(price);
  if (price > bestX ) {
  
      return `${type}.${number}.${price - bestX }`;
    } else {
    return `${type}.${number}.${0}`;
    } 
});

console.log(LastDataNumArray);


var filArray8 = LastDataNumArray.filter(function(item) {
    var price = parseFloat(item.split(".")[2]);
    return price !== 0;
});

  
betout8.push(filArray8)  

document.getElementById("betout8").innerHTML = "|"+ betout8.join("|")
  

    document.getElementById("best-x8").innerHTML = `type8:   ตัด  ${bestX} จะได้กำไรขั้นต่ำ${Math.floor(minProfit)} /  ตัด ${bestXProfit} จะได้กำไรสูงสุด ${Math.floor(maxProfit)}  /   ราคารวม  ${Math.floor(totalCost)}`;
	
	}

//_________________________________________________________________________________________________

function type6(){
let betout6=[]
 var types = {};
    var data6 = document.getElementById("type6").innerHTML;
	console.log(data6)
  //  var percenCus = document.getElementById("input-percenCus").value;
  var percenCus = 0.72
    var dataArray = data6.split("|");
    if (dataArray[0].trim() === "") {
        dataArray.shift();
    }
    var tableHtml = "<table><tr><th>ชนิด</th><th>เลข 1</th><th>ราคา</th></tr>";
    var total = 0;
    for (var i = 0; i < dataArray.length; i++) {
        var itemArray = dataArray[i].split(".");
        var type = itemArray[0];
        var number = itemArray[1];
        var price = parseFloat(itemArray[2]);
		total += price;
}
var dataObjects = [];
    dataObjects.push({type: type, number: number, price: price});

// Sort the dataObjects array in descending order of the price property.
dataObjects.sort(function(a, b){
    return a.price - b.price;
});

// Extract the last 6 items from the sorted dataObjects array and store them in a new array.
var lastSixMaxPrices = dataObjects.slice(dataObjects.length-4, dataObjects.length);

// Print the type, number, and price of each item in the lastSixMaxPrices array.
let sumPricearray = 0;
for(var i=0; i<lastSixMaxPrices.length; i++){
    console.log("Type: " + lastSixMaxPrices[i].type + ", Number: " + lastSixMaxPrices[i].number + ", Price: " + lastSixMaxPrices[i].price);
	sumPricearray +=lastSixMaxPrices[i].price
}
console.log(sumPricearray)

    const ArrayPrice = dataArray.map(item => parseFloat(item.split(".")[2]));
    let totalCost = ArrayPrice.reduce((acc, val) => acc + val, 0);
 let minProfit = Infinity;
  let maxProfit = 0;
  let bestXProfit = 0;
    let bestX = 0;

let percen = 0.7;
let payBetout = 130;
let payCus = 120;
let Max =0;
let maxPro = 0 

  for (let x = 0; x <= Math.max(...ArrayPrice); x++) {
        let sumNewarray = ArrayPrice.reduce((acc, val) => acc + Math.max(0, (val - x),0));
		
        let neRevenue = (sumNewarray*percen) + ((x+1) * payCus);
        let profit = ((totalCost*percenCus)+payCus)- neRevenue;
       
	   console.log(`x=${x},totalCost=${Math.floor(totalCost)}, sumNewarray=${Math.floor(sumNewarray)}, neRevenue=${Math.floor(neRevenue)}, profit=${ Math.floor(profit)}`);
       
	   if (profit > 1000 && profit < maxProfit) {
            minProfit =  Math.floor(profit);
            bestX = Math.floor(x/4);
        
		
   }

    if (profit > maxProfit) {
      maxProfit = Math.floor(profit);
      bestXProfit = Math.floor(x/4);
    }
	
	

 // console.log(`The value of x that minimizes the profit is ${bestX} with a minimum positive profit of ${minProfit}`);
  //console.log(`The value of x that maximizes the profit is ${bestXProfit} with a maximum profit of ${maxProfit}`);
}


const LastDataNumArray = dataArray.map(item => {
  const [type, number, price] = item.split('.');
  const remainderNum = parseInt(number) 
  const newPrice = parseFloat(price);
  if (price > bestX ) {
  
      return `${type}.${number}.${price - bestX }`;
    } else {
    return `${type}.${number}.${0}`;
    } 
});

console.log(LastDataNumArray);
  
betout6.push(...LastDataNumArray)  
var filArray = betout6.filter(function(item) {
    var price = parseFloat(item.split(".")[2]);
    return price !== 0;
});

document.getElementById("betout6").innerHTML = "|"+ filArray.join("|")
 
	

    document.getElementById("best-x6").innerHTML = `type6: ตัด  ${bestX} จะได้กำไรขั้นต่ำ${Math.floor(minProfit)} ตัด ${bestXProfit} จะได้กำไรสูงสุด ${Math.floor(maxProfit)} /  ราคารวม  ${Math.floor(totalCost)}  `;
	
	
	}




//___________________________________________________________________________________________



	
function type9to1() {
	let limitednum2 = document.getElementById("limitedNumber22").innerHTML 
let permutations3Items = document.getElementById("limitedNumber33").innerHTML 
let limited22 = limitednum2.toString().padStart(2,'0');
let betout9 = []
var percenCus = 0.7 ;
  var data = document.getElementById("type9").innerHTML;

  var dataaArrayy = data.split("|");
  if (dataaArrayy[0].trim() === "") {
    dataaArrayy.shift();
  }
console.log(dataaArrayy);


var dataArrayy = dataaArrayy.filter(function(item) {
    var price = parseFloat(item.split(".")[2]);
    return price >= 270 ;
});

console.log(dataArrayy);

let result = []

const dataArrayyNo = dataaArrayy.filter(item =>!dataArrayy.includes(item));

result.push(dataArrayyNo)


 
let notmatch = []






const firstlimitednum2 = [];

for (let i = 0; i < limitednum2.length; i++) {
  const Item2 = limitednum2[i].toString().padStart(2, '0');
  const permutationsNumber = [];

  const perm1 = Item2.split('')[0]
  const perm2 = Item2.split('')[1]

  permutationsNumber.push(perm1, perm2);

  firstlimitednum2.push(...permutationsNumber);
}
console.log(firstlimitednum2);

 let countMap2 = {};
for (const num of firstlimitednum2) {
  countMap2[num] = (countMap2[num] || 0) + 1;
}

console.log("Count Map2:", countMap2);


let permutNumber= []

for (let i = 0; i < 1000; i++) {
  const Item2 = [i].toString().padStart(3, '0');
 
  permutNumber.push(Item2);

  
}
console.log(permutNumber);



  
let lastTwoDigits = [];

for (let i = 0; i < permutations3Items.length; i++) {
  let str = permutations3Items[i];
  let digits = str.slice(-2);
  lastTwoDigits.push(digits);
}

console.log(lastTwoDigits);


const firstlimitednum = [];

for (let i = 0; i < permutations3Items.length; i++) {
  const Item2 = permutations3Items[i].toString().padStart(2, '0');
  const permutationsNumber = [];

  const perm1 = Item2.split('')[0]
  const perm2 = Item2.split('')[1]
   const perm3 = Item2.split('')[2]

  permutationsNumber.push(perm1, perm2,perm3);

  firstlimitednum.push(...permutationsNumber);
}
firstlimitednum.push(...firstlimitednum2);
console.log(firstlimitednum);

 let countMap3 = {};
for (const num of firstlimitednum) {
  countMap3[num] = (countMap3[num] || 0) + 1;
}

console.log("Count Map3:", countMap3);



 

let digits = dataArrayy.map((item) => item.split(".")[1]);
let amount = dataArrayy.map((item) => parseFloat(item.split(".")[2]));




let lastNum = "";


function generateCombinations() {
const result = [];
for (let i = 0; i < digits.length; i++) {
        
       
for (let j = 0; j < digits.length; j++) {
            
           
for (let k = 0; k < digits.length; k++) {
result.push(digits[i] + digits[j] + digits[k]);
            }
        }
    }

   
return result;
}

const combinations = generateCombinations();

const digitToCheck = '1';
const combinationsWithDigit = combinations.filter(combination => combination.includes(digitToCheck));
let lengthNum = combinationsWithDigit.length

console.log(lengthNum);









let newAmountArray = digits.map((digit, index) => {
  if (countMap3[digit] === undefined) {
    return amount[index]; // Set newAmount to original amount if countMap2[digit] is 0
  } else {
    return Math.floor(parseFloat(amount[index])-((parseFloat(amount[index]) /lengthNum )* countMap3[digit]));
  }
});
let newDataArray = dataArrayy.map((item, index) => `9.${digits[index]}.${newAmountArray[index]}`);


console.log("New Data:", newDataArray);
console.log("New Amount Array:", newAmountArray);

const LastSetNumArray = dataArrayy.map((item, index) => {
  const [type, number, price] = item.split('.');
  const remainderNum = parseInt(number.slice(-2));
  const newPrice = parseFloat(price);
  if (newPrice > newAmountArray[index]) {
    return `${type}.${number}.${newPrice - newAmountArray[index]}`;
  } else {
    return `${type}.${number}.${newPrice}`;
  }
});


console.log(LastSetNumArray);
 var filArray10 = LastSetNumArray.filter(function(item) {
    var price = parseFloat(item.split(".")[2]);
    return price !== 0;
});

console.log(filArray10);






var groupedData9 = {};


filArray10.forEach(function(item) {
  var parts = item.split('.');
  var type = parts[0];
  var number = parts[1];
  var price = parseFloat(parts[2]);

  if (!groupedData9[type]) {
    groupedData9[type] = {};
  }

  if (!groupedData9[type][number]) {
    groupedData9[type][number] = 0;
  }

  groupedData9[type][number] += price;
});

var combinedData9 = [];

for (var type in groupedData9) {
  for (var number in groupedData9[type]) {
    var price = groupedData9[type][number];
    combinedData9.push( type + '.' + number + '.' + parseFloat(price));
  }
}


let com = combinedData9.join("|")



var groupedNotmatch = {};


newDataArray.forEach(function(item) {
  var parts = item.split('.');
  var type = parts[0];
  var number = parts[1];
  var price = parseFloat(parts[2]);

  if (!groupedNotmatch[type]) {
    groupedNotmatch[type] = {};
  }

  if (!groupedNotmatch[type][number]) {
    groupedNotmatch[type][number] = 0;
  }

  groupedNotmatch[type][number] += price;
});

var combinedNotmatch = [];

for (var type in groupedNotmatch) {
  for (var number in groupedNotmatch[type]) {
    var price = groupedNotmatch[type][number];
    combinedNotmatch.push( type + '.' + number + '.' + parseFloat(price));
  }
}


let com2 = combinedNotmatch.join("|")




result.push(com2);

console.log(result);
console.log(combinedData9);






for (let i = 0; i < permutNumber.length; i++) {
const newNumber  = permutNumber[i].toString().padStart(3, '0');
  const permutationsNumber = [];

  const perm1 = newNumber.split('')[0]
  const perm2 = newNumber.split('')[1]
  const perm3 = newNumber.split('')[2]
  let amountPrice1 = 0
  let amountPrice2 = 0
  let amountPrice3 = 0
 let digitX = combinedData9.map((item) => item.split(".")[1]);
let amountX = combinedData9.map((item) => parseFloat(item.split(".")[2]));


for (let s = 0; s < digitX.length; s++) {


 if ( perm1 === digitX[s] ) {
    amountPrice1 = Math.floor(parseFloat(amountX[s])/lengthNum)
	 }
 else if ( perm2 === digitX[s] ) {
    amountPrice2 = Math.floor(parseFloat(amountX[s])/lengthNum)
}else if ( perm3 === digitX[s] ) {
    amountPrice3 = Math.floor(parseFloat(amountX[s])/lengthNum)
}
}
if(perm1 !== perm2&&perm3 !== perm2 && perm1 !== perm3){
 shared = amountPrice1+ amountPrice2 + amountPrice3
 }
 else if( perm1 === perm2 && perm1 !== perm3 && perm2 !== perm3    ){
 shared = amountPrice1 + amountPrice3
 }
 else if(perm1 === perm3 && perm1 !== perm2 && perm2 !== perm3  ){
 shared = amountPrice1 + amountPrice2
 }
  else if(perm2 === perm3 && perm1 !== perm2 && perm1 !== perm3  ){
 shared = amountPrice2 + amountPrice1
 }
 else if(perm2 === perm3 && perm1 === perm2 && perm1 === perm3  ){
 shared = amountPrice1
 }
  lastNum += `|4.${permutNumber[i]}.${shared}`;

 
 }

console.log(lastNum);


var uniqueDataa = lastNum.split("|").filter(Boolean); // Remove empty strings
console.log(uniqueDataa);

let uniqueData = []
const uniqueDataNumArray = [];
const dataNumSet = new Set();

for (const item of uniqueDataa) {
  if (!dataNumSet.has(item)) {
    dataNumSet.add(item);
    uniqueDataNumArray.push(item);
  }
}

console.log(uniqueDataNumArray);



var dataArray = uniqueDataNumArray.filter(Boolean); // Remove empty strings
console.log(dataArray);


const filteredLast2Array = dataArray.filter(item => {
  const number = item.split('.')[1];
  return !lastTwoDigits.some(str => number.endsWith(str));
 

  });
console.log(filteredLast2Array);

const limited2Array = filteredLast2Array.filter(item => {
  const number = item.split('.')[1];
  return !limitednum2.some(str => number.endsWith(str));
 

  });
console.log(limited2Array);

var filArray2 = limited2Array.filter(function(item) {
    var price = parseFloat(item.split(".")[2]);
    return price !== 0;
});

console.log(filArray2);


 let newCountArray = [];
const numberArray = filArray2.map(item => item.split('.')[1].toString());
const countMap = {};
for (const number of numberArray) {
  const remainder = (number % 100).toString().padStart(2, '0'); // add leading zeros if necessary
  countMap[remainder] = (countMap[remainder] || 0) + 1;

  if (countMap[remainder] === 10) {
    newCountArray.push(remainder);
  }
}
console.log(countMap);
console.log(newCountArray);




const resultArray = filArray2.filter(item => {
  const number = item.split('.')[1];
  return newCountArray.some(str => number.endsWith(str));
 

  });
console.log(resultArray);


const cantFilteredArray = filArray2.filter(item =>!resultArray.includes(item));
console.log(cantFilteredArray);  

result.push(...cantFilteredArray)



 // Group the data by remainder value
const groupedData1 = {};
for (const item of resultArray) {
  const [type, number, price] = item.split('.');
  const remainderNum = parseInt(number) % 100;
  if (!groupedData1[remainderNum]) {
    groupedData1[remainderNum] = [];
  }
  groupedData1[remainderNum].push({ type, number, price: parseFloat(price) });
}
console.log(groupedData1)

// Iterate through each group and find minimum price
const minPrices = {};
for (const remainderNum in groupedData1) {
  const items = groupedData1[remainderNum];
  let minPrice = Infinity;
  for (const item of items) {
    if (item.price < minPrice) {
      minPrice = item.price;
    }
  }
  minPrices[remainderNum] = minPrice;

console.log(minPrice)
}// Loop through the original data again and update prices
const newDataNumArray = resultArray.map(item => {
  const [type, number, price] = item.split('.');
  const remainderNum = parseInt(number) % 100;
  const newPrice = parseFloat(price);
  let newNumber = number.slice(-2)
  if (resultArray.includes(remainderNum.toString().padStart(2, '0'))) {
    if (newPrice === minPrices[remainderNum]) {
      return `${7}.${newNumber}.${minPrices[remainderNum] * 10}`;
    } else {
      return `${type}.${number}.${newPrice - minPrices[remainderNum]}`;
    if (newPrice - minPrices[remainderNum] === 0) {
   return null; // remove data with price difference equal to zero
    } else {
      return `${type}.${number}.${newPrice - minPrices[remainderNum]}`;
    }
	}
  } else {
    return item;
  }
});

console.log(newDataNumArray);


var grouped = {};


newDataNumArray.forEach(function(item) {
  var parts = item.split('.');
  var type = parts[0];
  var number = parts[1];
  var price = parseFloat(parts[2]);

  if (!grouped[type]) {
    grouped[type] = {};
  }

  if (!grouped[type][number]) {
    grouped[type][number] = 0;
  }

  grouped[type][number] += price;
});

var combined= [];

for (var type in grouped) {
  for (var number in grouped[type]) {
    var price = grouped[type][number];
    combined.push( type + '.' + number + '.' + parseFloat(price));
  }
}






var fildataArray7 = combined.filter(function(item) {
    var price = parseFloat(item.split(".")[2]);
    return price !== 0;
});

let data91 =fildataArray7.join("|")
let results = []

results.push(...result);
results.push(data91);



let resultsData =results.join("|")
console.log(resultsData);
let lastresultsData = resultsData.split("|")
  const ArrayPricebetout = dataArrayy.map(item => parseFloat(item.split(".")[2]));
  const totalCostt = amount.reduce((acc, val) => acc + val, 0);
 const ArrayPric = lastresultsData.map(item => parseInt(item.split(".")[2]));
  const totalCos = ArrayPric.reduce((acc, val) => acc + val, 0);

  document.getElementById("betout9").innerHTML = "|"+resultsData


  document.getElementById("best-x9").innerHTML = `type9 : totalCost=${Math.floor(totalCostt)} / totalAll=${Math.floor(totalCos)}`;



	


}


//___________________________________________________________________________________________



function type1(){
	let limitednum2 = document.getElementById("limitedNumber22").innerHTML 
let permutations3Items = document.getElementById("limitedNumber33").innerHTML 
let limited22 = limitednum2.toString().padStart(2,'0');
var types = {};
let betout = []
let betout1 = [];
let notmatch = []
var data1 = document.getElementById("type1").innerHTML;
console.log(data1);

// var percenCus = document.getElementById("input-percenCus").value;
var percenCus = 0.72;
 var dataArrayy = data1.split("|");
    if (dataArrayy[0].trim() === "") {
        dataArrayy.shift();
    }
	 var dataArray = dataArrayy.filter(function(item) {
    var price = parseFloat(item.split(".")[2]);
    return price !== 0;
});
 
  
  var newgroupedData = {};

// Group items by type and number
dataArray.forEach(function(item) {
  var parts = item.split('.');
  var type = parts[0];
  var number = parts[1];
  var price = parseFloat(parts[2]);
  
  if (!newgroupedData[type]) {
    newgroupedData[type] = {};
  }
  
  if (!newgroupedData[type][number]) {
    newgroupedData[type][number] = 0;
  }
  
  newgroupedData[type][number] += price;
});

// Combine items with the same type and number
var newCombinedData = [];




for (var type in newgroupedData) {
  for (var number in newgroupedData[type]) {
    var price = newgroupedData[type][number];
    newCombinedData.push(type + '.' + number + '.' + price);
  }
}

var result = '|' + newCombinedData.join('|');

console.log(newCombinedData);

	
  
let lastTwoDigits = [];

for (let i = 0; i < permutations3Items.length; i++) {
  let str = permutations3Items[i];
  let digits = str.slice(-2);
  lastTwoDigits.push(digits);
}

console.log(lastTwoDigits);




 let resultArray = [];
const numberArray = newCombinedData.map(item => item.split('.')[1].toString());
const countMap = {};
for (const number of numberArray) {
  const remainder = (number % 100).toString().padStart(2, '0'); // add leading zeros if necessary
  countMap[remainder] = (countMap[remainder] || 0) + 1;

  if (countMap[remainder] === 10) {
    resultArray.push(remainder);
  }
}
console.log(countMap);


const filteredArray = newCombinedData.filter(item => {
  const number = item.split('.')[1];
  return resultArray.some(str => number.endsWith(str));
 

  });
console.log(filteredArray);



const cantFilteredArray = newCombinedData.filter(item =>!filteredArray.includes(item));
console.log(cantFilteredArray);
notmatch.push(...cantFilteredArray)



let limitednum2Array = limitednum2.split(',');
let matchingNumber2 = filteredArray.filter(item => {
  const number = item.split('.')[1];
  return limitednum2Array.some(str => number.endsWith(str));
});

console.log(matchingNumber2);
notmatch.push(...matchingNumber2)


const matchingNumbers = filteredArray.filter(item =>!matchingNumber2.includes(item));
console.log(matchingNumbers);//samelimit3changeto7






 // Group the data by remainder value
const groupedData = {};
for (const item of matchingNumbers) {
  const [type, number, price] = item.split('.');
  const remainderNum = parseInt(number) % 100;
  if (!groupedData[remainderNum]) {
    groupedData[remainderNum] = [];
  }
  groupedData[remainderNum].push({ type, number, price: parseFloat(price) });
}
console.log(groupedData)

// Iterate through each group and find minimum price
const minPrices = {};
for (const remainderNum in groupedData) {
  const items = groupedData[remainderNum];
  let minPrice = Infinity;
  for (const item of items) {
    if (item.price < minPrice) {
      minPrice = item.price;
    }
  }
  minPrices[remainderNum] = minPrice;
}

// Loop through the original data again and update prices
const newDataNumArray = matchingNumbers.map(item => {
  const [type, number, price] = item.split('.');
  const remainderNum = parseInt(number) % 100;
  const newPrice = parseFloat(price);
  let newNumber = number.slice(-2)
   let NPrice = newPrice - minPrices[remainderNum]
  if (resultArray.includes(remainderNum.toString().padStart(2, '0'))) {
    if (newPrice === minPrices[remainderNum]) {
      return `${7}.${newNumber}.${minPrices[remainderNum] * 10}`;
    } else {
	
      return `${type}.${number}.${NPrice}`;
	 
    if (NPrice === 0) {
   return null; // remove data with price difference equal to zero
    } else {
      return `${type}.${number}.${NPrice}`;
    }
	}
  } else {
    return item;
  }
});

console.log(newDataNumArray);


   var filArray7 = newDataNumArray.filter(function(item) {
     return item.split('.')[0] === '7';
});

console.log(filArray7);
betout1.push(...filArray7);

   var filArray71 = newDataNumArray.filter(function(item) {
     return item.split('.')[0] === '1';
});
console.log(filArray71);
notmatch.push(...filArray71);

console.log(notmatch)
console.log(betout1)



const ArrayPrice = notmatch.map(item => parseFloat(item.split(".")[2]));
  const totalCost = ArrayPrice.reduce((acc, val) => acc + val, 0);
console.log(totalCost);
  let minProfit = Infinity;
  let maxProfit = 0;
  let bestXProfit = 0;
let bestX = 0;
  const percen = 0.7;
  const payCus = 500;

  for (let x = 0; x <= Math.max(...ArrayPrice); x++) {
  let sumNewArray = ArrayPrice.reduce((acc, val) => acc + Math.max(0, val - x),0);
    let neRevenue = (sumNewArray*percen) + ((x+1) * payCus);
        let profit = ((totalCost*percenCus)+payCus)- neRevenue;

    if (profit > 1000 && profit < maxProfit) {
      minProfit = profit;
      bestX = x;
    }

    if (profit > maxProfit) {
      maxProfit = profit;
      bestXProfit = x;
    }
}
 const LastDataNumArrayy = notmatch.map(item => {
    const [type, number, price] = item.split(".");
    const remainderNum = parseInt(number);
    const newPrice = parseFloat(price);
    if (newPrice > bestX) {
      return `${type}.${number}.${price - bestX}`;
    } else {
      return `${type}.${number}.${0}`;
    }
	
	
	
  });
  console.log(LastDataNumArrayy);

  
   var filArray1 = LastDataNumArrayy.filter(function(item) {
    var price = parseFloat(item.split(".")[2]);
    return price !== 0;
});
   console.log(filArray1);




 

  console.log(betout1);
  console.log(filArray1);
  const ArrayPricebetout = filArray1.map(item => parseFloat(item.split(".")[2]));
  const totalbetout = ArrayPricebetout.reduce((acc, val) => acc + val, 0);
  console.log(totalbetout);
 
  document.getElementById("betout1").innerHTML = "|"+betout1.join("|")+"|"+filArray1.join("|");
  document.getElementById("best-x1").innerHTML =   `type  1 :ตัด ${bestX} จะได้กำไรขั้นต่ำ ${Math.floor(
    minProfit
  )} ตัด ${bestXProfit} จะได้กำไรสูงสุด ${Math.floor(
    maxProfit
  )}, totalCost=${Math.floor(totalCost)}`;

}





//___________________________________________________________________________________________


function type7(){

let limitednum2 = document.getElementById("limitedNumber22").innerHTML 
let permutations3Items = document.getElementById("limitedNumber33").innerHTML 
let limited22 = limitednum2.toString().padStart(2,'0');
    var data7 = document.getElementById("type7").innerHTML;
	console.log(data7)
  //  var percenCus = document.getElementById("input-percenCus").value;
  var percenCus = 0.72
    var dataArrayy = data7.split("|");
    if (dataArrayy[0].trim() === "") {
        dataArrayy.shift();
    }
  
  

var groupedData = {};
  var dataArray = dataArrayy.filter(function(item) {
    var price = parseFloat(item.split(".")[2]);
    return price !== 0;
});
 var percenCus = 0.72;
var percen = 0.7;
 let minProfit = Infinity;
  let maxProfit = 0;
  let bestXProfit = 0;
    let bestX = 0;
	let betout7 = [];
let notmatch = []
  
  var groupedData = {};
// Group items by type and number
dataArray.forEach(function(item) {
  var parts = item.split('.');
  var type = parts[0];
  var number = parts[1];
  var price = parseFloat(parts[2]);
  
  if (!groupedData[type]) {
    groupedData[type] = {};
  }
  
  if (!groupedData[type][number]) {
    groupedData[type][number] = 0;
  }
  
  groupedData[type][number] += price;
});

// Combine items with the same type and number
var combinedData = [];




for (var type in groupedData) {
  for (var number in groupedData[type]) {
    var price = groupedData[type][number];
    combinedData.push(type + '.' + number + '.' + price);
  }
}

var result = '|' + combinedData.join('|');
console.log(combinedData);

  
  

let lastTwoDigits = [];

for (let i = 0; i < permutations3Items.length; i++) {
  let str = permutations3Items[i];
  let digits = str.slice(-2);
  lastTwoDigits.push(digits);
}

console.log(lastTwoDigits);
//['23', '32', '13', '31', '12', '21', '56', '65', '16', '61', '15', '51', '86', '68', '76', '67', '78', '87', '65', '56', '75', '57', '76', '67', '90', '09', '80', '08', '89', '98', '41', '14', '21', '12', '24', '42', '48', '84', '58', '85', '54', '45']
 







let matchingNumber2 = combinedData.filter(item => {
  let numss = item.split(".")[1].split(",");
  return numss.every(num => limitednum2.includes(num));
});

console.log(matchingNumber2);

let matchingNumbers = matchingNumber2.filter(item => {
  let nums = item.split(".")[1].split(",");
  return nums.every(num =>!lastTwoDigits.includes(num));
});

console.log(matchingNumbers);



let lastNumbers = combinedData.filter(item => !matchingNumbers.includes(item)); //push


 let NumberArray = [];
for (let k = 0; k < 10; k++) {
	for (let j = 0; j < matchingNumbers.length; j++) {
    let [type, number, price] = matchingNumbers[j].split('.');
    let newNumber = k.toString()+ number;
    let newPrice = (price / 10).toFixed(2);
    let newItem = `${1}.${newNumber}.${Math.floor(newPrice)}`;
	
	
	NumberArray.push(newItem)	
 } 
  }
console.log(NumberArray);

var groupedData22 = {};

// Group items by type and number
NumberArray.forEach(function(item) {
  var parts = item.split('.');
  var type = parts[0];
  var number = parts[1];
  var price = parseFloat(parts[2]);
  
  if (!groupedData22[type]) {
    groupedData22[type] = {};
  }
  
  if (!groupedData22[type][number]) {
    groupedData22[type][number] = 0;
  }
  
  groupedData22[type][number] += price;
});

// Combine items with the same type and number
var combinedData22 = [];

for (var type in groupedData22) {
  for (var number in groupedData22[type]) {
    var price = groupedData22[type][number];
    combinedData22.push(type + '.' + number + '.' + price);
  }
}

var result = '|' + combinedData22.join('|');
console.log(combinedData22);

let payCus = 70

    const ArrayPrice = lastNumbers.map(item => parseFloat(item.split(".")[2]));
    let totalCost = ArrayPrice.reduce((acc, val) => acc + val, 0);


    for (let x = 0; x <= Math.max(...ArrayPrice); x++) {
        let sumNewarray = ArrayPrice.reduce((acc, val) => acc + Math.max(0, val - x),0);
        let neRevenue = (sumNewarray*percen) + ((x+1) *payCus);
		
		
      let profit = ((totalCost * percenCus) + payCus) - neRevenue;
   //   console.log(`x=${x}, sumNewarray=${Math.floor(sumNewarray)}, neRevenue=${Math.floor(neRevenue)}, profit=${ Math.floor(profit)}`);
       
    if (profit > 1000 && profit < maxProfit) {
      minProfit = profit;
      bestX = x;
    }

    if (profit > maxProfit) {
      maxProfit = profit;
      bestXProfit = x;
    }
	
	

 // console.log(`The value of x that minimizes the profit is ${bestX} with a minimum positive profit of ${minProfit}`);
  //console.log(`The value of x that maximizes the profit is ${bestXProfit} with a maximum profit of ${maxProfit}`);
  }

const LastDataNumArray = lastNumbers.map(item => {
  const [type, number, price] = item.split('.');
  const remainderNum = parseInt(number) 
  const newPrice = parseFloat(price);
  if (price > bestX ) {
  
      return `${type}.${number}.${price - bestX }`;
    } else {
    return `${type}.${number}.${0}`;
    } 
});

console.log(LastDataNumArray); 
  
 var filArray7 = LastDataNumArray.filter(function(item) {
    var price = parseFloat(item.split(".")[2]);
    return price !== 0;
});
 
betout7.push(...filArray7) 
 betout7.push(...combinedData22) 
betout7 = [...new Set(betout7)];

console.log(betout7); 
document.getElementById("betout7").innerHTML = "|"+ betout7.join("|")

    document.getElementById("best-x7").innerHTML = `type7 :    ตัด  ${bestX} จะได้กำไรขั้นต่ำ${Math.floor(minProfit)} /  ตัด ${bestXProfit} จะได้กำไรสูงสุด ${Math.floor(maxProfit)}  /   ราคารวม  ${Math.floor(totalCost)}`;
	console.log(betout7);
	}


//___________________________________________________________________________________________

function type4(){

let limitednum2 = document.getElementById("limitedNumber22").innerHTML 
let permutations3Items = document.getElementById("limitedNumber33").innerHTML 
let limited22 = limitednum2.toString().padStart(2,'0');
let betout4 = []
 var types = {};
    var data4 = document.getElementById("type4").innerHTML;
	console.log(data4)
  //  var percenCus = document.getElementById("input-percenCus").value;

    var dataArray = data4.split("|");
    if (dataArray[0].trim() === "") {
        dataArray.shift();
    }
   
 
    const ArrayPrice = dataArray.map(item => parseFloat(item.split(".")[2]));
    let totalCost = ArrayPrice.reduce((acc, val) => acc + val, 0);
 let minProfit = Infinity;
  let maxProfit = 0;
  let bestXProfit = 0;
    let bestX = 0;
  var percenCus = 0.72
let percen = 0.7;
let payBetout = 100;
let payCus = 100;


   for (let x = 0; x <= Math.max(...ArrayPrice); x++) {
        let sumNewarray = ArrayPrice.reduce((acc, val) => acc + Math.max(0, (val - x),0));
		
       let neRevenue = (sumNewarray*percen) + ((x+1)* payCus);
        let profit = ((totalCost*percenCus) + payCus) - neRevenue;
       

       
	   if (profit > 1000 && profit < maxProfit) {
            minProfit =  Math.floor(profit);
            bestX = Math.floor(x/6);
        
		
   }

    if (profit > maxProfit) {
      maxProfit = Math.floor(profit);
      bestXProfit = Math.floor(x/6);
    }
	

//  console.log(`The value of x that minimizes the profit is ${bestX} with a minimum positive profit of ${minProfit}`);
 // console.log(`The value of x that maximizes the profit is ${bestXProfit} with a maximum profit of ${maxProfit}`);
}
  
const LastDataNumArray = dataArray.map(item => {
  const [type, number, price] = item.split('.');
  const remainderNum = parseInt(number) 
  const newPrice = parseFloat(price);
  if (price > bestX ) {
  
      return `${type}.${number}.${price - bestX }`;
    } else {
    return `${type}.${number}.${0}`;
    } 
});

 var filArray4 = LastDataNumArray.filter(function(item) {
    var price = parseFloat(item.split(".")[2]);
    return price !== 0;
});

console.log(LastDataNumArray);
  
betout4.push(...filArray4)  

document.getElementById("betout4").innerHTML = "|"+ betout4.join("|")



    document.getElementById("best-x4").innerHTML = `type4:   ตัด  ${bestX} จะได้กำไรขั้นต่ำ${Math.floor(minProfit)} /  ตัด ${bestXProfit} จะได้กำไรสูงสุด ${Math.floor(maxProfit)}  /   ราคารวม  ${Math.floor(totalCost)}`;
	
	
	}


//__________________________________________________________________________________________________________	__________________

function generatePermutations(number) {
  let results = [];
  let digits = number.toString().split("");
  function permute(arr, memo = []) {
    if (arr.length === 0) {
      results.push(memo.join(""));
    }
    else {
      for (let i = 0; i < arr.length; i++) {
        let curr = arr.slice();
        let next = curr.splice(i, 1);
        permute(curr.slice(), memo.concat(next));
      }
    }
  }
  permute(digits);
  return results;
}



//___________________________________________________________________________________________


function allDatabetout() {
  var percenCus = 0.72
let limitednum2 = document.getElementById("limitedNumber22").innerHTML 
let permutations3Items = document.getElementById("limitedNumber33").innerHTML 
let limited22 = limitednum2.toString().padStart(2,'0');
 type8();
 type6();
type1(); 
 type7(); 
 //type9to1();
 type4();
 let newDataArray = []
 let allData = []
 let all  = []
  let allall  = []
 let afterall = []
  const result1 = document.getElementById("betout1").innerText;
  const result4 = document.getElementById("betout4").innerText;
  const result6 = document.getElementById("betout6").innerText;
  const result7 = document.getElementById("betout7").innerText;
  const result8 = document.getElementById("betout8").innerText;
  //const result9 = document.getElementById("betout9").innerText;
  const result9 = document.getElementById("type9").innerText;
  const result10 = document.getElementById("type10").innerText;
   allData.push(result1)
   allData.push(result4)
   allData.push(result6)
   allData.push(result7)
   allData.push(result8)
   allData.push(result9)
   allData.push(result10)
  let allOfData = allData.join("") 
  console.log(allOfData);
 console.log(result7)
  
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
    combinedDataa.push( type + '.' + number + '.' + parseFloat(price));
  }
}

 

var allresult = combinedDataa.join('|');
console.log(combinedDataa);

 



   const ArrayPrice = combinedDataa.map(item => parseFloat(item.split(".")[2]));
  const totalCostAll = ArrayPrice.reduce((acc, val) => acc + val, 0);
document.getElementById("combinationsOutputall").innerHTML += "|" + combinedDataa.join("|");

}



        

</script>

<link rel="stylesheet"  href="main.css">
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
  	    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script >
      
$(document).ready(function () {
    $('#mytable').DataTable({
"lengthChange": true,
"paging": true,
"searching": true,
"info": true,
"pageLength": 10,
"order": [[ 2, "desc" ]],

  
      footerCallback: function (row, data, start, end, display) {
            var api = this.api();
 
            // Remove the formatting to get integer data for summation
            var intVal = function (i) {
                return typeof i === 'string' ? i.replace(/[\€,]/g, '') * 1 : typeof i === 'number' ? i : 0;
            };
 
            // Total over all pages
            total = api
                .column(3)
                .data()
                .reduce(function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0);
 
            // Total over this page
            pageTotal = api
                .column(3, { page: 'current' })
                .data()
                .reduce(function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0);
 
           
            // Update footer
            $(api.column(3).footer()).html('รวม : ' + pageTotal + ' / ทั้งหมด :' + total + ' ');
        },
    });
});

  </script>


</body>
</html>