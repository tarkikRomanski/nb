<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Configuration;

class BlogController extends Controller
{
    public function index(Configuration $configuration){
        $data = [
            'route'=>'blog',
            'brif'=>$configuration->getConfig('brif')
        ];
        return view('site.blog', $data);
    }
}
