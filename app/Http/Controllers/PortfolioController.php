<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $projects = [
            [
                'title' => 'Portfolio Website',
                'description' => 'My personal portfolio website made with Laravel.',
                'image' => asset('images/laravel.png'),
                'link' => '#',
            ],
            [
                'title' => 'React Website',
                'description' => 'A university group project made with React.',
                'image' => asset('images/react.png'),
                'link' => 'https://github.com/Merszi/ReactWebsite',
            ],
            [
                'title' => 'Tetris in Java',
                'description' => 'University group project, in which we remade the game Tetris in Java.',
                'image' => asset('images/java.png'),
                'link' => '#',
            ]
        ];

        return view('portfolio', compact('projects'));
    }
}