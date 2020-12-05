<html>

<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="card container" style="width: 50rem; margin-top: 30px;">
		<label class="">Customer Name</label><input type="text" class="form-control py-2" name="" id="customer" onkeyup="customer()"><br><br>
		<label class="">Product Amount</label>
		<input type="number" class="form-control py-2" name="" id="product" onkeyup="product()">
		<br>
		<div>
			<h6 id="customerName"></h6>
			<p id="date" style="float: right;"></p>
			<p id="month" style="float: right;"></p>
		</div><br>
		<table id="table" class="table table-border table-strip">
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
		<h4 id="productName"></h4>
		<h4 id="total"></h4>
    </div>
	<script>
		
		var rate1;
		var quantity1;
		
		//this section generate table with product amounts
		function product() {
			document.getElementById('table').style.display = 'block';
			document.getElementById('th').innerHTML = "<th> Product</th><th> Rate </th><th> Quantity </th><th> Price </th></tr>";
			for (var i = 0; i < parseInt(document.getElementById("product").value); i++) {
				var current = document.getElementById('row').innerHTML;
				current += "<tr><td><select class='mySelect' onchange='myFunction()'>\
                <option value='rice'>Rice</option><option value='milk'>Milk</option><option value='egg'>Egg</option><option value='oil'>Oil</option>\
                </select></td>\
				<td class='rate_col'><input type='number' class='rate' id='' onkeyup='result(this)'></td>\
				<td class='qty_col'><input type='number' class='quantity' id=''onkeyup='result1(this)'></td>\
				<td class='price'> 00.00 </td>";
				document.getElementById('row').innerHTML = current;
			}
		}
        var totalPrice=0;
		function result(rate) {
			rate1 = parseFloat(rate.value);
			var teha = 0;
			var quantity_col = rate.parentNode.parentNode.children[2].children[0].value;
			var qty = parseFloat(quantity_col);
			//var price_col = document.getElementById("qview").innerHTML=price_col2; 
			var pr = parseFloat(rate1 * qty).toFixed(2);
			if(isNaN(pr))
            {
                rate.parentNode.parentNode.children[3].innerHTML = "0.00";
            }
            else
            {
                rate.parentNode.parentNode.children[3].innerHTML = pr;
				var sum=0;
		   Object.values(document.getElementsByClassName("price")).forEach(function(item,index){

            sum+= parseFloat(item.innerHTML);
		   });
           document.getElementById("total").innerHTML=sum.toFixed(2);
            }
        //     var total_col= rate.parentNode.parentNode.children[3].innerHTML;
        //    // console.log(total_col);
        //     var total=0;
        //     total=total_col + total;
        //     for(var i=0;i < pars(document.getElementById("product").value); i++)
        //     {
        //     
        //     } 
           

			
		}
		//console.log("Total = "+totalPrice);
		function result1(quantity) {
			qty = parseFloat(quantity.value);
			var rate_col =quantity.parentNode.parentNode.children[1].children[0].value;
			var rate_col2 = parseFloat(rate_col);
            var price_col = quantity.parentNode.parentNode.children[3].innerHTML = parseFloat(rate_col2 * qty).toFixed(2);
            var pr = parseFloat(rate_col2 * qty).toFixed(2);
            if(isNaN(pr))
            {
                quantity.parentNode.parentNode.children[3].innerHTML = "00.00";
            }
            else
            {
                quantity.parentNode.parentNode.children[3].innerHTML = pr;
            }
            var total_col= quantity.parentNode.parentNode.children[3].innerHTML;
            document.getElementById("total").innerHTML=total_col;
		}
		// 	document.getElementById("tax").innerHTML = "Include 5% tax " + tax;
		// 	document.getElementById("payment").innerHTML = "Amount to be paid " + payment;
		// }
		function customer() {
			var d = new Date();
			var customer = document.getElementById('customer').value;
			document.getElementById("customerName").innerHTML = "<b>Customer Name is: <b>" + customer;
		}
        function myFunction() {
         var x = document.getElementsByClassName("mySelect").value;
         document.getElementsByClassName("mySelect").innerHTML = x;
        }
        
	</script>
</body>
</html>