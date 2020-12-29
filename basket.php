<?php

$pagename="Your Cart"; 
include("sui.php");
echo "<link rel=stylesheet type=text/css href=basket.css>"; 
echo "<title>".$pagename."</title>"; 
echo "<body>";
include ("header1.php"); 
echo "<div class='head'><h2>".$pagename."</h2></div>";

if (ISSET($_POST['rem_prodId']))
{
	$delprodid=$_POST['rem_prodId'];
	// echo $delprodid;
	unset($_SESSION['basket'][$delprodid]);
	echo "1 item removed from the basket";
}


if(ISSET($_POST['h_prodid']))
{
	echo "<div class='text'><p>1 item added to the basket</p></div>";
	$newprodid=$_POST['h_prodid'];
	$reququantity = $_POST['p_quantity'];
	
	//create a new cell in the basket session array. Index this cell with the new product id.
	//Inside the cell store the required product quantity
	$_SESSION['basket'][$newprodid]=$reququantity;

	
}
else
{
	// if (!(ISSET($_POST['rem_prodId'])))
	// {
		
	// }
}

echo "<div class='tbl'>
		<table style='border: 0px'>
		<tr>
		<th>Product Name</td>
		<th>price</td>
		<th>Quantity</td>
		<th>Sub total</td><td>&nbsp;</td></tr>
	  </div>"; 
	$total=0;

if(ISSET ($_SESSION['basket']))
{
	
	
	foreach ($_SESSION['basket'] as  $key => $value)
	{
		
		$SQL="select proId, prodName, prodPrice from products where proId=".$key;
		$exeSQL=mysqli_query($con, $SQL) or die (mysqli_error());
		
		
		$data=mysqli_fetch_array($exeSQL);
		echo "<tr>";
		echo "<td>".$data['prodName']."</td>";//display product name as contained in the array
		echo "<td>&#8377;".$data['prodPrice']."</td>";
		echo "<td>".$value."</td>";
		echo "<td>&#8377;".$value*$data['prodPrice']."</td>";

		echo "<td>
		<form action=basket.php method=POST>
			<input type=hidden name='rem_prodId' value=$key>
			<input type=submit value='Remove'>
		</form>
		</td>";

		$total = $total+( $value*$data['prodPrice']);
		echo "</tr>";
		
	}
	

		
	}
	
else
{
	echo "Empty basket";
}
echo "<tr>
			<th colspan=3 align='right'>Total</th>
			<th>&#8377;$total</th>
			<td>&nbsp;</td>
		</tr>";
echo "</table>";

echo "<div class='clr'><p><a href='clearbasket.php'>CLEAR BASKET</a></div>";
echo "<p></p>";
                            include "sui.php";
                            if (!isset($_SESSION["userid"])) {
					echo '
					
							<a href="login.php" class="btn btn-success">Log In</a></td>
								</tr>
							</tfoot>
				
							</table></div></div>';
                }else if(isset($_SESSION["userid"])){
					//Paypal checkout form
					echo "<div class='chk'><a href='checkout.php' class='btn btn-success'>CHECKOUT</a></div>";
				}
                                             


echo "</body>";
//include ("footer1.php"); //include head layout
?>
<html>
<style>
	.text
	{
		font-family: 'Alegreya Sans SC', sans-serif;
		position: relative;
		left: 500px;
		top: 80px;
	}

	.tbl 
	{
		position: relative;
		left: 500px;
		top: 80px;
	}

	.clr 
	{
		font-family: 'Alegreya Sans SC', sans-serif;
		position: relative;
		left: 460px;
		top: 20px;
	}

	.chk 
	{
		font-family: 'Alegreya Sans SC', sans-serif;
		position: relative;
		left: 460px;
		top: 20px;
	}

	.head h2 
	{
		position: relative;
		left: 500px;
		top: 80px;
	}
</style>
</html>
