<?php 
require "connect.php";
	class Baihat{
		function Baihat($idbaihat,$tenbaihat,$hinhbaihat,$casi,$linkbaihat,$luotthich){
			$this->Idbaihat=$idbaihat;
			$this->Tenbaihat=$tenbaihat;
			$this->Hinhbaihat=$hinhbaihat;
			$this->Casi=$casi;
			$this->Linkbaihat=$linkbaihat;
			$this->Luotthich=$luotthich;
		}
	}
	$arraycasi=array();
	$query="SELECT * FROM baihat ORDER BY LuotThich DESC LIMIT 5";
	$data=mysqli_query($con,$query);
	while ($row=mysqli_fetch_assoc($data)) {
		array_push($arraycasi, new Baihat($row['IdBaiHat']
										,$row['TenBaiHat']
										,$row['HinhBaiHat']
										,$row['CaSi']
										,$row['LinkBaiHat']
										,$row['LuotThich']));
		# code...
	}
	echo json_encode($arraycasi);
?>