<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    use HasFactory;
    protected $fillable = ['event_name', 'event_name', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function eventforms()
    {
        return $this->hasMany(EventForm::class);
    }
}
