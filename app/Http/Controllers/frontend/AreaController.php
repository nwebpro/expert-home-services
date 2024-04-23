<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\State;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    public function index()
    {
        $state = State::all();
        $stateCount = State::count();
        return view('frontend.pages.area', compact('state', 'stateCount'));
    }
}
