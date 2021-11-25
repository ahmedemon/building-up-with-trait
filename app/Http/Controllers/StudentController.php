<?php

namespace App\Http\Controllers;

use App\Http\Traits\MathTrait;
use App\Http\Traits\StudentTrait;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // use StudentTrait;
    use MathTrait;

    public function index()
    {
        return $this->div(7,5);
        // return view('welcome');
    }
}
