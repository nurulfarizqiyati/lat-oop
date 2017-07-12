<?php
class robot
{
    private $warna;
    private $nama;
    private $stok;
    public function __construct(array $data = array())
    {
      if (count($data)) {
          foreach ($data as $key => $value) {
              $this->$key = $value;
          }
      }
    }
    public function __set($name, $value)
     {
      if (isset($this->$name)) { // jika nama property sudah ada maka akan mengganti isi property tersebut
        $this->$name = $value;
      } else { // jika tidak, maka akan membuat property sendiri ( public )
        $this->$name = $value;
      }
    }

    public function setWarna($warna)
    {
        $this->warna = $warna;
        return $this;
    }
    public function setnama($merk)
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
      $merk = $this->nama;
      return "robot anda berwarna $warna, dan bernama $nama";
    }
}