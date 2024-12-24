<?php

use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

/**
 * @return void
 * @throws \Illuminate\Contracts\Container\BindingResolutionException
 */
function cacheUse(): void
{
    /** @var \Illuminate\Cache\CacheManager $cache */
    $cache = app()->make('cache');
    $cache->put('test', 123);

//    dd($cache->get('test','default'));
    dd(app('cache'));
}


//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/test', [HomeController::class, 'test'])->name('home.test');
Route::get('/contact', [HomeController::class, 'contact'])->name('home.contact');
Route::get('/single', \App\Http\Controllers\TestController::class);
Route::get('/main', [MainController::class, 'index']);


Route::prefix('admin')->group(function () {
    Route::get('/products', [ProductController::class, 'index'])->name('admin.products.index');
    Route::get('/products/create', [ProductController::class, 'create'])->name('admin.products.create');
    Route::post('/products', [ProductController::class, 'store'])->name('admin.products.store')->withoutMiddleware(\Illuminate\Foundation\Http\Middleware\VerifyCsrfToken::class);
    Route::get('/products/{product}', [ProductController::class, 'show'])->name('admin.products.show')->where(['product' => '[0-9]+']);
    Route::match(['put', 'patch'], '/products/{product}/edit', [ProductController::class, 'edit'])->name('admin.products.edit')->withoutMiddleware(\Illuminate\Foundation\Http\Middleware\VerifyCsrfToken::class);
    Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('admin.products.destroy')->where(['product' => '[0-9]+']);

    Route::resource('posts',\App\Http\Controllers\Admin\PostController::class)->except(['create','store','edit','update','destroy']);
//    Route::resource('posts',\App\Http\Controllers\Admin\PostController::class)->only(['index','show']);

});




Route::fallback(function () {
    $content = "Route isn't found;\n404-Page not found";
    $status = 404;
    abort($status, $content);
    return response()->json([$content, $status]);
    return response($content, $status);

});



//Route::get('/hi', function () {
//    return view('test.hi', ['title' => 'Main page', 'h2' => 'welcome to main page']);
//});


//Route::view('/', 'test.hi', ['title' => 'Main page', 'h2' => 'welcome to main page']);

//Route::get('/posts/{id?}/comments/{comment}', function ($id,$comment_id) {
//    return "Posts page with id: $id\nComment with id:$comment_id";
//});
//
//Route::get('/posts/{id}', function ($id) {
//    return "Posts page with id: $id\n";
//})->where(['id' => '[0-9]+']);
//
//Route::get('/posts/contact', function () {
//    return "Posts page with contant";
//});
//Route::get('/posts/{slug}', function ($slug) {
//    return "Posts page with slug: $slug\n";
//})->where(['slug' => '[A-Za-z-0-9-]+']);
//
//Route::get('/search/{search}', function ($search) {
//    return "Searching: $search";
//})->where(['search' => '.*']);
//
//Route::get('/posts', function () {
//    return 'get post';
//});
//
//Route::post('/posts', function () {
//    return 'Store post';
//});
//Route::post('/post', function () {
//    return 'Store post';
//})->withoutMiddleware(\Illuminate\Foundation\Http\Middleware\VerifyCsrfToken::class);
//
//Route::match(['get', 'post'], '/get-post', function () {
//    return 'hello from get-post';
//})->withoutMiddleware(\Illuminate\Foundation\Http\Middleware\VerifyCsrfToken::class);
//Route::any('/any', function () {
//    return 'hello from any methods ';
//})->withoutMiddleware(\Illuminate\Foundation\Http\Middleware\VerifyCsrfToken::class);
//Route::redirect('{anyExceptRoot}','/')->where('anyExceptRoot','[^/]*');

