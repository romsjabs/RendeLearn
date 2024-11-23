<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Validation extends Model
{
    use HasFactory;

    protected $fillable = ['front-id', 'back-id', 'selfie', 'id-number', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
