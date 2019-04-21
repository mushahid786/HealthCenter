<?php

//session_start();
$conn=mysqli_connect("localhost","root","nsl","healthcenter");

$mobile=$_GET['ID'];

$query1="DELETE FROM `patient_appointment` WHERE pcontact='$mobile'";

if(mysqli_query($conn,$query1))
{
echo "<script>window.alert('This Appointment Request has been Rejeted Successfully!')</script>";
echo '<script>window.open("verifyappointmentrequest.php","_self")</script>';
}
?>
