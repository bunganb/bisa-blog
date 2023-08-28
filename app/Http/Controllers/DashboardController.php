<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            'posts' => Posts::count(),
            'authors' => User::count()
        ];
        return view('dashboard', $data);
    }
}
