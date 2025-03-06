<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Inertia\Inertia;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        return Inertia::render('Cars', [
            'cars' => Car::all()
        ]);
    }
}
