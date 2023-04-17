<?php
session_start();
unset($_SESSION["email"]);
session_destroy();
echo "<h3 align='center' style='color:green;'>Logout Successfully.</h3>";
header('refresh:2,index.php');


?>