<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$host = "192.168.1.253";
//$host = "localhost";
$user = "sik";
$pass = "00";
$database = "sik";

//$tanggal = mktime(date("m"), date("d"), date("Y"));
//date_default_timezone_set('Asia/Makassar');
//$jam = date("H:i");
$dt = new DateTime("now", new DateTimeZone('Asia/Makassar')); 
$tanggal = $dt->format("Y-m-d");
$conn = new mysqli($host, $user, $pass, $database);
$sql = "select booking_operasi.no_rawat,
    reg_periksa.no_rkm_medis,
    pasien.nm_pasien,
    booking_operasi.tanggal,
    booking_operasi.jam_mulai,
    booking_operasi.jam_selesai,
    booking_operasi.status,
    booking_operasi.kd_dokter,
    dokter.nm_dokter,
    booking_operasi.kode_paket,
    paket_operasi.nm_perawatan,
    concat(reg_periksa.umurdaftar,' ',
    reg_periksa.sttsumur) as umur,
    pasien.jk
    from booking_operasi 
    inner join reg_periksa 
    inner join pasien 
    inner join paket_operasi 
    inner join dokter 
    on booking_operasi.no_rawat=reg_periksa.no_rawat 
    and reg_periksa.no_rkm_medis=pasien.no_rkm_medis
    and booking_operasi.kd_dokter=dokter.kd_dokter 
    and booking_operasi.kode_paket=paket_operasi.kode_paket 
    where tanggal='" .  $tanggal . "' order by booking_operasi.tanggal,booking_operasi.jam_mulai";
//    where tanggal='" . date("Y-m-d", $tanggal) . "' order by booking_operasi.tanggal,booking_operasi.jam_mulai";
$result = $conn->query($sql);

$outp = "";
while ($rs = $result->fetch_array(MYSQLI_ASSOC)) {
    if ($outp != "") {
        $outp .= ",";
    }
    $outp .= '{"nama":"' . $rs["nm_pasien"] . '",';
    $outp .= '"umur":"' . $rs["umur"] . '",';
    $outp .= '"jk":"' . $rs["jk"] . '",';
    $outp .= '"jammulai":"' . $rs["jam_mulai"] . '",';
    $outp .= '"jamselesai":"' . $rs["jam_selesai"] . '",';
    $outp .= '"status":"' . $rs["status"] . '",';
    $outp .= '"nmperawatan":"' . $rs["nm_perawatan"] . '",';
    $outp .= '"dokter":"' . $rs["nm_dokter"] . '"}';
}
$outp = '{"records":[' . $outp . ']}';
$conn->close();

echo($outp);
