<?php

namespace App\Http\Controllers;

use App\Services\SiswaService;

class SiswaController extends Controller
{
    protected $siswaService;

    public function __construct(SiswaService $siswaService)
    {
        $this->siswaService = $siswaService;
    }

public function daftarNilai()
    {
        $daftarNilai = $this->siswaService->generateDaftarNilai();

        return response()->json([
            'daftarNilai' => $daftarNilai
        ]);
    }

    public function createSiswa(string $namaSiswa)
    {
        $siswaBaru = $this->siswaService->createSiswa($namaSiswa);

        return response()->json([
            'siswa' => $siswaBaru
        ]);
    }

    public function daftarSiswa()
    {
        $daftarSiswa = $this->siswaService->generateDaftarSiswa();

        return response()->json([
            'daftarSiswa' => $daftarSiswa
        ]);
    }
}
