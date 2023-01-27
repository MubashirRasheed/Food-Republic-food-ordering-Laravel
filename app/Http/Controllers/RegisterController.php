<?php

namespace App\Http\Controllers;

use App\Models\signlog;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function create(){
        return view('signin');
    }


    public function store(){
        $attributes = request()->validate([
            
            'userName' => 'required|min:3|unique:users,userName',
            'Email' => 'required|email|unique:users,Email',
            'Password' => 'required|min:5',
            

        ]);
         $user = User::create($attributes);
         $attributes['Password'] = bcrypt($attributes['Password']);
         auth()-> login($user);
         return redirect('index');

         
    }

    public function checklogin(Request $request)
    {

        $user = User::where(['Email' => $request->Email])->first();

        if ($user && !Hash::check($request->Password, $user->Password)) {
            $request->session()->put('user', $user);
            $data = compact('user');
            return view('index')->with($data);
            
        } else {
            
            return "Username not matched";
            
        }
    }
    public function view(){
        $login = signlog::all();
        $data = compact('login');
        return view('admin')->with($data);
    }

    public function delete($id)
    {

        $customer = signlog::find($id);
      
        if (!is_null($customer)) {
           
            $customer->Deleted = '1';
            $customer->save();
        }
        return redirect()->back();
    }
}
