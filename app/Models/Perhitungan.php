<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perhitungan extends Model
{
    use HasFactory;

    protected $table = 'perhitungan';
    protected $fillable = [
        'name',
        'nim',
        'matakuliah',
        'tugas',
        'uts',
        'uas'
    ];

    public function hitungTugas($a)
    {
        return 0.4 * $a;
    }

    public function hitungUts($a)
    {
        return 0.3 * $a;
    }

    public function hitungUas($a)
    {
        return 0.3 * $a;
    }

    public function hitungNilaiAkhir($a, $b, $c)
    {
        return $a + $b + $c;
    }

    public function huruf($a)
    {
        if ($a <= 100 && $a >= 80) {
            $huruf = "A";
        } else if ($a < 80 && $a >= 75) {
            $huruf = "B+";
        } elseif ($a < 75 && $a >= 65) {
            $huruf = "B";
        } elseif ($a < 65 && $a >= 60) {
            $huruf = "C+";
        } elseif ($a < 60 && $a >= 55) {
            $huruf = "C";
        } elseif ($a < 55 && $a >= 40) {
            $huruf = "D";
        } elseif ($a < 40 && $a >= 0) {
            $huruf = "E";
        }

        return $huruf;
    }
}
