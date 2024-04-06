<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\Quote;
use App\Models\State;
use Illuminate\Http\Request;
use Toastr;
class QuoteController extends Controller
{
    public function index()
    {
        $countries = Country::all();
        return view('frontend.pages.quote', compact('countries'));
    }


    public function fetchStates($country_id)
    {
        $states = State::where('country_id', $country_id)->get();
        return response()->json($states);
    }

    public function quoteStore(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'country_id' => 'required',
            'state_id' => 'required',
            'zip_code' => 'required',
            'address' => 'required',
            'problem_message' => 'required',
        ]);

        try {
            $quote = new Quote();
            $quote->name = $request->name;
            $quote->email = $request->email;
            $quote->phone = $request->phone;
            $quote->country_id = $request->country_id;
            $quote->state_id = $request->state_id;
            $quote->zip_code = $request->zip_code;
            $quote->address = $request->address;
            $quote->problem_message = $request->problem_message;

            // Handle file upload
            if ($request->hasFile('photo')) {
                $images = [];
                foreach ($request->file('photo') as $file) {
                    $imageName = time() . '_' . $file->getClientOriginalName();
                    $file->move(public_path('quote/images'), $imageName);
                    $images[] = $imageName;
                }
                $quote->photo = json_encode($images);
            }

            $quote->save();

            Toastr::success('Message Sent Successfully', 'Success');
            return redirect()->back();
        } catch (\Exception $e) {
            Toastr::error('Something went wrong', 'Error');
            return redirect()->back()->withInput(); // Redirect back with input in case of an error
        }
    }
}
