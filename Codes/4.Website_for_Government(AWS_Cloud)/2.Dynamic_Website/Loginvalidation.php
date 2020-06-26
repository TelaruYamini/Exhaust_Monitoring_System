<html>
<head><style>
body{
	background-image:url(cpcb.jpg);
	background-repeat:no-repeat;
	background-attachment: fixed;
    background-position: center;
}
</style></head>
<body>
  <form action="">
    <h1 align="center" style="background-color:green; color:white;"><b><center>ADMIN LOGIN</center></b></h1>
    <table align="center">
				<tr>
					<td><b>Enter Username:</b></td><td><input type="text" name="uname" value=""/><br><br></td>
				</tr>
				<tr>
					<td><b>Enter Password:<b></td><td><input type="password" name="pwd" value=""/><br><br></td>
				</tr>
		
				<tr>
			        <td><br><b><input type="submit" name="login" value="LOGIN"/></b></td>
			        <td align="right"><br><b><input type="reset" name="reset" value="RESET"/></td></b>
			    </tr>	
	</table>
   </form>
   <?php
   if(isset($_REQUEST['login']))
   {   
	   $conn=mysqli_connect("localhost","root","") or die("couldn't connect to server");
	   $db=mysqli_select_db($conn,"government") or die("couldn't connect to database");
	   if(isset($_REQUEST['uname']))
       if(isset($_REQUEST['pwd'])){
	   $q="select * from user_authentication where Username='".$_REQUEST['uname']."' and Password='".$_REQUEST['pwd']."'";
	   $result=mysqli_query($conn,$q)or die("Query Failed".mysqli_error($conn));
	   if(mysqli_num_rows($result)==1)
		   echo header("Location:Alert.php");
	   else
		   echo "<center><br><i><b>Invalid user!</b></i></center>";
	   }
   }
   ?>
   </html>