<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\DiscordNotification;
use App\Http\Controllers\MailController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

//main routes
Route::get('/', function () {
    return view('main.home');
})->name('home');

Route::get('/project', [ProjectController::class, 'index'])->name('project');

Route::get('/blog', [BlogController::class, 'index'])->name('blog');

Route::get('/about', function () {
    return view('main.about');
})->name('about');

Route::get('/contact', function () {
    return view('main.contact');
})->name('contact');


Route::get('notification', [DiscordNotification::class, 'notification'] );
//client routes
Route::get('/client/dashboard', function () {
    return view('client.dashboard');
})->middleware(['auth', 'verified'])->name('client.dashboard');

Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])
    ->middleware(['auth', 'admin'])
    ->name('admin.dashboard');

//admin routes

Route::middleware(['auth', 'admin'])->group(function(){
    Route::get('/admin/blog', [BlogController::class, 'adminIndex'])->name('admin.blog.index');
    Route::get('/admin/blog/create', [BlogController::class, 'create'])->name('admin.blog.create');
    Route::post('/admin/blog', [BlogController::class, 'store'])->name('admin.blog.store');
    Route::get('/admin/blog/{blog}', [BlogController::class, 'adminShow'])->name('admin.blog.show');
    Route::get('/admin/blog/{blog}/edit', [BlogController::class, 'edit'])->name('admin.blog.edit');
    Route::put('/admin/blog/{blog}', [BlogController::class, 'update'])->name('admin.blog.update');
    Route::delete('/admin/blog/{blog}', [BlogController::class, 'destroy'])->name('admin.blog.destroy');

    Route::get('/admin/projects', [ProjectController::class, 'adminIndex'])->name('admin.projects.index');
    Route::get('/admin/projects/create', [ProjectController::class, 'create'])->name('admin.projects.create');
    Route::post('/admin/projects', [ProjectController::class, 'store'])->name('admin.projects.store');
    Route::get('/admin/projects/{project}', [ProjectController::class, 'adminShow'])->name('admin.projects.show');
    Route::get('/admin/projects/{project}/edit', [ProjectController::class, 'edit'])->name('admin.projects.edit');
    Route::put('/admin/projects/{project}', [ProjectController::class, 'update'])->name('admin.projects.update');
    Route::delete('/admin/projects/{project}', [ProjectController::class, 'destroy'])->name('admin.projects.destroy');


});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// controllers
Route::post('/send-mail', [MailController::class, 'sendMail'])->name('send.mail');

// API: lijst met components
Route::get('/api/components', function () {

    $path = storage_path('app/api/components.json');

    if (!file_exists($path)) {
        return response()->json([
            'error' => 'components.json not found',
            'path' => $path
        ], 404);
    }

    return response()->file($path, [
        'Content-Type' => 'application/json'
    ]);

})->name('api.components');


// API: individuele component info
Route::get('/api/components/{name}', function ($name) {

    $json = Storage::get('api/components.json');
    $data = json_decode($json, true);

    foreach ($data['components'] as $component) {

        if ($component['name'] === $name) {
            return response()->json($component);
        }

    }

    return response()->json([
        'error' => 'Component not found'
    ], 404);

})->name('api.component.show');

require __DIR__.'/auth.php';
