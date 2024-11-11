<?php

$to 		= 'demo@demo.com';
$headers	= 'FROM: "'.$email.'"';

//All form values
$first_name 		= 	$_POST['first_name'];
$last_name 	= 	$_POST['last_name'];
$middle_name 	= 	$_POST['middle_name'];
$email 		= 	$_POST['email'];
$telephone_number 			= 	$_POST['telephone_number'];
$output 	= 	"Name: ".$name.
							"\nfirst_name: ".$first_name.
							"\nEmail: ".$email.
							"\nPhone: ".$phone.
							"\n\nMessage: ".$msg;

$send		= mail($to, $name, $output, $headers);