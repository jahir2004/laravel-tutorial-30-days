<?php

use Illuminate\Support\Facades\Route;
use App\Models\job;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/jobs', function (){
    return view('jobs', [ 
        'jobs' => Job::all()
        ]);
});

Route::get('/jobs/{id}', function ($id){ 
       $job = job::find($id);

       if (! $job) {
            abort(404);
        }

     return view('job', ['job' => $job],);
});


Route::get('/contact', function () {
    return view('contact');
});

Route::get('/products', function () {
    return view('products');
});

Route::get('/kikker', function () {
    return view('kikker');
});