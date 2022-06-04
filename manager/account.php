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
    include "../connection.php";
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

 <style>
body{
background-image: url(../i/background.png);
}
</style>

  
        <div class="breadcrumbs">
        <br> <h1 style="margin-left:400px;">Account List</h1>
  </div>
         
<br>       


        <br>
                        
                            <div class="card-body">
                             <table class="table table-bordered">
                                <tr>
                                  <th>(^_^) </th>
                                  <th>Fist Name</th> 
                                   <th>Last Name</th>
                                   <th>Username</th>
                                   <th>Password</th> 
                                   <th>Email</th>
                                   <th>contack</th>
                                    
                                    <th>Action</th> 
                                   </tr>
          <?php
          $count=0;
 $res=mysqli_query($link,"select * from registration order by id asc");
  while($row=mysqli_fetch_array($res)){
    $count=$count+1;
      
    echo"<tr>";
     echo"<td>";echo $count;echo "</td>";
    echo"<td>";echo $row["firstname"];echo "</td>";
    echo"<td>";echo $row["lastname"];echo"</td>";
     echo"<td>";echo $row["username"];echo"</td>";
      echo"<td>";echo $row["password"];echo"</td>";
       echo"<td>";echo $row["email"];echo"</td>";
echo"<td>";echo $row["contact"];echo"</td>";
?>
<td><a href="change_pass.php? id=<?php echo $row["id"];?>" style="color:#FF69B4;"><strong>Change Password</strong></a>||  
<a onclick="return confirm('Are U sure to Remove? ')" href="account_delete.php?id=<?php echo $row["id"];?>" style="color:#FF84A7;"><strong>Remove</strong></a> </td> 
 <?php

  echo"</tr>";
          }
              ?>
 </table>
                            
</div>
</div>
</div>
</div>
         </div>
                  </div> <!--am-->
                       </div> <!--/.con-->




