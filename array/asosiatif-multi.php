<?php
$siswa = [
    [
        "nama" => "Candra Setiawan",
        "kelamin" => "Laki-Laki",
        "kelas" => "XI RPL 1"
    ],
    [
        "nama" => "Didit Mulyono",
        "kelamin" => "Laki-Laki",
        "kelas" => "XI RPL 14"
    ],

];

foreach ($siswa as $data) {
    echo "<p>" . "Nama : " . $data["nama"] . "</p>";
    echo "<p>" . "Kelamin : " . $data["kelamin"] . "<p>";
    echo "<p>" . "Kelas : " . $data["kelas"] . "</p>";
}
