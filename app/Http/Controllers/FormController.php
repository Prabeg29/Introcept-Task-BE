<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubmitFormRequest;

class FormController extends Controller
{
    public function index()
    {
        return view('form');
    }

    public function submit(SubmitFormRequest $request)
    {
        if($request->validated()){
            return back()->with('success', 'Thanks for form submission.');
        }
        return back()->withInput();
    }
}
