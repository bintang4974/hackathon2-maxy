<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function speaker()
    {
        return $this->belongsTo(Speaker::class);
    }
}
