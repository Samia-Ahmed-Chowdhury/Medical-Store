<?php
include"../connection.php"; 
if(isset($_POST['id'])){
$id=$_POST['id'];
mysqli_query($link,"delete from sale_record where id='$id'");}

?>


