<?php

namespace App\Http\Controllers;

use App\Example;
use App\Exsample;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(Example $example)
    {
        ddd($example);
    }
}
