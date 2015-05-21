<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: loginadminview.php"); // Redirecting To Home Page
}
?>