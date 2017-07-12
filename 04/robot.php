<?php
class Robot
{
    private $warna;
    private $nama;
   
    const JENIS = 2;
    public function setWarna($warna)
    {
        $this->warna = $warna;
    }
    public function setNama($nama)
    {
        $this->nama = $nama;
    }
    private function testRobot($jenis)
    {
        if ($jenis != self::JENIS) {
            throw new Exception('Itu bukan termasuk jenis robot karena Robot humanoid diciptakan untuk meniru beberapa tugas fisik = '.$jenis);
        } else {
            $warna = $this->warna;
            $nama = $this->nama;
            $text = "robot anda berwarna $warna, dan berjenis $jenis";
            echo $text;
        }
    }
    public function cekNama()
    {
        return $this->nama;
    }
    public function cekRobot()
    {
        $jenis = $this->jenis;
        return isset($jenis) ? $this->testRobot($jenis) : $this->testRobot(0);
    }
}