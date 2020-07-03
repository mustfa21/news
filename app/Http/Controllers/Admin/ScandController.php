<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ScandController extends Controller
{
    public  function index(){
        $name = 'mustfa';
        return $name;
    }
}
