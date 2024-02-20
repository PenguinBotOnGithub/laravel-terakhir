<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ExtracurricularsController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\StudentsController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/', function () {
    return redirect("/home");
})->middleware("guest");

Route::get('/hello', function () {
    return 'Hello, World!';
});

Route::get('/home', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::group(["prefix" => "/students"], function () {
    Route::get(
        '',
        [StudentsController::class, "index"]
    );

    Route::get(
        '/detail/{id}',
        [StudentsController::class, "detail"]
    );

    /* Route::get(
        '/add',
        [StudentsController::class, "add"]
    ); */

    Route::post(
        '/create',
        [StudentsController::class, "new"]
    );

    Route::delete(
        '/delete/{id}',
        [StudentsController::class, "destroy"]
    );

    /* Route::get(
        '/edit/{student}',
        [StudentsController::class, "edit"]
    ); */

    Route::post(
        '/modify/{id}',
        [StudentsController::class, "modify"]
    );
});

Route::group(["prefix" => "classes"], function () {
    Route::get(
        "",
        [KelasController::class, "index"]
    );

    /* Route::get(
        "/add",
        [KelasController::class, "add"]
    ); */

    Route::post(
        "/create",
        [KelasController::class, "create"]
    );

    Route::delete(
        "/delete/{kelas}",
        [KelasController::class, "destroy"]
    );

    /* Route::get(
        "/edit/{kelas}",
        [KelasController::class, "edit"]
    ); */

    Route::post(
        "/modify/{id}",
        [KelasController::class, "modify"]
    );

    Route::get(
        "/detail/{kelas}",
        [KelasController::class, "detail"]
    );
});

Route::get(
    '/about',
    function () {
        return view("about", [
            "title" => "About",
            "nama" => "Eureka Ahadyan Ilhamy",
            "kelas" => "11 PPLG-1",
            "foto" => "img/pfp.png"
        ]);
    }
);

Route::get(
    "/extracurricular",
    [ExtracurricularsController::class, "index"]
);

Route::get(
    "/login",
    [LoginController::class, "index"]
)->name("login")->middleware("guest");

Route::post(
    "/login",
    [LoginController::class, "auth"]
);

Route::post(
    "/logout",
    [LoginController::class, "deauth"]
);

Route::get(
    "/register",
    [RegisterController::class, "index"]
)->middleware("guest");

Route::post(
    "/register",
    [RegisterController::class, "new"]
);

Route::group(["prefix" => "/dashboard"], function () {
    Route::get(
        "/",
        [DashboardController::class, "index"]
    )->middleware("auth");

    Route::group(["prefix" => "/students"], function () {
        Route::get(
            '',
            [DashboardController::class, "index_students"]
        )->middleware("auth");

        Route::get(
            '/detail/{id}',
            [DashboardController::class, "detail_student"]
        )->middleware("auth");

        Route::get(
            '/add',
            [DashboardController::class, "add_student"]
        )->middleware("auth");

        /* Route::post(
            '/create',
            [StudentsController::class, "new"]
        )->middleware("auth"); */

        /* Route::delete(
            '/delete/{id}',
            [StudentsController::class, "destroy"]
        )->middleware("auth"); */

        Route::get(
            '/edit/{student}',
            [DashboardController::class, "edit_student"]
        )->middleware("auth");

        /* Route::post(
            '/modify/{id}',
            [StudentsController::class, "modify"]
        )->middleware("auth"); */
    });

    Route::group(["prefix" => "classes"], function () {
        Route::get(
            "",
            [DashboardController::class, "index_classes"]
        )->middleware("auth");

        Route::get(
            "/add",
            [DashboardController::class, "add_class"]
        )->middleware("auth");

        /* Route::post(
            "/create",
            [KelasController::class, "create"]
        )->middleware("auth"); */

        /* Route::delete(
            "/delete/{kelas}",
            [KelasController::class, "destroy"]
        )->middleware("auth"); */

        Route::get(
            "/edit/{kelas}",
            [DashboardController::class, "edit_class"]
        )->middleware("auth");

        /* Route::post(
            "/modify/{id}",
            [KelasController::class, "modify"]
        )->middleware("auth"); */

        Route::get(
            "/detail/{kelas}",
            [DashboardController::class, "detail_class"]
        )->middleware("auth");
    });
});
