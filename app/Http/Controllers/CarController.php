<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index($group=''){
        return Car::findByGroup($group)->limit(10)->get();
    }
}
