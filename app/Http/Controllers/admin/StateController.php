<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\State;
use Illuminate\Http\Request;
use Toastr;
class StateController extends Controller
{
    public function index()
    {
        $country =  Country::latest()->get();
        $state = State::with('country')->latest()->get();
        return view('admin.pages.state.index',compact('country','state'));
    }
    public function store(Request $request)
    {
        try {
            $request->validate([
                'country_id' => 'required',
                'name' => 'required',
            ]);
            $state = new State();
            $state->country_id = $request->country_id;
            $state->name = $request->name;
            $state->save();
            Toastr::success('State Added Successfully', 'Success');
            return redirect()->back();
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'name' => 'required',
            ]);
            $state = State::find($id);
            $state->country_id = $request->country_id;
            $state->name = $request->name;
            $state->status = $request->status;
            $state->save();
            Toastr::success('State Updated Successfully', 'Success');
            return redirect()->back();
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            $state = State::find($id);
            $state->delete();
            Toastr::success('State Deleted Successfully', 'Success');
            return redirect()->back();
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }
}
