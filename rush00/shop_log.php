<?php
session_start();
?>
<HTML>
	<HEAD>
		<META charset="UTF-8">
		<LINK rel="stylesheet" type="text/css" href="main.css">
		<TITLE>RUSH00</TITLE>
	</HEAD>
	<BODY bgcolor="black">
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
		<A HREF="ft_minishop.html"><IMG id="logo" SRC="./42_logo_white.png"></A>
		<NAV id="topmenu">
			<UL>
				<LI class="topmenuli"><A class="menulink" HERF="#">MENU</A>
				<UL class="submenu">
					<LI><A class="sub" HREF='#'>1</A></LI>
					<LI><A class="sub" HREF='#'>1</A></LI>
				</UL>
				</LI>
				<LI class="topmenuli"><A class="menulink" HERF="#"></A>
				<UL class="submenu">
					<LI><A class="sub" HREF='#'>1</A></LI>
					<LI><A class="sub" HREF='#'>1</A></LI>
				</UL>
				</LI>
				<LI class="topmenuli"><A class="menulink" HERF="#">MENU</A>
				<UL class="submenu">
					<LI><A class="sub" HREF='#'>1</A></LI>
					<LI><A class="sub" HREF='#'>1</A></LI>
				</UL>
				</LI>
				<LI class="topmenuli"><A class="menulink" HERF="#">MENU</A>
				<UL class="submenu">
					<LI><A class="sub" HREF='#'>1</A></LI>
					<LI><A class="sub" HREF='#'>1</A></LI>
				</UL>
			</LI>
			</UL>
	</BODY>
</HTML>
