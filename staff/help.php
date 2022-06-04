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

<?php include "staff_header.php";
 include "../connection.php";?>


 <style>
body{
background-image: url(../i/background.png);
}
</style>
 <div class="breadcrumbs">
    <br> <h1 style="margin-left:400px;">Solution</h1>
  </div>
  <center>
 <div  class='card-body'>

   <br> 
    Hello Dear (^_^).<br><br>
                    Welcome to The Medical Store...<br><br><br>

   
<strong>How to search a product? <br><br> Ans-</strong>  <br>
First you need to click on Product List button then you will get a search button to search for a particular product..(^_^)
<br><br><br><br>    
 
<strong>How to get info of a Staff? <br><br> Ans-</strong>  <br>
You will get it on staff List..(^_^)     
<br><br><br><br>    
<strong>How to get Calculation of daily Sales Record ? <br><br> Ans-</strong>  <br>
You will get it on Sale Master..<br>
First of all you need to enter exact Sale id given by the popup....(^_^) 
By enter all the info of product & enter unit & quantity,,click on Add button..(^_^)
U will get the price of that product...And Total bill of that customer..(^_^)<br>
<strong>If you delete a particular item ,,make sure to click on refresh button (^_^)</strong> <br><br><br>                   
Thanks (^_^)..<br>                             

</div></center>
</body>
</html>