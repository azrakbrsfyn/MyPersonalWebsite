<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home.index');

// Portfolio Routes 
Route::get('/portfolio', 'App\Http\Controllers\PortfolioController@index')->name('portfolio.index');
Route::get('/portfolio/instagram-feeds', 'App\Http\Controllers\PortfolioController@instagramFeeds')->name('portfolio.instagram-feeds');
Route::get('/portfolio/instagram-feeds/{id}', 'App\Http\Controllers\PortfolioController@instagramFeedsDetail')->name('portfolio.instagram-feeds-detail');
Route::get('/portfolio/typography', 'App\Http\Controllers\PortfolioController@typography')->name('portfolio.typography');
Route::get('/portfolio/typography/{id}', 'App\Http\Controllers\PortfolioController@typographyDetail')->name('portfolio.typography-detail');
Route::get('/portfolio/poster-design', 'App\Http\Controllers\PortfolioController@posterDesign')->name('portfolio.poster-design');
Route::get('/portfolio/poster-design/{id}', 'App\Http\Controllers\PortfolioController@posterDesignDetail')->name('portfolio.poster-design-detail');
Route::get('/portfolio/banner-flyers-design', 'App\Http\Controllers\PortfolioController@bannerFlyersDesign')->name('portfolio.banner-flyers-design');
Route::get('/portfolio/banner-flyers-design/{id}', 'App\Http\Controllers\PortfolioController@bannerFlyersDesignDetail')->name('portfolio.banner-flyers-design-detail');
Route::get('/portfolio/photography', 'App\Http\Controllers\PortfolioController@photography')->name('portfolio.photography');
Route::get('/portfolio/photography/{id}', 'App\Http\Controllers\PortfolioController@photographyDetail')->name('portfolio.photography-detail');

// Portfolio Routes

// About Route
Route::get('/about', 'App\Http\Controllers\AboutController@index')->name('about.index');


Route::middleware('admin')->group(function () {

    // Admin Routes
    Route::get('/admin', 'App\Http\Controllers\Admin\AdminHomeController@index')->name('admin.home.index');
    Route::get('/admin/instagram-feeds', 'App\Http\Controllers\Admin\AdminInstagramController@index')->name('admin.instagram.index');
    Route::get('/admin/typography', 'App\Http\Controllers\Admin\AdminTypographyController@index')->name('admin.typography.index');
    Route::get('/admin/poster', 'App\Http\Controllers\Admin\AdminPosterController@index')->name('admin.poster.index');
    Route::get('/admin/banner-flyers', 'App\Http\Controllers\Admin\AdminBannerController@index')->name('admin.banner-flyers.index');
    Route::get('/admin/photography', 'App\Http\Controllers\Admin\AdminPhotographyController@index')->name('admin.photography.index');

    // Admin Routes --- Create Routes ---//
    Route::post('/admin/instagram-feeds/store', 'App\Http\Controllers\Admin\AdminInstagramController@store')->name('admin.instagram.store');
    Route::post('/admin/typography/store', 'App\Http\Controllers\Admin\AdminTypographyController@store')->name('admin.typography.store');
    Route::post('/admin/poster/store', 'App\Http\Controllers\Admin\AdminPosterController@store')->name('admin.poster.store');
    Route::post('/admin/banner-flyers/store', 'App\Http\Controllers\Admin\AdminBannerController@store')->name('admin.banner-flyers.store');
    Route::post('/admin/photography/store', 'App\Http\Controllers\Admin\AdminPhotographyController@store')->name('admin.photography.store');


    // Admin Routes --- Delete ---//
    Route::delete('/admin/instagram-feeds/{id}/delete', 'App\Http\Controllers\Admin\AdminInstagramController@delete')->name('admin.instagram.delete');
    Route::delete('/admin/typography/{id}/delete', 'App\Http\Controllers\Admin\AdminTypographyController@delete')->name('admin.typography.delete');
    Route::delete('/admin/poster/{id}/delete', 'App\Http\Controllers\Admin\AdminPosterController@delete')->name('admin.poster.delete');
    Route::delete('/admin/banner-flyers/{id}/delete', 'App\Http\Controllers\Admin\AdminBannerController@delete')->name('admin.banner-flyers.delete');
    Route::delete('/admin/photography/{id}/delete', 'App\Http\Controllers\Admin\AdminPhotographyController@delete')->name('admin.photography.delete');



    // Admin Routes --- Edit ---//
    Route::get('/admin/instagram-feeds/{id}/edit', 'App\Http\Controllers\Admin\AdminInstagramController@edit')->name('admin.instagram.edit');
    Route::get('/admin/typography/{id}/edit', 'App\Http\Controllers\Admin\AdminTypographyController@edit')->name('admin.typography.edit');
    Route::get('/admin/poster/{id}/edit', 'App\Http\Controllers\Admin\AdminPosterController@edit')->name('admin.poster.edit');
    Route::get('/admin/banner-flyers/{id}/edit', 'App\Http\Controllers\Admin\AdminBannerController@edit')->name('admin.banner-flyers.edit');
    Route::get('/admin/photography/{id}/edit', 'App\Http\Controllers\Admin\AdminPhotographyController@edit')->name('admin.photography.edit');



    // Admin Routes --- Update ---//
    Route::put('/admin/instagram-feeds/{id}/update', 'App\Http\Controllers\Admin\AdminInstagramController@update')->name('admin.instagram.update');
    Route::put('/admin/typography/{id}/update', 'App\Http\Controllers\Admin\AdminTypographyController@update')->name('admin.typography.update');
    Route::put('/admin/poster/{id}/update', 'App\Http\Controllers\Admin\AdminPosterController@update')->name('admin.poster.update');
    Route::put('/admin/banner-flyers/{id}/update', 'App\Http\Controllers\Admin\AdminBannerController@update')->name('admin.banner-flyers.update');
    Route::put('/admin/photography/{id}/update', 'App\Http\Controllers\Admin\AdminPhotographyController@update')->name('admin.photography.update');
});

Auth::routes(['register' => false]);
