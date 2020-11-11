<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cars;

class CarsController extends Controller
{
    public function CreateCars(Request $request) {
        Cars::insert([
            'name' => $request->name,
            'make' => $request->make,
            'model' => $request->model,
            'license_number'=> $request->license_number,
            'weigth' => $request->weigth,
            'registration_year' => $request->registration_year,
          ]);
          return redirect()->back();
    }

    public function editCars($id)
    {
      $car_to_edit = Cars::where('id', $id)->firstOrFail();

      return view('edit-form')->with('cars', $car_to_edit);
    }

    public function updateCars(Request $request)
    {
      Cars::where('id', $request->id)->update([
        'name'=> $request->name,
        'make'=> $request->make,
        'model'=> $request->model,
        'license_number'=> $request->license_number,
        'weigth'=> $request->weigth,
        'registration_year' => $request->registration_year
      ]);
  
      return redirect()->back();
    }
  

    public function getcars() {
        $cars = Cars::orderBy('id', 'DESC')->get();
        return view('cars')->with('cars', $cars);
    }

}
