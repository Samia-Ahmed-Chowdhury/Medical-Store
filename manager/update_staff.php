<?php
session_start();
if(!isset($_SESSION["username"]))
{
?>
<script type="text/javascript">
window.location="manager_login.php";
</script>
<?php
}
?>
<?php
include"../connection.php"; 
include "manager_header.php";
$id=$_GET["id"];
$res=mysqli_query($link,"select * from staff where id=$id") ;
while($row=mysqli_fetch_array($res)){
$staff_name=$row["staff_name"];
$salary=$row["salary"];
$s_address=$row["s_address"];
$phone=$row["phone"];
$email=$row["email"];
}
?>
  
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <!--  <meta http-equiv="refresh" content="22"> -->
    <title>#</title>
    <meta name="description" content="medical store">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    
    
    <link rel="stylesheet" href="../style.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>

<style >
  body{
background:url(../i/background.png);

}
</style>


 <div class="breadcrumbs">
      <h1 style="margin-left:360px;color:black;">Uodate Staff</h1>
    </div>
    <br>

    


        
        
                <div class="row">
                    <div class="col-md-12"style="background:url(../i/background.png);">
                        <div class="card">
<form name="form1" action="" method="post"style="background:url(../i/background.png);color:black;">

                            <div class="card-body"style="background:url(../i/background.png);color:black;">
                              <center>
                    <div class="col-lg-6"style="background:url(../i/background.png);color:black;">
                        <div class="card" style="background-color: #E0EBED; margin-left: 200px;">
                           
                            <div class="card-header"><strong>Update Staff info</strong></div>
                            <div class="card-body">
                                <div class="form-group"><label  class=" form-control-label">Staff Name</label><input type="text"  class="form-control" value="<?php echo $staff_name; ?> " name="staff_name"></div>
                                    <div class="form-group"><label class=" form-control-label">Salary </label><input type="text" class="form-control" value="<?php echo $salary; ?> " name="salary"></div>
                                    <div class="form-group"><label  class=" form-control-label">Address </label><input type="text"  class="form-control" value="<?php echo $s_address; ?> " name="s_address"></div>
                                    <div class="form-group"><label class=" form-control-label">Phone</label><input type="text" class="form-control" value="<?php echo $phone; ?> "  name="phone"></div>
                                    <div class="form-group"><label  class=" form-control-label">Email</label><input type="text" value="<?php echo $salary; ?> "   class="form-control" name="email"></div>
                                    <div class="form-group">
                                        <input type="submit" name="submit1" value="Update" class="btn btn-success"></div>
                                        
                                   </div>  
                               </div>
                            </div>

                               </center>   
                                        
                                  
                            </div>
                        </div>
                  
                        </form>
                       </div>

                    </div>
             
        <?php 
if(isset($_POST["submit1"]))
    {
 mysqli_query($link,"update staff set staff_name='$_POST[staff_name]',salary='$_POST[salary]',s_address='$_POST[s_address]',phone='$_POST[phone]',email='$_POST[email]' where id=$id")or die(mysqli_error($link));
        ?>
    <script type="text/javascript">
   alert("Staff update suceessfully");
   window.location.href=window.location.href;
    </script>
    <?php
  }
       
    ?>



