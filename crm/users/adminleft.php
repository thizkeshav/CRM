 <?php
 //session_start();
 if(!isset($_SESSION["uid"]))
 {
	 header("location:logout.php");
 }
 else
 {
	
 }
 ?>
 <ul>
      <li><a href="adminhome.php">Admin Home  Page</a></li>
	  <li><a href="querycheck.php">check Query</a></li>
	  <li><a href="#">Department head details</a></li>
	  <li><a href="#">Technical persion details</a></li>
	  <li><a href="#">Change Password</a></li>
	  <li><a href="#">Logout</a></li>
 </ul>