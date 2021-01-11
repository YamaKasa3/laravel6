<?php

namespace App\Http\Controllers;

use App\Example;
use App\Exsample;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class PagesController extends Controller
{
    public function home()
    {
        return view('welcome');
    }
}
