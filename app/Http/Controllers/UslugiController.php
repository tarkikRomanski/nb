<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Configuration;

class UslugiController extends Controller
{
    public function index(Configuration $configuration){
        $data = [
            'route'=>'uslugi',
            'brif'=>$configuration->getConfig('brif')
        ];

        return view('site.uslugi', $data);
    }
}
