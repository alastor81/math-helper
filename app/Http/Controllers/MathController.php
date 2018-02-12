<?php

namespace math\Http\Controllers;
use Validator;
use Illuminate\Http\Request;

class MathController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function power()
    {
        return view('power-show');
    }


    public function ridge()
    {
        return view('ridge-show');
    }

    public function factorial()
    {
        return view('factorial-show');
    }

    public function subsets()
    {
        return view('subsets-show');
    }

    public function deductible()
    {
        return view('deductible-show');
    }

    public function invert()
    {
        return view('invert-show');
    }
}
