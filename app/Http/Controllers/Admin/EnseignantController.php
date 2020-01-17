<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Enseignant;
use App\User;

use Illuminate\Support\Facades\Hash;

class EnseignantController extends Controller
{
    public function show_create_form()
    {
      
        return view('layouts.admin.enseignants.create');

    }

    public function create (Request $request)
    {
        $randomString  = str_random(12);

        $user = new User([
            'role_id' => (1),
            'name' => ('name'),
            'email' => ($randomString),
            'password' => ('password'),
            
          ]);
        
          $user -> save();
        
       
        Enseignant::create($request->input());

        return "ok";
    }
}
