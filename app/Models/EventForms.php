<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventForms extends Model
{
    use HasFactory;
    protected $fillable = ['questions', 'events_id', 'user_id'];

    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }
    public function eventforms()
    {
        return $this->belongsTo(Event::class,'events_id');
    }
}
