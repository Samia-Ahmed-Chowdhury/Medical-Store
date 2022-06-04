<?php
session_start();
include "../connection.php";
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
    <!--     <meta http-equiv="refresh" content="22"> -->
    <title>#</title> <meta name="description" content="medical store">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    
    
    <link rel="stylesheet" href="../style.css">
   <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>


  </head>
  <div class="col-lg-12">
    <style>
    
    nav{
    background-color: #BCDDFC;
    border-radius: 1760px;
    }
    nav:after{
    content: '';
    clear: both;
    display: table;
    }
    nav ul{
    float: right;
    margin-right: 40px;
    list-style: none;
    position: relative;
    border-radius: 60px;
    }
    nav ul li{
    float: left;
    display: inline-block;
    background: linear-gradient(45deg,#87adfe,#ff77cd);
    border-radius: 30px;
    margin: 0 5px;
    }
    nav ul li a{
    color: black;
    line-height: 70px;
    text-decoration: none;
    font-size: 18px;
    padding: 8px 15px;
    }
    nav ul li a:hover{
    color: cyan;
    border-radius: 5px;
    box-shadow:  0 0 5px #33ffff,
    0 0 10px #66ffff;
    }
    nav ul ul li a:hover{
    box-shadow: none;
    }
    nav ul ul{
    position: absolute;
    top: 30px;
    border-top: 3px solid cyan;
    opacity: 0;
    visibility: hidden;
    transition: top .3s;
    }
    nav ul ul ul{
    border-top: none;
    }
    nav ul li:hover > ul{
    top: 70px;
    opacity: 1;
    visibility: visible;
    }
    nav ul ul li{
    position: relative;
    margin: 0px;
    width: 200px;
    float: none;
    display: list-item;
    border-bottom: 1px solid rgba(0,0,0,0.3);
    }
    nav ul ul li a{
    line-height: 50px;
    }
    nav ul ul ul li{
    position: relative;
    top: -60px;
    left: 150px;
    }
    @media all and (max-width: 968px) {
    nav ul{
    margin-right: 0px;
    float: left;
    }
    
    nav ul li,nav ul ul li{
    display: block;
    width: 100%;
    }
    nav ul li a:hover{
    box-shadow: none;
    }
    .show{
    display: block;
    color: white;
    font-size: 18px;
    padding: 0 20px;
    line-height: 70px;
    cursor: pointer;
    }
    .show:hover{
    color: cyan;
    }
    .icon{
    display: block;
    color: white;
    position: absolute;
    top: 0;
    right: 40px;
    line-height: 70px;
    cursor: pointer;
    font-size: 25px;
    }
    nav ul ul{
    top: 70px;
    border-top: 0px;
    float: none;
    position: static;
    display: none;
    opacity: 1;
    visibility: visible;
    }
    nav ul ul a{
    padding-left: 40px;
    }
    nav ul ul ul a{
    padding-left: 80px;
    }
    nav ul ul ul li{
    position: static;
    }
    [id^=btn]:checked + ul{
    display: block;
    }
    nav ul ul li{
    border-bottom: 0px;
    }
    span.cancel:before{
    content: '\f00d';
    }
    }
       </style>
    <nav>
      
      <label for="btn" style="color:red;"class="icon">
        <span class="fa fa-bars"></span>
      </label>
      <input type="checkbox" id="btn">
      <ul>
       <li><a href="staff_home.php">Home</a></li>
       <li><a href="sales_master.php">Sales Master</a></li>
        <li><a href="product_list.php">Product List</a></li>
<li><a href="expired_product.php">Expired Product</a></li>
<li><a href="out_of_stock_product.php">Out-Of_Stock</a></li>
<li><a href="staff_list.php">Staff List</a></li>
        <li><a href="../logout.php" onclick="return confirm('Are U sure to logout? ')">logout</a></li> 
      </ul>
    </nav>
  </div>
  <div class="breadcrumbs">
    <br> <h1 style="margin-left:400px;">Sales Master</h1>
  </div>
  <br>
  <form name="form1" action="" method="post"style="background-color: #E0EBED;color:black;">
    <div class="col-lg-12" >
      <div class="col-lg-4">
      <div class="form-group"><label for="company"  class=" form-control-label"><h5 style="margin-left: 42px;">Sale Id</h5></label>
         <input type="text" id="sale_id" style="height: 50px;border-radius: 15px;width: 300px; background-color: #D3D3D3" 

 name="sale_id" value="<?php if(isset($_POST['sale_id']))echo $_POST['sale_id']; ?>"class="form-control" onclick="f()" ></div>
   
    </div>
    <script type="text/javascript">
     
      function f() {
           alert("<?php
  $r=mysqli_query($link,"select DISTINCT sale_id from sale_record"); 

    $count=mysqli_num_rows($r);          
       echo "put sale id = ".($count+1);
      

      ?>");

      }
    </script>
 
  <div class="col-lg-4"></div>
  <div class="col-lg-1"></div>
  <div class="col-lg-3">
    
     <div class="form-group"><label for="company"  class=" form-control-label"><h5 style="margin-left: 42px;">Sale Date</h5></label><input type="text"  style="height: 50px;border-radius: 15px;width: 300px;" readonly value="<?php echo date("Y-m-d"); ?> " class="form-control" name="sale_date"></div>
   
  </div>
</div>
    <div class="col-lg-2">
      <div class="form-group"><label for="company"  class=" form-control-label"><h5 style="margin-left: 42px;">Product Name</h5></label>
      <select name="product_name" id='product_name'  style="width: 200px;" >
        <option>----Search---</option>
        <?php
        $result=mysqli_query($link,"select * from add_product");
        
        while($r = mysqli_fetch_array($result))
        {
        echo "<option>$r[product_name]</option>";
        }
        ?>
      </select>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.min.css">
      <script type="text/javascript">
      $("#product_name").chosen();
      </script>
    </div>
  </div>
  <div class="col-lg-2">
    <div class="form-group"><label for="company"  class=" form-control-label"><h5 style="margin-left: 42px;">Product Weight</h5></label>
    <select name="product_weight" id='product_weight'  style="width: 200px;" >
      <option>----Search---</option>
      <?php
      $result=mysqli_query($link,"select * from add_product");
      
      while($r = mysqli_fetch_array($result))
      {
      echo "<option>$r[product_weight]</option>";
      }
      ?>
    </select>
    <script type="text/javascript">
    $("#product_weight").chosen();
    </script>
  </div>
</div>
<div class="col-lg-2">
  <div class="form-group"><label for="company" class=" form-control-label"><h5 style="margin-left: 5px;">Category</h5></label>
  <select name="category"style="width: 200px;">
    <option value="0">--Select--</option>
    <option value="Tablet">Tablet</option>
    <option value="Drops">Drops</option>
    <option value="syrup">syrup</option>
    <option value="Capsules"> Capsules</option>
    <option value="Inhalers">Inhalers</option>
    <option value="Injections">Injections</option>
  </select>
</div>
</div>
<div class="col-lg-2">
<div class="form-group"><label class=" form-control-label"><h5 style="margin-left: 45px;">Unit</h5></label>
<select name="unit" style="width: 200px;" >
  <option value="0">--Select--</option>
  <option value="box">Box</option>
  <option value="strip">Strip</option>
  <option value="item">Item</option>
  
</select>
</div>
</div>
<div class="col-lg-2">
<div class="form-group"><label for="company"  class=" form-control-label"><h5 style="margin-left:45px;">Quantity</h5></label><input type="text"  style="width: 200px;height: 50px;border-radius: 15px;" placeholder="Enter your subject name" class="form-control" name="quantity"></div>
</div>
<div class="form-group "  >
<input type="submit" name="submit1"value="Add" style="margin-left: 62px;margin-top: 27px;" class="btn btn-success">
<input type="submit" name="submit1"value="Refresh" style="margin-left: 62px;margin-top: 27px;  height: 60px;
background-color: #BCDDFC;border-color:#BCDDFC;
    border-radius: 30px; " >
</div>
</form>
<br>



<?php
if(isset($_POST["submit1"]))
{
  $sale_id=$_POST['sale_id'];
  $product_name=$_POST['product_name'];
  $product_weight=$_POST['product_weight'];
  $category=$_POST['category'];
  $unit=$_POST['unit'];
  $quantity=$_POST['quantity'];
  $res=mysqli_query($link,"select * from add_product where product_name = '$_POST[product_name]' and product_weight = '$_POST[product_weight]' and category ='$_POST[category]'");
while($row=mysqli_fetch_array($res)) {
  $per_pack_sales_rate=$row["per_pack_sales_rate"];
$per_item_sales_rate=$row["per_item_sales_rate"];
$per_sub_item_sales_rate=$row["per_sub_item_sales_rate"];
$total_purchase_rate=$row["total_purchase_rate"];
$sale_cost=$row["sale_rate"];

if($unit=='box'){
$sale_rate= $per_pack_sales_rate;
$price=$per_pack_sales_rate * $quantity;}
elseif($unit=='strip'){
$sale_rate=$per_item_sales_rate;
$price=$per_item_sales_rate * $quantity;
}
elseif($unit=='item'){
$sale_rate= $per_sub_item_sales_rate;
$price=$per_sub_item_sales_rate * $quantity;
}
else{
$sale_rate=$sale_cost;
$price=$sale_cost * $quantity;
}

mysqli_query($link,"insert into sale_record values(NULL,'$_POST[sale_id]','$_POST[product_name]','$_POST[product_weight]','$_POST[category]','$row[expire_date]','$_POST[sale_date]','$_POST[unit]','$sale_rate','$_POST[quantity]','$price')")or die(mysqli_error($link));

}
}

?>

<div  class='card-body'>
<table class='table table-bordered'>
<tr>
<th>(^_^) </th>
<th>Product Name</th>
<th>Product Weight</th>
<th>Category</th>
<th>Expire Date</th>
<th>Unit</th>
<th>Sale Rate</th>
<th>Quantity</th>
<th>Price</th>
<th>Action</th>
</tr>
<?php
$sale_id = isset($_POST['sale_id']) ? $_POST['sale_id'] : '';

   $count=0;
   $res=mysqli_query($link,"select * from sale_record where sale_id='$sale_id'");
 while($row=mysqli_fetch_array($res)) {
         $count=$count+1;
      ?>
   <tr id="delete<?php echo $row['id']?>">
      <?php
     echo"<td>";echo $count;echo "</td>";
    echo"<td>";echo $row["product_name"];echo "</td>";
    echo"<td>";echo $row["product_weight"];echo"</td>";
     echo"<td>";echo $row["category"];echo"</td>";
     echo"<td>";echo $row["expire_date"];echo"</td>";
        echo"<td>";echo $row["unit"];echo "</td>";
      echo"<td>";echo $row["sale_rate"];echo "</td>";
              echo"<td>";echo $row["quantity"];echo "</td>";
              echo"<td>";echo $row["price"];echo "</td>";
?>


<td><button onclick="Function('<?php echo $row["id"]?>')">del</button> </td>
<script type="text/javascript">

function Function(id) {
if(confirm('are You sure?'))
{
$.ajax({
  type:'post',
url:'delete.php',
data:{id:id},
success:function(data) {
  $('#delete' +id).hide();
  alert("Click on Refresh button (^_^)");
}

});
}
}


</script>

<?php
  echo"</tr>";
          }
          echo " </table>";
          echo "<br>";


    echo '<table  style="margin-left:450px;">';
   echo"<td>";   
 echo '    
 <h5 style="color:red;">Total Bill &nbsp</h5>  ';echo "</div>";
 echo"</td>";

 $sale_id = isset($_POST['sale_id']) ? $_POST['sale_id'] : '';
foreach($link->query("SELECT SUM(price) FROM sale_record where sale_id='$sale_id'") as $r) {

echo"<td>";
?>
<input type="text"  readonly style="height: 50px;border-radius: 15px;background-color: white;" value="<?php echo $r['SUM(price)']  ?> " class="form-control">

<?php
echo"</td>";
 echo " </table>";
}
?>
   
<?php

  $res=mysqli_query($link,"select * from add_product ");
   while($row=mysqli_fetch_array($res)){
      $purchase_pack =$row["purchase_pack"];
    }

foreach($link->query('SELECT product_name,product_weight,category, SUM(quantity) FROM sale_record where unit="Box" or unit="0" GROUP BY product_name,product_weight, category;') as $r) {
    
    $product_name=$r['product_name'] ;    
  $product_weight=$r['product_weight'] ; 
    $category=$r['category'] ; 
    $total_quantity=$r['SUM(quantity)'] ;
    $stock=$purchase_pack-$total_quantity;
  
  mysqli_query($link,"update add_product set purchase_pack='$stock' where product_name='$product_name' and product_weight='$product_weight' and category='$category' ")or die(mysqli_error($link));
 }

?> 




