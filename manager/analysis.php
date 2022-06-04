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
    <br> <h1 style="margin-left:200px;">Analysis</h1>
    
  </div>
  
  <br><br>
  <form name="form1" action="" method="post"style="background-color: #E0EBED;color:black;">
    <div class="col-sm-2"style="background-color: #E0EBED;color:black;">
      <input type="date" id="vat" style="height: 50px;border-radius: 15px;"  class="form-control" name="start_date"></div>
      <div class="col-sm-2"style="background-color: #E0EBED;color:black;">
        <input type="date" id="vat" style="height: 50px;border-radius: 15px;" class="form-control" name="end_date"></div>
        
        
        <input type="submit" name="submit1" value="Search" style="margin-left: 62px;background-color: #BCDDFC;border-color:#BCDDFC;" class="btn btn-success">
      </form>
      <div class="card-body" style="margin-top:30px;">
        <form name="form1" action="" method="post"style="background-color: #E0EBED;color:black;">
          
          <table  class="table table-bordered">
            <tr>
              <th>Income</th>
              <th>Expendiure</th>
            </tr>
            
            <tr>
              <td> Total Sale Income:
                <input type="text" id="total_sale_income" name="total_sale_income" class="form-control" readonly  style="background-color: #F6F6FA;height: 50px;width: 200px;border-radius: 15px;"
                value="
                <?php
                if(isset($_POST['submit1']))
                {
                $start_date=$_POST['start_date'];
                $end_date=$_POST['end_date'];
                foreach($link->query("SELECT SUM(price) FROM sale_record where sale_date between '$start_date' and  '$end_date' ") as $r) {
               $income= $r['SUM(price)'] ; 
            echo $income ; }}?>">
              </td>
              
              
              <td> Total Staff Salary:
                <input type="text"  id="total_staff_salary" name="total_staff_salary"  readonly  style="background-color: #F6F6FA;height: 50px;width: 200px;border-radius: 15px;"
                value="
                <?php
                
                foreach($link->query('SELECT SUM(salary) FROM staff ') as $r) {
                echo $r['SUM(salary)'] ; }?> " class="form-control">
              </td>
            </tr>
            <tr>
              <td></td>
              <td>Electricity::<input type="text" id="electricity" name="electricity" style="background-color: #F6F6FA;height: 50px;width: 200px;border-radius: 15px;"  class="form-control"
              name="electricity" value="<?php if(isset($_POST['electricity']))echo $_POST['electricity']; ?>"></td>
            </tr>
            <tr>
              <td></td>
              <td>others::<input type="text" id="others"  name="others" value="<?php if(isset($_POST['others']))echo $_POST['others']; ?>" style="background-color: #F6F6FA;height: 50px;width: 200px;border-radius: 15px;"  class="form-control" name="per_sub_item_sales_rate"></td>
            </tr>
            <tr style="color: red;">
              <td>Total::<input type="text" id="total_income" style="height: 50px;width: 220px;border-radius: 15px;" 
 value="
                <?php
                if(isset($_POST['submit1']))
                {
                   
                $start_date=$_POST['start_date'];
                $end_date=$_POST['end_date'];
                foreach($link->query("SELECT SUM(price) FROM sale_record where sale_date between '$start_date' and  '$end_date' ") as $r) {
                  $income= $r['SUM(price)'] ; 
            echo $income ;}}?>"


               class="form-control" ></td>


              <td>Total:
                <input type="text" id="total_expenditure" style="height: 50px;width: 220px;border-radius: 15px;"
                value="
                <?php
                $electricity = isset($_POST['electricity']) ? $_POST['electricity'] : '';
                $others = isset($_POST['others']) ? $_POST['others'] : '';
                foreach($link->query('SELECT SUM(salary) FROM staff ') as $r) {
                $total_staff_salary= $r['SUM(salary)'] ; }
                $a=array($electricity,$others,$total_staff_salary);
                echo array_sum($a) ; ?> "
              class="form-control"></td>
              
            </tr>
          </table>
          <input type="submit" name="submit2" value="Calculate"  style="margin-left: 182px;background-color: #BCDDFC;border-color:#BCDDFC;" class="btn btn-success">
        </form>

      </div>
    </div>
  </div>
</div>
</div>
</div> <!--am-->
</div> <!--/.con-->