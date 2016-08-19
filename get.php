<?php
	require "database.php";
	deletekhachhang($_REQUEST["id"]);
	deleteloaisanpham($_REQUEST["id"]);
	deletesanpham($_REQUEST["id"]);
	deletehoadon($_REQUEST["id"]);
	deletechitiethoadon($_REQUEST["id"]);
?>