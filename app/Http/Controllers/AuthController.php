<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index(){
        return view('login');
    }

    public function login(Request $req){
        if(!Auth::attempt(['email' => $req->email, 'password' => $req->password])){
            return response()->json([
                'success' => false,
                'message' => 'Email / Password yang anda masukkan salah!'
            ]);
        }else{
            $user = Auth::user();
            return response()->json([
                'success' => true,
                'message' => 'Login Berhasil',
                'user' => $user,
                'redirect' => 'administrator'
            ]);
        }
    }

    public function register(){
        $data['role'] = DB::select("SELECT * FROM role");
        return view('register', $data);
    }

    public function postRegister(Request $req){
       User::create([
        'first_name' => $req->first_name,
        'last_name' => $req->last_name,
        'address' => $req->address,
        'phone_number' => $req->phone_number,
        'email' => $req->email,
        'password' => Hash::make($req->password),
        'id_role' => $req->role
       ]);
       return redirect('/');
    }

    public function logout()
    {
        auth()->logout();
        session()->flash('message','You Have Been Logged Out');
        return redirect('');
    }
}
