<?php
error_reporting(0);
require_once("config.php");
$method_name = $conn->real_escape_string($_POST['method_name']);
if(isset($method_name))
{
	if($method_name=="insert_delivery_agent")
	{
		if((isset($_POST['name'])&& $_POST['name'] !='') && (isset($_POST['mobile'])&& $_POST['mobile'] !='') && (isset($_POST['address'])&& $_POST['address'] !=''))
		{
		$yourName = $conn->real_escape_string($_POST['name']);
		$yourMob = $conn->real_escape_string($_POST['mobile']);
		$yourAddress = $conn->real_escape_string($_POST['address']);
		$yourpan = $conn->real_escape_string($_POST['pan']);
		$youraadhar = $conn->real_escape_string($_POST['aadhar']);
		$yourtype = $conn->real_escape_string($_POST['type']);
		

		
		$sql="INSERT INTO delivery_agent (name,mobile,address,pan,aadhar,type) VALUES ('".$yourName."','".$yourMob."','".$yourAddress."','".$yourpan."','".$youraadhar."','".$yourtype."')";
		
		
		if(!$result = $conn->query($sql)){
		echo '{"status":"false","msg":"Something went Wrong '.mysqli_error($conn).'"}';
		}
		else
		{
		echo '{"status":"true","msg":"Indicates a successful or positive action"}';
		}
		}
		else
		{
		echo '{"status":"false","msg":"Something went Wrong"}';
		}
	}
	if($method_name=="insert_product")
	{
		if((isset($_POST['name'])&& $_POST['name'] !='') && (isset($_POST['unit'])&& $_POST['unit'] !='') && (isset($_POST['price'])&& $_POST['price'] !=''))
		{
		$name = $conn->real_escape_string($_POST['name']);
		$unit = $conn->real_escape_string($_POST['unit']);
		$price = $conn->real_escape_string($_POST['price']);
		
		if((isset($_POST['method_id'])&& $_POST['method_id'] !=''))
		{
		$sql="UPDATE products set name='$name',unit='$unit',price='$price' where id=$_POST[method_id]";
		}
		else
		{
		$sql="INSERT INTO products (name,unit,price) VALUES ('".$name."','".$unit."','".$price."')";
		}
		
		if(!$result = $conn->query($sql)){
		echo '{"status":"false","msg":"Something went Wrong '.mysqli_error($conn).'"}';
		}
		else
		{
		echo '{"status":"true","msg":"Indicates a successful or positive action"}';
		}
		}
		else
		{
		echo '{"status":"false","msg":"Something went Wrong"}';
		}
	}
	if($method_name=="select_products")
	{
	$sql="select id,name,unit,price from products";
		if(!$result = $conn->query($sql))
				{
				echo "
					<thead>
						<tr>
						  <th>Name</th>
						  <th>Unit</th>
						  <th>Price</th>
						  <th>Action</th>
						</tr>
					</thead>
				    <tfoot>
						<tr>
						  <th>Name</th>
						  <th>Unit</th>
						  <th>Price</th>
						  <th>Action</th>
						</tr>
					</tfoot>
				    <tbody></tbody>
                    ";
				}
				else
				{
					echo "
					<thead>
						<tr>
						  <th>Name</th>
						  <th>Unit</th>
						  <th>Price</th>
						  <th>Action</th>
						</tr>
					</thead>
				    <tfoot>
						<tr>
						 <th>Name</th>
						  <th>Unit</th>
						  <th>Price</th>
						  <th>Action</th>
						</tr>
					</tfoot>
				    <tbody>
					
                    ";
				  if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()) {
							echo "
							<tr>
							  <td>$row[name]</td>
							  <td>$row[unit]</td>
							  <td>$row[price]</td>
							  <td><a type='button' class='btn btn-primary' href='insert_product.php?id=$row[id]'>Edit</a></td>
							</tr>";
							
						}
					}
					else
					{
						echo '{"status":"false","msg":"Something went Wrong! Invalid Id"}';
					}
					
					echo "</tbody>";
				}
		
		
	}
	
	
	if($method_name=="load_product_byID")
	{
		$method = $conn->real_escape_string($_POST['method']);
		if(empty($method))
		{
		}
		else
		{
			$sql = "SELECT id,name,unit,price FROM products where id = $method";
				if(!$result = $conn->query($sql))
				{
				echo '{"status":"false","msg":"Something went Wrong"}';
				}
				else
				{
					if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()) {
							echo '{"status":"true","msg":"Indicates a successful or positive action","name":"'.$row["name"].'","unit":"'.$row["unit"].
							'","price":"'.$row["price"].'"}';
						}
					}
					else
					{
						echo '{"status":"false","msg":"Something went Wrong! Invalid Id"}';
					}
					
				}
		
		}
	}
	
}
?>