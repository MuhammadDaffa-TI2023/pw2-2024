<?php
$nilai = 90;

$keteragan = "";

if($nilai > 90){
    $keteragan = "Sangat Baik";
} elseif($nilai > 70 || $nilai < 100) {
    $keteragan = "Lumayan baik";
}else {
    $keteragan = "oke dah";
}
echo $keteragan;
?>
