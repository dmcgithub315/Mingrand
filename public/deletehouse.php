<?php
$connect = new PDO("mysql:host=127.0.0.1;dbname=mingrand;charset=utf8",
"root", "");
$id = $_GET['id'];
$sqlQuery = "DELETE FROM `house` WHERE id = {$id}";
$stmt = $connect -> prepare($sqlQuery);
$stmt->execute();
echo "Delete house successfully. <a href='/mingrand/public/ownerhouse.php'>Check your house</a>";

?>