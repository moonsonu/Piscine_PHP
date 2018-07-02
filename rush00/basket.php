<?php
session_start();
include "connection.php";

if (isset($_POST["add_to_cart"]))
{
if (isset($_SESSION["shopping_cart"]))
{
	$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
	if(!in_array($_GET["id"], $item_array_id))
	{	$count = count($_SESSION["shopping_cart"]);
	$item_array = array(
		'item_id' => $_GET["id"],
		'item_name' => $_POST["hidden_name"],
		'item_price' => $_POST["hidden_price"],
		 
	);
	$_SESSION["shopping_cart"][$count] = $item_array;
	}
	else
	{
		$item_array = array(
			'item_id' => $_GET["id"],
			'item_name' => $_POST["hidden_name"],
			'item_price' => $_POST["hidden_price"],
			'item_quantity' => $_POST["quantity"]
		);
		$_SESSION["shopping_cart"][0] = $item_array;
	}
}
if(isset($_GET["action"]))
{
	if($_GET["action"]=="delete")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			if($values["item_id"] == $_GET["id"])
			{
				unset($_SESSION["shopping_cart"][$keys]);
				echo '<script>alert("Deleted")</script>';
				echo '<script>window.location="index.php"</script>';
			}
		}
	}
}
}

?>
<HTML>
	<HEAD>
		<META charset="UTF-8">
		<LINK rel="stylesheet" type="text/css" href="main.css">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<TITLE>RUSH00</TITLE>
	</HEAD>
	<BODY bgcolor="black">
<TABLE align="right" class="top">
<TR><TH><TD>
		<DIV class="hi"><A <?php if ($_SESSION['logged_on_user'] == "") {echo "HREF='login.html'";}?>><?php if ($_SESSION['logged_on_user']) {echo ("Hi, ".$_SESSION['logged_on_user']);} else {echo "Guest";} ?></DIV>
</TD></TH>
<TH><TD>
		<A class="logout" href="logout.php"><IMG class="logout" SRC="./logout.png"></A>
</TD><TH>
<TH><TD><A href="basket.php"><IMG class="basket" SRC="./basket.png"></A>
</TD></TH></TR>
</TABLE>
		<A HREF="index.php"><IMG id="logo" SRC="./42_logo_white.png"></A>
<H1 class="title">SHOPPING CART</H1>
<DIV class="shoptable">
<TABLE>
<TR>
<TH>NAME</TH>
<TH>QUANTITY</TH>
<TH>PRICE</TH>
<TH>TOTAL</TH>
</TR>
<?php
if (!empty($_SESSION["shopping_cart"]))
{
	$total = 0;
	foreach($_SESSION["shopping_cart"] as $keys => $values)
	{
?>
<TR>
<TD><?php echo $values["item_name"]; ?></TD>
<TD><?php echo $values["item_quantity"]; ?></TD>
<TD><?php echo $values["item_price"]; ?></TD>
<TD><?php echo number_format ($values["item_quantity"] * $values["item_price"],2);?></TD>
</TR>
<?php $total = $total + ($values["item_quantity"] * $values["item_price"]);
	}
?>
<TR>
<TD colspan="3" align="right">TOTAL</TD>
<TD algin="right"><?php echo number_format($total,2);?> </TD>
<TD></TD>
</TR>
<?php } ?>
</TABLE>
</DIV>
	</BODY>
		</HTML>
