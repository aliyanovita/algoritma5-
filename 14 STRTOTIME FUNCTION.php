<?php
$timestamp = strtotime("now");
echo $timestamp; // Menampilkan timestamp untuk waktu saat ini

$timestamp = strtotime("10 September 2000");
echo $timestamp; // Menampilkan timestamp untuk tanggal 10 September 2000
?>
<?php
$nextWeek = strtotime("+1 week");
echo date("Y-m-d", $nextWeek); // Menampilkan tanggal satu minggu dari waktu saat ini
?>
