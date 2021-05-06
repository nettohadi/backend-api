<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function index($type='') {
        return Content::filterByType($type)->with('writer')->get();
    }
}
