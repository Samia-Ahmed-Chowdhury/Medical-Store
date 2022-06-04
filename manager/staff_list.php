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
  
 .btn{
display: inline-block;
background: linear-gradient(45deg,#87adfe,#ff77cd);
border-radius: 70px;
padding: 20px 20px;
box-sizing:border-box;
text-decoration: none;
box-shadow: 3px 8px 22px rgba(94,28,68,0.15);
color: #232d60;
margin-left: 70px;
height: 60px;
width: auto;

}
</style>


  
        <div class="breadcrumbs">
        <br> <h1 style="margin-left:400px;">Staff List</h1>
           <a href="search_staff.php" class="btn"><strong>Search Staff</strong></a>
   </div>
         
<br>       


        <br>
                        
                            <div class="card-body">
                             <table class="table table-bordered">
                                <tr>
                                  <th>(^_^) </th>
                                  <th>Staff Name</th> 
                                   <th>Salary </th>
                                   <th>Address</th>  
                                  <th>Phone</th>
                                   <th>Email</th>
                                   <th>Action</th>
                                    
          <?php
          $count=0;
 $res=mysqli_query($link,"select * from staff order by id asc");
  while($row=mysqli_fetch_array($res)){
    $count=$count+1;
      
    echo"<tr>";
     echo"<td>";echo $count;echo "</td>";
    echo"<td>";echo $row["staff_name"];echo "</td>";
    echo"<td>";echo $row["salary"];echo"</td>";
     echo"<td>";echo $row["s_address"];echo"</td>";
      echo"<td>";echo $row["phone"];echo"</td>";
       echo"<td>";echo $row["email"];echo"</td>";

?>

<td><a href="update_staff.php?id=<?php echo $row["id"];?>" style="color:#66CDAA;"><strong>Update</strong> </a>  ||  
<a onclick="return confirm('Are U sure to Remove? ')" href="staff_delete.php?id=<?php echo $row["id"];?>" style="color:#FF84A7;"><strong>Remove</strong></a> </td> 
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




