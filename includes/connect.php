<?php 
$conn = mysqli_connect("localhost", "root", "", "project");

if (!$conn) {
	// code...
	die("connection failed". mysqli_error());
}

