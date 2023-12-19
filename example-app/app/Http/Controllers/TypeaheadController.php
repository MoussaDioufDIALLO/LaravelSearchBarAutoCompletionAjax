<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Services; 
use App\Models\User; 

class TypeaheadController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function autocompleteSearch(Request $request)
    {
        return Services::select('service')
            ->where('service', 'like', "{$request->term}%") 
            ->pluck('service'); 
    }
}
