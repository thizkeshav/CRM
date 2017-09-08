<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>*PURPLE*</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="menu.css" rel="stylesheet" type="text/css" />

</head>

<body>
<div id="top">
  <h2><a href="#">homepage</a> | <a href="mailto:denise@mitchinson.net">contact</a></h2>
</div>
<div id="banner">
  <h1> <a href="#">Welcome to CRM</a></h1>
</div>
<div id="menuh-container">
  <div id="menuh">
    <ul>
      <li><a href="#" class="top_parent">Homepage</a> </li>
    </ul>
    <ul>
      <li><a href="#" class="top_parent">About</a>
        <ul>
          <li><a href="#">Link 1</a></li>
          <li><a href="#">Link 2</a></li>
        </ul>
      </li>
    </ul>
    <ul>
      <li><a href="#" class="top_parent">Projects</a>
        <ul>
          <li><a href="#">Link 1</a></li>
          <li><a href="#">Link 2</a></li>
          <li><a href="#">Link 3</a></li>
        </ul>
      </li>
    </ul>
    <ul>
      <li><a href="#" class="top_parent">Portfolio</a> </li>
    </ul>
    <ul>
      <li><a href="#" class="top_parent">Contact</a> </li>
    </ul>
  </div>
</div>
<div id="container">
  <div id="sidebar">
   <?php include("left.php"); ?>  
   </div>
  <div id="content">
    <h3>Technical devision<span style="color:#710069;font-family: georgia,sans-serif;font-weight: bold;">Technical Person</span></h3>
	
	<?php
	
	 if(isset($_REQUEST["log2"]))
 {
	 
	 $que=$_REQUEST["tque"];
	 $ans=$_REQUEST["tquery"];
	 $con=mysqli_connect("localhost","root","","orcl");
	mysqli_query($con,"update  `query` set `result`='$ans' where `query`='$que'") or die ("notupdate");
	
	 
 }
	?>
   <form action="displayquery.php" method="post" id="sitesearch2">
         
		 <table style="width:100%;">
		 
		 
   <!-- ##### page containts here     -->
   
   
 <?php
 session_start();

 $id =$_SESSION["uid"];
 $con=mysqli_connect("localhost","root","","orcl");
				$req1=mysqli_query($con,"select  `query` from `query` where `tp`='$id' and `result`=''");
				echo"<tr><td>Select query :</td><td> <select name='tque'>";
				echo"<option>--select query--</option>";
				while($val=mysqli_fetch_array($req1))
				{
					echo"<option>$val[0]</option>";
				}
				echo"</td></tr>";
				
				
 
 ?>
 
 <tr><td>Query</td><td><textarea rows="4" cols="20" name="tquery"></textarea></td></tr>
		    <tr><td></td><td><input type="submit" name="log2" value="result" /></td></tr>"
  </table> 
			  
      </form>    

   
   


  </div>
</div>
<div id="footer"> <a href="#">homepage</a>|</div>
</body>
</html>
