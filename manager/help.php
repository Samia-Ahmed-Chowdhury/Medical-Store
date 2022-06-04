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

<?php include "manager_header.php";
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

<strong>How to Create Account ? <br><br> Ans-</strong>  <br>
By entering all the info you can easily create an account (^_^)...  <br><br><br><br>
   <strong>How to get info about available Account ? <br> Ans-</strong>  <br><br><br>
In available account ypu will all info & can also remove a create (^_^)...  <br><br><br><br>  
         
<strong>How to add product? <br><br> Ans-</strong><br>
By entering all required info ,you need to click Add product button..(^_^)
<br><br><br><br>    
<strong>How to search a product? <br><br> Ans-</strong>  <br>
First you need to click on Product List button then you will get a search button to search for a particular product..(^_^)
<br><br><br><br>    
<strong>How to Update info of a product? <br><br> Ans-</strong>  <br>
You need to go to product list then you will find a Update & Remove Option..(^_^)
<br><br><br><br>   
<strong>How to get info of a Staff? <br><br> Ans-</strong>  <br>
You will get it on staff List..(^_^)     
<br><br><br><br>    
<strong>How to get Profit-loss calculation info ? <br><br> Ans-</strong>  <br>
You will get it on Analysis..
By enter a particular month click on search,,,you will get income calculation of given period..
In expenditure,,by entering electricity & other expenses cost click calculate button ..You will the total expenses cost per month (^_^)...                    
Thanks (^_^)..<br>                             




<br><br><br>



</div></center>
</body>
</html>