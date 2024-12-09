<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfoPersonalController extends Controller
{
    public function index()
    {
        $information = [
            [
                'firstname' => 'Márton',
                'lastname' => 'Polgár',
                'age' => '24',
                'nationality' => 'Hungarian',
                'address' => 'Szombathely',
                'phone' => '+36 20 510 9592',
                'email' => 'pmarton44@gmail.com',
                'languages' => 'Hungarian, English'
            ]
        ];

        return view('about', compact('information'));
    }
}