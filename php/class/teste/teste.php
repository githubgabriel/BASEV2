<?php
namespace base\teste;

class teste {
    protected $id = null;
    protected $name = null;

    public function getAll(){

        return "SELECT * from teste";
    }
    public function getById($id){

        return "SELECT * from teste where id = '{$id}'";
    }
    public function teste() {
        echo "TESTETETETE";
    }
    public function updateById($newValue,$id) {
        return "UPDATE teste SET name = '{$newValue}' where id = '{$id}'";
    }

}