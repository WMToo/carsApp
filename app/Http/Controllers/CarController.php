<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;


class CarController extends Controller
{

    public function create(){

        return view('create');
        
    }

    public function store (Request $request){
        $make=$request['make'];
        $model=$request['model'];
        $produced_on=$request['produced_on'];

        $car=new Car();
        $car->make=$make;
        $car->model=$model;
        $car->produced_on=$produced_on;

        $car->save();

        return redirect('/cars');
        // $allcar= Car::all();

        // return view('index',['allcar'=>$allcar]);

        // return redirect('/');

    }

    public function show(){

        $allcar= Car::all();

        return view('index',['allcar'=>$allcar]);
        
    }


    public function edit($car_id){

        $car= Car::findOrFail($car_id);

        return view('edit',["car"=>$car]);
        
    }

    public function udpate($car_id){

        $car= Car::findOrFail($car_id);
        $car->make = request()->input("make");
        $car->model = request()->input("model");
        $car->produced_on = request()->input("produced_on");
        $car->save();

        return  redirect('/');
        
    }


    public function delete($car_id){

       Car::destroy($car_id);
        
        return  redirect('/');
        
    }
}
