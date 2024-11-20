<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cek Nilai Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="bg-light">
    <div class="container py-5">
        <form action="" method="post" class="bg-white p-5 rounded shadow">
            <h1 class="mb-4 text-center">
                <img src="img/smk.png" alt="logo" width="90" height="75" class="text-center rounded me-2">
                Data Siswa
            </h1>
            <div class="form-floating mb-3">
                <input type="text" name="nama" class="form-control" id="floatingInput" placeholder="Nama">
                <label for="floatingInput">Nama</label>
            </div>
            <div class="form-floating mb-3">
                <select class="form-select" name="Kelas" id="floatingSelect" aria-label="Pilih Kelas">
                    <option value="X RPL">X RPL</option>
                    <option value="XI RPL">XI RPL</option>
                    <option value="XII RPL">XII RPL</option>
                    <option value="X TKRO">X TKRO</option>
                    <option value="XI TKRO">XI TKRO</option>
                    <option value="XII TKRO">XII TKRO</option>
                    <option value="X TBSM">X TBSM</option>
                    <option value="XI TBSM">XI TBSM</option>
                    <option value="XII TBSM">XII TBSM</option>
                </select>
                <label for="floatingSelect">Kelas</label>
            </div>

            <h2 class="text-white mb-4">Nilai Ujian</h2>
            <div class="form-floating mb-3">
                <input type="number" name="B_Indonesia" class="form-control" id="floatingBIndonesia"
                    placeholder="Nilai Bahasa Indonesia">
                <label for="floatingBIndonesia">Nilai Bahasa Indonesia</label>
            </div>
            <div class="form-floating mb-3">
                <input type="number" name="B_Inggris" class="form-control" id="floatingBInggris"
                    placeholder="Nilai Bahasa Inggris">
                <label for="floatingBInggris">Nilai Bahasa Inggris</label>
            </div>
            <div class="form-floating mb-3">
                <input type="number" name="Matematika" class="form-control" id="floatingMatematika"
                    placeholder="Nilai Matematika">
                <label for="floatingMatematika">Nilai Matematika</label>
            </div>
            <div class="form-floating mb-3">
                <input type="number" name="Produktif" class="form-control" id="floatingProduktif"
                    placeholder="Nilai Produktif">
                <label for="floatingProduktif">Nilai Produktif</label>
            </div>
            <div class="text-center">
                <input type="submit" value="Check" name="proses" class="btn btn-lg btn-danger">
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>

<?php
if (isset($_POST['proses'])) {
  $nama = $_POST['nama'];
  $kelas = $_POST['Kelas'];
  $bIndo = $_POST['B_Indonesia'];
  $bIngg = $_POST['B_Inggris'];
  $mTk = $_POST['Matematika'];
  $produktif = $_POST['Produktif'];

  $total = $bIndo + $bIngg + $mTk + $produktif;
  $rata_rata = $total / 4;

  $status = $rata_rata >= 75 ? "LULUS" : "TIDAK LULUS";
  echo "
    <div class='container py-5'>
      <div class='card bg-primary text-white'>
        <div class='card-body'>
          <h2 class='card-title text-center'>Hasil Nilai Siswa</h2>
          <p><strong>Nama:</strong> $nama</p>
          <p><strong>Kelas:</strong> $kelas</p>
          <h4>Nilai Ujian:</h4>
          <ul>
            <li>Bahasa Indonesia: $bIndo</li>
            <li>Bahasa Inggris: $bIngg</li>
            <li>Matematika: $mTk</li>
            <li>Produktif: $produktif</li>
          </ul>
          <p><strong>Rata-Rata:</strong> $rata_rata</p>
          <h4 class='text-center'><strong>Status:</strong> $status</h4>
        </div>
      </div>
    </div>
  ";
}
?>