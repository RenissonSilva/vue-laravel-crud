<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Colors;

class ColorsController extends Controller
{
    Colors::all();
}
