<?php
require 'data.php';
$si = query ("SELECT FROM * murid")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shuichin Academy</title>
</head>
<body>
<h1>Student data at Shuichin Academy</h1>    

<a href="add_data.php">add student data</a>

<table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>Name</th>
            <th>Code Class</th>
            <th>NIS</th>
            <th>Biodata</th>
            <th>Address</th>
            <th>Health records</th>
        </tr>
        <?php $i=1?>
        <?php foreach($si as $row) : ?>
        <tr>
            <td><?=$row["Nama"] ?></td>
            <td><?=$row["Kode_Kelas"] ?></td>
            <td><?=$row["NIS"] ?></td>
            <td><?=$row["Biodata"] ?></td>
            <td><?=$row["Alamat"] ?></td>
            <td><?=$row["Catatan_Kesehatan"]?></td> 
            <td>
                <a href="">Change</a> |
                <a href="delete.php?id=<?= $row["Nama"];?>" onclick="return confirm('Are you sure, you want to delete the data?')">Delete</a>
            </td>
        </tr>
    <?php $i++ ?>

<?php endforeach ?>
</body>
</html>