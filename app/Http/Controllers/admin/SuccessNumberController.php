<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\SuccessNumber;
use Illuminate\Http\Request;
use Toastr;
class SuccessNumberController extends Controller
{
    public function index()
    {
        $successNumber =  SuccessNumber::latest()->get();
        return view('admin.pages.successNumber.index',compact('successNumber'));
    }
    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required',
                'total_number' => 'required',
            ]);
            $successNumber = new SuccessNumber();
            $successNumber->name = $request->name;
            $successNumber->total_number = $request->total_number;
            $successNumber->save();
            Toastr::success('Success Number Added Successfully', 'Success');
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
                'total_number' => 'required',
            ]);
            $successNumber = SuccessNumber::find($id);
            $successNumber->name = $request->name;
            $successNumber->total_number = $request->total_number;
            $successNumber->status = $request->status;
            $successNumber->save();
            Toastr::success('Success Number Updated Successfully', 'Success');
            return redirect()->back();
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            $successNumber = SuccessNumber::find($id);
            $successNumber->delete();
            Toastr::success('Success Number Deleted Successfully', 'Success');
            return redirect()->back();
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }
}
