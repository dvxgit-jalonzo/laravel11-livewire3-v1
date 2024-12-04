<?php

use Illuminate\Support\Facades\Route;

Route::get('/users', \App\Livewire\User\Index\Page::class)->name('users.index');
