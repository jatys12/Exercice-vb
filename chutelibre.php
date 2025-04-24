<?php

namespace App\Controllers;

class ChuteLibre extends BaseController
{
    public function index()
    {
        return view('chute_form');
    }

    public function calculer()
    {
        $astre = $this->request->getPost('astre');
        $temps = (float) $this->request->getPost('temps');

        $gravitations = [
            'Soleil' => 273.95,
            'Terre' => 9.81,
            'Lune' => 1.62,
            'Mars' => 3.71,
            'Jupiter' => 24.79,
        ];

        $g = $gravitations[$astre];
        $distance = $g * $temps * $temps / 2;
        $vitesse = $g * $temps;

        return view('chute_result', [
            'astre' => $astre,
            'temps' => $temps,
            'distance' => $distance,
            'vitesse' => $vitesse,
            'g' => $g
        ]);
    }
}
