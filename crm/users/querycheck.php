<?php  session_start(); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<title>Querycheck</title>
<link href='http://fonts.googleapis.com/css?family=Trocchi' rel='stylesheet' type='text/css' />
<link href="css/styles.css" rel="stylesheet" type="text/css" />
<style type="text/css">
td{border:solid 1px;font-size:20px;}
</style>
</head>
<body>
<div class="wrapper">
 <div class="logo">Welcocme Admin</div> 
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
	 
	 <?php
	 if(isset($_REQUEST["assign"]))
	 {
		$tpid=$_REQUEST["tpid"]; 
        $id=$_REQUEST["qid"];	 
	 
	 $con=mysqli_connect("localhost","root","","orcl");
	 foreach($id as $v)
	 {
		mysqli_query($con,"update `query` set `tp`='$tpid' where `pid`='$v'");
	 }
	 
	 
	 }
	 ?>
	 
	 <form action="querycheck.php" method="post">			
			<?php				
				$con=mysqli_connect("localhost","root","","orcl");
				$req1=mysqli_query($con,"select  `Userid` from `reg` where `type`='tp'");
				echo"Select Technical person id : <select name='tpid'>";
				echo"<option>--select TP id--</option>";
				while($val=mysqli_fetch_array($req1))
				{
					echo"<option>$val[0]</option>";
				}
				echo"</select><input type='submit' name='assign' value='assing query'/> <hr/>";
				
				$req1=mysqli_query($con,"select  `pid`,`catagory`,`query` from `query` where `tp`=''");
				echo "<table><tr><th>Category</th><th>Query</th><th></th></tr>";
				while($val=mysqli_fetch_array($req1))
				{
					echo "<tr><td>$val[1]</td><td>$val[2]</td>
					
					<td><input type='checkbox' name='qid[]' value='$val[0]' /></td></tr>
					
					";
				}
				echo"</table>";
				
			
	 ?>
	 
	 </form>
	 
    </div>  
	</div>
   </div>
  </div>
</div>
<div class="footer">
  <div class="copy-rights">Copyright (c) Untitled. Design by </div>
</div>
</body>
</html>
