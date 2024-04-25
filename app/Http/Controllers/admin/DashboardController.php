<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Quote;
use App\Models\State;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalMessages = Contact::count();
        $totalState = State::count();
        $totalQuote = Quote::where('email_verify', 1)->count();
        return view('admin.dashboard', compact('totalMessages', 'totalState', 'totalQuote'));
    }
}
