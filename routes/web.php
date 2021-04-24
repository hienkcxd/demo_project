<?php

    use App\Http\Controllers\admin\login\LoginController;
    use App\Http\Controllers\demo\demoController;
    use App\Http\Controllers\user\about\AboutController;
    use App\Http\Controllers\user\market\MarketController;
    use App\Http\Controllers\user\news\NewsController;
    use App\Http\Controllers\user\project\ProjectsController;
    use App\Http\Controllers\user\service\ServiceController;
    use Illuminate\Support\Facades\Route;

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

    //Route for user
    Route::prefix('chart')->group(function () {
        Route::get('/', [demoController::class, 'index']);
    });
    Route::get('/', function () {
        return view('homepage.homepage');
    })->name('homepage');

    Route::prefix('AboutUs')->group(function () {
        Route::get('/', [AboutController::class, 'index'])->name('aboutus');
    });

    Route::prefix('News')->group(function () {
        Route::get('/', [NewsController::class, 'index'])->name('news');
    });

    Route::prefix('Service')->group(function () {
        Route::get('/', [ServiceController::class, 'index'])->name('Service');
        Route::get('/detail', [ServiceController::class, 'detail'])->name('Service_detail');
    });

    Route::prefix('Market')->group(function () {
        Route::get('/', [MarketController::class, 'index'])->name('market');
    });

    Route::prefix('Project')->group(function ($para) {
        Route::get('/', [ProjectsController::class, 'index'])->name('pro');
        Route::get('/{ProDetailID}', [ProjectsController::class, 'projectDetail'])->name('project_detail');
    });

    //Route for admin
    Route::prefix('Login')->group(function () {
        Route::get('/', [LoginController::class, 'index'])->name('login');
    });
