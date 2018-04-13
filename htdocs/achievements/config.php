<?php
// database settings
$isOnline 	= $_REQUEST['online'];
$action		= $_POST['action'];

if ($isOnline == "")
	$isOnline = 0;

//online
if ($isOnline == 1)
{
	$loginURL		="";
	$username		="";
	$password		="";
	$database		="";
}
else
{
	//offline
	$loginURL		="localhost";
	$username		="root";
	$password		="password";
	$database		="db311709_achievement_system";
}
