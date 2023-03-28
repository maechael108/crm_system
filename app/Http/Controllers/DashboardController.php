<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Inertia\Inertia;

class DashboardController extends Controller
{
    public function index()
    {
        $model = Post::all(['id', 'title', 'created_at', 'updated_at']);
        return Inertia::render('Dashboard', ['model' =>$model]);
    }

    public function info()
    {
        return view('info');
    }
}
