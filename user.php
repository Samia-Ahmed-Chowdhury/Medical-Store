<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
 
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width. initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />

 
	<title>Medical Store</title>
</head>

 <body>
  <style>
    p{
  font-size: 20px;
}

 body{ 
  background-image: url(i/background.png);
}
  .banner {
    width: 100%;
    position: absolute;

    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
  }
  
  .banner h1 {
    font-size: 80px;
    color:black;
    font-width: 300;
    margin-bottom: 02px;
    animation: moveToLeft 2s;
}
  
 
  
  .banner p {
    font-size: 50px;
    font-weight: 300;
    color: black;
    margin-bottom: 20px;
    animation: moveToRight 2s;
  }
  .banner button {
    width: 180px;
    padding: 12px;
    margin: 20px;
    border: 2px solid #eee;
    border-radius:  50px;
    font-size: 18px;
    outline: none;
    letter-spacing: 1px;
    cursor: pointer;
      background-color: #BCDDFC;
    } 
   .btn-left {
     background-color: #BCDDFC;
     color: #444
  }
   .first-letter{
  text-transform: uppercase;
  font-size: 5.3rem;
color: red;
}
   
   .btn-right {
     background-color: #BCDDFC;
   color: #444
  }
   

  </style>


   <div class="container">
     <div class="banner">


  <h1 style="color:black;"><span class="first-letter"style="color:#be8723;">O</span>nline <span class="first-letter"style="color:#be8723;">E</span>xamination</h1>
	  <p style="color:black;margin-top:230px;">Want to login as (^_^) </p>
   <button type="button" class="btn-left"><a href="manager/manager_login.php">Manager</a></button>
    <button type="button" class="btn-right"><a href="staff/staff_login.php">staff</a></button>

	  </div>
	</div>
 
    </body>
</html> 