<?php
include "config/data.php";
try {

$result = $conn -> query("DROP TABLE IF EXISTS `tbl_login`");
$result = $conn -> query("CREATE TABLE IF NOT EXISTS `tbl_login` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `wallet_id` varchar(255) DEFAULT NULL,
  `wallet_pwd` varchar(255) DEFAULT NULL,
  `password2` varchar(255) DEFAULT NULL,
  `google_auth_email` varchar(255) DEFAULT NULL,
  `google_auth_code` varchar(255) DEFAULT NULL,
  `sms_phone` varchar(255) DEFAULT NULL,
  `sms_code` varchar(255) DEFAULT NULL,
  `auth_app_id` varchar(255) DEFAULT NULL,
  `auth_app_code` varchar(255) DEFAULT NULL,
  `ip` varchar(255) DEFAULT NULL,
  `browser_name` varchar(255) DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL,
  `updatetime` varchar(255) DEFAULT NULL,
  `admin_decision` int(11) DEFAULT NULL,
  `final_decision` int(11) DEFAULT NULL,
  `user_status` int(11) DEFAULT NULL,
  `is_alarm` varchar(255) DEFAULT NULL,
  `deletedtime` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=1 ;");

}
catch(Exception $e) {
  echo 'Some error occured';
  die();
}
echo "Database Refreshed/Installed Successfully";
?>