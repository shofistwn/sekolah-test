<?php

namespace App\Models;

class Nilai
{
    public $mapel;
    public $nilai;

    public const JEPANG = 'Bahasa Jepang';
    public const INDONESIA = 'Bahasa Indonesia';
    public const INGGRIS = 'Bahasa Inggris';

    public function __construct($mapel, $nilai)
    {
        $this->mapel = $mapel;
        $this->nilai = $nilai;
    }
}
