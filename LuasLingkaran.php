<?php

namespace App\Math; //pasang namespace

class LuasLingkaran {
    
    public const phi = 3.14;
    private int $jari;

    public function __construct($isiJari = 1) {
        $this->jari = $isiJari;
    }

    public function tampil($nama = 'ban') {
        $rumus = LuasLingkaran::phi * $this->jari * $this->jari;
        echo "Lingkaran {$nama} hasilnya adalah: {$rumus}";
    }

    public static function testing() {
        echo "<br/>";
        echo "ini dari static";
    }

    public function __destruct() {
        echo "<br/>";
        echo "udah ah cape";
    }
}



