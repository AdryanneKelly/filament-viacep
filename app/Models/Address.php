<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'postal_code',
        'address',
        'number',
        'complement',
        'neighborhood',
        'city',
        'uf',
    ];

    public function users()
    {
        return $this->hasOne(User::class);
    }
}
