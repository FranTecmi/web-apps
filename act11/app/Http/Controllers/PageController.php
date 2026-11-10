<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function photos()
    {
        $photos = [
            ['title' => 'Mountain sunrise', 'place' => 'Monterrey, N.L.', 'color' => '#c9d8c5'],
            ['title' => 'City at night', 'place' => 'Mexico City', 'color' => '#b7c4d6'],
            ['title' => 'Quiet beach', 'place' => 'Mazatlán, Sin.', 'color' => '#e6d3b3'],
            ['title' => 'Forest trail', 'place' => 'Valle de Bravo', 'color' => '#a9c2a1'],
            ['title' => 'Old downtown', 'place' => 'Guanajuato', 'color' => '#e2bfa8'],
            ['title' => 'My cats napping', 'place' => 'Home', 'color' => '#d8cbe0'],
        ];

        return view('pages.photos', ['photos' => $photos]);
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
