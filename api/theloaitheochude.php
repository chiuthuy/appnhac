<?php

	require "connect.php";

	class TheLoai{
		function TheLoai($idtheloai,$idchude,$tentheloai,$hinhtheloai){
			$this->IdTheLoai=$idtheloai;
			$this->IdKeyChuDe=$idchude;
			$this->TenTheLoai=$tentheloai;
			$this->HinhTheLoai=$hinhtheloai;
		}
	}
	$arraytheloai=array();
	$idchude=$_POST['idchude'];
	$quere="SELECT * FROM theloai where IdChuDe='$idchude'";
	$data=mysqli_query($con,$quere);
	while ($row=mysqli_fetch_assoc($data)) {
		array_push($arraytheloai, new TheLoai($row['IdTheLoai']
										,$row['IdChuDe']
										,$row['TenTheLoai']
										,$row['HinhTheLoai']));
	}
	echo json_encode($arraytheloai);
?>