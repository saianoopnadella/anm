<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Free Responsive Template #4 - Quality Co</title>
<!-- css3-mediaqueries.js for IE8 or older -->
<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->
<link href="css/styles.css" rel="stylesheet" type="text/css">
</head>


<body>

  <header class="container">
    <h1>Assignment2</h1>
    <nav>
        <ul id="navlist">
         <li><a href="index.php">Add a Device</a></li>
            <li><a href="delete.php">Delete Device</a></li>
		 <li><a href="monitorboth.php">Details</a></li>
        </ul>
    </nav>
  </header>
  
    <section class="container" style="text-align: center">
        <td style="background-color:#cccccc;height:600px;width:2000px;vertical-align:top;">
        <center><br>   
        
        <?php
        include "db.php";
          //echo "Interfaces";
          $i = $_POST['interfaces'];
          $n = count($i);
          
         // connection to database
         $database = mysql_connect("$host:$port",$userid,$passwd)
         or die ("Unable to connect to the Database");
         
         $connect = mysql_select_db("$name",$database)
         or die ("Database could not be selected");
         
           $in=array();        
           for($x=0;$x<$n;$x++){
           $y = $i[$x];
           $z = explode(',',$y);
           array_push($in,$z[0]);
           $COMMUNITY = $z[1];
           $IP = $z[2];
           $PORT = $z[3];}
           $in = implode('&',$in);
           $q1 = mysql_query("SELECT *FROM assign2_system");
         
         
         while($data = mysql_fetch_array($q1)):
          {
            if($IP==$data['IP'] && $PORT==$data['PORT'] && $COMMUNITY==$data['COMMUNITY'] )
             {
               echo "<br><br>It cannot be addded since device with same details already exists";
               $i=1;
             }
          }   
          endwhile;
          mysql_close($database);
          
          if($i!=1)
           {
              $database = mysql_connect("$host:$port",$userid,$passwd)
                or die ("Unable to connect to the Database");
         
              $connect = mysql_select_db("$name",$database)
                or die ("Database could not be selected");
                
              $q2 = "INSERT INTO assign2_system (IP,PORT,COMMUNITY,INTERFACES) VALUES('$IP','$PORT','$COMMUNITY','$in')";
         
              if(!mysql_query($q2))
               {
                die ("ERROR: " . mysql_error() );
               }
              echo "<br><br> New device data has been added to the database"; 
         
              mysql_close($database);
           }
         ?>
            
        </table>
        </div>
        </body>
</html>        
