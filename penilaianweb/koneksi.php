<?php
$koneksi = mysqli_connect("localhost","root","","php_native");
if ($koneksi) {
    echo"Database Terhubung";
} else {
    echo "Database Tidak Terhubung";
}
?>