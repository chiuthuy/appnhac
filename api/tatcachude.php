<?php
	require("connect.php");
	
	class ChuDe{
		function ChuDe($idchude,$tenchude,$hinhchude){
			$this->IdChuDe=$idchude;
			$this->TenChuDe=$tenchude;
			$this->HinhChuDe=$hinhchude;
		}
	}
	$query="SELECT * From chude";
	$data=mysqli_query($con,$query);
	$arraychude=array();
	while ($row=mysqli_fetch_assoc($data)) {
		array_push($arraychude, new ChuDe($row['IdChuDe']
										,$row['TenChuDe']
										,$row['HinhChuDe']));
	}
	echo json_encode($arraychude);

?>