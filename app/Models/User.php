<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'address',
    ];

    public function getNameAttribute(): string
    {
        return $this->first_name.' '.$this->last_name;
    }
}
