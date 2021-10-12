<?php
session_start();
session_destroy();
include "control.php";
echo '<html><head><meta http-equiv="refresh" content="0;URL='.$out_url.'" /></head><body></body></html>';
die();
?>