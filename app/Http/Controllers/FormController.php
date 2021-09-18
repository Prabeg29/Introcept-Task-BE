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
        return redirect('form')->with('success', 'Form submitted successfully.');
    }
}
