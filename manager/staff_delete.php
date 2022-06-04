<?php
include"../connection.php"; 
$id=$_GET["id"];
mysqli_query($link,"delete from staff where id=$id");
?>
<script type="text/javascript">
window.location="staff_list.php";
</script>