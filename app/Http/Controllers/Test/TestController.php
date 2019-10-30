<?php

namespace App\Http\Controllers\Test;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
    public function sum(){
        $a=request('a');
        $b=request('b');
       return ['a'=>$a, 'b'=>$b,'Ket qua'=>$a+$b];
    }
}
