if ($_SERVER["REQUEST_METHOD"] == "POST") {

# cek apakah field name kosong?
if (empty($_POST["name"])) {
    $name_pesan = "Nama yang harus diisi";
} else {
    $name = htmlspecialchars($_POST["name"]);
}
if (empty($_POST["email"])) {
    $name_pesan = "Email yang harus diisi";
} else {
    # cek apakah email yang dibuat sesuai atau tidak?
    if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
        $email_pesan = "Email yang dimasukan tidak valid";
    } else {
    $email = htmlspecialchars($_POST["email"]);
} 
}
}