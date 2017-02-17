<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Configuration;


class KontaktiController extends Controller
{
    public function index(Configuration $configuration){
        $data = [
            'route'=>'kontakti',
            'brif'=>$configuration->getConfig('brif')
        ];
        return view('site.kontakti', $data);
    }
}
