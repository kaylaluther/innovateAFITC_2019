<?php
include 'DBconnect.php';

$conn = OpenCon();

echo "Connected Successfully";

CloseCon($conn);

?>
