   <?php
session_start();
if(!isset($_SESSION["username"]))
{
?>
<script type="text/javascript">
window.location="staff_login.php";
</script>
<?php
}
?>

    <?php
    include "../connection.php";
    include "staff_header.php"?>
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




  
        <div class="breadcrumbs">
          <br> <h1 style="margin-left:400px;">Search Staff Info</h1>
           </div>
<br>

 <form name="form1" action="" method="post"style="background-color: #E0EBED;color:black;">
  <div class="col-lg-3">
     <div class="form-group"><label for="company"  class=" form-control-label"><h5 style="margin-left: 42px;">Staff Name</h5></label><input type="text" id="company" style="height: 50px;border-radius: 15px;" placeholder="Enter your subject name" class="form-control" name="staff_name"></div>
  </div>

<div class="col-lg-3"> 
<div class="form-group " >
      <input type="submit" name="submit1" value="Search" style="margin-left: 62px;margin-top: 40px;" class="btn btn-success">
</div>  </div>            
</form>
</div>




   
             <div class="card-body">
                          
                              <table class="table table-bordered">
                                <tr>
                                  <th>(^_^) </th>
                                 <th>Staff Name</th> 
                                   <th>Salary </th>
                                   <th>Address</th>  
                                  <th>Phone</th>
                                   <th>Email</th>
                                   </tr>
          <?php
          if(isset($_POST['submit1'])){
         $staff_name=$_POST['staff_name'];
      
        $res=mysqli_query($link,"select * from staff where staff_name = '$_POST[staff_name]'");
     $count=0;
     while($row=mysqli_fetch_array($res)) {
   

    $count=$count+1;
      
    echo"<tr>";
     echo"<td>";echo $count;echo "</td>";
    echo"<td>";echo $row["staff_name"];echo "</td>";
    echo"<td>";echo $row["salary"];echo"</td>";
     echo"<td>";echo $row["s_address"];echo"</td>";
     echo"<td>";echo $row["phone"];echo"</td>";
     echo"<td>";echo $row["email"];echo"</td>";
  echo"</tr>";
          }
              ?>
 </table>
                            
</div>
<?php
     }
     
     
 ?>


        <br>
                        
                            