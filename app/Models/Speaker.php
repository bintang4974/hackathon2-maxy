<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Speaker extends Model
{
    use HasFactory;
    protected $fillable = ['code', 'name', 'sosmed', 'photo'];

    public function positions()
    {
        return $this->hasMany(Position::class);
    }
    public function speaker()
    {
        return $this->belongsTo(Speaker::class);
    }
}
