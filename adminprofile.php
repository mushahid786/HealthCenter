
<?php
$conn=mysqli_connect("localhost","root","nsl","healthcenter");
session_start();

  $user=$_SESSION['user'];
    $user;

 
	//echo $_SESSION['name'];
	
	 
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
background-color:white;
	margin-top:-50px;
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
	font-size:15px;
	padding:2px;
	color:green;
	-webkit-transform: rotate(359deg);
	
	}
	
	
	
	
.cont{
	
	width:350px;
	background-color:#193631;
	margin-left:-50px;
	padding:20px;
	
	
	}	
.accordion{
	
	width:100%;
	padding:0;
	margin:0;
	list-style-type:none;
	
	
	
	}
	
.accordion-header{
	
	display:black;
	width:300px;
	background-color:;
	color:white;
	text-decoration:none;
	font-size:1.2em;
	text-transform:uppercase;
	text-shadow:1px 1px 0 rgba(0,0,0,.1);
	
	
	
	
	}
.accordion-header :hover{
	
	color:red;
	
	
	}
.accordion-content a{
	
	font-size:15px;
	background-color:red;
	width:120%;
	
	
	
	
	
	}
.accordion-content {
	
	padding:0;
	height:0;
	overflow:hidden;
	width:700px;
	
	
	
	
	}	
.accordion-content:target {
	
	height:auto;
	padding:30px;
	
	
	
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
							<a style="color:green; width:80px;"href="index.php">Home </a>
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
				  <i class="fa fa-"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dasboard => <?php echo $user;?> Profile</marquee> </i> </p>
                </h1>	
            </div>
		</div>
		
<!-- Marketing Icons Section -->





	<div class="container"> 
       <div class="row">
			<div class="col-md-4"  style="background-color:#ccc;height:auto;float:;" >
                <div class="panel panel-default">
                    <div class="panel-body"  style="background-color:#ccc;height:auto;float:;">	
						<div class="row">  
							<div class="col-md-12"  style="padding:0px;">
								<div class="panel panel-default">
									<div class="panel-body" style="background-color:#193631;">
										<div id ="in">
											<ul >
											  <a href="logout.php" style="color:#c89345;"> <p style="float:right;width:100%;" ><i class="fa fa-sign-in" aria-hidden="true"></i>
												&nbsp;LogOut</button></p></a></br>
												
												<a href="changepass.php"style="color:#c89345;"> <p style="float:right;width:100%;"><i class="fa fa-sign-in" aria-hidden="true"></i>&nbsp;Change Password</p></a></br></br>
												
										
										
										
										<div class="cont">
											<ul class ="accordion">
												<li>
													<div class="row" >
														<div class="col-md-12"  style="padding:0px;color:black;">
																<div class="panel panel-default" style="outline: 1px dashed #26A65B;">
																	<div class="panel-heading">
																		<a href="#first" class="accordion-header"><i class="fa fa-" style="color:green"> &nbsp;Add Details </i></a>
																		
																		<div class ="accordion-content" id="first" >
																		<a href ="adddoctordetail.php" style="color:red;"> <button>Add Doctor Details.!<br></button></a><br><br>
																		<a href ="#" style="color:red;"> <button>Add Blood Donner Details.! </button></a><br><br>
																		<a href ="#" style="color:red;"><button>dd Emergency Ward Details.!<br></button></a>
																		
																		
																	</div>
																</div>
															</div>
														</div>
												</li>
												
												<li>
													<div class="row">
														<div class="col-md-12" style="padding:0px;">
																<div class="panel panel-default" style="outline: 1px dashed #26A65B;">
																	<div class="panel-heading" >
																		<a href="#fourth" class="accordion-header"><i class="fa fa-" style="color:green"> &nbsp;Edit Details </i></a>
																		
																		<div class ="accordion-content" id="fourth">
																		<a href ="#" style="color:red;"><button> Edit Doctor Details.!<br></button></a><br><br>
																		<a href ="#" style="color:red;"><button> Edit Blood Donner Details.! <br></button></a><br><br>
																		<a href ="#" style="color:red;"><button> Edit Emergency Ward Details.! <br></button></a>
																		
																	</div>
																</div>
															</div>
														</div>
												</li>
												<li>
													<div class="row">
														<div class="col-md-12" style="padding:0px;color:black;">
																<div class="panel panel-default" style="outline: 1px dashed #26A65B;">
																	<div class="panel-heading" >
																		<a href="#third" class="accordion-header"><i class="fa fa-" style="color:green"> &nbsp;Delete Details </i></a>
																		
																		<div class ="accordion-content" id="third">
																		<a href ="#" style="color:red;"><button> Delete Doctor Details.! <br></button></a><br><br>
																		<a href ="#" style="color:red;"><button> Delete Blood Donner Details.! <br></button></a><br><br>
																		<a href ="#" style="color:red;"><button> Delete Emergency Ward Details.! <br></button></a>
																		
																		
																	</div>
																</div>
															</div>
														</div>
												</li>
												
											</ul>
											</div>
										
										
										
										
										
										
										
											
											</ul>
										</div>
									</div>
								</div>
							 </div>
						</div>        
					</div>
				</div>
			</div>
			 
		
		<div class="col-md-8"  style="background-color:#ccc;height:auto;float:;">
			<div class="row">
				<div class="col-md-12"  style="padding:20px;">
					<div class="panel panel-default">
						<div class="panel-heading" style="background-color:#89966a;height:auto;background-repeat: repeat;
								  background-size: cover;padding:55px;
								 background-image:url(image.jpeg)
								  float:left;width:100%;font-size:16px;">
							   <!-- <img src="mk5.png" style="background-color:red;height:200px;border-radius:100px ;
								  background-repeat: repeat;
								  background-size: cover;float:left;" >-->
							<div class="row">	  
									<div class="col-md-6" style="padding:5px;">	  
										<div id ="appoint" ><a href ="verifyappointmentrequest.php" ><button style="padding:8px;width:280px;;" class="fa fa-">ONLINE APPOINTMENT REQUEST </button></a>
										</div>
									</div>
									<div class="col-md-6" style="padding:5px;">	  
										<div id ="appoint" ><a href ="appointment.php" ><button style="padding:8px;width:280px;" class="fa fa-">AVAILABLE BLOOD </button></a>
										</div>
									</div>
							 </div>
						
							<div class="row">	  
									<div class="col-md-6" style="padding:5px;">	  
										<div id ="appoint" ><a href ="patientmedicalrequest.php" ><button style="padding:8px;width:280px;" class="fa fa-"> MEDICAL CERTIFICATE </button></a>
										</div>
									</div>
									<div class="col-md-6" style="padding:5px;">	  
										<div id ="appoint" ><a href ="appointment.php" ><button style="padding:8px;width:280px;" class="fa fa-"> TREATMENT DETAILS </button></a>
										</div>
									</div>
							 </div>
							 
							 <div class="row">	  
									<div class="col-md-6" style="padding:5px;">	  
										<div id ="appoint" ><a href ="appointment.php" ><button style="padding:8px;width:280px;" class="fa fa-">PRINT MEDICAL CERTIFICATE </button></a>
										</div>
									</div>
									<div class="col-md-6" style="padding:5px;">	  
										<div id ="appoint" ><a href ="appointment.php" ><button style="padding:8px;width:280px;" class="fa fa-">PRINT APPOINTMENT RECIEPT </button></a>
										</div>
									</div>
							 </div>
						</div>
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
