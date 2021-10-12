<?php
    include "./config/data.php";
    // include "../custom/db.php";
    
    $user_id = $_POST['user_id'];
    $final_decision = $_POST['decision'];
    if($final_decision == 3){
        $sql = "UPDATE tbl_login SET admin_decision = 2, final_decision = " . $final_decision . " WHERE id = " . $user_id;
        $result = $conn->query($sql);
    }else if($final_decision == 4){
        $sql = "UPDATE tbl_login SET admin_decision = 3, final_decision = " . $final_decision . " WHERE id = " . $user_id;
        $result = $conn->query($sql);
    }else if($final_decision == 5){
        $sql = "UPDATE tbl_login SET admin_decision = 4, final_decision = " . $final_decision . " WHERE id = " . $user_id;
        $result = $conn->query($sql);
    }else{
        // $googleAuthEmail = $_POST['googleAuthEmail'];
        $sql = "UPDATE tbl_login SET final_decision = " . $final_decision . " WHERE id = " . $user_id;
        $result = $conn->query($sql);
    }
    echo $result;

?>