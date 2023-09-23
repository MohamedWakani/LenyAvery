<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Information;
use App\Models\How;
use App\Models\Contact;
use App\Models\About;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactPurchaseConfirmation;
use App\Mail\UserPurchaseNotification;

class LandingController extends Controller
{
    public function welcome(){
        $products = Product::all();
        $infos = Information::all();
        $hows = How::all();
        $about = About::all();
        return view('welcome',compact('products','infos','hows','about'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:contacts,email',
            'phone' => 'required',
        ]);    
        $existingContact = Contact::where('email', $request->email)->first();

    if ($existingContact) {
        return redirect()->back()->withInput()->withErrors(['email' => 'This email address already exists.']);
    }
       $contact = new Contact();
       $contact->name=$request->name;
       $contact->email=$request->email;
       $contact->phone=$request->phone;
       $contact->save();

       Mail::to($request->email)->send(new ContactPurchaseConfirmation($request->name));
       Mail::to(env('ADMIN_EMAIL'))->send(new UserPurchaseNotification($request->name, $request->email));

       return redirect("/")->with('message','Thanks for buying this product');
    }
}
