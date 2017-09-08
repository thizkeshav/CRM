 <?php
 //session_start();
 if(!isset($_SESSION["uid"]))
 {
	 header("location:../logout.php");
 }
 else
 {
	
 }
 
 
 
 
 ?>
 <ul>
      <li><a href="userhome.php">User Home  Page</a></li>
	  <li><a href="query.php">Send Query</a></li>
	  <li><a href="result.php">Display Query Status</a></li>
	  <li><a href="#">Change Password</a></li>
	  <li><a href="#">Logout</a></li>
 </ul>