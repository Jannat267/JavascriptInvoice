<html>

<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
	<div class="card container" style="width: 40rem; margin-top: 30px;">
		<label class="">Customer Name</label><input type="text" class="form-control py-2" name="" id="customer" onkeyup="customer()"><br><br>
		<label class="">Product Amount</label><input type="number" class="form-control py-2" name="" id="product" onkeyup="product()">
		<br>
		<div>
			<h6 id="customerName"></h6>
			<p id="date" style="float: right;"></p>
			<p id="month" style="float: right;"></p>
		</div><br>
		<table  id="table" style="display: none; width: 30.5rem; border:solid 1px;">
			<thead>
				<tr id="th">
			</thead>
			<tbody id="row">

			</tbody>
		</table>

		<br><br><br>
		<h4 id="p"></h4>
		<h4 id="q"></h4>
		<h4 id="t"></h4>
		<h4 id="r"></h4>
		<h4 id="global"></h4>
	</div>
	<script>
		var x="";
		function product() {
			var i;
			var j = document.getElementById("product").value;
			document.getElementById('table').style.display = 'block';
			document.getElementById('th').innerHTML = "<th> Product</th><th> Rate </th><th> Quantity </th><th> Price </th></tr>";
			for (i = 0; i < j; i++) {
				var current = document.getElementById('row').innerHTML;

				current += "<tr><td><select name='select' id='' class='name' onclick='nameArray(this.value)'><option>Select a Option</option></select></td>\
				<td><input type='number'class='rate' id='' onkeyup='result(this.value)'></td>\
				<td><input type='number' class='quantity' id=''onkeyup='result1(this.value)'></td>\
				<td class='o' id=''></td></tr>";
				document.getElementById('row').innerHTML = current;
			} //}  


			//function isFloat(x) {
			//return !!(x % 1); }

		}
		function result(rate) {
			
			var j = document.getElementById("product").value;
			var quantity;
			//var rate = document.getElementsByClassName('rate').value;

			//var a = document.getElementsByClassName('quantity');
			//quantity = a.value ? a.value : 1;
     
			/*if(y<=0||b<=0) {
        alert("Price/Quantity can not be 0 or less");
        }
        else{}*/
			document.getElementById("t").innerHTML = "Price rate is " + rate;
			
			var c = rate * quantity;
			var price = c.toFixed(2);
			var t = price * (5 / 100);
			var tax = t.toFixed(2);
			var payment = parseFloat(tax) + parseFloat(price);
			//for (var i = 0; i <j; i++) {
			document.getElementById("o").innerHTML = price;

			//}
			document.getElementById("p").innerHTML = "Include 5% tax " + tax;
			document.getElementById("q").innerHTML = "Amount to be paid " + payment;
			return rate
		}
        function result1(y){
			document.getElementById("r").innerHTML = "Quantity is " + y;
		}
		function nameArray() {
			var name1 = ["Egg", "Rice", "Milk"];
			var i;
			for(i=0; i<name1.length; i++){

				var current = document.getElementById("prd").innerHTML;
				current += "<option value='" + name1[i] + "'>" + name1[i] + "</option>";
				document.getElementById('prd').innerHTML = current;
				
			}
		}

		function customer() {
			var d = new Date();
			var customer = document.getElementById('customer').value;
			document.getElementById("customerName").innerHTML = "<b>Customer Name is: <b>" + customer;
			//document.getElementById("date").innerHTML =d.getDate();
			//document.getElementById("month").innerHTML =d.getMonth();

		}
		document.getElementById("global").innerHTML = " Global Price rate is " + rate;
		console.log(rate);
        
	</script>

</body>

</html>