<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    protected $userRepository;

    public function __construct(UserController $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function index()
    {
        $users = $this->userRepository->getAll();
        return view("backend.user.list", compact("users"));
    }

    public function store(Request $request)
    {
        $this->userRepository->create($request);
        return redirect()->route("users.list");
    }

    public function show($id)
    {
        $user = $this->userRepository->getById($id);
        return view("backend.user.liet", compact("user"));
    }
}
