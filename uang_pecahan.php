<?php
function hasil($angka){
$jumlahUang = 1575250;/*1.575.250*/
$pecahan= array("a"=>"100000", "b"=>"50000", "c"=>"20000", "d"=>"5000", "e"=>"100", "f"=>"50");
$hasil=($jumlahUang-($jumlahUang%$pecahan[$angka]))/$pecahan[$angka];
$rupiah=number_format($pecahan[$angka],2,',','.');
echo "Jumlah Rp. ".$rupiah.":".$hasil."</br>";}
hasil('a');
hasil('b');
hasil('c');
hasil('d');
hasil('e');
hasil('f');
?>