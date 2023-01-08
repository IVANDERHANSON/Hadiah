<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function create() {
        return view('buyCar');
    }

    public function store(Request $request) {
        Car::create ([
            'Brand' => $request->Brand,
            'Type' => $request->Type,
            'CarCode' => $request->CarCode,
            'Price' => $request->Price,
            'Buyer' => $request->Buyer,
            'Date' => $request->Date,
        ]);
        
        return redirect('/home');
    }

    public function index() {
        $cars = Car::All();

        return view('welcome', compact('cars'));
    }

    public function show($id) {
        $car = Car::findOrFail($id);

        return view('showTransaction', compact('car'));
    }
}
