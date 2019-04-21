
<?php
$conn=mysqli_connect("localhost","root","nsl","healthcenter");
session_start();
if($_SESSION['email'])
{
 echo $emailid = $_SESSION['email'];
 
    
			


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
	background-color:white;
	background-image:url(imag.jpeg);
	
	

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
		<div class="col-md-9" style="background-color:#ccc;height:auto;">
			<div class="row">
				<div class="col-md-12"  style="padding:20px;">
					<div class="panel panel-default" style="outline: 1px dashed #26A65B; color:" >
						<div class="panel-heading" style="background-color:#185953;">
                        <h4 style="color:white;"><i class="fa fa-" style="margin-right: 5px;">&nbsp;&nbsp;&nbsp;Fill Medical Certificate Request Form ! </i></h4></div>
							<div class="panel-body" style="" >
							
							<?php	
							
							
							$q1 = "SELECT * FROM `verifyappointment` WHERE email='$emailid'";
							$result = mysqli_query($conn, $q1);
								
								if(mysqli_num_rows($result) > 0){
									$a=0;
									
									
									while($row=mysqli_fetch_array($result))
									{
									
										$name=$row['name'];
										$age=$row['age'];
										$gender=$row['gender'];
										$appointmentdate=$row['appointmentdate'];
										if($a==0)
										{
											$leavedate=$appointmentdate;
											$a=1;
										}
										$appointdoctor=$row['appointdoctor'];
										$mobile=$row['mobile'];
										//$name=$row['name'];
										//$name=$row['name'];
									
										$date = $appointmentdate;
										$appointmentdate= date('Y-m-d', strtotime($date. ' + 7 days'));
									
									
									
									//echo "<br>sssssss";
									
									
									}
								}	
								
									
								?>
								
							<form method="POST" action ="medicalcertificaterequest.php">
									<br>	
							<div class="row" style="in-line;">
								
								<div class="col-md-1"></div>
									<div class="col-md-4" style="padding:5px;font-size:25px;" ><i class="fa fa-">Name of Patient:</i></div>
									<div class="col-md-6" style="padding:5px;">	  
										<input type="text" name ="patientname" value="<?php echo $name;?>" placeholder="" required="required" style ="padding:6px;width:100%;color:green">
									</div>
									
							 </div>
							 <hr>
				
							<div class="row">	
								<div class="col-md-1"></div>  
									<div class="col-md-4" style="padding:5px;font-size:25px;" ><i class="fa fa-">Patient's Age:</i>
									
									</div>
									<div class="col-md-6" style="padding:5px;">	  
										<input type="number" name="patientage" value="<?php echo $age;?>" required="required" style ="padding:6px;width:100%;">
									</div>
							 </div>
							<hr>
							 <div class="row">
								 
								 <div class="col-md-1"></div>	  
									<div class="col-md-4" style="padding:5px;font-size:25px;" ><i class="fa fa-">Gender:</i></div>
									
										<div class="col-md-6" style="padding:5px;">	   
										<div id ="appoint" ><input type="text" name="patientgender" required="required" value="<?php echo $gender;?>" style ="padding:6px;width:100%;"> <i class="fa fa-"></i></div>
										</div>
										
 
							 </div>
							 <hr>
							 <div class="row">	   
								  <div class="col-md-1"></div>	
									<div class="col-md-4" style="padding:5px;font-size:25px;" ><i class="fa fa-">From Date:</i></div>
									
									<div class="col-md-6" style="padding:5px;">	  
										<input type="text" name="todate"  value="<?php echo $leavedate;?>" style ="padding:6px;width:100%;">
									</div>
									
									
									
							</div>
							
							<hr>
							
							 <div class="row">
								 <div class="col-md-1"></div>	
									<div class="col-md-4" style="padding:5px;font-size:25px;" ><i class="fa fa-">To Date:</i></div>
									
									
									<div class="col-md-6" style="padding:5px;">	  
										<input type="text" name="fromdate"  value="<?php echo $appointmentdate;?>" style ="padding:6px;width:100%;">
									</div>
							
							 </div>
							
							<hr>
							 
							 <div class="row">
								 <div class="col-md-1"></div>	
									<div class="col-md-4" style="padding:5px;font-size:25px;" ><i class="fa fa-">Doctor Name :</i></div>
									
									
									<div class="col-md-6" style="padding:5px;">	  
										<input type="text" name="appointeddoctor"  value="<?php echo $appointdoctor;?>" style ="padding:6px;width:100%;">
									</div>
							
							 </div>
							
							<hr>
							
								<div class="row">
									 <div class="col-md-1"></div>	
								<div class="col-md-4" style="padding:5px;font-size:25px;" ><i class="fa fa-">Contact:</i></div>
									
									<div class="col-md-6" style="padding:5px;">	  
										<input type="text"  name="patientmobile" maxlength="10"  style ="padding:6px;width:100%;" value="<?php echo $mobile;?>" pattern="\d{10}" required/>
									</div>	 
									
									
									
							 </div>
							
							<hr>
							
							
						
							
							
							<footer align="center" style="background-color:#185953;">
								<div class="row" >
										<div class="col-md-12">
										<input type="submit" name="medicalrequest"  style="color:green;width:150px;font-size:20px;margin-left:0px;;border-radius:10px;" value="Submit Request">

					
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



	if(isset($_POST['medicalrequest']))
{
	echo $name=$_POST['patientname'];
	$age=$_POST['patientage'];
	$gender=$_POST['patientgender'];
	$fromdate=$_POST['fromdate'];
	$todate=$_POST['todate'];
	$doctor=$_POST['appointeddoctor'];
	
	//$bloodgroup=$_POST['bloodgroup'];
	//$address=$_POST['address'];
	//$district=$_POST['district'];
	//$state=$_POST['state'];
	$mobile=$_POST['patientmobile'];
	//$pincode=$_POST['pincode'];
	//$problem =$_POST['problem'];
	//$verify=0;
	//$pass1=$_POST['pass1'];
	echo $emailid;
	//if($_POST['date'] != date("Y-m-d"))
	$query ="INSERT INTO `medicalcertifiacte` VALUES ('$emailid' , '$name' , '$age' , '$gender' , '$fromdate' , '$todate' , '$doctor' , '$mobile' )";
	
	$result = mysqli_query($conn, $query);
	//echo ;
	if($result)
	{
		echo "<script>window.alert('Your Request has been Registered Successfully ..!')</script>";
		echo '<script>window.open("profile.php","_self")</script>';
		
	}
	else
	{
		
		echo "<script>window.alert('Already You have been Registered ..!')</script>";
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
					<p>©2019 Nit Calicut.All Rights Reserverd</p>
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
