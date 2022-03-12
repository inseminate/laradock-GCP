<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;

use App\Models\ImagesNotesSnapshots;

use App\Models\NotesSnapshots;

use App\Models\Genre;
 
class NotesSnapshotsController extends Controller
{
    public function list()
    {
        $NS = NotesSnapshots::orderBy("created_date","DESC")->paginate(9);

        return view("notes-snapshots.list")->with("NS",$NS);
    }
}