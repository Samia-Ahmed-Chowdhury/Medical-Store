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
include "manager_header.php";
$id=$_GET["id"];
$res=mysqli_query($link,"select * from add_product where id=$id") ;
while($row=mysqli_fetch_array($res)){
$product_name=$row["product_name"];
$product_weight=$row["product_weight"];
$category=$row["category"];
$company_name=$row["company_name"];
$dealer_name=$row["dealer_name"];
$purchase_pack=$row["purchase_pack"];
$purchase_date=$row["purchase_date"];
$manufacturing_date=$row["manufacturing_date"];
$expire_date=$row["expire_date"];
$total_purchase_rate=$row["total_purchase_rate"];
$no_of_items_in_pack=$row["no_of_items_in_pack"];
$no_of_sub_items_in_item=$row["no_of_sub_items_in_item"];
$no_of_total_sub_items_in_pack=$row["no_of_total_sub_items_in_pack"];
$per_pack_purchase_rate=$row["per_pack_purchase_rate"];
$per_item_purchase_rate=$row["per_item_purchase_rate"];
$per_sub_item_purchase_rate=$row["per_sub_item_purchase_rate"];
$purchase_rate=$row["purchase_rate"];
$per_pack_sales_rate=$row["per_pack_sales_rate"];
$per_item_sales_rate=$row["per_item_sales_rate"];
$per_sub_item_sales_rate=$row["per_sub_item_sales_rate"];
$sale_rate=$row["sale_rate"];
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
  <body>
    
    
    <div class="breadcrumbs">
      <h1 style="margin-left:360px;color:black;">Product Details</h1>
    </div>
    <br>
    
    <form name="form1" action="" method="post"style="background-color: #E0EBED;color:black;">
      <div class="row">
        <div class="col-lg-12"style="background-color: #E0EBED;">
          <div class="card">
            <div class="card-body"style="background-color: #E0EBED;color:black;">
              <div class="form-group"><label for="company" class=" form-control-label"><h5 style="margin-left: 42px;">Category</h5></label><input type="text" style="height: 50px;border-radius: 15px;" id="company"  value="<?php echo $category; ?> " class="form-control" name="category"></div>
              
              <div class="col-lg-4"style="background-color: #E0EBED;color:black;">
                <div class="form-group"><label for="company" class=" form-control-label"><h5 style="margin-left: 42px;">Product Name</h5></label><input type="text" style="height: 50px;border-radius: 15px;" id="company"  value="<?php echo $product_name; ?> " class="form-control" name="product_name"></div>
                
                <div class="form-group"><label for="company" class=" form-control-label"><h5 style="margin-left: 42px;">Product Weight</h5></label><input type="text"  style="height: 50px;border-radius: 15px;" id="company" value="<?php echo $product_weight; ?> " class="form-control" name="product_weight"></div>
                <div class="form-group"><label for="company" class=" form-control-label"><h5 style="margin-left: 42px;">Company Name</h5></label><input type="text" style="height: 50px;border-radius: 15px;" id="company" value="<?php echo $company_name; ?> " class="form-control" name="company_name"></div>
                <div class="form-group"><label for="company" class=" form-control-label"><h5 style="margin-left: 42px;">Dealer Name</h5></label><input type="text" style="height: 50px;border-radius: 15px;" id="company" value="<?php echo $dealer_name; ?> " class="form-control" name="dealer_name"></div>
              </div>
              <div class="col-lg-4"style="background-color: #E0EBED;color:black;">
                <div class="form-group"><label for="vat" class=" form-control-label"><h5 style="margin-left: 42px;">Purchase Date </h5></label><input type="text"  style="height: 50px;border-radius: 15px;" id="vat" value="<?php echo $purchase_date; ?> " class="form-control" name="purchase_date"></div>
                <div class="form-group"><label for="vat" class=" form-control-label"><h5 style="margin-left: 42px;">Manufacturing Date</h5> </label><input type="text"  style="height: 50px;border-radius: 15px;" id="vat" value="<?php echo $manufacturing_date; ?> " class="form-control" name="manufacturing_date"></div>
                <div class="form-group"><label for="vat" class=" form-control-label"><h5 style="margin-left: 42px;">Expire Date</h5></label><input type="text"  id="vat" style="height: 50px;border-radius: 15px;" value="<?php echo $expire_date; ?> " class="form-control" name="expire_date"></div>
                <div class="form-group"><label for="vat" class=" form-control-label"><h5 style="margin-left: 42px;">Total Purchase Rate</h5></label><input type="text"  id="vat" style="height: 50px;border-radius: 15px;" value="<?php echo $total_purchase_rate; ?> " class="form-control" name="total_purchase_rate"></div>
              </div>
              
              <div class="col-lg-4"style="background-color: #E0EBED;color:black;">
                <div class="form-group"><label for="vat" class=" form-control-label"><h5 style="margin-left: 42px;">Total Purchase Pack</h5></label><input type="text"  id="vat" style="height: 50px;border-radius: 15px;" value="<?php echo $purchase_pack; ?> " class="form-control" name="purchase_pack"></div>
                <div class="form-group"><label for="company" class=" form-control-label"><h5 style="margin-left: 42px;">No-of-item-in-pack</h5></label><input type="text"  id="company" style="height: 50px;border-radius: 15px;" value="<?php echo $no_of_items_in_pack; ?> " class="form-control" name="no_of_items_in_pack"></div>
                <div class="form-group"><label for="vat" class=" form-control-label"><h5 style="margin-left: 42px;">No-of-sub-items-in-item</h5></label><input type="text"  id="vat" style="height: 50px;border-radius: 15px;" value="<?php echo $no_of_sub_items_in_item; ?> "class="form-control" name="no_of_sub_items_in_item"></div>
                <div class="form-group"><label for="vat" class=" form-control-label"><h5 style="margin-left: 42px;">No-of-total sub-items-in-pack</h5></label><input type="text"   style="height: 50px;border-radius: 15px;" id="vat" value="<?php echo $no_of_total_sub_items_in_pack; ?> " class="form-control" name="no_of_total_sub_items_in_pack"></div>
              </div>
              </div> <!-- .card -->
              
            </div>
          </div>
          <!--/.col-->
        </div>
        <h3 style="margin-left:460px;color:black;">Rate</h3>
        
        
        
        <div class="row"><div class="container">
          <div class="col-lg-12">
            <div class="card"style="background-color: #E0EBED;color:black;">
              <div class="card-body">
                <div class="col-lg-5">
                  <div class="card-header"><strong style="margin-left: 42px;">Purchase Rate </strong>
                  </div>
                  <div class="form-group"><label for="company"  class=" form-control-label"><h5 style="margin-left: 42px;">Per Pack Unit Cost</h5></label><input type="text"  id="company" style="height: 50px;border-radius: 15px;" value="<?php echo $per_pack_purchase_rate; ?> " class="form-control" name="per_pack_purchase_rate"></div>
                  <div class="form-group"><label for="company"  class=" form-control-label"><h5 style="margin-left: 42px;">Per item Unit Cost</h5></label><input type="text"  id="company" style="height: 50px;border-radius: 15px;" value="<?php echo $per_item_purchase_rate; ?> " class="form-control" name="per_item_purchase_rate"></div>
                  <div class="form-group"><label for="vat" class=" form-control-label"><h5 style="margin-left: 42px;"> Per Sub-item Unit Cost</h5></label><input type="text"  id="vat" style="height: 50px;border-radius: 15px;" value="<?php echo $per_sub_item_purchase_rate; ?> " class="form-control" name="per_sub_item_purchase_rate"></div>
                   <div class="form-group"><label for="vat" class=" form-control-label"><h5 style="margin-left: 42px;">Unit Cost</h5></label><input type="text"  id="vat" style="height: 50px;border-radius: 15px;" value="<?php echo $purchase_rate; ?> " class="form-control" name="purchase_rate"></div>
                </div>
                <div class="col-lg-5"s>
                  <div class="card-header"><strong style="margin-left: 42px;">Sales Rate </strong>
                  </div>
                  <div class="form-group"><label for="company"  class=" form-control-label"><h5 style="margin-left: 42px;">Per Pack Unit Cost</h5></label><input type="text"  id="company" style="height: 50px;border-radius: 15px;" value="<?php echo $per_pack_sales_rate; ?> " class="form-control" name="per_pack_sales_rate"></div>
                  <div class="form-group"><label for="company"  class=" form-control-label"><h5 style="margin-left: 42px;">Per item Unit Cost</h5></label><input type="text"  id="company" style="height: 50px;border-radius: 15px;" value="<?php echo $per_item_sales_rate; ?> " class="form-control" name="per_item_sales_rate"></div>
                  <div class="form-group"><label for="vat" class=" form-control-label"><h5 style="margin-left: 42px;"> Per Sub-item Unit Cost</h5></label><input type="text"  id="vat" style="height: 50px;border-radius: 15px;" value="<?php echo $per_sub_item_sales_rate; ?> " class="form-control" name="per_sub_item_sales_rate"></div>
                    <div class="form-group"><label for="vat" class=" form-control-label"><h5 style="margin-left: 42px;">Unit Cost</h5></label><input type="text"  id="vat" style="height: 50px;border-radius: 15px;" value="<?php echo $sale_rate; ?> " class="form-control" name="sale_rate"></div>
                </div>
              </div>
            </div>
            </div> <!-- .card -->
            
          </div>
        </div>
        <!--/.col-->
      </div>
    </div>
     <div class="form-group " >
      <input type="submit" name="submit1" value="Update Product" style="margin-left: 62px;" class="btn btn-success">
    </div>
  </form>
</div>
</div>
<?php
if(isset($_POST["submit1"]))
{
mysqli_query($link,"update add_product set product_name='$_POST[product_name]',product_weight='$_POST[product_weight]',category='$_POST[category]',company_name='$_POST[company_name]',dealer_name='$_POST[dealer_name]',purchase_pack='$_POST[purchase_pack]',purchase_date='$_POST[purchase_date]',manufacturing_date='$_POST[manufacturing_date]',expire_date='$_POST[expire_date]',total_purchase_rate='$_POST[total_purchase_rate]',no_of_items_in_pack='$_POST[no_of_items_in_pack]',no_of_sub_items_in_item=
'$_POST[no_of_sub_items_in_item]',no_of_total_sub_items_in_pack='$_POST[no_of_total_sub_items_in_pack]',per_pack_purchase_rate='$_POST[per_pack_purchase_rate]',per_item_purchase_rate='$_POST[per_item_purchase_rate]',per_sub_item_purchase_rate='$_POST[per_sub_item_purchase_rate]',purchase_rate='$_POST[purchase_rate]',per_pack_sales_rate='$_POST[per_pack_sales_rate]',per_item_sales_rate='$_POST[per_item_sales_rate]',per_sub_item_sales_rate='$_POST[per_sub_item_sales_rate]',sale_rate='$_POST[sale_rate]'where id=$id")or die(mysqli_error($link));
?>
<script type="text/javascript">
alert("Product Updated suceessfully");
window.location.href=window.location.href;
</script>
<?php
}

?>