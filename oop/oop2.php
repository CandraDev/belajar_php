<?php
class PPDB {
    public function data_diri($nama, $jenis_kelamin, $tempat_lahir, $tanggal_lahir, $hp, $email) {
        echo "Nama Lengkap: $nama<br/>";
        echo "Jenis Kelamin: $jenis_kelamin<br/>";
        echo "Tempat Lahir: $tempat_lahir<br/>";
        echo "Tanggal Lahir: $tanggal_lahir<br/>";
        echo "Nomor HP: $hp<br/>";
        echo "Email: $email<br/>";
    }

    public function alamat_calon_pendaftar($provinsi, $kota, $kecamatan, $desa, $alamat, $kode_pos) {
        echo "Provinsi: $provinsi<br/>";
        echo "Kota/Kabupaten: $kota<br/>";
        echo "Kecamatan: $kecamatan<br/>";
        echo "Desa/Kelurahan: $desa<br/>";
        echo "Alamat: $alamat<br/>";
        echo "Kode Pos: $kode_pos<br/>";
    }

    public function data_asal_sekolah($nama_sekolah, $alamat_sekolah) {
        echo "Nama Asal Sekolah: $nama_sekolah<br/>";
        echo "Alamat Sekolah: $alamat_sekolah<br/>";
    }

    public function data_orang_tua($nama_ayah, $pekerjaan, $nomor_hp, $alamat) {
        echo "Nama Lengkap Ayah/Ibu/Wali: $nama_ayah<br/>";
        echo "Pekerjaan: $pekerjaan<br/>";
        echo "Nomor HP: $nomor_hp<br/>";
        echo "Alamat: $alamat<br/>";
    }
}

$ppdb = new PPDB();
$ppdb->data_diri("Budi Santoso", "Laki-laki", "Jakarta", "2000-05-15", "08123456789", "budi@mail.com");
echo "<hr/>";
$ppdb->alamat_calon_pendaftar("Jawa Barat", "Bandung", "Cicendo", "Babakan", "Jl. Babakan No. 10", "40173");
echo "<hr/>";
$ppdb->data_asal_sekolah("SMA 1 Bandung", "Jl. Merdeka No. 1");
echo "<hr/>";
$ppdb->data_orang_tua("Suparman", "Wiraswasta", "08198765432", "Jl. Babakan No. 10");


?>