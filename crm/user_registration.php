	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script type="text/javascript" src="layout/scripts/jquery.min.js"></script>
<script type="text/javascript" src="layout/scripts/jquery.ui.min.js"></script>
<script type="text/javascript" src="layout/scripts/galleryviewthemes/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="layout/scripts/galleryviewthemes/jquery.timers.1.2.js"></script>
<script type="text/javascript" src="layout/scripts/galleryviewthemes/jquery.galleryview.2.1.1.min.js"></script>
<script type="text/javascript" src="layout/scripts/galleryviewthemes/jquery.galleryview.setup.js"></script>
</head>
<body id="top">
<div class="wrapper row1">
  <div id="header" class="clear">
    <div class="fl_left">
      <h1><a href="index.php">CRM System</a></h1>
     </div>
      <div id="topnav">
      <ul>
        <li class="active"><a href="index.php">Home</a></li>       
        <li><a href="#">About Us</a></li>
        <li class="last"><a href="#">Contact Us</a></li>
      </ul>
    </div>
  </div>
</div>
   
	    <form class="w3-container" method="post" action="user_registration.php">
      <p>
      
      <label>User Name</label>
	  <input class="w3-input" name="tname" type="text"></p>
      <p>
		<label>User-Id</label>
      <input class="w3-input" name="tid"  type="text">
	  <p>
		<label>Password</label>
      <input class="w3-input" name="tpass1" type="password">
	  <p>
		<label>Confirm Password</label>
      <input class="w3-input" name="tpass2" type="password">
      </p>
	  <p>
		
      <input class="w3-btn w3-hover-blue" type="submit">
    </form>
<?php
			if(isset($_REQUEST["log"]))
			{
				$uid=$_REQUEST["tid"];
				$uname=$_REQUEST["tname"];
				$upass=$_REQUEST["tpass1"];
				
			 $mycon=mysqli_connect("localhost","root","","orcl");
			 mysqli_query($mycon,"insert into `reg` values('$uid','$uname','$upass','user')");
			}
			?>      
        </div>
      </div>    
    </div>
<div class="wrapper row3"></div>
<div class="wrapper row4">
  <div id="footer" class="clear"></div>
</div>
<div class="wrapper">
  <div id="copyright" class="clear">
    <p class="fl_left">Copyright &copy; 2014 - All Rights Reserved - <a href="#">Domain Name</a></p>
    <p class="fl_right">Template by <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
  </div>
</div>
</body>
</html>
<?php
if(isset($_REQUEST[""]))
{
	
	
}
?>
