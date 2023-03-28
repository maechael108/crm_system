<?php

use App\Http\Controllers\JobPostingController;
use App\Http\Controllers\ProfileController;
use App\Models\JobPosting;
use App\Models\Post;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    $model = Post::all(['id', 'title', 'created_at', 'updated_at']);
    return Inertia::render('Dashboard', ['model' =>$model]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/info', function () {
    $model = (new Post)->getAllPosts();
    return view('info', ['model' => $model]);
});

Route::get('/job_posting', [JobPostingController::class, 'index'])->name('job_posting.index');
Route::get('/admin', function(){
    return view('admin');
});

require __DIR__.'/auth.php';
