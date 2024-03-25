<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProsesController extends Controller
{
    public function index()
    {

    }

    public function create()
    {

    }

    public function store(Request $request)
    {
        $a = $request->a;
        $b = $request->b;
        $op = $request->op;

        if ($op == "+") {
            $hasil = $a + $b;
        } elseif ($op == "-") {
            $hasil = $a - $b;
        } elseif ($op == "x") {
            $hasil = $a * $b;
        } elseif ($op == "/") {
            if ($b > 0 || $b < 0) {
                $hasil = $a / $b;
            } else {
                $hasil = "tidak dapat membagi dengan 0";
            }
        }
        return view('kalkulator.hasil', compact('hasil'));
    }

    public function show()
    {

    }

    public function edit()
    {

    }

    public function destroy()
    {
        
    }
}
