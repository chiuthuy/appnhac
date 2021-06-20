<?php
require "connect.php";
$query = "SELECT quangcao.Id, quangcao.Hinhanh, quangcao.Noidung, quangcao.IdBaiHat, baihat.TenBaiHat, baihat.HinhBaiHat FROM `baihat` INNER JOIN `quangcao`ON quangcao.IdBaiHat = baihat.IdBaiHat WHERE quangcao.IdBaiHat = baihat.IdBaiHat";
$data=mysqli_query($con,$query); 
class Qangcao{
	function Qangcao($idquangcao,$hinhanh,$noidung,$idbaihat,$tenbaihat,$hinhbaihat){
		$this->IdQuangCao=$idquangcao;
		$this->Hinhanh=$hinhanh;
		$this->Noidung=$noidung;
		$this->IdBaiHat=$idbaihat;
		$this->TenBaiHat=$tenbaihat;
		$this->HinhBaiHat=$hinhbaihat;
	}
}
$mangquangcao=array();
while ($row=mysqli_fetch_assoc($data)) {
	array_push($mangquangcao, new Qangcao($row['Id'],
											$row['Hinhanh'],
											$row['Noidung'],
											$row['IdBaiHat'],
											$row['TenBaiHat'],
											$row['HinhBaiHat']));
}
echo json_encode($mangquangcao);

?>