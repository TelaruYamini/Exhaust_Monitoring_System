<?php
$conn=mysqli_connect("localhost","root","") or die("couldn't connect to server");
$db=mysqli_select_db($conn,"ems")or die("couldn't connect to database");
if(isset($_POST['login']))
{
       $name=$_POST['name'];
       $pmvalue=$_POST['pmvalue'];
       $query="SELECT * FROM industry WHERE Name='$name' AND PM_Value='$pmvalue'";
       $result=mysqli_query($conn,$query)or die("Query Failed".mysqli_error($conn));	
       if(mysqli_num_rows($result)==0)
            echo"<br><center><b><h1>Enter the correct data.</h1></b></center>";
      else
    {
        while($row=mysqli_fetch_array($result))
         {
                 if($row['PM_Value']==$_POST['pmvalue'])
                 {
                  "<br><br>";
                 	$n=$row['Name'];
                 	$co=$row['CO'];
                 	$no=$row['NO2'];
                 	$pm=$row['PM_Value'];
                 	$ac=$row['AQI_CO'];
                 	$an=$row['AQI_NO2'];
                 	$ap=$row['AQI_PM2.5'];
                 	$asite=$row['AQI_Site'];
                 	$f=$row['Fine'];
                  echo "<br><br><br><center><b><h1>POLLUTION TAX<h1></b></center>";
                  echo "<center>Name             : ",$n,"</center><br>";
                  echo "<center>CO             : ",$co,"</center><br>";
                  echo "<center>NO2            : ",$no,"</center><br>";
                  echo "<center>PM2.5             : ",$pm,"</center><br>";
                  echo "<center>AQI_CO             : ",$ac,"</center><br>";
                  echo "<center>AQI_NO2             : ",$an,"</center><br>";
                  echo "<center>AQI_PM2.5             : ",$ap,"</center><br>";
                  echo "<center>AQI_Site             : ",$asite,"</center><br>";
                  echo "<center>Fine             : ",$f,"</center><br><br>";
                  break;
                  }
           }
    }
}
mysqli_close($conn);
?>
<html> <head>
<title>Website_for_Industries</title> <style>
body{
background-image:url(1mg2.jpg); background-repeat:no-repeat; background-size:cover; 
align:“center”;
}
button {
  background-color: #6666ff;
  border: 1;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-style:italic;
  display: inline-block;
  font-size: 16px;
  align-items: right
}
 </style> </head>
<body>
  <center>
  <form action="Industry.html" method="get">
  <button type="submit"><b>HOME</b></button><br>
 </form>
</center>
</body> </html>
