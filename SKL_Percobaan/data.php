<?php 
# Koneksi Database
$conn = mysqli_connect("localhost", "root", "", "sekolah");

function query($query){
    global $conn;
    $result=mysqli_query($conn, "SELECT * FROM murid");
    $rows=[];
    while($row=mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function add($data){
    global $conn;
    # ambil data dari setiap elemen form
    $name = htmlspecialchars($data["Nama"]);
    $code = htmlspecialchars($data["Kode_Kelas"]);
    $nis = htmlspecialchars($data["NIS"]);
    $bio = htmlspecialchars($data["Biodata"]);
    $address = htmlspecialchars($data["Alamat"]);
    $hr = htmlspecialchars($data["Catatan_Kesehatan"]);

    $query = "INSERT INTO murid VALUES('$name', '$code', '$nis', '$bio', '$address', '$hr')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function delete($name){
    global $conn;
    mysqli_query($conn,"DELETE FROM murid WHERE Nama = $name");

    return mysqli_affected_rows($conn);
}

?>