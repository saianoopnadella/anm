<!DOCTYPE html>
<html>
	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" href="favicon.ico" type="image/x-icon">
		<link rel = "stylesheet" href = "bootstrap/css/bootstrap.min.css">
		<link rel = "stylesheet" href = "bootstrap/css/bootstrap-theme.min.css">
		<link rel = "stylesheet" href = "bootstrap/css/style.css">

		<script type="text/javascript" src="./java.js"></script>
		<script type="text/JavaScript">

			var auto_refresh = setInterval(
			function ()
			{
			$('#tweet').fadeIn("slow");
			}, 5000); // refresh every 5000 milliseconds

		</script>

		<title>
			Assignment 4 Uptime of DEVICES  |  Home
		</title>
	</head>


	<body>


<!-- Navigation panel -->
<div class = "col-md-1" style = "padding: 0; border-right: solid 1px black; height: 1241px;">
	<div class = "container-fluid" style = "margin: 0; padding: 0;">
		<ul class = "nav nav-pills nav-stacked">
			<li role = "presentation" class = "active"><a href = "index.php">Home</a></li>
		</ul>
	</div>
</div>
<center>
<h2>Assignment 3 </h2>
</center>
<div class="col-md-2"style = "padding: 0;">
        <?php          
        include "db.php";
        include "tables.php";
      
        $con = mysql_connect($host, $username, $password)
        or die("Unable to connect to MySQL");
//select a database to work with
	mysql_select_db("$database", $con)
        or die("Could not select $database");

         
         $query = mysql_query("SELECT *FROM trap_db");

         
         echo "<table border ='1'>
               <tr><td> FQDN </td>
                   <td> STATUS </td>
                   <td> Last Updated Time</td></tr>";
         
         $j=1;
         while($data = mysql_fetch_array($query)):
         {
             $FQDN =$data[1];$STATUS= $data[3];$TIME= $data[5];
                          echo "<tr><td>" . "$FQDN" . "</td>";
             
              switch($STATUS)
              {
                   
                case 0;
                echo "<td>OK</td>";
                break;
                
                case 1;
                echo "<td>PROBLEM</td>";
                break;

                case 2;
                echo "<td>DANGER</td>";
                break;
 
                case 3;
                echo "<td>FAIL</td>";
                break;

              }


             echo "<td>" . "$TIME" . "</td></tr>";
             $j++;                        
         }
         endwhile;
         echo "</table>";
         mysql_close($con);
         ?>
</center>

         <br>
        <form action = "trap.php" method = "POST">
<br><br>
<center>
        <table border = 1 width = 500 align = center cell padding = 10>
        <tr><th Colspan = 2> Enter the Manager details </th></tr>
        <tr><td> IP </td><td><input type= "tinytext"name = "IP" aria-describedby="number-format" required aria-required="true"></td></tr>
        <tr><td> PORT </td><td><input type= "text" name = "PORT" aria-describedby="number-format" required aria-required="true"></td></tr>
        <tr><td> COMMUNITY </td><td><input type= "text"name = "COMMUNITY" aria-describedby="number-format" required aria-required="true"></td></tr>
        <tr></tr>
        <tr><td colspan = 2 align = "center"><input type = "submit" name = "formsubmit" value = "Send Trap"></td></tr></tr> 
        
        </table>
</center>    
</center></td></tr>
        </table>
        </div>
        </body>
</html>        
