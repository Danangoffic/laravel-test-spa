<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function getData(Request $request)
    {
        Log::info("get user data with filter ", ['request' => $request->all()]);
        $query = User::query();
        // Sorting  
        if ($request->filled('sort') && $request->filled('order')) {  
            $query->orderBy($request->sort, $request->order);  
        }  else{
            $query->orderBy('id', 'desc');
        }
  
        // Filtering  
        if ($request->filled('name')) {  
            $query->where('name', 'like', '%' . $request->name . '%');  
        }  
        if ($request->filled('email')) {  
            $query->where('email', 'like', '%' . $request->email . '%');  
        }  
        if ($request->filled('nomor_ktp')) {  
            $query->where('nomor_ktp', 'like', '%' . $request->nomor_ktp . '%');
        }  
        if ($request->filled('gender')) {  
            $query->where('gender', $request->gender);  
        }  
        if ($request->filled('birthdate')) {  
            $query->where('birthdate', $request->birthdate);  
        }  
        // Pagination
        $users = $query->paginate($request->per_page ?? 10);
        Log::info("successfully get user data");
        return response()->json($users);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'address' => 'required|string',
            'nomor_ktp' => 'required|string|unique:users',
        ]);

        $ktp = $request->nomor_ktp;
        $gender = substr($ktp, 6, 1) % 2 == 0 ? 'Female' : 'Male';
        $birthdate = '19' . substr($ktp, 0, 2) . '-' . substr($ktp, 2, 2) . '-' . substr($ktp, 4, 2);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'nomor_ktp' => $request->nomor_ktp,
            'gender' => $gender,
            'birthdate' => $birthdate,
        ]);
        return response()->json(['status' => 'success']);
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
