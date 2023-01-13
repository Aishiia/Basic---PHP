<?php
$student = ["Asiah", "123", "student VHS", "asiahbintiendro@gmail.com"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Administrasi</title>
</head>
<body>
<?php foreach($student as $value) #nampilan array pada looping | jatohnya pengulangan
{
    echo "$value <br>";
}
?>
</body>
</html>