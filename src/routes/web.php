<?php

use App\Livewire\AllPosts;
use App\Livewire\Banners;
use App\Livewire\Contactos;
use App\Livewire\Directorio;
use App\Livewire\GestionSocial;
use App\Livewire\Pagos;
use App\Livewire\Plantilla;
use App\Livewire\Posts;
use App\Livewire\Tramites;
use App\Livewire\Transparencia;
use App\Livewire\ViewPost;
use App\Livewire\Tests;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view("/", "index");

Route::get("/plantilla", Plantilla::class)
    ->name("plantilla");

Route::get("/gestion-social", GestionSocial::class)
    ->name("gestion-social");

Route::get("/pagos", Pagos::class)
    ->name("pagos");

Route::get("/contacto", Directorio::class)
    ->name("contacto");

Route::get("/transparencia", Transparencia::class)
    ->name("transparencia");

Route::get("/all-posts", AllPosts::class)
    ->name("all-posts");

Route::get("/view-post/{id}", ViewPost::class)
    ->name("view-post");

Route::get("/tramite", Tramites::class)
    ->name("tramite");

Route::view("dashboard", Tests::class)
    ->middleware(["auth", "verified"])
    ->name("dashboard");

Route::get("banners", Banners::class)
    ->middleware(["auth", "verified"])
    ->name("banners");

Route::get("posts", Posts::class)
    ->middleware(["auth", "verified"])
    ->name("posts");

Route::get("contactos", Contactos::class)
    ->middleware(["auth", "verified"])
    ->name("contactos");

Route::view("profile", "profile")
    ->middleware(["auth"])
    ->name("profile");

Route::view("test", "test")
    ->name("test");

require __DIR__ . "/auth.php";
