<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function getName() {
        return view('welcome', ['name' => 'Chalo']);
    }

    public function getSuma($x, $y) {
        return 'La suma es: ' . $x + $y;
    }

    public function getResta($x, $y) {
        return 'La resta es: ' . $x - $y;
    }

    public function getMultiplicar($x, $y) {
        return 'La multiplicación es: ' . $x * $y;
    }

    public function getDivision($x, $y) {
        if ($y == 0) return 'No se puede dividir entre 0';

        return 'La divición es: ' . $x / $y;
    }
}
