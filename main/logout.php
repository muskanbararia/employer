<?php
session_start();
if(isset($_SESSION['candidate'])){
	
	unset($_SESSION['candidate']);
	session_destroy();
	echo"<script>window.open('./index.php','_self')</script>";
}
if(isset($_SESSION['employer'])){
	
	unset($_SESSION['employer']);
	session_destroy();
	echo"<script>window.open('./index.php','_self')</script>";
}