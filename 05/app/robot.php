<?php
class robot
{
    private $warna;
    private $nama;
    private $stok;
    public function setWarna($warna)
    {
        $this->warna = $warna;
        return $this;
    }
    public function setnama($nama)
    {
        $this->nama = $nama;
        return $this;
    }
    public function setstok($stok)
    {
        $this->stok = $stok;
        return $this;
    }
    public function viewResult()
    {
      $warna = $this->warna;
      $nama = $this->nama;
      return "robot anda berwarna $warna, dan bernama $nama";
    }
}