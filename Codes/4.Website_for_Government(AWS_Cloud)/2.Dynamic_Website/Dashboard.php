<html>
<head>
<style>
* {
  box-sizing: border-box;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 12.5%;
  padding: 5 8px;
}
.col{
  float: left;
  width: 100%;
  padding: 0 10px;
}
/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
	opacity:0.5;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5);
  padding: 16px;
  text-align: center;
  background-color: white;
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
    <h1 align="center" style="background-color:green; color:white;"><b>REPORT</b></h1>
	</form>
<?php 
$conn=mysqli_connect("localhost","root","") or die("couldn't connect to server");
$db=mysqli_select_db($conn,"government") or die("couldn't connect to database");
$q="select * from Dashboard";
    echo '<h2><center><div class="row"><div class="col" style="background-color:cyan;">
	<div class="column"><div class="card">Name</div></div>
	<div class="column"><div class="card">CO</div></div>
	<div class="column"><div class="card">NO2</div></div>
	<div class="column"><div class="card">PM2.5</div></div>
	<div class="column"><div class="card">AQI_CO</div></div>
	<div class="column"><div class="card">AQI_NO2</div></div>
	<div class="column"><div class="card">AQI_PM2.5</div></div>
	<div class="column"><div class="card">Fine</div></div><div></div></center></h2>'; 
if ($is_query_run = mysqli_query($conn,$q))
{ 
	while ($query_executed = mysqli_fetch_assoc ($is_query_run)) 
    {   
        echo '<center><b><div class="row">';
        if($query_executed['Name']==0)
        echo '<div class="col" style="background-color:blue;"><div class="column"><div class="card">Civic</div></div>'; 
	    else if($query_executed['Name']==1)
        echo '<div class="col" style="background-color:lime;"><div class="column"><div class="card">Florey</div></div>'; 
	    else if($query_executed['Name']==2)
        echo '<div class="col" style="background-color:fuchsia;"><div class="column"><div class="card">Monash</div></div>'; 
        echo '<div class="column"><div class="card">'.$query_executed['CO'].'</div></div>'; 
        echo '<div class="column"><div class="card">'.$query_executed['NO2'].'</div></div>'; 
        echo '<div class="column"><div class="card">'.$query_executed['PM_Value'].'</div></div>'; 
        echo '<div class="column"><div class="card">'.$query_executed['AQI_CO'].'</div></div>';  
        echo '<div class="column"><div class="card">'.$query_executed['AQI_NO2'].'</div></div>'; 
        echo '<div class="column"><div class="card">'.$query_executed['AQI_PM_Value'].'</div></div>'; 
		echo '<div class="column"><div class="card">'.$query_executed['Fine'].'</div></div>'; 
		echo '</div></div></b></center>';
  } 
} 
else
{ 
    echo "Error in execution"; 
} 
?> 
<form action="Loginvalidation.php">
<br><center><button><b>Logout</b></button></center>
</form>
</body>
</html>