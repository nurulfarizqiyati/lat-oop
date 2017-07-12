<?php

require_once 'Transportasi.php';

class bis implements Transportasi
{
    public function Info()
    {
        echo 'pahala kencana memiliki warna putih biru dan bisa mengangkut sekitar 60 penumpang';
    }
}
