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
<center>
    <h1>Assignment2</h1>
</center>    
<nav>
        <ul id="navlist">
          <li><a href="index.php">Add a Device</a></li>
            <li><a href="delete.php">Delete Device</a></li>
		 <li><a href="monitorboth.php">Details</a></li>
        </ul>
    </nav>
  </header>
  
    <section class="container" style="text-align: center">
            	    	
        <td style="background-color:#eeeeee;height:600px;width:2000px;vertical-align:top;">
        <center><br>
        <form action = "addserver1.php" method = "POST">
        
        <?php
        
          
             echo "<table border = 1 width = 500 align = center cell padding = 10>
                   <tr><th Colspan = 2> Enter the device details </th></tr>
                   <tr><td> IP </td><td><input type= 'tinytext' name = 'IP' aria-describedby='number-format' required aria-required='true'></td></tr>
                   <input type='hidden' name = 'method' value = 'HTTP'>
                   <tr></tr>
                   <tr><td colspan = 2 align = 'center'><input type = 'submit' name = 'formsubmit' value = 'ADD'></td></tr></tr> ";
           
          
        ?>         
         
         </form>
        
        </table>
        </div>
        </body>
</html>        
