
<?php
$conn=mysqli_connect("localhost","root","nsl","healthcenter");
session_start();
if($_SESSION['email'])
{
 echo $emailid = $_SESSION['email'];
 
  $q1 = "SELECT * FROM `user_registration` where email='$emailid'";
			$run = mysqli_query($conn, $q1);
			
				while($row= mysqli_fetch_array($run))
				{
				$name=$row['name'];
				$mobile=$row['mobile'];
				
			}

}

?>
<html>
<head>
<link href="images/herbal.png" rel="icon">
<title>Health Center NIT Calicut</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->


    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<style>
.containe{

	height:135px;
	margin-top:-5px;
	
	background-color:white;
	  background-position: center;

   
	border-radius:0px;
	width:100%;
	margin-left:auto px;
	
}

.contain{

	margin-top:-50px;
	background-image:url(image.jpeg);
	
	

}
#demo{
	float:right;
	width:200px;
	font-size:16px;
	color:white;
	margin-top:-1px;
	text-align:center;
	height:28px;

	
}
footer{
	background-color:black;
	color:white;
	
}
#header{
margin-left:110px;	
margin-top:px;
	
}
.home{
	background-color:#046868;
	color:red;
		
	
}
div.active{
	background-color:red;
}
#block{
		
		background-color:white;
		
		
		
		font-size:17px;
		color:green;
	
		padding:1px;
		margin-right:0px;
	}
	#in{
		
	
		
		padding:0px;
			padding:13px;
		margin:-15px;
		
	
	}

#nit{
	
	float:left;
	width:100%;;
	color:white;
	background-color:;
	padding:30px;
	margin-top:10px;
}
#language{
	
	float:left;
	width:100%;
	
	
	}
	#medicare
	{
		backgroun-color:white;
		}
		
		
		
		
.appoint,button:hover{
	
	background-color:#ccc;
	font-size:17px;
	padding:5px;
	color:green;
	
	
	}
</style>
    
</head>

<body>

	
  <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed" role="navigation">
	<div id ="header">
		<div class="row" style="margin-top:5px;">
			
			
			 <div class="col-md-5">

                            <div class="medicare" style="color:white; width:120;float:left;">
                                <i class="fa fa-plus"></i>
                                <span>Medical Care</span>
                            </div>
                            <h5 class="logo" style="color:white;width:300px;margin-top:5px;">| A Digital India Initiative</h5>
                        </div>

                        <div class="col-md-6" >
                            <ul class="language">

                                <li style="color:;float:left; width:50px;" ><a href="#" style="color:white;">FAQs</a></li>
                                <li style="color:;float:left;width:90px;"><a href="#" style="color:white;">Feedback</a></li>
                                <li style="color:;float:left;width:90px;"><a href="#" style="color:white;">Contact</a></li>



                                <li style="color:;float:left;width:200px;"><p style="color:white;">Language/ <span class="hindi">Hkk"kk</span> : हिन्दी</p></li>

								 

                            </ul>
                        </div>
						<div class="col-md-1"> 
						
					<p id="demo"  Clock</p>
					
						
					<script>
					var myTimer = setInterval(myClock, 1000);
					function myClock() {
						document.getElementById("demo").innerHTML =
						new Date().toLocaleTimeString();
					}
					</script>
					</div>
			
			
			
			</div>
		</div>
	</div>
	<div class="containe">
	<div class="row">
		<div class="col-md-12">
			<div class ="col-md-1">
				</div>
				<div class="col-md-4" style="margin-left:-10px;">
				<div style="
						background-image:url(image1.jpeg);
						
							width:auto;
							height:120px;;
							
							background-position: center;
							background-repeat: no-repeat;
							background-size: 400px;
							">
						</div>
						</div>
						<div class="col-md-4"></div>
						<div class="col-md-3" style="padding:30px;float:right;margin-top:px;">
							<div class="row">
							<div class="col-md-12"></div></div>
							<input type="text" name ="name ">
							<input type="submit" value ="Search">
							</div>
						
			
					
		</div>	
	</div>
	</div>
     <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button  style="color:white;background-color:#185953;font-size:20px;width:80px;height:45px;"type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                 
                    <span class="icon-bar"></span>
                    <span  class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
		
			<div class ="home">
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-center">					
						<li  style="background-color:#c18765; margin-left:-13px;">
							<a style="color:green; width:80px;"href="profile.php">Home </a>
						</li>
						
						
						
					</ul>
				</div>
			</div>
		
			 <!-- /.navbar-collapse -->
   
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    
    <div class="contain">
		<div class="row">
            <div class="col-md-12">
                <h1 class="page-header" style="background-color:white;padding:2px;">
                   <p style ="color:#c12345; margin-top:5px; font-size:25px;text-align:;">
				  <i class="fa fa-"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dasboard => Profile</marquee> </i> </p>
                </h1>	
            </div>
		</div>
		
<!-- Marketing Icons Section -->

	<div class="container"> 
       <div class="row">
			
			 
		<div class="col-md-2"  style="padding:20px;"></div>
		<div class="col-md-9" style="background-color:white;height:auto;">
			<div class="row">
				<div class="col-md-12"  style="padding:20px;">
					<div class="panel panel-default" style="outline: 1px dashed #26A65B; color:" >
						<div class="panel-heading" style="background-color:#185953;">
                        <h4 style="color:white;"><i class="fa fa-" style="margin-right: 5px;">&nbsp;&nbsp;&nbsp;Fill The Appointment Form </i></h4></div>
							<div class="panel-body">
							<form method="POST" action ="appointment.php">
									<br>
							<div class="row">
								<div class="col-md-1"></div>
									<div class="col-md-4" style="padding:5px;font-size:25px;" ><i class="fa fa-">Name of Patient:</i></div>
									<div class="col-md-6" style="padding:5px;">	  
										<input type="text" name ="name" value="<?php echo $name;?>" placeholder="" required="required" style ="padding:6px;width:100%;color:green">
									</div>
									
							 </div>
							<br>
							<div class="row">	
								<div class="col-md-1"></div>  
									<div class="col-md-4" style="padding:5px;font-size:25px;" ><i class="fa fa-">Patient's Age:</i>
									
									</div>
									<div class="col-md-6" style="padding:5px;">	  
										<input type="number" name="age" placeholder="age" required="required" style ="padding:6px;width:100%;">
									</div>
							 </div>
							<br><br>
							 <div class="row" style="font-size:22px;">
								 
								 <div class="col-md-1"></div>	  
									<div class="col-md-4" style="padding:5px;font-size:25px;" ><i class="fa fa-">Gender:</i></div>
									
										<div class="col-md-2" style="padding:5px;">	   
										<div id ="appoint" ><input type="radio" name="gender" required="required" value="male"> <i class="fa fa-">Male</i></div>
										</div>
										<div class="col-md-2" style="padding:5px;">	   
										<div id ="appoint" ><input type="radio" name="gender" required="required" value="female"> <i class="fa fa-">Female</i> </div>
										</div>
										<div class="col-md-2" style="padding:5px;">	   
										<div id ="appoint" ><input type="radio" name="gender" required="required" value="other"><i class="fa fa-">&nbsp; Other</i></div>
										</div>
 
							 </div>
							 <br>
							 <div class="row">	   
								  <div class="col-md-1"></div>	
									<div class="col-md-4" style="padding:5px;font-size:25px;" ><i class="fa fa-">Appoinment Date:</i></div>
									
									<div class="col-md-6" style="padding:5px;">	  
										<input type="date" name="date"   style ="padding:6px;width:100%;">
									</div>
									
									
									
							</div>
							<div class="row">
								<div class="col-md-5"></div>
								<div class="col-md-6"><?php
									
										if($_POST['date'] < date("Y-m-d"))
										{
											echo "<p style='color:red;'>" .date('d-m-Y'). " &nbsp;&nbsp;&nbsp;Please Fill the Next Date of today..!<p>";
											
											}
									
									
									?>
								</div>
							</div>
							<br>
							
							 <div class="row">
								 <div class="col-md-1"></div>	
									<div class="col-md-4" style="padding:5px;font-size:25px;" ><i class="fa fa-">Appoinment Date:</i></div>
									
									
									<div class="col-md-6" style="padding:5px;">	  
									 <select name="doctor" value="doctor" style ="padding:6px;width:80%;">
										<option value="null">Doctor Name</option>
										<option value="Dr. Mushahid Khan">Dr. Mushahid Khan</option>
										<option value="Dr. Vijay Mishra">Dr. Vijay Mishra </option>
									</select>
									</div>
							
							 </div>
							
							<br>
							 <div class="row">
								<div class="col-md-1"></div>  
									<div class="col-md-4" style="padding:5px;font-size:25px;" ><i class="fa fa-">Blood Group:</i></div>
									
									
									<div class="col-md-6" style="padding:5px;">	  
										<div id ="appoint" > <select name="bloodgroup" value="bloodgroup"  style ="padding:6px;width:100%;">
								<option value="null">Patient Blood Group</option>
								<option value="A+">A+</option>
								<option value="A-">A-</option>
								<option value="B+">B+ </option>
								<option value="B-">B- </option>
								<option value="O+">O+</option>
								<option value="O-">O- </option>
								<option value="AB+">AB+</option>
								<option value="AB-">AB- </option>
								</select></div>
									</div>
							 </div>
							<br>
							<br>
							<div class="row">
								<div class="col-md-1"></div>  	  
									<div class="col-md-4" style="padding:5px;font-size:25px;" ><i class="fa fa-">Full Address:</i></div>
									
									<div class="col-md-6" style="padding:5px;">	  
										<input type="text" name="address" placeholder="Full Address" required="required" style ="padding:6px;width:100%;"></div>
									
							 </div>
							<br>
							
							<br>
							<div class="row">	
								  
									<div class="col-md-2" style="padding:5px;font-size:25px;" ><i class="fa fa-">District:</i></div>
									
									<div class="col-md-4" style="padding:5px;">	  
										<input type="text" name="district" placeholder="District" pattern="[A-za-z]+" style ="Padding:6px;;width:250px;" required/></div>
										
									<div class="col-md-2" style="padding:5px;font-size:25px;" ><i class="fa fa-">State:</i></div>
									
									<div class="col-md-4" style="padding:5px;">	  
										<select name="state" value="state" required="required" style ="Padding:6px;;width:250px;">
								<option value="null">State</option>
								<option value="Asam">Asam</option>
								<option value="Arunachal Pradesh">Arunachal Pradesh</option> </option>
								<option value="Andhra Pradesh">Andhra Pradesh</option>
								<option value="Bihar">Bihar </option>
								<option value="Chhattisgarh">Chhattisgarh</option>
								<option value="Goa">Goa</option>
								<option value="Gujrat">Gujrat</option>
								<option value="Haryana">Haryana</option>
								<option value="Himachal Pradesh">	Himachal Pradesh</option>
								<option value="Jammu and Kashmir">Jammu and Kashmir</option>
								<option value="Jharkhand">	Jharkhand </option>
								<option value="Karnataka">Karnataka</option>
								<option value="Kerala">Kerala</option>
								<option value="Madhya Pradesh">Madhya Pradesh</option>
								<option value="Maharashtra">Maharashtra</option>
								<option value="Manipur">Manipur</option>
								<option value="Meghalaya">Meghalaya</option>
								<option value="Mizoram">Mizoram </option>
								<option value="Nagaland">Nagaland</option>
								<option value="Odisha">Odisha</option>
								<option value="Punjab">Punjab</option>
								<option value="Rajasthan">Rajasthan</option>
								<option value="Sikkim">Sikkim</option>
								<option value="Tamil Nadu">Tamil Nadu</option>
								<option value="Telangana">Telangana</option>
								<option value="Tripura">Tripura</option>
								<option value="Uttar Pradesh">Uttar Pradesh</option>
								<option value="Uttarakhand">Uttarakhand</option>
								<option value="West Bengal">West Bengal</option>
								</select>
							 </div>
						</div>
						
						<br>
							<br>
							<div class="row">
								
								
								<div class="col-md-2" style="padding:5px;font-size:25px;" ><i class="fa fa-">Contact:</i></div>
									
									<div class="col-md-4" style="padding:5px;">	  
										<input type="text"  name="mobile" maxlength="10"  style ="Padding:6px;;width:250px;" value="<?php echo $mobile;?>"  placeholder="Mobile Number"  pattern="\d{10}" required/>
									</div>	 
									
									<div class="col-md-2" style="padding:5px;font-size:25px;" ><i class="fa fa-">PIN Code:</i></div>
									
									<div class="col-md-4" style="padding:5px;">	  
										<div id ="appoint" > <input type="text"  name="pincode" maxlength="6"  style ="Padding:6px;;width:250px;" pattern="\d{6}" required/></div>
									</div>
							 	  
									
							 </div>
							 
							 <br><br>
							<div class="row">	  
									<div class="col-md-4" style="padding:5px;font-size:25px;" ><i class="fa fa-">Problem:</i></div>
									
									<div class="col-md-6" style="padding:5px;">	  
										<input type="text" name="problem" placeholder="Enter Your Problem " pattern="[A-za-z_ ]+" style ="padding:6px;width:100%;"  required/>
									</div>
									
							 </div>
							<br>
							<br><br>
							
							
							
							
							
							<footer align="center" style="background-color:#185953;">
								<div class="row" >
										<div class="col-md-12">
										<input type="submit" name="appoint"  style="color:green;width:150px;font-size:20px;margin-left:0px;;border-radius:10px;" value="LogIn">

					
										</div>
									</div>
								</footer>
								
								</form>
						</div>   
					</div>
				</div>
      
			</div>
			</div> 
		</div>
  
     
</div>
	
<?php



	if(isset($_POST['appoint']))
{
	$name=$_POST['name'];
	$age=$_POST['age'];
	$gender=$_POST['gender'];
	$date=$_POST['date'];
	$doctor=$_POST['doctor'];
	
	$bloodgroup=$_POST['bloodgroup'];
	$address=$_POST['address'];
	$district=$_POST['district'];
	$state=$_POST['state'];
	$mobile=$_POST['mobile'];
	$pincode=$_POST['pincode'];
	$problem =$_POST['problem'];
	$verify=0;
	$pass1=$_POST['pass1'];
	
	if($_POST['date'] != date("Y-m-d"))
	$q="INSERT INTO `patient_appointment`(`email`,`pname`, `page`, `pgender`, `appointdate`, `doctorname`, `pbloodg`, `paddress`, `pdistrict`, `pstate`, `pcontact`, `pincode`, `problem`,`verify`) VALUES ('$emailid','$name','$age','$gender','$date','$doctor','$bloodgroup','$address','$district','$state','$mobile','$pincode','$problem','$verify')";
	
	$run=mysqli_query($conn, $q);
	//echo ;
	if($run && $_POST['date'] > date("Y-m-d"))
	{
		echo "<script>window.alert('Patient Registered Successfully Here ..!')</script>";
		echo '<script>window.open("profile.php","_self")</script>';
		
	}
	elseif($date < date("Y-m-d") || $date == date("Y-m-d"))
	{
		
	
				echo "<script>window.alert('You Can not make any appoint in the Past Please Select Next date of Today.!')</script>";
				echo '<script>window.open("appointment.php","_self")</script>';
	
		
	}
	else
	{
		
		echo "<script>window.alert('Today Already You have been fill the Appointment form..!')</script>";
		echo '<script>window.open("profile.php","_self")</script>';
		
		
		
		}
}

?>
	
        <!-- /.row -->
          
        <!-- /.row -->


        <!-- Footer -->
        <footer align="center">
            <div class="row">
                <div class="col-lg-12">
					<p>©2016 Nit Calicut.All Rights Reserverd</p>
                </div>
            </div>
        </footer>
  
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>
   
</body>

</html>
