<?php
class robot1
{
    final public function testrobot()
    {
        echo "robot itu berwarna ?, dan bernama ?";
    }
    public function result()
    {
        echo 'Itu bukan robot anda karena ?';
    }
}
class robot extends robot1
{
    // kita bisa overriding / mengupdate isi dari method result, karena method tersebut bukan final method
    // jikalau kita juga ingin merubah isi dari final method testMobil, maka hasil nya akan error
    // karena method testMobil adalah final method
    
    // public function testrobot()
    // {
    //     echo "robot itu berwarna Merah, dan bernama ra 01";
    // }
    public function result()
    {
        echo 'Itu bukan mobil anda karena nama robot anda ra 01';
    }
}