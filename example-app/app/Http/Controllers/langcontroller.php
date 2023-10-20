<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\view; 
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\App; 

class langcontroller extends Controller
{
     
    public function index():View
    {
        return view('lang'); 
    }

    public function change(Request $request): RedirectResponse
    {
        App::setLocale($request->lang); 
        session()->put('locale', $request->lang);
        return redirect()->back();
    }
}
