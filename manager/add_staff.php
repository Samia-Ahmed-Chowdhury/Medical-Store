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
include "manager_header.php"?>
  
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
      <h1 style="margin-left:360px;color:black;">Add Staff</h1>
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
                           
                            <div class="card-header"><strong>Add Staff</strong></div>
                            <div class="card-body">
                                <div class="form-group"><label for="company" class=" form-control-label">Staff Name</label><input type="text" id="company" placeholder="Enter Staffname" class="form-control" name="staff_name"></div>
                                    <div class="form-group"><label for="vat" class=" form-control-label">Salary </label><input type="text" id="vat" placeholder="Enter Staff salary " class="form-control" name="salary"></div>
                                    <div class="form-group"><label for="vat" class=" form-control-label">Address </label><input type="text" id="vat" placeholder="Enter Staff address " class="form-control" name="s_address"></div>
                                    <div class="form-group"><label for="vat" class=" form-control-label">Phone</label><input type="text" id="vat" placeholder="Enter Staff phone number " class="form-control" name="phone"></div>
                                    <div class="form-group"><label for="vat" class=" form-control-label">Email</label><input type="text" id="vat" placeholder="Enter staff Email " class="form-control" name="email"></div>
                                    <div class="form-group">
                                        <input type="submit" name="submit1" value="Add Staff" class="btn btn-success"></div>
                                        
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
    mysqli_query($link,"insert into staff values(NULL,'$_POST[staff_name]','$_POST[salary]','$_POST[s_address]','$_POST[phone]','$_POST[email]')")or die(mysqli_error($link));
        ?>
    <script type="text/javascript">
   alert("Staff added suceessfully");
   window.location.href=window.location.href;
    </script>
    <?php
  }
       
    ?>



