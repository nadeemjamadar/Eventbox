<?php
include "connectdb.php";
session_start();
$user=$_SESSION['user']['id'];
$id=$_POST['id'];
$title=$_POST['title'];
$logo=$_POST['logo'];
$file=$_POST['file'];
$s_month=$_POST['s_month'];
$s_day=$_POST['s_day'];
$s_year=$_POST['s_year'];
$e_month=$_POST['e_month'];
$e_day=$_POST['e_day'];
$e_year=$_POST['e_year'];
$s_hour=$_POST['s_hour'];
$s_minute=$_POST['s_minute'];
$s_ch=$_POST['s_ch'];
$e_hour=$_POST['e_hour'];
$e_minute=$_POST['e_minute'];
$e_ch=$_POST['e_ch'];
$description=$_POST['description'];
$country=$_POST['country'];
$state=$_POST['state'];
$city=$_POST['city'];
$street=$_POST['street'];
$deadline=$_POST['deadline'];
$slot=$_POST['number'];
$contact=$_POST['contact'];
$privacy=$_POST['privacy'];
$password=$_POST['password'];
$status=$_POST['status'];
$con=connectdb();
mysqli_query($con,"UPDATE `event` SET `Event_Title`='$title',`Event_Description`='$description',`Event_ContactNumber`='$contact',`Event_Privacy`='$privacy',`Event_Deadline`='$deadline',`Event_Slot`='$slot',`Event_File`='$file',`Event_State`='$state',`Event_Country`='$country',`Event_City`='$city',`Event_Street`='$street',`Event_Logo`='$logo',`Event_Password`='$password',`Event_StartHour`='$s_hour',`Event_StartMinute`='$s_minute',`Event_StartCH`='$s_ch',`Event_EndHour`='$e_hour',`Event_EndMinute`='$e_minute',`Event_EndCH`='$e_ch',`Event_StartDay`='$s_day',`Event_StartMonth`='$s_month',`Event_StartYear`='$s_year',`Event_EndDay`='$e_day',`Event_EndMonth`='$e_month',`Event_EndYear`='$e_year',`Event_Status`='$status' WHERE `Event_ID`='$id' AND `User_ID`='$user'");

/*

changes the event details on the database to the new event datils

*/

?>
