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
          <br> <h1 style="margin-left:400px;">Searched Product</h1>
           </div>
<br>

 <form name="form1" action="" method="post"style="background-color: #E0EBED;color:black;">
  <div class="col-lg-3">
     <div class="form-group"><label for="company"  class=" form-control-label"><h5 style="margin-left: 42px;">Product Name</h5></label><input type="text" id="company" style="height: 50px;border-radius: 15px;" placeholder="Enter your subject name" class="form-control" name="product_name"></div>
  </div>

 <div class="col-lg-3">
    <div class="form-group"><label for="company"  class=" form-control-label"><h5 style="margin-left: 42px;">Product Weight</h5></label><input type="text" id="company" style="height: 50px;border-radius: 15px;" placeholder="Enter your subject name" class="form-control" name="product_weight"></div>
</div>  
<div class="col-lg-3">
    <div class="form-group"><label for="company"  class=" form-control-label"><h5 style="margin-left: 42px;">Category</h5></label><input type="text" id="company" style="height: 50px;border-radius: 15px;" placeholder="Enter your subject name" class="form-control" name="category"></div>
</div> 
<div class="col-lg-3"> 
<div class="form-group " >
      <input type="submit" name="submit1" value="Search" style="margin-left: 62px;" class="btn btn-success">
</div> 
 </div>            
</form>
</div>




   
             <div class="card-body">
                          
                              <table class="table table-bordered">
                                <tr>
                                  <th>(^_^) </th>
                                  <th>Product Name</th> 
                                   <th>Product Weight</th>
                                   <th>Category</th>
                                   <th>Total Purchase Pack</th> 
                                   <th>Total Purchase Rate</th>
                                   <th>Expire Date</th>
                                   <th>Details</th>  
                                  </tr>
          <?php
          if(isset($_POST['submit1'])){
         $product_name=$_POST['product_name'];
       $product_weight=$_POST['product_weight'];
        $category=$_POST['category'];
        $res=mysqli_query($link,"select * from add_product where product_name = '$_POST[product_name]' and product_weight = '$_POST[product_weight]' and category ='$_POST[category]'");
     $count=0;
     while($row=mysqli_fetch_array($res)) {
   

    $count=$count+1;
      
    echo"<tr>";
     echo"<td>";echo $count;echo "</td>";
    echo"<td>";echo $row["product_name"];echo "</td>";
    echo"<td>";echo $row["product_weight"];echo"</td>";
     echo"<td>";echo $row["category"];echo"</td>";
      echo"<td>";echo $row["purchase_pack"];echo"</td>";
       echo"<td>";echo $row["total_purchase_rate"];echo"</td>";
echo"<td>";echo $row["expire_date"];echo"</td>";
?>
<td><a href="product_details.php?id=<?php echo $row["id"];?>" style="color:#FF69B4;"><strong>Details</strong></a></td>
 
 <?php

  echo"</tr>";
          }
              ?>
 </table>
                            
</div>
<?php
     }
     
     
 ?>


        <br>
                        
                            