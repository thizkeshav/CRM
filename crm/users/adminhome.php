<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<title>admin home</title>
<link href='http://fonts.googleapis.com/css?family=Trocchi' rel='stylesheet' type='text/css' />
<link href="css/styles.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="wrapper">
 <div class="logo">Welcome Admin</div> 
  <div class="menu">
   <?php include("adminleft.php"); ?>
  
  </div>
  
</div>
<div class="columns-container">
  <div class="columns-wrapper">
    <div class="left-column">
      <div class="left-column-panel">
        <div class="left-column-panel-top"></div>
        <div class="left-column-panel-middle">
          <div class="sub-menu">
		  <?php include("adminleft.php"); ?>
          
          </div>
        </div>
        <div class="left-column-panel-bottom"></div>
      </div>
    </div>
    <div class="right-column">
     <div class="right-column-content">
     <!--################ Page containts here        --> 
	
	
	
	</div>
   </div>
  </div>
</div>
<div class="footer">
  <div class="copy-rights">Copyright (c) Untitled. Design by </div>
</div>
</body>
</html>
