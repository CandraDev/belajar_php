<?php

$buku = '[
  {
    "no" : 1001,
    "judul": "To Kill a Mockingbird",
    "genre": "Fiction",
    "penulis": "Harper Lee",
    "penerbit": "J.B. Lippincott & Co.",
    "tahun_terbit": 1960
  },
  {
    "no" : 1002,
    "judul": "One Thousand and One Nights",
    "genre": "Folk Tales",
    "penulis": "Anonymous",
    "penerbit": "Various (Middle Eastern origins)",
    "tahun_terbit": "8th Century"
  },
  {
    "no" : 1003,
    "judul": "The Tale of Genji",
    "genre": "Classic Japanese Literature",
    "penulis": "Murasaki Shikibu",
    "penerbit": "Heian Period",
    "tahun_terbit": 1008
  },
  {
    "no" : 1004,
    "judul": "1984",
    "genre": "Dystopian",
    "penulis": "George Orwell",
    "penerbit": "Secker & Warburg",
    "tahun_terbit": 1949
  },
  {
    "no" : 1005,
    "judul": "Les Misérables",
    "genre": "Historical Fiction",
    "penulis": "Victor Hugo",
    "penerbit": "A. Lacroix, Verboeckhoven & Cie.",
    "tahun_terbit": 1862
  },
  {
    "no" : 1006,
    "judul": "Don Quixote",
    "genre": "Adventure",
    "penulis": "Miguel de Cervantes",
    "penerbit": "Francisco de Robles",
    "tahun_terbit": 1605
  },
  {
    "no" : 1007,
    "judul": "War and Peace",
    "genre": "Historical",
    "penulis": "Leo Tolstoy",
    "penerbit": "The Russian Messenger",
    "tahun_terbit": 1869
  },
  {
    "no" : 1008,
    "judul": "The Master and Margarita",
    "genre": "Magical Realism",
    "penulis": "Mikhail Bulgakov",
    "penerbit": "YMCA Press",
    "tahun_terbit": 1967
  },
  {
    "no" : 1009,
    "judul": "Crime and Punishment",
    "genre": "Psychological Fiction",
    "penulis": "Fyodor Dostoevsky",
    "penerbit": "The Russian Messenger",
    "tahun_terbit": 1866
  },
  {
    "no" : 1010,
    "judul": "Things Fall Apart",
    "genre": "Post-Colonial Literature",
    "penulis": "Chinua Achebe",
    "penerbit": "Heinemann",
    "tahun_terbit": 1958
  },
  {
    "no" : 1011,
    "judul": "The Shining",
    "genre": "Horror",
    "penulis": "Stephen King",
    "penerbit": "Doubleday",
    "tahun_terbit": 1977
  },
  {
    "no" : 1012,
    "judul": "The Alchemist",
    "genre": "Fiction",
    "penulis": "Paulo Coelho",
    "penerbit": "HarperTorch",
    "tahun_terbit": 1988
  },
  {
    "no" : 1013,
    "judul": "Brave New World",
    "genre": "Science Fiction",
    "penulis": "Aldous Huxley",
    "penerbit": "Chatto & Windus",
    "tahun_terbit": 1932
  },
  {
    "no" : 1014,
    "judul": "Journey to the West",
    "genre": "Mythology",
    "penulis": "Wu Chengen",
    "penerbit": "Ming Dynasty",
    "tahun_terbit": 1592
  },
  {
    "no" : 1015,
    "judul": "The Divine Comedy",
    "genre": "Epic Poetry",
    "penulis": "Dante Alighieri",
    "penerbit": "14th Century Italy",
    "tahun_terbit": 1320
  },
  {
    "no" : 1016,
    "judul": "The Book Thief",
    "genre": "Historical",
    "penulis": "Markus Zusak",
    "penerbit": "Picador",
    "tahun_terbit": 2005
  },
  {
    "no" : 1017,
    "judul": "Anna Karenina",
    "genre": "Romance",
    "penulis": "Leo Tolstoy",
    "penerbit": "The Russian Messenger",
    "tahun_terbit": 1878
  },
  {
    "no" : 1018,
    "judul": "Invisible Man",
    "genre": "Fiction",
    "penulis": "Ralph Ellison",
    "penerbit": "Random House",
    "tahun_terbit": 1952
  },
  {
    "no" : 1019,
    "judul": "The Brothers Karamazov",
    "genre": "Philosophical Fiction",
    "penulis": "Fyodor Dostoevsky",
    "penerbit": "The Russian Messenger",
    "tahun_terbit": 1880
  },
  {
    "no" : 1020,
    "judul": "The Odyssey",
    "genre": "Epic Poetry",
    "penulis": "Homer",
    "penerbit": "Ancient Greece",
    "tahun_terbit": "8th Century BCE"
  }
]';

$listBuku = json_decode($buku);

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tugas</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <h1 class="text-center mt-5">Kumpulan Novel</h1>
  <table class="table table-light table-striped mx-auto mt-4" style="width:70rem;">
    <thead class="table-dark text-white">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Judul</th>
        <th scope="col">Genre</th>
        <th scope="col">Penulis</th>
        <th scope="col">Penerbit</th>
        <th scope="col">Tahun</th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach ($listBuku as $dataBuku) {
        echo " 
    <tr>
      <th scope=row'>{$dataBuku->no}</th>
      <th>{$dataBuku->judul}</th>
      <th>{$dataBuku->genre}</th>
      <th>{$dataBuku->penulis}</th>
      <th>{$dataBuku->penerbit}</th>
      <th>{$dataBuku->tahun_terbit}</th>
    </tr>";
      }
      ?>
    </tbody>
  </table>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
  </script>
</body>

</html>