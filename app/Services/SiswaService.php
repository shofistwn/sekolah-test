<?php

namespace App\Services;

use App\Models\Nilai;
use App\Models\Siswa;
use App\Traits\RandomGeneratorTrait;

class SiswaService
{
    use RandomGeneratorTrait;

    public function generateDaftarNilai()
    {
        $daftarNilai = [];

        $daftarNilai[] = new Nilai(Nilai::INDONESIA, random_int(0, 100));
        $daftarNilai[] = new Nilai(Nilai::INGGRIS, random_int(0, 100));
        $daftarNilai[] = new Nilai(Nilai::JEPANG, random_int(0, 100));

        return array_slice($daftarNilai, 0, 3);
    }

    public function createSiswa(string $namaSiswa)
    {
        $siswaBaru = new Siswa('NRP1', $namaSiswa);
        $siswaBaru->tambahNilai(Nilai::INGGRIS, 100);

        return $siswaBaru;
    }

    public function generateDaftarSiswa()
    {
        $daftarSiswa = [];

        for ($i = 0; $i < 10; $i++) {
            $namaSiswa = $this->generateRandomString(10);
            $siswa = new Siswa('NRP' . ($i + 1), $namaSiswa);
            $siswa->tambahNilai($this->generateRandomMapel(), random_int(0, 100));
            $daftarSiswa[] = $siswa;
        }

        return $daftarSiswa;
    }
}
