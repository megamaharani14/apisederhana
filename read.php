<?php
include 'db.php';

$sql = "SELECT * FROM buku";
$result = $conn->query($sql);


$buku = [];
if($result->num_rows > 0){
    while ($row = $result->fetch_assoc()){
        $buku[]= $row;
    }
    echo json_encode($buku);

}else{
    echo json_encode(["message" => "Tidak ada buku ditemukan"]);
}


$conn->close();








?>