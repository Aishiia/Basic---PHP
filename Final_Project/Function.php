<?php 
# Koneksi Database
$conn = mysqli_connect("localhost", "root", "", "kursus");

function query($query){
    global $conn;
    $result=mysqli_query($conn, "SELECT * FROM murid");
    $rows=[];
    while($row=mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data){
    global $conn;
    # ambil data dari setiap elemen form
    $name = htmlspecialchars($data["Nama"]);
    $nis = htmlspecialchars($data["NIS"]);
    $gender = htmlspecialchars($data["Jenis_Kelamin"]);
    $born = htmlspecialchars($data["Lahir"]);
    $class = htmlspecialchars($data["Kelas"]);
    $no_telp = htmlspecialchars($data["Nomor_Telepon"]);
    $email = htmlspecialchars($data["Email"]);
    $password = htmlspecialchars($data["Password"]);

    $query = "INSERT INTO murid VALUES('$name', '$nis', '', '$gender', '$born', '$class', '$no_telp', '$email', '$password', '')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function query2($query){
    global $conn;
    $result=mysqli_query($conn, "SELECT * FROM murid_lama");
    $rows=[];
    while($row=mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}


function data_lama($data){
    global $conn;
    # ambil data dari setiap elemen form
    $name = htmlspecialchars($data["Nama"]);
    $email = htmlspecialchars($data["Email"]);
    $password = htmlspecialchars($data["Password"]);

    $data = "INSERT INTO murid_lama VALUES ('$name', '', '$email', '$password')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
