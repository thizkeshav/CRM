 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title></title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="layout/styles/layout.css" type="text/css" />
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
    <div class="fl_right">
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
<div class="wrapper row2">
  <div id="hpage_featured" class="clear"> 
    <div id="featured_slide">
	<ul><li><img src="images/demo/5.jpg" alt="" /></li>
        <li><img src="images/demo/2.png" alt="" /></li>
        <li><img src="images/demo/6.jpg" alt="" /></li>
        <li><img src="images/demo/4.png" alt="" /></li>
      </ul>
    </div>   
    <div class="intro clear" >
      <div class=" ">	   
        <div class="  w3-white w3-card-4  w3-round-medium" style="width:300px">
          <h2 class="w3-white">Welcome to Our CRM System</h2>
		 <form action="index.php" method="post" id="sitesearch">
         <table class "w3-white" >
		  <tr><td><input type="text" name="id" class="w3-input w3-white" placeholder="User-id" ></td></tr>
		   <tr><td><input type="password" name="pass" placeholder="password" class="w3-input w3-white"  /></td></tr>
		    <tr><td><input type="submit" name="log" value="login here" class="w3-hover-blue w3-white w3-btn"></td></tr>
		  </table>             
      </form>
	   <?php
		if(isset($_REQUEST["log"]))
			{
				session_start();
				$uid=$_REQUEST["id"];
				$upass=$_REQUEST["pass"];
				$con=mysqli_connect("localhost","root","","orcl");
				$req=mysqli_query($con,"select *from `reg` where `Userid`='$uid' and `password`='$upass'");
				$val=mysqli_fetch_array($req);
				if($val)
				{
					$_SESSION["uid"]=$val[0];
					$type=$val[3];
					if($type=="user")
					{
					header("location:users/userhome.php");
					}
					else if($type=="admin")
					{
					header("location:users/adminhome.php");
					}
					else if($type=="tp")
					{
					header("location:techp/techhome.php");
					}
				} 
				
				else
				{
						 echo"invalid id and password";
				}
			}
	  ?>
	           <a href="register.php"> <h2 class="w3-white">Not Registered ! Click here</h2></a>
        </div>
      </div>    
    </div>  
  </div>
</div>
<div class="wrapper row3"></div>
<div class="wrapper row4">
  <div id="footer" class="clear">   
  </div>
</div>
<div class="wrapper">
  <div id="copyright" class="clear">
    <p class="fl_left">Copyright &copy; 2014 - All Rights Reserved - <a href="#">keshav</a></p>
    <p class="fl_right">Template by <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
  </div>
</div>
</body>
</html>