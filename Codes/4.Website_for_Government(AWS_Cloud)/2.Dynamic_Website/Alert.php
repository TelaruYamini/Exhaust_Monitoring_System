<html>
<head>
<style>
.row {
  display: table;
  width: 25%;
  padding:  10px;
}
.card {
  box-shadow: 0 4px 8px 0 rgba(1, 0, 0, 0.2);
  padding: 10px;
  text-align: center;
}
body{
	background-image:url(cpcb.jpg);
	background-repeat:no-repeat;
	background-attachment: fixed;
    background-position: center;
}	
</style>
</head>
<body style="background-image:url(pcb.jpg) background-repeat:no-repeat">
<form action="">
    <h1 align="center" style="background-color:green; color:white;"><b>ALERT!!</b></h1></form>
<?php 
$conn=mysqli_connect("localhost","root","") or die("couldn't connect to server");
$db=mysqli_select_db($conn,"government") or die("couldn't connect to database");
echo '<h2><p width="100%"><center>'.'The industries which crossed the restricted limit:</p><div class="row"><div class="card" style="background-color:cyan;">Name</div></div></h2></center>'; 
$q="SELECT DISTINCT Name FROM Dashboard WHERE (SELECT COUNT(Name)>=3 FROM Dashboard)";
if ($is_query_run = mysqli_query($conn,$q)or die("Query Failed".mysqli_error($conn)))
{   echo '<center><div class="row">';
	 while ($query_executed = mysqli_fetch_assoc ($is_query_run)) 
    {   
        if($query_executed['Name']==0)
        echo '<div class="card" style="background-color:blue;"><b>Civic</b></div><br>'; 
	    //else if($query_executed['Name']==1)
        //echo '<div class="card" style="background-color:lime;"><b>Florey</b></div><br>'; 
	    else if($query_executed['Name']==2)
        echo '<div class="card" style="background-color:fuchsia;"><b>Monash</b></div><br>';
    } 
	echo '</div></center>';
} 
else
{ 
    echo "Error in execution"; 
} 
?> 
<form action="Dashboard.php">
<center><br><button><b>View Report</b></button></center>
</form>
</body>
</html>