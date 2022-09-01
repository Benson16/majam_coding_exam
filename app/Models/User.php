<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $fillable = [
        'full_name',
        'email_address',
        'nominated_password',
        'confirmed_password',
        'assigned_role'
    ];
}
