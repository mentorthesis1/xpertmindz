<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class workshop extends Model
{
    use HasFactory;
    protected $fillable=[
        'institution_name',
        'email',
        'phone',
        'workshop_topic',
        'workshop_date',
        'workshop_place'
    ];
}
