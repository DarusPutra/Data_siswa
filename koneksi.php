<?php
$host = 'localhost'; // Nama hostnya
$username = 'root'; // Username
$password = 'mysql'; // Password (Isi jika menggunakan password)
$database = 'mynotescode'; // Nama databasenya
// Koneksi ke MySQL dengan PDO
$pdo = new PDO('mysql:host='.$host.';dbname='.$database, $username, );
