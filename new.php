<?php
include('inc_config.php');

if(isset($_GET['search'])) { 

			echo "<script>alert('We have received your abuse request. We will look into it shortly !!!');</script>";
			echo "<script>window.location.href='new.php';</script>";
}
?>

<!DOCTYPE html>
<html>
    <head>
        	<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Blood Donation</title>
         <link rel = "icon" href = "front_page/img/logo.jpg"
        type = "image/x-icon"> 
        
<link href="http://www.cssscript.com/wp-includes/css/sticky.css" rel="stylesheet" type="text/css">
<link href="hr/css/top_nav.css" rel="stylesheet">

<!--table-->

 <link rel="stylesheet" type="text/css" href="other_css/user_detail_table/table-responsive.css"> 
<!--table end--> 
        
    </head>
   
    <script data-ad-client="ca-pub-9494752717912198" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<body>
    
    <div class="topnav" id="myTopnav">

  <a  href="index.php">Home</a>
  <a href="about.php">About</a>
  <a href="hospital.html">Hospital</a>
  <a  href="contact.php">Contact</a></li>
    <a  class="active" href="#">List Of Donor's</a></li>
  
  
 
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>
<br><br>
 
	  
        
        <div class="container">	
 
        <?php 
	if(isset($_POST['search'])) {
		
		$a = $_POST['bg'];
		$b = $_POST['city'];
?>
<center><h2 style="text-transform:uppercase;">List of <span style="color:red; font-weight:bold; font-size:51px;"><?php echo $a; ?></span> blood donors in <span style="color:red; font-weight:bold; font-size:51px;"><?php echo $b; ?></span></h2></center>

 <br><br>
 <!-- new -->
 
 <div id="wrapper">
          <table>
            <thead>
              <tr>
                  <th>S.No.</th>
                <th>Name</th>
                <th>Moblie</th>
                <th>Address</th>
                <th>City</th>
                <th>Email</th>
                <th>Report</th>
              </tr>
            </thead>
    

 <!-- new end -->



<?php 		
		$c = "SELECT * FROM blood WHERE blood_group ='$a' AND city ='$b' ORDER BY RAND()";
			$d = mysql_query($c) or die(mysql_error());
		$count=1;
		while($row=mysql_fetch_array($d)) {
			extract($row);
?>

<tr>
	<td data-label="S.No."><?php echo $count; $count++; ?></td>
	<td style="text-transform:uppercase;"><?php echo $name; ?></td>
	<td><?php echo "<a href='tel:$mobile'>$mobile</a>"; ?></td>
	<td><?php echo $address; ?></td>
	<td><?php echo $city; ?></td>
	<td><?php echo "<a href='mailto:$email'>$email</a>"; ?></td>
	<!--<td><a href="edit.php?sno=<?php echo $sno; ?>">Edit</a></td>-->
	<td><a href="?report=<?php echo $sno; ?>" onClick='return validate()'>Report</a></td>
</tr>
<?php
		}
	}
?>


<script>
$('#convert-table').click( function() {
  var table = $('#example-table').tableToJSON(); // Convert the table into a javascript object
  console.log(table);
  alert(JSON.stringify(table));
});
</script>

 
 </table>
  
  
</div>



<?php
	if(!isset($_POST['search'])) {	
?>

	<?php } ?>
	
</table>


<!--table-->

	<!--table end -->

        
           <script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
    </body>
</html>