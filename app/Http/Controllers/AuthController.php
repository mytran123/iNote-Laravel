<?php

namespace App\Http\Controllers;

use App\Http\Repository\AuthRepository;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    protected $AuthRepository;

    public function __construct(AuthRepository $authRepository)
    {
        $this->AuthRepository = $authRepository;
    }

    public function showFormLogin()
    {
        return view("backend.auth.login");
    }

    public function login(Request $request)
    {
        $request->validate([
           "email" => "required",
           "password" => "required"
        ]);
        $data = $request->only('email','password');
        if(Auth::attempt($data)){
            toastr()->success("Đăng nhập thành công");
            return redirect()->route('notes.list');
        }else{
//            session()->flash("message","Sai tài khoản");
            toastr()->error("Sai tài khoản");
            return redirect()->back();
        }
    }

    public function showFormRegister()
    {
        return view("backend.auth.register");
    }

    public function Register(Request $request)
    {
        $request->validate([
           "name" => "required",
           "email" => "required",
           "password" => "required"
        ]);
        $this->AuthRepository->Register($request);
        return redirect()->route("showFormLogin");
//
//        Session::flash("message","Đăng ký thành công");
//        return redirect()->route("showFormLogin");
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect()->route('login');
    }
}
