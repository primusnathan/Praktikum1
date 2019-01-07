<?php
$nama = "Primus";
$kelas = "XIRPL2";
$alamat = "Banyuwangi";
function tampil_nama(){
    global $nama;
    echo "Nama Saya : ".$nama;
}
function tampil_kelas(){
    global $kelas;
    echo "<br> Kelas saya : ".$kelas;
}
function tampil_alamat(){
    global $alamat;
    echo "<br> Alamat saya :".$alamat;
}
tampil_nama();
tampil_kelas();
tampil_alamat();
?>