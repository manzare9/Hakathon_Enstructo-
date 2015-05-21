<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: tloginview.php"); // Redirecting To Home Page
}
?>