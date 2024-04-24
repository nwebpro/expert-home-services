<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Quote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Toastr;
class UserQuoteController extends Controller
{
    public function quoteSection()
    {
        $quote = Quote::where('email_verify',1)->with('country', 'state')->get();
        return view('admin.pages.quote.index', compact('quote'));
    }

    public function destroy($id)
    {
        try {
            $quote = Quote::findOrFail($id);

            // Decode the JSON string to get the image file names
            $images = json_decode($quote->photo);

            // Delete each image file from the storage directory
            if (!empty($images)) {
                foreach ($images as $image) {
                    $imagePath = public_path('quote/images/' . $image);
                    if (File::exists($imagePath)) {
                        File::delete($imagePath);
                    }
                }
            }

            // Delete the quote from the database
            $quote->delete();
            Toastr::success('Quote Deleted Successfully', 'Success');
            return redirect()->back();
        } catch (\Exception $e) {
            Toastr::error('Something went wrong', 'Error');
            return redirect()->back();
        }
    }
}
