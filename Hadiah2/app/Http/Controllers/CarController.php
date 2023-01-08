<?php

namespace App\Http\Controllers;
use App\Models\Car;
use App\Models\Category;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function create() {
        $categories = Category::all();
        return view('buyCar', compact('categories'));
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'Brand' => 'required|unique:cars|min:5|max:30',
            'Type' => 'required',
            'CarCode' => 'required',
            'Price' => 'required|integer|min:5',
            'Buyer' => 'required',
            'Date' => 'required',
            'Image' => 'required|mimes:jpg, png'
        ]);

        $extension = $request->file('Image')->getClientOriginalExtension();
        // $filename = $request->file('Image')->getClientOriginalName();
        $filename = $request->Brand.'_'.$request->Type.'.'.$extension;
        $request->file('Image')->storeAs('/public/Car/', $filename);

        Car::create ([
            'Brand' => $request -> Brand,
            'Type' => $request -> Type,
            'CarCode' => $request -> CarCode,
            'Price' => $request -> Price,
            'Buyer' => $request -> Buyer,
            'Date' => $request -> Date,
            'Image' => $filename,
            'category_id' => $request -> category
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

    public function edit($id) {
        $car = Car::findOrFail($id);
        return view('editTransaction', compact('car'));
    }

    public function update(Request $request, $id) {
        $extension = $request->file('Image')->getClientOriginalExtension();
        // $filename = $request->file('Image')->getClientOriginalName();
        $filename = $request->Brand.'_'.$request->Type.'.'.$extension;
        $request->file('Image')->storeAs('/public/Car/', $filename);

        Car::findOrFail($id)->update([
            'Brand' => $request -> Brand,
            'Type' => $request -> Type,
            'CarCode' => $request -> CarCode,
            'Price' => $request -> Price,
            'Buyer' => $request -> Buyer,
            'Date' => $request -> Date,
            'Image' => $filename
        ]);
        return redirect('/home');
    }

    public function delete($id) {
        Car::destroy($id);
        return redirect('/home');
    }
}
