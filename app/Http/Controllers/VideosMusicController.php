<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;
 
class VideosMusicController extends Controller
{
    public function list()
    {
        return view("videos-music.list");
    }
}