<?php

namespace App\Traits;

use App\Models\Nilai;

trait RandomGeneratorTrait
{
    private function generateRandomString($length = 10)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[random_int(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    private function generateRandomMapel()
    {
        $mapel = [Nilai::INGGRIS, Nilai::INDONESIA, Nilai::JEPANG];
        return $mapel[array_rand($mapel)];
    }
}
