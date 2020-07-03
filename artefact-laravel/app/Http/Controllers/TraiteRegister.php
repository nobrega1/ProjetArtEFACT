<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;
use App\Address;
use Illuminate\Support\Facades\Hash;

class TraiteRegister extends Controller
{
    public function traiteregister(Request $request) {
        $name = $request->input('name');
        $firstname = $request->input('firstname');
        $email = $request->input('email');
        $password = $request->input('password');
        $passwordconfirm = $request->input('passwordconf');

       if($password === $passwordconfirm){

        Person::create([
            'addressno' => rand(1,2),
            'name' => $name ,
            'firstname' => $firstname,
            'email' => $email,
            'password' => Hash::make( $password),
            'isactive' => 1,
        ]);

            return redirect('index.html');
        }else{
            return view('acceuil');
}
    }    
}
