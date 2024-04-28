<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Mail\QuoteVerification;
use App\Models\Country;
use App\Models\Quote;
use App\Models\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
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

           // Debugging (remove this line after testing

            // Send verification email
            $verificationToken = Str::random(40); // Generate a random token


            $quote->verification_token = $verificationToken; // Add token to the quote
            $quote->save(); // Save the token in the database
            Mail::to($quote->email)->send(new QuoteVerification($quote)); // Send verification email
            Toastr::success('Send Verification link in your mail please verify', 'Success');
            return redirect()->route('success.send.verify.email');


        } catch (\Exception $e) {
            Toastr::error('Something went wrong: ' . $e->getMessage(), 'Error');
            return redirect()->back()->withInput(); // Redirect back with input in case of an error
        }
    }




    public function verifyQuote(Quote $quote, Request $request)
    {
        if ($quote->verification_token === $request->token) {
            $quote->email_verify = true;
            $quote->save();
            // Optionally, you can redirect the user to a success page or display a success message.
            // For example:
            return redirect()->route('success')->with('success', 'Your email has been verified successfully.');
        } else {
            // Token doesn't match, handle accordingly.
            // For example:
            return redirect()->route('error')->with('error', 'Invalid verification token.');
        }
    }

    public function successSendVerifyEmail()
    {
        return view('frontend.pages.mailSend');
    }

    public function success()
    {
        return view('frontend.pages.verified');
    }

}
