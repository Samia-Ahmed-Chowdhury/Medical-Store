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

 <button type="button" class="button"><a href="help.php">Need Help ?</a></button>
<button type="button" class="button"><a href="register.php">Create Account</a></button>
<button type="button" class="button"><a href="account.php">Available Account</a></button>
    <script>
      $('.icon').click(function(){
        $('span').toggleClass("cancel");
      });
    </script>

  </body>
</html>


<style>
@import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
*{
  margin: 0;
  padding: 0;
  user-select: none;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
body{
 background-color: #E0EBED;

}
  .button {
    width: 200px;
    padding: 12px;
    margin: 20px;
    border: 2px solid #eee;
    border-radius:  50px;
    font-size: 18px;
    cursor: pointer;
      background-color: #BCDDFC;
      margin-top: 150px;   
 } 

</style>