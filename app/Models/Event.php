<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    // all atributes can be mass assigned
    protected $guarded = [];

    public function organizer() {
        return $this->belongsTo(User::class, 'organizer_id');
    }
}
