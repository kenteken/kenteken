<?php 
session_start(); 

if(!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] == false) 
{ 
    header('Location: login_form.php'); 
    exit(); 
} 

echo 'Welkom '.$_SESSION['gebruiker'].' wat leuk dat je er weer bent.'; 
?>