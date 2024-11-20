<?php
$artikel = [
    [
        "judul" => "Laskar Pelangi",
        "penulis" => "Andrea Hirata",
        "Tahun Terbit" => "2005",
        "Penerbit" => "Bentang Pustaka"
    ],
    [
        "judul" => "Harry Potter and the Philosopher's Stone",
        "penulis" => "J.K. Rowling",
        "Tahun Terbit" => "26 Juni 1997",
        "Penerbit" => "Bloomsbury"
    ],
    [
        "judul" => "To Kill a Mockingbird",
        "penulis" => "Harper Lee",
        "Tahun Terbit" => "11 Juli 1960",
        "Penerbit" => "J.B. Lippincott & Co."
    ],
    [
        "judul" => "The Great Gatsby",
        "penulis" => "F. Scott Fitzgerald",
        "Tahun Terbit" => "10 April 1925",
        "Penerbit" => "Charles Scribner's Sons"
    ],
    [
        "judul" => "Bumi Manusia",
        "penulis" => "Pramoedya Ananta Toer",
        "Tahun Terbit" => "1980",
        "Penerbit" => "Hasta Mitra"
    ]
];


// menampilkan 
echo "<h1>List Buku</h1>";
foreach ($artikel as $post) {
    echo "<h3>" . "Judul : " . $post["judul"] . "</h3>";
    echo "<p>" . "Penulis : " . $post["penulis"] . "<p>";
    echo "<p>" . "Tahun Terbit : " . $post["Tahun Terbit"] . "</p>";
    echo "<p>" . "Penerbit : " . $post["Penerbit"] . "</p>";
}
