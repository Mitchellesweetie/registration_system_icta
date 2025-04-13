<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientResponse extends Model
{
    use HasFactory;
    protected $fillable = ['answer', 'event_forms_id'];

    public function events()
    {
        return $this->belongsTo(Events::class);
    }
    public function eventforms()
    {
        return $this->hasMany(EventForm::class);
    }
}
