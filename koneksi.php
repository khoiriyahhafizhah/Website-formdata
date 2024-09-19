<?php
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name ="kamera";

$koneksi = mysqli_connect(hostname:$db_host, username: $db_user, password:$db_pass, database:$db_name);

if(mysqli_connect_error()){
    echo 'Gagal melakukan koneksi ke database : '.mysqli_connect_error();
}
?> 

<html>
<body>
<h1>Masukkan Data</h1>
</body>
</html>
