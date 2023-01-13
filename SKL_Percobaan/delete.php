<?php
require 'data.php';

$name = $_GET;

if(delete($name) > 0){
    echo "<script>
            alert('successfully deleted');
            document.location.href = 'database.php';
        </script>";
}else{
    echo "<script>
            alert('failed');
            document.location.href = 'database.php';
        </script>";
}



?>