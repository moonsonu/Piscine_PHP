<?php
session_start();
include "connection.php";
?>
<HTML>
	<HEAD>
		<META charset="UTF-8">
		<LINK rel="stylesheet" type="text/css" href="main.css">
		<TITLE>RUSH00</TITLE>
	</HEAD>
	<BODY bgcolor="white">
<TABLE align="right" class="top">
<TR><TH><TD>
		<DIV class="hi">Hi, <?php echo ($_SESSION['logged_on_user']); ?></DIV>
</TD></TH>
<TH><TD>
		<A class="logout" href="logout.php"><IMG class="logout" SRC="./logout.png"></A>
</TD><TH>
<TH><TD><A href="basket.php"><IMG class="basket" SRC="./basket.png"></A>
</TD></TH></TR>
</TABLE>
		<A HREF="index.php"><IMG id="logo" SRC="./42_logo_white.png"></A>
		<NAV id="topmenu">
			<UL>
				<LI class="topmenuli"><A class="menulink" HERF="#">GAMES</A>
				<UL class="submenu">
					<LI><A class="sub" HREF='#'>VR</A></LI>
					<LI><A class="sub" HREF='#'>PLAYSTATION</A></LI>
				</UL>
				</LI>
				<LI class="topmenuli"><A class="menulink" HERF="#">MICROSOFT</A>
				<UL class="submenu">
					<LI><A class="sub" HREF='#'>LABTOP</A></LI>
					<LI><A class="sub" HREF='#'>ACCESSARIES</A></LI>
				</UL>
				</LI>
				<LI class="topmenuli"><A class="menulink" HERF="#">APPLE</A>
				<UL class="submenu">
					<LI><A class="sub" HREF='#'>PHONE</A></LI>
					<LI><A class="sub" HREF='#'>LABTOP</A></LI>
				</UL>
				</LI>
			</UL>
<table>
		<caption>Sales Data of Electronic Division</caption>
		<thead>
			<tr>
				<th>NO</th>
				<th>CUSTOMER</th>
				<th>ITEM</th>
				<th>DATE</th>
				<th>AMOUNT</th>
			</tr>
		</thead>
		<tbody>
		<?php
	$total 	= 0;
	$sql = "SELECT * FROM `product`";
	$db = mysqli_query($conn, $sql);
	while ($row = mysqli_fetch_assoc($db))
		{
?>
			<tr>
			<td><?php echo ($row['name']);?></td>
			<td><?php echo ($row['price']);?></td>
					<td><img src="<?php echo ($row['img']); ?>"</td>
			</tr>
<?php
		}?>
		</tbody>
	</table>
	</BODY>
</HTML>
