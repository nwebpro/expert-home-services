<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\State;
use App\Models\SuccessNumber;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    public function index()
    {
        $state = State::all();
        $stateCount = State::count();
        $SuccessNumber = SuccessNumber::where('status', 1)->get();
        return view('frontend.pages.area', compact('state', 'stateCount', 'SuccessNumber'));
    }
}
