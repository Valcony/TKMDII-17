<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Liaison extends Model
{
    protected $table = 'liaisons';
    public $timestamps = false; 
    protected $fillable = [];

    public function universities()
    {
        return $this->hasMany(University::class, 'liaison_id');
    }
}
