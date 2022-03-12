<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
 
class NotesSnapshots extends Model
{
    const     CREATED_AT  = 'created_date';
    protected $table      = 'notes_snapshots';
    protected $primaryKey = 'id';

    public function genre()
    {
        return $this->hasOne(Genre::class,"id","genre_id");
    }

    public function images()
    {
        return $this->hasMany(ImagesNotesSnapshots::class,"notes_snapshots_id","id");
    }
}