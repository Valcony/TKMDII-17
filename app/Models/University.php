<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    protected $table = 'universities';
    public $timestamps = false;
    protected $fillable = []; 

    public function officer()
    {
        return $this->belongsTo(Liaison::class, 'liaison_id');
    }
}
