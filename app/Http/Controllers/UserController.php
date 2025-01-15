<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Inertia\Inertia;

class UserController extends Controller
{
    public function index(){
        return Inertia::render('Users/Index');
    }

    public function create()
    {
        return Inertia::render('Users/Create');
    }

    public function store(Request $request)
    {
        Log::info("store user with ", $request->all());
        try {
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'address' => 'required|string',
                'nomor_ktp' => 'required|string|size:16|unique:users',
            ]);

            $ktp = $request->nomor_ktp;
            $gender = substr($ktp, 6, 1) > 3 ? 'Female' : 'Male';
            $birthdateFull = substr($ktp, 6, 6);
            $day = (int) substr($birthdateFull, 0, 2);
            $day = $day > 40 ? $day - 40 : $day;
            $birthdate = '19' . substr($birthdateFull, 4, 2) . '-' . substr($birthdateFull, 2, 2) . '-' . sprintf('%02d', $day);

            Log::info("gender to store : " . $gender);
            Log::info('birthdate to store : ' . $birthdate);
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'address' => $request->address,
                'nomor_ktp' => $request->nomor_ktp,
                'gender' => $gender,
                'birthdate' => $birthdate,
            ]);
            Log::info("Success create user, redirecting to users index");
            return to_route('users.index');
        } catch (\Throwable $th) {
            Log::error("Failed to store user due to " . $th->getMessage(), ['throwable' => $th]);
        }
    }

    public function login(){
        return Inertia::render('Users/Login');
    }

    public function loginPost(Request $request){
        sleep(2);
        return to_route('users.login');
    }
}

//3404070905950007
// 7201044707960005
