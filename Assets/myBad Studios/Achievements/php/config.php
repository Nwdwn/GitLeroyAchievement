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
	$loginURL		="http://localhost/phpmyadmin/db_structure.php?server=1&db=db311709_achievement_system&token=0cbf977c27f783dde1fe77da4f8528ee306";
	$username		="root";
	$password		="password";
	$database		="public";
}
