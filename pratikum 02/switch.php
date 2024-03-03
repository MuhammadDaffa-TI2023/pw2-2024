<?php 

$grade = "A";
$predikat;

switch ($grade) {
	case 'A':
		$predikat="Sangat Memuaskan";
		break;
	case "B":
		$predikat="Memuaskan";
		break;
	case "C":
		$predikat="Kurang Memuaskan";
		break;
	case "D":
		$predikat="Tidak Memuaskan";
		break;
	case "E":
		$predikat="Sangat Kurang";
		break;
	default:
		$predikat="Tidak Lulus";
		break;
}

echo "<h1>$predikat</h1>";

?>