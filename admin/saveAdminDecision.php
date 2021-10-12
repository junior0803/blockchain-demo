<?php
    include "./config/data.php";
    
    $user_id = $_POST['user_id'];
    $admin_decision = $_POST['decision'];
    // $googleAuthEmail = $_POST['googleAuthEmail'];
    $sql = "UPDATE tbl_login SET admin_decision = " . $admin_decision . " WHERE id = " . $user_id;
    $result = $conn->query($sql);
    echo $result;

?>