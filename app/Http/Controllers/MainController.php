<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Configuration;

class MainController extends Controller
{
    public function index(Configuration $configuration){
        $data = [
            'route'=>'index',
            'brif'=>$configuration->getConfig('brif'),
            'phone'=>$configuration->getConfig('phone'),
            'sloganHead'=>$configuration->getConfig('sloganHead'),
            'sloganSub'=>$configuration->getConfig('sloganSub'),
        ];
        return view('site.index', $data);
    }
}
