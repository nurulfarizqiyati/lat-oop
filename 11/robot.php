<?php

class robot
{
    public static $nama = "ra 01";
    private static $warna = "Merah";

    public static function result()
    {
        echo 'robot anda berwarna '.self::$warna.' dan bernama ';
    }
}
