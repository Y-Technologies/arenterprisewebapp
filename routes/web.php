<?php

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

Auth::routes();

Route::get('/', 'PagesController@login');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');
Route::get('/client', 'PagesController@client');
Route::get('/agents', 'PagesController@agents');
//Route::get('/invoices', 'PagesController@invoices');

Route::resource('posts', 'PostsController');
Route::resource('client', 'ClientController');
Route::get('/client-list', 'ClientController@list');
Route::resource('agents', 'AgentsController');
Route::get('/agent-list', 'AgentsController@list');
//Route::resource('invoices', 'InvoicesController');
Route::resource('invoice', 'InvoiceController');
Route::get('/invoice/export/{id}', 'InvoiceController@exportPdf');
//Route::post('/invoice/test', 'InvoiceController@exportPdf');


Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/mdashboard', 'mDashboardController@index')->name('mdashboard');
Route::get('/client', 'ClientController@index')->name('client');
Route::get('/agents', 'AgentsController@index')->name('agents');
Route::get('/search', 'ClientController@search');
Route::resource('/product','ProductController');
Route::get('/product-list','ProductController@list')->name('product.list');
Route::get('/client/print-pdf', ['as' => 'client.printpdf', 'uses' => 'ClientController@printPDF']);
