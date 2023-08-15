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
        header("Location: insert2.php"); // Redirect to a success page
        exit; // Important to exit after redirect
    } else {
        echo "<script> alert('ตั้งสติคะ ไม่บันทึก');</script>";
    }
}
else {
        
       
echo "<script> alert('ใส่เลขได้แค่ 2,4,5 ตัว');</script>";
    }
}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet"  href="main.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
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


		<div class="container">
  		<h1 class="mt-5" style="font-weight: 700; color:white;">INPUT4-5</h1>

	<!-- hide -->



		<hr>
			<form action="insert2.php" method="post">

  			<div class="mt-3"></div>
    <div class="input-group mb-3">
<!-- <input type="number" name="name"><br> -->
 <select type="select" class="form-control"  name="name" value = ""  aria-label="ชื่อลูกค้า" required>
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


 

<input type="number" class="form-control" name="number45" aria-label="เลข" placeholder="เลข" value = "" required>


    
        <input type="number" class="form-control"  aria-label="ราคา"  name="Price" placeholder="ราคา" value = ""  required>
    
 
        <button type="submit" name="insert" class="btn btn-primary ">add</button>
    

</div>
 </form>



	<div class="container">
		<hr>
  	
  	<table id="mytable" class="table table-bordered table-striped ">
  	
  	<thead>
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
  				
  				<td><a href="delete2.php?del=<?php echo $row['id'];?>" class="btn btn-danger">delete</a></td> 
  				
  			</tr>



  			<?php
				}

  			?>
  		</tbody>
       <tfoot>
    <tr>
         <th colspan="3" style="text-align:right">รวม </th>
         <th></th>
        </tr>
    </tfoot>

  	</table>



</div><br>
<!-- 

<script>
 

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
 

  console.log(inputDigits); 

    combinationx = []; // Reset combinationx array for each input
    
    for (var i = 0; i < inputDigits.length; i++) {
      for (var j = 0; j < inputDigits.length; j++) {
        for (var k = 0; k < inputDigits.length; k++) {
          if (i !== j && i !== k && j !== k) {
            var combination = {
              digits: inputDigits[i]  + inputDigits[j] + inputDigits[k],
            };
            share = Math.floor(parseInt(amount[x]) / 24)+1;
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
 

  console.log(inputDigits5); 

    combinationx5 = []; // Reset combinationx array for each input
    
    for (var i = 0; i < inputDigits5.length; i++) {
      for (var j = 0; j < inputDigits5.length; j++) {
        for (var k = 0; k < inputDigits5.length; k++) {
          if (i !== j && i !== k && j !== k) {
            let combination = {
              digits: inputDigits5[i]  + inputDigits5[j] + inputDigits5[k],
            };
            share5 = Math.floor(parseInt(amount5[x]) / 60);
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
}
const data45 = document.getElementById('combinationsOutputall45').innerHTML;
console.log(data45); 

</script> -->
</div>

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