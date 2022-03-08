<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;
 
class NotesSnapshotsController extends Controller
{
    public function list()
    {
        
        return view("notes-snapshots.list");
    }

}