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
		<DIV id="main_menu">
        <UL>
        <LI class="topmenuli"><A class="menulink" HERF="#">APPLE</A>
				<UL class="submenu">
					<LI><A class="sub" HREF='#'>Phone</A></LI>
                    <LI><A class="sub" HREF='#'>Speaker</A></LI>
                    <LI><A class="sub" HREF='#'>Watch</A></LI>
				</UL>
				</LI>
			</UL>
    <UL>
				<LI class="topmenuli"><A class="menulink" HERF="#">MICROSOFT</A>
				<UL class="submenu">
					<LI><A class="sub" HREF='#'>Phone</A></LI>
					<LI><A class="sub" HREF='#'>Headphone</A></LI>
				</UL>
				</LI>
</UL>
                <UL>
				<A HREF="index.php"><IMG id="logo" SRC="./42_logo_white.png"></A>
				<LI class="topmenuli"><A class="menulink" HERF="#">GAMING</A>
				<UL class="submenu">
					<LI><A class="sub" HREF='#'>VR Set</A></LI>
					<LI><A class="sub" HREF='#'>PLAYSTATION</A></LI>
				</UL>
				</LI>
			</UL>
</UL>

        </DIV>
        <div class="rightnav">
		<TABLE >
<TR><TH><TD>
		<DIV class="hi"><A <?php if ($_SESSION['logged_on_user'] == "") {echo "HREF='login.html'";}?>><?php if ($_SESSION['logged_on_user']) {echo ("Hi, <A HREF='account.php'>".$_SESSION['logged_on_user']."</A>");} else {echo "Guest";} ?></TD></TH>
<TH><TD>
		<A class="logout" href="logout.php"><IMG class="logout" SRC="./logout.png"></A>
</TD><TH>
<TH><TD><A href="basket.php"><IMG class="basket" SRC="./basket.png"></A>
</TD></TH></TR>
</TABLE>
</div>    
    <div id="content">
            <h1 style= "font-family: "Times New Roman", Times, serif;"">Newest Tech Products</h1>
                <div class="title">
                    <!-- <h3>Our Most Popular Products</h3> -->
                </div>
                <div class="wrapper">
                <!-- <div class="Products"> -->
                    <div class="two">  <a href="#"> <img src="https://i.ytimg.com/vi/ei1L5FK2a4Y/maxresdefault.jpg" alt="Headphone" height="300" width="350">
                    </a><h3 class="h4">Headphone</h3>
                        <p class="reset">From $99.99</p><button class="button"><img src="https://cdn1.iconfinder.com/data/icons/commerce-banking-the-icons/32/cart-arrow-down-512.png" height= "30vw" width="40vw"></button>
                         </div>
                   <div class="one"><a href="#"> <img src="http://blog.reship.com/wp-content/uploads/2017/12/cool-gadgets-for-men-2018.jpg" alt="VR Set" height="300" width="350">
                   </a> <h3 class="h4">VR Set</h3>
                        <p class="reset">From $199.99</p><button class="button"><img src="https://cdn1.iconfinder.com/data/icons/commerce-banking-the-icons/32/cart-arrow-down-512.png" height= "30vw" width="40vw"></button>
                        </div> 
                    <div class="three"><a href="#"> <img src="http://media.idownloadblog.com/wp-content/uploads/2014/09/Apple-Watch-sport-home-screen-apps.jpg" alt="Apple Watch" height="300" width="350">
                    </a><h3 class="h4">Apple Watch</h3>
                    <p class="reset">From $299.99</p><button class="button"><img src="https://cdn1.iconfinder.com/data/icons/commerce-banking-the-icons/32/cart-arrow-down-512.png" height= "30vw" width="40vw"></button>
                    </div>
                    <div class="four"><a href="#"> <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ8Z6kTtKJy53zSHmneDW02GevDFWv_s_5qkPUhN336fQHBnc98eg" alt="Playstaion 4" height="300" width="350">
                    </a><h3 class="h4">Playstaion 4</h3>
                        <p class="reset">From $299.99</p><button class="button"><img src="https://cdn1.iconfinder.com/data/icons/commerce-banking-the-icons/32/cart-arrow-down-512.png" height= "30vw" width="40vw"></button>
                        </div>
                    <div class="five"><a href="#"> <img src="https://ae01.alicdn.com/kf/HTB12yBoIXXXXXX8XpXXq6xXFXXXQ/Portable-Wireless-Bluetooth-Mini-Speaker-for-Apple-iPhone-4s-5S-6-Android-Phoness-Black-White.jpg" alt="Wireless Speaker" height="300" width="350">
                    </a><h3 class="h4">Wireless Speaker</h3>
                        <p class="reset">From $109.99</p><button class="button"><img src="https://cdn1.iconfinder.com/data/icons/commerce-banking-the-icons/32/cart-arrow-down-512.png" height= "30vw" width="40vw"></button>
                        </div>
                    <div class="six"><a href="#"> <img src="https://i.amz.mshcdn.com/nGg1QxyWwEO1pue5UDvaLga73HQ=/fit-in/1440x0/https%3A%2F%2Fblueprint-api-production.s3.amazonaws.com%2Fuploads%2Fcard%2Fimage%2F636104%2F74371357-f257-4575-9f55-ba3e20cc5e69.jpg" alt="Iphone" height="300" width="350">
                    </a><h3 class="h4">Iphone X</h3>
                        <p class="reset">From $899.99</p><button class="button"><img src="https://cdn1.iconfinder.com/data/icons/commerce-banking-the-icons/32/cart-arrow-down-512.png" height= "30vw" width="40vw"></button>
                        </div>
                        
                    </div>
  
            </div>


</div>
	</BODY>
</HTML>
