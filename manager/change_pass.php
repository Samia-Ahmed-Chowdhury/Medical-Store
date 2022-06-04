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
$id=$_GET["id"];
  $res=mysqli_query($link,"select * from registration where id=$id") ; 
     while($row=mysqli_fetch_array($res)){
      $username=$row["username"];
      $password=$row["password"];
     }?>
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

 <style>
body{
background-image: url(../i/background.png);
}
</style>

<div class="error-pagewrap">
            
            
            <div class="error-page-int">
                <div class="text-center m-b-md custom-login" >
                    <h3 style="color:#B4CAE7;margin-top: 120px;">Update Pass</h3>
                </div><center>
                <div class="content-error" >
                    <div class="hpanel">
                        <div class="panel-body"style="background-color:#BCDDFC;width: 400px;margin-top: 50px;">
                            <form action="" name="form1" method="post">
                                <div class="form-group">
                                    
                                    <label class="control-label" for="username">Username</label>
                                    <input type="text"  value="<?php echo  $username; ?> " name="username" id="username" class="form-control">
                                    <label class="control-label" for="password">Password</label>
                                    <input type="text" value="<?php echo  $password; ?> " name="password" id="password" class="form-control">
                            
                                        <input type="submit" name="submit1" value="Update PassWord" class="btn btn-success"onclick=" return confirm('Updated Suceesfuuly..(^_^) ')";
></div></form>
                        
                                
                            </div>
                        </div>
                    </div>
               
            
            </center>
            

        <?php
if(isset($_POST["submit1"]))
    {
    mysqli_query($link,"update registration set password='$_POST[password]' where id=$id")or die(mysqli_error($link));
        ?>
    <script type="text/javascript">

   window.location="manager_home.php";
    </script>
    <?php
  }
       
    ?>


