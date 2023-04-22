<?php
	include_once('../utils.php');
	$maKM = $_GET['maKM'];
	$coupon_info = getData('SELECT * FROM khuyenmai WHERE maKM = ' . $maKM, 1);
	die(json_encode($coupon_info));