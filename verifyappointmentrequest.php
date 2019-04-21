
<?php
$conn=mysqli_connect("localhost","root","nsl","healthcenter");
session_start();
if($_SESSION['user'])
{
 echo $user = $_SESSION['user'];
 
  $q1 = "SELECT * FROM `user_registration` where user='$emailid'";
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
	
	padding:px;
	color:red;
	
	
	}
	
	
#verify:hover{
	
	background-color:#185953;
	
	color:white;
	
	
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
							<a style="color:green; width:80px;"href="adminprofile.php">Home </a>
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
			
			 
		
		<div class="col-md-12" style="background-color:white;height:auto;">
			<div class="row">
				<div class="col-md-12"  style="padding:20px;">
					<div class="panel panel-default" style="outline: 1px dashed #26A65B; color:" >
						<div class="panel-heading" style="background-color:#185953;">
                        <h4 style="color:white;"><i class="fa fa-" style="margin-right: 5px;">&nbsp;&nbsp;&nbsp;Verify All Appointment Every Date ! <?php echo date("d-m-Y");?> </i></h4></div>
							<div class="panel-body">
							<form method="POST" action ="verifyappointmentrequest.php">
	
							<div class="row">
							
								<div class="col-md-2"><input type="text" name="mobile" placeholder="Enter Mobile Number" style="padding:3px;font-size:15px;width:100%;"></div>
								<div class="col-md-2"><input type="submit" name="verify1" id="verify" value="Search" style="padding:4px;font-size:15px;width:90%;">
								</div>
						 
						   
								<div class="col-md-4"></div>
								
								<div class="col-md-2"><input type="date" name="date" style="padding:3px;font-size:15px;width:100%;"></div>
								<div class="col-md-2"><input type="submit" name="verify" id="verify" value="Verify All" style="padding:4px;font-size:15px;width:90%;">
							
							</div>
								
						  </form>			
								
								
								
								
								
<?php


	
	if(isset($_POST['verify1']))
{
	$mobile = $_POST['mobile'];
	//$verify=0;
	echo '<p  style="color:red;">&nbsp;&nbsp;&nbsp;&nbsp;'.$mobile.'</p>';
	session_start();
	$_SESSSION['mobile']=$mobile;

									echo '<table width="1100" height="auto"  rules="rows"  padding="50">
									
									<tr style="background-color:#ccc;">
									
									</tr>';
									
									$query="SELECT * FROM `patient_appointment` WHERE pcontact='$mobile'";
									$run=mysqli_query($conn, $query);
									
									while($row=mysqli_fetch_array($run)){
										//session_start();
									//$_SESSION['contact']=$row['pcontact'];
									
									
									echo "<tr style='padding:0px;'>";
									echo "<td style='padding:15px;'>".$row['pname']."</td>";
									echo "<td style='padding:10px;'>".$row['page']."</td>";
									echo "<td style='padding:10px;'>".$row['pgender']."</td>";
									echo "<td style='padding:10px;'>".$row['appointdate']."</td>";
									echo "<td style='padding:10px;'>".$row['doctorname']."</td>";
									echo "<td style='padding:10px;'>".$row['pbloodg']."</td>";
									echo "<td style='padding:10px;'>".$row['paddress']."</td>";
									echo "<td style='padding:10px;'>".$row['pdistrict']."</td>";
									echo "<td style='padding:10px;'>".$row['pstate']."</td>";
									echo "<td style='padding:10px;'>".$row['pincode']."</td>";
									//echo "<td style='padding:10px;'>".$row['pcontact']."</td>";
									echo "<td style='padding:10px;font-size:19px;'>
									
									<button><a href='rejectappointmentrequest.php?ID={$row['pcontact']}'>Reject</a></button>
									
									
									
									</td>";
									
									echo "</tr>";
									
									
									
									
									}
									
							
									
								echo "</table>";
	
}
















	if(isset($_POST['verify']))
{
	
	//$verify=0;
	$date = $_POST['date'];
	
	$sql="SELECT * FROM `patient_appointment` WHERE appointdate ='$date'";
	$result=mysqli_query($conn,$sql);
	
	if(mysqli_num_rows($result) > 0)
	{
		$i=0;
		//echo "sssssssscc";
			while($row=mysqli_fetch_array($result))
			{
				
			    $emailid=$row['email']; 
				$name=$row['pname'];
				$age=$row['page'];
				$gender=$row['pgender'];
				$date=$row['appointdate'];
				$doctor=$row['doctorname'];
				
				$bloodgroup=$row['pbloodg'];
				$address=$row['paddress'];
				$district=$row['pdistrict'];
				$state=$row['pstate'];
				$mobile=$row['pcontact'];
				$pincode=$row['pincode'];
				//$problem =$row['problem'];
				//$i=$i+1;
				$sql = "INSERT INTO `verifyappointment` VALUES ('$i','$emailid','$name','$age','$gender','$date','$doctor','$bloodgroup','$address','$district','$state','$mobile','$pincode')";
				
				$result=mysqli_query($conn,$sql);
				//echo ;
				if($result)
				{
					//echo $emailid=$row['email']; 
					$query1="DELETE FROM `patient_appointment` WHERE appointdate ='$date'";
					mysqli_query($conn,$query1);
					//echo "<script>window.alert('Patient Registered Successfully Here ..!')</script>";
					//echo '<script>window.open("profile.php","_self")</script>';
					
				}
				else
				{
					
				
							//echo "<script>window.alert('You Can not make any appoint in the Past Please Select Next date of Today.!')</script>";
							//echo '<script>window.open("appointment.php","_self")</script>';
				
					
				}
				
			}
			echo "<script>window.alert('Verified Appointment Request by Admin Successfully ..!')</script>";
	}
	else
	{
		
		echo "<script>window.alert('There is no appointment request on this date')</script>";
		echo '<script>window.open("verifyappointmentrequest.php","_self")</script>';
		
		}
}

?>
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								<br><br>
								<table width="1100" height="auto" rules="rows">
									<tr></tr>
									<tr style="background-color:#ccc;">
									<th><div class="col-md-1" style="padding:10px;font-size:20px;" ><i class="fa fa-"><b>Name<b></i></div></th>
									<th><div class="col-md-2" style="padding:10px;font-size:20px;" ><i class="fa fa-"><b>Age</i></div></th>
									<th><div class="col-md-1" style="padding:10px;font-size:20px;" ><i class="fa fa-"><b>Gender</i></div></th>
									<th><div class="col-md-3" style="padding:10px;font-size:20px;width:100%;" ><i class="fa fa-"><b>Appointment Date </i></div></th>
									<th><div class="col-md-1" style="padding:10px;font-size:20px;" ><i class="fa fa-"><b>Doctor</i></div></th>
									<th><div class="col-md-1" style="padding:10px;font-size:20px;width:100%;" ><i class="fa fa-"><b>Blood Group</i></div></th>
									<th><div class="col-md-1" style="padding:10px;font-size:20px;" ><i class="fa fa-"><b>Adress</i></div></th>
									<th><div class="col-md-1" style="padding:10px;font-size:20px;" ><i class="fa fa-"><b>District</i></div></th>
									<th><div class="col-md-2" style="padding:10px;font-size:20px;width:100%;" ><i class="fa fa-"><b>Sate</i></div></th>
									<th><div class="col-md-2" style="padding:10px;font-size:20px;width:100%;" ><i class="fa fa-"><b>Pin Code</i></div></th>
									
									<th><div class="col-md-2" style="padding:5px;font-size:20px;width:100%;" ><i class="fa fa-"><b>Contact</i></div></th>
								
									</tr>
								
									<?php
									
									$query="SELECT * FROM `patient_appointment`";
									$run=mysqli_query($conn, $query);
									
									while($row=mysqli_fetch_array($run)){
									
									
									
									echo "<tr>";
									echo "<td style='padding:10px;'>".$row['pname']."</td>";
									echo "<td style='padding:10px;'>".$row['page']."</td>";
									echo "<td style='padding:10px;'>".$row['pgender']."</td>";
									echo "<td style='padding:10px;'>".$row['appointdate']."</td>";
									echo "<td style='padding:10px;'>".$row['doctorname']."</td>";
									echo "<td style='padding:10px;'>".$row['pbloodg']."</td>";
									echo "<td style='padding:10px;'>".$row['paddress']."</td>";
									echo "<td style='padding:10px;'>".$row['pdistrict']."</td>";
									echo "<td style='padding:10px;'>".$row['pstate']."</td>";
									echo "<td style='padding:10px;'>".$row['pincode']."</td>";
									echo "<td style='padding:10px;'>".$row['pcontact']."</td>";

									echo "</tr>";
									
									}
									
									?>
									
								</table>
									
							 </div>
							<br
							
							
							
							
								
						</div>   
					</div>
				</div>
      
			</div>
			</div> 
		</div>
  
     
</div>
	

	
		

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
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
