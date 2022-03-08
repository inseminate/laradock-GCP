<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;
 
class LandingController extends Controller
{
    public function showLandingPage()
    {
        
        return view("landing.welcome");
    }
}