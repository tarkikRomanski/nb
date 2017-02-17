<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Configuration extends Model
{
    public function getConfig($configName){
        return Configuration::where('name', $configName)->first()->toArray()['value'];
    }
}
