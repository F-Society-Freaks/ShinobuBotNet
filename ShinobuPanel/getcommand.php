<?php
include 'classes/sql.php';
$id = $_GET['id'];

$sql = 'SELECT * FROM command WHERE id_user="'.$id.'"';

$result = mysqli_query($link, $sql);
while ($row = mysqli_fetch_array($result)) {
	print($row['commandType'].'{split}'.$row['commandContent']);
}


?>