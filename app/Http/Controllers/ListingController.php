<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listing;
use Illuminate\Validation\Rule;


class ListingController extends Controller
{
    public function index(){
        return view ('listings.index',[
            
            'listings' => Listing::latest()->filter(request(['tags', 'search']))->get()
        ]);
    }

    public function show(Listing $listing){
        return view('listings.show', [
            'listing' => $listing
        ]);
    }

    public function create(){
        
        return view('listings.create');
    }

    public function store(Request $request){
        
        $form_field = $request->validate([
            'title'=>'required',
            'comapny'=>['required',Rule::unique('listings', 'company')],
            'email'=>['required','email'],
            'location'=>'required',
            'description'=>'required',
            'tags'=>'required',
        ]);

        Listing::create($form_field);

        return redirect('/');
    }
}
