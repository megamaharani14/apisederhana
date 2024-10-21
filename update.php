<?php
include 'db.php';

$data = json_decode (file_get_contents("php://input"),true);

$id = $data['id'];
$judul = $data ['judul'];
$penulis = $data['penulis'];
$penerbit = $data['penerbit'];
$tahun_terbit = $data['tahun_terbit'];

$sql = "UPDATE buku SET 
        judul = '$judul',
        penulis = '$penulis,
        penerbit = '$penerbit,
        tahun_terbit = $tahun_terbit
        WHERE id = $id ";            

if ($conn ->query($sql) === TRUE) {
    echo json_encode (["message" => "Buku Berhasil di Update "]);

} else {
    echo json_encode (["error" => $conn-> error]);


}


$conn->close();


?>