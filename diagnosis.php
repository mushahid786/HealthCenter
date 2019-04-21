<html>
<head>

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
	background-image:url(image.jpeg);
	
	  background-position: center;

   
	border-radius:0px;
	width:100%;
	margin-left:auto px;
	
}

.contain{

	margin-top:-60px;
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
#home{
	background-color:#046868;
		
	
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
		
	
		background-color:#193631;
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
</style>
    
</head>

<body>

	
  <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed" role="navigation">
	<div id ="header">
		<div class="row">
			<div class="col-md-12">
				<div class="col-md-2">
					<h5 style="color:white; font-size:11px; margin-left:-100px;"> Welcome Guest | Sign in</h5>
					</div>
					<div class="col-md-2">

					<h5 style="color:white; font-size:11px; margin-left:px;"> Language English | Hindi</h5>
					</div>
					<div class="col-md-2">
					<h5 style="color:white; font-size:11px; margin-left:px;"> Font Size A | A- | A+</h5>
					</div>
					<div class="col-md-2">
					<h5 style="color:white; font-size:11px; margin-left:px;"> Webpage</h5>
					</div>
					<div class="col-md-3">
					<h5 style="color:white; font-size:11px; margin-left:px;"> Time |</h5>
					</div>
					<div class="col-md-1" style="font-size:4px;float:left;margin-left:px;"> 
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
	</div>
	<div class="containe">
	<div class="row">
		<div class="col-md-12">
			<div class="col-md-2" style="margin-top:px;margin-left:-14px;">
				<div style="height:auto; width:300px; background-color:;">
					<div style="height:auto;width:100%; background-color:white;">
					<p style="float:left;color:green; font-size:10px;margin-left:0px; background-color:white;border-radius:100px ">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-fw fa-compass"></i>&nbsp;
					NIT CALICUT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					HEALTH &nbsp;CENTER&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
					</div>
					<div style="height:auto;width:80%; background-color:white;margin-top:px;">
					<p style="float:left;color:green; font-size:10px;margin-left:0px; background-color:white;border-radius:100px ">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-fw fa-compass"></i>&nbsp;
					SEARCH &nbsp;&nbsp;&nbsp;FACILITY&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
					</div>
					<div style="height:auto;width:80%; background-color:white;">
					<p style="float:left;color:green; font-size:10px;margin-left:0px; background-color:white;border-radius:100px ">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-fw fa-compass"></i>&nbsp;
					NEWS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BULLETIN&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
					</div>
					<div style="height:auto;width:60%; background-color:white;">
					<p style="float:left;color:green; font-size:10px;margin-left:0px; background-color:white;border-radius:100px ">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-fw fa-compass"></i>&nbsp;
					CONTACT&nbsp;&nbsp; MAIL&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
					</div>
					<div style="height:auto;width:40%; background-color:white;">
					<p style="float:left;color:green; font-size:10px;margin-left:0px; background-color:white;border-radius:100px ">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-fw fa-compass"></i>&nbsp;
					<a style="color:green;"href="index.php">ABOUT</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
					</div>
				</div>
			</div>
				<div class="col-md-9">
					<div id ="nit">
						<i class="fa fa-fw fa-" style="font-size:33px; width:100%;float:left;">Health Center National Institute of Technology Calicut-673601
			
						</i>
				
					</div>
				</div>			
		</div>	
	</div>
	</div>
     <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button  style="color:white;background-color:#185953;font-size:;width:90px;"type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <p class="fa fa-sign-in">&nbsp;Menu</p>
                    <span  class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
			<div id ="home">
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-center">
                    <li  style="background-color:#c18765; margin-left:-15px;">
                        <a style="color:green;"href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="diagnosis.php">Diagnostic Test</a>
                    </li>
                    <li>
                        <a href="physician.php">Physician</a>
                    </li>
					<li>
                        <a href="userlogin.php">Book a Consultation</a>
                    </li>
					<li>
                        <a href="specialist.php">Special Facilities</a>
                    </li>
					<li >
                        <a href="contact.php" class="fa fa-phone">  Contact</a>
                    </li>
					<li>
                        <a href="signup.php">Admin Login</a>
                    </li>
					<li>
                        <a href="userlogin.php">Login/Register</a>
                    </li>
					<li style="margin-top:10px; margin-left:-30px;">
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;		
				 <input type="text" name="name" >
                    </li>
					<li style="margin-top:10px;color:#c12345;float:left;">
					<input type="submit" name="submit" value="Search">
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
                <h1 class="page-header" style="background-color:white;padding:10px;">
                   <p style ="color:#c12345;margin-left:10px; margin-right:0px; font-size:24px;"> <marquee scrollamount="10"><i>Welcome Department of mathematics  </i></marquee>
                </h1>
				
            </div>
			</div>
 <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
		<div class="col-md-1" style="margin-left:px;">
			</div>
		<div class="col-md-10" style="background-color:white;">
		   <div class="col-md-12"  style="padding:10px;">
                <div class="panel panel-default">
				<div class="panel-heading" style="background-color:#185953;">
                        <h4 style="color:white;"><i class="fa fa-bullhorn" style="margin-right: 5px;"></i>Diagnosis </h4>
                    </div>
         <div class="panel-body" style="background-color:#c99891;">
              
			<h1><font color="Black" face="BatangChe" size="6"><b>Our personal approach creates a seamless patient experience<b></h1></font>
			<p><a href="calcium_scanning.php"><b><font color ="Black" size="5"> 1.CALCIUM SCANNING</font><br><br>
			<a href="colonoscopy.php"><b><font color ="Black" size="5">2.COLONOSCOPY</font><br><br>
			<a href="ct_angiography.php"><b><font color ="Black" size="5">3.CT CORONARY ANGIOGRAPHY</font><br><br>
			<a href="ecg.php"><b><font color ="Black" size="5">4.ECG TEST<br></font><br>
			<a href="echocardiography.php"><b><font color ="Black" size="5">5.ECHOCARDIOGRAPHY</font></td><br><br></a>
			<table width="auto" height="100">
					<tr>
					<th color="black" align="center"><h2>Our facilities for diagnostic tests</h2></th>
					</tr>
					<tr>
					<td>
					<h3> The Physicians' Clinic is situated at 13-14 Devonshire Street where we have access to the most up-to-date diagnostic facilities available.
					 Our physicians have fast access to a range of imaging techniques and can often offer patients a CT scan or an X-ray on the day of their consultation. 
					 If having tests onsite there may be a short wait, but patients have the peace of mind of knowing that their symptoms are being investigated as soon as possible.
					 After discussing the findings with the relevant radiologist, your consultant should be able to see you after your scan, so that your treatment plan can be put in place. </h3>
					 </td>
					 </tr>
			</table>
					
					<table width="auto" height="100">
					<tr>
					<th color="black" align="center"><h2>x-ray on demand</h2></th>
					</tr>
					<tr>
					<td>
					<h3>If your consultant recommends an X-ray, and you choose to have this done onsite,
 we can usually offer this on the same day. 
 You will be asked to wait in the comfortable waiting area until the equipment is free, 
 and then one of our staff will bring you downstairs to the X-ray room. 
 All X-rays are done at a low dose, and digital images are available instantly for analysis.</h3>
					 </td>
					 </tr>
					</table>
					
					
					<table width="auto" height="100">
					<tr>
					<th color="black" align="center"><h2>CT SCANNING</h2></th>
					</tr>
					<tr>
					<td>
					<h3>We have access to a high definition CT scanner that uses a low dose of X-rays to produce a detailed image. 
                    Use of low dose CT scanning is particularly important when we are performing screening tests, such as cardiac imaging. 
                    You can be reassured that your exposure to X-rays will be kept to a minimum, even if you need follow up scanning.</h3>
					 </td>
					 </tr>
					</table>
					
					<table width="auto" height="100">
					<tr>
					<th color="black" align="center"><h2>MRI scanning</h2></th>
					</tr>
					<tr>
					<td>
					<h3>We have the latest, state-of-the-art, 3-tesla MRI scanner, which is available for neuroimaging, full body imaging and musculo-skeletal diagnosis. 
 The scanner is the most powerful available for clinical use and it shortens the scan time considerably. 
 We are keen to make sure that patients have the most pleasant MRI scan possible therefore if you are having your scan done onsite, 
 so we offer constant reassurance and a choice of music for you to listen to during your time in the scanner.
Some patients can feel claustrophobic, but with a whole body scan in our wide-bore scanning taking as little as 40 minutes, most can tolerate the test.</h3>
					 </td>
					 </tr>
					</table>
                
            
					<table width="auto" height="100">
					<tr>
					<th color="black" align="center"><h2>Ultrasound scanning</h2></th>
					</tr>
					<tr>
					<td>
					<h3>This is a very quick and easy test to do, and can be completed within half an hour.
 Our consultant radiologists can use the ultrasound scanner purely for diagnostics,
 but they are also experienced in interventions such as joint injections and image-guided biopsies.</h3>
					 </td>
					 </tr>
					</table>
					
					<table width="auto" height="100">
					<tr>
					<th color="black" align="center"><h2>Specific diagnostics tests available</h2></th>
					</tr>
					<tr>
					<td>
					<h3> Depending on your diagnostic requirements, tests are often conducted within The Physicians' 
 Clinic itself or at a nearby private facility. </h3>
 <br/>
 <li><h3>Cardiology tests: electrocardiograms (ECGs), echocardiography, calcium scanning and CT coronary angiography.</h3></li>
 <li><h3>Gastroenterology tests: Endoscopy and colonoscopy, ERCP, non-invasive testing for liver fibrosis markers.</h3></li>
 <li><h3>Respiratory function tests: lung function assessments, fibreoptic bronchoscopy and endobronchial ultrasound.</h3></li>
					 </td>
					 </tr>
					</table>
                    
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
