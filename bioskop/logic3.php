<?php
$kd_bioskop = "MTD";
$datetime = "2019-02-01 09:22.08.123";
$tgl=substr($datetime, 8,2).substr($datetime, 5,2).substr($datetime, 0,4).substr($datetime, 11,2).substr($datetime, 14,2);
echo $tgl."<br>";
$kd_film = "RW001";
$tayang = 5;
$hasil=$kd_bioskop.$tgl.$kd_film.sprintf("%05s", $tayang);
echo $hasil;

?>