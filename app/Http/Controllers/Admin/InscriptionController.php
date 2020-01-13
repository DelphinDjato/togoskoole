<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InscriptionController extends Controller
{
    public function show_create_form()
    {
        return view('layouts.admin.inscriptions.create');
    }

    public function create(Request $request)
    {

    }
}
