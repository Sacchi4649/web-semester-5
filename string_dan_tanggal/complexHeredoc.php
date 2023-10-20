<?php
class Mahasiswa
{
    private $nama;
    private $alamat;
    public $nim;

    public function __construct()
    {
        $this->nama = 'linds';
        $this->alamat = 'Jakarta';
        $this->nim = '1234';
    }

    public function getNama()
    {
        return $this->nama;
    }

    public function getAlamat()
    {
        return $this->alamat;
    }
}

$mahasiswa = new Mahasiswa(); //Tipe data object
$lang = 'PHP'; //Tipe data primitive (string)
$tbl_prefix = 'polnep_';
$identitas = array('nama' => 'linds', 'ttl' => 'Pontianak');

$str = <<<EOD
Contoh penulisan heredoc pada $lang.
Contoh menggunakan heredoc untuk menulis
Variable: "$lang",
Variabel: nama tabel ($tbl_prefix) nilai_mahasiswa,
array dengan satu tanda kutip: {$identitas['nama']},
array dengan dua tanda kutip: {$identitas["ttl"]},
object property: $mahasiswa->nim, dan
object method: {$mahasiswa->getNama()}
EOD;
echo $str;
?>