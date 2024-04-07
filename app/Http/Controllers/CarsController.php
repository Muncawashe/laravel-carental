<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Http\Requests\CarFormRequest;

class CarsController extends Controller
{

    private static function getData() {
        return [
            ['id' => 1, 'make' => 'American Standard Strat', 'model' => 'Fender' , 'fuelpkm' => 5],
            ['id' => 2, 'make' => 'Starla S2', 'model' => 'PRS' , 'fuelpkm' => 5],
            ['id' => 3, 'make' => 'Explorer', 'model' => 'Gibson' , 'fuelpkm' => 5],
            ['id' => 4, 'make' => 'Talman', 'model' => 'Ibanez' , 'fuelpkm' => 5],
        ];
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('cars.index', [
            'cars' => Car::all(),
            //t update'cars' => self::getData(),
            'userInput' => '<script>alert("hello")</script>'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cars.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CarFormRequest  $request)
    {
        $data = $request->validated();

        Car::create($data);

        return redirect()->route('cars.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($car)
    {
        return view('cars.show', [
            'car' => $car
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
