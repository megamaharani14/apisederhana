<?php
include 'db.php';

$data = json_decode (file_get_contents("php://input"),true);

$id = $data['id'];


$sql = "DELETE FROM buku WHERE id = $id";



if ($conn ->query($sql) === TRUE) {
    echo json_encode (["message" => "Buku Berhasil di Hapus"]);

} else {
    echo json_encode (["error" => $conn-> error]);


}


$conn->close();


?>