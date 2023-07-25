<?php

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
Route::get('/', 'App\Http\Controllers\HomeController@index')->name('pages.home');

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('pages.home');

Route::get('/about', 'App\Http\Controllers\AboutController')->name('pages.about');

Route::get('/sitemap', 'App\Http\Controllers\SitemapController')->name('pages.sitemap');

Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::get('/admin', 'App\Http\Controllers\Admin\IndexController')->name('admin.index');

    Route::get('/admin/courses', 'App\Http\Controllers\Admin\CoursesController')->name('admin.courses');

    Route::get('/admin/tests', 'App\Http\Controllers\Admin\TestsController')->name('admin.test');

    Route::get('/admin/tasks', 'App\Http\Controllers\Admin\TasksController')->name('admin.tasks');

    Route::get('/admin/chart', 'App\Http\Controllers\Admin\ChartController')->name('admin.chart');

    Route::get('/admin/users', 'App\Http\Controllers\Admin\UserController')->name('admin.users');

    Route::get('/admin/news_search', 'App\Http\Controllers\Admin\Search\NewsController')->name('admin.search.news');

    Route::get('/admin/courses_search', 'App\Http\Controllers\Admin\Search\CoursesController')->name('admin.search.courses');

    Route::get('/admin/tests_search', 'App\Http\Controllers\Admin\Search\TestsController')->name('admin.tests.search');

    Route::get('/admin/tasks_search', 'App\Http\Controllers\Admin\Search\TasksController')->name('admin.tasks.search');

    Route::patch('/admin/users/{user}', 'App\Http\Controllers\User\UpdateController')->name('users.update');

    Route::get('/admin/news/create', 'App\Http\Controllers\News\CreateController')->name('news.create');

    Route::get('/admin/news/{news}/edit', 'App\Http\Controllers\News\EditController')->name('news.edit');

    Route::patch('/admin/news/{news}', 'App\Http\Controllers\News\UpdateController')->name('news.update');

    Route::delete('/admin/news/{news}', 'App\Http\Controllers\News\DestroyController')->name('news.destroy');

    Route::get('/admin/courses/create', 'App\Http\Controllers\Courses\CreateController')->name('courses.create');

    Route::get('/admin/courses/{course}/edit', 'App\Http\Controllers\Courses\EditController')->name('courses.edit');

    Route::patch('/admin/courses/{course}', 'App\Http\Controllers\Courses\UpdateController')->name('courses.update');

    Route::delete('/admin/courses/{course}', 'App\Http\Controllers\Courses\DestroyController')->name('courses.destroy');

    Route::get('/admin/tests/create', 'App\Http\Controllers\Tests\CreateController')->name('tests.create');

    Route::get('/admin/tests/{test}/edit', 'App\Http\Controllers\Tests\EditController')->name('tests.edit');


    Route::delete('/admin/tests/{test}', 'App\Http\Controllers\Tests\DestroyController')->name('tests.destroy');

    Route::get('/admin/tasks/create', 'App\Http\Controllers\Tasks\CreateController')->name('tasks.create');

    Route::get('/admin/tasks/{tasks}/edit', 'App\Http\Controllers\Tasks\EditController')->name('tasks.edit');

    Route::patch('/admin/tasks/{tasks}', 'App\Http\Controllers\Tasks\UpdateController')->name('tasks.update');

    Route::delete('/admin/tasks/{tasks}', 'App\Http\Controllers\Tasks\DestroyController')->name('tasks.destroy');

    Route::delete('/news/reviews/{reviews}', 'App\Http\Controllers\Reviews\News\DestroyController')->name('reviews.news.destroy');
});

Route::group(['middleware' => 'user'], function () {
    Route::get('personal', 'App\Http\Controllers\Personal\IndexController')->name('personal.index');

    Route::get('/personal/chart', 'App\Http\Controllers\Personal\ChartController')->name('personal.chart');

    Route::patch('/personal/{tasks}', 'App\Http\Controllers\Personal\UpdateController')->name('user.update');
});

Route::group(['middleware' => 'auth'], function () {
//Review

    Route::post('/reviews/news/store', 'App\Http\Controllers\Reviews\News\StoreController')->name('reviews.news.store');

    Route::post('/reviews/courses/store', 'App\Http\Controllers\Reviews\Courses\StoreController')->name('reviews.courses.store');

    Route::post('/reviews/tests/store', 'App\Http\Controllers\Reviews\Tests\StoreController')->name('reviews.tests.store');

    Route::delete('/reviews/{reviews}', 'App\Http\Controllers\Reviews\DestroyController')->name('reviews.destroy');

//Courses

    Route::get('/courses/{course}', 'App\Http\Controllers\Courses\ShowController')->name('courses.show');

    Route::get('/courses', 'App\Http\Controllers\Courses\IndexController')->name('courses.index');

    Route::post('/courses', 'App\Http\Controllers\Courses\StoreController')->name('courses.store');

    Route::get('/courses_search', 'App\Http\Controllers\Courses\SearchController')->name('courses.search');

//Tests

    Route::get('/tests', 'App\Http\Controllers\Tests\IndexController')->name('tests.index');

    Route::post('/tests', 'App\Http\Controllers\Tests\StoreController')->name('tests.store');

    Route::patch('/admin/tests/{test}', 'App\Http\Controllers\Tests\UpdateController')->name('tests.update');

    Route::get('/tests/{test}', 'App\Http\Controllers\Tests\ShowController')->name('tests.show');

    Route::get('/tests_search', 'App\Http\Controllers\Tests\SearchController')->name('tests.search');

//Tasks

    Route::get('/tasks', 'App\Http\Controllers\Tasks\IndexController')->name('tasks.index');

    Route::post('/tasks', 'App\Http\Controllers\Tasks\StoreController')->name('tasks.store');

    Route::get('/tasks/{tasks}', 'App\Http\Controllers\Tasks\ShowController')->name('tasks.show');

    Route::patch('/tasks/{tasks}', 'App\Http\Controllers\Tasks\UpdateController')->name('tasks.update');

    Route::get('/tasks_search', 'App\Http\Controllers\Tasks\SearchController')->name('tasks.search');
});

//News

Route::get('/news', 'App\Http\Controllers\News\IndexController')->name('news.index');

Route::post('/news', 'App\Http\Controllers\News\StoreController')->name('news.store');

Route::get('/news/{news}', 'App\Http\Controllers\News\ShowController')->name('news.show');

Route::get('/news_search', 'App\Http\Controllers\News\SearchController')->name('news.search');

//Intensive

/*Route::get('/intensive', 'App\Http\Controllers\Intensive\IndexController')->name('intensive.index');

Route::get('/intensive/create', 'App\Http\Controllers\Intensive\CreateController')->name('intensive.create');

Route::post('/intensive', 'App\Http\Controllers\Intensive\StoreController')->name('intensive.store');

Route::get('/intensive/{intensive}', 'App\Http\Controllers\Intensive\ShowController')->name('intensive.show');

Route::get('/intensive/{intensive}/edit', 'App\Http\Controllers\Intensive\EditController')->name('intensive.edit');

Route::patch('/intensive/{intensive}', 'App\Http\Controllers\Intensive\UpdateController')->name('intensive.update');

Route::delete('/intensive/{intensive}', 'App\Http\Controllers\Intensive\DestroyController')->name('intensive.destroy');

Route::get('/intensive_search', 'App\Http\Controllers\Intensive\SearchController')->name('intensive.search');*/
Auth::routes();
