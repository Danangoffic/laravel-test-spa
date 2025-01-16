<?php

namespace App\Http\Controllers;

use App\Models\User;
use Inertia\Inertia;

class DashboardController extends Controller
{
    public function index()
    {
        $userCount = User::count();

        return Inertia::render('DashboardMain', [
            'userCount' => $userCount,
        ]);
    }
}
