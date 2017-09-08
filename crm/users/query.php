<?php session_start(); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<title></title>
<link href='http://fonts.googleapis.com/css?family=Trocchi' rel='stylesheet' type='text/css' />
<link href="css/styles.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="wrapper">
 <div class="logo">Welcocme user</div> 
  <div class="menu">
   <?php include("userleft.php"); ?>
  
  </div>
  
</div>
<div class="columns-container">
  <div class="columns-wrapper">
    <div class="left-column">
      <div class="left-column-panel">
        <div class="left-column-panel-top"></div>
        <div class="left-column-panel-middle">
          <div class="sub-menu">
		  <?php include("userleft.php"); ?>
          
          </div>
        </div>
        <div class="left-column-panel-bottom"></div>
      </div>
    </div>
    <div class="right-column">
     <div class="right-column-content">
     <!--################ Page containts here        --> 
	 <div class="intro clear">
      <div class="welcome clear">	   
        <div class="fl_left" style="width:100%;">
          <h2>Enter your Query</h2>
		 <form action="query.php" method="post" id="sitesearch2">
         <fieldset><legend>user query</legend>
		 <table style="width:100%;">
		   <tr><td>S.no.</td><td><input name="tnum" type="text" /></td></tr>
			<tr><td>Catagory</td><td><select name="cat">
			<option>catagory</option>
			<option>computer</option>
			<option>electronic</option>
			<option>automobile</option>
			<option>mobile</option></select></td></tr>
		    <tr><td>Query</td><td><textarea rows="4" cols="20" name="tquery"></textarea></td></tr>
		    <tr><td></td><td><input type="submit" name="log2" value="Submit query" /></td></tr>
		  </table> 
		</fieldset>		  
      </form>  
<?php
			if(isset($_REQUEST["log2"]))
			{
				$sn=$_REQUEST["tnum"];
				$uc=$_REQUEST["cat"];
				$uq=$_REQUEST["tquery"];				
				$uid=$_SESSION["uid"];
			 $mycon=mysqli_connect("localhost","root","","orcl");
			 $query="insert into `query`  values (null,'$sn','$uc','$uq','$uid', '', '', '')";
			 
			 mysqli_query($mycon,$query);
			}
			?>      
        </div>
      </div>    
    </div>  
	</div>
   </div>
  </div>
</div>
<div class="footer">
  <div class="copy-rights">Copyright (c) Untitled. Design by keshav </div>
</div>
</body>
</html>
