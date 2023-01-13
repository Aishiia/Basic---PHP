<?php 
# Koneksi Database
$conn = mysqli_connect("localhost", "root", "", "crudb"); // buat nyambungin ke mysql

function query($query){
    global $conn;
    $result=mysqli_query($conn, "SELECT * FROM siswi");
    $rows=[];
    while($row=mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data){
    global $conn;
    # ambil data dari setiap elemen form
    $nama = htmlspecialchars($data["nama"]);
    $nis = htmlspecialchars($data["NIS"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambar = htmlspecialchars($data["gambar"]);

    $query = "INSERT INTO siswi VALUES('', '$nama', '$nis', '$email', '$jurusan', '$gambar')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM siswi WHERE id = $id");

    return mysqli_affected_rows($conn);
}

?>