<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'code', 'title', 'desc', 'location', 'price', 'photo',
    ];

    public function agendas()
    {
        return $this->hasMany(Agenda::class);
    }
}
