<?php
namespace App\model;

class Todo{
    public $id;
    public $title;

    public function __construct($id, $title){
        $this->id = $id;
        $this->title = $title;
    }
}

?>