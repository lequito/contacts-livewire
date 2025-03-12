<?php

use App\Livewire\ConfirmDelete;
use App\Livewire\EditContacts;
use App\Livewire\MainComponent;
use Illuminate\Support\Facades\Route;

Route::get('/', MainComponent::class)->name('home');
Route::get('/contacts/{id}/delete', ConfirmDelete::class)->name('contacts.delete');
Route::get('/contacts/{id}/edit', EditContacts::class)->name('contacts.edit');
