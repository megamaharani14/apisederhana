<?php
include 'db.php';

$data = json_decode (file_get_contents("php://input"),true);

$judul = $data ['judul'];
$penulis = $data['penulis'];
$penerbit = $data['penerbit'];
$tahun_terbit = $data['tahun_terbit'];

$sql = "INSERT INTO buku(judul, penulis, penerbit, tahun_terbit) VALUES ('$judul','$penulis','$penerbit',$tahun_terbit)";

if ($conn ->query($sql) === TRUE) {
    echo json_encode (["message" => "Buku Berhasil di tambahkan "]);

} else {
    echo json_encode (["error" => $conn-> error]);


}


$conn->close();


?>