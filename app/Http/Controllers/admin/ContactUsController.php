<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Toastr;
class ContactUsController extends Controller
{
    public function index()
    {
        $contact = Contact::latest()->get();
        return view('admin.pages.contact.index', compact('contact'));
    }

    public function destroy($id)
    {
        $contact = Contact::find($id);
        $contact->delete();
        Toastr::success('Contact Deleted Successfully', 'Success');
        return redirect()->back();
    }
}
