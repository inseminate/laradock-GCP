<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\NotesSnapshotsController;
use App\Http\Controllers\VideosMusicController;

Route::get('/', [LandingController::class, 'showLandingPage']);

Route::get('/notes-snpashots', [NotesSnapshotsController::class, 'list']);

Route::get('/videos-music', [VideosMusicController::class, 'list']);