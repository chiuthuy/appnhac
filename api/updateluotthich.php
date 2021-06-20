<?php
	require "connect.php";
	$luotthich=$_POST['luotthich'];
	$idbaihat=$_POST['idbaihat'];
	$query="SELECT LuotThich From baihat where IdBaihat='$idbaihat'";
	$dataluotthich=mysqli_query($con,$query);
	$row=mysqli_fetch_assoc($dataluotthich);
	$tongluotthich=$row['LuotThich'];
	if (isset($luotthich)) {
		$tongluotthich= $tongluotthich+$luotthich;
		$querysum="UPDATE baihat SET LuotThich = '$tongluotthich' Where IdBaihat='$idbaihat'";
		$dataupdate=mysqli_query($con,$querysum);
	}
	if ($dataupdate) {
		echo "ok";
	}else{
		echo "loi";
	}
?>