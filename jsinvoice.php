<html>

<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
	<div class="card container" style="width: 40rem; margin-top: 30px;">
		<label class="">Customer Name</label><input type="text" class="form-control py-2" name="" id="customer" onkeyup="customer()"><br><br>
		<label class="">Product Amount</label>
		<input type="number" class="form-control py-2" name="" id="product" onkeyup="product()">
		<br>
		<div>
			<h6 id="customerName"></h6>
			<p id="date" style="float: right;"></p>
			<p id="month" style="float: right;"></p>
		</div><br>
		<table id="table">
			<thead>
				<tr id="th"></tr>
			</thead>
			<tbody id="row">

			</tbody>
		</table>

		<br><br><br>
		<h4 id="tax"></h4>
		<h4 id="payment"></h4>
		<h4 id="rateview"></h4>
		<h4 id="qview"></h4>
		<h4 id="quantityview"></h4>
		<h4 id="price"></h4>
	</div>

	<script>
		
		var rate1;
		var quantity1;
		console.log("Column = "+column);
		//this section generate table with product amounts
		function product() {
			document.getElementById('table').style.display = 'block';
			document.getElementById('th').innerHTML = "<th> Product</th><th> Rate </th><th> Quantity </th><th> Price </th></tr>";

			for (var i = 0; i < parseInt(document.getElementById("product").value); i++) {
				var current = document.getElementById('row').innerHTML;
				current += "<tr><td><select name='select' id='' class='name' onclick='nameArray(this.value)'><option>Select a Option</option></select></td>\
				<td ><input type='number' class='rate' id='' onkeyup='result(this)'></td>\
				<td><input type='number' class='quantity' id=''onkeyup='result1(this)'></td>\
				<td class='price' id='' ></td>";
				document.getElementById('row').innerHTML = current;
			}
		}
        var totalPrice=0;
		function result(rate) {

			
			rate1 = parseFloat(rate.value);
			var teha = 0;
			var quantity_col = document.getElementById("rateview").innerHTML = rate.parentNode.parentNode.children[2].children[0].value;
			var qty = parseFloat(quantity_col);
			var price_col = document.getElementById("qview").innerHTML=price_col2; 
			var price_col2= rate.parentNode.parentNode.children[3].innerHTML = parseFloat(rate1 * qty);
			teha = rate1*qty;
			
			totalPrice = totalTeha(teha);
			
		}

		console.log("Total = "+totalPrice);

		function result1(rate) {
			rate1 = parseFloat(rate);
			var quantity_col = document.getElementById("rateview").innerHTML = rate.parentNode.parentNode.children[2].children[0].value;
			var qty = parseFloat(quantity_col);
			var price_col = document.getElementById("qview").innerHTML;
			var price_col2 = rate.parentNode.parentNode.children[3].innerHTML = parseFloat(rate1 * qty);

		}

		function totalTeha(teha){
			teha = teha + teha;
			return teha;
		}
		function price(rate, quantity) {

			var c = rate * quantity;

			var price = c.toFixed(2);
			var t = price * (5 / 100);
			var tax = t.toFixed(2);
			var payment = parseFloat(tax) + parseFloat(price);

			document.getElementById("price").innerHTML = price;


			document.getElementById("tax").innerHTML = "Include 5% tax " + tax;
			document.getElementById("payment").innerHTML = "Amount to be paid " + payment;

		}

		function nameArray() {
			var name1 = ["Egg", "Rice", "Milk"];
			var i;
			for (i = 0; i < name1.length; i++) {

				var current = document.getElementById("prd").innerHTML;
				current += "<option value='" + name1[i] + "'>" + name1[i] + "</option>";
				document.getElementById('prd').innerHTML = current;

			}
		}


		function customer() {
			var d = new Date();
			var customer = document.getElementById('customer').value;
			document.getElementById("customerName").innerHTML = "<b>Customer Name is: <b>" + customer;


		}
	</script>

</body>

</html>