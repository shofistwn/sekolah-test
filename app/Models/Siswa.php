<?php

namespace App\Models;

class Siswa
{
    public $nrp;
    public $nama;
    public $daftarNilai = [];

    public function __construct($nrp, $nama)
    {
        $this->nrp = $nrp;
        $this->nama = $nama;
    }

    public function tambahNilai($mapel, $nilai)
    {
        $this->daftarNilai[] = new Nilai($mapel, $nilai);
    }
}
