<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registrar extends Model
{
    public function save($data){
        echo "<pre>";
        var_dump($data);
        return "data saved by model";
    }
}
