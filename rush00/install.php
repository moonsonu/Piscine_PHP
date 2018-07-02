<?php

$servername = "localhost";
$username = "root";
$passwd = "root";

$conn = mysqli_connect($servername, $username, $passwd);

$sql = "CREATE DATABASE IF NOT EXISTS minishop";
mysqli_query($conn, $sql);
mysqli_select_db($conn, "minishop");

$tb1 = "CREATE TABLE IF NOT EXISTS product (
	name VARCHAR(15),
price FLOAT(8,2),
img TEXT
)";
mysqli_query($conn, $tb1);

$db = mysqli_query($conn, "SELECT * FROM product");
if (mysqli_num_rows($db) == 0)
{
	$insert = "INSERT INTO product (name, price, img)
		VALUES ('Headphone', '99.99', 'https://i.ytimg.com/vi/ei1L5FK2a4Y/maxresdefault.jpg');";
	$insert .= "INSERT INTO product (name, price, img)
		VALUES ('VR Set', '199.99', 'http://blog.reship.com/wp-content/uploads/2017/12/cool-gadgets-for-men-2018.jpg');";
	$insert .= "INSERT INTO product (name, price, img)
		VALUES ('Apple Watch', '299.99', 'http://media.idownloadblog.com/wp-content/uploads/2014/09/Apple-Watch-sport-home-screen-apps.jpg');";
	$insert .= "INSERT INTO product (name, price, img)
		VALUES ('Playstaion 4', '299.99', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ8Z6kTtKJy53zSHmneDW02GevDFWv_s_5qkPUhN336fQHBnc98eg');";
	$insert .= "INSERT INTO product (name, price, img)
		VALUES ('Wireless Speaker', '109.99', 'https://ae01.alicdn.com/kf/HTB12yBoIXXXXXX8XpXXq6xXFXXXQ/Portable-Wireless-Bluetooth-Mini-Speaker-for-Apple-iPhone-4s-5S-6-Android-Phoness-Black-White.jpg');";
	$insert .= "INSERT INTO product (name, price, img)
		VALUES ('Lumia', '399.99', 'https://www.stuff.tv/sites/stuff.tv/files/brands/Microsoft/Lumia_640XL/940-xl-3.jpg');";
	$insert .= "INSERT INTO product (name, price, img)
		VALUES ('Ipad', '399.99', 'https://cdn.vox-cdn.com/thumbor/ruBAVoBuMxAzQXxf4pzu98zdIzs=/0x0:2040x1362/1200x800/filters:focal(845x574:1171x900)/cdn.vox-cdn.com/uploads/chorus_image/image/55465153/tpina_170615_1781_0024.0.jpg');";
	$insert .= "INSERT INTO product (name, price, img)
		VALUES ('Surface', '499.99', 'https://cdn1.iconfinder.com/data/icons/commerce-banking-the-icons/32/cart-arrow-down-512.png');";
	$insert .= "INSERT INTO product (name, price, img)
		VALUES ('Iphone X', '899.99', 'https://i.amz.mshcdn.com/nGg1QxyWwEO1pue5UDvaLga73HQ=/fit-in/1440x0/https%3A%2F%2Fblueprint-api-production.s3.amazonaws.com%2Fuploads%2Fcard%2Fimage%2F636104%2F74371357-f257-4575-9f55-ba3e20cc5e69.jpg')";
mysqli_multi_query($conn, $insert);
}
mysqli_close($conn);
?>

