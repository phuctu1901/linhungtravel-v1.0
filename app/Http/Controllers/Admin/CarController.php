<?php

namespace App\Http\Controllers\Admin;

use App\Car;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
class CarController extends Controller
{
    //
    public  function index(){
        $car = Car::all()->first();
        return view('admin.car.index', ['car' => $car]);
    }

    public  function  update(Request $request)
    {
        $id = $request->id;
        $car = Car::find($id);
        $car->quytrinh =json_encode($request->quytrinh);
        $car->lienhe =json_encode($request->lienhe);
        $car->phuluc =json_encode($request->phuluc);

        $car->save();
        Session::flash('success', 'Đã cập nhật');
        return redirect('/admin/car');
    }

}
