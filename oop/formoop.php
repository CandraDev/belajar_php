<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Hitung Luas Persegi Panjang</title>
</head>
<body>
    <center>
            <h1>Menghitung Luas Persegi Panjang</h1>

    <form method="post" action="">
        <label for="panjang">Panjang:</label>
        <input type="number" name="panjang" id="panjang" required>
        <br>
        <label for="lebar">Lebar:</label>
        <input type="number" name="lebar" id="lebar" required>
        <br>
        <button type="submit" name="hitung">Hitung Luas</button>
    </form>
    </center>

    <?php
    class PersegiPanjang {
        public $luas;

        public function luas_persegiPanjang($panjang, $lebar) {
            $this->luas = $panjang * $lebar;
            echo "Panjang: " . $panjang . "<br>";
            echo "Lebar: " . $lebar . "<br>";
            echo "Luas: " . $this->luas . "<br>";
        }
    }

    if (isset($_POST['hitung'])) {
        $panjang = $_POST['panjang'];
        $lebar = $_POST['lebar'];

        $persegiPanjang = new PersegiPanjang($panjang, $lebar);
        $persegiPanjang->luas_persegiPanjang();
    }
    ?>

</body>
</html>
