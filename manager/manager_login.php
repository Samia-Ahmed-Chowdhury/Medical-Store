<?php
session_start();
include"../connection.php";
?>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <!--  <meta http-equiv="refresh" content="22"> -->
        <title>#</title>
        <meta name="description" content="Medical Store">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../style.css">
    </head>
    <body>
        <style>
        body{
        background:url(../i/background.png);
        }
        .error-pagewrap{
        width: 500px;
        margin-top: 150px;
        }
        </style>
        <center>
        <div class="error-pagewrap">
            
            
            <div class="error-page-int">
                <div class="text-center m-b-md custom-login" >
                    <h3 style="color:#B4CAE7;">LOGIN FORM</h3>
                </div>
                <div class="content-error" >
                    <div class="hpanel">
                        <div class="panel-body"style="background-color:#BCDDFC;">
                            <form action="" name="form1" method="post">
                                <div class="form-group">
                                    
                                    <label class="control-label" for="username">Username</label>
                                    <input type="text" placeholder="Enter name" title="Please enter you username" required="" value="" name="username" id="username" class="form-control">
                                    <label class="control-label" for="password">Password</label>
                                    <input type="password" title="Please enter your password" placeholder="******" required="" value="" name="password" id="password" class="form-control">
                                    
                                </div>
                                <button type="submit" name="login" class="btn btn-success btn-block loginbtn" style="background: linear-gradient(45deg,#87adfe,#ff77cd);box-shadow: 3px 8px 22px rgba(94,28,68,0.15);
                                color: #232d60;border-radius: 10px;box-sizing:border-box;font-size:17px;height:40px;width:80px;margin-top:30px;margin-left:40px;">  Login</button>
                        
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            </center>
            <?php
            if(isset($_POST["login"])){
            
            $count=0;
            $res=mysqli_query($link,"select * from registration where username='$_POST[username]' && password='$_POST[password]'") ;
            $count=mysqli_num_rows($res);
            if($count==0)
            {
            ?>
            <script>alert(" Does Not Match!...Invaild Name or Password!! ..")</script>>
            <?php
            }
            else
            {
            if($_SESSION["username"]=$_POST["username"] && $_SESSION["password"]=$_POST["password"])
            ?>
            <script type="text/javascript">
            window.location="manager_home.php";
            </script>
            <?php
            }
            }
            
            ?>