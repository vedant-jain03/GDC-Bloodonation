

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
   

    <!-- Title Page-->
    <title>Blood donation</title>
	 <link rel = "icon" href = "front_page/img/logo.jpg"
        type = "image/x-icon"> 

    <!-- Icons font CSS-->
    <link href="hr/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="hr/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="hr/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="hr/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="hr/css/main.css" rel="stylesheet" media="all">
	<link href="hr/css/top_nav.css" rel="stylesheet">
	<script data-ad-client="ca-pub-9494752717912198" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
 	<style>
		
		@media screen and (max-width:2000px){
		.dashed{
		width:550px;
		}
		}
			@media screen and (max-width:1200px){
		.dashed{
		width:500px;
		}
		}
		@media screen and (max-width:730px){
		.dashed{
		width:320px;
		}
		}
		</style>
	
</head>

<body>

 <div class="topnav" id="myTopnav">

  <a  href="index.php">Home</a>
  <a href="about.php">About</a>
  <a href="hospital.html">Hospital</a>
  <a href="contact.php">Contact</a></li>
 
  <a class="active" href="hr.php">Search Donor</a>
 
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>

    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
				
                    <center><h2 class="title"><b>REQUIREMENT OF BLOOD</b></h2></center>
					<center><img class="dashed" src="hr/bg2.png"/></center>
				
	
					
                    <form method="POST" action="new.php">
						 <div class="input-group">
                            
                            <input class="input--style-4" type="text" name="username">
                        </div>
						
                        <div class="input-group">
                          
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="bg" class="form-control select2">
                                    <option disabled="disabled" selected="selected">Select Blood Group</option>
                                   <option value="a+">A+</option>
									<option value="a-">A-</option>
								    <option value="b+">B+</option>
									<option value="b-">B-</option>
									<option value="ab+">AB+</option>
									<option value="ab-">AB-</option>
									<option value="o+">O+</option>
									<option value="o-">O-</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
						
						<div class="input-group">
                           
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="city" class="form-control select2">
                                    <option disabled="disabled" selected="selected">Select City</option>
                                   
                                    <?php include('inc_cities.php'); ?>
                                   
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
						
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit" name="search">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>




    <!-- Jquery JS-->
    <script src="hr/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="hr/vendor/select2/select2.min.js"></script>
    <script src="hr/vendor/datepicker/moment.min.js"></script>
    <script src="hr/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="hr/js/global.js"></script>
<script type="text/javascript">
function validate()
{
	var ans = confirm("Are you sure?");
	if (ans==true) { 
		return true;
	} else {
	   return false;
	}
}
</script>
<script>
    $('.select2').select2();
</script>

</body>
<script>
      $(document).ready(function() {
         function disablePrev() { window.history.forward() }
         window.onload = disablePrev();
         window.onpageshow = function(evt) { if (evt.persisted) disableBack() }
      });
   </script>
</html>
<!-- end document-->