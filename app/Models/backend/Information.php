<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    use HasFactory;
    protected $fillable = [
        'refferal_name',
        'name',
        'mobile_number',
        'personal_email',
        'password',
        'platin_world_email',
        'platin_world_passowrd',
        'refferal_link',
        'account',
        'card',
    ];
}
